<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
        <div class="col-auto">

            <span class="flex-center">
                <h1 class="text-30 lh-14 fw-600">Hello {{ explode(' ', Auth::user()->name)[0] }}!</h1>
                <span class="wave-emoji ml-15">
                    <img src="img/hand.png" alt="GoTrip">
                </span>
            </span>
            <!-- <div class="text-15 text-light-1">Lorem ipsum dolor sit amet, consectetur.</div> -->

        </div>

        <div class="col-auto">

        </div>
    </div>


    <div class="row y-gap-30">

        <div class="col-xl-4 col-md-6">
            <div class="py-30 px-30 rounded-4 bg-white shadow-3">
                <div class="row y-gap-20 justify-between items-center">
                    <div class="col-auto">
                        <div class="fw-500 lh-14">Budget</div>
                        <div class="text-26 lh-16 fw-600 mt-5">${{ number_format($budget) }}</div>
                        <div class="text-15 lh-14 text-light-1 mt-5">Total pending</div>
                    </div>

                    <div class="col-auto">
                        <img src="img/dashboard/icons/1.svg" alt="icon">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6">
            <div class="py-30 px-30 rounded-4 bg-white shadow-3">
                <div class="row y-gap-20 justify-between items-center">
                    <div class="col-auto">
                        <div class="fw-500 lh-14">Savings</div>
                        <div class="text-26 lh-16 fw-600 mt-5">${{ number_format($savedAmount) }}</div>
                        <div class="text-15 lh-14 text-light-1 mt-5">Total savings</div>
                    </div>

                    <div class="col-auto">
                        <img src="img/dashboard/icons/2.svg" alt="icon">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="py-30 px-30 rounded-4 bg-white shadow-3">
                <div class="row y-gap-20 justify-between items-center">
                    <div class="col-auto">
                        {{-- <div class="fw-500 lh-14">Add Plan</div> --}}
                        <a href="{{ route('add.plan') }}" class="btn btn-primary">Add Plans</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="col-xl-3 col-md-6">
            <div class="py-30 px-30 rounded-4 bg-white shadow-3">
                <div class="row y-gap-20 justify-between items-center">
                    <div class="col-auto">
                        <div class="fw-500 lh-14">Services</div>
                        <div class="text-26 lh-16 fw-600 mt-5">22,786</div>
                        <div class="text-15 lh-14 text-light-1 mt-5">Total bookable services</div>
                    </div>

                    <div class="col-auto">
                        <img src="img/dashboard/icons/4.svg" alt="icon">
                    </div>
                </div>
            </div>
        </div> --}}

    </div>

    <div class="row y-gap-30 pt-20">
        <div class="col-xl-7 col-md-6">
            <div class="py-30 px-30 rounded-4 bg-white shadow-3">
                <div class="d-flex justify-between items-center">
                    <h2 class="text-18 lh-1 fw-500">
                        Savings Statistics
                    </h2>


                    <div class="dropdown js-dropdown js-category-active">
                        <div class="dropdown__button d-flex items-center bg-white border-light rounded-100 px-15 py-10 text-14 lh-12"
                            data-el-toggle=".js-category-toggle"
                            data-el-toggle-active=".js-category-active">
                            <span class="js-dropdown-title">This Week</span>
                            <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                        </div>

                        <div class="toggle-element -dropdown  js-click-dropdown js-category-toggle">
                            <div class="text-14 y-gap-15 js-dropdown-list">

                                <div><a href="#" class="d-block js-dropdown-link">Animation</a>
                                </div>

                                <div><a href="#" class="d-block js-dropdown-link">Design</a></div>

                                <div><a href="#" class="d-block js-dropdown-link">Illustration</a>
                                </div>

                                <div><a href="#" class="d-block js-dropdown-link">Business</a></div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="pt-30">
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-5 col-md-6">
            <div class="py-30 px-30 rounded-4 bg-white shadow-3">
                <div class="d-flex justify-between items-center">
                    <h2 class="text-18 lh-1 fw-500">
                        Recent Plans
                    </h2>

                    <div class="">
                        <a href="{{ route('plans') }}" class="text-14 text-blue-1 fw-500 underline">View All</a>
                    </div>
                </div>

                <div class="overflow-scroll scroll-bar-1 pt-30">
                    <table class="table-2 col-12">
                        <thead class="">
                            <tr>
                                <th>#</th>
                                <th>Country</th>
                                <th>Budget</th>
                                <th>Saved</th>
                                <th>Status</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($plans as $plan)
                            @php
                                $plan->start_date = Carbon\Carbon::parse($plan->start_date);
                            @endphp
                                <tr>
                                    <td>#{{ $loop->iteration }}</td>
                                    <td>{{ $plan->country->countryname }}</td>
                                    <td class="fw-500">${{ number_format($plan->budget, 0, '.', ',') }}</td>
                                    <td>$0</td>
                                    <td>
                                        <div
                                            class="rounded-100 py-4 text-center col-12 text-14 fw-500 bg-yellow-4 text-yellow-3">
                                            Pending</div>
                                    </td>
                                    <td>{{ $plan->start_date->format('d/m/Y') }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
