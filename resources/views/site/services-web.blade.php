@extends('site.layouts.master')



@section('title')
    @if (App::getLocale() == 'ar')
    شركة رايتو |  أنظمة برمجية متقدمة ومبتكرة
    @else
    Raito Company | Advanced And Innovative Software Systems
    @endif
@endsection



@section('meta-description')
    <meta name="description" content="اكتشف أنظمة برمجية متقدمة ومبتكرة تلبي احتياجات عملك مع رايتو، نحن نقدم حلولًا مخصصة لتطوير وتنفيذ أنظمة برمجية متكاملة لتحسين كفاءة عملك.">
@endsection



@section('meta-keywords')
    <meta name="keywords" content="مع رايتو أحصل على حلول برمجية وأنظمة برمجية مبتكرة ">
@endsection



@section('content')
     <section class="component-hadeer">
      <div class="container">
          <h2 class="page-title pt-5">  
          تصميم مواقع الكترونية
          </h2>
          <p class="pt-3 text-white fs-5 col-md-8">
            نصمم مواقع إلكترونية استثنائية تعكس هويتك، وتوفر تجربة متميزة للمستخدمين.
          </p>
      </div>
     </section>
     <!---->
     <section class="component-content pt-5 pb-5">
        <div class="container">
          <div class="row mx-0 row-cols-lg-2 row-cols-1 g-4 justify-content-center align-items-center">
            <div class="col">
              <h2 class="title-title">  
                نبذة عن تصميم المواقع الإلكترونية في شركتنا

              </h2>
              <p class="pt-3 p-decerption">
                فريقنا المتخصص في تصميم المواقع يتمتع بالمعرفة والخبرة الواسعة في مجال التصميم وتطوير المواقع الإلكترونية، كما نعمل على فهم رؤية وأهداف عملائنا بدقة، ونحن نجعلها ركيزة أساسية في عملية التصميم.

              </p>
              <p class="pt-3 p-decerption">
                نؤمن بأهمية تجربة المستخدم، ولذلك نضعها في الاعتبار في كل خطوة من خطوات عملية التصميم، كما نسعى جاهدين لتوفير تجربة مريحة وسلسة للمستخدمين، من خلال واجهات مستخدم جذابة وتصميم فعّال يسهل التنقل والوصول إلى المحتوى المرغوب.


              </p>
            </div>
            <div class="col">
              <img class="w-100 img-system" src="{{asset('public/assets_site/img/web-design.png') }}" alt="management">
            </div>
            
          </div>
         
            
        </div>
     </section>
     <!---->
     
     <!---->
      <section class="component-work-accounting pt-5 pb-5 mt-5">
        <div class="container">
          <div class="row mx-0 justify-content-center">
            <div class="col-md-8 text-center">
              <h2 class="title-title text-center"> 
                ما هي أهم الخدمات التي تدعمها رايتو لتصميم المواقع؟
              </h2>
              <p class="pt-3 p-decerption">في Raito، نقدم مجموعة متنوعة من الخدمات التي تدعم تصميم المواقع الإلكترونية بشكل شامل، كما نسعى جاهدين لتلبية احتياجات عملائنا وتحقيق رؤيتهم من خلال توفير الحلول المبتكرة والمخصصة، إليك بعض الخدمات الرئيسية التي نقدمها:
              </p>
            </div>
          </div>
         
          <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 pt-5 mt-3">
             <div class="col d-flex">
                <div class="about-item-best text-center">
                  <img src="{{asset('public/assets_site/img/web1.svg') }}" alt="Invoice">
                  <div class="px-3">
                    <h6 class="title-title">  تصميم وتطوير المواقع



                    </h6>
                    <p class="p-decerption pt-1">
                      نقوم بتصميم وتطوير مواقع إلكترونية مبتكرة وجذابة تعكس هوية ورؤية عملك، كما نستخدم أحدث التقنيات والأدوات لضمان مرونة وأداء ممتاز للموقع.
                    
                    </p>
                  </div>
                </div>
             </div>
             <!---->
             <div class="col d-flex">
              <div class="about-item-best text-center">
                <img src="{{asset('public/assets_site/img/web2.svg') }}" alt="Technical Support">
                <div class="px-3">
                  <h6 class="title-title">       
                    تصميم متجاوب

                  </h6>
                  <p class="p-decerption pt-1">
                    نحن نضمن أن تكون المواقع التي نصممها متجاوبة وتعمل بشكل مثالي على جميع الأجهزة والشاشات، بما في ذلك الهواتف المحمولة والأجهزة اللوحية وأجهزة سطح المكتب.
                  </p>
                </div>
              </div>
             </div>
           <!---->
              <!---->
              <div class="col d-flex">
                <div class="about-item-best text-center">
                  <img src="{{asset('public/assets_site/img/web4.svg') }}" alt="Technical Support">
                  <div class="px-3">
                    <h6 class="title-title">       
                      تجربة المستخدم وتصميم الواجهة




                    </h6>
                    <p class="p-decerption pt-1">
                      نحن نعتبر تجربة المستخدم (UX) وتصميم واجهة المستخدم (UI) عناصر حاسمة في تصميم المواقع، كما نهدف إلى توفير تجربة استخدام مريحة وسلسة للمستخدم، مع واجهات جذابة وتنظيمية تسهل التنقل والتفاعل.
                    </p>
                  </div>
                </div>
             </div>
             <!---->
              <!---->
              <div class="col d-flex">
                <div class="about-item-best text-center">
                  <img src="{{asset('public/assets_site/img/web3.svg') }}" alt="Technical Support">
                  <div class="px-3">
                    <h6 class="title-title">       
                      تحسين محركات البحث (SEO)





                    </h6>
                    <p class="p-decerption pt-1">
                      نحن نعتبر العثور على الموقع من خلال محركات البحث أمرًا حاسمًا لنجاح شركتك؛ لذلك نقوم بتحسين الموقع لمحركات البحث لزيادة الرؤية وتحقيق تصنيف أفضل في نتائج البحث.

                    
                    </p>
                  </div>
                </div>
             </div>
             <!---->
             <!---->
             <div class="col d-flex">
              <div class="about-item-best text-center">
                <img src="{{asset('public/assets_site/img/web8.svg') }}" alt="Technical Support">
                <div class="px-3">
                  <h6 class="title-title">       
                    تطوير الواجهات




                  </h6>
                  <p class="p-decerption pt-1">
                    نحن نقدم خدمات تطوير الواجهات لتوفير وظائف متقدمة وتجربة تفاعلية للمستخدمين، نحن نهتم بتوفير أدوات قوية وتكامل مع أنظمة إدارة المحتوى والتطبيقات الخارجية.
                  
                  </p>
                  </div>
              </div>
           </div>
           <!---->
           <!---->
           <div class="col d-flex">
            <div class="about-item-best text-center">
              <img src="{{asset('public/assets_site/img/web5.svg') }}" alt="Technical Support">
              <div class="px-3">
                <h6 class="title-title">       
                  الاستشارات والدعم


                </h6>
                <p class="p-decerption pt-1">
                  نحن نقدم استشارات شاملة لعملائنا فيما يتعلق بتصميم المواقع الإلكترونية واحتياجاتهم الفردية، كما نوفر دعماً مستمراً بعد إطلاق الموقع لضمان سلامة وأمان وأداء الموقع.


                </p>
                </div>
            </div>
           </div>
         <!---->
          </div>
        </div>
      </section>
     <!---->
     <div class="mt-5 pb-5">
      <section class="component-adver">
       
        <div class="container">
           <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
              <div class="col defintion-abver">
                <h6> 

                  صمم موقع إلكتروني

               </h6>
               <p class="pt-3 mb-0">
                صمم موقع إلكتروني يحقق هدفك التجاري ويساهم في نمو عملك.              
              </p>
              </div>
              <div class="col text-start mt-md-0 mt-5">
               <a href="#" class="p-3 px-4 button-stert">    تواصل معنا الآن
              </a>
              </div>
           </div>
        </div>
     </section>
     </div>
     <!---->
     <section class="mt-5 pt-5 pb-5">
      <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-1 g-4 justify-content-center align-items-center">
          <div class="col">
            <h2 class="title-title">  
              خطوات تصميم المواقع الإلكترونية من خلال رايتو

            </h2>
            <ul class="pt-3 ">
              <li class="pt-3 p-decerption">تحديد الأهداف</li>
              <li class="pt-3 p-decerption">إعداد خريطة الموقع (Sitemap)</li>
              <li class="pt-3 p-decerption">تصميم واجهة المستخدم (UI Design)</li>
              <li class="pt-3 p-decerption">تصميم تجربة المستخدم (UX Design)</li>
              <li class="pt-3 p-decerption">تطوير الموقع
              </li>
              <li class="pt-3 p-decerption">إضافة المحتوى

              </li>
              <li class="pt-3 p-decerption"> اختبار وتحسين

              </li>
              <li class="pt-3 p-decerption"> نشر الموقع

              </li>
              <li class="pt-3 p-decerption"> الصيانة والتحديث

              </li>
            </ul>
            
          </div>
          <div class="col">
            <img class="w-100 img-system" src="{{asset('public/assets_site/img/web-invo.png') }}" alt="management">
          </div>
          
        </div>
      </div>
     </section>
     <!---->
     <section class="component-best mt-5 pt-5 pb-5">
      <div class="container">
        <h2 class="title-title">  
          
          
          لماذا تعتمد على رايتو في تصميم المواقع؟
        </h2>
          <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-3 pt-5">
            <div class="col d-flex">
                <div class="about-item-best">
                  <img src="{{asset('public/assets_site/img/Technical-Support.webp') }}" alt="Technical Support">
                  <div class="px-3">
                    <h6 class="title-title ">   دعم فني مجاناً</h6>
                    <p class="p-decerption pt-1">نقدم دعمًا فنيًا مجانيًا لعملائنا، وفريق الدعم لدينا متاح للمساعدة في حل أي مشكلة أو استفسار يواجهه العملاء؛ فنحن نولي أهمية كبيرة لتوفير تجربة عملاء مرضية ونسعى جاهدين لضمان رضاهم الكامل.
                    </p>
                  </div>
                  
               
               </div>
            </div>
            <!---->
            <div class="col d-flex">
              <div class="about-item-best">
                <img src="{{asset('public/assets_site/img/experience.webp') }}" alt="experience">
                <div class="px-3">
                  <h6 class="title-title ">     تجربة مخصصة</h6>
                  <p class="p-decerption pt-1"> 
                    نفهم أن كل شركة لديها احتياجات ومتطلبات فريدة؛ ولذلك نعمل على تصميم وتنفيذ حلول مخصصة تناسب تلك الاحتياجات بدقة، كما نعمل عن كثب مع العملاء لفهم متطلباتهم وتقديم الحلول التي تلبي تلك المتطلبات بالضبط.
  
                  </p>
                </div>
                
             
             </div>
          </div>
            <!---->
             <!---->
             <div class="col d-flex">
              <div class="about-item-best">
                <img src="{{asset('public/assets_site/img/Easy.webp') }}" alt="Easy">
                <div class="px-3">
                  <h6 class="title-title ">      واجهة سهلة الاستخدام
                  </h6>
                  <p class="p-decerption pt-1"> 
                    نهتم بتوفير واجهات مستخدم بديهية وسهلة الاستخدام تسهل عملية التنقل والاستفادة القصوى من المميزات التي تدعمها، يتيح ذلك للمستخدمين الجدد التكيف بسرعة ويساعدهم على تحقيق أقصى استفادة من الحلول التي نقدمها.
  
                  </p>
                </div>
                
             
             </div>
             </div>
            <!---->
            <!---->
            <div class="col d-flex">
              <div class="about-item-best">
                <img src="{{asset('public/assets_site/img/Fair-price.webp') }}" alt="Easy">
                <div class="px-3">
                  <h6 class="title-title ">    سعر عادل
                  </h6>
                  <p class="p-decerption pt-1"> 
                    نلتزم بتوفير أسعار عادلة ومناسبة للأنظمة البرمجية التي نقدمها؛  فنحن نقدر أهمية توفير قيمة ممتازة لعملائنا، ولذلك نحن نضع أسعارنا بعناية لتكون تنافسية وملائمة لمتطلبات السوق وميزانية العملاء.
  
                  </p>
                </div>
                
             
             </div>
             </div>
            <!---->
            <!---->
            <div class="col d-flex">
              <div class="about-item-best">
                <img src="{{asset('public/assets_site/img/Time.webp') }}" alt="Time ">
                <div class="px-3">
                  <h6 class="title-title ">    توفير الوقت والجهد
                  </h6>
                  <p class="p-decerption pt-1"> 
                    من خلال حلولنا وبرامجنا المتقدمة نساعد عملائنا على توفير الوقت والجهد، فنحن نقوم بتبسيط العمليات، وتحسين التنظيم، وتوفير أدوات وميزات تسهل إدارة الأعمال، هذا يسمح للعملاء بتحقيق كفاءة أعلى وتحقيق نتائج أفضل بأقل جهد.
  
                  </p>
                </div>
                
             
             </div>
             </div>
            <!---->
            <!---->
            <div class="col d-flex">
              <div class="about-item-best">
                <img src="{{asset('public/assets_site/img/Continuous.webp') }}" alt="Continuous">
                <div class="px-3">
                  <h6 class="title-title ">   تحديثات وتطوير مستمر
                  </h6>
                  <p class="p-decerption pt-1"> 
                    نلتزم بتطوير وتحسين أنظمتنا المحاسبية بشكل مستمر، كما نتابع التطورات التكنولوجية ونستمع إلى ملاحظات العملاء ومتطلبات السوق لتحديث وتطوير برامجنا بشكل منتظم. يتيح ذلك للعملاء الاستفادة من التحديثات الجديدة والميزات المحسّنة والتكنولوجيات الأحدث، مما يساعدهم على الابتكار والبقاء في المقدمة في سوقهم.
  
                  </p>
                </div>
                
             
             </div>
             </div>
            <!---->
         </div>
      </div>
    </section>
     <!---->
     @endsection