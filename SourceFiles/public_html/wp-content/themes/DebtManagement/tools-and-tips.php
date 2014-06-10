<?php
/*
  Template Name: Tools and Tips Page
 */

$currentPage = get_queried_object();

$pageID = $currentPage->ID;
global $bodyId;
$bodyId = 3;
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
                        <h2>Debt Settlement Tools &amp; Tips</h2>
                        <?php
                        $toolsAndTipsObject = new WP_Query( 'name=debt-settlement-tools-tips&post_type=page' );
                        $toolsAndTipsId = $creditScoreObject->post->ID;
                        ?>
                            <?php
                            for($i=1; $i<=10; $i++){
                                $currentTitle = get_field('debt_tools_title'.$i);
                                $currentTitleType = get_field('debt_tools_title_type'.$i);
                                $currentDesc = get_field('debt_tools_desc'.$i);
                                
                                
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
                                <?php echo $currentDesc; ?>
                                <?php
                                }
                                ?>
                                <br  clear="all" />
                            </div>
                                <?php
                                }
                            }

                            ?>                        
                        <div class="container"><a href="/?p=<?php echo $toolsAndTipsId; ?>" class="link">Read more</a></div>    
                    </div>
                    <div class="col-2">
                        <h2>Credit Score</h2>
                        <?php
                        $creditScoreObject = new WP_Query( 'name=credit-score&post_type=page' );
                        $creditScoreId = $creditScoreObject->post->ID;
                        //echo '$creditScoreObject is '.print_r($creditScoreObject, true);
                        // Filter through all pages and find Portfolio's children
                        $creditScoreChildren = get_page_children($creditScoreId, $allPages);

                        //echo '$creditScoreChildren is '.print_r($creditScoreChildren, true);
                        ?>
                        <?php echo $creditScoreObject->post->post_content; ?>
                        <div class="p1">
                            <ul class="list">   
                                <?php
                                $childCounter=0;
                                foreach ($creditScoreChildren as $currentCreditScoreChild) { 
                                    $childCounter++;
                                ?>
                                <li <?php echo ($childCounter >= count($creditScoreChildren)) ? 'class="last"' : ''; ?>><a href="<?php echo get_site_url().'/'.$currentCreditScoreChild->post_name; ?>"><?php echo $currentCreditScoreChild->post_title; ?></a></li>
                                <?php
                                }
                                ?>                               
                            </ul>
                        </div>
                        <div class="container"><a href="/?p=<?php echo $creditScoreId; ?>" class="link">Read more</a></div>   
                    </div>
                </div> 
            </section>
        </div>
    </div>
    <?php
    get_footer();
    ?>