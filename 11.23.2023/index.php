<?php



$studens= @json_decode(file_get_contents("https://jsonplaceholder.typicode.com/todos"), 1);

        
      
    foreach($studens as $key =>$value){
        $true="true";
        $false="false";
        if($value["completed"] == true){
           $value["completed"] = $true;
        }else{
            $value["completed"] = $false;
        }
      echo "userId: ".$value["userId"]."<br>"."id: ".$value["id"]."<br>"."title: ".$value["title"]."<br>"."completed: ".$value["completed"]."<br><br>";
    }

?>