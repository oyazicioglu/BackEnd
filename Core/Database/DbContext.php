<?php

namespace Core\Database;



use Core\Log\Log;

/**
 * Class DbContext
 * @package Core
 */
class DbContext
{
    #region Public Methods
    public ITableProxy $Logs;
    #endregion

    #region Constructor
    public function __construct()
    {
        $this->Logs = new MysqlTableProxy(Log::class);
    }
    #endregion

}