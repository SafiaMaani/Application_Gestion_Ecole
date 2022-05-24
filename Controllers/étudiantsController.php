<?php

class étudiantsController
{
    public function getAllétudiants()
    {

        $étudiants = étudiants::getAll();
        return $étudiants;
    }

    public function addétudiant(){

        if(isset($_POST['submit'])){
			$data = array(
				'Matricule' => $_POST['Matricule'],
				'Nom_complet' => $_POST['Nom_complet'],
				'Genre' => $_POST['Genre'],
				'Class' => $_POST['Class'],
				'Parent_Id' => $_POST['Parent_Id'],
				'Address' => $_POST['Address'],
				'Date_de_naissance' => $_POST['Date_de_naissance'],
				'Email' => $_POST['Email'],
				
			);

			$result = étudiants::add($data);
			if($result){
				return $result;
				
			}
			if($result === 'ok'){
				// Session::set('success','Employé Ajouté');
				// Redirect::to('index');
			}else{
				echo $result;
			}
		}
    }
	
	public function deleteétudiant()
	{
		if (isset($_POST['delete'])) {
			$data['id'] = $_POST['id'];
			$result = étudiants::delete($data);
			if ($result === 'ok') {
				header('Location:students');
			}
		}
	}

	public function updateétudiant()
	{
		if (isset($_POST['updateétudiant'])) {
			$data = array(
				'Matricule' => $_POST['Matricule'],
				'Nom_complet' => $_POST['Nom_complet'],
				'Genre' => $_POST['Genre'],
				'Class' => $_POST['Class'],
				'Parent_Id' => $_POST['Parent_Id'],
				'Address' => $_POST['Address'],
				'Date_de_naissance' => $_POST['Date_de_naissance'],
				'Email' => $_POST['Email'],
			);
			$result = étudiants::update($data);
			if($result === 'ok'){
				header('location:students');
			}
			// if ($result === 'ok') {
			// 	Session::set('success', 'Employé Modifié');
			// 	Redirect::to('home');
			// } else {
			// 	echo $result;
			// }
		}
	}
	public function getOneId(){
		if(isset($_POST['id'])){
			$result = étudiants::getOne($_POST['id']);
			return $result;
		}
	}



}

