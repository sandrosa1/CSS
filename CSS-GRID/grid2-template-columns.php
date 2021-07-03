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
            grid-template-columns: 30px 50px 20px 60px;

        }
        .exemplo2{
            grid-template-columns: 30% 40% 20% 10%;

        }

        /**Nesse exemplo a 4fr e 4 vezes maior que a primeira */
        .exemplo3{
            grid-template-columns:  1fr 2fr 1fr 4fr;

        }
        .exemplo4{
            grid-template-columns:  repeat(3,1fr) 3fr;

        }

        /**Deve ter no mino 150 no maximo 1 fração do espaço*/
        .exemplo5{
            grid-template-columns:  minmax(150px, 1fr) 1fr 2fr 1fr;

        }
        .exemplo6{
            grid-template-columns:  repeat(auto-fit,minmax(50px,1fr));

        }
        .exemplo7{
            grid-template-columns:  repeat(auto-fill,minmax(50px,1fr));

        }

      


    </style>
</head>
<body>
    <div class="main"><?php include 'include/nav.php' ?></div>
    <div>
    <h1>Grid Template Columns</h1>

    <h2>Exemplo 1: Tamanho em pixels</h2>

    <div class="gridContainer exemplo1">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="green">3</div>
        <div class="yellon">4</div>
    </div>

    <hr>


    <h2>Exemplo 2: Tamanho em porcentagem</h2>

    <div class="gridContainer exemplo2">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="green">3</div>
        <div class="yellon">4</div>
    </div>

    <hr>

    <h2>Exemplo 3: Tamanho em fração de espaço</h2>

    <div class="gridContainer exemplo3">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="green">3</div>
        <div class="yellon">4</div>
    </div>

    <hr>


    <h2>Exemplo 4: Repeat</h2>

    <div class="gridContainer exemplo4">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="green">3</div>
        <div class="yellon">4</div>
        
    </div>

    <hr>

    <h2>Exemplo 5: Min Max</h2>

    <div class="gridContainer exemplo5">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="green">3</div>
        <div class="yellon">4</div>
    </div>

    <hr>

    <h2>Exemplo 6: Auto fit</h2>

    <div class="gridContainer exemplo6">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="green">3</div>
        <div class="yellon">4</div>
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="green">3</div>
        <div class="yellon">4</div>
    </div>

    <hr>


    <h2>Exemplo 7: Auto fill</h2>

    <div class="gridContainer exemplo7">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="green">3</div>
        <div class="yellon">4</div>
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="green">3</div>
        <div class="yellon">4</div>
    </div>

    <hr>
    <div>
</body>
</html>


