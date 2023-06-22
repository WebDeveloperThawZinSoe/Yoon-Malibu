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
            <h3> Event Of Malibu</h3>
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

                        <td><img src="{{$data->image}}" style="width:80px !important;height:80px !important;" alt="">
                        </td>
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
                            <button type="button" data-toggle="modal" data-target="#detail{{$data->id}}"
                                class="btn btn-sm btn-outline-primary">Update</button>

                            <a href="/event/{{$data->id}}/delete"
                                onclick="return  confirm('Are You Sure To Delete This Event ?')"
                                class="btn btn-sm btn-outline-danger">Delete</a>
                        </td>
                    </tr>

                    <!-- The Modal -->
                    <div class="modal" id="detail{{$data->id}}">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Update This Event</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <ol>
                                        <?php 
                                       $datas  = DB::table("events")->where("id",$data->id)->first();
                                       
                                            ?>
                                        <form action="/mevent/update" enctype="multipart/form-data" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$datas->id}}">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Name ( <span
                                                                style='color:red'>*</span> ) : </label>
                                                        <input type="text" value="{{$datas->name}}" name="name" class="form-control"
                                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                                            placeholder="Enter Name">
                                                        @error('name')
                                                        <p id="emailHelp" class="form-text "
                                                            style="color:red !important">{{ $message }}</p>
                                                        @enderror

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Date ( <span
                                                                style='color:red'>*</span> ) : </label>
                                                        <input type="date" value="{{$datas->date}}" name="date" class="form-control"
                                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                                            placeholder="Enter Date">
                                                        @error('price')
                                                        <p id="emailHelp" class="form-text "
                                                            style="color:red !important">{{ $message }}</p>
                                                        @enderror

                                                    </div>
                                                </div>
                                            </div>

                                            <br>

                                            <div class="row">




                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Image ( <span
                                                                style='color:red'>*</span> ) : </label>
                                                        <input  type="file" name="image" class="form-control"
                                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                                            placeholder="Enter Category">
                                                        @error('image')
                                                        <p id="emailHelp" class="form-text "
                                                            style="color:red !important">{{ $message }}</p>
                                                        @enderror

                                                    </div>
                                                </div>





                                            </div>
                                            <br>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Description ( <span
                                                            style='color:red'>*</span> ) : </label>
                                                    <textarea  name="description" class="form-control"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                                        placeholder="Enter Description">{{$datas->description}}</textarea>
                                                    @error('description')
                                                    <p id="emailHelp" class="form-text " style="color:red !important">
                                                        {{ $message }}</p>
                                                    @enderror

                                                </div>
                                            </div>

                                            <br>
                                            <button type="submit" class="btn btn-warning">Upgrade</button>
                                        </form>
                                        <?php 
                                       
                                    ?>
                                    </ol>
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
    '  {{ session()->get('
    success ') }}',
    'success'
)
</script>
@endif


@endsection