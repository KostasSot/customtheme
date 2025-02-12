<?php get_header() ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" 
 alt=""/>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <h1>Blog</h1>
            <div class="container">
                    <div class="blog-items">
                        <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                            ?>
                                <article>
                                    <h2><?php the_title(); ?></h2>
                                    <div class="meta-info">
                                        <p>Posted in <?php echo get_the_date() ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                                <?php echo get_the_author(); ?>
                                            </a> 
                                        </p>
                                        <p>Categories: <?php the_category( ' ' ); ?> </p>
                                        <p>Tags: <?php the_tags('', ', '); ?></p>
                                    </div>
                                    <?php the_content(); ?>
                                </article>
                            <?php
                            endwhile;
                        else: ?>
                            <p>Nothing yet</p>
                        <?php endif; ?>
                    </div>
            </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>

