<?php

namespace Core\Http;

class AuthHeader
{
    public string $Type;
    public string $Body;

    public function __construct(string $authString)
    {
        $this->ParseAuthorization($authString);
    }

    private function ParseAuthorization(string $authString)
    {
        $authArray = explode(" ", $authString);
        $this->Type = $authArray[0];
        $this->Body = $authArray[1];
    }
}
