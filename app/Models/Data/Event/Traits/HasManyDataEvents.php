<?php

namespace DataInsight\Models\Data\Event\Traits;

use DataInsight\Models\Data\Event\DataEvent;

/**
 * Class HasManyDataEvents
 * @package DataInsight\Models\Data\Event\Traits
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