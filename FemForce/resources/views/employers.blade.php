@extends('template')

@section('page_content')
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Our Employers</h2>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="ti-home"></i> Home</a></li>
                            <li class="current">Our Employers</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- end intro section -->
    </div>
    <section class="section">
        <div class="container">
            <h2 class="section-title">Our Employers</h2>
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
