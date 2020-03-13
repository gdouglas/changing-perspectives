<?php 

function debug($val, $label = null) {
    if ($label) {
        $label = filter_var($label, FILTER_SANITIZE_STRING);
        print "<div class='debug-header'><strong>$label</strong></div>";    
    }
    print "<pre class='debug'>";
    var_dump($val);
    print "</pre>";
}
// returns true if the post matches the session id, false if it does not indicating a page refresh
function checkPost() {
    //is the form id the same as one stored in $_SESSION
    if (isset($_POST['formid']) && isset($_SESSION['formid']) && $_POST["formid"] == $_SESSION["formid"]){
        // echo 'Process form';
        $_SESSION["formid"] = '';
        return true;
    } else {
        // echo "new form";
        $_POST = array();
        $_SESSION["formid"] = md5(rand(0,10000000));
        return false;
    }
}
?>