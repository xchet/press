@extends('admin.layouts.app')
@section('title', $category->name)
@section('css')
    
@endsection
@section('mid-br')
    <li><a class="parent-item" href="#">Category</a>&nbsp;<i class="fa fa-angle-right"></i>
    </li>
@endsection
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-head">
                <header>Edit @yield('title')</header>
                <button id = "panel-button" 
                    class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
                    data-upgraded = ",MaterialButton">
                    <i class = "material-icons">more_vert</i>
                </button>
                <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                    data-mdl-for = "panel-button">
                    {{-- <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
                    <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
                    <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li> --}}
                </ul>
            </div>
            <form action="">
                <div class="card-body row">

                    <div class="col-lg-6 p-t-20"> 
                        <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                            <input class = "mdl-textfield__input" type = "text" id = "txtFirstName" name="name" value="">
                            <label class = "mdl-textfield__label">Category Name</label>
                            @if ($errors->has('name'))
                                <small>{{ $errors->first('name') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 p-t-20"> 
                        <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                            <input class = "mdl-textfield__input" type = "file" id = "txtLasttName" name="cover_img">
                            {{-- <label class = "mdl-textfield__label" >Last Name</label> --}}
                        </div>
                    </div>

                    <div class="col-lg-12 p-t-20"> 
                        <div class = "mdl-textfield mdl-js-textfield txt-full-width">
                            <textarea class="mdl-textfield__input" rows="4" id="education" name="description">
                                
                            </textarea>
                            <label class = "mdl-textfield__label" for = "text7">Description</label>
                        </div>
                    </div>

                    <div class="col-lg-12 p-t-20 text-center"> 
                        <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Update</button>
                        {{-- <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button> --}}
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> 
@endsection
@section('js')
    
@endsection