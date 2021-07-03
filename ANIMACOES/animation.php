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

        .item:hover{
            animation-play-state: paused;
        }


        .animationFadeIn{
            animation: fadeIn 2s linear ;
        }
        @keyframes fadeIn{
            from{opacity: 0;}
            to{opacity: 1;}
        }
        .animationFadeOut{
            animation: fadeIn 2s linear;
            animation-direction: reverse;
            /* Utiliza a referencia do ultimo frame */
            animation-fill-mode: forwards;
        }
        .animationFadeInOut{
            animation: fadeInFadeOut 2s linear infinite;

        }
        @keyframes fadeInFadeOut {
           0%{opacity: 1;}
           50%{opacity: 0.2;}
           100%{opacity: 1;} 
        }



        .spinner{
            border-radius: 50%;
        }
        @keyframes rotate {
           from {transform: rotateZ(0deg);}
           to {transform: rotateZ(360deg);}
        }
        .animationSpinner{
            animation: rotate 2s linear infinite;
        }
        .animationSpinnerEase{
            animation: rotate 2s ease infinite;
        }
        .animationSpinnerEaseOut{
            animation: rotate 2s ease-out infinite;
        }
        .animationSpinnerEaseOut1{
            animation: rotate 2s ease-out infinite;
            animation-timing-function: cubic-bezier(0.075, 0.82, 0.165, 1);
        }
        .animationSpinnerEaseOut2{
            animation: rotate 2s ease-out infinite;
            animation-timing-function: ease-in;
        }
        .animationSpinnerEaseOut3{
            animation: rotate 2s ease-out infinite;
            animation-timing-function: ease-in-out;
        }


        .positionBox{
            width: 100%;
            height: 300px;
            background-color: #444;
            position: relative;
        }
        .animationPosition{
            position: absolute;
            animation: position 4s linear infinite;
            animation-direction: alternate;
        }
        @keyframes position{
            0%{
                top: 0;
                left: 0;
            }
            35%{
                top: 0;
                left: calc(100% - 100px);
            }
            50%{
                top: calc(100% - 100px);
                left: calc(100% - 100px);
            }
            85%{
                top: calc(100% - 100px);
                left: 0;
            }
            100%{
                top: 0;
                left: 0;
            }
        }



        .animationContent::after{
            content:'';
            animation: promocao 2s linear infinite;
        }

        @keyframes promocao {
            0%{content: 'Promoção'}
            50%{content: ''}
            60%{content: 'Frete Grátis'}
        }
      
    </style>
</head>
<body>

<div><?php include 'include/nav.php' ?></div>


        <h1>Animation</h1>

        <h2>Fade</h2>
        <section>
            <div class="item blue animationFadeIn">Azul</div> 
            <div class="item green animationFadeOut">Verde</div> 
            <div class="item red animationFadeInOut">Vermelho</div> 
        </section>

        <hr>

        <h2>Spinners</h2>
        <section>
            <div class="item blue spinner animationSpinner ">Linear</div>
            <div class="item green spinner animationSpinnerEase ">Ease</div>
            <div class="item red spinner animationSpinnerEaseOut ">Ease-out</div>
            <div class="item red spinner animationSpinnerEaseOut1 ">Ease-out1</div>
            <div class="item red spinner animationSpinnerEaseOut2 ">Ease-in</div>
            <div class="item red spinner animationSpinnerEaseOut3 ">Ease-in-out</div>
        </section>
        <hr>

        <h2>Position</h2>
        <section class="positionBox">
            <div class="item  yellon  animationPosition ">Amarelo</div>   
        </section>
        <hr>

        <h2>Content</h2>
        <section >
            <div class="item  red animationContent"></div>   
        </section>
        <hr>
     
</body>
</html>