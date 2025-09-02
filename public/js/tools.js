/* global $, dayjs */
'use strict';

let T = {
    /**
     * Contiene la ruta base de la aplicación
     */
    urlBase: null,
    /**
     * Crea una URL en base a la página actual.
     * Concatena los parámetros recibidos con '/' y genera una ruta absoluta.
     * @returns {string} URL generada.
     */
    path: function () {
        let rutaDestino,
            args = [],
            argsTmp = Array.prototype.slice.call(arguments);
        for (let i = 0; i < argsTmp.length; i++) {
            if (!T.stringEmpty(argsTmp[i])) {
                args.push(argsTmp[i].toString().replace(/^\/|\/$/g, ''));
            }
        }

        rutaDestino = args.join('/');
        if (rutaDestino.indexOf('http') === 0) {
            return rutaDestino;
        }
        if (T.urlBase !== null) {
            return T.urlBase + rutaDestino;
        }

        let url = window.location.protocol + '//' + window.location.host;
        if (window.location.port) {
            url += ':' + window.location.port;
        }

        let pathArray = window.location.pathname.split('/');
        if (pathArray.length > 1) {
            url += '/' + pathArray[1];
        }

        return url + '/' + rutaDestino;
    },
    /**
     * Tamaño máximo del fichero que permitimos para subir
     */
    maxFileSizeUpload: 20480,
    /**
     * Convierte un número de bytes a un formato más legible
     */
    humanSize: function (bytes) {
        let i = Math.floor(Math.log(bytes) / Math.log(1024)),
            sizes = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
        return (bytes / Math.pow(1024, i)).toFixed(2) * 1 + ' ' + sizes[i];
    },
    fileInput: function (fileSelector, msgSelector, options) {
        let msgMaxBytes = '<small>Tamaño máximo: ' + T.humanSize(T.maxFileSizeUpload * 1024) + '</small>',
            inputCfg = { showUpload: false, showPreview: false, theme: 'mdi', browseClass: 'btn btn-primary pb-0' };
        $.extend(inputCfg, options || {});
        $(fileSelector).fileinput(inputCfg);
        if (msgSelector) {
            $(msgSelector).html(msgMaxBytes);
            $(fileSelector)
                .on('fileerror', function (event, data, msg) {
                    $(msgSelector).html('<small class="text-white bg-danger p-1">' + msg + '</small>');
                })
                .on('fileclear', function () {
                    $(msgSelector).html(msgMaxBytes);
                });
        }
    },
    /*
     * Sitúa el cursor al final del elemento (input HTML)
     * @param {object} el Selector del elemento
     */
    moveCursorToEnd: function (el) {
        if (typeof el.selectionStart === 'number') {
            el.selectionStart = el.selectionEnd = el.value.length;
        } else if (typeof el.createTextRange !== 'undefined') {
            el.focus();
            let range = el.createTextRange();
            range.collapse(false);
            range.select();
        }
    },
    preventDefault: function (e) {
        e && e.preventDefault && e.preventDefault();
    },
    stripHtml: function (html) {
        let doc = new DOMParser().parseFromString(html, 'text/html');
        return doc.body.textContent || '';
    },
    round: function (value, numDec) {
        numDec = typeof numDec == 'undefined' ? 2 : numDec;
        let mult = Math.pow(10, numDec);
        return Math.round((value || 0) * mult) / mult;
    },
    numToStringFromSql: function (value, numDec) {
        if (T.toInt(numDec) === 0) {
            numDec = 2;
        }
        return T.numToString(value, numDec, false);
    },
    numToString: function (value, numDec, emptyIfZero) {
        let floatVal = T.toFloat(value);
        numDec = typeof numDec == 'undefined' ? 2 : numDec;
        emptyIfZero = emptyIfZero || false;

        if (emptyIfZero && floatVal === 0) {
            return '';
        }

        const options = { minimumFractionDigits: numDec, maximumFractionDigits: numDec };
        return new Intl.NumberFormat('de-DE', options).format(floatVal);
    },
    stringEmpty: function (text) {
        if (text === null || text === undefined) {
            return true;
        }
        if (typeof text !== 'string') {
            return false;
        }
        return text.trim().length === 0;
    },
    toInt: function (value) {
        let intValue = parseInt(value, 10);
        if (Number.isNaN(intValue)) {
            intValue = 0;
        }
        return intValue;
    },
    toFloat: function (value) {
        if (!value) {
            return 0.0;
        }

        value += '';
        if (value.indexOf(',') !== -1) {
            if (value.indexOf('.') !== -1) {
                value = value.replace(/\./g, '');
            }
            value = value.replace(',', '.');
        }

        let floatValue = Number.parseFloat(value);
        if (Number.isNaN(floatValue)) {
            floatValue = 0.0;
        }

        return floatValue;
    },
    toBool: function (value) {
        return ['true', 'yes', 'si', '1'].includes(String(value).toLowerCase());
    },
    toDate: function (dateTxt) {
        if (T.stringEmpty(dateTxt)) {
            return null;
        }
        let match = dateTxt.match(/(\d{1,2})\D*(\d{0,2})\D*(\d{0,4})/),
            day = match !== null && match[1] !== '' ? parseInt(match[1], 10) : 0,
            month = match !== null && match[2] !== '' ? parseInt(match[2], 10) : 0,
            year = match !== null && match[3] !== '' ? parseInt(match[3], 10) : 0;
        if (day === 0 && month === 0 && year === 0) {
            return null;
        }

        if (day === 0 || month === 0 || year === 0) {
            let today = new Date();
            day = day !== 0 ? day : today.getDate();
            month = month !== 0 ? month : today.getMonth() + 1;
            year = year !== 0 ? year : today.getFullYear();
        }

        if (year < 100) {
            year += 2000;
        }

        let date = new Date(year, month - 1, day);
        if (date.getMonth() + 1 !== month) {
            return null;
        }
        return date;
    },
    parseTime: function (timeTxt) {
        function padZero(value) {
            return ('00' + value).slice(-2);
        }

        let match = timeTxt.match(/(\d{1,2})\D*(\d{0,2})/),
            hour = match !== null && match[1] !== '' ? parseInt(match[1], 10) : 0,
            min = match !== null && match[2] !== '' ? parseInt(match[2], 10) : 0;
        if (hour > 23) {
            hour = 0;
        }
        if (min > 59) {
            min = 0;
        }

        return padZero(hour) + ':' + padZero(min);
    },
    timeDiff: function (start, end) {
        function timeToDayjs(time) {
            let split = T.parseTime(time).split(':');
            return dayjs().hour(split[0]).minute(split[1]).startOf('minute');
        }

        let s = timeToDayjs(start),
            e = timeToDayjs(end);
        return dayjs(e.diff(s)).utc();
    },
    hoursDiff: function (start, end) {
        let diff = T.timeDiff(start, end);
        return diff.get('h') + diff.get('m') / 60;
    },
    /**
     * Formatea una fecha en formato DD-MM-YYYY
     * @param {Date} date Objeto que contiene la fecha que vamos a formatear
     * @param {string} format Formato de la fecha
     * @returns {string} Cadena de text que contiene la fecha formateada
     */
    dateFormat: function (date, format) {
        if (date === null || date === undefined) {
            return '';
        }
        format = format || 'DD-MM-YYYY';
        return dayjs(date).format(format);
    },
    /**
     * Cambia el formato a una cadena que representa una fecha en formato YYYY-MM-DD
     * @param {string} sqlDate fecha en formato YYYY-MM-DD
     * @returns {string} fecha en formato DD-MM-YYYY
     */
    dateFormatFromSql: function (sqlDate) {
        if (T.stringEmpty(sqlDate)) {
            return '';
        }
        return dayjs(sqlDate).format('DD-MM-YYYY');
    },
    dateTimeFormatFromSql: function (sqlDate) {
        if (T.stringEmpty(sqlDate)) {
            return '';
        }
        return dayjs(sqlDate).format('DD-MM-YYYY HH:mm');
    },
    timeFormatFromSql: function (sqlDate) {
        return dayjs(sqlDate).format('HH:mm');
    },
    /*
     * Devuelve la fecha en UTC
     */
    dateUTC: function (date) {
        return new Date(Date.UTC(date.getFullYear(), date.getMonth(), date.getDate()));
    },
    /**
     * Convierte el elemento indicado por 'selector' en un datePicker
     * También gestiona el evento 'keydown' para que controle las teclas ENTER y TAB para dar formato de fecha al text.
     * @param {string} selector Selector del elemento / elementos que convertimos en un datePicker.
     * @param {object=} fnSelectDate Función que se llama cuando el usuario introducr o selecciona una fecha
     * @param {boolean=} bottom Indica si forzamos la apertura del calendario hacia abajo
     */
    datePicker: function (selector, fnSelectDate, bottom) {
        let configDTP = {
            format: 'dd-mm-yyyy',
            todayBtn: 'linked',
            todayHighlight: true,
            language: 'es',
            autoclose: true,
            showOnFocus: false,
            calendarWeeks: false,
            container: 'main',
        };

        if (bottom) {
            configDTP.orientation = 'bottom auto';
        }

        function formatDate() {
            let input = $(this),
                date = input.toDate();
            if (date !== null) {
                input.val(T.dateFormat(date));
                if (fnSelectDate) {
                    fnSelectDate.call(input, date);
                }
                input[0].dispatchEvent(new Event('input')); // input[0]: campo input nativo
            }
        }

        $(selector).each(function () {
            let input = $(this),
                dtp = input.closest('.input-group.date').datepicker(configDTP);
            dtp.on('show', function () {
                let fecha = input.toDate();
                if (fecha !== null) {
                    dtp.datepicker('update', fecha);
                }
            }).on('hide', function () {
                formatDate.call(input);
            });
            if (dtp.inputField && dtp.inputField.length > 1) {
                dtp.inputField = dtp.inputField.slice(0, 1);
            }

            input.on('blur', null, null, formatDate).on('keydown', null, null, function (event) {
                if (event.key === 'Enter' || event.key === 'Tab') {
                    formatDate.call(input);
                }
            });
        });
        return $(selector);
    },
    /**
     * Devuelve el número de la semana correspondiente a la fecha recibida
     * https://stackoverflow.com/questions/6117814/get-week-of-year-in-javascript-like-in-php
     * For a given date, get the ISO week number
     * Algorithm is to find nearest thursday, it's year is the year of the week number. Then get weeks between that date and the first day of that year.
     * Note that dates in one year can be weeks of previous or next year, overlap is up to 3 days.
     * e.g. 2014/12/29 is Monday in week  1 of 2015  *  2012/1/1   is Sunday in week 52 of 2011
     * @param {Date} date Fecha de la que extraemos el día
     * @returns {array} Año y Nº de la semana correspndiente a la fecha
     */
    getWeekNumber: function (date) {
        date = new Date(Date.UTC(date.getFullYear(), date.getMonth(), date.getDate()));
        date.setUTCDate(date.getUTCDate() + 4 - (date.getUTCDay() || 7));
        let yearStart = new Date(Date.UTC(date.getUTCFullYear(), 0, 1));
        let weekNo = Math.ceil(((date - yearStart) / 86400000 + 1) / 7);
        return [date.getUTCFullYear(), weekNo];
    },
    /**
     * Devuelve la fecha de comienzo de una semana
     * @param {int} week semana
     * @param {int} year año
     * @returns {Date} Objeto Date que contiene la fecha de inicio de la semana
     */
    getDateOfISOWeek: function (week, year) {
        let simple = new Date(Date.UTC(year, 0, 1 + (week - 1) * 7));
        let dow = simple.getDay();
        let weekStart = simple;
        if (dow <= 4) {
            weekStart.setDate(simple.getDate() - simple.getDay() + 1);
        } else {
            weekStart.setDate(simple.getDate() + 8 - simple.getDay());
        }
        return weekStart;
    },
    getMonday: function (date) {
        let week = T.getWeekNumber(date);
        return T.getDateOfISOWeek(week[1], week[0]);
    },
    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    getMonthName: function (month) {
        return month >= 1 && month <= 12 ? T.monthNames[month - 1] : '';
    },
    primeNumber: function (mult) {
        let gens = [2, 3, 5, 7, 11, 13, 17, 19, 29, 31, 37, 41, 43, 47, 53, 59];
        let index = Math.round(gens.length * Math.random());
        if (!Number.isInteger(mult) || mult <= 0) {
            mult = 1;
        }
        let prime = mult * gens[index];
        if (Number.isNaN(prime) || !Number.isInteger(prime)) {
            return T.primeNumber(mult);
        }
        return prime;
    },
    isFunction: function (functionToCheck) {
        return functionToCheck && {}.toString.call(functionToCheck) === '[object Function]';
    },
    /**
     * Crea una ventana de diálogo.
     * @param {object} options Opciones de inicialización y comportamiento del diálogo
     *      url: URL que devuelve el contenido del diálogo.
     *      id : Identificador que damos a la ventana.
     *      classDlg: Clase adicional que aplicamos a la ventana.
     *      fnSelection: Función que llamamos al seleccionar un elemento en una ventana de búsqueda.
     *      fnShown: Función que se ejecuta en el evento 'shown'
     *      fnHidden: Función que se ejecuta en el evento 'hidden'. Es responsable de eliminar la ventana del DOM
     */
    modal: function (options) {
        function getProp(obj, prop) {
            return prop in obj ? obj[prop] : null;
        }

        function createObjModal(id, classDlg) {
            let txtModal = `<div id="${id}" class="modal fade fullscreen-modal" tabindex="-1" role="dialog" data-backdrop="static">
              <div class="modal-dialog ${classDlg}" role="document">
                <div class="modal-content border-dark"></div>
              </div>
            </div>`;
            return $(txtModal);
        }

        function modalShown() {
            T.focoFirst('#' + id);
        }

        function modalHidden() {
            if (fnHidden) {
                fnHidden.call(this);
            }
            $('body').data('fn-sel-row', null);
            $(this).remove();
        }

        let notCenter = Boolean(getProp(options, 'notCenter')),
            url = getProp(options, 'url'),
            id = getProp(options, 'id') || 'id-dlg',
            classDlg = getProp(options, 'classDlg') || '' + (notCenter ? '' : ' modal-dialog-centered'),
            fnSelRow = getProp(options, 'fnSelRow'),
            fnShown = getProp(options, 'fnShown') || modalShown,
            fnHidden = getProp(options, 'fnHidden'),
            objModal = createObjModal(id, classDlg);

        objModal
            .appendTo('main')
            .find('.modal-content')
            .load(T.path(url), function () {
                objModal.on('shown.bs.modal', null, null, fnShown).on('hidden.bs.modal', null, null, modalHidden).modal('show');
                if (fnSelRow) {
                    let selRowFunction = function (args) {
                        fnSelRow.call(null, args);
                        objModal.modal('hide');
                    };
                    $('body').data('fn-sel-row', selRowFunction);
                }
            });
    },
    modalURL: function (urlController, options) {
        let modalParam = { url: urlController, id: 'document-modal', classDlg: 'modal-lg' };
        $.extend(modalParam, options || {});
        T.modal(modalParam);
    },
    modalOk: function (text, title, icon, fieldFocusOnHide, fnHidden) {
        let parts = text.split(';'),
            message = parts[0],
            notice = parts[1],
            txtNotice = '',
            styleHeader = 'background-color:#ccf4bd';

        if (notice !== undefined && notice !== '') {
            txtNotice = `<div class="d-flex align-items-center mt-3"><i class="mdi mdi-information mdi-36px mx-3 pt-2"></i><span class="text-danger" style="font-size:1.2rem;">${notice}</span></div>`;
            styleHeader = 'background-color:#ffd0d0';
        }

        if (icon !== undefined && icon !== '') {
            message = `<p class="d-flex align-items-center"><i class="mdi ${icon} mdi-36px mr-4 ml-2"></i><span>${message}</span></p>`;
        }

        let txtModal = `<div class="modal fade" tabindex="-1" role="dialog" style="z-index:1055;">
              <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
              <div class="modal-header py-2" style="${styleHeader}">
              <h5 class="modal-title font-weight-bold">${title || 'Registro grabado'}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Aceptar"><i aria-hidden="true" class="mdi mdi-close"></i></button>
              </div>
              <div class="modal-body">
                <div class="text-dark" style="font-size:1.4rem;">${message}</div>
                ${txtNotice}
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
              </div>
              </div>
              </div>
            </div>`;
        let objModal = $(txtModal);

        function modalHidden() {
            if (!T.stringEmpty(fieldFocusOnHide)) {
                $(fieldFocusOnHide).triggerHandler('focus');
            }
            if (fnHidden) {
                fnHidden();
            }
            $(this).remove();
        }

        function timer() {
            if (notice === undefined) {
                setTimeout(() => objModal.modal('hide'), 1500);
            }
        }

        let parent = 'main';
        if ($(parent).length < 1) {
            parent = 'body';
        }
        objModal.appendTo(parent).on('shown.bs.modal', null, null, timer).on('hidden.bs.modal', null, null, modalHidden).modal('show');
        return objModal;
    },
    modalYesNoIcon: function (icon, text, title, fnSelectionYes, fnSelectionNo) {
        title = `<i class="mdi ${icon} mdi-24px mr-3"></i>${title || ''}`;
        T.modalYesNo(text, title, fnSelectionYes, fnSelectionNo);
    },
    modalYesNo: function (text, title, fnSelectionYes, fnSelectionNo) {
        let txtModal = `<div id="modal-yesno" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content border-dark">
                <div class="modal-header border-dark bg-light">
                  <h5 class="modal-title font-weight-bold">${title || ''}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="No"><i aria-hidden="true" class="mdi mdi-close"></i></button>
                </div>
                <div class="modal-body d-flex" style="font-size: 1.2rem;padding-top:2rem;">
                    <i class="mdi mdi-help-circle-outline mdi-36px mr-3" style="margin-top: -0.75rem"></i>
                    <span class="align-top">${text}</span>
                </div>
                <div class="modal-footer row mr-1 ml-1">
                  <button type="button" id="confirm-si" class="btn btn-success col-3 pull-right" data-dismiss="modal">Sí</button>
                  <button type="button" id="confirm-no" class="btn btn-secondary col-3 pull-right" data-dismiss="modal">No</button>
                </div>
              </div>
            </div>
        </div>`;

        function modalHidden() {
            $(this).remove();
        }

        let parent = 'main';
        if ($(parent).length < 1) {
            parent = 'body';
        }
        $(txtModal).appendTo(parent).on('hidden.bs.modal', modalHidden).modal('show');
        if (T.isFunction(fnSelectionYes)) {
            $('#confirm-si', '#modal-yesno').on('click', fnSelectionYes);
        }
        if (T.isFunction(fnSelectionNo)) {
            $('#confirm-no', '#modal-yesno').on('click', fnSelectionNo);
        }
    },
    focoFirst: function (context) {
        let item = $('input:visible:enabled:not([readonly],[type=radio])', context)[0];
        item && item.focus();
        return item;
    },
    langDatatables: {
        processing: 'Procesando...',
        lengthMenu: 'Mostrar _MENU_ registros',
        zeroRecords: 'No se encontraron resultados',
        emptyTable: 'Ningún dato disponible en esta tabla',
        info: 'Total: _TOTAL_ registros',
        infoEmpty: 'No hay registros',
        infoFiltered: '(filtrado de un total de _MAX_ registros)',
        infoPostFix: '',
        search: 'Buscar:',
        url: '',
        infoThousands: ',',
        loadingRecords: 'Cargando...',
        oPaginate: { sFirst: 'Primero', sLast: 'Último', sNext: 'Siguiente', sPrevious: 'Anterior' },
        oAria: {
            sortAscending: ': Actilet para ordenar la columna de manera ascendente',
            sortDescending: ': Actilet para ordenar la columna de manera descendente',
        },
    },
    dataTable: function (selector, urlServer, fnData, options) {
        let configDT = {
            serverSide: true,
            ajax: {
                url: urlServer,
                type: 'POST',
                data: fnData || function () {},
            },
            paging: true,
            ordering: true,
            info: true,
            lengthChange: false,
            searching: false,
            language: T.langDatatables,
        };
        configDT = Object.assign(configDT, options || {});
        return $(selector).DataTable(configDT);
    },
    /**
     * Inicializa el comportamiento de los campos <input> de formularios.
     */
    setupInputs: function () {
        $('input:text:not([readonly])').on('focus', function (e) {
            T.preventDefault(e);
            $(this).triggerHandler('select');
        });
        $('.double:not([readonly])')
            .on('blur', function () {
                let item = $(this);
                item.val(T.numToString(item.val()));
            })
            .trigger('blur');
    },
    optionalButton: function (selector, fnClick, botonActivo) {
        if (botonActivo) {
            if (T.isFunction(fnClick)) {
                $(selector).on('click', fnClick);
            }
        } else {
            T.disableButton(selector, fnClick);
        }
    },
    disableButton: function (selector, fnClick) {
        if (T.isFunction(fnClick)) {
            $(selector).off('click', fnClick);
        }
        $(selector).removeClass('btn-dark btn-success btn-primary btn-danger').addClass('btn-secondary text-white').on('click', T.preventDefault);
    },
    enableButton: function (selector, styleClass, fnClick) {
        let boton = $(selector);
        if (boton.hasClass('btn-secondary')) {
            boton.removeClass('btn-secondary').addClass(styleClass).off('click', null, T.preventDefault).on('click', fnClick);
        }
    },
    loading: function (text) {
        let div = `<div class="loading-wrapper">
          <div class="loading-bg"></div>
          <div class="loading-text-wrapper d-flex flex-column justify-content-center align-items-center">
              <i class="mdi mdi-spin mdi-loading mdi-48px"></i>
              <div class="loading-text">${text || 'Procesando...'}</div>
          </div>
          </div>`;
        $(div).appendTo('body');
    },
    loadingHide: function () {
        $('div.loading-wrapper').remove();
    },
    compruebaNifCifNie: function (document) {
        if (T.stringEmpty(document)) {
            return 0;
        }
        let temp = document.toUpperCase();
        let cadenaCif = 'TRWAGMYFPDXBNJZSQVHLCKE';
        /* Si no tiene un formato valido devuelve error */
        if (!/^[A-Z]{1}[0-9]{7}[A-Z0-9]{1}$/.test(temp) && !/^[T]{1}[A-Z0-9]{8}$/.test(temp) && !/^[0-9]{8}[A-Z]{1}$/.test(temp)) {
            return 0;
        }

        //comprobacion de NIFs estandar
        if (/^[0-9]{8}[A-Z]{1}$/.test(temp)) {
            let posicion = document.substring(8, 0) % 23;
            let letra = cadenaCif.charAt(posicion);
            let letraCif = temp.charAt(8);
            if (letra === letraCif) {
                return 1;
            }
            return -1;
        }
        /* Algoritmo para comprobacion de codigos tipo CIF */
        let suma = parseInt(document.charAt(2), 10) + parseInt(document.charAt(4), 10) + parseInt(document.charAt(6), 10);
        for (let i = 1; i < 8; i += 2) {
            let temp0 = String(2 * parseInt(document.charAt(i), 10));
            let temp1 = temp0.substring(0, 1);
            let temp2 = temp0.substring(1, 2);
            if (temp2 === '') {
                temp2 = '0';
            }
            suma += parseInt(temp1, 10) + parseInt(temp2, 10);
        }
        suma += '';
        let n = 10 - parseInt(suma.substring(suma.length - 1, suma.length), 10);
        /* Comprobacion de NIFs especiales (se calculan como CIFs) */
        if (/^[KLM]{1}/.test(temp)) {
            if (document.charAt(8) === String.fromCharCode(64 + n)) {
                return 1;
            }
            return -1;
        }
        /* Comprobacion de CIFs */
        if (/^[ABCDEFGHJNPQRSUVW]{1}/.test(temp)) {
            temp = n.toString();
            if (document.charAt(8) === String.fromCharCode(64 + n) || parseInt(document.charAt(8), 10) === parseInt(temp.substring(temp.length - 1, temp.length), 10)) {
                return 2;
            }
            return -2;
        }
        /* Comprobacion de NIEs */
        //T
        if (/^[T]{1}[A-Z0-9]{8}$/.test(temp)) {
            if (document.charAt(8) === /^[T]{1}[A-Z0-9]{8}$/.test(temp)) {
                return 3;
            }
            return -3;
        }
        //XYZ
        if (/^[XYZ]{1}/.test(temp)) {
            let index = ['X', 'Y', 'Z'].indexOf(temp.substring(0, 1));
            temp = index.toString() + temp.substring(1);
            let pos = temp.substring(0, 8) % 23;
            if (document.charAt(8) === cadenaCif.substring(pos, pos + 1)) {
                return 3;
            }
            return -3;
        }
        return 1;
    },
    /**
     * Calcula la letra de un NIF
     * @param {String} document Documento que verificamos
     * @returns {String} Letra final correspondiente al NIF
     */
    calculaLetraNif: function (document) {
        let letter = '',
            temp = document.toUpperCase();
        if (temp !== '') {
            let position,
                cifTemp,
                stringNIF = 'TRWAGMYFPDXBNJZSQVHLCKE';
            /*if (!/^[A-Z]{1}[0-9]{7}[A-Z0-9]*$/.test(temp) && !/^[T]{1}[A-Z0-9]{7}[A-Z0-9]*$/.test(temp) && !/^[0-9]{8}[A-Z]*$/.test(temp)) {
                return '';   //si no tiene un formato valido devuelve error
            }*/

            if (/^[0-9]{8}[A-Z]*$/.test(temp)) {
                // Comprobacion de NIFs estandar
                position = document.substring(0, 8) % 23;
                letter = stringNIF[position];
            } else {
                let firstChar = document.substring(0, 1),
                    letter1 = firstChar;
                if (letter1 === 'X') {
                    firstChar = '0';
                } else if (letter1 === 'Y') {
                    firstChar = '1';
                } else if (letter1 === 'Z') {
                    firstChar = '2';
                }

                cifTemp = firstChar + document.substring(1);
                position = cifTemp.substring(0, 8) % 23;
                letter = stringNIF[position];
            }
        }
        return letter;
    },
    /**
     * Realiza una validación de un campo de nif, añadiendo la letra si es necesario
     * Normalmente lo utilizamos en el evento 'blur'
     * @param {Object} selector Objeto (campo) que estamos verificando
     * @param {boolean} validate Fuerza la validación del campo
     * @param {boolean} setIfInvalid Asigna el cif calculado al campo aunque no sea válido
     * @returns {boolean} true si es correcto, false en caso contrario
     */
    compruebaCampoNif: function (selector, validate, setIfInvalid) {
        let field = $(selector),
            nif = field.val(),
            result = T.compruebaNifCifNie(nif) > 0;

        if (!result) {
            let matches = nif.match(/[A-Za-z]+$/);
            if (!matches) {
                if (setIfInvalid) {
                    nif = nif + T.calculaLetraNif(nif);
                    field.val(nif);
                }
                if (T.compruebaNifCifNie(nif) > 0) {
                    result = true;
                }
            }
        }
        if (validate) {
            field.valid();
        }
        return result;
    },
    getCookie: function (cname) {
        let name = cname + '=',
            decodedCookie = decodeURIComponent(document.cookie),
            ca = decodedCookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) === 0) {
                return c.substring(name.length, c.length);
            }
        }
        return '';
    },
    setCookie: function (cname, cvalue, exdays) {
        let d = new Date();
        exdays = exdays || 365;
        d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
        let expires = 'expires=' + d.toUTCString();
        document.cookie = cname + '=' + cvalue + ';SameSite=Lax;' + expires + ';path=/';
    },
};
$(function () {
    // Se ejecuta después de document.ready
    $(function () {
        T.setupInputs();
    });
});

$.fn.toInt = function () {
    return T.toInt($(this).val());
};
$.fn.toFloat = function () {
    return T.toFloat($(this).val());
};
$.fn.toDate = function () {
    return T.toDate($(this).val());
};
$.fn.isEmpty = function () {
    return T.stringEmpty($(this).val());
};
