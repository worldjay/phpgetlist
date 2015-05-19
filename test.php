<?php
/**
 * Created by PhpStorm.
 * User: Evan
 * Date: 2015/3/28
 * Time: 19:16
 */
require_once "Z_BAPI_PR_GETDETAIL_OFFICAL_SRV_Entities.php";
//connect
$OData = new Z_BAPI_PR_GETDETAIL_OFFICAL_SRV_Entities('http://180.166.99.166:8008/sap/opu/odata/sap/Z_BAPI_PR_GETDETAIL_OFFICAL_SRV/')
;
$OData->Credential = new WindowsCredential("leon","59866537");
try{
    $OData->addHeader('X-Request-With', 'XMLHttpRequest');
//$proxy->addHeader('X-Request-With', 'XMLHttpRequest');
//$query = new DataServiceQuery('numberSet', $proxy)
//->Filter("Number eq '0010008026'")
//->Expand();
    $response = $OData->RequisitionItemsSet()->Execute();
    $result = $response->Result;
    foreach ($result as $resultx ){
echo $resultx->CurrencyIso;
        // settype($result[$resultx],"string");
//        foreach ($resultx as $v){
//            echo ($v->CurrencyIso . "<br/>");
//
//        }
    }
}


catch(DataServiceRequestException $exception)
{
    echo $exception->Response->getError();
}
?>