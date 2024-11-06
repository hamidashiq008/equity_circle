<x-guest-layout>
    <section class="sign-in-page">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 overflow-hidden position-relative">
                    <div class="bg-primary w-100 h-100 position-absolute top-0 bottom-0 start-0 end-0"></div>
                    <div class="container-inside z-1">
                       <div class="main-circle circle-small"></div>
                       <div class="main-circle circle-medium"></div>
                       <div class="main-circle circle-large"></div>
                       <div class="main-circle circle-xlarge"></div>
                       <div class="main-circle circle-xxlarge"></div>
                    </div>
                    <div class="sign-in-detail container-inside-top">
                       <div class="swiper swiper-general overflow-hidden " data-slide="1" data-laptop="1" data-tab="1" data-mobile="1"
                          data-mobile-sm="1" data-autoplay="true" data-loop="true" data-navigation="false" data-pagination="true"
                          data-space="16">
                          <ul  class="swiper-wrapper list-inline m-0 p-0 ">
                             <li class="swiper-slide">
                                <img src="{{asset('images/login/1.jpg')}}" class="signin-img img-fluid mb-5 rounded-3" alt="image">
                                <h2 class="mb-3 text-white fw-semibold">Power UP Your Friendship</h2>
                                <p class="font-size-16 text-white mb-0">It is a long established fact that a reader will be<br/> distracted by the readable content.</p>
                             </li>
                             <li class="swiper-slide">
                                <img src="{{asset('images/login/2.jpg')}}" class="signin-img img-fluid mb-5 rounded-3" alt="image">
                                <h2 class="mb-3 text-white fw-semibold">Connect with the world</h2>
                                <p class="font-size-16 text-white mb-0">It is a long established fact that a reader will be<br/> distracted by the readable content.</p>
                             </li>
                             <li class="swiper-slide">
                                <img src="{{asset('images/login/3.jpg')}}" class="signin-img img-fluid mb-5 rounded-3" alt="image">
                                <h2 class="mb-3 text-white fw-semibold">Together Is better</h2>
                                <p class="font-size-16 text-white mb-0">It is a long established fact that a reader will be<br/> distracted by the readable content.</p>
                             </li>
                          </ul>
                       </div>
                    </div>
                 </div>
                <div class="col-md-6">
                    <div class="sign-in-from text-center">
                        <a href="" class="d-inline-flex align-items-center justify-content-center gap-2">
                            <svg width="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                   d="M1.67733 9.50001L7.88976 20.2602C9.81426 23.5936 14.6255 23.5936 16.55 20.2602L22.7624 9.5C24.6869 6.16666 22.2813 2 18.4323 2H6.00746C2.15845 2 -0.247164 6.16668 1.67733 9.50001ZM14.818 19.2602C13.6633 21.2602 10.7765 21.2602 9.62181 19.2602L9.46165 18.9828L9.46597 18.7275C9.48329 17.7026 9.76288 16.6993 10.2781 15.8131L12.0767 12.7195L14.1092 16.2155C14.4957 16.8803 14.7508 17.6132 14.8607 18.3743L14.9544 19.0239L14.818 19.2602ZM16.4299 16.4683L19.3673 11.3806C18.7773 11.5172 18.172 11.5868 17.5629 11.5868H13.7316L15.8382 15.2102C16.0721 15.6125 16.2699 16.0335 16.4299 16.4683ZM20.9542 8.63193L21.0304 8.5C22.1851 6.5 20.7417 4 18.4323 4H17.8353L17.1846 4.56727C16.6902 4.99824 16.2698 5.50736 15.9402 6.07437L13.8981 9.58676H17.5629C18.4271 9.58676 19.281 9.40011 20.0663 9.03957L20.9542 8.63193ZM14.9554 4C14.6791 4.33499 14.4301 4.69248 14.2111 5.06912L12.0767 8.74038L10.0324 5.22419C9.77912 4.78855 9.48582 4.37881 9.15689 4H14.9554ZM6.15405 4H6.00746C3.69806 4 2.25468 6.50001 3.40938 8.50001L3.4915 8.64223L4.37838 9.04644C5.15962 9.40251 6.00817 9.58676 6.86672 9.58676H10.2553L8.30338 6.22943C7.9234 5.57587 7.42333 5.00001 6.8295 4.53215L6.15405 4ZM5.07407 11.3833L7.88909 16.2591C8.05955 15.7565 8.28025 15.2702 8.54905 14.8079L10.4218 11.5868H6.86672C6.26169 11.5868 5.66037 11.5181 5.07407 11.3833Z"
                                   fill="currentColor" />
                             </svg>
                        <h2 class="mb-0">SocialV</h2>
                    </a>
                        <p class="mt-3 font-size-16">Welcome to socialV, a platform to connect with<br/> the social world</p>
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" class="mt-5" action="{{ route('login') }}" data-toggle="validator" class="">
                            {{csrf_field()}}

                            <div class="form-group text-start">
                                <h6 for="email" class="form-label fw-bold">Username or Email Address</h6>
                                <input id="email" type="email" name="email"  value="{{env('IS_DEMO') ? 'admin@example.com' : old('email')}}"   class="form-control mb-0"  placeholder="admin@example.com" required autofocus>
                            </div>
                            <div class="form-group text-start">
                                <h6 for="password" class="form-label fw-bold">Your Password</h6>

                                <input class="form-control mb-0" type="password" placeholder="********"  name="password" value="{{ env('IS_DEMO') ? 'password' : '' }}" required autocomplete="current-password">
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check d-inline-block m-0">
                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                    <h6 class="form-check-label fw-bold" for="customCheck1">Remember Me</h6>
                                </div>
                                <a href="{{route('pagerecover')}}" class="font-italic">Forgot password?</a>

                            </div>
                            <button type="submit" class="btn btn-primary mt-4 fw-semibold text-uppercase w-100">Sign in</button>
                            <h6 class="mt-5">Don't have an account ? <a href="{{route('register')}}">Sign up</a></h6>
                            {{-- <div class="sign-info">
                                <span class="dark-color d-inline-block line-height-2">Don't have an account? <a href="{{route('register')}}">Sign up</a></span>
                                <ul class="iq-social-media">
                                    <li>
                                        <a href="#">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 16 16" fill="currentColor">
                                                <title>facebook</title>
                                                <path d="M15 16h-14c-0.553 0-1-0.447-1-1v-14c0-0.553 0.447-1 1-1h14c0.553 0 1 0.447 1 1v14c0 0.553-0.447 1-1 1zM14 2h-12v12h12v-12zM8 6c0-1.103 0.912-2 1.857-2h1.143v2h-1v1h1v2h-1v3h-2v-3h-1v-2h1v-1z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                                            <title>twitter</title>
                                            <path d="M20.833 5.262c-0.186 0.242-0.391 0.475-0.616 0.696-0.233 0.232-0.347 0.567-0.278 0.908 0.037 0.182 0.060 0.404 0.061 0.634 0 5.256-2.429 8.971-5.81 10.898-2.647 1.509-5.938 1.955-9.222 1.12 1.245-0.361 2.46-0.921 3.593-1.69 0.147-0.099 0.273-0.243 0.352-0.421 0.224-0.505-0.003-1.096-0.508-1.32-2.774-1.233-4.13-2.931-4.769-4.593-0.417-1.084-0.546-2.198-0.52-3.227 0.021-0.811 0.138-1.56 0.278-2.182 0.394 0.343 0.803 0.706 1.235 1.038 2.051 1.577 4.624 2.479 7.395 2.407 0.543-0.015 0.976-0.457 0.976-1v-1.011c-0.002-0.179 0.009-0.357 0.034-0.533 0.113-0.806 0.504-1.569 1.162-2.141 0.725-0.631 1.636-0.908 2.526-0.846s1.753 0.463 2.384 1.188c0.252 0.286 0.649 0.416 1.033 0.304 0.231-0.067 0.463-0.143 0.695-0.228zM22.424 2.183c-0.74 0.522-1.523 0.926-2.287 1.205-0.931-0.836-2.091-1.302-3.276-1.385-1.398-0.097-2.836 0.339-3.977 1.332-1.036 0.901-1.652 2.108-1.83 3.372-0.037 0.265-0.055 0.532-0.054 0.8-1.922-0.142-3.693-0.85-5.15-1.97-0.775-0.596-1.462-1.309-2.034-2.116-0.32-0.45-0.944-0.557-1.394-0.237-0.154 0.109-0.267 0.253-0.335 0.409 0 0-0.132 0.299-0.285 0.76-0.112 0.337-0.241 0.775-0.357 1.29-0.163 0.722-0.302 1.602-0.326 2.571-0.031 1.227 0.12 2.612 0.652 3.996 0.683 1.775 1.966 3.478 4.147 4.823-1.569 0.726-3.245 1.039-4.873 0.967-0.552-0.024-1.019 0.403-1.043 0.955-0.017 0.389 0.19 0.736 0.513 0.918 4.905 2.725 10.426 2.678 14.666 0.261 4.040-2.301 6.819-6.7 6.819-12.634-0.001-0.167-0.008-0.33-0.023-0.489 1.006-1.115 1.676-2.429 1.996-3.781 0.127-0.537-0.206-1.076-0.743-1.203-0.29-0.069-0.58-0.003-0.807 0.156z"></path>
                                        </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 28" fill="currentColor">
                                                <title>instagram</title>
                                                <path d="M16 14c0-2.203-1.797-4-4-4s-4 1.797-4 4 1.797 4 4 4 4-1.797 4-4zM18.156 14c0 3.406-2.75 6.156-6.156 6.156s-6.156-2.75-6.156-6.156 2.75-6.156 6.156-6.156 6.156 2.75 6.156 6.156zM19.844 7.594c0 0.797-0.641 1.437-1.437 1.437s-1.437-0.641-1.437-1.437 0.641-1.437 1.437-1.437 1.437 0.641 1.437 1.437zM12 4.156c-1.75 0-5.5-0.141-7.078 0.484-0.547 0.219-0.953 0.484-1.375 0.906s-0.688 0.828-0.906 1.375c-0.625 1.578-0.484 5.328-0.484 7.078s-0.141 5.5 0.484 7.078c0.219 0.547 0.484 0.953 0.906 1.375s0.828 0.688 1.375 0.906c1.578 0.625 5.328 0.484 7.078 0.484s5.5 0.141 7.078-0.484c0.547-0.219 0.953-0.484 1.375-0.906s0.688-0.828 0.906-1.375c0.625-1.578 0.484-5.328 0.484-7.078s0.141-5.5-0.484-7.078c-0.219-0.547-0.484-0.953-0.906-1.375s-0.828-0.688-1.375-0.906c-1.578-0.625-5.328-0.484-7.078-0.484zM24 14c0 1.656 0.016 3.297-0.078 4.953-0.094 1.922-0.531 3.625-1.937 5.031s-3.109 1.844-5.031 1.937c-1.656 0.094-3.297 0.078-4.953 0.078s-3.297 0.016-4.953-0.078c-1.922-0.094-3.625-0.531-5.031-1.937s-1.844-3.109-1.937-5.031c-0.094-1.656-0.078-3.297-0.078-4.953s-0.016-3.297 0.078-4.953c0.094-1.922 0.531-3.625 1.937-5.031s3.109-1.844 5.031-1.937c1.656-0.094 3.297-0.078 4.953-0.078s3.297-0.016 4.953 0.078c1.922 0.094 3.625 0.531 5.031 1.937s1.844 3.109 1.937 5.031c0.094 1.656 0.078 3.297 0.078 4.953z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>
