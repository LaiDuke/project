@extends('layouts.admin')

@section('sidebar')

    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box"><span class="hamburger-inner"></span></span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button"
                    class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Trang chủ</li>
                <li>
                    <a href="{{asset("/")}}" class="mm-active">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Trang chủ
                    </a>
                </li>
                <li class="app-sidebar__heading">Quản Lý</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Sản Phẩm Theo
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{asset("Product")}}">
                                <i class="metismenu-icon"></i>
                                Nhà Cung Cấp
                            </a>
                        </li>
                        <li>
                            <a href="{{asset("Product")}}">
                                <i class="metismenu-icon">
                                </i>Nhóm Hàng
                            </a>
                        </li>
                        <li>
                            <a href="{{asset("Product")}}">
                                <i class="metismenu-icon"></i>
                                Nhãn Hiệu
                            </a>
                        </li>
                        <li>
                            <a href="{{asset("Product")}}">
                                <i class="metismenu-icon">
                                </i>Khu Vực Để
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-car"></i>
                        Hóa Đơn Theo
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{asset("Purchase")}}">
                                <i class="metismenu-icon">
                                </i>Ngày
                            </a>
                        </li>
                        <li>
                            <a href="{{asset("Purchase")}}">
                                <i class="metismenu-icon">
                                </i>Tuần
                            </a>
                        </li>
                        <li>
                            <a href="{{asset("Purchase")}}">
                                <i class="metismenu-icon">
                                </i>Tháng
                            </a>
                        </li>
                        <li>
                            <a href="{{asset("Purchase")}}">
                                <i class="metismenu-icon">
                                </i>Người Bán
                            </a>
                        </li>
                        <li>
                            <a href="{{asset("Purchase")}}">
                                <i class="metismenu-icon">
                                </i>Khách Hàng
                            </a>
                        </li>
                        <li>
                            <a href="{{asset("Purchase")}}">
                                <i class="metismenu-icon">
                                </i>Số Tiền
                            </a>
                        </li>
                        <li>
                            <a href="{{asset("Purchase")}}">
                                <i class="metismenu-icon">
                                </i>Sản Phẩm
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="tables-regular.html">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Nhân viên
                    </a>
                </li>
                <li class="app-sidebar__heading">Bán Hàng</li>
                <li>
                    <a href="{{asset("Sale/create")}}">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Bán hàng ngay
                    </a>
                </li>
                <li class="app-sidebar__heading">Danh mục</li>
                <li>
                    <a href="{{asset("Product")}}" >
                        <i class="metismenu-icon pe-7s-mouse">
                        </i>Sản Phẩm
                    </a>
                </li>
                <li>
                    <a href="{{asset("Product")}}">
                        <i class="metismenu-icon pe-7s-mouse">
                        </i>Bảng Giá/Hàng Hóa
                    </a>
                </li>
                <li>
                    <a href="{{asset("Purchase")}}">
                        <i class="metismenu-icon pe-7s-eyedropper">
                        </i>Hàng Nhập
                    </a>
                </li>
                <li>
                    <a href="{{asset("Sale")}}">
                        <i class="metismenu-icon pe-7s-pendrive">
                        </i>Hóa Đơn
                    </a>
                </li>
                <li class="app-sidebar__heading">Báo Cáo</li>
                <li>
                    <a href="">
                        <i class="metismenu-icon pe-7s-graph2">
                        </i>Biểu Đồ
                    </a>
                </li>
                <li class="app-sidebar__heading">PRO Version</li>
                <li>
                    <a href="#"
                       target="_blank">
                        <i class="metismenu-icon pe-7s-graph2">
                        </i>
                        Upgrade to PRO
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection
@section('add_script')
<script>
    $(document).ready(function () {
        var ctx = document.getElementById('week_chart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['{{\Carbon\Carbon::now()->subWeek()->isoFormat('ddd')}}',
                    '{{\Carbon\Carbon::now()->subDays(6)->isoFormat('ddd')}}',
                    '{{\Carbon\Carbon::now()->subDays(5)->isoFormat('ddd')}}',
                    '{{\Carbon\Carbon::now()->subDays(4)->isoFormat('ddd')}}',
                    '{{\Carbon\Carbon::now()->subDays(3)->isoFormat('ddd')}}',
                    '{{\Carbon\Carbon::now()->subDays(2)->isoFormat('ddd')}}',
                    '{{\Carbon\Carbon::now()->subDays(1)->isoFormat('ddd')}}',],
                datasets:
                    [
                        {
                            label: 'Doanh thu',
                            data: [{{array_pop($week_income)}},
                                {{array_pop($week_income)}},
                                {{array_pop($week_income)}},
                                {{array_pop($week_income)}},
                                {{array_pop($week_income)}},
                                {{array_pop($week_income)}},
                                {{array_pop($week_income)}},],
                            backgroundColor: 'rgb(24,206,212)'
                        },
                        {
                            label: 'Lợi nhuận',
                            data: [{{array_pop($week_profit)}},
                                {{array_pop($week_profit)}},
                                {{array_pop($week_profit)}},
                                {{array_pop($week_profit)}},
                                {{array_pop($week_profit)}},
                                {{array_pop($week_profit)}},
                                {{array_pop($week_profit)}},],
                            backgroundColor: 'rgb(255,99,132)'
                        },

                    ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                title: {
                    display: true,
                    text: 'VNĐ(x1000)'
                }
            }
        });

    });
    $(document).ready(function () {
        new Chart(document.getElementById("line_week_chart"), {
            type: 'line',
            data: {
                labels: ['{{\Carbon\Carbon::now()->subWeek()->isoFormat('ddd')}}',
                    '{{\Carbon\Carbon::now()->subDays(6)->isoFormat('ddd')}}',
                    '{{\Carbon\Carbon::now()->subDays(5)->isoFormat('ddd')}}',
                    '{{\Carbon\Carbon::now()->subDays(4)->isoFormat('ddd')}}',
                    '{{\Carbon\Carbon::now()->subDays(3)->isoFormat('ddd')}}',
                    '{{\Carbon\Carbon::now()->subDays(2)->isoFormat('ddd')}}',
                    '{{\Carbon\Carbon::now()->subDays(1)->isoFormat('ddd')}}',],
                datasets: [{
                    data: [{{array_pop($week_invoice_count)}},
                        {{array_pop($week_invoice_count)}},
                        {{array_pop($week_invoice_count)}},
                        {{array_pop($week_invoice_count)}},
                        {{array_pop($week_invoice_count)}},
                        {{array_pop($week_invoice_count)}},
                        {{array_pop($week_invoice_count)}},],
                    label: "Bán hàng",
                    borderColor: "#3e95cd",
                    fill: false
                }, {
                    data: [{{array_pop($week_purchase_count)}},
                        {{array_pop($week_purchase_count)}},
                        {{array_pop($week_purchase_count)}},
                        {{array_pop($week_purchase_count)}},
                        {{array_pop($week_purchase_count)}},
                        {{array_pop($week_purchase_count)}},
                        {{array_pop($week_purchase_count)}},],
                    label: "Nhập hàng",
                    borderColor: "#8e5ea2",
                    fill: false
                },
                ]
            },
        });
    });
