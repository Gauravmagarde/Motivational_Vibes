<?php
include "Header.php";
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
        #prenext {
            display: block;
            text-align: center;
            margin: 0% auto;
        }

        .btn {
            width: 170px;
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

        #titlediv {
            margin-top: 76px;
        }

        #title {
            font-family: ruby;
            background-color: navy;
            height: 35px;
            color: #000034;
        }

        #caraimg {
            margin-top: 107px;
            width: 100%;
            height: 512px;
        }

        #col-md-8 {
            margin-top: 80px;
        }

        #col-md-82 {
            margin-left: 35px;
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

            #titlediv {
                margin-top: 66px;
            }

            #title {
                margin-top: -17px;
            }

            #caraimg {
                margin-top: 98px;
                width: 100%;
                height: 287px;
            }

            #col-md-8 {
                margin-left: -44px;
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
                margin-top: -17px;
            }

            #caraimg {
                margin-top: 98px;
                width: 100%;
                height: 287px;
            }

            #col-md-8 {
                margin-top: 80px;
                margin-left: 1px;
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
                margin-top: -170px;
            }

            #caraimg {
                margin-top: 98px;
                width: 100%;
                height: 188px;
            }

            #col-md-8 {
                margin-top: 80px;
                margin-left: 1px;
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
                margin-top: -17px;
            }

            #caraimg {
                margin-top: 98px;
                width: 100%;
                height: 188px;
            }

            #col-md-8 {
                margin-top: 80px;
                margin-left: 1px;
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
                margin-top: -17px;
            }

            #caraimg {
                margin-top: 98px;
                width: 100%;
                height: 188px;
            }

            #col-md-8 {
                margin-top: 80px;
                margin-left: 1px;
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
                margin-top: -17px;
            }

            #caraimg {
                margin-top: 98px;
                width: 100%;
                height: 153px;
            }

            #col-md-8 {
                margin-top: 80px;
                margin-left: 1px;
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
            background-color: orange;
            height: 35px;
            margin-top: 11px;
            color: #000034;
        }


        #draggable1 {
            margin-top: 125px;
            margin-left: 62px;
            width: 170px;
            height: 260px;
        }

        #draggable {
            margin-left: 62px;
            width: 170px;
            height: 260px;
        }

        #col-md-8 {
            margin-top: 153px;
        }






        @media screen and (max-width: 575px) {
            .col-md-2 {
                display: none;
            }

            #title {
                margin-top: -17px;
            }

            #dashboard {
                margin-left: 35px;
            }

            #draggable1 {
                margin-top: -1px;
                margin-left: 134px;
                width: 170px;
                height: 260px;
            }

            #draggable {
                margin-left: 134px;
                width: 170px;
                height: 260px;
            }

            .col-md-6 {
                font-size: xx-small;
            }
        }

        @media screen and (max-width: 480px) {
            .col-md-2 {
                display: none;
            }

            #title {
                margin-top: -17px;
            }

            #dashboard {
                margin-left: 35px;
            }

            #draggable1 {
                margin-top: -1px;
                margin-left: 71px;
                width: 170px;
                height: 260px;
            }

            #draggable {
                margin-left: 71px;
                width: 170px;
                height: 260px;
            }

            .col-md-6 {
                font-size: xx-small;
            }
        }


        @media screen and (max-width: 376px) {
            .col-md-2 {
                display: none;
            }

            #title {
                margin-top: -17px;
            }

            #dashboard {
                margin-left: 35px;
            }

            #draggable1 {
                margin-top: -1px;
                margin-left: 53px;
                width: 170px;
                height: 260px;
            }

            #draggable {
                margin-left: 53px;
                width: 170px;
                height: 260px;
            }

            .col-md-6 {
                font-size: xx-small;
            }
        }




        @media screen and (max-width: 281px) {
            .col-md-2 {
                display: none;
            }

            #title {
                margin-top: -17px;
            }

            #dashboard {
                margin-left: 5px;
            }

            #draggable1 {
                margin-left: 35px;
                width: 170px;
                height: 260px;
            }

            #draggable {
                margin-left: 35px;
                width: 170px;
                height: 260px;
            }

            .col-md-6 {
                font-size: xx-small;
            }

            #col-md-8 {
                margin-top: 125px;
            }

        }
    </style>
    </hedd>

