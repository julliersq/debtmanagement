<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dm.css" type="text/css" media="all">
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.4.2.min.js" ></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cufon-yui.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cufon-replace.js"></script>  
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/Myriad_Pro_400.font.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/Myriad_Pro_300.font.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/Myriad_Pro_700.font.js"></script>
        <!--[if lt IE 7]>
           <script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
        <![endif]-->
        <!--[if lt IE 9]>
              <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <![endif]-->
        <?php
        wp_head();
        ?>
        <script type="text/javascript">
        $(function() {
            //$('.wpmega-link-title').wrap('<em><b></b></em>');
            
            $('#wpcf7-f8-o1 .wpcf7-form p input').each(function( index, value ) {
                var labelString = $('#wpcf7-f8-o1 .wpcf7-form label[for="'+value.id+'"]').html();
                $(value).attr('placeholder', labelString );
            });
            
            if( $('.screen-reader-response').length > 0 && $.trim($('.screen-reader-response').html()) != '' ){
                $('#wpcf7-f8-o1 .wpcf7-form').hide();
            }
            
            $('#subscribe-email').attr('placeholder', 'Enter your email here' );
        });        
        </script>
    </head>

    <body id="page<?php global $bodyId; echo $bodyId; ?>">
        <header>
            <div class="main">
                <h1><a href="index.html">Hatha</a></h1>
                <div class="indent">
                    <div class="fright"><a href="#">Client login  &nbsp;<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/icon.gif" class="alignMiddle" /></a></div><span>CALL TOLL FREE:</span> 1-800-111-1111
                </div>
                <div class="block">
                    <?php
                    /*
                    <div class="slogan">Credit Counseling <span>helps you to:</span></div>
                    <div class="indent-block1"><a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/banner1.jpg" /></a><a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/banner2.jpg" /></a><a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/banner3.jpg" /></a></div>
                    <ul class="list-1">
                        <li><a href="#">Review your debt situation</a></li>
                        <li><a href="#">Create a budget</a></li>
                        <li><a href="#">Find solutions</a></li>
                    </ul>
                    
                    */?>
                    <div id="dmSliderContainer">
                    <?php echo do_shortcode("[metaslider id=304]"); ?>
                    </div>
                    <div class="indent-block">
                        <h2>Get Your Free Debt <br>
                            Analysis Today! </h2>  
                        <?php
                        /*
                        <form action="" id="Search1"><fieldset>
                                <div class="rowElem2"><input type="text" class="input1" value="First name" onBlur="if (this.value == '')
                                            this.value = 'First name'" onFocus="if (this.value == 'First name')
                                                        this.value = ''"  /></div>
                                <div class="rowElem2"><input type="text" class="input1" value="Last name" onBlur="if (this.value == '')
                                            this.value = 'Last name'" onFocus="if (this.value == 'Last name')
                                                        this.value = ''"  /></div>
                                <div class="rowElem2"><input type="email" class="input1" value="Email address" onBlur="if (this.value == '')
                                            this.value = 'Email address'" onFocus="if (this.value == 'Email address')
                                                        this.value = ''"  /></div>
                                <div class="rowElem2"><input type="text" class="input1" value="Phone number" onBlur="if (this.value == '')
                                            this.value = 'Phone number'" onFocus="if (this.value == 'Phone number')
                                                        this.value = ''"  /></div>
                                <strong> &nbsp; Total unsecured debt</strong><br>
                                <p><select class="jamp"><option>Your debt amount</option></select></p>
                                <a href="#" onClick="document.getElementById('Search1').submit()" class="fright"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/button1.gif" /></a>
                            </fieldset></form>
                        */
                        
                        echo do_shortcode( '[contact-form-7 id="8" title="Debt Analysis form"]' );
                        ?>
                    </div>
                </div>
                
                
                <div class="inside">
                    <?php
                    /*
                    $currentPage = get_queried_object();

                    $pagePostName = $currentPage->post_name;                    
                    ?>
                    <nav>
                        <ul class="menu">
                            <li <?php echo ($pagePostName == 'home' ) ? 'class="current"' : '' ; ?>><a href="/home"><em><b>Home</b></em></a></li>
                            <li <?php echo ($pagePostName == 'plans-services' ) ? 'class="current"' : '' ; ?>><a href="/plans-services"><em><b>Plans &amp; Services</b></em></a></li>
                            <li <?php echo ($pagePostName == 'tools-tips' ) ? 'class="current"' : '' ; ?>><a href="/tools-tips"><em><b>Tools &amp; Tips</b></em></a></li>
                            <li <?php echo ($pagePostName == 'questions' ) ? 'class="current"' : '' ; ?>><a href="/questions"><em><b>Questions?</b></em></a></li>
                            <li <?php echo ($pagePostName == 'current-clients' ) ? 'class="current"' : '' ; ?>><a href="/current-clients"><em><b>Current clients</b></em></a></li>
                            <li <?php echo ($pagePostName == 'contact-us' ) ? 'class="current"' : '' ; ?>><a href="/contact-us"><em><b>Contact Us</b></em></a></li>
                        </ul>
                    </nav>
                    <nav id="navigation">
                       <?php wp_nav_menu( array( 'theme_location' => 'header-menu' , 'container' => false ) ); ?>
                    </nav>  
                     * 
                     */
                    
                    ?>
                    <?php 
                    uberMenu_easyIntegrate();                    
                    ?>
                                              
                </div>
             
            </div>
       
        </header>