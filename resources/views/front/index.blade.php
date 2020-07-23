@extends('layouts.front')
@section('title')
    home page
@endsection
@section('content')
    <!-- Hero Area Start-->
    <div class="slider-area">
        <div class="single-slider slider-height d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <!-- Hero Caption -->
                        <div class="hero__caption">
                            <p>Find the nearest pharmacies</p>
                            <h1>Find the right medicine</h1>
                        </div>
                        <!--Hero form -->
                        <form action="#" class="search-box">
                            <div class="input-form">
                                <input type="text" placeholder="Search for a medicine">
                                <!-- icon search -->
                                <div class="search-form">
                                    <button><i class="ti-search"></i></button>
                                </div>
                                <!-- icon search -->
                                <div class="world-form">
                                    <i class="fas fa-tablets"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
