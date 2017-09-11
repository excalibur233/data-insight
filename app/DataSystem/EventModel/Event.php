<?php

namespace DataInsight\DataSystem\EventModel;

use DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser;
use DB;
use Illuminate\Database\Eloquent\Model;

/**
 * DataInsight\DataSystem\EventModel\Event
 *
 * @property int $id
 * @property int $target_user_id
 * @property int $type_id
 * @property string $description
 * @property mixed $extra
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\DataInsight\DataSystem\EventModel\Attribute[] $attributes
 * @property-read \DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser $targetUser
 * @property-read \DataInsight\DataSystem\EventModel\EventType $type
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\Event whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\Event whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\Event whereTargetUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\Event whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\EventModel\Event whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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

    public static function queryCountPeriod($begin, $end, $interval = 'day')
    {
        if ($interval == 'day') {
            return DB::table('events')
                ->select(DB::raw('DATE(`created_at`), COUNT(`id`)'))
                ->whereRaw("`created_at` BETWEEN \"$begin\" AND \"$end\" GROUP BY DATE(`created_at`)")
                ->get();
        }
    }
}
