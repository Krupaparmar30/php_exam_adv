
<?php 
header("Access-Control-Allow-Method:POST");
header("Content-Type: application/json");
include("config.php");
$c1=new Config();

if($_SERVER['REQUEST_METHOD']=='POST')
{
 $product_name=$_POST['product_name'];
 $price=$_POST['price'];


if($product_name!=null && $price!=null)
{
   
$res=$c1->insertPro($product_name,$price);
if($res){

   $arr['msg']="DATA SUSSECCFULLY INSERT INTO PRODUCT TABLE !!!!";
}


else{
   $arr['msg']="DATA NOT  SUSSECCFULLY INSERT INTO PRODUCT TABLE !!!!";


}
}
else{
   $arr['err'] = "Value Null";
}

}
else{
    $arr['error']='only POST type is allowed!!!';
}
echo json_encode($arr);

?>  