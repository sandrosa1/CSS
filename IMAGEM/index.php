<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css" type="text/css" />
    <title>Filtros</title>
    <style>
        .blur{
            filter:blur(10px);
        }
        .brightness{
            filter:brightness(200%);
        }

        .contrast{
            filter: contrast(400%);

        }
        .grayscale{
            filter: grayscale(100%);

        }
        .opacity{
            /* Utilizando o filtro o navegador escolhe se vai usar ou não aceleração de hardware */
            filter:opacity(10%);
        }
        /* 100% é po padrão */
        .saturate{
            filter: saturate(200%);

        }
        /* 0 é o padrão */
        .sepia{
            filter: sepia(100%);

        }
        .hueRotate{
            filter: hue-rotate(90deg);

        }

        /* Off-set horizontal/ deslocamento vertical/ intencidade do bloer/ Cor da sombra */
        .dropShadow{
            filter: drop-shadow(10px 10px 10px #fff);

        }
        .brightnessContrast{
            filter:brightness(200%) contrast(200%);
        }

        .blurTransition{
            filter: blur(20px);
            transition: filter 0.2s;
        }

        .blurTransition:hover{
            filter: blur(0px);
        }


        @keyframes hueRotateAnimation {
            from {filter:hue-rotate(0deg)}
            to {filter: hue-rotate(360deg)}
        }
        .hueAnimation{
            animation: hueRotateAnimation 2s linear infinite;
        }
    
    </style>

</head>
<body>

<div><?php include 'include/nav.php' ?></div>
<h1>Filtros em CSS</h1>

<h2>Imagem Original</h2>
<img src="image/html-css-js.png" alt="imagem teste" >
<hr>

<h2>Blur</h2>
<img src="image/html-css-js.png" alt="imagem teste" class="blur">
<hr>

<h2>Brightness</h2>
<img src="image/html-css-js.png" alt="imagem teste" class="brightness">
<hr>

<h2>Contrast</h2>
<img src="image/html-css-js.png" alt="imagem teste" class="contrast">
<hr>

<h2>Grayscale</h2>
<img src="image/html-css-js.png" alt="imagem teste" class="grayscale">
<hr>

<h2>Opacity</h2>
<img src="image/html-css-js.png" alt="imagem teste" class="opacity">
<hr>

<h2>Saturate</h2>
<img src="image/html-css-js.png" alt="imagem teste" class="saturate">
<hr>

<h2>Sepía</h2>
<img src="image/html-css-js.png" alt="imagem teste" class="sepia">
<hr>

<h2>Hue rotate</h2>
<img src="image/html-css-js.png" alt="imagem teste" class="hueRotate">
<hr>


<h2>Drop shadow</h2>
<img src="image/html-css-js.png" alt="imagem teste" class="dropShadow">
<hr>

<h2>Brightness + Contrast</h2>
<img src="image/html-css-js.png" alt="imagem teste" class="brightnessContrast">
<hr>

<h2>Blur + transition</h2>
<img src="image/html-css-js.png" alt="imagem teste" class="blurTransition">
<hr>

<h2>Hue rotate + animation</h2>
<img src="image/html-css-js.png" alt="imagem teste" class="hueAnimation">
<hr>

</body>
</html>