<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Product::create([
            'name' => $name = 'گوجه',
            'slug' => make_slug($name),
            'details' => 'گوجه فرنگی یا بادنجان رومی (نام علمی: Solanum lycopersicum) یکی از سبزیجات و با میوه‌ای سرخ‌رنگ و خوش‌بو و آبدار است.',
            'price' => 12300,
            'description' => 'این میوه امروزه به روش‌های مختلفی، به‌طور خام یا به‌عنوان یکی از مواد لازم برای تهیهٔ غذا، انواع سس و نوشیدنی مصرف می‌شود و بخش مهمی از رژیم غذایی مردم بسیاری از کشورها را تشکیل می‌دهد. کشت و پرورش این گیاه به‌طور کلی، مساحتی حدود سه میلیون هکتار را به خود اختصاص داده‌است، که نزدیک یک‌سوم کل مساحت مختص به کشت تره‌بار در جهان است.[۱]

            با وجود این که گوجه فرنگی در علم گیاه‌شناسی یک میوه تلقی می‌شود، در علم کشاورزی اغلب به‌عنوان تره‌بار (سبزیجات) شناخته می‌شود.

            گوجه فرنگی به تیرهٔ بادنجانیان تعلق دارد و از گیاهان چندساله است.[۲]

            به علت اهمیت اقتصادی، این گیاه موضوع تحقیق و پژوهش‌های بسیاری قرار دارد و در علم ژنتیک به‌عنوان یکی از گیاهان الگو شناخته می‌شود. تحقیقات انجام‌شده بر این گیاه در سال ۱۹۹۰ به تولید نخستین نوع تراریختهٔ مجاز برای مصرف و تجارت در ایالات متحده آمریکا انجامید.[۱]',
            'quantity' => 10,
            'featured' => false
        ])->categories()->attach(1);

        $product2 = Product::create([
            'name' => $name = 'توت فرنگی',
            'slug' => make_slug($name),
            'details' => 'گوجه فرنگی یا بادنجان رومی (نام علمی: Solanum lycopersicum) یکی از سبزیجات و با میوه‌ای سرخ‌رنگ و خوش‌بو و آبدار است.',
            'price' => 12300,
            'description' => 'این میوه امروزه به روش‌های مختلفی، به‌طور خام یا به‌عنوان یکی از مواد لازم برای تهیهٔ غذا، انواع سس و نوشیدنی مصرف می‌شود و بخش مهمی از رژیم غذایی مردم بسیاری از کشورها را تشکیل می‌دهد. کشت و پرورش این گیاه به‌طور کلی، مساحتی حدود سه میلیون هکتار را به خود اختصاص داده‌است، که نزدیک یک‌سوم کل مساحت مختص به کشت تره‌بار در جهان است.[۱]

            با وجود این که گوجه فرنگی در علم گیاه‌شناسی یک میوه تلقی می‌شود، در علم کشاورزی اغلب به‌عنوان تره‌بار (سبزیجات) شناخته می‌شود.

            گوجه فرنگی به تیرهٔ بادنجانیان تعلق دارد و از گیاهان چندساله است.[۲]

            به علت اهمیت اقتصادی، این گیاه موضوع تحقیق و پژوهش‌های بسیاری قرار دارد و در علم ژنتیک به‌عنوان یکی از گیاهان الگو شناخته می‌شود. تحقیقات انجام‌شده بر این گیاه در سال ۱۹۹۰ به تولید نخستین نوع تراریختهٔ مجاز برای مصرف و تجارت در ایالات متحده آمریکا انجامید.[۱]',
            'quantity' => 10,
            'featured' => false
        ])->categories()->attach(1);

        $product3 = Product::create([
            'name' => $name = 'فلفل دلمه ای',
            'slug' => make_slug($name),
            'details' => 'گوجه فرنگی یا بادنجان رومی (نام علمی: Solanum lycopersicum) یکی از سبزیجات و با میوه‌ای سرخ‌رنگ و خوش‌بو و آبدار است.',
            'price' => 12300,
            'description' => 'این میوه امروزه به روش‌های مختلفی، به‌طور خام یا به‌عنوان یکی از مواد لازم برای تهیهٔ غذا، انواع سس و نوشیدنی مصرف می‌شود و بخش مهمی از رژیم غذایی مردم بسیاری از کشورها را تشکیل می‌دهد. کشت و پرورش این گیاه به‌طور کلی، مساحتی حدود سه میلیون هکتار را به خود اختصاص داده‌است، که نزدیک یک‌سوم کل مساحت مختص به کشت تره‌بار در جهان است.[۱]

            با وجود این که گوجه فرنگی در علم گیاه‌شناسی یک میوه تلقی می‌شود، در علم کشاورزی اغلب به‌عنوان تره‌بار (سبزیجات) شناخته می‌شود.

            گوجه فرنگی به تیرهٔ بادنجانیان تعلق دارد و از گیاهان چندساله است.[۲]

            به علت اهمیت اقتصادی، این گیاه موضوع تحقیق و پژوهش‌های بسیاری قرار دارد و در علم ژنتیک به‌عنوان یکی از گیاهان الگو شناخته می‌شود. تحقیقات انجام‌شده بر این گیاه در سال ۱۹۹۰ به تولید نخستین نوع تراریختهٔ مجاز برای مصرف و تجارت در ایالات متحده آمریکا انجامید.[۱]',
            'quantity' => 10,
            'featured' => false
        ])->categories()->attach(4);

        $product4 = Product::create([
            'name' => $name = 'لوبیا سبز',
            'slug' => make_slug($name),
            'details' => 'گوجه فرنگی یا بادنجان رومی (نام علمی: Solanum lycopersicum) یکی از سبزیجات و با میوه‌ای سرخ‌رنگ و خوش‌بو و آبدار است.',
            'price' => 12300,
            'description' => 'این میوه امروزه به روش‌های مختلفی، به‌طور خام یا به‌عنوان یکی از مواد لازم برای تهیهٔ غذا، انواع سس و نوشیدنی مصرف می‌شود و بخش مهمی از رژیم غذایی مردم بسیاری از کشورها را تشکیل می‌دهد. کشت و پرورش این گیاه به‌طور کلی، مساحتی حدود سه میلیون هکتار را به خود اختصاص داده‌است، که نزدیک یک‌سوم کل مساحت مختص به کشت تره‌بار در جهان است.[۱]

            با وجود این که گوجه فرنگی در علم گیاه‌شناسی یک میوه تلقی می‌شود، در علم کشاورزی اغلب به‌عنوان تره‌بار (سبزیجات) شناخته می‌شود.

            گوجه فرنگی به تیرهٔ بادنجانیان تعلق دارد و از گیاهان چندساله است.[۲]

            به علت اهمیت اقتصادی، این گیاه موضوع تحقیق و پژوهش‌های بسیاری قرار دارد و در علم ژنتیک به‌عنوان یکی از گیاهان الگو شناخته می‌شود. تحقیقات انجام‌شده بر این گیاه در سال ۱۹۹۰ به تولید نخستین نوع تراریختهٔ مجاز برای مصرف و تجارت در ایالات متحده آمریکا انجامید.[۱]',
            'quantity' => 10,
            'featured' => false
        ])->categories()->attach(4);

        $product5 = Product::create([
            'name' => $name = 'کلم بنفش',
            'slug' => make_slug($name),
            'details' => 'گوجه فرنگی یا بادنجان رومی (نام علمی: Solanum lycopersicum) یکی از سبزیجات و با میوه‌ای سرخ‌رنگ و خوش‌بو و آبدار است.',
            'price' => 12300,
            'description' => 'این میوه امروزه به روش‌های مختلفی، به‌طور خام یا به‌عنوان یکی از مواد لازم برای تهیهٔ غذا، انواع سس و نوشیدنی مصرف می‌شود و بخش مهمی از رژیم غذایی مردم بسیاری از کشورها را تشکیل می‌دهد. کشت و پرورش این گیاه به‌طور کلی، مساحتی حدود سه میلیون هکتار را به خود اختصاص داده‌است، که نزدیک یک‌سوم کل مساحت مختص به کشت تره‌بار در جهان است.[۱]

            با وجود این که گوجه فرنگی در علم گیاه‌شناسی یک میوه تلقی می‌شود، در علم کشاورزی اغلب به‌عنوان تره‌بار (سبزیجات) شناخته می‌شود.

            گوجه فرنگی به تیرهٔ بادنجانیان تعلق دارد و از گیاهان چندساله است.[۲]

            به علت اهمیت اقتصادی، این گیاه موضوع تحقیق و پژوهش‌های بسیاری قرار دارد و در علم ژنتیک به‌عنوان یکی از گیاهان الگو شناخته می‌شود. تحقیقات انجام‌شده بر این گیاه در سال ۱۹۹۰ به تولید نخستین نوع تراریختهٔ مجاز برای مصرف و تجارت در ایالات متحده آمریکا انجامید.[۱]',
            'quantity' => 10,
            'featured' => false
        ])->categories()->attach(4);

        $product6 = Product::create([
            'name' => $name = 'اب هویج',
            'slug' => make_slug($name),
            'details' => 'گوجه فرنگی یا بادنجان رومی (نام علمی: Solanum lycopersicum) یکی از سبزیجات و با میوه‌ای سرخ‌رنگ و خوش‌بو و آبدار است.',
            'price' => 12300,
            'description' => 'این میوه امروزه به روش‌های مختلفی، به‌طور خام یا به‌عنوان یکی از مواد لازم برای تهیهٔ غذا، انواع سس و نوشیدنی مصرف می‌شود و بخش مهمی از رژیم غذایی مردم بسیاری از کشورها را تشکیل می‌دهد. کشت و پرورش این گیاه به‌طور کلی، مساحتی حدود سه میلیون هکتار را به خود اختصاص داده‌است، که نزدیک یک‌سوم کل مساحت مختص به کشت تره‌بار در جهان است.[۱]

            با وجود این که گوجه فرنگی در علم گیاه‌شناسی یک میوه تلقی می‌شود، در علم کشاورزی اغلب به‌عنوان تره‌بار (سبزیجات) شناخته می‌شود.

            گوجه فرنگی به تیرهٔ بادنجانیان تعلق دارد و از گیاهان چندساله است.[۲]

            به علت اهمیت اقتصادی، این گیاه موضوع تحقیق و پژوهش‌های بسیاری قرار دارد و در علم ژنتیک به‌عنوان یکی از گیاهان الگو شناخته می‌شود. تحقیقات انجام‌شده بر این گیاه در سال ۱۹۹۰ به تولید نخستین نوع تراریختهٔ مجاز برای مصرف و تجارت در ایالات متحده آمریکا انجامید.[۱]',
            'quantity' => 10,
            'featured' => false
        ])->categories()->attach(2);

        $product7 = Product::create([
            'name' => $name = 'هلو خشک شده',
            'slug' => make_slug($name),
            'details' => 'گوجه فرنگی یا بادنجان رومی (نام علمی: Solanum lycopersicum) یکی از سبزیجات و با میوه‌ای سرخ‌رنگ و خوش‌بو و آبدار است.',
            'price' => 12300,
            'description' => 'این میوه امروزه به روش‌های مختلفی، به‌طور خام یا به‌عنوان یکی از مواد لازم برای تهیهٔ غذا، انواع سس و نوشیدنی مصرف می‌شود و بخش مهمی از رژیم غذایی مردم بسیاری از کشورها را تشکیل می‌دهد. کشت و پرورش این گیاه به‌طور کلی، مساحتی حدود سه میلیون هکتار را به خود اختصاص داده‌است، که نزدیک یک‌سوم کل مساحت مختص به کشت تره‌بار در جهان است.[۱]

            با وجود این که گوجه فرنگی در علم گیاه‌شناسی یک میوه تلقی می‌شود، در علم کشاورزی اغلب به‌عنوان تره‌بار (سبزیجات) شناخته می‌شود.

            گوجه فرنگی به تیرهٔ بادنجانیان تعلق دارد و از گیاهان چندساله است.[۲]

            به علت اهمیت اقتصادی، این گیاه موضوع تحقیق و پژوهش‌های بسیاری قرار دارد و در علم ژنتیک به‌عنوان یکی از گیاهان الگو شناخته می‌شود. تحقیقات انجام‌شده بر این گیاه در سال ۱۹۹۰ به تولید نخستین نوع تراریختهٔ مجاز برای مصرف و تجارت در ایالات متحده آمریکا انجامید.[۱]',
            'quantity' => 10,
            'featured' => false
        ])->categories()->attach(3);

        $product8 = Product::create([
            'name' => $name = 'اب سیب',
            'slug' => make_slug($name),
            'details' => 'گوجه فرنگی یا بادنجان رومی (نام علمی: Solanum lycopersicum) یکی از سبزیجات و با میوه‌ای سرخ‌رنگ و خوش‌بو و آبدار است.',
            'price' => 12300,
            'description' => 'این میوه امروزه به روش‌های مختلفی، به‌طور خام یا به‌عنوان یکی از مواد لازم برای تهیهٔ غذا، انواع سس و نوشیدنی مصرف می‌شود و بخش مهمی از رژیم غذایی مردم بسیاری از کشورها را تشکیل می‌دهد. کشت و پرورش این گیاه به‌طور کلی، مساحتی حدود سه میلیون هکتار را به خود اختصاص داده‌است، که نزدیک یک‌سوم کل مساحت مختص به کشت تره‌بار در جهان است.[۱]

            با وجود این که گوجه فرنگی در علم گیاه‌شناسی یک میوه تلقی می‌شود، در علم کشاورزی اغلب به‌عنوان تره‌بار (سبزیجات) شناخته می‌شود.

            گوجه فرنگی به تیرهٔ بادنجانیان تعلق دارد و از گیاهان چندساله است.[۲]

            به علت اهمیت اقتصادی، این گیاه موضوع تحقیق و پژوهش‌های بسیاری قرار دارد و در علم ژنتیک به‌عنوان یکی از گیاهان الگو شناخته می‌شود. تحقیقات انجام‌شده بر این گیاه در سال ۱۹۹۰ به تولید نخستین نوع تراریختهٔ مجاز برای مصرف و تجارت در ایالات متحده آمریکا انجامید.[۱]',
            'quantity' => 10,
            'featured' => false
        ])->categories()->attach(2);

        $product9 = Product::create([
            'name' => $name = 'اب کرفس',
            'slug' => make_slug($name),
            'details' => 'گوجه فرنگی یا بادنجان رومی (نام علمی: Solanum lycopersicum) یکی از سبزیجات و با میوه‌ای سرخ‌رنگ و خوش‌بو و آبدار است.',
            'price' => 12300,
            'description' => 'این میوه امروزه به روش‌های مختلفی، به‌طور خام یا به‌عنوان یکی از مواد لازم برای تهیهٔ غذا، انواع سس و نوشیدنی مصرف می‌شود و بخش مهمی از رژیم غذایی مردم بسیاری از کشورها را تشکیل می‌دهد. کشت و پرورش این گیاه به‌طور کلی، مساحتی حدود سه میلیون هکتار را به خود اختصاص داده‌است، که نزدیک یک‌سوم کل مساحت مختص به کشت تره‌بار در جهان است.[۱]

            با وجود این که گوجه فرنگی در علم گیاه‌شناسی یک میوه تلقی می‌شود، در علم کشاورزی اغلب به‌عنوان تره‌بار (سبزیجات) شناخته می‌شود.

            گوجه فرنگی به تیرهٔ بادنجانیان تعلق دارد و از گیاهان چندساله است.[۲]

            به علت اهمیت اقتصادی، این گیاه موضوع تحقیق و پژوهش‌های بسیاری قرار دارد و در علم ژنتیک به‌عنوان یکی از گیاهان الگو شناخته می‌شود. تحقیقات انجام‌شده بر این گیاه در سال ۱۹۹۰ به تولید نخستین نوع تراریختهٔ مجاز برای مصرف و تجارت در ایالات متحده آمریکا انجامید.[۱]',
            'quantity' => 10,
            'featured' => false
        ])->categories()->attach(2);

        $product10 = Product::create([
            'name' => $name = 'هلو',
            'slug' => make_slug($name),
            'details' => 'گوجه فرنگی یا بادنجان رومی (نام علمی: Solanum lycopersicum) یکی از سبزیجات و با میوه‌ای سرخ‌رنگ و خوش‌بو و آبدار است.',
            'price' => 12300,
            'description' => 'این میوه امروزه به روش‌های مختلفی، به‌طور خام یا به‌عنوان یکی از مواد لازم برای تهیهٔ غذا، انواع سس و نوشیدنی مصرف می‌شود و بخش مهمی از رژیم غذایی مردم بسیاری از کشورها را تشکیل می‌دهد. کشت و پرورش این گیاه به‌طور کلی، مساحتی حدود سه میلیون هکتار را به خود اختصاص داده‌است، که نزدیک یک‌سوم کل مساحت مختص به کشت تره‌بار در جهان است.[۱]

            با وجود این که گوجه فرنگی در علم گیاه‌شناسی یک میوه تلقی می‌شود، در علم کشاورزی اغلب به‌عنوان تره‌بار (سبزیجات) شناخته می‌شود.

            گوجه فرنگی به تیرهٔ بادنجانیان تعلق دارد و از گیاهان چندساله است.[۲]

            به علت اهمیت اقتصادی، این گیاه موضوع تحقیق و پژوهش‌های بسیاری قرار دارد و در علم ژنتیک به‌عنوان یکی از گیاهان الگو شناخته می‌شود. تحقیقات انجام‌شده بر این گیاه در سال ۱۹۹۰ به تولید نخستین نوع تراریختهٔ مجاز برای مصرف و تجارت در ایالات متحده آمریکا انجامید.[۱]',
            'quantity' => 10,
            'featured' => false
        ])->categories()->attach(1);

        $product11 = Product::create([
            'name' => $name = 'موز',
            'slug' => make_slug($name),
            'details' => 'گوجه فرنگی یا بادنجان رومی (نام علمی: Solanum lycopersicum) یکی از سبزیجات و با میوه‌ای سرخ‌رنگ و خوش‌بو و آبدار است.',
            'price' => 12300,
            'description' => 'این میوه امروزه به روش‌های مختلفی، به‌طور خام یا به‌عنوان یکی از مواد لازم برای تهیهٔ غذا، انواع سس و نوشیدنی مصرف می‌شود و بخش مهمی از رژیم غذایی مردم بسیاری از کشورها را تشکیل می‌دهد. کشت و پرورش این گیاه به‌طور کلی، مساحتی حدود سه میلیون هکتار را به خود اختصاص داده‌است، که نزدیک یک‌سوم کل مساحت مختص به کشت تره‌بار در جهان است.[۱]

            با وجود این که گوجه فرنگی در علم گیاه‌شناسی یک میوه تلقی می‌شود، در علم کشاورزی اغلب به‌عنوان تره‌بار (سبزیجات) شناخته می‌شود.

            گوجه فرنگی به تیرهٔ بادنجانیان تعلق دارد و از گیاهان چندساله است.[۲]

            به علت اهمیت اقتصادی، این گیاه موضوع تحقیق و پژوهش‌های بسیاری قرار دارد و در علم ژنتیک به‌عنوان یکی از گیاهان الگو شناخته می‌شود. تحقیقات انجام‌شده بر این گیاه در سال ۱۹۹۰ به تولید نخستین نوع تراریختهٔ مجاز برای مصرف و تجارت در ایالات متحده آمریکا انجامید.[۱]',
            'quantity' => 10,
            'featured' => false
        ])->categories()->attach(1);
    }
}
