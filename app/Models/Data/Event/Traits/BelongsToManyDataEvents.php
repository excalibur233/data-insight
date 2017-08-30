<?php

namespace DataInsight\Models\Data\User\Traits;

use DataInsight\Models\Data\Event\DataEvent;


/**
 * Class BelongsToManyDataEvents
 * @package DataInsight\Models\Data\User\Traits
 * @mixin \Illuminate\Database\Eloquent\Model
 */
trait BelongsToManyDataEvents
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany|DataEvent[]
     */
    public function dataEvents()
    {
        return $this->belongsToMany(DataEvent::class);
    }
}