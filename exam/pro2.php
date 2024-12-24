<?php 

header("Access-Control-Allow-Method:PUT");
header("Content-Type: application/json");
include("config.php");


$c1=new Config();
$stude=[];

if($_SERVER['REQUEST_METHOD']=='PUT')
{
    $data=file_get_contents('php://input');
                parse_str($data, $result);
                $id=$result['id'];
                $product_name=$result['product_name'];
                $price=$result['price'];
            
            
            $res=$c1->updatePro($id,$product_name,$price);


            if($res)
            {
                $arr['msg']="DATA SUSSECCFULLY INSERT INTO PRODUCT UPDATE TABLE !!!!";
            }
            else
            {
                $arr['msg']="DATA SUSSECCFULLY INSERT INTO PRODUCT  UPDATE TABLE !!!!";
            }

}
else{
    $arr['err']="Only PUT type is Allowed!!!";
}
echo json_encode($arr);

?>