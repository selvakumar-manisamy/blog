<?php

/**
 * insert
 */
function insert($query, $path)
{
    global $connect;
    $pass = mysqli_query($connect, $query);

    if ($pass) {
        $_SESSION['form_error_type'] = "success";
        $_SESSION['form_error'] = "Data stored successfully";
        header('location:' . $path);
    } else {
        $_SESSION['form_error_type'] = "danger";
        $_SESSION['form_error'] = "Data insert failed";
        header('location:' . $path);
    }
}

/**
 * read
 */
function simple_read($query)
{
    global $connect;
    $query = $query;
    $pass = mysqli_query($connect, $query);
    $result = [];
    while ($row = mysqli_fetch_assoc($pass)) {
        $result[] =  $row;
    }
    return $result;
}

/**
 * update
 */
function update($query, $path)
{
    global $connect;
    $pass = mysqli_query($connect, $query);

    if ($pass) {
        $_SESSION['form_error_type'] = "success";
        $_SESSION['form_error'] = "Data updated successfully";
        header('location:' . $path);
    } else {
        $_SESSION['form_error_type'] = "danger";
        $_SESSION['form_error'] = "Data update failed";
        header('location:' . $path);
    }
}

/**
 * soft delete by id
 */
function soft_delete_by_id($table, $id, $path)
{
    global $connect;
    $query = "update $table set deleted_at='".date("Y-m-d H:i:s")."' where id= $id";
    $pass = mysqli_query($connect, $query);

    if ($pass) {
        $_SESSION['form_error_type'] = "success";
        $_SESSION['form_error'] = "Data deleted successfully";
        header('location:' . $path);
    } else {
        $_SESSION['form_error_type'] = "danger";
        $_SESSION['form_error'] = "Data delete failed";
        header('location:' . $path);
    }
}

/**
 * restore
 */
function restore($table, $id, $path)
{
    global $connect;
    $query = "update $table set deleted_at=NULL where id= $id";
    $pass = mysqli_query($connect, $query);

    if ($pass) {
        $_SESSION['form_error_type'] = "success";
        $_SESSION['form_error'] = "Data restored successfully";
        header('location:' . $path);
    } else {
        $_SESSION['form_error_type'] = "danger";
        $_SESSION['form_error'] = "Data restore failed";
        header('location:' . $path);
    }
}

/**
 * hard delete by id
 */
function hard_delete_by_id($table, $id, $path, $is_image=false, $image_field_name='image')
{
    global $connect;

    if($is_image){
        $query = "select * from $table where id=$id";
        $result = simple_read($query);
        unlink(ROOTPATH.$result[0][$image_field_name]);
    }
    
    $query = "delete from $table where id= $id";
    $pass = mysqli_query($connect, $query);

    if ($pass) {
        $_SESSION['form_error_type'] = "success";
        $_SESSION['form_error'] = "Data deleted permanently";
        header('location:' . $path);
    } else {
        $_SESSION['form_error_type'] = "danger";
        $_SESSION['form_error'] = "Data delete failed";
        header('location:' . $path);
    }
}

/**
 * form errors unset session
 */
function form_error_unset()
{
    unset($_SESSION['form_error_type']);
    unset($_SESSION['form_error']);
}
