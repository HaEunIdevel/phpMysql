<?php
    require_once __DIR__ . '/connectDB.php';
    
// 맴버 ID는 자동으류 1씩증가.

// 유저 아이디: everdevel

// 맴버 이름 : '김태영'

// 패스워드: mm281118

// 휴대번호: 010-1234-5678

// 이메일 : "everdevel@everdevel.com"

// 생일: 1986-04-04

// 성별:  남성


// 살펴보니 먼저 테이블 데이터를 넣기전에 가존 필드를 잘못작성해 필드 수정이 필요한것 같다.
//$sql='ALTER TABLE myMember MODIFY USERNAME VARCHAR(10) comment "고객 이름" AFTER USER_ID,
//ADD USER_PASSWORD VARCHAR(30) not null comment "고객 패스워드" AFTER USERNAME,
//INSERT INTO mymemger (USER_ID,USERNAME,USER_PASSWORD,PHONE,EMAIL,BIRTH,GENDER) VALUE("everedvel","김태영","mm281118","010-1234-5678","everdevel@everdevel.com","1986-04-04","m",now())
//# now()는 현재 시간을 의미.
//
//'; // 권장되지 않는방법.
    //하나씩 실행되게 할것
    
    

// 필드 수정
    $modifySql = 'ALTER TABLE myMember MODIFY USERNAME VARCHAR(10) comment "고객 이름" AFTER USER_ID';
    $modifyResult = $dabaseConnect->query($modifySql);
    
    if ($modifyResult) {
        echo "필드 수정 성공<br>";
    } else {
        echo "필드 수정 실패: " . $dabaseConnect->error . "<br>";
    }

// 필드 추가
    $addSql = 'ALTER TABLE myMember ADD USER_PASSWORD VARCHAR(30) not null comment "고객 패스워드" AFTER USERNAME';
    $addResult = $dabaseConnect->query($addSql);
    
    if ($addResult) {
        echo "필드 추가 성공<br>";
    } else {
        echo "필드 추가 실패: " . $dabaseConnect->error . "<br>";
    }

// 데이터 입력
    $insertSql = 'INSERT INTO myMember (USER_ID, USERNAME, USER_PASSWORD, PHONE, EMAIL, BIRTH, GENDER,REG_TIME) VALUES ("everedvel", "김태영", "mm281118", "010-1234-5678", "everdevel@everdevel.com", "1986-04-04", "m", now())';
    $insertResult = $dabaseConnect->query($insertSql);
    
    if ($insertResult) {
        echo "데이터 입력 성공<br>";
    } else {
        echo "데이터 입력 실패: " . $dabaseConnect->error . "<br>";
    }
    
    $dabaseConnect->close();
    
    

    