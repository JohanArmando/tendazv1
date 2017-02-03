<?php

namespace Tendaz\Api\Twocheckout\Api;

use League\Flysystem\Exception;
use Tendaz\Api\Twocheckout;

class Twocheckout_Error extends Exception
{
    public function __construct($message, $code = 0)
    {
        parent::__construct($message, $code);
    }

    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
