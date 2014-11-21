<?php
/**
 * Product Loop Start
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

global $flatsome_opt;

$product_per_row = '3';
$product_per_row_full_width = '4';

if($flatsome_opt['category_row_count']){
	$product_per_row = $flatsome_opt['category_row_count'];
}

?>
<div class="row"><div class="large-12 columns">

<?php if($flatsome_opt['category_sidebar'] == 'right-sidebar' AND is_archive())  { ?>
       	<ul class="products small-block-grid-2 large-block-grid-<?php echo $product_per_row; ?>">
<?php } else if ($flatsome_opt['category_sidebar'] == 'left-sidebar' AND  is_archive()) { ?>
		<ul class="products small-block-grid-2 large-block-grid-<?php echo $product_per_row; ?>">
<?php } else if (is_archive()) { ?>
		<ul class="products small-block-grid-2 large-block-grid-<?php echo $product_per_row; ?>">
<?php } else { ?>
	<ul class="products small-block-grid-2 large-block-grid-4">
<?php } ?>


