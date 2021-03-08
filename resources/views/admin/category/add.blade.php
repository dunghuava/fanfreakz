@extends('admin.layouts.master')
@section('title','Trang chủ')
@section('content')
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Design <small>different form elements</small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form method="POST" data-parsley-validate class="form-horizontal form-label-left">
                    {{-- nhớ phải có cái này k là lỗi --}}
                        @csrf 
                    {{-- nhớ phải có cái này k là lỗi --}}
                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Tên sản phẩm <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input value="{{$item->name ?? null}}" name="name" type="text"  required="required" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Liên kết URL <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input value="{{$item->alias ?? null}}" name="alias" type="text"  required="required" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="last-name">Thuộc danh mục<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <select name="category_id" class="form-control" id="">
                                <option value="0">--Vui lòng chọn--</option>
                                <option value="1">Danh mục 1</option>
                                <option value="2">Danh mục 2</option>
                                <option value="3">Danh mục 3</option>
                                <option value="4">Danh mục 4</option>
                            </select>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-2 col-sm-2 label-align">Mô tả chi tiết</label>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea class="form-control" type="text" name="description">{{$item->description ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align"></label>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input {{($item->active ?? 0) == 1 ? 'checked':'' }} type="radio" name="active" value="1" class="join-btn"> &nbsp; Hiển thị &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input {{($item->active ?? 0) == 0 ? 'checked':'' }} type="radio" name="active" value="0" class="join-btn"> Ẩn
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-3 col-sm-3 offset-md-2">
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success"><span class="fa fa-save"></span> Lưu</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection