<?php
/*
  Template Name: Plans And Services Page
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
                        <h4 class="p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</h4>
                        <p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius micum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus nulla dui. Fusce feugiat malesuada odio morbiem nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci acun sem Duis ultricies pharetra magna. Donecumt accumsan malesuada orci. Donec siten amet eros. Lorem ipsum dolor sit amet, consectetuer.</p>

                        <h5 class="p"> Ut enim ad minima veniam quis nostrum exercitationem ullam corporis suscipit laboriosam nisi ut aliquid ex ea commod.</h5>
                        <p>Vel cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus quisque nulla. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae uspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit magna, hendrerit sit.</p>

                        <h4 class="color1 p">Ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</h4>
                        <p> Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor siteme amet consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibusm tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. </p>
                        
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