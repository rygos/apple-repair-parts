<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Jan 2018 13:21:13 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class StatusUpdate
 * 
 * @property int $id
 * @property string $message
 * @property int $user_id
 * @property int $status_id
 * @property int $repair_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class StatusUpdate extends Eloquent
{
	protected $casts = [
		'user_id' => 'int',
		'status_id' => 'int',
		'repair_id' => 'int'
	];
}
