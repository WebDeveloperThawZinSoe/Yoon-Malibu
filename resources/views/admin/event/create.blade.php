@extends('layouts.admin_app')
@section('title',"Event Create")
@section("content")
<div class="container">
    <br> <br>
    
    <div class="row justify-content-md-center">
        <div class="col-md-10 col-md-offset-2">
        <h3>Create Event For Yoon Kitchen</h3>
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name ( <span style='color:red'>*</span> ) : </label>
                            <input  type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                            @error('name')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date ( <span style='color:red'>*</span> ) : </label>
                            <input  type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Date">
                            @error('price')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">

              


                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Image ( <span style='color:red'>*</span> ) : </label>
                            <input  type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category">
                            @error('image')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        
                        </div>
                    </div>


                


                </div>
                <br> 
                <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description ( <span style='color:red'>*</span> ) : </label>
                            <textarea   name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Description"></textarea>
                            @error('description')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        
                        </div>
                    </div>

                <br> 
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
            
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