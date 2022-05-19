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
        $stmt->execute();
    }
    static public function delete($data)
    {
        $id = $data['id_prof'];
        try {
            $query = 'DELETE FROM proffesseurs WHERE id_prof=:id_prof';
            $stmt = DB::connexion()->prepare($query);
            $stmt->execute(array(":id_prof" => $id));
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function update($data)
    {
        $query = 'UPDATE proffesseurs SET full_name= :full_name,gender=:gender,matiere=:matiere,classe=:classe,phone=:phone WHERE id_prof=:id_prof';
        $stmt = DB::connexion()->prepare($query);
        $stmt->bindParam(':id_prof', $data['id_prof']);
        $stmt->bindParam(':full_name', $data['full_name']);
        $stmt->bindParam(':gender', $data['gender']);
        $stmt->bindParam(':matiere', $data['matiere']);
        $stmt->bindParam(':classe', $data['classe']);
        $stmt->bindParam(':phone', $data['phone']);
        
        if ($stmt->execute()) {
            return 'ok';
        }
    }
    static public function getOne($id)
    {
        $stmt = DB::connexion()->prepare("SELECT * FROM proffesseurs WHERE id_prof = '$id'");
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
