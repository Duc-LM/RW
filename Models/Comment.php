<?php 
require_once 'Models/Connect.php';
class Comment extends Connect
{
   
    public function getCommentId($name,$email,$content)
    {
        $sql="SELECT * From comments where name = '$name', email = '$email' and content = '$content' ";
        $this->execute($sql);
        if ($this->num_rows() != 0)
            $data = mysqli_fetch_array($this->execute($sql));
        else
            $data = 0;
        return $data;
    }

    public function get_Comment_From_Post($post_id)
    {
        $sql = " SELECT * FROM comments
                    LEFT  JOIN post_comment on comments.id = post_comment.comment_id
                    WHERE  post_comment.post_id = '$post_id' ";
        $this->execute($sql);
        if ($this->num_rows() === 0)
            $data = 0;
        else
            while ($datas = $this->getData())
                $data[] = $datas;
        return $data;
    }

    public function createComment($name,$email,$content)
    {
        $sql = "INSERT INTO comments (name,email,content)
                VALUES ('$name', '$email', '$content')";
        return $this->execute($sql);        
    }


    public function createPost_Comment($post_id,$comment_id)
    {
        $sql = "INSERT INTO post_comment(post_id,comment_id)
                    VALUES('$post_id','$comment_id')";
        return $this->execute($sql);        
    }



    public function deleteComment($id)
    {
        $sql = "DELETE  FROM comments WHERE id = '$id'";
        return $this->execute($sql);
    }

//    public function get_Comment_By_Id($id)
//     {
//         $sql = "SELECT * FROM comments 
//                 WHERE id = '$id'";
//         $this->execute($sql);
//         if ($this->num_rows() === 0)
//             $data = 0;
//         else
//             while ($datas = $this->getData())
//                 $data1[] = $datas;
//         return $data1;
//     }
}