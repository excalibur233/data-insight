<?php

namespace App\Models\Data\User;

use App\Models\Data\Event\Traits\HasManyDataEvents;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DataUser
 *
 * @package App\Models\Data\User
 * @property int $id
 * @property string $identify_id 识别ID
 * @property string|null $mobile 手机号
 * @property string|null $email 邮箱
 * @property string|null $name 姓名
 * @property string|null $birth_year 出生年份
 * @property int|null $gender 性别 1男 0女 2未知
 * @property string|null $user_type 用户类型
 * @property int|null $is_member 是否会员
 * @property string|null $province 省
 * @property string|null $city 市
 * @property string|null $signup_time 注册时间
 * @property string|null $register_channel 注册渠道
 * @property string|null $utm_matching_type 渠道追踪匹配模式
 * @property string|null $utm_medium 广告系列媒介
 * @property string|null $utm_source 广告系列来源
 * @property string|null $first_referrer 首次前向地址
 * @property string|null $first_referrer_host 首次前向域名
 * @property string|null $first_visit_time 首次访问时间
 * @property string|null $first_source 首次访问来源
 * @property string|null $first_browser_language 浏览器语言
 * @property string|null $learn_purpose 学习目的
 * @property string|null $level 难度等级
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Data\Event\DataEvent[] $dataEvents
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereBirthYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereFirstBrowserLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereFirstReferrer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereFirstReferrerHost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereFirstSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereFirstVisitTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereIdentifyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereIsMember($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereLearnPurpose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereProvince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereRegisterChannel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereSignupTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereUserType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereUtmMatchingType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereUtmMedium($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\User\DataUser whereUtmSource($value)
 * @mixin \Eloquent
 */
class DataUser extends Model
{
    use HasManyDataEvents;
}
