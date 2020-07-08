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
                    <a href="{{asset("Product")}}" class="mm-active">
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

        <button type="button" data-toggle="tooltip" title="Thêm hàng hóa" data-placement="bottom"
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
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Chi tiết hàng hóa</strong></h5>
            </div>
            <div class="modal-body">
                <form id="new_product" class="needs-validation" novalidate>
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
                                            name="ID" class="form-control" id="ID" type="number" placeholder="{{substr(str_repeat(0, 6).$self->id, - 6)}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="qr_code"><strong>Mã vạch</strong></label><input
                                            name="qr_code" class="form-control" id="qr_code" type="number" placeholder="{{$self->qr_code}}"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-8">
                                    <div class="position-relative form-group"><label for="name"><strong>Tên hàng hóa</strong></label><input
                                            name="name" class="form-control" id="name" type="text"
                                            placeholder="{{$self->name}}" required></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="price"><strong>Giá bán</strong><i class="fa fa-tags"></i></label><input
                                            name="price" class="form-control" id="price" type="number" placeholder="{{$self->price}}"></div>
                                </div>
                            </div>
                            <div class="position-relative form-group"><label for="category_id"><strong>Nhóm hàng</strong></label>
                                <div class="input-group"><select name="category_id" class="custom-select" id="category_id" type="select">
                                        <option value="{{$self->Category->id}}">{{$self->Category->name}}</option>
{{--                                        @foreach($self->Category as $cate)--}}
{{--                                            <option value="{{$cate->id}}">{{$cate->name}}</option>--}}
{{--                                        @endforeach--}}
                                    </select>
                                    <div class="input-group-append" data-toggle="tooltip" title="Thêm nhóm hàng" data-placement="bottom"><a class="mb-2 form-control" data-toggle="modal" data-target="#addcategory">
                                            <i class="fa fa-plus"></i>
                                        </a></div>
                                </div>
                            </div>
                            <div class="position-relative form-group"><label for="brand_id"><strong>Thương hiệu</strong></label>
                                <div class="input-group"><select name="brand_id" class="custom-select" id="brand_id" type="select">
                                        <option value="{{$self->Brand->id}}">{{$self->Brand->name}}</option>
{{--                                        @foreach($brand as $br)--}}
{{--                                            <option value="{{$br->id}}">{{$br->name}}</option>--}}
{{--                                        @endforeach--}}
                                    </select>
                                    <div class="input-group-append" data-toggle="tooltip" title="Thêm thương hiệu" data-placement="bottom"><a class="mb-2 form-control" data-toggle="modal" data-target="#addbrand">
                                            <i class="fa fa-plus"></i>
                                        </a></div>
                                </div>


                            </div>
                            <div class="position-relative form-group"><label for="place_id"><strong>Vị trí</strong></label>
                                <div class="input-group"><select name="place_id" class="custom-select" id="place_id" type="select">
                                        <option value="{{$self->Place->id}}">{{$self->Place->name}}</option>
{{--                                        @foreach($place as $pl)--}}
{{--                                            <option value="{{$pl->id}}">{{$pl->name}}</option>--}}
{{--                                        @endforeach--}}
                                    </select>
                                    <div class="input-group-append" data-toggle="tooltip" title="Thêm vị trí" data-placement="bottom"><a class="mb-2 form-control" data-toggle="modal" data-target="#addplace">
                                            <i class="fa fa-plus"></i>
                                        </a></div>
                                </div>
                            </div>

                            <div class="position-relative form-group"><label for="exampleFile"><strong>Ảnh</strong></label>
                                <div class="row">
                                    <img src="{{$self->img}}" alt="" id="image-preview" style="width: 100px">
                                    <input style="width: 30%" class="btn btn-outline-info form-control" type="file" id="image_pick">
                                    <input type="hidden" name="imageUrl">
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
                                                placeholder="{{$self->standard_unit}}">
                                            <div class="input-group-append" data-toggle="tooltip" title="Thêm đơn vị" data-placement="bottom"><a class="mb-2 form-control" type="button" id="add_unit">
                                                    <i class="fa fa-plus"></i>
                                                </a></div>
                                        </div>
                                        <div id="more">
                                            @if(isset($self_unit))
                                                <table id="tbmore" style="width: 100%">
                                                    <tbody>
                                                    <tr class="">
                                                        <th><span>Tên đơn vị</span></th>
                                                        <th><span>Ảnh</span></th>
                                                        <th><span>Giá trị quy đổi</span></th>
                                                        <th><span >Giá bán</span></th>
                                                        <th><div data-toggle="tooltip" title="Bán như đơn vị cơ bản" data-placement="bottom" style="text-align: center"><a class="form-control-sm"><i class="fa fa-cubes"></i></a></div></th>
                                                        <th></th>
                                                    </tr>
                                                    @foreach($self_unit as $unit)
                                                        <tr>
                                                            <td><input name="unit[0][name]" type="text" class="form-control form-control-sm" placeholder="{{$unit->name}}"></td>
                                                            <td><input class="btn btn-outline-info btn-sm form-control-sm image_unit_pick" type="file" id="0" style="width: 100px">
                                                                <img src="{{$unit->image}}" alt="" id="image-unit-preview[0]" style="width: 100px">
                                                                <input type="hidden" name="unit[0][image]"  >
                                                            </td>
                                                            <td><input name="unit[0][quantity]" type="number" class="form-control form-control-sm"  placeholder="{{$unit->quantity}}"> </td>
                                                            <td><input name="unit[0][price]" type="number" class="form-control form-control-sm"  placeholder="{{$unit->price}}"></td>
                                                            <td><input name="unit[0][s_a_s]" type="checkbox" class="form-control-sm form-control" checked></td>
                                                            <td class="pr-0"><button id="0" type="button" class="btn-danger btn-sm closeunit" title="Xóa đơn vị" ><i class="fa fa-trash"></i></button></td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>

                                            @endif
                                        </div>
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
                        </div>
                        <div class="tab-pane show" id="tab-eg11-2" role="tabpanel"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary validateButton" id="new_pro_submit">Lưu lại</button>
            </div>
        </div>
    </div>

@endsection
