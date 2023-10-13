<?php


namespace App;


use App\DatabaseModels\License;
use Core\Database\DbContext;
use Core\Database\ITableProxy;
use Core\Database\MysqlTableProxy;
use TestEntity;

class ApplicationDbContext extends DbContext
{
    public ITableProxy $TestEntity;

    public function __construct()
    {
        parent::__construct();

        $this->TestEntity = new MysqlTableProxy(TestEntity::class);
    }
}
