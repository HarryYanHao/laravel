<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;

class EmailController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$mail =new PHPMailer(true);
		try{
			$mail->isSMTP(); // tell to use smtp  
  
            $mail->CharSet = "utf-8"; // set charset to utf8  
            $mail->SMTPAuth = true;  // use smpt auth  
            $mail->SMTPSecure = "tls"; // or ssl  
			$mail->Host = "smtp.qq.com"; 
			$mail->Port = 25; // most likely something different for you. This is the mailtrap.io port i use for testing.  
            $mail->Username = "393464654@qq.com";  
            $mail->Password = "uphrdohukdrbbjbc";//去开通的qq或163邮箱中找,这里用的不是邮箱的密码，而是开通之后的一个token  
            $mail->setFrom("393464654@qq.com", "siwei");//设置邮件来源  
            $mail->Subject = "Test";  
            $mail->MsgHTML("Thisisatest");  
//            $mail->addAddress("xxxxxxx@qq.com", "leon");  
            $mail->addAddress("393464654@qq.com", "leon");  
			for($i=0;$i<30;$i++){
				$mail->send();  
			};
		}catch(\Exception $e){
			dd($e);
		}

		
	}
	public function hMail(){
//        Mail::raw('test', function ($message) {
//            $message->from('393464654@qq.com', 'Laravel');
//            $message->to('393464654@qq.com');
//        });
        $name = '王宝花';
        // Mail::send()的返回值为空，所以可以其他方法进行判断
        Mail::send('emails.test',['name'=>$name],function($message){
            $to = '393464654@qq.com';
            $message ->to($to)->subject('邮件测试');
        });
        // 返回的一个错误数组，利用此可以判断是否发送成功
        dd(Mail::failures());

    }
	

}
