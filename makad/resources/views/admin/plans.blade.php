@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/vanilla-dataTables.min.css') }}" />

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
                            <h2>Plans</h2>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->




            <div class="row">

                <!-- End Col -->
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <div class="
                  title
                  d-flex
                  flex-wrap
                  align-items-center
                  justify-content-between
                ">
                            <div class="left">
                                <h6 class="text-medium mb-30">Plans</h6>
                            </div>
                            <div class="right">
                                <div class="select-style-1">
                                    <div class="select-position select-sm">
                                        <a class="btn btn-danger" href="{{ url('admin/addplans') }}">ADD PLAN</a>
                                    </div>
                                </div>
                                <!-- end select -->
                            </div>
                        </div>
                        <!-- End Title -->


                        <div class="tables-wrapper">
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="card-style mb-30">
                                  <h6 class="mb-10">Plans</h6>
                                  <div class="table-responsive">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th><h6>name</h6></th>
                                          <th><h6>image</h6></th>
                                          <th><h6>price</h6></th>
                                          <th><h6>daily income</h6></th>
                                          <th><h6>duration</h6></th>
                                          <th data-type="date" data-format="YYYY/MM/DD">
                                            <h6>Date created</h6>
                                          </th>
                                          <th><h6>Action</h6></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($plan as $item)

                                        <tr>
                                            <td><p>{{ $item->name }}</p></td>
                                            <td><img src="{{ asset('uploads/plan/'.$item->image) }}" width="30px"></td>
                                            <td><p>N{{ number_format($item->price) }}</p></td>
                                            <td><p>N{{ number_format($item->daily_income) }}</p></td>
                                            <td><p>{{ $item->valid }}</p></td>
                                            <td><p>{{ $item->created_at->format('Y M d, h:ia') }}</p></td>
                                            <td><a class="btn btn-warning" href="{{ url('admin/editplan/'.$item->id) }}">Edit</a></a></td>
                                          </tr>

                                        @endforeach


                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- end container -->
    </section>
    <!-- ========== section end ========== -->

    <!-- ========== footer start =========== -->
    @include('layouts.inc.footer')
    <!-- ========== footer end =========== -->
    <script src="{{ asset('assets/js/vanilla-dataTables.min.js') }}"></script>

    <script>
      var table = new DataTable("table");
    </script>
</main>


@endsection
