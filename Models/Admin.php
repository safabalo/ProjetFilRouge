<?php

class Admin
{
    static function loginAdmin($data) { 
        $email = $data["email"];
        try{
            $query="SELECT * FROM admin WHERE email = :email";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":email"=>$email));
            $Admins = $stmt->fetch(PDO::FETCH_OBJ);
            return $Admins;

        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        } 
    }


}

// if($dataAdmin || ){
//     if($dataAdmin['role'] == admin){
//         head
//     }elseif (condition) {
//         # code...
//     }
// }

?>