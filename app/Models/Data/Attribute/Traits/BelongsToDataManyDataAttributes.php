<?php

namespace App\Models\Data\Attribute\Traits;

use App\Models\Data\Attribute\DataAttribute;

/**
 * Class BelongsToDataManyAttributes
 * @package App\Models\Data\Attribute\Traits
 * @mixin \Illuminate\Database\Eloquent\Model
 */
trait BelongsToDataManyAttributes
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany|DataAttribute[]
     */
    public function dataAttributes()
    {
        return $this->belongsToMany(DataAttribute::class);
    }
}