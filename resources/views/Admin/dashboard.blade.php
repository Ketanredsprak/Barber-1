@extends('Admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h4>{{ __('labels.dashboard') }}</h4>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
                <svg class="stroke-icon">
                  <use href="{{ static_asset('admin/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                </svg></a></li>
            <li class="breadcrumb-item">{{ __('labels.dashboard') }}</li>
            <li class="breadcrumb-item active">{{ __('labels.dashboard') }}      </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row widget-grid">
      <div class="col-xxl-4 col-sm-6 box-col-6">
        <div class="card profile-box">
          <div class="card-body">
            <div class="media media-wrapper justify-content-between">
              <div class="media-body">
                <div class="greeting-user">
                  <h4 class="f-w-600">{{ __('labels.Welcome to Ehjez') }}</h4>
                  <p>{{ __('labels.Here whats happing in your account today') }}</p>
                  <div class="whatsnew-btn"><a class="btn btn-outline-white">{{ __('labels.Whats New !') }}</a></div>
                </div>
              </div>
              <div>
                <div class="clockbox">
                  <svg id="clock" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600">
                    <g id="face">
                      <circle class="circle" cx="300" cy="300" r="253.9"></circle>
                      <path class="hour-marks" d="M300.5 94V61M506 300.5h32M300.5 506v33M94 300.5H60M411.3 107.8l7.9-13.8M493 190.2l13-7.4M492.1 411.4l16.5 9.5M411 492.3l8.9 15.3M189 492.3l-9.2 15.9M107.7 411L93 419.5M107.5 189.3l-17.1-9.9M188.1 108.2l-9-15.6"></path>
                      <circle class="mid-circle" cx="300" cy="300" r="16.2"></circle>
                    </g>
                    <g id="hour">
                      <path class="hour-hand" d="M300.5 298V142"></path>
                      <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                    </g>
                    <g id="minute">
                      <path class="minute-hand" d="M300.5 298V67">   </path>
                      <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                    </g>
                    <g id="second">
                      <path class="second-hand" d="M300.5 350V55"></path>
                      <circle class="sizing-box" cx="300" cy="300" r="253.9">   </circle>
                    </g>
                  </svg>
                </div>
                <div class="badge f-10 p-0" id="txt"></div>
              </div>
            </div>
            <div class="cartoon"><img class="img-fluid" src="{{ static_asset('admin/assets/images/dashboard/cartoon.svg') }}" alt="vector women with leptop"></div>
          </div>
        </div>
      </div>
      <div class="col-xxl-auto col-xl-3 col-sm-6 box-col-6">
        <div class="row">
          <div class="col-xl-12">
            <div class="card widget-1">
              <div class="card-body">
                <div class="widget-content">
                  <div class="widget-round secondary">
                    <div class="bg-round">
                      <svg class="svg-fill">
                        <use href="{{ static_asset('admin/assets/svg/icon-sprite.svg#cart') }}"> </use>
                      </svg>
                      <svg class="half-circle svg-fill">
                        <use href="{{ static_asset('admin/assets/svg/icon-sprite.svg#halfcircle') }}"></use>
                      </svg>
                    </div>
                  </div>
                  <div>
                    <h4>10,000</h4><span class="f-light">{{ __('labels.Purchase') }}</span>
                  </div>
                </div>
                <div class="font-secondary f-w-500"><i class="icon-arrow-up icon-rotate me-1"></i><span>+50%</span></div>
              </div>
            </div>
            <div class="col-xl-12">
              <div class="card widget-1">
                <div class="card-body">
                  <div class="widget-content">
                    <div class="widget-round primary">
                      <div class="bg-round">
                        <svg class="svg-fill">
                          <use href="{{ static_asset('admin/assets/svg/icon-sprite.svg#tag') }}"> </use>
                        </svg>
                        <svg class="half-circle svg-fill">
                          <use href="{{ static_asset('admin/assets/svg/icon-sprite.svg#halfcircle') }}"></use>
                        </svg>
                      </div>
                    </div>
                    <div>
                      <h4>4,200</h4><span class="f-light">{{ __('labels.Sales') }}</span>
                    </div>
                  </div>
                  <div class="font-primary f-w-500"><i class="icon-arrow-up icon-rotate me-1"></i><span>+70%</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-auto col-xl-3 col-sm-6 box-col-6">
        <div class="row">
          <div class="col-xl-12">
            <div class="card widget-1">
              <div class="card-body">
                <div class="widget-content">
                  <div class="widget-round warning">
                    <div class="bg-round">
                      <svg class="svg-fill">
                        <use href="{{ static_asset('admin/assets/svg/icon-sprite.svg#return-box') }}"> </use>
                      </svg>
                      <svg class="half-circle svg-fill">
                        <use href="{{ static_asset('admin/assets/svg/icon-sprite.svg#halfcircle') }}"></use>
                      </svg>
                    </div>
                  </div>
                  <div>
                    <h4>7000</h4><span class="f-light">{{ __('labels.Sales return') }}</span>
                  </div>
                </div>
                <div class="font-warning f-w-500"><i class="icon-arrow-down icon-rotate me-1"></i><span>-20%</span></div>
              </div>
            </div>
            <div class="col-xl-12">
              <div class="card widget-1">
                <div class="card-body">
                  <div class="widget-content">
                    <div class="widget-round success">
                      <div class="bg-round">
                        <svg class="svg-fill">
                          <use href="{{ static_asset('admin/assets/svg/icon-sprite.svg#rate')}}"> </use>
                        </svg>
                        <svg class="half-circle svg-fill">
                          <use href="{{ static_asset('admin/assets/svg/icon-sprite.svg#halfcircle')}}"> </use>
                        </svg>
                      </div>
                    </div>
                    <div>
                      <h4>5700</h4><span class="f-light">{{ __('labels.Purchase rate') }}</span>
                    </div>
                  </div>
                  <div class="font-success f-w-500"><i class="icon-arrow-up icon-rotate me-1"></i><span>+70%</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-auto col-xl-12 col-sm-6 box-col-6">
        <div class="row">
          <div class="col-xxl-12 col-xl-6 box-col-12">
            <div class="card widget-1 widget-with-chart">
              <div class="card-body">
                <div>
                  <h4 class="mb-1">1,80k</h4><span class="f-light">{{ __('labels.Orders') }}</span>
                </div>
                <div class="order-chart">
                  <div id="orderchart"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-12 col-xl-6 box-col-12">
            <div class="card widget-1 widget-with-chart">
              <div class="card-body">
                <div>
                  <h4 class="mb-1">6,90k</h4><span class="f-light">{{ __('labels.Profit') }}</span>
                </div>
                <div class="profit-chart">
                  <div id="profitchart"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-8 col-lg-12 box-col-12">
        <div class="card">
          <div class="card-header card-no-border">
            <h5>Overall balance</h5>
          </div>
          <div class="card-body pt-0">
            <div class="row m-0 overall-card">
              <div class="col-xl-9 col-md-12 col-sm-7 p-0">
                <div class="chart-right">
                  <div class="row">
                    <div class="col-xl-12">
                      <div class="card-body p-0">
                        <ul class="balance-data">
                          <li><span class="circle bg-warning"> </span><span class="f-light ms-1">Earning</span></li>
                          <li><span class="circle bg-primary"> </span><span class="f-light ms-1">Expense</span></li>
                        </ul>
                        <div class="current-sale-container">
                          <div id="chart-currently"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-12 col-sm-5 p-0">
                <div class="row g-sm-4 g-2">
                  <div class="col-xl-12 col-md-4">
                    <div class="light-card balance-card widget-hover">
                      <div class="svg-box">
                        <svg class="svg-fill">
                          <use href="{{ static_asset('admin/assets/svg/icon-sprite.svg#income') }}"></use>
                        </svg>
                      </div>
                      <div> <span class="f-light">Income</span>
                        <h6 class="mt-1 mb-0">$22,678</h6>
                      </div>
                      <div class="ms-auto text-end">
                        <div class="dropdown icon-dropdown">
                          <button class="btn dropdown-toggle" id="incomedropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="incomedropdown"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday </a></div>
                        </div><span class="font-success">+$456</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-4">
                    <div class="light-card balance-card widget-hover">
                      <div class="svg-box">
                        <svg class="svg-fill">
                          <use href="{{ static_asset('admin/assets/svg/icon-sprite.svg#expense') }}"></use>
                        </svg>
                      </div>
                      <div> <span class="f-light">Expense</span>
                        <h6 class="mt-1 mb-0">$12,057</h6>
                      </div>
                      <div class="ms-auto text-end">
                        <div class="dropdown icon-dropdown">
                          <button class="btn dropdown-toggle" id="expensedropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="expensedropdown"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday </a></div>
                        </div><span class="font-danger">+$256</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-4">
                    <div class="light-card balance-card widget-hover">
                      <div class="svg-box">
                        <svg class="svg-fill">
                          <use href="{{ static_asset('admin/assets/svg/icon-sprite.svg#doller-return') }}"></use>
                        </svg>
                      </div>
                      <div> <span class="f-light">Cashback</span>
                        <h6 class="mt-1 mb-0">8,475</h6>
                      </div>
                      <div class="ms-auto text-end">
                        <div class="dropdown icon-dropdown">
                          <button class="btn dropdown-toggle" id="cashbackdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cashbackdropdown"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday </a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-7 col-md-6 col-sm-5 box-col-6">
        <div class="card height-equal">
          <div class="card-header card-no-border">
            <div class="header-top">
              <h5>Recent Orders</h5>
              <div class="card-header-right-icon">
                <div class="dropdown icon-dropdown">
                  <button class="btn dropdown-toggle" id="recentdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="recentdropdown"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="row recent-wrapper">
              <div class="col-xl-6">
                <div class="recent-chart">
                  <div id="recentchart"></div>
                </div>
              </div>
              <div class="col-xl-6">
                <ul class="order-content">
                  <li> <span class="recent-circle bg-primary"> </span>
                    <div> <span class="f-light f-w-500">Cancelled </span>
                      <h4 class="mt-1 mb-0">2,302<span class="f-light f-14 f-w-400 ms-1">(Last 6 Month) </span></h4>
                    </div>
                  </li>
                  <li> <span class="recent-circle bg-info"></span>
                    <div> <span class="f-light f-w-500">Delivered</span>
                      <h4 class="mt-1 mb-0">9,302<span class="f-light f-14 f-w-400 ms-1">(Last 6 Month) </span></h4>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- Container-fluid Ends-->



    <!-- Sidebar jquery-->
    <script src="{{ static_asset('admin/assets/js/config.js') }}"></script>
    <!-- Plugins JS start-->

    <script src="{{ static_asset('admin/assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/chart/apex-chart/moment.min.js') }}"></script>

    <script src="{{ static_asset('admin/assets/js/dashboard/default.js') }}"></script>


    <!-- Plugins JS Ends-->


@endsection
