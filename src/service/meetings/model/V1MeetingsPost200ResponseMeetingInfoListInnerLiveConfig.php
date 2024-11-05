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


class V1MeetingsPost200ResponseMeetingInfoListInnerLiveConfig implements ModelInterface, \JsonSerializable
{

    /**
     * 是否开启直播互动
     */
    protected $enableLiveIm = null;

    /**
     * 是否开启直播密码，默认值false. true：开启, false：不开启
     */
    protected $enableLivePassword = null;

    /**
     * 是否开启直播回放
     */
    protected $enableLiveReplay = null;

    /**
     * 直播密码
     */
    protected $livePassword = null;

    /**
     * 直播主题
     */
    protected $liveSubject = null;

    /**
     * 直播简介
     */
    protected $liveSummary = null;

    /**
     */
    protected $liveWatermark = null;

    public function __construct(
    ) {
    }

    public function enableLiveIm(bool $enableLiveIm): V1MeetingsPost200ResponseMeetingInfoListInnerLiveConfig {
        $this->enableLiveIm = $enableLiveIm;
        return $this;
    }

    public function getEnableLiveIm() {
        return $this->enableLiveIm;
    }

    public function setEnableLiveIm(bool $enableLiveIm) {
        $this->enableLiveIm = $enableLiveIm;
    }
    public function enableLivePassword(bool $enableLivePassword): V1MeetingsPost200ResponseMeetingInfoListInnerLiveConfig {
        $this->enableLivePassword = $enableLivePassword;
        return $this;
    }

    public function getEnableLivePassword() {
        return $this->enableLivePassword;
    }

    public function setEnableLivePassword(bool $enableLivePassword) {
        $this->enableLivePassword = $enableLivePassword;
    }
    public function enableLiveReplay(bool $enableLiveReplay): V1MeetingsPost200ResponseMeetingInfoListInnerLiveConfig {
        $this->enableLiveReplay = $enableLiveReplay;
        return $this;
    }

    public function getEnableLiveReplay() {
        return $this->enableLiveReplay;
    }

    public function setEnableLiveReplay(bool $enableLiveReplay) {
        $this->enableLiveReplay = $enableLiveReplay;
    }
    public function livePassword(string $livePassword): V1MeetingsPost200ResponseMeetingInfoListInnerLiveConfig {
        $this->livePassword = $livePassword;
        return $this;
    }

    public function getLivePassword() {
        return $this->livePassword;
    }

    public function setLivePassword(string $livePassword) {
        $this->livePassword = $livePassword;
    }
    public function liveSubject(string $liveSubject): V1MeetingsPost200ResponseMeetingInfoListInnerLiveConfig {
        $this->liveSubject = $liveSubject;
        return $this;
    }

    public function getLiveSubject() {
        return $this->liveSubject;
    }

    public function setLiveSubject(string $liveSubject) {
        $this->liveSubject = $liveSubject;
    }
    public function liveSummary(string $liveSummary): V1MeetingsPost200ResponseMeetingInfoListInnerLiveConfig {
        $this->liveSummary = $liveSummary;
        return $this;
    }

    public function getLiveSummary() {
        return $this->liveSummary;
    }

    public function setLiveSummary(string $liveSummary) {
        $this->liveSummary = $liveSummary;
    }
    public function liveWatermark(\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerLiveConfigLiveWatermark $liveWatermark): V1MeetingsPost200ResponseMeetingInfoListInnerLiveConfig {
        $this->liveWatermark = $liveWatermark;
        return $this;
    }

    public function getLiveWatermark() {
        return $this->liveWatermark;
    }

    public function setLiveWatermark(\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerLiveConfigLiveWatermark $liveWatermark) {
        $this->liveWatermark = $liveWatermark;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enable_live_im' => 'bool',
        'enable_live_password' => 'bool',
        'enable_live_replay' => 'bool',
        'live_password' => 'string',
        'live_subject' => 'string',
        'live_summary' => 'string',
        'live_watermark' => '\wemeet\openapi\service\meetings\model\V1MeetingsPost200ResponseMeetingInfoListInnerLiveConfigLiveWatermark'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'enable_live_im' => null,
        'enable_live_password' => null,
        'enable_live_replay' => null,
        'live_password' => null,
        'live_subject' => null,
        'live_summary' => null,
        'live_watermark' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'enable_live_im' => false,
        'enable_live_password' => false,
        'enable_live_replay' => false,
        'live_password' => false,
        'live_subject' => false,
        'live_summary' => false,
        'live_watermark' => false
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
        'enable_live_im' => 'enable_live_im',
        'enable_live_password' => 'enable_live_password',
        'enable_live_replay' => 'enable_live_replay',
        'live_password' => 'live_password',
        'live_subject' => 'live_subject',
        'live_summary' => 'live_summary',
        'live_watermark' => 'live_watermark'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enable_live_im' => 'setEnableLiveIm',
        'enable_live_password' => 'setEnableLivePassword',
        'enable_live_replay' => 'setEnableLiveReplay',
        'live_password' => 'setLivePassword',
        'live_subject' => 'setLiveSubject',
        'live_summary' => 'setLiveSummary',
        'live_watermark' => 'setLiveWatermark'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enable_live_im' => 'getEnableLiveIm',
        'enable_live_password' => 'getEnableLivePassword',
        'enable_live_replay' => 'getEnableLiveReplay',
        'live_password' => 'getLivePassword',
        'live_subject' => 'getLiveSubject',
        'live_summary' => 'getLiveSummary',
        'live_watermark' => 'getLiveWatermark'
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
            'enable_live_im' => $this->enableLiveIm,
            'enable_live_password' => $this->enableLivePassword,
            'enable_live_replay' => $this->enableLiveReplay,
            'live_password' => $this->livePassword,
            'live_subject' => $this->liveSubject,
            'live_summary' => $this->liveSummary,
            'live_watermark' => $this->liveWatermark,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}
