<?php
/*
  Template Name: Current Clients Page
 */

$currentPage = get_queried_object();

$pageID = $currentPage->ID;
global $bodyId;
$bodyId = 5;
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
                            <h2>Special Proposition</h2>
                            <?php
                            $specialPropositionObject = new WP_Query('name=special-proposition&post_type=page');
                            $specialPropositionId = $specialPropositionObject->post->ID;
                            //echo '$specialPropositionObject is '.print_r($specialPropositionObject, true);
                            // Filter through all pages and find Portfolio's children
                            $specialPropositionChildren = get_page_children($specialPropositionId, $allPages);
                            ?>                            
                            <div class="p1">
                                <ol>
                                    <?php                                    
                                    foreach($specialPropositionChildren as $currentSpecialPropositionChild){
                                    ?>
                                    <li>
                                        <div>
                                            <a href="<?php echo get_site_url().'/'.$currentSpecialPropositionChild->post_name; ?>"><?php echo $currentSpecialPropositionChild->post_title; ?></a>
                                            <?php echo $currentSpecialPropositionChild->post_content; ?>
                                        </div>
                                    </li>                                 
                                    <?php
                                    }
                                    ?>
                                </ol>
                            </div>
                            <div class="container"><a href="/?p=<?php echo $specialPropositionId; ?>" class="link">Read more</a></div>    
                        </div>                        
                        <div class="col-2">
                            <h2>Affiliate Program</h2>
                            <?php echo $currentPage->post_content; ?>
                            <?php
                            /*
                            $affiliateProgramObject = new WP_Query('name=affiliate-program&post_type=page');
                            $affiliateProgramId = $affiliateProgramObject->post->ID;                          
                            ?>    
                            <?php
                            for($i=1; $i<=10; $i++){
                                $currentTitle = get_field('client_title'.$i);
                                $currentTitleType = get_field('client_title_type'.$i);
                                $currentDesc = get_field('client_desc'.$i);
                                $currentImage = get_field('client_image'.$i);    
                                
                                
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
                            }*/

                            ?>                                 
                            <div class="container"><a href="/?p=<?php echo $affiliateProgramId; ?>" class="link">Read more</a></div>   
                        </div>
                    </div> 
                </section>
            </div>
        </div>
<?php
get_footer();
?>