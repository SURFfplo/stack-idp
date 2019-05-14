<?php
/**
 * SAML 2.0 remote SP metadata for simpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */


/*
 ***********************
 * FPLO PILOT 2018
 ***********************
 */

$metadata['https://www.pilot.fplo.surfnet.nl/Shibboleth'] = array(
        'AssertionConsumerService' => 'https://www.pilot.fplo.surfnet.nl/Shibboleth.sso/SAML2/POST',
        /*'SingleLogoutService' => 'https://www.pilot.fplo.surfnet.nl/Shibboleth.sso/SLO/POST',*/
  'authproc' => array(
    /* add schacHomeOrganization attribute */
    10 => array(
      'class' => 'core:AttributeAdd',
      'schacHomeOrganization' => 'surfuni.org',
    ),
    60 => array(
        'class' => 'authorize:Authorize',
        'uid'   =>  array (
            '/\d*/',
        ),
    ),
    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
    90 => array(
      'class' => 'core:AttributeMap',
      /* 'uid'                    => 'urn:mace:dir:attribute-def:uid', */
      'urn:oid:0.9.2342.19200300.100.1.1'                    => 'urn:mace:dir:attribute-def:uid',
      'sn'                     => 'urn:mace:dir:attribute-def:sn',
      'givenName'              => 'urn:mace:dir:attribute-def:givenName',
      'cn'                     => 'urn:mace:dir:attribute-def:cn',
      'displayName'            => 'urn:mace:dir:attribute-def:displayName',
      'mail'                   => 'urn:mace:dir:attribute-def:mail',
      'eduPersonPrincipalName' => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
      'eduPersonEntitlement'   => 'urn:mace:dir:attribute-def:eduPersonEntitlement',
      'eduPersonAffiliation'   => 'urn:mace:dir:attribute-def:eduPersonAffiliation',
      'schacHomeOrganization'  => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
    ),
  ),
);

$metadata['http://lms.pilot.fplo.surfnet.nl/saml2'] = array(
        'AssertionConsumerService' => 'https://lms.pilot.fplo.surfnet.nl/login/saml',
        'SingleLogoutService' => 'https://lms.pilot.fplo.surfnet.nl/login/saml/logout',

  'authproc' => array(
    /* add schacHomeOrganization attribute */
    10 => array(
      'class' => 'core:AttributeAdd',
      'schacHomeOrganization' => 'surfuni.org',
    ),
    50 => array(
        'class' => 'core:AttributeCopy',
        'urn:mace:dir:attribute-def:mail' => 'eduPersonPrincipalName',
    ),
    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
/*
    90 => array(
      'class' => 'core:AttributeMap',
      'uid'                    => 'urn:mace:dir:attribute-def:uid',
      'sn'                     => 'urn:mace:dir:attribute-def:sn',
      'givenName'              => 'urn:mace:dir:attribute-def:givenName',
      'cn'                     => 'urn:mace:dir:attribute-def:cn',
      'displayName'            => 'urn:mace:dir:attribute-def:displayName',
      'mail'                   => 'urn:mace:dir:attribute-def:mail',
      'eduPersonPrincipalName' => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
      'eduPersonEntitlement'   => 'urn:mace:dir:attribute-def:eduPersonEntitlement',
      'eduPersonAffiliation'   => 'urn:mace:dir:attribute-def:eduPersonAffiliation',
      'schacHomeOrganization'  => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
    ),
*/
  ),
);

$metadata['https://account.pilot.fplo.surfnet.nl/simplesaml/module.php/saml/sp/metadata.php/default-sp'] = array(
        'AssertionConsumerService' => 'https://account.pilot.fplo.surfnet.nl/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
        'SingleLogoutService' => 'https://account.pilot.fplo.surfnet.nl/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
'authproc' => array(
    /* add schacHomeOrganization attribute */
    10 => array(
      'class' => 'core:AttributeAdd',
      'schacHomeOrganization' => 'surfuni.org',
    ),
    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
/*
    90 => array(
      'class' => 'core:AttributeMap',
      'uid'                    => 'urn:mace:dir:attribute-def:uid',
      'sn'                     => 'urn:mace:dir:attribute-def:sn',
      'givenName'              => 'urn:mace:dir:attribute-def:givenName',
      'cn'                     => 'urn:mace:dir:attribute-def:cn',
      'mail'                   => 'urn:mace:dir:attribute-def:mail',
      'memberOf'               => 'isMemberOf',

      'displayName'            => 'urn:mace:dir:attribute-def:displayName',
      'eduPersonPrincipalName' => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
      'eduPersonAffiliation'   => 'urn:mace:dir:attribute-def:eduPersonAffiliation',
      'schacHomeOrganization'  => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
    ),
*/
  ),
);

