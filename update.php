
<?php
if ($_POST) {
    $elm = $_POST['elm'];
    $subjects = array(
        "m" => "math", 
        "i" => "inf", 
        "p" => "phys", 
        "e" => "elect", 
        "r" => "pract", 
        "o" => "other",
    );

    $value = $_POST['value'];

    $json = array(); // пoдгoтoвим мaссив oтвeтa
	define("PASSWORD", "m7HrUb17hE");
	define("USERNAME", "u729272295_admin");
	define("DBNAME", "u729272295_panel");
	define("SERVER", "mysql.hostinger.ru");
    $link = mysqli_connect(SERVER, USERNAME, PASSWORD, DBNAME);
    if (!$link) {
    printf("Соединение установить не удалось: %s\n",
    mysqli_connect_error());
    exit();
    }
    if (substr($elm,0,1) == 'p') {
        $id = substr($elm, 1, strlen($elm) - 1);
        $result = mysqli_query($link, "UPDATE projects SET status=".$value." WHERE id=".$id);    
    }
    elseif (substr($elm,0,1) == 's') {
        $field = substr($elm,1,1);
        $id = substr($elm, 2, strlen($elm) - 1);
        $f = "";
        switch($field) {
            case 'f': $f = "familyName"; break;
            case 'n': $f = "name"; break;
            case 's': $f = "secondName"; break;
            case 'a': $f = "about"; break;
            case 'v': $f = "favourite_subject"; break;
            case 'l': $f = "login"; break;
            case 'p': $f = "password"; $value = md5($value); break;
            case 'e': $f = "email"; break;
            case 'p': $f = "phone"; break;
        }
        $result = mysqli_query($link, "UPDATE students SET ".$f."='".$value."' WHERE id=".$id);
    }

    else
    {
        $sub = $subjects[substr($elm,0,1)];
        $id = substr($elm, 1, strlen($elm) - 1);
        $result = mysqli_query($link, "UPDATE knowledges SET ".$sub."=".$value." WHERE student_id=".$id);
    }
    //mysqli_free_result($result);    
    mysqli_close($link); 

    $json['error'] = 0;
    echo json_encode($json); 
}
else {
    $json = array();
    $json['error'] = "Некорректные данные";
    echo json_encode($json); 
}

?>