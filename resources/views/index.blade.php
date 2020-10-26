<!DOCTYPE HTML>
<html>
<head>
<meta  charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My PortF</title>

<!-- Favicons -->

<link rel="shortcut icon" href="{{ asset('front/favicon.png')}}">
<link rel="apple-touch-icon" href="{{asset('front/apple-touch-icon.png')}}">
<link rel="apple-touch-icon" sizes="72x72" href="{{asset('front/apple-touch-icon-72x72.png')}}">
<link rel="apple-touch-icon" sizes="114x114" href="{{asset('front/apple-touch-icon-114x114.png')}}">

<!-- Fonts -->

<link href='https://fonts.googleapis.com/css?family=Hind:400,500,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Styles -->

<link href="{{asset('front/css/style.css')}}" rel="stylesheet" media="screen">

</head>
<body>
  <div class="layout">

  <!-- Loader -->

  <div class="loader">
    <div class="loader-brand"><img alt="" class="img-responsive center-block" src="{{ asset('/front/img/12.png') }}"></div>
  </div>

  <!-- Header -->

  <header id="top" class="navbar js-navbar-affix">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#home" class="brand js-target-scroll">
          <span class="text-primary">Portf</span>olio
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active">
            <a href="#home" class="js-target-scroll">Home</a>
          </li>
          <li>
            <a href="#services" class="js-target-scroll">Services</a>
          </li>
          <li>
            <a  href="#showcase" class="js-target-scroll">Portfolio</a>
          </li>
          <li>
            <a  href="#features" class="js-target-scroll">Technology</a>
          </li>
          <li>
            <a  href="#contact" class="js-target-scroll">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <!-- Home -->

  <main id="home" class="main">

    <!-- Start revolution slider -->

    <div class="rev_slider_wrapper">
      <div id="rev_slider" class="rev_slider fullscreenbanner"  data-version="5.0.7">
        <ul>

          <!-- Slide 1 -->

          <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-fstransition="fade" data-fsmasterspeed="1000">

            <!-- Main image -->

            <img src="{{asset('front/img/slider/d.jpg')}}"  alt=""  data-lazyload="{{asset('front/img/slider/d.jpg')}}" data-bgposition="center top" data-kenburns="on" data-duration="20000" data-ease="Power1.easeOut" data-scalestart="120" data-scaleend="100" class="rev-slidebg" data-no-retina>

            <!-- Layer 1 -->

            <div class="tp-caption tp-resizeme"
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
              data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-80,'-80']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
              data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
              data-start="500"
              data-splitin="chars"
              data-splitout="none"
              data-responsive_offset="on"
              data-elementdelay="0.05"
              style="z-index: 5; font-size:23px;  text-transform:uppercase; letter-spacing:0.9em; font-weight: 300;">A lead Web Developer
            </div>

            <!-- Layer 2 -->

            <div class="tp-caption tp-resizeme"
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
              data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
              data-transform_out="opacity:0;s:1000;s:1000;"
              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
              data-start="1300"
              data-splitin="none"
              data-splitout="none"
              data-responsive_offset="on"
              style="z-index: 6; font-size: 90px; text-transform:uppercase; letter-spacing:0.15em; font-weight: 700;">Laravel Tech
            </div>

            <!-- Layer 3 -->

            <div class="tp-caption tp-resizeme"
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
              data-y="['middle','middle','middle','middle']" data-voffset="['90','90','90','90']"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
              data-transform_out="opacity:0;s:1000;s:1000;"
              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
              data-start="1500"
              data-splitin="none"
              data-splitout="none"
              style="z-index: 7; font-size:18px; color: #DDD;">More than two years,<br> so I’ll develop my experiences
            </div>

            <!-- Layer 4 -->

            <div class="tp-caption tp-resizeme"
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
              data-y="['middle','middle','middle','middle']" data-voffset="['190','190','190','190']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
              data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
              data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
              data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
              data-mask_out="x:inherit;y:inherit;"
              data-start="1500"
              data-splitin="none"
              data-splitout="none"
              data-responsive_offset="on"
              style="z-index: 8;"><a href="{{ url('storage/user/'.$data->cv) }}" target="_blank" class="btn btn-hvr-white hvr-pulse-grow">See my CV</a>
            </div>
          </li>

          <!-- Slide 2 -->

          <li data-transition="zoomout" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000">

            <!-- Main image-->

            <img src="{{asset('front/img/slider/f.png')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg">

            <!-- Layer 1 -->

            <div class="tp-caption tp-resizeme"
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
              data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-50']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
              data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
              data-start="500"
              data-splitin="chars"
              data-splitout="none"
              data-responsive_offset="on"
              style="z-index: 6; font-size:80px; line-height: 1; text-transform:uppercase; letter-spacing:0.1em; font-weight: 700;">Neat Code
            </div>

            <!-- Layer 2 -->

            <div class="tp-caption tp-resizeme"
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
              data-y="['middle','middle','middle','middle']" data-voffset="['30','30','30','30']"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
              data-transform_out="opacity:0;s:1000;s:1000;"
              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
              data-start="1500"
              data-splitin="none"
              data-splitout="none"
              style="z-index: 7; font-size:18px; color: #DDD;">The experience is the best teacher,<br> so I’ll increase my experiences
            </div>

            <!-- Layer 4 -->

            <div class="tp-caption tp-resizeme"
              data-x="['center','center','center','center']" data-hoffset="['-95','-95','-95','-95']"
              data-y="['middle','middle','middle','middle']" data-voffset="['130','130','130','130']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
              data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
              data-transform_in="x:-100px;opacity:0;s:1500;e:Power4.easeInOut;"
              data-transform_out="x:[-175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
              data-mask_out="x:inherit;y:inherit;"
              data-start="1500"
              data-splitin="on"
              data-splitout="none"
              data-responsive_offset="on"
              style="z-index: 8;"><a href="https://github.com/virgiawndwir" target="_blank" class="btn btn-hvr-white hvr-pulse-grow">Github</a>
            </div>

            <!-- Layer 5 -->

            <div class="tp-caption tp-resizeme"
              data-x="['center','center','center','center']" data-hoffset="['95','95','95','95']"
              data-y="['middle','middle','middle','middle']" data-voffset="['130','130','130','130']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
              data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
              data-transform_in="x:100px;opacity:0;s:1500;e:Power4.easeInOut;"
              data-transform_out="x:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
              data-mask_out="x:inherit;y:inherit;"
              data-start="1500"
              data-splitin="on"
              data-splitout="none"
              data-responsive_offset="on"
              style="z-index: 8;"><a href="https://gitlab.com/virgiawndwir" target="_blank" class="btn btn-white hvr-pulse-grow">Gitlab</a>
            </div>
          </li>

          <!-- Slide 3 -->

          <li data-transition="zoomout" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000">

            <!-- Main image-->

            <img src="{{asset('front/img/slider/slide3.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

            <!-- Layer 1 -->

            <div class="tp-caption tp-resizeme"
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
              data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-50']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
              data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
              data-start="500"
              data-splitin="chars"
              data-splitout="none"
              data-responsive_offset="on"
              style="z-index: 6; font-size:60px; line-height: 1; text-transform:uppercase; letter-spacing:0.05em; font-weight: 700;">Creative & Clean
            </div>

            <!-- Layer 2 -->

            <div class="tp-caption tp-resizeme"
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
              data-y="['middle','middle','middle','middle']" data-voffset="['30','30','30','30']"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
              data-transform_out="opacity:0;s:1000;s:1000;"
              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
              data-start="1500"
              data-splitin="none"
              data-splitout="none"
              style="z-index: 7; font-size:18px; color: #DDD;">The most important things are not things,<br> so we’ll design experiences
            </div>

            <!-- Layer 3 -->

            <div class="tp-caption tp-resizeme"
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
              data-y="['middle','middle','middle','middle']" data-voffset="['130','130','130','130']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
              data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
              data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
              data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
              data-mask_out="x:inherit;y:inherit;"
              data-start="1500"
              data-splitin="none"
              data-splitout="none"
              data-responsive_offset="on"
              style="z-index: 8;"><a href="#services" class="btn btn-round btn-hvr-white hvr-pulse-grow js-target-scroll">GO</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </main>

  <!-- Content -->

  <div class="content">

    <!-- Services  -->

    <section id="services" class="services text-center section pb-0">
      <div class="container">
        <div class="row">
          <header class="col-md-8 col-md-offset-2">
            <h2 class="section-title">Newbie Web Agency</h2>
            <div class="spacer spacer-primary">
              <div class="line">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
              </div>
            </div>
            <p>Just felt a little dizzy because of coding. Because I'm a beginner programmer who still needs a lot of input about the rigors of coding.</p>
          </header>
        </div>
      </div>
      <div class="section-content">
        <div class="container">
          <div class="row row-columns">
            <div class="service-column column col-md-4 wow fadeInUp">
              <span class="icon-circle">
                <i class="fa fa-magic"></i>
              </span>
              <h3 class="entry">Vue JS</h3>
              <div class="spacer">
                <div class="line">
                  <div class="dot"></div>
                  <div class="dot"></div>
                  <div class="dot"></div>
                </div>
              </div>
              <p class="small text-muted">Is an open-source model–view–viewmodel JavaScript framework for building user interfaces and single-page applications.</p>
            </div>
            <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.2s">
              <span class="icon-circle">
                <i class="fa fa-fire"></i>
              </span>
              <h3 class="entry">Laravel</h3>
              <div class="spacer">
                <div class="line">
                  <div class="dot"></div>
                  <div class="dot"></div>
                  <div class="dot"></div>
                </div>
              </div>
              <p class="small text-muted">Is a free, open-source PHP web framework, intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony.</p>
            </div>
            <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.4s">
              <span class="icon-circle">
                <i class="fa fa-flask"></i>
              </span>
              <h3 class="entry">SQL</h3>
              <div class="spacer">
                <div class="line">
                  <div class="dot"></div>
                  <div class="dot"></div>
                  <div class="dot"></div>
                </div>
              </div>
              <p class="small text-muted">Designed for managing data held in a relational database management system, or for stream processing in a relational data stream management system.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio  -->

    <section id="showcase" class="showcase text-center section pb-0">
          <div class="container">
              <div class="row">
                  <header class="col-md-8 col-md-offset-2">
                      <h2 class="section-title">Our Portfolio</h2>
                      <div class="spacer spacer-primary">
                          <div class="line">
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                          </div>
                      </div>
                  </header>
              </div>
              <ul class="filter">
                  <li class="active"><a href="#" data-filter="*">All</a></li>
                  <li><a href="#" data-filter=".design">UI Design</a></li>
                  <li><a href="#" data-filter=".webdevelopment">Web Development</a></li>
              </ul>
          </div>
          <div class="section-content">
              <div class="isotope js-gallery">
                  <div class="isotope-item webdevelopment">
                      <a href="{{ asset('front/img/portfolio/arfa.png') }}" title="Stationery Design">
                          <figure class="showcase-item">
                              <div class="showcase-item-thumbnail"><img alt="" src="{{ asset('front/img/portfolio/arfa.png') }}"></div>
                              <figcaption class="showcase-item-hover">
                                  <div class="showcase-item-info">
                                      <div class="showcase-item-category">Web Development</div>
                                      <div class="showcase-item-title">ArfaCloud Solutions</div>
                                  </div>
                              </figcaption>
                          </figure>
                      </a>
                  </div>
                  <div class="isotope-item webdevelopment">
                      <a href="{{ asset('front/img/portfolio/kp.png') }}" title="Stationery Design">
                          <figure class="showcase-item">
                              <div class="showcase-item-thumbnail"><img alt="" src="{{ asset('front/img/portfolio/kp.png') }}"></div>
                              <figcaption class="showcase-item-hover">
                                  <div class="showcase-item-info">
                                      <div class="showcase-item-category">Web Development</div>
                                      <div class="showcase-item-title">Karir Purwokerto</div>
                                  </div>
                              </figcaption>
                          </figure>
                      </a>
                  </div>
                  <div class="isotope-item webdevelopment">
                      <a href="{{ asset('front/img/portfolio/inter.png') }}" title="Stationery Design">
                          <figure class="showcase-item">
                              <div class="showcase-item-thumbnail"><img alt="" src="{{ asset('front/img/portfolio/inter.png') }}"></div>
                              <figcaption class="showcase-item-hover">
                                  <div class="showcase-item-info">
                                      <div class="showcase-item-category">Web Development</div>
                                      <div class="showcase-item-title">Alam Sari Interbuana</div>
                                  </div>
                              </figcaption>
                          </figure>
                      </a>
                  </div>
                  <div class="isotope-item webdevelopment">
                      <a href="{{ asset('front/img/portfolio/app.png') }}" title="Stationery Design">
                          <figure class="showcase-item">
                              <div class="showcase-item-thumbnail"><img alt="" src="{{ asset('front/img/portfolio/app.png') }}"></div>
                              <figcaption class="showcase-item-hover">
                                  <div class="showcase-item-info">
                                      <div class="showcase-item-category">Web Development</div>
                                      <div class="showcase-item-title">Event Student Wikrama</div>
                                  </div>
                              </figcaption>
                          </figure>
                      </a>
                  </div>
                  <div class="isotope-item design">
                      <a href="{{ asset('front/img/portfolio/barscan.png') }}" title="Stationery Design">
                          <figure class="showcase-item">
                              <div class="showcase-item-thumbnail"><img alt="" src="{{ asset('front/img/portfolio/barscan.png') }}"></div>
                              <figcaption class="showcase-item-hover">
                                  <div class="showcase-item-info">
                                      <div class="showcase-item-category">UI Design</div>
                                      <div class="showcase-item-title">Bar Code Scanner</div>
                                  </div>
                              </figcaption>
                          </figure>
                      </a>
                  </div>
              </div>
          </div>
      </section>

    <!-- About  -->

    <section id="about" class="about section pb-0">
      <div class="container">
        <div class="row">
          <header class="text-center col-md-8 col-md-offset-2">
            <h2 class="section-title">What can I do</h2>
            <div class="spacer spacer-primary">
              <div class="line">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
              </div>
            </div>
            <p>The important thing is not to stop questioning. Curiosity has its own reason for existing. <br><i>"Albert Einstein"</i></p>
          </header>
        </div>
      </div>
      <div class="section-content">
        <div class="row-about bgc-light-md clearfix">
          <div class="bg-about-2 bg-right-fluid col-md-6"></div>
          <div class="col-about-left col-md-5 col-md-offset-1">
            <h2 class="about-title">My Expertise</h2>
            <p>Has been working on Laravel Framework, especially as Backend Developer for over two years. Familiar with Linux, Bootstrap, MySQL Databases, and Git Version Control. On progress to be Fullstack Developer.</p>
            <div class="col-about-content">
              <div class="progress-bar-title">Laravel</div>
              <div class="progress">
                <div class="progress-bar" data-width="89">
                  <span>89%</span>
                </div>
              </div>
              <div class="progress-bar-title">Bootstrap</div>
              <div class="progress">
                <div class="progress-bar" data-width="83">
                      <span>83%</span>
                    </div>
              </div>
              <div class="progress-bar-title">UI Design</div>
              <div class="progress">
                <div class="progress-bar" data-width="75">
                  <span>75%</span>
                </div>
              </div>
              <div class="progress-bar-title">Vue Js</div>
              <div class="progress">
                <div class="progress-bar" data-width="65">
                    <span>65%</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Features -->

    <section id="features" class="features section">
      <div class="container">
        <div class="row">
          <header class="text-center col-md-8 col-md-offset-2">
            <h2 class="section-title">Our Technology</h2>
            <div class="spacer spacer-primary">
              <div class="line">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
              </div>
            </div>
          </header>
        </div>
      </div>
      <div class="section-content">
        <div class="container">
          <div class="row row-columns">
            <div class="col-feature column col-sm-6 col-md-4">
              <div class="media-left">
                <i class="text-primary icon-feature fa fa-bug"></i>
              </div>
              <div class="media-right">
                <h3 class="icon-title">PHP</h3>
                <p class="feature-descr text-muted">General-purpose scripting language that is especially suited to web development.</p>
              </div>
            </div>
            <div class="col-feature column col-sm-6 col-md-4">
              <div class="media-left">
                <i class="text-primary icon-feature fa fa-flask"></i>
              </div>
              <div class="media-right">
                <h3 class="icon-title">MySql</h3>
                <p class="feature-descr text-muted">An open-source relational database management system.</p>
              </div>
            </div>
            <div class="col-feature column col-sm-6 col-md-4">
              <div class="media-left">
                <i class="text-primary icon-feature fa fa-leaf"></i>
              </div>
              <div class="media-right">
                <h3 class="icon-title">Bootstrap</h3>
                <p class="feature-descr text-muted">A free and open-source CSS framework directed at responsive, mobile-first front-end web development.</p>
              </div>
            </div>
            <div class="col-feature column col-sm-6 col-md-4">
              <div class="media-left">
                <i class="text-primary icon-feature fa fa-bullseye"></i>
              </div>
              <div class="media-right">
                <h3 class="icon-title">Apache</h3>
                <p class="feature-descr text-muted">Is a free and open-source cross-platform web server software, released under the terms of Apache License 2.0.</p>
              </div>
            </div>
            <div class="col-feature column col-sm-6 col-md-4">
              <div class="media-left">
                <i class="text-primary icon-feature fa fa-pencil"></i>
              </div>
              <div class="media-right">
                <h3 class="icon-title">Google Fonts</h3>
                <p class="feature-descr text-muted">A library of 999 free licensed font families, an interactive web directory for browsing the library, and APIs for conveniently using the fonts via CSS and Android.</p>
              </div>
            </div>
            <div class="col-feature column col-sm-6 col-md-4">
              <div class="media-left">
                <i class="text-primary icon-feature fa fa-flag-o"></i>
              </div>
              <div class="media-right">
                <h3 class="icon-title">Jquery</h3>
                <p class="feature-descr text-muted">A JavaScript library designed to simplify HTML DOM tree traversal and manipulation, as well as event handling, CSS animation, and Ajax.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->

    <section id="contact" class="contact text-white masked section">
      <div class="container">
        <header class="text-center col-md-8 col-md-offset-2">
          <h2 class="text-white section-title">Touch Me</h2>
          <div class="spacer spacer-primary">
            <div class="line">
              <div class="dot"></div>
              <div class="dot"></div>
              <div class="dot"></div>
            </div>
          </div>
        </header>
      </div>
      <div class="section-content">
        <div class="container rel-1">
          <div class="row row-columns">
            <div class="column col-md-4 col-md-push-8">
              <div class="contact-row">
                <div class="media-left">
                  <span class="icon-circle-3">
                    <i class="fa fa-map-marker"></i>
                  </span>
                </div>
                <div class="media-right">
                  <h4 class="text-white icon-title">Address</h4>
                  <p>Tajur Street, Bogor City, West Java, 16146 Indonesia.</p>
                </div>
              </div>
              <div class="contact-row">
                <div class="media-left">
                  <span class="icon-circle-3">
                    <i class="fa fa-envelope"></i>
                  </span>
                </div>
                <div class="media-right">
                  <h4 class="text-white icon-title">Email</h4>
                  <p>mail@dwirangga.my.id</p>
                </div>
              </div>
              <div class="contact-row">
                <div class="media-left">
                  <span class="icon-circle-3">
                    <i class="fa fa-phone"></i>
                  </span>
                </div>
                <div class="media-right">
                  <h4 class="text-white icon-title">Phone</h4>
                  <p>(+62) 812-8718-8918</p>
                </div>
              </div>
            </div>
            <div class="column col-md-8 col-md-pull-4">
              <form class="js-ajax-form" >
                <div class="form-group">
                  <input type="text" class="form-control form-control-white" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-white" name="email" required placeholder="Email address *">
                </div>
                <div class="form-group">
                  <textarea class="form-control form-control-white" name="message" required placeholder="Write message *"></textarea>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-b-white wow swing">Send message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->

    <footer id="footer" class="footer text-white">
      <div class="footer-bottom">
        <div class="container">
          <div class="copy">
            © 2016 Vanessa. All rights reserved by <a href="http://themeforest.net/user/murren20" target="_blank">Murren20</a>
          </div>
          <div class="social">
            <a href="https://instagram.com/virgi.dr" target="_blank" class="fa fa-instagram"></a>
            <a href="http://wa.me/6282144420385" target="_blank" class="fa fa-whatsapp"></a>
            <a href="https://github.com/virgiawndwir" target="_blank" class="fa fa-github"></a>
          </div>
        </div>
      </div>
    </footer>
  </div>
