<?php

declare(strict_types=1);

namespace Anaf\Exceptions;

use Exception;

class TaxIdentificationNumberNotFoundException extends Exception
{
    public function __construct()
    {
        parent::__construct('Tax identification number not found');
    }
}
