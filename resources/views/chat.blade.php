
<script src="js/modernizr.min.js" type="text/javascript"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/normalize.min.css">

<link rel='stylesheet prefetch' href='css/animate.min.css'>

<link rel="stylesheet" href="{{ url('css/style-chat.css') }}">

<h2>CHAT</h2>
<div class="row center-block" style="margin-top:12px;">
                        @foreach( $arrayChats as $chat )
                            <input type="button" class="btn btn-outline-light col-3" id="{{ $chat->id }}" value="{{ $chat->nombre }}" onclick="cambiarChat({{ $chat->id }})">
                                
                        <!--<input type="button" class="btn btn-outline-light col-3" value="San Ildefons">
                        <input type="button" class="btn btn-outline-light col-3" value="Almeda">
                        <input type="button" class="btn btn-outline-light col-3" value="Rambla">-->
                        @endforeach
                    </div>
<button id="btnChat" class="btn btn-success btn-lg" style="border-radius: 10px" onclick="salirChat()">Salir</button>
<div id="boxChat" class="wrapper" >
    <form id="chatRoom" method="POST">
        {{ csrf_field() }}
        <!-- INPUTS HIDDENS -->
        <input type="text" id="usuario" name="usuario" value='{{$id}}' hidden> 
        <input type="text" id="idChat" name="idChat" value=0 hidden>
        

        <nav class="nav" id="nav">
            <div class="default-nav">
                <div class="main-nav">
                    
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

