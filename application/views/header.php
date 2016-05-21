<!DOCTYPE html>
<html>
<!-- MEMO: update me with `git checkout gh-pages && git merge master && git push origin gh-pages` -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title><?php echo (isset($title))? $title:"Radiant" ?></title>

    <!-- Material Design fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Material Design -->
    <link href="<?php echo base_url()?>asserts/css/bootstrap-material-design.css" rel="stylesheet">
    <link href="<?php echo base_url()?>asserts/css/ripples.min.css" rel="stylesheet">


    <link href="https://fezvrasta.github.io/snackbarjs/dist/snackbar.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            /*padding-top: 50px*/
        }

        #banner {
            border-bottom: none
        }

        .page-header h1 {
            font-size: 4em
        }

        .bs-docs-section {
            margin-top: 8em
        }

        .bs-component {
            position: relative
        }

        .bs-component .modal {
            position: relative;
            top: auto;
            right: auto;
            left: auto;
            bottom: auto;
            z-index: 1;
            display: block
        }

        .bs-component .modal-dialog {
            width: 90%
        }

        .bs-component .popover {
            position: relative;
            display: inline-block;
            width: 220px;
            margin: 20px
        }

        #source-button {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 100;
            font-weight: bold;
            padding: 5px 10px;
        }

        .progress {
            margin-bottom: 10px
        }

        footer {
            margin: 5em 0
        }

        footer li {
            float: left;
            margin-right: 1.5em;
            margin-bottom: 1.5em
        }

        footer p {
            clear: left;
            margin-bottom: 0
        }

        .splash {
            padding: 4em 0 0;
            background-color: #141d27;
            color: #fff;
            text-align: center
        }

        .splash h1 {
            font-size: 4em
        }

        .splash #social {
            margin: 2em 0
        }

        .splash .alert {
            margin: 2em 0
        }

        .section-tout {
            padding: 4em 0 3em;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            background-color: #eaf1f1
        }

        .section-tout .fa {
            margin-right: .5em
        }

        .section-tout p {
            margin-bottom: 3em
        }

        .section-preview {
            padding: 4em 0 4em
        }

        .section-preview .preview {
            margin-bottom: 4em;
            background-color: #eaf1f1
        }

        .section-preview .preview .image {
            position: relative
        }

        .section-preview .preview .image:before {
            box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            content: "";
            pointer-events: none
        }

        .section-preview .preview .options {
            padding: 1em 2em 2em;
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-top: none;
            text-align: center
        }

        .section-preview .preview .options p {
            margin-bottom: 2em
        }

        .section-preview .dropdown-menu {
            text-align: left
        }

        .section-preview .lead {
            margin-bottom: 2em
        }

        @media (max-width: 767px) {
            .section-preview .image img {
                width: 100%
            }
        }

        .sponsor {
            text-align: center
        }

        .sponsor a:hover {
            text-decoration: none
        }

        @media (max-width: 767px) {
            #banner {
                margin-bottom: 2em;
                text-align: center
            }
        }

        .infobox .btn-sup {
            color: rgba(0, 0, 0, 0.5);
            font-weight: bold;
            font-size: 15px;
            line-height: 30px;
        }

        .infobox .btn-sup img {
            opacity: 0.5;
            height: 30px;
        }

        .infobox .btn-sup span {
            padding-left: 10px;
            position: relative;
            top: 2px;
        }

        .icons-material .row {
            margin-bottom: 20px;
        }

        .icons-material .col-xs-2 {
            text-align: center;
        }

        .icons-material i {
            font-size: 34pt;
        }

        .icon-preview {
            display: inline-block;
            padding: 10px;
            margin: 10px;
            background: #D5D5D5;
            border-radius: 3px;
            cursor: pointer;
        }

        .icon-preview span {
            display: none;
            position: absolute;
            background: black;
            color: #EEE;
            padding: 5px 8px;
            font-size: 15px;
            border-radius: 2px;
            z-index: 10;
        }

        .icon-preview:hover i {
            color: #4285f4;
        }

        .icon-preview:hover span {
            display: block;
            cursor: text;
        }

    </style>
</head>
<body>


<div class="container">

