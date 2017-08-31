<?php

namespace DataInsight\DataSystem\EventModel;

use Illuminate\Database\Eloquent\Model;

/**
 * DataInsight\DataSystem\EventModel\AttributeType
 *
 * @property int $id
 * @property string $name
 * @property string $label
 * @property string $description
 * @property mixed $extra
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\AttributeType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\AttributeType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\AttributeType whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\AttributeType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\AttributeType whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\AttributeType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\AttributeType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AttributeType extends Model
{
    //
}
