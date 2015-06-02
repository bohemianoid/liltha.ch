<?php include '../app/inc/head.php' ?>
    <section class="hero">
        <div id="hero-image" class="hero-image">
            <img src="<?php echo get_header_images( 'image' ) ?>">
        </div>
        <div class="readable inner">
            <h2 class="hero-title"><?php echo $pageTitle ?></h2>
            <a href="#main" class="hero-scroll"></a>
            <?php if ( isset( $pageTagline ) ) : ?>
                <p class="hero-tagline"><?php echo $pageTagline ?></p>
            <?php endif ?>
        </div>
    </section>
    <section id="main" class="main" role="main">
        <div class="inner">
            <?php if ( flash( 'success' ) ) : ?>
                <div class="success"><?php echo flash( 'success' ) ?></div>
            <?php elseif ( flash( 'error' ) ) : ?>
                <div class="error"><?php echo flash( 'error' ) ?></div>
            <?php endif ?>
            <?php echo content() ?>
        </div>
    </section>
<?php include '../app/inc/footer.php' ?>
