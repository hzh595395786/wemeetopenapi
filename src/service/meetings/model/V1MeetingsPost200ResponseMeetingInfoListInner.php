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


class V1MeetingsPost200ResponseMeetingInfoListInner implements ModelInterface, \JsonSerializable
{

    /**
     * 联席主持人
     */
    protected $currentCoHosts = null;

    /**
     * 是否开启直播（会议创建人才有权限查询）
     */
    protected $enableLive = null;

    /**
     * 会议结束时间戳（秒）
     */
    protected $endTime = null;

    /**
     * 主持人密钥，仅支持6位数字。
     */
    protected $hostKey = null;

    /**
     * 指定主持人列表，仅商业版和企业版可指定主持人
     */
    protected $hosts = null;

    /**
     * 加入会议 URL
     */
    protected $joinUrl = null;

    /**
     */
    protected $liveConfig = null;

    /**
     * 会议 App 的呼入号码
     */
    protected $meetingCode = null;

    /**
     * 会议唯一id
     */
    protected $meetingId = null;

    /**
     * 邀请的参会人
     */
    protected $participants = null;

    /**
     * 会议密码
     */
    protected $password = null;

    /**
     */
    protected $settings = null;

    /**
     * 会议开始时间戳（秒）
     */
    protected $startTime = null;

    /**
     * 会议主题
     */
    protected $subject = null;

    public function __construct(
    ) {
    }

