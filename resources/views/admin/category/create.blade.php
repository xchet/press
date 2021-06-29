@extends('admin.layouts.app')
@section('title', 'Create New Category')
@section('css')
    {{-- <link href="{{ asset('assets') }}/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen"> --}}
    <link href="https://releases.transloadit.com/uppy/v1.29.1/uppy.min.css" rel="stylesheet">

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
                    <header>@yield('title')</header>
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
                <form action="{{ route('category.store') }}" method="POST">
                    <div class="card-body row">

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                <input class="mdl-textfield__input" name="parentID" type="text" id="sample2" value="" readonly tabIndex="-1">
                                <label for="sample2" class="pull-right margin-0">
                                    <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                </label>
                                <label for="sample2" class="mdl-textfield__label">Parent Category</label>
                                <ul data-mdl-for="sample2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                    <li class="mdl-menu__item" data-val="0">Default</li>
                                    @foreach ($categories as $category)
                                        <li class="mdl-menu__item" data-val="{{ $category->id }}">{{ $category->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 p-t-20"> 
                            <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                <input class = "mdl-textfield__input" type = "text" id = "category_name" name="name">
                                <label class = "mdl-textfield__label">Category</label>
                                @if ($errors->has('name'))
                                    <small>{{ $errors->first('name') }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-6 p-t-20"> 
                            <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                <input class = "mdl-textfield__input" type = "text" id = "slug" name="slug">
                                <label class = "mdl-textfield__label">Slug</label>
                                @if ($errors->has('slug'))
                                    <small>{{ $errors->first('slug') }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-6 p-t-20"> 
                            <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                <input class = "mdl-textfield__input" type = "file" id = "txtLasttName" name="cover_img">
                                {{-- <label class = "mdl-textfield__label" >Category Cover Image</label> --}}
                            </div>
                        </div>
                        
                        <div class="col-lg-12 p-t-20"> 
                            <div class = "mdl-textfield mdl-js-textfield txt-full-width">
                                <textarea name="description" class = "mdl-textfield__input" rows =  "4" 
                                    id = "description" ></textarea>
                                <label class = "mdl-textfield__label" for = "text7">Category Description</label>
                            </div>
                        </div>


                        <div class="col-lg-12 p-t-20 text-center"> 
                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 

@endsection

@section('js')

<script src="{{ asset('assets') }}/plugins/material/material.min.js"></script>
<script src="{{ asset('assets') }}/js/pages/material_select/getmdl-select.js" ></script>
<script src="{{ asset('assets') }}/plugins/material-datetimepicker/moment-with-locales.min.js"></script>
<script src="{{ asset('assets') }}/plugins/material-datetimepicker/bootstrap-material-datetimepicker.js"></script>
<script src="{{ asset('assets') }}/plugins/material-datetimepicker/datetimepicker.js"></script>
<script>
    $('#category_name').change(function(e){
        $.get('{{ route("categorySlug") }}',
        { 'name': $(this).val() },
            function (data) {
                $('#slug').val(data.slug);
            }
        );
    });
</script>

    {{-- <script src="{{ asset('assets') }}/plugins/dropzone/dropzone.js" ></script>
    <script src="{{ asset('assets') }}/plugins/dropzone/dropzone-call.js" ></script> --}}

    {{-- <script src="https://releases.transloadit.com/uppy/v1.29.1/uppy.min.js"></script>
    <script>
        // var uppy = Uppy.Core()
        //     .use(Uppy.Dashboard, {
        //         inline: true,
        //         target: '#drag-drop-area'
        //     })
        //     .use(XHRUpload, {endpoint: '/admin/upload/image'})
            
        // uppy.on('complete', (result) => {
        //     console.log('Upload complete! We’ve uploaded these files:', result.successful)
        // })
    </script> --}}
@endsection