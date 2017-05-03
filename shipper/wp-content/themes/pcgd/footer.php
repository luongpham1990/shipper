<footer class="ket">
    <div class="ke1">
        <div class="k1">
            <div class="k11 col-sm-3 col-xs-12">
                <div class="kk1">
                    <a href=""><img src="<?php bloginfo('stylesheet_directory'); ?>/image/lg.png" alt=""></a>
                    <ul>
                        <li><p>Công ty TNHH Grap taxi - 268 Tô Hiến Thành, <br> P.15, Q.10, TP Hồ Chí Minh</p></li>
                    </ul>
                    <ul>
                        <li><p>Mã số doanh nghiệp: 0312650437 <br>
                                Người đại diện: Nguyễn Tuấn Anh <br>
                                (08 71087108)
                            </p></li>
                    </ul>
                    <ul>
                        <li><p>support.hcm@grab.com</p></li>
                    </ul>
                </div>
            </div>
            <div class="k12 col-sm-9 col-xs-12">
                <?php $args=array('category_name' => '	ket-1', 'orderby' => 'ID', 'order' => 'ASC', 'posts_per_page'=>4);$query =
                    new WP_Query( $args); ?>
                <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post();?>
                <div class="kk2 col-xs-6 col-sm-4 col-md-3">
                    <ul>
                        <li><p><?php the_excerpt() ?></p></li>
                    </ul>
                </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="k2">
            <?php $args=array('category_name' => '	ket-2', 'orderby' => 'ID', 'order' => 'ASC', 'posts_per_page'=>4);$query =
                new WP_Query( $args); ?>
            <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post();?>
            <ul>
                <li><a href=""><?php the_post_thumbnail(); ?></a></li>
                <li><p><?php the_excerpt() ?></p></li>
            </ul>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="ke2">
        <div class="ke21 col-sm-4 col-xs-12">
            <ul><li><u>Quy chế hoạt động và điều khoản sử dụng</u></li></ul>
        </div>
        <div class="ke21 col-sm-8 col-xs-12">
            <ul><li><u>Bản quyền thuộc về shipper qưertyuioadfghjklkirevfgbfdcv</u></li></ul>
        </div>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>