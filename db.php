<?php
require_once './php_cps_api/cps_simple.php';
require_once './php_cps_api/cps_api.php';
$connectionStrings = array(	
  'tcp://cloud-eu-0.clusterpoint.com:9007',	
  'tcp://cloud-eu-1.clusterpoint.com:9007',	
  'tcp://cloud-eu-2.clusterpoint.com:9007',	
  'tcp://cloud-eu-3.clusterpoint.com:9007',	
);	
$cpsConn = new CPS_Connection(new CPS_LoadBalancer($connectionStrings), 'companydetails', 'jacobjmattam@praudyogiki.com', 'geeks@work4u', 'document', '//document/id', array('account' => 910));
//$cpsConn->setDebug(true);	
$cpsSimple = new CPS_Simple($cpsConn);

?>