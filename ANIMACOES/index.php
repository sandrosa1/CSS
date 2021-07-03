<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css" type="text/css" />
    <title>Animation</title>
    <style>

        .item{
            width: 100px;
            height: 100px;
        }


        .transitionBackground{
            transition: background-color 2s;
        }
        .transitionBackground:hover{
            background-color: red;
        }


        .transitionSize{
            transition: transform 0.5s;
        }
        .transitionSize:hover{
            transform: scale(1.5);
        }

        .transitionRotate{
            transition: transform 0.5s;
        }
        .transitionRotate:hover{
            transform: rotateZ(360deg) ;
        }

        .transitionDelay{
            /* O segundo parametro espera 0.5 segundo para executar o width */
            transition: width 1s 0.5s, height 1s;
            /* O delay pode ser utilizado em varias transitions */
        }
        .transitionDelay:hover{   
            width: 200px;
            height: 200px;
        }
        .transitionDelay2{
            /* O segundo parametro espera 0.5 segundo para executar o width */
            transition: width 1s 0.5s, height 1s;
            /* O delay pode ser utilizado em varias transitions */
        }
        .transitionDelay2:hover{   
            width: 200px;
            height: 200px;
        }
        .transitionDelay3{
            /* O segundo parametro espera 0.5 segundo para executar o scale */
            transition: transform 1s 0.5s;
            /* O delay pode ser utilizado em varias transitions */
        }
        .transitionDelay3:hover{   
            transform: scale(1.5);
        }


        .transitionCkecked{
            width: 50px;
            height: 50px;
            transition: transform 0.5s;
        }
        .transitionCkecked:checked{
            transform: rotateY(360deg) ;
        }

        .transitionRadio{
            width: 50px;
            height: 50px;
            transition: transform 1s;
        }
        .transitionRadio:checked{
            transform: scale(1.3);
        }
        .transitionText{
            width: 100%;
            height: 50px;
            font-size: 18px;
            text-align: center;
            transition: transform 1s;
        }
        .transitionText:focus{
            transform: scaleY(0.5) scaleX(0.7) rotateZ(10deg);
        }

    
    </style>
</head>
<body>
<div><?php include 'include/nav.php' ?></div>


        <h1>Transições</h1>

        <h2>Hover</h2>
        <section>
            <div class="item blue transitionBackground">Azul</div>
            <div class="item yellon transitionBackground">Amarelo</div>
            <div class="item green transitionSize">Verde</div>
            <div class="item red transitionRotate">Vermelha</div>  
        </section>

        <hr>
        <h2>Transition Delay</h2>
        <section>
            <div class="item red transitionDelay">Vermelha</div>  
            <div class="item blue transitionDelay2">Azul</div>  
            <div class="item yellon transitionDelay3">Amarelo</div>  
        </section>
        <hr>
        <h2>Checked</h2>
        <section>
            <input type="checkbox"  class="transitionCkecked">
            <input type="radio" name="radio" class="transitionRadio">
            <input type="radio" name="radio" class="transitionRadio">
        </section>

        <hr>
        <h2>Focus</h2>
        <section>
            <input type="text"  class="transitionText">
        </section>
 
</body>
</html>