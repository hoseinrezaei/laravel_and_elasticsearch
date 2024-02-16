<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function store(Request $request){
        // validation check
        $validation = true;

        if ($validation)
        {
            $news = News::create([
                'date' => '1402/11/02',
                'title' => 'ماجرای تصویر تاریخی ناسا از فضانورد بدون اتصال و شناور در فضا!',
                'source' => 'خبرگزاری تسنیم',
                'text' => '"بروس مک‌کندلس دوم" فضانورد آمریکایی ۴۰ سال پیش در ۷ فوریه ۱۹۸۴ نخستین راهپیمایی فضایی بدون اتصال را انجام داد! یک عکس باورنکردنی از این رویداد مک‌کندلس را تنها و در فاصله ۲۵۰مایلی به‌صورت شناور در فضا نشان می‌داد.',
                'link' => 'https://www.tasnimnews.com/fa/news/1402/11/21/3036900/D9D8%A7%D9%88%D8%B1-%D8%AF%D8%B1-%D9%81%D8%B6%D8%A7'
            ]);
            $data = [
                'message' => 'News create successful',
                'id' => $news->id
            ];

            return response()->json($data, 200);
        }

        $data = [
            'message' => 'Error! bad request',
            'id' => null
        ];

        return response()->json($data, 400);
    }
}
