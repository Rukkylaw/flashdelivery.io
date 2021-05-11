<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>www.nwt.finalproject.com</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div id="wrapper">
	<div class="header">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar" style="padding-top: 20px"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
         <div class="sitename"><img src="img/logouse.jpg" width="100px" height="100px">
       Flash Delivery Service</div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="padding-top: 30px">
      <ul class="nav navbar-nav navbar-right">
         <li ><a href="index.php" class="btn btn-link" role="button">Home</a></li>
                    <li><a href="service.php" class="btn btn-link" role="button">Services</a></li>
                    <li><a href="about.php" class="btn btn-link" role="button">AboutUs</a></li>
                    <li><a href="faq.php" class="btn btn-link" role="button">FAQ</a></li>
                    <li><a href="contact.php" class="btn btn-link" role="button">ContactUs</a></li>
                   <li class="btn-group dropdown">    
                    <a style="text-align: center" class="btn dropdown-toggle"  data-toggle="dropdown" style="color: black"> 
                      Registration
                      <span class="caret"></span>
                             </a>   
                                 <ul class="dropdown-menu" role="menu">   
                                   <li><a href="login.php" class="btn btn-link" role="button"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                                   <li><a href="signup.php" class="btn btn-link" role="button"> <span class="glyphicon glyphicon-user"></span>Signup</a></li>
                                      </ul> 
                                         </li>  
       </ul>
    </div>
  </div>
