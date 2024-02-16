<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Instagram;
use App\Models\News;
use App\Models\Twitter;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        News::create([
            'date' => '1402/11/02',
            'title' => 'ماجرای تصویر تاریخی ناسا از فضانورد بدون اتصال و شناور در فضا!',
            'source' => 'خبرگزاری تسنیم',
            'text' => '"بروس مک‌کندلس دوم" فضانورد آمریکایی ۴۰ سال پیش در ۷ فوریه ۱۹۸۴ نخستین راهپیمایی فضایی بدون اتصال را انجام داد! یک عکس باورنکردنی از این رویداد مک‌کندلس را تنها و در فاصله ۲۵۰مایلی به‌صورت شناور در فضا نشان می‌داد.',
            'link' => 'https://www.tasnimnews.com/fa/news/1402/11/21/3036900/D9D8%A7%D9%88%D8%B1-%D8%AF%D8%B1-%D9%81%D8%B6%D8%A7'
            ]);

        News::create([
            'date' => '1402/10/10',
            'title' => 'رفع تصرف از ۵ هکتار از اراضی ابهر',
            'source' => 'تابناک',
            'text' => 'ه گزارش تابناک زنجان، حمیدرضا سرداریان، رئیس اداره راه و شهرسازی شهرستان‌های ابهر، خرمدره و سلطانیه ظهر امروز در جمع خبرنگاران به اهمیت و ضرورت حفاظت از اراضی ملی و دولتی اشاره کرد و اظهار کرد: تیم‌های گشت و مراقبت یگان حفاظت اراضی اداره راه و شهرسازی در شهرستان ابهر به صورت روزانه در حال گشت‌زنی برای رصد اراضی ملی و دولتی تحت پوشش هستند و در صورت مشاهده موارد مربوط به تصرف این اراضی اقدامات قانونی لازم را انجام می‌دهند.',
            'link' => 'https://www.tabnakzanjan.ir/fa/news/1153077/%D8%B1%D9%81%2%87%D8%B1'
        ]);

        Instagram::create([
            'date' => '1402/05/10',
            'post_type' => 'picture',
            'source_username' => 'ahmad_ali26',
            'text' => 'یه گرگ همیشه تنهاست',
            'link' => 'https://www.instagram.com/ahamd/'
        ]);

        Instagram::create([
            'date' => '1402/01/10',
            'post_type' => 'slide',
            'source_username' => 'snapp_official',
            'text' => 'قرعه کشی برندگان آیفون 12 پرو',
            'link' => 'https://www.instagram.com/snapp_official'
        ]);

        Twitter::create([
            'date' => '1402/09/10',
            'source_username' => 'elisa',
            'text' => 'جایزه ادایی ترین نوشیدنی میرسه به قهوه',
            'link' => 'https://twitter.com/elisa/status/17584882837281093717'
        ]);

        Twitter::create([
            'date' => '1402/11/24',
            'source_username' => 'soh3il',
            'text' => 'EP 128 - Alireza Eskandari | از تجربیات قبلی تا استارتاپ جدید
احتمالاً علیرضا اسکندری را از قسمت ۶۴ به خاطر دارین. این قسمت تا به امروز پربازدیدترین قسمت بوده، هر چند دلیل دقیقش را نمیدونم',
            'link' => 'https://twitter.com/soh3il/status/1758484967372345640'
        ]);
    }
}
