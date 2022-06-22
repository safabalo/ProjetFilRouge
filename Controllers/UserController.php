<?php
include('Models/Patient.php');

class UserController{
    public function getAllPatients(){
            
        $patients = Patient::getAll();
        return $patients; 
    }
        public function CountAllPatients(){  
        $pat = Patient::CountAll();
        return $pat; 
    }
        public function PatFemme(){  
        $pat = Patient::CountFemme();
        return $pat; 
    }
        
    public function PatHomme(){  
        $pat = Patient::CountHomme();
        return $pat; 
    }
}
?>