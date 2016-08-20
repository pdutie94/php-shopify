<?php
/**
 * Created by PhpStorm.
 * @author Tareq Mahmood <tareqtms@yahoo.com>
 * Created at 8/18/16 1:35 PM UTC+06:00
 *
 * @see https://help.shopify.com/api/reference/product_image Shopify API Reference for Product Image
 */

namespace PHPShopify;


class ProductImage extends ShopifyAPI
{
    /**
     * Key of the API Resource which is used to fetch data from request responses
     *
     * @var string
     */
    protected $resourceKey = 'image';
}