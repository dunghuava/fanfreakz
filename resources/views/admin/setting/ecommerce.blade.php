@extends('system.layouts.master')
@section('title','Tùy chọn tổng quan')
@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="" class="form-group">
            <table class="table">
                <tr>
                    <th class="lable">Tên website</th>
                    <td><input type="text" class="form-control "></td>
                </tr>
                <tr>
                    <th class="lable">Giới thiệu</th>
                    <td><textarea type="text" class="form-control "></textarea></td>
                </tr>
                <tr>
                    <th class="lable">Địa chỉ website</th>
                    <td><input type="text" class="form-control "></td>
                </tr>
                <tr>
                    <th class="lable">Màu sibar</th>
                    <td><input type="text" class="form-control "></td>
                </tr>
                <tr>
                    <th class="lable">Màu text sibar</th>
                    <td><input type="text" class="form-control "></td>
                </tr>
                <tr>
                    <th class="lable">Thông báo</th>
                    <td>
                        <label style="width: 50%" for="thongbao">
                            <input checked value="0" type="radio" name="thongbao" id="thongbao">
                            Mặc định
                        </label>
                        <label style="width: 50%" for="thongbao">
                            <input value="1" type="radio" name="thongbao" id="thongbao">
                            Thông báo đẩy
                        </label>
                    </td>
                </tr>
                <tr>
                    <th class="lable">Trạng thái website</th>
                    <td>
                        <select name="" id="" class="form-control ">
                            <option value="0">Đang hoạt động</option>
                            <option value="0">Bảo trì, nâng cấp</option>
                            <option value="0">Tạm khóa</option>
                        </select>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
@endsection