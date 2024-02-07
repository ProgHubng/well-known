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
                            <h2>Withdrawals</h2>
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
                                <h6 class="text-medium mb-30">Withdrawals</h6>
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
                        <div class="table-responsive">
                            <table class="table top-selling-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6 class="text-sm text-medium">phone number</h6>
                                        </th>
                                        <th class="min-width">
                                            <h6 class="text-sm text-medium">
                                                Amount <i class="lni lni-arrows-vertical"></i>
                                            </h6>
                                        </th>
                                        <th class="min-width">
                                            <h6 class="text-sm text-medium">
                                                Bank name <i class="lni lni-arrows-vertical"></i>
                                            </h6>
                                        </th>
                                        <th class="min-width">
                                            <h6 class="text-sm text-medium">
                                                Acct name <i class="lni lni-arrows-vertical"></i>
                                            </h6>
                                        </th>
                                        <th class="min-width">
                                            <h6 class="text-sm text-medium">
                                                Acct no <i class="lni lni-arrows-vertical"></i>
                                            </h6>
                                        </th>
                                        <th class="min-width">
                                            <h6 class="text-sm text-medium">
                                                Status <i class="lni lni-arrows-vertical"></i>
                                            </h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium text-end">
                                                Actions <i class="lni lni-arrows-vertical"></i>
                                            </h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($withdrawals as $item)

                                    <tr>
                                        <td>
                                            <div class="product">

                                                <p class="text-sm">{{ $item->user->phone_number }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm">N{{ number_format($item->amount) }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">{{ $item->user->bank_name }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">{{ $item->user->account_name }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">{{ $item->user->account_number }}</p>
                                        </td>
                                        <td>
                                            @if($item->status == 'success')
                                            <span class="status-btn success-btn">Success</span>
                                            @elseif ($item->status == 'pending')
                                            <span class="status-btn warning-btn">Pending</span>

                                            @elseif($item->status == 'failed')
                                            <span class="status-btn close-btn">Failed</span>

                                            @endif

                                        </td>
                                        <td>
                                            <div class="action justify-content-end">

                                                <button class="more-btn ml-10 dropdown-toggle" id="moreAction1"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="lni lni-more-alt"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="moreAction1">
                                                    <li class="dropdown-item">
                                                        <a href="{{ url('admin/with/paid/'. $item->id ) }}" class="text-gray">Approve</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="{{ url('admin/with/fail/'. $item->id ) }}" class="text-gray">Failed</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                        @endforeach

                                </tbody>
                            </table>
                            <!-- End Table -->
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
</main>


@endsection
