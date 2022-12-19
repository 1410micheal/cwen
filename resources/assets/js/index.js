(function($) {
    "use strict";
    var chart = c3.generate({
        bindto: '#chart-area-spline2', // id of chart wrapper
        data: {
            columns: [
                // each columns data
                ['data1', 0, 8, 10, 12, 20, 18, 15, 10, 18, 10, 20, 10],
                ['data2', 0, 12, 8, 20, 10, 13, 10, 20, 10, 19, 8, 19]
            ],
            type: 'area-spline', // default type of chart
            colors: {
                data1: '#5797fc',
                data2: '#26eda2'
            },
            names: {
                // name of each serie
                'data1': 'Profit',
                'data2': 'Sales'
            }
        },
        axis: {
            y: {
                padding: {
                    bottom: 0,
                },
                show: false,
                tick: {
                    outer: false
                }
            },
            x: {
                padding: {
                    left: 0,
                    right: 0
                },
                show: false
            }
        },
        legend: {
            position: 'inset',
            padding: 0,
            inset: {
                anchor: 'top-left',
                x: 20,
                y: 8,
                step: 10
            }
        },
        tooltip: {
            format: {
                title: function(x) {
                    return '';
                }
            }
        },
        padding: {
            bottom: 0,
            left: -1,
            right: -1
        },
        point: {
            show: false
        }
    });
    var chart = c3.generate({
        bindto: '#chart-area-spline1', // id of chart wrapper
        data: {
            columns: [
                // each columns data
                ['data1', 0, 8, 10, 12, 20, 18, 15, 10, 18, 10, 20, 10],
                ['data2', 0, 12, 8, 20, 10, 13, 10, 20, 10, 19, 8, 19]
            ],
            type: 'area-spline', // default type of chart
            colors: {
                data1: '#4ecc48',
                data2: '#5797fc'
            },
            names: {
                // name of each serie
                'data1': 'data1',
                'data2': 'data2'
            }
        },
        axis: {
            x: {
                type: 'category',
                // name of each category
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
        },
        legend: {
            show: false, //hide legend
        },
        padding: {
            bottom: 0,
            top: 0
        },
    });
    var chart = c3.generate({
        bindto: '#chart-visitors',
        padding: {
            bottom: 24
        },
        data: {
            x: 'x',
            names: {
                data1: 'views',
                data2: 'Sales',
                data3: 'Users',
            },
            columns: [
                ['x', '2018-08-02', '2018-05-09', '2018-05-12', '2018-05-18', '2018-05-21', '2018-05-25', '2018-06-08', '2018-06-11', '2018-06-19', '2018-06-22', '2018-07-12'],
                ['data1', 22, 28, 21, 46, 48, 38, 48, 52, 28, 57, 32],
                ['data2', 50, 61, 75, 104, 110, 76, 74, 98, 78, 96, 144],
                ['data3', 155, 100, 96, 132, 154, 141, 158, 142, 132, 146, 186],
            ],
            types: {
                data1: 'area',
            }
        },
        point: {
            show: false
        },
        legend: {
            position: 'top',
            padding: 16
        },
        transition: {
            duration: 0
        },
        axis: {
            y: {
                tick: {
                    fit: true
                }
            },
            x: {
                type: 'timeseries',
                tick: {
                    format: '%d %b'
                },
                padding: {
                    top: 10,
                    bottom: 0
                }
            }
        },
        grid: {
            y: {
                show: true
            }
        },
        color: {
            pattern: ['#c21a1a', '#4ecc48', '#867efc', ]
        }
    });
    var chart = c3.generate({
        bindto: '#chart-tasks', // id of chart wrapper
        data: {
            columns: [
                // each columns data
                ['data1', 0, 0, 1, 2, 21, 9, 12, 10, 31, 13, 65, 10, 12, 6, 4, 3, 0],
                ['data2', 0, 0, 1, 2, 7, 5, 6, 8, 24, 7, 12, 5, 6, 3, 2, 2, 0],
                ['data3', 0, 0, 1, 0, 2, 0, 1, 0, 2, 3, 0, 2, 3, 2, 1, 0, 0]
            ],
            classes: {
                data1: 'filled',
                data2: 'filled',
                data3: 'filled'
            },
            type: 'area-spline', // default type of chart
            groups: [
                ['data1', 'data2', 'data3']
            ],
            colors: {
                data1: '#6c5ffc',
                data2: '#05c3fb ',
                data3: '#09ad95'
            },
            names: {
                // name of each serie
                'data1': 'Profit',
                'data2': 'Sales',
                'data3': 'Gain'
            }
        },
        axis: {
            y: {
                padding: {
                    bottom: 0,
                },
                show: false,
                tick: {
                    outer: false
                }
            },
            x: {
                padding: {
                    left: 0,
                    right: 0
                },
                show: false
            }
        },
        legend: {
            position: 'inset',
            padding: 0,
            inset: {
                anchor: 'top-left',
                x: 20,
                y: 8,
                step: 10
            }
        },
        tooltip: {
            format: {
                title: function(x) {
                    return '';
                }
            }
        },
        padding: {
            bottom: 0,
            left: -1,
            right: -1
        },
        point: {
            show: false
        }
    });
    /*chart-donut*/
    var chart = c3.generate({
        bindto: '#chart-donut', // id of chart wrapper
        data: {
            columns: [
                // each columns data
                ['data1', 78],
                ['data2', 95],
                ['data3', 25],
            ],
            type: 'donut', // default type of chart
            colors: {
                data1: '#6574cd',
                data2: '#2bcbba',
                data3: '#f66d9b'
            },
            names: {
                // name of each serie
                'data1': 'sales1',
                'data2': 'sales2',
                'data3': 'sales3'
            }
        },
        axis: {},
        legend: {
            show: true,
        },
        padding: {
            bottom: 0,
            top: 0
        },
    });
    /*chart-pie*/
    var chart = c3.generate({
        bindto: '#chart-pie', // id of chart wrapper
        data: {
            columns: [
                // each columns data
                ['data1', 98],
                ['data2', 76],
                ['data3', 45],
            ],
            type: 'pie', // default type of chart
            colors: {
                data1: '#ffcc29',
                data2: '#17a2b8',
                data3: '#ff7088'
            },
            names: {
                // name of each serie
                'data1': 'profit1',
                'data2': 'profit2',
                'data3': 'profit3'
            }
        },
        axis: {},
        legend: {
            show: true, //hide legend
        },
        padding: {
            bottom: 0,
            top: 0
        },
    });
    /*chart-bg-users-1*/
    var chart = c3.generate({
        bindto: '#chart-bg-users-1',
        padding: {
            bottom: -10,
            left: -1,
            right: -1
        },
        size: {
            height: 64
        },
        data: {
            names: {
                data1: 'Visitors online'
            },
            columns: [
                ['data1', 10, 50, 100, 50, 40, 35, 70]
            ],
            type: 'area-spline'
        },
        legend: {
            show: false
        },
        transition: {
            duration: 0
        },
        point: {
            show: false
        },
        tooltip: {
            format: {
                title: function(x) {
                    return '';
                }
            }
        },
        axis: {
            y: {
                padding: {
                    bottom: 0,
                },
                show: false,
                tick: {
                    outer: false
                }
            },
            x: {
                padding: {
                    left: 0,
                    right: 0
                },
                show: false
            }
        },
        color: {
            pattern: ['#8543f6']
        }
    });
    /*chart-bg-users-2*/
    var chart = c3.generate({
        bindto: '#chart-bg-users-2',
        padding: {
            bottom: -10,
            left: -1,
            right: -1
        },
        size: {
            height: 64
        },
        data: {
            names: {
                data1: 'Total Sales'
            },
            columns: [
                ['data1', 10, 30, 20, 60, 70, 85, 75]
            ],
            type: 'area-spline'
        },
        legend: {
            show: false
        },
        transition: {
            duration: 0
        },
        point: {
            show: false
        },
        tooltip: {
            format: {
                title: function(x) {
                    return '';
                }
            }
        },
        axis: {
            y: {
                padding: {
                    bottom: 0,
                },
                show: false,
                tick: {
                    outer: false
                }
            },
            x: {
                padding: {
                    left: 0,
                    right: 0
                },
                show: false
            }
        },
        color: {
            pattern: ['#ff7088']
        }
    });
    /*chart-bg-users-3*/
    var chart = c3.generate({
        bindto: '#chart-bg-users-3',
        padding: {
            bottom: -10,
            left: -1,
            right: -1
        },
        size: {
            height: 64
        },
        data: {
            names: {
                data1: 'Total Projects'
            },
            columns: [
                ['data1', 40, 40, 50, 70, 100, 85, 80]
            ],
            type: 'area-spline'
        },
        legend: {
            show: false
        },
        transition: {
            duration: 0
        },
        point: {
            show: false
        },
        tooltip: {
            format: {
                title: function(x) {
                    return '';
                }
            }
        },
        axis: {
            y: {
                padding: {
                    bottom: 0,
                },
                show: false,
                tick: {
                    outer: false
                }
            },
            x: {
                padding: {
                    left: 0,
                    right: 0
                },
                show: false
            }
        },
        color: {
            pattern: ['#fc7303']
        }
    });
    /*chart-bg-users-4*/
    var chart = c3.generate({
        bindto: '#chart-bg-users-4',
        padding: {
            bottom: -10,
            left: -1,
            right: -1
        },
        size: {
            height: 64
        },
        data: {
            names: {
                data1: 'Today Income'
            },
            columns: [
                ['data1', 300, 800, 300, 600, 300, 650, 1000]
            ],
            type: 'area-spline'
        },
        legend: {
            show: false
        },
        transition: {
            duration: 0
        },
        point: {
            show: false
        },
        tooltip: {
            format: {
                title: function(x) {
                    return '';
                }
            }
        },
        axis: {
            y: {
                padding: {
                    bottom: 0,
                },
                show: false,
                tick: {
                    outer: false
                }
            },
            x: {
                padding: {
                    left: 0,
                    right: 0
                },
                show: false
            }
        },
        color: {
            pattern: ['#4ecc48']
        }
    });
    /*chart-browsers*/
    var chart = c3.generate({
        bindto: '#chart-browsers',
        data: {
            columns: [
                ['Chrome', 36],
                ['Firefox', 15],
                ['Safari', 9],
                ['Edge', 10],
                ['Opera', 30],
            ],
            colors: {
                Chrome: '#17a2b8',
                Firefox: '#fc7303',
                Safari: '#7ea5dd',
                Edge: '#f999b9',
                Opera: '#c21a1a',
            },
            type: 'donut'
        },
        legend: {
            show: true
        }
    });
    /*chart-emails*/
    var chart = c3.generate({
        bindto: '#chart-emails',
        padding: {
            bottom: 24,
            top: 0
        },
        data: {
            type: 'donut',
            names: {
                data1: 'Open',
                data2: 'Bounce',
                data3: 'Unsubscribe',
            },
            columns: [
                ['data1', 30],
                ['data2', 50],
                ['data3', 25],
            ],
            colors: {
                data1: 'blue',
                data2: 'red',
                data3: 'yellow',
            }
        },
        donut: {
            label: {
                show: false
            }
        },
        legend: {
            show: true
        },
    });

    $('.resp-tabs-list .home-hogo').addClass('active');
    $('.second-sidemenu .home-hogo').addClass('resp-tab-content-active');

})(jQuery);

// const { remove } = require("lodash");

$(function(e) {

    //flotChart1
    $.plot('#flotback-chart', [{
        data: dashData10,
        color: 'rgba(255,255,255, 0.2)',
        lines: {
            lineWidth: 1
        }
    }], {
        series: {
            stack: 0,
            shadowSize: 0,
            lines: {
                show: true,
                lineWidth: 1.8,
                fill: true,
                fillColor: {
                    colors: [{
                        opacity: 0
                    }, {
                        opacity: 0.3
                    }]
                }
            }
        },
        grid: {
            borderWidth: 0,
            labelMargin: 5,
            hoverable: true
        },
        yaxis: {
            show: false,
            color: 'rgba(72, 94, 144, .1)',
            min: 0,
            max: 130,
            font: {
                size: 10,
                color: '#8392a5'
            }
        },
        xaxis: {
            show: false,
            color: 'rgba(72, 94, 144, .1)',
            ticks: [
                [0, '10'],
                [10, '20'],
                [20, '30'],
                [30, '40'],
                [40, '50'],
                [50, '60'],
                [60, '70'],
                [70, '80'],
                [80, '90'],
                [90, '100'],
                [100, '110'],
                [120, '120'],
            ],
            font: {
                size: 10,
                color: '#8392a5'
            },
            reserveSpace: false
        }
    });

    /*-- Recent-Orders --*/
    var myCanvas = document.getElementById("recentorders");
    myCanvas.height = "225";
    var myChart = new Chart(myCanvas, {
        type: 'bar',
        data: {
            labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            datasets: [{
                label: 'This Month',
                data: [27, 50, 28, 50, 28, 30, 22],
                backgroundColor: '#61c9fc',
                borderWidth: 2,
                hoverBackgroundColor: '#61c9fc',
                hoverBorderWidth: 0,
                borderColor: '#61c9fc',
                hoverBorderColor: '#61c9fc',
                borderDash: [5, 2],
            }, {
                label: 'This Month',
                data: [32, 58, 68, 65, 40, 68, 58],
                backgroundColor: '#f38ff3',
                borderWidth: 2,
                hoverBackgroundColor: '#f38ff3',
                hoverBorderWidth: 0,
                borderColor: '#f38ff3',
                hoverBorderColor: '#f38ff3',
                borderDash: [5, 2],
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            tooltips: {
                enabled: false,
            },
            scales: {
                yAxes: [{
                    display: false,
                    gridLines: {
                        display: false,
                        drawBorder: false,
                        zeroLineColor: 'rgba(142, 156, 173,0.1)',
                        color: "rgba(142, 156, 173,0.1)",
                    },
                    scaleLabel: {
                        display: false,
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 25,
                        suggestedMin: 0,
                        suggestedMax: 100,
                        fontColor: "#8492a6",
                        userCallback: function(tick) {
                            return tick.toString() + '%';
                        }
                    },
                }],
                xAxes: [{
                    display: false,
                    barPercentage: 0.4,
                    barValueSpacing: 0,
                    barDatasetSpacing: 0,
                    barRadius: 0,
                    stacked: false,
                    ticks: {
                        beginAtZero: true,
                        fontColor: "#8492a6",
                    },
                    gridLines: {
                        color: "rgba(142, 156, 173,0.1)",
                        display: false
                    },

                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }
        }
    });

    /* saleschart */
    var ctx = document.getElementById('saleschart').getContext('2d');
    ctx.height = 10;
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Total Sales',
                data: [19, 15, 17, 14, 13, 15, 16],
                backgroundColor: [
                    'rgba(5, 195, 251, 0.2)',
                    'rgba(5, 195, 251, 0.2)',
                    '#05c3fb',
                    'rgba(5, 195, 251, 0.2)',
                    'rgba(5, 195, 251, 0.2)',
                    '#05c3fb',
                    '#05c3fb'
                ],
                borderColor: [
                    'rgba(5, 195, 251, 0.5)',
                    'rgba(5, 195, 251, 0.5)',
                    '#05c3fb',
                    'rgba(5, 195, 251, 0.5)',
                    'rgba(5, 195, 251, 0.5)',
                    '#05c3fb',
                    '#05c3fb'
                ],
                pointBorderWidth: 2,
                pointRadius: 2,
                pointHoverRadius: 2,
                borderWidth: 1
            }, ]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            responsive: true,
            tooltips: {
                enabled: false,
            },
            scales: {
                xAxes: [{
                    categoryPercentage: 1.0,
                    barPercentage: 1.0,
                    barDatasetSpacing: 0,
                    display: false,
                    barThickness: 5,
                    barRadius: 0,
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                }],
                yAxes: [{
                    display: false,
                    ticks: {
                        display: false,
                    }
                }]
            },
            title: {
                display: false,
            },
            elements: {
                point: {
                    radius: 0
                }
            }
        }
    });

    /* Chartjs (#saleschart) closed */

    /* leadschart */
    var ctx = document.getElementById('leadschart').getContext('2d');
    ctx.height = 10;
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Date 1', 'Date 2', 'Date 3', 'Date 4', 'Date 5', 'Date 6', 'Date 7', 'Date 8', 'Date 9', 'Date 10', 'Date 11', 'Date 12', 'Date 13', 'Date 14', 'Date 15'],
            datasets: [{
                label: 'Total Sales',
                data: [45, 23, 32, 67, 49, 72, 52, 55, 46, 54, 32, 74, 88, 36, 36, 32, 48, 54],
                backgroundColor: 'transparent',
                borderColor: '#f46ef4',
                borderWidth: '2.5',
                pointBorderColor: 'transparent',
                pointBackgroundColor: 'transparent',
            }, ]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            responsive: true,
            tooltips: {
                enabled: false,
            },
            scales: {
                xAxes: [{
                    categoryPercentage: 1.0,
                    barPercentage: 1.0,
                    barDatasetSpacing: 0,
                    display: false,
                    barThickness: 5,
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                }],
                yAxes: [{
                    display: false,
                    ticks: {
                        display: false,
                    }
                }]
            },
            title: {
                display: false,
            },
        }
    });
    /* Chartjs (#leadchart) closed */

    /* Profitchart */
    var ctx = document.getElementById('profitchart').getContext('2d');
    ctx.height = 10;
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Total Sales',
                barGap: 0,
                barSizeRatio: 1,
                data: [14, 17, 12, 13, 11, 15, 16],
                backgroundColor: '#4ecc48',
                borderColor: '#4ecc48',
                pointBackgroundColor: '#fff',
                pointHoverBackgroundColor: '#4ecc48',
                pointBorderColor: '#4ecc48',
                pointHoverBorderColor: '#4ecc48',
                pointBorderWidth: 2,
                pointRadius: 2,
                pointHoverRadius: 2,
                borderWidth: 1
            }, ]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            responsive: true,
            tooltips: {
                enabled: false,
            },
            scales: {
                xAxes: [{
                    categoryPercentage: 1.0,
                    barPercentage: 1.0,
                    barDatasetSpacing: 0,
                    display: false,
                    barThickness: 5,
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                }],
                yAxes: [{
                    display: false,
                    ticks: {
                        display: false,
                    }
                }]
            },
            title: {
                display: false,
            },
        }
    });
    /* Chartjs (#Profitchart) closed */

    /* Costchart */
    var ctx = document.getElementById('costchart').getContext('2d');
    ctx.height = 10;
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Date 1', 'Date 2', 'Date 3', 'Date 4', 'Date 5', 'Date 6', 'Date 7', 'Date 8', 'Date 9', 'Date 10', 'Date 11', 'Date 12', 'Date 13', 'Date 14', 'Date 15', 'Date 16', 'Date 17'],
            datasets: [{
                label: 'Total Sales',
                data: [28, 56, 36, 32, 48, 54, 37, 58, 66, 53, 21, 24, 14, 45, 0, 32, 67, 49, 52, 55, 46, 54, 130],
                backgroundColor: 'transparent',
                borderColor: '#f7ba48',
                borderWidth: '2.5',
                pointBorderColor: 'transparent',
                pointBackgroundColor: 'transparent',
            }, ]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            responsive: true,
            tooltips: {
                enabled: false,
            },
            scales: {
                xAxes: [{
                    categoryPercentage: 1.0,
                    barPercentage: 1.0,
                    barDatasetSpacing: 0,
                    display: false,
                    barThickness: 5,
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                }],
                yAxes: [{
                    display: false,
                    ticks: {
                        display: false,
                    }
                }]
            },
            title: {
                display: false,
            },
        }
    });
    /* Chartjs (#Costchart) closed */

    //______Data-Table
    $('#data-table').DataTable({
        "order": [
            [0, "desc"]
        ],
        order: [],
        columnDefs: [{ orderable: false, targets: [0, 4, 5] }],
        language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
        }
    });

    //______Select2
    $('.select2').select2({
        minimumResultsForSearch: Infinity
    });



    $('#world-map-markers1').vectorMap({
        map: 'world_mill_en',
        scaleColors: ['#6c5ffc', '#e82646', '#05c3fb'],

        normalizeFunction: 'polynomial',

        hoverOpacity: 0.7,

        hoverColor: false,

        regionStyle: {

            initial: {

                fill: '#edf0f5'
            }
        },
        markerStyle: {
            initial: {
                r: 6,
                'fill': '#6c5ffc',
                'fill-opacity': 0.9,
                'stroke': '#fff',
                'stroke-width': 9,
                'stroke-opacity': 0.2
            },

            hover: {
                'stroke': '#fff',
                'fill-opacity': 1,
                'stroke-width': 1.5
            }
        },
        backgroundColor: 'transparent',
        markers: [{
            latLng: [40.3, -101.38],
            name: 'USA',
        }, {
            latLng: [22.5, 1.51],
            name: 'India'
        }, {
            latLng: [50.02, 80.55],
            name: 'Bahrain'
        }, {
            latLng: [3.2, 73.22],
            name: 'Maldives'
        }, {
            latLng: [35.88, 14.5],
            name: 'Malta'
        }, ]
    });

});
