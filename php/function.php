<?php

// $y = 22;
// function sayHello($name)
// {
//     // biến y đc viết ở ngoài hàm nên muốn truy cập trong hàm thì gọi "GLOBAL $Y"
//     global $y;
//     echo "Hello $name - age: $y";
// }
// sayHello("Vinh");


// $total = function ($a, $b) {
//     return $a * $b;
// };
// echo $total(1, 2);


// // arrow function
// $sum = fn($a, $b) => $a * $b;
// echo $sum(3, 4);


// $name = ['john', 'cena', 'rock', 'july'];
// // tìm trong mảng:
// var_dump(in_array("john", $name));
// // in_array("đối tượng cần tìm", trong mảng cho trước)

// // thêm 1 phần tử vào cuối mảng:
// array_push($name, 'elon', 'tom');
// // thêm 1 phần tử vào đầu mảng:
// array_unshift($name, 'elon', 'tom');
// // xóa phần tử cuối:
// array_pop($name);
// // xóa phần tử đầu:
// array_shift($name);
// // chia mảng ra nhiều phần:
// $part = array_chunk($name, 2);
// // print_r($name),
// print_r($part);

// // gộp 2 mảng:
// $arr_1 = [1, 3, 5];
// $arr_2 = [2, 4, 6];

// $merge = array_merge($arr_1, $arr_2);
// print_r($merge);

// // spread operator:
// $new_arr = [...$merge, 67, 68, 89];
// print_r($new_arr);


// combine:
// $a = ["name", "email", "age"];
// $b = ["vinh", "vinh@gmail.com", 16];

// $c = array_combine($a, $b);
// // array_combine chỉ dùng đc khi 2 mảng có cùng dộ dài
// print_r($c);


// tạo mảng từ range:
$arr = range(0, 10);
print_r($arr);