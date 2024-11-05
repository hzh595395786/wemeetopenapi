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


class V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo implements ModelInterface, \JsonSerializable
{

    /**
     * 激活时间
     */
    protected $activeTime = null;

    /**
     * 摄像头型号
     */
    protected $cameraModel = null;

    /**
     * CPU信息
     */
    protected $cpuInfo = null;

    /**
     * CPU最大占用率
     */
    protected $cpuUsage = null;

    /**
     * 设备型号
     */
    protected $deviceModel = null;

    /**
     * 是否开启视频镜像
     */
    protected $enableVideoMirror = null;

    /**
     * 厂家
     */
    protected $factory = null;

    /**
     * 固件版本
     */
    protected $firmwareVersion = null;

    /**
     * GPU信息
     */
    protected $gpuInfo = null;

    /**
     * 健康状况
     */
    protected $healthStatus = null;

    /**
     * ip地址
     */
    protected $ip = null;

    /**
     * MAC地址
     */
    protected $mac = null;

    /**
     * 会议室状态
     */
    protected $meetingRoomStatus = null;

    /**
     * 内存信息
     */
    protected $memoryInfo = null;

    /**
     * 麦克风信息
     */
    protected $microphoneInfo = null;

    /**
     * 显示器刷新率
     */
    protected $monitorFrequency = null;

    /**
     * 网络类型
     */
    protected $netType = null;

    /**
     * Rooms版本
     */
    protected $roomsVersion = null;

    /**
     * 序列号
     */
    protected $sn = null;

    /**
     * 扬声器信息
     */
    protected $speakerInfo = null;

    /**
     * 设备系统
     */
    protected $systemType = null;

    public function __construct(
    ) {
    }

    public function activeTime(string $activeTime): V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo {
        $this->activeTime = $activeTime;
        return $this;
    }

    public function getActiveTime() {
        return $this->activeTime;
    }

    public function setActiveTime(string $activeTime) {
        $this->activeTime = $activeTime;
    }
    public function cameraModel(string $cameraModel): V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo {
        $this->cameraModel = $cameraModel;
        return $this;
    }

    public function getCameraModel() {
        return $this->cameraModel;
    }

    public function setCameraModel(string $cameraModel) {
        $this->cameraModel = $cameraModel;
    }
    public function cpuInfo(string $cpuInfo): V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo {
        $this->cpuInfo = $cpuInfo;
        return $this;
    }

    public function getCpuInfo() {
        return $this->cpuInfo;
    }

    public function setCpuInfo(string $cpuInfo) {
        $this->cpuInfo = $cpuInfo;
    }
    public function cpuUsage(string $cpuUsage): V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo {
        $this->cpuUsage = $cpuUsage;
        return $this;
    }

    public function getCpuUsage() {
        return $this->cpuUsage;
    }

    public function setCpuUsage(string $cpuUsage) {
        $this->cpuUsage = $cpuUsage;
    }
    public function deviceModel(string $deviceModel): V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo {
        $this->deviceModel = $deviceModel;
        return $this;
    }

    public function getDeviceModel() {
        return $this->deviceModel;
    }

    public function setDeviceModel(string $deviceModel) {
        $this->deviceModel = $deviceModel;
    }
    public function enableVideoMirror(bool $enableVideoMirror): V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo {
        $this->enableVideoMirror = $enableVideoMirror;
        return $this;
    }

    public function getEnableVideoMirror() {
        return $this->enableVideoMirror;
    }

    public function setEnableVideoMirror(bool $enableVideoMirror) {
        $this->enableVideoMirror = $enableVideoMirror;
    }
    public function factory(string $factory): V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo {
        $this->factory = $factory;
        return $this;
    }

    public function getFactory() {
        return $this->factory;
    }

    public function setFactory(string $factory) {
        $this->factory = $factory;
    }
    public function firmwareVersion(string $firmwareVersion): V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo {
        $this->firmwareVersion = $firmwareVersion;
        return $this;
    }

    public function getFirmwareVersion() {
        return $this->firmwareVersion;
    }

    public function setFirmwareVersion(string $firmwareVersion) {
        $this->firmwareVersion = $firmwareVersion;
    }
    public function gpuInfo(string $gpuInfo): V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo {
        $this->gpuInfo = $gpuInfo;
        return $this;
    }

    public function getGpuInfo() {
        return $this->gpuInfo;
    }

    public function setGpuInfo(string $gpuInfo) {
        $this->gpuInfo = $gpuInfo;
    }
    public function healthStatus(string $healthStatus): V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo {
        $this->healthStatus = $healthStatus;
        return $this;
    }

