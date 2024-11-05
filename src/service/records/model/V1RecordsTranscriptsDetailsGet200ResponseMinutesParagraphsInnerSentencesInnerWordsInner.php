<?php

/**
 * 测试环境项目
 *
 * api测试专用
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\records\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1RecordsTranscriptsDetailsGet200ResponseMinutesParagraphsInnerSentencesInnerWordsInner implements ModelInterface, \JsonSerializable
{

    /**
     * 录制文件中的词结束时间（毫秒）。
     */
    protected $endTime = null;

    /**
     * 录制文件中的词开始时间（毫秒）
     */
    protected $startTime = null;

    /**
     * 文本内容。
     */
    protected $text = null;

    /**
     * 词 ID
     */
    protected $wid = null;

    public function __construct(
    ) {
    }

    public function endTime(int $endTime): V1RecordsTranscriptsDetailsGet200ResponseMinutesParagraphsInnerSentencesInnerWordsInner {
        $this->endTime = $endTime;
        return $this;
    }

    public function getEndTime() {
        return $this->endTime;
    }

    public function setEndTime(int $endTime) {
        $this->endTime = $endTime;
    }
    public function startTime(int $startTime): V1RecordsTranscriptsDetailsGet200ResponseMinutesParagraphsInnerSentencesInnerWordsInner {
        $this->startTime = $startTime;
        return $this;
    }

    public function getStartTime() {
        return $this->startTime;
    }

    public function setStartTime(int $startTime) {
        $this->startTime = $startTime;
    }
    public function text(string $text): V1RecordsTranscriptsDetailsGet200ResponseMinutesParagraphsInnerSentencesInnerWordsInner {
        $this->text = $text;
        return $this;
    }

    public function getText() {
        return $this->text;
    }

    public function setText(string $text) {
        $this->text = $text;
    }
    public function wid(string $wid): V1RecordsTranscriptsDetailsGet200ResponseMinutesParagraphsInnerSentencesInnerWordsInner {
        $this->wid = $wid;
        return $this;
    }

    public function getWid() {
        return $this->wid;
    }

    public function setWid(string $wid) {
        $this->wid = $wid;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'end_time' => 'int',
        'start_time' => 'int',
        'text' => 'string',
        'wid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'end_time' => 'int64',
        'start_time' => 'int64',
        'text' => null,
        'wid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'end_time' => false,
        'start_time' => false,
        'text' => false,
        'wid' => false
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
        'end_time' => 'end_time',
        'start_time' => 'start_time',
        'text' => 'text',
        'wid' => 'wid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'end_time' => 'setEndTime',
        'start_time' => 'setStartTime',
        'text' => 'setText',
        'wid' => 'setWid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'end_time' => 'getEndTime',
        'start_time' => 'getStartTime',
        'text' => 'getText',
        'wid' => 'getWid'
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
            'end_time' => $this->endTime,
            'start_time' => $this->startTime,
            'text' => $this->text,
            'wid' => $this->wid,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

