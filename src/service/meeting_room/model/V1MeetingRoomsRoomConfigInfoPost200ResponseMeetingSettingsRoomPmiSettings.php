<?php

/**
 * 测试环境项目
 *
 * api测试专用
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\meeting_room\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingRoomsRoomConfigInfoPost200ResponseMeetingSettingsRoomPmiSettings implements ModelInterface, \JsonSerializable
{

    /**
     * 是否允许成员在主持人进会前入会。
     */
    protected $allowInBeforeHost = null;

    /**
     * 会议指定主持人 ID。
     */
    protected $hosts = null;

    /**
     * 成员入会静音设置。 0：关闭 1：开启 2：超过6人自动开启
     */
    protected $muteEnableTypeJoin = null;

    /**
     * 入会成员设置。 true：仅企业内部用户可入会 false：所有人可入会
     */
    protected $onlyEnterpriseUserAllowed = null;

    /**
     * 专属会议室密码，4-6位数字。
     */
    protected $roomPmiPsw = null;

    /**
     * 是否开启等候室。
     */
    protected $waitingRoom = null;

    public function __construct(
    ) {
    }

    public function allowInBeforeHost(bool $allowInBeforeHost): V1MeetingRoomsRoomConfigInfoPost200ResponseMeetingSettingsRoomPmiSettings {
        $this->allowInBeforeHost = $allowInBeforeHost;
        return $this;
    }

    public function getAllowInBeforeHost() {
        return $this->allowInBeforeHost;
    }

    public function setAllowInBeforeHost(bool $allowInBeforeHost) {
        $this->allowInBeforeHost = $allowInBeforeHost;
    }
    public function hosts(array $hosts): V1MeetingRoomsRoomConfigInfoPost200ResponseMeetingSettingsRoomPmiSettings {
        $this->hosts = $hosts;
        return $this;
    }

    public function getHosts() {
        return $this->hosts;
    }

    public function setHosts(array $hosts) {
        $this->hosts = $hosts;
    }
    public function muteEnableTypeJoin(int $muteEnableTypeJoin): V1MeetingRoomsRoomConfigInfoPost200ResponseMeetingSettingsRoomPmiSettings {
        $this->muteEnableTypeJoin = $muteEnableTypeJoin;
        return $this;
    }

    public function getMuteEnableTypeJoin() {
        return $this->muteEnableTypeJoin;
    }

    public function setMuteEnableTypeJoin(int $muteEnableTypeJoin) {
        $this->muteEnableTypeJoin = $muteEnableTypeJoin;
    }
    public function onlyEnterpriseUserAllowed(bool $onlyEnterpriseUserAllowed): V1MeetingRoomsRoomConfigInfoPost200ResponseMeetingSettingsRoomPmiSettings {
        $this->onlyEnterpriseUserAllowed = $onlyEnterpriseUserAllowed;
        return $this;
    }

    public function getOnlyEnterpriseUserAllowed() {
        return $this->onlyEnterpriseUserAllowed;
    }

    public function setOnlyEnterpriseUserAllowed(bool $onlyEnterpriseUserAllowed) {
        $this->onlyEnterpriseUserAllowed = $onlyEnterpriseUserAllowed;
    }
    public function roomPmiPsw(string $roomPmiPsw): V1MeetingRoomsRoomConfigInfoPost200ResponseMeetingSettingsRoomPmiSettings {
        $this->roomPmiPsw = $roomPmiPsw;
        return $this;
    }

    public function getRoomPmiPsw() {
        return $this->roomPmiPsw;
    }

    public function setRoomPmiPsw(string $roomPmiPsw) {
        $this->roomPmiPsw = $roomPmiPsw;
    }
    public function waitingRoom(bool $waitingRoom): V1MeetingRoomsRoomConfigInfoPost200ResponseMeetingSettingsRoomPmiSettings {
        $this->waitingRoom = $waitingRoom;
        return $this;
    }

    public function getWaitingRoom() {
        return $this->waitingRoom;
    }

    public function setWaitingRoom(bool $waitingRoom) {
        $this->waitingRoom = $waitingRoom;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_in_before_host' => 'bool',
        'hosts' => 'string[]',
        'mute_enable_type_join' => 'int',
        'only_enterprise_user_allowed' => 'bool',
        'room_pmi_psw' => 'string',
        'waiting_room' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allow_in_before_host' => null,
        'hosts' => null,
        'mute_enable_type_join' => 'int64',
        'only_enterprise_user_allowed' => null,
        'room_pmi_psw' => null,
        'waiting_room' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'allow_in_before_host' => false,
        'hosts' => false,
        'mute_enable_type_join' => false,
        'only_enterprise_user_allowed' => false,
        'room_pmi_psw' => false,
        'waiting_room' => false
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
        'allow_in_before_host' => 'allow_in_before_host',
        'hosts' => 'hosts',
        'mute_enable_type_join' => 'mute_enable_type_join',
        'only_enterprise_user_allowed' => 'only_enterprise_user_allowed',
        'room_pmi_psw' => 'room_pmi_psw',
        'waiting_room' => 'waiting_room'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_in_before_host' => 'setAllowInBeforeHost',
        'hosts' => 'setHosts',
        'mute_enable_type_join' => 'setMuteEnableTypeJoin',
        'only_enterprise_user_allowed' => 'setOnlyEnterpriseUserAllowed',
        'room_pmi_psw' => 'setRoomPmiPsw',
        'waiting_room' => 'setWaitingRoom'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_in_before_host' => 'getAllowInBeforeHost',
        'hosts' => 'getHosts',
        'mute_enable_type_join' => 'getMuteEnableTypeJoin',
        'only_enterprise_user_allowed' => 'getOnlyEnterpriseUserAllowed',
        'room_pmi_psw' => 'getRoomPmiPsw',
        'waiting_room' => 'getWaitingRoom'
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
            'allow_in_before_host' => $this->allowInBeforeHost,
            'hosts' => $this->hosts,
            'mute_enable_type_join' => $this->muteEnableTypeJoin,
            'only_enterprise_user_allowed' => $this->onlyEnterpriseUserAllowed,
            'room_pmi_psw' => $this->roomPmiPsw,
            'waiting_room' => $this->waitingRoom,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

