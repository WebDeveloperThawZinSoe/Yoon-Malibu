@extends('layouts.admin_app')
@section('title',"Category Create")
@section("content")

<div class="container">
    <br> <br>
    
    <div class="row justify-content-md-center">
        <div class="col-md-10 col-md-offset-2">
        <h3> Event Of Yoon Kitchen</h3>
         <br>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Image</th>
            <th>Description</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($events as $key=>$data)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$data->name}}</td>
                   
                    <td><img src="{{$data->image}}" style="width:80px !important;height:80px !important;" alt=""></td>
                    <td> 
                        <?php 
                    //    $description = $data['description'];
                    //    if(count($description) >=100 ){
                    //     echo substr($description,100);
                    //    }else{
                    //     echo $description;
                    //    }
                       echo $data->description;
                    ?>
                    </td>
                    <td>{{$data->date}}</td>
                    <td>
                            <button type="button" class="btn btn-sm btn-outline-primary">Update</button>
                           
                            <a href="/event/{{$data->id}}/delete" onclick="return  confirm('Are You Sure To Delete This Event ?')" class="btn btn-sm btn-outline-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
           
        </tbody>
        </table>
            
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