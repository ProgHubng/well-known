@extends('layouts.admin')

@section('content')


<main class="main-wrapper">
    <!-- ========== header start ========== -->
    @include('layouts.inc.header')
    <!-- ========== header end ========== -->

    <!-- ========== section start ========== -->
    <section class="section">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title mb-30">
                            <h2>Edit Plan</h2>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->


            <div class="form-layout-wrapper">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card-style mb-30">
                            <h6 class="mb-15">Edit plan</h6>

                            <form action="{{ url('admin/updateplan') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" value="{{ $plan->id }}" name="id">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label> Name</label>
                                            <input type="text" value="{{ $plan->name }}" name="name"  required/>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label> Image</label>
                                            <input type="file" name="image"/>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label>Price</label>
                                            <input type="number" value="{{ $plan->price }}" name="price" required/>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label>Daily income</label>
                                            <input type="number" value="{{ $plan->daily_income }}" name="daily_income" required/>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label>Duration</label>
                                            <input type="number" value="{{ $plan->valid }}" name="duration" required/>
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-12">
                                        <div class="
                                button-group
                                d-flex
                                justify-content-center
                                flex-wrap
                              ">
                                            <button class="
                                  main-btn
                                  primary-btn
                                  btn-hover
                                  w-100
                                  text-center
                                ">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </form>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>



            <!-- End Row -->
        </div>
        <!-- end container -->
    </section>
    <!-- ========== section end ========== -->

    <!-- ========== footer start =========== -->
    @include('layouts.inc.footer')
    <!-- ========== footer end =========== -->
</main>


@endsection
