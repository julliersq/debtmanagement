<?php
/*
Template Name: Plans And Services Page
*/

$currentPage = get_queried_object();

$pageID = $currentPage->ID;
global $bodyId;
$bodyId = 2;
get_header();

// Set up the objects needed
$pagesQuery = new WP_Query();                                
$allPages = $pagesQuery->query(array('post_type' => 'page'));
?>
        <div class="main">
            <div class="inside">
                <section id="content">
                    <div class="container">
                        <div class="col-1">
                            <h2>Debt Relief Benefits</h2>
                            <div class="p1">
                                <ol>
                                    <?php
                                    $debtReliefBenefitsObject = new WP_Query( 'name=debt-relief-benefits&post_type=page' );
                                    $debtReliefBenefitsId = $debtReliefBenefitsObject->post->ID;

                                    //echo '$debtReliefBenefitsObject is '.print_r($debtReliefBenefitsObject, true);
                                    // Filter through all pages and find Portfolio's children
                                    $debtReliefBenefitsChildren = get_page_children( $debtReliefBenefitsId, $allPages );

                                    //echo '$debtReliefBenefitsChildren is '.print_r($debtReliefBenefitsChildren, true);

                                    foreach($debtReliefBenefitsChildren as $currentDebtReliefBenefitsChild){                                    
                                    ?>
                                    <li><div>
                                            <a href="<?php echo get_site_url().'/'.$currentDebtReliefBenefitsChild->post_name; ?>"><?php echo $currentDebtReliefBenefitsChild->post_title; ?></a>
                                            <?php echo $currentDebtReliefBenefitsChild->post_content; ?>
                                        </div>
                                    </li>                                    
                                    <?php
                                    }
                                    ?>
                                </ol>
                            </div>
                            <div class="container"><a href="/?p=<?php echo $debtReliefBenefitsId; ?>" class="link">Read more</a></div>    
                        </div>
                        <div class="col-2">
                            <h2>Credit Card Debt Settlement</h2>
                            <div class="container">
                                <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/2page_img1.jpg" class="img-left" />
                                <h4 class="p">Lorem ipsum dolor sitem ametem, consectetuerum adipiscing elitum.</h4>
                                <p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis partu-<br>rient montes nascetur ridiculus mus nulla dui. Fusce feugiat malesuada odio morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci acun sem Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec siten amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                <br class="clear" />
                            </div>
                            <div class="container">
                                <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/2page_img2.jpg" class="img-left" />
                                <h5 class="p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</h5>
                                <p>Porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis partu-<br>rient montes nascetur ridiculus mus nulla dui. Fusce feugiat malesuada odio morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci acun sem Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec siten amet eros. Lorem ipsum dolor sit amet consectetuer adipiscing elit. Maurisen fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor.</p>
                                <br class="clear" />
                            </div>
                            <div class="container"><a href="#" class="link">Read more</a></div>   
                        </div>
                    </div> 
                </section>
            </div>
        </div>
<?php
get_footer();
?>