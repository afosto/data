<?php

namespace Afosto\Data\Models\Products;

use Afosto\Data\Components\Model;

/**
 * @property integer $id
 */
class Image extends Model {

    public function getRules() {
        return [
            ['id', 'integer', true],
        ];
    }

}