<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Jan 2018 13:43:17 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class XrelModelsSpare
 * 
 * @property int $id
 * @property int $model_id
 * @property int $spare_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class XrelModelsSpare extends Eloquent
{
	protected $casts = [
		'model_id' => 'int',
		'spare_id' => 'int'
	];
}
