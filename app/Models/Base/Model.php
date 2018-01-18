<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Jan 2018 13:43:17 +0000.
 */

namespace App\Models\Base;

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
 * @package App\Models\Base
 */
class Model extends Eloquent
{

}
