<?php

namespace Afosto\Data\Models\Products;

use Afosto\Data\Components\Model;

/**
 * @property integer $id
 * @property string  $name
 */
class PriceGroup extends Model {

    public function getRules() {
        return [
            ['id', 'integer', true],
            ['name', 'string', false],
        ];
    }
}