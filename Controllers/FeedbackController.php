<?php
class FeedbackController
{
    public function createForm()
    {
        require_once '';
    }

    public function createFeedback()
    {
        $feedback = new Feedback();

        $name = $_POST['name'];
        $email = $_POST['email'];
        $content= $_POST['content'];

        //validation
        $err = array();
        if (empty($name)) $err['name'] = "Please enter your name";
        if (empty($email)) $err['email'] = "Please enter your email";
        if (empty($content)) $err['email'] = "Please enter your feedback";

        if(!$err)
        {
            $feedback->create_Feedback($name,$email,$content);
            header('Location: index.php');
        }
        else header('Location: index.php?controller=FeedbackController&action=createForm');
    }

    public function getAllFeedback()
    {
        $feedback = new Feedback();
        $feedbackList = $feedback->get_All_Data();
        require_once '';
    }
    
}