@extends('admin.layouts.master')
@section('title','Trang chủ')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Transaction Summary <small>Weekly progress</small></h2>
          <div class="filter">
            <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
              <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
              <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="col-md-12 col-sm-12 ">
            <div class="demo-container" style="height:280px">
              <div id="chart_plot_02" class="demo-placeholder"></div>
            </div>
            <div class="tiles">
              <div class="col-md-4 tile">
                <span>Total Sessions</span>
                <h2>231,809</h2>
                <span class="sparkline11 graph" style="height: 160px;">
                     <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                </span>
              </div>
              <div class="col-md-4 tile">
                <span>Total Revenue</span>
                <h2>$231,809</h2>
                <span class="sparkline22 graph" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                </span>
              </div>
              <div class="col-md-4 tile">
                <span>Total Sessions</span>
                <h2>231,809</h2>
                <span class="sparkline11 graph" style="height: 160px;">
                       <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection