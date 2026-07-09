@extends('web.layouts.app')

@section('title', 'about-page')

 @push('style')
      <link rel="stylesheet" href="{{asset('css/about.css')}}">
   @endpush 

@section('content')
<section class="vision-mission">
    <div class="conatiner">
         <div class="title">
            <h2>Our Vision & Mission</h2>
            <img
                src="{{ asset('asset/web/layouts/divider2.png') }}"
                alt="Divider"
                class="welcome-divider">
          </div>

          <div class="content">
             <div class="logo-img">
               <img src="{{asset('asset/web/layouts/header/logo.png')}}">
             </div>
            <div class="tag-line">
               <h2>“तमसो मा ज्योतिर्गमय”</h2>
               <h2>“Lead me from Darkness to Light”</h2>
               <h2>“अज्ञान के अंधेरों से मुझे ज्ञान के उजालों की ओर ले चलो”</h2>
               <h2>The vision of the College is reflected in the logo of the College itself.</h2>
            </div>
                
               <p>A visionary group of philanthropists, Mrs Bhanumati Prasad, Mrs A. V. Davis, 
               Mr K B Sahay (the- then Chief Minister of Bihar), Mr M S Rao (ICS, The Commissioner
               of Chotanagpur), Mr S N Ganguly, Mr Hemen Ganguly, Mr Suresh Prasad & Mr S K Bage, 
               made up their mind to provide the opportunity of Higher Education to the unprivileged women
                of Chotanagpur, a neglected and undeveloped area of then Bihar with a firm vision and 
                aim and reflected it in the logo to bring forth these women into the main stream of the
                 society from their marginalized status. Since inception till date the College management
                  concentrates on the same vision with its ceaseless efforts to encourage and inspire the 
                  girls of Jharkhand and other states to attain freedom from the darkness of ignorance and
                   misunderstanding and lead them towards ever widening luminous world of wisdom, knowledge
                    and independence.
                  </p>
               <p>The College still follows the mission to lead girl students to march successfully towards
                   knowledge, enlightenment and empowerment through various Curricular, Co curricular &
                    extra curricular activities. All stakeholders of the college, be it Principal and
                     Teachers, Students, Staff, Parents,  affiliating body (University or JAC), 
                     Society or Alumnae, Government, Press or Media, Judiciary, Administration or NGO, 
                     we all strive to provide congenial environment and quality infrastructure for smooth
                      functioning of the teaching-learning process for girls with a focus to make girls 
                      empowered in the real sense. Besides sharing the knowledge and latest information,
                       the Teachers encourage the students to inculcate traditional Indian values. 
                       Our vision is translated through our mission to sustain such an atmosphere through
                        which girls can pave ahead towards overall development of personality empowering 
                      them thus, in following five ways :
                     </p>
               <p>
                  1. To make them Intellectually enriched and advanced in knowledge
               </p>
               <p>2. To sensitize them for social causes at global level</p>
               <p>3. To fill them with moral strength to fight against social taboos</p>
               <p>4. To enable them as a self reliant person by achieving economic independence</p>
               <p>5. To encourage them for being mentally and physically fit & healthy to accept any
                challenge as the Nobel Laureate Kavi Guru Ravindra Nath Tagore says, we too aspire for
                 creating a space,
               </p>

              <p><b>Where the mind is without fear and the head is held high</b></p>
              <p><b>Where knowledge is free</b></p>
              <p><b>Where the world has not been broken up into fragments</b></p>
              <p><b>By narrow domestic walls</b></p>
              <p><b>Where words come out from the depth of truth</b></p>
              <p><b>Where tireless striving stretches its arms towards perfection</b></p>
              <p><b>Where the clear stream of reason has not lost its way</b></p>
              <p><b>Into the dreary desert sand of dead habit</b></p>
              <p><b>Where the mind is led forward by thee</b></p>
              <p><b>Into ever-widening thought and action</b></p>
              <p><b>Into that heaven of freedom, my Father, let my country awake!</b></p>
          </div>
    </div>
</section>

@endsection