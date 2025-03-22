<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email:rfc,dns',],
            'tell1' => ['required', 'numeric', 'digits_between:3,4'],
            'tell2' => ['required', 'numeric', 'digits_between:4,4'],
            'tell3' => ['required', 'numeric', 'digits_between:4,4'],
            'address' => ['required', 'string', 'max:255'],
            'building' => ['nullable', 'string', 'max:255'],
            'category_id' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => '姓を入力してください',
            'first_name.required' => '名を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tell1.required' => '電話番号を入力してください',
            'tell2.required' => '電話番号を入力してください',
            'tell3.required' => '電話番号を入力してください',
            'address.required' => '住所を入力してください',
            'category_id.integer' => 'お問い合わせの種類を選択してください',
        ];
    }
}
