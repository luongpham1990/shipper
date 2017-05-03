<?php get_header(); ?>
<div class="archive" >
    <div id="main-content">
        <div class="archive-title">
            <?php if(is_tag()):
                printf(__('Posts taged :%1$s','trung'),single_tag_title('',false));
            elseif(is_category()):
                printf(__(' %1$s','trung'),single_cat_title('',false));
            elseif(is_day()):
                printf(__('Daily Archive: %1$s','trung'),get_the_time('l,F j,Y'));
            elseif(is_month()):
                printf(__('Monthly Archive:%1$s','trung'),get_the_time('F Y'));
            elseif(is_year()):
                printf(__('Year Archive: %1$s','trung'),get_the_time('Y'));
            endif; ?>
        </div>
        <?php if(is_tag()||is_category()): ?>
            <div class="archive-description">
                <?php echo term_description(); ?>
            </div>
        <?php endif; ?>
        <?php
        if(have_posts()):while(have_posts()):the_post();?>
            <article>
                <div class="anh col-sm-3 col-xs-12">
                    <a href="<?php the_permalink(); ?>"> <?php  the_post_thumbnail(); ?></a>
                </div>
                <div class="content">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                </div>
            </article>
        <?php endwhile;
            wp_pagenavi();
        else:

        endif;?>
    </div>
    <div id="sidebar">
    </div>
</div>
<?php get_footer(); ?>


