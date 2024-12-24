
<?php 
header("Access-Control-Allow-Method:POST");
header("Content-Type: application/json");
include("config.php");
$c1=new Config();

if($_SERVER['REQUEST_METHOD']=='POST')
{
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];


 if($name!=null && $email!=null && $phone!=null)
 {
   $res= $c1->insert($name,$email,$phone);


 if($res){

    $arr['msg']="DATA SUSSECCFULLY INSERT !!!!";
 }


 else{
    $arr['msg']="DATA NOT  SUSSECCFULLY INSERT !!!!";


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