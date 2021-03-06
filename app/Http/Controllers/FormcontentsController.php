<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;
use App\Models\Formcontent;

class FormcontentsController extends Controller
{
    /**
     * PHPドキュメント（PHP docコメント）
     * コードには関係しない。
     * コードの説明を書いてわかりやすくするもの。
     * ルールがいくつかある。
     * フォーム画面を表示する
     * @return view viewsフォルダを参照する
     * 
     */

    public function formList(Request $request){
        $get_session_data = $request->session()->all();
        return view('form_content.input', compact('get_session_data')); // 「resources/views/form_content/input.php」を返す。
    }
    public function confirmation(Request $request){
        $data = $request->all();
        $request->session()->put($data); //セッションへデータ保存
        $get_session_data = $request->session()->all(); //保存したセッションデータの全て取得
        $request->validate([
            'title'=>'required',
            'username'=>'required|max:60',
            'email'=>'required|regex:/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/|max:254',
            'phoneNumber'=>'required|regex:/^[0-9]{2,4}[0-9]{2,4}[0-9]{3,4}$/',
            'content'=>'required|unique:formcontents|' //unipue:重複した値を格納できなくする。
        ],
        [
            'title.required' => '件名を選択してください',
            'username.required' => '名前は必須項目です',
            'username.max' => '名前は60文字以内で登録してください',
            'email.required' => 'メールアドレスは必須項目です',
            'email.regex' => '正しいメールアドレスを登録してください',
            'phoneNumber.required' => '電話番号は必須項目です',
            'phoneNumber.regex' => '正しい電話番号は登録してください',
            'content.required' => 'お問い合わせ内容は必須項目です'
        ]);
        return view('form_content.confirm', compact('data','get_session_data'));
    }

    public function complete(Request $request){
        //インスタンス($formcontent)を作成
        $formcontent = new Formcontent();
        //$インスタンス名->inputタグのname属性値 = $request->inputタグのname属性値
        $formcontent->title = $request->title;
        $formcontent->username = $request->username;
        $formcontent->email = $request->email;
        $formcontent->phoneNumber = $request->phoneNumber;
        $formcontent->content = $request->content;
        //inputタグの属性（今回はname属性）はプロパティとなる？ $requestはRequestクラスのインスタンスで、paramsのようなもの？
        $formcontent->save();
        Mail::send(['text'=>'form_content.mail'], ['formcontent'=>$formcontent], function($message) use($formcontent){
            $message->to($formcontent->email)
                    ->subject('お問い合わせ内容の確認');
                });
        $request->session()->flush();
        return view('form_content.complete');
    }
}
?>