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
            background-color: #444;
            height: 200px;

        }

        .exemplo1{
            grid-template-columns: 50px 50px;
            grid-template-rows: 50px 50px;
            /* end center space-around*/
            justify-content: start;
        }

        .exemplo2{
            grid-template-columns: 50px 50px;
            grid-template-rows: 50px 50px;
            justify-content: end;
        }
        .exemplo3{
            grid-template-columns: 50px 50px;
            grid-template-rows: 50px 50px;
            justify-content: center;
        }
        .exemplo4{
            grid-template-columns: 50px 50px;
            grid-template-rows: 50px 50px;
            justify-content: space-around;
        }
        .exemplo5{
            grid-template-columns: 50px 50px;
            grid-template-rows: 50px 50px;
            justify-content: space-between;
        }
        .exemplo6{
            grid-template-columns: 50px 50px;
            grid-template-rows: 50px 50px;
            justify-content: space-evenly;
        }
        .exemplo7{
            grid-template-columns: 50px 50px;
            grid-template-rows: 50px 50px;
            justify-content: center;
            align-content: end;
        }
        .exemplo8{
            grid-template-columns: 50px 50px;
            grid-template-rows: 50px 50px;
            justify-content: center;
            align-content: space-around;
        }
        .exemplo9{
            grid-template-columns: 50px 50px;
            grid-template-rows: 50px 50px;
            justify-content: center;
            align-content: space-between;
        }
        .exemplo10{
            grid-template-columns: 50px 50px;
            grid-template-rows: 50px 50px;
            justify-content: center;
            align-content: space-evenly;
        }

        .exemplo11{
            grid-template-columns: 50px 50px;
            grid-template-rows: 50px 50px;
            justify-content: center;
            align-content: center;
        }
        .exe1{
            justify-items: start;
        }

        .exe2{
            justify-items: end;
        }
        .exe3{
            justify-items: stretch;
        }
        .exe4{
            justify-items: center;
        }
        .exe5{
            justify-items: center;
            align-items: center;
        }
        .exe6{
            justify-items: center;
            align-items: start;
        }
        .exe7{
            justify-items: center;
            align-items: end;
        }
        .exe8{
            justify-items: center;
            align-items: stretch;
        }

        .itemYellon{
            justify-self: end;
            align-self: end;
        }

    </style>
</head>
<body>

    <div class="main"><?php include 'include/nav.php' ?></div>
<div>
    <h1>Alinhamentos</h1>
    <h2>Alinhamento do conteúdo do grid</h2>
    <h3>Exemplo 1:justify-content: start </h3>

    <div class="gridContainer exemplo1">
        <div class="red ">1</div>
        <div class="blue ">2</div>
        <div class="green ">3</div>
        <div class="yellon ">4</div>
    </div>

    <hr>
    <h2>Alinhamento do conteúdo do grid</h2>
    <h3>Exemplo 2:justify-content: end</h3>

    <div class="gridContainer exemplo2">
        <div class="red ">1</div>
        <div class="blue ">2</div>
        <div class="green ">3</div>
        <div class="yellon ">4</div>
    </div>

    <hr>
    <h2>Alinhamento do conteúdo do grid</h2>
    <h3>Exemplo 3:justify-content: center</h3>

    <div class="gridContainer exemplo3">
        <div class="red ">1</div>
        <div class="blue ">2</div>
        <div class="green ">3</div>
        <div class="yellon ">4</div>
    </div>

    <hr>
    <h2>Alinhamento do conteúdo do grid</h2>
    <h3>Exemplo 4:justify-content: space-around </h3>

    <div class="gridContainer exemplo4">
        <div class="red ">1</div>
        <div class="blue ">2</div>
        <div class="green ">3</div>
        <div class="yellon ">4</div>
    </div>

    <hr>
    <h2>Alinhamento do conteúdo do grid</h2>
    <h3>Exemplo 5:justify-content: space-between </h3>

    <div class="gridContainer exemplo5">
        <div class="red ">1</div>
        <div class="blue ">2</div>
        <div class="green ">3</div>
        <div class="yellon ">4</div>
    </div>

    <hr>
    <h2>Alinhamento do conteúdo do grid</h2>
    <h3>Exemplo 6:justify-content: space-evenly</h3>

    <div class="gridContainer exemplo6">
        <div class="red ">1</div>
        <div class="blue ">2</div>
        <div class="green ">3</div>
        <div class="yellon ">4</div>
    </div>

    <hr>
    <h2>Alinhamento do conteúdo do grid</h2>
    <h3>Exemplo 7:justify-content: center / align-content: end</h3>

    <div class="gridContainer exemplo7">
        <div class="red ">1</div>
        <div class="blue ">2</div>
        <div class="green ">3</div>
        <div class="yellon ">4</div>
    </div>

    <hr>
    <h2>Alinhamento do conteúdo do grid</h2>
    <h3>Exemplo 8:justify-content: center / align-content: space around</h3>

    <div class="gridContainer exemplo8">
        <div class="red ">1</div>
        <div class="blue ">2</div>
        <div class="green ">3</div>
        <div class="yellon ">4</div>
    </div>

    <hr>
    <h2>Alinhamento do conteúdo do grid</h2>
    <h3>Exemplo 9:justify-content: center / align-content: space betwen</h3>

    <div class="gridContainer exemplo9">
        <div class="red ">1</div>
        <div class="blue ">2</div>
        <div class="green ">3</div>
        <div class="yellon ">4</div>
    </div>

    <hr>
    <h2>Alinhamento do conteúdo do grid</h2>
    <h3>Exemplo 10:justify-content: center / align-content: space evenly</h3>

    <div class="gridContainer exemplo10">
        <div class="red ">1</div>
        <div class="blue ">2</div>
        <div class="green ">3</div>
        <div class="yellon ">4</div>
    </div>

    <hr>
    <h2>Alinhamento do conteúdo do grid</h2>
    <h3>Exemplo 11:justify-content: center / align-content: space center</h3>

    <div class="gridContainer exemplo11">
        <div class="red ">1</div>
        <div class="blue ">2</div>
        <div class="green ">3</div>
        <div class="yellon ">4</div>
    </div>

    <hr>
    <h2>Alinhamento do conteúdo do grid</h2>
    <h3>Exemplo 11:justify-content: center / align-content: space center</h3>

    <div class="gridContainer exemplo11">
        <div class="red ">1</div>
        <div class="blue ">2</div>
        <div class="green ">3</div>
        <div class="yellon ">4</div>
    </div>

