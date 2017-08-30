<?php

namespace DataInsight\DataSystem\EventModel;

use DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function targetUser()
    {
        return $this->belongsTo(TargetUser::class);
    }

    public function attributes()
    {
        return $this->hasMany(Attribute::class);
    }

    public function type()
    {
        return $this->belongsTo(EventType::class);
    }
}
