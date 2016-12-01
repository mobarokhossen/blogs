<?php

class Blog {

    private $db_connect;

    public function __construct() {
        $host_name = "localhost";
        $user = "root";
        $password = '';
        $db_name = "db_blog";

        $this->db_connect = mysqli_connect($host_name, $user, $password, $db_name);

        if (!$this->db_connect) {
            die("Connection failure: " . mysqli_error($db_connect));
        }
    }

    public function add_blog_data($data) {
        $blog_title = $data['blog_title'];
        $category_name = $data['category_name'];
        $blog_desc = $data['blog_desc'];
        $publication_status = $data['publication_status'];
        $mysqli = "INSERT INTO tbl_blog (blog_title, author_name, blog_desc, publication_status) VALUES( '$blog_title', '$author_name','$blog_desc','$publication_status' )";
        if (mysqli_query($this->db_connect, $mysqli)) {

            $message = "Insert blog Data Successfully";
            return $message;
        } else {
            die("Insert Query problem:" . mysqli_error($mysqli));
        }
    }

    public function select_blog_info() {
        $sql = "SELECT * FROM tbl_blog";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        }
    }

    public function edit_blog_data($data) {
        $sql = "SELECT * FROM tbl_blog WHERE blog_id='$data' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        }
    }

    public function update_edit_blog_data($data) {
        $blog_id = $data['blog_id'];
        $blog_title = $data['blog_title'];
        $author_name = $data['author_name'];
        $blog_desc = $data['blog_desc'];
        $publication_status = $data['publication_status'];
        $mysqli = "UPDATE tbl_blog SET blog_title='$blog_title', author_name= '$author_name', blog_desc='$blog_desc', publication_status='$publication_status' WHERE blog_id='$blog_id' ";
        if (mysqli_query($this->db_connect, $mysqli)) {

            header("Location: view_blog.php");
        } else {
            die("Update edit blog data insert Query problem: " . mysqli_error($mysqli));
        }
    }
    
    public function delete_blog_data($data)
    {

        $mysql = "DELETE FROM tbl_blog where blog_id = '$data' ";
        
        if(mysqli_query($this->db_connect, $mysql))
        {
            $message = "blog Data Delete Successfully";
            return $message;
        }
        else {
            die("Delete Query problem: " . mysqli_error($mysql));
        }
    }

}
