<x-app-layout :isSubheader="true" activelink='store'>
    <x-slot name="header">
        @include('components.profileheader', ['pageImage' => 'profile-bg7.jpg', 'pagetitle' => 'Store',
        'id'=>"05"])
    </x-slot>
    <div class="container">
        <div class="row">
           <div class="col-lg-12">
              <div class="card">
                 <div class="card-header d-flex justify-content-between border-bottom">
                    <div class="header-title">
                       <h4 class="card-title">Store Categories</h4>
                    </div>
                 </div>
                 <div class="card-body">
                    <div class="row">
                       <div class="col-sm-6 col-md-6 col-lg-3 mb-md-2 mb-2">
                          <a href="{{route('store.grid')}}"><img class="img-fluid rounded" src="{{asset('images/store/c1.jpg')}}" alt="category-image1" loading="lazy"></a>
                       </div>
                       <div class="col-sm-6 col-md-6 col-lg-3 mb-md-2 mb-2">
                          <a href="{{route('store.grid')}}"><img class="img-fluid rounded" src="{{asset('images/store/c2.jpg')}}" alt="category-image2" loading="lazy"></a>
                       </div>
                       <div class="col-sm-6 col-md-6 col-lg-3 mb-md-2 mb-2">
                          <a href="{{route('store.grid')}}"><img class="img-fluid rounded" src="{{asset('images/store/c3.jpg')}}" alt="category-image3" loading="lazy"></a>
                       </div>
                       <div class="col-sm-6 col-md-6 col-lg-3 mb-md-2 mb-2">
                          <a href="{{route('store.grid')}}"><img class="img-fluid rounded" src="{{asset('images/store/c4.jpg')}}" alt="category-image4" loading="lazy"></a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="col-lg-12">
              <div class="card shadow-none p-0">
                 <div class="card-header d-flex justify-content-between rounded border-bottom-0">
                    <div class="header-title">
                       <h4 class="card-title">Store Categories</h4>
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-block card-stretch card-height product">

                         <div class="card-body">
                          <div class="d-flex align-items-center justify-content-between pb-3">
                             <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle avatar-30" src="{{asset('images/user/01.jpg')}}" alt="" loading="lazy">
                                <div class="media-body ms-2">
                                   <p class="mb-0 line-height">Posted By</p>
                                   <h6><a href="#">Bearded Wonder</a></h6>
                                </div>
                             </div>
                             <span class="text-warning d-block line-height">
                             <i class="material-symbols-outlined md-18">star</i>
                          <i class="material-symbols-outlined md-18">star</i>
                          <i class="material-symbols-outlined md-18">star</i>
                          <i class="material-symbols-outlined md-18">star</i>
                          <i class="material-symbols-outlined md-18">star</i>
                             </span>
                          </div>
                          <div class="image-block position-relative">
                             <img src="{{asset('images/store/01.jpg')}}" class="img-fluid w-100 rounded" alt="product-img" loading="lazy">
                             <div class="offer">
                                <div class="offer-title">30%</div>
                             </div>
                             <h6 class="price"><span class="regular-price text-dark pr-2">$87.00</span>$75.00</h6>
                          </div>
                          <div class="product-description mt-3">
                             <a href="{{route('store.productdetail')}}" class="mb-1">Flaming Skull Team Logo</a>
                             <p class="categry text-primary ps-3 mb-0 position-relative mb-0">Logo and badges</p>
                             <p class="mb-0">Success in containing the virus comes slowing activity.</p>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-block card-stretch card-height product">
                       <div class="card-body">
                          <div class="d-flex align-items-center justify-content-between pb-3">
                             <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle avatar-30" src="{{asset('images/user/02.jpg')}}" alt="" loading="lazy">
                                <div class="ms-2">
                                   <p class="mb-0 line-height">Posted By</p>
                                   <h6><a href="#">Paul Molive</a></h6>
                                </div>
                             </div>
                             <div class="d-block line-height">
                                <span class=" text-warning">
                                    <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                </span>
                             </div>
                          </div>
                          <div class="image-block position-relative">
                             <img src="{{asset('images/store/02.jpg')}}" class="img-fluid w-100 rounded" alt="product-img" loading="lazy">
                             <div class="offer">
                                <div class="offer-title">30%</div>
                             </div>
                             <h6 class="price"><span class="regular-price text-dark pr-2">$87.00</span>$75.00</h6>
                          </div>
                          <div class="product-description mt-3">
                             <a href="{{route('store.productdetail')}}" class="mb-1">Flaming Skull Team Logo</a>
                             <p class="categry text-primary ps-3 mb-0 position-relative mb-0">Logo and badges</p>
                             <p class="mb-0">Success in containing the virus comes slowing activity.</p>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-block card-stretch card-height product">
                       <div class="card-body">
                          <div class="d-flex align-items-center justify-content-between pb-3">
                             <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle avatar-30" src="{{asset('images/user/03.jpg')}}" alt="" loading="lazy">
                                <div class="ms-2">
                                   <p class="mb-0 line-height">Posted By</p>
                                   <h6><a href="#">Anna Mull</a></h6>
                                </div>
                             </div>
                             <div class="d-block line-height">
                                <span class=" text-warning">
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                </span>
                             </div>
                          </div>
                          <div class="image-block position-relative">
                             <img src="{{asset('images/store/03.jpg')}}" class="img-fluid w-100 rounded" alt="product-img" loading="lazy">
                             <div class="offer bg-danger">
                                <div class="offer-title">50%</div>
                             </div>
                             <h6 class="price"><span class="regular-price text-dark pr-2">$87.00</span>$75.00</h6>
                          </div>
                          <div class="product-description mt-3">
                             <a href="{{route('store.productdetail')}}" class="mb-1">Flaming Skull Team Logo</a>
                             <p class="categry text-primary ps-3 mb-0 position-relative mb-0">Logo and badges</p>
                             <p class="mb-0">Success in containing the virus comes slowing activity.</p>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-block card-stretch card-height product">
                       <div class="card-body">
                          <div class="d-flex align-items-center justify-content-between pb-3">
                             <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle avatar-30" src="{{asset('images/user/04.jpg')}}" alt="" loading="lazy">
                                <div class="ms-2">
                                   <p class="mb-0 line-height">Posted By</p>
                                   <h6><a href="#">Terry Aki</a></h6>
                                </div>
                             </div>
                             <div class="d-block line-height">
                                <span class=" text-warning">
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                </span>
                             </div>
                          </div>
                          <div class="image-block position-relative">
                             <img src="{{asset('images/store/04.jpg')}}" class="img-fluid w-100 rounded" alt="product-img" loading="lazy">
                             <div class="offer">
                                <div class="offer-title">30%</div>
                             </div>
                             <h6 class="price"><span class="regular-price text-dark pr-2">$87.00</span>$75.00</h6>
                          </div>
                          <div class="product-description mt-3">
                             <a href="{{route('store.productdetail')}}" class="mb-1">Flaming Skull Team Logo</a>
                             <p class="categry text-primary ps-3 mb-0 position-relative mb-0">Logo and badges</p>
                             <p class="mb-0">Success in containing the virus comes slowing activity.</p>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-block card-stretch card-height product">
                       <div class="card-body">
                          <div class="d-flex align-items-center justify-content-between pb-3">
                             <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle avatar-30" src="{{asset('images/user/05.jpg')}}" alt="" loading="lazy">
                                <div class="ms-2">
                                   <p class="mb-0 line-height">Posted By</p>
                                   <h6><a href="#">Rock lai</a></h6>
                                </div>
                             </div>
                             <div class="d-block line-height">
                                <span class=" text-warning">
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                </span>
                             </div>
                          </div>
                          <div class="image-block position-relative">
                             <img src="{{asset('images/store/05.jpg')}}" class="img-fluid w-100 rounded" alt="product-img" loading="lazy">
                             <div class="offer">
                                <div class="offer-title">20%</div>
                             </div>
                             <h6 class="price"><span class="regular-price text-dark pr-2">$87.00</span>$75.00</h6>
                          </div>
                          <div class="product-description mt-3">
                             <a href="{{route('store.productdetail')}}" class="mb-1">Flaming Skull Team Logo</a>
                             <p class="categry text-primary ps-3 mb-0 position-relative mb-0">Logo and badges</p>
                             <p class="mb-0">Success in containing the virus comes slowing activity.</p>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-block card-stretch card-height product">
                       <div class="card-body">
                          <div class="d-flex align-items-center justify-content-between pb-3">
                             <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle avatar-30" src="{{asset('images/user/06.jpg')}}" alt="" loading="lazy">
                                <div class="ms-2">
                                   <p class="mb-0 line-height">Posted By</p>
                                   <h6><a href="#">Cliff Hanger</a></h6>
                                </div>
                             </div>
                             <div class="d-block line-height">
                                <span class=" text-warning">
                                    <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                </span>
                             </div>
                          </div>
                          <div class="image-block position-relative">
                             <img src="{{asset('images/store/06.jpg')}}" class="img-fluid w-100 rounded" alt="product-img" loading="lazy">
                             <div class="offer">
                                <div class="offer-title">40%</div>
                             </div>
                             <h6 class="price"><span class="regular-price text-dark pr-2">$87.00</span>$75.00</h6>
                          </div>
                          <div class="product-description mt-3">
                             <a href="{{route('store.productdetail')}}" class="mb-1">Flaming Skull Team Logo</a>
                             <p class="categry text-primary ps-3 mb-0 position-relative mb-0">Logo and badges</p>
                             <p class="mb-0">Success in containing the virus comes slowing activity.</p>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-block card-stretch card-height product">
                       <div class="card-body">
                          <div class="d-flex align-items-center justify-content-between pb-3">
                             <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle avatar-30" src="{{asset('images/user/07.jpg')}}" alt="" loading="lazy">
                                <div class="ms-2">
                                   <p class="mb-0 line-height">Posted By</p>
                                   <h6><a href="#">Pete Sariya</a></h6>
                                </div>
                             </div>
                             <div class="d-block line-height">
                                <span class=" text-warning">
                                    <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                </span>
                             </div>
                          </div>
                          <div class="image-block position-relative">
                             <img src="{{asset('images/store/07.jpg')}}" class="img-fluid w-100 rounded" alt="product-img" loading="lazy">
                             <div class="offer bg-danger">
                                <div class="offer-title">50%</div>
                             </div>
                             <h6 class="price"><span class="regular-price text-dark pr-2">$87.00</span>$75.00</h6>
                          </div>
                          <div class="product-description mt-3">
                             <a href="{{route('store.productdetail')}}" class="mb-1">Flaming Skull Team Logo</a>
                             <p class="categry text-primary ps-3 mb-0 position-relative mb-0">Logo and badges</p>
                             <p class="mb-0">Success in containing the virus comes slowing activity.</p>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-block card-stretch card-height product">
                       <div class="card-body">
                          <div class="d-flex align-items-center justify-content-between pb-3">
                             <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle avatar-30" src="{{asset('images/user/08.jpg')}}" alt="" loading="lazy">
                                <div class="ms-2">
                                   <p class="mb-0 line-height">Posted By</p>
                                   <h6><a href="#">Alex john</a></h6>
                                </div>
                             </div>
                             <div class="d-block line-height">
                                <span class=" text-warning">
                                    <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                </span>
                             </div>
                          </div>
                          <div class="image-block position-relative">
                             <img src="{{asset('images/store/08.jpg')}}" class="img-fluid w-100 rounded" alt="product-img" loading="lazy">
                             <div class="offer">
                                <div class="offer-title">30%</div>
                             </div>
                             <h6 class="price"><span class="regular-price text-dark pr-2">$87.00</span>$75.00</h6>
                          </div>
                          <div class="product-description mt-3">
                             <a href="{{route('store.productdetail')}}" class="mb-1">Flaming Skull Team Logo</a>
                             <p class="categry text-primary ps-3 mb-0 position-relative mb-0">Logo and badges</p>
                             <p class="mb-0">Success in containing the virus comes slowing activity.</p>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-block card-stretch card-height product">
                       <div class="card-body">
                          <div class="d-flex align-items-center justify-content-between pb-3">
                             <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle avatar-30" src="{{asset('images/user/09.jpg')}}" alt="" loading="lazy">
                                <div class="ms-2">
                                   <p class="mb-0 line-height">Posted By</p>
                                   <h6><a href="#">Paige Turner</a></h6>
                                </div>
                             </div>
                             <div class="d-block line-height">
                                <span class=" text-warning">
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                   <i class="material-symbols-outlined md-18">star</i>
                                </span>
                             </div>
                          </div>
                          <div class="image-block position-relative">
                             <img src="{{asset('images/store/09.jpg')}}" class="img-fluid w-100 rounded" alt="product-img" loading="lazy">
                             <div class="offer">
                                <div class="offer-title">10%</div>
                             </div>
                             <h6 class="price"><span class="regular-price text-dark pr-2">$87.00</span>$75.00</h6>
                          </div>
                          <div class="product-description mt-3">
                             <a href="{{route('store.productdetail')}}" class="mb-1">Flaming Skull Team Logo</a>
                             <p class="categry text-primary ps-3 mb-0 position-relative mb-0">Logo and badges</p>
                             <p class="mb-0">Success in containing the virus comes slowing activity.</p>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
</x-app-layout>
