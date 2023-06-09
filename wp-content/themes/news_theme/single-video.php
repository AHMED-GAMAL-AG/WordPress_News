<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package News-Hsoub
 */

get_header();
set_post_views(get_the_ID());
?>

<main>
    <?php
    while (have_posts()) {
        the_post();
    ?>
        <div class="article-header">
            <div class="container">
                <div class="header-category">
                    <span class="me-1 article-category"><?php the_category('، '); ?>
                </div>
                <div class="header-title">
                    <h2>
                        <?php the_title(); ?>
                        <!-- <?php echo get_post_views(get_the_ID()); ?> -->
                    </h2>
                </div>
            </div>
        </div>
        <div class="article-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="article-body">
                            <article>
                                <p><?php the_content(); ?></p>
                            </article>
                        </div>

                        <div class="article-datetime mt-2">
                            <time datetime="<?php the_time('d/m/Y'); ?>"><?php the_time('j F Y'); ?></time>
                        </div>

                        <section class="comments mt-5">
                            <h2 class="section-title">
                                التعليقات
                            </h2>

                            <?php comments_template(); ?>

                            <hr>
                        </section>

                        <section class="related-articles">
                            <h2 class="section-title">
                                فيديوهات ذات صلة
                            </h2>
                            <div class="row">
                                <?php
                                $id = get_the_id();
                                $terms = get_the_terms($id, 'category');
                                //print_r( $terms );
                                foreach ($terms as $term) {
                                    $cat_id =  $term->term_taxonomy_id;
                                }

                                $args = array(
                                    'post_type' => 'video',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'category',
                                            'field'    => 'term_id',
                                            'terms'    => $cat_id,
                                        ),
                                    ),
                                );

                                $query = new WP_Query($args);

                                while ($query->have_posts()) : $query->the_post();  ?>
                                    <div class="col-sm-4">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) {
                                                the_post_thumbnail();
                                            } else { ?>
                                                <img src="<?php bloginfo('template_directory'); ?>/images/default.jpg" alt="<?php the_title(); ?>" />
                                            <?php } ?>
                                        </a>
                                        <div class="article-text mt-3">
                                            <span class="article-category">
                                                <?php the_category('، '); ?>
                                            </span>
                                            <h5 class="article-title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h5>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </section>
                    </div>

                    <div class="col-lg-4">
                        <div class="most-read">
                            <h2>الأكثر مشاهدة</h2>
                            <?php
                            $popularpost = new WP_Query(array(
                                'post_type' => 'video',
                                'posts_per_page' =>  2,
                                'meta_key' => 'post_views_count',
                                'orderby' => 'meta_value_num',
                                'order' => 'DESC'
                            ));
                            ?>
                            <?php while ($popularpost->have_posts()) : $popularpost->the_post(); ?>

                                <div class="most-read-article">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail();
                                        } else { ?>
                                            <img src="<?php bloginfo('template_directory'); ?>/images/default.jpg" alt="<?php the_title(); ?>" />
                                        <?php } ?>
                                    </a>
                                    <div class="most-read-text">
                                        <h4 class="article-title single-read">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h4>
                                        <time datetime="<?php the_time('d/m/Y'); ?>"><?php the_time('j F Y'); ?></time>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</main>

<?php
get_footer();
