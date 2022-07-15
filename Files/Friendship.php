<?php
include "header.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Mortivational Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
        #div1_right {
            width: 100%;
            height: 125px;
            background-color: white;
            box-shadow: -5px 5px 8px gray;
            border-radius: 8px;
            padding-left: 26px;
            padding-right: 26px;
            padding-top: 17px;
            text-align: center;
            border: 3px solid purple;
        }

        #div11_right {
            width: 100%;
            height: 125px;
            background-color: white;
            box-shadow: -5px 5px 8px gray;
            border-radius: 8px;
            padding-left: 26px;
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
            background-color: white;
            padding-left: 26px;
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
            background-color: white;
            padding-left: 26px;
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
            background-color: white;
            padding-left: 26px;
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
            background-color: white;
            padding-left: 26px;
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
            background-color: white;
            padding-left: 26px;
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
            background-color: white;
            padding-left: 26px;
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
            background-color: white;
            box-shadow: -5px 5px 8px gray;
            border-radius: 8px;
            padding-left: 26px;
            padding-right: 26px;
            padding-top: 17px;
            text-align: center;
            border: 3px solid purple;
        }

        #div11_left {
            width: 100%;
            height: 125px;
            background-color: white;
            box-shadow: -5px 5px 8px gray;
            border-radius: 8px;
            padding-left: 26px;
            padding-right: 26px;
            padding-top: 17px;
            text-align: center;
            border: 3px solid purple;
        }

        #div2_left {
            width: 100%;
            height: 125px;
            background-color: white;
            padding-left: 26px;
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
            background-color: white;
            padding-left: 26px;
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
            background-color: white;
            padding-left: 26px;
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
            background-color: white;
            padding-left: 26px;
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
            background-color: white;
            padding-left: 26px;
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
            background-color: white;
            padding-left: 26px;
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
            background-color: white;
            padding-left: 26px;
            padding-right: 26px;
            padding-top: 17px;
            text-align: center;
            box-shadow: -5px 5px 8px #EE9A4D;
            border-radius: 8px;
            border: 3px solid red;
        }

        #prenext {
            display: block;
            text-align: center;
            margin: 0% auto;
        }

        .btn {
            width: 170px;
        }

        #draggable {
            position: relative;
            margin: 10px auto;
            width: 450px;
            height: 281px;
            z-index: 1;
        }

        #draggable1 {
            position: relative;
            margin: 10px auto;
            margin-top: 80px;
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

        #title {
            font-family: ruby;
            background-color: #000033;
            height: 35px;
            margin-top: 7px;
            color: white;
        }

        #caraimg {
            margin-top: 107px;
            width: 100%;
            height: 512px;
        }

        #col-md-8 {
            margin-top: 150px;
        }

        #draggable {
            margin-left: 53px;
            width: 170px;
            height: 260px;
        }

        #draggable1 {
            margin-left: 53px;
            width: 170px;
            height: 260px;
        }

        #peoplesearch {
            background-color: black;
            margin-top: 116px;
            margin-bottom: -44px;
            border: 2px solid orange;
        }

        @media screen and (max-width: 1281px) {
            #peoplesearch {
                margin-top: 162px;
            }

            #caraimg {
                margin-top: 162px;
            }

            #draggable {
                margin-left: -8px;
            }

            #draggable1 {
                margin-left: -8px;
            }
        }

        @media screen and (max-width: 768px) {
            #prenext {
                margin-top: 35px;
            }

            #peoplesearchname {
                font-size: medium;
            }

            #peoplesearchname1 {
                font-size: small;
            }

            #title {
                margin-top: -17px;
            }

            #caraimg {
                margin-top: 98px;
                width: 100%;
                height: 287px;
            }


            #col-md-82 {
                margin-top: -17px;
                margin-left: -44px;
            }

            #draggable {
                margin-left: -17px;
                margin-top: -8px;
                width: 170px;
                height: 260px;
            }

            #draggable1 {
                margin-left: -17px;
                margin-top: 62px;
                width: 170px;
                height: 260px;
            }

            #div1_right {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                border: 3px solid purple;
            }

            #div11_right {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
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
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div22_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div3_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div31_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
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
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div42_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div1_left {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                border: 3px solid purple;
            }

            #div11_left {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                border: 3px solid purple;
            }

            #div2_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div21_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div22_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div3_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div31_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
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
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #EE9A4D;
                border-radius: 8px;
                border: 3px solid red;
            }

            #div42_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #EE9A4D;
                border-radius: 8px;
                border: 3px solid red;
            }

            #peoplesearch {
                background-color: black;
                margin-top: 98px;
                margin-bottom: -44px;
                border: 2px solid orange;
            }
        }

        @media screen and (max-width: 575px) {
            .col-md-2 {
                display: none;
            }

            #title {
                margin-top: -31px;
            }

            #caraimg {
                margin-top: 98px;
                width: 100%;
                height: 287px;
            }

            #col-md-8 {
                margin-top: 110px;
            }

            #col-md-82 {
                margin-left: 1px;
            }

            #draggable {
                margin-left: 170px;
                margin-top: 8px;
                width: 170px;
                height: 260px;
            }

            #draggable1 {
                margin-left: 170px;
                margin-top: 8px;
                width: 170px;
                height: 260px;
            }

            #div1_right {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                border: 3px solid purple;
            }

            #div11_right {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
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
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div22_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div3_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div31_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
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
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div42_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div1_left {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                border: 3px solid purple;
            }

            #div11_left {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                border: 3px solid purple;
            }

            #div2_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div21_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div22_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div3_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div31_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
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
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #EE9A4D;
                border-radius: 8px;
                border: 3px solid red;
            }

            #div42_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #EE9A4D;
                border-radius: 8px;
                border: 3px solid red;
            }
        }

        @media screen and (max-width: 480px) {
            .col-md-2 {
                display: none;
            }

            #title {
                margin-top: -32px;
            }

            #caraimg {
                margin-top: 98px;
                width: 100%;
                height: 188px;
            }

            #col-md-8 {
                margin-top: 110px;
            }

            #col-md-82 {
                margin-left: 1px;
            }

            #draggable {
                margin-left: 107px;
                margin-top: 8px;
                width: 170px;
                height: 260px;
            }

            #draggable1 {
                margin-left: 107px;
                margin-top: 8px;
                width: 170px;
                height: 260px;
            }

            #div1_right {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                border: 3px solid purple;
            }

            #div11_right {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
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
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div22_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div3_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div31_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
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
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div42_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div1_left {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                border: 3px solid purple;
            }

            #div11_left {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                border: 3px solid purple;
            }

            #div2_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div21_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div22_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div3_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div31_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
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
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #EE9A4D;
                border-radius: 8px;
                border: 3px solid red;
            }

            #div42_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #EE9A4D;
                border-radius: 8px;
                border: 3px solid red;
            }

        }

        @media screen and (max-width: 376px) {
            .col-md-2 {
                display: none;
            }

            #title {
                margin-top: -32px;
            }

            #caraimg {
                margin-top: 98px;
                width: 100%;
                height: 188px;
            }

            #col-md-8 {
                margin-top: 110px;
            }

            #col-md-82 {
                margin-left: 1px;
            }

            #draggable {
                margin-left: 89px;
                margin-top: 8px;
                width: 170px;
                height: 260px;
            }

            #draggable1 {
                margin-left: 89px;
                margin-top: 8px;
                width: 170px;
                height: 260px;
            }

            #div1_right {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                border: 3px solid purple;
            }

            #div11_right {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
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
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div22_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div3_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div31_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
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
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div42_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div1_left {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                border: 3px solid purple;
            }

            #div11_left {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                border: 3px solid purple;
            }

            #div2_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div21_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div22_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div3_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div31_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
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
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #EE9A4D;
                border-radius: 8px;
                border: 3px solid red;
            }

            #div42_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #EE9A4D;
                border-radius: 8px;
                border: 3px solid red;
            }

        }

        @media screen and (max-width: 361px) {
            .col-md-2 {
                display: none;
            }

            #title {
                margin-top: -32px;
            }

            #caraimg {
                margin-top: 98px;
                width: 100%;
                height: 188px;
            }

            #col-md-8 {
                margin-top: 110px;
            }

            #col-md-82 {
                margin-left: 1px;
            }

            #draggable {
                margin-left: 80px;
                width: 170px;
                height: 260px;
            }

            #draggable1 {
                margin-left: 80px;
                width: 170px;
                height: 260px;
            }

            #div1_right {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                border: 3px solid purple;
            }

            #div11_right {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
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
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div22_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div3_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div31_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
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
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div42_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div1_left {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                border: 3px solid purple;
            }

            #div11_left {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                border: 3px solid purple;
            }

            #div2_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div21_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div22_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div3_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div31_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
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
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #EE9A4D;
                border-radius: 8px;
                border: 3px solid red;
            }

            #div42_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #EE9A4D;
                border-radius: 8px;
                border: 3px solid red;
            }

        }

        @media screen and (max-width: 281px) {
            .col-md-2 {
                display: none;
            }

            #title {
                margin-top: -32px;
            }

            #caraimg {
                margin-top: 98px;
                width: 100%;
                height: 153px;
            }

            #col-md-8 {
                margin-top: 110px;
            }

            #col-md-82 {
                margin-left: 1px;
            }

            #draggable {
                margin-left: 40px;
                width: 170px;
                height: 260px;
            }

            #draggable1 {
                margin-left: 40px;
                margin-top: 8px;
                width: 170px;
                height: 260px;
            }

            #div1_right {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                border: 3px solid purple;
            }

            #div11_right {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
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
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div22_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div3_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div31_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
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
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div42_right {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div1_left {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                border: 3px solid purple;
            }

            #div11_left {
                width: 100%;
                height: 125px;
                background-color: white;
                box-shadow: -5px 5px 8px gray;
                border-radius: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                border: 3px solid purple;
            }

            #div2_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #50C878;
                border-radius: 8px;
                border: 3px solid green;
            }

            #div21_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div22_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div3_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #A0CFEC;
                border-radius: 8px;
                border: 3px solid blue;
            }

            #div31_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
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
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #EE9A4D;
                border-radius: 8px;
                border: 3px solid red;
            }

            #div42_left {
                width: 100%;
                height: 125px;
                background-color: white;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
                font-size: medium;
                text-align: center;
                box-shadow: -5px 5px 8px #EE9A4D;
                border-radius: 8px;
                border: 3px solid red;
            }
        }
    </style>
    </haed>

