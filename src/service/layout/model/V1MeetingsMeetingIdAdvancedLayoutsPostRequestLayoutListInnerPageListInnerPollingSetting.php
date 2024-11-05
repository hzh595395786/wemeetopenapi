<?php

/**
 * 测试环境项目
 *
 * api测试专用
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\layout\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdAdvancedLayoutsPostRequestLayoutListInnerPageListInnerPollingSetting implements ModelInterface, \JsonSerializable
{
    /**
     * 轮询开启后设置参数， 设置是否忽略未入会成员
     * @deprecated
    protected $ignoreUserAbsence;
    /**
     * 轮询开启后设置参数，设置是否忽略没开启视频成员
     * @deprecated
    protected $ignoreUserNovideo;
    /**
     * 轮询开启后设置参数 轮询间隔时长， 允许取值范围1～999999
     * @deprecated
    protected $pollingInterval;
    /**
     * 轮询开启后设置参数。 轮询间隔时间类型： 1-秒 2-分钟
     * @deprecated
    protected $pollingIntervalUnit;

    public function __construct(
        $ignoreUserAbsence,
        $ignoreUserNovideo,
        $pollingInterval,
        $pollingIntervalUnit,
    ) {
        $this->ignoreUserAbsence = $ignoreUserAbsence;
        $this->ignoreUserNovideo = $ignoreUserNovideo;
        $this->pollingInterval = $pollingInterval;
        $this->pollingIntervalUnit = $pollingIntervalUnit;
    }

    public function ignoreUserAbsence(bool $ignoreUserAbsence): V1MeetingsMeetingIdAdvancedLayoutsPostRequestLayoutListInnerPageListInnerPollingSetting {
        $this->ignoreUserAbsence = $ignoreUserAbsence;
        return $this;
    }

    public function getIgnoreUserAbsence() {
        return $this->ignoreUserAbsence;
    }

    public function setIgnoreUserAbsence(bool $ignoreUserAbsence) {
        $this->ignoreUserAbsence = $ignoreUserAbsence;
    }
    public function ignoreUserNovideo(bool $ignoreUserNovideo): V1MeetingsMeetingIdAdvancedLayoutsPostRequestLayoutListInnerPageListInnerPollingSetting {
        $this->ignoreUserNovideo = $ignoreUserNovideo;
        return $this;
    }

    public function getIgnoreUserNovideo() {
        return $this->ignoreUserNovideo;
    }

    public function setIgnoreUserNovideo(bool $ignoreUserNovideo) {
        $this->ignoreUserNovideo = $ignoreUserNovideo;
    }
    public function pollingInterval(int $pollingInterval): V1MeetingsMeetingIdAdvancedLayoutsPostRequestLayoutListInnerPageListInnerPollingSetting {
        $this->pollingInterval = $pollingInterval;
        return $this;
    }

    public function getPollingInterval() {
        return $this->pollingInterval;
    }

    public function setPollingInterval(int $pollingInterval) {
        $this->pollingInterval = $pollingInterval;
    }
    public function pollingIntervalUnit(int $pollingIntervalUnit): V1MeetingsMeetingIdAdvancedLayoutsPostRequestLayoutListInnerPageListInnerPollingSetting {
        $this->pollingIntervalUnit = $pollingIntervalUnit;
        return $this;
    }

    public function getPollingIntervalUnit() {
        return $this->pollingIntervalUnit;
    }

    public function setPollingIntervalUnit(int $pollingIntervalUnit) {
        $this->pollingIntervalUnit = $pollingIntervalUnit;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ignore_user_absence' => 'bool',
        'ignore_user_novideo' => 'bool',
        'polling_interval' => 'int',
        'polling_interval_unit' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ignore_user_absence' => null,
        'ignore_user_novideo' => null,
        'polling_interval' => 'int64',
        'polling_interval_unit' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ignore_user_absence' => false,
        'ignore_user_novideo' => false,
        'polling_interval' => false,
        'polling_interval_unit' => false
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
        'ignore_user_absence' => 'ignore_user_absence',
        'ignore_user_novideo' => 'ignore_user_novideo',
        'polling_interval' => 'polling_interval',
        'polling_interval_unit' => 'polling_interval_unit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ignore_user_absence' => 'setIgnoreUserAbsence',
        'ignore_user_novideo' => 'setIgnoreUserNovideo',
        'polling_interval' => 'setPollingInterval',
        'polling_interval_unit' => 'setPollingIntervalUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ignore_user_absence' => 'getIgnoreUserAbsence',
        'ignore_user_novideo' => 'getIgnoreUserNovideo',
        'polling_interval' => 'getPollingInterval',
        'polling_interval_unit' => 'getPollingIntervalUnit'
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
            'ignore_user_absence' => $this->ignoreUserAbsence,
            'ignore_user_novideo' => $this->ignoreUserNovideo,
            'polling_interval' => $this->pollingInterval,
            'polling_interval_unit' => $this->pollingIntervalUnit,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

