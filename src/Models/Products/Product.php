<?php

namespace Afosto\Data\Models\Products;

use Afosto\Data\Components\Model;

/**
 * @property integer         $id
 * @property integer         $weight
 * @property float           $cost
 * @property bool            $is_tracking_inventory
 * @property \DateTime       $created_at
 * @property \DateTime       $updated_at
 * @property Ledger          $ledger
 * @property Supplier        $supplier
 * @property Descriptor[]    $descriptor
 * @property Item[]          $items
 * @property Specification[] $specifications
 * @property Image[]         $images
 * @property Collection[]    $collections
 * @property Setting[]       $settings
 */
class Product extends Model {

    public function getRules() {
        return [
            ['id', 'integer', false],
            ['weight', 'integer', true],
            ['cost', 'float', false],
            ['is_tracking_inventory', 'bool', false],
            ['created_at', '\DateTime', false],
            ['updated_at', '\DateTime', false],
            ['ledger', 'Ledger', false],
            ['supplier', 'Supplier', false],
            ['descriptor', 'Descriptor[]', true],
            ['items', 'Item[]', true],
            ['specifications', 'Specification[]', false],
            ['images', 'Image[]', false],
            ['collections', 'Collection[]', false],
            ['settings', 'Setting[]', false],
        ];
    }
}