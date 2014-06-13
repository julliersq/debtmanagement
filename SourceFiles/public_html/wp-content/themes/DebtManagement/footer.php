<?php
$homePageObject = new WP_Query( 'name=home&post_type=page' );
$homePageId = $homePageObject->post->ID;

//echo '$homePageId is '.$homePageId;

$locations = get_registered_nav_menus();

$menus = wp_get_nav_menus();

$menu_locations = get_nav_menu_locations();


$footerColumn2 = wp_get_nav_menu_object( $menu_locations[ 'footer-column2' ] );
$footerColumn3 = wp_get_nav_menu_object( $menu_locations[ 'footer-column3' ] );
$footerColumn4 = wp_get_nav_menu_object( $menu_locations[ 'footer-column4' ] );
?>

        <footer>      
            <div class="main">
                <div class="inside">
                    <div class="container">
                        <div class="col-1">
                            <span>Debt settlement  <br>
                                &amp; credit counseling</span> &copy; 2010  <br>
                            <a href="/?p=155">Privacy policy</a> <br>
                            <!--{%FOOTER_LINK}-->
                        </div>

                        <div class="col-2">
                            <h2><?php echo $footerColumn2->name; ?></h2>
                            <?php wp_nav_menu( array( 'theme_location' => 'footer-column2' , 'container' => false ) ); ?>
                        </div>
                        <?php
                        /*
                        // check if the repeater field has rows of data
                        if( have_rows('footer_why_us_links', $homePageId) ):
                            ?>
                        <div class="col-2">
                            <h2>Why Us</h2>
                            <ul>                        
                            <?php
                                // loop through the rows of data
                            while ( have_rows('footer_why_us_links', $homePageId) ) : the_row();
                                // display a sub field value
                                if( get_sub_field('why_us_link_type', $homePageId) == 'Enter URL'){
                                    $linkUrl = get_sub_field('why_us_link_url', $homePageId);
                                }
                                elseif( get_sub_field('why_us_link_type', $homePageId) == 'Select Page/Post'){
                                    $linkUrl = get_sub_field('why_us_linked_page', $homePageId);
                                }
                                ?>
                                <li><a href="<?php echo $linkUrl; ?>"><?php the_sub_field('why_us_link_name', $homePageId); ?></a></li>
                                <?php
                            endwhile;
                        ?>
                            </ul>
                        </div>                                
                        <?php
                        else :
                            // no rows found
                        endif;
                         * 
                         */
                        ?>       
                        
                        <div class="col-3">
                            <h2><?php echo $footerColumn3->name; ?></h2>                        
                            <?php wp_nav_menu( array( 'theme_location' => 'footer-column3' , 'container' => false ) ); ?>
                        </div>
                        <?php
                        /*
                        // check if the repeater field has rows of data
                        if( have_rows('footer_quick_links', $homePageId) ):
                            ?>
                        <div class="col-3">
                            <h2>Quick Links</h2>
                            <ul>                        
                            <?php
                                // loop through the rows of data
                            while ( have_rows('footer_quick_links', $homePageId) ) : the_row();
                                // display a sub field value
                                if( get_sub_field('footer_quick_links_type', $homePageId) == 'Enter URL'){
                                    $linkUrl = get_sub_field('footer_quick_links_url', $homePageId);
                                }
                                elseif( get_sub_field('footer_quick_links_type', $homePageId) == 'Select Page/Post'){
                                    $linkUrl = get_sub_field('footer_quick_links_linked_page', $homePageId);
                                }
                                ?>
                                <li><a href="<?php echo $linkUrl; ?>"><?php the_sub_field('footer_quick_links_name', $homePageId); ?></a></li>
                                <?php
                            endwhile;
                        ?>
                            </ul>
                        </div>                                
                        <?php
                        else :
                            // no rows found
                        endif;
                         * 
                         */
                        ?>     

                        <div class="col-3">
                            <h2><?php echo $footerColumn4->name; ?></h2>                        
                            <?php wp_nav_menu( array( 'theme_location' => 'footer-column4' , 'container' => false ) ); ?>
                        </div>
                        <?php
                        /*
                        // check if the repeater field has rows of data
                        if( have_rows('footer_clients', $homePageId) ):
                            ?>
                        <div class="col-3">
                            <h2>Clients</h2>
                            <ul>                        
                            <?php
                                // loop through the rows of data
                            while ( have_rows('footer_clients', $homePageId) ) : the_row();
                                // display a sub field value
                                if( get_sub_field('footer_clients_link_type', $homePageId) == 'Enter URL'){
                                    $linkUrl = get_sub_field('footer_clients_url', $homePageId);
                                }
                                elseif( get_sub_field('footer_clients_link_type', $homePageId) == 'Select Page/Post'){
                                    $linkUrl = get_sub_field('footer_clients_linked_page', $homePageId);
                                }
                                ?>
                                <li><a href="<?php echo $linkUrl; ?>"><?php the_sub_field('footer_clients_name', $homePageId); ?></a></li>
                                <?php
                            endwhile;
                        ?>
                            </ul>
                        </div>                                
                        <?php
                        else :
                            // no rows found
                        endif;
                         * 
                         */
                        ?>   

                        <div class="col-4">
                            <h2>Newsletter:</h2>
                            <?php
                            /*
                            <form action="" id="Search"><fieldset>
                                    <div class="rowElem1"><input type="text" class="input" value="Enter your e-mail here" onBlur="if (this.value == '')
                                                this.value = 'Enter your e-mail here'" onFocus="if (this.value == 'Enter your e-mail here')
                                                            this.value = ''"  /></div>
                                    <a href="#" onClick="document.getElementById('Search').submit()" class="fright"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/button.gif" /></a>
                                </fieldset></form>
                             * 
                             */
                            
                            echo do_shortcode('[contact-form-7 id="232" title="Subscribe Form"]');
                            ?>
                            
                        </div>
                    </div>                
                </div>
            </div>
        </footer>


        <script type="text/javascript"> Cufon.now();</script>
    </body>
</html>
<?php
wp_footer();
?>