<?php
class ClientData {
	public static $tablename = "client";

	public function ClientData(){
		$this->name = "";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (code,name,lastname,address,email,phone,credit,creditlim,password,is_active,created_at) ";
		$sql .= "value (\"$this->code\",\"$this->name\",\"$this->lastname\",\"$this->address\",\"$this->email\",\"$this->phone\",$this->credit,\"$this->creditlim\",\"$this->password\",\"$this->is_active\",NOW())";
        print_r($sql);
		Executor::doit($sql);
	}

	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

	public static function delBy($k,$v){
		$sql = "delete from ".self::$tablename." where $k=\"$v\"";
		Executor::doit($sql);
	}

	public function update(){
		$sql = "update ".self::$tablename." set code=\"$this->code\",name=\"$this->name\",price_in=\"$this->price_in\",price_out=\"$this->price_out\",category_id=$this->category_id,unit=\"$this->unit\",inventary_min=\"$this->inventary_min\",description=\"$this->description\" where id=$this->id";
        print_r($sql);
		Executor::doit($sql);
	}


	public function updateById($k,$v){
		$sql = "update ".self::$tablename." set $k=\"$v\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		 $sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ClientData());
	}

	public static function getBy($k,$v){
		$sql = "select * from ".self::$tablename." where $k=\"$v\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ClientData());
	}

	public static function getAll(){
		 $sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new ClientData());
	}

	public static function getAllBy($k,$v){
		 $sql = "select * from ".self::$tablename." where $k=\"$v\"";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ClientData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ClientData());
	}


}

?>