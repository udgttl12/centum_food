<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\FoodCalendar
 *
 * @property int $id
 * @property string $date
 * @property string $food 음식 이름
 * @property string $content 내용
 * @property string|null $comment 코멘트
 * @property int $created_by 작성자
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\FoodCalendarFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodCalendar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FoodCalendar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FoodCalendar query()
 * @method static \Illuminate\Database\Eloquent\Builder|FoodCalendar whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodCalendar whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodCalendar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodCalendar whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodCalendar whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodCalendar whereFood($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodCalendar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodCalendar whereUpdatedAt($value)
 */
	class FoodCalendar extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Restaurant
 *
 * @property int $id
 * @property string $name 음식점 이름
 * @property string $category 카테고리
 * @property string|null $branch 지점명
 * @property string $address 주소
 * @property string|null $etc 기타 정보
 * @property int $closed 폐점 여부
 * @property int $created_by 작성자
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereBranch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereClosed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereEtc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereUpdatedAt($value)
 */
	class Restaurant extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

