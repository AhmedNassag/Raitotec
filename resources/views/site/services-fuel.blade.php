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
            تأهيل محطات الوقود
          </h2>
          <p class="pt-3 text-white fs-5 col-md-8">
            حول محطة الوقود الخاصة بك من محطة عادية إلى محطة ذكية
          </p>
      </div>
     </section>
     <!---->
     <section class="component-content pt-5 pb-5">
        <div class="container">
          <div class="row mx-0 row-cols-lg-2 row-cols-1 g-4 justify-content-center align-items-center">
            <div class="col">
              <h2 class="title-title">  
                نبذة عن خدمة تأهيل محطات الوقود
              </h2>
              <p class="pt-3 p-decerption">
                نحن نقدم حلولًا متكاملة لتحويل المحطات العادية إلى محطات ذكية باستخدام أحدث التقنيات البرمجية والأجهزة المخصصة لهذا الغرض. نحن نعمل على تنفيذ أنظمة ERP المتكاملة لإدارة ورصد عمليات المحطة بشكل شامل، بما في ذلك إدارة المبيعات والمخزون والمحاسبة والموارد البشرية والعملاء.
              </p>
              <p class="pt-3 p-decerption">
                باستخدام تكنولوجيا الإنترنت من الأشياء (IoT)، يمكننا ربط الأجهزة والمعدات في المحطة معًا وربطها بالشبكة الداخلية للمحطة وبالإنترنت، هذا يتيح للمحطة الوصول إلى بيانات حية ومحدثة عن حالة المعدات والأداء والمبيعات، وبالتالي يمكن لفرق الصيانة والإدارة اتخاذ قرارات مستنيرة وسريعة.


              </p>
              <p class="pt-3 p-decerption">
                بالإضافة إلى ذلك، نقوم بتركيب أجهزة السداد الإلكتروني والدفع الذكي لتسهيل عمليات البيع وتحسين تجربة العملاء. يمكن للعملاء القيام بعمليات الدفع بسهولة باستخدام بطاقات الائتمان أو التطبيقات الذكية، مما يوفر الوقت والجهد ويزيد من كفاءة عملية الدفع.



              </p>
            </div>
            <div class="col component-video" data-aos="fade-up"data-aos-delay="50">
              <div class="video-date">
                <div class="div-button">
                    <div id="myBtn"></div>
                </div>
                <video  loop="" id="myVideo" poster="{{asset('public/assets_site/img/advertisements.png') }}" style="object-fit:cover;">
                    <source src="{{asset('public/assets_site/img/video/vv.mp4') }}" type="video/mp4">
                </video>
            
            </div>   
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
                ما هي أهم الخدمات التي تدعمها رايتو لتأهيل محطات الوقود؟
              </h2>
              <p class="pt-3 p-decerption">
                نحن نقدم مجموعة واسعة من الخدمات لتأهيل محطات الوقود من خلال أنظمة ERP المتكاملة، إليك بعض الخدمات التي نوفرها:
 
              </p>
            </div>
          </div>
         
          <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 pt-5 mt-3">
             <div class="col d-flex">
                <div class="about-item-best text-center">
                  <img src="{{asset('public/assets_site/img/web1.svg') }}" alt="Invoice">
                  <div class="px-3">
                    <h6 class="title-title">    
                      تصميم وتنفيذ نظام ERP مخصص


                    </h6>
                    <p class="p-decerption pt-1">
                      نحن نعمل على تصميم وتنفيذ نظام ERP مخصص يتناسب مع احتياجات محطة الوقود الخاصة بك، سنقوم بدراسة متطلباتك وتحليل عملياتك الحالية لتصميم نظام يعزز الكفاءة والفعالية في إدارة المحطة.                    
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
                    إدارة المبيعات والمخزون


                  </h6>
                  <p class="p-decerption pt-1">
                    سنقوم بتنفيذ أنظمة ERP تتيح لك إدارة عمليات المبيعات والمخزون بشكل شامل، بذلك ستتمكن من تتبع المبيعات وإدارة المخزون بكفاءة، وتوليد تقارير دقيقة حول المبيعات والمخزون والأداء العام للمحطة.
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
                      إدارة المحاسبة والمالية





                    </h6>
                    <p class="p-decerption pt-1">
                      ستتمكن من إدارة كافة المعاملات المالية لمحطتك بسهولة ودقة واحترافية، سيتضمن ذلك إدارة الفواتير والمدفوعات والحسابات المدينة والدائنة وإعداد التقارير المالية اللازمة، بدون الحاجة لمحاسب.
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
                      إدارة الموارد البشرية
                    </h6>
                    <p class="p-decerption pt-1">
                      سنوفر لك نظامًا متكاملاً لإدارة الموارد البشرية في محطتك، يمكنك هذا النظام من إدارة بيانات الموظفين والرواتب والمكافآت والغياب والتأخير والتدريب بكل سهولة وفعالية وبدون أي أخطاء
                    
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
                    إدارة العملاء





                  </h6>
                  <p class="p-decerption pt-1">
                    ستتمكن من تحسين تجربة العملاء من خلال نظام ERP الذي يتضمن إدارة العملاء، سيساعدك النظام في تتبع وإدارة بيانات العملاء وتلبية احتياجاتهم بشكل أفضل، وبذلك ستصير تجربتك أفضل.
                  
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
                  تكامل تقنيات المحطة 



                </h6>
                <p class="p-decerption pt-1">
                  سنقوم بجعل نظام ERP  يتكامل مع الأجهزة والتقنيات الأخرى في محطتك، مثل أجهزة السداد الإلكتروني وأنظمة المراقبة وأنظمة إدارة المحتوى، وسيتيح هذا التكامل تبادل البيانات وتحقيق تواصل سلس وفعال بين جميع الأنظمة.


                </p>
                <p class="p-decerption pt-1">
                  نحن نسعى جاهدين لتوفير حلول متكاملة وموثوقة لتأهيل محطات الوقود باستخدام أنظمة ERP. سوف نعمل معك لتحقيق أهدافك وتحسين كفاءة وأداء محطتك، وتوفير تجربة مميزة للعملاء وتحقيق التحول الرقمي لمحطتك.


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
             
               <p class="pt-3 mb-0">
                استعد للمستقبل مع تحويل محطتك إلى محطة ذكية تلبي رؤية المملكة 2030 ومتطلبات وزارة الطاقة.
             
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
     
     <!---->
     <section class="component-best mt-5 pt-5 pb-5">
      <div class="container">
        <h2 class="title-title">  
          
          
          لماذا تعتمد على رايتو في تأهيل المحطات؟

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