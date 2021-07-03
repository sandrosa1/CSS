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
            grid-template:
            "vermelho verde" 50px
            "amarelo azul" 100px
            / 2fr 1fr;
            gap:20px;
        }

        .exemplo2{
            grid-template:
            "azul verde verde verde "80px
            "azul amarelo vermelho vermelho" 60px
            /1fr 3fr 2fr 1fr;
            column-gap: 10px;
            row-gap:40px;
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
    <h1>Gap</h1>

    <h2>Exemplo 1: 20px para colunas e linhas</h2>

    <div class="gridContainer exemplo1">
        <div class="red itemRed">1</div>
        <div class="blue itemBlue">2</div>
        <div class="green itemGreen">3</div>
        <div class="yellon itemYellon">4</div>
    </div>

    <hr>

    <h2>Exemplo 2: 10px para colunas e 40px para linhas</h2>

    <div class="gridContainer exemplo2">
        <div class="red itemRed">1</div>
        <div class="blue itemBlue">2</div>
        <div class="green itemGreen">3</div>
        <div class="yellon itemYellon">4</div>
    </div>

    <hr>

    </div> 


</body>
</html>


