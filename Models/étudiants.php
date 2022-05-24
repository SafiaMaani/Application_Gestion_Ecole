<?php

class étudiants
{
    static public function getAll()
    {
        $stmt = DB::connexion()->prepare('SELECT * FROM étudiants');
        $stmt->execute();

        return $stmt->fetchAll();
    }

    static public function add($data)
    {
        $stmt = DB::connexion()->prepare('INSERT INTO étudiants (Matricule,Nom_complet,Class,Genre,Parent_Id,Address,Date_de_naissance,Email)
        VALUES (:Matricule,:Nom_complet,:Genre,:Class,:Parent_Id,:Address,:Date_de_naissance,:Email)');
        $stmt->bindParam(':Matricule', $data['Matricule']);
        $stmt->bindParam(':Nom_complet', $data['Nom_complet']); 
        $stmt->bindParam(':Genre', $data['Genre']);
        $stmt->bindParam(':Class', $data['Class']);
        $stmt->bindParam(':Parent_Id', $data['Parent_Id']);
        $stmt->bindParam(':Address', $data['Address']);
        $stmt->bindParam(':Date_de_naissance', $data['Date_de_naissance']);
        $stmt->bindParam(':Email', $data['Email']);
        // $stmt->execute();
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        
    }

    static public function delete($data)
    {
        $id = $data['id'];
        try {
            $query = 'DELETE FROM étudiants WHERE id=:id';
            $stmt = DB::connexion()->prepare($query);
            $stmt->execute(array(":id" => $id));
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

   
    static public function  update($data)
{
	$query = 'UPDATE étudiants SET Matricule = :Matricule,Nom_complet=:Nom_complet,Class=:Class,Genre=:Genre,Parent_Id=:Parent_Id,Address=:Address,Date_de_naissance=:Date_de_naissance,Email=:Email WHERE id=:id';
	$stmt = DB::connexion()->prepare($query);
	$stmt->bindParam(':id', $data['id']);
	$stmt->bindParam(':Matricule', $data['Matricule']);
	$stmt->bindParam(':Nom_complet', $data['Nom_complet']);
	$stmt->bindParam(':Genre', $data['Genre']);
	$stmt->bindParam(':Class', $data['Class']);
	$stmt->bindParam(':Parent_Id', $data['Parent_Id']);
	$stmt->bindParam(':Address', $data['Address']);
	$stmt->bindParam(':Date_de_naissance', $data['Date_de_naissance']);
	$stmt->bindParam(':Email', $data['Email']);
	
    if ($stmt->execute()) {
	    return 'ok';
	} else {
	    return 'error';
	}
}
    static public function getOne($id)
    {
        $stmt = DB::connexion()->prepare("SELECT * FROM  étudiants WHERE id = '$id'");
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

