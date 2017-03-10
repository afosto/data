<?php

namespace Afosto\Data\Models\Products;

use Afosto\Data\Components\Model;

/**
 * @property string $key
 * @property string $value
 */
class Specification extends Model {

    public function getRules() {
        return [
            ['key', 'string', true],
            ['value', 'string', true],
        ];
    }

}