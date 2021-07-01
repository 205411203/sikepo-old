/* globals Chart:false, feather:false */

  // Graphs
  var ctx = document.getElementById('myChart')
  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul','Ags','Sep'],
      datasets: [{
        data: [558.07,1581.10,2666.03,3369.28,4378.58,5104.51,6148.21,7766.40,8430.71],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#3cba9f',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
       plugins: {
            // Change options for ALL labels of THIS CHART
                     datalabels: {
                    color: '#000000',
                    anchor: 'center',
                    align : 'bottom',
                    }
                    },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      },
      legend: {
        display: false
      }
    }
  });

   var lineChartData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul','Ags','Sep'],
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
                       1174 
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
                      2752 
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
