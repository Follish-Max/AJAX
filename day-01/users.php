<?php
header('Content-Type:application/json');

$data = array(
    array(
    'id' => 1,
    'name' => '张三',
    'age' => 19
    ),
    array(
    'id' => 2,
    'name' => '李四',
    'age' => 18
    )
);
if(empty($_GET['id'])){

$json = json_encode($data);
echo $json;
}else{
foreach($data as $item){
if($item['id'] != $_GET['id']) continue;
$json = json_encode($item);
echo $json;
}
}

