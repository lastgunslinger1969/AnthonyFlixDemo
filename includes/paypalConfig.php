<?php

use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

require_once ("PayPal-PHP-SDK/autoload.php");

$apiContext = new ApiContext(
    new OAuthTokenCredential(
        'AbnA6cV9Llp3yLoSwpvqwLwpf8tOJzP-upviJWKPl7s9ojWKeCw1ZLallURtNuPb1xKx0t1j2PLoNlyq',     // ClientID
        'EGL2T7xgi1ZFke9GxGYRcqkUytzip6DuxJ_-G6Id7lMtY0S_eAUuI06ZyPrgHp_avvUalrVg9Xm0SXZS'      // ClientSecret
    )
);
