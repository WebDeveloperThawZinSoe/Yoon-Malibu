@extends('layouts.admin_app')
@section('title',"Category Create")
@section("content")
<div class="container">
    <br> <br>
   
    <div class="row justify-content-md-center">
        
        <div class="col-md-10 col-md-offset-2">
        <h3>Create Category For Malibu</h3>
            <form method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Category : </label>
                    <input  type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category">
                    @error('name')
                        <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                    @enderror
                   
                </div>
               
                <br> 
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
            <br> <br> <hr>
            <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Menu Item Count</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                   <tbody>
                    @foreach($datas as $key=>$data)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{$data->name}}</td>
                        <td>@php 
                                echo DB::table("m_menus")->where("category_id",$data->id)->count();
                            @endphp</td>
                        <td>
                            <button  data-toggle="modal" data-target="#mupdate{{$data->id}}" type="button" class="btn btn-sm btn-outline-primary">Update</button>
                            <button type="button" class="btn btn-sm btn-outline-success">Detail</button>
                            <a href="/mcategory/{{$data->id}}/delete" onclick="return  confirm('Are You Sure To Delete This Category ?')" class="btn btn-sm btn-outline-danger">Delete</a>
                        </td>
                    </tr>

                     <!-- The Modal -->
                     <div class="modal" id="mupdate{{$data->id}}">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        
                            <!-- Modal Header -->
                            <div class="modal-header">
                            <h4 class="modal-title">Update Category</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                            <form action="/category/update" method="post">
                                <input type="hidden" name="id" value="{{$data->id}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category : </label>
                                        <input  type="text" required value="{{$data->name}}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category">
                                       
                                    </div>
                                
                                    <br> 
                                    <button type="submit" class="btn btn-primary">Update</button>  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                            
                            
                            
                        </div>
                        </div>
                    </div>
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