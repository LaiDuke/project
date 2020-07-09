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
                    <a href="{{asset("/")}}">
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
                    <a href="{{asset("Product")}}">
                        <i class="metismenu-icon pe-7s-mouse">
                        </i>Sản Phẩm
                    </a>
                </li>
                <li>
                    <a href="{{asset("Price")}}">
                        <i class="metismenu-icon pe-7s-mouse">
                        </i>Bảng Giá/Hàng Hóa
                    </a>
                </li>
                <li>
                    <a href="{{asset("Purchase")}}"  class="mm-active">
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
    <div  class="modal fade" id="addproducer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" style="margin-top: 5%">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><strong>Thêm nhà cung cấp</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="new_producer">
                        @csrf
                        <div class="form-row">
                            <div class="col-6">
                                <div class="position-relative form-group"><label for="name"><strong>Tên nhà cung cấp</strong></label><input
                                        name="name" class="form-control" id="name" type="text" >
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="position-relative form-group"><label for="tax_code"><strong>Mã số thuế</strong></label><input
                                        name="tax_code" class="form-control" id="tax_code" type="text" >
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-6">
                                <div class="position-relative form-group"><label for="phone"><strong>Số điện thoại</strong></label><input
                                        name="phone" class="form-control" id="phone" type="text" >
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="position-relative form-group"><label for="email"><strong>Email</strong></label><input
                                        name="email" class="form-control" id="email" type="text" >
                                </div>
                            </div>
                        </div>
                        <div class="position-relative form-group"><label for="note"><strong>Miêu tả (ghi chú)</strong></label><input
                                name="note" class="form-control" id="note" type="text" >
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary" id="new_producer_submit">Lưu lại</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" about="add_producer">
        $.ajaxSetup({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });
        $("#new_producer_submit").click(function(event){
            var data = $("#new_producer").serializeArray();
            event.preventDefault();
            $.ajax({
                url: "{{asset("api/producers")}}",
                type:"POST",
                data:data,
                success:function(data){
                    $("#new_producer")[0].reset();
                    $("#addproducer .close").click();
                    $.notify(data.success, "success");
                    $("#producer_id").append('<option selected value='+data.producer.id+'>'+data.producer.name+'</option>');
                },
            });
        });
    </script>
    <script type="text/javascript" about="confirm_producer">
        $(document).ready(function () {
            $("#producer_submit").click(function(event) {
                let data_up = $("#general").serializeArray();
                event.preventDefault();
                $.get("{{asset("api/producers")}}/"+data_up[0].value, function (data, status) {
                    $.notify(status, "success");
                    var tmp=0;
                    $.each(data.self_purchase, function (index,value) {
                        tmp+=(value.paid-value.total_amount);
                    });
                    $("#general_info").remove();
                    $("#pick_product").before('    <div class="main-card mb-3 card" id="general_info">\n' +
                        '        <div class="card-body"><h5 class="card-title">Thông tin chung</h5>\n' +
                        '            <form class="" id="producer">\n' +
                        '                <div class="form-row">\n' +
                        '                    <div class="col-md-7">\n' +
                        '                        <div class="position-relative form-group"><label><strong>Nhà cung cấp</strong></label>\n' +
                        '                            <div class="input-group">\n' +
                        '                                <input  class="form-control" value="'+data.self.name+'" disabled><input name="producer_id" value="'+data.self.id+'" style="display: none">\n' +
                        '                            </div>\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                    <div class="col-md-4">\n' +
                        '                        <div class="position-relative form-group"><label><strong>Hình thức nhập</strong></label>\n' +
                        '                            <input class="form-control" value="'+data_up[1].value+'" disabled><input name="type" value="'+data_up[1].value+'" style="display: none">\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                    <div class="col-md-1">\n' +
                        '                        <div class="position-relative form-group"><label style="color: white">State</label><button id="producer_cancel" class="form-control btn btn-sm btn-danger">Hủy</button></div>\n' +
                        '                    </div>\n' +
                        '                </div>\n' +
                        '                <div class="form-row">\n' +
                        '                    <div class="col-md-3">\n' +
                        '                        <div class="position-relative form-group"><label><strong>Số điện thoại</strong></label>\n' +
                        '                            <input class="form-control" value="'+data.self.phone+'" disabled>\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                    <div class="col-md-4">\n' +
                        '                        <div class="position-relative form-group"><label><strong>Email</strong></label>\n' +
                        '                            <input class="form-control" value="'+data.self.email+'" disabled>\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                    <div class="col-md-5">\n' +
                        '                        <div class="position-relative form-group"><label><strong>Ngày nhập</strong></label>\n' +
                        '                            <input class="form-control" value="" disabled>\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                </div>\n' +
                        '                <div class="form-row">\n' +
                        '                    <div class="col-md-4">\n' +
                        '                        <div class="position-relative form-group"><label><strong>Tổng tiền</strong></label>\n' +
                        '                            <input class="form-control" value="0" type="number" id="total_money" disabled>\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                    <div class="col-md-4">\n' +
                        '                        <div class="position-relative form-group"><label><strong>Tiền trả</strong></label>\n' +
                        '                            <input name="paid_money" class="form-control" type="number" id="paid_money">\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                    <div class="col-md-4">\n' +
                        '                        <div class="position-relative form-group"><label><strong>Dư nợ</strong></label>\n' +
                        '                            <input class="form-control" value="'+tmp+'" disabled>\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                </div>\n' +
                        '            </form>\n' +
                        '        </div>\n' +
                        '    </div>');
                });
            });
        });

    </script>
    <script type="text/javascript" about="render_product">
        $(document).ready(function(){
            $("#product_selected").change(function(){
                $("#unit_select").remove();
                var product_id = $("#product_selected").val();
                $.get("{{asset("api/products")}}/"+product_id, function(data, status){
                    $.notify(status, "success");
                        $("#unit_div").append('<select class="form-control" name="unit" id="unit_select">\n' +
                            '                                <option value="1">Đơn vị chuẩn</option>\n' +
                            '                            </select>');
                        $.each(data.self_unit, function (index, value) {
                            $("#unit_select").append('<option value="'+value.quantity+'">'+value.name+'</option>');
                        });
                });
            });
        });

    </script>
    <script type="text/javascript" about="add_purchase_product">
        var index = 1;
        function pad (str, max) {
            str = str.toString();
            return str.length < max ? pad("0" + str, max) : str;
        }
        $(document).ready(function(){
            $("#p_p_submit").click(function (event) {
                var product_id = $("#product_selected").val();
                var form_data = $("#pick_product_form").serializeArray();
                var unitTxt = $("#unit_select option:selected").text();
                event.preventDefault();
                $.get("{{asset("api/products")}}/"+product_id, function (data, status) {
                    $.notify(status, "success");
                    {
                        $("#product_ticket").append('<tr>\n' +
                            '                    <td class="text-center text-muted">'+index+'</td>\n' +
                            '                    <td>\n' +
                            '                        <div class="widget-content p-0">\n' +
                            '                            <div class="widget-content-wrapper">\n' +
                            '                                <div class="widget-content-left mr-3">\n' +
                            '                                    <div class="widget-content-left">\n' +
                            '                                        <img width="40" class="rounded-circle" src="'+data.self.img+'" alt="">\n' +
                            '                                    </div>\n' +
                            '                                </div>\n' +
                            '                                <div class="widget-content-left flex2">\n' +
                            '                                    <div class="widget-heading">SP'+pad(data.self.id,6)+'<input name="p_p['+index+'][product_id]" value="'+data.self.id+'" style="display: none"></div>\n' +
                            '                                    <div class="widget-subheading opacity-7">'+data.self.name+'</div>\n' +
                            '                                </div>\n' +
                            '                            </div>\n' +
                            '                        </div>\n' +
                            '                    </td>\n' +
                            '                    <td class="text-center">' +
                            '                       <div class="badge badge-success">Tiêu chuẩn</div>\n' +
                            '                    </td>\n' +
                            '                    <td class="text-center">\n' +
                            '                        <div class="badge badge-warning">'+unitTxt+'<input name="p_p['+index+'][unit]" value="'+form_data[1].value+'" style="display: none"><input name="p_p['+index+'][unit_name]" value="'+unitTxt+'" style="display: none"></div>\n' +
                            '                    </td>\n' +
                            '                    <td class="text-center">\n' +
                            '                       <div class="badge badge-primary">'+form_data[2].value+'<input name="p_p['+index+'][quantity]" value="'+form_data[2].value+'" style="display: none"></div>\n' +
                            '                    </td>\n' +
                            '                    <td class="text-center">\n'+form_data[3].value+'<input name="p_p['+index+'][price]" value="'+form_data[3].value+'" style="display: none"></td>\n' +
                            '                    <td class="text-center">\n' +
                            '                       <div class="badge badge-danger" id="money['+index+']">'+form_data[2].value*form_data[3].value+'</div>\n' +
                            '                    </td>\n' +
                            '                    <td class="text-center"><input type="checkbox" id="product['+index+++']"></td>\n' +
                            '                </tr>');
                        var tmp;
                        if ($("#total_money").val()) tmp = parseFloat($("#total_money").val());
                        tmp += form_data[2].value*form_data[3].value;
                        $("#total_money").val(tmp);
                        $("#pick_product_form")[0].reset();
                    }

                })


            });
        });

    </script>
    <script type="text/javascript" about="done_purchase">
        $.ajaxSetup({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });
        $(document).ready(function () {
            $("#done_purchase").click(function () {
                var data = $(":input").serializeArray();
                console.log(data);
                $.ajax({
                    url: "{{asset("api/purchases")}}",
                    type:"POST",
                    data:data,
                    success:function(data){
                        alert(data.success);
                        location.reload();
                    },
                });
            });
        });
    </script>
    <div  class="modal fade" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true" style="overflow-y: auto">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><strong>Thêm hàng hóa mới</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="new_product" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <ul class="nav nav-tabs nav-justified">
                            <li class="nav-item"><a class="nav-link show active" href="#tab-eg11-0" data-toggle="tab">Thuộc tính chung</a></li>
                            <li class="nav-item"><a class="nav-link show" href="#tab-eg11-1" data-toggle="tab">Mô tả chi tiết</a></li>
                            <li class="nav-item"><a class="nav-link show" href="#tab-eg11-2" data-toggle="tab">Hàng hòa đi kèm</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="tab-eg11-0" role="tabpanel">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="ID"><strong>Mã hàng hóa</strong></label><input
                                                name="ID" class="form-control" id="ID" type="number" placeholder="Đánh mã tự động">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="qr_code"><strong>Mã vạch</strong></label><input
                                                name="qr_code" class="form-control" id="qr_code" type="number" placeholder=""></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="position-relative form-group"><label for="name"><strong>Tên hàng hóa</strong></label><input
                                                name="name" class="form-control" id="name" type="text"
                                                placeholder="" required></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group"><label for="price"><strong>Giá bán </strong><i class="fa fa-tags"></i></label><input
                                                name="price" class="form-control" id="price" type="number" placeholder=""></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="category_id"><strong>Nhóm hàng</strong></label>
                                            <div class="input-group"><select name="category_id" class="custom-select" id="category_id" type="select">
                                                    <option value="0">Chọn nhóm hàng</option>
                                                    @foreach($category as $cate)
                                                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="input-group-append" data-toggle="tooltip" title="Thêm nhóm hàng" data-placement="bottom"><a class="mb-2 form-control" data-toggle="modal" data-target="#addcategory">
                                                        <i class="fa fa-plus"></i>
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="brand_id"><strong>Thương hiệu</strong></label>
                                            <div class="input-group"><select name="brand_id" class="custom-select" id="brand_id" type="select">
                                                    <option value="">Chọn thương hiệu</option>
                                                    @foreach($brand as $br)
                                                        <option value="{{$br->id}}">{{$br->name}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="input-group-append" data-toggle="tooltip" title="Thêm thương hiệu" data-placement="bottom"><a class="mb-2 form-control" data-toggle="modal" data-target="#addbrand">
                                                        <i class="fa fa-plus"></i>
                                                    </a></div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="place_id"><strong>Vị trí</strong></label>
                                            <div class="input-group"><select name="place_id" class="custom-select" id="place_id" type="select">
                                                    <option value="">Chọn vị trí</option>
                                                    @foreach($place as $pl)
                                                        <option value="{{$pl->id}}">{{$pl->name}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="input-group-append" data-toggle="tooltip" title="Thêm vị trí" data-placement="bottom"><a class="mb-2 form-control" data-toggle="modal" data-target="#addplace">
                                                        <i class="fa fa-plus"></i>
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="exampleFile"><strong>Ảnh</strong></label><br>
                                            <img src="" alt="" id="image-preview" style="width: 100px">
                                            <input style="width: 30%" class="btn btn-outline-info form-control" type="file" id="image_pick">
                                            <input type="hidden" name="imageUrl">
                                        </div>
                                    </div>
                                </div>



                                <div class="position-relative form-group">
                                    <div class="card">
                                        <div class="card-header" style="background: #dedede">
                                            <label for="name">Đơn vị tính</label>
                                        </div>
                                        <div class="card-body">
                                            <label for="name">Đơn vị cơ bản</label>
                                            <div class="input-group">
                                                <input
                                                    name="standard_unit" class="form-control" id="standard_unit" type="text"
                                                    placeholder="">
                                                <div class="input-group-append" data-toggle="tooltip" title="Thêm đơn vị" data-placement="bottom"><a class="mb-2 form-control" type="button" id="add_unit">
                                                        <i class="fa fa-plus"></i>
                                                    </a></div>
                                            </div>
                                            <div id="more"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative form-group">
                                    <div class="card">
                                        <div class="card-header" style="background: #dedede">
                                            <label for="name">Nhập thuộc tính</label>
                                        </div>
                                        <div class="card-body" id="morepro">
                                        </div>
                                        <a type="button" class="btn" id="add_pro">Thêm thuộc tính <i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="position-relative form-check"><input name="order" class="form-check-input"
                                                                                 id="order" type="checkbox">
                                    <label class="form-check-label" for="order">Bán trực tiếp</label></div>
                            </div>
                            <div class="tab-pane show" id="tab-eg11-1" role="tabpanel">
                                <textarea name="testCK" id="testCK"></textarea>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="ID"><strong>Cảnh báo tối thiểu</strong></label><input
                                                name="least_left" class="form-control" type="number" placeholder="1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="qr_code"><strong>Cảnh báo tối đa</strong></label><input
                                                name="most_left" class="form-control" type="number" placeholder="99999999"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane show" id="tab-eg11-2" role="tabpanel">
                                <div class="position-relative form-group">
                                    <div class="card">
                                        <div class="card-header" style="background: #dedede">
                                            <label for="name">Nhập thuộc tính</label>
                                        </div>
                                        <div class="card-body" id="morepro">
                                        </div>
                                        <a type="button" class="btn" id="add_pro">Thêm thuộc tính <i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary validateButton" id="new_pro_submit">Lưu lại</button>
                </div>
            </div>
        </div>
    </div>
    <div  class="modal fade" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
        <div class="modal-dialog" role="document" style="margin-top: 5%" id="cate">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><strong>Thêm nhóm hàng mới</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="new_category">
                        <div class="position-relative form-group"><label for="name_category"><strong>Tên nhóm hàng</strong></label><input
                                name="name" class="form-control" id="name" type="text" >
                        </div>
                        <div class="position-relative form-group"><label for="note_category"><strong>Miêu tả (ghi chú)</strong></label><input
                                name="note" class="form-control" id="note" type="text" >
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" form="new_category" id="new_cate_submit">Lưu lại</button>
                </div>
            </div>
        </div>
    </div>
    <div  class="modal fade" id="addbrand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
        <div class="modal-dialog" role="document" style="margin-top: 5%">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><strong>Thêm thương hiệu mới</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="new_brand">
                        @csrf
                        <div class="position-relative form-group"><label for="name"><strong>Tên thương hiệu</strong></label><input
                                name="name" class="form-control" id="name" type="text" >
                        </div>
                        <div class="position-relative form-group"><label for="note"><strong>Miêu tả (ghi chú)</strong></label><input
                                name="note" class="form-control" id="note" type="text" >
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" id="new_brand_submit">Lưu lại</button>
                </div>
            </div>
        </div>
    </div>
    <div  class="modal fade" id="addplace" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
        <div class="modal-dialog" role="document" style="margin-top: 5%">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><strong>Thêm vị trí</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="new_place">
                        @csrf
                        <div class="position-relative form-group"><label for="name"><strong>Tên vị trí</strong></label><input
                                name="name" class="form-control" id="name" type="text" >
                        </div>
                        <div class="position-relative form-group"><label for="note"><strong>Miêu tả (ghi chú)</strong></label><input
                                name="note" class="form-control" id="note" type="text" >
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary" id="new_place_submit">Lưu lại</button>
                </div>
            </div>
        </div>
    </div>
    <script about="validate">
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    $(".validateButton").click(
                        function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        });
                });
            }, false);
        })();
    </script>
    <script about="ck-editor">
        CKEDITOR.replace( 'testCK' );
    </script>
    <script type="text/javascript" about="add_product">
        var unitclk = 0;
        var units = 0;
        var proclk = 0;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function(){
            $("#add_pro").click(function () {
                $('#morepro').append(
                    '<div class="input-group" id="property'+proclk+'">\n' +
                    '  <input class="form-control" list="property_name" name="property['+proclk+'][name]">\n' +
                    '  <datalist id="property_name">\n' +
                    '    <option value="Vị">\n' +
                    '    <option value="Khối lượng">\n' +
                    '    <option value="Màu Sắc">\n' +
                    '    <option value="Kích thước">\n' +
                    '    <option value="Thuộc tính A">\n' +
                    '  </datalist>\n'+
                    '   <input name="property['+proclk+'][value]" class="form-control" type="text" placeholder="Giá trị">\n' +
                    '   <div class="input-group-append" data-toggle="tooltip" title="Xóa thuộc tính" data-placement="bottom"><a class="mb-2 form-control closepro"  id="'+proclk+'" data-toggle="modal">\n' +
                    '     <i class="fa fa-trash"></i></a>\n' +
                    '   </div>\n' +
                    '</div>');
                proclk++;

            });
            $(document).on('click', '.closepro', function(){
                var button_id = $(this).attr("id");
                $('#property'+button_id+'').remove();
            });
            $("#add_unit").click(function(){
                if(unitclk==0){
                    $("#more").append('<table id="tbmore" style="width: 100%">\n' +
                        '    <tbody>\n' +
                        '    <tr class="">\n' +
                        '        <th><span>Tên đơn vị</span></th>\n' +
                        '        <th><span>Ảnh</span></th>\n' +
                        '        <th><span>Giá trị quy đổi</span></th>\n' +
                        '        <th><span >Giá bán</span></th>\n' +
                        '        <th><div data-toggle="tooltip" title="Bán như đơn vị cơ bản" data-placement="bottom" style="text-align: center"><a class="form-control-sm"><i class="fa fa-cubes"></i></a></div></th>\n' +
                        '        <th></th>\n' +
                        '    </tr>\n' +
                        '<tr>\n' +
                        '        <td><input name="unit[0][name]" type="text" class="form-control form-control-sm"></td>\n' +
                        '        <td><input class="btn btn-outline-info btn-sm form-control-sm image_unit_pick" type="file" id="0" style="width: 100px">\n' +
                        '            <img src="" alt="" id="image-unit-preview[0]" style="width: 100px">\n' +
                        '            <input type="hidden" name="unit[0][image]"  >' +
                        '        </td>\n' +
                        '        <td><input name="unit[0][quantity]" type="number" class="form-control form-control-sm" value="1"> </td>\n' +
                        '        <td><input name="unit[0][price]" type="number" class="form-control form-control-sm" value="0"></td>\n' +
                        '        <td><input name="unit[0][s_a_s]" type="checkbox" class="form-control-sm form-control" checked></td>\n' +
                        '        <td class="pr-0"><button id="0" type="button" class="btn-danger btn-sm closeunit" title="Xóa đơn vị" ><i class="fa fa-trash"></i></button></td>\n' +
                        '    </tr>' +
                        '    </tbody>\n' +
                        '</table>');
                    unitclk++;
                    units++;
                }

                else{
                    $("#tbmore").append('<tr id="unitrow'+units+'">\n' +
                        '<td><input name="unit['+units+'][name]" type="text" class="form-control form-control-sm"></td>\n' +
                        '<td><input class="btn btn-outline-info btn-sm form-control-sm image_unit_pick" type="file" id="'+units+'" style="width: 100px">\n' +
                        '    <img src="" alt="" id="image-unit-preview['+units+']" style="width: 100px">\n' +
                        '    <input type="hidden" name="unit['+units+'][image]"  >' +
                        '</td>\n' +
                        '<td><input name="unit['+units+'][quantity]" type="number" class="form-control form-control-sm" value="1"> </td>\n' +
                        '<td><input name="unit['+units+'][price]" type="number" class="form-control form-control-sm" value="0"></td>\n' +
                        '<td><input name="unit['+units+'][s_a_s]" type="checkbox" class="form-control-sm form-control" value="0"></td>\n' +
                        '<td class="pr-0"><button type="button" class="btn-danger btn-sm closeunit" id="'+units+'" title="Xóa đơn vị" ><i class="fa fa-trash"></i></button></td>\n' +
                        '</tr>');
                    unitclk++;
                    units++;
                }
            });
            $(document).on('click', '.closeunit', function(){

                var button_id = $(this).attr("id");

                $('#unitrow'+button_id+'').remove();
                unitclk--;
                if(unitclk==0){
                    $("#tbmore").remove();
                }

            });
        })
        $(document).ready(function(){
            var cloudName= "a123abc";
            var unsignedUploadPreset="qbhmhxzq";
            $(document).on('change', "#image_pick", function () {
                var file = this.files[0];
                var url = `https://api.cloudinary.com/v1_1/${cloudName}/upload`;
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        var responseDataJson = JSON.parse(this.responseText);
                        console.log(responseDataJson);
                        var imageUrl = document.querySelector('input[name="imageUrl"]');
                        imageUrl.value = responseDataJson.public_id;
                        document.getElementById('image-preview').src = responseDataJson.url;
                        $.notify(responseDataJson.public_id, "success");
                    }
                }
                xhr.open('POST', url, true);
                var fd = new FormData();
                fd.append('upload_preset', unsignedUploadPreset);
                fd.append('tags', 'browser_upload');
                fd.append('file', file);
                xhr.send(fd);
            });
            $(document).on('change', ".image_unit_pick", function () {
                var ID = $(this).attr('id');
                var file = this.files[0];
                var url = `https://api.cloudinary.com/v1_1/${cloudName}/upload`;
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        var responseDataJson = JSON.parse(this.responseText);
                        console.log(responseDataJson);
                        var imageUrl = document.querySelector('input[name="unit['+ID+'][image]');
                        imageUrl.value = responseDataJson.public_id;
                        document.getElementById('image-unit-preview['+ID+']').src = responseDataJson.url;
                        $.notify(responseDataJson.public_id, "success");
                    }
                }
                xhr.open('POST', url, true);
                var fd = new FormData();
                fd.append('upload_preset', unsignedUploadPreset);
                fd.append('tags', 'browser_upload');
                fd.append('file', file);
                xhr.send(fd);
            });
            $("#new_pro_submit").click(function(event){
                var data = $("#new_product").serializeArray();
                console.log(data);
                event.preventDefault();
                $.ajax({
                    url: "{{asset("api/products")}}",
                    type:"POST",
                    data: data,
                    success:function(data){
                        $("#new_product")[0].reset();
                        $("#addproduct .close").click();
                        $.notify(data.success, "success");
                        alert(data.success);
                        location.reload();
                    },
                });
            });
        });
    </script>
    <script type="text/javascript" about="add_category">
        $.ajaxSetup({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });
        $("#new_cate_submit").click(function(event){
            var data = $("#new_category").serializeArray();
            event.preventDefault();
            $.ajax({
                url: "{{asset("api/categories")}}",
                type:"POST",
                data:data,
                success:function(data){
                    $("#new_category")[0].reset();
                    $("#addcategory .close").click();
                    $.notify(data.success, "success");
                    $("#category_id").append('<option selected value='+data.category.id+'>'+data.category.name+'</option>');

                },
            });
        });
    </script>
    <script type="text/javascript" about="add_brand">
        $.ajaxSetup({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });
        $("#new_brand_submit").click(function(event){
            var data = $("#new_brand").serializeArray();
            event.preventDefault();
            $.ajax({
                url: "{{asset("api/brands")}}",
                type:"POST",
                data:data,
                success:function(data){
                    $("#new_brand")[0].reset();
                    $("#addbrand .close").click();
                    $.notify(data.success, "success");
                    $("#brand_id").append('<option selected value='+data.brand.id+'>'+data.brand.name+'</option>');
                },
            });
        });
    </script>
    <script type="text/javascript" about="add_place">
        $.ajaxSetup({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });
        $("#new_place_submit").click(function(event){
            var data = $("#new_place").serializeArray();
            event.preventDefault();
            $.ajax({
                url: "{{asset("api/places")}}",
                type:"POST",
                data:data,
                success:function(data){
                    $("#new_place")[0].reset();
                    $("#addplace .close").click();
                    $.notify(data.success, "success");
                    $("#place_id").append('<option selected value='+data.place.id+'>'+data.place.name+'</option>');
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
        <div>Nhập hàng hóa
            <div class="page-title-subheading">Highly configurable boxes best used for showing
                numbers in an user friendly way.
            </div>
        </div>
    </div>
    <div class="page-title-actions">

        <button type="button" data-toggle="tooltip" title="Thêm sản phẩm" data-placement="bottom"
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
    <div class="main-card mb-3 card" id="general_info">
        <div class="card-body"><h5 class="card-title">Thông tin chung</h5>
            <form class="" id="general">
                <div class="form-row">
                    <div class="col-md-7">
                        <div class="position-relative form-group"><label for="producer_id"><strong>Chọn nhà cung cấp</strong></label>
                            <div class="input-group">
                                <select class="form-control" id="producer_id" name="producer_id">
                                    @foreach($producer as $produce)
                                        <option value="{{$produce->id}}">{{$produce->name}}</option>
                                    @endforeach
                                </select>
                                <div class="input-group-append" data-toggle="tooltip" title="Thêm nhà cung cấp" data-placement="bottom"><a class="mb-2 form-control" data-toggle="modal" data-target="#addproducer">
                                        <i class="fa fa-plus"></i>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group"><label for="type"><strong>Hình thức nhập</strong></label>
                            <select name="type" class="form-control">
                                <option value="Nhập hàng">Nhập hàng</option>
                                <option value="Trả hàng">Trả hàng</option>
                                <option value="Xuất hủy">Xuất hủy</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="position-relative form-group">
                            <label style="color: white">State</label>
                            <button id="producer_submit" class="form-control btn btn-sm btn-info">Chọn</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="main-card mb-3 card" id="pick_product">
        <div class="card-body"><h5 class="card-title">Chọn sản phẩm</h5>
            <form class="" id="pick_product_form">
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="position-relative form-group"><label><strong>Chọn sản phẩm</strong></label>
                            <select name="id" class="form-control" id="product_selected">
                                <option>Chọn sản phẩm</option>
                                @foreach($product as $pro)
                                    <option value="{{$pro->id}}">

                                        {{$pro->name}} (SP{{substr(str_repeat(0, 6).$pro->id, - 6)}})
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="position-relative form-group" id="unit_div"><label><strong>Đơn vị</strong></label>
                            <select class="form-control" name="unit" id="unit_select">
                                <option value="Đơn vị chuẩn(1)">Đơn vị chuẩn</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="position-relative form-group"><label><strong>Số lượng</strong></label>
                            <input name="quantity" class="form-control" type="number">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group"><label><strong>Đơn giá</strong></label>
                            <input name="price" class="form-control" type="number">
                        </div>
                    </div>
                    <div class="col-md-1" id="sm_btn">
                        <div class="position-relative form-group"><label style="color: white">State</label><button id="p_p_submit" class="form-control btn btn-sm btn-info">Thêm</button></div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <div class="main-card mb-3 card">
        <div class="card-header">Phiếu nhập
        </div>
        <form id="purchase_form"><div class="table-responsive">
                <input type="number" name="user_id" value="{{auth()->id()}}" style="display: none">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Sản phẩm</th>
                        <th class="text-center">Thuộc tính</th>
                        <th class="text-center">Đơn vị</th>
                        <th class="text-center">Số lượng</th>
                        <th class="text-center">Đơn giá</th>
                        <th class="text-center">Thành tiền</th>
                        <th class="text-center">V</th>
                    </tr>
                    </thead>
                    <tbody id="product_ticket">

                    </tbody>
                </table>
            </div></form>
        <div class="d-block text-center card-footer">
            <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
            <button class="btn-wide btn btn-success" id="done_purchase">Xác nhận nhập</button>
        </div>
    </div>

@endsection
