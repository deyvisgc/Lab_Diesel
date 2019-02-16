<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .imagen1{
            height: 275px;
            width: 275px;

        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Laboratorios-OVERHAUL DIESEL</title>

    <!-- Icon css link -->
    <link href="{{asset('web/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/materialdesignicons.min.css')}}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{asset('web/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="{{asset('web/vendors/revolution/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('web/vendors/revolution/css/layers.css')}}" rel="stylesheet">
    <link href="{{asset('web/vendors/revolution/css/navigation.css')}}" rel="stylesheet">
    <link href="{{asset('web/vendors/animate-css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('web/vendors/owl-carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="{{asset('web/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/responsive.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- BEGIN JIVOSITE CODE {literal} -->
    <script type='text/javascript'>
        (function(){ var widget_id = 'CwE3XnL9mJ';var d=document;var w=window;function l(){
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
            s.src = '//code.jivosite.com/script/widget/'+widget_id
            ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
            if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
            else{w.addEventListener('load',l,false);}}})();
    </script>
    <!-- {/literal} END JIVOSITE CODE -->
</head>
<body>


<!--================Header Area =================-->
<header class="main_header_area">
    <div class="header_top_area">
        <div class="container">
            <div class="pull-left">
                <a href="#"><i class="fa fa-phone"></i>(01) - 547 7201 / 980 610 635</a>
                <a href="#"><i class="fa fa-map-marker"></i>Av. Calca 104 Coop. 27 de Abril-Ate</a>
                <a href="#"><i class="mdi mdi-clock"></i>08 AM - 5 PM</a>
            </div>
            <div class="pull-right">
                <ul class="header_social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="{{url("login")}}"><i class="fa fa-compact-disc"></i>Intranet</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main_menu_area">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown submenu active">
                            <a href="#inicio" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inicio</a>
                        </li>
                        <li class="dropdown submenu">
                            <a href="#servicios" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios <i class="mdi mdi-arrow-down-drop-circle-outline"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="project-full-width.html">Laboratorio DIESEL</a></li>
                                <li><a href="venta.html">Mecánica General <br>Livianos y Pesados</a></li>
                                <li><a href="project-grid-two-column.html">Venta de Repuetos</a></li>
                                <li><a href="project-three-column.html">Car Wash</a></li>
                            </ul>
                        </li>
                        <li><a href="service-single.html">Quiénes Somos?</a></li>
                        <li><a href="#galeria">Galeria</a></li>
                        <li class="dropdown submenu">
                            <a href="blog-details.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Repuestos <i class="mdi mdi-arrow-down-drop-circle-outline"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url("venta")}}">General</a></li>
                                <li><a href="{{url("venta")}}">Promociones</a></li>
                            </ul>
                        </li>
                        <li><a href="#contactenos">Contactenos</a></li>
                        <li class="icon_search"><a href="#"><i class="mdi mdi-cart"></i></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</header>
<!--================Header Area =================-->

<!--================Main Slider Area =================-->
<section class="main_slider_area" id="inicio">
    <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
        <ul>
            <li data-index="rs-2972" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="img/home-slider/slider-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{asset('web/img/home-slider/slider-1.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <div class="slider_text_box">
                    <div class="tp-caption first_text"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['-38','-38','-38','-20','-20']"
                         data-fontsize="['28','28','28','28']"
                         data-lineheight="['38','38','38','38']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">El especialista para todos los sistemas DIESEL</div>

                    <div class="tp-caption secand_text"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['38','38','38','38','38']"
                         data-fontsize="['110','110','110','50','50']"
                         data-lineheight="['100','100','100','70','70']"
                         data-width="['none','none','none','none']"
                         data-height="none"
                         data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[10,10,10,10]"
                         data-paddingleft="[0,0,0,0]">OVERHAUL DIESEL </div>
                </div>
            </li>
            <li data-index="rs-2973" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="img/home-slider/slider-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{asset('web/img/home-slider/slider-2.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <div class="slider_text_box2">
                    <div class="tp-caption first_text"
                         data-x="['left','left','left','left','left']"
                         data-y="['middle','middle','middle','middle','middle']"
                         data-hoffset="['0','15','15','15','15']"
                         data-voffset="['-30','-30','-30','-30','-60']"
                         data-fontsize="['80','80','60','60','40']"
                         data-lineheight="['90','90','70','70','50']"
                         data-width="['none','none','none','none']"
                         data-height="none"
                         data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[10,10,10,10]"
                         data-paddingleft="[0,0,0,0]">we build dream</div>

                    <div class="tp-caption secand_text"
                         data-x="['left','left','left','left','left']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','15','15','15','15']"
                         data-voffset="['50','50','50','40','0']"
                         data-fontsize="['28','28','28','20','20']"
                         data-lineheight="['38','38','38','30','30']"
                         data-width="['760','760','760','550','400']"
                         data-height="none"
                         data-whitespace="normal"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">We made just most advance & user friendly constraction theme in the world</div>

                    <div class="tp-caption"
                         data-x="['left','left','left','left','left']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','15','15','15','15']"
                         data-voffset="['140','140','140','130','90']"
                         data-fontsize="['28','28','28','28']"
                         data-lineheight="['38','38','38','38']"
                         data-width="['730']"
                         data-height="none"
                         data-whitespace="normal"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"><a class="slider_btn" href="#">browse services</a></div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--================End Main Slider Area =================-->
<!--================Get Quote Area =================-->
<section class="get_quote_area">
    <div class="container">
        <div class="pull-left">
            <h4>Está interesado en alguno de nuestro servicios?</h4>
        </div>
        <div class="pull-right">
            <a class="get_btn" href="#contactenos">Contactenos</a>
        </div>
    </div>
</section>
<!--================End Get Quote Area =================-->

<!--================Who We Are Area =================-->
<section class="who_we_are_area">
    <div class="container">
        <div class="row who_we_inner">
            <div class="col-md-5">
                <div class="who_we_left_content">
                    <div class="main_w_title">
                        <h2>Quiénes <br class="title_br" /> Somos?</h2>
                        <h6>Todo sobre nosotros</h6>
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
                    <div class="border_bar"></div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="who_we_image">
                    <img src="{{asset('web/img/who-we.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Who We Are Area =================-->

<!--================Our Service Area =================-->
<!--================Our Service2 Area =================-->
<section class="our_service_area2" id="servicios">
    <div class="container">
        <div class="main_c_b_title">
            <h2>Nuestros<br class="title_br">Servicios</h2>
            <h6>Al mejor precio</h6>
        </div>
        <div class="row service2_inner">
            <div class="col-md-6 col-sm-6">
                <div class="service2_item">
                    <div class="service2_item_inner">
                        <div class="service2_item_inner_content">
                            <div class="service_icon">
                                <img src="{{asset('web/img/icon/s2-icon-1.png')}}" alt="">
                                <img src="{{asset('web/img/icon/s2-icon-hover-1.png')}}" alt="">
                            </div>
                            <h4>Laboratorios DIESEL</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem-que laudantium totam rem aperiam.</p>
                            <a class="view_btn" href="lab_diesel.html">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="service2_item">
                    <div class="service2_item_inner">
                        <div class="service2_item_inner_content">
                            <div class="service_icon">
                                <img src="{{asset('web/img/icon/s2-icon-2.png')}}" alt="">
                                <img src="{{asset('web/img/icon/s2-icon-hover-2.png')}}" alt="">
                            </div>
                            <h4>Venta de Repuestos</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem-que laudantium totam rem aperiam.</p>
                            <a class="view_btn" href="repuestos.html">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6" style="margin-top: 10px;">
                <div class="service2_item">
                    <div class="service2_item_inner">
                        <div class="service2_item_inner_content">
                            <div class="service_icon">
                                <img src="{{asset('web/img/icon/s2-icon-6.png')}}" alt="">
                                <img src="{{asset('web/img/icon/s2-icon-hover-6.png')}}" alt="">
                            </div>
                            <h4>Mecánica General</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem-que laudantium totam rem aperiam.</p>
                            <a class="view_btn" href="mecanica_general.html">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6" style="margin-top: 10px;">
                <div class="service2_item">
                    <div class="service2_item_inner">
                        <div class="service2_item_inner_content">
                            <div class="service_icon">
                                <img src="{{asset('web/img/icon/s2-icon-3.png')}}" alt="">
                                <img src="{{asset('web/img/icon/s2-icon-hover-3.png')}}" alt="">
                            </div>
                            <h4>Car Wash</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem-que laudantium totam rem aperiam.</p>
                            <a class="view_btn" href="car_wash.html">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Our Service2 Area =================-->

<!--================End Our Service Area =================-->

<!--================Our Project Area =================-->
<section class="our_project_area" id="galeria">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="project_left_side">
                    <div class="main_w_title">
                        <h2>Nuestra <br class="title_br" /> Galeria</h2>
                        <h6>Calidad & Eficiencia en el trabajo</h6>
                    </div>
                    <ul class="our_project_filter">
                        <li class="active" data-filter="*"><a href="#">Laboratorio DIESEL</a></li>
                        <li data-filter=".hola"><a href="#">Mecanica General</a></li>
                        <li data-filter=".interior"><a href="#">Car Wash</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">


                <div class="our_project_details">

                    @foreach($imagen as $im)
                        @if($im->id_tipo_servicio===1)
                            <div class="project_item building isolation tiling">

                                <img  src="{{asset('Imagenes/laboratorios/'.$im->img_ruta)}}" class="imagen1" alt="">
                                <div class="project_hover">
                                    <div class="project_hover_inner">
                                        <div class="project_hover_content">
                                            <a href="#"><h4>Jahanara Vila</h4></a>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                            <a class="view_btn" href="#">View Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                    @endforeach

                        @foreach($imagen1 as $ima)
@if($ima->id_tipo_servicio===1)
                    <div style="display: none;" class="project_item hola isolation plumbing">

                            <img  src="{{asset('Imagenes/laboratorios/'.$ima->img_ruta)}}" class="imagen1" alt="">
                        <div class="project_hover">
                            <div class="project_hover_inner">
                                <div class="project_hover_content">
                                    <a href="#"><h4>Jahanara Vila</h4></a>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                    <a class="view_btn" href="#">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   @endif

                            @endforeach
                </div>

            </div>
        </div>
    </div>
</section>
<!--================End Our Project Area =================-->

<!--================Counter Area =================-->
<section class="counter_area">
    <div class="container">
        <div class="row counter_inner">
            <div class="col-md-3 col-sm-6">
                <div class="counter_item">
                    <i class="fa fa-smile-o" aria-hidden="true"></i>
                    <h4 class="counter">950</h4>
                    <h5>Clientes Satisfechos</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter_item">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    <h4 class="counter">5</h4>
                    <h5>Sevicios Ofrecidos</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter_item">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <h4 class="counter">15</h4>
                    <h5>Años de Experiencia</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter_item">
                    <i class="fa fa-handshake-o" aria-hidden="true"></i>
                    <h4 class="counter">5</h4>
                    <h5>Convenios</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Counter Area =================-->


<!--================Latest News Area =================-->
<section class="latest_news_area">
    <div class="container">
        <div class="main_c_b_title">
            <h2>Ultimas <br class="title_br" />Noticias</h2>
            <h6>Mundo DIESEL</h6>
        </div>
        <div class="row latest_news_inner">
            <div class="col-md-4 col-sm-6">
                <div class="latest_news_item">
                    <div class="news_image">
                        <img src="{{asset('web/img/blog/l-news/l-news-1.jpg')}}" alt="">
                        <div class="l_date">
                            <h5>14</h5>
                            <h6>Aug</h6>
                        </div>
                    </div>
                    <div class="news_content">
                        <a href="#"><h4>The Road To Success Is Always Under Construction</h4></a>
                        <h6>Posted By <a href="#">Admin</a></h6>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <div class="pull-left">
                            <a href="#">2 Comments</a>
                        </div>
                        <div class="pull-right">
                            <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="latest_news_item">
                    <div class="news_image">
                        <img src="{{asset('web/img/blog/l-news/l-news-2.jpg')}}" alt="">
                        <div class="l_date">
                            <h5>14</h5>
                            <h6>Aug</h6>
                        </div>
                    </div>
                    <div class="news_content">
                        <a href="#"><h4>The Road To Success Is Always Under Construction</h4></a>
                        <h6>Posted By <a href="#">Admin</a></h6>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <div class="pull-left">
                            <a href="#">2 Comments</a>
                        </div>
                        <div class="pull-right">
                            <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="latest_news_item">
                    <div class="news_image">
                        <img src="{{asset('web/img/blog/l-news/l-news-3.jpg')}}" alt="">
                        <div class="l_date">
                            <h5>14</h5>
                            <h6>Aug</h6>
                        </div>
                    </div>
                    <div class="news_content">
                        <a href="#"><h4>The Road To Success Is Always Under Construction</h4></a>
                        <h6>Posted By <a href="#">Admin</a></h6>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <div class="pull-left">
                            <a href="#">2 Comments</a>
                        </div>
                        <div class="pull-right">
                            <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Latest News Area =================-->

<!--================Clients Area =================-->
<section class="clients_area">
    <div class="container">
        <div class="clients_slider owl-carousel">
            <div class="item">
                <img src="{{asset('web/img/clients/client-1.png')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('web/img/clients/client-2.png')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('web/img/clients/client-3.png')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('web/img/clients/client-4.png')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('web/img/clients/client-5.png')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('web/img/clients/client-6.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<!--================End Clients Area =================-->

<!--================Map Area =================-->
<div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243.86484531951126!2d-76.961548919374!3d-12.05469764818642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c68a2cf1e615%3A0xcd30a061d4e771fd!2sAv.+Calca+104%2C+Cercado+de+Lima+15012!5e0!3m2!1ses-419!2spe!4v1550002725756" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!--================End Map Area =================-->

<!--================Address Area =================-->
<section class="address_area" id="contactenos">
    <div class="container">
        <div class="row address_inner">
            <div class="col-md-4">
                <div class="media">
                    <div class="media-left">
                        <img src="{{asset('web/img/icon/place-icon.png')}}" alt="">
                    </div>
                    <div class="media-body">
                        <h4>Ubicanos en :</h4>
                        <h5>Av. Calca 104 Coop. 27 de Abril   Ate</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="media-left">
                        <img src="{{asset('web/img/icon/phone-icon.png')}}" alt="">
                    </div>
                    <div class="media-body">
                        <h5>(01) 547 7201</h5>
                        <h5>(+51) 980610 635</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="media-left">
                        <img src="{{asset('web/img/icon/inbox-icon.png')}}" alt="">
                    </div>
                    <div class="media-body">
                        <p>ocollantes@overhauldiesel.com.pe</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Address Area =================-->

<!--================Footer Area =================-->
<footer class="footer_area">
    <!--<div class="footer_widgets_area">
        <div class="container">
            <div class="row footer_widgets_inner">
                <div class="col-md-4 col-sm-6">
                    <aside class="f_widget about_widget">
                        <img src="img/footer-logo.png" alt="">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium. ed quia consequuntur magni dolores eos qui ratione.</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-4 col-sm-6">
                    <aside class="f_widget recent_widget">
                        <div class="f_w_title">
                            <h3>Recent Posts</h3>
                        </div>
                        <div class="recent_w_inner">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/blog/recent-post/recent-1.png" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><p>The road to success is always under con-struction</p></a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/blog/recent-post/recent-2.png" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><p>The road to success is always under con-struction</p></a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-md-4 col-sm-6">
                    <aside class="f_widget give_us_widget">
                        <h5>Llamanos</h5>
                        <h4>(01) 547 7201</h4>
                        <h4>(+51) 980 610 635</h4>
                    </aside>
                </div>
            </div>
        </div>
    </div>-->
    <div class="footer_copy_right">
        <div class="container">
            <h4><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Realizado por <a href="https://gruposystem.com" target="_blank">Grupo System V&V</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></h4>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->









<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('web/js/jquery-2.2.4.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('web/js/bootstrap.min.js')}}"></script>
<!-- Rev slider js -->
<script src="{{asset('web/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('web/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('web/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('web/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('web/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('web/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>

<script src="{{asset('web/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('web/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('web/vendors/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('web/vendors/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('web/vendors/counterup/waypoints.min.js')}}"></script>
<script src="{{asset('web/vendors/counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('web/vendors/flex-slider/jquery.flexslider-min.js')}}"></script>

<!--gmaps Js-->
<script src="{{asset('web/js/gmaps.min.js')}}"></script>

<script src="{{asset('web/js/theme.js')}}"></script>
<script>

    function muestra_oculta(id){
        if (document.getElementById){ //se obtiene el id
            var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
            el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
        }
    }
    window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
        muestra_oculta('contenido');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
    }
</script>
</body>
</html>
