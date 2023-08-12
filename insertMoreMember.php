<?php
    require_once __DIR__ . '/connectDB.php';
    
    $sql = 'INSERT INTO myMember (USER_ID, USERNAME, USER_PASSWORD, PHONE, EMAIL, BIRTH, GENDER,REG_TIME) VALUES ';
    
    
    $member = array();
    
    $member[0] = "('miu','김미우','miupw','010-5555-5555','miu@everdevel.com','2007-09-02','w',NOW())";
    
    $member[1] = "('yuna','김유나','yunapw','010-3335-5555','yuna@everdevel.com','2011-12-06','w',NOW())";
    $member[2] = "('minhoo','김민후','minhoopw','010-9999-8885','minhoo@everdevel.com','2012-12-05','m',NOW())";
    
    foreach ($member as $m){
        $query = $sql.$m; // sql변수와 반복문이 돌때마다 들어오는 요소를 합칩.
        $res = $dabaseConnect->query($query);
        
        if($res){
            echo '데이터 입력 성공';
        }
    }