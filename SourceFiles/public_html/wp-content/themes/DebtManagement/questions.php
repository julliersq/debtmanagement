<?php
/*
  Template Name: Questions Page
 */

$currentPage = get_queried_object();

$pageID = $currentPage->ID;
global $bodyId;
$bodyId = 4;
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
                            <h2>Operations Consulting</h2>
                            <?php
                            $operationsConsultingObject = new WP_Query('name=operations-consulting&post_type=page');
                            $operationsConsultingId = $operationsConsultingObject->post->ID;
                            //echo '$operationsConsultingObject is '.print_r($operationsConsultingObject, true);
                            // Filter through all pages and find Portfolio's children
                            $operationsConsultingChildren = get_page_children($operationsConsultingId, $allPages);
                            ?>
                            <h4><?php echo $operationsConsultingObject->post->post_content; ?></h4>
                            <div class="p1">
                                <ul class="list">
                                    <?php
                                    $childCounter = 0;
                                    foreach ($operationsConsultingChildren as $currentOperationsConsultingChild) {
                                        $childCounter++;
                                        ?>
                                        <li <?php echo ($childCounter >= count($currentOperationsConsultingChild)) ? 'class="last"' : ''; ?>><a href="<?php echo get_site_url() . '/' . $currentOperationsConsultingChild->post_name; ?>"><?php echo $currentOperationsConsultingChild->post_title; ?></a></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="container"><a href="/?p=<?php echo $operationsConsultingId; ?>" class="link">Read more</a></div>     
                        </div>
                        <div class="col-2">
                            <h2 >Frequently Asked Questions</h2>
                            <?php
                            $faqObject = new WP_Query('name=faq&post_type=page');
                            $faqId = $faqObject->post->ID;
                            //echo '$faqObject is '.print_r($faqObject, true);
                            // Filter through all pages and find Portfolio's children
                            $faqChildren = get_page_children($faqId, $allPages);                            
                            ?>
                            <div class="p1">
                                <ol>
                                    <?php
                                    $childCounter = 0;
                                    foreach ($faqChildren as $currentFAQChild) {
                                        $childCounter++;
                                    ?>
                                    <li>
                                        <div>
                                            <a href="<?php echo get_site_url().'/'.$currentFAQChild->post_name; ?>"><?php echo $currentFAQChild->post_title; ?></a>
                                            <?php echo $currentFAQChild->post_content; ?>
                                        </div>
                                    </li>                                        
                                    <?php
                                    }
                                    ?>
                                </ol>
                            </div>
                            <div class="container"><a href="/?p=<?php echo $faqId; ?>" class="link">Read more</a></div>     
                        </div>
                        <div class="col-3">
                            <h2>Did You Know?</h2>
                            <?php
                            $didYouKnowObject = new WP_Query('name=did-you-know&post_type=page');
                            $didYouKnowId = $didYouKnowObject->post->ID;
                            ?>                            
                            <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/4page_img1.jpg" class="img-indent" /><br>
                            <?php echo $didYouKnowObject->post->post_content; ?>
                            <div class="container"><a href="/?p=<?php echo $didYouKnowId; ?>" class="link">Read more</a></div>
                        </div>
                    </div> 
                </section>
            </div>
        </div>
<?php
get_footer();
?>