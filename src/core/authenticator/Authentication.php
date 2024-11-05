<?php

/**
 * 测试环境项目
 *
 * api测试专用
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\core\authenticator;

use wemeet\openapi\core\xhttp\ApiRequest;


interface Authentication
{
    public function AuthHeader(ApiRequest $apiRequest, string $method);
}