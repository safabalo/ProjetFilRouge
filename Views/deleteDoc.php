<?php
        if(isset($_POST['id_doctor'])){
            $deleteDoctor = new DoctorsController();
            $deleteDoctor->DeleteDoctor();
            
        }
?>