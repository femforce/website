@extends('template')

@section('page_content')
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Blog</h2>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="ti-home"></i> Home</a></li>
                            <li class="current">Blog</li>
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
            <h2 class="section-title">Blog</h2>
            <div class="row">
                <div class="col-md-12">
                    @foreach($blogs as $blog)
                        <div class="col-md-3 col-sm-3 col-xs-12 f-category">
                            {!! $blog->html_content !!}
                            - {{$blog->user->name}}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
