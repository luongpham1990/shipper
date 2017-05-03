<?php get_header();?>
<section class="nen">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <?php $args=array('category_name' => 'anh', 'orderby' => 'ID', 'order' => 'DESC', 'posts_per_page'=>1);$query =
                    new WP_Query( $args); ?>
                <?php if ( $query->have_posts() ) : ?>
                    <?php while ( $query->have_posts() ) : $query->the_post();?>
                        <?php  the_post_thumbnail(); ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                </div>
            <?php $args=array('category_name' => 'anh', 'orderby' => 'ID', 'order' => 'DESC', 'posts_per_page'=>3,'offset'=>1);$query =
                new WP_Query( $args); ?>
            <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post();?>
            <div class="item">
                <?php  the_post_thumbnail(); ?>
            </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
        <!-- Controls -->
    </div>
</section>
<section class="tb2">
    <div class="bao">
        <div class="find">
            <?php $args=array('category_name' => 'find', 'orderby' => 'ID', 'order' => 'DESC', 'posts_per_page'=>3);$query =
                new WP_Query( $args); ?>
            <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post();?>
            <div class="find1 col-sm-6 col-xs-12">
                <ul>
                    <li><p><?php  the_title();?></p></li>
                </ul>
            </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
        <div class="ship">
            <h2>SHIPPER - BENEFIT</h2>
            <?php $args=array('category_name' => 'ship', 'orderby' => 'ID', 'order' => 'DESC', 'posts_per_page'=>3);$query =
                new WP_Query( $args); ?>
            <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post();?>
            <ul>
                <li><p><?php the_excerpt() ?></p></li>
            </ul>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
        <div class="voi">
            <div class="shop col-md-5">
                <h3>Với shop</h3>
                <div class="sh">
                <?php $args=array('category_name' => 'shop', 'orderby' => 'ID', 'order' => 'ASC', 'posts_per_page'=>4);$query =
                    new WP_Query( $args); ?>
                <?php if ( $query->have_posts() ) : ?>
                    <?php while ( $query->have_posts() ) : $query->the_post();?>
                    <div class="sh1 col-sm-12">
                        <ul>
                            <li class="col-sm-2 col-xs-2"><?php the_post_thumbnail(); ?></li>
                            <li class="col-sm-10 col-xs-10"><p><?php the_excerpt() ?></p></li>
                        </ul>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                </div>
            </div>
            <div class="per col-md-6">
                <h3>Với Shipper</h3>
                <div class="so">
                <?php $args=array('category_name' => 'voi-ship', 'orderby' => 'ID', 'order' => 'ASC', 'posts_per_page'=>4);$query =
                    new WP_Query( $args); ?>
                <?php if ( $query->have_posts() ) : ?>
                    <?php while ( $query->have_posts() ) : $query->the_post();?>
                    <div class="so1 col-sm-12">
                        <ul>
                            <li class="col-sm-2 col-xs-2"><?php the_post_thumbnail(); ?></li>
                            <li class="col-sm-10 col-xs-10"><p><?php the_excerpt() ?> </p></li>
                        </ul>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="kh1"><img src="<?php bloginfo('stylesheet_directory'); ?>/image/kh22.png" alt=""></div>
<section class="what">
    <div class="wha">
        <h3>WHAT SERVICE ?</h3>
        <?php $args=array('category_name' => 'what', 'orderby' => 'ID', 'order' => 'ASC', 'posts_per_page'=>4);$query =
            new WP_Query( $args); ?>
        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post();?>
        <ul>
            <li><p><?php the_excerpt() ?></p></li>
        </ul>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
    <div class="shhi">
        <div class="moto col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-md-2 col-sm-2">
            <?php $args=array('category_name' => 'moto', 'orderby' => 'ID', 'order' => 'ASC', 'posts_per_page'=>1);$query =
                new WP_Query( $args); ?>
            <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post();?>
            <h3><?php  the_title();?></h3>
            <ul>
                <li><p><?php the_excerpt() ?></p></li>
            </ul>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
        <div class="carr">
        <?php $args=array('category_name' => 'car', 'orderby' => 'ID', 'order' => 'ASC', 'posts_per_page'=>3);$query =
            new WP_Query( $args); ?>
        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post();?>
            <div class="car col-md-2">
                <h3><?php  the_title();?></h3>
                <ul>
                    <li><p><?php the_excerpt() ?></p></li>
                </ul>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        </div>
    </div>
