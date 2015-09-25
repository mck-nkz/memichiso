<?php
Configure::write('Security.salt', 'b2A5KDVHJajcKY9ckPSFQTLRJMQGFEDHkQCU7bfH');
Configure::write('Security.cipherSeed', '03450452026681236870204467168');
Configure::write('Cache.disable', false);
Configure::write('Cache.check', true);
Configure::write('Session.save', 'session');
Configure::write('BcEnv.siteUrl', 'http://myhost.kyan.dev/');
Configure::write('BcEnv.sslUrl', '');
Configure::write('BcApp.adminSsl', false);
Configure::write('BcApp.mobile', false);
Configure::write('BcApp.smartphone', false);
Cache::config('default', array('engine' => 'File'));
Configure::write('debug', 0);

Configure::write('App.baseUrl', '');
