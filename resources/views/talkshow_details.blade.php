<!DOCTYPE html>
<html lang="en">

<head>
  @include('default_header')
  <title>Indonesia Marine Exhibition - Talkshow Room {{$data_root->title}}</title>
  <link href="{{ asset ('assets/css/talkshow_details.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    @include('menu')
    @php
      $userwriter = -1;
      $userid = 0;
      $useremail = -1;
      $submittedstatus = -1;
      if (Auth::guard('web')->user() != null){
        $userwriter = Auth::guard('web')->user()->paid_status;
        $submittedstatus = Auth::guard('web')->user()->trx_image_submit;
        $userid = Auth::guard('web')->user()->id;
        $useremail = Auth::guard('web')->user()->email;
      } else {
        $userwriter = -1;
      }
      /* $useradmin = Auth::guard('writer')->user(); */
    @endphp

    <section class="talkshow-details-page">
      <!-- ======= Talkshow Details Section ======= -->
      <section id="talkshow-details-page" class="general d-flex">
        <div class="container mt-4">

          <div class="row d-flex justify-content-center mt-4">
            <div class="col-12 mt-4">
              <h1 class="text-center yellow-title">{{$data_root->title}}</h1>
            </div>

            <div class="col-12 mt-1">
              <h3 class="text-center yellow-title">{{$data_root->theme}}</h3>
            </div>

            <div class="row col-12 justify-content-center mt-4">
              @if ($data_root->count() == 0)
                <div style="margin-top: 250px;">
                  <div class="content-transparent">
                    <h1>Ups... there are no data available</h1>
                    <h2>Please try again :)</h2>
                  </div>
                </div>
              @else
                @foreach($data as $data_per_day)
                  <div class="row talkshow-details-people-box justify-content-center align-items-center col-lg-3 mb-2">
                    <div class="d-flex justify-content-center">
                      <div class="talkshow-details-pic-box"></div>
                    </div>
                    <h4 class="text-center blue-title">{{ $data_per_day->speaker->name }}</h4>
                    <h4 class="text-center blue-regular">{{ $data_per_day->from_time }}</h4>
                    <!-- <a class="youtube d-flex align-items-center justify-content-center"></a> -->
                    <a href="{{ $data_per_day->zoom }}" class="zoom d-flex align-items-center justify-content-center"></a>
                  </div>
                @endforeach
              @endif
            </div>
          </div>

        </div>
      </section>

      @include('footer')

      <!-- <img src="{{ asset ('assets/img/about.png') }}"/> -->
    </section><!-- End About Section -->

    @include('modals')
</body>

@include('default_footer_paid_page')

</html>
