<?php


namespace Core\Exceptions;

use Core\Http\HttpResponse;
use Exception;
use Throwable;

class ForbiddenException extends Exception
{
    public function __construct(Throwable $previous = null, bool $isDevelopment = false)
    {
        $trace = "";
        $localMessage = "Forbidden Exception";

        if ($isDevelopment) {
            $trace = " || Trace: " . $this->getTraceAsString();
            $localMessage = "Forbidden Exception";
        }

        parent::__construct($localMessage, 403, $previous);
        HttpResponse::Error("Forbidden Exception" . $trace, 403);
    }
}
