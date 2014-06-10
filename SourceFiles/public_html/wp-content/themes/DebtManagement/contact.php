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

?>
        <div class="main">
            <div class="inside">
                <section id="content">
                    <div class="container">
                        <div class="col-1">
                            <h2>Contact Form</h2>
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
                        </div>
                        <div class="col-2">
                            <h2>Our Locations</h2>
                            <?php
                            for($i=1; $i<=10; $i++){
                                $currentTitle = get_field('contact_location_name'.$i);
                                $currentTitleType = get_field('contact_location_heading_type'.$i);
                                $currentDesc = get_field('contact_location_desc'.$i);
                                
                                
                                if( trim($currentTitle) != '' ){  
                                ?>
                            <div class="container">
                                <?php                                
                                if( isset($currentTitleType) && trim($currentTitleType) != '' && trim($currentTitleType) == 'blue heading' ){
                                ?>
                                <h4 class="p"><?php echo $currentTitle; ?></h4>
                                <?php
                                }
                                else if(trim($currentTitleType) == 'red heading') {
                                ?>
                                <h5 class="p"><?php echo $currentTitle; ?></h5>
                                <?php
                                }
                                else if(trim($currentTitleType) == 'light blue heading') {
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
                                }
                            }

                            ?>    
                        </div>
                        <div class="col-3">
                            <h2>Contact Info</h2>
                            <img alt="" src="images/6page_img1.jpg" class="img-indent" /><br>
                            <h4><?php the_field('contact_desc'); ?></h4>
                            <?php the_field('contact_company_name'); ?><br>
                            <?php the_field('contact_address1'); ?>,<br>
                            <?php the_field('contact_address2'); ?>
                            <p class="block-contact">
                                <span> <?php the_field('contact_freephone'); ?></span>Freephone:<br>          
                                <span> <?php the_field('contact_telephone'); ?></span>Telephone: <br>           
                                <span><a href="#"><strong><?php the_field('contact_email'); ?></strong></a></span>E-mail:
                            </p>
                        </div>
                    </div> 
                </section>
            </div>
        </div>
<?php
get_footer();
?>