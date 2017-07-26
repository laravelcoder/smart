<?php



/* Check if WooCommerce plugin is active before continuing */
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

	global $datalayer;
	$datalayer = array();

	function datalayer_page_details() {
		global $post, $datalayer;

		$datalayer['page']['pageInfo']['pageName'] = esc_js($post->post_title);
		$datalayer['page']['pageInfo']['pageID'] = esc_js($post->post_title);
		$datalayer['page']['pageInfo']['destinationURL'] = esc_js(get_permalink());

	}
	add_action('wp_footer', 'datalayer_page_details');

	function woo_datalayer_single_product_details()
    {

		global $post, $datalayer;

		$product = get_product($post->ID);

		$product_categories = array_values(wp_get_post_terms($post->ID, 'product_cat', array('orderby' => 'parent')));

		$datalayer['page']['category']['pageType'] = 'product';
		$datalayer['page']['category']['primaryCategory'] = esc_js($product_categories[0]->name);
		if ($product_categories[1]) {
			$datalayer['page']['category']['subCategory1'] = esc_js($product_categories[1]->name);
		}

		$datalayer['product'][0]['productInfo']['productID'] = (string)$post->ID;
		$datalayer['product'][0]['productInfo']['productName'] = esc_js($post->post_title);
		$datalayer['product'][0]['productInfo']['description'] = esc_js($post->post_content);
		$datalayer['product'][0]['productInfo']['productURL'] = esc_js(get_permalink());

		$product_image_id = $product->get_image_id();
		if ($product_image_id) {
			$datalayer['product'][0]['productInfo']['productThumbnail'] = esc_js(woo_datalayer_get_image_src($product_image_id, 'shop_thumbnail'));
			$datalayer['product'][0]['productInfo']['productImage'] = esc_js(woo_datalayer_get_image_src($product_image_id, 'full'));
		}

		$sku = $product->get_sku();
		if (strlen($sku) > 0) {
			$datalayer['product'][0]['productInfo']['sku'] = (string)$sku;
		}

		$datalayer['product'][0]['category']['primaryCategory'] = esc_js($product_categories[0]->name);
		if ($product_categories[1]) {
			$datalayer['product'][0]['category']['subCategory1'] = esc_js($product_categories[1]->name);
		}

		$datalayer['product'][0]['price']['currency'] = get_woocommerce_currency();
		$datalayer['product'][0]['price']['price'] = (double)$product->get_price();
		$datalayer['product'][0]['price']['priceWithTax'] = $product->get_price_including_tax();
		$datalayer['product'][0]['price']['basePrice'] = $product->get_price_excluding_tax();

		if ($product->is_on_sale()) {
			$datalayer['product'][0]['price']['regular_unit_price'] = (double)$product->get_regular_price();
		}

		if ($product->get_stock_quantity()) {
			$datalayer['product'][0]['attributes']['stock'] = $product->get_stock_quantity();
		} else {
			$datalayer['product'][0]['attributes']['stock'] = $product->is_in_stock() ? 1 : 0;
		}
	}
 	add_action('woocommerce_before_single_product', 'woo_datalayer_single_product_details');

    do_action( 'woocommerce_after_single_product', 'woo_datalayer_single_product_details');



	function woo_datalayer_cart_details() {
		global $woocommerce, $wp, $datalayer;

		$datalayer['page']['category']['pageType'] = 'basket';

		$datalayer['cart']['price']['currency'] = get_woocommerce_currency();
		$datalayer['cart']['price']['basePrice'] = $woocommerce->cart->subtotal_ex_tax;
		$datalayer['cart']['price']['cartTotal'] = $woocommerce->cart->total;
		$datalayer['cart']['price']['priceWithTax'] = $woocommerce->cart->subtotal;
		$datalayer['cart']['price']['shipping'] = $woocommerce->cart->shipping_total;

		$datalayer['cart']['item'] = array();

		foreach ($woocommerce->cart->get_cart() as $item_key => $item) {
			$item_details = array();

			$item_details['productInfo']['productID'] = (string)$item['product_id'];
			$item_details['productInfo']['productName'] = esc_js($item['data']->post->post_title);
			$item_details['productInfo']['description'] = esc_js($item['data']->post->post_content);
			$item_details['productInfo']['productURL'] = esc_js($item['data']->get_permalink());

			$item_details['quantity'] = $item['quantity'];
			$item_details['price']['basePrice'] = $item['line_subtotal']/$item['quantity'];
			$item_details['price']['priceWithTax'] = $item['line_total']/$item['quantity'];
			$item_details['price']['currency'] = get_woocommerce_currency();

			$product_image_id = $item['data']->get_image_id();
			if ($product_image_id) {
				$item_details['productInfo']['productThumbnail'] = esc_js(woo_datalayer_get_image_src($product_image_id, 'shop_thumbnail'));
				$item_details['productInfo']['productImage'] = esc_js(woo_datalayer_get_image_src($product_image_id, 'full'));
			}

			$sku = $item['data']->get_sku();
			if (strlen($sku) > 0) {
				$item_details['productInfo']['sku'] = (string)$sku;
			}

			array_push($datalayer['cart']['item'], $item_details);
		}
	}
	do_action('woocommerce_after_cart', 'woo_datalayer_cart_details');

	function woo_datalayer_purchase_confirmation($order_id) {
		global $datalayer;
		$order = new WC_Order( $order_id );

		if ($order->status != 'failed') {
			// only display if the order succeeded
			$datalayer['page']['category']['pageType'] = 'confirmation';
			$datalayer['transaction']['transactionID'] = $order_id;
		}
	}
	add_action('woocommerce_thankyou', 'woo_datalayer_purchase_confirmation');

	function woo_datalayer_checkout() {
		global $datalayer;
		$datalayer['page']['category']['pageType'] = 'checkout';

	}
	add_action('woocommerce_after_checkout_form', 'woo_datalayer_checkout');

	function woo_datalayer_user_info() {
		if (is_user_logged_in()) {
			//if the user is logged in
			global $current_user, $datalayer;

			$datalayer['user'][0]['profile'][0]['profileInfo']['email'] = $current_user->user_email;
			if (strlen($current_user->user_firstname) > 0) {
				$name = $current_user->user_firstname;

				if (strlen($current_user->user_lastname) > 0) $name .= ' '.$current_user->user_lastname;

				$datalayer['user'][0]['profile'][0]['profileInfo']['userName'] = $name;
			}
		}
		woo_datalayer_print_datalayer_variable();
	}
	add_action('wp_head', 'woo_datalayer_user_info');

	function woo_datalayer_get_image_src($img_id, $img_size='full') {
		$image_details = wp_get_attachment_image_src($img_id, $img_size);
		return $image_details[0];
	}

	function woo_datalayer_print_datalayer_variable() {
		global $datalayer;

		echo '<script>',"\n";
		echo 'window.datalayer = window.datalayer || {};',"\n";
//		echo 'window.datalayer = ',json_encode($datalayer),"\n";
        echo 'dataLayer.push('.json_encode($datalayer).')';
		echo '</script>',"\n";

	}

//	function print_datalayer() {
//		global $datalayer;
//
//		echo '<script>',"\n";
//		echo 'window.dataLayer = window.dataLayer || {};',"\n";
//		echo 'dataLayer.push('.json_encode($datalayer).')';
//		echo '</script>',"\n";
//	}
//
//	add_action('wp_head', 'print_datalayer');



}
