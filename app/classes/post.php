<?php


namespace App\classes;

use App\classes\Database;
use App\classes\Session;
use App\classes\Helper;


class Post
{
    public function addPost($data){
    $cat_id = $data['cat_id'];
    $title = mysqli_real_escape_string(Database::db(), $data['title']);
    $title = Helper::filter($title);
    $content = mysqli_real_escape_string(Database::db(), $data['content']);
    $tag = mysqli_real_escape_string(Database::db(), $data['tag']);
    $status = mysqli_real_escape_string(Database::db(), $data['status']);
    $admin = mysqli_real_escape_string(Database::db(), Session::get('username'));
    
    $image = $_FILES['image']['name'];
    $img_ext = pathinfo($image, PATHINFO_EXTENSION);
    $image = rand(1, 888888) . '.' . $img_ext;
    $ext = $this->imageChecker($img_ext);
    if ($ext == false) {
        Session::set('extError', "Image should be png");
        header('location:addpost.php');
        exit();
    }

    $sql = "INSERT INTO `blog` (`cat_id`, `title`, `content`, `tag`, `admin`, `status`, `image`) VALUES ('$cat_id', '$title', '$content', '$tag', '$admin', '$status', '$image')";
    $result = mysqli_query(Database::db(), $sql);

    if ($result) {
        $upload = '../uploads/' . $image;
        move_uploaded_file($_FILES['image']['tmp_name'], $upload);
        $txt = "Post added successfully!";
    } else {
        $txt = "Post Not Saved :)";
    }

    return $txt;
}

    public  static  function imageChecker($ext){
        if($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG'){
            return true;
        }else{
            return false;
        }
    }

    public  static  function showAllPost(){
        $sql = "SELECT blog.*, categories.category_name FROM blog INNER JOIN categories ON blog.cat_id = categories.id ORDER BY id DESC  ";
        $result = mysqli_query(Database::db(),$sql);
        if($result){
            return $result;
        }else{
            return false;
        }
    }
    //ALL ACTIVE POST
    public  static  function showActivelPost(){
        $sql = "SELECT blog.*, categories.category_name FROM blog INNER JOIN categories ON blog.cat_id = categories.id WHERE blog.status = 1 ORDER BY id DESC  ";
        $result = mysqli_query(Database::db(),$sql);
        if($result){
            return $result;
        }else{
            return false;
        }
    }
    public  static  function showPopulerlPost(){
        $sql = "SELECT blog.*, categories.category_name FROM blog INNER JOIN categories ON blog.cat_id = categories.id WHERE blog.rate = 1 ORDER BY id DESC ";
        $result = mysqli_query(Database::db(),$sql);
        if($result){
            return $result;
        }else{
            return false;
        }
    }

