<?php

/**
 * 测试环境项目
 *
 * api测试专用
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\meetings\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdVirtualBackgroundPostRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 用户的终端设备类型： 0：PSTN 1：PC 2：Mac 3：Android 4：iOS 5：Web 6：iPad 7：Android Pad 8：小程序 9：voip、sip 设备 10：Linux 20：Rooms for Touch Windows 21：Rooms for Touch MacOS 22：Rooms for Touch Android 30：Controller for Touch Windows 32：Controller for Touch Android 33：Controller for Touch iOS
     * @deprecated
    protected $instanceid;
    /**
     * 操作者ID
     * @deprecated
    protected $operatorId;
    /**
     * 操作者ID类型。1-userid，2-opened
     * @deprecated
    protected $operatorIdType;
    /**
     * 背景生效类型。0-全部用户，1-部分用户
     * @deprecated
    protected $type;

    /**
     * 背景图片 url，尺寸大小为1920*1080，小于10M，jpg/png/jpeg 格式如果不传入则使用会议室默认虚拟背景。
     */
    protected $image = null;

    public function __construct(
        $instanceid,
        $operatorId,
        $operatorIdType,
        $type,
    ) {
        $this->instanceid = $instanceid;
        $this->operatorId = $operatorId;
        $this->operatorIdType = $operatorIdType;
        $this->type = $type;
    }

    public function image(string $image): V1MeetingsMeetingIdVirtualBackgroundPostRequest {
        $this->image = $image;
        return $this;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage(string $image) {
        $this->image = $image;
    }
    public function instanceid(int $instanceid): V1MeetingsMeetingIdVirtualBackgroundPostRequest {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function getInstanceid() {
        return $this->instanceid;
    }

    public function setInstanceid(int $instanceid) {
        $this->instanceid = $instanceid;
    }
    public function operatorId(string $operatorId): V1MeetingsMeetingIdVirtualBackgroundPostRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1MeetingsMeetingIdVirtualBackgroundPostRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }
    public function type(int $type): V1MeetingsMeetingIdVirtualBackgroundPostRequest {
        $this->type = $type;
        return $this;
    }

    public function getType() {
        return $this->type;
    }

    public function setType(int $type) {
        $this->type = $type;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'image' => 'string',
        'instanceid' => 'int',
        'operator_id' => 'string',
        'operator_id_type' => 'int',
        'type' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'image' => null,
        'instanceid' => 'int64',
        'operator_id' => null,
        'operator_id_type' => 'int64',
        'type' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'image' => false,
        'instanceid' => false,
        'operator_id' => false,
        'operator_id_type' => false,
        'type' => false
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
        'image' => 'image',
        'instanceid' => 'instanceid',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'image' => 'setImage',
        'instanceid' => 'setInstanceid',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'image' => 'getImage',
        'instanceid' => 'getInstanceid',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType',
        'type' => 'getType'
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
            'image' => $this->image,
            'instanceid' => $this->instanceid,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
            'type' => $this->type,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

