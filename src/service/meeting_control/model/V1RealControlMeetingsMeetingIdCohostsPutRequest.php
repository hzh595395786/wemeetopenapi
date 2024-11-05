<?php

/**
 * 测试环境项目
 *
 * api测试专用
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\meeting_control\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1RealControlMeetingsMeetingIdCohostsPutRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 具体设置动作： true：设置联席主持人， false：撤销联席主持人
     * @deprecated
    protected $action;
    /**
     * 用户的终端设备类型： 0：PSTN 1：PC 2：Mac 3：Android 4：iOS 5：Web 6：iPad 7：Android Pad 8：小程序 9：voip、sip 设备 10：linux 20：Rooms for Touch Windows 21：Rooms for Touch MacOS 22：Rooms for Touch Android 30：Controller for Touch Windows 32：Controller for Touch Android 33：Controller for Touch iOS 说明：使用 ms_open_id 进行调用时，仅支持以上1-8的设备类型。
     * @deprecated
    protected $instanceid;
    /**
     * @deprecated
    protected $user;

    /**
     * 操作者 ID。 1：operator_id 必须与 operator_id_type 配合使用。根据 operator_id_type 的值，operator_id 代表不同类型。 2：接口输入参数如果需要传用户 ID 时，operator_id 和 uuid 不可以同时为空，两个参数如果都传了以 operator_id 为准。 3：如果 operator_id_type=2，operator_id 必须和公共参数的 openid 一致。
     */
    protected $operatorId = null;

    /**
     * 操作者 ID 的类型： 2：openid 4：ms_open_id
     */
    protected $operatorIdType = null;

    /**
     * 操作者用户唯一身份 ID，仅支持主持人，且只适用于单场会议。即将废弃，推荐使用ms_open_id。
     */
    protected $uuid = null;

    public function __construct(
        $action,
        $instanceid,
        $user,
    ) {
        $this->action = $action;
        $this->instanceid = $instanceid;
        $this->user = $user;
    }

    public function action(bool $action): V1RealControlMeetingsMeetingIdCohostsPutRequest {
        $this->action = $action;
        return $this;
    }

    public function getAction() {
        return $this->action;
    }

    public function setAction(bool $action) {
        $this->action = $action;
    }
    public function instanceid(int $instanceid): V1RealControlMeetingsMeetingIdCohostsPutRequest {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function getInstanceid() {
        return $this->instanceid;
    }

    public function setInstanceid(int $instanceid) {
        $this->instanceid = $instanceid;
    }
    public function operatorId(string $operatorId): V1RealControlMeetingsMeetingIdCohostsPutRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1RealControlMeetingsMeetingIdCohostsPutRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }
    public function user(\wemeet\openapi\service\meeting_control\model\V1RealControlMeetingsMeetingIdCohostsPutRequestUser $user): V1RealControlMeetingsMeetingIdCohostsPutRequest {
        $this->user = $user;
        return $this;
    }

    public function getUser() {
        return $this->user;
    }

    public function setUser(\wemeet\openapi\service\meeting_control\model\V1RealControlMeetingsMeetingIdCohostsPutRequestUser $user) {
        $this->user = $user;
    }
    public function uuid(string $uuid): V1RealControlMeetingsMeetingIdCohostsPutRequest {
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
        'action' => 'bool',
        'instanceid' => 'int',
        'operator_id' => 'string',
        'operator_id_type' => 'int',
        'user' => '\wemeet\openapi\service\meeting_control\model\V1RealControlMeetingsMeetingIdCohostsPutRequestUser',
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
        'action' => null,
        'instanceid' => 'int64',
        'operator_id' => null,
        'operator_id_type' => 'int64',
        'user' => null,
        'uuid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'action' => false,
        'instanceid' => false,
        'operator_id' => false,
        'operator_id_type' => false,
        'user' => false,
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
        'action' => 'action',
        'instanceid' => 'instanceid',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type',
        'user' => 'user',
        'uuid' => 'uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'instanceid' => 'setInstanceid',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType',
        'user' => 'setUser',
        'uuid' => 'setUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'instanceid' => 'getInstanceid',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType',
        'user' => 'getUser',
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
            'action' => $this->action,
            'instanceid' => $this->instanceid,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
            'user' => $this->user,
            'uuid' => $this->uuid,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

