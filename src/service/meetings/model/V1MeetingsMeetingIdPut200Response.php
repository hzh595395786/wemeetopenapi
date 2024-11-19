<?php

/**
 * 测试环境项目
 *
 * api测试专用
 *
 * The version of the OpenAPI document: v1.0.0.80
 */
namespace wemeet\openapi\service\meetings\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdPut200Response implements ModelInterface, \JsonSerializable
{

    /**
     * 会议列表
    * 类型：\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdPut200ResponseMeetingInfoListInner[]
     */
    protected $meetingInfoList = null;

    /**
     * 会议数量
    * 类型：int
     */
    protected $meetingNumber = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['meeting_info_list'])) {
            $this->meetingInfoList = $jsonArray['meeting_info_list'];
        }
        if (isset($jsonArray['meeting_number'])) {
            $this->meetingNumber = $jsonArray['meeting_number'];
        }
    }

    public function meetingInfoList(array $meetingInfoList): V1MeetingsMeetingIdPut200Response {
        $this->meetingInfoList = $meetingInfoList;
        return $this;
    }

    public function getMeetingInfoList() {
        return $this->meetingInfoList;
    }

    public function setMeetingInfoList(array $meetingInfoList) {
        $this->meetingInfoList = $meetingInfoList;
    }
    public function meetingNumber(int $meetingNumber): V1MeetingsMeetingIdPut200Response {
        $this->meetingNumber = $meetingNumber;
        return $this;
    }

    public function getMeetingNumber() {
        return $this->meetingNumber;
    }

    public function setMeetingNumber(int $meetingNumber) {
        $this->meetingNumber = $meetingNumber;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'meeting_info_list' => '\wemeet\openapi\service\meetings\model\V1MeetingsMeetingIdPut200ResponseMeetingInfoListInner[]',
        'meeting_number' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'meeting_info_list' => null,
        'meeting_number' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'meeting_info_list' => false,
        'meeting_number' => false
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
        'meeting_info_list' => 'meeting_info_list',
        'meeting_number' => 'meeting_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meeting_info_list' => 'setMeetingInfoList',
        'meeting_number' => 'setMeetingNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meeting_info_list' => 'getMeetingInfoList',
        'meeting_number' => 'getMeetingNumber'
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
            'meeting_info_list' => $this->meetingInfoList,
            'meeting_number' => $this->meetingNumber,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}
