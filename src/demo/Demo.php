<?php

require_once 'vendor/autoload.php';

use wemeet\openapi\Client;
use wemeet\openapi\core\Exception\ServiceException;
use wemeet\openapi\core\Authenticator\JWTAuthenticator;
use wemeet\openapi\service\meetings\api\ApiV1MeetingsPostRequest;
use wemeet\openapi\service\meetings\model\V1MeetingsPostRequest;

function main() {
    $data = '{
       "end_time": "1729252784",
       "start_time": "1729249184",
       "instanceid": 1,
       "subject": "Project Meeting",
       "type": 1,
       "userid": "zyyongzhou"
    }';
    $jsonArr = json_decode($data);
    $request = new ApiV1MeetingsPostRequest();
    $body = new V1MeetingsPostRequest(
        endTime: $jsonArr->end_time,
        instanceid: $jsonArr->instanceid,
        startTime: $jsonArr->start_time,
        subject: $jsonArr->subject,
        type: $jsonArr->type,
        userid: $jsonArr->userid
    );
    $request = $request->withBody($body);

    $client = new Client();
    $client = $client->build()
        ->withAppId("200005528")
        ->withSdkId("26260100832")
        ->withSecret("FbDDQGOVxgA9g3XHekKrXQbksQDrEHTE", "DfPOGUkm2G9NBPXMW3vVEIkO6quCuu2G7NIS5J2K0oEeKH1D");

    try {
        $response = $client->meetings()->V1MeetingsPost($request, [new JWTAuthenticator()]);
    } catch (ServiceException $e) {
        var_dump($e->getErrorInfo());
    }
    var_dump($response->getData());
}