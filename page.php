<!DOCTYPE html>
<!-- <html lang="en"> -->
<html <?php language_attributes(); ?>>

<head>
    <!-- <meta charset="utf-8" /> -->
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- <title></title> functions.phpでadd_theme_support('title-tag');-->
    <!-- Favicon-->
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <!-- <link href="http://testsite.local/wp-content/themes/testsite/css/styles.css" rel="stylesheet" />　functions.phpで対応 -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Responsive navbar  nav.phpへ-->
    <?php get_template_part('nav') ?>
    <?php get_header(); ?>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <?php if (have_posts()) : // whileの前のif文作法
                ?>
                    <?php while (have_posts()) : // 投稿がある限り繰り返す 
                    ?>
                        <?php the_post(); // 次の投稿に進める 
                        ?>
                        <!-- Featured blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="<?php echo esc_url(get_theme_file_uri('screenshot.png')); ?>" alt="..." /></a>
                            <div class="card-body">
                                <h2 class="card-title"><? the_title(); ?></h2>
                                <p class="card-text"><? the_content(); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <?php wp_footer(); ?>
</body>

</html>