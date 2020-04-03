<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700,700i&amp;subset=vietnamese" rel="stylesheet">
        <!-- Title  -->
        <title>@yield('title')</title>
        <!-- <title>South - Real Estate Agency Template | Home</title> -->

        <!-- Favicon  -->
        <link rel="icon" href="{{ asset('south/img/core-img/favicon.ico') }}">

        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('south/style.css') }}">
        <link rel="stylesheet" href="{{ url('theme/css/custom.css') }}">
        @stack('css')
        <style>
            .icon-chatbox{
                position: fixed;
                z-index: 9998;
                bottom: 104px;
                right: 13px;
                width: 107px;
            }

            .card-chatbox{
                width: 500px;
                height: 500px;
                background: white;
                position: fixed;
                bottom: 10px;
                right: 115px;
                z-index: 9999;
            }

            .card-chatbox .card-content{
                height: 350px;
                background: #80808026;
            }
        </style>
    </head>
    <body>
        @yield('main')
        <a href="javascript:;"><img src="{{ asset('/upload/chatbox_icon.png') }}" class="icon-chatbox" alt="icon-chatbox"></a>
        <div class="card card-chatbox">
            <div class="card-header">Chatbox
            <button class="btn float-right border-0 close">X</button>
            </div>
            <div class="card-body">
                <div class="card-content">
                
                </div>
                <div class="input-checkbox mt-2">
                <form action="">
                    <input type="text" class="form-control float-left" style="width: 86%">
                    <button class="btn btn-info ml-2">Gửi</button>
                </form>
                </div>
            </div>
        </div>

        <!-- jQuery (Necessary for All JavaScript Plugins) -->
        <script src="{{ asset('south/js/jquery/jquery-2.2.4.min.js') }}"></script>
        <!-- Popper js -->
        <script src="{{ asset('south/js/popper.min.js') }}"></script>
        <!-- Bootstrap js -->
        <script src="{{ asset('south/js/bootstrap.min.js') }}"></script>
        <!-- Plugins js -->
        <script src="{{ asset('south/js/plugins.js') }}"></script>
        <script src="{{ asset('south/js/classy-nav.min.js') }}"></script>
        <script src="{{ asset('south/js/jquery-ui.min.js') }}"></script>
        <!-- Active js -->
        <script src="{{ asset('south/js/active.js') }}"></script>

        <script src="https://maps.googleapis.com/maps/api/js"></script>
        
        @stack('js')
        <script>
            $(".card-chatbox").hide();
            $(".close").click(function(){
                $(".card-chatbox").hide();
            });
            $(".icon-chatbox").click(function(){
                $(".card-chatbox").show();
            })
        </script>

    </body>
</html>