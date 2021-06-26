@extends('admin.layouts.app')
@section('title', 'Categories')
@section('css')
<link href="{{ asset('assets') }}/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
@endsection
@section('mid-br')
    {{-- <li><a class="parent-item" href="#">@yield('title')</a>&nbsp;<i class="fa fa-angle-right"></i>
    </li> --}}
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-topline-yellow">
            <div class="card-head">
                <header>@yield('title')</header>
                <div class="tools">
                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                </div>
            </div>
            <div class="card-body ">
                <div class="row p-b-20">
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="btn-group">
                            <button id="sample_editable_1_new" class="btn btn-info"> Add New
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="btn-group pull-right">
                            <button class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-print"></i> Print </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                </li>
                            </ul>
                        </div>

                        <div class="btn-group pull-right">
                            <button class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">show/hide
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <li><a class="toggle-vis" data-column="0">Edit</a>
                                </li>
                                <li><a class="toggle-vis" data-column="1">Delete</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <table id="example2" class="display" class="full-width">
                    <thead>
                        <tr>
                            <th>{{__('web.NAME')}}</th>
                            <th>{{__('web.DESCRIPTION')}}</th>
                            <th>{{__('web.ARTICLE')}}</th>
                            <th>{{__('web.OPERATING')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ str_limit($category->description, 64) }}</td>
                                <td>{{ $category->posts_count }}</td>

                                <td >
                                    <button class="btn btn-success btn-xs">
                                        <i class="fa fa-check"></i>
                                    </button>
                                    <button class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    <button class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </button>
                                </td>
                            </tr>
                                
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js" ></script>
    <script src="{{ asset('assets') }}/js/pages/table/table_data.js" ></script>    
@endsection