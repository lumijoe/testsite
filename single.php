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
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php else : ?>
                                <img class="card-img-top" src="<?php echo esc_url(get_theme_file_uri('screenshot.png')); ?>" alt="..." />
                            <?php endif; ?>
                            <div class="card-body">
                                <div class="small text-muted"><? the_time('Y年m月d日H時'); ?></div>
                                <h2 class="card-title"><? the_title(); ?></h2>
                                <p class="card-text"><? the_content(); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php the_post_navigation(); ?>
                <?php endif; ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">戻る</a>
                <!-- Pagination -->

            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                        </div>
                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">Web Design</a></li>
                                    <li><a href="#!">HTML</a></li>
                                    <li><a href="#!">Freebies</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">JavaScript</a></li>
                                    <li><a href="#!">CSS</a></li>
                                    <li><a href="#!">Tutorials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                </div>
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