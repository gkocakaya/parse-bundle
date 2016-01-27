<?php

namespace Gkocakaya\ParseSdkBundle\Parse;

use Parse\ParseInstallation;
use Parse\ParseClient;

class Client
{

    protected $appId;
    protected $restKey;
    protected $masterKey;

    /**
     * Initialize Push with needed Parse keys
     *
     * @param $appId
     * @param $restKey
     * @param $masterKey
     */
    public function __construct($appId, $restKey, $masterKey)
    {
        $this->appId = $appId;
        $this->restKey = $restKey;
        $this->masterKey = $masterKey;

        ParseClient::initialize($appId, $restKey, $masterKey);

    }

}
