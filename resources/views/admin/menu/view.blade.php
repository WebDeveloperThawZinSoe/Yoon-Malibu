@extends('layouts.admin_app')
@section('title',"Category Create")
@section("content")

<div class="container">
    <br> <br>
    
    <div class="row justify-content-md-center">
        <div class="col-md-10 col-md-offset-2">
        <h3> Menu For Yoon Kitchen</h3>
         <br>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Category</th>
            <th>Image</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($datas as $key=>$data)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$data->name}}</td>
                    <td>
                        <?php 
                           $cat_id = $data->category_id;
                           $cat = DB::table("categories")->find($cat_id);
                           echo $cat->name;
                        ?>
                    </td>
                    <td><img src="{{$data->image}}" style="width:80px !important;height:80px !important;" alt=""></td>
                    <td>{{$data->price}} Ks</td>
                    <td>
                           
                            <a href="/menu/{{$data->id}}/delete" onclick="return  confirm('Are You Sure To Delete This Category ?')" class="btn btn-sm btn-outline-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
           
        </tbody>
        </table>
            <center>
            {{ $datas->links() }}
            </center>
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