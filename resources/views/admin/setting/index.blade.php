@extends('layouts.admin_app')
@section('title',"Category Create")
@section("content")
<div class="container">
    <br> <br>
    
    <div class="row justify-content-md-center">
        <div class="col-md-10 col-md-offset-2">
        <h3>Setting For Yoon Kitchen</h3>

        <form action="/social-content-setting/yoon" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone ( <span style='color:red'>*</span> ) : </label>
                            <input  type="number" value="{{$setting->phone}}" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            @error('phone')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email ( <span style='color:red'>*</span> ) : </label>
                            <input  type="email" value="{{$setting->email}}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            @error('email')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Facebook : </label>
                            <input  type="text" value="{{$setting->fb}}" name="facebook" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            @error('fb')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Youtube : </label>
                            <input  type="text" value="{{$setting->yt}}" name="youtube" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            @error('yt')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Instagram : </label>
                                <input  type="text" value="{{$setting->ig}}" name="ig" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                @error('fb')
                                    <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                                @enderror
                            
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Time : </label>
                            <input  type="text" value="{{$setting->time}}" name="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            @error('time')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address : </label>
                            <textarea  type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">{{$setting->address}}</textarea>
                            @error('address')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <br>
                <button type="submit" class="btn btn-warning">Update</button>
            </form>
            
        </div>
        
    </div>


    <br> <hr>

    <div class="row justify-content-md-center">
        <div class="col-md-10 col-md-offset-2">
        <h3>Setting For Malibu </h3>

        <form action="/social-content-setting/malibu" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone ( <span style='color:red'>*</span> ) : </label>
                            <input  type="number" value="{{$msetting->phone}}" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            @error('phone')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email ( <span style='color:red'>*</span> ) : </label>
                            <input  type="email" value="{{$msetting->email}}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            @error('email')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Facebook : </label>
                            <input  type="text" value="{{$msetting->fb}}" name="facebook" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            @error('fb')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Youtube : </label>
                            <input  type="text" value="{{$msetting->yt}}" name="youtube" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            @error('yt')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Instagram : </label>
                                <input  type="text" value="{{$msetting->ig}}" name="ig" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                @error('fb')
                                    <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                                @enderror
                            
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Time : </label>
                            <input  type="text" value="{{$msetting->time}}" name="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            @error('time')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address : </label>
                            <textarea  type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">{{$msetting->address}}</textarea>
                            @error('address')
                                <p id="emailHelp" class="form-text " style="color:red !important">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <br>
                <button type="submit" class="btn btn-warning">Update</button>
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