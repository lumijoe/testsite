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
                                <div class="small text-muted"><? the_time('Y年m月d日H時'); ?></div>
                                <h2 class="card-title"><? the_title(); ?></h2>
                                <p class="card-text"><? the_excerpt(); ?></p>
                                <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read more →</a>

                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <!-- Nested row for non-featured blog posts-->
                <!-- <div class="row">
                    <div class="col-lg-6"> -->
                <!-- Blog post-->
                <!-- <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">January 1, 2023</div>
                                <h2 class="card-title h4">Post Title</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                <a class="btn btn-primary" href="#!">Read more →</a>
                            </div>
                        </div> -->
                <!-- Blog post-->
                <!-- <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">January 1, 2023</div>
                                <h2 class="card-title h4">Post Title</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                <a class="btn btn-primary" href="#!">Read more →</a>
                            </div>
                        </div> -->
                <!-- </div> -->
                <!-- <div class="col-lg-6"> -->
                <!-- Blog post-->
                <!-- <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">January 1, 2023</div>
                                <h2 class="card-title h4">Post Title</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                <a class="btn btn-primary" href="#!">Read more →</a>
                            </div>
                        </div> -->
                <!-- Blog post-->
                <!-- <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">January 1, 2023</div>
                                <h2 class="card-title h4">Post Title</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam.</p>
                                <a class="btn btn-primary" href="#!">Read more →</a>
                            </div>
                        </div> -->
                <!-- </div>
                </div> -->
                <!-- Pagination-->
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <!-- <ul class="pagination justify-content-center my-4">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                        <li class="page-item"><a class="page-link" href="#!">15</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                    </ul> -->
                    <?php the_posts_pagination(); ?>
                </nav>
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