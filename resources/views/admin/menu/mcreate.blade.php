@extends('layouts.admin_app')
@section('title',"Category Create")
@section("content")
<div class="container">
    <br> <br>
  
    <div class="row justify-content-md-center">
        <div class="col-md-10 col-md-offset-2">
        <h3>Create Menu For Malibu</h3>
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name ( <span style='color:red'>*</span> ) : </label>
                            <input  type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category">
                            @error('name')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category  ( <span style='color:red'>*</span> ) : </label>

                            <select name="category"  class="form-control" id="">
                                <option value="">-- Select Category ---</option>
                                @foreach($category as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            
                            @error('category')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">

              
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Price ( <span style='color:red'>*</span> ) : </label>
                            <input  type="number" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category">
                            @error('price')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Image ( <span style='color:red'>*</span> ) : </label>
                            <input  type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category">
                            @error('image')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        
                        </div>
                    </div>


                <br>


                </div>

                <!-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description ( <span style='color:red'>*</span> ) : </label>
                            <input  type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category">
                            @error('image')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        
                        </div>
                    </div> -->

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