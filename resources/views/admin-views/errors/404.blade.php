@extends('admin.layouts.app')

@section('title','404')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2 class="col-sm-9">Error</h2>
            <ol class="breadcrumb pull-right" style="padding-top:2.5%">
                <li class="active">
                    <strong>Error</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content">
        <div class="middle-box text-center animated fadeInRightBig" style="margin-top:0px">
            <h1>404</h1>
			<h3 class="font-bold">Page Not Found</h3>

			<div class="error-desc">
				Sorry, but the page you are looking for has note been found. Try checking the URL for error, then hit the refresh button on your browser or try found something else in our app.
				
			</div>
        </div>
    </div>

@endsection