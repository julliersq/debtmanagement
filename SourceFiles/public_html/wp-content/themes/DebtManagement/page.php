<?php
/*
  Template Name: Default Page
 */

$currentPage = get_queried_object();

$pageID = $currentPage->ID;
global $bodyId;
$bodyId = '';
get_header();

// Set up the objects needed
$pagesQuery = new WP_Query();
$allPages = $pagesQuery->query(array('post_type' => 'page', 'posts_per_page' => -1));

    ?>
        <div class="main">
            <div class="inside">
                <section id="content">
                    <div class="container">
                        <h2><?php echo $currentPage->post_title; ?></h2>
                        <div class="txt">
                            <?php echo $currentPage->post_content; ?>
                        </div>                        
                    </div> 
                </section>
            </div>
        </div>
    <?php
    get_footer();
    ?>