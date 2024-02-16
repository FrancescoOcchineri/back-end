<?php
$image_url = isset($media) ?$media: kenta_travel_journal_asset_url('images/about-header.jpg');
?>

<!-- wp:cover {"url":"<?php echo esc_url($image_url)?>","dimRatio":50,"focalPoint":{"x":0.5,"y":0.18},"minHeight":360,"minHeightUnit":"px","contentPosition":"bottom center","align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center" style="padding-bottom:var(--wp--preset--spacing--80);min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url($image_url)?>" style="object-position:50% 18%" data-object-fit="cover" data-object-position="50% 18%"/><div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","level":1,"fontSize":"ktj-font-xlarge"} /--></div></div>
<!-- /wp:cover -->
