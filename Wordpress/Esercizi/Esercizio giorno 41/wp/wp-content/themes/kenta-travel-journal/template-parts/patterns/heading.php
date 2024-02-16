<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40","left":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"capitalize"}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size" style="text-transform:capitalize"><?php echo isset($title)? esc_html($title) : esc_html__('Awesome Heading', 'kenta-travel-journal')?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"right":"0rem","left":"0rem"}}},"className":"is-style-prose-max-width"} -->
<p class="has-text-align-center is-style-prose-max-width" style="padding-right:0rem;padding-left:0rem"><?php echo isset($description) ? esc_html($description) : esc_html__('This is some dummy text. It is used for demonstration, to visually display the design of the page. Actual users can replace it with real text.', 'kenta-travel-journal')?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->