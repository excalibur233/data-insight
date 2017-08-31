<?php

namespace DataInsight\DataSystem\EventModel;

use Illuminate\Database\Eloquent\Model;

/**
 * DataInsight\DataSystem\EventModel\EventType
 *
 * @property int $id
 * @property string $name
 * @property string $label
 * @property string $description
 * @property mixed $extra
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\EventType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\EventType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\EventType whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\EventType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\EventType whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\EventType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\EventType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EventType extends Model
{
    //
}
