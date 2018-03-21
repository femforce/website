@extends('template')

@section('page_content')
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">About Us</h2>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="ti-home"></i> Home</a></li>
                            <li class="current">About Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- end intro section -->
    </div>
    <div class="about section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <img src="{{asset('pexels-photo-601170 (1).jpeg')}}" alt="">
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="about-content">
                        <h2 class="medium-title">about femmforce</h2>
                        <p class="desc">As a woman in the workforce, from a small business owner to an employee of both large corporations and start up companies the past 14 years, i’ve had my share of experiences as a working woman. i’ve experienced feeling empowered as a working woman with great benefits and great advancement opportunities, but have also felt powerless when benefits were limited and a sense of advancement was nearly impossible due to a lack of women equality.</p>
                        <p>After feeling vulnerable in my career as an expectant mother of my second child I decided to endeavor this new journey to develop a platform to empower women in the workforce. I hadn’t realized how important employee benefits were until I worked for an organization that did not provide adequate benefits as a new mother. my experience with my first born was great as I had worked for an organization allowing me to put my family first during an important milestone in our lives. my personal experiences and passion to help women succeed while supporting equality in the workplace encouraged me to found</p>
                        <p>My personal experiences and passion to help women succeed while supporting equality in the workplace encouraged me to found FemmForce. We are passionate to participate in changing workplaces to become more women friendly and conscious of equality in the workforce with meritocracy. </p>
                        <a href="#" class="btn btn-common">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="service-main" class="section">

        <div class="container">
            <h1 class="section-title text-center">
                Your Time Is Important, We Won't Waste It
            </h1>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="service-item">
                        <div class="icon-wrapper">
                            <i class="ti-search">
                            </i>
                        </div>
                        <h2>
                            search hundreds of jobs
                        </h2>
                        <p>
                            Our catalog of jobs is one of the largest for women seeking jobs that allow you to succeed at work and home.
                        </p>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4">

                    <div class="service-item">
                        <div class="icon-wrapper">
                            <i class="ti-world">
                            </i>
                        </div>
                        <h2>
                            choose your benefits
                        </h2>
                        <p>
                            Filter your job search results by the benefits that matter most to you.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="service-item">
                        <div class="icon-wrapper">
                            <i class="ti-stats-up">
                            </i>
                        </div>
                        <h2>
                            let us help you
                        </h2>
                        <p>
                            Our support staff is here to help you find the perfect career. For mothers, by mothers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonial" class="section">
        <div class="container">
            <div class="row">
                <div class="touch-slider owl-carousel owl-theme" style="opacity: 1; display: block;">
                    <div class="owl-wrapper-outer">
                        <div class="owl-wrapper" style="width: 7020px; left: 0px; display: block; transition: all 1000ms ease; transform: translate3d(0px, 0px, 0px);">
                            <div class="owl-item" style="width: 1170px;">
                                <div class="item active text-center">
                                    <img class="img-member" src="assets/img/testimonial/img1.jpg" alt="">
                                    <div class="client-info">
                                        <h2 class="client-name">"Candace Zimmerman <span>(Architect)</span></h2>
                                    </div>
                                    <p><i class="fa fa-quote-left quote-left"></i> I didn't think I'd work again... until I found FemmForce <i class="fa fa-quote-right quote-right"></i><br> and realized there are companies out there that allow me <br> to be a professional and a mom. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clients section">
        <div class="container">
            <h2 class="section-title">
                Clients &amp; Partners
            </h2>
            <div class="row">
                <div class="col-md-12">
                    @foreach($companies as $company)
                        <div class="col-md-3 col-sm-3 col-xs-12 f-category">
                            <a href="browse-categories.html">
                                <img src="{{$company->image->path}}" alt="{{$company->image->path}}">
                                <h3>{{$company->name}}</h3>
                                <p>18 jobs</p>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
