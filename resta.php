<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SODOKU MATEMATICO</title>
    <link rel="stylesheet" href="estilo_resta.css">
    <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/f
ont-awesome/5.15.3/css/all.min.css"/>
</head>
<header>
    <?php include "header.php"; ?>
</header>
<body>
    <br> 
    <div class="contenedor">
        <h1>RESTA</h1>
    
    <table>
        <tr>
            <td class="contiene" >30</td>
            <td class="contiene">-</td>
            <td class="contiene">20 </td>
            <td class="contiene">=</td>
            <td class="no-contiene" id="0"  ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        </tr>
        <tr>
            <td class="contiene">-</td>
            <td></td>
            <td class="contiene">-</td>
            <td></td>
            <td class="contiene">-</td>
        </tr>
        <tr>
            <td class="no-contiene" id="1"  ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">-</td>
            <td class="no-contiene" id="2"  ondrop="drop(event)" ondragover="allowDrop(event)"></td> 
            <td class="contiene">=</td>
            <td class="no-contiene" id="3"  ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        </tr>
        <tr>
            <td class="contiene">=</td>
            <td></td>
            <td class="contiene">=</td>
            <td></td>
            <td class="contiene">=</td>
        </tr>
        <tr>
            <td class="contiene">26</td>
            <td></td>
            <td class="no-contiene" id="4"  ondrop="drop(event)" ondragover="allowDrop(event)"> </td>
            <td></td>
            <td class="contiene" >7</td>
        </tr>
    
    </table>
    <br>
    <div class="contenedor-alternativa">
    <div class="caja" draggable="true" ondragstart="drag(event)" id="a">10</div>
    <div class="caja" draggable="true" ondragstart="drag(event)" id="b">4</div>
    <div class="caja" draggable="true" ondragstart="drag(event)" id="c">1</div>
    <div class="caja" draggable="true" ondragstart="drag(event)" id="d">3</div>
    <div class="caja" draggable="true" ondragstart="drag(event)" id="e">19</div>
</div>
<br>
    <div class="marco">
    <div class="tiempo" id="tiempo">00:00:00.000</div>
    <div class="botones-contenedor">
    <div class="btn" onclick="iniciar()">
    <i class="fas fa-play"></i>
    </div>
    <div class="btn" onclick="pausar()">
    <i class="fas fa-pause"></i>
    </div>
    <div class="btn" onclick="reiniciar()">
    <i class="fas fa-undo-alt"></i>
    </div>
    </div>
    </div>

        <br>
        <br>
        <div class="resultado">
            <h2>resultado</h2>
        </div>
       


</div>
        <script src="tiempo.js"></script>
        <script src="restar.js"></script>
</body>
</html>