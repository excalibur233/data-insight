<?php

namespace App\Models\Data\Attribute\Traits;

use App\Models\Data\Attribute\DataAttribute;

/**
 * Class BelongsToManyAttributes
 * @package App\Models\Data\User\Traits
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