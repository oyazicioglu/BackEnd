<?php

namespace Core\Options;

use App\ApplicationDbContext;
use Core\Database\DbContext;
use Core\Exceptions\NoApplicationOptionException;
use Exception;

/**
 * Class ApplicationConfig
 * @package Options
 */
class ApplicationOption implements IApplicationOption
{
    #region Public Fields
    public static ApplicationDbContext $context;
    #endregion

    #region Private Fields
    private ?bool $_isDevelopment;
    private bool $_reportErrors;
    private ?bool $_enableMigration;
    private bool $_filterOrigins;
    private int $_uploadSizeInMb = 256;
    #endregion


    #region Constructor
    public function __construct(
        bool $isDevelopment,
        bool $enableMigration,
        bool $reportErrors = true,
        bool $filterOrigins = true,
        int $uploadSizeInMb = 256,
    ) {
        try {
            $this->_enableMigration = $enableMigration;
            $this->_isDevelopment = $isDevelopment;
            $this->_reportErrors = $reportErrors;
            $this->_filterOrigins = $filterOrigins;
            $this->_uploadSizeInMb = $uploadSizeInMb;
        } catch (Exception $e) {
            new NoApplicationOptionException();
        }
    }
    #endregion

    #region Public Methods
    public static function SetContext(DBContext $context)
    {
        self::$context = $context;
    }

    public function IsDevelopment(): bool
    {
        return $this->_isDevelopment;
    }

    public function ReportErrors(): bool
    {
        return $this->_reportErrors;
    }

    public function FilterOrigins(): bool
    {
        return $this->_filterOrigins;
    }

    public function EnableMigration(): bool
    {
        return $this->_enableMigration;
    }

    public function SetEnableMigration(int $enableMigration)
    {
        $this->_enableMigration = $enableMigration;
    }

    public function UploadSize(): int
    {
        return $this->_uploadSizeInMb;
    }
    #endregion

    #region Private Methods
    #endregion

    #region Helpers
    #endregion
}
