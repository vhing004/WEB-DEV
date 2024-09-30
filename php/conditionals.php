<?php
// echo "Chung ta noi ve cac cau lenh dieu kien";

// $hours = date("H");

// echo $hours;

// if ($hours < 12) {
//     echo "Good morning";
// } else if ($hours >= 12 && $hours <= 17) {
//     echo "Good afternoon";
// } else {
//     echo "Good evening";
// }


$comments = ['apple', 'orange', 'lemon'];

// if(empty($comments)){
//     echo "No comment";
// }else {
//     echo "yeahhhhhhhhhhhhh";
// }

// Toán tử 3 ngôi
// $true_comment = !empty($comments) ? $comments[0] : 'No comment';

// Nếu null thì sẽ lấy giá trị sau.
// $true_comment = $comments[0] ?? 'No comment';
// echo  $true_comment;


// switch case:
$favorite_color = 'red';
switch($favorite_color) {
    case 'red':
        echo 'You choose RED';
        break;
    case 'green':
        echo 'You choose GREEN';
        break;
    case 'blue':
        echo 'You choose BLUE';
        break;
    default: 
        echo 'Not RED, GREEN, BLUE';
}
// default là else nếu ko có trường hợp nào trùng thì lấy giá trị default

?>