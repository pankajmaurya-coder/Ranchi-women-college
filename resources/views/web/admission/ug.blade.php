@extends('web.layouts.app')

@section('title', 'ug-admission')

 @push('style')
      <link rel="stylesheet" href="{{asset('css/about.css')}}">
   @endpush 

@section('content')
   
 <section class="kulgeet  page-section">
     <div class="container">
        <div class="title">
            <h2>UG Admission</h2>
            <img
                src="{{ asset('asset/web/layouts/divider2.png') }}"
                alt="Divider"
                class="welcome-divider">
        </div>

        <div class="content">
            <h2 class="mb-3">Step- wise Admission Process Guidelines :</h2>
            <p>
              1. Provisional Admission will be purely on the basis of Selection List published 
              by the College Admission Committee on the College Website:-
              <a href="https://www.ranchiwomenscollege.org"
                target="_blank"
                 class="text-primary text-decoration-none fw-medium">
                 www.ranchiwomenscollege.org
              </a>
             </p>

             <p>
                2. If the name appears in the published selection list, the applicant will 
                have to appear for the verification of original certificates in the concerned
                department of Ranchi Women’s College, Ranchi on the scheduled date and time.
             </p>

             <p>
             3. Selected candidates will have to bring the following documents with them at the time of physical verification
             </p>
   
             <p>
                <i class="fa-solid fa-location-arrow fa-rotate-by fa-sm" style="color: rgb(137, 224, 15); --fa-rotate-angle: 45deg;"></i>
                     Hard copy of the downloaded application form (From Chancellor Portal).
             </p>
                
             <p>
                <i class="fa-solid fa-location-arrow fa-rotate-by fa-sm" style="color: rgb(178, 84, 84); --fa-rotate-angle: 45deg;"></i>
                Original admit card and mark sheet of class 10th.
             </p>

             <p>
               ➤ Original admit card and mark sheet of class 12th
             </p>

             <p>
                 <i class="fa-solid fa-location-arrow fa-rotate-by fa-sm" style="color: rgb(179, 68, 173); --fa-rotate-angle: 45deg;"></i>
                Original School or College leaving certificate (SLC/CLC).
            </p>
             <p>
                <i class="fa-solid fa-location-arrow fa-rotate-by fa-sm" style="color: rgb(162, 34, 72); --fa-rotate-angle: 45deg;"></i>
                Original Character certificate (CC)
             </p>
             <p>
                <i class="fa-solid fa-location-arrow fa-rotate-by fa-sm" style="color: rgb(84, 86, 178); --fa-rotate-angle: 45deg;"></i>
                Original Migration certificate. (Required at the time of Admission Registration)
             </p>
             <p>
                <i class="fa-solid fa-location-arrow fa-rotate-by fa-sm" style="color: rgb(84, 86, 178); --fa-rotate-angle: 45deg;"></i>
                Xerox Copy of CUET Score Card
             </p>
             
             <p>
                <i class="fa-solid fa-location-arrow fa-rotate-by fa-sm" style="color: rgb(84, 86, 178); --fa-rotate-angle: 45deg;"></i>
               Original Caste certificate (if applicable).
             </p>
             <p>
                <i class="fa-solid fa-location-arrow fa-rotate-by fa-sm" style="color: rgb(84, 86, 178); --fa-rotate-angle: 45deg;"></i>
                 Original EWS certificate issued by the competent goverment agency Certificate (if applicable).
             </p>
             <p>
                <i class="fa-solid fa-location-arrow fa-rotate-by fa-sm" style="color: rgb(84, 86, 178); --fa-rotate-angle: 45deg;"></i>
                ECA (Extra Curricular Activity)Certificate (if applicable).
             </p>
             <p>
                N.B: Photo/Hard copies (1 set each) of the above mentioned documents.
             </p>
             <p>
                <i class="fa-solid fa-location-arrow fa-rotate-by fa-sm" style="color: rgb(84, 86, 178); --fa-rotate-angle: 45deg;"></i>
                Passport (1 Copies) and Stamp (2 Copies)  size colour photographs.
             </p>


             <p>
                 4. After physical verification, the link for online payment opens. Students will pay their admission fee by 
                 visiting the Chancellor's Portal, after that they will submit the payment receipt and Anti Ragging Undertaking
                  Form ( <a href="https://www.ranchiwomenscollege.org" target="_blank" class="text-primary text-decoration-none fw-medium">
                 www.ranchiwomenscollege.org
              </a>) to the department.
             </p>


             <p>
                5. If any student is found  presenting fake or forged document during verification of original documents, her
                  admission will be cancelled  and the deposited fee   will  not be refunded. The student will have no claim for
                   any type of refund from the college authorities. Besides it, legal action will be taken against her and her
                    parents for forgery.
             </p>
                 
             <p>
             6. Candidates have no claim for admission once the last date is over.
             </p>

              <h2>B.A./B.Sc./B.Com में प्रवेश लेने के लिए दिशानिर्देश।</h2> 
              <p>
                1. अंतिम प्रवेश विशुद्ध रूप से कॉलेज की वेबसाइट:<a href="https://www.ranchiwomenscollege.org"
                target="_blank"
                 class="text-primary text-decoration-none fw-medium">
                 www.ranchiwomenscollege.org
              </a> पर कॉलेज प्रवेश समिति द्वारा प्रकाशित चयन सूची के आधार पर होगी।
              </p>
              <p>
                2. प्रकाशित चयन सूची में नाम आने पर आवेदक को मूल प्रमाण पत्रों के सत्यापन के लिए संबंधित विभाग रांची विमेंस कॉलेज ,
                 रांची में निर्धारित तिथि एवं समय पर उपस्थित होना होगा
              </p>
              <p>
               3. चयनित उम्मीदवारों को भौतिक सत्यापन के समय निम्नलिखित दस्तावेज अपने साथ लाने होंगे
              </p>
              <p>
                ➤ डाउनलोड किए गए आवेदन पत्र की हार्ड कॉपी (चांसलर पोर्टल से)।
              </p>
              <p>➤ मूल प्रवेश पत्र और कक्षा 10 वीं की अंकतालिका।</p>
              <p>➤ मूल प्रवेश पत्र और कक्षा 12वीं की अंकतालिका।</p>
              <p>➤ मूल स्कूल या कॉलेज छोड़ने का प्रमाण पत्र (एसएलसी / सीएलसी)।</p> 
              <p>➤ मूल चरित्र प्रमाण पत्र (सीसी)</p>
              <p>➤ मूल प्रवासन प्रमाणपत्र (एडमिशन रजिस्ट्रेशन के समय )।</p>
              <p>➤ मूल जाति प्रमाण पत्र (यदि लागू हो)।</p>
              <p>➤ मूल ईडब्ल्यूएस प्रमाण पत्र (सक्षम सरकारी प्राधिकारी के द्वारा जारी )।</p> 
              <p>➤ पासपोर्ट (1 प्रति) और टिकट (2 प्रतियां) आकार के रंगीन फोटो ।</p>
              
              <h2>✭✭ उपरोक्त दस्तावेजों की ज़ेरॉक्स प्रतियां प्रत्येक (1 सेट)। ✭✭</h2>

              <p>
                4. भौतिक सत्यापन के बाद ऑनलाइन भुगतान का लिंक खुल जाएगा। छात्राएं अपने प्रवेश शुल्क का भुगतान चांसलर पोर्टल पर
                 जाकर करेंगी , उसके बाद वे भुगतान रसीद और एंटी रैगिंग अंडरटेकिंग फॉर्म 
             (जो कि कॉलेज की वेबसाइट <a href="https://www.ranchiwomenscollege.org"
                target="_blank"
                 class="text-primary text-decoration-none fw-medium">
                 www.ranchiwomenscollege.org
              </a> पर उपलब्ध है) विभाग को जमा करेंगी ।
              </p>

              <p>
                5. यदि कोई छात्रा मूल दस्तावेजों के सत्यापन के दौरान फर्जी या जाली दस्तावेज प्रस्तुत करते हुए पायी जाती है 
              या अंको का मिलान मार्कशीट से भिन्न होता है, तो उसका प्रवेश रद्द कर दिया जाएगा और उसका जमा शुल्क भी वापस नहीं किया 
              जाएगा। छात्रा का महाविद्यालय प्राधिकरण से किसी भी प्रकार की धनवापसी के लिए कोई दावा मान्य नहीं होगा।
             इसके अलावा फर्जी दस्तावेज जमा करने पर उसके और उसके माता-पिता के खिलाफ कानूनी कार्रवाई की जाएगी।
              </p>
               <p>6. अंतिम तिथि समाप्त होने के बाद उम्मीदवारों का प्रवेश के लिए कोई दावा मान्य नहीं है ।</p>  
               
        <div class="title">
            <h2>Important Link</h2>
            <img
                src="{{ asset('asset/web/layouts/divider2.png') }}"
                alt="Divider"
                class="welcome-divider">
        </div>
               
               <div class="table-responsive">
    <table class="table table-bordered table-hover align-middle text-center shadow-sm">
        <thead class="table-primary">
            <tr>
                <th style="width: 80px;">S.No.</th>
                <th>Document / Service</th>
                <th style="width: 180px;">Action</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td>1</td>
                <td>Admission through Chancellor's Portal</td>
                <td>
                    <a href="https://universities.jharkhand.gov.in/home"
                       target="_blank"
                       class="btn btn-primary btn-sm">
                        Visit Portal
                    </a>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Anti Ragging Affidavit (Student)</td>
                <td>
                    <a href="{{ asset('asset/web/about/anti/Undertaking Form of Students.pdf') }}" 
                    target="_blank"
                    class="btn btn-success btn-sm">
                        View
                    </a>
                </td>
            </tr>

            <tr>
                <td>3</td>
                <td>Anti Ragging Affidavit (Parent)</td>
                <td>
                     <a href="{{ asset('asset/web/about/anti/Undertaking Form of Parents.pdf') }}" 
                    target="_blank"
                    class="btn btn-success btn-sm">
                        View
                    </a>
                </td>
            </tr>

        </tbody>
    </table>

