<?php
session_start();

$page = $_GET['page'];

if($page <= 3) $_SESSION['menPagesCount'] = $page;
else $_SESSION['menPagesCount'] = $page-1;
