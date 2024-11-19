<?php

/**
 * 测试环境项目
 *
 * api测试专用
 *
 * The version of the OpenAPI document: v1.0.0.80
 */
namespace wemeet\openapi\core\exception;

use Exception;
use Throwable;


// ClientException 客户端异常
class ClientException extends Exception {

    // 构造方法，可以接收错误消息
    public function __construct($message = "", int $code = 500, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    // 重写 toString 方法以提供自定义字符串表示
    public function __toString() {
        return sprintf("[wemeet client error] %s", $this->getMessage());
    }
}