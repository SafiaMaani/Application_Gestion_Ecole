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
}
