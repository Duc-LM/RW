<?php
class Post extends BaseConnect 
{
    public function get_All_Data()
    {
        $sql = " SELECT * FROM posts ORDER BY title";
        $this->execute($sql);
        if ($this->num_rows() === 0)
            $data = 0;
        else
            while ($datas = $this->getData())
                $data[] = $datas;
        return $data;
    }

    public function get_All_Data_Of_User($user_id)
    {
        $sql = " SELECT * FROM posts ORDER BY tittle WHERE user_id = '$user_id";
        $this->execute($sql);
        if ($this->num_rows() === 0)
            $data = 0;
        else
            while ($datas = $this->getData())
                $data[] = $datas;
        return $data;
    }

    public function get_Post_By_Id($post_id)
    {
        $sql = "SELECT * FROM posts WHERE id = '$post_id'";
	    $this->execute($sql);
	    if ($this->num_rows() != 0)
		    $data = mysqli_fetch_array($this->result);
	    else
		    $data = 0;
	    return $data;
    }

    public function create_Post($title,$user_id, $author, $content, $tag, $image)
    {
        $sql = "INSERT INTO `posts`(title,user_id, author, content, tag, image, status) 
                    VALUES ('$title','$user_id', '$author', '$content', '$tag', '$image','Pending accept')";
        return $this->execute($sql);
    }

    public function update_Post($id,$title, $author, $content, $tag, $image)
    {
        $sql = "   UPDATE posts
                    SET title = '$title', author = '$author', content = '$content', tag = '$tag', image = '$image'
                    WHERE id = '$id'  ";

        return $this->execute($sql);
    }

    public function delete_Post($id)
    {
        $sql = "DELETE FROM posts
                WHERE id = '$id' ";
        return $this->execute($sql);
    }

    public function change_Status($id,$status)
    {
        $sql = "   UPDATE posts
        SET status = '$status'
            WHERE id = '$id'  ";
        return $this->execute($sql);
    }



}