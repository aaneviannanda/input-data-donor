{{-- Layout For guest --}}
@extends('layouts.client')

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
    <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Development of Information System for Donor Data Input</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">Donate your blood for humanity. Call the hotline: <span>031 5313289</span></h2>
        <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
                <a href="{{ route('login') }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Get Started</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{ asset('img/hero-idp.jpg') }}" class="img-fluid" alt="Hero img">
        </div>
    </div>
    </div>
    </section><!-- End Hero -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

    <div class="container" data-aos="fade-up">
    <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
            <h3>ABOUT IDP</h3>
            <h2>The Surabaya City PMI Blood Transfusion Unit (UTD) under the management of the Surabaya City PMI. 
                Located at Jalan Embong Ploso number 7-15 Surabaya, under the leadership of Dr. Hj Budi Arifah, 
                serves the people of Surabaya, especially East Java in general and other places besides East Java Province.</h2>
            <p>
                In 1955 PMI was located at Jl.Embong Ploso 7-9 and Dr. Payma was replaced by Dr. Suharyono. Dr. Payma passed away in the Netherlands while studying. 
                In 1972, Dr. Suharyono was replaced by Dr. Alfian and after the expansion of the building, it was named: Blood Transfusion Service. 
                With this expansion: blood donation activities were placed on Jl.Embong Ploso 7-9 and for laboratory space on Jl.Embong Ploso 11-15.
            </p>
            <div class="text-center text-lg-start">
            <a href="http://www.sby.uddpmikotasby.com/profil" target="_blank" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Read More</span>
                <i class="bi bi-arrow-right"></i>
            </a>
            </div>
        </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{ asset('img/about.jpg') }}" class="img-fluid-about" alt="Ilustrasi Donor Darah">
        </div>

    </div>
    </div>
    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Our Teams</h2>
                <p>IDP Teams</p>
            </header>

            <div class="row">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="box">
                        <img src="{{ asset('img/aan.png') }}" class="img-fluid img__team" alt="">
                        <h3>Aan Evian Nanda</h3>
                        <p>7th semester student majoring in informatics of the East Java Veterans National Development University</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="box">
                        <img src="{{ asset('img/alfin.png') }}" class="img-fluid img__team" alt="">
                        <h3>Alfinas Agung Mujiono</h3>
                        <p>7th semester student majoring in informatics of the East Java Veterans National Development University</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                    <div class="box">
                        <img src="{{ asset('img/nico.png') }}" class="img-fluid img__team" alt="">
                        <h3>Nico Natanael</h3>
                        <p>7th semester student majoring in informatics of the East Java Veterans National Development University</p>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- End Values Section -->

@endsection