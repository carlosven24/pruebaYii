<?php

use yii\helpers\Html;

?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light position-fixed navbarGrey">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item mb-2">
            <a class="nav-link cursor-pointer"><i class="fas fa-chevron-left"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block textCredit pt-2 pl-4">
            <p>Créditos Disponibles: <b>50</b></p>
        </li>
       
                <!-- End Level two -->
            </ul>
        </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto navbarUserInfo">
        <!-- Navbar Search -->
        <li class='color-grey cursor-pointer pr-3 pt-3'>
            <i class="far fa-bell" style='font-size:23px;'></i>
        </li>

        <li>
        <div class="user-panel d-flex" style='cursor:pointer;'>
            <div class="image">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="info">
                Alexander Pierce<br>
                Cliente
            </div>
            <div class="pt-4">
                <i class="fa fa-chevron-down"></i>
            </div>
        </div>

        </li>

       

    </ul>
</nav>
<!-- /.navbar -->