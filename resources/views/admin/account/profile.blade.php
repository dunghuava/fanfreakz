@extends('admin.layouts.master')
@section('title','Hồ sơ cá nhân')
@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="" class="form-group">
            <table class="table">
                <tr>
                    <th class="lable">Ảnh đại diện</th>
                    <td><input type="file"></td>
                </tr>
                <tr>
                    <th class="lable">Họ</th>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <th class="lable">Tên</th>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <th class="lable">Tên đăng nhập</th>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <th class="lable">Mật khẩu</th>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <th class="lable">Mật khẩu mới</th>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th class="lable">Ngày sinh</th>
                    <td><input type="date" class="form-control"></td>
                </tr>
                <tr>
                    <th class="lable">Trạng thái tài khoản</th>
                    <td>
                        <select name="" id="" class="form-control">
                            <option value="0">Đang hoạt động</option>
                            <option value="0">Tạm khóa</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th class="lable">Phiên đăng nhập</th>
                    <td>
                        <a class="btn btn-danger" href=""><small>Đăng xuất tất cả</small></a>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        <button type="submit" class="btn btn-primary">Cập nhật hồ sơ</button>
                    </th>
                </tr>
            </table>
        </form>
    </div>
</div>
@endsection