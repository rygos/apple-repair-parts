<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Jan 2018 13:19:16 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Spare
 * 
 * @property int $id
 * @property string $apn_no
 * @property string $apn_desc
 * @property int $sap_no
 * @property string $sap_desc
 * @property int $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Spare extends Eloquent
{
	protected $casts = [
		'sap_no' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'apn_no',
		'apn_desc',
		'sap_no',
		'sap_desc',
		'user_id'
	];
}
