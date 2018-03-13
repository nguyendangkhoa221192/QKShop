<!-- HOME -->
<section id="home" class="padbot0">
  @if (isset($top_silder_groups) && count($top_silder_groups) > 0)
    <!-- TOP SLIDER -->
    <div class="flexslider top_slider">
      <ul class="slides">
        @foreach ($top_silder_groups as $item)
        <li class="slide_item" style="background-image:url({{ $item->image_url or "" }})">
          <!-- CONTAINER -->
          <div class="container">
            <div class="flex_caption1">
              <p class="title1 captionDelay2 FromTop">{{ $item->title_silder_item_above or "" }}</p>
              <p class="title2 captionDelay3 FromTop">{{ $item->title_silder_item_below or "" }}</p>
            </div>
            <a class="flex_caption2" href="javascript:void(0);" ><div class="middle">sale<span>shop</span>now</div></a>
            <div class="flex_caption3 slide_banner_wrapper">
              @if (isset($item->top_sliders) && count($item->top_sliders) > 0)
                @foreach ($item->top_sliders as $value)
                  <a class="slide_banner slide1_banner FromBottom" href="javascript:void(0);" ><img src="{{ $value->image_url or "" }}" /></a>
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
