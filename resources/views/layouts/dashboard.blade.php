<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    {{-- Toastr  --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>GoTrip</title>
    @livewireStyles()
</head>

{{-- // $search = $desc . ', Africa';
        // $page = 6;
        // $per_page = 15;
        // $orientation = 'landscape'; --}}

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
            </div>
        </div>
    </header>


    <div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
        <div class="dashboard__sidebar bg-white scroll-bar-1">


            <div class="sidebar -dashboard">

                <div class="sidebar__item">
                    <div class="sidebar__button @if (Route::currentRouteName() == 'user.dashboard') -is-active @endif">
                        <a href="{{ route('user.dashboard') }}" class="d-flex items-center text-15 lh-1 fw-500">
                            <img src="{{ asset('img/dashboard/sidebar/compass.svg') }}" alt="image" class="mr-15">
                            Dashboard
                        </a>
                    </div>
                </div>

                <div class="sidebar__item">
                    <div class="sidebar__button  @if (Route::currentRouteName() == 'plans') -is-active @endif">
                        <a href="{{ route('plans') }}" class="d-flex items-center text-15 lh-1 fw-500">
                            <img src="{{ asset('img/dashboard/sidebar/bookmark.svg') }}" alt="image" class="mr-15">
                            Planner
                        </a>
                    </div>
                </div>

                <div class="sidebar__item">
                    <div class="sidebar__button  @if (Route::currentRouteName() == 'savings') -is-active @endif">
                        <a href="{{ route('savings') }}" class="d-flex items-center text-15 lh-1 fw-500">
                            <img src="{{ asset('img/dashboard/icons/2.svg') }}" width="30px" alt="image"
                                class="mr-15">
                            Savings
                        </a>
                    </div>
                </div>
                {{-- <div class="sidebar__item">
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
                </div> --}}

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
                                    <div class="text-14 lh-14 mr-30">© {{ Date('Y') }} Trvelr. All rights reserved.</div>
                                </div>

                                <div class="col-auto">
                                    <div class="row x-gap-20 y-gap-10 items-center text-14">
                                        <div class="col-auto">
                                            <a href="#" class="text-13 lh-1">Privacy</a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="text-13 lh-1">Terms</a>
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

    @php
        $isPlanDetails = Route::currentRouteName() == 'plan.details';
        $isSavingsCreate = Route::currentRouteName() == 'savings.create';
    @endphp
    @if ($isPlanDetails || $isSavingsCreate)
        <script>
            window.addEventListener('clickk', event => {
                const target = document.querySelector(`[data-x=dashboard]`);
                const toggleClass = target.getAttribute('data-x-toggle');
                target.classList.toggle(toggleClass);
            });
        </script>
    @endif
    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"
        integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
    <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>

    <script src="{{ asset('js/vendors.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>


    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script>
        window.addEventListener('feedback',event => {
			toastr.options =
                    {
                        "closeButton" : true,
                        "progressBar" : true
                    }
          	toastr.success(event.detail.feedback);
        });

        window.addEventListener('errfeedback',event => {
			toastr.options =
                    {
                        "closeButton" : true,
                        "progressBar" : true
                    }
          	toastr.error(event.detail.errfeedback);
        });
    </script>

    @livewireScripts()
</body>

</html>
