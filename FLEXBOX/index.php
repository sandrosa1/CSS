<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css" type="text/css" />
    <title>Flex Container</title>

    <style>
        /* Coloca todos os itens na mesma linha com o tamanho necessário para o conteúdo*/
        .flexContainer{
            display: flex;
        }
        /* Já e o padrão na a necessidade de colocar */
        .directionRow{
           flex-direction: row; 
        }

        .directionColumn{
           flex-direction: column; 
        }

        .directionRowReverse{
           flex-direction: row-reverse;
        }
        .directionColumnReverse{
           flex-direction: column-reverse;
        }
    </style>

</head>
<body>

<div>
    <div><?php include 'include/nav.php' ?></div>

    <h1>Flex Container</h1>


    <h2>Flex direction row</h2>
    <div class="flexContainer directionRow">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>

    <h2>Flex direction Column</h2>

    <div class="flexContainer directionColumn">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>

    <h2>Flex direction Row Reverse</h2>

    <div class="flexContainer directionRowReverse">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>

    <h2>Flex direction Column Reverse</h2>

    <div class="flexContainer directionColumnReverse">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>

 
</div>
</body>
</html>
