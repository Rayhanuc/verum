<?php

get_header('single');
the_post();

$verum_sidebar_position = get_theme_mod('sidebar_display_setting','no');
$verum_container_class = 'no'==$verum_sidebar_position?'col-md-12':'col-lg-9 col-md-8';
$verum_sidebar_border = 'right'== $verum_sidebar_position?'side-border':'';
?>

    <!--post start-->
    <div class="container">
        <div class="row">
            <?php
            if ('left'==$verum_sidebar_position) {
                get_sidebar();
            }
            ?>
            <div class="<?php echo esc_attr($verum_container_class); ?> <?php echo esc_attr($verum_sidebar_border); ?>">

                <div class="row">
                    
                    <div class="col-md-12">
                        <article class="post">
                            <?php 
                            get_template_part("templates/single-post/post","header");
                            ?>
                            <?php get_template_part('templates/single-post/title','meta'); ?>
                            <div class="post-blog">
                                <?php
                                the_content();
                                ?>

                                <!-- tags and share start-->
                                <div class="meta-row">
                                    <div class="meta-tags">
                                        <?php
                                        the_tags('<span>Tags:</span>','');
                                        ?>
                                    </div>
                                    <div class="meta-share">
                                        <div class="social-links">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>

                                        </div>
                                        <div class="share-btn"><i class="fa fa-share-alt pr-2"></i> Share</div>
                                    </div>
                                </div>
                                <!-- tags and share end-->

                                <!--custom pagination-->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="custom-pagination custom-pagination-post">
                                            <div class="older full-">
                                                <?php
                                                previous_post_link('%link','<span class="next-post-pagination">
                                                    %title
                                                </span><i class="float-right fa fa-angle-right"></i>');
                                                ?>
                                            </div>
                                            <div class="newer">

                                                <?php
                                                previous_post_link('%link','<i class="fa fa-angle-left"></i><span class="prev-post-pagination">
                                                    %title
                                                </span>');
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--custom pagination-->

                                <!--author info start-->
                                <div class="post-author-info">
                                    <div class="author-thumb">
                                        <?php echo get_avatar(get_the_author_meta("ID")) ; ?>
                                    </div>
                                    <div class="author-details mt-3">
                                        <h5><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID"))) ; ?>"><?php the_author(); ?></a></h5>
                                        <?php the_author_meta('description'); ?>
                                        <?php
                                        $verum_user_cm = wp_get_user_contact_methods(  );
                                        ?>
                                        <div class="s-links">
                                            <?php
                                            foreach($verum_user_cm as $verum_ucm_key=>$verum_ucm_value):
                                                $verum_cm_link = get_user_meta(get_the_author_meta("ID"), $verum_ucm_key, true);
                                                if($verum_cm_link):
                                            ?>
                                            <a href="<?php echo esc_url($verum_cm_link); ?>"><i class="fa fa-<?php echo esc_attr($verum_ucm_key); ?>"></i></a>
                                            <?php
                                                endif;
                                            endforeach;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <!--author info end-->

                            </div>
                        </article>

                        <!--related post start-->
                        <?php get_template_part('templates/single-post/related','posts'); ?>
                        <!--related post end-->

                        <?php 
                         comments_template();
                        ?>
                    </div>
                    
                </div>

                <?php
                if ('right'==$verum_sidebar_position) {
                    get_sidebar();
                }
                ?>
                
            </div>

        </div>
    </div>
    <!--post end-->

    <?php
get_footer();

?>