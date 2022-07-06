@extends('admin.layouts.app')
@section('content')

    <!-- header area start -->
    @include('admin.layouts.header')
    <!-- header area end -->

    <!-- page title area start -->
    @include('admin.layouts.breadcrumb')
    <!-- page title area end -->

    <div class="main-content-inner">
        <!-- sales report area start -->
        <div class="sales-report-area mt-5 mb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-report mb-xs-30">
                        <div class="s-report-inner pr--20 pt--30 mb-3">
                            <div class="icon"><i class="fa fa-btc"></i></div>
                            <div class="s-report-title d-flex justify-content-between">
                                <h4 class="header-title mb-0">Bitcoin</h4>
                                <p>24 H</p>
                            </div>
                            <div class="d-flex justify-content-between pb-2">
                                <h2>$ 4567809,987</h2>
                                <span>- 45.87</span>
                            </div>
                        </div>
                        <canvas id="coin_sales1" height="100"></canvas>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-report mb-xs-30">
                        <div class="s-report-inner pr--20 pt--30 mb-3">
                            <div class="icon"><i class="fa fa-btc"></i></div>
                            <div class="s-report-title d-flex justify-content-between">
                                <h4 class="header-title mb-0">Bitcoin Dash</h4>
                                <p>24 H</p>
                            </div>
                            <div class="d-flex justify-content-between pb-2">
                                <h2>$ 4567809,987</h2>
                                <span>- 45.87</span>
                            </div>
                        </div>
                        <canvas id="coin_sales2" height="100"></canvas>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-report">
                        <div class="s-report-inner pr--20 pt--30 mb-3">
                            <div class="icon"><i class="fa fa-eur"></i></div>
                            <div class="s-report-title d-flex justify-content-between">
                                <h4 class="header-title mb-0">Euthorium</h4>
                                <p>24 H</p>
                            </div>
                            <div class="d-flex justify-content-between pb-2">
                                <h2>$ 4567809,987</h2>
                                <span>- 45.87</span>
                            </div>
                        </div>
                        <canvas id="coin_sales3" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- sales report area end -->

        <div class="row mt-5">
            <!-- latest news area start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Latest News</h4>
                        <div class="row letest-news mt-5">
                            <div class="col-xl-6 single-post mb-xs-40 mb-sm-40">
                                <div class="lts-thumb">
                                    <img src="assets/images/blog/post-thumb1.jpg" alt="post thumb">
                                </div>
                                <div class="lts-content">
                                    <span>Admin Post</span>
                                    <h2><a href="blog.html">Sed ut perspiciatis unde omnis iste.</a></h2>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                                </div>
                            </div>
                            <div class="col-xl-6 single-post">
                                <div class="lts-thumb">
                                    <img src="assets/images/blog/post-thumb2.jpg" alt="post thumb">
                                </div>
                                <div class="lts-content">
                                    <span>Admin Post</span>
                                    <h2><a href="blog.html">Sed ut perspiciatis unde omnis iste.</a></h2>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- latest news area end -->
        </div>
        <!-- row area start-->
    </div>

@endsection
