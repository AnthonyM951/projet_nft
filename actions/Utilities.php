<?php
//verify if user exists
function User_exists($data,$strdata){
    $mysql = new PDO('mysql:host=localhost;dbname=gynft_db;charset=utf8;', 'root', ''); // connection to database "php_exam_db"
    $req_User_Exists = $mysql->prepare("SELECT $strdata FROM users WHERE $strdata= ?");
    $req_User_Exists->execute(array($data));
    return $req_User_Exists;
}
//verify if a string contain certain characters
function verify_valid_characters($str,$data):string{
    for ($i=0; $i<strlen($str); $i++){
        if ((strtoupper($str[$i])<'A'||strtoupper($str[$i])>'Z')
        &&($str[$i]<'0'||$str[$i]>'9')
        &&($str[$i]!=='-')&&($str[$i]!=='_')){
            return $data." must contain A-Za-z0-9_-";
        }
    }
    return "true";
    }
    //verify data length
    function verify_data_length($str,$MIN_LENGTH,$MaxLength,$data):string{
        if (strlen($str)<$MIN_LENGTH || strlen($str)>$MaxLength){
            return $data."'s size should be between ".$MIN_LENGTH." and ".$MaxLength;
        }
        return "true";
    }

    //do all the verifications and return the right error message
    function final_Verification($str,$data,$minLength,$maxLength):string{
        if (verify_valid_characters($str,$data)!="true"){
            return verify_valid_characters($str,$data);
        }else if (verify_data_length($str,$minLength,$maxLength,$data)!="true"){
          return  verify_data_length($str,$minLength,$maxLength,$data);
        }
        return "true";
    }
