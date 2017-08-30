<?php

namespace DataInsight\Models\Data\Event;

use DataInsight\Models\Data\Attribute\Traits\BelongsToManyAttributes;
use DataInsight\Models\Data\User\Traits\BelongsToDataEventType;
use DataInsight\Models\Data\User\Traits\BelongsToDataUser;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DataEvent
 * @package DataInsight\Models\Data\Event
 */
class DataEvent extends Model
{
    use BelongsToDataEventType, BelongsToDataUser, BelongsToManyAttributes;
}
