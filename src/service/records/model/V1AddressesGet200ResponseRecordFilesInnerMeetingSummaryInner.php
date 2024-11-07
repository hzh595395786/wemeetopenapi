<?php

/**
 * 测试环境项目
 *
 * api测试专用
 *
 * The version of the OpenAPI document: v1.0.0.76
 */
namespace wemeet\openapi\service\records\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1AddressesGet200ResponseRecordFilesInnerMeetingSummaryInner implements ModelInterface, \JsonSerializable
{

    /**
     * 下载文件地址。OAuth 鉴权方式下，账号类型为个人免费版、企微创建企业时，该值返回为空。
    * 类型：string
     */
    protected $downloadAddress = null;

    /**
     * 下载文件类型，例如：txt、pdf、docs。OAuth 鉴权方式下，账号类型为个人免费版、企微创建企业时，该值返回为空。
    * 类型：string
     */
    protected $fileType = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['download_address'])) {
            $this->downloadAddress = $jsonArray['download_address'];
        }
        if (isset($jsonArray['file_type'])) {
            $this->fileType = $jsonArray['file_type'];
        }
    }

    public function downloadAddress(string $downloadAddress): V1AddressesGet200ResponseRecordFilesInnerMeetingSummaryInner {
        $this->downloadAddress = $downloadAddress;
        return $this;
    }

    public function getDownloadAddress() {
        return $this->downloadAddress;
    }

    public function setDownloadAddress(string $downloadAddress) {
        $this->downloadAddress = $downloadAddress;
    }
    public function fileType(string $fileType): V1AddressesGet200ResponseRecordFilesInnerMeetingSummaryInner {
        $this->fileType = $fileType;
        return $this;
    }

    public function getFileType() {
        return $this->fileType;
    }

    public function setFileType(string $fileType) {
        $this->fileType = $fileType;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'download_address' => 'string',
        'file_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'download_address' => null,
        'file_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'download_address' => false,
        'file_type' => false
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
        'download_address' => 'download_address',
        'file_type' => 'file_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'download_address' => 'setDownloadAddress',
        'file_type' => 'setFileType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'download_address' => 'getDownloadAddress',
        'file_type' => 'getFileType'
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
            'download_address' => $this->downloadAddress,
            'file_type' => $this->fileType,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

