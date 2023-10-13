<?php


use App\ApplicationDbContext;
use App\Origins;
use App\Routes;
use Core\Core;
use Core\Database\DbContext;
use Core\Options\ApplicationOption;
use Core\Options\IApplicationOption;
use Core\Options\IDatabaseOption;
use Core\Options\MysqlDatabaseOption;
use Core\Route\RouteBase;
use Core\Security\OriginBase;

class Application
{
    private IApplicationOption $applicationOption;
    private IDatabaseOption $databaseOption;
    private OriginBase $origins;
    private RouteBase $routes;
    private DbContext $dbContext;
    private Core $core;

    public function __construct()
    {
        $this->applicationOption = new ApplicationOption(true, false);

        $this->databaseOption = new MysqlDatabaseOption(
            "localhost",
            "MvcText",
            "MvcUser",
            "Crim41Mesh82",
            "root",
            ""
        );

        $this->origins = new Origins();
        $this->routes = new Routes();
        $this->dbContext = new ApplicationDbContext();
        $this->applicationOption::SetContext($this->dbContext);
        $this->core = new Core($this->databaseOption, $this->applicationOption, $this->routes, $this->origins, $this->dbContext);

        $this->Seed();
        $this->Start();
    }

    private function Start()
    {

        $this->core->Start();
    }

    private function Seed()
    {
    }
}
