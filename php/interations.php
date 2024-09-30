<?php
// for($i = 0; $i <= 10; $i++){
//     echo $i;
// }

$i = 40;
//while là ktra  điều kiện trước khi lặp
// while ($i < 20) {
//     echo "i = $i";

//     $i += 1;
// }


// do-while là chạy trước rồi mới ktra nếu thì điều kiện ko thảo mãn thì nó vẫn chạy lần đầu.
// do {
//     echo "i = $i";

//     $i += 1;
// } while ($i < 30);


// foreach
$fruits = ['apple', 'banana', 'orange', 'orange'];
// C1:
for ($i = 0; $i < count($fruits); $i++) {
    echo "$fruits[$i] <br>";
}
// c2:
foreach($fruits as $index => $item){
    echo "$index - $item  <br>";

}

$pers = [
    "full_name" => "Nguyen Van A",
    "email" => "ghb@gmial.com",
    "age" => 40
];
foreach($pers as $key => $val){
    echo "$key - $val  <br>";

}