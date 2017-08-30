<?php

namespace DataInsight\Models\Data\Event\Traits;

use DataInsight\Models\Data\Attribute\DataAttribute;

/**
 * Class BelongsToManyDataAttributes
 * @package DataInsight\Models\Data\Event\Traits
 * @mixin \Illuminate\Database\Eloquent\Model
 */
trait BelongsToManyDataAttributes
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany|DataAttribute[]
     */
    public function dataAttributes()
    {
        return $this->belongsToMany(DataAttribute::class);
    }
}