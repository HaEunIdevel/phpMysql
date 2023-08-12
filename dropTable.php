<?php
    require_once __DIR__ . '/connectDB.php';
$sql = 'DROP TABLE test, test1,test2';

$res = $dabaseConnect->query($sql);

if($res){
    echo '테이블 삭제 완료';
    
}else{
    echo '테이블 삭제되지 않음';
}