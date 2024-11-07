<?php

require_once 'vendor/autoload.php';

use wemeet\openapi\Client;
use wemeet\openapi\core\Exception\ServiceException;
use wemeet\openapi\core\Authenticator\JWTAuthenticator;
use wemeet\openapi\service\meetings\api\ApiV1MeetingsPostRequest;
use wemeet\openapi\service\meetings\model\V1MeetingsPostRequest;

function main() {
    $request = new ApiV1MeetingsPostRequest();
    $body = new V1MeetingsPostRequest(
        endTime: (string)(time()+3600),
        instanceid: 1,
        startTime: (string)time(),
        subject: "测试会议",
        type: 1,
        userid: "userid"
    );
    $request = $request->withBody($body);

    $client = new Client();
    $client = $client->build()
        ->withAppId("20****8")
        ->withSdkId("26****2")
        ->withSecret("Fb****E", "Df****D");

    try {
        $response = $client->meetings()->V1MeetingsPost($request, [new JWTAuthenticator()]);
    } catch (ServiceException $e) {
        var_dump($e->getErrorInfo());
    }
    var_dump($response->getData());
}