<?php
/**
 * Created by PhpStorm.
 * User: Evan
 * Date: 2015/3/28
 * Time: 19:16
 */
require_once "Z_BAPI_PR_GETDETAIL_OFFICAL_SRV_Entities.php";
//connect
$OData = new Z_BAPI_PR_GETDETAIL_OFFICAL_SRV_Entities('180.166.99.166:8008/sap/opu/odata/sap/Z_BAPI_PR_GETDETAIL_OFFICAL_SRV/')
;
$OData->Credential = new WindowsCredential("leon","59866537");
//try{
//    $OData->addHeader('X-Request-With', 'XMLHttpRequest');
////$proxy->addHeader('X-Request-With', 'XMLHttpRequest');
////$query = new DataServiceQuery('numberSet', $proxy)
////->Filter("Number eq '0010008026'")
////->Expand();
//    $response = $OData->RequisitionItemsSet()->Execute();
//    $result = $response->Result;
//    foreach ($result as $resultx ){
//
//        // settype($result[$resultx],"string");
//        foreach ($resultx as $v){
//            echo ($v->ShortText . "<br/>");
//
//        }}
//}
//
//
//catch(DataServiceRequestException $exception)
//{
//    echo $exception->Response->getError();
//}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script src="jquery-2.1.3.js"></script>
    <script src="jquery.mobile-1.4.5.min.js"></script>
    <link type="text/css" rel="stylesheet" href="my.css">
    <link type="text/css" rel="stylesheet" href="jquery.mobile-1.4.5.min.css">

</head>
<body>
<div data-role="page" id="pageone">
    <header data-role="header" data-position="fixed">
        <h1>采购申请列表</h1>
    </header>
    <div class="content" data-role="content">
        <ul data-role="listview" data-inset="true">
            <?php
            try{
            $OData->addHeader('X-Request-With', 'XMLHttpRequest');
            //$proxy->addHeader('X-Request-With', 'XMLHttpRequest');
            //$query = new DataServiceQuery('numberSet', $proxy)
            //->Filter("Number eq '0010008026'")
            //->Expand();
            $response = $OData->RequisitionItemsSet()->Top('10')->Execute();
            $result = $response->Result;
            foreach ($result as $v ){

            // settype($result[$resultx],"string");
            //foreach ($resultx as $v){
                echo '<li><a href="#pagetwo" data-transition="slide">';
                echo '<h2 style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;line-height: 100%;height: 100%">';
                echo ($v->PreqNo . "</h2>");
                echo '<p class="change" style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;line-height: 100%;height: 100%"><strong>';
                echo ($v->ShortText . "</strong></p>");
                echo '<p  class="ui-li-aside"><strong>';
                echo ($v->CAmtBapi . "</strong>CNY</p>");
                echo "</a></li>";
           // echo ($v->ShortText . "<br/>");

          //  }
            }
            }


            catch(DataServiceRequestException $exception)
            {
            echo $exception->Response->getError();
            }
