<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInquiryRequest;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function showForm(Request $request)
    {
        // 過去の入力を保持してフォームを表示
        return view('inquiry.form', ['data' => $request->old()]);
    }

    public function confirm(Request $request)
    {
        // バリデーションルールを適用
        $validatedData = $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'gender' => 'required|string|in:male,female,other',
            'email' => 'required|email',
            'tel' => 'required|regex:/^[0-9]{10,11}$/',
            'address' => 'required|string',
            'inquiry_type' => 'required|string',
            'content' => 'required|string',
        ]);

        // データの確認画面表示
        return view('inquiry.confirm', ['data' => $validatedData]);
    }

    public function submit(Request $request)
    {
        // データを取得
        $data = json_decode($request->input('data'), true);

        if (!$data) {
            return redirect()->route('inquiry.form')->withErrors('無効なデータです');
        }

        // 問い合わせデータを保存
        \DB::table('contacts')->insert([
            'last_name' => $data['last_name'],
            'first_name' => $data['first_name'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'tel' => $data['tel'],
            'address' => $data['address'],
            'building_name' => $data['building_name'] ?? '',
            'inquiry_type' => $data['inquiry_type'],
            'content' => $data['content']
        ]);

        // サンクスページへリダイレクト
        return redirect()->route('inquiry.thanks');
    }

    public function showThanks()
    {
        return view('inquiry.thanks');
    }
}