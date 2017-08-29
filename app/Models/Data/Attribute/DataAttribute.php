<?php

namespace App\Models\Data\Attribute;

use App\Models\Data\Event\Traits\BelongsToManyDataEvents;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DataAttribute
 *
 * @package App\Models\Data\Attribute
 * @property int $id
 * @property string $attribute_name 属性类型
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Data\Event\DataEvent[] $dataEvents
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Attribute\DataAttribute whereAttributeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Attribute\DataAttribute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Attribute\DataAttribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Attribute\DataAttribute whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $data_attribute_name 属性类型
 * @property string $data_attribute_name_cn 属性中文名称
 * @property string $data_attribute_name_description 属性描述
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Attribute\DataAttribute whereDataAttributeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Attribute\DataAttribute whereDataAttributeNameCn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Attribute\DataAttribute whereDataAttributeNameDescription($value)
 */
class DataAttribute extends Model
{
    use BelongsToManyDataEvents;

    protected $fillable = ['attribute_name'];
}
