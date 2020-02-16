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

?>