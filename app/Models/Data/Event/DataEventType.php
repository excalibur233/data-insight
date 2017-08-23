<?php

namespace App\Models\Data\Event;

use App\Models\Data\Attribute\Traits\BelongsToManyAttributes;
use App\Models\Data\Event\Traits\HasManyDataEvents;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DataEventType
 * @package App\Models\Data\Event
 */
class DataEventType extends Model
{
    use HasManyDataEvents, BelongsToManyAttributes;
}
