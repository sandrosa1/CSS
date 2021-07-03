<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css" type="text/css" />
    <title>Align</title>

    <style>
        /* Coloca todos os itens na mesma linha com o tamanho necessário para o conteúdo*/
        .flexContainer{
            display: flex;
            max-width: 100%;
            height: 300px;
            background-color: #444444;
        }
        .exemplo1 div{
            width: 70px;
            height: 70px;

        }

        .exemplo1-1{
            /* Justify content está no mesmo eixo da direção do flex */
            justify-content: flex-start;
        }
        .exemplo1-2{
            /* Justify content está no mesmo eixo da direção do flex */
            justify-content: flex-end;
        }
        .exemplo1-4{
            /* Justify content está no mesmo eixo da direção do flex */
            justify-content: space-around;
        }
        .exemplo1-5{
            /* Justify content está no mesmo eixo da direção do flex */
            justify-content: space-between;
        }
        .exemplo1-6{
            /* Justify content está no mesmo eixo da direção do flex */
            justify-content: space-evenly;
        } 
        .exemplo1-3-1{
            /* Justify content está no mesmo eixo da direção do flex */
            justify-content:center;
            align-items: start;

        }
        .exemplo1-3-2{
            /* Justify content está no mesmo eixo da direção do flex */
            justify-content:center;
            align-items: center;

        }
        .exemplo1-3-3{
            /* Justify content está no mesmo eixo da direção do flex */
            justify-content:center;
            align-items: end;

        }
        .exemplo2 div{
           width: 250px;
           height: 100px;

        }
        .exemplo2-1{
            flex-wrap: wrap;
            justify-content: center;
            align-content: center;
        }
        .exemplo2-2{
            flex-wrap: wrap;
            justify-content: center;
            align-content: space-around;
        }
        .exemplo2-3{
            flex-wrap: wrap;
            justify-content: center;
            align-content: space-between;
        }
        .exemplo2-4{
            flex-wrap: wrap;
            justify-content: center;
            align-content: space-evenly;
        }
        .exemplo3-1 .green{
            height: 50px;
            align-self:flex-start;
        }
        .exemplo3-2 .green{
            height: 50px;
            align-self: center;
        }
        .exemplo3-3 .green{
            height: 50px;
            align-self:flex-end;
        }
        .exemplo3-4 .green{
            height: 50px;
            width: 50px;
            align-self:flex-end;
            margin-left: 200px;
            
        }

    </style>

</head>
<body>

<div>
    <div><?php include 'include/nav.php' ?></div>

    <h1>Align</h1>


    <h2>Exemplo 1.1: justify-content: Flex-start</h2>
    <div class="flexContainer exemplo1 exemplo1-1">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>
    <h2>Exemplo 1.2: justify-content: flex-end</h2>
    <div class="flexContainer exemplo1 exemplo1-2">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>
    <h2>Exemplo 1.3: justify-content: center</h2>
    <div class="flexContainer exemplo1 exemplo1-3">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>
    <h2>Exemplo 1.4: justify-content: space-around</h2>
    <div class="flexContainer exemplo1 exemplo1-4">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>
    <h2>Exemplo 1.5: justify-content: spcace-between</h2>
    <div class="flexContainer exemplo1 exemplo1-5">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>
    <h2>Exemplo 1.6: justify-content: space-evenly</h2>
    <div class="flexContainer exemplo1 exemplo1-6">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>
    <h2>Exemplo 1.3.1: justify-content: center; align-itens: start; </h2>
    <div class="flexContainer exemplo1  exemplo1-3-1">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>
    <h2>Exemplo 1.3.2: justify-content: center; align-itens: center; </h2>
    <div class="flexContainer exemplo1  exemplo1-3-2">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>
    <h2>Exemplo 1.3.3: justify-content: center; align-itens: end; </h2>
    <div class="flexContainer exemplo1  exemplo1-3-3">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>
  
    <h2>Exemplo 2.1 wrap: justify-content: center; align-content: center; </h2>
    <div class="flexContainer exemplo2 exemplo2-1">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>
    <h2>Exemplo 2.2 wrap: justify-content: center; align-content: space-around; </h2>
    <div class="flexContainer exemplo2 exemplo2-2">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>
    <h2>Exemplo 2.3 wrap: justify-content: center; align-content: space-between; </h2>
    <div class="flexContainer exemplo2 exemplo2-3">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>
    <h2>Exemplo 2.4 wrap: justify-content: center; align-content: space-evenly; </h2>
    <div class="flexContainer exemplo2 exemplo2-4">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>
    <h2>Exemplo 3.1 wrap: align-self: flex-start;</h2>
    <div class="flexContainer exemplo2 exemplo2-1 exemplo3-1">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>
    <h2>Exemplo 3.2 wrap: align-self: center; </h2>
    <div class="flexContainer exemplo2 exemplo2-1 exemplo3-2">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>
    <h2>Exemplo 3.3 wrap: align-self: flex-end; </h2>
    <div class="flexContainer exemplo2 exemplo2-1 exemplo3-3">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>

    <h2>Exemplo 3.4 wrap: align-self: flex-end; com margin </h2>
    <div class="flexContainer exemplo2 exemplo2-1 exemplo3-4">
        <div class="red">1</div>
        <div class="blue">2</div>
        <div class="yellon">3</div>
        <div class="green">4</div>
    </div>
    <hr>
</div>
</body>
</html>
