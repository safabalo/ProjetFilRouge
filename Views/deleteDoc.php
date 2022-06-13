<?php
        if(isset($_POST['id'])){
            $deleteDoctor = new DoctorsController();
            $deleteDoctor->DeleteDoctor();
            
        }
?>