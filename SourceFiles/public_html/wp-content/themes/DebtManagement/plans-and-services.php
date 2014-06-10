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
$allPages = $pagesQuery->query(array('post_type' => 'page','posts_per_page'=>-1));
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
                            <?php
                            $creditCardDebtObject = new WP_Query( 'name=credit-card-debt-settlement&post_type=page' );                            
                            ?>
                            <h2>Credit Card Debt Settlement</h2>
                            <?php
                            for($i=1; $i<=10; $i++){
                                $currentTitle = get_field('ccdebt_settlement_title'.$i);
                                $currentImage = get_field('ccdebt_settlement_image'.$i);
                                $currentTitleType = get_field('ccdebt_settlement_title_type'.$i);
                                $currentDesc = get_field('ccdebt_settlement_desc'.$i);
                                
                                
                                if( trim($currentTitle) != '' ){  
                                ?>
                            <div class="container">
                                <?php
                                if( isset($currentImage['url']) && trim($currentImage['url']) != '' ){  
                                ?>
                                <img alt="" src="<?php echo $currentImage['url']; ?>" class="img-left" />
                                <?php
                                }
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
                                if( isset($currentDesc) && trim($currentDesc) != '' ){  
                                ?>
                                <?php echo $currentDesc; ?>
                                <?php
                                }                                    

                            ?>
                                <br class="clear" />
                            </div>
                                    <?php                                    
                                }
                            }
                            ?>
                            <div class="container"><a href="/?p=<?php echo $creditCardDebtObject->post->ID; ?>" class="link">Read more</a></div>   
                        </div>
                    </div> 
                </section>
            </div>
        </div>
<?php
get_footer();
?>