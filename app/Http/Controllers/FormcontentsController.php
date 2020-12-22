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

    public function formList(){
        return view('form_content.input'); // 「resources/views/form_content/input.php」を返す。
    }
    public function confirmation(Request $request){
        $data = $request->all();
        // $data = $request->session()->all();
        //グローバルSessionヘルパ関数でSessionを利用。セッションの値を全て取得。どういう形でデータが渡されるの？ 
        //$data = array[name1 => value1, name2 => value2, name3 => value3,....]
        //$data[name1] = value1
        return view('form_content.confirm', compact('data'));
    }
    // public function modify(Request $request){
    //     $data = $request->session()->put('title','usename', 'email', 'phoneNumber', 'content');
    //     //データをセッションへ保存する。

    // }
}
?>
