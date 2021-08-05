<?php

/* @var $this yii\web\View */

$this->title = 'Yii2 Elastic implementation';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Employee search</h1>

        <!-- <p class="lead">You have successfully created your Yii-powered application.</p> -->
        <p class="lead"></p>

        <p>
            <input type="text" id="txtSearch" style="width: 544px;"/>
            <div><button id="searchBtn" name="searchBtn" onclick="searchEmp();">SEARCH</button></div>
            <div id="search_suggest"><p id="searchPara" style="margin-top: 20px;"></p></div>
        </p>
    </div>
</div>
