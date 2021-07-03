<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css" type="text/css" />
    <title>Flex Wrap</title>

    <style>
        /* Coloca todos os itens na mesma linha com o tamanho necessário para o conteúdo*/
        .flexContainer{
            display: flex;
        }

        .flexContainer div{
            width: 50%;
        }
        .noWrap{
            flex-wrap: nowrap;
        }
        .wrap{
            flex-wrap: wrap;
        }
        .wrapReverse{
            flex-wrap: wrap-reverse;
        }

    </style>

</head>
<body>

<div>
    <div><?php include 'include/nav.php' ?></div>

    <h1>Flex wrap</h1>


    <h2>No Wrap</h2>
    <div class="flexContainer noWrap">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>

    <h2>Wrap</h2>
    <div class="flexContainer wrap">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>

    <h2>Wrap Reverse</h2>
    <div class="flexContainer wrapReverse">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>


</div>
</body>
</html>
