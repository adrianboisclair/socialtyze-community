<?php
/**
 * The template for displaying all single-cmty-mgmt posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

//get_header();

?>
<?php /* The loop */ ?>
<?php while (have_posts()) :
the_post(); ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Socialtyze - Social Strategy, Community Management & Media</title>
    <link rel="shortcut icon"
          href="http://ec2-52-8-7-213.us-west-1.compute.amazonaws.com/wp-content/themes/twentythirteen/images/favicon.ico"/>
    <style>
        @import url(https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css);
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,600);
        body {
            background-color: white;
            color: #6a7180;
            font-family: 'Open Sans', sans-serif;
            font-size: 2.2rem;
            line-height: 30px;
            overflow-x: hidden;
        }
        p {
            color: #555;
            font-family: 'Open Sans', serif;
            font-size: 20px;
            font-weight: 300;
            line-height: 30px;
            padding-top: 20px;
            text-align: center;
        }
        a:hover {
            text-decoration: none;
        }
        h1 {
            font-family: 'Open Sans', serif;
            font-size: 64px;
            letter-spacing: 3px;
            font-weight: 300 !important;
            line-height: 80px;
            color: #FFFFFF;
        }
        h3 {
            text-transform: capitalize;
            color: #FFCB00;
            font-size: 46px;
            line-height: 150%;
        }
        .sm-container {
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }
        .hidden {
            display: none;
        }
        .padding-top-20 {
            padding-top: 20px
        }

        .padding-top-40 {
            padding-top: 40px
        }

        .padding-top-60 {
            padding-top: 50px
        }
        .padding-bottom-20 {
            padding-bottom: 20px
        }
        .padding-bottom-40 {
            padding-bottom: 40px
        }
        .padding-bottom-60 {
            padding-bottom: 50px
        }
        .inline-block li {
            display: inline-block;
        }
        .wrapper {
            max-width: 1500px;
            margin-left: auto;
            margin-right: auto;
        }
        .header-main {
            margin: 0;
            padding-top: 40px;
            position: absolute;
            width: 100%;
            z-index: 999;
        }
        .header-main-nav {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-justify-content: flex-end;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;

        }
        .header-main-nav li {
            padding-left: 20px;
            padding-right: 20px;
        }
        .header-main-nav {
            font-family: "Open Sans", sans-serif;
            font-size: 14px;
            font-weight: 300;
            letter-spacing: 2px;
            margin-top: 15px;
            padding: 0;
            text-transform: uppercase;
        }
        .header-main-nav li {
            padding-left: 38px;
        }
        .header-main-nav a {
            color: #fff;
            display: inline-block;
            padding: 5px 10px;
            text-decoration: none;
        }
        .header-main .row {
            margin-top: -15px;
        }
        .hero-header {
            background: url(https://s3-us-west-1.amazonaws.com/communityproject/img/cpk_photo_002.jpg) no-repeat center center;
            -webkit-background-size: cover;
            background-size: cover;
            height: 66vh !important;
            min-height: 556px;
            margin-bottom: 20px;
        }
        .header-overlay {
            background: rgba(0,0,0,.6);
            -webkit-background-size: cover;
            background-size: cover;
            height: 66vh !important;
            min-height: 556px;
        }
        #header {
            -webkit-transition: all .5s ease-in-out;
            -moz-transition: all .5s ease-in-out;
            -ms-transition: all .5s ease-in-out;
            -o-transition: all .5s ease-in-out;
            transition: all .5s ease-in-out;
            position: fixed;
            padding-top: 40px;
        }
        .logo-sm-top {
            width: 180px;
            height: auto;
            padding-top: 15px;
            margin-left: -15px;
        }
        .logo-container {
            padding-top: 135px;
        }
        .hr-sm-180 {
            width: 180px;
            margin: 1px 0 0;
            padding: 0;
            border: 0;
            border-bottom: 1px solid #fff;
        }
        .main.container {
            max-width: 1000px;
            padding-bottom: 80px;;
        }
        .logo-container h2{
            color: #FFFFFF;
            text-transform: uppercase;
            font-size: 19px;
            font-family: 'Open Sans', serif;
            font-weight: 600;
            letter-spacing: 2px;
            padding-top: 0px;
            margin-top: -4px;
        }
        .center-block {
            margin-top: 20px;
            margin-bottom: 10px;
        }
        #carousel-example-generic {
            margin-top:40px;
            margin-bottom:40px;
        }
        #ytplayer {
            width: 100%;
            min-height: 550px;
        }
        #apps div:nth-child(4) {
            padding-bottom:20px;
        }
        .footer-main {
            background-color: #282828;
            padding: 50px 0;
            color: #fff;
            font-size: 12px;
            text-align: center;
        }
        .u-constrict {
            max-width: 1500px;
            margin: 0 auto;
            padding-left: 30px;
            padding-right: 30px;
        }
        .footer-main li {
            margin: 0 20px;
        }
        .u-sideBySide li {
            display: inline-block;
        }
        .socialIcons img {
            margin: 0 5px;
        }
        img {
            vertical-align: middle;
        }
        .footer-main .button {
            cursor: pointer;
        }
        .button-c:hover {
            color: white;
        }
        .button:hover {
            background-color: rgba(255, 255, 255, 0.03);
        }
        a:active, a:hover {
            outline: 0;
        }
        .button-c {
            color: #fff;
            border-color: #fff;
        }
        .button {
            display: inline-block;
            border: 2px solid #959595;
            padding: 12px 35px;
            text-transform: uppercase;
            color: #959595;
            text-decoration: none;
        }
        .footer a {
            color: #dbaa46;
            text-decoration: none;
            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            -ms-transition: all .5s;
            -o-transition: all .5s;
            transition: all .5s;
        }
        .footer a:hover {
            color: #ff8f33;
        }
        .foot-link-container {
            padding-top: 40px;
        }
        .foot-links {
            padding-bottom: 40px;
            text-align: center;
        }
        .foot-links a {
            color:#FFCB00;
            font-size: 36px;
        }
        .foot-links a {
            color:#FFCB00;
            font-size: 20px;
            border: 2px solid #FFCB00;
            display: inline-block;
            padding: 12px 35px;
            text-transform: uppercase;
            text-decoration: none;
            width: 250px;
        }
        .foot-links a:hover {
            color: #FFCB00;
            -webkit-transition: .2s all ease-in-out;
            transition: .2s all ease-in-out;
        }
        a, a:hover {
            color: #1e73be;
            -moz-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }
        .social img {
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            border-radius: 4px;
        }
        #top .row .col-sm-12:last-child {
            margin-bottom: 20px;
        }
        /*media queries*/
        /* Custom, iPhone Retina */
        @media only screen and (min-width : 320px) {
            /*.center-block {padding: 0;}*/
        }
        /* Extra Small Devices, Phones */
        @media only screen and (min-width : 480px) {
            /*.center-block {padding: 0;}*/
        }
        @media only screen and (max-width : 1540px) {
            .res-wrapper {
                margin-left: 30px;
                margin-right: 30px;
            }
        }
        @media only screen and (max-width: 768px) {
            #header {
                padding-top: 10px;
            }
            .right-align {
                text-align: center;
            }
            .left-align {
                text-align: center;
            }
            .center-sm {
                text-align: center;
            }
            .hr-sm-180 {
                margin-left: auto;
                margin-right: auto;
            }
            .header-main-nav {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-justify-content: space-around;
                -moz-justify-content: space-around;
                -ms-flex-pack: distribute;
                justify-content: space-around;
                padding-left:10px;
                padding-right:10px;
            }
            .header-main-nav li {padding:0;}
            .header-main-nav a {
                padding: 0;
            }
            .wrapper {
                padding-left: 0;
                padding-right: 0;
                margin: 0;
            }
        }
        @media only screen and (max-width: 500px) {
            .header-main-nav {
                width:100%;
                padding-left:10px;
                padding-right:10px;
            }
            .wrapper {
                padding-left: 0;
                padding-right: 0;
                margin: 0;
            }
        }
    </style>
    <style>
        h3 {
            text-align: center;
            color: <?php the_field('primary_color', get_option('page')); ?>;
            text-transform: capitalize;
            font-size: 46px;
            line-height: 150%;
        }

        .hero-header {
            background: url(<?php the_field('hero', get_option('page')); ?>) center center;
            height: 66vh !important;
            min-height: 556px;
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            margin-bottom: 20px;
        }

        h3 {
            text-transform: capitalize;
            color: <?php the_field('primary_color', get_option('page')); ?>;
            font-size: 46px;
        }


        .foot-links a {
            color: <?php the_field('primary_color', get_option('page')); ?>;
            font-size: 36px;
        }

        .foot-links a {
            color: <?php the_field('primary_color', get_option('page')); ?>;
            font-size: 20px;
            border: 2px solid <?php the_field('primary_color', get_option('page')); ?>;
            display: inline-block;
            padding: 12px 35px;
            text-transform: uppercase;
            text-decoration: none;
            width: 250px;
        }


        #apps2 {
        <?php the_field('show_hide_1', get_option('page')); ?>;
        }

        #apps3 {
        <?php the_field('show_hide_2', get_option('page')); ?>;
        }
        #videography {
        <?php the_field('videography', get_option('page')); ?>;
        }

    </style>
