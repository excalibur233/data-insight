<?php

namespace App\Models\Data\Event;

use App\Models\Data\Event\Traits\BelongsToDataEventType;
use App\Models\Data\Event\Traits\BelongsToManyDataAttributes;
use App\Models\Data\User\Traits\BelongsToDataUser;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DataEvent
 *
 * @package App\Models\Data\Event
 * @property int $id
 * @property int|null $data_user_id 用户ID
 * @property string|null $data_user_identify_id 用户识别ID
 * @property int|null $data_event_type_id 事件类型
 * @property string|null $ip IP
 * @property string|null $lib_version sdk版本
 * @property string|null $lib sdk类型
 * @property string|null $app_version 应用版本
 * @property string|null $model 设备型号
 * @property string|null $manufacturer 设备制造商
 * @property string|null $screen_height 屏幕高度
 * @property string|null $screen_weight 屏幕宽度
 * @property string|null $carrier 运营商
 * @property string|null $network_type 网络类型
 * @property string|null $os 操作系统
 * @property string|null $os_version 操作系统版本
 * @property int|null $wifi 是否使用wifi 0.不是 1.是
 * @property string|null $is_login 是否登陆
 * @property string|null $is_first_day 是否首日访问 0.不是 1.是
 * @property string|null $is_first_time 是否首次访问 0.不是 1.是
 * @property string|null $country 国家
 * @property string|null $province 省份
 * @property string|null $city 城市
 * @property string|null $utm_medium 广告系列媒介
 * @property string|null $utm_source 广告系列来源
 * @property string|null $utm_matching_type 渠道追踪匹配模式
 * @property string|null $browser 浏览器
 * @property string|null $browser_version 浏览器版本
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Data\Attribute\DataAttribute[] $dataAttributes
 * @property-read \App\Models\Data\Event\DataEventType|null $dataEventType
 * @property-read \App\Models\Data\User\DataUser|null $dataUser
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereAppVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereBrowser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereBrowserVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereCarrier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereDataEventTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereDataUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereDataUserIdentifyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereIsFirstDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereIsFirstTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereIsLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereLib($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereLibVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereManufacturer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereNetworkType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereOs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereOsVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereProvince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereScreenHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereScreenWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereUtmMatchingType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereUtmMedium($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereUtmSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Event\DataEvent whereWifi($value)
 * @mixin \Eloquent
 */
class DataEvent extends Model
{
    use BelongsToDataEventType, BelongsToDataUser, BelongsToManyDataAttributes;
}
