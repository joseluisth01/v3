<?php

namespace App\Controller;

use App\Library\PhpClassGen;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Annotation\Route;

class ToolsController extends BaseController
{
    /** @Route("/tools", name="tools") */
    public function index(KernelInterface $appKernel): Response
    {
        if (!$appKernel->isDebug()) {
            return $this->redirectToRoute('home');
        }

        $data = ['tablas' => PhpClassGen::getTableNames()];

        return $this->render('tools/index-tools.html.twig', $data);
    }

    /** @Route("/tools/get-php/{tableName}", name="tools-get-php") */
    public function getPhpCode(string $tableName, KernelInterface $appKernel): Response
    {
        if (!$appKernel->isDebug()) {
            return $this->redirectToRoute('home');
        }

        $projectRoot = $this->getParameter('kernel.project_dir');
        $gen = new PhpClassGen();

        return new Response($gen->getPhpCode($tableName, $projectRoot));
    }
}