</div>

  <!-- Modals -->

  <div id="request" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <span class="close" data-dismiss="modal" aria-label="Close">&times;</span>
            <h2 class="modal-title">Start with us</h2>
          </div>
          <div class="modal-body text-center">
            <form class="form-request js-ajax-form">
              <div class="row-fields row">
                <div class="form-group col-field col-sm-6">
                    <input type="text" class="form-control form-control-white" name="name" required placeholder="Name *">
                </div>
                 <div class="form-group col-field col-sm-6">
                    <input type="email" class="form-control form-control-white" name="email" required placeholder="Email *">
                  </div>
                <div class="form-group col-field col-sm-12">
                    <textarea class="form-control form-control-white" rows="3" name="message" placeholder="Message"></textarea>
                </div>
                <div class="col-sm-12">
                  <button type="submit" class="btn btn-hvr-white hvr-pulse-grow" data-text-hover="Submit">Send request</button>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>
  </div>

  <!-- Modals success -->

  <div id="success" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
            <h2 class="modal-title">Thank you</h2>
            <p class="modal-subtitle">Your message is successfully sent...</p>
          </div>
        </div>
    </div>
  </div>

  <!-- Modals error -->

  <div id="error" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
             <h2 class="modal-title">Sorry</h2>
            <p class="modal-subtitle"> Something went wrong </p>
          </div>
        </div>
    </div>
  </div>