</head>
<body>
<!--Begin Site Header-->


<!--Header should be imported from site-->
<header id="header" class="header-main ">
    <div class="container-fluid wrapper res-wrapper">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 left-align">
                <a href="http://wip.socialtyze.com/" title="Home">
                    <img class="logo-sm-top" src="http://wip.socialtyze.com/img/v5/socialtyze.png">
                </a>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 right-align hidden">
                <ul class="header-main-nav inline-block">
                    <li><a class="link" href="http://wip.socialtyze.com/#services" title="Services">Services</a></li>
                    <li><a class="link" href="http://bit.ly/1I7uFPr" title="Work">Work</a></li>
                    <li><a class="link" href="http://wip.socialtyze.com/is/" title="Team">Team</a></li>
                    <li><a class="link" href="http://wip.socialtyze.com/contact/" title="Contact">Contact</a></li>
                    <li><a class="link" href="http://blog.socialtyze.com" title="Blog">Blog</a></li>
                </ul>
            </div>
            <!--col-sm-12 col-md-8 right-align -->
        </div>
        <!--row-->
    </div>
    <!--container-fluid-->
</header>
<!--header-main-->
<!--Begin Community Management Page-->
<div class="container-fluid">
    <div class="row hero-header">
        <div class="header-overlay">
            <div class="container-fluid wrapper">
                <div class="logo-container center-sm res-wrapper">
                    <hr class="hr-sm-180 center-sm"/>
                    <h1><?php the_title(); ?></h1>

                    <h2><?php the_field('subheader', get_option('page')); ?></h2>
                </div>
                <!-- logo-container -->
            </div>
            <!-- container -->
        </div>
        <!-- header-overlay-->
    </div>
    <!-- row header -->
