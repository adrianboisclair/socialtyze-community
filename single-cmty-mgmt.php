<?php
/**
 * The template for displaying all single-cmty-mgmt posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header();

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
          href="<?php bloginfo('template_directory'); ?>/images/favicon.ico"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style_v0_0_65.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/blueimp-gallery.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/blueimp-gallery-indicator.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/blueimp-gallery-video.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/demo.css">
    <style>
        html{
            margin-top:0;
        }
        h3 {
            color: <?php the_field('primary_color', get_option('page')); ?>;
        }

        .hero-header {
            background: url(<?php the_field('hero', get_option('page')); ?>) center center;
            -webkit-background-size:cover;
            background-size:cover;
        }

        h3 {
            color: <?php the_field('primary_color', get_option('page')); ?>;
            font-weight: 300;
        }


        .foot-links a {
            color: <?php the_field('primary_color', get_option('page')); ?>;
        }

        .foot-links a {
            color: <?php the_field('primary_color', get_option('page')); ?>;
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

        #blueimp-video-carousel{
            margin-bottom:0;
        }
        p{padding-top:0;}
        h3, p {
            text-align: center;
        }
        #videography{
            padding-bottom:0;
            margin-bottom:40px;
            /*height: 100vh;*/
        }
        .single-cmty-mgmt #masthead {
            display: none;
        }
        .site {
            max-width: none;
        }
        /*a:visited {color: #000000;}*/
    </style>
    <style type="text/css" media="screen">
        html { margin-top: 0 !important; }
        * html body { margin-top: 0 !important; }
        @media screen and ( max-width: 782px ) {
            html { margin-top: 0 !important; }
            * html body { margin-top: 0 !important; }
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
                </div>                <!-- logo-container -->
            </div>            <!-- container -->
        </div>        <!-- header-overlay-->
    </div>    <!-- row header -->
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
    <div id="photography" class="row">
        <div class="col-sm-12">
            <h3 class=""><?php the_field('photography_title', get_option('page')); ?></h3>
            <?php the_field('photos', get_option('page')); ?>
        </div>        <!-- col-sm-12 -->
    </div>
    <hr/>
    <!-- #photography -->


    <div id="videography" class="row">
        <div class="col-sm-12">
            <h3><?php the_field('videography_title', get_option('page')) ?></h3>
            <?php the_field('videos', get_option('page')) ?>
        </div>
    </div>    <!-- #viphy -->
    <hr/>
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
    <hr/>
    <div id="apps2" class="row ">
        <div class="col-sm-12">
            <?php the_field('apps_2', get_option('page')); ?>
        </div>
    </div>
    <!-- row -->
    <hr/>
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
            <a href="http://wip.socialtyze.com/wp-studies/?cat=2" target="_parent">View our work
                <!--                <span class="glyphicon glyphicon-menu-right icon-circle"></span>-->
            </a>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 foot-links">
        <div class="col-xs-12  ">
            <a href="mailto:hello@socialtyze.com">Lets chat
                <!--                <span class="glyphicon glyphicon-menu-right icon-circle"></span>-->
            </a>
        </div>
    </div>
</div>


<!--End Community Management Page Content -->

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
<form class="newsletter" action="http://socialtyze.createsend.com/t/j/s/payhh/" method="post" style="top: 4486px; left: 1255.734375px; display: none;">
    <p>
        <label for="fieldName">Name</label>
        <input id="fieldName" name="cm-name" type="text">
    </p>
    <p>
        <label for="fieldEmail">Email</label>
        <input id="fieldEmail" name="cm-payhh-payhh" type="email" required="">
    </p>
    <p>
        <button class="button button-c" style="font-size: 12px; background-color: transparent; margin-top: 10px;" type="submit">Subscribe</button>
    </p>
</form>

<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>-->


<!--
<script>
    $(function() {
        $(".createsend-button").click(function() {
            var $button = $(this);
            var $form = $(".newsletter");

            if(!$form.is(":visible"))
                $form.css({
                    top: $button.offset().top - $form.outerHeight() - 15,
                    left: $button.offset().left - ($form.outerWidth() - $button.outerWidth())/2
                }).fadeIn(150);
            else
                $form.fadeOut(150);
        });
    });
</script>
-->


<script src="<?php bloginfo('template_directory'); ?>/js/responsive-nav.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
<!--<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>-->

<?php endwhile; ?>
</body>
</html>