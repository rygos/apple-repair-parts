<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Jan 2018 13:19:16 +0000.
 */

namespace App\Models;

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
 * @package App\Models
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

	protected $fillable = [
		'rminst',
		'rminst_fc',
		'gsx_case',
		'user_id',
		'user_assigned_id',
		'serial',
		'reported_issue',
		'status_id'
	];

	public function status(){
	    return $this->hasOne('App\Models\Status', 'id', 'status_id');
    }

    public function user(){
	    return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function user_assigned(){
	    return $this->hasOne('App\Models\User', 'id', 'user_assigned_id');
    }
}
