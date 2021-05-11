<!DOCTYPE html>
<html>
<head>
	<title>Graficos</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
    <style >
        
        canvas{
            border:1px dotted red;

        }
        .chart-container{
            position: relative;
            margin: auto;
            height: 80vh;
            width: 80vw;
        }
        h1{
          text-align: center;
          font-family: "Times New Roman", Times, serif;
        }
        p{
          font-size: 30px;
        }
        B{
            COLOR:#40E0D0;
        }
    </style>
</head>
<body>
    <H1 >Grafica Informe <small><b>Marzo</b></small> </H1>
    <div class="chart-container">
    <p>Marzo <b>(Barras)</b></p>
  	<canvas id="myChart"></canvas>
    </div>
    <div class="chart-container">
    <p>Marzo <b>(Lineal)</b></p>
  	<canvas id="myChart2"></canvas>
    </div>
    <div class="chart-container">
    <p>Marzo <b>(Circular)</b></p>
  	<canvas id="myChart3"></canvas>
    </div>
    <div class="chart-container">
    <p>Marzo <b>(Polar)</b></p>
  	<canvas id="myChart4"></canvas>
    </div>
    <div class="chart-container">
    <p>Marzo <b>(Radar)</b></p>
  	<canvas id="myChart5"></canvas>
    </div>
    <div class="chart-container">
   
    </div>
    
</body>

<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Exitosas 50 = 80,64 %',
          'Aplazadas  12 = 19,35 %',
          'Canceladas 0 =  0 %'
        ],
        datasets: [{
            label:['# 62 = 100 %']  ,
            data: [50, 12, 0],
            backgroundColor: [
                'rgba(0, 255, 204, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(255, 99, 132, 0.2)'  
            ],
            borderColor: [
                'rgb(0, 255, 0)',
                'rgb(255, 215, 0)',
                'rgb(255, 69, 0)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


var ctx2 = document.getElementById('myChart2');
var myChart2 = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: ['Exitosas 50 = 80,64 %',
          'Aplazadas  12 = 19,35 %',
          'Canceladas 0 =  0 %'
        ],
        datasets: [{
            label:['# 62 = 100 %']  ,
            data: [50, 12, 0],
            backgroundColor: [
                'rgba(0, 255, 204, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(255, 99, 132, 0.2)'  
            ],
            borderColor: [
                'rgb(0, 255, 0)',
                'rgb(255, 215, 0)',
                'rgb(255, 69, 0)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


var ctx3 = document.getElementById('myChart3');
var myChart3 = new Chart(ctx3, {
    type: 'pie',
    data: {
        labels: ['Exitosas 50 = 80,64 %',
          'Aplazadas  12 = 19,35 %',
          'Canceladas 0 =  0 %'
        ],
        datasets: [{
            label:['# 62 = 100 %']  ,
            data: [50, 12, 0],
            backgroundColor: [
                'rgba(0, 255, 204, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(255, 99, 132, 0.2)'  
            ],
            borderColor: [
                'rgb(0, 255, 0)',
                'rgb(255, 215, 0)',
                'rgb(255, 69, 0)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var ctx4 = document.getElementById('myChart4');
var myChart4 = new Chart(ctx4, {
    type: 'polarArea',
    data: {
        labels: ['Exitosas 50 = 80,64 %',
          'Aplazadas  12 = 19,35 %',
          'Canceladas 0 =  0 %'
        ],
        datasets: [{
            label:['# 62 = 100 %']  ,
            data: [50, 12, 0],
            backgroundColor: [
                'rgba(0, 255, 204, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(255, 99, 132, 0.2)'  
            ],
            borderColor: [
                'rgb(0, 255, 0)',
                'rgb(255, 215, 0)',
                'rgb(255, 69, 0)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


var ctx5 = document.getElementById('myChart5');
var myChart5 = new Chart(ctx5, {
    type: 'doughnut',
    data: {
         labels: ['Exitosas 50 = 80,64 %',
          'Aplazadas  12 = 19,35 %',
          'Canceladas 0 =  0 %'
        ],
        datasets: [{
            label:['# 62 = 100 %']  ,
            data: [50, 12, 0],
            backgroundColor: [
                'rgba(0, 255, 204, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(255, 99, 132, 0.2)'  
            ],
            borderColor: [
                'rgb(0, 255, 0)',
                'rgb(255, 215, 0)',
                'rgb(255, 69, 0)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});





</script>

</html>