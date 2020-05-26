<?php
$verum_quote_background = get_template_directory_uri()."/assets/img/b9.jpg";
if (has_post_thumbnail()){
    $verum_quote_background = get_the_post_thumbnail_url("medium");
}
?>


<article <?php post_class('post post-quote d-flex align-items-center') ; ?> style="background-image: url(<?php echo esc_url($verum_quote_background); ?>)">
    <div class="post-header">
        <h3><?php the_content(); ?></h3>
        <div class="mb-3">- <?php the_author_posts_link(); ?> -</div>
        <div class="post-meta">
           <?php
            $verum_categories = get_the_category();
            if($verum_categories):
                echo '<ul class="cat">';
                foreach ($verum_categories as $verum_categorie) :
                    printf('<li><a href="%s">%s</a></li>', get_category_link( $verum_categorie ), $verum_categorie->name)
            ?>
                <?php
                    endforeach;
                    echo '</ul>';
                ?>
            
            <div class="separation"></div>
           <?php
            endif;
           ?>
            <div class="post-date"><a href="<?php the_permalink() ; ?>"><?php echo get_the_date('j F Y'); ?></a></div>
        </div>
    </div>
</article>