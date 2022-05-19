<?php

class Parents
{
    static public function getAll()
    {
        $stmt = DB::connexion()->prepare('SELECT * FROM parents');
        $stmt->execute();

        return $stmt->fetchAll();
    }

    static public function add($data)
    {
        $stmt = DB::connexion()->prepare('INSERT INTO parents (full_name,adresse,phone,job,gender)
        VALUES (:full_name,:adresse,:phone,:job,:gender)');
        $stmt->bindParam(':full_name', $data['full_name']);
        $stmt->bindParam(':adresse', $data['adresse']);
        $stmt->bindParam(':phone', $data['phone']);
        $stmt->bindParam(':job', $data['job']);
        $stmt->bindParam(':gender', $data['gender']);
        $stmt->execute();
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
        $query = 'UPDATE parents SET full_name= :full_name,gender=:gender,job=:job,adresse=:adresse,phone=:phone WHERE id_parent=:id_parent';
        $stmt = DB::connexion()->prepare($query);
        $stmt->bindParam(':id_parent', $data['id_parent']);
        $stmt->bindParam(':full_name', $data['full_name']);
        $stmt->bindParam(':gender', $data['gender']);
        $stmt->bindParam(':job', $data['job']);
        $stmt->bindParam(':adresse', $data['adresse']);
        $stmt->bindParam(':phone', $data['phone']);
        if ($stmt->execute()) {
            return 'ok';
        }
    }
    static public function getOne($id)
    {
        $stmt = DB::connexion()->prepare("SELECT * FROM parents WHERE id_parent = '$id'");
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
