<?php 
	include "../create_db_object.php";

	var_dump($_POST);
	exit;

	$fullName = $db->res("Mehmet Temizce" );
	$username = $db->res( $conn,"mtemizce");
	$password = $db->res($conn,md5("1"));
	$roles = $db->res($conn,"1:2");
	$status = $db->res($conn , "1");

	/*$insertSql = "INSERT INTO users (full_name , username , password , roles , status) VALUES('".$fullName."' , '".$username."', '".$password."','".$roles."','".$status."')";*/

	//$updateSql = "UPDATE users set status = 0 WHERE user_id  = 1";

	$selectSql = "SELECT * FROM users ORDER BY user_id DESC";

    $query = $db->runSql($selectSql);

    while($result = mysqli_fetch_assoc($query)){
		echo "Tam isim => ".$result['full_name'];
	}

	/*if($db->runSql($updateSql))
		echo "Kayıt Başarılı";
	else
		echo "Kayıt İşlemi Esansında Bir Hata Oluştu !";*/
?>