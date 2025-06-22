<?php
/**
 * 404 content.
 *
 * It does not appear in the inserter.
 */
return [
	'title'    => __( '404 content (theme)', 'anima' ),
	'inserter' => false,
	'content'  => '<!-- wp:heading {"textAlign":"center","level":1,"align":"wide","className":"has-larger-font-size","fontSize":"larger"} -->
<h1 class="alignwide has-text-align-center has-larger-font-size" id="looks-like-you-ve-stumbled-into-nowhere">' . esc_html__( 'Looks like you\'ve stumbled into nowhere.', 'anima' ) . '</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center has-normal-font-size">' . esc_html__( 'It seems we can\'t find what you’re looking for. Perhaps searching can help.', 'anima' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"' . esc_html__( 'Search', 'anima' ) . '","showLabel":false,"buttonText":"' . esc_html__( 'Search', 'anima' ) . '"} /-->',
];
