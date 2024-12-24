
<?php 

header("Access-Control-Allow-Method: POST");
header("Content-Type: application/json");
include("config.php");
$c1 = new Config();


if($_SERVER['REQUEST_METHOD']=='POST')
{
  $order_date = $_POST['order_date'];
  $statusa= $_POST['statusa'];
 

 if($order_date!=null && $statusa!=null)
 {
    $res = $c1->newOrderAdd($order_date,$statusa);

    if($res)
    {
      $arr['msg']="New Order Product inserted Successfully!";
    }else{
      $arr['msg']="New Order Product not inserted ";
    }
 }
 else{
    $arr['err'] = "Value Null";
 }
}
else{
    $arr['err'] = "Only Post Type Allowed";
    http_response_code(400);
}

echo json_encode($arr);

?>
