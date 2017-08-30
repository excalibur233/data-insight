<?php

namespace DataInsight\Models\Data\Attribute;

use DataInsight\Models\Data\User\Traits\BelongsToManyDataEvents;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DataAttribute
 * @package DataInsight\Models\Data\Attribute
 */
class DataAttribute extends Model
{
    use BelongsToManyDataEvents;
}
