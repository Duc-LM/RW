<?php 
require_once 'Models/Connect.php';
class Comment extends Connect
{
   
    public function getCommentId($name,$email,$content)
    {
        $sql="SELECT * From comments where name = '$name', email = '$email' and content = '$content' ";
         $this->execute($sql);
        if ($this->num_rows() != 0)
            $data = mysqli_fetch_array($this->result);
        else
            $data = 0;
        return $data;
    }

    public function get_CommentID_From_PostId($post_id)
    {
        $sql = " SELECT * FROM post_comment
                    WHERE post_id = '$post_id'";
        $this->execute($sql);
        if ($this->num_rows() === 0)
            $data = 0;
        else
            while ($datas = $this->getData())
                $data[] = $datas;
        return $data;
    }
    public function get_All_Data_Of_Post($post_id)
    {
        $post_CommentArray = $this->get_CommentID_From_PostId($post_id);
        foreach($post_CommentArray as $comment)
        {
            $id = $comment['comment_id'];
            $sql = "SELECT * FROM comments 
                    WHERE id = '$id'";
            $this->execute($sql);
            if ($this->num_rows() === 0)
            $data = 0;
        else
            while ($datas = $this->getData())
                $data1[] = $datas;
        }
        return $data1;
    }

    public function createComment($post_id,$name,$email,$content)
    {
        $sql = "INSERT INTO comments (name,email,content)
                VALUES ('$name', '$email', '$content')";
        $comment_id = ($this->getCommentId($name,$email,$content))['id'];
        $sql1 = "INSERT INTO post_comment(post_id,comment_id)
                    VALUES('$post_id','$comment_id')";
        return $this->execute($sql) && $this->execute($sql1);        
    }

    public function updateComment($id,$name, $email,$content)
    {
        $sql = "   UPDATE comments
                    SET  name = '$name', email  = '$email', content = '$content'
        WHERE id = '$id'  ";
        return $this->execute($sql);
    }

    public function deleteComment($id)
    {
        $sql = "DELETE  FROM comments WHERE id = '$id'";
        return $this->execute($sql);
    }

    public function get_Comment_By_Id($id)
    {
        $sql = "SELECT * FROM comments 
                WHERE id = '$id'";
        $this->execute($sql);
        if ($this->num_rows() === 0)
            $data = 0;
        else
            while ($datas = $this->getData())
                $data1[] = $datas;
        return $data1;
    }
}