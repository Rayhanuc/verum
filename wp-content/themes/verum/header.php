<?php 
// The header for our theme
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    

    <?php 
    wp_head();
    ?>

</head>

<body <?php body_class(  ) ?>>

    <!--  preloader start -->
   <!--  <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div> -->
    <!-- preloader end -->

    <!--header start-->
    <header class="app-header">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <?php
                    if(is_active_sidebar( 'header-left' )){
                        dynamic_sidebar( 'header-left' );
                    }
                    ?>
                    <div class="logo">
                        <h1>
                            <a href="<?php echo home_url('/'); ?>">
                                <!-- <img src="<?php //echo get_template_directory_uri();?>/assets/img/logo.png" srcset="<?php //echo get_template_directory_uri();?>/assets/img/logo@2x.png 2x"  alt=""/> -->

                                <?php the_custom_logo(  ); ?>
                            </a>
                        </h1>
                    </div>
                    <div class="search-row">
                        <div class="search_toggle">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/search-icon.png" srcset="<?php echo get_template_directory_uri();?>/assets/img/search-icon@2x.png 2x" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header end-->

    <!--search overlay start-->
    <?php
    get_template_part( "templates/search/overlay" );
    ?>
    <!--search overlay end-->

    <!--nav start-->
    <nav class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_class' => 'menu',
                            'menu_id' => 'menu'
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
    </nav>

    <!--responsive nav start-->
    <div class="mobile-menu">
        <div class="search_toggle toggle-wrap">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/search-icon.png" srcset="<?php echo get_template_directory_uri();?>/assets/img/search-icon@2x.png 2x" alt=""/>
        </div>
    </div><!--responsive nav end-->

    <!--nav end-->
    <?php 
    $verum_banner_style = get_theme_mod('banner_style', 1);
    get_template_part('templates/banner/banner', $verum_banner_style); 
    ?>
