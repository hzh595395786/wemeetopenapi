<?php

/**
 * 测试环境项目
 *
 * api测试专用
 *
 * The version of the OpenAPI document: v1.0.0.80
 */
namespace wemeet\openapi\service\vote\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdPollsPostRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 必须 用户的终端设备类型： 1：PC 2：Mac 3：Android 4：iOS 5：Web 6：iPad 7：Android Pad 8：小程序 9：voip、sip 设备 10：linux 20：Rooms for Touch Windows 21：Rooms for Touch Mac 22：Rooms for Touch Android 30：Controller for Touch Windows 32：Controller for Touch Android 33：Controller for Touch Iphone
    * 类型：
     */
    protected $instanceid;
    /**
     * 操作者ID。 会议的创建者、主持人、联席主持人，才可以创建投票
    * 类型：
     */
    protected $operatorId;
    /**
     * 操作者 ID 的类型： 1：企业内用户 userid。 2: open_id 4: ms_open_id
    * 类型：
     */
    protected $operatorIdType;
    /**
     * 投票问题，每个投票支持添加10个问题
    * 类型：V1MeetingsMeetingIdPollsPostRequestPollQuestionsInner
     */
    protected $pollQuestions;
    /**
     * 投票主题 最多50个字符
    * 类型：
     */
    protected $pollTopic;

    /**
     * 是否匿名 0: 实名，默认值 1: 匿名
    * 类型：int
     */
    protected $isAnony = null;

    /**
     * 投票主题描述 最多100个字符
    * 类型：string
     */
    protected $pollDesc = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['instanceid'])) {
            $this->instanceid = $jsonArray['instanceid'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter instanceid');
        }
        if (isset($jsonArray['operator_id'])) {
            $this->operatorId = $jsonArray['operator_id'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter operator_id');
        }
        if (isset($jsonArray['operator_id_type'])) {
            $this->operatorIdType = $jsonArray['operator_id_type'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter operator_id_type');
        }
        if (isset($jsonArray['poll_questions'])) {
            $this->pollQuestions = $jsonArray['poll_questions'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter poll_questions');
        }
        if (isset($jsonArray['poll_topic'])) {
            $this->pollTopic = $jsonArray['poll_topic'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter poll_topic');
        }
        if (isset($jsonArray['is_anony'])) {
            $this->isAnony = $jsonArray['is_anony'];
        }
        if (isset($jsonArray['poll_desc'])) {
            $this->pollDesc = $jsonArray['poll_desc'];
        }
    }

    public function instanceid(int $instanceid): V1MeetingsMeetingIdPollsPostRequest {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function getInstanceid() {
        return $this->instanceid;
    }

    public function setInstanceid(int $instanceid) {
        $this->instanceid = $instanceid;
    }
    public function isAnony(int $isAnony): V1MeetingsMeetingIdPollsPostRequest {
        $this->isAnony = $isAnony;
        return $this;
    }

    public function getIsAnony() {
        return $this->isAnony;
    }

    public function setIsAnony(int $isAnony) {
        $this->isAnony = $isAnony;
    }
    public function operatorId(string $operatorId): V1MeetingsMeetingIdPollsPostRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1MeetingsMeetingIdPollsPostRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }
    public function pollDesc(string $pollDesc): V1MeetingsMeetingIdPollsPostRequest {
        $this->pollDesc = $pollDesc;
        return $this;
    }

    public function getPollDesc() {
        return $this->pollDesc;
    }

    public function setPollDesc(string $pollDesc) {
        $this->pollDesc = $pollDesc;
    }
    public function pollQuestions(array $pollQuestions): V1MeetingsMeetingIdPollsPostRequest {
        $this->pollQuestions = $pollQuestions;
        return $this;
    }

    public function getPollQuestions() {
        return $this->pollQuestions;
    }

    public function setPollQuestions(array $pollQuestions) {
        $this->pollQuestions = $pollQuestions;
    }
    public function pollTopic(string $pollTopic): V1MeetingsMeetingIdPollsPostRequest {
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
        'instanceid' => 'int',
        'is_anony' => 'int',
        'operator_id' => 'string',
        'operator_id_type' => 'int',
        'poll_desc' => 'string',
        'poll_questions' => '\wemeet\openapi\service\vote\model\V1MeetingsMeetingIdPollsPostRequestPollQuestionsInner[]',
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
        'instanceid' => 'int64',
        'is_anony' => 'int64',
        'operator_id' => null,
        'operator_id_type' => 'int64',
        'poll_desc' => null,
        'poll_questions' => null,
        'poll_topic' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'instanceid' => false,
        'is_anony' => false,
        'operator_id' => false,
        'operator_id_type' => false,
        'poll_desc' => false,
        'poll_questions' => false,
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
        'instanceid' => 'instanceid',
        'is_anony' => 'is_anony',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type',
        'poll_desc' => 'poll_desc',
        'poll_questions' => 'poll_questions',
        'poll_topic' => 'poll_topic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'instanceid' => 'setInstanceid',
        'is_anony' => 'setIsAnony',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType',
        'poll_desc' => 'setPollDesc',
        'poll_questions' => 'setPollQuestions',
        'poll_topic' => 'setPollTopic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'instanceid' => 'getInstanceid',
        'is_anony' => 'getIsAnony',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType',
        'poll_desc' => 'getPollDesc',
        'poll_questions' => 'getPollQuestions',
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
            'instanceid' => $this->instanceid,
            'is_anony' => $this->isAnony,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
            'poll_desc' => $this->pollDesc,
            'poll_questions' => $this->pollQuestions,
            'poll_topic' => $this->pollTopic,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

