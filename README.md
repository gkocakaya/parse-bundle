# ParseBundle
The Parse Symfony2 Bundle https://parse.com/products/php

# Installation

composer install

$ php composer.phar require gkocakaya/parse-bundle *

### Enable the bundle
<?php
    // app/AppKernel.php

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new gkocakaya\ParseSdkBundle\GkocakayaParseSdkBundle(),

        );
    }

# Config

Parse.com 

	# app/config/config.yml

	gkocakaya_parse_sdk:
		    	app_id: APPLICATION_ID
		    	rest_key: REST_KEY
		    	master_key: MASTER_KEY

# Usage


# Credit


