<div class="post-header">
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
        <div class="post-date"><?php echo get_the_date('i F Y'); ?></div>
    </div>
    <h2><?php the_title(); ?></h2>
    <div class="post-meta">
        <div class="post-author"><?php _e('By','verum') ?> <?php the_author_posts_link(); ?></div>
    </div>
</div>