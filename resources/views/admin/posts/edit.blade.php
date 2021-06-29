@extends('admin.layouts.app')
@section('title', 'Categories')
@section('css')
    
@endsection
@section('content')
    
@endsection
@section('js')
    <script>
        $('#title').change(function(e){
            $.get('{{ route("postSlug") }}',{
                function (data) {
                    $('#slug').val(data.slug);
                }
            });
        });
    </script>
@endsection