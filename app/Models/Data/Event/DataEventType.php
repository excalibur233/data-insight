<?php

namespace App\Models\Data\Event;

use App\Models\Data\Event\Traits\BelongsToManyDataAttributes;
use App\Models\Data\Event\Traits\HasManyDataEvents;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DataEventType
 *
 * @package App\Models\Data\Event
 * @mixin \Eloquent
 * @property int $id
 * @property string $data_event_type_name 事件类型
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Data\Attribute\DataAttribute[] $dataAttributes
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Data\Event\DataEvent[] $dataEvents
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEventType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEventType whereDataEventTypeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEventType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEventType whereUpdatedAt($value)
 * @property string $data_event_type_name_cn 事件类型-中文
 * @property string $data_event_name_description 事件类型描述
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEventType whereDataEventNameDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEventType whereDataEventTypeNameCn($value)
 */
class DataEventType extends Model
{
    use HasManyDataEvents, BelongsToManyDataAttributes;
}