    public function getHealthStatus() {
        return $this->healthStatus;
    }

    public function setHealthStatus(string $healthStatus) {
        $this->healthStatus = $healthStatus;
    }
    public function ip(string $ip): V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo {
        $this->ip = $ip;
        return $this;
    }

    public function getIp() {
        return $this->ip;
    }

    public function setIp(string $ip) {
        $this->ip = $ip;
    }
    public function mac(string $mac): V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo {
        $this->mac = $mac;
        return $this;
    }

    public function getMac() {
        return $this->mac;
    }

    public function setMac(string $mac) {
        $this->mac = $mac;
    }
    public function meetingRoomStatus(int $meetingRoomStatus): V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo {
        $this->meetingRoomStatus = $meetingRoomStatus;
        return $this;
    }

    public function getMeetingRoomStatus() {
        return $this->meetingRoomStatus;
    }

    public function setMeetingRoomStatus(int $meetingRoomStatus) {
        $this->meetingRoomStatus = $meetingRoomStatus;
    }
    public function memoryInfo(string $memoryInfo): V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo {
        $this->memoryInfo = $memoryInfo;
        return $this;
    }

    public function getMemoryInfo() {
        return $this->memoryInfo;
    }

    public function setMemoryInfo(string $memoryInfo) {
        $this->memoryInfo = $memoryInfo;
    }
    public function microphoneInfo(string $microphoneInfo): V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo {
        $this->microphoneInfo = $microphoneInfo;
        return $this;
    }

    public function getMicrophoneInfo() {
        return $this->microphoneInfo;
    }

    public function setMicrophoneInfo(string $microphoneInfo) {
        $this->microphoneInfo = $microphoneInfo;
    }
    public function monitorFrequency(int $monitorFrequency): V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo {
        $this->monitorFrequency = $monitorFrequency;
        return $this;
    }

    public function getMonitorFrequency() {
        return $this->monitorFrequency;
    }

    public function setMonitorFrequency(int $monitorFrequency) {
        $this->monitorFrequency = $monitorFrequency;
    }
    public function netType(string $netType): V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo {
        $this->netType = $netType;
        return $this;
    }

    public function getNetType() {
        return $this->netType;
    }

    public function setNetType(string $netType) {
        $this->netType = $netType;
    }
    public function roomsVersion(string $roomsVersion): V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo {
        $this->roomsVersion = $roomsVersion;
        return $this;
    }

    public function getRoomsVersion() {
        return $this->roomsVersion;
    }

    public function setRoomsVersion(string $roomsVersion) {
        $this->roomsVersion = $roomsVersion;
    }
    public function sn(string $sn): V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo {
        $this->sn = $sn;
        return $this;
    }

    public function getSn() {
        return $this->sn;
    }

    public function setSn(string $sn) {
        $this->sn = $sn;
    }
    public function speakerInfo(string $speakerInfo): V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo {
        $this->speakerInfo = $speakerInfo;
        return $this;
    }

    public function getSpeakerInfo() {
        return $this->speakerInfo;
    }

    public function setSpeakerInfo(string $speakerInfo) {
        $this->speakerInfo = $speakerInfo;
    }
    public function systemType(string $systemType): V1MeetingRoomsMeetingRoomIdGet200ResponseHardwareInfo {
        $this->systemType = $systemType;
        return $this;
    }

    public function getSystemType() {
        return $this->systemType;
    }

