<?php

namespace Afosto\Data\Models\Products;

use Afosto\Data\Components\Model;

/**
 * @property integer $id
 * @property integer $is_default
 */
class Image extends Model {

    public function getRules() {
        return [
            ['id', 'integer', true],
            ['is_default', 'integer', true],
        ];
    }

}