<body>
    <div class="container text-center">
        <div class="fixed-top text-center" id="titlediv">
            <h1 style="font-family: new times roman;" align="center" id="title">Hindi Quotes</h1>
        </div>
        <div class="text-center" id="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <h1 style="font-family: new times roman;" id="div22_right">
                        " मैं चाहता हूँ लोग मुझे एक अच्छे व्यक्ति के रूप में याद करें , एक अच्छे क्रिकेटर के रुप में नहीं ."
                        <br>

                    </h1>
                    <h1 style="font-family: new times roman;" id="div21_right">
                        “आपको प्रयास करना चाहिए,! की लोग आपके एक इंसान के रूप में नहीं बक्ली एक अच्छे इंसान के रूप में याद रखे."
                        <br>

                    </h1>
                    <h1 style="font-family: new times roman;" id="div22_right">
                        " यदि आप साझेदारी पर ध्यान देते है तो शतक अपने आप बन जायेगा ."
                        <br>

                    </h1>
                    <h1 style="font-family: new times roman;" id="div21_right">
                        “अपने जीवन में जो भी काम करो धैर्य और शांति से,! क्यों की महँ लोग कोई भी काम पूरा होने से पहले हो हल्ला नहीं करते है.!

                    </h1>
                </div>
                <div class="col-md-6">
                    <h1 style="font-family: new times roman;" id="div21_right">
                        " जब मैं , नही खेल रहा हूँ तब मुझे खेल से दूर रहना पसंद है ."
                        <br>

                    </h1>
                    <h1 style="font-family: new times roman;" id="div22_right">
                        “जब आप कभी जीवन में हार जाते है,! तो कभी भी आशा नहीं छोड़ना चाहिए और नाही ही इस असफलता को भुलना चाहिए!

                    </h1>
                    <h1 style="font-family: new times roman;" id="div21_right">
                        " अगर आप जिम्मेदारी उठाते हैं, तो जीत का श्रेय भी आपको ही मिलेगा ."
                        <br>

                    </h1>
                    <h1 style="font-family: new times roman;" id="div22_right">
                        “मैदान में जब हम उतरते है! खेलने के लिए तो वंहा बैठे दरसक के लिए नहीं बल्कि अपने देश के लिए खेलते है.!"
                        <br>

                    </h1>
                </div>
            </div>
        </div>
        <hr style="margin-top:44px ; margin-bottom:44px;">
        <div class="text-center">
            <div class="row">
                <div class="col-md-6">

                    <h1 style="font-family: new times roman;" id="div1_left">
                        " मेरी पत्नी मुझे मछली खाने को कहती हैं ; वह कहती है कि यह एक बेहतरीन खाना है लेकिन मुझे मछली खाना पसंद नहीं है इसलिए मैं नही खाता ."

                    </h1>
                    <h1 style="font-family: new times roman;" id="div11_left">
                        “जब मैं किसी भी चीज़ों के बारे में विचार करता हूँ.! या उसका अध्यन करता हूँ, यही में लिए सबसे अच्छे पलों में से एक होता है.!
                        <br>

                    </h1>
                    <h1 style="font-family: new times roman;" id="div1_left">
                        " मैं एक ऐसा व्यक्ति हूँ जो पल में जीता है ."
                        <br>

                    </h1>
                    <h1 style="font-family: new times roman;" id="div11_left">
                        “मारे आस पास जो भी चीजें गलत होती है,! हमे इसकी जिम्मेदारी लेनी चाहिए, और उसको ठीक करने का प्रयास भी खुद ही करना चाहिए|
                        <br>

                    </h1>
                </div>
                <div class="col-md-6">
                    <h1 style="font-family: new times roman;" id="div1_right">
                        " वास्तव में , मैंने कभी नहीं सोचा था कि मैं एक दिन अपने देश का प्रतिनिधित्व करूंगा ."
                        <br>

                    </h1>
                    <h1 style="font-family: new times roman;" id="div11_right">
                        “मै किसी भी बात का अफ़सोस नहीं करता क्यों कि ये सभी मुझे सीख देती है,! और जो सिख दे वो अफ़सोस करने लायक तो नहीं हो सकती.!
                        <br>

                    </h1>
                    <h1 style="font-family: new times roman;" id="div1_right">
                        " मुझे चीजों का विश्लेषण करना बहुत पसंद है ."
                        <br>

                    </h1>
                    <h1 style="font-family: new times roman;" id="div11_right">
                        “बिना किसी उत्तर चढाव के जीवन की गाड़ी आगे नहीं बढाती है.! इस लिए इससे घबराना नहीं चाहिए ये है तो जीवन चल रही है.!
                        <br>

                    </h1>

                </div>
            </div>
        </div>
        <br><br>
        <div id="prenext">
            <a href="HindiQuotes.php">
                <button style="width:170px; height:35px;" class="btn btn-danger">
                    <h4>Previous</h4>
                </button>
            </a>
            <a href="HindiQuotes1.php">
                <button style="width:170px; height:35px;" class="btn btn-success">
                    <h4>Next</h4>
                </button>
            </a>
        </div>
    </div>
    <br><br>
    <?php
    include "Footer.php";
    ?>
</body>

</html>