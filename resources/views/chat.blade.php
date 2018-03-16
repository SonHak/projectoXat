
<script src="js/modernizr.min.js" type="text/javascript"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/normalize.min.css">

<link rel='stylesheet prefetch' href='css/animate.min.css'>

<link rel="stylesheet" href="{{ url('css/style-chat.css') }}">

<h2>CHAT</h2>
<div class="row center-block" style="margin-top:12px;">
                        @foreach( $arrayChats as $chat )
                            <input type="button" class="btn btn-outline-light col-3" id="{{ $chat->id }}" value="{{ $chat->nombre }}" onclick="cambiarChat({{ $chat->id }})">
                        @endforeach
                    </div>
<button id="btnChat" class="btn btn-success btn-lg" style="border-radius: 10px" onclick="salirChat()">Salir</button>

<div id="svgAttributes" style="display:none"> 
        <svg width="128" height="128" viewBox="0 0 128 128">
            <polygon points="64 69.18098709992343 8.574 99.96354534367093 62.945915024477785 67.35482446554468 64 3.963545343670928 65.05408497552222 67.35482446554468 119.426 99.96354534367093 " fill="green"></polygon>
            <text  x="65" y="70" text-anchor="middle" fill="white" font-size="15" >loading</text>
        </svg>
</div>

<div id="boxChat" class="wrapper" style="display: none">
    <form id="chatRoom" method="POST">
        {{ csrf_field() }}
        <!-- INPUTS HIDDENS -->
        <input type="text" id="usuario" name="usuario" value='{{$id}}' hidden> 
        <input type="text" id="idChat" name="idChat" value=0 hidden>
        

        <nav class="nav" id="nav">
            <div class="default-nav">
                <div class="main-nav">
                    <i class="" id="tituloSala" style="font-size:30px; margin-top: 20px"></i>
                </div>
            </div>
        </nav>
        <div class="inner" id="inner">
            <div class="content" id="content-mensajes" style="vertical-align: middle;">

            </div>
        </div>
        <div class="bottom" id="bottom">
            <textarea class="input" name="texto" id="texto"></textarea>
            <div class="send" id="send" onclick="ajaxChat()"></div>
        </div>
    </form>
</div>
<script src='js/jquery2.1.3.min.js'></script>
<script  src="js/chat.js"></script>