<body>
    <div class="container">
        <div class="text-center">
            <div class="fixed-top" style="margin-top: 80px;">
                <h1 align="center" id="title">Quotes On Friendship</h1>
            </div>
            <div class="row" id="col-md-8">
                <div class="col-md-6">
                    <h2 id="div1_left" class="one">
                        “Friendship is a wildly underrated medication.”
                    </h2>
                    <h2 id="div11_left">
                        “You find out who your real friends are when you’re involved in a scandal.”
                    </h2>
                    <h2 id="div1_left">
                        “Find a group of people who challenge and inspire you; spend a lot of time with them, and it will change your life.”
                    </h2>
                    <h2 id="div11_left">
                        “When the world is so complicated, the simple gift of friendship is within all of our hands.”
                    </h2>

                </div>
                <div class="col-md-6">
                    <h2 id="div1_right">
                        “A true friend is one who overlooks your failures and tolerates your success!”
                    </h2>
                    <h2 id="div11_right">
                        “A friend is an emotional bond, just like friendship is a human experience.”
                    </h2>
                    <h2 id="div1_right">
                        “The great thing about new friends is that they bring new energy to your soul.”
                    </h2>
                    <h2 id="div11_right">
                        “Since there is nothing so well worth having as friends, never lose a chance to make them.”
                    </h2>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="text-center">
            <div class="row">
                <div class="col-md-6" id="col-md-82">
                    <h2 id="div22_right">
                        “Friendship’s the wine of life.”
                    </h2>
                    <h2 id="div21_right">
                        “Don’t walk behind me; I may not lead. Don’t walk in front of me; I may not follow. Just walk beside me and be my friend.”
                    </h2>
                    <h2 id="div22_right">
                        “There’s not a word yet for old friends who’ve just met.”
                    </h2>
                    <h2 id="div21_right">
                        “I like to listen. I have learned a great deal from listening carefully. Most people never listen.”
                    </h2>

                </div>
                <div class="col-md-6">
                    <h2 id="div21_right">
                        “True friends are those rare people who come to find you in dark places and lead you back to the light.”
                    </h2>
                    <h2 id="div22_right">
                        “One of the most beautiful qualities of true friendship is to understand and to be understood.”
                    </h2>
                    <h2 id="div21_right">
                        “Friendship is the source of the greatest pleasures, and without friends even the most agreeable pursuits become tedious.”
                    </h2>
                    <h2 id="div22_right">
                        “A friend is one who overlooks your broken fence and admires the flowers in your garden.”
                    </h2>


                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div id="prenext">
        <a href="../Index.php">
            <button style="width:170px; height:35px;" class="btn btn-danger">
                <h4>Home</h4>
            </button>
        </a>
        <a href="Friendship.php">
            <button style="width:170px; height:35px;" class="btn btn-success">
                <h4>Next</h4>
            </button>
        </a>
    </div><br><br>
    <?php
    include "footer.php";
    ?>
</body>

</html>