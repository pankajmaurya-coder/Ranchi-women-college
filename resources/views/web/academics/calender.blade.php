@extends('web.layouts.app')

@section('title', 'syllabus')

 @push('style')
      <link rel="stylesheet" href="{{asset('css/about.css')}}">
   @endpush 

@section('content')
 
<section class="my-5">
    <div class="container">
        <div class="container">

        <div class="title">
            <h2>Academic Calender</h2>
            <img
                src="{{ asset('asset/web/layouts/divider2.png') }}"
                alt="Divider"
                class="welcome-divider">
        </div>

        <div class="border rounded">

    <div class="table-responsive">
        <table class="table table-bordered table-hover mb-0 align-middle">
            <thead class="table-secondary text-center">
                <tr>
                    <th width="80">Sl. No.</th>
                    <th>Details of Academic Activities</th>
                    <th width="180">Academic Session</th>
                    <th width="140">Download</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td>Academic Calendar</td>
                    <td class="text-center">2017-2018</td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
                    </td>
                </tr>

                <tr>
                    <td class="text-center">2</td>
                    <td>Academic Calendar</td>
                    <td class="text-center">2018-2019</td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
                    </td>
                </tr>

                <tr>
                    <td class="text-center">3</td>
                    <td>Academic Calendar</td>
                    <td class="text-center">2019-2020</td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
                    </td>
                </tr>

                <tr>
                    <td class="text-center">4</td>
                    <td>Academic Calendar</td>
                    <td class="text-center">2020-2021</td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
                    </td>
                </tr>

                <tr>
                    <td class="text-center">5</td>
                    <td>Academic Calendar</td>
                    <td class="text-center">2021-2022</td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
                    </td>
                </tr>

                <tr>
                    <td class="text-center">6</td>
                    <td>Academic Calendar</td>
                    <td class="text-center">2022-2023</td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
                    </td>
                </tr>

                <tr>
                    <td class="text-center">7</td>
                    <td>Academic Calendar</td>
                    <td class="text-center">2023-2024</td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
    </div>
</section>

@endsection