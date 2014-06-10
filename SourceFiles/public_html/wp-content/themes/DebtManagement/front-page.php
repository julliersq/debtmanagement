<?php
/*
Template Name: Front Page
*/

$currentPage = get_queried_object();

$pageID = $currentPage->ID;

global $bodyId;
$bodyId = 1;
get_header();
?>
        <div class="main">
            <div class="inside">
                <section id="content">
                    <div class="container">
                        <div class="col-1">
                            <h2>Research Debt<br>
                                Settlement: </h2>
                            <ul class="list">
                                <?php
                                // Set up the objects needed
                                $pagesQuery = new WP_Query();
                                
                                $allPages = $pagesQuery->query(array('post_type' => 'page'));

                                $researchDebtSettlementObject = new WP_Query( 'name=research-debt-settlement&post_type=page' );
                                $researchDebtSettlementId = $researchDebtSettlementObject->post->ID;
                                
                                //echo '$researchDebtSettlementObject is '.print_r($researchDebtSettlementObject, true);
                                // Filter through all pages and find Portfolio's children
                                $researchDebtSettlementChildren = get_page_children( $researchDebtSettlementId, $allPages );
                                
                                //echo '$researchDebtSettlementChildren is '.print_r($researchDebtSettlementChildren, true);
                                
                                foreach($researchDebtSettlementChildren as $currentResearchDebtSettlementChild){
                                ?>
                                <li><a href="<?php echo get_site_url().'/'.$currentResearchDebtSettlementChild->post_name; ?>"><?php echo $currentResearchDebtSettlementChild->post_title; ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="col-2">
                            <h2 class="color">What we do </h2>
                            <h3>Nunc dignissim tristique ipsum. Maecenas sagittis velit at dui. Ut orci mi semper posuere egestas sed congue tristique nibh. Ves-<br>tibulum ante ipsum primis in faucibus orci luctus et ultrices.</h3>
                            <div class="p1">
                                <ol>
                                    <?php
                                    $whatWeDoObject = new WP_Query( 'name=what-we-do&post_type=page' );
                                    $whatWeDoId = $whatWeDoObject->post->ID;

                                    // Filter through all pages and find Portfolio's children
                                    $whatWeDoChildren = get_page_children( $whatWeDoId, $allPages );

                                    foreach($whatWeDoChildren as $currentWhatWeDoChild){
                                    ?>
                                    <li><div>
                                            <a href="<?php echo get_site_url().'/'.$currentWhatWeDoChild->post_name; ?>"><?php echo $currentWhatWeDoChild->post_title; ?></a>
                                            <?php echo $currentWhatWeDoChild->post_content; ?>
                                        </div>
                                    </li>
                                    <?php
                                    }
                                    ?>                                    
                                </ol>
                            </div>
                            <div class="container"><a href="/?p=<?php echo $whatWeDoId;?>" class="link">Read more</a></div>     
                        </div>
                        <?php
                        $debtCalculatorObject = new WP_Query( 'name=debt-calculator&post_type=page' );
                        $debtCalculatorId = $whatWeDoObject->post->ID;
                        ?>
                        <div class="col-3">
                            <h2>Try your FREE<br>
                                <strong>debt calculator</strong> </h2>
                            <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/1page_img1.jpg" class="img-indent" /><br>
                            <?php echo $debtCalculatorObject->post->post_content; ?>
                            
                            <div class="container"><a href="/?p=<?php echo $debtCalculatorId;?>" class="link">Read more</a></div>
                        </div>
                    </div> 
                </section>
            </div>
        </div>
<?php
get_footer();
?>