</nav>
  </div>
		
		<div class="container" style="margin-top: 40px">
		<div class="row">
			<div class="col-md-12">
                <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,                          //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0,                                   //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                },

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $AutoCenter: 0,                                 //[Optional] Auto center thumbnail items in the thumbnail navigator container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 3
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange thumbnails, default value is 1
                    $SpacingX: 3,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 9,                              //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 260,                          //[Optional] The offset position to park thumbnail
                    $Orientation: 1,                                //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
                    $DisableDrag: false                            //[Optional] Disable drag or not, default value is false
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 980));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    <div style="position: relative; width: 100%; background-color: violet; overflow: hidden;">
        <div style="position: relative; left: 50%; width: 5000px; text-align: center; margin-left: -2500px;">
            <!-- Jssor Slider Begin -->
            <div id="slider1_container" style="position: relative; margin: 0 auto;
                top: 0px; left: 0px; width: 980px; height: 400px; background: url(img/major/purple.jpg) top center no-repeat;">
                <!-- Loading Screen -->
                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                        top: 0px; left: 0px; width: 100%; height: 100%;">
                    </div>
                    <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
                        top: 0px; left: 0px; width: 100%; height: 100%;">
                    </div>
                </div>
                <!-- Slides Container -->
                <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 980px;
                    height: 400px; overflow: hidden;">
                    <div>
                        <div style="position: absolute; width: 480px; height: 300px; top: 10px; left: 10px;
                            text-align: left; line-height: 1.8em; font-size: 12px;">
                            <br />
                            <span style="display: block; line-height: 1em; font-size: 52px;
                                color: #FFFFFF; font-family: poor richard;">Been at work since 8am</span>
                            <br />
                            <br />
                            <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                              It lunch time but You still have alot of work on your desk?
                            </span>
                            <br />
                            <span style="display: block; line-height: 1.1em; font-size: 1.5em; color: #FFFFFF;">
                               With no time to spare.
                            </span>
                            <br />
                            <br />
                            <a href="service.php">
                                <img src="img/major/find-out-more-bt.png" border="0" alt="auction slider" width="215"
                                     height="50" />
                            </a>
                        </div>
                        <img src="img/major/3.jpg" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                        <img u="thumb" src="img/major/3.jpg" />
                    </div>
                    <div>
                        <div style="position: absolute; width: 480px; height: 300px; top: 10px; left: 10px;
                            text-align: left; line-height: 1.8em; font-size: 12px;">
                            <span style="display: block; line-height: 1em; font-size: 52px;
                                color: #FFFFFF; font-family: poor richard;">Flash food delivery service is but a call<br> away</span>
                            <br />
                            <br />
                            <a href="service.php">
                                <img src="img/major/find-out-more-bt.png" border="0" alt="ebay slideshow" width="215"
                                     height="50" />
                            </a>
                        </div>
                        <img src="img/major/18.jpg" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                        <img u="thumb" src="img/major/18.jpg" />
                    </div>
                    <div>
                        <div style="position: absolute; width: 480px; height: 300px; top: 10px; left: 10px;
                            text-align: left; line-height: 1.8em; font-size: 12px;">
                            <span style="display: block; line-height: 1em; font-size: 52px;
                                color: #FFFFFF; font-family: poor richard;">It's Affordable and Efficient</span>
                            <br />
                            <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                                Your delivery will get to you in no time.
                            </span>
                            <br />
                            <br />
                            <a href="service.php">
                                <img src="img/major/find-out-more-bt.png" border="0" alt="listing slider" width="215"
                                     height="50" />
                            </a>
                        </div>
                        <img src="img/major/20.jpg" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                        <img u="thumb" src="img/major/20.jpg" />
                    </div>
                    <div>
                        <div style="position: absolute; width: 480px; height: 300px; top: 10px; left: 10px;
                            text-align: left; line-height: 1.8em; font-size: 12px;">
                            <br />
                            <span style="display: block; line-height: 1em; font-size: 52px;
                                color: #FFFFFF; font-family: poor richard;">We offer On hand delivery</span>
                            <br />
                            <br />
                            <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                               so you don't have to worry about damages.
                            </span>
                            <br />
                            <br />
                            <a href="service.php">
                                <img src="img/major/find-out-more-bt.png" border="0" alt="ebay store slider" width="215"
                                     height="50" />
                            </a>
                        </div>
                        <img src="img/major/01.jpg" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                        <img u="thumb" src="img/major/01.jpg" />
                    </div>
                    <div>
                        <div style="position: absolute; width: 480px; height: 300px; top: 10px; left: 10px;
                            text-align: left; line-height: 1.8em; font-size: 12px;">
                            <span style="display: block; line-height: 1em; font-size: 52px;
                                color: #FFFFFF; font-family: poor richard;">Fresh Food delivery</span>
                            <br />
                            <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                                we buy and deliver fresh food to all location within Ilorin.
                            </span>
                            <br />
                            <br />
                            <a href="service.php">
                                <img src="img/major/find-out-more-bt.png" border="0" alt="listing template slider"
                                     width="215" height="50" />
                            </a>
                        </div>
                        <img src="img/major/5.jpg" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                        <img u="thumb" src="img/major/5.jpg" />
                    </div>
                    <div>
                        <div style="position: absolute; width: 480px; height: 300px; top: 10px; left: 10px;
                            text-align: left; line-height: 1.8em; font-size: 12px;">
                            <br />
                            <span style="display: block; line-height: 1em; font-size: 52px;
                                color: #FFFFFF; font-family: poor richard;">Door to Door delivery</span>
                            <br />
                            <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                                Our delivery personnel delivers the goods directly to your door step so you dont't have to worry.
                            </span>
                            <br />
                            <br />
                            <a href="service.php">
                                <img src="img/major/find-out-more-bt.png" border="0" alt="auction template slider"
                                     width="215" height="50" />
                            </a>
                        </div>
                        <img src="img/major/02.jpg" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                        <img u="thumb" src="img/major/02.jpg" />
                    </div>
                    <div>
                        <div style="position: absolute; width: 480px; height: 300px; top: 10px; left: 10px;
                            text-align: left; line-height: 1.8em; font-size: 12px;">
                            <span style="display: block; line-height: 1em; font-size: 52px;
                                color: #FFFFFF; font-family: poor richard;">Cash upon delivery</span>
                            <br />
                            <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                                Service fee can be paid upon delivery of package to our delivery personnel.
                                <br />
                                <br />
                                <a href="service.php">
                                    <img src="img/major/find-out-more-bt.png" border="0" alt="ebay slider" width="215"
                                         height="50" />
                                </a>
                        </div>
                        <img src="img/major/7.jpg" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                        <img u="thumb" src="img/major/7.jpg" />
                    </div>
                </div>
                
                <!--#region Arrow Navigator Skin Begin -->
                <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
                <style>
                    /* jssor slider arrow navigator skin 07 css */
                    /*
                    .jssora07l                  (normal)
                    .jssora07r                  (normal)
                    .jssora07l:hover            (normal mouseover)
                    .jssora07r:hover            (normal mouseover)
                    .jssora07l.jssora07ldn      (mousedown)
                    .jssora07r.jssora07rdn      (mousedown)
                    */
                    .jssora07l, .jssora07r {
                        display: block;
                        position: absolute;
                        /* size of arrow element */
                        width: 50px;
                        height: 50px;
                        cursor: pointer;
                        background: url(img/a07.png) no-repeat;
                        overflow: hidden;
                    }
                    .jssora07l { background-position: -5px -35px; }
                    .jssora07r { background-position: -65px -35px; }
                    .jssora07l:hover { background-position: -125px -35px; }
                    .jssora07r:hover { background-position: -185px -35px; }
                    .jssora07l.jssora07ldn { background-position: -245px -35px; }
                    .jssora07r.jssora07rdn { background-position: -305px -35px; }
                </style>
                <!-- Arrow Left -->
                <span u="arrowleft" class="jssora07l" style="top: 123px; left: 8px;">
                </span>
                <!-- Arrow Right -->
                <span u="arrowright" class="jssora07r" style="top: 123px; right: 8px;">
                </span>
                <!--#endregion Arrow Navigator Skin End -->
                
            <!--#region Thumbnail Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/development/slider-with-thumbnail-navigator-jquery.html -->
            <style>
                /* jssor slider thumbnail navigator skin 04 css */
                /*
                .jssort04 .p            (normal)
                .jssort04 .p:hover      (normal mouseover)
                .jssort04 .pav          (active)
                .jssort04 .pav:hover    (active mouseover)
                .jssort04 .pdn          (mousedown)
                */

                .jssort04 {
                    position: absolute;
                    /* size of thumbnail navigator container */
                    width: 600px;
                    height: 60px;
                }

                    .jssort04 .p {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 62px;
                        height: 32px;
                    }

                    .jssort04 .t {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border: none;
                    }

                    .jssort04 .w, .jssort04 .pav:hover .w {
                        position: absolute;
                        width: 60px;
                        height: 30px;
                        border: #0099FF 1px solid;
                        box-sizing: content-box;
                    }

                    .jssort04 .pdn .w, .jssort04 .pav .w {
                        border-style: dashed;
                    }

                    .jssort04 .c {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 62px;
                        height: 32px;
                        background-color: #000;
                        filter: alpha(opacity=45);
                        opacity: .45;
                        transition: opacity .6s;
                        -moz-transition: opacity .6s;
                        -webkit-transition: opacity .6s;
                        -o-transition: opacity .6s;
                    }

                    .jssort04 .p:hover .c, .jssort04 .pav .c {
                        filter: alpha(opacity=0);
                        opacity: 0;
                    }

                    .jssort04 .p:hover .c {
                        transition: none;
                        -moz-transition: none;
                        -webkit-transition: none;
                        -o-transition: none;
                    }

                    * html .jssort04 .w {
                        width /**/: 62px;
                        height /**/: 32px;
                    }
            </style>
            <!-- thumbnail navigator container -->
            <div u="thumbnavigator" class="jssort04" style="right: 0px; bottom: 0px;">
                <!-- Thumbnail Item Skin Begin -->
                <div u="slides" style="bottom: 25px; right: 30px; cursor: default;">
                    <div u="prototype" class="p">
                        <div class=w><div u="thumbnailtemplate" class="t"></div></div>
                        <div class=c></div>
                    </div>
                </div>
                <!-- Thumbnail Item Skin End -->
            </div>
            <!--#endregion Thumbnail Navigator Skin End -->
                <a style="display: none" href="http://www.jssor.com">js slider</a>
            </div>
            <!-- Jssor Slider End -->
        </div>
    </div>
	       </div>
       </div>

