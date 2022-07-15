<?php
include "Header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0px;
            padding: 0px;
        }

        #topicbtn {
            width: 170px;
            height: 35px;
        }

        #flipad {
            margin-top: -26px;
        }

        #personalitybox {
            box-shadow: -3px 5px 5px 5px gray;
            height: 440px;
            border-radius: 26px;
            background-color: white;
            border: 2px solid purple;
            width: 350px;
            padding: 17px;
        }

        #personalityquote {
            padding: 17px;
            font-family: ruby;
        }


        #div1_right {
            width: 100%;
            height: 125px;
            box-shadow: -5px 5px 8px gray;
            border-radius: 8px;
            padding-left: 26px;
            background-color: white;
            padding-right: 26px;
            padding-top: 17px;
            text-align: center;
            border: 3px solid purple;
        }

        #div11_right {
            width: 100%;
            height: 125px;
            box-shadow: -5px 5px 8px gray;
            border-radius: 8px;
            padding-left: 26px;
            background-color: white;
            padding-right: 26px;
            padding-top: 17px;
            text-align: center;
            border: 3px solid purple;
        }

        #div2_right {
            border-radius: 26px;
            margin-top: 44px;
            width: 440px;
            height: 440px;
        }

        #div21_right {
            width: 100%;
            height: 125px;
            padding-left: 26px;
            background-color: white;
            padding-right: 26px;
            padding-top: 17px;
            text-align: center;
            box-shadow: -5px 5px 8px #50C878;
            border-radius: 8px;
            border: 3px solid green;
        }

        #div22_right {
            width: 100%;
            height: 125px;
            padding-left: 26px;
            background-color: white;
            padding-right: 26px;
            padding-top: 17px;
            text-align: center;
            box-shadow: -5px 5px 8px #50C878;
            border-radius: 8px;
            border: 3px solid green;
        }

        #div3_right {
            width: 100%;
            height: 125px;
            padding-left: 26px;
            background-color: white;
            padding-right: 26px;
            padding-top: 17px;
            text-align: center;
            box-shadow: -5px 5px 8px #A0CFEC;
            border-radius: 8px;
            border: 3px solid blue;
        }

        #div31_right {
            width: 100%;
            height: 125px;
            padding-left: 26px;
            background-color: white;
            padding-right: 26px;
            padding-top: 17px;
            text-align: center;
            box-shadow: -5px 5px 8px #A0CFEC;
            border-radius: 8px;
            border: 3px solid blue;
        }

        #div4_right {
            border-radius: 26px;
            margin-top: 44px;
            width: 440px;
            height: 440px;
        }

        #div41_right {
            width: 100%;
            height: 125px;
            padding-left: 26px;
            background-color: white;
            padding-right: 26px;
            padding-top: 17px;
            text-align: center;
            box-shadow: -5px 5px 8px #50C878;
            border-radius: 8px;
            border: 3px solid green;
        }

        #div42_right {
            width: 100%;
            height: 125px;
            padding-left: 26px;
            background-color: white;
            padding-right: 26px;
            padding-top: 17px;
            text-align: center;
            box-shadow: -5px 5px 8px #50C878;
            border-radius: 8px;
            border: 3px solid green;
        }

        #div1_left {
            width: 100%;
            height: 125px;
            box-shadow: -5px 5px 8px gray;
            border-radius: 8px;
            padding-left: 26px;
            background-color: white;
            padding-right: 26px;
            padding-top: 17px;
            text-align: center;
            border: 3px solid purple;
        }

        #div11_left {
            width: 100%;
            height: 125px;
            box-shadow: -5px 5px 8px gray;
            border-radius: 8px;
            padding-left: 26px;
            background-color: white;
            padding-right: 26px;
            padding-top: 17px;
            text-align: center;
            border: 3px solid purple;
        }

        #div2_left {
            width: 100%;
            height: 125px;
            padding-left: 26px;
            background-color: white;
            padding-right: 26px;
            padding-top: 17px;
            text-align: center;
            box-shadow: -5px 5px 8px #50C878;
            border-radius: 8px;
            border: 3px solid green;
        }

        #div21_left {
            width: 100%;
            height: 125px;
            padding-left: 26px;
            background-color: white;
            padding-right: 26px;
            padding-top: 17px;
            text-align: center;
            box-shadow: -5px 5px 8px #A0CFEC;
            border-radius: 8px;
            border: 3px solid blue;
        }

        #div22_left {
            width: 100%;
            height: 125px;
            padding-left: 26px;
            background-color: white;
            padding-right: 26px;
            padding-top: 17px;
            text-align: center;
            box-shadow: -5px 5px 8px #A0CFEC;
            border-radius: 8px;
            border: 3px solid blue;
        }

        #div3_left {
            width: 100%;
            height: 125px;
            padding-left: 26px;
            background-color: white;
            padding-right: 26px;
            padding-top: 17px;
            text-align: center;
            box-shadow: -5px 5px 8px #A0CFEC;
            border-radius: 8px;
            border: 3px solid blue;
        }

        #div31_left {
            width: 100%;
            height: 125px;
            padding-left: 26px;
            background-color: white;
            padding-right: 26px;
            padding-top: 17px;
            text-align: center;
            box-shadow: -5px 5px 8px #A0CFEC;
            border-radius: 8px;
            border: 3px solid blue;
        }

        #div4_left {
            border-radius: 26px;
            margin-top: 44px;
            width: 440px;
            height: 440px;
        }

        #div41_left {
            width: 100%;
            height: 125px;
            padding-left: 26px;
            background-color: white;
            padding-right: 26px;
            padding-top: 17px;
            text-align: center;
            box-shadow: -5px 5px 8px #EE9A4D;
            border-radius: 8px;
            border: 3px solid red;
        }

        #div42_left {
            width: 100%;
            height: 125px;
            padding-left: 26px;
            background-color: white;
            padding-right: 26px;
            padding-top: 17px;
            text-align: center;
            box-shadow: -5px 5px 8px #EE9A4D;
            border-radius: 8px;
            border: 3px solid red;
        }

        #engbg {
            background: url('../images/bgimg.jpg');
            background-repeat: no-repeat;
            height: 650px;
            background-size: 100% 100%;
        }

        #hindibg {
            background: url('../images/bgimg.jpg');
            background-repeat: no-repeat;
            height: 650px;
            background-size: 100% 100%;
        }

        #marathibg {
            background: url('../images/bgimg.jpg');
            background-repeat: no-repeat;
            height: 650px;
            background-size: 100% 100%;
        }

        #personalityname {
            font-family: Ruby;
            margin-top: -17px;
            margin-right: 17px;
            float: right;
        }

        #personalityimg {
            width: 134px;
            border: 3px solid orangered;
            background-color: white;
            height: 134px;
            border-radius: 50%;
            margin-left: 26%;
        }

        #personalitybtn {
            font-size: 15px;
            margin-top: 17px;
            margin-left: 26px;
            width: 260px;
        }

        #personalitybox1 {
            box-shadow: -3px 5px 5px 5px gray;
            height: 440px;
            border-radius: 26px;
            background-color: white;
            border: 2px solid green;
            width: 350px;
            padding: 17px;
        }

        #personalityquote1 {
            padding: 17px;
            font-family: ruby;
        }

        #personalityname1 {
            font-family: Ruby;
            margin-top: -17px;
            margin-right: 17px;
            float: right;
        }

        #personalityimg1 {
            width: 134px;
            border: 3px solid orangered;
            background-color: white;
            height: 134px;
            border-radius: 50%;
            margin-top: 53px;
            margin-left: 26%;
        }

        #personalityimg12 {
            width: 134px;
            border: 3px solid orangered;
            background-color: white;
            height: 134px;
            border-radius: 50%;
            margin-left: 26%;
        }

        #personalityimg11 {
            width: 134px;
            border: 3px solid orangered;
            background-color: white;
            height: 134px;
            border-radius: 50%;
            margin-top: 48px;
            margin-left: 26%;
        }

        #personalityimg22 {
            width: 134px;
            border: 3px solid orangered;
            background-color: white;
            height: 134px;
            border-radius: 50%;
            margin-top: 23px;
            margin-left: 26%;
        }

        #personalitybtn1 {
            font-size: 15px;
            margin-top: 17px;
            margin-left: 26px;
            width: 260px;
        }

        #personalitybox2 {
            box-shadow: -3px 5px 5px 5px gray;
            height: 440px;
            border-radius: 26px;
            background-color: white;
            border: 2px solid blue;
            width: 350px;
            padding: 17px;
        }

        #personalityquote2 {
            padding: 17px;
            font-family: ruby;
        }

        #personalityname2 {
            font-family: Ruby;
            margin-top: -17px;
            margin-right: 17px;
            float: right;
        }

        #personalityimg2 {
            width: 134px;
            border: 3px solid orangered;
            background-color: white;
            height: 134px;
            border-radius: 50%;
            margin-top: 44px;
            margin-left: 26%;
        }

        #personalityimg24 {
            width: 134px;
            border: 3px solid orangered;
            background-color: white;
            height: 134px;
            border-radius: 50%;
            margin-top: 71px;
            margin-left: 26%;
        }

        #personalityimg25 {
            width: 134px;
            border: 3px solid orangered;
            background-color: white;
            height: 134px;
            border-radius: 50%;
            margin-top: -38px;
            margin-left: 26%;
        }

        #personalitybtn2 {
            font-size: 15px;
            margin-top: 17px;
            margin-left: 26px;
            width: 260px;
        }

        #personalitybox3 {
            box-shadow: -3px 5px 5px 5px gray;
            height: 440px;
            border-radius: 26px;
            background-color: white;
            border: 2px solid red;
            width: 350px;
            padding: 17px;
        }

        #personalityquote3 {
            padding: 17px;
            font-family: ruby;
        }

        #personalityname3 {
            font-family: Ruby;
            margin-top: -35px;
            margin-right: 17px;
            float: right;
        }

        #personalityimg33 {
            width: 134px;
            border: 3px solid orangered;
            background-color: white;
            height: 134px;
            border-radius: 50%;
            margin-top: 71px;
            margin-left: 26%;
        }

        #personalityimg3 {
            width: 134px;
            border: 3px solid orangered;
            background-color: white;
            height: 134px;
            border-radius: 50%;
            margin-top: 71px;
            margin-left: 26%;
        }

        #personalityimg31 {
            width: 134px;
            border: 3px solid orangered;
            background-color: white;
            height: 134px;
            border-radius: 50%;
            margin-top: 17px;
            margin-left: 26%;
        }

        #personalityimg32 {
            width: 134px;
            border: 3px solid orangered;
            background-color: white;
            height: 134px;
            border-radius: 50%;
            margin-top: 44px;
            margin-left: 26%;
        }

        #personalitybtn3 {
            font-size: 15px;
            margin-top: 17px;
            margin-left: 26px;
            width: 260px;
        }

        #scroll-container {
            margin-top: 98px;
            background-color: white;
            width: 100%;
            border-radius: 5px;
            height: 500px;
            overflow: hidden;
        }

        #personalityimg21 {
            width: 134px;
            border: 3px solid orangered;
            background-color: white;
            height: 134px;
            border-radius: 50%;
            margin-top: 42px;
            margin-left: 26%;
        }

        #personalityimg23 {
            width: 134px;
            border: 3px solid orangered;
            background-color: white;
            height: 134px;
            border-radius: 50%;
            margin-top: 49px;
            margin-left: 26%;
        }


        #scroll-text {
            height: 476px;
            text-align: center;
            /* animation properties */
            -moz-transform: translateY(100%);
            -webkit-transform: translateY(100%);
            transform: translateY(100%);
            -moz-animation: my-animation 5s linear infinite;
            -webkit-animation: my-animation 5s linear infinite;
            animation: my-animation 26s linear infinite;
        }

        /* for Firefox */
        @-moz-keyframes my-animation {
            from {
                -moz-transform: translateY(100%);
            }

            to {
                -moz-transform: translateY(-100%);
            }
        }

        /* for Chrome */
        @-webkit-keyframes my-animation {
            from {
                -webkit-transform: translateY(100%);
            }

            to {
                -webkit-transform: translateY(-100%);
            }
        }

        @keyframes my-animation {
            from {
                -moz-transform: translateY(100%);
                -webkit-transform: translateY(100%);
                transform: translateY(100%);
            }

            to {
                -moz-transform: translateY(-100%);
                -webkit-transform: translateY(-100%);
                transform: translateY(-100%);
            }
        }

        #imgcarousel {
            margin-top: 85px;
        }

        #topicdiv {
            padding: 17px;
        }

        .svg {
            background-color: #ffc87c;
            margin-top: 80px;
        }

        #caraimg {
            height: 520px;
        }

        #hinengmarimg1 {
            margin-left: 30px;
        }

        #sociallinks1 {
            color: black;
            margin-left: 35px;
        }

        #sociallinks {
            color: black;
            margin-left: 36px;
        }

        @media screen and (max-width: 1280px) {
            #personalitybox {
                box-shadow: -3px 5px 5px 5px gray;
                height: 440px;
                border-radius: 26px;
                background-color: white;
                border: 2px solid purple;
                width: 290px;
                padding: 17px;
            }

            #personalityquote {
                padding: 5px;
                font-size: large;
                font-family: ruby;
            }

            #personalitybtn {
                font-size: 15px;
                margin-top: 17px;
                margin-left: 26px;
                width: 200px;
            }

            #personalityimg {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 53px;
                margin-left: 26%;
            }

            #personalityname {
                font-family: Ruby;
                margin-top: -17px;
                font-size: large;
                margin-right: 17px;
                float: right;
            }

            #sociallinks {
                color: black;
                margin-left: 26px;
            }

            #personalitybox1 {
                box-shadow: -3px 5px 5px 5px gray;
                height: 440px;
                border-radius: 26px;
                background-color: white;
                border: 2px solid green;
                width: 290px;
                padding: 17px;
            }

            #personalityquote1 {
                padding: 5px;
                font-size: large;
                font-family: ruby;
            }

            #personalityname1 {
                font-family: Ruby;
                margin-top: -17px;
                font-size: large;
                margin-right: 17px;
                float: right;
            }

            #personalityimg1 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 70px;
                margin-left: 26%;
            }

            #personalityimg12 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                margin-top: 35px;
                border-radius: 50%;
                margin-left: 26%;
            }

            #personalityimg11 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 55px;
                margin-left: 26%;
            }

            #personalityimg22 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 67px;
                margin-left: 26%;
            }

            #personalitybtn1 {
                font-size: 15px;
                margin-top: 17px;
                margin-left: 26px;
                width: 200px;
            }

            #personalitybox2 {
                box-shadow: -3px 5px 5px 5px gray;
                height: 440px;
                border-radius: 26px;
                background-color: white;
                border: 2px solid blue;
                width: 290px;
                padding: 17px;
            }

            #personalityquote2 {
                padding: 17px;
                font-size: large;
                font-family: ruby;
            }

            #personalityname2 {
                font-family: Ruby;
                margin-top: -17px;
                font-size: large;
                margin-right: 17px;
                float: right;
            }

            #personalityimg2 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 25px;
                margin-left: 26%;
            }

            #personalityimg24 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 45px;
                margin-left: 26%;
            }

            #personalityimg25 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 20px;
                margin-left: 26%;
            }

            #personalitybtn2 {
                font-size: 15px;
                margin-top: 17px;
                margin-left: 26px;
                width: 200px;
            }

            #personalitybox3 {
                box-shadow: -3px 5px 5px 5px gray;
                height: 440px;
                border-radius: 26px;
                background-color: white;
                border: 2px solid red;
                width: 290px;
                padding: 17px;
            }

            #personalityquote3 {
                padding: 17px;
                font-size: large;
                font-family: ruby;
            }

            #personalityname3 {
                font-family: Ruby;
                margin-top: -25px;
                font-size: large;
                margin-right: 17px;
                float: right;
            }

            #personalityimg33 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 51px;
                margin-left: 26%;
            }

            #personalityimg3 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 71px;
                margin-left: 26%;
            }

            #personalityimg31 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 55px;
                margin-left: 26%;
            }

            #personalityimg32 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 74px;
                margin-left: 26%;
            }

            #personalitybtn3 {
                font-size: 15px;
                margin-top: 17px;
                margin-left: 26px;
                width: 200px;
            }

            #scroll-container {
                margin-top: 98px;
                background-color: white;
                width: 100%;
                border-radius: 5px;
                height: 500px;
                overflow: hidden;
            }

            #personalityimg21 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 42px;
                margin-left: 26%;
            }

            #personalityimg23 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 49px;
                margin-left: 26%;
            }


        }

        @media screen and (max-width: 575px) {

            #imgcarousel {
                margin-top: 45px;
            }

            #draggable {
                position: relative;
                margin-top: 35px;
                width: 450px;
                height: 281px;
                z-index: 1;
            }

            #draggable1 {
                margin-top: 44px;
                width: 450px;
                height: 281px;
                z-index: 1;
            }

            #draggable2 {
                margin-top: 44px;
                width: 450px;
                height: 281px;
                z-index: 1;
            }

            #flipad {
                margin-top: 8px;
                margin-left: 116px;
            }

            #personalitybox {
                width: 488px;
                margin-left: -4px;
                margin-bottom: 26px;
            }

            #personalitybox1 {
                width: 488px;
                margin-left: -4px;
                margin-bottom: 26px;
            }

            #personalitybox2 {
                width: 488px;
                margin-left: -4px;
                margin-bottom: 26px;
            }

            #personalitybox3 {
                width: 488px;
                margin-left: -4px;
                margin-bottom: 26px;
            }

            #scroll-text {
                -moz-animation: my-animation 5s linear infinite;
                -webkit-animation: my-animation 5s linear infinite;
                animation: my-animation 17s linear infinite;
            }

            #engquotes1 {
                margin-bottom: -1px;
            }

            #hindiquotes1 {
                margin-top: -250px;
            }


            #scroll-container {
                margin-top: 10px;
                height: 260px;
            }

            #engbg {
                background: none;
            }

            #hrres {
                display: none;
            }

            #hindibg {
                background: none;
                margin-top: 600px;
            }

            #marathibg {
                background: none;
                margin-top: 350px;
            }

            #flipid1 {
                margin-top: 8px;
                margin-left: 116px;
            }

            #persorow1 {
                display: inline;
                margin: 0% auto;
            }

            #caraimg {
                height: 287px;
            }

            #hinengmarimg {
                width: 377px;
                height: 377px;
                margin-left: -170px;
                display: block;
                margin: 0% auto;
            }

            #hinengmarimg1 {
                width: 377px;
                height: 377px;
                margin-left: -170px;
                display: block;
                margin: 0% auto;
            }

            #marathiquotes1 {
                margin-bottom: -1px;
            }

            #flipid2 {
                margin-top: 8px;
                margin-left: 116px;
            }

            #fampersonality {
                margin-top: 340px;
            }

            #personalitybtn {
                width: 323px;
                height: 35px;
                margin-left: 65px;
            }

            #personalitybtn1 {
                width: 323px;
                height: 35px;
                margin-left: 65px;
            }

            #personalitybtn2 {
                width: 323px;
                height: 35px;
                margin-left: 65px;
            }

            #personalitybtn3 {
                width: 323px;
                height: 35px;
                margin-left: 65px;
            }

            #personalitybtn4 {
                width: 323px;
                height: 35px;
                margin-left: 65px;
            }

            #sociallinks1 {
                color: black;
                margin-left: 92px;
            }

            #sociallinks {
                color: black;
                margin-left: 44px;
            }

            #personalityquote {
                height: 80px;
                font-size: xx-large;
                justify-content: center;
            }

            #personalityquote1 {
                height: 80px;
                font-size: xx-large;
                justify-content: center;
            }

            #personalityquote2 {
                height: 80px;
                font-size: xx-large;
                justify-content: center;
            }

            #personalityquote3 {
                height: 80px;
                font-size: xx-large;
                justify-content: center;
            }

            #personalityname {
                margin-top: 53px;
                font-size: x-large;
            }

            #personalityname1 {
                margin-top: 53px;
                font-size: x-large;
            }

            #personalityname2 {
                margin-top: 53px;
                font-size: x-large;
            }

            #personalityname3 {
                margin-top: 53px;
                font-size: x-large;
            }

            #personalityimg {
                width: 152px;
                border: 3px solid orangered;
                background-color: white;
                height: 152px;
                border-radius: 50%;
                margin-top: 98px;
                margin-left: 153px;
            }

            #personalityimg1 {
                width: 152px;
                border: 3px solid orangered;
                background-color: white;
                height: 152px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 153px;
            }

            #personalityimg11 {
                width: 152px;
                border: 3px solid orangered;
                background-color: white;
                height: 152px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 153px;
            }

            #personalityimg21 {
                width: 152px;
                border: 3px solid orangered;
                background-color: white;
                height: 152px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 153px;
            }

            #personalityimg12 {
                width: 152px;
                border: 3px solid orangered;
                background-color: white;
                height: 152px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 153px;
            }

            #personalityimg22 {
                width: 152px;
                border: 3px solid orangered;
                background-color: white;
                height: 152px;
                border-radius: 50%;
                margin-top: 89px;
                margin-left: 153px;
            }

            #personalityimg23 {
                width: 152px;
                border: 3px solid orangered;
                background-color: white;
                height: 152px;
                border-radius: 50%;
                margin-top: 117px;
                margin-left: 153px;
            }

            #personalityimg24 {
                width: 152px;
                border: 3px solid orangered;
                background-color: white;
                height: 152px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 153px;
            }

            #personalityimg25 {
                width: 152px;
                border: 3px solid orangered;
                background-color: white;
                height: 152px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 153px;
            }

            #personalityimg31 {
                width: 152px;
                border: 3px solid orangered;
                background-color: white;
                height: 152px;
                border-radius: 50%;
                margin-top: 98px;
                margin-left: 153px;
            }

            #personalityimg32 {
                width: 152px;
                border: 3px solid orangered;
                background-color: white;
                height: 152px;
                border-radius: 50%;
                margin-top: -17px;
                margin-left: 153px;
            }

            #personalityimg2 {
                width: 152px;
                border: 3px solid orangered;
                background-color: white;
                height: 152px;
                border-radius: 50%;
                margin-top: 107px;
                margin-left: 153px;
            }

            #personalityimg33 {
                width: 152px;
                border: 3px solid orangered;
                background-color: white;
                height: 152px;
                border-radius: 50%;
                margin-top: 107px;
                margin-left: 153px;
            }

            #personalityimg3 {
                width: 152px;
                border: 3px solid orangered;
                background-color: white;
                height: 152px;
                border-radius: 50%;
                margin-top: 98px;
                margin-left: 153px;
            }

            #topicbtn {
                margin-left: 161px;
            }
        }


        @media screen and (max-width: 480px) {

            #draggable {
                position: relative;
                margin-top: 35px;
                width: 450px;
                height: 281px;
                z-index: 1;
            }

            #draggable1 {
                margin-top: 44px;
                width: 450px;
                height: 281px;
                z-index: 1;
            }

            #draggable2 {
                margin-top: 44px;
                width: 450px;
                height: 281px;
                z-index: 1;
            }

            #flipad {
                margin-top: 8px;
                margin-left: 53px;
            }

            #personalitybox {
                width: 359px;
                margin-left: -4px;
                margin-bottom: 26px;
            }

            #personalitybox1 {
                width: 359px;
                margin-left: -4px;
                margin-bottom: 26px;
            }

            #personalitybox2 {
                width: 359px;
                margin-left: -4px;
                margin-bottom: 26px;
            }

            #personalitybox3 {
                width: 359px;
                margin-left: -4px;
                margin-bottom: 26px;
            }

            #scroll-text {
                -moz-animation: my-animation 5s linear infinite;
                -webkit-animation: my-animation 5s linear infinite;
                animation: my-animation 17s linear infinite;
            }

            #engquotes1 {
                margin-bottom: -1px;
            }

            #hindiquotes1 {
                margin-top: -270px;
            }


            #scroll-container {
                margin-top: 10px;
                height: 260px;
            }

            #engbg {
                background: none;
            }

            #hrres {
                display: none;
            }

            #hindibg {
                background: none;
                margin-top: 515px;
            }

            #marathibg {
                background: none;
                margin-top: 250px;
            }

            #flipid1 {
                margin-top: 8px;
                margin-left: 53px;
            }

            #persorow1 {
                display: inline;
                margin: 0% auto;
            }

            #caraimg {
                height: 233px;
            }

            #hinengmarimg {
                width: 277px;
                height: 277px;
                margin-left: -170px;
                display: block;
                margin: 0% auto;
            }

            #hinengmarimg1 {
                width: 277px;
                height: 277px;
                margin-left: -170px;
                display: block;
                margin: 0% auto;
            }

            #marathiquotes1 {
                margin-bottom: -1px;
            }

            #flipid2 {
                margin-top: 8px;
                margin-left: 53px;
            }

            #fampersonality {
                margin-top: 230px;
            }

            #personalitybtn {
                width: 217px;
                margin-left: 50px;
            }

            #personalitybtn1 {
                width: 217px;
                margin-left: 50px;
            }

            #personalitybtn2 {
                width: 217px;
                margin-left: 50px;
            }

            #personalitybtn3 {
                width: 217px;
                margin-left: 50px;
            }

            #personalitybtn4 {
                width: 217px;
                margin-left: 50px;
            }

            #sociallinks1 {
                color: black;
                margin-left: 62px;
            }

            #sociallinks {
                color: black;
                margin-left: 26px;
            }

            #personalityquote {
                height: 80px;
                font-size: x-large;
                justify-content: center;
            }

            #personalityquote1 {
                height: 80px;
                font-size: x-large;
                justify-content: center;
            }

            #personalityquote2 {
                height: 80px;
                font-size: x-large;
                justify-content: center;
            }

            #personalityquote3 {
                height: 80px;
                font-size: x-large;
                justify-content: center;
            }

            #personalityname {
                margin-top: 44px;
                font-size: large;
            }

            #personalityname1 {
                margin-top: 44px;
                font-size: large;
            }

            #personalityname2 {
                margin-top: 44px;
                font-size: large;
            }

            #personalityname3 {
                margin-top: 44px;
                font-size: large;
            }

            #personalityimg {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 8px;
                margin-left: 89px;
            }

            #personalityimg1 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 89px;
            }

            #personalityimg11 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 89px;
            }

            #personalityimg21 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 89px;
            }

            #personalityimg12 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 89px;
            }

            #personalityimg22 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 8px;
                margin-left: 89px;
            }

            #personalityimg23 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 117px;
                margin-left: 89px;
            }

            #personalityimg24 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 89px;
            }

            #personalityimg25 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 89px;
            }

            #personalityimg31 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 98px;
                margin-left: 89px;
            }

            #personalityimg32 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 8px;
                margin-left: 89px;
            }

            #personalityimg2 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 107px;
                margin-left: 89px;
            }

            #personalityimg33 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 107px;
                margin-left: 89px;
            }

            #personalityimg3 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 98px;
                margin-left: 89px;
            }

            #topicbtn {
                margin-left: 98px;
            }
        }

        @media screen and (max-width: 376px) {

            #draggable {
                position: relative;
                margin-top: 35px;
                width: 450px;
                height: 281px;
                z-index: 1;
            }

            #draggable1 {
                margin-top: 44px;
                width: 450px;
                height: 281px;
                z-index: 1;
            }

            #draggable2 {
                margin-top: 44px;
                width: 450px;
                height: 281px;
                z-index: 1;
            }

            #flipad {
                margin-top: 8px;
                margin-left: 36px;
            }

            #personalitybox {
                width: 323px;
                margin-left: -4px;
                margin-bottom: 26px;
            }

            #personalitybox1 {
                width: 323px;
                margin-left: -4px;
                margin-bottom: 26px;
            }

            #personalitybox2 {
                width: 323px;
                margin-left: -4px;
                margin-bottom: 26px;
            }

            #personalitybox3 {
                width: 323px;
                margin-left: -4px;
                margin-bottom: 26px;
            }

            #scroll-text {
                -moz-animation: my-animation 5s linear infinite;
                -webkit-animation: my-animation 5s linear infinite;
                animation: my-animation 17s linear infinite;
            }

            #engquotes1 {
                margin-bottom: -1px;
            }

            #hindiquotes1 {
                margin-top: -260px;
            }


            #scroll-container {
                margin-top: 10px;
                height: 260px;
            }

            #engbg {
                background: none;
            }

            #hrres {
                display: none;
            }

            #hindibg {
                background: none;
                margin-top: 515px;
            }

            #marathibg {
                background: none;
                margin-top: 240px;
            }

            #flipid1 {
                margin-top: 8px;
                margin-left: 35px;
            }

            #persorow1 {
                display: inline;
                margin: 0% auto;
            }

            #caraimg {
                height: 233px;
            }

            #hinengmarimg {
                width: 277px;
                height: 277px;
                margin-left: -170px;
                display: block;
                margin: 0% auto;
            }

            #hinengmarimg1 {
                width: 277px;
                height: 277px;
                margin-left: -170px;
                display: block;
                margin: 0% auto;
            }

            #marathiquotes1 {
                margin-bottom: -1px;
            }

            #flipid2 {
                margin-top: 8px;
                margin-left: 35px;
            }

            #fampersonality {
                margin-top: 220px;
            }

            #personalitybtn {
                width: 217px;
                margin-left: 35px;
            }

            #personalitybtn1 {
                width: 217px;
                margin-left: 35px;
            }

            #personalitybtn2 {
                width: 217px;
                margin-left: 35px;
            }

            #personalitybtn3 {
                width: 217px;
                margin-left: 35px;
            }

            #personalitybtn4 {
                width: 217px;
                margin-left: 35px;
            }

            #sociallinks1 {
                color: black;
                margin-left: 47px;
            }

            #sociallinks {
                color: black;
                margin-left: 26px;
            }

            #personalityquote {
                height: 80px;
                font-size: x-large;
                justify-content: center;
            }

            #personalityquote1 {
                height: 80px;
                font-size: x-large;
                justify-content: center;
            }

            #personalityquote2 {
                height: 80px;
                font-size: x-large;
                justify-content: center;
            }

            #personalityquote3 {
                height: 80px;
                font-size: x-large;
                justify-content: center;
            }

            #personalityname {
                margin-top: 44px;
                font-size: large;
            }

            #personalityname1 {
                margin-top: 44px;
                font-size: large;
            }

            #personalityname2 {
                margin-top: 44px;
                font-size: large;
            }

            #personalityname3 {
                margin-top: 44px;
                font-size: large;
            }

            #personalityimg {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 17px;
                margin-left: 25%;
            }

            #personalityimg1 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 10px;
                margin-left: 25%;
            }

            #personalityimg11 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 25%;
            }

            #personalityimg21 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 25%;
            }

            #personalityimg12 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 25%;
            }

            #personalityimg22 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 8px;
                margin-left: 25%;
            }

            #personalityimg23 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 117px;
                margin-left: 25%;
            }

            #personalityimg24 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 25%;
            }

            #personalityimg25 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 25%;
            }

            #personalityimg31 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 8px;
                margin-left: 25%;
            }

            #personalityimg32 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 8px;
                margin-left: 25%;
            }

            #personalityimg2 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 107px;
                margin-left: 25%;
            }

            #personalityimg33 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 107px;
                margin-left: 25%;
            }

            #personalityimg3 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 8px;
                margin-left: 25%;
            }

            #topicbtn {
                margin-left: 87px;
            }
        }

        @media screen and (max-width: 361px) {

            #imgcarousel {
                margin-top: 45px;
            }

            #draggable {
                position: relative;
                margin-top: 35px;
                width: 450px;
                height: 281px;
                z-index: 1;
            }

            #draggable1 {
                margin-top: 44px;
                width: 450px;
                height: 281px;
                z-index: 1;
            }

            #draggable2 {
                margin-top: 44px;
                width: 450px;
                height: 281px;
                z-index: 1;
            }

            #flipad {
                margin-top: 8px;
                margin-left: 28px;
            }

            #personalitybox {
                width: 323px;
                margin-left: -10px;
                margin-bottom: 26px;
            }

            #personalitybox1 {
                width: 323px;
                margin-left: -10px;
                margin-bottom: 26px;
            }

            #personalitybox2 {
                width: 323px;
                margin-left: -10px;
                margin-bottom: 26px;
            }

            #personalitybox3 {
                width: 323px;
                margin-left: -10px;
                margin-bottom: 26px;
            }

            #scroll-text {
                -moz-animation: my-animation 5s linear infinite;
                -webkit-animation: my-animation 5s linear infinite;
                animation: my-animation 17s linear infinite;
            }

            #engquotes1 {
                margin-bottom: -1px;
            }


            #hindiquotes1 {
                margin-top: -290px;
            }


            #scroll-container {
                margin-top: 10px;
                height: 260px;
            }

            #engbg {
                background: none;
            }

            #hrres {
                display: none;
            }

            #hindibg {
                background: none;
                margin-top: 485px;
            }

            #marathibg {
                background: none;
                margin-top: 210px;
            }

            #flipid1 {
                margin-top: 8px;
                margin-left: 26px;
            }

            #persorow1 {
                display: inline;
                margin: 0% auto;
            }

            #caraimg {
                height: 233px;
            }

            #hinengmarimg {
                width: 242px;
                height: 242px;
                margin-left: -170px;
                display: block;
                margin: 0% auto;
            }

            #hinengmarimg1 {
                width: 242px;
                height: 242px;
                margin-left: -170px;
                display: block;
                margin: 0% auto;
            }

            #marathiquotes1 {
                margin-bottom: -1px;
            }

            #flipid2 {
                margin-top: 8px;
                margin-left: 26px;
            }

            #fampersonality {
                margin-top: 200px;
            }

            #personalitybtn {
                width: 217px;
                margin-left: 35px;
            }

            #personalitybtn1 {
                width: 217px;
                margin-left: 35px;
            }

            #personalitybtn2 {
                width: 217px;
                margin-left: 35px;
            }

            #personalitybtn3 {
                width: 217px;
                margin-left: 35px;
            }

            #personalitybtn4 {
                width: 217px;
                margin-left: 35px;
            }

            #sociallinks1 {
                color: black;
                margin-left: 47px;
            }

            #sociallinks {
                color: black;
                margin-left: 26px;
            }

            #personalityquote {
                height: 80px;
                font-size: x-large;
                justify-content: center;
            }

            #personalityquote1 {
                height: 80px;
                font-size: x-large;
                justify-content: center;
            }

            #personalityquote2 {
                height: 80px;
                font-size: x-large;
                justify-content: center;
            }

            #personalityquote3 {
                height: 80px;
                font-size: x-large;
                justify-content: center;
            }

            #personalityname {
                margin-top: 44px;
                font-size: large;
            }

            #personalityname1 {
                margin-top: 44px;
                font-size: large;
            }

            #personalityname2 {
                margin-top: 44px;
                font-size: large;
            }

            #personalityname3 {
                margin-top: 44px;
                font-size: large;
            }

            #personalityimg {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 17px;
                margin-left: 25%;
            }

            #personalityimg1 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 10px;
                margin-left: 25%;
            }

            #personalityimg11 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 25%;
            }

            #personalityimg21 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 25%;
            }

            #personalityimg12 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 25%;
            }

            #personalityimg22 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 8px;
                margin-left: 25%;
            }

            #personalityimg23 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 117px;
                margin-left: 25%;
            }

            #personalityimg24 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 25%;
            }

            #personalityimg25 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 100px;
                margin-left: 25%;
            }

            #personalityimg31 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 8px;
                margin-left: 25%;
            }

            #personalityimg32 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 8px;
                margin-left: 25%;
            }

            #personalityimg2 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 107px;
                margin-left: 25%;
            }

            #personalityimg33 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 107px;
                margin-left: 25%;
            }

            #personalityimg3 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 8px;
                margin-left: 25%;
            }

            #topicbtn {
                margin-left: 71px;
            }
        }

        @media screen and (max-width: 281px) {
            #draggable {
                position: relative;
                margin-top: 35px;
                width: 450px;
                height: 281px;
                z-index: 1;
            }

            #draggable1 {
                margin-top: 44px;
                width: 450px;
                height: 281px;
                z-index: 1;
            }

            #draggable2 {
                margin-top: 44px;
                width: 450px;
                height: 281px;
                z-index: 1;
            }

            #flipad {
                margin-top: 8px;
                margin-left: -10px;
            }

            #personalitybox {
                width: 260px;
                margin-left: -20px;
                margin-bottom: 26px;
            }

            #personalitybox1 {
                width: 260px;
                margin-left: -20px;
                margin-bottom: 26px;
            }

            #personalitybox2 {
                width: 260px;
                margin-left: -20px;
                margin-bottom: 26px;
            }

            #personalitybox3 {
                width: 260px;
                margin-left: -20px;
                margin-bottom: 26px;
            }

            #scroll-text {
                -moz-animation: my-animation 5s linear infinite;
                -webkit-animation: my-animation 5s linear infinite;
                animation: my-animation 17s linear infinite;
            }

            #engquotes1 {
                margin-bottom: -1px;
            }


            #hindiquotes1 {
                margin-top: -300px;
            }

            #scroll-container {
                margin-top: 10px;
                height: 260px;
            }

            #engbg {
                background: none;
            }

            #hrres {
                display: none;
            }

            #hindibg {
                background: none;
                margin-top: 465px;
            }

            #marathibg {
                background: none;
                margin-top: 200px;
            }

            #flipid1 {
                margin-top: 8px;
                margin-left: -8px;
            }

            #persorow1 {
                display: inline;
                margin: 0% auto;
            }

            #caraimg {
                height: 170px;
            }

            #hinengmarimg {
                width: 242px;
                height: 242px;
                margin-left: -125px;
                display: block;
                margin: 0% auto;
            }

            #hinengmarimg1 {
                width: 242px;
                height: 242px;
                margin-left: -125px;
                display: block;
                margin: 0% auto;
            }

            #marathiquotes1 {
                margin-bottom: -1px;
            }

            #flipid2 {
                margin-top: 8px;
                margin-left: -8px;
            }

            #fampersonality {
                margin-top: 195px;
            }

            #personalitybtn {
                width: 179px;
                margin-left: 22px;
            }

            #personalitybtn1 {
                width: 179px;
                margin-left: 22px;
            }

            #personalitybtn2 {
                width: 179px;
                margin-left: 22px;
            }

            #personalitybtn3 {
                width: 179px;
                margin-left: 22px;
            }

            #personalitybtn4 {
                width: 179px;
                margin-left: 22px;
            }

            #sociallinks1 {
                color: black;
                margin-left: 33px;
            }

            #sociallinks {
                color: black;
                margin-left: 17px;
            }

            #personalityquote {
                height: 80px;
                font-size: large;
                justify-content: center;
            }

            #personalityquote1 {
                height: 80px;
                font-size: large;
                justify-content: center;
            }

            #personalityquote2 {
                height: 80px;
                font-size: large;
                justify-content: center;
            }

            #personalityquote3 {
                height: 80px;
                font-size: large;
                justify-content: center;
            }

            #personalityname {
                margin-top: 44px;
                font-size: medium;
            }

            #personalityname1 {
                margin-top: 44px;
                font-size: medium;
            }

            #personalityname2 {
                margin-top: 44px;
                font-size: medium;
            }

            #personalityname3 {
                margin-top: 44px;
                font-size: medium;
            }

            #personalityimg {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 3px;
                margin-left: 20%;
            }

            #personalityimg1 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 1px;
                margin-left: 20%;
            }

            #personalityimg11 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 3px;
                margin-left: 21%;
            }

            #personalityimg21 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 3px;
                margin-left: 21%;
            }

            #personalityimg12 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 3px;
                margin-left: 20%;
            }

            #personalityimg22 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 3px;
                margin-left: 21%;
            }

            #personalityimg23 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 17px;
                margin-left: 20%;
            }

            #personalityimg24 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 8px;
                margin-left: 20%;
            }

            #personalityimg25 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 8px;
                margin-left: 20%;
            }

            #personalityimg31 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: -1px;
                margin-left: 21%;
            }

            #personalityimg32 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 6px;
                margin-left: 21%;
            }

            #personalityimg2 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 1px;
                margin-left: 20%;
            }

            #personalityimg3 {
                width: 134px;
                border: 3px solid orangered;
                background-color: white;
                height: 134px;
                border-radius: 50%;
                margin-top: 1px;
                margin-left: 20%;
            }

            #topicbtn {
                margin-left: 38px;
            }
        }

        #draggable {
            position: relative;
            margin-top: 8px;
            margin-left: 53px;
            width: 450px;
            height: 281px;
            z-index: 1;
        }

        #dashboard {
            -webkit-perspective: 1000;
            perspective: 1000;
        }

        #dashboard {
            width: 100%;
            height: 100%;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-transition: all 1.0s linear;
            transition: all 1.0s linear;
        }

        .loadable {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        #a {
            -webkit-transform: rotateY(-180deg);
            transform: rotateY(-180deg);
            -webkit-animation: mymoveback 8s infinite;
            animation: mymoveback 8s infinite;
        }

        #b {
            display: block;
            box-sizing: border-box;
            color: white;
            text-align: center;
            -webkit-animation: mymove 8s infinite;
            animation: mymove 8s infinite;
        }

        /* Chrome, Safari, Opera */
        @-webkit-keyframes mymove {
            40% {
                -webkit-transform: rotateY(0deg);
            }

            50% {
                -webkit-transform: rotateY(180deg);
            }

            90% {
                -webkit-transform: rotateY(180deg);
            }

            100% {
                -webkit-transform: rotateY(0deg);
            }
        }

        @-webkit-keyframes mymoveback {
            40% {
                -webkit-transform: rotateY(-180deg);
            }

            50% {
                -webkit-transform: rotateY(0deg);
            }

            90% {
                -webkit-transform: rotateY(0deg);
            }

            100% {
                -webkit-transform: rotateY(-180deg);
            }
        }

        @keyframes mymove {
            40% {
                transform: rotateY(0deg);
            }

            50% {
                transform: rotateY(180deg);
            }

            90% {
                transform: rotateY(180deg);
            }

            100% {
                transform: rotateY(0deg);
            }
        }

        @keyframes mymoveback {
            40% {
                transform: rotateY(-180deg);
            }

            50% {
                transform: rotateY(0deg);
            }

            90% {
                transform: rotateY(0deg);
            }

            100% {
                transform: rotateY(-180deg);
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid row" style="padding: 0px; margin:0px;">
        <div class="col-md-9" style="padding: 0px; margin:0px;">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner " id="imgcarousel">
                    <div class="carousel-item active">
                        <img class="d-block w-100" id="caraimg" src="Images/newcara1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" id="caraimg" src="Images/newcara2.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" id="caraimg" src="Images/newcara3.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" id="caraimg" src="Images/newcara4.jpg" alt="First slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-3" id="scroll-container">
            <div id="scroll-text">
                <h2 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                    "Now, as you graduate to begin a new, I wish that for you, ‘Stay hungry, stay foolish’."
                    <br>
                    <p style="float:right;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                        - Steave Jobs
                    </p>
                </h2>
                <br>
                <hr style="border:1px Solid navy;">
                <h2 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                    "रिस्क तब होत है जब आपको पता ही नही होता है कि आप क्या कर रहे हैं।"
                    <br>
                    <p style="float:right;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                        - वारेन बफे
                    </p>
                </h2>
                <br>
                <hr style="border:1px Solid navy;">
                <h2 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                    “Every kite has to go to the trash can one day;But one day before that one has to touch the sky.”
                    <br>
                    <p style="float:right;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> - Sonu Sharma</p>
                </h2>
                <br>
                <hr style="border:1px Solid navy;">
                <h2 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                    "जीवन लम्बा होने की बजाये महान होना चाहिए।"
                    <br>
                    <p style="float:right;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> - बी. आर. आंबेडकर</p>
                </h2>
                <br>
                <hr style="border:1px Solid navy;">
                <h2 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                    “Stop doubting yourself, work hard, make it happen.”
                    <br>
                    <p style="float:right;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> - Sandeep Maheshwari</p>
                </h2>
                <br>
                <hr style="border:1px Solid navy;">
                <h2 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                    "मेरी अनुमति के बिना कोई भी मुझे ठेस नहीं पहुंचा सकता।"
                    <br>
                    <p style="float:right;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> -महात्मा गाँधी</p>
                </h2>
                <br>
                <hr style="border:1px Solid navy;">
                <h2 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                    "Bad times are very important as good times"
                    <br>
                    <p style="float:right;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> - M.S. Dhoni </p>
                </h2>
                <br>
                <hr style="border:1px Solid navy;">
                <h2 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                    "आलसी मनुष्य का वर्तमान और भविष्य नहीं होता है।"
                    <br>
                    <p style="float:right;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> -चाणक्य</p>
                </h2>
                <br>
                <hr style="border:1px Solid navy;">
            </div>
        </div>
    </div>
    <hr style="border:2px Solid orangered;">
    <br><br>
    <div class="container" id="engbg">
        <div id="engquotes1" style="font-family: ruby; color:navy;">
            <h1 align="center">
                <u>Quotes In English</u>
            </h1>
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-6">
                <img src="Images/engimg.jpg" width="503px" height="503px" id="hinengmarimg">
            </div>
            <div class="col-md-6" id="quotesboxs" style="margin-top: 10px;">
                <h3 id="div21_right">
                    "Life is what happens when you're busy making other plans."
                    <br>
                    <p style="float:right;"> --John Lennon </p>
                </h3>
                <h3 id="div22_right">
                    "Independence is happiness."
                    <br>
                    <p style="float:right;"> --Susan B. Anthony </p>
                </h3>
                <h3 id="div21_right">
                    "The way to get started is to quit talking and begin doing."
                    <br>
                    <p style="float:right;"> --Walt Disney </p>
                </h3>
                <h3 id="div22_right">
                    “If you want to live a happy life, tie it to a goal, not to people or things.”
                    <br>
                    <p style="float:right;"> –-Albert Einstein </p>
                </h3>
            </div>
        </div>
    </div>
    <hr id="hrres" style="border:1px Solid orangered;">
    <br><br>
    <div class="container" id="hindibg">
        <div id="hindiquotes1" style="font-family: ruby;color:navy;">
            <h1 align="center">
                <u>Quotes In Hindi</u>
            </h1>
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-6" id="quotesboxs">
                <h3 id="div3_left">
                    "जल्दी सोना और जल्दी उठना इंसान को स्वस्थ ,समृद्ध और बुद्धिमान बनाता है|"
                    <br>
                    <p style="float:right;"> - बेंजामिन फ्रैंकलिन.</p>
                </h3>
                <h3 id="div31_left">
                    "रिस्क तब होत है जब आपको
                    पता ही नही होता है कि आप
                    क्या कर रहे हैं।"
                    <br>
                    <p style="float:right;">- वारेन बफे</p>
                </h3>
                <h3 id="div3_left">
                    "मेरी अनुमति के बिना कोई भी मुझे ठेस नहीं पहुंचा सकता।"
                    <br>
                    <p style="float:right;"> -महात्मा गाँधी </p>
                </h3>
                <h3 id="div31_left">
                    " आलसी मनुष्य का वर्तमान और भविष्य नहीं होता है।"
                    <br>
                    <p style="float:right;"> - चाणक्य </p>
                </h3>
            </div>
            <div class="col-md-6">
                <img src="Images/hinimg.jpg" width="503px" height="503px" id="hinengmarimg1">
            </div>
        </div>
    </div>
    <hr id="hrres" style="border:1px Solid orangered;">
    <br><br>
    <div class="container" id="marathibg">
        <div id="marathiquotes1" style="font-family: ruby; color:navy;">
            <h1 align="center">
                <u>Quotes In Marathi</u>
            </h1>
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-6" style="margin-bottom: 10px;">
                <img src="Images/marimg.jpg" width="503px" height="503px" id="hinengmarimg">
            </div>
            <div class="col-md-6" id="quotesboxs">
                <h3 id="div41_left">
                    "तुम्ही प्रत्येक वेळेस नविन चूक
                    करत असाल तर नक्किच
                    समजा तुम्ही प्रगतीच्या मार्गावर आहात."
                </h3>
                <h3 id="div41_left">
                    "सर्वात मोठे यश खूप वेळा
                    सर्वात मोठ्या निराशे नंतरच मिळत असते."
                </h3>
                <h3 id="div41_left">
                    "लक्षात ठेवा लोक उगवत्या सूर्याला
                    नमस्कार घालतात, मावळत्या नाही."
                </h3>
                <h3 id="div41_left">
                    "कठीण काळात सतत स्वतःला सांगा,
                    शर्यत अजून संपलेली नाही,
                    कारण मी अजून जिंकलेलो नाही."
                </h3>
            </div>
        </div>
    </div>
    <hr id="hrres" style="border:1px Solid orangered;">
    <br><br>
    <div class="container-fluid" style="display: block; margin:0% auto;">
        <div id="fampersonality">
            <h1 style="font-family: ruby; color:navy;" align="center">
                <u>Quotes By Some Famous Personality</u>:
            </h1>
        </div>
        <br>
        <br>
        <div class="row" id="persorow1">
            <div class="col-md-3">
                <div id="personalitybox">
                    <h1 id="personalityquote">
                        "If you are searching for that person who will change your life, take a look in the Mirror."
                    </h1>
                    <h1 id="personalityname">
                        --Sandeep<br> Maheshwari
                    </h1>
                    <img src="Images/sm.png" id="personalityimg">
                    <a href="Files/SandeepMaheshwari.php" style="color: white;">
                        <button class="btn btn-primary" id="personalitybtn">
                            Sandeep Maheshwari
                        </button>
                    </a>
                    <div class="share-btn-container">
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $twitter_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $twitter_params . "";
                        ?>
                        <a id="sociallinks1" href="<?php echo $link; ?>">
                            <i class="fa fa-twitter" style="font-size:17px; color:#1da1f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $whatsapp_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $whatsapp_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-whatsapp" style="font-size:17px; color:#25d366;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $facebook_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $facebook_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-facebook" style="font-size:17px; color:#1877f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $linkedin_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $linkedin_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-linkedin" style="font-size:17px; color:#0077b5;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $pinterest_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $pinterest_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-pinterest" style="font-size:17px; color:#e60023;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="personalitybox">
                    <h1 id="personalityquote">
                        "If you try to be the best you'll be number one, if you try to be unique you'll be the only one."
                    </h1>
                    <h1 id="personalityname">
                        --Dr. Vivak<br> Bindra
                    </h1>
                    <img src="Images/drvb.jpg" id="personalityimg">
                    <a href="Files/VivekBindra.php" style="color: white;">
                        <button class="btn btn-primary" id="personalitybtn">
                            Dr. Vivak Bindra
                        </button>
                    </a>
                    <div class="share-btn-container">
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $twitter_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $twitter_params . "";
                        ?>
                        <a id="sociallinks1" href="<?php echo $link; ?>">
                            <i class="fa fa-twitter" style="font-size:17px; color:#1da1f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $whatsapp_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $whatsapp_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-whatsapp" style="font-size:17px; color:#25d366;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $facebook_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $facebook_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-facebook" style="font-size:17px; color:#1877f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $linkedin_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $linkedin_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-linkedin" style="font-size:17px; color:#0077b5;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $pinterest_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $pinterest_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-pinterest" style="font-size:17px; color:#e60023;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="personalitybox">
                    <h1 id="personalityquote">
                        “People do not lose because of doubt, people lose based on their ability to make decisions.”
                    </h1>
                    <h1 id="personalityname">
                        --Sonu<br> Sharma
                    </h1>
                    <img src="Images/ss.jpg" id="personalityimg11">
                    <a href="Files/SonuSharma.php" style="color: white;">
                        <button class="btn btn-primary" id="personalitybtn">
                            Sonu Sharma
                        </button>
                    </a>
                    <div class="share-btn-container">
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $twitter_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $twitter_params . "";
                        ?>
                        <a id="sociallinks1" href="<?php echo $link; ?>">
                            <i class="fa fa-twitter" style="font-size:17px; color:#1da1f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $whatsapp_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $whatsapp_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-whatsapp" style="font-size:17px; color:#25d366;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $facebook_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $facebook_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-facebook" style="font-size:17px; color:#1877f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $linkedin_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $linkedin_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-linkedin" style="font-size:17px; color:#0077b5;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $pinterest_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $pinterest_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-pinterest" style="font-size:17px; color:#e60023;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="personalitybox">
                    <h1 id="personalityquote">
                        "People try to create an outwardly perfect life, but the quality of life is based on the inward."
                    </h1>
                    <h1 id="personalityname">
                        --Jaggi<br> Vasudev
                    </h1>
                    <img src="Images/jn1.jpg" id="personalityimg12">
                    <a href="Files/JaggiVasudev.php" style="color: white;">
                        <button class="btn btn-primary" id="personalitybtn">
                            Jaggi Vasudev
                        </button>
                    </a>
                    <div class="share-btn-container">
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $twitter_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $twitter_params . "";
                        ?>
                        <a id="sociallinks1" href="<?php echo $link; ?>">
                            <i class="fa fa-twitter" style="font-size:17px; color:#1da1f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $whatsapp_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $whatsapp_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-whatsapp" style="font-size:17px; color:#25d366;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $facebook_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $facebook_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-facebook" style="font-size:17px; color:#1877f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $linkedin_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $linkedin_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-linkedin" style="font-size:17px; color:#0077b5;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $pinterest_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $pinterest_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-pinterest" style="font-size:17px; color:#e60023;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row" id="persorow1">
            <div class="col-md-3">
                <div id="personalitybox1">
                    <h1 id="personalityquote1">
                        " My goal is not to be better than anyone else, but to be better then I used to be."
                    </h1>
                    <h1 id="personalityname1">
                        --M.S<br> Dhoni
                    </h1>
                    <img src="Images/msd3.jpg" id="personalityimg21">
                    <a href="Files/MSDhoni.php" style="color: white;">
                        <button class="btn btn-primary" id="personalitybtn1">
                            M.S Dhoni
                        </button>
                    </a>
                    <div class="share-btn-container">
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $twitter_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $twitter_params . "";
                        ?>
                        <a id="sociallinks1" href="<?php echo $link; ?>">
                            <i class="fa fa-twitter" style="font-size:17px; color:#1da1f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $whatsapp_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $whatsapp_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-whatsapp" style="font-size:17px; color:#25d366;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $facebook_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $facebook_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-facebook" style="font-size:17px; color:#1877f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $linkedin_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $linkedin_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-linkedin" style="font-size:17px; color:#0077b5;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $pinterest_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $pinterest_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-pinterest" style="font-size:17px; color:#e60023;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="personalitybox1">
                    <h1 id="personalityquote1">
                        " Price is what you pay. Value is what you get."
                    </h1>
                    <h1 id="personalityname1">
                        --Warren<br> Buffett
                    </h1>
                    <img src="Images/wb2.jpg" id="personalityimg1">
                    <a href="Files/WarrenBuffett.php" style="color: white;">
                        <button class="btn btn-primary" id="personalitybtn1">
                            Warren Buffett
                        </button>
                    </a>
                    <div class="share-btn-container">
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $twitter_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $twitter_params . "";
                        ?>
                        <a id="sociallinks1" href="<?php echo $link; ?>">
                            <i class="fa fa-twitter" style="font-size:17px; color:#1da1f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $whatsapp_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $whatsapp_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-whatsapp" style="font-size:17px; color:#25d366;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $facebook_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $facebook_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-facebook" style="font-size:17px; color:#1877f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $linkedin_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $linkedin_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-linkedin" style="font-size:17px; color:#0077b5;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $pinterest_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $pinterest_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-pinterest" style="font-size:17px; color:#e60023;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="personalitybox1">
                    <h1 id="personalityquote1">
                        "In a conflict between the heart and the brain, follow your heart."
                    </h1>
                    <h1 id="personalityname1">
                        --swami <br>vivekananda
                    </h1>
                    <img src="Images/sm2.jpg" id="personalityimg22">
                    <a href="Files/SwamiVivekananda.php" style="color: white;">
                        <button class="btn btn-primary" id="personalitybtn1">
                            swami vivekananda
                        </button>
                    </a>
                    <div class="share-btn-container">
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $twitter_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $twitter_params . "";
                        ?>
                        <a id="sociallinks1" href="<?php echo $link; ?>">
                            <i class="fa fa-twitter" style="font-size:17px; color:#1da1f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $whatsapp_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $whatsapp_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-whatsapp" style="font-size:17px; color:#25d366;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $facebook_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $facebook_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-facebook" style="font-size:17px; color:#1877f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $linkedin_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $linkedin_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-linkedin" style="font-size:17px; color:#0077b5;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $pinterest_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $pinterest_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-pinterest" style="font-size:17px; color:#e60023;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="personalitybox1">
                    <h1 id="personalityquote1">
                        "The important thing is to not stop questioning. Curiosity has its own reason for existing."
                    </h1>
                    <h1 id="personalityname1">
                        --albert<br> einstein
                    </h1>
                    <img src="Images/ae.jpg" id="personalityimg23">
                    <a href="Files/AlbertEinstein.php" style="color: white;">
                        <button class="btn btn-primary" id="personalitybtn1" style="margin-top: 8px;">
                            albert einstein
                        </button>
                    </a>
                    <div class="share-btn-container">
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $twitter_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $twitter_params . "";
                        ?>
                        <a id="sociallinks1" href="<?php echo $link; ?>">
                            <i class="fa fa-twitter" style="font-size:17px; color:#1da1f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $whatsapp_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $whatsapp_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-whatsapp" style="font-size:17px; color:#25d366;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $facebook_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $facebook_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-facebook" style="font-size:17px; color:#1877f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $linkedin_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $linkedin_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-linkedin" style="font-size:17px; color:#0077b5;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $pinterest_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $pinterest_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-pinterest" style="font-size:17px; color:#e60023;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row" id="persorow1">
            <div class="col-md-3">
                <div id="personalitybox2">
                    <h1 id="personalityquote2">
                        "When something is important enough, you do it even if the odds are not in your favor."
                    </h1>
                    <h1 id="personalityname2">
                        --Elon<br> Musk
                    </h1>
                    <img src="Images/em1.jpg" id="personalityimg2">
                    <a href="Files/ElonMusk.php" style="color: white;">
                        <button class="btn btn-primary" id="personalitybtn2">
                            Elon Musk
                        </button>
                    </a>
                    <div class="share-btn-container">
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $twitter_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $twitter_params . "";
                        ?>
                        <a id="sociallinks1" href="<?php echo $link; ?>">
                            <i class="fa fa-twitter" style="font-size:17px; color:#1da1f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $whatsapp_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $whatsapp_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-whatsapp" style="font-size:17px; color:#25d366;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $facebook_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $facebook_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-facebook" style="font-size:17px; color:#1877f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $linkedin_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $linkedin_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-linkedin" style="font-size:17px; color:#0077b5;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $pinterest_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $pinterest_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-pinterest" style="font-size:17px; color:#e60023;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="personalitybox2">
                    <h1 id="personalityquote2">
                        "Life's too short to hang out with people who aren't resourceful."
                    </h1>
                    <h1 id="personalityname2">
                        --Jeff<br> Bezos
                    </h1>
                    <img src="Images/jb.png" id="personalityimg24">
                    <a href="Files/JeffBezos.php" style="color: white;">
                        <button class="btn btn-primary" id="personalitybtn2">
                            Jeff Bezos
                        </button>
                    </a>
                    <div class="share-btn-container">
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $twitter_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $twitter_params . "";
                        ?>
                        <a id="sociallinks1" href="<?php echo $link; ?>">
                            <i class="fa fa-twitter" style="font-size:17px; color:#1da1f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $whatsapp_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $whatsapp_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-whatsapp" style="font-size:17px; color:#25d366;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $facebook_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $facebook_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-facebook" style="font-size:17px; color:#1877f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $linkedin_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $linkedin_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-linkedin" style="font-size:17px; color:#0077b5;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $pinterest_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $pinterest_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-pinterest" style="font-size:17px; color:#e60023;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="personalitybox2">
                    <h1 id="personalityquote2">
                        "You should learn from your competitor, but never copy. Copy and you die."
                    </h1>
                    <h1 id="personalityname2">
                        --Jack<br> Ma
                    </h1>
                    <img src="Images/jm1.jpg" id="personalityimg24">
                    <a href="Files/JackMaa.php" style="color: white;">
                        <button class="btn btn-primary" id="personalitybtn2">
                            Jack Ma
                        </button>
                    </a>
                    <div class="share-btn-container">
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $twitter_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $twitter_params . "";
                        ?>
                        <a id="sociallinks1" href="<?php echo $link; ?>">
                            <i class="fa fa-twitter" style="font-size:17px; color:#1da1f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $whatsapp_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $whatsapp_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-whatsapp" style="font-size:17px; color:#25d366;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $facebook_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $facebook_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-facebook" style="font-size:17px; color:#1877f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $linkedin_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $linkedin_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-linkedin" style="font-size:17px; color:#0077b5;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $pinterest_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $pinterest_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-pinterest" style="font-size:17px; color:#e60023;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="personalitybox2">
                    <h1 id="personalityquote2">
                        "Believing that the dots will connect down the road will give you the confidence to follow your heart."
                    </h1>
                    <h1 id="personalityname2">
                        --Steave<br> Jobs
                    </h1>
                    <img src="Images/sj.jpg" id="personalityimg25">
                    <a href="Files/SteaveJobs.php" style="color: white;">
                        <button class="btn btn-primary" id="personalitybtn2">
                            Steave Jobs
                        </button>
                    </a>
                    <div class="share-btn-container">
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $twitter_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $twitter_params . "";
                        ?>
                        <a id="sociallinks1" href="<?php echo $link; ?>">
                            <i class="fa fa-twitter" style="font-size:17px; color:#1da1f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $whatsapp_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $whatsapp_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-whatsapp" style="font-size:17px; color:#25d366;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $facebook_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $facebook_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-facebook" style="font-size:17px; color:#1877f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $linkedin_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $linkedin_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-linkedin" style="font-size:17px; color:#0077b5;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $pinterest_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $pinterest_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-pinterest" style="font-size:17px; color:#e60023;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row" id="persorow1">
            <div class="col-md-3">
                <div id="personalitybox3">
                    <h1 id="personalityquote3">
                        "We all need people who will give us feedback. That’s how we improve."
                    </h1>
                    <h1 id="personalityname3">
                        --Bill<br>Gates
                    </h1>
                    <img src="Images/bg.jpg" id="personalityimg33" id="personalityimg3">
                    <a href="Files/BillGates.php" style="color: white;">
                        <button class="btn btn-primary" id="personalitybtn3">
                            Bill Gates
                        </button>
                    </a>
                    <div class="share-btn-container">
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $twitter_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $twitter_params . "";
                        ?>
                        <a id="sociallinks1" href="<?php echo $link; ?>">
                            <i class="fa fa-twitter" style="font-size:17px; color:#1da1f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $whatsapp_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $whatsapp_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-whatsapp" style="font-size:17px; color:#25d366;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $facebook_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $facebook_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-facebook" style="font-size:17px; color:#1877f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $linkedin_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $linkedin_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-linkedin" style="font-size:17px; color:#0077b5;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $pinterest_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $pinterest_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-pinterest" style="font-size:17px; color:#e60023;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="personalitybox3">
                    <h1 id="personalityquote3">
                        "Happiness is when what you think, what you say, and what you do are in harmony."
                    </h1>
                    <h1 id="personalityname3">
                        --Mahatma<br> Gandhi
                    </h1>
                    <img src="Images/mg.jpg" id="personalityimg31">
                    <a href="Files/MahatmaGandhi.php" style="color: white;">
                        <button class="btn btn-primary" id="personalitybtn3">
                            Mahatma Gandhi
                        </button>
                    </a>
                    <div class="share-btn-container">
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $twitter_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $twitter_params . "";
                        ?>
                        <a id="sociallinks1" href="<?php echo $link; ?>">
                            <i class="fa fa-twitter" style="font-size:17px; color:#1da1f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $whatsapp_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $whatsapp_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-whatsapp" style="font-size:17px; color:#25d366;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $facebook_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $facebook_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-facebook" style="font-size:17px; color:#1877f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $linkedin_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $linkedin_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-linkedin" style="font-size:17px; color:#0077b5;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $pinterest_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $pinterest_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-pinterest" style="font-size:17px; color:#e60023;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="personalitybox3">
                    <h1 id="personalityquote3">
                        "You have to dream before your dreams can come true."
                    </h1>
                    <h1 id="personalityname3">
                        --APJ<br> Abdul Kalam
                    </h1>
                    <img src="Images/ap.jpg" id="personalityimg32">
                    <a href="Files/APJAbdulKalam.php" style="color: white;">
                        <button class="btn btn-primary" id="personalitybtn3">
                            APJ Abdul Kalam
                        </button>
                    </a>
                    <div class="share-btn-container">
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $twitter_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $twitter_params . "";
                        ?>
                        <a id="sociallinks1" href="<?php echo $link; ?>">
                            <i class="fa fa-twitter" style="font-size:17px; color:#1da1f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $whatsapp_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $whatsapp_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-whatsapp" style="font-size:17px; color:#25d366;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $facebook_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $facebook_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-facebook" style="font-size:17px; color:#1877f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $linkedin_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $linkedin_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-linkedin" style="font-size:17px; color:#0077b5;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $pinterest_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $pinterest_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-pinterest" style="font-size:17px; color:#e60023;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="personalitybox3">
                    <h1 id="personalityquote3">
                        " Intelligence is the ability to adapt to change."
                    </h1>
                    <h1 id="personalityname3">
                        --Stephen<br> Hawking
                    </h1>
                    <img src="Images/sh.jpg" id="personalityimg3">
                    <a href="Files/StephenHawking.php" style="color: white;">
                        <button class="btn btn-primary" id="personalitybtn3">
                            Stephen Hawking
                        </button>
                    </a>
                    <div class="share-btn-container">
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $twitter_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $twitter_params . "";
                        ?>
                        <a id="sociallinks1" href="<?php echo $link; ?>">
                            <i class="fa fa-twitter" style="font-size:17px; color:#1da1f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $whatsapp_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $whatsapp_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-whatsapp" style="font-size:17px; color:#25d366;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $facebook_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $facebook_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-facebook" style="font-size:17px; color:#1877f2;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $linkedin_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $linkedin_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-linkedin" style="font-size:17px; color:#0077b5;"></i>
                        </a>
                        <?php
                        $title = 'Title here';
                        $short_url = '#';
                        $url = '#';
                        $pinterest_params =
                            '?text=' . urlencode($title) . '+-' .
                            '&amp;url=' . urlencode($short_url) .
                            '&amp;counturl=' . urlencode($url) .
                            '';
                        $link = "#" . $pinterest_params . "";
                        ?>
                        <a id="sociallinks" href="<?php echo $link; ?>">
                            <i class="fa fa-pinterest" style="font-size:17px; color:#e60023;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr id="hrres" style="border:1px Solid orangered;">
    <br>
    <br>
    <h1 style="font-family: ruby; color:navy;" align="center">
        <u>Topic categories</u>:
    </h1>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-2" id="topicdiv">
                <a href="Files/Attitude.php" style="color: white;">
                    <button class="btn btn-primary" id="topicbtn">
                        <h3>
                            Attitude
                        </h3>
                    </button>
                </a>
            </div>
            <div class="col-md-2" id="topicdiv">
                <a href="Files/Business.php" style="color: white;">
                    <button class="btn btn-primary" id="topicbtn">
                        <h3>
                            Business
                        </h3>
                    </button>
                </a>
            </div>
            <div class="col-md-2" id="topicdiv">
                <a href="Files/change.php" style="color: white;">
                    <button class="btn btn-primary" id="topicbtn">
                        <h3>
                            Change
                        </h3>
                    </button>
                </a>
            </div>
            <div class="col-md-2" id="topicdiv">
                <a href="Files/Courage.php" style="color: white;">
                    <button class="btn btn-primary" id="topicbtn">
                        <h3>
                            Courage
                        </h3>
                    </button>
                </a>
            </div>
            <div class="col-md-2" id="topicdiv">
                <a href="Files/Dad.php" style="color: white;">
                    <button class="btn btn-primary" id="topicbtn">
                        <h3>
                            Dad
                        </h3>
                    </button>
                </a>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-2" id="topicdiv">
                <a href="Files/Education.php" style="color: white;">
                    <button class="btn btn-primary" id="topicbtn">
                        <h3>
                            Education
                        </h3>
                    </button>
                </a>
            </div>
            <div class="col-md-2" id="topicdiv">
                <a href="Files/Experiance.php" style="color: white;">
                    <button class="btn btn-primary" id="topicbtn">
                        <h3>
                            Experience
                        </h3>
                    </button>
                </a>
            </div>
            <div class="col-md-2" id="topicdiv">
                <a href="Files/Failure.php" style="color: white;">
                    <button class="btn btn-primary" id="topicbtn">
                        <h3>
                            Failure
                        </h3>
                    </button>
                </a>
            </div>
            <div class="col-md-2" id="topicdiv">
                <a href="Files/Family.php" style="color: white;">
                    <button class="btn btn-primary" id="topicbtn">
                        <h3>
                            Family
                        </h3>
                    </button>
                </a>
            </div>
            <div class="col-md-2" id="topicdiv">
                <a href="Files/Finance.php" style="color: white;">
                    <button class="btn btn-primary" id="topicbtn">
                        <h3>
                            Finance
                        </h3>
                    </button>
                </a>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-2" id="topicdiv">
                <a href="Files/Friendship.php" style="color: white;">
                    <button class="btn btn-primary" id="topicbtn">
                        <h3>
                            Friendship
                        </h3>
                    </button>
                </a>
            </div>
            <div class="col-md-2" id="topicdiv">
                <a href="Files/God.php" style="color: white;">
                    <button class="btn btn-primary" id="topicbtn">
                        <h3>
                            God
                        </h3>
                    </button>
                </a>
            </div>
            <div class="col-md-2" id="topicdiv">
                <a href="Files/Happiness.php" style="color: white;">
                    <button class="btn btn-primary" id="topicbtn">
                        <h3>
                            Happiness
                        </h3>
                    </button>
                </a>
            </div>
            <div class="col-md-2" id="topicdiv">
                <a href="Files/Imagination.php" style="color: white;">
                    <button class="btn btn-primary" id="topicbtn">
                        <h3>
                            Imagination
                        </h3>
                    </button>
                </a>
            </div>
            <div class="col-md-2" id="topicdiv">
                <a href="Files/Leadership.php" style="color: white;">
                    <button class="btn btn-primary" id="topicbtn">
                        <h3>
                            Leadership
                        </h3>
                    </button>
                </a>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-2" id="topicdiv">
                <a href="Files/Motivational.php" style="color: white;">
                    <button class="btn btn-primary" id="topicbtn">
                        <h3>
                            Motivational
                        </h3>
                    </button>
                </a>
            </div>
            <div class="col-md-2" id="topicdiv">
                <a href="Files/Patience.php" style="color: white;">
                    <button class="btn btn-primary" id="topicbtn">
                        <h3>
                            Patience
                        </h3>
                    </button>
                </a>
            </div>
            <div class="col-md-2" id="topicdiv">
                <a href="Files/Strength.php" style="color: white;">
                    <button class="btn btn-primary" id="topicbtn">
                        <h3>
                            Strength
                        </h3>
                    </button>
                </a>
            </div>
            <div class="col-md-2" id="topicdiv">
                <a href="Files/Technology.php" style="color: white;">
                    <button class="btn btn-primary" id="topicbtn">
                        <h3>
                            Technology
                        </h3>
                    </button>
                </a>
            </div>
            <div class="col-md-2" id="topicdiv">
                <a href="Files/Trust.php" style="color: white;">
                    <button class="btn btn-primary" id="topicbtn">
                        <h3>
                            Trust
                        </h3>
                    </button>
                </a>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
    <br><br>
</body>
<?php
include "Footer.php";
?>

</html>