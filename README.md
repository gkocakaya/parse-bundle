# ParseBundle
The Parse Symfony2 Bundle https://parse.com/products/php

# Installation

composer install

   php composer.phar require gkocakaya/parse-bundle *



    // app/AppKernel.php

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new gkocakaya\ParseSdkBundle\ParseSdkBundle(),

        );
    }

# Config

Parse.com 

	# app/config/config.yml

	pars_sdk:
    	app_id: APPLICATION_ID
    	rest_key: REST_KEY
    	master_key: MASTER_KEY

# Usage


# Credit


