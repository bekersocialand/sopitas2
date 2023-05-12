<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">


    <!-- SEO Meta Tags -->

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" />
    <!-- website name -->
    <meta property="og:site" content="" />
    <!-- website link -->
    <meta property="og:title" content="Sopa de Señas | La Moderna" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="Aprende tus primeras palabras con señas." />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="https://sopadesenas.com/assets/php/uploads/<?php echo $_GET['code']?>.png" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" />
    <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@LaModernaMx" />
    <meta name="twitter:title" content="Sopa de señas" />
    <meta name="twitter:description" content="Aprende tus primeras palabras con señas." />
    <meta name="twitter:image" content="https://sopadesenas.com/assets/php/uploads/<?php echo $_GET['code']?>.png" />

    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.ico">
    <!--link rel="manifest" href="/manifest.json"-->
    
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Website Title -->
    <title>Sopa de Señas | La Moderna</title>


    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.ico">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Website Title -->
    <title>Sopa de Señas | La moderna</title>

    <!-- styles externos -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>




    <!-- Styles -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;400;700;800&display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'TheRushBrelako';
            src: url('assets/fonts/TheRushBrelako.otf') format('truetype');
            font-style: normal;
            font-weight: normal;
        }

        /* ================== Colores ===============================*/

        :root {
            --naranja: #FDA100;
            --azul: #0071ce;
            --amarillo: #ffd033;
            --blanco: #fff;
            --txt-lg: 3em;
            --txt-mmd: 2.5em;
            --txt-md: 1em;
            --txt-sm: .8px;
            --fondo-gris-gradient: radial-gradient(circle, rgba(215, 216, 220, 1) 0%, rgba(252, 252, 253, 1) 50%, rgba(216, 216, 220, 1) 100%);
            --
        }

        body * {
            font-family: 'Barlow', sans-serif;
        }

        body {
            width: 100%;
            background: #f9bd2b;
        }

        .preloader {
            position: fixed;
            height: 100vh;
            width: 100%;
            background: var(--naranja);
            z-index: 999999999;
        }

        section {
            height: 100vh;
        }

        .regular {
            height: 800px;
        }

        .btn-primario {
            border-radius: 15px;
            background: var(--azul);
            color: var(--blanco);
            transition: all 0.5s ease;
            box-shadow: 8px 6px 6px rgb(0 0 0 / 20%);
            border: 1px solid rgba(0, 0, 0, .1);
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
            line-height: 29px;
        }

        .btn-primario:hover {
            background: var(--azul);
            color: var(--blanco);
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        .bg-naranja {
            background-color: var(--azul);
            border-radius: 15px;
        }

        .bg-amarillo {
            background-color: var(--amarillo);
        }

        h1 {
            font-size: var(--txt-lg);
            font-weight: bold;
            color: var(--blanco);
        }

        h2 {
            font-size: var(--txt-lg);
            font-weight: bold;
            color: var(--blanco);
        }

        .texto-standard {
            font-size: var(--txt-md);
            color: var(--amarillo);
        }

        header {
            border-bottom: 1px solid var(--amarillo);
            position: fixed;
            width: 100%;
            padding: 15px;
            background-color: rgba(0, 0, 0, .1);
            z-index: 9999;
        }

        header .navi a {
            color: var(--amarillo);
            font-size: var(--txt-md);
            margin-left: 25px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .step {
            position: inherit;
            margin: auto;
        }

        .step-2 {
            background-image: url(assets/img/bg_desk_manos-min.svg);
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }

        .translate-box {
            border-radius: 25px;
        }

        .translate-box .head {
            display: block;
            border-bottom: 1px solid var(--amarillo);
            color: var(--blanco) !important;
            text-align: left;
        }

        .translate-box .head a {
            color: var(--blanco);
            margin-left: 2em;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
            display: inline-block;
            position: relative;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: .7;
            transition: all 0.5s ease;
        }

        .translate-box .head a.active {
            opacity: 1;
            font-weight: bold;
        }

        .translate-box .head a:hover {}

        .translate-box .head a.active::after {
            content: " ";
            width: 80%;
            position: absolute;
            left: 10%;
            bottom: 0;
            height: 3px;
            background-color: var(--blanco);
        }

        .translate-box .content {
            max-height: 0px;
            overflow: hidden;
            transition: all 0.5s ease;
        }

        .translate-box .content.activo {
            max-height: 10000px;
            overflow: hidden;
        }

        .translate-box textarea {
            background: transparent;
            border: none;
            font-size: var(--txt-lg);
            color: var(--blanco);
            font-weight: bold;
            width: 100%;
            height: auto;
        }

        .translate-box textarea:focus-visible {
            border: none;
            outline: none;
        }

        .translate-box textarea::placeholder {
            color: var(--amarillo);
        }

        .senia .sharing {
            border: 1px solid var(--amarillo)
        }

        img.letra-abc {
            margin: 15px 14px;
            max-height: 65.7px;
            cursor: pointer;
            transition: all 0.5s ease;
        }

        img.letra-abc.activo {
            transform: scale(1.4);
        }

        .bg-video {
            background-image: url(assets/img/placeholder-video.jpg);
            background-position: center;
            background-size: cover;
        }

        #traductor::placeholder {
            color: white;
        }

        .txt-fg {
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 24px;
            text-align: center;
            color: var(--blanco);
            display: initial;
            padding: 12px;
            border-radius: 10px;
        }

        .bg-black {
            background: var(--naranja);
        }

        .videoContainer {
            transition: all 0.5s ease;
            overflow: hidden;
        }

        .videoContainer video {
            transition: all 0.5s ease;
            border-radius: 15px
        }

        .videoContainer .cerrarVideo {
            position: absolute;
            top: 20%;
            right: 10%;
            cursor: pointer;
        }

        .bg-cierre {
            border-radius: 15px;
            overflow: hidden;
        }

        .hola-container img.hola-letra,
        .hola-container img.hola-sena {
            transition: all 0.5s ease;
        }

        .hola-container img.hola-letra {
            display: none;
        }

        .hola-container img.hola-sena {
            display: block;
        }

        .hola-container:hover img.hola-sena {
            display: none;
        }

        .hola-container:hover img.hola-letra {
            display: block;
        }

        .txt-sopita {
            margin-top: -15%;
        }

        .txt-data {
            position: absolute;
            top: 28%;
            left: 53%;
            transform: translate(-50%, -50%);
            font-style: normal !important;
            font-weight: 700;
            font-size: 36px;
            line-height: 45px;
            text-align: center;
            width: 89%;
        }

        .txt-s {
            position: absolute;
            top: 62%;
            left: 3%;
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 24px;
            text-align: center;
            color: var(--blanco);
        }

        .txt-placa {
            font-size: var(--txt-md);
            position: absolute;
            left: 40%;
            transform: translate(-50%, -50%);
        }

        .pleca {
            position: absolute;
            top: 85.5%;
            margin: auto 0rem;
            left: 3%;
        }

        .topgal {
            overflow-x: auto;
            white-space: nowrap;
            scrollbar-color: white;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch;
        }

        .topgal img {
            margin: 15px;
        }

        .card_senas {
            position: initial;
            display: inline-flex;
            flex-direction: column;
            background-color: var(--azul);
            border-radius: 15px;
            margin: 15px;
            width: 280px;
            cursor: pointer;
        }

        .ms {
            margin-left: 50%;
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 22px;
            color: var(--blanco);
            padding: 5%;
        }

        .title-senas {
            font-style: normal;
            font-weight: 700;
            font-size: 30px;
            line-height: 30px;
            color: var(--blanco);
            margin: 15px 0;
        }

        .txt-sn {
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 22px;
            color: var(--blanco);
            padding: 5%;
        }

        .topgal::-webkit-scrollbar {
            width: 10px;
            height: 5px;
        }

        .topgal::-webkit-scrollbar-track {
            border-radius: 10px;
        }

        .topgal::-webkit-scrollbar-thumb {
            border-radius: 15px;
            -webkit-box-shadow: inset 0 0 0px #ffffff;
            background: var(--blanco);
        }

        .movil {
            display: none;
        }

        .custom-modal video {
            width: 100%;
            display: block;
            height: 100%;
            object-fit: cover;
        }

        .wrapper section {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 50px 0;
        }

        .custom-modal .modal-body,
        .custom-modal .modal-header {
            padding: 0;
            border: none;
        }

        .modal {
            position: fixed;
            top: 100px;
            left: 0;
            z-index: 1050;
            width: 100%;
            height: 100%;
            overflow: hidden !important;
            outline: 0;
        }

        .custom-modal .modal-header .close {
            margin-top: -33px;
            position: absolute;
            right: -10px;
            background-color: #0000;
            opacity: 1;
            color: #fff;
            height: 50px;
            width: 1px;
            border-radius: 50%;
            top: -8px;
            z-index: 1;
        }

        .close {
            float: right;
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .5;
        }

        .modal-backdrop.show {
            opacity: 0.9;
        }

        .custom-modal .modal-content {
            border-radius: 0;
            border: none;
        }

        .wrapper .btn-primary {
            border: none;
        }

        .wrapper .btn-primary:active:focus,
        .wrapper .btn-primary:focus {
            outline: none;
            border-color: #337ab7;
            outline-offset: 0;
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1040;
            width: 100vw;
            height: 100vh;
            background-color: #f9bd2b;
        }

        .mcss {
            float: right;
            width: auto;
        }

        .dcss {
            float: left;
            width: auto;
        }

        .contenedor-abe {
            width: 100%;
            height: 507px;
            text-align: justify;
        }

        @media screen and (max-width:992px) {
            section {
                height: auto;
            }

            .desktop {
                display: block;
            }

            .movil {
                display: none;
            }

            .mmd {
                font-size: var(--txt-mmd);
                position: absolute;
                top: 120%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
        }

        @media screen and (max-width:768px) {

            .bg-cierre,
            .bg-video {
                min-height: 500px !important;
            }

            .translate-box .head a {
                text-align: center;
                margin: 0 auto;
            }

            .translate-box textarea {
                font-size: var(--txt-md);
            }

            .translate-box {
                width: 100%;
            }

            img.letra-abc {
                margin: 10px 15px;
                max-height: 44.5px;
                cursor: pointer;
                transition: all 0.5s ease;
            }

            .movil {
                display: none;
            }

            .desktop {
                display: block;
            }

            .txt-data {
                position: absolute;
                top: -2%;
                left: 53%;
                transform: translate(-50%, -50%);
                font-style: normal !important;
                font-weight: 700;
                font-size: 23px;
                line-height: 26px;
                text-align: center;
                width: 100%;
            }

            .txt-s {
                position: absolute;
                top: 49%;
                left: 3%;
                font-style: normal;
                font-weight: 400;
                font-size: 20px;
                line-height: 24px;
                text-align: center;
                color: var(--blanco);
                padding: 13px !important;
            }

            .pleca {
                position: absolute;
                top: 115.5%;
                margin: auto 0rem;
                left: 3%;
            }

            .txt-fg {
                font-style: normal;
                font-weight: 400;
                font-size: 17px;
                line-height: 24px;
                text-align: center;
                color: var(--blanco);
                display: initial;
                padding: 12px;
                border-radius: 10px;
            }
        }

        @media (max-width: 576px) {
            h2 {
                font-size: 36px;
                font-weight: bold;
                color: var(--blanco);
            }

            h1 {
                color: var(--blanco);
                font-style: normal;
                font-weight: 700;
                font-size: 36px;
                line-height: 43px;
                text-align: center;
            }

            .bg-patron {
                height: 450px !important;
            }

            .regular {
                height: 875px;
            }

            .mmd {
                font-size: var(--txt-md);
                top: 68%;
            }

            .txt-placa {
                font-size: var(--txt-md);
                position: absolute;
                left: 38%;
                transform: translate(-50%, -50%);
            }

            .desktop {
                display: none;
            }

            .movil {
                display: block;
            }

            .txt-data {
                position: absolute;
                top: 30%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-style: normal !important;
                font-weight: 700;
                font-size: 24px;
                line-height: 29px;
                text-align: center;
                width: 100%;
                color: var(--blanco);
            }

            .pleca {
                position: absolute;
                top: 77%;
                margin: auto 0rem;
                left: 0%;
            }

            .txt-s {
                margin: 15px;
                position: absolute;
                top: 52%;
                left: 0%;
                font-style: normal;
                font-weight: 400;
                font-size: 16px;
                line-height: 19px;
                text-align: center;
                color: var(--blanco);
            }

            img.letra-abc {
                margin: 10px 15px;
                max-height: 60px;
                cursor: pointer;
                transition: all 0.5s ease;
            }

            .title-senas {
                font-style: normal;
                font-weight: 700;
                font-size: 27px;
                line-height: 43px;
                color: var(--blanco);
                padding-top: 3%;
            }

            .txt-sn {
                font-style: normal;
                font-weight: 700;
                font-size: 18px;
                line-height: 22px;
                color: var(--blanco);
            }

            .card_senas {
                position: initial;
                display: -webkit-box;
                flex-direction: column;
                background-color: var(--azul);
                border-radius: 15px;
                margin: 15px;
                width: auto;
            }

            .topgal {
                overflow-x: hidden;
                white-space: nowrap;
                scrollbar-color: white;
                overflow-y: auto;
                -webkit-overflow-scrolling: touch;
                display: contents;
            }

            .txt-fg {
                font-style: normal;
                font-weight: 400;
                font-size: 16px;
                line-height: 24px;
                text-align: center;
                color: var(--blanco);
                display: initial;
                padding: 12px;
                border-radius: 10px;
            }

            .videoContainer video {
                transition: all 0.5s ease;
                margin-bottom: 15%;
            }

            .read-more-btn {
                background-color: var(--azul);
                border: none;
                border-radius: 15px;
                color: var(--blanco);
                padding: 10px 25px;
                margin: auto;
                display: block;
                font-style: normal;
                font-weight: 700;
                font-size: 24px;
                line-height: 29px;
            }

            .hideText {
                display: none;
            }

            .showText {
                display: block;
            }

            .empezar {
                height: auto;
            }

            .modal {
                position: fixed;
                top: 70%;
                left: 50%;
                z-index: 1050;
                width: 80%;
                height: 100%;
                overflow: hidden !important;
                outline: 0;
                padding: inherit;
                transform: translate(-50%, -50%);
            }

            .modal-dialog {
                position: relative;
                width: auto;
                margin: 0.7rem;
                pointer-events: none;
            }

            .custom-modal .modal-header .close {
                margin-top: -33px;
                position: absolute;
                right: -10px;
                background-color: #0000;
                opacity: 1;
                color: #fff;
                height: 50px;
                width: 1px;
                border-radius: 50%;
                top: 3px;
                z-index: 1;
            }

            .close {
                float: right;
                font-size: 1.5rem;
                font-weight: 700;
                line-height: 1;
                color: #000;
                text-shadow: 0 1px 0 #fff;
                opacity: .5;
            }

            .ms {
                margin: 10%;
                font-style: normal;
                font-weight: 700;
                font-size: 18px;
                line-height: 22px;
                color: var(--blanco);
            }

            .topgal img {
                margin: 15px 9px 15px 0;
            }

            .step-2 {
                background-image: url(assets/img/bg_movil_manos-min.svg);
                background-position: center;
                background-size: cover;
                background-attachment: fixed;
            }

            .mcss {
                float: right;
                width: 45%;
            }

            .dcss {
                float: left;
                width: 45%;
            }

            .mov-img {
                padding-bottom: 0px !important;
            }

            .contenedor-abe {
                width: 100%;
                height: 630px;
                text-align: justify;
            }

            .espacio-bg {
                margin-top: -15%;
            }
        }
    </style>
</head>

<body id="">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v13.0"
        nonce="joKkkexR"></script>
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <img src="assets/img/logo-self.svg" class="dcss">
                    <img src="assets/img/logo_superior.svg" class="mcss">
                </div>
                <!--<div class="col-md-6  col-sm-6 text-right navi">
                    <img src="assets/img/logo_superior.svg">
                </div-->
            </div>
        </div>
    </header>

    <div class="regular preloader">
        <div class="container-fluid step step-1 h-100 ">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-md-12 text-center">
                        <img src="assets/img/welcome-textn.svg" class="img-fluid m-auto desktop">
                        <img src="assets/img/welcome-text-m.svg" class="img-fluid m-auto movil">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="regular"
        style="background: var(--naranja);background-position: center;background-size: cover;background-attachment: fixed;">
        <div class="container-fluid step step-1 h-100 ">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-arround">
                    <div class="col-lg-12 col-md-6 mx-auto text-center">
                        <img src="assets/img/presenta-logo-4.svg" class="img-fluid m-auto desktop">
                        <img src="assets/img/presenta-logo-3.svg" class="img-fluid m-auto movil">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="regular">
        <div class="container-fluid step step-2 h-100 pre-traductor">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-md-12 text-center txt-sopita">
                        <h1 class="mb-3">Aprende tus primeras palabras con señas.</h1>
                        <a href="javascript:void(0);" class="btn-primario py-2 px-4 mt-5 scrollBtn">Empezar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid step step-3 h-100 traductor" id="traductor" style="display: none">
            <div class="row row-eq-height h-100 align-items-center">
                <div class="col-md-6 text-center p-5 d-flex align-items-center mov-img">
                    <img src="assets/img/hola-alt-min.svg" class="img-fluid m-auto">
                </div>
                <div id="forShare"
                    class="col-md-6 text-center bg-patron py-5 px-2 px-md-5 d-flex align-items-center h-100">
                    <div class="translate-box mx-auto p-0 bg-naranja">
                        <div class="head">
                            <a href=" javascript:void(0);" class="active" data-translate="espa">Español</a>
                            <a href=" javascript:void(0);" class="activaSenia" data-translate="senia">Lengua de
                                Señas</a>
                        </div>
                        <div class="content activo espa text-left py-2 px-4">
                            <textarea type="text" value="" maxlength="33"
                                placeholder="Escribe algo y conoce la dactilología" class="textValue"></textarea>
                        </div>
                        <div class="content senia">
                            <div></div>
                            <a id="fbshare" target="_blank"
                                href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fsopadesenas.com"
                                class="btn-primario py-2 px-4 my-3 d-inline-block sharing">Compartir<i
                                    class="fa-brands fa-facebook ml-2 "></i></a>
                            <a id="twshare" target="_blank"
                                href="https://twitter.com/intent/tweet?url=https://sopadesenas.com&text=Mira%20lo%20incre%C3%ADble%20que%20est%C3%A1"
                                class="btn-primario py-2 px-4 my-3 d-inline-block sharing">Tweet <i
                                    class="fa-brands fa-twitter ml-2 "></i></a>
                        </div>

                        <a href="javascript:void(0)"
                            class="btn-primario py-2 px-4 mt-5 traduce"><strong>Traducir</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="nota" class="pt-5"
        style="background: #fda100;background-position: center;background-size: cover;background-attachment: fixed;">
        <div class="container step step-3 h-100 pb-5">
            <div class="row row-eq-height h-100 align-items-center">
                <div class="col-md-6 text-center d-flex align-items-center h-100 bg-cierre videoContainer">
                    <a href="javascript:void(0);" class="mx-auto">
                    </a>
                    <video class="w-100" controls playsinline autoplay loop muted>
                        <source src="assets/videos/a.mp4" autoplay loop muted>
                    </video>
                </div>
                <div class="col-md-6 text-center d-flex align-items-center h-100">
                    <div class="content activo espa text-center text-md-left p-2 bg-naranja espacio-bg">
                        <div class="contenedor-abe">
                            <h2 class="m-3" style="font-family: TheRushBrelako;">Abecedario</h2>

                            <img src="assets/img/letras-svg/2/a.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/b.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/c.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/d.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/e.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/f.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/g.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/h.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/i.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/j.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/k.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/l.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/m.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/n.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/nn.svg" class="letra-abc"
                                data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/o.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/p.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/q.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/r.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/s.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/t.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/u.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/v.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/w.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/x.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/y.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                            <img src="assets/img/letras-svg/2/z.svg" class="letra-abc" data-video="assets/videos/a.mp4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="señas">
        <div class="container mt-4">
            <div class="row row-eq-height align-items-center">
                <div class="col-md-12 text-left mt-5 pt-4">
                    <h1 class="mb-5">Aprende fácil la lengua de señas:</h1>
                </div>
                <div class="col-md-12 text-center p-0 align-items-center h-100 desktop">
                    <div class="topgal">
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal">
                            <p class="title-senas">AMOR</p>
                            <img src="assets/img/corazon_border-min.webp">
                            <p class="txt-sn">1/25 <span class="ms">VER ></span></span>
                            </p>
                            <!-- Modal -->
                            <div class="modal fade custom-modal" id="myModal" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video1" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/amor.mp4" type="video/mp4"
                                                    autoplay loop>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal2">
                            <p class="title-senas">ABUELO</p>
                            <img src="assets/img/abuelo-min.webp">
                            <p class="txt-sn">2/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal2" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video2" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/abuelo.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal3">
                            <p class="title-senas">BAÑO</p>
                            <img src="assets/img/baño-min.webp">
                            <p class="txt-sn">3/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal3" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video3" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/baño.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal4">
                            <p class="title-senas">BESO</p>
                            <img src="assets/img/beso-min.webp">
                            <p class="txt-sn">4/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal4" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video4" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/beso.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal5">
                            <p class="title-senas">BUENOS DÍAS</p>
                            <img src="assets/img/dias-min.webp">
                            <p class="txt-sn">5/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal5" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video5" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/buenos.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal6">
                            <p class="title-senas">CASA</p>
                            <img src="assets/img/casa-min.webp">
                            <p class="txt-sn">6/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal6" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video6" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/casa.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal7">
                            <p class="title-senas">¿CUÁNTO ES?</p>
                            <img src="assets/img/dinero-min.webp">
                            <p class="txt-sn">7/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal7" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video7" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/es.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal8">
                            <p class="title-senas">DINERO</p>
                            <img src="assets/img/dinero-min.webp">
                            <p class="txt-sn">8/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal8" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video8" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/dinero.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal9">
                            <p class="title-senas">ESCUELA</p>
                            <img src="assets/img/escuela-min.webp">
                            <p class="txt-sn">9/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal9" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video9" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/escuela.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal10">
                            <p class="title-senas">ESPOSA</p>
                            <img src="assets/img/esposa-min.webp">
                            <p class="txt-sn">10/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal10" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video10" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/esposa.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal11">
                            <p class="title-senas">FIN DE SEMANA</p>
                            <img src="assets/img/semana-min.webp">
                            <p class="txt-sn">11/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal11" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video11" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/semana.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal12">
                            <p class="title-senas">GATO</p>
                            <img src="assets/img/gato-min.webp">
                            <p class="txt-sn">12/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal12" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video12" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/gato.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal13">
                            <p class="title-senas">GRACIAS</p>
                            <img src="assets/img/gracias-min.webp">
                            <p class="txt-sn">13/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal13" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video13" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/gracias.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal14">
                            <p class="title-senas">HIJO</p>
                            <img src="assets/img/hijo-min.webp">
                            <p class="txt-sn">14/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal14" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video14" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/hijo.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal15">
                            <p class="title-senas">JUGAR</p>
                            <img src="assets/img/jugar-min.webp">
                            <p class="txt-sn">15/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal15" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video15" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/jugar.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal16">
                            <p class="title-senas">MAMÁ</p>
                            <img src="assets/img/mama-min.webp">
                            <p class="txt-sn">16/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal16" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video16" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/mama.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal17">
                            <p class="title-senas">PAPÁ</p>
                            <img src="assets/img/papa-min.webp">
                            <p class="txt-sn">17/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal17" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video17" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/papa.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal18">
                            <p class="title-senas">PASTA</p>
                            <img src="assets/img/sopa-min.webp">
                            <p class="txt-sn">18/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal18" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video18" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/pasta.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal19">
                            <p class="title-senas">PERRO</p>
                            <img src="assets/img/perro-min.webp">
                            <p class="txt-sn">19/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal19" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video19" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/perro.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal20">
                            <p class="title-senas">POR FAVOR</p>
                            <img src="assets/img/favor-min.webp">
                            <p class="txt-sn">20/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal20" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video20" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/favor.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal21">
                            <p class="title-senas">¿QUÉ HORA ES?</p>
                            <img src="assets/img/hora-min.webp">
                            <p class="txt-sn">21/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal21" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video21" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/hora.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal22">
                            <p class="title-senas">¿QUIERES COMER?</p>
                            <img src="assets/img/comer-min.webp">
                            <p class="txt-sn">22/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal22" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video22" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/comer.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal23">
                            <p class="title-senas">RICO</p>
                            <img src="assets/img/rico-min.webp">
                            <p class="txt-sn">23/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal23" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video23" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/rico.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal24">
                            <p class="title-senas">SOPA</p>
                            <img src="assets/img/sopa-min.webp">
                            <p class="txt-sn">24/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal24" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video24" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/sopa.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal25">
                            <p class="title-senas">TRABAJO</p>
                            <img src="assets/img/trabajo-min.webp">
                            <p class="txt-sn">25/25 <span class="ms">VER ></span></p>
                            <div class="modal fade custom-modal" id="myModal25" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <video controls id="video25" autoplay="autoplay" loop="loop" muted
                                                defaultMuted playsinline oncontextmenu="return false;" preload="auto">
                                                <source data-src="assets/videos/palabras/trabajo.mp4" type="video/mp4"
                                                    autoplay>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="container movil mb-5">
                    <div class="col-md-12 text-center p-0 align-items-center h-100 movil">
                        <div class="topgal">
                            <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModalm">
                                <img src="assets/img/senas-3.svg">
                                <p class="title-senas">AMOR <br>
                                    <span class="txt-sn">1/24</span> <span class="ms">VER ></span>
                                </p>
                                <!-- Modal -->
                                <div class="modal fade custom-modal" id="myModalm" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <video controls id="video2">
                                                    <source data-src="assets/videos/palabras/amor_9_16.mp4"
                                                        type="video/mp4" autoplay>
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal2m">
                                <img src="assets/img/senas-3.svg">
                                <p class="title-senas">ABUELO <br>
                                    <span class="txt-sn">2/25</span> <span class="ms">VER ></span>
                                </p>
                                <!-- Modal -->
                                <div class="modal fade custom-modal" id="myModal2m" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <video controls id="video2m">
                                                    <source data-src="assets/videos/palabras/abuelo_9_16.mp4"
                                                        type="video/mp4" autoplay>
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal3m">
                                <img src="assets/img/senas-3.svg">
                                <p class="title-senas">BAÑO <br>
                                    <span class="txt-sn">3/25</span> <span class="ms">VER ></span>
                                </p>
                                <!-- Modal -->
                                <div class="modal fade custom-modal" id="myModal3m" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <video controls id="video3m">
                                                    <source data-src="assets/videos/palabras/baño_9_16.mp4"
                                                        type="video/mp4" autoplay>
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal4m">
                                <img src="assets/img/senas-3.svg">
                                <p class="title-senas">BESO <br>
                                    <span class="txt-sn">4/25</span> <span class="ms">VER ></span>
                                </p>
                                <!-- Modal -->
                                <div class="modal fade custom-modal" id="myModal4m" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <video controls id="video4m">
                                                    <source data-src="assets/videos/palabras/beso_9_16.mp4"
                                                        type="video/mp4" autoplay>
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal5m">
                                <img src="assets/img/senas-3.svg">
                                <p class="title-senas">BUENOS<br> DÍAS <br>
                                    <span class="txt-sn">5/25</span> <span class="ms">VER ></span>
                                </p>
                                <!-- Modal -->
                                <div class="modal fade custom-modal" id="myModal5m" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <video controls id="video5m">
                                                    <source data-src="assets/videos/palabras/buenos_9_16.mp4"
                                                        type="video/mp4" autoplay>
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal6m">
                                <img src="assets/img/senas-3.svg">
                                <p class="title-senas">CASA <br>
                                    <span class="txt-sn">6/25</span> <span class="ms">VER ></span>
                                </p>
                                <!-- Modal -->
                                <div class="modal fade custom-modal" id="myModal6m" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <video controls id="video6m">
                                                    <source data-src="assets/videos/palabras/casa_9_16.mp4"
                                                        type="video/mp4" autoplay>
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal7m">
                                <img src="assets/img/senas-3.svg">
                                <p class="title-senas">¿CUÁNTO <br>ES? <br>
                                    <span class="txt-sn">7/25</span> <span class="ms">VER ></span>
                                </p>
                                <!-- Modal -->
                                <div class="modal fade custom-modal" id="myModal7m" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <video controls id="video7m">
                                                    <source data-src="assets/videos/palabras/es_9_16.mp4"
                                                        type="video/mp4" autoplay>
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal8m">
                                <img src="assets/img/senas-3.svg">
                                <p class="title-senas">DINERO <br>
                                    <span class="txt-sn">8/25</span> <span class="ms">VER ></span>
                                </p>
                                <!-- Modal -->
                                <div class="modal fade custom-modal" id="myModal8m" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <video controls id="video8m">
                                                    <source data-src="assets/videos/palabras/dinero_9_16.mp4"
                                                        type="video/mp4" autoplay>
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal9m">
                                <img src="assets/img/senas-3.svg">
                                <p class="title-senas">ESCUELA <br>
                                    <span class="txt-sn">9/25</span> <span class="ms">VER ></span>
                                </p>
                                <!-- Modal -->
                                <div class="modal fade custom-modal" id="myModal9m" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <video controls id="video9m">
                                                    <source data-src="assets/videos/palabras/escuela_9_16.mp4"
                                                        type="video/mp4" autoplay>
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal10m">
                                <img src="assets/img/senas-3.svg">
                                <p class="title-senas">ESPOSA <br>
                                    <span class="txt-sn">10/25</span> <span class="ms">VER ></span>
                                </p>
                                <!-- Modal -->
                                <div class="modal fade custom-modal" id="myModal10m" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <video controls id="video10m">
                                                    <source data-src="assets/videos/palabras/esposa_9_16.mp4"
                                                        type="video/mp4" autoplay>
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <span class="hideText">
                        <div class="col-md-12 text-center p-0 align-items-center h-100 movil">
                            <div class="topgal">
                                <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal11m">
                                    <img src="assets/img/senas-3.svg">
                                    <p class="title-senas">FIN DE<br> SEMANA <br>
                                        <span class="txt-sn">11/25</span> <span class="ms">VER ></span>
                                    </p>
                                    <!-- Modal -->
                                    <div class="modal fade custom-modal" id="myModal11m" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <video controls id="video11m">
                                                        <source data-src="assets/videos/palabras/semana_9_16.mp4"
                                                            type="video/mp4" autoplay>
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal12m">
                                    <img src="assets/img/senas-3.svg">
                                    <p class="title-senas">GATO <br>
                                        <span class="txt-sn">12/25</span> <span class="ms">VER ></span>
                                    </p>
                                    <!-- Modal -->
                                    <div class="modal fade custom-modal" id="myModal12m" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <video controls id="video12m">
                                                        <source data-src="assets/videos/palabras/gato_9_16.mp4"
                                                            type="video/mp4" autoplay>
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal13m">
                                    <img src="assets/img/senas-3.svg">
                                    <p class="title-senas">GRACIAS <br>
                                        <span class="txt-sn">13/25</span> <span class="ms">VER ></span>
                                    </p>
                                    <!-- Modal -->
                                    <div class="modal fade custom-modal" id="myModal13m" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <video controls id="video13m">
                                                        <source data-src="assets/videos/palabras/gracias_9_16.mp4"
                                                            type="video/mp4" autoplay>
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal14m">
                                    <img src="assets/img/senas-3.svg">
                                    <p class="title-senas">HIJO <br>
                                        <span class="txt-sn">14/25</span> <span class="ms">VER ></span>
                                    </p>
                                    <!-- Modal -->
                                    <div class="modal fade custom-modal" id="myModal14m" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <video controls id="video14m">
                                                        <source data-src="assets/videos/palabras/hijo_9_16.mp4"
                                                            type="video/mp4" autoplay>
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal15m">
                                    <img src="assets/img/senas-3.svg">
                                    <p class="title-senas">JUGAR <br>
                                        <span class="txt-sn">15/25</span> <span class="ms">VER ></span>
                                    </p>
                                    <!-- Modal -->
                                    <div class="modal fade custom-modal" id="myModal15m" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <video controls id="video15m">
                                                        <source data-src="assets/videos/palabras/jugar_9_16.mp4"
                                                            type="video/mp4" autoplay>
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal16m">
                                    <img src="assets/img/senas-3.svg">
                                    <p class="title-senas">MAMÁ <br>
                                        <span class="txt-sn">16/25</span> <span class="ms">VER ></span>
                                    </p>
                                    <!-- Modal -->
                                    <div class="modal fade custom-modal" id="myModal16m" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <video controls id="video16m">
                                                        <source data-src="assets/videos/palabras/mama_9_16.mp4"
                                                            type="video/mp4" autoplay>
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal17m">
                                    <img src="assets/img/senas-3.svg">
                                    <p class="title-senas">PAPÁ <br>
                                        <span class="txt-sn">17/25</span> <span class="ms">VER ></span>
                                    </p>
                                    <!-- Modal -->
                                    <div class="modal fade custom-modal" id="myModal17m" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <video controls id="video17m">
                                                        <source data-src="assets/videos/palabras/papa_9_16.mp4"
                                                            type="video/mp4" autoplay>
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal18m">
                                    <img src="assets/img/senas-3.svg">
                                    <p class="title-senas">PASTA <br>
                                        <span class="txt-sn">18/25</span> <span class="ms">VER ></span>
                                    </p>
                                    <!-- Modal -->
                                    <div class="modal fade custom-modal" id="myModal18m" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <video controls id="video18m">
                                                        <source data-src="assets/videos/palabras/pasta_9_16.mp4"
                                                            type="video/mp4" autoplay>
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal19m">
                                    <img src="assets/img/senas-3.svg">
                                    <p class="title-senas">PERRO <br>
                                        <span class="txt-sn">19/25</span> <span class="ms">VER ></span>
                                    </p>
                                    <!-- Modal -->
                                    <div class="modal fade custom-modal" id="myModal19m" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <video controls id="video19m">
                                                        <source data-src="assets/videos/palabras/perro_9_16.mp4"
                                                            type="video/mp4" autoplay>
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal20m">
                                    <img src="assets/img/senas-3.svg">
                                    <p class="title-senas">POR FAVOR <br>
                                        <span class="txt-sn">20/25</span> <span class="ms">VER ></span>
                                    </p>
                                    <!-- Modal -->
                                    <div class="modal fade custom-modal" id="myModal20m" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <video controls id="video20m">
                                                        <source data-src="assets/videos/palabras/favor_9_16.mp4"
                                                            type="video/mp4" autoplay>
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal21m">
                                    <img src="assets/img/senas-3.svg">
                                    <p class="title-senas">¿QUÉ HORA<br> ES? <br>
                                        <span class="txt-sn">21/25</span> <span class="ms">VER ></span>
                                    </p>
                                    <!-- Modal -->
                                    <div class="modal fade custom-modal" id="myModal21m" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <video controls id="video21m">
                                                        <source data-src="assets/videos/palabras/hora_9_16.mp4"
                                                            type="video/mp4" autoplay>
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal22m">
                                    <img src="assets/img/senas-3.svg">
                                    <p class="title-senas">¿QUIERES<br> COMER? <br>
                                        <span class="txt-sn">22/25</span> <span class="ms">VER ></span>
                                    </p>
                                    <!-- Modal -->
                                    <div class="modal fade custom-modal" id="myModal22m" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <video controls id="video22m">
                                                        <source data-src="assets/videos/palabras/comer_9_16.mp4"
                                                            type="video/mp4" autoplay>
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal23m">
                                    <img src="assets/img/senas-3.svg">
                                    <p class="title-senas">RICO <br>
                                        <span class="txt-sn">23/25</span> <span class="ms">VER ></span>
                                    </p>
                                    <!-- Modal -->
                                    <div class="modal fade custom-modal" id="myModal23m" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <video controls id="video23m">
                                                        <source data-src="assets/videos/palabras/rico_9_16.mp4"
                                                            type="video/mp4" autoplay>
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal24m">
                                    <img src="assets/img/senas-3.svg">
                                    <p class="title-senas">SOPA <br>
                                        <span class="txt-sn">24/25</span> <span class="ms">VER ></span>
                                    </p>
                                    <!-- Modal -->
                                    <div class="modal fade custom-modal" id="myModal24m" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <video controls id="video24m">
                                                        <source data-src="assets/videos/palabras/sopa_9_16.mp4"
                                                            type="video/mp4" autoplay>
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 card_senas" data-toggle="modal" data-target="#myModal25m">
                                    <img src="assets/img/senas-3.svg">
                                    <p class="title-senas">TRABAJO <br>
                                        <span class="txt-sn">25/25</span> <span class="ms">VER ></span>
                                    </p>
                                    <!-- Modal -->
                                    <div class="modal fade custom-modal" id="myModal25m" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <video controls id="video25m">
                                                        <source data-src="assets/videos/palabras/trabajo_9_16.mp4"
                                                            type="video/mp4" autoplay>
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </span>

                    <button class="read-more-btn">Ver más videos</button>

                </div>
            </div>
    </section>

    <section id="nota" class="pt-5"
        style="background: #fda100;background-position: center;background-size: cover;background-attachment: fixed;">
        <div class="container step step-3 h-100">
            <div class="row row-eq-height h-100 align-items-center">
                <div class="col-md-6 text-center bg-naranja p-0 d-flex align-items-center h-100 bg-cierre">
                    <video class="w-100" controls playsinline autoplay loop muted>
                        <source src="assets/videos/cierre.mp4" autoplay loop muted>
                    </video>
                </div>
                <div class="col-md-6 text-center bg-patron p-0 align-items-center h-100">
                    <img src="assets/img/mexico.svg" class="img-fluid d-block m-auto msso">
                    <h2 class="txt-data">
                        En México hay más de 6 millones de personas con algún tipo de discapacidad auditiva
                    </h2>

                    <p class="p-4 bg-naranja txt-s">Esto es solo un pequeño esfuerzo de <img
                            src="assets/img/8A075ECE.svg" class="img-fluid"> para que todos intentemos aprender señas y
                        facilitar la comunicación entre todos.</p>

                    <!-- Copyright -->
                    <div class="container pleca">
                        <a class="text-reset fw-bold" href="https://www.aprendiendolsm.com/">
                            <p class="txt-fg bg-naranja">Ingresa aquí si quieres aprender más</p>
                            <img class="img-fluid align-items-center" src="assets/img/aprendiendo.svg">
                        </a>
                    </div>
                    <!-- Copyright -->
                </div>
            </div>
        </div>
    </section>


    <!-- Scripts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
        integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js "
        integrity="sha512-f5HTYZYTDZelxS7LEQYv8ppMHTZ6JJWglzeQmr0CVTS70vJgaJiIO15ALqI7bhsracojbXkezUIL+35UXwwGrQ=="
        crossorigin=" anonymous " referrerpolicy="no-referrer "></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js "
        integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
        crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
    <!-- Scroll Plugin de fullpage.js -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.1/fullpage.css">
<script src="assets/js/html2canvas.js"></script>

    <script>
        const buttons = document.querySelectorAll('.read-more-btn');
        const textElements = document.querySelectorAll('.hideText');

        buttons.forEach((button, index) => {
            button.addEventListener('click', () => {
                const textElement = textElements[index];
                textElement.classList.toggle('showText');
            });
        });

        jQuery(document).ready(function () {
            $('#myModal').on('shown.bs.modal', function () {
                $('#video1')[0].play();
            })
            $('#myModal').on('hidden.bs.modal', function () {
                $('#video2')[0].pause();
            })
        });

        jQuery(document).ready(function () {
            $('#myModalm').on('shown.bs.modal', function () {
                $('#video1')[0].play();
            })
            $('#myModalm').on('hidden.bs.modal', function () {
                $('#video2')[0].pause();
            })
        });

        $(function () {
            $.fn.hScroll = function (amount) {
                amount = amount || 120;
                $(this).bind("DOMMouseScroll mousewheel", function (event) {
                    var oEvent = event.originalEvent,
                        direction = oEvent.detail ? oEvent.detail * -amount : oEvent.wheelDelta,
                        position = $(this).scrollLeft();
                    position += direction > 0 ? -amount : amount;
                    $(this).scrollLeft(position);
                    event.preventDefault();
                })
            };
        });

        $(document).ready(function () {
            $('.topgal').hScroll(30); // You can pass (optionally) scrolling amount
        });

        // Key Press Listener Attachment for #area.
        $("body").keypress(function (event) {

            // If the key code is not associated with the ENTER key...
            if (event.keyCode == 13) {

                // ...exit the function.
                return false;

            }

        });

        $(".translate-box .head a").click(function () {

            var lang = $(this).data("translate")
            $(".translate-box .head a.active").removeClass("active")
            $(this).addClass("active");
            $("#traductor .content.activo").removeClass("activo").delay(700).queue(function () {
                $("#traductor ." + lang).addClass("activo").dequeue();
            });

        })

        function eliminarDiacriticos(texto) {
            return texto
                .normalize('NFD')
                .replace(/([^n\u0300-\u036f]|n(?!\u0303(?![\u0300-\u036f])))[\u0300-\u036f]+/gi, "$1")
                .normalize();
        }

        function eliminarNumeros(texto) {
            return texto.replace(/[0-9]/g, '')
        }

        function eliminarEspeciales(texto) {
            return texto.replace(/[~`!@#$%^&*()+={}\[\];:\'\"<>.,\/\\\?-_¨¡´]/g, '');
            return texto.replace(/ /g, "");
        }

        function minusculas(texto) {
            return texto.toLowerCase();
        }

        $(".traduce").click(function () {
            var str = $(".textValue").val()
            var str = minusculas(str)
            var str = eliminarNumeros(str)
            var str = eliminarDiacriticos(str)
            var str = eliminarEspeciales(str)
            //var str = str.replace(/ñ/gi, "nn")
            //var str = str.replace(/ /g, "");

            console.log(str)

            $(".senia div").empty();
            for (var i = 0; i < str.length; i++) {
                if (str[i] === ' ') {
                    $(".senia div").append('<br/>');
                } else if (str[i] === 'ñ') {
                    $(".senia div").append('<img class="letra-abc" src="assets/img/letras-svg/2/' + 'nn' + '.svg">');
                } else {
                    $(".senia div").append('<img class="letra-abc" src="assets/img/letras-svg/2/' + str[i] + '.svg">');
                }

            }
            $(".activaSenia").click()
   setTimeout(takeScreenshot,1500)
        })


        $(".playVideo").click(function () {
            $(".videoContainer").addClass("bg-black")
            $(this).addClass("d-none")
            $(".videoContainer video").removeClass("d-none")
            $(".videoContainer i").removeClass("d-none")
            $(".videoContainer video")[0].play()
        })
        $(".cerrarVideo").click(function () {
            $(".videoContainer").removeClass("bg-black")
            $(".playVideo").removeClass("d-none")
            $(".videoContainer video").attr("src", "assets/img/video.mp4")
            $(".videoContainer video").addClass("d-none")
            $(".videoContainer i").addClass("d-none")
            $(".videoContainer video")[0].pause();
            $(".videoContainer video")[0].currentTime = 0;
            $(".videoContainer video")[0].load();
        })
        $("img.letra-abc").click(function () {
            $("img.letra-abc.activo").removeClass("activo");
            $(this).addClass("activo");
            var videoVal = $(this).data("video");
            $(".videoContainer").addClass("bg-black")
            $(".playVideo").addClass("d-none")
            $(".videoContainer video").removeClass("d-none")
            $(".videoContainer i").removeClass("d-none")
            $(".videoContainer video").attr("src", videoVal)
            $(".videoContainer video")[0].play()
        })

        $('.scrollBtn').on('click', function () {
            $(".pre-traductor").fadeOut(500);
            $(".traductor").fadeIn(500);
        });

        $(window).load(function () {
            $('.preloader').fadeOut('300', function () {
                $(this).remove();
            });
        });

        //create snapshot
        function takeScreenshot() {
            /*document.getElementById('forShare').style.width="600px"
            document.getElementById('forShare').style.height="621"*/

            $('.content.senia.activo .btn-primario').removeClass('d-inline-block')
            $('.content.senia.activo .btn-primario').addClass('d-none')
            $('.content.espa').hide()
            html2canvas(document.querySelector("#forShare")).then(canvas => {
                document.body.appendChild(canvas)
                var canvas = document.getElementsByTagName("canvas")

                var JPEG_QUALITY = 0.5;

                var dataUrl = canvas[0].toDataURL('image/png', JPEG_QUALITY);
                console.log(dataUrl)


                $("canvas").remove();
                $('.content.senia.activo .btn-primario').removeClass('d-none')
                $('.content.senia.activo .btn-primario').addClass('d-inline-block')
                $('.content.espa').show()

                var unix = Math.round(+new Date() / 1000);
                $("#fbshare").attr("href", "https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fsopadesenas.com/?code=" + unix);
                $("#twshare").attr("href", "https://twitter.com/intent/tweet?url=https://sopadesenas.com/?code=" + unix + "&text=Aprende%20tus%20primeras%20palabras%20con%20señas");


                var fd = new FormData();
                fd.append('data', dataUrl);
                fd.append('timestamp', unix);

                var settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": "assets/php/upload1.php",
                    "method": "POST",
                    "headers": {
                        //'Content-Type':'application/json'
                        //"cache-control": "no-cache",
                        //"postman-token": "8540e967-f938-9617-bea5-d02a173511f4"
                    },
                    "processData": false,
                    "contentType": false,
                    "mimeType": "multipart/form-data",
                    "data": fd
                }

                $.ajax(settings).done(function (response) {

                    console.log(response);

                });
                /* canvas.toBlob(function(blob) {
                   console.log('Este es el blob: ', blob);
                 }, 'image/jpeg', 0.8);*/

            });

        }
        $('.card_senas').click(function () {
            var dest = $(this).data('target');
            var vid = $(dest + " video source").data('src');
            $(dest + " video source").attr('src', vid)
            $(dest + " video ")[0].load();
            // alert(dest + 'algo' + vid)
        })
    </script>
</body>


</html>