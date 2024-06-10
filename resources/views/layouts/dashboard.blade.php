<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <title>GoTrip</title>
</head>

<body data-barba="wrapper">


    <div class="preloader js-preloader">
        <div class="preloader__wrap">
            <div class="preloader__icon">
                <svg width="38" height="37" viewBox="0 0 38 37" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1_41)">
                        <path
                            d="M32.9675 13.9422C32.9675 6.25436 26.7129 0 19.0251 0C11.3372 0 5.08289 6.25436 5.08289 13.9422C5.08289 17.1322 7.32025 21.6568 11.7327 27.3906C13.0538 29.1071 14.3656 30.6662 15.4621 31.9166V35.8212C15.4621 36.4279 15.9539 36.92 16.561 36.92H21.4895C22.0965 36.92 22.5883 36.4279 22.5883 35.8212V31.9166C23.6849 30.6662 24.9966 29.1071 26.3177 27.3906C30.7302 21.6568 32.9675 17.1322 32.9675 13.9422V13.9422ZM30.7699 13.9422C30.7699 16.9956 27.9286 21.6204 24.8175 25.7245H23.4375C25.1039 20.7174 25.9484 16.7575 25.9484 13.9422C25.9484 10.3587 25.3079 6.97207 24.1445 4.40684C23.9229 3.91841 23.6857 3.46886 23.4347 3.05761C27.732 4.80457 30.7699 9.02494 30.7699 13.9422ZM20.3906 34.7224H17.6598V32.5991H20.3906V34.7224ZM21.0007 30.4014H17.0587C16.4167 29.6679 15.7024 28.8305 14.9602 27.9224H16.1398C16.1429 27.9224 16.146 27.9227 16.1489 27.9227C16.152 27.9227 23.0902 27.9224 23.0902 27.9224C22.3725 28.8049 21.6658 29.6398 21.0007 30.4014ZM19.0251 2.19765C20.1084 2.19765 21.2447 3.33365 22.1429 5.3144C23.1798 7.60078 23.7508 10.6649 23.7508 13.9422C23.7508 16.6099 22.8415 20.6748 21.1185 25.7245H16.9322C15.2086 20.6743 14.2994 16.6108 14.2994 13.9422C14.2994 10.6649 14.8706 7.60078 15.9075 5.3144C16.8057 3.33365 17.942 2.19765 19.0251 2.19765V2.19765ZM7.28053 13.9422C7.28053 9.02494 10.3184 4.80457 14.6157 3.05761C14.3647 3.46886 14.1273 3.91841 13.9059 4.40684C12.7425 6.97207 12.102 10.3587 12.102 13.9422C12.102 16.7584 12.9462 20.7176 14.6126 25.7245H13.2259C9.33565 20.6126 7.28053 16.5429 7.28053 13.9422Z"
                            fill="#3554D1" />
                    </g>

                    <defs>
                        <clipPath id="clip0_1_41">
                            <rect width="36.92" height="36.92" fill="white" transform="translate(0.540039)" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div>

        <div class="preloader__title">GoTrip</div>
    </div>


    <div class="header-margin"></div>
        <header data-add-bg="" class="header -dashboard bg-white js-header" data-x="header" data-x-toggle="is-menu-opened">
            <div data-anim="fade" class="header__container px-30 sm:px-20">
                <div class="-left-side">
                    <a href="index.html" class="header-logo" data-x="header-logo" data-x-toggle="is-logo-dark">
                        <img src="{{ asset('img/general/logo-dark.svg') }}" alt="logo icon">
                        <img src="{{ asset('img/general/logo-dark.svg') }}" alt="logo icon">
                    </a>
                </div>

                <div class="row justify-between items-center pl-60 lg:pl-20">
                    <div class="col-auto">
                        <div class="d-flex items-center">
                            <button data-x-click="dashboard">
                                <i class="icon-menu-2 text-20"></i>
                            </button>

                            <div class="single-field relative d-flex items-center md:d-none ml-30">
                                <input class="pl-50 border-light text-dark-1 h-50 rounded-8" type="email"
                                    placeholder="Search">
                                <button class="absolute d-flex items-center h-full">
                                    <i class="icon-search text-20 px-15 text-dark-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-auto">
                        <div class="d-flex items-center">

                            <div class="header-menu " data-x="mobile-menu" data-x-toggle="is-menu-active">
                                <div class="mobile-overlay"></div>

                                <div class="header-menu__content">
                                    <div class="mobile-bg js-mobile-bg"></div>

                                    <div class="menu js-navList">
                                        <ul class="menu__nav text-dark-1 fw-500 -is-active">

                                            <li class="menu-item-has-children">
                                                <a data-barba href="">
                                                    <span class="mr-10">Home</span>
                                                    <i class="icon icon-chevron-sm-down"></i>
                                                </a>


                                                <ul class="subnav">
                                                    <li class="subnav__backBtn js-nav-list-back">
                                                        <a href="#"><i class="icon icon-chevron-sm-down"></i> Home</a>
                                                    </li>

                                                    <li><a href="index.html">Home 1</a></li>

                                                    <li><a href="home-2.html">Home 2</a></li>

                                                    <li><a href="home-3.html">Home 3</a></li>

                                                    <li><a href="home-4.html">Home 4</a></li>

                                                    <li><a href="home-5.html">Home 5</a></li>

                                                    <li><a href="home-6.html">Home 6</a></li>

                                                    <li><a href="home-7.html">Home 7</a></li>

                                                    <li><a href="home-8.html">Home 8</a></li>

                                                    <li><a href="home-9.html">Home 9</a></li>

                                                    <li><a href="home-10.html">Home 10</a></li>

                                                </ul>

                                            </li>


                                            <li class="menu-item-has-children -has-mega-menu">
                                                <a data-barba href="#">
                                                    <span class="mr-10">Categories</span>
                                                    <i class="icon icon-chevron-sm-down"></i>
                                                </a>

                                                <div class="mega">
                                                    <div class="tabs -underline-2 js-tabs">
                                                        <div
                                                            class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 pb-30 js-tabs-controls">

                                                            <div class="col-auto">
                                                                <button
                                                                    class="tabs__button text-light-1 fw-500 js-tabs-button is-tab-el-active"
                                                                    data-tab-target=".-tab-item-1">Hotel</button>
                                                            </div>

                                                            <div class="col-auto">
                                                                <button
                                                                    class="tabs__button text-light-1 fw-500 js-tabs-button "
                                                                    data-tab-target=".-tab-item-2">Tour</button>
                                                            </div>

                                                            <div class="col-auto">
                                                                <button
                                                                    class="tabs__button text-light-1 fw-500 js-tabs-button "
                                                                    data-tab-target=".-tab-item-3">Activity</button>
                                                            </div>

                                                            <div class="col-auto">
                                                                <button
                                                                    class="tabs__button text-light-1 fw-500 js-tabs-button "
                                                                    data-tab-target=".-tab-item-4">Holiday Rentals</button>
                                                            </div>

                                                            <div class="col-auto">
                                                                <button
                                                                    class="tabs__button text-light-1 fw-500 js-tabs-button "
                                                                    data-tab-target=".-tab-item-5">Car</button>
                                                            </div>

                                                            <div class="col-auto">
                                                                <button
                                                                    class="tabs__button text-light-1 fw-500 js-tabs-button "
                                                                    data-tab-target=".-tab-item-6">Cruise</button>
                                                            </div>

                                                            <div class="col-auto">
                                                                <button
                                                                    class="tabs__button text-light-1 fw-500 js-tabs-button "
                                                                    data-tab-target=".-tab-item-7">Flights</button>
                                                            </div>

                                                        </div>

                                                        <div class="tabs__content js-tabs-content">
                                                            <div class="tabs__pane -tab-item-1 is-tab-el-active">
                                                                <div class="mega__content">
                                                                    <div class="mega__grid">

                                                                        <div class="mega__item">
                                                                            <div class="text-15 fw-500">Hotel List</div>
                                                                            <div class="y-gap-5 text-15 pt-5">

                                                                                <div><a href="hotel-list-1.html">Hotel List
                                                                                        v1</a></div>

                                                                                <div><a href="hotel-list-2.html">Hotel List
                                                                                        v2</a></div>

                                                                                <div><a href="hotel-half-map.html">Hotel
                                                                                        List v3</a></div>

                                                                                <div><a href="hotel-grid-1.html">Hotel List
                                                                                        v4</a></div>

                                                                                <div><a href="hotel-grid-2.html">Hotel List
                                                                                        v5</a></div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="mega__item">
                                                                            <div class="text-15 fw-500">Hotel Single</div>
                                                                            <div class="y-gap-5 text-15 pt-5">

                                                                                <div><a href="hotel-single-1.html">Hotel
                                                                                        Single v1</a></div>

                                                                                <div><a href="hotel-single-2.html">Hotel
                                                                                        Single v2</a></div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="mega__item">
                                                                            <div class="text-15 fw-500">Hotel Booking</div>
                                                                            <div class="y-gap-5 text-15 pt-5">

                                                                                <div><a href="booking-pages.html">Booking
                                                                                        Page</a></div>

                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="mega__image d-flex relative">
                                                                        <img src="#"
                                                                            data-src="{{ asset('img/backgrounds/7.png') }}"
                                                                            alt="image" class="rounded-4 js-lazy">

                                                                        <div class="absolute w-full h-full px-30 py-24">
                                                                            <div class="text-22 fw-500 lh-15 text-white">
                                                                                Things to do on <br> your trip</div>
                                                                            <button
                                                                                class="button h-50 px-30 -blue-1 text-dark-1 bg-white mt-20">Experinces</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="tabs__pane -tab-item-2">
                                                                <div class="mega__content">
                                                                    <div class="mega__grid">

                                                                        <div class="mega__item">
                                                                            <div class="text-15 fw-500">Tour List</div>
                                                                            <div class="y-gap-5 text-15 pt-5">

                                                                                <div><a href="tour-list-1.html">Tour List
                                                                                        v1</a></div>

                                                                                <div><a href="tour-grid-1.html">Tour List
                                                                                        v2</a></div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="mega__item">
                                                                            <div class="text-15 fw-500">Tour Pages</div>
                                                                            <div class="y-gap-5 text-15 pt-5">

                                                                                <div><a href="tour-map.html">Tour Map</a>
                                                                                </div>

                                                                                <div><a href="tour-single.html">Tour
                                                                                        Single</a></div>

                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="mega__image d-flex relative">
                                                                        <img src="{{ asset('img/backgrounds/7.png') }}" alt="image"
                                                                            class="rounded-4">

                                                                        <div class="absolute w-full h-full px-30 py-24">
                                                                            <div class="text-22 fw-500 lh-15 text-white">
                                                                                Things to do on <br> your trip</div>
                                                                            <button
                                                                                class="button h-50 px-30 -blue-1 text-dark-1 bg-white mt-20">Experinces</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="tabs__pane -tab-item-3">
                                                                <div class="mega__content">
                                                                    <div class="mega__grid">

                                                                        <div class="mega__item">
                                                                            <div class="text-15 fw-500">Activity List</div>
                                                                            <div class="y-gap-5 text-15 pt-5">

                                                                                <div><a href="activity-list-1.html">Activity
                                                                                        List v1</a></div>

                                                                                <div><a href="activity-grid-1.html">Activity
                                                                                        List v2</a></div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="mega__item">
                                                                            <div class="text-15 fw-500">Activity Pages
                                                                            </div>
                                                                            <div class="y-gap-5 text-15 pt-5">

                                                                                <div><a href="activity-map.html">Activity
                                                                                        Map</a></div>

                                                                                <div><a href="activity-single.html">Activity
                                                                                        Single</a></div>

                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="mega__image d-flex relative">
                                                                        <img src="{{ asset('img/backgrounds/7.png') }}" alt="image"
                                                                            class="rounded-4">

                                                                        <div class="absolute w-full h-full px-30 py-24">
                                                                            <div class="text-22 fw-500 lh-15 text-white">
                                                                                Things to do on <br> your trip</div>
                                                                            <button
                                                                                class="button h-50 px-30 -blue-1 text-dark-1 bg-white mt-20">Experinces</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="tabs__pane -tab-item-4">
                                                                <div class="mega__content">
                                                                    <div class="mega__grid">

                                                                        <div class="mega__item">
                                                                            <div class="text-15 fw-500">Rental List</div>
                                                                            <div class="y-gap-5 text-15 pt-5">

                                                                                <div><a href="rental-list-1.html">Rental
                                                                                        List v1</a></div>

                                                                                <div><a href="rental-grid-1.html">Rental
                                                                                        List v2</a></div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="mega__item">
                                                                            <div class="text-15 fw-500">Rental Pages</div>
                                                                            <div class="y-gap-5 text-15 pt-5">

                                                                                <div><a href="rental-map.html">Rental
                                                                                        Map</a></div>

                                                                                <div><a href="rental-single.html">Rental
                                                                                        Single</a></div>

                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="mega__image d-flex relative">
                                                                        <img src="{{ asset('img/backgrounds/7.png') }}" alt="image"
                                                                            class="rounded-4">

                                                                        <div class="absolute w-full h-full px-30 py-24">
                                                                            <div class="text-22 fw-500 lh-15 text-white">
                                                                                Things to do on <br> your trip</div>
                                                                            <button
                                                                                class="button h-50 px-30 -blue-1 text-dark-1 bg-white mt-20">Experinces</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="tabs__pane -tab-item-5">
                                                                <div class="mega__content">
                                                                    <div class="mega__grid">

                                                                        <div class="mega__item">
                                                                            <div class="text-15 fw-500">Car List</div>
                                                                            <div class="y-gap-5 text-15 pt-5">

                                                                                <div><a href="car-list-1.html">Car List
                                                                                        v1</a></div>

                                                                                <div><a href="car-grid-1.html">Car List
                                                                                        v2</a></div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="mega__item">
                                                                            <div class="text-15 fw-500">Car Pages</div>
                                                                            <div class="y-gap-5 text-15 pt-5">

                                                                                <div><a href="car-map.html">Car Map</a>
                                                                                </div>

                                                                                <div><a href="car-single.html">Car
                                                                                        Single</a></div>

                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="mega__image d-flex relative">
                                                                        <img src="{{ asset('img/backgrounds/7.png') }}" alt="image"
                                                                            class="rounded-4">

                                                                        <div class="absolute w-full h-full px-30 py-24">
                                                                            <div class="text-22 fw-500 lh-15 text-white">
                                                                                Things to do on <br> your trip</div>
                                                                            <button
                                                                                class="button h-50 px-30 -blue-1 text-dark-1 bg-white mt-20">Experinces</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="tabs__pane -tab-item-6">
                                                                <div class="mega__content">
                                                                    <div class="mega__grid">

                                                                        <div class="mega__item">
                                                                            <div class="text-15 fw-500">Cruise List</div>
                                                                            <div class="y-gap-5 text-15 pt-5">

                                                                                <div><a href="cruise-list-1.html">Cruise
                                                                                        List v1</a></div>

                                                                                <div><a href="cruise-grid-1.html">Cruise
                                                                                        List v2</a></div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="mega__item">
                                                                            <div class="text-15 fw-500">Cruise Pages</div>
                                                                            <div class="y-gap-5 text-15 pt-5">

                                                                                <div><a href="cruise-map.html">Cruise
                                                                                        Map</a></div>

                                                                                <div><a href="cruise-single.html">Cruise
                                                                                        Single</a></div>

                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="mega__image d-flex relative">
                                                                        <img src="{{ asset('img/backgrounds/7.png') }}" alt="image"
                                                                            class="rounded-4">

                                                                        <div class="absolute w-full h-full px-30 py-24">
                                                                            <div class="text-22 fw-500 lh-15 text-white">
                                                                                Things to do on <br> your trip</div>
                                                                            <button
                                                                                class="button h-50 px-30 -blue-1 text-dark-1 bg-white mt-20">Experinces</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="tabs__pane -tab-item-7">
                                                                <div class="mega__content">
                                                                    <div class="mega__grid">

                                                                        <div class="mega__item">
                                                                            <div class="text-15 fw-500">Flight List</div>
                                                                            <div class="y-gap-5 text-15 pt-5">

                                                                                <div><a href="flights-list.html">Flight
                                                                                        list v1</a></div>

                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="mega__image d-flex relative">
                                                                        <img src="{{ asset('img/backgrounds/7.png') }}" alt="image"
                                                                            class="rounded-4">

                                                                        <div class="absolute w-full h-full px-30 py-24">
                                                                            <div class="text-22 fw-500 lh-15 text-white">
                                                                                Things to do on <br> your trip</div>
                                                                            <button
                                                                                class="button h-50 px-30 -blue-1 text-dark-1 bg-white mt-20">Experinces</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <ul class="subnav mega-mobile">
                                                    <li class="subnav__backBtn js-nav-list-back">
                                                        <a href="#"><i class="icon icon-chevron-sm-down"></i>
                                                            Category</a>
                                                    </li>

                                                    <li class="menu-item-has-children">
                                                        <a data-barba href="#">
                                                            <span class="mr-10">Hotel</span>
                                                            <i class="icon icon-chevron-sm-down"></i>
                                                        </a>

                                                        <ul class="subnav">
                                                            <li class="subnav__backBtn js-nav-list-back">
                                                                <a href="#"><i
                                                                        class="icon icon-chevron-sm-down"></i> Hotel</a>
                                                            </li>


                                                            <li><a href="hotel-list-1.html">Hotel List v1</a></li>

                                                            <li><a href="hotel-list-2.html">Hotel List v2</a></li>

                                                            <li><a href="hotel-single-1.html">Hotel Single v1</a></li>

                                                            <li><a href="hotel-single-2.html">Hotel Single v2</a></li>

                                                            <li><a href="booking-pages.html">Booking Page</a></li>

                                                        </ul>
                                                    </li>

                                                    <li class="menu-item-has-children">
                                                        <a data-barba href="#">
                                                            <span class="mr-10">Tour</span>
                                                            <i class="icon icon-chevron-sm-down"></i>
                                                        </a>

                                                        <ul class="subnav">
                                                            <li class="subnav__backBtn js-nav-list-back">
                                                                <a href="#"><i
                                                                        class="icon icon-chevron-sm-down"></i> Tour</a>
                                                            </li>

                                                            <li><a href="tour-list-1.html">Tour List v1</a></li>

                                                            <li><a href="tour-grid-1.html">Tour List v2</a></li>

                                                            <li><a href="tour-map.html">Tour Map</a></li>

                                                            <li><a href="tour-single.html">Tour Single</a></li>

                                                        </ul>
                                                    </li>

                                                    <li class="menu-item-has-children">
                                                        <a data-barba href="#">
                                                            <span class="mr-10">Activity</span>
                                                            <i class="icon icon-chevron-sm-down"></i>
                                                        </a>

                                                        <ul class="subnav">
                                                            <li class="subnav__backBtn js-nav-list-back">
                                                                <a href="#"><i
                                                                        class="icon icon-chevron-sm-down"></i> Activity</a>
                                                            </li>

                                                            <li><a href="activity-list-1.html">Activity List v1</a></li>

                                                            <li><a href="activity-grid-1.html">Activity List v2</a></li>

                                                            <li><a href="activity-map.html">Activity Map</a></li>

                                                            <li><a href="activity-single.html">Activity Single</a></li>

                                                        </ul>
                                                    </li>

                                                    <li class="menu-item-has-children">
                                                        <a data-barba href="#">
                                                            <span class="mr-10">Rental</span>
                                                            <i class="icon icon-chevron-sm-down"></i>
                                                        </a>

                                                        <ul class="subnav">
                                                            <li class="subnav__backBtn js-nav-list-back">
                                                                <a href="#"><i
                                                                        class="icon icon-chevron-sm-down"></i> Rental</a>
                                                            </li>

                                                            <li><a href="rental-list-1.html">Rental List v1</a></li>

                                                            <li><a href="rental-grid-1.html">Rental List v2</a></li>

                                                            <li><a href="rental-map.html">Rental Map</a></li>

                                                            <li><a href="rental-single.html">Rental Single</a></li>

                                                        </ul>
                                                    </li>

                                                    <li class="menu-item-has-children">
                                                        <a data-barba href="#">
                                                            <span class="mr-10">Car</span>
                                                            <i class="icon icon-chevron-sm-down"></i>
                                                        </a>

                                                        <ul class="subnav">
                                                            <li class="subnav__backBtn js-nav-list-back">
                                                                <a href="#"><i
                                                                        class="icon icon-chevron-sm-down"></i> Car</a>
                                                            </li>

                                                            <li><a href="car-list-1.html">Car List v1</a></li>

                                                            <li><a href="car-grid-1.html">Car List v2</a></li>

                                                            <li><a href="car-map.html">Car Map</a></li>

                                                            <li><a href="car-single.html">Car Single</a></li>

                                                        </ul>
                                                    </li>

                                                    <li class="menu-item-has-children">
                                                        <a data-barba href="#">
                                                            <span class="mr-10">Cruise</span>
                                                            <i class="icon icon-chevron-sm-down"></i>
                                                        </a>

                                                        <ul class="subnav">
                                                            <li class="subnav__backBtn js-nav-list-back">
                                                                <a href="#"><i
                                                                        class="icon icon-chevron-sm-down"></i> Cruise</a>
                                                            </li>

                                                            <li><a href="cruise-list-1.html">Cruise List v1</a></li>

                                                            <li><a href="cruise-grid-1.html">Cruise List v2</a></li>

                                                            <li><a href="cruise-map.html">Cruise Map</a></li>

                                                            <li><a href="cruise-single.html">Cruise Single</a></li>

                                                        </ul>
                                                    </li>

                                                    <li class="menu-item-has-children">
                                                        <a data-barba href="#">
                                                            <span class="mr-10">Flights</span>
                                                            <i class="icon icon-chevron-sm-down"></i>
                                                        </a>

                                                        <ul class="subnav">
                                                            <li class="subnav__backBtn js-nav-list-back">
                                                                <a href="#"><i
                                                                        class="icon icon-chevron-sm-down"></i> Flights</a>
                                                            </li>

                                                            <li><a href="flights-list.html">Flights List v1</a></li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="destinations.html">
                                                    Destinations
                                                </a>
                                            </li>


                                            <li class="menu-item-has-children">
                                                <a data-barba href="">
                                                    <span class="mr-10">Blog</span>
                                                    <i class="icon icon-chevron-sm-down"></i>
                                                </a>


                                                <ul class="subnav">
                                                    <li class="subnav__backBtn js-nav-list-back">
                                                        <a href="#"><i class="icon icon-chevron-sm-down"></i>
                                                            Blog</a>
                                                    </li>

                                                    <li><a href="blog-list-1.html">Blog list v1</a></li>

                                                    <li><a href="blog-list-2.html">Blog list v2</a></li>

                                                    <li><a href="blog-single.html">Blog single</a></li>

                                                </ul>

                                            </li>


                                            <li class="menu-item-has-children">
                                                <a data-barba href="">
                                                    <span class="mr-10">Pages</span>
                                                    <i class="icon icon-chevron-sm-down"></i>
                                                </a>


                                                <ul class="subnav">
                                                    <li class="subnav__backBtn js-nav-list-back">
                                                        <a href="#"><i class="icon icon-chevron-sm-down"></i>
                                                            Pages</a>
                                                    </li>

                                                    <li><a href="404.html">404</a></li>

                                                    <li><a href="about.html">About</a></li>

                                                    <li><a href="become-expert.html">Become expert</a></li>

                                                    <li><a href="help-center.html">Help center</a></li>

                                                    <li><a href="login.html">Login</a></li>

                                                    <li><a href="signup.html">Register</a></li>

                                                    <li><a href="terms.html">Terms</a></li>

                                                    <li><a href="invoice.html">Invoice</a></li>

                                                    <li><a href="ui-elements.html">UI elements</a></li>

                                                </ul>

                                            </li>


                                            <li class="menu-item-has-children">
                                                <a data-barba href="">
                                                    <span class="mr-10">Dashboard
                                                    </span>
                                                    <i class="icon icon-chevron-sm-down"></i>
                                                </a>


                                                <ul class="subnav">
                                                    <li class="subnav__backBtn js-nav-list-back">
                                                        <a href="#"><i class="icon icon-chevron-sm-down"></i>
                                                            Dashboard</a>
                                                    </li>

                                                    <li><a href="db-dashboard.html">Dashboard</a></li>

                                                    <li><a href="db-booking.html">Booking</a></li>

                                                    <li><a href="db-settings.html">Settings</a></li>

                                                    <li><a href="db-wishlist.html">Wishlist</a></li>

                                                    <li><a href="db-vendor-dashboard.html">Vendor dashboard</a></li>

                                                    <li><a href="db-vendor-add-hotel.html">Vendor add hotel</a></li>

                                                    <li><a href="db-vendor-booking.html">Vendor booking</a></li>

                                                    <li><a href="db-vendor-hotels.html">Vendor hotels</a></li>

                                                    <li><a href="db-vendor-recovery.html">Vendor recovery</a></li>

                                                </ul>

                                            </li>


                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                                    </div>
                                </div>
                            </div>


                            <div class="row items-center x-gap-5 y-gap-20 pl-20 lg:d-none">
                                <div class="col-auto">
                                    <button class="button -blue-1-05 size-50 rounded-22 flex-center">
                                        <i class="icon-email-2 text-20"></i>
                                    </button>
                                </div>

                                <div class="col-auto">
                                    <button class="button -blue-1-05 size-50 rounded-22 flex-center">
                                        <i class="icon-notification text-20"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="pl-15">
                                <img src="{{ asset('img/avatars/3.png') }}" alt="image" class="size-50 rounded-22 object-cover">
                            </div>

                            <div class="d-none xl:d-flex x-gap-20 items-center pl-20" data-x="header-mobile-icons"
                                data-x-toggle="text-white">
                                <div><button class="d-flex items-center icon-menu text-20"
                                        data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </header>


    <div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
        <div class="dashboard__sidebar bg-white scroll-bar-1">


            <div class="sidebar -dashboard">

                <div class="sidebar__item">
                    <div class="sidebar__button -is-active">
                        <a href="db-dashboard.html" class="d-flex items-center text-15 lh-1 fw-500">
                            <img src="{{ asset('img/dashboard/sidebar/compass.svg') }}" alt="image" class="mr-15">
                            Dashboard
                        </a>
                    </div>
                </div>

                <div class="sidebar__item">
                    <div class="sidebar__button ">
                        <a href="{{ route('plans') }}" class="d-flex items-center text-15 lh-1 fw-500">
                            <img src="{{ asset('img/dashboard/sidebar/bookmark.svg') }}" alt="image" class="mr-15">
                            Planner
                        </a>
                    </div>
                </div>

                <div class="sidebar__item">
                    <div class="sidebar__button ">
                        <a href="db-booking.html" class="d-flex items-center text-15 lh-1 fw-500">
                            <img src="{{ asset('img/dashboard/sidebar/booking.svg') }}" alt="image" class="mr-15">
                            Booking History
                        </a>
                    </div>
                </div>

                <div class="sidebar__item">
                    <div class="sidebar__button ">
                        <a href="db-settings.html" class="d-flex items-center text-15 lh-1 fw-500">
                            <img src="{{ asset('img/dashboard/sidebar/gear.svg') }}" alt="image" class="mr-15">
                            Settings
                        </a>
                    </div>
                </div>

                <div class="sidebar__item">
                    <div class="sidebar__button ">
                        <a href="{{ route('user.logout') }}" class="d-flex items-center text-15 lh-1 fw-500">
                            <img src="{{ asset('img/dashboard/sidebar/log-out.svg') }}" alt="image" class="mr-15">
                            Logout
                        </a>
                    </div>
                </div>

            </div>


        </div>

        <div class="dashboard__main">
            <div class="dashboard__content bg-light-2">

                {{ $slot }}

                <footer class="footer -dashboard mt-60">
                    <div class="footer__row row y-gap-10 items-center justify-between">
                        <div class="col-auto">
                            <div class="row y-gap-20 items-center">
                                <div class="col-auto">
                                    <div class="text-14 lh-14 mr-30">© 2022 GoTrip LLC All rights reserved.</div>
                                </div>

                                <div class="col-auto">
                                    <div class="row x-gap-20 y-gap-10 items-center text-14">
                                        <div class="col-auto">
                                            <a href="#" class="text-13 lh-1">Privacy</a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="text-13 lh-1">Terms</a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="text-13 lh-1">Site Map</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="d-flex x-gap-5 y-gap-5 items-center">
                                <button class="text-14 fw-500 underline">English (US)</button>
                                <button class="text-14 fw-500 underline">USD</button>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"
        integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
    <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>

    <script src="{{ asset('js/vendors.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>