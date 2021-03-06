<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ООО МирТехМаш</title>
    <link href="images/mir_tekh_mash_icon.png" rel="shortcut icon" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="fonts/glyphicons-halflings-regular.svg" rel="icon">
    <link href="fonts/glyphicons-halflings-regular.eot" rel="icon">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">


    <style>
        .zoom:after,
        .zoom1:after {
            content:'';
            display:block;
            width:33px;
            height:33px;
            position:absolute;
            top:0;
            right:0;
            background:url(http://bootstraptema.ru/plugins/2016/zoom/zoom.png);
        }
    </style>

    <script>

        var t;
        function up() {
            var top = Math.max(document.body.scrollTop,document.documentElement.scrollTop);
            if(top > 0) {
                window.scrollBy(0,-100);
                t = setTimeout('up()',20);
            } else clearTimeout(t);
            return false;
        }
    </script>

    <script src="http://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
    <script src="http://bootstraptema.ru/plugins/2016/zoom/zoom.js"></script>

    <script src="http://api-maps.yandex.ru/2.0/?load=package.full&mode=release&lang=ru-RU" type="text/javascript"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="container-fluid">

<div class="container">

    <!--лого сайта-->
    <div class="row center-block page-header" style="margin-top: 0px">
        <div class="col-sm-11 col-md-11 col-lg-8">
            <img src="images/mir_tekh_mash_logo.png" class="img img-responsive" alt="логотип"/>
        </div>

        <div class="btn btn-link col-sm-1 col-md-1 col-lg-1 social_icon" onclick="location.href='http://vk.com/'">
            <img src="images/vk_2.png" class="img-rounded" style="background-color: rgba(0,0,0,0);"/>
        </div>
        <div class="btn btn-link col-sm-1 col-md-1 col-lg-1 social_icon" onclick="location.href='http://linkedin.com/'">
            <img src="images/ln.png" class="img-rounded" style="background-color: rgba(0,0,0,0);"/>
        </div>
        <div class="btn btn-link col-sm-1 col-md-1 col-lg-1 social_icon" onclick="location.href='contacts.php#marker'">
            <img src="images/yk.png" class="img-rounded" style="background-color: rgba(0,0,0,0);"/>
        </div>
        <div class="btn btn-link col-sm-1 col-md-1 col-lg-1 social_icon" onclick="location.href='contacts.php#contactForm'">
            <img src="images/fb_2.png" class="img-rounded" style="background-color: rgba(0,0,0,0);"/>
        </div>
    </div>

    <!--навигационная панель-->
    <div class="navbar navbar-default text-uppercase " role="navigation">
        <div class="">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed " data-toggle="collapse"
                            data-target=".nav-collapse" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand visible-xs-inline-block" href="#">миртехмаш</a>
                    <!--<a class="navbar-brand logonavbar"><img src="images/logo_for_icon.ico"></a>-->
                </div>

                <div class="navbar-collapse collapse nav-collapse" >
                    <ul class="nav navbar-nav nav-tabs">

                        <li class="dropdown">
                            <a class="dropdown-toggle" href="index.php">визитка
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="contacts.php">контакты</a></li>
                                <li><a href="requisites.php">реквизиты</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" href="services.php">услуги
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="manufacturing_upgrade_kit_machine_model_16A20.php">
                                        изготовление комплектов для модернизации станка модели 16А20</a></li>
                                <li><a href="capital_repair_of_machines.php">капитальный ремонт станков</a></li>
                                <li><a href="modernization_of_metal_cutting_equipment.php">
                                        модернизация металлорежущего оборудования</a></li>
                                <li><a href="repair_of_electronic_boards.php">ремонт электронных плат</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" href="machine_tools.php">станки
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">

                                <li><a href="lathes_with_CNC_Unit.php">токарные станки с ЧПУ</a></li>
                                <li><a href="universal_lathes.php">универсальные токарные станки</a></li>

                                <li><a href="milling_machines.php">фрезерные станки</a></li>

                                <li><a href="surface_grinding_machines.php">плоскошлифовальные станки</a></li>
                                <li><a href="cylindrical_grinding_machines.php">круглошлифовальные станки</a></li>

                            </ul>
                        </li>

                        <li><a href="repair_of_electronic_boards.php">комплектующие к приводам, чпу</a></li>

                        <li><a href="storehouse.php">склад</a></li>

                        <li><a href="our_works.php">наши работы</a></li>

                        <li><a href="news.php">полезная информация</a></li>

                    </ul>
                </div>

            </div>
        </div>
    </div>



    <div>

    </div>