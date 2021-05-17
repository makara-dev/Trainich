<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    // public function index(){
    //     return view('home');
    // }

    public function sendmail(Request $request){
        // Recaptcha
        $output = $this->recaptchaGoogle($request);
        $ldate = date('d M yy');
        $clientInformation = array(
            'fullName' => $request->input('fullName'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'auth' => env('RECEIVER_EMAIL'),
            'date' => $ldate
        );
        // send mail
        if(strpos($output, '"success": true') !== FALSE){
            Mail::send(
                'email.tranichMail', 
                array('clientInformation'=>$clientInformation),
                function($message){
                    $message->to(env('RECEIVER_EMAIL'), env('MAIL_TO_NAME'))
                    ->subject(env('MAIL_SUBJECT'));
                    // For email@gmail.com is not real email,but required
                    $message->from('email@gmail.com');
                }
            );
            return redirect()
                   ->back()
                   ->with('success', 'Mail sent sucessfully');
        }else{
            return redirect()
                   ->back()
                   ->with('error', 'Mail sendding unsucessfully');
        }
    }

    /**
     * validation for google recaptcha
     * @param Request $request
     * @return Google JSON $output
     */

     private function recaptchaGoogle(Request $request){
        $ch = curl_init();

        curl_setopt_array($ch,[
            CURLOPT_URL => "https://www.google.com/recaptcha/api/siteverify",
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS =>[
                'secret' => "6LeAtFgaAAAAAOkqu8o8MPCpB8bDJ1jS_-31T66U",
                'response' => $request->input('token'),
                'remoteip' => $_SERVER['REMOTE_ADDR']
            ],
            CURLOPT_RETURNTRANSFER =>true
        ]);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
     }
}