</div>
<div class="main container">
    <div id="top">
        <div class="row">
            <div class="col-sm-12">
                <?php the_field('overview', get_option('page')); ?>
            </div>
            <!-- col-sm-12 -->
        </div>
        <!-- row -->
        <hr/>
        <div id="community" class="row ">
            <div class="col-sm-12">
                <!--<h2 class="text-center">Our Strategy</h2>-->
                <?php the_field('community', get_option('page')); ?>
            </div>
            <!-- col-sm-12 -->
        </div>
        <!--  row -->
    </div>
    <!-- #top -->
    <hr/>




    <div id="photography" class="row" style="<?php the_field('photography', get_option('page')); ?>">


        <div class="col-sm-12">


            <h3 class="text-center"><?php the_field('photography_title', get_option('page')); ?></h3>
<!--            <h3 class="text-center">Photography</h3>-->


            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img src="<?php the_field('photo_slider_01', get_option('page')); ?>" class="img-responsive">

                        <div class="carousel-caption"></div>
                    </div>

                    <div class="item">
                        <img src="<?php the_field('photo_slider_02', get_option('page')); ?>" class="img-responsive">
                        <div class="carousel-caption"></div>
                    </div>

                    <div class="item">
                        <img src="<?php the_field('photo_slider_03', get_option('page')); ?>" class="img-responsive">
                        <div class="carousel-caption"></div>
                    </div>
                </div>

                <!-- Controls -->

                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>        <!-- col-sm-12 -->

    <hr style="margin-top:60px;"/>
    </div>
    </div><!-- #photography -->


    <div id="videography" class="row" style="<?php the_field('videography', get_option('page')); ?>">

        <div class="col-sm-12">

            <h3 class="text-center"><?php the_field('videography_title', get_option('page')); ?></h3>
            <div id="ytplayer" class="center-block"></div>

            <script>
                // Load the IFrame Player API code asynchronously.
                var tag = document.createElement('script');
                tag.src = "https://www.youtube.com/player_api";
                var firstScriptTag = document.getElementsByTagName('script')[0];
                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                // Replace the 'ytplayer' element with an <iframe> and
                // YouTube player after the API code downloads.
                var player;
                function onYouTubePlayerAPIReady() {
                    player = new YT.Player('ytplayer', {
//                        height: '620',
//                        width: '100%',
                        videoId: '<?php the_field('youtube_video_id', get_option('page')); ?>',
                        events: {
                            'onReady' : onPlayerReady
                        }
                    });
                }
                function onPlayerReady(event) {
                    event.target.setPlaybackQuality('hd720');
                }
                function onPlayerStateChange(event) {
                    if (event.data == YT.PlayerState.BUFFERING) {
                        event.target.setPlaybackQuality('hd1080');
                    }
                }
            </script>
        </div>        <!-- col-sm-12 -->
    </div>    <!-- #videography -->
    <hr style="margin-top: 60px;<?php the_field('videography', get_option('page')); ?>"/>
    <div id="paid-media" class="row ">
        <div class="col-sm-12">
            <?php the_field('facebook_paid_media', get_option('page')); ?>
        </div>
        <!-- col-sm-12 -->
    </div>
    <!-- #paid-media -->
    <hr/>
    <div id="apps" class="row">
        <?php the_field('apps_1', get_option('page')); ?>
    </div>
    <!-- apps row -->
    <hr style="margin-top: 60px"/>
    <div id="apps2" class="row ">
        <div class="col-sm-12">
            <?php the_field('apps_2', get_option('page')); ?>
        </div>
    </div>
    <!-- row -->
    <hr style="margin-top: 60px"/>
    <div id="apps3" class="row">
        <div class="col-sm-12">
            <?php the_field('apps_3', get_option('page')); ?>
        </div>
    </div>
