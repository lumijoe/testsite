<?php
function custom_theme_setup()
{
    // head内にフィードリンクを出力
    add_theme_support('automatic-feed-links');
    // 表示ページに合わせたタイトルタグを出力
    add_theme_support('title-tag');
    // ブロックエディタ用の標準スタイルを有効化
    add_theme_support('wp-block-styles');
    // 埋め込みコンテンツのレスポンシブを有効化
    add_theme_support('responsive-embeds');
    // サムネイル画像を設定
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(231, 177, false);
}
add_action('after_setup_theme', 'custom_theme_setup');

function testsite_scripts()
{
    wp_enqueue_style(
        'base-style', // ハンドル名
        get_theme_file_uri('css/styles.css'), // ファイルのパスを取得
        array(), // 依存関係
        '1.0', // バージョン指定
        'all' // メディアタイプ
    );
}
add_action('wp_enqueue_scripts', 'testsite_scripts');
