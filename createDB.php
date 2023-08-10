<?php
$host = "localhost";
$user = "root";
$pw = "root";
$dbConnect = new mysqli($host, $user, $pw); // mysql 접속하기
$dbConnect->set_charset("utf8");

if (mysqli_connect_errno()) {
    echo "데이터 베이스 접속실패";

} else {
    $sql = "CREATE DATABASE phpMySQL";
    $res = $dbConnect->query($sql); //dbConnect라는 변수에 query메소드 추가(데이터 베이스 생성)
    if ($res) {
        echo "데이터베이스 생성!!!";

    } else {
        echo "데이터베이스 생성 실패.";
    }

}

// 생성한 DB에 접속하기. 네번째 인자로 데이터 베이스명 입력