$metadata['https://grouphub.pilot.fplo.surfnet.nl/simplesaml/module.php/saml/sp/metadata.php/default-sp'] = array(
        'AssertionConsumerService' => 'https://grouphub.pilot.fplo.surfnet.nl/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
  'authproc' => array(
    /* add schacHomeOrganization attribute */
    10 => array(
      'class' => 'core:AttributeAdd',
      'schacHomeOrganization' => 'surfuni.org',
    ),
    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
    90 => array(
      'class' => 'core:AttributeMap',
      'uid'                    => 'urn:mace:dir:attribute-def:uid',
      'sn'                     => 'urn:mace:dir:attribute-def:sn',
      'givenName'              => 'urn:mace:dir:attribute-def:givenName',
      'cn'                     => 'urn:mace:dir:attribute-def:cn',
      'displayName'            => 'urn:mace:dir:attribute-def:displayName',
      'mail'                   => 'urn:mace:dir:attribute-def:mail',
      'eduPersonPrincipalName' => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
      'eduPersonEntitlement'   => 'urn:mace:dir:attribute-def:eduPersonEntitlement',
      'eduPersonAffiliation'   => 'urn:mace:dir:attribute-def:eduPersonAffiliation',
      'schacHomeOrganization'  => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
    ),
  ),
);

/*
 ***********************
 * FPLO DEMO 2018
 ***********************
 */

$metadata['https://www.demo.fplo.surfnet.nl/Shibboleth'] = array(
        'AssertionConsumerService' => 'https://www.demo.fplo.surfnet.nl/Shibboleth.sso/SAML2/POST',
        /*'SingleLogoutService' => 'https://www.demo.fplo.surfnet.nl/Shibboleth.sso/SLO/POST',*/
  'authproc' => array(
    /* add schacHomeOrganization attribute */
    10 => array(
      'class' => 'core:AttributeAdd',
      'schacHomeOrganization' => 'surfuni.org',
    ),
    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
    90 => array(
      'class' => 'core:AttributeMap',
      'uid'                    => 'urn:mace:dir:attribute-def:uid',
      'sn'                     => 'urn:mace:dir:attribute-def:sn',
      'givenName'              => 'urn:mace:dir:attribute-def:givenName',
      'cn'                     => 'urn:mace:dir:attribute-def:cn',
      'displayName'            => 'urn:mace:dir:attribute-def:displayName',
      'mail'                   => 'urn:mace:dir:attribute-def:mail',
      'eduPersonPrincipalName' => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
      'eduPersonEntitlement'   => 'urn:mace:dir:attribute-def:eduPersonEntitlement',
      'eduPersonAffiliation'   => 'urn:mace:dir:attribute-def:eduPersonAffiliation',
      'schacHomeOrganization'  => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
    ),
  ),
);

$metadata['https://lms.demo.fplo.surfnet.nl/saml2'] = array(
        'AssertionConsumerService' => 'https://lms.demo.fplo.surfnet.nl/login/saml',
        'SingleLogoutService' => 'https://lms.demo.fplo.surfnet.nl/login/saml/logout',

  'authproc' => array(
    /* add schacHomeOrganization attribute */
    10 => array(
      'class' => 'core:AttributeAdd',
      'schacHomeOrganization' => 'surfuni.org',
    ),
    50 => array(
        'class' => 'core:AttributeCopy',
        'mail' => 'eduPersonPrincipalName',
    ),
    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
/*
    90 => array(
      'class' => 'core:AttributeMap',
      'uid'                    => 'urn:mace:dir:attribute-def:uid',
      'sn'                     => 'urn:mace:dir:attribute-def:sn',
      'givenName'              => 'urn:mace:dir:attribute-def:givenName',
      'cn'                     => 'urn:mace:dir:attribute-def:cn',
      'displayName'            => 'urn:mace:dir:attribute-def:displayName',
      'mail'                   => 'urn:mace:dir:attribute-def:mail',
      'eduPersonPrincipalName' => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
      'eduPersonEntitlement'   => 'urn:mace:dir:attribute-def:eduPersonEntitlement',
      'eduPersonAffiliation'   => 'urn:mace:dir:attribute-def:eduPersonAffiliation',
      'schacHomeOrganization'  => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
    ),
*/
  ),
);

