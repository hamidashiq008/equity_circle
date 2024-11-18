    <div class="container-fluid">
        <div class="custom-container-card">
            <div id="content">
                <div class="row g-3" style="margin-top: 3rem !important;">

                    <div class="col-sm-6 col-lg-4">
                        <div class="card h-100">
                           <div class="job-card-img">
                                <img src="{{URL::asset('/images/job-img.jpg')}}" class="card-img-top" alt="#" loading="lazy">
                           </div>
                           <div class="card-body">
                              <a onclick="Livewire.dispatch('changeContent', ['dashboards.jobs.job-detail', 'job-detail'])" class="card-title turncate-2 job-detail-anchor" >How a Customer Academy Improves Retention</a>
                              <p class="card-text turncate-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <a  onclick="Livewire.dispatch('changeContent', ['dashboards.jobs.search-job', 'search-job'])" class="btn btn-primary btn-block">Find More</a>
                           </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card h-100">
                           <div class="job-card-img">
                                <img src="{{URL::asset('/images/job-img-1.jpg')}}" class="card-img-top" alt="#" loading="lazy">
                           </div>
                           <div class="card-body">
                           <a onclick="Livewire.dispatch('changeContent', ['dashboards.jobs.job-detail', 'job-detail'])" class="card-title turncate-2 job-detail-anchor" >LMS Request For Personal Tooltik</a>
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
                           <a onclick="Livewire.dispatch('changeContent', ['dashboards.jobs.job-detail', 'job-detail'])" class="card-title turncate-2 job-detail-anchor" >Build an LMS Buiness Case</a>
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
                           <a onclick="Livewire.dispatch('changeContent', ['dashboards.jobs.job-detail', 'job-detail'])" class="card-title turncate-2 job-detail-anchor" >Training Evalution From Template</a>
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
                           <a onclick="Livewire.dispatch('changeContent', ['dashboards.jobs.job-detail', 'job-detail'])" class="card-title turncate-2 job-detail-anchor" >How a Customer Academy Improves Retention</a>
                              <p class="card-text turncate-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <a href="{{route('search-job')}}" target="_blank" class="btn btn-primary btn-block">Find More</a>
                           </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>    
    </div>
