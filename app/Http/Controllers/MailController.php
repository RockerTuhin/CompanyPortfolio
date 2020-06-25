<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
    	// $validatedData = $this->validate($request,[
		   //      //'from' => 'required|email',
		   //      'name' => 'min:3',
		   //      'email' => 'required|email',
		   //      'msg' => 'min:10',
		   //      // 'attach_file' => 'mimes:jpeg,png,jpg,gif,svg,txt,pdf,ppt,docs,doc,xls',
		   //  	]);
    	// $data = array(
     //        'to' => $request->to,
     //        'subject' => $request->subject,
     //        'bodyMessage' => $request->message,
     //        'attach_file' => $request->attach_file,
     //    );
    	//$data['from'] =>'rockertuhin9669@gmail.com';
        $data = array();
    	$data['name'] = $request->name;
    	$data['email'] = $request->email;
    	// $data['subject'] = $request->subject;
    	$data['bodyMessage'] = $request->msg;
    	// $data['attach_file'] = $request->file('attach_file');
    	$check = Mail::send('email_contact', $data, function($message) use($data)
    	{
    		//$message->from($data['from']);
    		$message->to('rockertuhin96@gmail.com');
    		// $message->subject($data['subject']);
    	// 	$message->attach($data['attach_file']->getRealPath(),array(
    	// 		 'as' => $data['attach_file']->getClientOriginalName(),
    	// 		'mime' => $data['attach_file']->getMimeType(),
    	// 		)
    	// );
    	});
    	//dd($check);//value of $check is null
    	//dd(Mail::failures());
        if(!Mail::failures())
        {
            $notification = array(
                'message' => 'Your message sent Successfully! We will contact you as soon as possible.',
                'alert-type' => 'success',
            );
            // $message = 'Your message sent Successfully! We will contact you as soon as possible.';
            // $alertType = 'success';
            //return view('/', compact('notification'));
            return Redirect()->back()->with('notification',$notification);
        }
        else
        {

            $notification = array(
                'message' => 'Your message failed to send!',
                'alert-type' => 'error',
            );
            //return Redirect()->back()->with($notification);
            //return view('welcome',compact('notification'));
            return Redirect()->back()->with('notification',$notification);
        }
    }
}
