<?php
$pattern="/((?=.*\d)(?=.*[A-Z])(?=.*[A-Z]).{8,15})/*;
$str="aA122";
if(preg_match($pattern,$str)){
    echo 'Chuoi hop le';
}
else{
    echo 'Chuoi K hop le';
}