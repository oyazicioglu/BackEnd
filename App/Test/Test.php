<?php

namespace App\Test;

class Test
{
    /**
     * @var int
     * |@dataType = bigint
     * |@autoIncrement = true
     * |@key = primary
     */
    public int $Id;

    /**
     * @var bool
     * |@dataType = varchar
     * |@isNullable = false
     */
    public bool $Name;
}
