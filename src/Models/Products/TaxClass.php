<?php

namespace Afosto\Data\Models\Products;

use Afosto\Data\Components\Model;

/**
 * @property integer $id
 */
class TaxClass extends Model {

    public function getRules() {
        return [
            ['id', 'integer', true],
        ];
    }

}