<?php

namespace Afosto\Data\Models\Products;

use Afosto\Data\Components\Model;

/**
 * @property float      $price
 * @property float      $price_gross
 * @property float      $original_price
 * @property float      $original_price_gross
 * @property bool       $is_enabled
 * @property PriceGroup $price_group
 * @property TaxClass   $tax_class
 */
class Price extends Model {

    public function getRules() {
        return [
            ['price', 'float', false],
            ['price_gross', 'float', false],
            ['original_price', 'float', false],
            ['original_price_gross', 'float', false],
            ['is_enabled', 'bool', false],
            ['price_group', 'PriceGroup', false],
            ['tax_class', 'TaxClass', true],
        ];
    }

}