$metadata['https://grouphub.demo.fplo.surfnet.nl/simplesaml/module.php/saml/sp/metadata.php/default-sp'] = array(
        'AssertionConsumerService' => 'https://grouphub.demo.fplo.surfnet.nl/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
  'authproc' => array(
    /* add schacHomeOrganization attribute */
    10 => array(
      'class' => 'core:AttributeAdd',
      'schacHomeOrganization' => 'surfuni.org',
    ),
    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
    90 => array(
      'class' => 'core:AttributeMap',
      'uid'                    => 'urn:mace:dir:attribute-def:uid',
      'sn'                     => 'urn:mace:dir:attribute-def:sn',
      'givenName'              => 'urn:mace:dir:attribute-def:givenName',
      'cn'                     => 'urn:mace:dir:attribute-def:cn',
      'displayName'            => 'urn:mace:dir:attribute-def:displayName',
      'mail'                   => 'urn:mace:dir:attribute-def:mail',
      'eduPersonPrincipalName' => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
      'eduPersonEntitlement'   => 'urn:mace:dir:attribute-def:eduPersonEntitlement',
      'eduPersonAffiliation'   => 'urn:mace:dir:attribute-def:eduPersonAffiliation',
      'schacHomeOrganization'  => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
    ),
  ),
);

$metadata['http://la.demo.fplo.surfnet.nl/simplesaml/module.php/saml/sp/metadata.php/default-sp'] = array(
        'AssertionConsumerService' => 'http://la.demo.fplo.surfnet.nl/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
  'authproc' => array(
    /* add schacHomeOrganization attribute */
    10 => array(
      'class' => 'core:AttributeAdd',
      'schacHomeOrganization' => 'surfuni.org',
    ),
    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
    90 => array(
      'class' => 'core:AttributeMap',
      'uid'                    => 'urn:mace:dir:attribute-def:uid',
      'sn'                     => 'urn:mace:dir:attribute-def:sn',
      'givenName'              => 'urn:mace:dir:attribute-def:givenName',
      'cn'                     => 'urn:mace:dir:attribute-def:cn',
      'displayName'            => 'urn:mace:dir:attribute-def:displayName',
      'mail'                   => 'urn:mace:dir:attribute-def:mail',
      'eduPersonPrincipalName' => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
      'eduPersonEntitlement'   => 'urn:mace:dir:attribute-def:eduPersonEntitlement',
      'eduPersonAffiliation'   => 'urn:mace:dir:attribute-def:eduPersonAffiliation',
      'schacHomeOrganization'  => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
    ),
  ),
);

$metadata['https://lms-moodle.demo.fplo.surfnet.nl/auth/saml2/sp/metadata.php'] = array(
        'AssertionConsumerService' => 'https://lms-moodle.demo.fplo.surfnet.nl/auth/saml2/sp/saml2-acs.php/lms-moodle.demo.fplo.surfnet.nl',
        'SingleLogoutService' => 'https://lms-moodle.demo.fplo.surfnet.nl/auth/saml2/sp/saml2-logout.php/lms-moodle.demo.fplo.surfnet.nl',

  'authproc' => array(
    /* add schacHomeOrganization attribute */
    10 => array(
      'class' => 'core:AttributeAdd',
      'schacHomeOrganization' => 'surfuni.org',
    ),
    50 => array(
        'class' => 'core:AttributeCopy',
        'mail' => 'eduPersonPrincipalName',
    ),
    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
/*
    90 => array(
      'class' => 'core:AttributeMap',
      'uid'                    => 'urn:mace:dir:attribute-def:uid',
      'sn'                     => 'urn:mace:dir:attribute-def:sn',
      'givenName'              => 'urn:mace:dir:attribute-def:givenName',
      'cn'                     => 'urn:mace:dir:attribute-def:cn',
      'displayName'            => 'urn:mace:dir:attribute-def:displayName',
      'mail'                   => 'urn:mace:dir:attribute-def:mail',
      'eduPersonPrincipalName' => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
      'eduPersonEntitlement'   => 'urn:mace:dir:attribute-def:eduPersonEntitlement',
      'eduPersonAffiliation'   => 'urn:mace:dir:attribute-def:eduPersonAffiliation',
      'schacHomeOrganization'  => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
    ),
*/
  ),
);

