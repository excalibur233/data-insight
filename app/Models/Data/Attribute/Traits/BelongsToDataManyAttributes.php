<?php

namespace DataInsight\Models\Data\Attribute\Traits;

use DataInsight\Models\Data\Attribute\DataAttribute;

/**
 * Class BelongsToManyAttributes
 * @package DataInsight\Models\Data\User\Traits
 * @mixin \Illuminate\Database\Eloquent\Model
 */
trait BelongsToManyAttributes
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany|DataAttribute[]
     */
    public function dataAttributes()
    {
        return $this->belongsToMany(DataAttribute::class);
    }
}