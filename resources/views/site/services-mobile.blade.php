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
          تصميم  تطبيقات الجوال
          </h2>
          <p class="pt-3 text-white fs-5 col-md-8">
            عالم جديد من التفاعل والابتكار مع تصميماتنا الفريدة والمميزة لتطبيقات الجوال.
                    </p>
      </div>
     </section>
     <!---->
     <section class="component-content pt-5 pb-5">
        <div class="container">
          <div class="row mx-0 row-cols-lg-2 row-cols-1 g-4 justify-content-center align-items-center">
            <div class="col">
              <h2 class="title-title">  
                نبذة عن تصميم تطبيقات الجوال في شركتنا
              </h2>
              <p class="pt-3 p-decerption">
                نؤمن بأن تصميم التطبيقات الجوالة ليس مجرد واجهة جميلة، بل هو تجربة مستخدم فريدة تضمن سهولة الاستخدام والتفاعلية والإبداع، كما نعمل مع عملائنا لفهم رؤيتهم وأهدافهم، ونقدم حلولًا مخصصة تلبي احتياجاتهم بدقة.

              </p>
              <p class="pt-3 p-decerption">
                فريقنا المبدع والمؤهل يجمع بين المهارات التقنية والتصميمية العالية، مما يسمح لنا بتحويل الأفكار إلى تطبيقات جوالة واقعية وناجحة، كما نضمن تجربة استخدام سلسة وممتعة للمستخدمين، مع الحفاظ على تصميم جذاب ومتوافق مع أحدث اتجاهات التصميم.



              </p>
              <p class="pt-3 p-decerption">
                سواء كنت تبحث عن تطبيق جوال لنظامي iOS و Android أو تطبيق عابر للمنصات، فإننا نمتلك الخبرة والمعرفة لتقديم الحلول المثلى، كما نعتمد على أفضل الممارسات ونستخدم أحدث التقنيات والأدوات للتأكد من جودة التطبيقات التي نقدمها.


              </p>
            </div>
            <div class="col">
              <img class="w-100 img-system" src="{{asset('public/assets_site/img/mobile.jpg') }}" alt="management">
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
                ما هي أهم الخدمات التي تدعمها رايتو لتصميم التطبيقات؟

              </h2>
              <p class="pt-3 p-decerption">  
                نحن في شركتنا نقدم مجموعة شاملة من الخدمات في مجال تصميم تطبيقات الجوال، ونسعى جاهدين لتلبية احتياجات وتطلعات عملائنا، وإليك نظرة عامة على أهم الخدمات التي نقدمها:
              </p>
            </div>
          </div>
         
          <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 pt-5 mt-3">
             <div class="col d-flex">
                <div class="about-item-best text-center">
                  <img src="{{asset('public/assets_site/img/our-p.png') }}" alt="Invoice">
                  <div class="px-3">
                    <h6 class="title-title">  استشارات وتحليل الاحتياجات



                    </h6>
                    <p class="p-decerption pt-1">
                      نحن نعمل عن كثب مع العملاء لفهم رؤيتهم وأهدافهم واحتياجاتهم، كما نحرص على تقديم استشارات متخصصة ونقوم بتحليل شامل للمشروع لضمان تحقيق أفضل النتائج.
                    
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
                    تصميم واجهة المستخدم


                  </h6>
                  <p class="p-decerption pt-1">
                    نحن نولي اهتمامًا كبيرًا لتصميم واجهة المستخدم التي تجذب وتحافظ على انتباه المستخدمين، ونستخدم أحدث تقنيات التصميم لتوفير تجربة مستخدم فريدة ومريحة على التطبيق.
                  </p>
                </div>
              </div>
             </div>
           <!---->
              <!---->
              <div class="col d-flex">
                <div class="about-item-best text-center">
                  <img src="{{asset('public/assets_site/img/mobile3.svg') }}" alt="Technical Support">
                  <div class="px-3">
                    <h6 class="title-title">       
                      تطوير التطبيقات



                    </h6>
                    <p class="p-decerption pt-1">
                      نقوم بتطوير تطبيقات الجوال على منصات متعددة مثل iOS و Android وغيرها. نستخدم لغات برمجة حديثة وأدوات تطوير قوية لضمان توافق وأداء ممتاز للتطبيقات على مختلف الأجهزة.                    </p>
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
                      اختبار وجودة التطبيق

                    </h6>
                    <p class="p-decerption pt-1">
                      نحرص على ضمان جودة التطبيقات التي نقدمها من خلال عمليات اختبار شاملة، نقوم بفحص الأداء والتوافق واستجابة التطبيق، ونقدم التحسينات اللازمة لضمان تجربة مستخدم سلسة ومتميزة
                    
                    </p>
                  </div>
                </div>
             </div>
             <!---->
             <!---->
             <div class="col d-flex">
              <div class="about-item-best text-center">
                <img src="{{asset('public/assets_site/img/mobile5.svg') }}" alt="Technical Support">
                <div class="px-3">
                  <h6 class="title-title">       
                    دعم وصيانة

                  </h6>
                  <p class="p-decerption pt-1">
                    نوفر خدمات دعم وصيانة مستمرة لعملائنا، ونحافظ على سلامة وأمان التطبيقات ونقدم الدعم الفني وإصلاح الأعطال والتحديثات لضمان استمرارية تشغيل التطبيقات بشكل موثوق.                  
                  </p>
                  </div>
              </div>
           </div>
           <!---->
           <!---->
           <div class="col d-flex">
            <div class="about-item-best text-center">
              <img src="{{asset('public/assets_site/img/mobile2.svg') }}" alt="Technical Support">
              <div class="px-3">
                <h6 class="title-title">       
                  ربط التطبيقات بخدمات أخرى


                </h6>
                <p class="p-decerption pt-1">
                  نربط التطبيق الذي نصممه بـ وسائل التواصل الاجتماعي والدفع الإلكتروني ومزودي الخرائط وغيرها، بذلك نضمن توفير تجربة شاملة ومتكاملة للمستخدمين.


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

                  تطبيقات الجوال

               </h6>
               <p class="pt-3 mb-0">
                احصل على تطبيق جوال متميز يساهم في نجاح عملك ويواكب التطورات التكنولوجية الحديثة.
              </p>
              </div>
              <div class="col text-start mt-md-0 mt-5">
               <a href="contact.html" class="p-3 px-4 button-stert">    تواصل معنا الآن
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
              خطوات تصميم تطبيق جوال من خلال رايتو

            </h2>
            <ul class="pt-3 ">
              <li class="pt-3 p-decerption">التحليل والبحث
              </li>
              <li class="pt-3 p-decerption">وضع خريطة الموقع (Sitemap)
              </li>
              <li class="pt-3 p-decerption">تصميم الأسلايدز (Wireframing)</li>
              <li class="pt-3 p-decerption"> تصميم الواجهة الرسومية (UI Design)
              </li>
              <li class="pt-3 p-decerption"> تطوير النموذج الأولي (Prototype)
              </li>
              <li class="pt-3 p-decerption"> 
                تطوير التطبيق (App Development)

              </li>
              <li class="pt-3 p-decerption"> اختبار وتحسين

              </li>
              
            </ul>
            
          </div>
          <div class="col">
            <img class="w-100 img-system" src="{{asset('public/assets_site/img/mob-invo.png') }}" alt="management">
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