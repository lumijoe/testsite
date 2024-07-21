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
    <h1>404 Not Found</h1>
    <p>ページが見つかりません</p>
    <a href="<?php echo esc_url(home_url('/')); ?>">ホームへ戻る</a>
    <?php get_footer(); ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <?php wp_footer(); ?>
</body>

</html>