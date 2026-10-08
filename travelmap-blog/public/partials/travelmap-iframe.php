<?php if ( !defined( 'ABSPATH' ) ) { exit; } ?>
<?php if ( $iframe_data['url'] ): ?>
	<iframe src="<?php echo esc_url($iframe_data['url']); ?>" width="<?php echo esc_attr($iframe_data['width']); ?>" height="<?php echo esc_attr($iframe_data['height']); ?>" class="travelmap-iframe" allow="geolocation" frameborder="0" allowfullscreen></iframe>
<?php endif; ?>