<?php

use App\ApplicationDbContext;
use Core\Http\HttpResponse;
use Core\Libs\Helpers\Mapper;

class TestService
{
    private ApplicationDbContext $context;

    public function __construct()
    {
        $this->context = new ApplicationDbContext();
    }

    public function Index()
    {
        return HttpResponse::Ok();
    }

    public function List()
    {
        $addLicense = $this->context->TestEntity->List();

        return Mapper::Map($addLicense, License::class, true);
    }
}
