<?php

require_once "vendor/autoload.php";

use App\classes\Home;
use App\classes\Title;
use App\classes\News;
use App\classes\User;
use App\classes\Auth;

if (isset($_GET['pages'])) {
    if ($_GET['pages'] == 'news') {
        $title = new Title();
        $titles = $title->titles();

        $news = new News();
        $getNews = $news->index();
        include "pages/news.php";
    } elseif ($_GET['pages'] == 'title-news')
    {
        $title = new Title();
        $titles = $title->titles();

        $news = new News();
        $getNews = $news->showNews($_GET['title_id']);


        include "pages/news.php";
    } elseif ($_GET['pages'] == 'registration')
    {
        $title = new Title();
        $titles = $title->titles();
        include "pages/registration.php";

    } elseif ($_GET['pages'] == 'login')
    {
        $title = new Title();
        $titles = $title->titles();

        include "pages/login.php";

    }
}
elseif ($_POST['btn'])
{
    $title = new Title();
    $titles = $title->titles();

    $userInfo = new User($_POST);
    $result = $userInfo->index();
    include "pages/submit.php";
}

elseif ($_POST['loginBtn'])
{
    $auth = new Auth($_POST);
    $message = $auth->login();
    include "pages/login.php";
}

