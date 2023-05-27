<?php

/*
Template Name: Show More
*/

get_header();
?>

<main>
    <section class="news" style="margin-top:7rem;">
        <div class="container">
            <h2 class="section-title">
                جميع الأخبار
            </h2>
            <div class="row">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // check if the query has more than one page then show first page : 1
                $allPostsWPQuery = new WP_Query(array(
                    'post_type' => 'post',
                    // 'posts_per_page' => -1, // get all posts
                    'posts_per_page' => 5, // get 5 posts in each page
                    'post_status' => 'publish',
                    'paged' => $paged
                ));

                if ($allPostsWPQuery->have_posts()) :
                    while ($allPostsWPQuery->have_posts()) : $allPostsWPQuery->the_post(); ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                } else { ?>
                                    <img src="<?php bloginfo('template_directory'); ?>/images/default.jpg" alt="<?php the_title(); ?>" />
                                <?php } ?>
                            </a>
                            <div class="article-text mt-3">
                                <span class="article-category">
                                    <?php the_category('، ') ?>
                                </span>
                                <h5 class="article-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h5>
                            </div>
                        </div>
                    <?php endwhile; ?>

                    <div class="row mt-5">
                        <div class="pagination">
                            <?php
                            echo paginate_links(array( // show pagination
                                'total'        => $allPostsWPQuery->max_num_pages,
                            ));
                            ?>
                        </div>
                    </div>

                <?php else : ?>
                    <div class="alert alert-primary" role="alert">
                        <?php _e('للأسف لا يوجد أخبار الآن'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>