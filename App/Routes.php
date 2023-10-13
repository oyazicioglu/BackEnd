<?php


namespace App;

use App\Test\TestController;
use Core\Http\Enums\RequestTypes;
use Core\Route\RouteBase;

/**
 * Class Router
 * @package Core\Route
 */
class Routes extends RouteBase
{

    #region Public Methods
    #endregion

    #region Constructor
    /**
     * Router constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->Add("test/list", TestController::class, "List", RequestTypes::$Post);
        $this->Add("test", TestController::class, "Index", RequestTypes::$Get);
    }

    #endregion

    #region Private Methods
    #endregion

    #region Helpers
    #endregion

}
