<?php

namespace Parse\SdkBundle\Parse;

use Parse\ParseInstallation;

class Parse
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