    public function setSystemType(string $systemType) {
        $this->systemType = $systemType;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active_time' => 'string',
        'camera_model' => 'string',
        'cpu_info' => 'string',
        'cpu_usage' => 'string',
        'device_model' => 'string',
        'enable_video_mirror' => 'bool',
        'factory' => 'string',
        'firmware_version' => 'string',
        'gpu_info' => 'string',
        'health_status' => 'string',
        'ip' => 'string',
        'mac' => 'string',
        'meeting_room_status' => 'int',
        'memory_info' => 'string',
        'microphone_info' => 'string',
        'monitor_frequency' => 'int',
        'net_type' => 'string',
        'rooms_version' => 'string',
        'sn' => 'string',
        'speaker_info' => 'string',
        'system_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'active_time' => null,
        'camera_model' => null,
        'cpu_info' => null,
        'cpu_usage' => null,
        'device_model' => null,
        'enable_video_mirror' => null,
        'factory' => null,
        'firmware_version' => null,
        'gpu_info' => null,
        'health_status' => null,
        'ip' => null,
        'mac' => null,
        'meeting_room_status' => 'int64',
        'memory_info' => null,
        'microphone_info' => null,
        'monitor_frequency' => 'int64',
        'net_type' => null,
        'rooms_version' => null,
        'sn' => null,
        'speaker_info' => null,
        'system_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'active_time' => false,
        'camera_model' => false,
        'cpu_info' => false,
        'cpu_usage' => false,
        'device_model' => false,
        'enable_video_mirror' => false,
        'factory' => false,
        'firmware_version' => false,
        'gpu_info' => false,
        'health_status' => false,
        'ip' => false,
        'mac' => false,
        'meeting_room_status' => false,
        'memory_info' => false,
        'microphone_info' => false,
        'monitor_frequency' => false,
        'net_type' => false,
        'rooms_version' => false,
        'sn' => false,
        'speaker_info' => false,
        'system_type' => false
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
        'active_time' => 'active_time',
        'camera_model' => 'camera_model',
        'cpu_info' => 'cpu_info',
        'cpu_usage' => 'cpu_usage',
        'device_model' => 'device_model',
        'enable_video_mirror' => 'enable_video_mirror',
        'factory' => 'factory',
        'firmware_version' => 'firmware_version',
        'gpu_info' => 'gpu_info',
        'health_status' => 'health_status',
        'ip' => 'ip',
        'mac' => 'mac',
        'meeting_room_status' => 'meeting_room_status',
        'memory_info' => 'memory_info',
        'microphone_info' => 'microphone_info',
        'monitor_frequency' => 'monitor_frequency',
        'net_type' => 'net_type',
        'rooms_version' => 'rooms_version',
        'sn' => 'sn',
        'speaker_info' => 'speaker_info',
        'system_type' => 'system_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active_time' => 'setActiveTime',
        'camera_model' => 'setCameraModel',
        'cpu_info' => 'setCpuInfo',
        'cpu_usage' => 'setCpuUsage',
        'device_model' => 'setDeviceModel',
        'enable_video_mirror' => 'setEnableVideoMirror',
        'factory' => 'setFactory',
        'firmware_version' => 'setFirmwareVersion',
        'gpu_info' => 'setGpuInfo',
        'health_status' => 'setHealthStatus',
        'ip' => 'setIp',
        'mac' => 'setMac',
        'meeting_room_status' => 'setMeetingRoomStatus',
        'memory_info' => 'setMemoryInfo',
        'microphone_info' => 'setMicrophoneInfo',
        'monitor_frequency' => 'setMonitorFrequency',
        'net_type' => 'setNetType',
        'rooms_version' => 'setRoomsVersion',
        'sn' => 'setSn',
        'speaker_info' => 'setSpeakerInfo',
        'system_type' => 'setSystemType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active_time' => 'getActiveTime',
        'camera_model' => 'getCameraModel',
        'cpu_info' => 'getCpuInfo',
        'cpu_usage' => 'getCpuUsage',
        'device_model' => 'getDeviceModel',
        'enable_video_mirror' => 'getEnableVideoMirror',
        'factory' => 'getFactory',
        'firmware_version' => 'getFirmwareVersion',
        'gpu_info' => 'getGpuInfo',
        'health_status' => 'getHealthStatus',
        'ip' => 'getIp',
        'mac' => 'getMac',
        'meeting_room_status' => 'getMeetingRoomStatus',
        'memory_info' => 'getMemoryInfo',
        'microphone_info' => 'getMicrophoneInfo',
        'monitor_frequency' => 'getMonitorFrequency',
        'net_type' => 'getNetType',
        'rooms_version' => 'getRoomsVersion',
        'sn' => 'getSn',
        'speaker_info' => 'getSpeakerInfo',
        'system_type' => 'getSystemType'
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
            'active_time' => $this->activeTime,
            'camera_model' => $this->cameraModel,
            'cpu_info' => $this->cpuInfo,
            'cpu_usage' => $this->cpuUsage,
            'device_model' => $this->deviceModel,
            'enable_video_mirror' => $this->enableVideoMirror,
            'factory' => $this->factory,
            'firmware_version' => $this->firmwareVersion,
            'gpu_info' => $this->gpuInfo,
            'health_status' => $this->healthStatus,
            'ip' => $this->ip,
            'mac' => $this->mac,
            'meeting_room_status' => $this->meetingRoomStatus,
            'memory_info' => $this->memoryInfo,
            'microphone_info' => $this->microphoneInfo,
            'monitor_frequency' => $this->monitorFrequency,
            'net_type' => $this->netType,
            'rooms_version' => $this->roomsVersion,
            'sn' => $this->sn,
            'speaker_info' => $this->speakerInfo,
            'system_type' => $this->systemType,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