?>
<!--            <li><a href="#pagetwo" data-transition="slide">-->
<!--                    <h2 style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;line-height: 100%;height: 100%">001800192</h2>-->
<!--                    <p class="change" style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;line-height: 100%;height: 100%"><strong>海信X99 49</strong></p>-->
<!--                    <p class="change" style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px"><strong>TCL 49</strong></p>-->
<!--                    <p style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px"><strong>etc.</strong></p>-->
<!--                    <p  class="ui-li-aside"><strong>7999.99</strong>CNY</p>-->
<!--                </a></li>-->
<!--            <li> <a href="index.html">-->
<!--                    <h2 style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;line-height: 100%;height: 100%">001800192</h2>-->
<!--                    <p class="change" style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;line-height: 100%;height: 100%"><strong>海信X99 49</strong></p>-->
<!--                    <p class="change" style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px"><strong>TCL 49</strong></p>-->
<!--                    <p style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px"><strong>etc.</strong></p>-->
<!--                    <p  class="ui-li-aside"><strong>7999.99</strong>CNY</p>-->
<!--                </a></li>-->
<!--            <li> <a href="index.html">-->
<!--                    <h2 style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;line-height: 100%;height: 100%">001800192</h2>-->
<!--                    <p class="change" style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;line-height: 100%;height: 100%"><strong>海信X99 49</strong></p>-->
<!--                    <p class="change" style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px"><strong>TCL 49</strong></p>-->
<!--                    <p style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px"><strong>etc.</strong></p>-->
<!--                    <p  class="ui-li-aside"><strong>7999.99</strong>CNY</p>-->
<!--                </a></li>-->
<!--            <li> <a href="index.html">-->
<!--                    <h2 style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;line-height: 100%;height: 100%">001800192</h2>-->
<!--                    <p class="change" style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;line-height: 100%;height: 100%"><strong>海信X99 49</strong></p>-->
<!--                    <p class="change" style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px"><strong>TCL 49</strong></p>-->
<!--                    <p style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px"><strong>etc.</strong></p>-->
<!--                    <p  class="ui-li-aside"><strong>7999.99</strong>CNY</p>-->
<!--                </a></li>-->
<!--            <li> <a href="index.html">-->
<!--                    <h2 style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;line-height: 100%;height: 100%">001800192</h2>-->
<!--                    <p class="change" style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;line-height: 100%;height: 100%"><strong>海信X99 49</strong></p>-->
<!--                    <p class="change" style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px"><strong>TCL 49</strong></p>-->
<!--                    <p style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px"><strong>etc.</strong></p>-->
<!--                    <p  class="ui-li-aside"><strong>7999.99</strong>CNY</p>-->
<!--                </a></li>-->
<!--            <li> <a href="index.html">-->
<!--                    <h2 style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;line-height: 100%;height: 100%">001800192</h2>-->
<!--                    <p class="change" style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;line-height: 100%;height: 100%"><strong>海信X99 49</strong></p>-->
<!--                    <p class="change" style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px"><strong>TCL 49</strong></p>-->
<!--                    <p style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px"><strong>etc.</strong></p>-->
<!--                    <p  class="ui-li-aside"><strong>7999.99</strong>CNY</p>-->
<!--                </a></li> <li> <a href="index.html">-->
<!--                    <h2 style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;line-height: 100%;height: 100%">001800192</h2>-->
<!--                    <p class="change" style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;line-height: 100%;height: 100%"><strong>海信X99 49</strong></p>-->
<!--                    <p class="change" style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px"><strong>TCL 49</strong></p>-->
<!--                    <p style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px"><strong>etc.</strong></p>-->
<!--                    <p  class="ui-li-aside"><strong>7999.99</strong>CNY</p>-->
<!--                </a></li> <li> <a href="index.html">-->
<!--                    <h2 style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;line-height: 100%;height: 100%">001800192</h2>-->
<!--                    <p class="change" style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;line-height: 100%;height: 100%"><strong>海信X99 49</strong></p>-->
<!--                    <p class="change" style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px"><strong>TCL 49</strong></p>-->
<!--                    <p style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px"><strong>etc.</strong></p>-->
<!--                    <p  class="ui-li-aside"><strong>7999.99</strong>CNY</p>-->
<!--                </a></li>-->
        </ul>
    </div>

    <footer data-role="footer" data-position="fixed" class="ui-bar">
        <h1>O'Reilly</h1>
    </footer>
</div>
<div data-role="page" id="pagetwo">
    <div data-role="header">
        <a class="ui-icon-back" href="#pageone" >返回</a><h1>后退按钮文字</h1>
    </div>
    <div data-role="content">
        <form method="post" action="demoform.asp">
            <label for="fname">姓名：</label>
            <input type="text" name="fname" id="fname">
            <input type="submit" data-inline="true" value="提交">
        </form>
    </div>
    <footer data-role="footer" data-position="fixed" class="ui-bar">
        <a class="ui-icon-check" href="approve.html">同意</a>
        <a class="ui-icon-delete" href="deny.html">拒绝</a>
    </footer>
</div>
</body>
</html>
