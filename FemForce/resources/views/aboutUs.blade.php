@extends('template')

@section('page_content')
    <div class="container section-our-story" style="height: 650px;"></div>
    </section>
    <!-- end intro section -->
    </div>
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12" style="margin-top: 120px">
                    <img src="{{secure_asset('about_image.jpeg')}}" alt="">
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="about-content">
                        <h2 class="medium-title">Our Story</h2>
                        <p style="margin-top: 10px"><span>I am an active member and full-time participant of corporate life while a devoted mother and wife. I’m committed to helping others personally and professionally with my passion to assist women establish equality in their workplace and to live out their dreams- at work and wherever else they choose to shine.</span></p>
                        <p/>
                        <p><span>My experiences span from being a small business owner to having been an employee of both large corporations and start-up companies over the past 14 years. As a female in the the workforce, I personally and intimately understand the issues and challenges of women in what is often regarded as “A man’s world”.</span></p>
                        <p/>
                        <p><span>I’ve experienced feeling empowered as a working woman with employers that provided me great benefits and advancement opportunities. I have also worked in other environments that left me feeling powerless, and where benefits were very limited; where the idea of advancement was unattainable and felt nearly impossible, due to a lack of female equality.</span></p>
                        <p/>
                        <p><span>Throughout my career my experiences have varied as an expectant mother with one child to another. Working for one organization, they allowed me to put my family first during an important milestone in our lives. While working with another company did not provide adequate benefits for a new mother. The vast difference in policies and maternity benefits made me realize just how important this was for women and how it could impact their experiences and choices in such a critical time of life.</span></p>
                        <p><span>As I have experienced the discomfort and stress of my own deep feelings of vulnerability in my career, I decided to embark on a new journey to develop a platform with a primary goal of empowering women in the workforce. This platform will not only guide women through informative decisions, but will also highlight organizations dedicated to supporting women. We have invested in our employer partners by conducting a Benefits Analysis to ensure the organization's commitment to support women in the workplace. Through various surveys taken our team has identified these key Benefits most important to women when selecting an employer. Our partners must offer all 15 Employee Benefits to participate on our platform. </span></p>
                        <p/>
                        <p><span>My personal experiences became my driving force and have fueled my passion encouraging me to found FemmForce. To help women succeed, supporting equality in the workplace and creating change for the better.</span></p>
                        <p><span>We are dedicated to evolving workplaces to become more women-friendly and conscious of equality in the workforce with meritocracy.</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<section id="service-main" class="section">--}}

        {{--<div class="container">--}}
            {{--<h1 class="section-title text-center">--}}
                {{--Your Time Is Important, We Won't Waste It--}}
            {{--</h1>--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-6 col-md-4">--}}
                    {{--<div class="service-item">--}}
                        {{--<div class="icon-wrapper">--}}
                            {{--<i class="ti-search">--}}
                            {{--</i>--}}
                        {{--</div>--}}
                        {{--<h2>--}}
                            {{--search hundreds of jobs--}}
                        {{--</h2>--}}
                        {{--<p>--}}
                            {{--Our catalog of jobs is one of the largest for women seeking jobs that allow you to succeed at work and home.--}}
                        {{--</p>--}}
                    {{--</div>--}}

                {{--</div>--}}
                {{--<div class="col-sm-6 col-md-4">--}}

                    {{--<div class="service-item">--}}
                        {{--<div class="icon-wrapper">--}}
                            {{--<i class="ti-world">--}}
                            {{--</i>--}}
                        {{--</div>--}}
                        {{--<h2>--}}
                            {{--choose your benefits--}}
                        {{--</h2>--}}
                        {{--<p>--}}
                            {{--Filter your job search results by the benefits that matter most to you.--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-6 col-md-4">--}}
                    {{--<div class="service-item">--}}
                        {{--<div class="icon-wrapper">--}}
                            {{--<i class="ti-stats-up">--}}
                            {{--</i>--}}
                        {{--</div>--}}
                        {{--<h2>--}}
                            {{--let us help you--}}
                        {{--</h2>--}}
                        {{--<p>--}}
                            {{--Our support staff is here to help you find the perfect career. For mothers, by mothers.--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<section id="testimonial" class="section">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="touch-slider owl-carousel owl-theme" style="opacity: 1; display: block;">--}}
                    {{--<div class="owl-wrapper-outer">--}}
                        {{--<div class="owl-wrapper" style="width: 7020px; left: 0px; display: block; transition: all 1000ms ease; transform: translate3d(0px, 0px, 0px);">--}}
                            {{--<div class="owl-item" style="width: 1170px;">--}}
                                {{--<div class="item active text-center">--}}
                                    {{--<img class="img-member" src="assets/img/testimonial/img1.jpg" alt="">--}}
                                    {{--<div class="client-info">--}}
                                        {{--<h2 class="client-name">"Candace Zimmerman <span>(Architect)</span></h2>--}}
                                    {{--</div>--}}
                                    {{--<p><i class="fa fa-quote-left quote-left"></i> I didn't think I'd work again... until I found FemmForce <i class="fa fa-quote-right quote-right"></i><br> and realized there are companies out there that allow me <br> to be a professional and a mom. </p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<section class="clients section">--}}
        {{--<div class="container">--}}
            {{--<h2 class="section-title">--}}
                {{--Clients &amp; Partners--}}
            {{--</h2>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--@foreach($companies as $company)--}}
                        {{--<div class="col-md-3 col-sm-3 col-xs-12 f-category">--}}
                            {{--<a href="browse-categories.html">--}}
                                {{--<img src="{{$company->image->path}}" alt="{{$company->image->path}}">--}}
                                {{--<h3>{{$company->name}}</h3>--}}
                                {{--<p>18 jobs</p>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--@endforeach--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
@endsection
