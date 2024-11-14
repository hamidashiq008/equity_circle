<x-app-layout :isZuck=true>
    <div class="container-fluid">
        <div class="custom-container-card">
            <div id="content">
                <div class="row g-3">

                    <div class="col-sm-6 col-lg-4">
                        <div class="card h-100">
                           <div class="job-card-img">
                                <img src="{{URL::asset('/images/job-img.jpg')}}" class="card-img-top" alt="#" loading="lazy">
                           </div>
                           <div class="card-body">
                              <a href="{{route('job-detail')}}" class="card-title turncate-2 job-detail-anchor" >How a Customer Academy Improves Retention</a>
                              <p class="card-text turncate-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <a href="{{route('search-job')}}" target="_blank" class="btn btn-primary btn-block">Find More</a>
                           </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card h-100">
                           <div class="job-card-img">
                                <img src="{{URL::asset('/images/job-img-1.jpg')}}" class="card-img-top" alt="#" loading="lazy">
                           </div>
                           <div class="card-body">
                              <h4 class="card-title turncate-2">LMS Request For Personal Tooltik</h4>
                              <p class="card-text turncate-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <a href="{{route('search-job')}}" target="_blank" class="btn btn-primary btn-block">Find More</a>
                           </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card h-100">
                           <div class="job-card-img">
                                <img src="{{URL::asset('/images/job-img-2.jpg')}}" class="card-img-top" alt="#" loading="lazy">
                           </div>
                           <div class="card-body">
                              <h4 class="card-title turncate-2">Build an LMS Buiness Case</h4>
                              <p class="card-text turncate-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <a href="{{route('search-job')}}" target="_blank" class="btn btn-primary btn-block">Find More</a>
                           </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card h-100">
                           <div class="job-card-img">
                                <img src="{{URL::asset('/images/job-img-3.jpg')}}" class="card-img-top" alt="#" loading="lazy">
                           </div>
                           <div class="card-body">
                              <h4 class="card-title turncate-2">Training Evalution From Template</h4>
                              <p class="card-text turncate-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <a href="{{route('search-job')}}" target="_blank" class="btn btn-primary btn-block">Find More</a>
                           </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card h-100">
                           <div class="job-card-img">
                                <img src="{{URL::asset('/images/job-img-4.jpg')}}" class="card-img-top" alt="#" loading="lazy">
                           </div>
                           <div class="card-body">
                              <h4 class="card-title turncate-2">How a Customer Academy Improves Retention</h4>
                              <p class="card-text turncate-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <a href="{{route('search-job')}}" target="_blank" class="btn btn-primary btn-block">Find More</a>
                           </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>    
    </div>
</x-app-layout>
