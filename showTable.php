<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/connectDB.php';
    $sql = "SHOW TABLES";
    $res = $dabaseConnect->query($sql);

    if($res){ // 테이블 성공적으로 연결되어 보여지면
        $list = $res->fetch_array(); // 해당 데이터 베이스에 생성되어있는 테이블들을 보여준다.
        // 현재 mymember라는 하나의 테이블만 존재한다.


        echo '테이블 목록<br>';  // 테이블 목록
        for($i=0;$i<count($list)-1;$i++) {


            echo $list[$i]; //mymember

}


    }else{
        echo "테이블 존재x";
    }

