<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/connectDB.php'; // 여기있는것을 가져와 사용하겠다.
    //  필드(컬럼 추가하기) 마지막에 띄어쓰기 들어감
    $sql = "ALTER TABLE myMember ADD CURRENT_AGE INT unsigned comment '현재나이' AFTER GENDER";
    //myMember라는 테이믈 변경한다 CURRENT_AGE추가해서,
    // 타입은 int, 양의 정수이니 unsigned로 용량 늘리고,
    // 설명으로는 '현재나이' 그리고 이 필드는
// GENDER 필드 뒤에 위치할거다.

    $res = $dabaseConnect->query($sql);


    if($res){
        echo "필드 추가 완료!!";
    }else{
        echo "필드 추가 실패";
    }