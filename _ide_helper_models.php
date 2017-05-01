<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\book
 *
 * @property string $name
 * @property string $ISBN
 * @property string $info
 * @property int $base_price
 * @property int $sale_price
 * @property string $publish_time
 * @property int $amount
 * @property string $brief
 * @property string $img
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\book whereAmount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\book whereBasePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\book whereBrief($value)
 * @method static \Illuminate\Database\Query\Builder|\App\book whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\book whereISBN($value)
 * @method static \Illuminate\Database\Query\Builder|\App\book whereImg($value)
 * @method static \Illuminate\Database\Query\Builder|\App\book whereInfo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\book whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\book wherePublishTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\book whereSalePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\book whereUpdatedAt($value)
 */
	class book extends \Eloquent {}
}

namespace App{
/**
 * App\Review
 *
 */
	class Review extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

