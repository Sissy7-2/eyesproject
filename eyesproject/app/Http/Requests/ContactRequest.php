<?php
namespace App\Http\Requests;
 
use Illuminate\Foundation\Http\FormRequest;
 
class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'type' => 'required',
            'type.*' => 'in:プロジェクトについて,疑問・質問,その他',
            'name' => 'required|max:10',
            'email' => 'required|email',
            'gender' => 'required|in:男,女',
            'body' => 'required|max:1000'
        ];
    }
    public function attributes() {
        return [
            'type' => 'お問い合わせ種類',
            'name' => 'お名前',
            'email' => 'メールアドレス',
            'gender' => '性別',
            'body' => '内容'
        ];
    }
}