<?php
 /* Здесь проверяется существование переменных */
  if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
 if (isset($_POST['name'])) {$name = $_POST['name'];}

 
/* Сюда впишите свою эл. почту */
 $address = "ivanredhills@gmail.com";

/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = "\nТелефон: $phone\nИмя: $name";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заявка с сайта TEXA'; //сабж
$email='mi-band-3.com'; // сюда вписать доменное имя 
 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

ini_set('short_open_tag', 'On');

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Ваша заявка принята</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="upsells/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
        <link media="all" href="main2.css" rel="stylesheet" type="text/css" />
        <link media="all" href="upsells/css/hint.css" rel="stylesheet" type="text/css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


        <script type="text/javascript">
            setTimeout('location.replace("./")', 150000);
            /*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
        </script>

        <link rel="stylesheet" type="text/css" href="fonts/roboto.css">
    </head>
    <style>
        .man .block-1 .top-title>div {
            background: url(upsells/img/phone-icon-2-lighter.png) center bottom no-repeat;
        }
        .dashed_frame {
            border: 1px dashed grey;
            border-radius: 10px;
            opacity: 1;
            background: none;
            top: 0;
            height: auto;
            padding: 15px 20px;
            width: 90%;
            margin-bottom: 20px;
        }
        .dashed_frame h2 {
            font-weight: 900;
            text-align: center;
            text-transform: uppercase;
        }
        .present {
            background-color: #eff2fa;
            border-radius: 10px;
            padding: 20px !important;
            height: 510px !important;
            border: 1px solid #e2dfe9;
        }
        .offer-head {
            left: -40px;
            position: relative;
        }
        .mail-box .head {
            font-family: sans-serif;
            font-size: 18px;
            font-style: italic;
            text-align: center;
            margin: 20px 0;
        }
        .mail-box .email_ss_holder {
            float: none;
            width: 100%;
            padding: 45px 10px 15px;
            text-align: center;
        }
        .mail-box .email_cc_input {
            border: 1px solid #dcdada;
            background-color: rgba(204, 204, 204, 0.16);
            width: 258px;
            color: #000;
        }
        .mail-box .btn_ss_holder {
            float: none;
            margin: 0;
            width: 100%;
            text-align: center;
        }
        .mail-box .desc_cc_desc {
            margin: 45px 0px 0;
            color: #7b7b7b;
            font-size: 14px;
        }
        .present-descr {
            width: 58%;
            float: left;
        }
        .present1 {
            float: left;
            text-align: center;
            width: 30%;
            margin: 0 5px;
        }
        .present1.last:after {
            clear: both;
        }
        .mail-box {
            background: url("mail-box.png") center top no-repeat;
            width: 42%;
            float: left;
            padding: 1px 45px;
            height: 375px;
        }
        .tov-gal-big {
            margin-top: 45px !important;
            border: 1px solid lightgrey;
        }
        .tov-gal-list {
            margin-top: 45px !important;
        }
        .tov-left-cont {
            width: 420px !important;
        }
        .thanks {
            margin: 43% auto;
            font-size:28px;
            text-align:center;
            line-height:36px
        }
        .thanks span {
            font-size:20px;
        }
        @media (max-width: 960px){
            .mail-box, .present-descr {
                float: none;
                width: 100%;
            }
            .present {
                height: 100% !important;
            }
            .present-descr {
                height: 375px;
            }
            .offer-head {
                left: -40px;
            }
            .thanks {
                width: 55%;
                margin: 25% auto;
            }
        }
        @media (max-width: 640px){
            .present1 {
                margin: 0 3px;
            }
            .present, .mail-box .head, .mail-box .desc_cc_desc {
                font-size: 80%;
            }
            .present-descr {
                height: 300px;
            }
            .mail-box .email_ss_holder {
                padding: 45px 0 15px;
            }
            .mail-box .email_cc_input {
                width: 100%;
            }
            .mail-box {
                height: 330px;
                background-size: contain;
            }
            .mail-box .head {
                margin: 15px 0;
            }
            .top-title-c {
                top: 0 !important;
            }
            .thanks {
                font-size: 18px;
                line-height: 30px;
                width: 100%;
                margin: 55% auto;
            }
            .thanks span {
                font-size: 14px;
            }
        }
    </style>

    <body class="man" style="background-color: #004288;">

        <div class="section block-1" style="background: #004288 url(top-bg-purple.png) 50%/cover; margin-top: 0px;margin-bottom: 20px">
            <div class="wrap" style="height:180px;">
                <div class="top-title top-title-c" style="text-align: center;padding: 30px 0;">
                    <h2 style="color: #ffffff; font-family: PT Sans, Arial, sans-serif;
              font-style: normal;
              font-weight: bold;
              font-size: 36px;
              line-height: normal;">
                        Ваша заявка принята
                    </h2>
                    <div style="color: #ffffff; font-family: PT Sans, Arial, sans-serif;
              font-style: normal;
              font-weight: bold;
              font-size: 24px;
              line-height: normal;
              max-width: 415px;
              text-align: center;
              margin: 0 auto;">
                        В ближайшее время с Вами свяжется наш менеджер и предоставит всю необходимую информацию</div>
                </div>
            </div>
            <div style="background: #ffffff;
    margin: 0 auto;
    color: #004288;
    width: 195px;
    height: 45px;
    font-weight: bold;
    font-size: 18px;
    line-height: normal;
    box-sizing: border-box;
    padding-top: 10px;
    align-self: center;
    margin-top: 160px;
    border-radius: 5px;">
                <a href="index.html" style="text-decoration: none;
        color: #004288;
        padding-left: 65px;
        padding-right: 65px;
        padding-top: 10px;
        padding-bottom: 12px;
        box-sizing: border-box;
        font-family: PT Sans;
        font-style: normal;
        font-weight: bold;
        font-size: 18px;
        line-height: normal;">Отлично</a>
            </div>

        </div>




    </body>

    </html>




</body>
</html>