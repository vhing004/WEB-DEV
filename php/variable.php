<?php
    // echo "We talk about variable".'<br>';
    
    // $name = "Vinh";
    // $age = 20;
    // echo "Name:". $name, "Age:". $age . '<br>';
    // echo "$name is $age years old !";

    // // nếu biến false thì nó sẽ ko hiển thị ra.
    // $has_car = false;
    // // echo $has_car;
    // var_dump($has_car); // show ra kiểu dữ liệu của biến
    

    // echo 3 + 4 . '<br>';
    // $sum = '3' + '4';
    // var_dump($sum) ;

    // constants :thì ko dùng dấu $
    define('SERVER_NAME', 'localhost');
    define('DATABASE', 'test_db');

    echo "server:" .SERVER_NAME. ", db:" . DATABASE;
?>