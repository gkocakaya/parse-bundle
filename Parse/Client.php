<?php

namespace Gkocakaya\ParseSdkBundle\Parse;

use Parse\ParseInstallation;
use Parse\ParseClient;

class Client
{

    protected $appId;
    protected $restKey;
    protected $masterKey;
    protected $server;

    /**
     * Initialize Push with needed Parse keys
     *
     * @param $appId
     * @param $restKey
     * @param $masterKey
     */
    public function __construct($appId, $restKey, $masterKey, $server)
    {
        $this->appId = $appId;
        $this->restKey = $restKey;
        $this->masterKey = $masterKey;
        $this->server = $server;

        ParseClient::initialize($appId, $restKey, $masterKey);
        
        ParseClient::setServerURL($server,'parse');

        

    }

}