</section>
<div class="kh2"><img src="<?php bloginfo('stylesheet_directory'); ?>/image/kh21.png" alt=""></div>
<section class="tb3">
    <div class="bao2">
        <div class="sali">
            <h3>SALIENT FEATURES</h3>
            <?php $args=array('category_name' => '	salient', 'orderby' => 'ID', 'order' => 'ASC', 'posts_per_page'=>1);$query =
                new WP_Query( $args); ?>
            <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post();?>
            <ul>
                <li><p><?php the_excerpt() ?></p></li>
            </ul>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
        <div class="ro">
            <div class="aaa col-sm-6 col-xs-12"><img src="<?php bloginfo('stylesheet_directory'); ?>/image/icon9.png" alt=""></div>
            <div class="nhu col-sm-6 col-xs-12">
            <?php $args=array('category_name' => '	salient', 'orderby' => 'ID', 'order' => 'ASC', 'posts_per_page'=>4);$query =
                new WP_Query( $args); ?>
            <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post();?>
                <div class="nhu1">
                    <ul>
                        <li><?php the_post_thumbnail(); ?></li>
                        <li><p><?php the_excerpt() ?></p></li>
                    </ul>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            </div>
        </div>
        <div class="dow">
            <a href=""><h3>DOWLOAD</h3></a>
            <?php $args=array('category_name' => '	dowload', 'orderby' => 'ID', 'order' => 'ASC', 'posts_per_page'=>3);$query =
                new WP_Query( $args); ?>
            <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post();?>
            <ul>
                <li><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a></li>
            </ul>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<div class="bao3"><img src="<?php bloginfo('stylesheet_directory'); ?>/image/kh23.png" alt=""></div>
<section class="tb">
    <div class="new">
        <h3>NEW</h3>
        <?php $args=array('category_name' => 'new', 'orderby' => 'ID', 'order' => 'ASC', 'posts_per_page'=>3);$query =
            new WP_Query( $args); ?>
        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post();?>
        <ul>
            <li><p><?php the_excerpt() ?></p></li>
        </ul>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    </div>
    <div class="tt container">
        <div class="tt1 col-sm-8 col-xs-12">
        <?php $args=array('category_name' => 'grab', 'orderby' => 'ID', 'order' => 'ASC', 'posts_per_page'=>3);$query =
            new WP_Query( $args); ?>
        <?php if ( $query->have_posts() ) : ?>
            <?php
            while ( $query->have_posts() ) : $query->the_post();?>
            <ul class="mkh">
                <li><a href="">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/image/grap.png" alt="">
                        <p><?php the_excerpt() ?></p></a>
                    <ul>
                        <li><p>Ứng dụng của shipper</p></li>
                        <li><p>Ứng dụng của shipper</p></li>
                        <li><p>Ứng dụng của shipper</p></li>
                    </ul>
                </li>
            </ul>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        </div>

        <div class="tt2 col-sm-4 col-xs-12">
        <?php $args=array('category_name' => '	grab-2', 'orderby' => 'ID', 'order' => 'ASC', 'posts_per_page'=>3);$query =
            new WP_Query( $args); ?>
        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post();?>
            <ul class="mkk2">
                <li><a href=""><img src="<?php bloginfo('stylesheet_directory'); ?>/image/grap1.png" alt="">
                        <p><?php the_excerpt() ?></p></a>
                    <ul>
                        <li><p>Ứng dụng của shipper</p></li>
                        <li><p>Ứng dụng của shipper</p></li>
                        <li><p>Ứng dụng của shipper</p></li>
                    </ul>
                </li>
            </ul>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        </div>
    </div>
    <div class="tm container">
        <?php $args=array('category_name' => 'cong-viec', 'orderby' => 'ID', 'order' => 'ASC', 'posts_per_page'=>4);$query =
            new WP_Query( $args); ?>
        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post();?>
        <div class="tm1 col-sm-3 col-xs-12">
            <?php the_post_thumbnail(); ?>
            <ul>
                <li><p><?php the_excerpt() ?></p></li>
            </ul>
        </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>