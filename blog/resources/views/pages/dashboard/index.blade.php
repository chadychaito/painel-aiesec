@extends('layouts.dashboard')

@section('content')

  <!-- page content -->
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
      <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
        <div class="left"></div>
        <div class="right">
          <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
          <div class="count">{{$count_user}}</div>
        </div>
      </div>
      <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
        <div class="left"></div>
        <div class="right">
          <span class="count_top"><i class="fa fa-exchange"></i> Total Exchangers</span>
          <div class="count green">{{$count_intercambista}}</div>
        </div>
      </div>
      <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
        <div class="left"></div>
        <div class="right">
          <span class="count_top"><i class="fa fa-child"></i> Total Buddies</span>
          <div class="count">{{$count_buddy}}</div>
        </div>
      </div>
      <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
        <div class="left"></div>
        <div class="right">
          <span class="count_top"><i class="fa fa-home"></i> Total Hosts</span>
          <div class="count">{{$count_host}}</div>
        </div>
      </div>
      <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
        <div class="left"></div>
        <div class="right">
          <span class="count_top"><i class="fa fa-heart"></i> Total Ongs</span>
          <div class="count">{{$count_ong}} </div>
        </div>
      </div>
      <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
        <div class="left"></div>
        <div class="right">
          <span class="count_top"><i class="fa fa-institution"></i> Total Projects</span>
          <div class="count">{{$count_projeto}}</div>
        </div>
      </div>

    </div>
    <!-- /top tiles -->
@endsection