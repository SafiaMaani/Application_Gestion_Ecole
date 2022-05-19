<?php

class ParentsController
{
	public function getAllParents()
	{
		$parents = Parents::getAll();
		return $parents;
	}

	public function addParent()
	{
		if (isset($_POST['addParent'])) {
			$data = array(
				'full_name' => $_POST['full_name'],
				'gender' => $_POST['gender'],
				'job' => $_POST['job'],
				'adresse' => $_POST['adresse'],
				'phone' => $_POST['phone'],
			);
			// echo '<pre>';
			// var_dump($data);
			// echo '</pre>';
			$result = Parents::add($data);

			// if($result === 'ok'){
			// 	Session::set('success','Employé Ajouté');
			// 	Redirect::to('index');
			// }else{
			// 	echo $result;
			// }
		}
	}

	public function deleteParent()
	{
		if (isset($_POST['delete'])) {
			$data['id_parent'] = $_POST['id_parent'];
			$result = Parents::delete($data);
			if ($result === 'ok') {
				header('Location:parents');
			}
		}
	}

	public function updateParent()
	{
		if (isset($_POST['updateParent'])) {
			$data = array(
				'id_parent' => $_POST['id_parent'],
				'full_name' => $_POST['full_name'],
				'job' => $_POST['job'],
				'gender' => $_POST['gender'],
				'adresse' => $_POST['adresse'],
				'phone' => $_POST['phone'],
			);
			$result = Parents::update($data);
			if($result === 'ok'){
				header('location:parents');
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
		if(isset($_POST['id_parent'])){
			$result = Parents::getOne($_POST['id_parent']);
			return $result;
		}
	}
}