    public  static   function inactivePost($id){
        $sql = "UPDATE `blog` SET `status` = '0' WHERE `blog`.`id` = $id";
        $result = mysqli_query(Database::db(),$sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public static   function inactiveRate($id){
        $sql = "UPDATE `blog` SET `rate` = '0' WHERE `blog`.`id` = $id";
        $result = mysqli_query(Database::db(),$sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public  static  function activePost($id){
        $sql = "UPDATE `blog` SET `status` = '1' WHERE `blog`.`id` = $id";
        $result = mysqli_query(Database::db(),$sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public  static  function activeRate($id){
        $sql = "UPDATE `blog` SET `rate` = '1' WHERE `blog`.`id` = $id";
        $result = mysqli_query(Database::db(),$sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public static   function deletePost($id){
        $sql = "DELETE FROM `blog` WHERE `id` = $id";
        $imgName =  self::findSingleImage($id);
        $path = '../uploads/'.$imgName;
        $res = mysqli_query(Database::db(),$sql);
        if($res){
            $dltTxt = "Successfully Delete!!";
            unlink($path);
            return $dltTxt;
        }else{
            $dltTxt = "Not Delete";
            return $dltTxt;
        }
    }
    //SINGLE POST
    public static   function singlePost($id){
        # $sql = "SELECT * FROM `blog` WHERE `id` = $id";
        $sql = "SELECT blog.*,categories.category_name  FROM blog INNER JOIN categories ON blog.cat_id = categories.id WHERE blog.id = $id ";
        $result = mysqli_query(Database::db(),$sql);
        if($result){
            if(mysqli_num_rows($result) == 0){
                return false;
            }
            return $result;
        }else{
            return false;
        }
    }


    public static   function findSingleImage($id){
        $sql = "SELECT `image` FROM `blog` WHERE `id` = $id";
        $result = mysqli_query(Database::db(),$sql);
        if($result){
            $data = mysqli_fetch_assoc($result);
            $path = $data['image'];
            return $path;
        }else{
            return false;
        }
    }

    //UPDATE POST
    public function updatePost($data){
        $cat_id = $data['cat_id'];
        $id = $data['id'];
        $title = $data['title'];
        $title = Helper::filter($title);
        $content = $data["content"];
        $tag = $data['tag'];
        $content = Helper::filter($content);
        $status = $data['status'];
        $admin = Session::get('username');
        if($_FILES['image']['name'] == NULL){
            $sql = "UPDATE `blog` SET `cat_id` = '$cat_id',`title`= '$title',`content`= '$content',`tag` = '$tag',`admin`= '$admin',`status`= $status WHERE id = $id";
        }else{
            $image = $_FILES['image']['name'];
            $img_ext = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
            $image = rand(1,888888). '.' .$img_ext;
            $ext =  $this->imageChecker($img_ext);
            if($ext == false){
                Session::set('extError',"Image should be png");
                header('location:managepost.php');
            }
            $sql = "UPDATE `blog` SET `cat_id` = '$cat_id',`title`= '$title',`content`= '$content',`tag` = '$tag',`admin`= '$admin', `image` = '$image' ,`status`= $status WHERE id = $id";
            $upload = '../uploads/' . $image;
            move_uploaded_file($_FILES['image']['tmp_name'],$upload);
            $path=  $this->findSingleImage($id);
            $dltImg = '../uploads/'. $path;
            unlink($dltImg);
        }
        $result = mysqli_query(Database::db(),$sql);
        if($result){
            $uptxt = "Post Updated Successfully!";
            return $uptxt;
        }else{
            $uptxt = "Post Not Update!";
            return $uptxt;
        }
    }
    //COUNT POST
    public  static  function countPost(){
        $sql = "SELECT * FROM `blog` ";
        $result = mysqli_query(Database::db(),$sql);
        if($result){
            $count = mysqli_num_rows($result);
            return $count;
        }else{
            return false;
        }
    }
    //COUNT ACTIVE POST
    public  static  function countActivePost(){
        $sql = "SELECT * FROM `blog` WHERE status = 1";
        $result = mysqli_query(Database::db(),$sql);
        if($result){
            $count = mysqli_num_rows($result);
            return $count;
        }else{
            return false;
        }
    }
    public  static  function categoryWisePost($id){
        $sql = "SELECT blog.*, categories.category_name FROM blog INNER JOIN categories ON blog.cat_id = categories.id WHERE blog.status = 1 AND blog.cat_id = $id ";
        $result = mysqli_query(Database::db(),$sql);
        if($result){
            $row = mysqli_num_rows($result);
            if($row>0){
                return $result;
            }
            return false;
        }else{
            return false;
        }
    }

    public  static  function searchPost($data){
        $sql = "SELECT blog.*, categories.category_name FROM blog INNER JOIN categories ON blog.cat_id = categories.id WHERE blog.content LIKE '%$data%' AND blog.status = 1 ";
        $result = mysqli_query(Database::db(),$sql);
        if($result){
            $row = mysqli_num_rows($result);
            if($row>0){
                return $result;
            }
            return false;
        }else{
            return false;
        }
    }
    public  static  function pagination($sql){
        $result = mysqli_query(Database::db(),$sql);
        if($result){
            return $result;
        }else{
            return false;
        }
    }
    public static function relatedPost(){
        $rand1 = rand(1,5);
        $rand2 = rand(1,3);
        $sql = "SELECT blog.*, categories.category_name FROM blog INNER JOIN categories ON blog.cat_id = categories.id WHERE blog.status = 1 LIMIT $rand1,$rand2 ";
        $result = mysqli_query(Database::db(),$sql);
        if($result){
            $row = mysqli_num_rows($result);
            if($row>0){
                return $result;
            }
            return false;
        }else{
            return false;
        }
    }
}