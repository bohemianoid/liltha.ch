<section class="home">
    <h1 class="logo"><?php echo config( 'site.title' ) ?></h1>
    <p class="cross"></p>
    <p class="slogan"><?php echo config( 'site.slogan' ) ?></p>
</section>
<ul id="bg-slideshow" class="bg-slideshow">
    <?php $headerImages = get_header_images() ?>
    <?php foreach( $headerImages as $headerImage ) : ?>
        <li>
            <img src="<?php echo $headerImage ?>">
        </li>
    <?php endforeach ?>
</ul>