<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
                        if (isset($_POST['submit'])){
                            header('Content-type: text/html');
                            $status = array(
                                'type'=>'success',
                                'message'=>'Email sent!'
                            );
                            $email = @trim(stripslashes($_POST['email']));
                            $email_from = $email;
                            $email_to = 'Andrewp97@me.com';
                            $body = 'Email: ' . $email . " Would Like to sign up for the newsletter";
                            $success = @mail($email_to, "Newsletter Sign Up", $body, 'From: <'.$email_from.'>');
                            die;
                        }
?>
<script type="text/javascript">
    self.close();
    window.close()
</script>

</body>
</html>