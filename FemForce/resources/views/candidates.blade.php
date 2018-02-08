@extends('template')

@section('page_content')
    <div class="search-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Empowering women in the workplace</h1><br><h2>Our employers are companies that advocate and support their women team members</h2>
                    <div class="content">
                        <form method="" action="">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="job title / keywords / company name">
                                        <i class="ti-time"></i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="city / province / zip code">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="search-category-container">
                                        <label class="styled-select">
                                            <select class="dropdown-product selectpicker">
                                                <option>All Categories</option>
                                                @foreach($categories as $category)
                                                    <option>{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-1 col-sm-6">
                                    <button type="button" class="btn btn-search-icon"><i class="ti-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="popular-jobs">
                        <b>Popular Keywords: </b>
                        <a href="#">Manager</a>
                        <a href="#">Programming</a>
                        <a href="#">Sales</a>
                        <a href="#">Marketing</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- end intro section -->
    </div>
    <section class="job-browse section">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    @foreach($companies as $company)
                        @foreach($company->jobs as $job)
                            <div class="job-list">
                                <div class="thumb">
                                    <a href="job-details.html"><img src="assets/img/jobs/img-1.jpg" alt=""></a>
                                </div>
                                <div class="job-list-content">
                                    <h4><a href="job-details.html">{{$job->title}}</a><span class="full-time">Full-Time</span></h4>
                                    <p>{{$job->description}}</p>
                                    <div class="job-tag">
                                        <div class="pull-left">
                                            <div class="meta-tag">
                                                <span><a href="browse-categories.html"><i class="ti-brush"></i>Art/Design</a></span>
                                                <span><i class="ti-location-pin"></i>Cupertino, CA, USA</span>
                                                <span><i class="ti-time"></i>60/Hour</span>
                                            </div>
                                        </div>
                                        <div class="pull-right">
                                            <div class="icon">
                                                <i class="ti-heart"></i>
                                            </div>
                                            <div class="btn btn-common btn-rm">Apply For Job</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach

                    <ul class="pagination">
                        <li class="active"><a href="#" class="btn btn-common"><i class="ti-angle-left"></i> prev</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li class="active"><a href="#" class="btn btn-common">Next <i class="ti-angle-right"></i></a></li>
                    </ul>

                </div>
                <div class="col-md-3 col-sm-4">
                    <aside>
                        <div class="sidebar">
                            <div class="inner-box">
                                <h3>Categories</h3>
                                <ul class="cat-list">
                                    @foreach($categories as $category)
                                        <li>
                                            <a href="#">{{$category->name}} <span class="num-posts">4,287 Jobs</span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="inner-box">
                                <h3>Job Status</h3>
                                <ul class="cat-list">
                                    <li>
                                        <a href="#">Full Time <span class="num-posts">12,256 Jobs</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Part Time <span class="num-posts">6,510 Jobs</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Freelancer <span class="num-posts">1,171 Jobs</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Internship <span class="num-posts">876 Jobs</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="inner-box">
                                <h3>Locations</h3>
                                <ul class="cat-list">
                                    <li>
                                        <a href="#">New York <span class="num-posts">4,197 Jobs</span></a>
                                    </li>
                                    <li>
                                        <a href="#">San Francisco <span class="num-posts">2,256 Jobs</span></a>
                                    </li>
                                    <li>
                                        <a href="#">San Diego <span class="num-posts">3,278 Jobs</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Los Angeles <span class="num-posts">5,294 Jobs</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Chicago <span class="num-posts">1,746 Jobs</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Houston <span class="num-posts">871 Jobs</span></a>
                                    </li>
                                    <li>
                                        <a href="#">New Orleans <span class="num-posts">2,163 Jobs</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
