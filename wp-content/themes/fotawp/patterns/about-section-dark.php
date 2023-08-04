<?php

/**
 * Title: About Section Dark
 * Slug: fotawp/about-section-dark
 * Categories: fotawp
 */
$fotawp_images = array(
    FOTAWP_URL . 'assets/images/pattern_image_2.jpg',
);
?>
<!-- wp:group {"style":{"color":{"background":"#070707"},"spacing":{"padding":{"top":"7rem","bottom":"7rem","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background" style="background-color:#070707;padding-top:7rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:image {"id":12,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($fotawp_images[0]); ?>" alt="" class="wp-image-12" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"left":"var:preset|spacing|50"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":6,"textColor":"secondary"} -->
            <h6 class="wp-block-heading has-secondary-color has-text-color">About Us</h6>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"foregound-alt"} -->
            <h1 class="wp-block-heading has-foregound-alt-color has-text-color" style="font-style:normal;font-weight:600">Explore Our Story</h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":1.6}},"textColor":"background","fontSize":"small"} -->
            <p class="has-background-color has-text-color has-small-font-size" style="font-style:normal;font-weight:300;line-height:1.6">The purpose of lorem<em> </em>ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>
            <!-- /wp:paragraph -->

            <!-- wp:spacer {"height":"5px"} -->
            <div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|60","bottom":"var:preset|spacing|40","left":"var:preset|spacing|60"}},"typography":{"textDecoration":"none"}},"className":"is-style-button-hover-white-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-white-bgcolor" style="text-decoration:none"><a class="wp-block-button__link has-background-color has-secondary-background-color has-text-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)">Read More</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->