</div>
<!--Main Container-->
<div class="container foot-link-container">
    <div class="col-xs-12 col-sm-6 foot-links">
        <div class="col-xs-12 ">
            <a href="http://bit.ly/1I7uFPr" target="_parent">View our work<span
                    class="glyphicon glyphicon-menu-right icon-circle"></span></a>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 foot-links">
        <div class="col-xs-12  ">
            <a href="mailto:angie@storycafe.com">Lets chat<span
                    class="glyphicon glyphicon-menu-right icon-circle"></span></a>
        </div>
    </div>
</div>
<!--End Community Management Page Content -->
<?php endwhile; ?>
<!-- Site Footer -->
<!-- This should be imported via PHP include function  -->
<footer class="footer-main">
    <ul class="u-constrict u-sideBySide">
        <li>© 2015 Socialtyze, LLC</li>
        <li>hello@socialtyze.com</li>
        <li>3701 N Highland Ave. Suite 200 Manhattan Beach, CA 90266</li>
        <li class="socialIcons">
            <a target="_blank" href="https://www.facebook.com/socialtyze?ref=hl"><img
                    src="http://socialtyze.com/img/v5/social-fb.png" alt=""></a>
            <a target="_blank" href="https://twitter.com/socialtyze"><img
                    src="http://socialtyze.com/img/v5/social-tw.png" alt=""></a>
            <a target="_blank" href="https://www.linkedin.com/company/socialtyze"><img
                    src="http://socialtyze.com/img/v5/social-li.png" alt=""></a>
        </li>
        <li><a data-listid="j/AC/B9F/F14/B84ECC146E39B18E" class="createsend-button button button-c">Newsletter
                Signup</a></li>
    </ul>
</footer>
<script>
    /**
     * Created by adrian on 8/17/15.
     */
    var header, logo, yPos, windowWidth, link;
    function yScroll() {
        header = document.getElementById('header');
        logo = document.getElementsByClassName("logo-sm-top");
        link = document.getElementsByClassName("link");
        yPos = window.pageYOffset;
        windowWidth = window.innerWidth;
        if(yPos > 50) {
            header.style.height = "64px";
            header.style.paddingTop = "10px";
            header.style.paddingBottom = "30px";
//            header.style.backgroundColor = "rgba(0,0,0,.8)";
            header.style.backgroundColor = "transparent";
            header.style.opacity = "0";
            for( var i = 0; i < link.length; i++) {
                link[i].style.paddingTop = "10px";
            }
            if(windowWidth <= 768) {
                header.style.height = "75px";
                header.style.paddingTop = "0px";
                header.style.paddingBottom = "40px";
                logo[0].style.width = "140px";
                logo[0].style.marginTop = "10px";

                for( var i = 0; i < link.length; i++) {
                    link[i].style.paddingTop = "0px";
                    link[i].style.fontSize = "12px";
                }
            }
        } else {
            header.style.height="95px";
            header.style.paddingTop = "40px";
            header.style.backgroundColor = "transparent";
            header.style.opacity = "1";
            for( var i = 0; i < link.length; i++) {
                link[i].style.paddingTop = "5px";
            }
            if(windowWidth <= 768) {
                logo[0].style.width = "180px";
                header.style.height="95px";
                header.style.paddingTop = "10px";
                for( var i = 0; i < link.length; i++) {
                    link[i].style.fontSize = "14px";
                    link[i].style.paddingTop = "0px";
                }

            }
        }
    }
    window.addEventListener("scroll", yScroll);
</script>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>