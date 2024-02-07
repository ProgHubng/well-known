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
                            <h2>Edit User</h2>
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
                            <h6 class="mb-15">Edit user</h6>
                            <p class="text-sm mb-25">
                                update user details
                            </p>
                            <form action="{{ url('admin/storeuser') }}" method="POST">
                                @csrf

                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label> Phone number</label>
                                            <input type="text" value="{{ $user->phone_number }}" readonly />
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label>Balance</label>
                                            <input type="number" value="{{ $user->balance }}" name="balance" />
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label>Password</label>
                                            <input type="password" name="password" placeholder="Password" />
                                        </div>
                                    </div>
                                    
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