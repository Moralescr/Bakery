@extends('layouts.app1')
@section('content')

<!-- Section offer -->	
<section id="blog-main" class="color-section">
        <div class="jumbotron"></div>
        <div class="page-title" data-0="background-position:98% 40px,2% 40px;" data-end="background-position:98% -400px,2% -400px">
        <h3>Acerca de nosotros</h3>
        <!-- breadcrumb --> 
        <ul class="breadcrumb">
            <li><a href="{{ route('index') }}">Inicio</a> <span class="divider"></span></li>
            <li class="active">Acerca de nosotros</li>
        </ul>
        <!-- /breadcrumb --> 
        </div>
    </section>
    <!-- / section -->
    <!-- Section About --> 
    <section id="about" class="color-section2">
        <div class="container">
        <!-- Section Heading -->
        <div class="section-heading">
            <div class="hr"></div>
        </div>
        <!-- Text -->
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <h3>Creando deliciosos postres desde el 2020</h3>
                <p class="text-justify">
                    Hacer repostería implica pensar paso a paso y seguir el aquí y el ahora, pero también consiste en pensar en las recetas como un conjunto,
                    el plato como un conjunto, el uso que le queremos dar, para quién va a ser, a qué hora lo vas a compartir...
                    Es por ello que realmente marcamos la diferencia, pues siempre buscamos combinar y trabajar con productos de primera calidad, muy enfocados
                    en la temporada y dónde los sabores de cada uno de ellos tenga una marcada presencia en nuestras elaboraciones.   
                </p>
            </div>
            <!-- /col-lg-8 -->
            <div class="col-lg-4 col-sm-12">
                <!-- Accordion -->
                <div class="panel-group" id="accordion">
                    <!-- Question 1 -->
                    <div class="panel">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Nuestra Misión</a>
                        </h5>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p class="text-justify">
                                Satisfacer las necesidades de nuestros clientes con la elaboración de postres
                                para así poder alegrar y endulzar los buenos momentos de sus vidas.
                            </p>
                        </div>
                    </div>
                    </div>
                    <!-- Question 2 -->
                    <div class="panel">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Nuestra Visión</a>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p class="text-justify">
                            Ser la mejor opción en pasteles, postres, carlotas húmedas, etc... además de un lugar de preferencia para nuestros clientes
                            convirtiendonos  así en su opción favorita para disfruta en familia. 
                            </p>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- /.accordion -->
            </div>
            <!-- /col-lg-4 -->
        </div>
        <!-- /row -->
        <div id="owl-icons" class="owl-carousel features-icon">
            <div class="col-sm-12">
                <!-- item1 -->
                <div class="media text-center">
                    <i class="flaticon-electric-mixer"></i>
                    <div class="media-body">
                    <h5>Preparación</h5>
                    <p>Nos esforzamos por siempre hacer un producto bajo altos estandares de higiene</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <!-- item2 -->
                <div class="media text-center">
                    <i class="flaticon-gingerbread"></i>
                    <div class="media-body">
                    <h5>Creatividad</h5>
                    <p>Siempre buscamos nuevas y mejores formas de hacer nuestros productos.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <!-- item3 -->
                <div class="media text-center">
                    <i class="flaticon-food-5"></i>
                    <div class="media-body">
                    <h5>Calidad</h5>
                    <p>Comprometidos a brindarle un servicio de calidad.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <!-- item5 -->
                <div class="media text-center">
                    <i class="flaticon-lovely-cupcake"></i>
                    <div class="media-body">
                    <h5>Mucho amor</h5>
                    <p>Todos nuestros postres poseen un ingrediente secreto llamado amor.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--/owl-icons-->
        <div class="row">
            <div class="col-lg-4 box">
                <h6>Fundadora: Alejandra Mora</h6>
                <ul class="no-margin">
                    <li>Aliquam erat volut pat. </li>
                    <li>Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac
                    sodales felis
                    </li>
                    <li>Aliquam erat volut pat phas ellu, lorem ipsuet.</li>
                    <li>Lorem ipsum Aliquam erat volut pat phas ellu lorem ipsuet.</li>
                    <li>Ipsum Aliquam erat volut pat phas ellu lorem ipsuet Ibu lum orci eget, Aliquam erat volut pat phas ellus ac viverra elit.</li>
                    <li>Aliquam erat volut pat phas ellu, lorem ipsuet.</li>
                </ul>
            </div>
            <!-- /col-lg-7 -->
            <div class="col-lg-8">
                <div id="owl-about" class="owl-carousel">
                    <div class="item">
                    <img class="img-responsive img-rounded" src="bakery/img/about1.jpg" alt="">
                    </div>
                    <div class="item">
                    <img class="img-responsive  img-rounded" src="bakery/img/about2.jpg" alt="">
                    </div>
                    <div class="item">
                    <img class="img-responsive  img-rounded" src="bakery/img/about3.jpg" alt="">
                    </div>
                </div>
                <!-- /owl-about -->
            </div>
            <!-- /col-lg-9 -->
        </div>
        <!-- /row -->
        </div>
        <!--/container-->
    </section>
    <!--/section -->
            
    <!-- Parallax object -->
    <div class="parallax-object hidden-sm hidden-xs hidden-md" 
        data-100-start="transform:rotate(-0deg); left:3%;margin-top:-100px;" 
        data-center="transform:rotate(-370deg);">
        <!-- Image -->
        <img src="bakery/img/cake2.png" alt="">
    </div>
        
    <!-- Parallax object -->
    <div class="parallax-object hidden-sm hidden-xs hidden-md" 
        data-100-start="transform:rotate(-0deg); right:3%;" 
        data-center="transform:rotate(-370deg);">
        <!-- Image -->
        <img src="bakery/img/donut.png" alt="">
    </div>

    <!-- Divider --> 
    <!--<div class="slanted-divider"></div>-->
        
    <!-- Divider --> 
    <!--<div class="slanted-divider"></div>-->
    
    <!-- Section Team -->	
    <section id="team" class="color-section2">
        <div class="container">
        <!-- Section Heading -->
        <div class="section-heading">
            <h2>Equipo de trabajo</h2>
            <div class="hr"></div>
        </div>
            <!-- Team member 1 -->	
            <div class="team-member">
                <div class="profile-image img-zoom">
                    <img src="bakery/img/fundadora.jpg" alt="" />
                </div>
                <div class="team-caption">
                    <h4>Alejandra Mora</h4>
                    <h6>Fundadora</h6>   
                    <div class="social-media smaller">
                    <a href="#" title=""><i class="fa fa-whatsapp"></i></a>
                    <a href="#" title=""><i class="fa fa-facebook"></i></a>
                    <a href="#" title=""><i class="fa fa-instagram"></i></a>
                    </div>   
                </div>
            </div>
            <!--/team member ends-->
            <div class="col-lg-12 box text-center">
                <h6>Ale's Cake - 2020</h6>
                <ul class="no-margin">
                    <li>Aliquam erat volut pat. </li>
                    <li>Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac
                    sodales felis
                    </li>
                    <li>Aliquam erat volut pat phas ellu, lorem ipsuet.</li>
                    <li>Lorem ipsum Aliquam erat volut pat phas ellu lorem ipsuet.</li>
                    <li>Ipsum Aliquam erat volut pat phas ellu lorem ipsuet Ibu lum orci eget, Aliquam erat volut pat phas ellus ac viverra elit.</li>
                    <li>Aliquam erat volut pat phas ellu, lorem ipsuet.</li>
                </ul>
            </div>
        </div>
    </section>
    <!--/ Section --> 
    
    <!-- Section Newsletter-->
    <section id="newsletter" class="color-section" data-0="background-position:0px -40px;" data-end="background-position:1000px -40px;">
        <div class="container">
        <div class="col-lg-7 pull-left">
            <h3>Sign-up to receive our newsletter</h3>
        </div>
        <div class="col-lg-5 pull-right">
            <!-- Form -->				
            <div id="mc_embed_signup">
                <form action="http://ingridkuhn.us12.list-manage.com/subscribe/post?u=04e646927a196552aaee78a7b&amp;id=0dae358e08" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                    <div class="mc-field-group">
                        <div class="input-group">
                            <input class="form-control input-lg required email" type="email" value="" name="EMAIL" placeholder="Your email here" id="mce-EMAIL">
                            <span class="input-group-btn">
                            <button class="btn" type="submit" value="Subscribe" name="subscribe"  id="mc-embedded-subscribe">
                                <div class="btn-line"></div>
                                <div class="btn-line btn-line-shift"></div>
                                Subscribe
                                </button>
                            </span>
                        </div>
                        <!-- Subscription results -->
                        <div id="mce-responses" class="mailchimp">
                            <div class="alert alert-danger response" id="mce-error-response"></div>
                            <div class="alert alert-success response" id="mce-success-response"></div>
                        </div>
                    </div>
                    <!-- /mc-fiel-group -->									
                    </div>
                    <!-- /mc_embed_signup_scroll -->
                </form>
                <!-- /form ends -->
            </div>
            <!-- /mc_embed_signup -->			
        </div>
        <!-- /col-ms-5 -->
        </div>
        <!-- /.container -->
    </section>
    <!-- / section-->
    
    <!-- Section Contact -->
    <section id="contact">
        <div class="container">
        <div class="col-lg-7 col-md-7">
            <!-- Section heading -->
            <div class="section-heading">
                <h2>Contact Us</h2>
                <div class="hr"></div>
            </div>
        </div>
        <!-- Contact Form -->
        <div class="row">
            <div class="col-lg-7 col-md-7 text-center">
                <h4>Get in touch with us</h4>
                <p>Consectetur adipiscing elit Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia.</p>
                <ul class="contact-info">
                    <li><i class="fa fa-map-marker"></i>Imaginary cake City 2002</li>
                    <li><i class="fa fa-phone"></i>+00 (0) 1234 5678</li>
                    <li><i class="fa fa-envelope"></i><a href="mailto:email@company.com">email@company.com</a> </li>
                </ul>
                <div class="form-style" id="contact_form">
                    <!-- Contact results -->
                    <div id="contact_results"></div>
                    <!-- Form Starts -->
                    <div class="form-group">
                    
                    <input type="text" name="name" class="form-control input-field" placeholder="Name" required="">                    
                    <input type="email" name="email" class="form-control input-field" placeholder="Email ID" required="">           
                    <input type="text" name="subject" class="form-control input-field" placeholder="Subject">                                          
                    <textarea name="message" id="message" class="textarea-field form-control" rows="4" placeholder="Enter your message" required=""></textarea>
                    <!-- Button -->
                    <a class="btn" href="#contact" id="submit_btn">
                        <div class="btn-line"></div>
                        <div class="btn-line btn-line-shift"></div>
                        Send Message
                    </a>
                    </div>
                </div>
                <!--/Contact_form -->
            </div>
            <!-- / col-lg-7-->
        </div>
        <!--/row -->            
        </div>
        <!-- /container-->
    </section>
    <!-- / section-->
@endsection