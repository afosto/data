<?php

namespace Afosto\Data\Models\Products;

use Afosto\Data\Components\Model;

/**
 * @property integer   $id
 * @property string    $ean
 * @property string    $sku
 * @property \DateTime $created_at
 * @property \DateTime $updated_at
 * @property Price[]   $prices
 * @property Option[]  $options
 * @property Inventory $inventory
 */
class Item extends Model {

    public function getRules() {
        return [
            ['id', 'integer', false],
            ['ean', 'string', true, 13],
            ['sku', 'string', true],
            ['created_at', '\DateTime', false],
            ['updated_at', '\DateTime', false],
            ['prices', 'Price[]', true],
            ['options', 'Option[]', false],
            ['inventory', 'Inventory', false],
        ];
    }

}