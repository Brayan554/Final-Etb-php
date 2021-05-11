<!DOCTYPE html>
<html>
<head>
	<title>Graficos</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    

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
         
          margin-bottom: 50px;
          text-align: center;
          font-family: 'Roboto Condensed', sans-serif;
          font-size:40px;
          color: black;
        }
        p{
          font-size: 35px;
          font-family: 'Girassol', cursive;
        }
        B{
            COLOR:#40E0D0;
            font-size: 30px;
        }
        
    </style>
</head>
<body>

    <H1 >Grafica Informe <b>Enero</b></H1>
    <div class="chart-container">
    <p>Enero <b> G-Barras</b></p>
  	<canvas id="myChart"></canvas>
    </div>
    <div class="chart-container">
    <p>Enero <b> G-Lineal</b></p>
  	<canvas id="myChart2"></canvas>
    </div>
    <div class="chart-container">
    <p>Enero <b> G-Circular</b></p>
  	<canvas id="myChart3"></canvas>
    </div>
    <div class="chart-container">
    <p>Enero <b> G-Polar</b></p>
  	<canvas id="myChart4"></canvas>
    </div>
    <div class="chart-container">
    <p>Enero <b> G-Radar</b></p>
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
        labels: ['Exitosas 46 = 80,70 %',
          'Aplazadas  3 = 5,2 %',
          'Canceladas 8 =  14,03 %'
        ],
        datasets: [{
            label:['# 57 = 100 %']  ,
            data: [46, 3, 8],
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
        labels: ['Exitosas 46 = 80,70 %',
          'Aplazadas  3 = 5,2 %',
          'Canceladas 8 =  14,03 %'
        ],
        datasets: [{
            label:['# 57 = 100 %']  ,
            data: [46, 3, 8],
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
        labels: ['Exitosas 46 = 80,70 %',
          'Aplazadas  3 = 5,2 %',
          'Canceladas 8 =  14,03 %'
        ],
        datasets: [{
            label:['# 57 = 100 %']  ,
            data: [46, 3, 8],
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
        labels: ['Exitosas 46 = 80,70 %',
          'Aplazadas  3 = 5,2 %',
          'Canceladas 8 =  14,03 %'
        ],
        datasets: [{
            label:['# 57 = 100 %']  ,
            data: [46, 3, 8],
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
        labels: ['Exitosas 46 = 80,70 %',
          'Aplazadas  3 = 5,2 %',
          'Canceladas 8 =  14,03 %'
        ],
        datasets: [{
            label:['# 57 = 100 %']  ,
            data: [46, 3, 8],
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