/*
 ***********************
 * FPLO TOOLS 2018
 ***********************
 */

$metadata['https://server.tor.nl/~tom/fplo/sso/endpoints/metadata.php'] = array(
        'AssertionConsumerService' => 'https://server.tor.nl/~tom/fplo/sso/endpoints/acs.php',
  'authproc' => array(
    /* add schacHomeOrganization attribute */
    10 => array(
      'class' => 'core:AttributeAdd',
      'schacHomeOrganization' => 'surfuni.org',
    ),
    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
    90 => array(
      'class' => 'core:AttributeMap',
      'uid'                    => 'urn:mace:dir:attribute-def:uid',
      'sn'                     => 'urn:mace:dir:attribute-def:sn',
      'givenName'              => 'urn:mace:dir:attribute-def:givenName',
      'cn'                     => 'urn:mace:dir:attribute-def:cn',
      'displayName'            => 'urn:mace:dir:attribute-def:displayName',
      'mail'                   => 'urn:mace:dir:attribute-def:mail',
      'eduPersonPrincipalName' => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
      'eduPersonEntitlement'   => 'urn:mace:dir:attribute-def:eduPersonEntitlement',
      'eduPersonAffiliation'   => 'urn:mace:dir:attribute-def:eduPersonAffiliation',
      'schacHomeOrganization'  => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
    ),
  ),
);

$metadata['http://acc.pluform.com/nl/saml/metadata.xml'] = array(
        'AssertionConsumerService' => 'http://acc.pluform.com/nl/saml/consume',
  'authproc' => array(
    /* add schacHomeOrganization attribute */
    10 => array(
      'class' => 'core:AttributeAdd',
      'schacHomeOrganization' => 'surfuni.org',
    ),
    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
    90 => array(
      'class' => 'core:AttributeMap',
      'uid'                    => 'urn:mace:dir:attribute-def:uid',
      'sn'                     => 'urn:mace:dir:attribute-def:sn',
      'givenName'              => 'urn:mace:dir:attribute-def:givenName',
      'cn'                     => 'urn:mace:dir:attribute-def:cn',
      'displayName'            => 'urn:mace:dir:attribute-def:displayName',
      'mail'                   => 'urn:mace:dir:attribute-def:mail',
      'eduPersonPrincipalName' => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
      'eduPersonEntitlement'   => 'urn:mace:dir:attribute-def:eduPersonEntitlement',
      'eduPersonAffiliation'   => 'urn:mace:dir:attribute-def:eduPersonAffiliation',
      'schacHomeOrganization'  => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
    ),
  ),
);

$metadata['https://easionedu.dev.easion.nl/simplesaml/module.php/saml/sp/metadata.php/peerion'] = array(
        'AssertionConsumerService' => 'https://easionedu.dev.easion.nl/simplesaml/module.php/saml/sp/saml2-acs.php/peerion',
        'SingleLogoutService'  => 'https://easionedu.dev.easion.nl/simplesaml/module.php/saml/sp/saml2-logout.php/peerion',
  'authproc' => array(
    /* add schacHomeOrganization attribute */
    10 => array(
      'class' => 'core:AttributeAdd',
      'schacHomeOrganization' => 'surfuni.org',
    ),
    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
    90 => array(
      'class' => 'core:AttributeMap',
      'uid'                    => 'urn:mace:dir:attribute-def:uid',
      'sn'                     => 'urn:mace:dir:attribute-def:sn',
      'givenName'              => 'urn:mace:dir:attribute-def:givenName',
      'cn'                     => 'urn:mace:dir:attribute-def:cn',
      'displayName'            => 'urn:mace:dir:attribute-def:displayName',
      'mail'                   => 'urn:mace:dir:attribute-def:mail',
      'eduPersonPrincipalName' => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
      'eduPersonEntitlement'   => 'urn:mace:dir:attribute-def:eduPersonEntitlement',
      'eduPersonAffiliation'   => 'urn:mace:dir:attribute-def:eduPersonAffiliation',
      'schacHomeOrganization'  => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
    ),
  ),
);

