<?php

$server = $_SERVER['HTTP_HOST'];
//$palvelu = "php/neilikka";
$result = false;
$errors = [];
$fields = ['course_id', 'participant_fname', 'participant_lname', 'participant_email', 'participant_phone'];
$required = ['course_id', 'participant_fname', 'participant_lname', 'participant_email', 'participant_phone'];
$patterns['participant_fname'] = "/^[a-zåäöA-ZÅÄÖ'-]*$/";
$patterns['participant_lname'] = $patterns['participant_fname'];
$patterns['participant_phone'] = "/^[0-9]{7,15}$/";
$patterns['participant_email'] = "/^[\w]+[\w.+-]*@[\w-]+(\.[\w-]{2,})?\.[a-zA-Z]{2,}$/";

include ('database.php');

function courses(){
    $connect = db_connect();
    echo "<option value='' selected disabled hidden>...</option><br>";
    $query = "SELECT course_id, course_name FROM courses ORDER BY course_name";
    $result = $connect->query($query);
    if ($result !== false){
       while (list($id,$course_name) = $result->fetch_row()){
         if (isset($_POST['course_id']) and $_POST['course_id'] == $id)
            $selected = " selected";
         else $selected = "";
         echo "<option value=\"$id\"$selected>$course_name</option>\n";
         }
       }  
       echo "</select>";	
}
    
function showField($field) {
    echo (!isset($GLOBALS['errors'][$field]) && isset($_POST[$field])) ? $_POST[$field] : "";
    return;
}

function is_invalid($field) {
    echo isset($GLOBALS['errors'][$field]) ? "is-invalid" : "";
    return;
}

function is_invalid_variable($field) {
    $is_invalid = isset($GLOBALS['errors'][$field]) ? "is-invalid" : "";
    return $is_invalid;
}

function validate($field, $value) {
    $patterns = $GLOBALS['patterns'];
    $error = false;
    if ($field == 'participant_email' && !filter_var($value, FILTER_VALIDATE_EMAIL)) $error = 'participant_email';
    elseif (is_array($value)) {
        foreach ($value as $val) {
            if (!preg_match($patterns[$field], $val)) $error = 'patternMismatch';
        }
    }
    return $error;
}

function error($field){
    $errors = $GLOBALS['errors'];
    $value = $GLOBALS[$field];
    return (isset($errors[$field]) and !empty($value)) ? $errors[$field] : "";
}

if (isset($_POST['register'])) {
    foreach ($fields as $field) {
        $$field = $_POST[$field] ?? '';
        if (!is_array($$field)) {
            $$field = $connect->real_escape_string(strip_tags(trim($$field)));
        } else {
            foreach ($$field as $key => $value) {
                $$field[$key] = $connect->real_escape_string(strip_tags(trim($value)));
            }
        }
        if (!$$field && in_array($field, $required)) $errors[$field] = 'is empty.';
        elseif ($error = validate($field, $$field)) $errors[$field] = $error;
    }

    // Check is user is already registered to the selected course
    $email_check = "SELECT 1 FROM participants WHERE participant_email = '$participant_email' AND course_id ='$course_id'";
    $check_result = $connect->query($email_check);
    if ($check_result->num_rows) {
        $errors['participant_email'] = "User has already registered to this course.";
    }

    if (!$errors) {
        if (is_array($$field)) $$field = implode(",",$$field);    
        $registration_date = date("Y-m-d H:i:s",time());
        $fields[] = 'registration_date';  
        $str_fields = implode(", ",$fields);
        
        $query = "INSERT INTO participants ($str_fields) VALUES ($course_id, '$participant_fname', '$participant_lname', '$participant_email', '$participant_phone', '$registration_date')";
        $result = $connect->query($query);
        // Increment the "num_participants" column when a new participant registers for a course
        $update_query = "UPDATE courses SET num_participants = num_participants + 1 WHERE course_id = '$course_id'";
        $update_result = $connect->query($update_query);
        $added = $connect->affected_rows;
     }   
}