    public function currentCoHosts(array $currentCoHosts): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->currentCoHosts = $currentCoHosts;
        return $this;
    }

    public function getCurrentCoHosts() {
        return $this->currentCoHosts;
    }

    public function setCurrentCoHosts(array $currentCoHosts) {
        $this->currentCoHosts = $currentCoHosts;
    }
    public function enableLive(bool $enableLive): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->enableLive = $enableLive;
        return $this;
    }

    public function getEnableLive() {
        return $this->enableLive;
    }

    public function setEnableLive(bool $enableLive) {
        $this->enableLive = $enableLive;
    }
    public function endTime(string $endTime): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->endTime = $endTime;
        return $this;
    }

    public function getEndTime() {
        return $this->endTime;
    }

    public function setEndTime(string $endTime) {
        $this->endTime = $endTime;
    }
    public function hostKey(string $hostKey): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->hostKey = $hostKey;
        return $this;
    }

    public function getHostKey() {
        return $this->hostKey;
    }

    public function setHostKey(string $hostKey) {
        $this->hostKey = $hostKey;
    }
    public function hosts(array $hosts): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->hosts = $hosts;
        return $this;
    }

    public function getHosts() {
        return $this->hosts;
    }

    public function setHosts(array $hosts) {
        $this->hosts = $hosts;
    }
    public function joinUrl(string $joinUrl): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->joinUrl = $joinUrl;
        return $this;
    }

    public function getJoinUrl() {
        return $this->joinUrl;
    }

    public function setJoinUrl(string $joinUrl) {
        $this->joinUrl = $joinUrl;
    }
    public function liveConfig(\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerLiveConfig $liveConfig): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->liveConfig = $liveConfig;
        return $this;
    }

    public function getLiveConfig() {
        return $this->liveConfig;
    }

    public function setLiveConfig(\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerLiveConfig $liveConfig) {
        $this->liveConfig = $liveConfig;
    }
    public function meetingCode(string $meetingCode): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->meetingCode = $meetingCode;
        return $this;
    }

    public function getMeetingCode() {
        return $this->meetingCode;
    }

    public function setMeetingCode(string $meetingCode) {
        $this->meetingCode = $meetingCode;
    }
    public function meetingId(string $meetingId): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->meetingId = $meetingId;
        return $this;
    }

    public function getMeetingId() {
        return $this->meetingId;
    }

    public function setMeetingId(string $meetingId) {
        $this->meetingId = $meetingId;
    }
    public function participants(array $participants): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->participants = $participants;
        return $this;
    }

    public function getParticipants() {
        return $this->participants;
    }

    public function setParticipants(array $participants) {
        $this->participants = $participants;
    }
    public function password(string $password): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->password = $password;
        return $this;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }
    public function settings(\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerSettings $settings): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->settings = $settings;
        return $this;
    }

    public function getSettings() {
        return $this->settings;
    }

    public function setSettings(\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerSettings $settings) {
        $this->settings = $settings;
    }
    public function startTime(string $startTime): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->startTime = $startTime;
        return $this;
    }

    public function getStartTime() {
        return $this->startTime;
    }

    public function setStartTime(string $startTime) {
        $this->startTime = $startTime;
    }
    public function subject(string $subject): V1MeetingsPost200ResponseMeetingInfoListInner {
        $this->subject = $subject;
        return $this;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function setSubject(string $subject) {
        $this->subject = $subject;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'current_co_hosts' => '\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerCurrentCoHostsInner[]',
        'enable_live' => 'bool',
        'end_time' => 'string',
        'host_key' => 'string',
        'hosts' => '\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerHostsInner[]',
        'join_url' => 'string',
        'live_config' => '\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerLiveConfig',
        'meeting_code' => 'string',
        'meeting_id' => 'string',
        'participants' => '\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerParticipantsInner[]',
        'password' => 'string',
        'settings' => '\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerSettings',
        'start_time' => 'string',
        'subject' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'current_co_hosts' => null,
        'enable_live' => null,
        'end_time' => null,
        'host_key' => null,
        'hosts' => null,
        'join_url' => null,
        'live_config' => null,
        'meeting_code' => null,
        'meeting_id' => null,
        'participants' => null,
        'password' => null,
        'settings' => null,
        'start_time' => null,
        'subject' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'current_co_hosts' => false,
        'enable_live' => false,
        'end_time' => false,
        'host_key' => false,
        'hosts' => false,
        'join_url' => false,
        'live_config' => false,
        'meeting_code' => false,
        'meeting_id' => false,
        'participants' => false,
        'password' => false,
        'settings' => false,
        'start_time' => false,
        'subject' => false
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
        'current_co_hosts' => 'current_co_hosts',
        'enable_live' => 'enable_live',
        'end_time' => 'end_time',
        'host_key' => 'host_key',
        'hosts' => 'hosts',
        'join_url' => 'join_url',
        'live_config' => 'live_config',
        'meeting_code' => 'meeting_code',
        'meeting_id' => 'meeting_id',
        'participants' => 'participants',
        'password' => 'password',
        'settings' => 'settings',
        'start_time' => 'start_time',
        'subject' => 'subject'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_co_hosts' => 'setCurrentCoHosts',
        'enable_live' => 'setEnableLive',
        'end_time' => 'setEndTime',
        'host_key' => 'setHostKey',
        'hosts' => 'setHosts',
        'join_url' => 'setJoinUrl',
        'live_config' => 'setLiveConfig',
        'meeting_code' => 'setMeetingCode',
        'meeting_id' => 'setMeetingId',
        'participants' => 'setParticipants',
        'password' => 'setPassword',
        'settings' => 'setSettings',
        'start_time' => 'setStartTime',
        'subject' => 'setSubject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_co_hosts' => 'getCurrentCoHosts',
        'enable_live' => 'getEnableLive',
        'end_time' => 'getEndTime',
        'host_key' => 'getHostKey',
        'hosts' => 'getHosts',
        'join_url' => 'getJoinUrl',
        'live_config' => 'getLiveConfig',
        'meeting_code' => 'getMeetingCode',
        'meeting_id' => 'getMeetingId',
        'participants' => 'getParticipants',
        'password' => 'getPassword',
        'settings' => 'getSettings',
        'start_time' => 'getStartTime',
        'subject' => 'getSubject'
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
            'current_co_hosts' => $this->currentCoHosts,
            'enable_live' => $this->enableLive,
            'end_time' => $this->endTime,
            'host_key' => $this->hostKey,
            'hosts' => $this->hosts,
            'join_url' => $this->joinUrl,
            'live_config' => $this->liveConfig,
            'meeting_code' => $this->meetingCode,
            'meeting_id' => $this->meetingId,
            'participants' => $this->participants,
            'password' => $this->password,
            'settings' => $this->settings,
            'start_time' => $this->startTime,
            'subject' => $this->subject,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

