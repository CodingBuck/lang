<?php

require 'lang.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Languages</title>
</head>
<body>

        <style>

            body{
                font-family: tahoma;
            }
            header{
                display: flex;
                padding: 10px;
                justify-content: center;
                align-items: center;
            }

            header div{
                padding: 10px;

            }

            .dropdown{
                position: relative;
            }

            .dropdown-content{
                position: absolute;
                margin-top: 10px;
                background-color: white;
                border: solid-thin #aaa;
                padding: 10px;
            }

            .hide{
                display: none;
            }

            section{
                padding: 10px;
                max-width: 600px;
                margin:auto;
            }

        </style>

        <header>
            <div><a href="#"><?= __('Home')?></a></div>
            <div><a href="#"><?= __('About')?></a></div>
            <div><a href="#"><?= __('Contact Us')?></a></div>
            <div><a href="#"><?= __('Login')?></a></div>
            <div><a href="#"><?= __('Signup')?></a></div>
            <div><a href="#"><?= __('Logout')?></a></div>

            <div class="dropdown">
                <a href="#"><?=__('Hi')?>, Patron</a>
                <div class="dropdown-content hide">
                    <div><a href="#"><?= __('Profile')?></a></div>
                    <div><a href="#"><?= __('Settings')?></a></div>
                    <div><a href="#"><?= __('Logout')?></a></div>
                </div>
            </div>
            <div class="dropdown">
                <a href = "#"><?= __('Language')?></a>
                <div class="dropdown-content hide">
                    <div><a href="index.php?lang=en">English</a></div>
                    <div><a href="index.php?lang=es">Español</a></div>
                    <div><a href="index.php?lang=fr">Français</a></div>
                    <div><a href="index.php?lang=oj">Ojibwe</a></div>
                    <div><a href="index.php?lang=zh">中文</a></div>
                </div>
            </div>
        </header>

        <section>
        <div><?= __('')?></div>
        </section>

</body>

<script>
    var dropdowns = document.querySelectorAll(".dropdown");

    for (var i = 0; i < dropdowns.length; i++) {
        dropdowns[i].addEventListener('click',function(e){

            //for (var x = 0; x < dropdowns.length; x++) {
            //    dropdowns[x].querySelector(".dropdown-conent").classList.add("hide");
            //}
            e.currentTarget.querySelector(".dropdown-content").classList.toggle("hide");
        });
    }
</script>
</html>