@extends('layouts.admin_app')
@section('title',"Category Create")
@section("content")
<div class="container">
    <br> <br>
    
    
    <div class="row justify-content-md-center">
    
        <h3>About Page Data For Yoon Kitchen</h3>

        <form action="/about/update/yoon" method="post">
            @csrf 
            <?php 
                $about = DB::table("abouts")->first();
            ?>
            <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">About ( <span style='color:red'>*</span> ) : </label>
                            <textarea required   name="about" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Description">{{$about->y_about}}</textarea>
                            @error('about')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-warning">Update</button>
        </form>
       
       
        <h3>About Page Data For Malibu</h3>
        <form action="/about/update/malibu" method="post">
            <br> <br>
            @csrf 
            <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">About ( <span style='color:red'>*</span> ) : </label>
                            <textarea required   name="about" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Description">{{$about->m_about}}</textarea>
                            @error('about')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-warning">Update</button>
        </form>
    </div>


    <br> 

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