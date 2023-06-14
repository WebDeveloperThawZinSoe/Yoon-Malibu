@extends('layouts.admin_app')
@section('title',"Category Create")
@section("content")
<div class="container">
    <br> <br>
    
    <div class="row justify-content-md-center">
        <div class="col-md-10 col-md-offset-2">
        <h3> Menu For Yoon Kitchen</h3>
         
            
        </div>
        
    </div>


</div>
@if (session()->has('success'))
    <script>
        Swal.fire(
    '',
    '  {{ session()->get('success') }}',
    'success'
    )
    </script>
@endif


@endsection