<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote 
 */

$metadata['https://engine.connect.surfconext.nl/authentication/idp/metadata'] = array(
    'SingleSignOnService'  => 'https://engine.connect.surfconext.nl/authentication/idp/single-sign-on',
    'certFingerprint'      => array('25:72:85:66:C9:94:22:98:36:84:11:E1:88:C7:AC:40:98:F9:E7:82'),
);

$metadata['https://engine.test.surfconext.nl/authentication/idp/metadata'] = array(
    'SingleSignOnService'  => 'https://engine.test.surfconext.nl/authentication/idp/single-sign-on',
    'certFingerprint'      => array('25:72:85:66:C9:94:22:98:36:84:11:E1:88:C7:AC:40:98:F9:E7:82'),
);

