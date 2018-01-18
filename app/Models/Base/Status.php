<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Jan 2018 13:21:13 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Status
 * 
 * @property int $id
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class Status extends Eloquent
{
	protected $table = 'status';
}
