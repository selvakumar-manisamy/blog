<?php
    include('../../config/autoload.php');

    // create blog
    if(isset($_POST['create_blog'])){
        $title = $_POST['title'];
        $description = $_POST['desc'];
        $is_published = isset($_POST['is_published']) ? 1 : 0;

        $uploaded_path = 'uploads/'.time().'_'.$_FILES["image"]['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], ROOTPATH.$uploaded_path);

        $query = "INSERT INTO `blogs`(`title`, `image`, `description`, `is_published`) VALUES ('$title', '$uploaded_path', '$description', '$is_published')";
        insert($query, ADMIN_BASEURL.'blog');
        
    // update blog
    }elseif(isset($_POST['update_blog'])){
        $title = $_POST['title'];
        $description = $_POST['desc'];
        $is_published = isset($_POST['is_published']) ? 1 : 0;

        $query = "select * from blogs where id=".$_POST['blog_id'];
        $result = simple_read($query);

        if($_FILES["image"]['name']){
            $uploaded_path = 'uploads/'.time().'_'.$_FILES["image"]['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], ROOTPATH.$uploaded_path);
            unlink(ROOTPATH.$result[0]['image']);
        }else{
            $uploaded_path = $result[0]['image'];
        }
        
        $query = "UPDATE `blogs` SET `title`='$title',`image`='$uploaded_path',`description`='$description',`is_published`='$is_published' WHERE id = ".$_POST['blog_id'];
        update($query, ADMIN_BASEURL.'blog');
       
    // soft delete
    }elseif(isset($_GET['delete_id'])){
        soft_delete_by_id('blogs',$_GET['delete_id'],ADMIN_BASEURL.'blog');
    
    // restore
    }elseif(isset($_GET['restore_id'])){
        restore('blogs',$_GET['restore_id'],ADMIN_BASEURL.'blog/trash');

    // permanent delete
    }elseif(isset($_GET['hard_delete_id'])){
        hard_delete_by_id('blogs',$_GET['hard_delete_id'],ADMIN_BASEURL.'blog/trash', true);

    }else{
        die('Unauthorized entry');
    }