</div>
        </div>  
               
     </div>
</section>

<section>
     <section class="admission-table my-5">
    <div class="container">

        <div class="title">
            <h2>UG Admission Session 2026-30</h2>
            <img
                src="{{ asset('asset/web/layouts/divider2.png') }}"
                alt="Divider"
                class="welcome-divider">
        </div>

        <div class="table-responsive">

            <table class="table table-bordered align-middle text-center">

                <thead>
                    <tr>
                        <th>Sr.</th>
                        <th>Subjects</th>
                        <th>1<sup>st</sup> Selection List</th>
                        <th>2<sup>nd</sup> Selection List</th>
                        <th>3<sup>rd</sup> Selection List</th>
                        <th>4<sup>th</sup> Selection List</th>
                        <th>5<sup>th</sup> Selection List</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td class="text-start fw-semibold">Botany UG</td>
                        <td><a href="#">Click Here</a></td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td class="text-start fw-semibold">Physics UG</td>
                        <td><a href="#">Click Here</a></td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td class="text-start fw-semibold">Chemistry UG</td>
                        <td><a href="#">Click Here</a></td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td class="text-start fw-semibold">Mathematics UG</td>
                        <td><a href="#">Click Here</a></td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td class="text-start fw-semibold">Zoology UG</td>
                        <td><a href="#">Click Here</a></td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td class="text-start fw-semibold">Commerce (B.Com.) UG</td>
                        <td><a href="#">Click Here</a></td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>
</section>
</section>

@endsection