<?php

get_header(); 
?>


    <!--post start-->
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 side-border">
                <!-- posts area start -->
                <div class="row post-grid">

            	<?php 

            	while(have_posts()){
            		the_post();
            		get_template_part('templates/post/container');
            	}
            	?>

                    
                </div>
                <!-- posts area end -->

                <!--custom pagination-->
                <div class="row">
                    <div class="col-12">
                        <div class="custom-pagination">
                            <div class="older full">
                                <a href="#">Older Posts <i class="fa fa-angle-right"></i></a>
                            </div>
                            <!--<div class="newer">-->
                                <!--<a href="#"> <i class="fa fa-angle-left"></i> Newer Posts</a>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
                <!--custom pagination-->
            </div>

            <!-- Sidebar area start -->
            <?php
            get_sidebar();
            ?>
            <!-- Sidebar area end -->

        </div>
    </div>
    <!--post end-->

<?php
get_footer();

?>
