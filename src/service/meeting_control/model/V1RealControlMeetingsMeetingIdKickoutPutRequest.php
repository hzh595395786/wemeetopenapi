<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.0
 */
namespace wemeet\openapi\service\meeting_control\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1RealControlMeetingsMeetingIdKickoutPutRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 移出后是否允许再次入会： true：允许再次入会 false：不允许
    * 类型：
     */
    protected $allowRejoin;
    /**
     * 用户的终端设备类型： 0：PSTN 1：PC 2：Mac 3：Android 4：iOS 5：Web 6：iPad 7：Android Pad 8：小程序 9：voip、sip 设备 10：linux 20：Rooms for Touch Windows 21：Rooms for Touch MacOS 22：Rooms for Touch Android 30：Controller for Touch Windows 32：Controller for Touch Android 33：Controller for Touch iOS
    * 类型：
     */
    protected $instanceid;
    /**
     * 被操作用户对象信息列表
    * 类型：V1RealControlMeetingsMeetingIdKickoutPutRequestUsersInner
     */
    protected $users;

    /**
     * 操作者 ID。 1：operator_id 必须与 operator_id_type 配合使用。根据 operator_id_type 的值，operator_id 代表不同类型。 2：接口输入参数如果需要传用户 ID 时，operator_id 和 uuid 不可以同时为空，两个参数如果都传了以 operator_id 为准。 3：如果 operator_id_type=2，operator_id 必须和公共参数的 openid 一致。
    * 类型：string
     */
    protected $operatorId = null;

    /**
     * 操作者ID的类型：2:openid 4: ms_open_id
    * 类型：int
     */
    protected $operatorIdType = null;

    /**
     * 移出原因说明。当用户设备为 MRA 时，该参数必须填写移出原因。
    * 类型：string
     */
    protected $reason = null;

    /**
     * 操作者用户唯一身份 ID，仅支持主持人和联席主持人，且只适用于单场会议。即将废弃，推荐使用ms_open_id。
    * 类型：string
     */
    protected $uuid = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['allow_rejoin'])) {
            $this->allowRejoin = $jsonArray['allow_rejoin'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter allow_rejoin');
        }
        if (isset($jsonArray['instanceid'])) {
            $this->instanceid = $jsonArray['instanceid'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter instanceid');
        }
        if (isset($jsonArray['users'])) {
            $this->users = $jsonArray['users'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter users');
        }
        if (isset($jsonArray['operator_id'])) {
            $this->operatorId = $jsonArray['operator_id'];
        }
        if (isset($jsonArray['operator_id_type'])) {
            $this->operatorIdType = $jsonArray['operator_id_type'];
        }
        if (isset($jsonArray['reason'])) {
            $this->reason = $jsonArray['reason'];
        }
        if (isset($jsonArray['uuid'])) {
            $this->uuid = $jsonArray['uuid'];
        }
    }

    public function allowRejoin(bool $allowRejoin): V1RealControlMeetingsMeetingIdKickoutPutRequest {
        $this->allowRejoin = $allowRejoin;
        return $this;
    }

    public function getAllowRejoin() {
        return $this->allowRejoin;
    }

    public function setAllowRejoin(bool $allowRejoin) {
        $this->allowRejoin = $allowRejoin;
    }
    public function instanceid(int $instanceid): V1RealControlMeetingsMeetingIdKickoutPutRequest {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function getInstanceid() {
        return $this->instanceid;
    }

    public function setInstanceid(int $instanceid) {
        $this->instanceid = $instanceid;
    }
    public function operatorId(string $operatorId): V1RealControlMeetingsMeetingIdKickoutPutRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1RealControlMeetingsMeetingIdKickoutPutRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }
    public function reason(string $reason): V1RealControlMeetingsMeetingIdKickoutPutRequest {
        $this->reason = $reason;
        return $this;
    }

    public function getReason() {
        return $this->reason;
    }

    public function setReason(string $reason) {
        $this->reason = $reason;
    }
    public function users(array $users): V1RealControlMeetingsMeetingIdKickoutPutRequest {
        $this->users = $users;
        return $this;
    }

    public function getUsers() {
        return $this->users;
    }

    public function setUsers(array $users) {
        $this->users = $users;
    }
    public function uuid(string $uuid): V1RealControlMeetingsMeetingIdKickoutPutRequest {
        $this->uuid = $uuid;
        return $this;
    }

    public function getUuid() {
        return $this->uuid;
    }

    public function setUuid(string $uuid) {
        $this->uuid = $uuid;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_rejoin' => 'bool',
        'instanceid' => 'int',
        'operator_id' => 'string',
        'operator_id_type' => 'int',
        'reason' => 'string',
        'users' => '\wemeet\openapi\service\meeting_control\model\V1RealControlMeetingsMeetingIdKickoutPutRequestUsersInner[]',
        'uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allow_rejoin' => null,
        'instanceid' => 'int64',
        'operator_id' => null,
        'operator_id_type' => 'int64',
        'reason' => null,
        'users' => null,
        'uuid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'allow_rejoin' => false,
        'instanceid' => false,
        'operator_id' => false,
        'operator_id_type' => false,
        'reason' => false,
        'users' => false,
        'uuid' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'allow_rejoin' => 'allow_rejoin',
        'instanceid' => 'instanceid',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type',
        'reason' => 'reason',
        'users' => 'users',
        'uuid' => 'uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_rejoin' => 'setAllowRejoin',
        'instanceid' => 'setInstanceid',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType',
        'reason' => 'setReason',
        'users' => 'setUsers',
        'uuid' => 'setUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_rejoin' => 'getAllowRejoin',
        'instanceid' => 'getInstanceid',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType',
        'reason' => 'getReason',
        'users' => 'getUsers',
        'uuid' => 'getUuid'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    public function jsonSerialize(): mixed {
        $data = [
            'allow_rejoin' => $this->allowRejoin,
            'instanceid' => $this->instanceid,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
            'reason' => $this->reason,
            'users' => $this->users,
            'uuid' => $this->uuid,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

