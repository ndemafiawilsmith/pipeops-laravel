<div>
    {{-- The whole world belongs to you. --}}
    {{-- <section class="py-10 d-flex items-center bg-light-2">
        <div class="container">
            <div class="row y-gap-10 items-center justify-between">
                <div class="col-auto">
                    <div class="row x-gap-10 y-gap-5 items-center text-14 text-light-1">
                        <div class="col-auto">
                            <div class="">Home</div>
                        </div>
                        <div class="col-auto">
                            <div class="">></div>
                        </div>
                        <div class="col-auto">
                            <div class="">London Hotels</div>
                        </div>
                        <div class="col-auto">
                            <div class="">></div>
                        </div>
                        <div class="col-auto">
                            <div class="text-dark-1">Great Northern Hotel, a Tribute Portfolio Hotel, London</div>
                        </div>
                    </div>
                </div>

                <div class="col-auto">
                    <a href="#" class="text-14 text-blue-1 underline">All Hotel in London</a>
                </div>
            </div>
        </div>
    </section> --}}

    @php
        use Carbon\Carbon;
    @endphp


    @php
        $activites = json_decode($itinerary->activities, true);
        // dd($activites);
    @endphp

    <style>
        .scrollable-div {
            height: 500px;
            /* Set the height as needed */
            overflow-y: auto;
        }
    </style>
    <div class="singleMenu js-singleMenu">
        <div class="singleMenu__content">
            <div class="container">
                <div class="row y-gap-20 justify-between items-center">
                    <div class="col-auto">
                        <div class="singleMenu__links row x-gap-30 y-gap-10">
                            <div class="col-auto">
                                <a href="#overview">Overview</a>
                            </div>
                            <div class="col-auto">
                                <a href="#rooms">Rooms</a>
                            </div>
                            <div class="col-auto">
                                <a href="#reviews">Reviews</a>
                            </div>
                            <div class="col-auto">
                                <a href="#facilities">Facilities</a>
                            </div>
                            <div class="col-auto">
                                <a href="#faq">Faq</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div class="row x-gap-15 y-gap-15 items-center">
                            <div class="col-auto">
                                @php
                                    $total_budget = 0;
                                    foreach ($activites as $activity) {
                                        foreach ($activity['activities'] as $daily) {
                                            $bud = str_replace('$', '', $daily['budget']);
                                            $total_budget += $bud;
                                        }
                                    }
                                @endphp
                                <div class="text-14">
                                    Total
                                    <span
                                        class="text-22 text-dark-1 fw-500">US${{ number_format($total_budget) }}</span>
                                </div>
                            </div>

                            <div class="col-auto">

                                <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                                    Select Room <div class="icon-arrow-top-right ml-15"></div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="pt-40">
        <div class="container">
            <div class="row y-gap-20 justify-between items-end">
                <div class="col-auto">
                    <div class="row x-gap-20  items-center">
                        <div class="col-auto">
                            <h1 class="text-30 sm:text-25 fw-600">{{ $itinerary->title }}</h1>
                        </div>

                        {{-- <div class="col-auto">

                            <i class="icon-star text-10 text-yellow-1"></i>

                            <i class="icon-star text-10 text-yellow-1"></i>

                            <i class="icon-star text-10 text-yellow-1"></i>

                            <i class="icon-star text-10 text-yellow-1"></i>

                            <i class="icon-star text-10 text-yellow-1"></i>

                        </div> --}}
                    </div>

                    <div class="row x-gap-20 y-gap-20 items-center">
                        <div class="col-auto">
                            <div class="d-flex items-center text-15 text-light-1">
                                <i class="icon-location-2 text-16 mr-5"></i>
                                {{ $itinerary->country->countryname }}
                            </div>
                        </div>

                        {{-- <div class="col-auto">
                            <button data-x-click="mapFilter" class="text-blue-1 text-15 underline">Show on map</button>
                        </div> --}}
                    </div>
                </div>

                <div class="col-auto">
                    <div class="row x-gap-15 y-gap-15 items-center">
                        <div class="col-auto">
                            <div class="text-14">
                                Total
                                <span class="text-22 text-dark-1 fw-500">US${{ number_format($total_budget) }}
                            </div>

                            {{-- <div class="col-auto">

                            <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                                Select Room <div class="icon-arrow-top-right ml-15"></div>
                            </a>

                        </div> --}}
                        </div>
                    </div>
                </div>

                <div class="galleryGrid -type-1 pt-30">
                    <div class="galleryGrid__item relative d-flex">
                        @php
                            $first = $photos[0]['imageURL'];
                        @endphp
                        <img src="{{ $first }}" alt="image" class="rounded-4">

                        <div class="absolute px-20 py-20 col-12 d-flex justify-end">
                            <button class="button -blue-1 size-40 rounded-full flex-center bg-white text-dark-1">
                                <i class="icon-heart text-16"></i>
                            </button>
                        </div>
                    </div>

                    @php
                        $second = $photos[1]['imageURL'];
                    @endphp
                    <div class="galleryGrid__item">
                        <img src="{{ $second }}" alt="image" class="rounded-4">
                    </div>


                    @php
                        $third = $photos[2]['imageURL'];
                    @endphp
                    <div class="galleryGrid__item relative d-flex">
                        <img src="{{ $third }}" alt="image" class="rounded-4">

                        <div class="absolute h-full col-12 flex-center">
                            <a href="https://www.youtube.com/watch?v=ANYfx4-jyqY"
                                class="button -blue-1 size-40 rounded-full flex-center bg-white text-dark-1 js-gallery"
                                data-gallery="gallery1">
                                <i class="icon-play text-16"></i>
                            </a>
                        </div>
                    </div>


                    @php
                        $fourth = $photos[3]['imageURL'];
                    @endphp
                    <div class="galleryGrid__item">
                        <img src="{{ $fourth }}" alt="image" class="rounded-4">
                    </div>


                    @php
                        $fifth = $photos[4]['imageURL'];
                    @endphp
                    <div class="galleryGrid__item relative d-flex">
                        <img src="{{ $fifth }}" alt="image" class="rounded-4">

                        <div class="absolute px-10 py-10 col-12 h-full d-flex justify-end items-end">
                            <a href="javascript:void(0);"
                                class="button -blue-1 px-24 py-15 bg-white text-dark-1 js-gallery">
                                Credits Pixabay
                            </a>
                            <a href="img/gallery/1/2.png" class="js-gallery" data-gallery="gallery2"></a>
                            <a href="img/gallery/1/3.png" class="js-gallery" data-gallery="gallery2"></a>
                            <a href="img/gallery/1/4.png" class="js-gallery" data-gallery="gallery2"></a>
                            <a href="img/gallery/1/5.png" class="js-gallery" data-gallery="gallery2"></a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="pt-30">
        <div class="container">
            <div class="row y-gap-30">
                <div class="col-xl-8">
                    <div class="row y-gap-40">
                        {{-- <div class="col-12">
                            <h3 class="text-22 fw-500">Property highlights</h3>
                            <div class="row y-gap-20 pt-30">

                                <div class="col-lg-3 col-6">
                                    <div class="text-center">
                                        <i class="icon-city text-24 text-blue-1"></i>
                                        <div class="text-15 lh-1 mt-10">In London City Centre</div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6">
                                    <div class="text-center">
                                        <i class="icon-airplane text-24 text-blue-1"></i>
                                        <div class="text-15 lh-1 mt-10">Airport transfer</div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6">
                                    <div class="text-center">
                                        <i class="icon-bell-ring text-24 text-blue-1"></i>
                                        <div class="text-15 lh-1 mt-10">Front desk [24-hour]</div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6">
                                    <div class="text-center">
                                        <i class="icon-tv text-24 text-blue-1"></i>
                                        <div class="text-15 lh-1 mt-10">Premium TV channels</div>
                                    </div>
                                </div>

                            </div>
                        </div> --}}


                        <div class="col-12">
                            <h3 class="text-22 fw-500 pt-40 border-top-light">Destination Highlights</h3>
                            <div class="row y-gap-10 pt-20">

                                <div class="col-md-5">
                                    <div class="d-flex x-gap-15 y-gap-15 items-center">
                                        <i class="fas fa-language"></i>
                                        @php
                                            $languages = json_decode($countryDetails->official_languages, true);
                                        @endphp
                                        <div class="text-15">
                                            @php
                                                $lang = count($languages) > 1 ? 'Languages' : 'Language';
                                            @endphp
                                            @if (is_array($languages))
                                                {{ $lang . ': ' . implode(', ', $languages) }}
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="d-flex x-gap-15 y-gap-15 items-center">
                                        <i class="fas fa-city"></i>
                                        <div class="text-15">{{ 'Capital: ' . $countryDetails->capital_city }}</div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="d-flex x-gap-15 y-gap-15 items-center">
                                        <i class="fas fa-money-bill-wave"></i>
                                        <div class="text-15">Currency: {{ $countryDetails->currency }}</div>
                                    </div>
                                </div>
                                @php
                                    // Function to format the population number
                                    function formatPopulation($population)
                                    {
                                        if ($population >= 1000000) {
                                            // Format in millions
                                            return number_format($population / 1000000, 2) . ' million';
                                        } elseif ($population >= 100000) {
                                            // Format in hundred thousands
                                            return number_format($population / 100000, 2) . ' hundred thousand';
                                        } else {
                                            // Format with commas
                                            return number_format($population);
                                        }
                                    }
                                @endphp
                                <div class="col-md-5">
                                    <div class="d-flex x-gap-15 y-gap-15 items-center">
                                        <i class="fas fa-users"></i>
                                        <div class="text-15">Population
                                            {{ formatPopulation($countryDetails->population) }}</div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="d-flex x-gap-15 y-gap-15 items-center">
                                        <i class="fas fa-clock"></i>
                                        @php
                                            $timezone = json_decode($countryDetails->time_zones, true);
                                        @endphp
                                        <div class="text-15">Time Zone:
                                            @if (is_array($timezone))
                                                {{ implode(', ', $timezone) }}
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="d-flex x-gap-15 y-gap-15 items-center">
                                        <i class="fas fa-flag"></i>
                                        <div class="text-15">Flag <img
                                                src="{{ asset('mysql-country-with-flag/flags/' . strtolower($itinerary->country->code) . '.png') }}"
                                                alt=""></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="overview" class="col-12">
                            <h3 class="text-22 fw-500 pt-40 border-top-light">Overview</h3>
                            <p class="text-dark-1 text-15 mt-20">
                                {{ $countryDetails->description }}
                            </p>
                            {{-- <a href="#" class="d-block text-14 text-blue-1 fw-500 underline mt-10">Show More</a> --}}
                        </div>


                        {{-- <div class="col-12">
                            <div class="px-24 py-20 rounded-4 bg-green-1">
                                <div class="row x-gap-20 y-gap-20 items-center">
                                    <div class="col-auto">
                                        <div class="flex-center size-60 rounded-full bg-white">
                                            <i class="icon-star text-yellow-1 text-30"></i>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <h4 class="text-18 lh-15 fw-500">This property is in high demand!</h4>
                                        <div class="text-15 lh-15">7 travelers have booked today.</div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="ml-50 lg:ml-0">
                        <div class="px-30 py-30 border-light rounded-4 shadow-4">
                            {{-- <div class="d-flex items-center justify-between">
                                <div class="">
                                    <span class="text-20 fw-500">US$72</span>
                                    <span class="text-14 text-light-1 ml-5">nights</span>
                                </div>

                                <div class="d-flex items-center">
                                    <div class="text-14 text-right mr-10">
                                        <div class="lh-15 fw-500">Exceptional</div>
                                        <div class="lh-15 text-light-1">3,014 reviews</div>
                                    </div>

                                    <div class="size-40 flex-center bg-blue-1 rounded-4">
                                        <div class="text-14 fw-600 text-white">4.8</div>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="row y-gap-20 pt-30">
                                <div class="col-12">

                                    <div
                                        class="searchMenu-date px-20 py-10 border-light rounded-4 -right js-form-dd js-calendar js-calendar-el">

                                        <div data-x-dd-click="searchMenu-date">
                                            <h4 class="text-15 fw-500 ls-2 lh-16">Check in - Check out</h4>

                                            <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                                                @php
                                                    $start_date = Carbon::parse($itinerary->start_date);
                                                    $start_date = $start_date->format('D d M');

                                                    $end_date = Carbon::parse($itinerary->end_date);
                                                    $end_date = $end_date->format('D d M');
                                                @endphp
                                                <span class="js-first-date">{{ $start_date }}</span>
                                                -
                                                <span class="js-last-date">{{ $end_date }}</span>
                                            </div>
                                        </div>


                                        <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date"
                                            data-x-dd-toggle="-is-active">
                                            <div class="bg-white px-30 py-30 rounded-4">
                                                <div class="elCalendar js-calendar-el-calendar"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                {{-- <div class="col-12">

                                    <div
                                        class="searchMenu-guests px-20 py-10 border-light rounded-4 js-form-dd js-form-counters">

                                        <div data-x-dd-click="searchMenu-guests">
                                            <h4 class="text-15 fw-500 ls-2 lh-16">Guest</h4>

                                            <div class="text-15 text-light-1 ls-2 lh-16">
                                                <span class="js-count-adult">2</span> adults
                                                -
                                                <span class="js-count-child">1</span> childeren
                                                -
                                                <span class="js-count-room">1</span> room
                                            </div>
                                        </div>


                                        <div class="searchMenu-guests__field shadow-2" data-x-dd="searchMenu-guests"
                                            data-x-dd-toggle="-is-active">
                                            <div class="bg-white px-30 py-30 rounded-4">
                                                <div class="row y-gap-10 justify-between items-center">
                                                    <div class="col-auto">
                                                        <div class="text-15 fw-500">Adults</div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="d-flex items-center js-counter"
                                                            data-value-change=".js-count-adult">
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                                <i class="icon-minus text-12"></i>
                                                            </button>

                                                            <div class="flex-center size-20 ml-15 mr-15">
                                                                <div class="text-15 js-count">2</div>
                                                            </div>

                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                                <i class="icon-plus text-12"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="border-top-light mt-24 mb-24"></div>

                                                <div class="row y-gap-10 justify-between items-center">
                                                    <div class="col-auto">
                                                        <div class="text-15 lh-12 fw-500">Children</div>
                                                        <div class="text-14 lh-12 text-light-1 mt-5">Ages 0 - 17</div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="d-flex items-center js-counter"
                                                            data-value-change=".js-count-child">
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                                <i class="icon-minus text-12"></i>
                                                            </button>

                                                            <div class="flex-center size-20 ml-15 mr-15">
                                                                <div class="text-15 js-count">1</div>
                                                            </div>

                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                                <i class="icon-plus text-12"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="border-top-light mt-24 mb-24"></div>

                                                <div class="row y-gap-10 justify-between items-center">
                                                    <div class="col-auto">
                                                        <div class="text-15 fw-500">Rooms</div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="d-flex items-center js-counter"
                                                            data-value-change=".js-count-room">
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                                <i class="icon-minus text-12"></i>
                                                            </button>

                                                            <div class="flex-center size-20 ml-15 mr-15">
                                                                <div class="text-15 js-count">1</div>
                                                            </div>

                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                                <i class="icon-plus text-12"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div> --}}

                                <div class="col-12">
                                    <button class="button -dark-1 px-35 h-60 col-12 bg-blue-1 text-white">
                                        Confirm
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="px-30 py-30 border-light rounded-4 mt-30">
                            <div class="flex-center ratio ratio-15:9 mb-15 js-lazy" data-bg="img/general/map.png">
                                <button data-x-click="mapFilter"
                                    class="button py-15 px-24 -blue-1 bg-white text-dark-1 absolute">
                                    <i class="icon-location text-22 mr-10"></i>
                                    Show on map
                                </button>
                            </div>

                            {{--
                            <div class="row y-gap-10">
                                <div class="col-12">
                                    <div class="d-flex items-center">
                                        <i class="icon-award text-20 text-blue-1"></i>
                                        <div class="text-14 fw-500 ml-10">Exceptional location - Inside city center
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="d-flex items-center">
                                        <i class="icon-pedestrian text-20 text-blue-1"></i>
                                        <div class="text-14 fw-500 ml-10">Exceptional for walking</div>
                                    </div>
                                </div>
                            </div>

                            <div class="border-top-light mt-15 mb-15"></div>

                            <div class="text-15 fw-500">Popular landmarks</div>

                            <div class="d-flex justify-between pt-10">
                                <div class="text-14">Royal Pump Room Museum</div>
                                <div class="text-14 text-light-1">0.1 km</div>
                            </div>

                            <div class="d-flex justify-between pt-5">
                                <div class="text-14">Harrogate Turkish Baths</div>
                                <div class="text-14 text-light-1">0.1 km</div>
                            </div>
                            <a href="#" class="d-block text-14 fw-500 underline text-blue-1 mt-10">Show More</a>
                            --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="rooms" class="pt-30">
        <div class="container">
            <div class="row pb-20">
                <div class="col-auto">
                    <h3 class="text-22 fw-500">Itinerary</h3>
                </div>
            </div>

            @foreach ($activites as $activity)
                <div class="border-light rounded-4 px-30 py-30 sm:px-20 sm:py-20 mt-20">
                    <div class="row y-gap-20">
                        <div class="col-12">
                            <h3 class="text-18 fw-500 mb-15">Day {{ $activity['day'] }}</h3>
                            <div class="roomGrid">
                                <div class="roomGrid__header">
                                    <div></div>
                                    <div>Activities</div>
                                    <div>Date</div>
                                    <div>Budget for Day {{ $activity['day'] }}</div>
                                    <div></div>
                                </div>

                                <div class="roomGrid__grid">
                                    <div>
                                    </div>

                                    <div class="y-gap-30">

                                        <div class="roomGrid__content">
                                            <div>
                                                <div class="y-gap-8">

                                                    @foreach ($activity['activities'] as $daily)
                                                        <div class="d-flex items-center text-green-2">
                                                            <i class="icon-check text-12 mr-10"></i>
                                                            <div class="text-15"><span class="text-dark font-weight-bold">{{ $daily['time'].":" }}</span>
                                                                {{ $daily['activity'] }}</div>
                                                            <span
                                                                style="color:black; text-style:bold;">{{ $daily['budget'] }}</span>
                                                        </div>
                                                        <hr>
                                                    @endforeach

                                                </div>
                                            </div>

                                            <div>
                                                @php
                                                    $date = Carbon::parse($activity['date']);
                                                    $date = $date->format('d F Y');
                                                @endphp
                                                <div class="text-12 lh-15 fw-500">{{ $date }}</div>
                                            </div>

                                            <div>
                                                @php
                                                    $budget = 0;
                                                    foreach ($activity['activities'] as $daily) {
                                                        $bud = str_replace('$', '', $daily['budget']);
                                                        $budget += $bud;
                                                    }
                                                @endphp
                                                <div class="text-18 lh-15 fw-500">US${{ $budget }}</div>
                                                <div class="text-14 lh-18 text-light-1">Includes taxes and charges
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section> --}}

    <section>
        <div class="container">
            <h3 class="text-22 fw-500 mb-20">Itinerary</h3>

            <div class="row y-gap-30">
                <div class="col-lg-4 scrollable-div">
                    <div class="relative">
                        <div class="border-test"></div>

                        <div class="accordion -map row y-gap-20 js-accordion">

                            @foreach ($activites as $activity)
                                <div class="col-12">
                                    <div class="accordion__item ">
                                        <div class="d-flex">
                                            @php
                                                $date = Carbon::parse($activity['date']);
                                                $date = $date->format('d F Y');
                                            @endphp
                                            <div
                                                class="accordion__icon size-40 flex-center bg-blue-2 text-blue-1 rounded-full">
                                                <div class="text-14 fw-500">{{ $activity['day'] }}</div>
                                            </div>

                                            <div class="ml-20">
                                                <div class="text-16 lh-15 fw-500">Day {{ $activity['day'] }}</div>
                                                <div class="text-14 lh-15 text-light-1 mt-5">{{ $date }}</div>

                                                <div class="accordion__content">
                                                    <div class="pt-15 pb-15">
                                                        {{-- <img src="{{ asset('img/lists/tour/single/2.png') }}" alt="image" class="rounded-4 mt-15"> --}}
                                                        <div class="text-14 lh-17 mt-15">

                                                            @foreach ($activity['activities'] as $daily)
                                                                <div class="d-flex items-center text-green-2">
                                                                    <i class="icon-check text-12 mr-10"></i>
                                                                    <div class="text-15"><span
                                                                            class="text-dark font-weight-bold">{{ $daily['time'] . ':' }}</span>
                                                                        {{ $daily['activity'] }}</div>
                                                                    <span
                                                                        style="color:black; text-style:bold;">{{ $daily['budget'] }}</span>
                                                                </div>
                                                                <hr>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion__button">
                                                    <button data-open-change-title="See less"
                                                        class="d-block lh-15 text-14 text-blue-1 underline fw-500 mt-5">
                                                        See activites
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                @push('scripts')
                    <script>
                        class HTMLMapMarker extends google.maps.OverlayView {
                            constructor(args) {
                                super();
                                this.latlng = args.latlng
                                this.html = args.html
                                this.setMap(args.map)
                            }

                            createDiv() {
                                this.div = document.createElement('div');
                                this.div.style.position = 'absolute';

                                if (this.html) {
                                    this.div.innerHTML = this.html;
                                }
                                google.maps.event.addDomListener(this.div, 'click', event => {
                                    google.maps.event.trigger(this, 'click');
                                });
                            }

                            appendDivToOverlay() {
                                const panes = this.getPanes();
                                panes.overlayMouseTarget.appendChild(this.div);
                            }

                            positionDiv() {
                                const point = this.getProjection().fromLatLngToDivPixel(this.latlng);
                                if (point) {
                                    this.div.style.left = `${point.x}px`;
                                    this.div.style.top = `${point.y}px`;
                                }
                            }

                            draw() {
                                if (!this.div) {
                                    this.createDiv();
                                    this.appendDivToOverlay();
                                }
                                this.positionDiv();
                            }

                            remove() {
                                if (this.div) {
                                    this.div.parentNode.removeChild(this.div);
                                    this.div = null;
                                }
                            }

                            getVisible() {
                                return this.latlng;
                            }

                            getPosition() {
                                return new google.maps.LatLng(this.latlng);
                            }

                            getDraggable() {
                                return false;
                            }
                        }

                        const locations = [];

                        // Assuming @js($activities) correctly outputs a JavaScript array
                        const activities = @js($activites);

                        // Iterate through the activities to construct the locations array
                        activities.forEach(activity => {

                            activity['activities'].forEach(act => {
                                if (act.hasOwnProperty('lat') && act.hasOwnProperty(
                                        'lng')) { // Check if 'lat' and 'lng' properties exist
                                    locations.push({
                                        name: act['location'],
                                        lat: act['lat'],
                                        lng: act['lng']
                                    });
                                } else {
                                    console.warn("No 'lat' or 'lng' property found in act:", act);
                                }
                            });
                        });



                        function initMapPlaces($locations) {
                            if (!document.querySelector('.js-map-places')) return

                            const map = new google.maps.Map(document.querySelector('.js-map-places'), {
                                zoom: 5,
                                center: {
                                    lat: locations[0].lat,
                                    lng: locations[0].lng
                                }
                            });

                            const markers = locations.map((location, index) => {
                                const marker = new google.maps.Marker({
                                    position: {
                                        lat: location.lat,
                                        lng: location.lng
                                    },
                                    map: map,
                                    label: `${index + 1}`
                                });

                                const contentString = `
            <div class="d-flex">
                <div class="px-5 py-5">
                    <div class="text-16 fw-500">${location.name}</div>
                </div>
            </div>
        `;

                                const infowindow = new google.maps.InfoWindow({
                                    content: contentString,
                                });

                                marker.addListener("click", () => {
                                    infowindow.open({
                                        anchor: marker,
                                        map,
                                        shouldFocus: false,
                                    });
                                });

                                return marker;
                            });

                            new markerClusterer.MarkerClusterer({
                                map,
                                markers: markers
                            });
                        }

                        initMapPlaces(locations);
                    </script>
                @endpush


                <div class="col-lg-8">
                    <div class="map rounded-4 js-map-places"></div>
                </div>
            </div>
        </div>
    </section>

</div>
