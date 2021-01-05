<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $request->session()->put($_POST); //セッションへデータ保存
        $get_session_data = $request->session()->all(); //保存したセッションデータの全て取得
        return view('form_content.confirm', compact('data','get_session_data'));
    }
    public function complete(){
        return view('form_content.complete');
    }
}
?>