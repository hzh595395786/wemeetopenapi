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


class V1FilesRecordsUploadPreparePostRequest implements ModelInterface, \JsonSerializable
{
    /**
     * 文件名base64编码
     * @deprecated
    protected $fileName;
    /**
     * 文件大小（以字节为单位）
     * @deprecated
    protected $fileSize;
    /**
     * 文件类型。voice：音频；video：视频
     * @deprecated
    protected $fileType;
    /**
     * 操作者ID
     * @deprecated
    protected $operatorId;
    /**
     * 操作者ID类型
     * @deprecated
    protected $operatorIdType;

    public function __construct(
        $fileName,
        $fileSize,
        $fileType,
        $operatorId,
        $operatorIdType,
    ) {
        $this->fileName = $fileName;
        $this->fileSize = $fileSize;
        $this->fileType = $fileType;
        $this->operatorId = $operatorId;
        $this->operatorIdType = $operatorIdType;
    }

    public function fileName(string $fileName): V1FilesRecordsUploadPreparePostRequest {
        $this->fileName = $fileName;
        return $this;
    }

    public function getFileName() {
        return $this->fileName;
    }

    public function setFileName(string $fileName) {
        $this->fileName = $fileName;
    }
    public function fileSize(int $fileSize): V1FilesRecordsUploadPreparePostRequest {
        $this->fileSize = $fileSize;
        return $this;
    }

    public function getFileSize() {
        return $this->fileSize;
    }

    public function setFileSize(int $fileSize) {
        $this->fileSize = $fileSize;
    }
    public function fileType(string $fileType): V1FilesRecordsUploadPreparePostRequest {
        $this->fileType = $fileType;
        return $this;
    }

    public function getFileType() {
        return $this->fileType;
    }

    public function setFileType(string $fileType) {
        $this->fileType = $fileType;
    }
    public function operatorId(string $operatorId): V1FilesRecordsUploadPreparePostRequest {
        $this->operatorId = $operatorId;
        return $this;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId) {
        $this->operatorId = $operatorId;
    }
    public function operatorIdType(int $operatorIdType): V1FilesRecordsUploadPreparePostRequest {
        $this->operatorIdType = $operatorIdType;
        return $this;
    }

    public function getOperatorIdType() {
        return $this->operatorIdType;
    }

    public function setOperatorIdType(int $operatorIdType) {
        $this->operatorIdType = $operatorIdType;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'file_name' => 'string',
        'file_size' => 'int',
        'file_type' => 'string',
        'operator_id' => 'string',
        'operator_id_type' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'file_name' => null,
        'file_size' => 'int64',
        'file_type' => null,
        'operator_id' => null,
        'operator_id_type' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'file_name' => false,
        'file_size' => false,
        'file_type' => false,
        'operator_id' => false,
        'operator_id_type' => false
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
        'file_name' => 'file_name',
        'file_size' => 'file_size',
        'file_type' => 'file_type',
        'operator_id' => 'operator_id',
        'operator_id_type' => 'operator_id_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file_name' => 'setFileName',
        'file_size' => 'setFileSize',
        'file_type' => 'setFileType',
        'operator_id' => 'setOperatorId',
        'operator_id_type' => 'setOperatorIdType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file_name' => 'getFileName',
        'file_size' => 'getFileSize',
        'file_type' => 'getFileType',
        'operator_id' => 'getOperatorId',
        'operator_id_type' => 'getOperatorIdType'
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
            'file_name' => $this->fileName,
            'file_size' => $this->fileSize,
            'file_type' => $this->fileType,
            'operator_id' => $this->operatorId,
            'operator_id_type' => $this->operatorIdType,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

