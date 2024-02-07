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
                            <h2>Users</h2>
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
                                <h6 class="text-medium mb-30">Users</h6>
                            </div>
                            <div class="right">
                                <div class="select-style-1">
                                    <div class="select-position select-sm">
                                        <select class="light-bg">
                                            <option value="">Today</option>
                                            <option value="">Yesterday</option>
                                        </select>
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
                                  <h6 class="mb-10">Users</h6>
                                  <div class="table-responsive">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th><h6>Phone</h6></th>
                                          <th><h6>Balance</h6></th>
                                          <th><h6>Bank</h6></th>
                                          <th><h6>Acct name</h6></th>
                                          <th><h6>Acct no</h6></th>
                                          <th data-type="date" data-format="YYYY/MM/DD">
                                            <h6>Date Reg</h6>
                                          </th>
                                          <th><h6>Action</h6></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($user as $users)

                                        <tr>
                                            <td><p>{{ $users->phone_number }}</p></td>
                                            <td><p>N{{ number_format($users->balance) }}</p></td>
                                            <td><p>{{ $users->bank_name }}</p></td>
                                            <td><p>{{ $users->account_name }}</p></td>
                                            <td><p>{{ $users->account_number }}</p></td>
                                            <td><p>{{ $users->created_at->format('Y M d, h:ia') }}</p></td>
                                            <td><a class="btn btn-warning" href="{{ url('admin/edituser/'.$users->id) }}">Edit</a></a></td>
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