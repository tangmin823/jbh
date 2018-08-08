<?php
$post_format = get_post_format();
if($post_format == 'video') {
    $this->load_parts( array( 'single-video' ) );
    return;
}
?>
<!doctype html>
<html amp <?php echo AMP_HTML_Utils::build_attributes_string( $this->get( 'html_tag_attributes' ) ); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
    <?php do_action( 'amp_post_template_head', $this ); ?>
    <style amp-custom>
        <?php $this->load_parts( array( 'style' ) ); ?>
        <?php do_action( 'amp_post_template_css', $this ); ?>
    </style>
    <?php
    if(is_rtl() || ot_get_option('rtl') == 'on') {
        $this->load_parts( array( 'style-rtl' ) );
    }
    ?>
</head>

<body class="<?php echo esc_attr( $this->get( 'body_class' ) ); ?>">

<?php $this->load_parts( array( 'header-bar' ) ); ?>

<article class="amp-wp-article">

    <header class="amp-wp-article-header">
        <h1 class="amp-wp-title"><?php echo wp_kses_data( $this->get( 'post_title' ) ); ?></h1>
        <?php $this->load_parts( apply_filters( 'amp_post_article_header_meta', array( 'meta-author', 'meta-time' ) ) ); ?>
    </header>

    <?php $this->load_parts( array( 'featured-image' ) ); ?>

    <div class="amp-wp-article-content">
        <?php
        videopro_print_amp_advertising('ads_single_1');
        echo $this->get( 'post_amp_content' ); // amphtml content; no kses
        videopro_print_amp_advertising('ads_single_2');
        ?>

    </div>

    <footer class="amp-wp-article-footer">
        <?php $this->load_parts( apply_filters( 'amp_post_article_footer_meta', array( 'meta-taxonomy' ) ) ); ?>
    </footer>

</article>

<?php $this->load_parts( array( 'footer' ) ); ?>

<?php do_action( 'amp_post_template_footer', $this ); ?>

</body>
</html>
