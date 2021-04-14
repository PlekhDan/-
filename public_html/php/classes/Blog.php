<?
    class Blog{
        
        static function getArticles(){
            global $mysqli;
            $result = $mysqli->query("SELECT articles.id, articles.title, articles.text, users.name AS author, articles.date_added FROM `articles`,`users` WHERE users.id = articles.author");
            $articles = [];
            while($row = $result->fetch_assoc()){
                $articles[] = $row;
            }
            echo json_encode($articles);
        }
        
        static function getIdArticle($id){
            global $mysqli;
            $result = $mysqli->query("SELECT * FROM `articles` WHERE id=$id");
            echo json_encode($result->fetch_assoc());
        }
        
        static function addArticle($title,$text,$author){
            global $mysqli;
            $mysqli->query("INSERT INTO `articles`(`title`, `text`, `author`) VALUES ('$title','$text','$author')");
            echo json_encode(['result'=>'success']);
        }
        
        static function removeArticle($id){
            global $mysqli;
            $mysqli->query("DELETE FROM `articles` WHERE id=$id");
            echo json_encode(['result'=>'success']);
        }
        
        static function addCategory($category){
            global $mysqli;
            $mysqli->query("INSERT INTO `Category`(`name`) VALUES ('$category')");
            echo json_encode(['result'=>'success']);
        }
    }
?>