@extends('layouts.blank')

@section('section_name')
Home
@endsection

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
    <link href="{{ asset('css/nprogress.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
@endpush

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">
    	<div class="page-title">
          <div class="title_left">
            <h3>Home</h3>
          </div>

          <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>
        </div>
    	<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-12">
                    <h3>Welcome to TELLUS <small>The platform that lets you monetize on your expertise</small></h3>
                  </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                <p>Tellus is all about business. We'd like you to explore our platform and see how we created a perfect suite capable of creating revenues from your expertise. The combined tools and platform services we offer makes it easy to monetize and grow your client reach. We offer paid LIVE 1on1 streaming sessions as well as group sessions, but that's not all. In fact far from it. </p>

				<p> Tellus is more then just a streaming platform to connect experts with clients. It is also a completely new ecosystem driven by our groundbreaking Revenue Matrix system at the very core, strengthened by the use of our own cryptocurrency,Tellus, which is used for all payments. This reciprocal revenue distribution system is a true sharing economy concept designed from the ground up. This underlying system of income distribution incentivvises growth and usage across our multiple projects. </p>

				<p>Coin holders will receive weekly dividends payouts from fees collected from every transactions made on the network. By using Tellus as the base currency for all paid services we are able to reward those who are staking coins in their wallet, and subsequently we create a synthetic demand intended to increase the coin price value. This is possible as there is a limitation to the supply of Tellus coins and the fact that the amount of new created coins are decreasing over time. Read how Tellus is intended and designed to increase both business growth and monetary value (link to our corporate website). </p>

                </div>
                <div class="clearfix"></div>
              </div>
            </div>
         </div>
    </div>


    <!-- /page content -->
@endsection


@push('scripts')
    <script src="{{ asset('js/nprogress.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"> </script>
@endpush