<section class="news">
    <div class="container section">
        <div class="title">
            <h2><?php $id = get_cat_ID('news'); echo get_cat_name($id); ?></h2>
            <?= category_description($id); ?>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 news-view">
                <div class="row">
                    <div class="col-xs-2 info">
                        <time datetime="2015-10-30">
                            30<span>Oct-2015</span>
                        </time>
                        <div class="com">
                            <i class="progress control"></i>
                            <i class="fa fa-comments-o comment"></i>
                            <p><span class="count-com">8</span> - Com</p>
                        </div>
                        <div class="view">
                            <i class="progress control-view"></i>
                            <i class="icon-view views"></i>
                            <p><span class="count-view">16</span> - View</p>
                        </div>
                    </div>
                    <?php query_posts('category_name=news'); if ( have_posts() ) : the_post(); ?>
                        <div class="col-xs-10 posters">
                            <?= the_post_thumbnail(); ?>
                            <h3><?php the_title() ?></h3>
                            <?php the_content() ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 news-feed">
                <ul>

                    <?php query_posts('category_name=news'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <li>
                            <h3><?php the_title() ?></h3>
                            <time><?php the_date('j-M-Y'); ?></time>
                            <?php the_content() ?>
                        </li>
                    <?php endwhile; ?>
                    <?php endif; ?>

                </ul>
                <button class="btn">View more</button>
            </div>
        </div>
    </div>
</section>