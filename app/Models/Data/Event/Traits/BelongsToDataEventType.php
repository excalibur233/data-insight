<?php

namespace App\Models\Data\User\Traits;

use App\Models\Data\Event\DataEventType;

/**
 * Class BelongsToDataEventType
 * @package App\Models\Data\User\Traits
 * @mixin \Illuminate\Database\Eloquent\Model
 */
trait BelongsToDataEventType
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|DataEventType
     */
    public function dataEventType()
    {
        return $this->belongsTo(DataEventType::class);
    }

    /**
     * @return mixed
     */
    public function getDataEventTypeName()
    {

        return $this->dataEventType()->data_event_type_name;

    }
}