<!-- SCRIPTS -->

<script src="{{ asset('front/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.viewport.js') }}"></script>
<script src="{{ asset('front/js/smoothscroll.js') }}"></script>
<script src="{{ asset('front/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('front/js/jQuerySimpleCounter.js') }}"></script>
<script src="{{ asset('front/js/wow.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/js/imagesloaded.pkgd.js') }}"></script>
<script src="{{ asset('front/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('front/js/interface.js') }}"></script>

<!-- SLIDER REVOLUTION -->
<script src="{{ asset('front/js/rev-slider/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('front/js/rev-slider/jquery.themepunch.revolution.min.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS   -->
<script src="{{ asset('front/js/rev-slider/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('front/js/rev-slider/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('front/js/rev-slider/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('front/js/rev-slider/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('front/js/rev-slider/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('front/js/rev-slider/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('front/js/rev-slider/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('front/js/rev-slider/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('front/js/rev-slider/revolution.extension.video.min.js') }}"></script>

<script>
  if (typeof $.fn.revolution !== 'undefined') {

      $("#rev_slider").revolution({
        sliderType:"standard",
        sliderLayout:"fullscreen",
        dottedOverlay:"none",
        delay:7000,
        navigation: {
          keyboardNavigation:"off",
          keyboard_direction: "horizontal",
          onHoverStop:"off",
          touch:{
            touchenabled:"on",
            swipe_threshold: 75,
            swipe_min_touches: 1,
            swipe_direction: "horizontal",
            drag_block_vertical: false
          },
          bullets: {
            enable:true,
            hide_onmobile:true,
            hide_under:767,
            style:"custom",
            hide_onmobile: true,
            hide_onleave: true,
            direction:"horizontal",
            h_align:"center",
            v_align:"bottom",
            h_offset:0,
            v_offset:40,
            space:8,
            tmp:'<span class="tp-bullet-inner"></span>'
          }
        },
        viewPort: {
          enable:true,
          outof:"pause",
          visible_area:"80%"
        },
        responsiveLevels:[1240,1024,778,480],
        gridwidth:[800],
        gridheight:[600],
        lazyType:"none",
        shadow:0,
        spinner:"off",
        stopLoop:"on",
        stopAfterLoops:0,
        shuffle:"off",
        autoHeight:"off",
        fullScreenAlignForce:"off",
        fullScreenOffsetContainer: "",
        fullScreenOffset: "",
        disableProgressBar:"on",
        hideThumbsOnMobile:"off",
        hideSliderAtLimit:0,
        hideCaptionAtLimit:0,
        hideAllCaptionAtLilmit:0,
        debugMode:false,
        fallbacks: {
          simplifyAll:"off",
          nextSlideOnWindowFocus:"off",
          disableFocusListener:false,
        }
      });
    }
</script>
</body>
</html>
