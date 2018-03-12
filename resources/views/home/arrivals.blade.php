<!-- NEW ARRIVALS -->
<section class="new_arrivals padbot50">

  <!-- CONTAINER -->
  <div class="container">
    <h2>new arrivals</h2>

    <!-- JCAROUSEL -->
    <div class="jcarousel-wrapper">

      <!-- NAVIGATION -->
      <div class="jCarousel_pagination">
        <a href="javascript:void(0);" class="jcarousel-control-prev" ><i class="fa fa-angle-left"></i></a>
        <a href="javascript:void(0);" class="jcarousel-control-next" ><i class="fa fa-angle-right"></i></a>
      </div><!-- //NAVIGATION -->

      <div class="jcarousel" data-appear-top-offset='-100' data-animated='fadeInUp'>
        <ul>
          @foreach ($arrivals as $item)
            @php
              $image = explode(";", $item->imageUrl);
            @endphp
            <li>
              <!-- TOVAR -->
              <div class="tovar_item_new">
                <div class="tovar_img">
                  <img src="{{ $image[0] or "" }}" alt="" />
                  <div class="open-project-link"><a class="open-project tovar_view" href="javascript:void(0);" data-url="!projects/women/1.html" >quick view</a></div>
                </div>
                <div class="tovar_description clearfix">
                  <a class="tovar_title" href="product-page.html" >{{ $item->productName or "" }}</a>
                  <span class="tovar_price">{{ $item->productPrice or "" }}</span>
                </div>
              </div>
              <!-- //TOVAR -->
            </li>
          @endforeach
        </ul>
      </div>
    </div><!-- //JCAROUSEL -->
  </div><!-- //CONTAINER -->
</section><!-- //NEW ARRIVALS -->
