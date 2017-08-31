<?php

namespace DataInsight\DataSystem\AnalyticObject\TargetUser;

use Illuminate\Database\Eloquent\Model;

/**
 * DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser
 *
 * @property int $id
 * @property string $distinct_id 系统分配的唯一ID
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
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereBirthYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereDistinctId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereFirstBrowserLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereFirstReferrer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereFirstReferrerHost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereFirstSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereFirstVisitTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereIsMember($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereLearnPurpose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereProvince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereRegisterChannel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereSignupTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereUserType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereUtmMatchingType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereUtmMedium($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser whereUtmSource($value)
 * @mixin \Eloquent
 */
class TargetUser extends Model
{
    //
}
