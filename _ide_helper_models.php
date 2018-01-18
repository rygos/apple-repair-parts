<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * Class PasswordReset
 *
 * @property string $email
 * @property string $token
 * @property \Carbon\Carbon $created_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset whereToken($value)
 */
	class PasswordReset extends \Eloquent {}
}

namespace App\Models{
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
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelRepairsSpare whereArrivedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelRepairsSpare whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelRepairsSpare whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelRepairsSpare whereKbb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelRepairsSpare whereKgb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelRepairsSpare whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelRepairsSpare wherePartClosed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelRepairsSpare whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelRepairsSpare whereReturnPartDoa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelRepairsSpare whereReturnPartUnused($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelRepairsSpare whereShippedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelRepairsSpare whereSpareId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelRepairsSpare whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelRepairsSpare whereUpsTrackingNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelRepairsSpare whereUserId($value)
 */
	class XrelRepairsSpare extends \Eloquent {}
}

namespace App\Models{
/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
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
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereConfiguration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereSerialCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereUpdatedAt($value)
 */
	class Model extends \Eloquent {}
}

namespace App\Models{
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
 * @package App\Models
 * @property-read \App\Models\Status $status
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StatusUpdate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StatusUpdate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StatusUpdate whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StatusUpdate whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StatusUpdate whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StatusUpdate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StatusUpdate whereUserId($value)
 */
	class StatusUpdate extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Status
 *
 * @property int $id
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereUpdatedAt($value)
 */
	class Status extends \Eloquent {}
}

namespace App\Models{
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
 * @package App\Models
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereApnDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereApnNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereSapDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereSapNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereUserId($value)
 */
	class Spare extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class PasswordReset
 *
 * @property string $email
 * @property string $token
 * @property \Carbon\Carbon $created_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\PasswordReset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\PasswordReset whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\PasswordReset whereToken($value)
 */
	class PasswordReset extends \Eloquent {}
}

namespace App\Models\Base{
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
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelRepairsSpare whereArrivedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelRepairsSpare whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelRepairsSpare whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelRepairsSpare whereKbb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelRepairsSpare whereKgb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelRepairsSpare whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelRepairsSpare wherePartClosed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelRepairsSpare whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelRepairsSpare whereReturnPartDoa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelRepairsSpare whereReturnPartUnused($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelRepairsSpare whereShippedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelRepairsSpare whereSpareId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelRepairsSpare whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelRepairsSpare whereUpsTrackingNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelRepairsSpare whereUserId($value)
 */
	class XrelRepairsSpare extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models\Base{
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
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model whereConfiguration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model whereSerialCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model whereUpdatedAt($value)
 */
	class Model extends \Eloquent {}
}

namespace App\Models\Base{
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
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\StatusUpdate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\StatusUpdate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\StatusUpdate whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\StatusUpdate whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\StatusUpdate whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\StatusUpdate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\StatusUpdate whereUserId($value)
 */
	class StatusUpdate extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Status
 *
 * @property int $id
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Status whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Status whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Status whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Status whereUpdatedAt($value)
 */
	class Status extends \Eloquent {}
}

namespace App\Models\Base{
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
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereApnDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereApnNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereSapDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereSapNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereUserId($value)
 */
	class Spare extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class XrelRepairsModel
 *
 * @property int $id
 * @property int $repair_id
 * @property int $model_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelRepairsModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelRepairsModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelRepairsModel whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelRepairsModel whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelRepairsModel whereUpdatedAt($value)
 */
	class XrelRepairsModel extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class XrelModelsSpare
 *
 * @property int $id
 * @property int $model_id
 * @property int $spare_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelModelsSpare whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelModelsSpare whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelModelsSpare whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelModelsSpare whereSpareId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\XrelModelsSpare whereUpdatedAt($value)
 */
	class XrelModelsSpare extends \Eloquent {}
}

namespace App\Models\Base{
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
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereGsxCase($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereReportedIssue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereRminst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereRminstFc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereUserAssignedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereUserId($value)
 */
	class Repair extends \Eloquent {}
}

namespace App\Models{
/**
 * Class XrelRepairsModel
 *
 * @property int $id
 * @property int $repair_id
 * @property int $model_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelRepairsModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelRepairsModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelRepairsModel whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelRepairsModel whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelRepairsModel whereUpdatedAt($value)
 */
	class XrelRepairsModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\XrelModelsSpare
 *
 * @property int $id
 * @property int $model_id
 * @property int $spare_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelModelsSpare whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelModelsSpare whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelModelsSpare whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelModelsSpare whereSpareId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\XrelModelsSpare whereUpdatedAt($value)
 */
	class XrelModelsSpare extends \Eloquent {}
}

namespace App\Models{
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
 * @package App\Models
 * @property-read \App\Models\Status $status
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\StatusUpdate[] $status_updates
 * @property-read \App\Models\User $user
 * @property-read \App\Models\User $user_assigned
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereGsxCase($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereReportedIssue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereRminst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereRminstFc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereUserAssignedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereUserId($value)
 */
	class Repair extends \Eloquent {}
}

