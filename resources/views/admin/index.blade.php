@extends('admin.layouts.app')
@section('title','Dashboard')
@section('css')
    <link href="assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
@endsection
{{-- @section('mid-br')
    <li><a class="parent-item" href="#">@yield('title')</a>&nbsp;<i class="fa fa-angle-right"></i>
    </li>
@endsection --}}
@section('content')
<div class="state-overview">
    <div class="row">
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box bg-blue">
            <span class="info-box-icon push-bottom"><i class="material-icons">style</i></span>
            <div class="info-box-content">
              <span class="info-box-text">Orders</span>
              <span class="info-box-number">450</span>
              <div class="progress">
                <div class="progress-bar width-60"></div>
              </div>
              <span class="progress-description">
                60% Increase in 28 Days
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box bg-orange">
            <span class="info-box-icon push-bottom"><i class="material-icons">card_travel</i></span>
            <div class="info-box-content">
              <span class="info-box-text">New Booking</span>
              <span class="info-box-number">155</span>
              <div class="progress">
                <div class="progress-bar width-40"></div>
              </div>
              <span class="progress-description">
                    40% Increase in 28 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box bg-purple">
            <span class="info-box-icon push-bottom"><i class="material-icons">phone_in_talk</i></span>
            <div class="info-box-content">
              <span class="info-box-text">Inquiry</span>
              <span class="info-box-number">52</span>
              <div class="progress">
                <div class="progress-bar width-80"></div>
              </div>
              <span class="progress-description">
                    80% Increase in 28 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box bg-success">
            <span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
            <div class="info-box-content">
              <span class="info-box-text">Total Earning</span>
              <span class="info-box-number">13,921</span><span>$</span>
              <div class="progress">
                <div class="progress-bar width-60"></div>
              </div>
              <span class="progress-description">
                    60% Increase in 28 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Chart Survey</header>
                <div class="tools">
                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                </div>
            </div>
            <div class="card-body no-padding height-9">
                <div class="row text-center">
                    <div class="col-sm-3 col-6">
                        <h4 class="margin-0">$ 209 </h4>
                        <p class="text-muted"> Today's Income</p>
                    </div>
                    <div class="col-sm-3 col-6">
                        <h4 class="margin-0">$ 837 </h4>
                        <p class="text-muted">This Week's Income</p>
                    </div>
                    <div class="col-sm-3 col-6">
                        <h4 class="margin-0">$ 3410 </h4>
                        <p class="text-muted">This Month's Income</p>
                    </div>
                    <div class="col-sm-3 col-6">
                        <h4 class="margin-0">$ 78,000 </h4>
                        <p class="text-muted">This Year's Income</p>
                    </div>
                </div>
                <div class="row">
                    <div id="area_line_chart" class="width-100"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

    <script src="assets/plugins/sparkline/jquery.sparkline.min.js" ></script>
    <script src="assets/js/pages/sparkline/sparkline-data.js" ></script>

    <script src="assets/plugins/morris/morris.min.js" ></script>
    <script src="assets/plugins/morris/raphael-min.js" ></script>
    <script src="assets/js/pages/chart/morris/morris_home_data.js" ></script>
@endsection