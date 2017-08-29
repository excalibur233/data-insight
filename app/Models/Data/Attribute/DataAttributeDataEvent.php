<?php

namespace App\Models\Data\Attribute;

use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Data\Attribute\DataAttributeDataEvent
 *
 * @property int $id
 * @property int $data_event_id 元事件id
 * @property int $data_attribute_id 元属性类型id
 * @property int $data_attribute_value
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Attribute\DataAttributeDataEvent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Attribute\DataAttributeDataEvent whereDataAttributeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Attribute\DataAttributeDataEvent whereDataAttributeValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Attribute\DataAttributeDataEvent whereDataEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Attribute\DataAttributeDataEvent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Attribute\DataAttributeDataEvent whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $data_event_type_id 事件类型ID
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Attribute\DataAttributeDataEvent whereDataEventTypeId($value)
 */
class DataAttributeDataEvent extends Model
{
}
