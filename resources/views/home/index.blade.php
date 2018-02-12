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
@endsection
