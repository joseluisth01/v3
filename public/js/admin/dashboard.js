let DASH = {
    monthChart: function (data) {
        Morris.Line({
            element: 'month-chart',
            data: data,
            xkey: 'dia',
            ykeys: ['importe'],
            xlabels: 'day',
            parseTime: false,
            resize: true,
            labels: ['Importe'],
            postUnits: ' €',
        });
    },
    yearChart: function (data) {
        let chartData = [];
        for (let m = 0; m < 12; m++) {
            let item = {
                mes: T.getMonthName(m + 1),
                importe: data[m].importe,
            };
            chartData.push(item);
        }

        Morris.Line({
            element: 'year-chart',
            data: chartData,
            xkey: 'mes',
            ykeys: ['importe'],
            parseTime: false,
            resize: true,
            labels: ['Importe'],
            postUnits: ' €',
        });
    },
    compChart: function (data) {
        let m,
            y,
            numYears = data.length,
            years = [],
            chartData = [];

        for (y = 0; y < numYears; y++) {
            years.push(data[y].year);
        }

        for (m = 0; m < 12; m++) {
            let item = { mes: T.getMonthName(m + 1) };
            for (y = 0; y < numYears; y++) {
                let field = data[y].year;
                item[field] = data[y].info[m].importe;
            }
            chartData.push(item);
        }

        Morris.Line({
            element: 'comp-chart',
            data: chartData,
            xkey: 'mes',
            ykeys: years,
            labels: years,
            parseTime: false,
            resize: true,
            postUnits: ' €',
        });
    },
    init: function () {
        $.get(T.path('admin/info-dashboard'), function (data) {
            DASH.monthChart(data.month);
            DASH.yearChart(data.year);
            DASH.compChart(data.ventas);
        });
    },
};

$(function () {
    DASH.init();
    $('.count-to').countTo();
});
