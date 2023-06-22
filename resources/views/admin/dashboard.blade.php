@extends('layouts.admin_app')
@section('title',"Dashboard")
@section("content")
<div class="container">
    <br> <br>

    <div class="row justify-content-md-center">
        <h3>Dashboard</h3>
        <br> <br>
        <div class="row">
            <div class="col-xl-6 col-md-12">
                <div class="card bg-default mb-4">

                    <div class="card-body">Category ( Yoon Kitchen )
                        <br>
                        <p>
                            Total Count :

                            <span style="display:inline-block !important;font-size:24px;padding-left:20px">
                                <?php 
                                                echo DB::table("categories")->count();
                                                ?>
                            </span>
                        </p>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small  stretched-link" href="/category/create">
                            View Details
                        </a>
                        <div class="small "><svg class="svg-inline--fa fa-angle-right" aria-hidden="true"
                                focusable="false" data-prefix="fas" data-icon="angle-right" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                </path>
                            </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-12">
                <div class="card bg-default mb-4">

                    <div class="card-body">Category ( Malibu Kitchen )
                        <br>
                        <p>
                            Total Count :

                            <span style="display:inline-block !important;font-size:24px;padding-left:20px">
                                <?php 
                                                echo DB::table("m_categories")->count();
                                                ?>
                            </span>
                        </p>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small  stretched-link" href="/mcategory/create">
                            View Details
                        </a>
                        <div class="small "><svg class="svg-inline--fa fa-angle-right" aria-hidden="true"
                                focusable="false" data-prefix="fas" data-icon="angle-right" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                </path>
                            </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-6 col-md-12">
                <div class="card bg-default mb-4">

                    <div class="card-body">Menu Item ( Yoon Kitchen )
                        <br>
                        <p>
                            Total Count :

                            <span style="display:inline-block !important;font-size:24px;padding-left:20px">
                                <?php 
                                                echo DB::table("menus")->count();
                                                ?>
                            </span>
                        </p>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small  stretched-link" href="/menu/view">
                            View Details
                        </a>
                        <div class="small "><svg class="svg-inline--fa fa-angle-right" aria-hidden="true"
                                focusable="false" data-prefix="fas" data-icon="angle-right" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                </path>
                            </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-12">
                <div class="card bg-default mb-4">

                    <div class="card-body">Menu Item ( Malibu Kitchen )
                        <br>
                        <p>
                            Total Count :

                            <span style="display:inline-block !important;font-size:24px;padding-left:20px">
                                <?php 
                                                echo DB::table("m_menus")->count();
                                                ?>
                            </span>
                        </p>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small  stretched-link" href="/mmenu/view">
                            View Details
                        </a>
                        <div class="small "><svg class="svg-inline--fa fa-angle-right" aria-hidden="true"
                                focusable="false" data-prefix="fas" data-icon="angle-right" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                </path>
                            </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">

<div class="col-xl-6 col-md-12">
    <div class="card bg-default mb-4">

        <div class="card-body">Event ( Yoon Kitchen )
            <br>
            <p>
                Total Count :

                <span style="display:inline-block !important;font-size:24px;padding-left:20px">
                    <?php 
                                    echo DB::table("events")->count();
                                    ?>
                </span>
            </p>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small  stretched-link" href="/event/view">
                View Details
            </a>
            <div class="small "><svg class="svg-inline--fa fa-angle-right" aria-hidden="true"
                    focusable="false" data-prefix="fas" data-icon="angle-right" role="img"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                    <path fill="currentColor"
                        d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                    </path>
                </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
            </div>
        </div>
    </div>
</div>

<div class="col-xl-6 col-md-12">
    <div class="card bg-default mb-4">

        <div class="card-body">Event ( Malibu Kitchen )
            <br>
            <p>
                Total Count :

                <span style="display:inline-block !important;font-size:24px;padding-left:20px">
                    <?php 
                                    echo DB::table("m_events")->count();
                                    ?>
                </span>
            </p>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small  stretched-link" href="/mevent/view">
                View Details
            </a>
            <div class="small "><svg class="svg-inline--fa fa-angle-right" aria-hidden="true"
                    focusable="false" data-prefix="fas" data-icon="angle-right" role="img"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                    <path fill="currentColor"
                        d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                    </path>
                </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
            </div>
        </div>
    </div>
</div>
</div>

    </div>


</div>
@endsection