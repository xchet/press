@extends('admin.layouts.app')
@section('title','Users')
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
                                <li><a class="toggle-vis" data-column="0">Name</a>
                                </li>
                                <li><a class="toggle-vis" data-column="1">Position</a>
                                </li>
                                <li><a class="toggle-vis" data-column="2">Office</a>
                                </li>
                                <li><a class="toggle-vis" data-column="3">Age</a>
                                </li>
                                <li><a class="toggle-vis" data-column="4">Start Date</a>
                                </li>
                                <li><a class="toggle-vis" data-column="5">Salary</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <table id="example2" class="display" class="full-width">
                    <thead>
                        <tr>
                            <th>{{__('web.NAME')}}</th>
                            <th>{{__('web.SIGN_UP_DATE')}}</th>
                            <th>{{__('web.EMAIL')}}</th>
                            <th>{{__('web.SOURCE')}}</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                @if(isAdminById($user->id))
                                    <td>
                                        <span class="label label-sm label-info"> {{  $user->real_name ? $user->real_name : $user->name  }}</span>
                                    </td>
                                @else
                                    <td>{{ $user->real_name ? $user->real_name : $user->name }}</td>
                                @endif
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if($user->register_from == 'github')
                                        <i class="fa fa-github-alt fw" data-toggle="tooltip" title="GitHub"></i>
                                    @elseif($user->register_from == 'web_form')
                                        <i class="fa fa-globe fw" data-toggle="tooltip" title="Website"></i>
                                    @endif
                                    {{-- <span class="label label-sm label-success"> Approved </span>
                                    <span class="label label-sm label-warning"> Suspended </span>
                                    <span class="label label-sm label-danger"> Blocked </span>
                                    <span class="label label-sm label-info"> Info </span> --}}
                                </td>
                                <td class="valigntop">
                                    <div class="btn-group">
                                        <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
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