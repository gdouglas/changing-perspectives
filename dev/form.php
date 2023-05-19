<html>
    <style>
        html {
            background-color: dimgray;
            background: #006d8f;
        }
        form {
            margin: 10vh auto;
            width: 650px;
            text-align: center;
            padding: 2rem;
            border-radius: 5px;
            box-shadow: 10px 10px 5px solid coral;
            background: tomato;
            font-size: xx-large;
            padding: 64px;
            padding-bottom: calc(64px * 2);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

        }
        * {
            font-size: xx-large;
            padding: 5px;
            border-radius: 5px;;
        }
        button {
            padding-left: 1rem;
            padding-right: 1rem;
            border-radius: 0 60px 60px 0;
            background: linear-gradient(145deg, #006281, #007599);
            color: #fff;
        }
        
        input {
            border-radius: 60px 0 0 60px;
        }
        .notice,
        .notice a{
            font-size: medium;
            width: 70%;
            text-align: left;
            margin: 2rem auto;
        }
        .error {
            color: darkred;
            background: salmon;
            border: 1px solid darkred;
            padding: 1rem;
        }
    </style>
<body>

<form method="POST">
<svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 24 24"><path d="M14 9v2h-4v-2c0-1.104.897-2 2-2s2 .896 2 2zm10 3c0 6.627-5.373 12-12 12s-12-5.373-12-12 5.373-12 12-12 12 5.373 12 12zm-8-1h-1v-2c0-1.656-1.343-3-3-3s-3 1.344-3 3v2h-1v6h8v-6z"/></svg>
  <?php if( $_SERVER['REQUEST_METHOD'] == 'POST' ) { ?>
    <p class="error">Invalid password</p>
  <?php } ?>
  <p>Enter password for access:</p>
  <input type="password" name="password"><button type="submit">&rarr;</button>
  <p class="notice">This website is protected while in development. If you need help accessing it contact<a href="mailto:grm.dgs@gmail.com">Graham Douglas</a></p>
</form>

</body>
</html>