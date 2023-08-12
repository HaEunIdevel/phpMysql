<?php
//require_once  __DIR__ . "/connectDB.php" ;//  접속프로그램
    include $_SERVER['DOCUMENT_ROOT'] . '/connectDB.php';
    $query = "CREATE TABLE myMember(
MEMBER_ID INT unsigned auto_increment comment '고객번호',
USER_ID VARCHAR(15) not null comment '고객아이디',
USERNAME VARCHAR(10) not null comment '고객 비밂번호',
PHONE VARCHAR(13) not null  comment '고객 휴대폰 번호',
EMAIL VARCHAR(30) not null comment '고객 이메일 주소',
BIRTH char(10) not null comment '고객의 생일',
GENDER enum('m','w','x') default 'x' comment '고객성별',
REG_TIME DATETIME not null comment '회원가입 시간',
PRIMARY KEY (MEMBER_ID)
)";

    $res = $dabaseConnect->query($query);

    if ($res) {
        echo "테이블 생성 완료";

    } else {
        echo '테이블 생성 실패';
    }