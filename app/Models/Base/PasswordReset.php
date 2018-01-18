<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Jan 2018 13:43:17 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PasswordReset
 * 
 * @property string $email
 * @property string $token
 * @property \Carbon\Carbon $created_at
 *
 * @package App\Models\Base
 */
class PasswordReset extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;
}
