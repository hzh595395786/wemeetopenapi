<?php

/**
 * 测试环境项目
 *
 * api测试专用
 *
 * The version of the OpenAPI document: v1.0.0.76
 */
namespace wemeet\openapi\service\vote\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdPollsPost200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 是否匿名 0: 实名，默认值 1: 匿名
    * 类型：int
     */
    protected $isAnony = null;

    /**
     * 会议ID
    * 类型：string
     */
    protected $meetingId = null;

    /**
     * 投票主题描述 最多100个字符
    * 类型：string
     */
    protected $pollDesc = null;

    /**
     * 投票问题，每个投票支持添加10个问题
    * 类型：\wemeet\openapi\service\vote\model\V1MeetingsMeetingIdPollsPost200ResponsePollQuestionsInner[]
     */
    protected $pollQuestions = null;

    /**
     * 投票模板ID
    * 类型：string
     */
    protected $pollThemeId = null;

    /**
     * 投票主题 最多50个字符
    * 类型：string
     */
    protected $pollTopic = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['is_anony'])) {
            $this->isAnony = $jsonArray['is_anony'];
        }
        if (isset($jsonArray['meeting_id'])) {
            $this->meetingId = $jsonArray['meeting_id'];
        }
        if (isset($jsonArray['poll_desc'])) {
            $this->pollDesc = $jsonArray['poll_desc'];
        }
        if (isset($jsonArray['poll_questions'])) {
            $this->pollQuestions = $jsonArray['poll_questions'];
        }
        if (isset($jsonArray['poll_theme_id'])) {
            $this->pollThemeId = $jsonArray['poll_theme_id'];
        }
        if (isset($jsonArray['poll_topic'])) {
            $this->pollTopic = $jsonArray['poll_topic'];
        }
    }

    public function isAnony(int $isAnony): V1MeetingsMeetingIdPollsPost200Response {
        $this->isAnony = $isAnony;
        return $this;
    }

    public function getIsAnony() {
        return $this->isAnony;
    }

    public function setIsAnony(int $isAnony) {
        $this->isAnony = $isAnony;
    }
    public function meetingId(string $meetingId): V1MeetingsMeetingIdPollsPost200Response {
        $this->meetingId = $meetingId;
        return $this;
    }

    public function getMeetingId() {
        return $this->meetingId;
    }

    public function setMeetingId(string $meetingId) {
        $this->meetingId = $meetingId;
    }
    public function pollDesc(string $pollDesc): V1MeetingsMeetingIdPollsPost200Response {
        $this->pollDesc = $pollDesc;
        return $this;
    }

    public function getPollDesc() {
        return $this->pollDesc;
    }

    public function setPollDesc(string $pollDesc) {
        $this->pollDesc = $pollDesc;
    }
    public function pollQuestions(array $pollQuestions): V1MeetingsMeetingIdPollsPost200Response {
        $this->pollQuestions = $pollQuestions;
        return $this;
    }

    public function getPollQuestions() {
        return $this->pollQuestions;
    }

    public function setPollQuestions(array $pollQuestions) {
        $this->pollQuestions = $pollQuestions;
    }
    public function pollThemeId(string $pollThemeId): V1MeetingsMeetingIdPollsPost200Response {
        $this->pollThemeId = $pollThemeId;
        return $this;
    }

    public function getPollThemeId() {
        return $this->pollThemeId;
    }

    public function setPollThemeId(string $pollThemeId) {
        $this->pollThemeId = $pollThemeId;
    }
    public function pollTopic(string $pollTopic): V1MeetingsMeetingIdPollsPost200Response {
        $this->pollTopic = $pollTopic;
        return $this;
    }

    public function getPollTopic() {
        return $this->pollTopic;
    }

    public function setPollTopic(string $pollTopic) {
        $this->pollTopic = $pollTopic;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_anony' => 'int',
        'meeting_id' => 'string',
        'poll_desc' => 'string',
        'poll_questions' => '\wemeet\openapi\service\vote\model\V1MeetingsMeetingIdPollsPost200ResponsePollQuestionsInner[]',
        'poll_theme_id' => 'string',
        'poll_topic' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_anony' => 'int64',
        'meeting_id' => null,
        'poll_desc' => null,
        'poll_questions' => null,
        'poll_theme_id' => null,
        'poll_topic' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is_anony' => false,
        'meeting_id' => false,
        'poll_desc' => false,
        'poll_questions' => false,
        'poll_theme_id' => false,
        'poll_topic' => false
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
        'is_anony' => 'is_anony',
        'meeting_id' => 'meeting_id',
        'poll_desc' => 'poll_desc',
        'poll_questions' => 'poll_questions',
        'poll_theme_id' => 'poll_theme_id',
        'poll_topic' => 'poll_topic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_anony' => 'setIsAnony',
        'meeting_id' => 'setMeetingId',
        'poll_desc' => 'setPollDesc',
        'poll_questions' => 'setPollQuestions',
        'poll_theme_id' => 'setPollThemeId',
        'poll_topic' => 'setPollTopic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_anony' => 'getIsAnony',
        'meeting_id' => 'getMeetingId',
        'poll_desc' => 'getPollDesc',
        'poll_questions' => 'getPollQuestions',
        'poll_theme_id' => 'getPollThemeId',
        'poll_topic' => 'getPollTopic'
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
            'is_anony' => $this->isAnony,
            'meeting_id' => $this->meetingId,
            'poll_desc' => $this->pollDesc,
            'poll_questions' => $this->pollQuestions,
            'poll_theme_id' => $this->pollThemeId,
            'poll_topic' => $this->pollTopic,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

