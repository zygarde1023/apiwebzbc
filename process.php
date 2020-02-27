<?php
$action = isset($_GET['action']) ? $_GET['action'] : '';
switch ($action) {
	
    case 'create' :
        create();
        break;
    case 'modify' :
        modify();
        break;
		
	case 'delete' :
        delete_pro();
        break;
	
	case 'delete_cat' :
        delete_cat();
        break;

          
    default :       
        header('Location: index.php');
}
	
	
	function create(){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $date = '2019-06-01 00:35:07';

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://rdapi.herokuapp.com/product/create.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>"{\n    \"name\" : \"$name\",\n    \"price\" : \"$price\",\n    \"description\" : \"$description\",\n    \"category_id\" : $category,\n    \"created\" : \"$date\"\n}",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: text/plain"
        ),
        ));
  
        $response = curl_exec($curl);
  
        curl_close($curl);
        echo $response;
        header("location:index.php?view=list");
	}
	
	function modify(){
        $id = $_GET['id'];
		$name = $_POST['name'];
		$price = $_POST['price'];
		$description = $_POST['description'];
		$category = $_POST['category'];
		$date = '2019-06-01 00:35:07';

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://rdapi.herokuapp.com/product/update.php",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS =>"{\n    \"id\" : \"$id\",\n    \"name\" : \"$name\",\n    \"price\" : \"$price\",\n    \"description\" : \"$description\",\n    \"category_id\" : $category,\n    \"created\" : \"$date\"\n}",
		CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json",
			"Content-Type: text/plain"
		),
		));
  
		$response = curl_exec($curl);
  
		curl_close($curl);
		echo $response;
		header("location:index.php?view=list");
	}
	
	function delete_pro(){
	$id = $_GET['id'];
	$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://rdapi.herokuapp.com/product/delete.php",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS =>"{\n    \"id\" : \"$id\"\n}",
		CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json",
			"Content-Type: text/plain"
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;
		header("location:index.php?view=list");
	
	}
	
	
	
	
	
	?>