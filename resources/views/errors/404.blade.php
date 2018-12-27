@extends('layouts.app')

@section('title', 'Not found!')

@section('content')
<div class="preloader_hide">

    <!-- PAGE -->
    <div id="page">
        <!-- PAGE 404 -->
        <section class="page404 parallax">
            
            <!-- CONTAINER -->
            <div class="container">
                <div class="wrapper404">
                    <h1>404</h1>
                    <h2>ERROR</h2>
                    <p>The page you are looking for does not exist. Return to the home page</p>
                    <a class="btn btn-white" href="{{ route('home') }}" >Return to home page</a>
                </div>
            </div><!-- //CONTAINER -->
        </section><!-- //PAGE 404 -->
    </div>
</div>
@endsection