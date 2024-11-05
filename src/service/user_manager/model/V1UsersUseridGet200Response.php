<?php

/**
 * 测试环境项目
 *
 * api测试专用
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\user_manager\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1UsersUseridGet200Response implements ModelInterface, \JsonSerializable
{

    /**
     */
    protected $accountType = null;

    /**
     * 账号版本
     */
    protected $accountVersion = null;

    /**
     * ai账号类型 1:购买版 2:赠送版
     */
    protected $aiAccountType = null;

    /**
     */
    protected $area = null;

    /**
     */
    protected $avatarUrl = null;

    /**
     */
    protected $departmentList = null;

    /**
     */
    protected $email = null;

    /**
     * 是否有ai账号能力，true：有，false：无
     */
    protected $enableAiAccount = null;

    /**
     */
    protected $entryTime = null;

    /**
     */
    protected $jobTitle = null;

    /**
     */
    protected $phone = null;

    /**
     * 手机号验证状态。 0：未知 1：已验证 2：未验证
     */
    protected $phoneStatus = null;

    /**
     */
    protected $roleCode = null;

    /**
     */
    protected $roleName = null;

    /**
     */
    protected $staffId = null;

    /**
     */
    protected $status = null;

    /**
     */
    protected $updateTime = null;

    /**
     * 1：高级账号  2：免费账号  3：免费账号100方 4:高级账号300方，5:高级账号500方，6：高级账号1000方，7:高级账号2000方
     */
    protected $userAccountType = null;

    /**
     */
    protected $userid = null;

    /**
     */
    protected $username = null;

    /**
     */
    protected $uuid = null;

    public function __construct(
    ) {
    }

    public function accountType(int $accountType): V1UsersUseridGet200Response {
        $this->accountType = $accountType;
        return $this;
    }

    public function getAccountType() {
        return $this->accountType;
    }

    public function setAccountType(int $accountType) {
        $this->accountType = $accountType;
    }
    public function accountVersion(int $accountVersion): V1UsersUseridGet200Response {
        $this->accountVersion = $accountVersion;
        return $this;
    }

    public function getAccountVersion() {
        return $this->accountVersion;
    }

    public function setAccountVersion(int $accountVersion) {
        $this->accountVersion = $accountVersion;
    }
    public function aiAccountType(int $aiAccountType): V1UsersUseridGet200Response {
        $this->aiAccountType = $aiAccountType;
        return $this;
    }

    public function getAiAccountType() {
        return $this->aiAccountType;
    }

    public function setAiAccountType(int $aiAccountType) {
        $this->aiAccountType = $aiAccountType;
    }
    public function area(string $area): V1UsersUseridGet200Response {
        $this->area = $area;
        return $this;
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea(string $area) {
        $this->area = $area;
    }
    public function avatarUrl(string $avatarUrl): V1UsersUseridGet200Response {
        $this->avatarUrl = $avatarUrl;
        return $this;
    }

    public function getAvatarUrl() {
        return $this->avatarUrl;
    }

    public function setAvatarUrl(string $avatarUrl) {
        $this->avatarUrl = $avatarUrl;
    }
    public function departmentList(array $departmentList): V1UsersUseridGet200Response {
        $this->departmentList = $departmentList;
        return $this;
    }

    public function getDepartmentList() {
        return $this->departmentList;
    }

    public function setDepartmentList(array $departmentList) {
        $this->departmentList = $departmentList;
    }
    public function email(string $email): V1UsersUseridGet200Response {
        $this->email = $email;
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }
    public function enableAiAccount(bool $enableAiAccount): V1UsersUseridGet200Response {
        $this->enableAiAccount = $enableAiAccount;
        return $this;
    }

    public function getEnableAiAccount() {
        return $this->enableAiAccount;
    }

    public function setEnableAiAccount(bool $enableAiAccount) {
        $this->enableAiAccount = $enableAiAccount;
    }
    public function entryTime(string $entryTime): V1UsersUseridGet200Response {
        $this->entryTime = $entryTime;
        return $this;
    }

    public function getEntryTime() {
        return $this->entryTime;
    }

    public function setEntryTime(string $entryTime) {
        $this->entryTime = $entryTime;
    }
    public function jobTitle(string $jobTitle): V1UsersUseridGet200Response {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    public function getJobTitle() {
        return $this->jobTitle;
    }

    public function setJobTitle(string $jobTitle) {
        $this->jobTitle = $jobTitle;
    }
    public function phone(string $phone): V1UsersUseridGet200Response {
        $this->phone = $phone;
        return $this;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone(string $phone) {
        $this->phone = $phone;
    }
    public function phoneStatus(int $phoneStatus): V1UsersUseridGet200Response {
        $this->phoneStatus = $phoneStatus;
        return $this;
    }

    public function getPhoneStatus() {
        return $this->phoneStatus;
    }

    public function setPhoneStatus(int $phoneStatus) {
        $this->phoneStatus = $phoneStatus;
    }
    public function roleCode(string $roleCode): V1UsersUseridGet200Response {
        $this->roleCode = $roleCode;
        return $this;
    }

    public function getRoleCode() {
        return $this->roleCode;
    }

    public function setRoleCode(string $roleCode) {
        $this->roleCode = $roleCode;
    }
    public function roleName(string $roleName): V1UsersUseridGet200Response {
        $this->roleName = $roleName;
        return $this;
    }

    public function getRoleName() {
        return $this->roleName;
    }

    public function setRoleName(string $roleName) {
        $this->roleName = $roleName;
    }
    public function staffId(string $staffId): V1UsersUseridGet200Response {
        $this->staffId = $staffId;
        return $this;
    }

    public function getStaffId() {
        return $this->staffId;
    }

    public function setStaffId(string $staffId) {
        $this->staffId = $staffId;
    }
    public function status(string $status): V1UsersUseridGet200Response {
        $this->status = $status;
        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus(string $status) {
        $this->status = $status;
    }
    public function updateTime(string $updateTime): V1UsersUseridGet200Response {
        $this->updateTime = $updateTime;
        return $this;
    }

    public function getUpdateTime() {
        return $this->updateTime;
    }

    public function setUpdateTime(string $updateTime) {
        $this->updateTime = $updateTime;
    }
    public function userAccountType(int $userAccountType): V1UsersUseridGet200Response {
        $this->userAccountType = $userAccountType;
        return $this;
    }

    public function getUserAccountType() {
        return $this->userAccountType;
    }

    public function setUserAccountType(int $userAccountType) {
        $this->userAccountType = $userAccountType;
    }
    public function userid(string $userid): V1UsersUseridGet200Response {
        $this->userid = $userid;
        return $this;
    }

    public function getUserid() {
        return $this->userid;
    }

    public function setUserid(string $userid) {
        $this->userid = $userid;
    }
    public function username(string $username): V1UsersUseridGet200Response {
        $this->username = $username;
        return $this;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername(string $username) {
        $this->username = $username;
    }
    public function uuid(string $uuid): V1UsersUseridGet200Response {
        $this->uuid = $uuid;
        return $this;
    }

    public function getUuid() {
        return $this->uuid;
    }

    public function setUuid(string $uuid) {
        $this->uuid = $uuid;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_type' => 'int',
        'account_version' => 'int',
        'ai_account_type' => 'int',
        'area' => 'string',
        'avatar_url' => 'string',
        'department_list' => '\wemeet\openapi\service\user_manager\model\V1UsersUseridGet200ResponseDepartmentListInner[]',
        'email' => 'string',
        'enable_ai_account' => 'bool',
        'entry_time' => 'string',
        'job_title' => 'string',
        'phone' => 'string',
        'phone_status' => 'int',
        'role_code' => 'string',
        'role_name' => 'string',
        'staff_id' => 'string',
        'status' => 'string',
        'update_time' => 'string',
        'user_account_type' => 'int',
        'userid' => 'string',
        'username' => 'string',
        'uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_type' => 'int64',
        'account_version' => 'int64',
        'ai_account_type' => 'int64',
        'area' => null,
        'avatar_url' => null,
        'department_list' => null,
        'email' => null,
        'enable_ai_account' => null,
        'entry_time' => null,
        'job_title' => null,
        'phone' => null,
        'phone_status' => 'int64',
        'role_code' => null,
        'role_name' => null,
        'staff_id' => null,
        'status' => null,
        'update_time' => null,
        'user_account_type' => 'int64',
        'userid' => null,
        'username' => null,
        'uuid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_type' => false,
        'account_version' => false,
        'ai_account_type' => false,
        'area' => false,
        'avatar_url' => false,
        'department_list' => false,
        'email' => false,
        'enable_ai_account' => false,
        'entry_time' => false,
        'job_title' => false,
        'phone' => false,
        'phone_status' => false,
        'role_code' => false,
        'role_name' => false,
        'staff_id' => false,
        'status' => false,
        'update_time' => false,
        'user_account_type' => false,
        'userid' => false,
        'username' => false,
        'uuid' => false
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
        'account_type' => 'account_type',
        'account_version' => 'account_version',
        'ai_account_type' => 'ai_account_type',
        'area' => 'area',
        'avatar_url' => 'avatar_url',
        'department_list' => 'department_list',
        'email' => 'email',
        'enable_ai_account' => 'enable_ai_account',
        'entry_time' => 'entry_time',
        'job_title' => 'job_title',
        'phone' => 'phone',
        'phone_status' => 'phone_status',
        'role_code' => 'role_code',
        'role_name' => 'role_name',
        'staff_id' => 'staff_id',
        'status' => 'status',
        'update_time' => 'update_time',
        'user_account_type' => 'user_account_type',
        'userid' => 'userid',
        'username' => 'username',
        'uuid' => 'uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_type' => 'setAccountType',
        'account_version' => 'setAccountVersion',
        'ai_account_type' => 'setAiAccountType',
        'area' => 'setArea',
        'avatar_url' => 'setAvatarUrl',
        'department_list' => 'setDepartmentList',
        'email' => 'setEmail',
        'enable_ai_account' => 'setEnableAiAccount',
        'entry_time' => 'setEntryTime',
        'job_title' => 'setJobTitle',
        'phone' => 'setPhone',
        'phone_status' => 'setPhoneStatus',
        'role_code' => 'setRoleCode',
        'role_name' => 'setRoleName',
        'staff_id' => 'setStaffId',
        'status' => 'setStatus',
        'update_time' => 'setUpdateTime',
        'user_account_type' => 'setUserAccountType',
        'userid' => 'setUserid',
        'username' => 'setUsername',
        'uuid' => 'setUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_type' => 'getAccountType',
        'account_version' => 'getAccountVersion',
        'ai_account_type' => 'getAiAccountType',
        'area' => 'getArea',
        'avatar_url' => 'getAvatarUrl',
        'department_list' => 'getDepartmentList',
        'email' => 'getEmail',
        'enable_ai_account' => 'getEnableAiAccount',
        'entry_time' => 'getEntryTime',
        'job_title' => 'getJobTitle',
        'phone' => 'getPhone',
        'phone_status' => 'getPhoneStatus',
        'role_code' => 'getRoleCode',
        'role_name' => 'getRoleName',
        'staff_id' => 'getStaffId',
        'status' => 'getStatus',
        'update_time' => 'getUpdateTime',
        'user_account_type' => 'getUserAccountType',
        'userid' => 'getUserid',
        'username' => 'getUsername',
        'uuid' => 'getUuid'
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
            'account_type' => $this->accountType,
            'account_version' => $this->accountVersion,
            'ai_account_type' => $this->aiAccountType,
            'area' => $this->area,
            'avatar_url' => $this->avatarUrl,
            'department_list' => $this->departmentList,
            'email' => $this->email,
            'enable_ai_account' => $this->enableAiAccount,
            'entry_time' => $this->entryTime,
            'job_title' => $this->jobTitle,
            'phone' => $this->phone,
            'phone_status' => $this->phoneStatus,
            'role_code' => $this->roleCode,
            'role_name' => $this->roleName,
            'staff_id' => $this->staffId,
            'status' => $this->status,
            'update_time' => $this->updateTime,
            'user_account_type' => $this->userAccountType,
            'userid' => $this->userid,
            'username' => $this->username,
            'uuid' => $this->uuid,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

