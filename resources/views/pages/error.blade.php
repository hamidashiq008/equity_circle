<x-guest-layout>
    <div class="container p-0">
        <div class="row no-gutters vh-100">
            <div class="col-12 text-center align-self-center">
                <div class="iq-error position-relative mt-5">
                    <img src="{{ asset('/images/error/404-light.png') }}"
                        class="img-fluid iq-error-img img-light center" alt="light image">
                    <img src="{{ asset('/images/error/404.png') }}" class="img-fluid iq-error-img img-dark center"
                        alt="dark image">
                    <h2 class="mb-0 text-center">Oops! This Page is Not Found.</h2>
                    <p class="text-center">The requested page dose not exist.</p>
                    <a class="btn btn-primary mt-3" href="{{route('index')}}">
                        <span class="d-flex align-items-center">
                            <i class="material-symbols-outlined md-18 me-1">home</i>Back to Home</span></a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
