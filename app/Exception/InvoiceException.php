<?php

namespace App\Exception;

class InvoiceException extends \Exception
{


    public static function missingBillingInfo(): static
    {
        return new static("Missing billing info");
    }
}