<h2 style="font-family: pristina; font-size: 50px; border: 2px solid violet; background-color: violet; margin-top: 40px">Our Vision.</h2>
<div class="row">
    <div class="col-md-12" style="font-size: 22px; font-family: ariel; text-align: justify; padding-right: 20px; padding-left: 20px">
        <p>
            &nbsp &nbsp At flash delivery, we seek to be one of the leading figure in delivery service both locally and Nationwide and we hope to acheive these goal by building a sustainable and innovative solution for fast and effective delivery of product for individuals as well as small and medium scale businesses so as to help them <strong >develop as an enterprise</strong>, there by <strong>increasing their productivity by reducing time wasted on stressful delivery</strong> and at the same time <strong>reducing unemployment</strong> rate in the country.
        </p>
        <p>
           <strong style="font-family: pristina; font-size: 25px; border: 2px solid violet; background-color: violet;"> What Makes Us Different From Other Delivery Service</strong><br>
           &nbsp&nbsp In Emergency cases, we at Flash delivery service ensure same day delivery at Cheapest rates and fastest delivery possible. Provide night delivery services and understande that the client is our number one priority working 24/7 to take client order. A wide availability of human resources to cater to the needs of the clients by  Ensuring Timely delivery of sensitive Goods. Our Cash-on-delivery can leave you carefree as you can make the payment for service on delivery. Doing these Helps in building trust among the clients as it very hard to get a good delivery service system one can fully trust.<br>

           Besides these, we at Flash delivery service ensures that goods get delivered in perfect conditions making us the most preferred Local Courier Service in the state. So, why go anywhere else when Flash delivery service is here to assist you. Please give us a chance to prove to You our superiority in the delivery service world. Looking forward to serving you soon and give you a proof of nerver dying zeal of client satisfaction.

        </p>
    </div>
    </div>
