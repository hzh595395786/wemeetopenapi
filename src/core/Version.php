<?php

/**
 * 测试环境项目
 *
 * api测试专用
 *
 * The version of the OpenAPI document: v1.0.0.80
 */
namespace wemeet\openapi\core;


class Version {

    // Version SDK 版本
    public $version = "openapi-sdk-php/v1.0.0.80";

    public function getVersion() {
        return $this->version;
    }
}