@extends('admin.layouts.master')
@section('title','Trang chủ')
@section('content')
<div class="row">
<div class="col-md-12 col-sm-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Stripped table <small>Stripped table subtitle</small></h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Tên sản phẩm</th>
              <th>Danh mục</th>
              <th>Hình ảnh</th>
              <th>Active</th>
              <th>Ngày cập nhật</th>
              <th width="5%">Xóa</th>
              <th width="5%">Sửa</th>
            </tr>
          </thead>
          <tbody>
            @if (count($items)>0)
                @foreach ($items as $item)                    
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->category_id}}</td>
                    <td>{{$item->image}}</td>
                    <td>{{$item->active ? 'Hiển thị':'Ẩn'}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>
                        <a href="admin/category/{{$item->id}}/delete">
                            <button class="btn btn-danger">Xóa</button>
                        </a>
                    </td>
                    <td>
                        <a href="admin/category/{{$item->id}}/edit">
                            <button class="btn btn-primary">Sửa</button>
                        </a>
                    </td>
                </tr>
                @endforeach                
            @else
                <tr>
                    <td colspan="8" align="center">Chưa có dữ liệu để hiển thị</td>
                </tr>
            @endif
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>
@endsection