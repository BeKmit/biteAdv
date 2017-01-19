<?php
return [
    'appName' => 'NTL',
    'appVer' => '2.0',
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,

    'protocol' => empty($_SERVER['HTTPS']) ? 'http' : 'https',

    'domain.main' => 'pmweb.cfg.co.th',
    'domain.backend' => 'pmweb.cfg.co.th',
    'domain.iSource' => 'pmweb.cfg.co.th',

    # Asset file version (css & js)
    'assetVer' => '0.0.1',
];
