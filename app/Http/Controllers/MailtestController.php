<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// 記得使用 use
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailtest;

class MailtestController extends Controller
{
    function __invoke(Request $request){
        $this->validate(
            $request, [
            'mail'=>'required',
            ]
        );
        $request=$request->all();
        //dd($request);
        //收件者務必使用 collect 指定二維陣列，每個項目務必包含 "name", "email"
        $to = collect([
            ['name' => $request['sendName'], 'email' => $request['mail']]
        ]);
 
        //提供給模板的參數
        //若要直接檢視模板
        //dd( (new Mailtest($params[1],$params[2]))->render());
        Mail::to($to)->send(new Mailtest($request['title'],$request['body']));
        return redirect('/post')->with('success', 'Mail Send');
        
    }

}