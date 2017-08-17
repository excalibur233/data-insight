<?php

namespace App\Models\Data\User;

use App\Models\Data\Event\Traits\HasManyDataEvents;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DataUser
 * @package App\Models\Data\User
 */
class DataUser extends Model
{
    use HasManyDataEvents;
}
