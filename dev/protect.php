<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
function showForm($error = "LOGIN")
{
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
    <html>

    <body>
        <?php echo $error; ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="pwd">
            Password:
            <table>
                <tr>
                    <td><input name="passwd" type="password" /></td>
                </tr>
                <tr>
                    <td align="center"><br />
                        <input type="submit" name="submit_pwd" value="Login" />
                    </td>
                </tr>
            </table>
        </form>
    </body>
<?php
}
?>

<?php

if (isset($_COOKIE['loggedIn']) && ($_COOKIE['loggedIn']) != 1) {
    getLogin();
} elseif (isset($_COOKIE['loggedIn']) == false) {
    getLogin();
}
function getLogin()
{
    ob_start();
    // print_r($_COOKIE);
    $Password = 'vancouver'; // Set your password here
    if (isset($_POST['submit_pwd'])) {
        $pass = isset($_POST['passwd']) ? $_POST['passwd'] : '';

        if ($pass != $Password) {
            showForm("Wrong password");
            exit();
        } else {
            //password is correct
            // echo "correct";
            echo '<script>document.cookie = "loggedIn=1; path=/";</script>';
            redirect(current_url());
        }
    } else {
        showForm();
        exit();
    }
}


function current_url($script_only = false)
{
    $protocol = 'http';
    $port = ':' . $_SERVER["SERVER_PORT"];
    if (isset($_SERVER["HTTPS"]) == 'on')
        $protocol .= 's';
    if ($protocol == 'http' && $port == ':80')
        $port = '';
    if ($protocol == 'https' && $port == ':443')
        $port = '';
    $path = $script_only ? $_SERVER['SCRIPT_NAME'] : $_SERVER['REQUEST_URI'];
    return "$protocol://$_SERVER[SERVER_NAME]$port$path";
}

function redirect($url)
{
    echo '<script>window.location.reload();</script>';
    header("Location: $url");
    exit();
}


?>