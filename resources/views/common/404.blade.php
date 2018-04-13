<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>NO FIND</title>
    <meta name="author" content="ukieweb" />
    <meta name="keywords" content="404 page, monkey, css3, template, html5 template" />
    <meta name="description" content="404 - Page Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" type="text/css" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css" />
    <!-- Template CSS -->

    <style type="text/css">

        * {
            font-family: arial, Helvetica, Arial, sans-serif;
            font-weight: 300;
        }
        html {
            height: 100%;
        }
        body {
            position: relative;
            height: 100%;
            background-color: #ffffff;
        }
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #ffffff;
        }
        p {
            font-weight: 300;
        }
        img {
            background-size: auto;
        }
        .error {
            border-color: red !important;
        }
        ::-webkit-input-placeholder {
            /* WebKit browsers */

            color: #ffffff;
        }
        :-moz-placeholder {
            /* Mozilla Firefox 4 to 18 */

            color: #ffffff;
            opacity: 1;
        }
        ::-moz-placeholder {
            /* Mozilla Firefox 19+ */

            color: #ffffff;
            opacity: 1;
        }
        :-ms-input-placeholder {
            /* Internet Explorer 10+ */

            color: #ffffff;
        }
        .container {
            position: relative;
        }
        /* ------------------
Button
-------------------- */

        .btn {
            font-size: 18px;
            font-weight: 600;
            color: #ffffff;
            border: 0px solid;
            border-bottom: 2px solid;
            border-color: #ef6d00;
            padding: 10px 41px;
            border-radius: 5px;
            background: none;
            text-transform: uppercase;
            display: inline-block;
            margin: 20px 20px 0 0;
            background-color: #ff8000;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            text-decoration: none;
            cursor: pointer;
        }
        .btn:hover {
            background: #ef6d00;
            color: #ffffff;
            text-decoration: none;
        }
        .btn-brown {
            border-color: #7b7b7b;
            background-color: #9f9f9f;
        }
        .btn-brown:hover {
            background: #7b7b7b;
        }
        /* ------------------
Wrapper
-------------------- */

        #wrapper {
            min-height: 100%;
            height: 100%;
            width: 100%;
        }
        /* ------------------
Info
--------------------*/

        .info {
            position: relative;
            z-index: 999;
        }
        .info h1 {
            font-size: 102px;
            font-weight: 700;
            margin-top: 120px;
            line-height: 105px;
            color: #f35d34;
            text-transform: uppercase;
        }
        .info h2 {
            font-size: 42px;
            font-weight: 700;
            line-height: 48px;
            color: #000000;
            text-transform: uppercase;
        }
        .info p {
            font-size: 16px;
            line-height: 24px;
            font-weight: 300;
            color: #000000;
            text-transform: uppercase;
            margin: 15px 0;
        }
        /* ------------------
Monkey
--------------------*/

        .monkey {
            margin-top: 50px;
        }
        /* ------------------
Animationload
--------------------*/

        .animationload {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ffffff;
            z-index: 999999;
        }
        .loader {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -100px 0 0 -100px;
            width: 200px;
            height: 200px;
            background-image: url("../img/ajax-loader.gif");
            background-position: center;
            background-repeat: no-repeat;
        }
        @media (max-width: 1200px) {
            .info h1 {
                font-size: 110px;
            }
            .info h2 {
                font-size: 55px;
                line-height: 55px;
            }
            .monkey img {
                width: 352px;
            }
        }
        @media (max-width: 992px) {
            .info h1 {
                font-size: 90px;
            }
            .info h2 {
                font-size: 45px;
                line-height: 45px;
            }
            .monkey img {
                width: 282px;
            }
            .monkey {
                margin-top: 150px;
            }
        }
        @media (max-width: 767px) {
            .monkey {
                margin-top: 10px;
                margin-bottom: 30px;
            }
            .info {
                text-align: center;
            }
            .info h1 {
                margin-top: 50px;
            }
        }
        @media (max-width: 500px) {
            .info h1 {
                font-size: 60px;
                line-height: 66px;
            }
            .info h2 {
                font-size: 30px;
                line-height: 30px;
            }
            .info p {
                font-size: 16px;
            }
        }
        @media (max-width: 440px) {
            .info p br {
                display: block;
            }
            .btn {
                display: block;
                margin: 20px;
            }
        }
    </style>
</head>

<body>

<!-- Content Wrapper -->
<div id="wrapper">
    <div class="container">
        <div class="col-xs-12 col-sm-7 col-lg-7">
            <!-- Info -->
            <div class="info">
                <h1>404</h1>
                <h2>找不到该页面 (｡•ˇ‸ˇ•｡)</h2>
                <a href="index.html" class="btn">返回首页</a>
                <a href="contact.html" class="btn btn-brown">联系我们</a>
            </div>
            <!-- end Info -->
        </div>

        <div class="col-xs-12 col-sm-5 col-lg-5 text-center">
            <!-- Monkey -->
            <div class="monkey">
                <img src="images/404.gif" alt="Monkey" />
            </div>
            <!-- end Monkey -->
        </div>

    </div>
    <!-- end container -->
</div>
<!-- end Content Wrapper -->

</body>

</html>