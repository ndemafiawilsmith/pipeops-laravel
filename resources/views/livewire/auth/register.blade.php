<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <section class="layout-pt-lg layout-pb-lg bg-blue-2">
        <div class="container">
            <div class="row justify-center">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="px-50 py-50 sm:px-20 sm:py-20 bg-white shadow-4 rounded-4">
                        <form wire:submit.prevent="signup">
                            <div class="row y-gap-20">
                                <div class="col-12">
                                    <h1 class="text-22 fw-500">Sign in or create an account</h1>
                                    <p class="mt-10">Already have an account? <a href="{{ route('login') }}" class="text-blue-1">Log in</a></p>
                                </div>

                                <div class="col-12">
                                    <div class="form-input">
                                        <input type="text" wire:model="fullName" >
                                        <label class="lh-1 text-14 text-light-1">Full Name</label>
                                    </div>
                                    @error('fullName') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-input">
                                        <input type="text" wire:model="allergie" placeholder="Peanut,Grains">
                                        <label class="lh-1 text-14 text-light-1">Allergies (Seperated by comma)</label>
                                    </div>
                                    @error('allergie') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-12">
                                    <div class="form-input">
                                        <input type="email" wire:model="email">
                                        <label class="lh-1 text-14 text-light-1">Email</label>
                                    </div>
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-12">
                                    <div class="form-input">
                                        <input type="password" wire:model="password">
                                        <label class="lh-1 text-14 text-light-1">Password</label>
                                    </div>
                                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-12">
                                    <div class="form-input">
                                        <input type="password" wire:model="passwordConfirmation">
                                        <label class="lh-1 text-14 text-light-1">Confirm Password</label>
                                    </div>
                                    @error('passwordConfirmation') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="form-checkbox mt-5">
                                            <input type="checkbox" wire:model="promo" id="promoCheckbox">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>
                                        <div class="text-15 lh-15 text-light-1 ml-10">Email me exclusive promotions. I can opt out later as stated in the Privacy Policy.</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="button py-20 -dark-1 bg-blue-1 text-white px-20">
                                        Sign In <div class="icon-arrow-top-right ml-15"></div>
                                    </button>
                                </div>
                            </div>
                        </form>


                        <div class="row y-gap-20 pt-30">
                            <div class="col-12">
                                <div class="text-center">or sign in with</div>

                                <button class="button col-12 -outline-blue-1 text-blue-1 py-15 rounded-8 mt-10">
                                    <i class="icon-apple text-15 mr-10"></i>
                                    Facebook
                                </button>

                                <button class="button col-12 -outline-red-1 text-red-1 py-15 rounded-8 mt-15">
                                    <i class="icon-apple text-15 mr-10"></i>
                                    Google
                                </button>

                                <button class="button col-12 -outline-dark-2 text-dark-2 py-15 rounded-8 mt-15">
                                    <i class="icon-apple text-15 mr-10"></i>
                                    Apple
                                </button>
                            </div>

                            <div class="col-12">
                                <div class="text-center px-30">By signing in, I agree to GoTrip Terms of Use and Privacy
                                    Policy.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-md bg-dark-2">
        <div class="container">
            <div class="row y-gap-30 justify-between items-center">
                <div class="col-auto">
                    <div class="row y-gap-20  flex-wrap items-center">
                        <div class="col-auto">
                            <div class="icon-newsletter text-60 sm:text-40 text-white"></div>
                        </div>

                        <div class="col-auto">
                            <h4 class="text-26 text-white fw-600">Your Travel Journey Starts Here</h4>
                            <div class="text-white">Sign up and we'll send the best deals to you</div>
                        </div>
                    </div>
                </div>

                <div class="col-auto">
                    <div class="single-field -w-410 d-flex x-gap-10 y-gap-20">
                        <div>
                            <input class="bg-white h-60" type="text" placeholder="Your Email">
                        </div>

                        <div>
                            <button class="button -md h-60 bg-blue-1 text-white">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
