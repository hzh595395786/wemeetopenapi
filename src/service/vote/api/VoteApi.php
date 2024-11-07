<?php

/**
 * 测试环境项目
 *
 * api测试专用
 *
 * The version of the OpenAPI document: v1.0.0.76
 */
namespace wemeet\openapi\service\vote\api;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Utils;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use InvalidArgumentException;
use Exception;
use wemeet\openapi\core\Configuration;
use wemeet\openapi\core\xhttp\HeaderSelector;
use wemeet\openapi\core\ObjectSerializer;
use wemeet\openapi\core\authenticator\Authentication;
use wemeet\openapi\core\exception\ClientException;
use wemeet\openapi\core\exception\ServiceException;
use wemeet\openapi\core\xhttp\ApiRequest;
use wemeet\openapi\core\xhttp\ApiResponse;
use wemeet\openapi\core\xhttp\PathParams;
use wemeet\openapi\core\xhttp\QueryParams;


class VoteApi
{
    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @var Configuration
     */
    protected Configuration $config;

    /**
     * @var HeaderSelector
     */
    protected HeaderSelector $headerSelector;

    public function __construct(
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->config = $config;
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * Operation V1MeetingsMeetingIdPollsPost
     *
     * 创建会议投票主题
     *
     */
     public function V1MeetingsMeetingIdPollsPost(ApiV1MeetingsMeetingIdPollsPostRequest $request, array $authentications = [], array $options = ['http_errors' => false]): ApiV1MeetingsMeetingIdPollsPostResponse {

         $headers = $this->headerSelector->selectHeaders([], '', false);

         $resourcePath = '/v1/meetings/{meeting_id}/polls';

         $pathParams = [];
         if (empty($request->getMeetingId())) {
            throw new InvalidArgumentException('meeting_id is required and must be specified');
         }
         if ($request->getMeetingId() !== null) {
             $pathParams['meeting_id'] = $request->getMeetingId();
         }

         $queryParams = [];

         $requestBody = null;

         $formData = [
         ];
         if (!empty($formData)) {
             $requestBody = new MultipartStream($formData);
             $headers['Content-Type'] = 'multipart/form-data; boundary=' . $requestBody->getBoundary();
         }

         $requestBody = Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($request->getBody()));

         foreach ($authentications as $auth) {
             if (!$auth instanceof Authentication) {
                 throw new InvalidArgumentException("All elements must implement the Authentication interface.");
             }
             $auth->withConfig($this->config);
         }

         $apiRequest = new ApiRequest($resourcePath, $requestBody, new PathParams($pathParams), new QueryParams($queryParams), $headers, $authentications);

         try {
             $response = $this->config->getClt()->post($apiRequest, $options);
             $statusCode = $response->getStatusCode();
             if ($statusCode >= 300) {
                 throw new ServiceException($response);
             } else {
                 return new ApiV1MeetingsMeetingIdPollsPostResponse($response);
             }
         } catch(ServiceException $e) {
             throw $e;
         } catch (ConnectException $e) {
             throw new ClientException(
                 $e->getMessage(),
                 $e->getCode(),
                 $e->getPrevious(),
             );
         } catch (Exception $e) {
             throw new Exception("发生了一个未知错误: " . $e->getMessage(), $e->getCode(), $e);
         }
     }

}

class ApiV1MeetingsMeetingIdPollsPostRequest {

    protected string|null $meeting_id = null;
    protected \wemeet\openapi\service\vote\model\V1MeetingsMeetingIdPollsPostRequest $body;

    public function getMeetingId(): string|null  {
        return $this->meeting_id;
    }
    public function getBody(): \wemeet\openapi\service\vote\model\V1MeetingsMeetingIdPollsPostRequest  {
        return $this->body;
    }


    public function withMeetingId(string $meeting_id): ApiV1MeetingsMeetingIdPollsPostRequest  {
        $this->meeting_id = $meeting_id;
        return $this;
    }
    public function withBody(\wemeet\openapi\service\vote\model\V1MeetingsMeetingIdPollsPostRequest $body)  {
        $this->body = $body;
        return $this;
    }

}

class ApiV1MeetingsMeetingIdPollsPostResponse extends ApiResponse {

    protected \wemeet\openapi\service\vote\model\V1MeetingsMeetingIdPollsPost200Response $data;

    public function __construct(ApiResponse $response) {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody()
        );
        try {
            $this->data = $response->translate('\wemeet\openapi\service\vote\model\V1MeetingsMeetingIdPollsPost200Response');
        } catch (\Exception $e) {
            throw new Exception("translate失败: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getData() {
        return $this->data;
    }
}

