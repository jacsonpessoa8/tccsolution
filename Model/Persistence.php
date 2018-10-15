<?php


require 'Connection.php';

Class Persistence{
	
	public function persist($object){
		
		if($this->isValidObject($object)){
			
			
			return "Sucesso ";
		}else{
			return "Falhou !";
		}
		
	}
	
	public function update(){
		
		
	}
	
	public function delete(){
		
		
	}
	
	public function listById(){
		
		
	}
	
	public function listAll(){
		
		
	}
	
	private function isValidObject($object){
		
		return (isset($object->CLASS_PREFIX) && isset($object->CLASS_NAME) && $object->CLASS_PREFIX != "" && $object->CLASS_NAME != "");
	}
	
}

?>
