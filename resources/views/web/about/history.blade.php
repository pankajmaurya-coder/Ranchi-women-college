@extends('web.layouts.app')

@section('title', 'about-page')

 @push('style')
      <link rel="stylesheet" href="{{asset('css/about.css')}}">
   @endpush 

@section('content')
   
<section class="about-history"> 
        <div class="hero">
            <img
                    src="{{ asset('asset/web/about/teacher-group.png') }}"
                    alt="College History" class="hero-image">
        </div>
    <div class="container">
       
        <div class="title">
            <h2>Our History</h2>
            <img
                src="{{ asset('asset/web/layouts/divider2.png') }}"
                alt="Divider"
                class="welcome-divider">
        </div>
            <div class="content">
                 
                <div class="history-image">
                <img
                    src="{{ asset('asset/web/about/bhanumati.png') }}"
                    alt="College History">
                </div>
                <p>
                   With 11 students and 03 Teachers the Visionary Founder Principal,
                    Mrs. Bhanumati Prasad started nurturing a seedling in the-then Mohsin
                     Manjilat Circular Road, Ranchi in the propitious year 1949
                      (July)that has grown as multi-faculty Premier College 'Ranchi 
                      Women's College' enlightening the whole State as 'Capacity Builders for Women'.
                </p>

                    <p>
               Initially, Ranchi Women's College was affiliated to the Patna University
                in 1951. In 1957 the  affiliation  was shifted to the Bihar University which
                 was carved out of Patna University as an independent unit. Finally, when 
                 Ranchi University emerged as an independent University in 1960, Ranchi Women'
                 s College was  affiliated to it.
            </p>

            <p>
                Ranchi Women's College is a government aided College  which got 
                recognition under U.G.C Act 1956 as 2(f) &  12 B, 1956.In 1987it was
                tansferred to the category  of “College Teaching up to Post Graduate Degree”
                 by  UGC through letter no. F 8-105/86 (CPP-1) dated 3rd  Nov. 1987 under 
                 section 2(f) UGC Act 1956.
            </p>
            <!-- </div> -->
           
        <!-- </div> -->
        <!-- <div class="content"> -->
         <p>
          Ranchi Women's College, Ranchi was started  in 1949 with a vision to lead  from “darkness to light”
           which was reflected in its logo also. At that time Jharkhand  was combined with Bihar 
           known as Chhotanagpur  or  South Bihar.  Ranchi, a  part  of  South Chhotanagpur was a hilly area 
           (plateau part of South Bihar)  and was famous as  a   hill station. It was known as summer capital
            of  Bihar  and   the Governor and other  headquarters  used to  shift to Ranchi every year during the  
            summer season. For this a Governor House and  a number  of  bungalows  were  constructed here during 
            the British rule. The climate  of  this  place  attracted a number  of  tourists  here. Most of  Bengali 
            and South Indian tourists  settled down here  due to its climate. During British rule two more important
             institutions were established here due to  its climate –  T.B. Sanatorium and  Mental  Hospital. 
              People from allover India were sent to these two institutions for healing body and mind.
         </p>
         <p>
            “During the period of the British Raj, adivasis and the local population of other ethnic backgrounds
             of  Ranchi and other regions continued to oppose the  subjugation by the British, and the region
             witnessed a number of uprisings and revolts”  (From official website of  Ranchi District Administration).
         </p>

         <p>
              Struggle for freedom brought many  visionary leaders in frontline  by that time in South Chhotanagpur
               who  fought not only  for  freedom in terms of sovereignty but  also  for  uplift of society  in so
                many respects. By 1944 St. Xavier’s College was established in Ranchi.  But  there  was  no  scope
                  for  women’s  education. It  was  during  that  period  that  a  visionary group of philanthropists,
                   Mrs. Bhanumati Prasad (a South Indian Scholar, Mrs. A. V. Davis (one of  the  founders  of  CIP/RINPASS),
                   Mr. K. B. Sahay (the then political leader and later on Chief Minister of Bihar), Mr. M. S. Rao 
                   (ICS, The Commissioner of Chhotanagpur), Mr. S. N. Ganguly (a physician), Mr. Hemen Ganguly
                    (a Social Activist)  , Mr. Suresh Prasad & Mr. S. K. Bage (all who wished social reform) made up
                     their mind to provide the opportunity of higher  education  to the unprivileged women of whole 
                     Chhotanagpur, a neglected and undeveloped area of the then Bihar with a firm vision  for 
                     “Enlightenment for Women”.
         </p> 

           <p>
            They all  aimed at  bringing  forth  the women of  tribal, SC and  O.B.C. category   of  this 
             neglected  part  into the main stream of the society from their marginalized status  through education.
              Their combined and continued efforts  took the shape  of  “Ranchi Women's College” in July 1949  when Mrs.
               Bhanumati Prasadas Principal started this College with three Teachers  in Mohsin Manjil at  Circular Road,
                Ranchi  with  eleven students of  Pre University Classes. 
           </p>
           
           <p>
              In a short span  this  College became  a premier institute  of  combined  Bihar  and   allured the 
               students of  neighboring states  like  West Bengal, Orissa and Uttar Pradesh. It  achieved the reputation 
               as a torch bearer to attain freedom from the darkness of ignorance and misunderstanding leading  the 
               girls to ever widening luminous world of wisdom, knowledge and independence. In due course the students 
               achieved  the  ranks  of   Justice, Vice Chancellor and Pro Vice Chancellor, Scientists, I.A.S., I.P.S.,
                Bankers, Professors, administrative Officers, Sportspersons, Leaders etc.
           </p>

            <p>
               Jharkhand got the status of independent state in the year 2000. Ranchi, the summer capital of combined
                Bihar, was announced as  Capital of  Jharkhand. Today Ranchi district is one of  the twenty-four 
                districts of  Jharkhand State in eastern India. As of  2011 census report it is the most populous 
                district of Jharkhand with 29,12,022 population. Ranchi has the sex ratio of  950 female to 1000 male
                 and literacy rate of 77.13% which is higher than the national average 74.04%. Male literacy is  85.63 %
                  and female literacy is 68.2 %. Ranchi Women's College, Ranchi has contributed a lot to it. The college
                   that was started with eleven students in 1949  is offering fourty two  programme options at  UG & PG
                   level today to aprox 10,000 students. 

           </p>
        <!-- </div> -->
    </div>
</section>
@endsection
