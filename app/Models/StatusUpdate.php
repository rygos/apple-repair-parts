<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Jan 2018 13:19:16 +0000.
 */

namespace App\Models;

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
 * @package App\Models
 */
class StatusUpdate extends Eloquent
{
	protected $casts = [
		'user_id' => 'int',
		'status_id' => 'int',
		'repair_id' => 'int'
	];

	protected $fillable = [
		'message',
		'user_id',
		'status_id',
		'repair_id'
	];

	public function user(){
	    return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function status(){
	    return $this->hasOne('App\Models\Status', 'id', 'status_id');
    }
}
