<?php

class RendezVous {
    static public function getAll() {
        $stmt = DB::connect()->prepare('SELECT * FROM `rendez_vous` WHERE id= id');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close(); 
        $stmt = null;
    }

}

?>