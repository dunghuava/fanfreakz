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
              <th>First Name</th>
              <th>Last Name</th>
              <th>Username</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>
@endsection