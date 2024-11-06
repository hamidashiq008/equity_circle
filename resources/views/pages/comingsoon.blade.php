<x-guest-layout>

    <div class="iq-comingsoon mt-5 mt-lg-0">
        <div class="container">
            <div class="auto-vh-100 d-flex flex-column justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <div class="iq-comingsoon-info">
                            <a href="index.html"
                                class="d-flex justify-content-center align-items-center gap-2 iq-header-logo d-none d-lg-flex">
                                <svg width="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M1.67733 9.50001L7.88976 20.2602C9.81426 23.5936 14.6255 23.5936 16.55 20.2602L22.7624 9.5C24.6869 6.16666 22.2813 2 18.4323 2H6.00746C2.15845 2 -0.247164 6.16668 1.67733 9.50001ZM14.818 19.2602C13.6633 21.2602 10.7765 21.2602 9.62181 19.2602L9.46165 18.9828L9.46597 18.7275C9.48329 17.7026 9.76288 16.6993 10.2781 15.8131L12.0767 12.7195L14.1092 16.2155C14.4957 16.8803 14.7508 17.6132 14.8607 18.3743L14.9544 19.0239L14.818 19.2602ZM16.4299 16.4683L19.3673 11.3806C18.7773 11.5172 18.172 11.5868 17.5629 11.5868H13.7316L15.8382 15.2102C16.0721 15.6125 16.2699 16.0335 16.4299 16.4683ZM20.9542 8.63193L21.0304 8.5C22.1851 6.5 20.7417 4 18.4323 4H17.8353L17.1846 4.56727C16.6902 4.99824 16.2698 5.50736 15.9402 6.07437L13.8981 9.58676H17.5629C18.4271 9.58676 19.281 9.40011 20.0663 9.03957L20.9542 8.63193ZM14.9554 4C14.6791 4.33499 14.4301 4.69248 14.2111 5.06912L12.0767 8.74038L10.0324 5.22419C9.77912 4.78855 9.48582 4.37881 9.15689 4H14.9554ZM6.15405 4H6.00746C3.69806 4 2.25468 6.50001 3.40938 8.50001L3.4915 8.64223L4.37838 9.04644C5.15962 9.40251 6.00817 9.58676 6.86672 9.58676H10.2553L8.30338 6.22943C7.9234 5.57587 7.42333 5.00001 6.8295 4.53215L6.15405 4ZM5.07407 11.3833L7.88909 16.2591C8.05955 15.7565 8.28025 15.2702 8.54905 14.8079L10.4218 11.5868H6.86672C6.26169 11.5868 5.66037 11.5181 5.07407 11.3833Z"
                                        fill="currentColor" />
                                </svg>
                                <h3 class="logo-title d-none d-sm-block" data-setting="app_name">SocialV</h3>
                            </a>
                            <h2 class="mt-4 mb-1">Stay tunned, we're launching very soon</h2>
                            <p>We are working very hard to give you the best experience possible!</p>
                            <ul class="countdown row list-inline" data-date="Dec 31 2024 23:59:59">
                                <li class="col-md-6 col-xl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <span class="text-center" data-days>0</span>Days
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-xl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <span class="text-center" data-hours>0</span>Hours
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-xl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <span class="text-center" data-minutes>0</span>Minutes
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-xl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <span class="text-center" data-seconds>0</span>Seconds
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-7">
                        <form class="iq-comingsoon-form mt-5">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="Enter email address"
                                    aria-label="Enter email address" aria-describedby="button-2">
                                <button class="btn btn-primary" type="button" id="button-2">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/countdown.js')}}"></script>

</x-guest-layout>