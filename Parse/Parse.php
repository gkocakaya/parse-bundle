<?php

namespace Gkocakaya\ParseSdkBundle\Parse;

use Parse\ParseInstallation;
use Parse\ParseClient;
use Parse\ParseQuery;

class Parse extends Client
{

    /**
     * Create and return a Parse Query
     *
     * @return \Parse\ParseQuery
     * @throws \Exception
     */
    public function createQuery()
    {
        return ParseInstallation::query();
    }
}
