
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    // 웹 페이지에서 테이블 구조보기
    require_once  __DIR__ . "/connectDB.php" ;//  접속프로그램
    
    //DESC 테이블명
    $sql = "DESC myMember";
    $res = $dabaseConnect->query($sql);
//    $array = array();
    //    $list = $res->fetch_assoc();
    //
    //    echo '<pre>';
    //    var_dump($list); // 필드명 myMemberID에 대한 정보가 출력된다.
    //    echo '<pre>';
    
//    while ($list = $res->fetch_assoc()) {// 이 배열울 반복.
//        $array[] = $list;
//    }
//    echo "<pre>";
//    echo $array[0]['Field'];
//    var_dump($array); // $res를 fetch_assoc로 필드명을 인덱스로 사용.
    // 하나의 배열안에 여러개가 들어있는 형태. 따라서 접근할때 숫자 인덱스와, 문자인덱스 둘 다 사용.
    
    // 여기 아래의 while문을 사용할 경우
        while ($list = $res->fetch_assoc()
){
            echo "<br>Field : " . $list['Field'];
            echo "<br>";
    
            echo 'Type : '.$list['Type'];
            echo "<br>";
            echo 'Null : '.$list['Null'];
            echo "<br>";
            echo "Key : ".$list['Key'];
            echo "<br>";
    
            echo 'Default : '.$list['Default'];
            echo "<br>";
       echo 'Extra : '.$list['Extra']."<br>";
    
        }
?>
</body>
</html>
