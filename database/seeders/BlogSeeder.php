<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'first_title_ar' => 'تحليل الأعمال الأكثر شيوعًا',
            'first_title_en' => 'Most Popular Business Analysis',
            'first_content_ar' => 'تحليل الأعمال هو عملية استخدام البيانات والإحصاءات والتحليل الكمي والنمذجة الرياضية لفهم الأداء التجاري وتحسينه واتخاذ القرارات الأكثر فعالية.',
            'first_content_en' => 'Business analysis is the process of using data, statistics, quantitative analysis, and mathematical modeling to understand and improve business performance and make the most effective decisions.',
            'second_title_ar' => 'من نحن وماذا تقدملك ميزة تحليل الأعمال ؟',
            'second_title_en' => 'Who are we and what does Business Analysis offer you?',
            'second_content_ar' => '<p>نحن شركة متخصصة في تقديم خدمات تحليل المواقع، حيث نستخدم أحدث الأدوات والتقنيات لتحليل المواقع وتقديم تقارير مفصلة عن أداء الموقع وتحسينه.تعتبر خدماتنا في تحليل المواقع مهمة جداً لنجاح أي موقع إلكتروني. فنحن نساعد عملائنا في فهم كيفية تفاعل زوار الموقع وفي عصر الرقمية والتكنولوجيا المتقدمة، أصبحت المواقع الإلكترونية واجهة الشركات والأعمال التجارية مع العالم الخارجي. تعكس هذه المواقع هوية العلامة التجارية وتلعب دورًا حاسمًا في تفاعل العملاء وجذبهم. إن معرفة كيفية أداء الموقع وتحسينه لتحقيق أقصى قدر من الفوائد أمر أساسي لنجاح أي عمل تجاري. هنا تأتي دور شركتنا كشريك موثوق ومتخصص في تقديم خدمات تحليل المواقع.</p>
            <strong>من نحن</strong>
            <p>نحن شركة رائدة في مجال تحليل المواقع، مكرسة لمساعدة الشركات والأفراد على فهم وتحسين أداء مواقعهم الإلكترونية. بفضل فريق متخصص من الخبراء واستخدام أحدث الأدوات والتقنيات، نحن نقدم خدمات متميزة لتحليل المواقع وتقديم تقارير مفصلة تساهم في تحقيق التفوق الرقمي.</p>
            <strong>خدماتنا</strong>
            <p>نحن شركة رائدة في مجال تحليل المواقع، مكرسة لمساعدة الشركات والأفراد على فهم وتحسين أداء مواقعهم الإلكترونية. بفضل فريق متخصص من الخبراء واستخدام أحدث الأدوات والتقنيات، نحن نقدم خدمات متميزة لتحليل المواقع وتقديم تقارير مفصلة تساهم في تحقيق التفوق الرقمي.</p>',
            'second_content_en' => '<p>We are a company specialized in providing website analysis services. We use the latest tools and technologies to analyze websites and provide detailed reports on the site’s performance and improvement. Our website analysis services are considered very important for the success of any website. We help our clients understand how website visitors interact. In the age of digital and advanced technology, websites have become the interface of companies and businesses with the outside world. These sites reflect the brand identity and play a crucial role in customer engagement and engagement. Knowing how a site is performing and optimizing it for maximum benefits is essential to the success of any business. Here comes the role of our company as a reliable partner specialized in providing website analysis services.</p>
            <strong>Who we are</strong>
            <p>We are a leading website analytics company, dedicated to helping businesses and individuals understand and improve the performance of their websites. Thanks to a specialized team of experts and the use of the latest tools and technologies, we provide distinguished services for analyzing websites and providing detailed reports that contribute to achieving digital excellence.</p>
            <strong>Our services</strong>
            <p>We are a leading website analytics company, dedicated to helping businesses and individuals understand and improve the performance of their websites. Thanks to a specialized team of experts and the use of the latest tools and technologies, we provide distinguished services for analyzing websites and providing detailed reports that contribute to achieving digital excellence.</p>',
            'photo' => 'blog_1.webp',
            'user_id' => 1,
        ]);



        Blog::create([
            'first_title_ar' => 'تصميم مواقع',
            'first_title_en' => 'Web Design',
            'first_content_ar' => 'تحليل الأعمال هو عملية استخدام البيانات والإحصاءات والتحليل الكمي والنمذجة الرياضية لفهم الأداء التجاري وتحسينه واتخاذ القرارات الأكثر فعالية.',
            'first_content_en' => 'Business analysis is the process of using data, statistics, quantitative analysis, and mathematical modeling to understand and improve business performance and make the most effective decisions.',
            'second_title_ar' => 'من نحن وماذا تقدملك ميزة تحليل الأعمال ؟',
            'second_title_en' => 'Who are we and what does Business Analysis offer you?',
            'second_content_ar' => '<p>نحن شركة متخصصة في تقديم خدمات تحليل المواقع، حيث نستخدم أحدث الأدوات والتقنيات لتحليل المواقع وتقديم تقارير مفصلة عن أداء الموقع وتحسينه.تعتبر خدماتنا في تحليل المواقع مهمة جداً لنجاح أي موقع إلكتروني. فنحن نساعد عملائنا في فهم كيفية تفاعل زوار الموقع وفي عصر الرقمية والتكنولوجيا المتقدمة، أصبحت المواقع الإلكترونية واجهة الشركات والأعمال التجارية مع العالم الخارجي. تعكس هذه المواقع هوية العلامة التجارية وتلعب دورًا حاسمًا في تفاعل العملاء وجذبهم. إن معرفة كيفية أداء الموقع وتحسينه لتحقيق أقصى قدر من الفوائد أمر أساسي لنجاح أي عمل تجاري. هنا تأتي دور شركتنا كشريك موثوق ومتخصص في تقديم خدمات تحليل المواقع.</p>
            <strong>من نحن</strong>
            <p>نحن شركة رائدة في مجال تحليل المواقع، مكرسة لمساعدة الشركات والأفراد على فهم وتحسين أداء مواقعهم الإلكترونية. بفضل فريق متخصص من الخبراء واستخدام أحدث الأدوات والتقنيات، نحن نقدم خدمات متميزة لتحليل المواقع وتقديم تقارير مفصلة تساهم في تحقيق التفوق الرقمي.</p>
            <strong>خدماتنا</strong>
            <p>نحن شركة رائدة في مجال تحليل المواقع، مكرسة لمساعدة الشركات والأفراد على فهم وتحسين أداء مواقعهم الإلكترونية. بفضل فريق متخصص من الخبراء واستخدام أحدث الأدوات والتقنيات، نحن نقدم خدمات متميزة لتحليل المواقع وتقديم تقارير مفصلة تساهم في تحقيق التفوق الرقمي.</p>',
            'second_content_en' => '<p>We are a company specialized in providing website analysis services. We use the latest tools and technologies to analyze websites and provide detailed reports on the site’s performance and improvement. Our website analysis services are considered very important for the success of any website. We help our clients understand how website visitors interact. In the age of digital and advanced technology, websites have become the interface of companies and businesses with the outside world. These sites reflect the brand identity and play a crucial role in customer engagement and engagement. Knowing how a site is performing and optimizing it for maximum benefits is essential to the success of any business. Here comes the role of our company as a reliable partner specialized in providing website analysis services.</p>
            <strong>Who we are</strong>
            <p>We are a leading website analytics company, dedicated to helping businesses and individuals understand and improve the performance of their websites. Thanks to a specialized team of experts and the use of the latest tools and technologies, we provide distinguished services for analyzing websites and providing detailed reports that contribute to achieving digital excellence.</p>
            <strong>Our services</strong>
            <p>We are a leading website analytics company, dedicated to helping businesses and individuals understand and improve the performance of their websites. Thanks to a specialized team of experts and the use of the latest tools and technologies, we provide distinguished services for analyzing websites and providing detailed reports that contribute to achieving digital excellence.</p>',
            'photo' => 'blog_2.webp',
            'user_id' => 1,
        ]);



        Blog::create([
            'first_title_ar' => 'الاستضافة السحابية',
            'first_title_en' => 'Cloud Hosting',
            'first_content_ar' => 'تحليل الأعمال هو عملية استخدام البيانات والإحصاءات والتحليل الكمي والنمذجة الرياضية لفهم الأداء التجاري وتحسينه واتخاذ القرارات الأكثر فعالية.',
            'first_content_en' => 'Business analysis is the process of using data, statistics, quantitative analysis, and mathematical modeling to understand and improve business performance and make the most effective decisions.',
            'second_title_ar' => 'من نحن وماذا تقدملك ميزة تحليل الأعمال ؟',
            'second_title_en' => 'Who are we and what does Business Analysis offer you?',
            'second_content_ar' => '<p>نحن شركة متخصصة في تقديم خدمات تحليل المواقع، حيث نستخدم أحدث الأدوات والتقنيات لتحليل المواقع وتقديم تقارير مفصلة عن أداء الموقع وتحسينه.تعتبر خدماتنا في تحليل المواقع مهمة جداً لنجاح أي موقع إلكتروني. فنحن نساعد عملائنا في فهم كيفية تفاعل زوار الموقع وفي عصر الرقمية والتكنولوجيا المتقدمة، أصبحت المواقع الإلكترونية واجهة الشركات والأعمال التجارية مع العالم الخارجي. تعكس هذه المواقع هوية العلامة التجارية وتلعب دورًا حاسمًا في تفاعل العملاء وجذبهم. إن معرفة كيفية أداء الموقع وتحسينه لتحقيق أقصى قدر من الفوائد أمر أساسي لنجاح أي عمل تجاري. هنا تأتي دور شركتنا كشريك موثوق ومتخصص في تقديم خدمات تحليل المواقع.</p>
            <strong>من نحن</strong>
            <p>نحن شركة رائدة في مجال تحليل المواقع، مكرسة لمساعدة الشركات والأفراد على فهم وتحسين أداء مواقعهم الإلكترونية. بفضل فريق متخصص من الخبراء واستخدام أحدث الأدوات والتقنيات، نحن نقدم خدمات متميزة لتحليل المواقع وتقديم تقارير مفصلة تساهم في تحقيق التفوق الرقمي.</p>
            <strong>خدماتنا</strong>
            <p>نحن شركة رائدة في مجال تحليل المواقع، مكرسة لمساعدة الشركات والأفراد على فهم وتحسين أداء مواقعهم الإلكترونية. بفضل فريق متخصص من الخبراء واستخدام أحدث الأدوات والتقنيات، نحن نقدم خدمات متميزة لتحليل المواقع وتقديم تقارير مفصلة تساهم في تحقيق التفوق الرقمي.</p>',
            'second_content_en' => '<p>We are a company specialized in providing website analysis services. We use the latest tools and technologies to analyze websites and provide detailed reports on the site’s performance and improvement. Our website analysis services are considered very important for the success of any website. We help our clients understand how website visitors interact. In the age of digital and advanced technology, websites have become the interface of companies and businesses with the outside world. These sites reflect the brand identity and play a crucial role in customer engagement and engagement. Knowing how a site is performing and optimizing it for maximum benefits is essential to the success of any business. Here comes the role of our company as a reliable partner specialized in providing website analysis services.</p>
            <strong>Who we are</strong>
            <p>We are a leading website analytics company, dedicated to helping businesses and individuals understand and improve the performance of their websites. Thanks to a specialized team of experts and the use of the latest tools and technologies, we provide distinguished services for analyzing websites and providing detailed reports that contribute to achieving digital excellence.</p>
            <strong>Our services</strong>
            <p>We are a leading website analytics company, dedicated to helping businesses and individuals understand and improve the performance of their websites. Thanks to a specialized team of experts and the use of the latest tools and technologies, we provide distinguished services for analyzing websites and providing detailed reports that contribute to achieving digital excellence.</p>',
            'photo' => 'blog_3.webp',
            'user_id' => 1,
        ]);



        Blog::create([
            'first_title_ar' => 'أنظمة تخطيط موارد المؤسسات',
            'first_title_en' => 'Enterprise Resource Planning Systems',
            'first_content_ar' => 'تحليل الأعمال هو عملية استخدام البيانات والإحصاءات والتحليل الكمي والنمذجة الرياضية لفهم الأداء التجاري وتحسينه واتخاذ القرارات الأكثر فعالية.',
            'first_content_en' => 'Business analysis is the process of using data, statistics, quantitative analysis, and mathematical modeling to understand and improve business performance and make the most effective decisions.',
            'second_title_ar' => 'من نحن وماذا تقدملك ميزة تحليل الأعمال ؟',
            'second_title_en' => 'Who are we and what does Business Analysis offer you?',
            'second_content_ar' => '<p>نحن شركة متخصصة في تقديم خدمات تحليل المواقع، حيث نستخدم أحدث الأدوات والتقنيات لتحليل المواقع وتقديم تقارير مفصلة عن أداء الموقع وتحسينه.تعتبر خدماتنا في تحليل المواقع مهمة جداً لنجاح أي موقع إلكتروني. فنحن نساعد عملائنا في فهم كيفية تفاعل زوار الموقع وفي عصر الرقمية والتكنولوجيا المتقدمة، أصبحت المواقع الإلكترونية واجهة الشركات والأعمال التجارية مع العالم الخارجي. تعكس هذه المواقع هوية العلامة التجارية وتلعب دورًا حاسمًا في تفاعل العملاء وجذبهم. إن معرفة كيفية أداء الموقع وتحسينه لتحقيق أقصى قدر من الفوائد أمر أساسي لنجاح أي عمل تجاري. هنا تأتي دور شركتنا كشريك موثوق ومتخصص في تقديم خدمات تحليل المواقع.</p>
            <strong>من نحن</strong>
            <p>نحن شركة رائدة في مجال تحليل المواقع، مكرسة لمساعدة الشركات والأفراد على فهم وتحسين أداء مواقعهم الإلكترونية. بفضل فريق متخصص من الخبراء واستخدام أحدث الأدوات والتقنيات، نحن نقدم خدمات متميزة لتحليل المواقع وتقديم تقارير مفصلة تساهم في تحقيق التفوق الرقمي.</p>
            <strong>خدماتنا</strong>
            <p>نحن شركة رائدة في مجال تحليل المواقع، مكرسة لمساعدة الشركات والأفراد على فهم وتحسين أداء مواقعهم الإلكترونية. بفضل فريق متخصص من الخبراء واستخدام أحدث الأدوات والتقنيات، نحن نقدم خدمات متميزة لتحليل المواقع وتقديم تقارير مفصلة تساهم في تحقيق التفوق الرقمي.</p>',
            'second_content_en' => '<p>We are a company specialized in providing website analysis services. We use the latest tools and technologies to analyze websites and provide detailed reports on the site’s performance and improvement. Our website analysis services are considered very important for the success of any website. We help our clients understand how website visitors interact. In the age of digital and advanced technology, websites have become the interface of companies and businesses with the outside world. These sites reflect the brand identity and play a crucial role in customer engagement and engagement. Knowing how a site is performing and optimizing it for maximum benefits is essential to the success of any business. Here comes the role of our company as a reliable partner specialized in providing website analysis services.</p>
            <strong>Who we are</strong>
            <p>We are a leading website analytics company, dedicated to helping businesses and individuals understand and improve the performance of their websites. Thanks to a specialized team of experts and the use of the latest tools and technologies, we provide distinguished services for analyzing websites and providing detailed reports that contribute to achieving digital excellence.</p>
            <strong>Our services</strong>
            <p>We are a leading website analytics company, dedicated to helping businesses and individuals understand and improve the performance of their websites. Thanks to a specialized team of experts and the use of the latest tools and technologies, we provide distinguished services for analyzing websites and providing detailed reports that contribute to achieving digital excellence.</p>',
            'photo' => 'blog_4.webp',
            'user_id' => 1,
        ]);
    }
}
