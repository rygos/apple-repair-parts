<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Jan 2018 13:43:17 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Repair
 * 
 * @property int $id
 * @property int $rminst
 * @property int $rminst_fc
 * @property string $gsx_case
 * @property int $user_id
 * @property int $user_assigned_id
 * @property string $serial
 * @property string $reported_issue
 * @property int $status_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class Repair extends Eloquent
{
	protected $casts = [
		'rminst' => 'int',
		'rminst_fc' => 'int',
		'user_id' => 'int',
		'user_assigned_id' => 'int',
		'status_id' => 'int'
	];
}
