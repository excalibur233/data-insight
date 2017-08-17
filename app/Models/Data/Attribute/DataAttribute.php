<?php

namespace App\Models\Data\Attribute;

use App\Models\Data\User\Traits\BelongsToManyDataEvents;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DataAttribute
 * @package App\Models\Data\Attribute
 */
class DataAttribute extends Model
{
    use BelongsToManyDataEvents;
}
