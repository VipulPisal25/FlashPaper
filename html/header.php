<?php defined('_DIRECT_ACCESS_CHECK') or exit(); ?>
<!DOCTYPE html>
    <head>
        <title>FlashPaper :: Self-Destructing Message</title>
        <style>
            #form-div {
                background-color:rgba(72,72,72,0.1);
                padding-left:35px;
                padding-right:35px;
                padding-top:35px;
                padding-bottom:50px;

                margin:30px;
                -moz-border-radius: 7px;
                -webkit-border-radius: 7px;
            }
            textarea {
                width: 100%;
                height: 150px;
                padding: 12px 20px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                background-color: #f8f8f8;
                resize: none;
            }
            fieldset {
                margin:10px;
                border: 0;
            }
            input[type=submit] {
                background-color: #4ca2ae;
                border: none;
                color: white;
                padding: 12px 28px;
                text-decoration: none;
                font-size: 20px;
                margin: 4px 2px;
                cursor: pointer;

                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
            }
            input[type=submit]:hover {
                background-color: #67b2bc;
                color: white;
            }
        </style>
    </head>
