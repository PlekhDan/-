<?
    header("Access-Control-Allow-Origin: *");
    header('Content-type: text/html; charset=utf-8'); // кириллица
    
    require_once('php/db.php'); // Подтянули файл с параметрами базы данных
    require_once('php/classes/Blog.php'); // Подтянули класс Blog
    
    $uri = explode('/',$_SERVER["REQUEST_URI"]);
    if($uri[1]=='getArticles'){
        Blog::getArticles();
    }else if($uri[1]=='getIdArticle'){
        Blog::getIdArticle($_POST['id']);
    }else if($uri[1]=='addArticle'){
        Blog::addArticle($_POST['title','text','author']);
    }else if($uri[1]=='removeArticle'){
        Blog::removeArticle($_POST['id']);
    }else if($uri[1]=='addCategory'){
        Blog::addCategory($_POST['category']);
    }else{
        require_once("index.html");
    }
?>