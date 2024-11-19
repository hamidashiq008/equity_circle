<style>
    .cards-wrapper {
        .card-body {
            background-color: #ffffff;
            padding: 10px;
            border-radius: 5px;
        }
    }

    .blog-detail {
        .card-body {
            .image-block {
                max-height: 350px;
                height: 100%;

                & img {
                    width: 100%;
                    height: 100%;
                }
            }
        }
    }

    /* .nav-profile{
      background-color: white;
      box-shadow: 0px 0px 15px 2px #888888;
   } */
</style>

<div class="container">
    <div class="row g-3">
        <div class="col-lg-12">
            <div class="card card-block card-stretch card-height blog blog-detail">
                <div class="card-body">
                    <div class="image-block">
                        <img src="{{ asset('images/bussiness(1).jpg') }}" class="img-fluid rounded w-100" alt="blog-img">
                    </div>
                    <div class="content-main-wrapper ">

                        <!-- <a class="nav-link btn nav-profile" id="document-tab" data-toggle="tab" href="#document-detail">
                              <i class="material-symbols-outlined bg-danger-subtle text-danger">
                              person
                              </i><span>Document Detail</span>
                              </a> -->
                        <div class="blog-description mt-3">
                            <h5 class="mb-3 pb-3 border-bottom">Senior Manager- Operation (Vending)</h5>

                            <div
                                class="blog-meta d-flex align-items-center justify-content-between mb-3 position-right-side flex-wrap w-100">
                                <div class="right-content">
                                    <span class="badge bg-primary mt-2">Onsite </span>
                                    <p class="ms-2 d-inline-block">TechTrack near eden valley</p>
                                </div>
                                <div class="date me-4 d-flex align-items-center"><i
                                        class="material-symbols-outlined pe-2 md-18 text-primary">calendar_month</i>2
                                    Weeks ago</div>
                                <!-- <div class="like me-4 d-flex align-items-center"><i class="material-symbols-outlined pe-2 md-18 text-primary">
                                    thumb_up_alt
                                    </i>20 Like
                                 </div>
                                 <div class="comments me-4 d-flex align-items-center"><i class="material-symbols-outlined pe-2 md-18 text-primary">
                                    mode_comment
                                    </i>82 Comments
                                 </div>
                                 <div class="share d-flex align-items-center"><i class="material-symbols-outlined pe-2 md-18 text-primary">
                                    share
                                    </i>Share
                                 </div> -->
                            </div>
                            <!-- <p>Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                              <a href="#" class="d-flex align-items-center" tabindex="-1">Read More <i class="material-symbols-outlined fs-6">arrow_forward_ios</i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row g-3 cards-wrapper">
                <div class="col-4">
                    <div class="card-body">
                        <div>
                            <img src="{{ asset('images/gym(1).jpg') }}"
                                class="avatar avatar-50 job-icon mb-3 d-inline-block" loading="lazy" alt="img">
                        </div>
                        <h6>Ion by Rock Content</h6>
                        <small>Built by Rock Content</small>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card-body">
                        <div>
                            <img src="{{ asset('images/gym(1).jpg') }}"
                                class="avatar avatar-50 job-icon mb-3 d-inline-block" loading="lazy" alt="img">
                        </div>
                        <h6>Ion by Rock Content</h6>
                        <small>Built by Rock Content</small>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card-body">
                        <div>
                            <img src="{{ asset('images/gym(1).jpg') }}"
                                class="avatar avatar-50 job-icon mb-3 d-inline-block" loading="lazy" alt="img">
                        </div>
                        <h6>Ion by Rock Content</h6>
                        <small>Built by Rock Content</small>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Lists Unstyled</h4>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <h4>The offer</h4>
                    <ul class="mt-2">
                        <li>Leadership Role</li>
                        <li>Join a well-known brand within retail</li>
                        <li>Work alongside & learn from best-in-class talent</li>

                    </ul>
                    <h4>The job</h4>
                    <ul class="mt-2">
                        <li>Effectively lead the Saudi Vending Department in strategy formulation and execution of all
                            the sales & distribution functions for the channel in order to achieve company
                            long/short-term business goals, objectives, and targets.</li>
                        <li>Responsible to lead the Vending Department. He is responsible for clearly defining long- and
                            short-term goals, objectives, and targets for the channel.</li>
                        <li>Responsible for ensuring that the team fully and thoroughly understands the company &
                            franchise individual goals, objectives, and targets in a way that both company and
                            individual clearly defined targets & KPIs (Key Performance Indicators).t</li>
                        <li>Responsible for the execution of channel strategies.</li>
                        <li>Responsible for ensuring there is adequate, qualified, & competent personnel resources who
                            have the responsibility to achieve their KPIs/targets; that team members get the relevant
                            and necessary training/coaching (generic to team or specific to individuals) to enhance
                            their performance to ensure they achieve KPIs/targets.</li>
                        <li>Responsible for the attainment & achievement of the channel KPIs/targets.</li>
                        <li>He is responsible for sales & distribution/market coverage planning, leading in execution,
                            reviewing achievement against set targets, and taking necessary corrective action
                            immediately.</li>
                        <li>Responsible for ensuring excellent customer service and attainment/achievement of customer
                            service delivery targets.</li>
                        <li>Through the team, ensure all machines are always filled with products on time & are in good
                            working conditions.</li>
                        <li>Responsible for ensuring that cash collections are done on time and all issues on
                            collections are attended to and resolved on time so that EOT (End of Trip) processes,
                            procedures, and cutoff deadlines are being adhered to.</li>
                        <li>Responsible for creating robust processes and systems, reviewing their effectiveness, and
                            correcting them accordingly to ensure targets achievement.</li>
                        <li>Responsible for channel budgetary control - ensuring operations are within budgets.</li>

                    </ul>
                    <h4>Ideal Candidate</h4>
                    <ul class="mt-2">
                        <li>You have at least 15 years of experience, including solid experience in a similar role
                            within Consumer, Hospitality, Leisure, Travel, and Retail.</li>
                        <li>You have working knowledge of vending, slot machine, kiosk, operation, and commercial.</li>
                        <li>You are a strong mentor and coach who builds high-performing teams.</li>
                        <li>You are highly goal-driven and work well in fast-paced environments.</li>
                        <li>You pay strong attention to detail and deliver work that is of a high standard.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <!-- <h4 class="card-title">Block Buttons</h4> -->
                    </div>
                </div>
                <div class="card-body pt-0">
                    <!-- <p class="mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p> -->
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button">Apply</button>
                        <button class="btn btn-success" type="button">Refer a friend</button>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">The Employer</h4>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <p>Our client is a digital kiosk that always has the answers, always has what you want, and is
                        always open for business. It’s changing retail with artificial intelligence (AI), innovation,
                        and automation\
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
