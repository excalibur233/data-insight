<?php

namespace DataInsight\DataSystem\EventModel;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function type()
    {
        return $this->belongsTo(AttributeType::class);
    }
}
