<?php

namespace App\Library;

use App\Service\ConfigService;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class Email
{
    public PHPMailer $mail;
    protected array $attachments = [];
    protected bool $clearAttachments = true;

    protected bool $smtpOk = false;

    /** @var ConfigService */
    protected ConfigService $config;

    public function __construct(ConfigService $config)
    {
        $this->config = $config;

        $cfgSMTP = $this->config->smtpConfig();

        $this->smtpOk = $this->config->smtpOk();

        $this->mail = new PHPMailer(true);

        if ($this->smtpOk) {
            $this->mail->CharSet = 'utf-8';
            $this->mail->SMTPAutoTLS = false;
            $this->mail->isSMTP();
            $this->mail->isHTML();
            $this->mail->Host = $cfgSMTP->host;
            $this->mail->Port = $cfgSMTP->port;
            $this->mail->Username = $cfgSMTP->user;
            if (!empty($cfgSMTP->pwd)) {
                $this->mail->Password = $cfgSMTP->pwd;
                $this->mail->SMTPAuth = true;
                $this->mail->SMTPSecure = $cfgSMTP->ssl ? 'tls' : '';
            }

            if (!empty($cfgSMTP->mail)) {
                try {
                    $this->mail->setFrom($cfgSMTP->mail, $cfgSMTP->name);
                } catch (Exception $e) {
                }
            }
        }
    }

    public function __destruct()
    {
        if ($this->clearAttachments) {
            foreach ($this->attachments as $file) {
                if (file_exists($file)) {
                    unlink($file);
                }
            }
        }
    }

    public function addBCC($email, $name)
    {
        if (!empty($email)) {
            try {
                $this->mail->addBCC($email, $name);
            } catch (\Exception $e) {
            }
        }
    }

    public function makeHtmlBody($texto): string
    {
        return <<<EOT
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Actis eMail</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin:10px; padding:5px; font-family:Arial,sans-serif; font-size:14px;">$texto</body>
</html>
EOT;
    }

    public function send($subject, $body, $emails, $emailBCC = ""): bool
    {
        if (!$this->smtpOk) {
            $this->writeLog('Email no configurado');

            return false;
        }

        if ($_ENV['APP_ENV'] === 'dev') {
            try {
                $this->mail->addAddress('produccion@tictac-comunicacion.es');
            } catch (\Exception $e) {
            }
            $body .= '<hr><br>Destinatarios: '.implode('; ', is_array($emails) ? $emails : [$emails]);
            if (!empty($emailBCC)) {
                $body.= "<br>BCC: $emailBCC";
            }
        } else {
            if (empty($emails)) {
                return false;
            }

            try {
                if (is_array($emails)) {
                    foreach (array_unique($emails) as $email) {
                        $this->mail->addAddress($email);
                    }
                } else {
                    $this->mail->addAddress($emails);
                }
            } catch (\Exception $e) {
            }

            $this->addBCC($emailBCC, '');
        }

        $body = $this->makeHtmlBody($body);

        $this->mail->Subject = $subject;
        try {
            $this->mail->msgHTML($body);

            foreach ($this->attachments as $file) {
                $this->mail->addAttachment($file);
            }
        } catch (\Exception $e) {
        }

        $ok = true;

        try {
            if (!$this->mail->send()) {
                $this->writeLog($this->mail->ErrorInfo);
                $ok = false;
            }
        } catch (Exception $err) {
            $this->writeLog($err->getMessage());
            $ok = false;
        } finally {
            $this->mail->clearAllRecipients();
        }

        return $ok;
    }

    private function writeLog($text)
    {
        $logFileName = $this->config->getProjectDir().'/var/log/email.log';
        $flag = file_exists($logFileName) ? FILE_APPEND : 0;
        $info = date('Y-m-d H:i:s').' ERROR: '.$text.PHP_EOL;
        file_put_contents($logFileName, $info, $flag);
    }
}
