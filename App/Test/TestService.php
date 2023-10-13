<?php

namespace App\Test;

use App\ApplicationDbContext;
use Core\Http\HttpResponse;
use Core\Libs\Helpers\Mapper;
use Core\Options\ApplicationOption;

class TestService
{
    private ApplicationDbContext $context;

    public function __construct()
    {
        $this->context = ApplicationOption::$context;
    }

    public function Index()
    {
        print_r("Ok");
        return HttpResponse::Ok();
    }

    public function List()
    {
        $addLicense = $this->context->Test->List();
        return Mapper::Map($addLicense, License::class, true);
    }
}
