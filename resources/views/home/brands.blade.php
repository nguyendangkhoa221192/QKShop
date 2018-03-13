<!-- BRANDS -->
<section class="brands_carousel">

  <!-- CONTAINER -->
  <div class="container">

    <!-- JCAROUSEL -->
    <div class="jcarousel-wrapper">

      <!-- NAVIGATION -->
      <div class="jCarousel_pagination">
        <a href="javascript:void(0);" class="jcarousel-control-prev" ><i class="fa fa-angle-left"></i></a>
        <a href="javascript:void(0);" class="jcarousel-control-next" ><i class="fa fa-angle-right"></i></a>
      </div><!-- //NAVIGATION -->

      <div class="jcarousel" data-appear-top-offset='-100' data-animated='fadeInUp'>
        <ul>
          @foreach ($brands as $item)
            <li><a href="{{ $item->home_page_url or "" }}" target="_blank" ><img src="{{ $item->image_url or "" }}" alt="" /></a></li>
          @endforeach
        </ul>
      </div>
    </div><!-- //JCAROUSEL -->
  </div><!-- //CONTAINER -->
</section><!-- //BRANDS -->
<hr class="container">
