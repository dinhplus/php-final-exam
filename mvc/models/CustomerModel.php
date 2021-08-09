<?php
class CustomerModel {
	use DB;

	public function processSignup($name, $phone, $pass, $date_create) {
		$query = "insert into users (user_name, user_phone, pass, date_create)
		values('$name', '$phone', '$pass', '$date_create')";
		$this->runQuery($query);
	}

	public function login($phone, $password) {
		$query = "select * from users where user_phone = '$phone' and pass = '$password'";
		$result = $this->runQuery($query);
		return $result;
	}

    public function getCustomers($q){

        $query = "select * from customer";

        if(isset($q) && !is_null($q) && strlen($q) > 3){
            $query .= "where name like '%$q%' or phone like '%$q%";
        }

        $result = $this->runQuery($query);
        var_dump($result);
		return $result;
    }
    public function generateCustomer($customer){
        $query = "insert into customer (img, name, gender, phone, email)
		values('$customer->img', '$customer->name', '$customer->gender', '$customer->phone', '$customer->email')";
		$this->runQuery($query);
    }


}