$metadata['http://sp.tst-surf-gradework.xebic.com'] = array(
        'AssertionConsumerService' => 'https://surf.xebic.com/AssertionService.aspx',
        'SingleLogoutService' => 'https://surf.xebic.com/SingleLogoutService.aspx',
  'authproc' => array(
    /* add schacHomeOrganization attribute */
    10 => array(
      'class' => 'core:AttributeAdd',
      'schacHomeOrganization' => 'surfuni.org',
    ),
    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
    90 => array(
      'class' => 'core:AttributeMap',
      'uid'                    => 'urn:mace:dir:attribute-def:uid',
      'sn'                     => 'urn:mace:dir:attribute-def:sn',
      'givenName'              => 'urn:mace:dir:attribute-def:givenName',
      'cn'                     => 'urn:mace:dir:attribute-def:cn',
      'displayName'            => 'urn:mace:dir:attribute-def:displayName',
      'mail'                   => 'urn:mace:dir:attribute-def:mail',
      'eduPersonPrincipalName' => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
      'eduPersonEntitlement'   => 'urn:mace:dir:attribute-def:eduPersonEntitlement',
      'eduPersonAffiliation'   => 'urn:mace:dir:attribute-def:eduPersonAffiliation',
      'schacHomeOrganization'  => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
    ),
  ),
);

$metadata['https://surf.onderwijsonline.nl/saml/module.php/saml/sp/metadata.php/surfpilot'] = array(
        'AssertionConsumerService' => 'https://surf.onderwijsonline.nl/saml/module.php/saml/sp/saml2-acs.php/surfpilot',
        'SingleLogoutService' => 'https://surf.onderwijsonline.nl/saml/module.php/saml/sp/saml2-logout.php/surfpilot',
  'authproc' => array(
    /* add schacHomeOrganization attribute */
    10 => array(
      'class' => 'core:AttributeAdd',
      'schacHomeOrganization' => 'surfuni.org',
    ),
    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
    90 => array(
      'class' => 'core:AttributeMap',
      'uid'                    => 'urn:mace:dir:attribute-def:uid',
      'sn'                     => 'urn:mace:dir:attribute-def:sn',
      'givenName'              => 'urn:mace:dir:attribute-def:givenName',
      'cn'                     => 'urn:mace:dir:attribute-def:cn',
      'displayName'            => 'urn:mace:dir:attribute-def:displayName',
      'mail'                   => 'urn:mace:dir:attribute-def:mail',
      'eduPersonPrincipalName' => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
      'eduPersonEntitlement'   => 'urn:mace:dir:attribute-def:eduPersonEntitlement',
      'eduPersonAffiliation'   => 'urn:mace:dir:attribute-def:eduPersonAffiliation',
      'schacHomeOrganization'  => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
    ),
  ),
);

$metadata['https://secure.pluform.com/nl/saml/metadata'] = array(
        'AssertionConsumerService' => 'https://secure.pluform.com/nl/saml/acs',
        'SingleLogoutService' => 'https://secure.pluform.com/nl/saml/sls',
  'authproc' => array(
    /* add schacHomeOrganization attribute */
    10 => array(
      'class' => 'core:AttributeAdd',
      'schacHomeOrganization' => 'surfuni.org',
    ),
    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
    90 => array(
      'class' => 'core:AttributeMap',
      'uid'                    => 'urn:mace:dir:attribute-def:uid',
      'sn'                     => 'urn:mace:dir:attribute-def:sn',
      'givenName'              => 'urn:mace:dir:attribute-def:givenName',
      'cn'                     => 'urn:mace:dir:attribute-def:cn',
      'displayName'            => 'urn:mace:dir:attribute-def:displayName',
      'mail'                   => 'urn:mace:dir:attribute-def:mail',
      'eduPersonPrincipalName' => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
      'eduPersonEntitlement'   => 'urn:mace:dir:attribute-def:eduPersonEntitlement',
      'eduPersonAffiliation'   => 'urn:mace:dir:attribute-def:eduPersonAffiliation',
      'schacHomeOrganization'  => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
    ),
  ),
);

