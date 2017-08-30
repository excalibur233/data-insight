<?php

namespace DataInsight\Models\Data\User;

use DataInsight\Models\Data\Event\Traits\HasManyDataEvents;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DataUser
 * @package DataInsight\Models\Data\User
 */
class DataUser extends Model
{
    use HasManyDataEvents;
}
