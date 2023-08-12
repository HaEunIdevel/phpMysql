<?php
    require_once __DIR__ . '/connectDB.php';
    
    
    $sql = 'CREATE TABLE test1( # 같은 문으로 test테이블, test1, test2테이블 만듬.
    myMemberID int(10) unsigned auto_increment not null comment "고객아이디 테스트", # 여기 쉼표 생략하지 말것.
    PRIMARY KEY (myMemberID)
                 )';
    
    $res = $dabaseConnect->query($sql);
    
    if ($res) {
        echo "테이블 생성 완료";
        
    } else {
        echo '테이블 생성 실패';
    }