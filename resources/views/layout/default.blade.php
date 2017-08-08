<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Okamžité kontroly dlužníků v centrální evidenci exekucí</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        {{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>--}}
        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/additional-methods.min.js"></script>
        <link rel="stylesheet" type="text/css" href= {{ URL::asset("css/bootstrap.css") }} />
        <link rel="stylesheet" type="text/css" href= {{ URL::asset("css/content/style.css") }} />
        <script type="text/javascript" src="{{ URL::asset("js/custom.js") }}" ></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        @yield('content')

        <footer class="footer">
            <div class="container">
                <p class="footer__text"> Copyright 2004-2014, GetData s.r.o.<br />
                    Roháčova 145/14, 130 00 Praha 3, Česká republika | IČ: 27102343 | Městský soud v Praze, oddíl C, vložka 96380 </p>
            </div>
        </footer>

    </body>
</html>
