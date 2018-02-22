{{-- <!-- HOME -->
<section id="home" class="padbot0">
  <!-- TOP SLIDER -->
  <div class="flexslider top_slider">
    <ul class="slides">
      <li class="slide_item">

        <!-- CONTAINER -->
        <div class="container">
          <div class="flex_caption1">
            <p class="title1 captionDelay2 FromTop">mega sell</p>
            <p class="title2 captionDelay3 FromTop">last week of sales</p>
          </div>
          <a class="flex_caption2" href="javascript:void(0);" ><div class="middle">sale<span>shop</span>now</div></a>
          <div class="flex_caption3 slide_banner_wrapper">
            <a class="slide_banner slide1_banner1 captionDelay4 FromBottom" href="javascript:void(0);" ><img src="{{ asset('images/slider/slide1_baner1.jpg') }}" alt="" /></a>
            <a class="slide_banner slide1_banner2 captionDelay5 FromBottom" href="javascript:void(0);" ><img src="{{ asset('images/slider/slide1_baner2.jpg') }}" alt="" /></a>
            <a class="slide_banner slide1_banner3 captionDelay6 FromBottom" href="javascript:void(0);" ><img src="{{ asset('images/slider/slide1_baner3.jpg') }}" alt="" /></a>
          </div>
        </div><!-- //CONTAINER -->
      </li>

      <li class="slide_item">

        <!-- CONTAINER -->
        <div class="container">
          <div class="flex_caption1">
            <p class="title1 captionDelay2 FromTop">mega sell</p>
            <p class="title2 captionDelay3 FromTop">last week of sales</p>
          </div>
          <a class="flex_caption2" href="javascript:void(0);" ><div class="middle">sale<span>shop</span>now</div></a>
          <div class="flex_caption3 slide_banner_wrapper">
            <a class="slide_banner slide1_banner1 captionDelay4 FromBottom" href="javascript:void(0);" ><img src="images/slider/slide1_baner1.jpg" alt="" /></a>
            <a class="slide_banner slide1_banner3 captionDelay5 FromBottom" href="javascript:void(0);" ><img src="images/slider/slide1_baner3.jpg" alt="" /></a>
            <a class="slide_banner slide1_banner2 captionDelay6 FromBottom" href="javascript:void(0);" ><img src="images/slider/slide1_baner2.jpg" alt="" /></a>
          </div>
        </div><!-- //CONTAINER -->
      </li>

      <li class="slide_item">

        <!-- CONTAINER -->
        <div class="container">
          <div class="flex_caption1">
            <p class="title1 captionDelay2 FromTop">mega sell</p>
            <p class="title2 captionDelay3 FromTop">last week of sales</p>
          </div>
          <a class="flex_caption2" href="javascript:void(0);" ><div class="middle">sale<span>shop</span>now</div></a>
          <div class="flex_caption3 slide_banner_wrapper">
            <a class="slide_banner slide1_banner3 captionDelay4 FromBottom" href="javascript:void(0);" ><img src="images/slider/slide1_baner3.jpg" alt="" /></a>
            <a class="slide_banner slide1_banner1 captionDelay5 FromBottom" href="javascript:void(0);" ><img src="images/slider/slide1_baner1.jpg" alt="" /></a>
            <a class="slide_banner slide1_banner2 captionDelay6 FromBottom" href="javascript:void(0);" ><img src="images/slider/slide1_baner2.jpg" alt="" /></a>
          </div>
        </div><!-- //CONTAINER -->
      </li>
    </ul>
  </div><!-- //TOP SLIDER -->
</section><!-- //HOME --> --}}

<!-- HOME -->
<section id="home" class="padbot0">
  @if (isset($top_silder_groups) && count($top_silder_groups) > 0)
    <!-- TOP SLIDER -->
    <div class="flexslider top_slider">
      <ul class="slides">
        @foreach ($top_silder_groups as $item)
        <li class="slide_item" style="background-image:url({{ $item->imageUrl }})">
          <!-- CONTAINER -->
          <div class="container">
            <div class="flex_caption1">
              <p class="title1 captionDelay2 FromTop">{{ $item->titleSilderItemAbove }}</p>
              <p class="title2 captionDelay3 FromTop">{{ $item->titleSilderItemBelow }}</p>
            </div>
            <a class="flex_caption2" href="javascript:void(0);" ><div class="middle">sale<span>shop</span>now</div></a>
            <div class="flex_caption3 slide_banner_wrapper">
              {{-- <a class="slide_banner slide1_banner1 captionDelay4 FromBottom" href="javascript:void(0);" ><img src="{{ asset('images/slider/slide1_baner1.jpg') }}" alt="" /></a>
              <a class="slide_banner slide1_banner2 captionDelay5 FromBottom" href="javascript:void(0);" ><img src="{{ asset('images/slider/slide1_baner2.jpg') }}" alt="" /></a>
              <a class="slide_banner slide1_banner3 captionDelay6 FromBottom" href="javascript:void(0);" ><img src="{{ asset('images/slider/slide1_baner3.jpg') }}" alt="" /></a> --}}
              @if (isset($item->top_sliders) && count($item->top_sliders) > 0)
                @foreach ($item->top_sliders as $value)
                  <a class="slide_banner FromBottom" href="javascript:void(0);" ><img src="{{ asset($value->imageUrl) }}" /></a>
                @endforeach
              @endif
            </div>
          </div><!-- //CONTAINER -->
        </li>
        @endforeach
      </ul>
    </div><!-- //TOP SLIDER -->
  @endif
</section><!-- //HOME -->
