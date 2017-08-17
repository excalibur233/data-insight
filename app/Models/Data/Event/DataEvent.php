<?php

namespace App\Models\Data\Event;

use App\Models\Data\Attribute\Traits\BelongsToManyAttributes;
use App\Models\Data\User\Traits\BelongsToDataEventType;
use App\Models\Data\User\Traits\BelongsToDataUser;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DataEvent
 * @package App\Models\Data\Event
 */
class DataEvent extends Model
{
    use BelongsToDataEventType, BelongsToDataUser, BelongsToManyAttributes;
}