<h2 style="font-family: pristina; font-size: 50px; border: 2px solid violet; background-color: violet">Our Services.</h2>
<div class="row" style="padding-top: 20px; padding-bottom: 30px">
    <div class="col-md-3" style=" height: 300px; font-family: pristina"><center>
        <h2>Purchase & delivery of raw foodstuff</h2><a href="service.php"><img src="img/major/5.jpg" width="250px" height="230px"></a></center>
    </div>
     <div class="col-md-3" style="height: 300px; font-family: pristina"><center>
         <h2>Courier Services</h2><a href="service.php"><img src="img/major/6.jpg" width="250px" height="230px"></a></center>
     </div>
      <div class="col-md-3" style="height: 300px; font-family: pristina">
        <center><h2>Food delivery</h2><a href="service.php"><img src="img/major/17.jpg" width="250px" height="230px"></a></center>
      </div>
      <div class="col-md-3" style="height: 300px; font-family: pristina"><center>
          <h2>Cash on delivery</h2><a href="service.php"><img src="img/major/7.jpg" width="250px" height="230px"></a></center>
      </div>
</div>

<strong style="font-family: pristina; font-size: 30px; border: 2px solid violet; background-color: violet"> Our Key benefits:</strong><br>
<p style="font-size: 22px; font-family: ariel; text-align: justify; padding-right: 10px; padding-left: 10px">
    &nbsp&nbsp We provide tailor made services that are well suited to the client needs and which can be adjusted base on client request. We also provide contract base services for small and medium scale enterprise tailored to their satisfaction, Using the lastest technology to ensure that all goods are on the right track to it destination and all these are done at an affordable rate. In addition to all that have been said, a platform is available for the enterprise partnering with us to showcase thier products free of charge.  Please get in touch with <strong style="font-size: 30px; font-style: italic">Flash Delivery Service</strong> a brand name to ensure qualitative services. We will be delighted to serve you and you wont regret it.
</p>


</div>
<div class="footer">
    <div  style="background-color: purple; font-size: 30px; color:white; text-align: center; margin-top:-20px; padding-top: 20px; padding-bottom: 20px">
    Make the right choice!Do you need profesional courier services?<a href="contact.php"> Contact Us now</a>
  </div>
  
    <div class="row" style="font-size: 20px; padding-top: 20px; font-family: ariel">
        <div class="col-md-2"></div>
        <div class="col-md-3">
             <h4>CUSTOMER SERVICE</h4>
    <a href="privacy.php">Privacy Policy</a><br>
    <a href="faq.php">Frequently Asked</a><br>
        </div>
        <div class="col-md-2">
         <h4>PAYMENT</h4>
    <a href="terms.php">Terms & Coditions</a><br>
    <a href="return.php">Return & Refunds</a>
       </div>
       <div class="col-md-1"></div>
        <div class="col-md-2">
            <h4> follow us on:</h4>
        <a href="facebook">facebook <span class="glyphicon glyphicon-twitter"></span></a><br>
        <a href="facebook">Instagram <span class="glyphicon glyphicon-twitter"></span></a> <br>
        <a href="facebook">Google+<span class="glyphicon glyphicon-twitter"></span></a>        </div>
        <div class="col-md-2"></div>
    </div>
    <p style="font-size: 20px; text-align: center; padding-top: 20px"> Copyright &copy 2018 Flash delivery service.<br> All right reserved.
        
</div>

</div>
</body>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $('.dropdown').hover(function(){
      $('.dropdown-toggle', this).trigger('click');
  });
</script>

</html>