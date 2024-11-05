<?php

/**
 * 测试环境项目
 *
 * api测试专用
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\vote\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdPollsPost200ResponsePollQuestionsInner implements ModelInterface, \JsonSerializable
{

    /**
     * 选项内容
     */
    protected $pollOption = null;

    /**
     * 问题描述，最多50个字符
     */
    protected $questionDesc = null;

    /**
     * 问题选择类型0 单选 1 多选
     */
    protected $questionType = null;

    public function __construct(
    ) {
    }

    public function pollOption(array $pollOption): V1MeetingsMeetingIdPollsPost200ResponsePollQuestionsInner {
        $this->pollOption = $pollOption;
        return $this;
    }

    public function getPollOption() {
        return $this->pollOption;
    }

    public function setPollOption(array $pollOption) {
        $this->pollOption = $pollOption;
    }
    public function questionDesc(string $questionDesc): V1MeetingsMeetingIdPollsPost200ResponsePollQuestionsInner {
        $this->questionDesc = $questionDesc;
        return $this;
    }

    public function getQuestionDesc() {
        return $this->questionDesc;
    }

    public function setQuestionDesc(string $questionDesc) {
        $this->questionDesc = $questionDesc;
    }
    public function questionType(int $questionType): V1MeetingsMeetingIdPollsPost200ResponsePollQuestionsInner {
        $this->questionType = $questionType;
        return $this;
    }

    public function getQuestionType() {
        return $this->questionType;
    }

    public function setQuestionType(int $questionType) {
        $this->questionType = $questionType;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'poll_option' => 'string[]',
        'question_desc' => 'string',
        'question_type' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'poll_option' => null,
        'question_desc' => null,
        'question_type' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'poll_option' => false,
        'question_desc' => false,
        'question_type' => false
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
        'poll_option' => 'poll_option',
        'question_desc' => 'question_desc',
        'question_type' => 'question_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'poll_option' => 'setPollOption',
        'question_desc' => 'setQuestionDesc',
        'question_type' => 'setQuestionType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'poll_option' => 'getPollOption',
        'question_desc' => 'getQuestionDesc',
        'question_type' => 'getQuestionType'
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
            'poll_option' => $this->pollOption,
            'question_desc' => $this->questionDesc,
            'question_type' => $this->questionType,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

