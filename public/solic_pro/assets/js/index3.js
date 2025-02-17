"use strict"

/* Chartjs (#Bouncerate) */
var ctx = document.getElementById('bouncerate').getContext('2d');
var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 140);
gradientStroke1.addColorStop(0, '#564ec1');
gradientStroke1.addColorStop(1, '#564ec1');
var myChart = new Chart( ctx, {
    type: 'line',
    data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        type: 'line',
        datasets: [ {
            label: 'Bounce Rate',
            data: [30, 70, 30, 100, 50, 130, 100, 140],
            backgroundColor: 'rgb(86, 78, 193,0.2)',
            borderColor: gradientStroke1,
            pointBackgroundColor:'#fff',
            pointHoverBackgroundColor:gradientStroke1,
            pointBorderColor :gradientStroke1,
            pointHoverBorderColor :gradientStroke1,
            pointBorderWidth :2,
            pointRadius :2,
            pointHoverRadius :2,
            borderWidth: 3,
            fill: true,
            lineTension: 0.3
        }, ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
            legend: {
                display: false,
                labels: {
                    display: false
                }
            },
            tooltip: {
                enabled: true
            }			
        },
        scales: {
            x: {
                display: false,
                ticks: {
                    fontSize: 2,
                    fontColor: 'transparent'
                },
                grid: {
                    display: false,
                    color: 'rgba(180, 183, 197, 0.4)																																					',
                    drawBorder: false,
                },
            },
            y: {
                display:false,
                ticks: {
                    display: false,
                },
                grid: {
                    display: false,
                    color: 'rgba(180, 183, 197, 0.4)',
                    drawBorder: false,
                },
            }
        },
        title: {
            display: false,
        },
        elements: {
            line: {
                borderWidth: 1
            },
            point: {
                radius: 4,
                hitRadius: 10,
                hoverRadius: 4
            }
        }
    }
});
/* Chartjs (#Bounce Rate) closed */

/* Chartjs (#Sessions) */
var ctx = document.getElementById('sessions').getContext('2d');
var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 140);
gradientStroke1.addColorStop(0, '#04cad0');
gradientStroke1.addColorStop(1, '#04cad0');
var myChart = new Chart( ctx, {
    type: 'line',
    data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        type: 'line',
        datasets: [ {
            label: 'Sessions',
            data: [30, 70, 30, 100, 50, 130, 100, 140],
            backgroundColor: 'rgb(4, 202, 208,0.2)',
            borderColor: gradientStroke1,
            pointBackgroundColor:'#fff',
            pointHoverBackgroundColor:gradientStroke1,
            pointBorderColor :gradientStroke1,
            pointHoverBorderColor :gradientStroke1,
            pointBorderWidth :2,
            pointRadius :2,
            pointHoverRadius :2,
            lineTension: 0.3,
            fill: true,
            borderWidth: 3
        }, ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
            legend: {
                display: false,
                labels: {
                    display: false
                }
            },
            tooltip: {
                enabled: true
            }			
        },
        scales: {
            x: {
                display: false,
                gridLines: {
                    color: 'transparent',
                    zeroLineColor: 'transparent'
                },
                ticks: {
                    fontSize: 2,
                    fontColor: 'transparent'
                }
            },
            y: {
                display:false,
                ticks: {
                    display: false,
                }
            }
        },
        title: {
            display: false,
        },
        elements: {
            line: {
                borderWidth: 1
            },
            point: {
                radius: 4,
                hitRadius: 10,
                hoverRadius: 4
            }
        }
    }
});
/* Chartjs (#sessions) closed */

/* Chartjs (#pageviews) */
var ctx = document.getElementById('pageviews').getContext('2d');
var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 140);
gradientStroke1.addColorStop(0, '#f5334f');
gradientStroke1.addColorStop(1, '#f5334f');
var myChart = new Chart( ctx, {
    type: 'line',
    data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        type: 'line',
        datasets: [ {
            label: 'Page views',
            data: [30, 70, 30, 100, 50, 130, 100, 140],
            backgroundColor: 'rgb(245, 51, 79,0.2)',
            borderColor: gradientStroke1,
            pointBackgroundColor:'#fff',
            pointHoverBackgroundColor:gradientStroke1,
            pointBorderColor :gradientStroke1,
            pointHoverBorderColor :gradientStroke1,
            pointBorderWidth :2,
            pointRadius :2,
            pointHoverRadius :2,
            lineTension: 0.3,
            fill: true,
            borderWidth: 3
        }, ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
            legend: {
                display: false,
                labels: {
                    display: false
                }
            },
            tooltip: {
                enabled: true
            }			
        },
        scales: {
            x: {
                display: false,
                gridLines: {
                    color: 'transparent',
                    zeroLineColor: 'transparent'
                },
                ticks: {
                    fontSize: 2,
                    fontColor: 'transparent'
                }
            },
            y: {
                display:false,
                ticks: {
                    display: false,
                }
            }
        },
        title: {
            display: false,
        },
        elements: {
            line: {
                borderWidth: 1
            },
            point: {
                radius: 4,
                hitRadius: 10,
                hoverRadius: 4
            }
        }
    }
});
/* Chartjs (#pageviews) closed */

