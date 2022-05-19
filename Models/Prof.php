<?php

class Prof
{
    static public function getAll()
    {
        $stmt = DB::connexion()->prepare('SELECT * FROM proffesseurs');
        $stmt->execute();

        return $stmt->fetchAll();
    }

    static public function add($data)
    {
        $stmt = DB::connexion()->prepare('INSERT INTO proffesseurs (full_name,matiere,phone,classe,gender)
        VALUES (:full_name,:matiere,:phone,:classe,:gender)');
        $stmt->bindParam(':full_name', $data['full_name']);
        $stmt->bindParam(':matiere', $data['matiere']);
        $stmt->bindParam(':phone', $data['phone']);
        $stmt->bindParam(':classe', $data['classe']);
        $stmt->bindParam(':gender', $data['gender']);

        // if ($stmt->execute()) {
        //     return 'ok';
        // } else {
        //     return 'error';
        // }
    }
    static public function delete($data)
    {
        $id = $data['id_parent'];
        try {
            $query = 'DELETE FROM parents WHERE id_parent=:id_parent';
            $stmt = DB::connexion()->prepare($query);
            $stmt->execute(array(":id_parent" => $id));
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function update($data)
    {
        $query = 'UPDATE parents SET full_name= :full_name,gender=:gender,job=:job,adresse=:adresse,phone=:phone WHERE id=:id_parent';
        $stmt = DB::connexion()->prepare($query);
        $stmt->bindParam(':id', $data['id_parent']);
        $stmt->bindParam(':full_name', $data['full_name']);
        $stmt->bindParam(':gender', $data['gender']);
        $stmt->bindParam(':job', $data['job']);
        $stmt->bindParam(':adresse', $data['adresse']);
        $stmt->bindParam(':job', $data['job']);
        
        // if ($stmt->execute()) {
        //     return 'ok';
        // } else {
        //     return 'error';
        // }
    }
}
