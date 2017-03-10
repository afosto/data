<?php

use Afosto\Data\Models\Products\Product;
use Afosto\Data\Models\Products\Supplier;
use Afosto\Data\Models\Products\Item;

$product = new Product();
$product->weight = 10;

$product->supplier = new Supplier();
$product->supplier->id = 1;
$product->supplier->name = 'TestSupplier';

$item = new Item();
$item->setAttributes([
    'sku'    => 'TEST-SKU-234',
    'ean'    => '234554245',
    'prices' => [
        [
            'price_gross' => 23.54,
            'tax_class'   => [
                'id' => 2,
            ],
        ],
    ],
]);

$product->items[] = $item;

//Validate against the rules
$product->validate();

//Returns as array
print_r($product->getAttributes());
