<?php

namespace Afosto\Data\Models\Products;

use Afosto\Data\Components\Model;

/**
 * @property  integer    $total
 * @property Warehouse[] $warehouses
 */
class Inventory extends Model {

    public function getRules() {
        return [
            ['total', ' integer', false],
            ['warehouses', 'Warehouse[]', true],
        ];
    }

}