/* Chartjs (#users) */
var ctx = document.getElementById('users').getContext('2d');
var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 140);
gradientStroke1.addColorStop(0, '#f7b731');
gradientStroke1.addColorStop(1, '#f7b731');
var myChart = new Chart( ctx, {
    type: 'line',
    data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        type: 'line',
        datasets: [ {
            label: 'Users',
            data: [30, 70, 30, 100, 50, 130, 100, 140],
            backgroundColor: 'rgb(247, 183, 49,0.2)',
            borderColor: gradientStroke1,
            pointBackgroundColor:'#fff',
            pointHoverBackgroundColor:gradientStroke1,
            pointBorderColor :gradientStroke1,
            pointHoverBorderColor :gradientStroke1,
            pointBorderWidth :2,
            pointRadius :2,
            pointHoverRadius :2,
            lineTension: 0.3,
            fill: true,
            borderWidth: 3
        }, ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
            legend: {
                display: false,
                labels: {
                    display: false
                }
            },
            tooltip: {
                enabled: true
            }			
        },
        scales: {
            x: {
                display: false,
                gridLines: {
                    color: 'transparent',
                    zeroLineColor: 'transparent'
                },
                ticks: {
                    fontSize: 2,
                    fontColor: 'transparent'
                }
            },
            y: {
                display:false,
                ticks: {
                    display: false,
                }
            }
        },
        title: {
            display: false,
        },
        elements: {
            line: {
                borderWidth: 1
            },
            point: {
                radius: 4,
                hitRadius: 10,
                hoverRadius: 4
            }
        }
    }
});
/* Chartjs (#users) closed */

/* Apex chart */
var options = {
    chart: {
        height: 290,
        type: 'line',
        toolbar: {
            show: false
        }
    },
    series: [{
        name: 'Users',
        type: 'column',
        data: [148, 268, 157, 248, 179, 284, 185, 289, 158, 102, 325, 78]
    }, {
        name: 'Sessions',
        type: 'line',
        data: [245, 340, 270, 380, 310, 260, 360, 240, 320, 240,220, 280]
    }, {
        name: 'Pageviews',
        type: 'line',
        data: [190, 240, 340, 260, 390, 280, 340, 270, 380, 340, 350, 420]
    }],
    stroke: {
        width: [0, 3, 2],
        curve: ['', 'smooth', 'straight']
    },
    grid: {
        show: true,
        borderColor: "rgba(119, 119, 142, 0.1)",
    },
    legend: {
        show: true,
        position: 'top',
          horizontalAlign: 'right',
        fontSize: '11px',
        fontWeight: 600, 
        labels: {
            colors: '#74767c',
        },
        markers: {
            width: 8,
            height: 8,
            strokeWidth: 0,
            radius: 12,
            offsetX: 0,
            offsetY: 0
        },
    },
    plotOptions: {
        bar: {
            columnWidth: "26%",
            borderRadius: 2,
        },
    },
    title: {
        text: undefined
    },
    xaxis: {
    categories: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001', '06 Jan 2001', '07 Jan 2001', '08 Jan 2001', '09 Jan 2001', '10 Jan 2001', '11 Jan 2001', '12 Jan 2001'],
    type: 'datetime',
    axisBorder: {
        show: true,
        color: 'rgba(119, 119, 142, 0.05)',
        offsetX: 0,
        offsetY: 0,
        },
        axisTicks: {
        show: true,
        borderType: 'solid',
        color: 'rgba(119, 119, 142, 0.05)',
        width: 6,
        offsetX: 0,
        offsetY: 0
        },
    },
    yaxis: [{
        title: {
          text: 'Users/Sessions',
        },
    }],
    colors: ['#564ec1', '#04cad0', '#f7b731'],
}
var chart2 = new ApexCharts(document.querySelector("#analytic"), options);
chart2.render();

function analyticsChart() {
    chart2.updateOptions({ colors: ["rgb(" + myVarVal + ")", "#f7b731", "#04cad0"] });
}
/* Apex chart closed */
