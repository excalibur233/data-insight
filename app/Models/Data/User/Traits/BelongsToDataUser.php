<?php

namespace App\Models\Data\User\Traits;

use App\Models\Data\User\DataUser;

/**
 * Class BelongsToDataUser
 * @package App\Models\Data\User\Traits
 * @mixin \Illuminate\Database\Eloquent\Model
 */
trait BelongsToDataUser
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|DataUser
     */
    public function dataUser()
    {
        // TODO id and identify_id
        return $this->belongsTo(DataUser::class);
    }
}