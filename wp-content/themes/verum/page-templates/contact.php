<?php

/*
*
* Template Name: Contact Page
*
*/

get_header('single');
the_post();
if(!isset($part['part'])) :
?>

<!--post start-->
<div class="container">
     <div class="row justify-content-md-center">
         <div class="col-md-8">
             <div class="row justify-content-center">
                 <div class="col-10">
                     <div class="contact-heading text-center">
                         <h2><?php the_title(); ?></h2>
                         <?php
                            $verum_contact_subheading = get_post_meta(get_the_ID(),'verum_contact_subheading', true);
                        if(isset($verum_contact_subheading)) :
                         ?>
                         <div class="subtitle"><?php echo esc_html($verum_contact_subheading) ?></div>
                        <?php endif; ?>
                         <?php the_content(); ?>
                     </div>
                 </div>
             </div>
             <?php
             // if(isset($verum_contact_shortcode)){
                $verum_contact_shortcode = get_post_meta(get_the_ID(),'verum_contact_shortcode',true);
                 echo do_shortcode($verum_contact_shortcode);
             // }
             ?>
         </div>
     </div>
</div>
<!--post end-->

<?php
endif;
get_footer();

?>