<?php namespace App\Controllers;

use App\Libraries\Mailin;

class Home extends BaseController
{
	public function index()
	{
		return view('home/index');
	}

    public function sendEmail()
    {
        $name = strip_tags(trim($_POST["con_name"]));
        $name = str_replace(array("\r", "\n"), array(" ", " "), $name);
        $email = filter_var(trim($_POST["con_email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["con_message"]);
        $company = trim($_POST["con_company"]);
        $phone = trim($_POST["con_phone"]);

        if (empty($name) or empty($company) or empty($phone) or empty($message) or !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
//            http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }
        $from = array($email, $name);
        $to = array("info@retailmatix.com" => "Info Retailmatix");
        $mailin = new Mailin("https://api.sendinblue.com/v2.0", "2wsSyQEdtV0bWIZ6");
        $subject = "retailmatix.com - mail from $name";
        $content = "<h6>This email from retailmatix.com<h6>";
        $content .= "<p>Name:<br/>$name</p>";
        $content .= "<p>Email:<br/>$email</p>";
        $content .= "<p>Company:<br/>$company</p>";
        $content .= "<p>Phone:<br/>$phone</p>";
        $content .= "<p>Message:<br/>$message</p>";

        $data = array(
            "to" => $to,
//                "cc" => array($email_list['Cc']),
            "from" => $from,
            "subject" => $subject,
            "html" => $content,
            "headers" => array("Content-Type" => "text/html; charset=iso-8859-1")
            #"attachment" => array("https://domain.com/path-to-file/filename1.pdf", "https://domain.com/path-to-file/filename2.jpg")
        );

        try {
            $res = ($mailin->send_email($data));
            $send = $res["code"] == "success";
            echo ($send) ? "Thank You! Your message has been sent." : "Oops! Something went wrong and we couldn't send your message.";
        } catch(\Exception $e) {
            echo "Oops! Something went wrong and we couldn't send your message";
        }
    }
}
