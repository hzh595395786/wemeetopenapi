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


class V1RealControlMeetingsMeetingIdKickoutPutRequestUsersInner implements ModelInterface, \JsonSerializable
{
    /**
     * 用户的终端设备类型： 1：PC 2：Mac 3：Android 4：iOS 5：Web 6：iPad 7：Android Pad 8：小程序 9：voip、sip 设备 10：linux 20：Rooms for Touch Windows 21：Rooms for Touch Mac 22：Rooms for Touch Android 30：Controller for Touch Windows 32：Controller for Touch Android 33：Controller for Touch Iphone
     * @deprecated
    protected $instanceid;

    /**
     * 用户ID，根据to_operator_id_type的值，使用不同的类型
     */
    protected $toOperatorId = null;

    /**
     * 用户ID的类型： 4: ms_open_id
     */
    protected $toOperatorIdType = null;

    /**
     * 用户的唯一标识uuid
     */
    protected $uuid = null;

    public function __construct(
        $instanceid,
    ) {
        $this->instanceid = $instanceid;
    }

    public function instanceid(int $instanceid): V1RealControlMeetingsMeetingIdKickoutPutRequestUsersInner {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function getInstanceid() {
        return $this->instanceid;
    }

    public function setInstanceid(int $instanceid) {
        $this->instanceid = $instanceid;
    }
    public function toOperatorId(string $toOperatorId): V1RealControlMeetingsMeetingIdKickoutPutRequestUsersInner {
        $this->toOperatorId = $toOperatorId;
        return $this;
    }

    public function getToOperatorId() {
        return $this->toOperatorId;
    }

    public function setToOperatorId(string $toOperatorId) {
        $this->toOperatorId = $toOperatorId;
    }
    public function toOperatorIdType(int $toOperatorIdType): V1RealControlMeetingsMeetingIdKickoutPutRequestUsersInner {
        $this->toOperatorIdType = $toOperatorIdType;
        return $this;
    }

    public function getToOperatorIdType() {
        return $this->toOperatorIdType;
    }

    public function setToOperatorIdType(int $toOperatorIdType) {
        $this->toOperatorIdType = $toOperatorIdType;
    }
    public function uuid(string $uuid): V1RealControlMeetingsMeetingIdKickoutPutRequestUsersInner {
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
        'instanceid' => 'int',
        'to_operator_id' => 'string',
        'to_operator_id_type' => 'int',
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
        'instanceid' => 'int64',
        'to_operator_id' => null,
        'to_operator_id_type' => 'int64',
        'uuid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'instanceid' => false,
        'to_operator_id' => false,
        'to_operator_id_type' => false,
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
        'instanceid' => 'instanceid',
        'to_operator_id' => 'to_operator_id',
        'to_operator_id_type' => 'to_operator_id_type',
        'uuid' => 'uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'instanceid' => 'setInstanceid',
        'to_operator_id' => 'setToOperatorId',
        'to_operator_id_type' => 'setToOperatorIdType',
        'uuid' => 'setUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'instanceid' => 'getInstanceid',
        'to_operator_id' => 'getToOperatorId',
        'to_operator_id_type' => 'getToOperatorIdType',
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
            'instanceid' => $this->instanceid,
            'to_operator_id' => $this->toOperatorId,
            'to_operator_id_type' => $this->toOperatorIdType,
            'uuid' => $this->uuid,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}
