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

$document = array(
    'brand_name' => $_POST['brand_name'],
    'brand_des' => $_POST['brand_des'],
    'user_email' => $_POST['user_email'],
    'password' => $_POST['password'],
    'sponsorship_amount' => $_POST['sponsorship_amount'],
    'sponsorship_type' => $_POST['sponsorship_type'],
    'user_email' => $_POST['user_email'],
    'fb' => $_POST['fb'],
    'twt' => $_POST['twt']

);
print_r($document);  // ivide echo 200 itta mathi...
// Insert
$cpsSimple->insertSingle(rand(1,10000), $document);
echo 200;

?>