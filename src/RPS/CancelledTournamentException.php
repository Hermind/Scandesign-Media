<?php

namespace SDM\RPS;

class CancelledTournamentException extends \Exception
{
    public function __construct()
    {
        return \Exception('Cancelled turnament');
    }
}
