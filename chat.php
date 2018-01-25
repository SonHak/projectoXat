
<script src="js/modernizr.min.js" type="text/javascript"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/normalize.min.css">

<link rel='stylesheet prefetch' href='css/animate.min.css'>

<link rel="stylesheet" href="css/style-chat.css">

<h2>CHAT</h2>
<button id="btnChat" class="btn btn-success btn-lg" style="border-radius: 10px" onclick="startChat()">Entrar</button>
<div id="boxChat" class="wrapper">
    <nav class="nav" id="nav">
        <div class="default-nav">
            <div class="main-nav">
                <div class="toggle"></div>
                <div class="main-nav-item"><a class="main-nav-item-link" href="#">Sala 1</a></div>
                <div class="options"></div>
            </div>
        </div>
    </nav>
    <div class="inner" id="inner">
        <div class="content" id="content"></div>
    </div>
    <div class="bottom" id="bottom">
        <textarea class="input" id="input"></textarea>
        <div class="send" id="send"></div>
    </div>
</div>
<script src='js/jquery2.1.3.min.js'></script>
<script  src="js/chat.js"></script>

