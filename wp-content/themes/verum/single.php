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
                        <?php
                        if('quote'==get_post_format()):
                            get_template_part('templates/single-post/post','quote');
                            get_template_part('templates/single-post/post','footer');
                        else:
                        ?>
                        <article class="post">
                            <?php 
                            get_template_part("templates/single-post/post","header");
                            ?>
                            <?php get_template_part('templates/single-post/title','meta'); ?>
                            <div class="post-blog">
                                <?php
                                the_content();

                                get_template_part('templates/single-post/post','footer');
                                ?>

                            </div>
                        </article>
                        <?php
                        endif;
                        ?>

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