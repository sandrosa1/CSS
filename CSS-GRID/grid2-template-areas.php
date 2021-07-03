<!DOCTYPE html>
<html lang="pt-BR>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css" type="text/css" />
    <title>CSS Grid - Content </title>
    <style>
        .gridContainer{
            display: grid;

        }
        .exemplo1{
            grid-template-areas:
            "vermelho verde"
            "amarelo azul"
        }

        .exemplo2{
            grid-template-areas:
            "azul verde verde verde "
            "azul amarelo vermelho vermelho"
        }

        .exemplo3{
            grid-template-areas:
            "azul amarelo verde verde"
            "azul amarelo vermelho vermelho"
        }

        .exemplo4{
            grid-template:
            "azul verde" 50px
            "amarelo vermelho" 100px
        }

        .exemplo5{
            grid-template:
            "azul verde" 50px
            "amarelo vermelho" 100px
            /2fr 1fr
        }

        .exemplo6{
            grid-template:
            "azul verde verde verde" 80px
            "azul amarelo vermelho vermelho" 60px
            /1fr 3fr 2fr 1fr
        }


        .itemRed{
           grid-area: vermelho;
        }
        .itemBlue{
           grid-area: azul;
            
        }
        .itemGreen{
            grid-area: verde;
          
        }
        .itemYellon{
            grid-area: amarelo;
           
        }


      
    </style>
</head>
<body>
    <div class="main"><?php include 'include/nav.php' ?></div>
    <div>
    <h1>Grid Template </h1>

    <h2>Exemplo 1: Template areas</h2>

    <div class="gridContainer exemplo1">
        <div class="red itemRed">1</div>
        <div class="blue itemBlue">2</div>
        <div class="green itemGreen">3</div>
        <div class="yellon itemYellon">4</div>
    </div>

    <hr>

    <h2>Exemplo 2: Template areas tamanho irregulares</h2>

    <div class="gridContainer exemplo2">
        <div class="red itemRed">1</div>
        <div class="blue itemBlue">2</div>
        <div class="green itemGreen">3</div>
        <div class="yellon itemYellon">4</div>
    </div>

    <hr>

    <h2>Exemplo 3: Template areas tamanho irregulares</h2>

    <div class="gridContainer exemplo3">
        <div class="red itemRed">1</div>
        <div class="blue itemBlue">2</div>
        <div class="green itemGreen">3</div>
        <div class="yellon itemYellon">4</div>
    </div>

    <hr>

    <h2>Exemplo 4: Template tamanho irregulares e alturas pixels</h2>

    <div class="gridContainer exemplo4">
        <div class="red itemRed">1</div>
        <div class="blue itemBlue">2</div>
        <div class="green itemGreen">3</div>
        <div class="yellon itemYellon">4</div>
    </div>

    <hr>
    <h2>Exemplo 5: Template tamanho irregulares e alturas pixels/larguras fr</h2>

    <div class="gridContainer exemplo5">
        <div class="red itemRed">1</div>
        <div class="blue itemBlue">2</div>
        <div class="green itemGreen">3</div>
        <div class="yellon itemYellon">4</div>
    </div>

    <hr>

    <h2>Exemplo 6: Template tamanho irregulares e alturas pixels/larguras fr</h2>

    <div class="gridContainer exemplo6">
        <div class="red itemRed">1</div>
        <div class="blue itemBlue">2</div>
        <div class="green itemGreen">3</div>
        <div class="yellon itemYellon">4</div>
    </div>

    <hr>
    </div>

</body>
</html>


