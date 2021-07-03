<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css" type="text/css" />
    <title>Animation</title>
    <style>

       .container{
           width: 300px;
           height: 300px;
           position: relative;
       }

       .relogio,
       .horas,
       .minutos{
           width: 100%;
           height: 100%;
           position: absolute;
           top: 0;
           left: 0;
       }

       .minutos{
           animation: girarPonteiro 5s linear infinite;
       }
       @keyframes girarPonteiro {
           from{transform: rotateZ(0deg);}
           to{transform: rotateZ(360deg);}
       }

       .horas{
           animation: girarPonteiro 60s linear infinite;
       }
       @keyframes girarPonteiro {
           from{transform: rotateZ(0deg);}
           to{transform: rotateZ(360deg);}
       }
    
    </style>
</head>
<body>
<div><?php include 'include/nav.php' ?></div>


        <h1>Relógio</h1>

        <div class="container">
            <img src="./images/clock.svg" alt="" class="relogio">
            <img src="./images/hour.svg" alt="" class="horas">
            <img src="./images/minute.svg" alt="" class="minutos">
        </div>

</html>