<?php

use Core\Controller;
use Core\Entities\ErrorCodes;
use Core\Http\HttpRequest;
use Core\Http\HttpResponse;
use Core\Libs\Helpers\RequestHelper;

class TestController extends Controller
{
    private TestService $service;

    public function __construct(HttpRequest $request, array $params)
    {
        parent::__construct($request, $params);
        $this->service  = new TestService();
    }

    function Index()
    {
        $body = $this->Request->Body;
        if (!isset($license))
            HttpResponse::Error("body not found", ErrorCodes::$RecordNotFound);

        RequestHelper::CheckRequirements($body, ["Token", "Id", "IncludeSubLicenses"]);

        HttpResponse::Ok();
    }

    function List()
    {
        return $this->service->List();
    }
}
