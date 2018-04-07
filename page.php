<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();
        $title = get_the_title();
        $content = get_the_content();
        $meta = get_post_meta( $post->ID, 'page_meta', true );
        endwhile; endif;
        set_query_var('title', $title);
        set_query_var('meta', $meta);
?>

        <div class="wrapper">

            <div class="container">

                <div class="page-section">

                    <div class="row">

                        <div class="col-sm-8">

                        <?php
                          echo $content;
                          comments_template();
                        ?>

                        </div> <!-- .col-md-10 -->
                        <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
                        <?php get_sidebar('page'); ?>
                        </div>
                    </div> <!-- .row -->

                </div> <!-- .page-section -->

            </div> <!-- .container -->

        </div> <!-- .wrapper -->

<?php get_footer(); ?>

