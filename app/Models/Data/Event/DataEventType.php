<?php

namespace DataInsight\Models\Data\Event;

use DataInsight\Models\Data\Attribute\Traits\BelongsToManyAttributes;
use DataInsight\Models\Data\Event\Traits\HasManyDataEvents;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DataEventType
 * @package DataInsight\Models\Data\Event
 */
class DataEventType extends Model
{
    use HasManyDataEvents, BelongsToManyAttributes;
}
