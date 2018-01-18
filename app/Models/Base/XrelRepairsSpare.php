<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Jan 2018 13:21:13 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class XrelRepairsSpare
 * 
 * @property int $id
 * @property int $repair_id
 * @property int $spare_id
 * @property int $user_id
 * @property int $order_no
 * @property string $ups_tracking_no
 * @property \Carbon\Carbon $shipped_at
 * @property \Carbon\Carbon $arrived_at
 * @property int $return_part_unused
 * @property int $return_part_doa
 * @property string $kgb
 * @property string $kbb
 * @property int $part_closed
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class XrelRepairsSpare extends Eloquent
{
	protected $casts = [
		'repair_id' => 'int',
		'spare_id' => 'int',
		'user_id' => 'int',
		'order_no' => 'int',
		'return_part_unused' => 'int',
		'return_part_doa' => 'int',
		'part_closed' => 'int'
	];

	protected $dates = [
		'shipped_at',
		'arrived_at'
	];
}
