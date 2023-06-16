@extends('layouts.admin_app')
@section('title',"Category Create")
@section("content")

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<div class="container">
    <br> <br>
    <div class="row justify-content-md-center">
        <div class="col-md-10 col-md-offset-2">
            <form method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name : </label>
                    <input  type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category">
                    @error('name')
                        <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                    @enderror
                   
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Email : </label>
                    <input  type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category">
                    @error('email')
                        <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                    @enderror
                   
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Password : </label>
                    <input  type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category">
                    @error('password')
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
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                   <tbody>
                    @foreach($users as $key=>$user)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                          
                            @if($user->id != 1 && Auth::user()->id == 1)
                            <button type="button" class="btn btn-sm btn-outline-primary"  style="display:inline;"  data-toggle="modal" data-target="#myModal{{$user->id}}" >Change Password</button>
                           
                            <form action="/account/delete" method="post" style="display:inline;">
                                @csrf
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <button onclick="return confirm('Are You Sure To Delete This Account ?')" type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                            @else
                                @if(Auth::user()->id == 1)
                                    <button type="button" class="btn btn-sm btn-outline-primary"  style="display:inline;"  data-toggle="modal" data-target="#myModal{{$user->id}}" >Change Password</button>
                                @else 
                                    <p class="text text-danger">You Have No Permission </p>
                                @endif
                           
                            @endif
                          
                        </td>
                    </tr>


                    <!-- The Modal -->
                    <div class="modal" id="myModal{{$user->id}}">
                    <div class="modal-dialog">
                        <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Change Password .... </h4>
                           
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                        <form method="post" action="/account/password/update">
                            @csrf
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password : </label>
                                <input required  type="password" name="upassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category">
                                @error('update_name')
                                    <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                                @enderror
                            
                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary">Change Now</button>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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