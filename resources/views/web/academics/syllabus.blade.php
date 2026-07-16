@extends('web.layouts.app')

@section('title', 'syllabus')

 @push('style')
      <link rel="stylesheet" href="{{asset('css/about.css')}}">
   @endpush 

@section('content')

<section class="py-5">
    <div class="container">

        <div class="title">
            <h2>SYLLABUS</h2>
            <img
                src="{{ asset('asset/web/layouts/divider2.png') }}"
                alt="Divider"
                class="welcome-divider">
        </div>

        <!-- Undergraduate Arts -->
        <h3 class="mb-3">Undergraduate Arts</h3>

        <div class="table-responsive mb-5">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="70">Sl.</th>
                        <th>Programme</th>
                        <th width="120" class="text-center">Syllabus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>B.A. Bengali Honours</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>2</td><td>B.A. Economics Honours</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>3</td><td>B.A. English Honours</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>4</td><td>B.A. Geography Honours</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>5</td><td>B.A. Hindi Honours</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>6</td><td>B.A. History Honours</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>7</td><td>B.A. Home Science Honours</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>8</td><td>B.A. Music Honours</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>9</td><td>B.A. Philosophy Honours</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>10</td><td>B.A. Political Science Honours</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>11</td><td>B.A. Psychology Honours</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>12</td><td>B.A. Sanskrit Honours</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>13</td><td>B.A. Sociology Honours</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>14</td><td>B.A. Tribal and Regional Language Honours</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>15</td><td>B.A. Urdu Honours</td><td class="text-center"><a href="#">Download</a></td></tr>
                </tbody>
            </table>
        </div>

        <!-- Undergraduate Science -->
        <h3 class="mb-3">Undergraduate Science</h3>

        <div class="table-responsive mb-5">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="70">Sl.</th>
                        <th>Programme</th>
                        <th width="120" class="text-center">Syllabus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>B.Sc. Botany Honours</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>2</td><td>B.Sc. Chemistry Honours</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>3</td><td>B.Sc. Physics Honours</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>4</td><td>B.Sc. Mathematics Honours</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>5</td><td>B.Sc. Zoology Honours</td><td class="text-center"><a href="#">Download</a></td></tr>
                </tbody>
            </table>
        </div>

        <!-- Undergraduate Commerce -->
        <h3 class="mb-3">Undergraduate Commerce</h3>

        <div class="table-responsive mb-5">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="70">Sl.</th>
                        <th>Programme</th>
                        <th width="120" class="text-center">Syllabus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>B.Com. Accounts Honours</td><td class="text-center"><a href="#">Download</a></td></tr>
                </tbody>
            </table>
        </div>

        <!-- Postgraduate Arts -->
        <h3 class="mb-3">Postgraduate Arts (M.A.)</h3>

        <div class="table-responsive mb-5">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="70">Sl.</th>
                        <th>Programme</th>
                        <th width="120" class="text-center">Syllabus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>M.A. Hindi</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>2</td><td>M.A. English</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>3</td><td>M.A. History</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>4</td><td>M.A. Political Science</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>5</td><td>M.A. Economics</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>6</td><td>M.A. Home Science</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>7</td><td>M.A. Geography</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>8</td><td>M.A. Philosophy</td><td class="text-center"><a href="#">Download</a></td></tr>
                </tbody>
            </table>
        </div>

        <!-- Postgraduate Science -->
        <h3 class="mb-3">Postgraduate Science (M.Sc.)</h3>

        <div class="table-responsive mb-5">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="70">Sl.</th>
                        <th>Programme</th>
                        <th width="120" class="text-center">Syllabus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>M.Sc. Botany</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>2</td><td>M.Sc. Chemistry</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>3</td><td>M.Sc. Zoology</td><td class="text-center"><a href="#">Download</a></td></tr>
                </tbody>
            </table>
        </div>

        <!-- UG Vocational -->
        <h3 class="mb-3">Undergraduate Vocational Self Financing Courses</h3>

        <div class="table-responsive mb-5">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="70">Sl.</th>
                        <th>Programme</th>
                        <th width="120" class="text-center">Syllabus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>Biotechnology</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>2</td><td>BBA</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>3</td><td>Clinical Nutrition & Dietetics</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>4</td><td>Computer Application</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>5</td><td>Fashion Designing</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>6</td><td>Information Technology</td><td class="text-center"><a href="#">Download</a></td></tr>
                </tbody>
            </table>
        </div>

        <!-- PG Vocational -->
        <h3 class="mb-3">Postgraduate Vocational Self Financing Courses</h3>

        <div class="table-responsive mb-5">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="70">Sl.</th>
                        <th>Programme</th>
                        <th width="120" class="text-center">Syllabus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>M.Sc. Biotechnology</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>2</td><td>MBA</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>3</td><td>M.Sc. Clinical Nutrition & Dietetics</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>4</td><td>MCA</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>5</td><td>M.A. Fashion Designing</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>6</td><td>M.Sc. IT</td><td class="text-center"><a href="#">Download</a></td></tr>
                </tbody>
            </table>
        </div>

        <!-- M.Com -->
        <h3 class="mb-3">Postgraduate Commerce (M.Com.)</h3>

        <div class="table-responsive mb-5">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="70">Sl.</th>
                        <th>Programme</th>
                        <th width="120" class="text-center">Syllabus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>M.Com.</td><td class="text-center"><a href="#">Download</a></td></tr>
                </tbody>
            </table>
        </div>

        <!-- Education -->
        <h3 class="mb-3">Education</h3>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="70">Sl.</th>
                        <th>Programme</th>
                        <th width="120" class="text-center">Syllabus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>B.Ed.</td><td class="text-center"><a href="#">Download</a></td></tr>
                    <tr><td>2</td><td>M.A. in Education</td><td class="text-center"><a href="#">Download</a></td></tr>
                </tbody>
            </table>
        </div>

    </div>
</section>

@endsection