@extends('web.layouts.app')

@section('title', 'vocational-admission')

 @push('style')
      <link rel="stylesheet" href="{{asset('css/about.css')}}">
   @endpush 

@section('content')
   
 <section class="kulgeet  page-section">
     <div class="container">
        <div class="title">
            <h2>Vocational Admission</h2>
            <img
                src="{{ asset('asset/web/layouts/divider2.png') }}"
                alt="Divider"
                class="welcome-divider">
        </div>

        <div class="content">
            <h2 class="mb-3">Step- wise Admission Process Guidelines :</h2>
            <!-- <p>
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
                Original admit card and mark sheet of class 10th, Intermediate (12th) ,Graduation.
             </p>

             <p>
               ➤ Original admit card and mark sheet of class 10th & 12th.
             </p>

             <p>
               ➤ Original admit card and mark sheet of B.A, B.Sc & B.Com
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
             </p> -->

             <p>
    <strong>1.</strong> Provisional Admission will be purely on the basis of the Selection List
    published by the College Admission Committee on the College Website:
    <a href="https://www.ranchiwomenscollege.org"
       target="_blank"
       class="text-primary text-decoration-none fw-medium">
        www.ranchiwomenscollege.org
    </a>
</p>

<p>
    <strong>2.</strong> If your name appears in the published Selection List, you must report to the
    concerned department of Ranchi Women's College, Ranchi on the scheduled date and time for
    verification of original documents.
</p>

<p>
    <strong>3.</strong> Candidates must bring the following documents at the time of physical verification:
</p>

<ul class="list-unstyled ps-3">

    <li class="mb-2">
        <i class="fa-solid fa-circle-check text-success me-2"></i>
        Online Application Form along with Payment Slip.
    </li>

    <li class="mb-2">
        <i class="fa-solid fa-circle-check text-success me-2"></i>
        Original Admit Cards of Matriculation (10th), Intermediate (12th) and Graduation.
    </li>

    <li class="mb-2">
        <i class="fa-solid fa-circle-check text-success me-2"></i>
        Original Mark Sheets of Matriculation (10th), Intermediate (12th) and Graduation.
    </li>

    <li class="mb-2">
        <i class="fa-solid fa-circle-check text-success me-2"></i>
        Original CLC/TC and Character Certificate.
    </li>

    <li class="mb-2">
        <i class="fa-solid fa-circle-check text-success me-2"></i>
        Caste, Income and Residential Certificates (for SC/ST/BCL/BC-II candidates).
    </li>

    <li class="mb-2">
        <i class="fa-solid fa-circle-check text-success me-2"></i>
        EWS Certificate / BPL Card (if applicable).
    </li>

    <li class="mb-2">
        <i class="fa-solid fa-circle-check text-success me-2"></i>
        MBA Entrance Exam Score Card / Admit Card (CAT / XAT / MAT / ATMA / CMAT etc.).
    </li>

    <li class="mb-2">
        <i class="fa-solid fa-circle-check text-success me-2"></i>
        Registration Slip (for Ranchi University students) or Original Migration Certificate
        (for other Universities).
    </li>

    <li class="mb-2">
        <i class="fa-solid fa-circle-check text-success me-2"></i>
        Aadhaar Card.
    </li>

    <li class="mb-2">
        <i class="fa-solid fa-circle-check text-success me-2"></i>
        ABC ID.
    </li>

    <li class="mb-2">
        <i class="fa-solid fa-circle-check text-success me-2"></i>
        Three Passport Size Colour Photographs.
    </li>

    <li class="mb-2">
        <i class="fa-solid fa-circle-check text-success me-2"></i>
        Two copies of the Fee Receipt (to be submitted after admission confirmation).
    </li>

</ul>

<p>
    <strong>4.</strong> After successful verification, candidates must pay the admission fee
    through the Chancellor's Portal and submit the payment receipt along with the
    Anti-Ragging Undertaking Form to the concerned department.
</p>

<p>
    <strong>5.</strong> If any candidate is found submitting fake or forged documents, her admission
    will be cancelled immediately. The admission fee will not be refunded, and legal action may
    be initiated against the candidate and her parents/guardians.
</p>

<p>
    <strong>6.</strong> No claim for admission shall be entertained after the last date of admission.
</p> 
               
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
            <h2>PG Admission Session 2025-27</h2>
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
                        <td class="text-start fw-semibold">Botany PG</td>
                        <td><a href="#">Click Here</a></td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td class="text-start fw-semibold">Physics PG</td>
                        <td><a href="#">Click Here</a></td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td class="text-start fw-semibold">Chemistry PG</td>
                        <td><a href="#">Click Here</a></td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td class="text-start fw-semibold">Mathematics PG</td>
                        <td><a href="#">Click Here</a></td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td class="text-start fw-semibold">Zoology PG</td>
                        <td><a href="#">Click Here</a></td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td class="text-start fw-semibold">Commerce (M.Com.) PG</td>
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