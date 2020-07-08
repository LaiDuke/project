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
                                khách hàng
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
                    <a href="{{asset("Sale/create")}}"  class="mm-active">
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
    <div  class="modal fade" id="addcustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" style="margin-top: 5%">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><strong>Thêm khách hàng</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="new_customer">
                        @csrf
                        <div class="form-row">
                            <div class="col-6">
                                <div class="position-relative form-group"><label for="name"><strong>Tên khách hàng</strong></label><input
                                        name="name" class="form-control" id="name" type="text" >
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="position-relative form-group"><label for="imageUrl"><strong>Ảnh</strong></label><br>
                                    <img src="" alt="" id="image-preview" style="width: 100px">
                                    <input style="width: 30%" class="btn btn-outline-info form-control" type="file" id="image_pick">
                                    <input type="hidden" name="imageUrl">
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
                                <div class="position-relative form-group"><label for="date_of_birth"><strong>Sinh nhật</strong></label><input
                                        name="date_of_birth" class="form-control" id="date_of_birth" type="datetime-local">
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
                    <button type="submit" class="btn btn-primary" id="new_customer_submit">Lưu lại</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" about="add_customer">
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
        $.ajaxSetup({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });
        $("#new_customer_submit").click(function(event){
            var data = $("#new_customer").serializeArray();
            event.preventDefault();
            $.ajax({
                url: "{{asset("api/customers")}}",
                type:"POST",
                data:data,
                success:function(data){
                    $("#new_customer")[0].reset();
                    $("#addcustomer .close").click();
                    $.notify(data.success, "success");
                    $("#customer_id").append('<option selected value='+data.customer.id+'>'+data.customer.name+'</option>');
                },
            });
        });
    </script>

    <script type="text/javascript" about="confirm_customer">
        $(document).ready(function () {
            $("#customer_submit").click(function(event) {
                let data_up = $("#general").serializeArray();
                event.preventDefault();
                $.get("{{asset("api/customers")}}/"+data_up[0].value, function (data, status) {
                    $.notify(status, "success");
                    $("#general_info").remove();
                    $("#pick_product").before('    <div class="main-card mb-3 card" id="general_info">\n' +
                        '        <div class="card-body"><h5 class="card-title">Thông tin chung</h5>\n' +
                        '            <form class="" id="customer">\n' +
                        '                <div class="position-relative form-group"><label><strong>Chân dung khách hàng</strong></label>\n' +
                        '                    <div class="input-group">\n' +
                        '                         <img src="'+data.self.image+'" style="width: 100px">\n' +
                        '                    </div>\n' +
                        '                </div>\n' +
                        '                <div class="form-row">\n' +
                        '                    <div class="col-md-7">\n' +
                        '                        <div class="position-relative form-group"><label><strong>Tên khách hàng</strong></label>\n' +
                        '                            <div class="input-group">\n' +
                        '                                <input  class="form-control" value="'+data.self.name+'" disabled><input name="customer_id" value="'+data.self.id+'" style="display: none">\n' +
                        '                            </div>\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                    <div class="col-md-4">\n' +
                        '                        <div class="position-relative form-group"><label><strong>Hình thức mua</strong></label>\n' +
                        '                            <input class="form-control" value="'+data_up[1].value+'" disabled><input name="type" value="'+data_up[1].value+'" style="display: none">\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                    <div class="col-md-1">\n' +
                        '                        <div class="position-relative form-group"><label style="color: white">State</label><button id="customer_cancel" class="form-control btn btn-sm btn-danger">Hủy</button></div>\n' +
                        '                    </div>\n' +
                        '                </div>\n' +
                        '                <div class="form-row">\n' +
                        '                    <div class="col-md-3">\n' +
                        '                        <div class="position-relative form-group"><label><strong>Số điện thoại</strong></label>\n' +
                        '                            <input class="form-control" value="'+data.self.phone+'" disabled>\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                    <div class="col-md-4">\n' +
                        '                        <div class="position-relative form-group"><label><strong>Sinh nhật</strong></label>\n' +
                        '                            <input class="form-control" value="'+data.self.date_of_birth+'" disabled>\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                    <div class="col-md-5">\n' +
                        '                        <div class="position-relative form-group"><label><strong>Thời gian</strong></label>\n' +
                        '                            <input class="form-control" value="'+Date($.now())+'" disabled>\n' +
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
                        '                        <div class="position-relative form-group"><label><strong>Trả lại</strong></label>\n' +
                        '                            <input class="form-control" id="return" value="" disabled>\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                </div>\n' +
                        '            </form>\n' +
                        '        </div>\n' +
                        '    </div>');
                });
            });
            $(document).on('keyup',"#paid_money",function () {
                $('#return').val(parseFloat($('#paid_money').val())-parseFloat($('#total_money').val()));
            });
            $("#paid_money").keyup();
        });

    </script>

    <script type="text/javascript" about="render_product">
        var total = 0;
        $(document).ready(function(){
            $("#product_selected").change(function(){
                $("#unit_select").remove();
                $("#price_select").remove();
                var product_id = $("#product_selected").val();
                $.get("{{asset("api/products")}}/"+product_id, function(data, status){
                    $.notify(status, "success");
                    $("#unit_div").append('<label><strong>Đơn vị</strong></label>' +
                        '<select class="form-control" name="unit" id="unit_select">\n' +
                        '                                <option value="1">Đơn vị chuẩn</option>\n' +
                        '                            </select>');
                    $("#price_div").append('<label><strong>Đơn giá</strong></label>' +
                        '<select class="form-control" name="price" id="price_select">\n' +
                        '                                <option id="option_price" value="'+data.self.price+'">'+data.self.price+'</option>\n' +
                        '                            </select>');
                    //cải tiến sau nhé Duke! mày sẽ làm được!
                    // var array_unit_check =[];
                    $.each(data.self_unit, function (index, value) {
                        $("#unit_select").append('<option value="'+value.quantity+'">'+value.name+'</option>');
                        // if (value.sale_as_standard===0) array_unit_check.push(value.id);
                    });
                    // var quantity_left = 0;
                    // $.each(data.self_purchase, function (index, value) {
                    //     if (!array_unit_check.includes(value.unit_id)) quantity_left+=value.left;
                    // });
                    var quantity_left = 0;
                    $.each(data.self_purchase, function (index, value) {
                        quantity_left+=value.left;
                    });
                    $("#quantity_pick").text("");
                    $("#quantity_pick").append("<label><strong >Số lượng (tối đa: "+quantity_left+")</strong></label>");
                    $("#quantity_pick").append('<input id="quantity_pick_input" max="'+quantity_left+'" name="quantity" class="form-control" type="number">');
                    $("#unit_select").change(function(){
                        quantity_left=0;
                        var unit = $("#unit_select").val();
                        var unitTxt = $("#unit_select option:selected").text();
                        $.each(data.self_unit, function (index, value) {
                            if (unit==value.quantity&&unitTxt==value.name){
                                $("#option_price").text(value.price);
                                $("#option_price").val(value.price);
                                // $.each(data.self_purchase, function (idx, val) {
                                //     if (value.id==val.unit_id) quantity_left+=val.left;
                                //     if (!array_unit_check.includes(value.id)&&val.unit_id===0) quantity_left+=val.left;
                                // });
                            }
                        });
                            if (unitTxt=='Đơn vị chuẩn'){
                            $("#option_price").text(data.self.price);
                            $("#option_price").val(data.self.price);
                            // $.each(data.self_purchase, function (idx, val) {
                            //     if (!array_unit_check.includes(val.unit_id)) quantity_left+=val.left;
                            // });
                        }
                        $.each(data.self_purchase, function (index, value) {
                            quantity_left+=value.left;
                        });
                        quantity_left = quantity_left/unit;
                        $("#quantity_pick_input").remove();
                        $("#quantity_pick").text("");
                        $("#quantity_pick").append("<label><strong >Số lượng (tối đa: "+quantity_left+")</strong></label>");
                        $("#quantity_pick").append('<input id="quantity_pick_input" max="'+quantity_left+'" name="quantity" class="form-control" type="number">');

                    });

                });
            });
        });



    </script>
    <script type="text/javascript" about="add_invoice_product">
        var index = 1;
        function pad (str, max) {
            str = str.toString();
            return str.length < max ? pad("0" + str, max) : str;
        }
        $(document).ready(function(){
            $("#i_p_submit").click(function (event) {
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
                            '                                    <div class="widget-heading">SP'+pad(data.self.id,6)+'<input name="i_p['+index+'][product_id]" value="'+data.self.id+'" style="display: none"></div>\n' +
                            '                                    <div class="widget-subheading opacity-7">'+data.self.name+'</div>\n' +
                            '                                </div>\n' +
                            '                            </div>\n' +
                            '                        </div>\n' +
                            '                    </td>\n' +
                            '                    <td class="text-center">' +
                            '                       <div class="badge badge-success">Tiêu chuẩn</div>\n' +
                            '                    </td>\n' +
                            '                    <td class="text-center">\n' +
                            '                        <div class="badge badge-warning">'+unitTxt+'<input name="i_p['+index+'][unit]" value="'+form_data[1].value+'" style="display: none"></div>\n' +
                            '                    </td>\n' +
                            '                    <td class="text-center">\n' +
                            '                       <div class="badge badge-primary">'+form_data[2].value+'<input name="i_p['+index+'][quantity]" value="'+form_data[2].value+'" style="display: none"></div>\n' +
                            '                    </td>\n' +
                            '                    <td class="text-center">\n'+form_data[3].value+'<input name="i_p['+index+'][price]" value="'+form_data[3].value+'" style="display: none"></td>\n' +
                            '                    <td class="text-center">\n' +
                            '                       <div class="badge badge-danger" id="money['+index+']">'+form_data[2].value*form_data[3].value+'</div>\n' +
                            '                    </td>\n' +
                            '                    <td class="text-center"><input type="checkbox" id="product['+index+++']"></td>\n' +
                            '                </tr>');

                        total += form_data[2].value*form_data[3].value;

                        $("#total_amount").text(total);
                        $('#total_money').val(total);
                        $("#total_amount").append('<input name="total_amount" value="'+total+'" type="hidden">');
                        $("#pick_product_form")[0].reset();
                        $("#unit_div").text("");
                        $("#price_div").text("");
                        $("#quantity_pick").text("");
                    }
                })
            });
        });
    </script>
    <script type="text/javascript" about="done_invoice_product">
        $.ajaxSetup({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });
        $(document).ready(function () {
            $("#done_invoice").click(function () {
                var data = $(":input").serializeArray();
                console.log(data);
                $.ajax({
                    url: "{{asset("api/invoices")}}",
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
@endsection
@section('title_main')
    <div class="page-title-heading">
        <div class="page-title-icon">
            <i class="pe-7s-wallet icon-gradient bg-plum-plate">
            </i>
        </div>
        <div>Dashboard Boxes
            <div class="page-title-subheading">Highly configurable boxes best used for showing
                numbers in an user friendly way.
            </div>
        </div>
    </div>
    <div class="page-title-actions">

        <button type="button" data-toggle="tooltip" title="Nhập hàng hóa" data-placement="bottom"
                class="btn-shadow mr-3 btn btn-dark">
            <a href="{{route('Purchase.create')}}" style="text-decoration: none; color:inherit;">
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
                        <div class="position-relative form-group"><label for="customer_id"><strong>Chọn khách hàng</strong></label>
                            <div class="input-group">
                                <select class="form-control" id="customer_id" name="customer_id">
                                    @foreach($customer as $ctm)
                                        <option value="{{$ctm->id}}">{{$ctm->name}}</option>
                                    @endforeach
                                </select>
                                <div class="input-group-append" data-toggle="tooltip" title="Thêm khách hàng" data-placement="bottom"><a class="mb-2 form-control" data-toggle="modal" data-target="#addcustomer">
                                        <i class="fa fa-plus"></i>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group"><label for="type"><strong>Hình thức mua</strong></label>
                            <select name="type" class="form-control">
                                <option value="Trực tiếp">Trực tiếp</option>
                                <option value="Mang về">Mang về</option>
                                <option value="Order">Order</option>
                                <option value="Shiping">Shiping</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="position-relative form-group">
                            <label style="color: white">State</label>
                            <button id="customer_submit" class="form-control btn btn-sm btn-info">Chọn</button>
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
                        <div class="position-relative form-group" id="unit_div">

                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="position-relative form-group" id="quantity_pick">

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group" id="price_div">

                        </div>
                    </div>
                    <div class="col-md-1" id="sm_btn">
                        <div class="position-relative form-group"><label style="color: white">State</label><button id="i_p_submit" class="form-control btn btn-sm btn-info">Thêm</button></div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <div class="main-card mb-3 card">
        <div class="card-header">Phiếu nhập
        </div>
        <form id="invoice_form"><div class="table-responsive">
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
                    <td class="text-center"></td>
                    <th class="text-center">Tổng tiền</th>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center" id="total_amount"></td>
                    <td class="text-center"></td>
                </table>
            </div></form>
        <div class="d-block text-center card-footer">
            <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
            <button class="btn-wide btn btn-success" id="done_invoice">Xuất hóa đơn</button>
        </div>
    </div>

@endsection
