
<?php 

header("Access-Control-Allow-Method: DELETE");
header("Content-Type: application/json");
include("config.php");
$c1 = new Config();


if($_SERVER['REQUEST_METHOD']=='DELETE')
{
    $data=file_get_contents('php://input');
    parse_str($data, $result);
    $id=$result['id'];
   

$res=$c1->delect($id);


if($res)
{
    $arr['msg']="DATA SUSSECCFULLY INSERT INTO ORDER DELETE TABLE !!!!";
}
else
{
    $arr['msg']="DATA SUSSECCFULLY INSERT INTO ORDER  DELETE TABLE !!!!";
}
}
else{
    $arr['err'] = "Only DELETE Type Allowed";
    http_response_code(400);
}

echo json_encode($arr);


?>