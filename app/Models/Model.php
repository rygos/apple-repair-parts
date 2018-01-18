<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Jan 2018 13:19:16 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Model
 * 
 * @property int $id
 * @property string $type
 * @property string $model
 * @property string $configuration
 * @property string $serial_code
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Model extends Eloquent
{
	protected $fillable = [
		'type',
		'model',
		'configuration',
		'serial_code'
	];
}
