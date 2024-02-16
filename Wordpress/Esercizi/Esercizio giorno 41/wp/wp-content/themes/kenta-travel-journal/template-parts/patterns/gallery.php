<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80","top":"var:preset|spacing|80"}}},"backgroundColor":"kenta-base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-kenta-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

<?php
/**
 * Section heading
 */

echo kenta_travel_journal_pattern_markup('heading', array(
        'title' => esc_html__('Great Gallery', 'kenta-travel-journal')
));
?>

<!-- wp:gallery {"columns":3,"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-3 is-cropped"><!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(kenta_travel_journal_asset_url('images/gallery-01.jpg')) ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url(kenta_travel_journal_asset_url('images/gallery-02.jpg')) ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(kenta_travel_journal_asset_url('images/gallery-03.jpg')) ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(kenta_travel_journal_asset_url('images/gallery-04.jpg')) ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url(kenta_travel_journal_asset_url('images/gallery-05.jpg')) ?>" alt=""/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group -->
