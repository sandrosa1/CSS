<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css" type="text/css" />
    <title>Flex</title>

    <style>
        /* Coloca todos os itens na mesma linha com o tamanho necessário para o conteúdo*/
        .flexContainer{
            display: flex;
        }
        .red{
            flex:1;

        }
        .blue{
            flex:2;
            
        }
        .yellon{
            flex:3;
            
        }
        .green{
            flex:4;
            
        }

        .directionColumn{
            flex-direction: column;
            /* Precisa de uma altura maxima */
            height: 300px;
        }
    </style>

</head>
<body>

<div>
    <div><?php include 'include/nav.php' ?></div>

    <h1>Flex </h1>


    <h2>Flex Row</h2>
    <div class="flexContainer">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>

    <h2>Flex Column</h2>
    <div class="flexContainer directionColumn">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>


</div>
</body>
</html>
