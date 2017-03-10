<?php

namespace Afosto\Data\Models\Products;

use Afosto\Data\Components\Model;

/**
 * @property integer $id
 * @property integer $amount
 * @property string  $location
 */
class Warehouse extends Model {

    public function getRules() {
        return [
            ['id', 'integer', true],
            ['amount', 'integer', true],
            ['location', 'string', false],
        ];
    }

}