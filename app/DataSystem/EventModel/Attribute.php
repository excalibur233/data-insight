<?php

namespace DataInsight\DataSystem\EventModel;

use Illuminate\Database\Eloquent\Model;

/**
 * DataInsight\DataSystem\EventModel\Attribute
 *
 * @property int $id
 * @property int $type_id
 * @property int $event_id
 * @property string $value
 * @property string $description
 * @property mixed $extra
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \DataInsight\DataSystem\EventModel\Event $event
 * @property-read \DataInsight\DataSystem\EventModel\AttributeType $type
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\Attribute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\Attribute whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\Attribute whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\Attribute whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\Attribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\Attribute whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\Attribute whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\Attribute whereValue($value)
 * @mixin \Eloquent
 */
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
