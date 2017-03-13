<?php

namespace Afosto\Data\Models\Products;

use Afosto\Data\Components\Model;

/**
 * @property integer $id
 * @property string  $name
 */
class MetaGroup extends Model {

    public function getRules() {
        return [
            ['id', 'integer', true],
        ];
    }
}