<?php

namespace SDM\RPS;

class InvalidTournamentException extends \Exception
{
    public function __construct()
    {
        return \Exception('Invalid Turnament');
    }
}
