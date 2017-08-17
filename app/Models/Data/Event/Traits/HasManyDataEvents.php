<?php

namespace App\Models\Data\Event\Traits;

use App\Models\Data\Event\DataEvent;

/**
 * Class HasManyDataEvents
 * @package App\Models\Data\Event\Traits
 * @mixin \Illuminate\Database\Eloquent\Model
 */
trait HasManyDataEvents
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|DataEvent[]
     */
    public function dataEvents()
    {
        return $this->hasMany(DataEvent::class);
    }
}