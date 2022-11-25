<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../galeria/galeria.css">
    <title>Galeria</title>
</head>

<body>
    <header>
        <div class="logo"><img src="../imagens/logo.png" alt="logo"></div>
            <ul>
                <li>
                    <a href="../login/index.php" class="active">Sair</a>
                </li>
            </ul>
    </header>
    <div class="slide-container">
        <span class="slider-span" id="slider-span1"></span>
        <span class="slider-span" id="slider-span2"></span>
        <span class="slider-span" id="slider-span3"></span>
        <div class="image-slider">
            <div class="slides-div" id="slide-1">
                <img src="../imagens/cat1.jpg" alt="" class="img" id="img1">
                <a href="#slider-span1" class="button" id="button-1"></a>
            </div>
            <div class="slides-div" id="slide-2">
                <img src="../imagens/cat2.jpg" alt="" class="img" id="img2">
                <a href="#slider-span2" class="button" id="button-2"></a>
            </div>
            <div class="slides-div" id="slide-3">
                <img src="../imagens/cat3.jpg" alt="" class="img" id="img3">
                <a href="#slider-span3" class="button" id="button-3"></a>
            </div>
        </div>
    </div>
</body>


</html>