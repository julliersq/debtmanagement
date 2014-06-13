<?php
/*
  Template Name: Contact Us Page
 */

$currentPage = get_queried_object();

$pageID = $currentPage->ID;
global $bodyId;
$bodyId = 6;
get_header();

// Set up the objects needed
$pagesQuery = new WP_Query();
$allPages = $pagesQuery->query(array('post_type' => 'page', 'posts_per_page' => -1));

$db_man_theme_options = get_option('db_man_theme_options');
?>
        <div class="main">
            <div class="inside">
                <section id="content">
                    <div class="container">
                        <div class="col-1">
                            <h2>Contact Form</h2>
                            <?php
                            echo do_shortcode( '[contact-form-7 id="159" title="Contact Us Form"]' );
                            
                            /*
                            ?>
                            <form action="" id="form"><fieldset>

                                    Enter your Name:
                                    <div class="rowElem"><input type="text" /></div>
                                    Enter your Email:
                                    <div class="rowElem"><input type="text" /></div>
                                    Enter your Message:<br />
                                    <div class="rowElem3"><textarea class="textarea" rows="40" cols="30" ></textarea></div>
                                    <div class="container">
                                        <div class="fright">
                                            <a href="#" onclick="document.getElementById('form').submit()" class="link">submit</a>
                                            <div class="indent-2"><a href="#" onclick="document.getElementById('form').reset()" class="link">reset</a></div>
                                        </div>
                                    </div>

                                </fieldset></form>
                             * 
                             */?>
                        </div>
                        <div class="col-2">
                            <h2>Our Locations</h2>
                            <?php
                            $locationObject = new WP_Query('name=locations&post_type=page');
                            $locationId = $locationObject->post->ID;
                            //echo '$locationObject is '.print_r($locationObject, true);
                            // Filter through all pages and find Portfolio's children
                            $locationChildren = get_page_children($locationId, $allPages);
                            
                            $counter = 0;
                            foreach($locationChildren as $currentLocationChild){
                                $currentTitle = $currentLocationChild->post_title;
                                $currentDesc = $currentLocationChild->post_content;
                            ?>  
                            <div class="container">
                                <?php                                
                                if( trim($currentTitle) != '' && $counter%3 == 0 ){
                                ?>
                                <h4 class="p"><?php echo $currentTitle; ?></h4>
                                <?php
                                }
                                else if( trim($currentTitle) != '' && $counter%3 == 1 ) {
                                ?>
                                <h5 class="p"><?php echo $currentTitle; ?></h5>
                                <?php
                                }
                                else if( trim($currentTitle) != '' && $counter%3 == 2 ) {
                                ?>
                                <h4 class="color1 p"><?php echo $currentTitle; ?></h4>
                                <?php  
                                }
                                if( isset($currentDesc) && trim($currentDesc) != '' ){  
                                ?>
                                <p><?php echo $currentDesc; ?></p>
                                <?php
                                }
                                ?>
                                <br  clear="all" />
                            </div>                            
                                <?php
                                $counter++;
                            }

                            ?>    
                        </div>
                        <div class="col-3">
                            <h2>Contact Info</h2>
                            <img alt="" src="/wp-content/themes/DebtManagement/images/6page_img1.jpg" class="img-indent" /><br>
                            <h4><?php echo $db_man_theme_options['contactDesc']; ?></h4>
                            <?php echo $db_man_theme_options['companyName']; ?><br>
                            <?php echo $db_man_theme_options['address1']; ?>,<br>
                            <?php echo $db_man_theme_options['address2']; ?>
                            <p class="block-contact">
                                <span> <?php echo $db_man_theme_options['freePhone']; ?></span>Freephone:<br>          
                                <span> <?php echo $db_man_theme_options['telephone']; ?></span>Telephone: <br>           
                                <span><a href="#"><strong><?php echo $db_man_theme_options['email']; ?></strong></a></span>E-mail:
                            </p>
                        </div>
                    </div> 
                </section>
            </div>
        </div>
<?php
get_footer();
?>