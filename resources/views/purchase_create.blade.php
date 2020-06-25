@extends('layouts.admin')
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
    <script type="text/javascript" about="add_purchase_product">
        $(document).ready(function(){
            $("#product_selected").change(function(event){
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

                    // if (data.self_property){
                    //     $("#product_col").after('<th>Đơn vị</th>');
                    //     $("#product_col_val").after(
                    //         '<td><select class="form-control" name="unit" id="unit_select">\n' +
                    //         '    <option value="1">Đơn vị chuẩn</option>\n' +
                    //         '</select></td>');
                    //     $.each(data.self_unit, function (index, value) {
                    //         $("#unit_select").append('<option value="'+value.quantity+'">'+value.name+'</option>');
                    //     });
                    // }
                });
            });
        });

    </script>
    <script type="text/javascript" about="submit_producer">
        $(document).ready(function () {
            $("#producer_submit").click(function(event) {
                let data_up = $("#general").serializeArray();
                event.preventDefault();
                $.get("{{asset("api/producers")}}/"+data_up[0].value, function (data, status) {
                    $.notify(status, "success");
                    $("#general_info").remove();
                    $("#pick_product").before('    <div class="main-card mb-3 card" id="general_info">\n' +
                        '        <div class="card-body"><h5 class="card-title">Thông tin chung</h5>\n' +
                        '            <form class="" id="producer">\n' +
                        '                <div class="form-row">\n' +
                        '                    <div class="col-md-7">\n' +
                        '                        <div class="position-relative form-group"><label><strong>Nhà cung cấp</strong></label>\n' +
                        '                            <div class="input-group">\n' +
                        '                                <input class="form-control" value="'+data.self.name+'" disabled>\n' +
                        '                            </div>\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                    <div class="col-md-4">\n' +
                        '                        <div class="position-relative form-group"><label><strong>Hình thức nhập</strong></label>\n' +
                        '                            <input class="form-control" value="'+data_up[1].value+'" disabled>\n' +
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
                        '                            <input class="form-control" disabled>\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                    <div class="col-md-4">\n' +
                        '                        <div class="position-relative form-group"><label><strong>Tiền trả</strong></label>\n' +
                        '                            <input class="form-control" disabled>\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                    <div class="col-md-4">\n' +
                        '                        <div class="position-relative form-group"><label><strong>Dư nợ</strong></label>\n' +
                        '                            <input class="form-control" disabled>\n' +
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
                        <div class="position-relative form-group"><label><strong>Tổng tiền</strong></label>
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
                                <option value="1">Đơn vị chuẩn</option>
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
    <script type="text/javascript" about="add_purchase_product">
        $(document).ready(function(){
            $("#p_p_submit").click(function (event) {
                alert("haha");
                event.preventDefault();
            });
        });

    </script>

@endsection
