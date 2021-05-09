<?php
function my_style_login()
{ ?>
    <style>
        body.login {
            background: linear-gradient(160deg, rgba(54, 57, 63, 1) 0%, rgba(54, 57, 63, 1) 0%, rgba(27, 28, 31, 1) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        body.login div#login {
            display: flex;
            flex-direction: column;
            padding: 0;
            margin: 0;
            align-items: center;
        }

        body.login div#login h1 {}

        body.login div#login h1 a {}

        body.login div#login form#loginform {
            border-radius: 6px;
            background: #202225 !important;
            border: 0;
            color: white;
            padding-top: 30px;
            height: auto;
            margin: 0;
            font-weight: 400;
            width: 300px;
        }

        body.login div#login form#loginform p {}

        body.login div#login form#loginform p label {}

        body.login div#login form#loginform input {
            border: 0;
            border-radius: 0;
        }

        body.login div#login form#loginform input#user_login {}

        body.login div#login form#loginform input#user_pass {}

        body.login div#login form#loginform p.forgetmenot {}

        body.login div#login form#loginform p.forgetmenot input#Rememberme {}

        body.login div#login form#loginform p.submit {}

        body.login div#login form#loginform p.submit input#wp-submit {
            background: #0056bd;
            width: 100%;
            height: 44px;
            margin-top: 20px;
            border-radius: 100px;
        }

        body.login div#login p#nav {}

        body.login div#login p#nav a {}

        body.login div#login p#backtoblog {}

        body.login div#login p#backtoblog a {}
    </style>
<?php }
add_action('login_enqueue_scripts', 'my_style_login');