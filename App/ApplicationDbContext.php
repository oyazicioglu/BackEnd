<?php


namespace App;

use App\Test\Test;
use Core\Database\DbContext;
use Core\Database\ITableProxy;
use Core\Database\MysqlTableProxy;

class ApplicationDbContext extends DbContext
{
    public ITableProxy $Test;

    public function __construct()
    {
        parent::__construct();

        $this->Test = new MysqlTableProxy(Test::class);
    }
}
