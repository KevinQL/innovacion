<!DOCTYPE html>
<html>
<head>
    <title></title>
    
    <link rel="stylesheet" type="text/css" href="modal.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="rndbutton.css">
    <script type="text/javascript" src="event-emiter.min.js"></script>
    <script type="text/javascript" src="canvas-event.min.js"></script>
    <script type="text/javascript" src="canvas-puzzle.min.js"></script>        
</head>
 <style> 
        
        body {
        font-family: arial;
        background-image: url('literarios.jpg');
        }
        
        #glasspane {
            position: absolute;
            left: 50px;
            top: 10px;
            padding: 10px 10px 10px 10px;
         }

         #sizepane {
            position: absolute;
            left: 10px;
            top: 10px;
         }

         #sizepane li {
            border: thin solid rgba(0, 0, 0, 0.6);
            cursor: pointer;
            -webkit-box-shadow: rgba(0,0,0,0.5) 5px 5px 20px;
            -moz-box-shadow: rgba(0,0,0,0.5) 5px 5px 20px;
            box-shadow: rgba(0,0,0,0.5) 5px 5px 20px;
            padding: 1px 1px 1px 1px;
         }

         #glasspane h2 {
            font-weight: normal;
         }

         #glasspane .title {
            font-size: 2em;
            color: rgba(255, 255, 0, 0.8);
         }

         #glasspane img {
            width: 64px;
            height: 48px;
            border: thin solid rgba(0, 0, 0, 0.6);
            cursor: pointer;
            -webkit-box-shadow: rgba(0,0,0,0.5) 5px 5px 20px;
            -moz-box-shadow: rgba(0,0,0,0.5) 5px 5px 20px;
            box-shadow: rgba(0,0,0,0.5) 5px 5px 20px;
         }
         #glasspane img:hover {
            color: yellow;
         }

         #glasspane a {
            text-decoration: none;
            color: #cccccc;
            font-size: 3.5em;
         }

         #glasspane p {
            margin: 10px;
            color: rgba(65, 65, 220, 1.0);
            font-size: 12pt;
            font-family: Palatino, Arial, Helvetica, sans-serif;
         }
      </style>
<body>


<!-- JIGSAW CANVAS -->
<div id="canvas-wrap">
    <canvas id="canvas"></canvas>
    <canvas class="hide" id="image"></canvas>
    <canvas class="hide" id="image-preview"></canvas>
</div>


<!-- MODAL WINDOW -->
<div class="hide" id="overlay"></div>
<div id="modal-window" class="hide">
    <div id="modal-window-msg"></div>
    <a href="#" id="modal-window-close" class="button">Close</a>
</div>


<!-- CONGRATULATION -->
<div id="congrat" class="hide">
    <h1>Felicidades</h1>
    <h2>armaste la imagen del heroe jose olaya</h2>
    <?php 
    $mensaje = $_POST["elem"];
    echo $mensaje;
    ?>
    <!--<h3><span id="time"></span></h3>
    <methform od="post" class="hide" action="" target="save-score" onsubmit="jigsaw.UI.close_lightbox();">
        <label>
        Your Name: <input type="text" name="name" />
        </label>
        <input type="submit" value="Save score" />
        <input type="hidden" id="time-input" name="time"/>
        
    </form>-->
</div>


<!-- CREATE PUZZLE -->
<div class="hide" id="create-puzzle">
    <h1>Choose an image</h1>
    <form id="image-form" id="add-image-form">
        <input type="file" id="image-input">
        <p id="image-error">that's not an image</p>
        <p id="dnd"><i>Or drag one from your computer</i></p>
    </form>
</div>

<!-- HELP -->
<div id="help" class="hide">
    <h2>How to play</h2>
    <ul>
        <li>Change the number of pieces with the selector on the top.<br/>
            <img src="images/selector.png"/>º
        </li>
        
        <li>Use left/right arrows, or right click to rotate a piece.</li>

        <li>Toggle between edge or middle pieces:<br>
            <img src="images/toggle.png"/>
        </li>
    </ul>
    
    <h3>Good luck.</h3>
</div>

<form class="hide" method="post" id="redirect-form">
    <input type="text" name="time" id="t" />
    <input type="text" name="parts" id="p" />
</form>
<div id='glasspane'>
 <img id='startButton' src="daniel a.jpg"/> 
 <img id='startButton2' src="marco.jpg"/>
 <img id='startButton3' src="jose maria.jpg"/>
 <img id='startButton4' src="mariano.jpg"/>
 <img id='startButton5' src="jose carlos.jpg"/>

</div>
<div id='sizepane'>
    <ul>
        <li><a href="#" id="x12">12</a></li>
        <li><a href="#" id="x20">20</a></li>
        <li><a href="#" id="x30">30</a></li>
        <li><a href="#" id="x48">48</a></li>
        <li><a href="#" id="x54">54</a></li>
    </ul>
</div>

</body>
<script type="text/javascript" src="lib2.js"></script>
</html>