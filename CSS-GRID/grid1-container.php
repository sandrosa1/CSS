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

        .gridContainerInline{
            display: inline-grid;
        }


    </style>
</head>
<body>
    <div class="main"><?php include 'include/nav.php' ?></div>
<div>
    <h1>Grid Conteiner</h1>

    <h2>Exemplo 1: grid Container</h2>

    <div class="gridContainer">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="green">3</div>
        <div class="yellon">4</div>
    </div>

    <hr>
    <h2>Exemplo 2: grid Container In Line</h2>

    <div class="gridContainerInline">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="green">3</div>
        <div class="yellon">4</div>
    </div>

    <hr>
</div>
</body>
</html>


