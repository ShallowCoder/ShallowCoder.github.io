<!DOCTYPE html>
<html>
<body>
<?php
    echo "Hello World!1111";
    $array =[
    "code" => "200",
    "data" => ["id" => "1","name" => "json","phone" => "123"],
    "message" => "数据返回成功"
    ];
    echo json_encode($array);



    ?>
</body>
</html>