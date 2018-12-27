@extends('layouts.app')

@section('title', $title)

@section('content')
{{-- <script src="{{ asset('js/home/loadajax.js') }}"></script> --}}
<div id="page">
    {{-- include layout Featured --}}
    @include('home.top_slider')
    {{-- include layout Featured --}}
    @include('home.featured')
    {{--include layout New Arrivals  --}}
    @include('home.arrivals')
    {{-- include layout Brands --}}
    @include('home.brands')
    {{-- include layout Services --}}
    @include('home.service')
    {{-- include layout Blogs --}}
    @include('home.blog_footer')
</div>

<!-- TOVAR MODAL CONTENT -->
<div id="modal-body" class="clearfix">
    <div id="tovar_content"></div>
    <div class="close_block"></div>
</div><!-- TOVAR MODAL CONTENT -->
@endsection

@section('custom_scripts')
    @loadLocalJS(/js/home/handleShoppingLoveList.js)
@endsection
