<?php
/*
  Template Name: Privacy Policy Page
 */

$currentPage = get_queried_object();

$pageID = $currentPage->ID;
global $bodyId;
$bodyId = 7;
get_header();

$db_man_theme_options = get_option('db_man_theme_options');

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
                        E-mail: <a href="#"><strong><?php echo $db_man_theme_options['email']; ?></strong></a>
                    </div> 
                </section>
            </div>
        </div>
    <?php
    get_footer();
    ?>