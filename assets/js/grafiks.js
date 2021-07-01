  new Chart(document.getElementById("mixed-chart"), {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul','Ags','Sep','Okt'],
      datasets: [{
          label: "Target Anggaran %",
          type: "line",
          borderColor: "#8e5ea2",
          data: [ 8.00,18.18,27.27,36.36,45.45,54.55,63.64,72.73,81.82,87],
          fill: false
        }, {
          label: "Realisasi Anggaran %",
          type: "line",
          backgroundColor: "#3cba9f",
          data: [3.28,9.30,15.67,19.81,27.24,47.18,56.83,69.33,75.26,76.26],
        }
      ]
    },
    options: {
       plugins: {
            // Change options for ALL labels of THIS CHART
                     datalabels: {
                    color: '#000000',
                    anchor: 'end',
                    align : 'center',
                    }
              },
      legend: { display: true }
    }
});
      
new Chart(document.getElementById("chart2"), {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul','Ags','Sep','Okt'],
      datasets: [ {
          label: "Kumulatif",
          type: "line",
          borderColor: "#3e95cd",
          data: [237,434,612,725,805,994,1210,1452,1705,1911],
          fill: true
        },
         {
          label: "Realisasi",
          type: "line",
          borderColor: "#3cba9f",
          backgroundColor : '#3cba9f',
          data: [237,197,178,113,81,189,216,241,253,207],
          fill: true
        }
      ]
    },
    options: {
       plugins: {
            // Change options for ALL labels of THIS CHART
                     datalabels: {
                    color: '#000000',
                    anchor: 'end',
                    align : 'center',
                    }
                    },
      legend: { display: true },
        scales: {
                        yAxes: [{
                            type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                            display: true,
                            ticks: {
            beginAtZero: false
          },
                            position: 'left',
                        }]
    },
  }
});

new Chart(document.getElementById("myChart3"), {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul','Ags','Sep','Okt'],
      datasets: [{
          label: "Kumulatif",
          type: "line",
          borderColor: "#8e5ea2",
          data: [558,1581,2666,3369,4378,5104,6148,7766,8430,9201],
          fill: true
        },
        {
          label: "Per Bulan",
          type: "line",
          borderColor: "#3e95cd",
          backgroundColor : '#3e95cd',
          data: [558,1023,1084,703,1009,725,1043,1618,664,770],
          fill: true
        }
      ]
    },
    options: {
       plugins: {
            // Change options for ALL labels of THIS CHART
                     datalabels: {
                    color: '#000000',
                    anchor: 'end',
                    align : 'bottom',
                    }
                    },
      legend: { display: true },
        scales: {
                        yAxes: [{
                            type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                            display: true,
                            ticks: {
            beginAtZero: false
          },
                            position: 'left',
                        }]
    },
  }
});

 var lineChartData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul','Ags','Sep','Okt'],
            datasets: [{
                label: 'Karantina Hewan',
                borderColor: '#36a2eb',
                backgroundColor:'#ffce56',
                fill: false,
                data: [
                       1326,
                       1239,
                       1054,
                       515,
                       284,
                       937,
                       1105,
                       1231,
                       1174,
                       1150
                    ]
            }, {
                label: 'Karantina Tumbuhan',
                borderColor: '#ff6384',
                backgroundColor:'#36a2eb',
                fill: false,
                data: [
                      2182,
                      1947,
                      1654,
                      908,
                      617,
                      1241,
                      1933,
                      2299,
                      2752,
                      3019
                ]
            }]
        };

        window.onload = function() {
            var ctx2 = document.getElementById('myCert').getContext('2d');
            window.myLine = Chart.Bar(ctx2, {
                data: lineChartData,
                options: {
                   plugins: {
            // Change options for ALL labels of THIS CHART
                     datalabels: {
                    color: '#000000',
                    anchor: 'end',
                    align : 'center',
                    }
                    },
                    responsive: true,
                    hoverMode: 'index',
                    stacked: false,
                    scales: {
                        yAxes: [{
                            type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                            display: true,
                            position: 'left',
                             stacked: true,
                        

                            // grid line settings
                            gridLines: {
                                drawOnChartArea: false, // only want the grid lines for one axis to show up
                            },
                        }],
                    }
                }
            });
        };
