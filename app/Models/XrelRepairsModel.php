<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Jan 2018 13:19:16 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class XrelRepairsModel
 * 
 * @property int $id
 * @property int $repair_id
 * @property int $model_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class XrelRepairsModel extends Eloquent
{
	protected $table = 'xrel_repairs_model';

	protected $casts = [
		'repair_id' => 'int',
		'model_id' => 'int'
	];

	protected $fillable = [
		'repair_id',
		'model_id'
	];
}
