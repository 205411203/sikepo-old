  var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep'],
            datasets: [
                {
                    label: 'Kinerja',
                    data: [91.65,91.75,91.8,91.65,91.78,91.82,91.79,91.81,91.93],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: false,
                       
                   }
                    
                }]
            },
        }
    });

var ctx2 = document.getElementById("myChart1").getContext('2d');
    var myChart1 = new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep'],
            datasets: [
              
                {
                    label: 'Kehadiran',
                    data: [92.35,92.15,92.28,92.35,92.70,92.60,92.25,92.40,92.44],
                    borderColor: '#3e95cd',
                    backgroundColor: 'rgba(0,102,255,0.6)',
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: false,
                       
                   }
                    
                }]
            },
        }
    });

