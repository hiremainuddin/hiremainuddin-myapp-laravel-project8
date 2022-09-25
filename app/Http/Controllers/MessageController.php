<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = DB::table('messages')->paginate(15);
        return view('backend.message',['messages'=>$messages]);
    }
    public function success()
    {
        return view('frontend/success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

          
        Message::create($request->all());


        //Load Composer's autoloader
        require 'vendor/autoload.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = env('MAIL_HOST');                       //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = env('MAIL_USERNAME');                   //SMTP username
            $mail->Password   = env('MAIL_PASSWORD');                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    

            //Recipients
            $mail->setFrom($request->email, $request->name);
            $mail->addAddress('hiremainuddin@gmail.com');     //Add a recipient

            //Content
            $mail->isHTML(true);                  //Set email format to HTML
            $mail->Subject = $request->subject;
            $mail->Body    = $request->message;

            $mail->send();

            return back()->with('success', 'Message has been sent');

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }


          


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteAllmsg()
    {
        $msg = DB::table('messages')->delete();
        if ($msg) {
            return back()->with('success', 'Message successfully deleted!');
        }else{
            abort(404);
        }
        
    }

    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        return back()->with('success', 'Message successfully deleted!');
    }
}