$metadata['https://secure.pluform.com/nl/saml_surfpilot/metadata'] = array(
        'AssertionConsumerService' => 'https://secure.pluform.com/nl/saml_surfpilot/acs',
        'SingleLogoutService' => 'https://secure.pluform.com/nl/saml_surfpilot/sls',
  'authproc' => array(
    /* add schacHomeOrganization attribute */
    10 => array(
      'class' => 'core:AttributeAdd',
      'schacHomeOrganization' => 'surfuni.org',
    ),
    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
    90 => array(
      'class' => 'core:AttributeMap',
      'uid'                    => 'urn:mace:dir:attribute-def:uid',
      'sn'                     => 'urn:mace:dir:attribute-def:sn',
      'givenName'              => 'urn:mace:dir:attribute-def:givenName',
      'cn'                     => 'urn:mace:dir:attribute-def:cn',
      'displayName'            => 'urn:mace:dir:attribute-def:displayName',
      'mail'                   => 'urn:mace:dir:attribute-def:mail',
      'eduPersonPrincipalName' => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
      'eduPersonEntitlement'   => 'urn:mace:dir:attribute-def:eduPersonEntitlement',
      'eduPersonAffiliation'   => 'urn:mace:dir:attribute-def:eduPersonAffiliation',
      'schacHomeOrganization'  => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
    ),
  ),
);

/*
 ***********************
 * DLO 2019
 ***********************
 */

$metadata['http://account.dlo.surfnet.nl/saml/metadata'] = array(
        'AssertionConsumerService' => 'http://account.dlo.surfnet.nl/saml/acs',
        'SingleLogoutService' => 'http://account.dlo.surfnet.nl/saml/logout',
'authproc' => array(
    /* add schacHomeOrganization attribute */
    10 => array(
      'class' => 'core:AttributeAdd',
      'schacHomeOrganization' => 'surfuni.org',
    ),
    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
/*
    90 => array(
      'class' => 'core:AttributeMap',
      'uid'                    => 'urn:mace:dir:attribute-def:uid',
      'sn'                     => 'urn:mace:dir:attribute-def:sn',
      'givenName'              => 'urn:mace:dir:attribute-def:givenName',
      'cn'                     => 'urn:mace:dir:attribute-def:cn',
      'mail'                   => 'urn:mace:dir:attribute-def:mail',
      'memberOf'               => 'isMemberOf',

      'displayName'            => 'urn:mace:dir:attribute-def:displayName',
      'eduPersonPrincipalName' => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
      'eduPersonAffiliation'   => 'urn:mace:dir:attribute-def:eduPersonAffiliation',
      'schacHomeOrganization'  => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
    ),
*/
  ),
);

$metadata['http://lms.dlo.surfnet.nl/saml2'] = array(
        'AssertionConsumerService' => 'http://lms.dlo.surfnet.nl/login/saml',
        'SingleLogoutService' => 'http://lms.dlo.surfnet.nl/login/saml/logout',

  'authproc' => array(
    /* add schacHomeOrganization attribute */
    10 => array(
      'class' => 'core:AttributeAdd',
      'schacHomeOrganization' => 'surfuni.org',
    ),
    50 => array(
        'class' => 'core:AttributeCopy',
        'mail' => 'eduPersonPrincipalName',
    ),
    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
/*
    90 => array(
      'class' => 'core:AttributeMap',
      'uid'                    => 'urn:mace:dir:attribute-def:uid',
      'sn'                     => 'urn:mace:dir:attribute-def:sn',
      'givenName'              => 'urn:mace:dir:attribute-def:givenName',
      'cn'                     => 'urn:mace:dir:attribute-def:cn',
      'displayName'            => 'urn:mace:dir:attribute-def:displayName',
      'mail'                   => 'urn:mace:dir:attribute-def:mail',
      'eduPersonPrincipalName' => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
      'eduPersonEntitlement'   => 'urn:mace:dir:attribute-def:eduPersonEntitlement',
      'eduPersonAffiliation'   => 'urn:mace:dir:attribute-def:eduPersonAffiliation',
      'schacHomeOrganization'  => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
    ),
*/
  ),
);

