<?php namespace Zurmo

use Zurmo\API;

/*
|----------------------------------------------------------------------------------------------------
| Zurmo REST Builder
|----------------------------------------------------------------------------------------------------
|   
| Each endpoint in the Zurmo system is named using two "model" names- usually a plural
| followed by a singluar (example "app/index.php/contacts/contact"). This class can therefore
| do any RESTful operation in the Zurmo system, you just have to pass it a singular and plural name!
| All the models follow the same convention (contacts/contact, tasks/task, meetings/meeting, etc)
| EXCEPT for the leads (leads/contact). Don't ask me why they did that, I have no idea. But
| just pass in the name of both model instances and you will be good to go.
| Example: 
| $zurmo = new ZurmoREST({url}, {username}, {password});
| $zurmo->create({array of data}, 'leads', 'contact');
| This will create a new lead
*/  

class REST extends API
{
	public function create($data, $model_1, $model_2)
	{	
		$endpoint 	= '/app/index.php/'.$model_1.'/'.$model_2.'/api/create/';
		$type		= 'POST';
		$result 	= $this->query($endpoint, $type, $data);
		return $result;
	}

	public function read($id, $model_1, $model_2)
	{	
		$endpoint 	= '/app/index.php/'.$model_1.'/'.$model_2.'/api/read/'.$id;
		$type		= 'GET';
		$data 		= null;
		$result 	= $this->query($endpoint, $type, $data);
		return $result;
	}

	public function update($id, $model_1, $model_2)
	{	
		$endpoint 	= '/app/index.php/'.$model_1.'/'.$model_2.'/api/update/'.$id;
		$type		= 'PUT';
		$data 		= null;
		$result 	= $this->query($endpoint, $type, $data);
		return $result;
	}

	public function delete($id, $model_1, $model_2)
	{	
		$endpoint 	= '/app/index.php/'.$model_1.'/'.$model_2.'/api/delete/'.$id;
		$type		= 'DELETE';
		$data 		= null;
		$result 	= $this->query($endpoint, $type, $data);
		return $result;
	}
}