<?php

namespace Afosto\Data\Models\Products;

use Afosto\Data\Components\Model;

/**
 * @property string    $name
 * @property string    $short_description
 * @property string    $description
 * @property MetaGroup $meta_group
 * @property Seo       $seo
 */
class Descriptor extends Model {

    /**
     * Required, the model rules
     *
     * @return mixed
     */
    public function getRules() {
        return [
            ['name', 'string', true],
            ['short_description', 'string', false],
            ['description', 'string', false],
            ['meta_group', 'MetaGroup', false],
            ['seo', 'Seo', false],
        ];
    }
}