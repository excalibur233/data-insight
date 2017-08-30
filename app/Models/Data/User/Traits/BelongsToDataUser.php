<?php

namespace DataInsight\Models\Data\User\Traits;

use DataInsight\Models\Data\User\DataUser;

/**
 * Class BelongsToDataUser
 * @package DataInsight\Models\Data\User\Traits
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