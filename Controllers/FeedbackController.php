<?php
require_once 'Models/Feedback.php';
class FeedbackController
{
    public function createForm()
    {
        require_once 'views/contact.php';
    }

    public function createFeedback()
    {
        $feedback = new Feedback();
        $feedback->_connect();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $content= $_POST['content'];

            $feedback->create_Feedback($name,$email,$content);
            ?>
			<script>
				window.alert("Create Successfully! Thanks for your feedback.");
			</script>
			<meta http-equiv="refresh" content="1;url=index.php" />
			<?php
       
    }

    public function getAllFeedback()
    {
        $feedback = new Feedback();
        $feedback->_connect();
        $feedbackList = $feedback->get_All_Data();
        require_once 'views/admin-feedbacks.php';
    }
    
}