</script>
@endsection
@section('title_main')
    <div class="page-title-heading">
        <div class="page-title-icon">
            <i class="pe-7s-wallet icon-gradient bg-plum-plate">
            </i>
        </div>
        <div>Tranh chính
            <div class="page-title-subheading">Chúng tôi cung cấp các thông tin để bạn dễ dàng quản lý của hàng của mình
            </div>
        </div>
    </div>
    <div class="page-title-actions">

        <button type="button" data-toggle="tooltip" title="Thêm Sản Phẩm" data-placement="bottom"
                class="btn-shadow mr-3 btn btn-dark">
            <a data-toggle="modal" data-target="#addproduct">
                <i class="fa fa-plus"></i>
            </a>
        </button>
        <div class="d-inline-block dropdown">
            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                Buttons
            </button>
            <div tabindex="-1" role="menu" aria-hidden="true"
                 class="dropdown-menu dropdown-menu-right">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            <i class="nav-link-icon lnr-inbox"></i>
                            <span>
                                                            Inbox
                                                        </span>
                            <div class="ml-auto badge badge-pill badge-secondary">86</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            <i class="nav-link-icon lnr-book"></i>
                            <span>
                                                            Book
                                                        </span>
                            <div class="ml-auto badge badge-pill badge-danger">5</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            <i class="nav-link-icon lnr-picture"></i>
                            <span>
                                                            Picture
                                                        </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a disabled href="javascript:void(0);" class="nav-link disabled">
                            <i class="nav-link-icon lnr-file-empty"></i>
                            <span>File Disabled</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('main_content')
    <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-midnight-bloom">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Hóa đơn</div>
                        <div class="widget-subheading">Ngày hôm nay {{date("D-d/m")}}</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>{{count($invoices_today)}}</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-arielle-smile">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Doanh thu(x1000VNĐ)</div>
                        <div class="widget-subheading">Ngày hôm nay {{date("D-d/m")}}</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white">
                            <span>
                                <?php
                                $total=0;
                                if (isset($invoices_today)) {
                                    foreach($invoices_today as $invoice)
                                        $total += $invoice->total_amount;
                                }
                                echo ($total/1000);
                                ?>
                            </span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-grow-early">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Tỷ suất lợi nhuận</div>
                        <div class="widget-subheading">Ngày hôm nay {{date("D-d/m")}}</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span><?php if (isset($money_today)) if ($total)echo number_format($money_today/($total/100),1) ?>%</span></div>
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="d-xl-none d-lg-block col-md-6 col-xl-4">--}}
{{--            <div class="card mb-3 widget-content bg-premium-dark">--}}
{{--                <div class="widget-content-wrapper text-white">--}}
{{--                    <div class="widget-content-left">--}}
{{--                        <div class="widget-heading">Products Sold</div>--}}
{{--                        <div class="widget-subheading">Revenue streams</div>--}}
{{--                    </div>--}}
{{--                    <div class="widget-content-right">--}}
{{--                        <div class="widget-numbers text-warning"><span>$14M</span></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-6">
            <div class="mb-3 card">
                <div class="card-header-tab card-header-tab-animation card-header">
                    <div class="card-header-title">
                        <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                        Báo cáo kinh doanh
                    </div>
                    <ul class="nav">
                        <li class="nav-item"><a href="javascript:void(0);" class="active nav-link">Tuần này</a></li>
                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link second-tab-toggle">Tuần trước</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tabs-eg-77">
                            <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                <div class="widget-chat-wrapper-outer">
                                    <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                        <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                            <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                </div></div>
                                            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                            </div>
                                        </div>
                                        <canvas id="week_chart" width="726" height="363" class="chartjs-render-monitor" style="display: block; width: 726px; height: 363px;"></canvas>
                                    </div>
                                </div>
                            </div>

                            <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Top khách hàng</h6>
                            <div class="scroll-area-sm">
                                <div class="scrollbar-container ps ps--active-y">
                                    <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                        @foreach($customers as $customer)
                                        <li class="list-group-item">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <img width="42" class="rounded-circle" src="{{$customer->image}}" alt="">
                                                    </div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">{{$customer->name}}</div>
                                                        <div class="widget-subheading">{{$customer->phone}}</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="font-size-xlg text-muted">
                                                            <small class="opacity-5 pr-1">x1000VNĐ</small>
                                                            <?php
                                                            $customer_money = 0;
                                                            if (isset($customer->Invoice)){
                                                                foreach ($customer->Invoice as $invoice){
                                                                    $customer_money+=$invoice->total_amount;
                                                                }
                                                            }
                                                            ?>
                                                            <span><?php echo $customer_money/1000?></span>
                                                            <small class="text-success pl-2">
                                                                <i class="fa fa-angle-up"></i>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                        <li class="list-group-item">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/5.jpg" alt="">
                                                    </div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Ruben Tillman</div>
                                                        <div class="widget-subheading">UI Designer</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="font-size-xlg text-muted">
                                                            <small class="opacity-5 pr-1">$</small>
                                                            <span>54</span>
                                                            <small class="text-success pl-2">
                                                                <i class="fa fa-angle-up"></i>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                    </div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Vinnie Wagstaff</div>
                                                        <div class="widget-subheading">Java Programmer</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="font-size-xlg text-muted">
                                                            <small class="opacity-5 pr-1">$</small>
                                                            <span>429</span>
                                                            <small class="text-warning pl-2">
                                                                <i class="fa fa-dot-circle"></i>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                    </div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Ella-Rose Henry</div>
                                                        <div class="widget-subheading">Web Developer</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="font-size-xlg text-muted">
                                                            <small class="opacity-5 pr-1">$</small>
                                                            <span>129</span>
                                                            <small class="text-danger pl-2">
                                                                <i class="fa fa-angle-down"></i>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                    </div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Ruben Tillman</div>
                                                        <div class="widget-subheading">UI Designer</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="font-size-xlg text-muted">
                                                            <small class="opacity-5 pr-1">$</small>
                                                            <span>54</span>
                                                            <small class="text-success pl-2">
                                                                <i class="fa fa-angle-up"></i>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 200px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 139px;"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6">
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title">
                        <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                        Báo cáo số giao dịch
                    </div>
                    <div class="btn-actions-pane-right">
                        <div class="nav">
                            <a href="javascript:void(0);" class="border-0 btn-pill btn-wide btn-transition active btn btn-outline-alternate">Tab 1</a>
                            <a href="javascript:void(0);" class="ml-1 btn-pill btn-wide border-0 btn-transition  btn btn-outline-alternate second-tab-toggle-alt">Tab 2</a>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="tab-eg-55">
                        <div class="widget-chart p-3">
                            <div style="height: 350px"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                <canvas id="line_week_chart" width="734" height="350" class="chartjs-render-monitor" style="display: block; width: 734px; height: 350px;"></canvas>
                            </div>
                            <script>

                            </script>
                            <div class="widget-chart-content text-center mt-5">
                                <div class="widget-description mt-0 text-warning">
                                    <i class="fa fa-arrow-left"></i>
                                    <span class="pl-1">{{number_format($percent_purchase_product,1)}}%</span>
                                    <span class="text-muted opacity-8 pl-1">Hàng hóa tồn kho trung bình</span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-2 card-body">
                            <div class="row">
                                @foreach($product as $pro)
                                    <?php
                                    $p_quantity = 0;
                                    $p_left = 0;
                                    if (isset($pro)){
                                        foreach($pro->Purchase as $purchase_product){
                                            if ($purchase_product->left>0){
                                                    $p_left+=$purchase_product->left;
                                                    $p_quantity+=$purchase_product->quantity;
                                            }
                                        }
                                    }
                                    if ($p_quantity) $percent_p = ($p_left/$p_quantity)*100;
                                    else $percent_p = 0;
                                    ?>
                                        <div class="col-md-6">
                                            <div class="widget-content">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-numbers fsize-3 text-muted"><?php echo number_format($percent_p,0)?>%</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="text-muted opacity-6">{{$pro->name}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-progress-wrapper mt-1">
                                                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width: 63%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="widget-content">--}}
{{--                                        <div class="widget-content-outer">--}}
{{--                                            <div class="widget-content-wrapper">--}}
{{--                                                <div class="widget-content-left">--}}
{{--                                                    <div class="widget-numbers fsize-3 text-muted">32%</div>--}}
{{--                                                </div>--}}
{{--                                                <div class="widget-content-right">--}}
{{--                                                    <div class="text-muted opacity-6">Submitted Tickers</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="widget-progress-wrapper mt-1">--}}
{{--                                                <div class="progress-bar-sm progress-bar-animated-alt progress">--}}
{{--                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%;"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="widget-content">--}}
{{--                                        <div class="widget-content-outer">--}}
{{--                                            <div class="widget-content-wrapper">--}}
{{--                                                <div class="widget-content-left">--}}
{{--                                                    <div class="widget-numbers fsize-3 text-muted">71%</div>--}}
{{--                                                </div>--}}
{{--                                                <div class="widget-content-right">--}}
{{--                                                    <div class="text-muted opacity-6">Server Allocation</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="widget-progress-wrapper mt-1">--}}
{{--                                                <div class="progress-bar-sm progress-bar-animated-alt progress">--}}
{{--                                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="widget-content">--}}
{{--                                        <div class="widget-content-outer">--}}
{{--                                            <div class="widget-content-wrapper">--}}
{{--                                                <div class="widget-content-left">--}}
{{--                                                    <div class="widget-numbers fsize-3 text-muted">41%</div>--}}
{{--                                                </div>--}}
{{--                                                <div class="widget-content-right">--}}
{{--                                                    <div class="text-muted opacity-6">Generated Leads</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="widget-progress-wrapper mt-1">--}}
{{--                                                <div class="progress-bar-sm progress-bar-animated-alt progress">--}}
{{--                                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100" style="width: 41%;"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                            {{$product->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">Hóa đơn</div>
                            <div class="widget-subheading">Một tháng gần đây kể từ {{\Carbon\Carbon::today()->subMonth()->format('d/m/y')}}</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-success">{{count($invoices_this_month)}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">Doanh thu(x1000VNĐ)</div>
                            <div class="widget-subheading">Một tháng gần đây kể từ {{\Carbon\Carbon::today()->subMonth()->format('d/m/y')}}</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-warning">
                                <?php
                                $total=0;
                                if (isset($invoices_this_month)) {
                                    foreach($invoices_this_month as $invoice)
                                        $total += $invoice->total_amount;
                                }
                                echo ($total/1000);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">Tỷ suất lợi nhuận</div>
                            <div class="widget-subheading">Một tháng gần đây kể từ {{\Carbon\Carbon::today()->subMonth()->format('d/m/y')}}</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-danger"><?php if (isset($money_this_month)) if ($total)echo number_format($money_this_month/($total/100),1) ?>%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Quản lý nhân viên
                    <div class="btn-actions-pane-right">
                        <div role="group" class="btn-group-sm btn-group">
                            <button class="active btn btn-focus">Last Week</button>
                            <button class="btn btn-focus">All Month</button>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th class="text-center">City</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center text-muted">#345</td>
                            <td>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="widget-content-left">
                                                <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">John Doe</div>
                                            <div class="widget-subheading opacity-7">Web Developer</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">Madrid</td>
                            <td class="text-center">
                                <div class="badge badge-warning">Pending</div>
                            </td>
                            <td class="text-center">
                                <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">#347</td>
                            <td>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="widget-content-left">
                                                <img width="40" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">Ruben Tillman</div>
                                            <div class="widget-subheading opacity-7">Etiam sit amet orci eget</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">Berlin</td>
                            <td class="text-center">
                                <div class="badge badge-success">Completed</div>
                            </td>
                            <td class="text-center">
                                <button type="button" id="PopoverCustomT-2" class="btn btn-primary btn-sm">Details</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">#321</td>
                            <td>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="widget-content-left">
                                                <img width="40" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">Elliot Huber</div>
                                            <div class="widget-subheading opacity-7">Lorem ipsum dolor sic</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">London</td>
                            <td class="text-center">
                                <div class="badge badge-danger">In Progress</div>
                            </td>
                            <td class="text-center">
                                <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Details</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">#55</td>
                            <td>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="widget-content-left">
                                                <img width="40" class="rounded-circle" src="assets/images/avatars/1.jpg" alt=""></div>
                                        </div>
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">Vinnie Wagstaff</div>
                                            <div class="widget-subheading opacity-7">UI Designer</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">Amsterdam</td>
                            <td class="text-center">
                                <div class="badge badge-info">On Hold</div>
                            </td>
                            <td class="text-center">
                                <button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Details</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-block text-center card-footer">
                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                    <button class="btn-wide btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="row">--}}
{{--        <div class="col-md-6 col-lg-3">--}}
{{--            <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card">--}}
{{--                <div class="widget-content">--}}
{{--                    <div class="widget-content-outer">--}}
{{--                        <div class="widget-content-wrapper">--}}
{{--                            <div class="widget-content-left pr-2 fsize-1">--}}
{{--                                <div class="widget-numbers mt-0 fsize-3 text-danger">71%</div>--}}
{{--                            </div>--}}
{{--                            <div class="widget-content-right w-100">--}}
{{--                                <div class="progress-bar-xs progress">--}}
{{--                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="widget-content-left fsize-1">--}}
{{--                            <div class="text-muted opacity-6">Income Target</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 col-lg-3">--}}
{{--            <div class="card-shadow-success mb-3 widget-chart widget-chart2 text-left card">--}}
{{--                <div class="widget-content">--}}
{{--                    <div class="widget-content-outer">--}}
{{--                        <div class="widget-content-wrapper">--}}
{{--                            <div class="widget-content-left pr-2 fsize-1">--}}
{{--                                <div class="widget-numbers mt-0 fsize-3 text-success">54%</div>--}}
{{--                            </div>--}}
{{--                            <div class="widget-content-right w-100">--}}
{{--                                <div class="progress-bar-xs progress">--}}
{{--                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="widget-content-left fsize-1">--}}
{{--                            <div class="text-muted opacity-6">Expenses Target</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 col-lg-3">--}}
{{--            <div class="card-shadow-warning mb-3 widget-chart widget-chart2 text-left card">--}}
{{--                <div class="widget-content">--}}
{{--                    <div class="widget-content-outer">--}}
{{--                        <div class="widget-content-wrapper">--}}
{{--                            <div class="widget-content-left pr-2 fsize-1">--}}
{{--                                <div class="widget-numbers mt-0 fsize-3 text-warning">32%</div>--}}
{{--                            </div>--}}
{{--                            <div class="widget-content-right w-100">--}}
{{--                                <div class="progress-bar-xs progress">--}}
{{--                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%;"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="widget-content-left fsize-1">--}}
{{--                            <div class="text-muted opacity-6">Spendings Target</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 col-lg-3">--}}
{{--            <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">--}}
{{--                <div class="widget-content">--}}
{{--                    <div class="widget-content-outer">--}}
{{--                        <div class="widget-content-wrapper">--}}
{{--                            <div class="widget-content-left pr-2 fsize-1">--}}
{{--                                <div class="widget-numbers mt-0 fsize-3 text-info">89%</div>--}}
{{--                            </div>--}}
{{--                            <div class="widget-content-right w-100">--}}
{{--                                <div class="progress-bar-xs progress">--}}
{{--                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="widget-content-left fsize-1">--}}
{{--                            <div class="text-muted opacity-6">Totals Target</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
