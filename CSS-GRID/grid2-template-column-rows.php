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
            grid-template-columns: 1fr 2fr;
            grid-template-rows: 50px 100px;
        }

        .exemplo2{
            grid-template-columns: 2fr 2fr;
            grid-template-rows: 100px 150px;
        }

        .itemRed{
            grid-column: 2;
            grid-row: 2;
        }
        .itemBlue{
            grid-column: 1;
            grid-row: 2;
        }
        .itemGreen{
            grid-column: 2;
            grid-row: 1;
        }
        .itemYellon{
            grid-column: 1;
            grid-row: 1;
        }

        .exemplo3{
            grid-template-rows:  1fr 2fr 1fr 4fr;

        }
        .exemplo4{
            grid-template-rows:  repeat(3,1fr) 3fr;

        }

        /**Deve ter no mino 150 no maximo 1 fração do espaço*/
        .exemplo5{
            grid-template-rows:  minmax(150px, 1fr) 1fr 2fr 1fr;

        }
        .exemplo6{
            grid-template-rows:  repeat(auto-fit,minmax(50px,1fr));

        }
        .exemplo7{
            grid-template-rows:  repeat(auto-fill,minmax(50px,1fr));

        }

      


    </style>
</head>
<body>
    <div class="main"><?php include 'include/nav.php' ?></div>
    <div>
    <h1>Grid Template Columns and Rows</h1>

    <h2>Exemplo 1: Tamanho fixo e frações de espaço</h2>

    <div class="gridContainer exemplo1">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="green">3</div>
        <div class="yellon">4</div>
    </div>

    <hr>

    <h2>Exemplo 2: Posições diferentes</h2>

    <div class="gridContainer exemplo2">
        <div class="red itemRed">1</div>
        <div class="blue itemBlue">2</div>
        <div class="green itemGreem">3</div>
        <div class="yellon itemYellon">4</div>
    </div>

    <hr>

    <div>


</body>
</html>