<hr>

    <h2>Alinamento do conteúdo do item</h2>
    <h3>Exemplo 11.1:justify-items: start</h3>

    <div class="gridContainer exemplo11 exe1">
        <div class="red ">1</div>
        <div class="blue ">2</div>
        <div class="green ">3</div>
        <div class="yellon ">4</div>
    </div>

    <hr>
    <h2>Alinamento do conteúdo do item</h2>
    <h3>Exemplo 11.2:justify-items: end</h3>

    <div class="gridContainer exemplo11 exe2">
        <div class="red ">1</div>
        <div class="blue ">2</div>
        <div class="green ">3</div>
        <div class="yellon ">4</div>
    </div>

    <hr>
    <h2>Alinamento do conteúdo do item</h2>
    <h3>Exemplo 11.2:justify-items: stretch</h3>

    <div class="gridContainer exemplo11 exe3">
        <div class="red ">1</div>
        <div class="blue ">2</div>
        <div class="green ">3</div>
        <div class="yellon ">4</div>
    </div>

    <hr>
    <h2>Alinamento do conteúdo do item</h2>
    <h3>Exemplo 11.3:justify-items: center</h3>

    <div class="gridContainer exemplo11 exe4">
        <div class="red ">1</div>
        <div class="blue ">2</div>
        <div class="green ">3</div>
        <div class="yellon ">4</div>
    </div>

    <hr>
    <h2>Alinamento do conteúdo do item</h2>
    <h3>Exemplo 11.4:justify-items: center/ align-items:center</h3>

    <div class="gridContainer exemplo11 exe5">
        <div class="red ">1</div>
        <div class="blue ">2</div>
        <div class="green ">3</div>
        <div class="yellon ">4</div>
    </div>

    <hr>
    <h2>Alinamento do conteúdo do item</h2>
    <h3>Exemplo 11.5:justify-items: center/ align-items:start</h3>

    <div class="gridContainer exemplo11 exe6">
        <div class="red ">1</div>
        <div class="blue ">2</div>
        <div class="green ">3</div>
        <div class="yellon ">4</div>
    </div>

    <hr>
    <h2>Alinamento do conteúdo do item</h2>
    <h3>Exemplo 11.6:justify-items: center/ align-items:end</h3>

    <div class="gridContainer exemplo11 exe7">
        <div class="red ">1</div>
        <div class="blue ">2</div>
        <div class="green ">3</div>
        <div class="yellon ">4</div>
    </div>

    <hr>
    <h2>Alinamento do conteúdo do item</h2>
    <h3>Exemplo 11.6:justify-items: center/ align-items:stretch</h3>

    <div class="gridContainer exemplo11 exe8">
        <div class="red ">1</div>
        <div class="blue ">2</div>
        <div class="green ">3</div>
        <div class="yellon ">4</div>
    </div>

    <hr>
    <h2>Alinamento do individual conteúdo do item</h2>

    <div class="gridContainer exemplo11 ">
        <div class="red ">1</div>
        <div class="blue ">2</div>
        <div class="green ">3</div>
        <div class="yellon itemYellon">4</div>
    </div>

    <hr>
    </div>
</body>
</html>


