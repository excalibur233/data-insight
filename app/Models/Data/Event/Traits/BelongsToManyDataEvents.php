<?php

namespace App\Models\Data\User\Traits;

use App\Models\Data\Event\DataEvent;


/**
 * Class BelongsToManyDataEvents
 * @package App\Models\Data\User\Traits
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