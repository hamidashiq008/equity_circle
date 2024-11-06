<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body profile-page p-0">
                        <div class="profile-header">
                            <div class="position-relative">
                                <img src="{{ asset('/images/page-img/profile-bg1.jpg') }}" alt="profile-bg"
                                    class="rounded img-fluid" loading="lazy">
                                <ul class="header-nav list-inline d-flex flex-wrap justify-end p-0 m-0">
                                    <li><a href="#" class="material-symbols-outlined">
                                            edit
                                        </a>
                                    </li>
                                    <li><a href="#" class="material-symbols-outlined">
                                            settings
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="user-detail text-center mb-3">
                                <div class="profile-img">
                                    <img src="{{ asset('/images/user/11.png') }}" alt="profile-img" loading="lazy"
                                        class="avatar-130 img-fluid" />
                                </div>
                                <div class="profile-detail">
                                    <h3 class="">Paul Molive</h3>
                                </div>
                            </div>
                            <div
                                class="profile-info py-5 px-md-5 px-3 d-flex align-items-center justify-content-between position-relative">
                                <div class="social-links">
                                    <ul
                                        class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                        <li class="text-center pe-3">
                                            <a href="#"><img src="{{ asset('/images/icon/08.png') }}"
                                                    class="img-fluid rounded" alt="facebook" loading="lazy"></a>
                                        </li>
                                        <li class="text-center pe-3">
                                            <a href="#"><img src="{{ asset('/images/icon/09.png') }}"
                                                    class="img-fluid rounded" alt="Twitter" loading="lazy"></a>
                                        </li>
                                        <li class="text-center pe-3">
                                            <a href="#"><img src="{{ asset('/images/icon/10.png') }}"
                                                    class="img-fluid rounded" alt="Instagram" loading="lazy"></a>
                                        </li>
                                        <li class="text-center pe-3">
                                            <a href="#"><img src="{{ asset('/images/icon/11.png') }}"
                                                    class="img-fluid rounded" alt="Google plus" loading="lazy"></a>
                                        </li>
                                        <li class="text-center pe-3">
                                            <a href="#"><img src="{{ asset('/images/icon/12.png') }}"
                                                    class="img-fluid rounded" alt="You tube" loading="lazy"></a>
                                        </li>
                                        <li class="text-center pe-0 md-pe-3">
                                            <a href="#"><img src="{{ asset('/images/icon/13.png') }}"
                                                    class="img-fluid rounded" alt="linkedin" loading="lazy"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="social-info">
                                    <ul
                                        class="social-data-block social-user-meta-list d-flex align-items-center justify-content-center list-inline p-0 m-0 gap-1">
                                        <li class="text-center">
                                            <p class="mb-0">690</p>
                                            <h6 class="mb-0">Posts</h6>
                                        </li>
                                        <li class="text-center">
                                            <p class="mb-0">206</p>
                                            <h6 class="mb-0">Followers</h6>
                                        </li>
                                        <li class="text-center">
                                            <p class="mb-0">100</p>
                                            <h6 class="mb-0">Following</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="user-tabing p-3">
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                <ul
                                    class="nav nav-pills d-flex align-items-center text-center profile-forum-items p-0 m-0 w-75">
                                    <li class="col-sm-3 p-0">
                                        <a class="nav-link active" data-bs-toggle="pill" href="#pill-topicstart-tab"
                                            data-bs-target="#topicstart" role="button">Topic Started</a>
                                    </li>
                                    <li class="col-sm-3 p-0">
                                        <a class="nav-link" data-bs-toggle="pill" href="#pill-replies-tab"
                                            data-bs-target="#replies" role="button">My Replies</a>
                                    </li>
                                    <li class="col-sm-3 p-0">
                                        <a class="nav-link" data-bs-toggle="pill" href="#pill-likedtopic-tab"
                                            data-bs-target="#likedtopic" role="button">Liked Topics</a>
                                    </li>
                                </ul>
                                <button type="submit" class="btn btn-primary">Apply Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="tab-content forum-content">
                    <div class="tab-pane fade active show" id="topicstart" role="tabpanel">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table forum-table mb-0 rounded">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th class="col-lg-4">Activity</th>
                                                <th class="col-lg-2">Voices</th>
                                                <th class="col-lg-2">Replies</th>
                                                <th class="col-lg-4">Discussion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/01.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Bearded Wonder</a></h6>
                                                            <p class="mb-0">3 hours, 22 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 h6">12</td>
                                                <td class="col-lg-2 h6">3</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Pete Sariya</span>22
                                                        minutes ago <span class="text-primary"> - Comics</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/02.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Anna Mull</a></h6>
                                                            <p class="mb-0">3 hours, 20 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 h6">10</td>
                                                <td class="col-lg-2 h6">8</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Anna Mull</span>20
                                                        minutes ago <span class="text-primary"> - Community
                                                            Hangout</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/03.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Terry Aki</a></h6>
                                                            <p class="mb-0">3 hours, 18 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 h6">8</td>
                                                <td class="col-lg-2 h6">8</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Terry Aki</span>18
                                                        minutes ago <span class="text-primary">- Community</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/04.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Alex john</a></h6>
                                                            <p class="mb-0">2 hours, 16 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 h6">7</td>
                                                <td class="col-lg-2 h6">6</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Alex john</span>16
                                                        minutes ago <span class="text-primary"> - expenses</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/05.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Rock lai</a></h6>
                                                            <p class="mb-0">2 hours, 22 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 h6">6</td>
                                                <td class="col-lg-2 h6">4</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Rock lai</span>22
                                                        minutes ago <span class="text-primary"> - Banking</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/06.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Ira Membrit</a></h6>
                                                            <p class="mb-0">2 hours, 21 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 h6">5</td>
                                                <td class="col-lg-2 h6">4</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Ira Membrit</span>21
                                                        minutes ago <span class="text-primary"> - expenses</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/07.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Bob Frapples</a></h6>
                                                            <p class="mb-0">2 hours, 20 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 h6">4</td>
                                                <td class="col-lg-2 h6">2</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Bob Frapples</span>20
                                                        minutes ago <span class="text-primary"> - Community
                                                            Hangout</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/08.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Paul Moliver</a></h6>
                                                            <p class="mb-0">2 hours, 18 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 h6">5</td>
                                                <td class="col-lg-2 h6">3</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Paul Molive</span>18
                                                        minutes ago <span class="text-primary"> - Banking</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/09.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Greta Life</a></h6>
                                                            <p class="mb-0">2 hours, 15 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 h6">6</td>
                                                <td class="col-lg-2 h6">4</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Greta Life</span>15
                                                        minutes ago <span class="text-primary"> - Comics</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/05.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Bearded Wonder</a></h6>
                                                            <p class="mb-0">3 hours, 22 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 h6">3</td>
                                                <td class="col-lg-2 h6">2</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Pete Sariya</span>22
                                                        minutes ago <span class="text-primary"> - Comics</span></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="replies" role="tabpanel">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table forum-table mb-0 rounded">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>Activity</th>
                                                <th>Voices</th>
                                                <th>Replies</th>
                                                <th>Discussion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/07.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Bob Frapples</a></h6>
                                                            <p class="mb-0">2 hours, 20 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 h6">4</td>
                                                <td class="col-lg-2 h6">2</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Bob Frapples</span>20
                                                        minutes ago <span class="text-primary"> - Community
                                                            Hangout</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/08.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Paul Moliver</a></h6>
                                                            <p class="mb-0">2 hours, 18 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 h6">5</td>
                                                <td class="col-lg-2 h6">3</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Paul Molive</span>18
                                                        minutes ago <span class="text-primary"> - Banking</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/01.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Bearded Wonder</a></h6>
                                                            <p class="mb-0">3 hours, 22 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 h6">12</td>
                                                <td class="col-lg-2 h6">3</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Pete Sariya</span>22
                                                        minutes ago <span class="text-primary"> - Comics</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/02.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Anna Mull</a></h6>
                                                            <p class="mb-0">3 hours, 20 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 h6">10</td>
                                                <td class="col-lg-2 h6">8</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Anna Mull</span>20
                                                        minutes ago <span class="text-primary"> - Community
                                                            Hangout</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/03.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Terry Aki</a></h6>
                                                            <p class="mb-0">3 hours, 18 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 h6">8</td>
                                                <td class="col-lg-2 h6">8</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Terry Aki</span>18
                                                        minutes ago <span class="text-primary">- Community</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/04.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Alex john</a></h6>
                                                            <p class="mb-0">2 hours, 16 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 h6">7</td>
                                                <td class="col-lg-2 h6">6</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Alex john</span>16
                                                        minutes ago <span class="text-primary"> - expenses</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/05.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Rock lai</a></h6>
                                                            <p class="mb-0">2 hours, 22 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 h6">6</td>
                                                <td class="col-lg-2 h6">4</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Rock lai</span>22
                                                        minutes ago <span class="text-primary"> - Banking</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/06.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Ira Membrit</a></h6>
                                                            <p class="mb-0">2 hours, 21 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 h6">5</td>
                                                <td class="col-lg-2 h6">4</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Ira Membrit</span>21
                                                        minutes ago <span class="text-primary"> - expenses</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/09.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Greta Life</a></h6>
                                                            <p class="mb-0">2 hours, 15 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 h6">6</td>
                                                <td class="col-lg-2 h6">4</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Greta Life</span>15
                                                        minutes ago <span class="text-primary"> - Comics</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/05.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Bearded Wonder</a></h6>
                                                            <p class="mb-0">3 hours, 22 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 h6">3</td>
                                                <td class="col-lg-2 h6">2</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Pete Sariya</span>22
                                                        minutes ago <span class="text-primary"> - Comics</span></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="likedtopic" role="tabpanel">
                        <div class="card">
                            <diiv class="card-body p-0">
                                <div class="table-responsive-lg">
                                    <table class="table forum-table mb-0 rounded">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>Activity</th>
                                                <th>Voices</th>
                                                <th>Replies</th>
                                                <th>Discussion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/09.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Greta Life</a></h6>
                                                            <p class="mb-0">2 hours, 15 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2">6</td>
                                                <td class="col-lg-2">4</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Greta Life</span>15
                                                        minutes ago <span class="text-primary"> - Comics</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/04.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Alex john</a></h6>
                                                            <p class="mb-0">2 hours, 16 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2">7</td>
                                                <td class="col-lg-2">6</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Alex john</span>16
                                                        minutes ago <span class="text-primary"> - expenses</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/01.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Bearded Wonder</a></h6>
                                                            <p class="mb-0">3 hours, 22 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2">12</td>
                                                <td class="col-lg-2">3</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Pete Sariya</span>22
                                                        minutes ago <span class="text-primary"> - Comics</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/02.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Anna Mull</a></h6>
                                                            <p class="mb-0">3 hours, 20 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2">10</td>
                                                <td class="col-lg-2">8</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Anna Mull</span>20
                                                        minutes ago <span class="text-primary"> - Community
                                                            Hangout</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/03.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Terry Aki</a></h6>
                                                            <p class="mb-0">3 hours, 18 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2">8</td>
                                                <td class="col-lg-2">8</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Terry Aki</span>18
                                                        minutes ago <span class="text-primary">- Community</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/04.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Alex john</a></h6>
                                                            <p class="mb-0">2 hours, 16 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2">7</td>
                                                <td class="col-lg-2">6</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Alex john</span>16
                                                        minutes ago <span class="text-primary"> - expenses</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/05.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Rock lai</a></h6>
                                                            <p class="mb-0">2 hours, 22 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2">6</td>
                                                <td class="col-lg-2">4</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Rock lai</span>22
                                                        minutes ago <span class="text-primary"> - Banking</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/06.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Ira Membrit</a></h6>
                                                            <p class="mb-0">2 hours, 21 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2">5</td>
                                                <td class="col-lg-2">4</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Ira Membrit</span>21
                                                        minutes ago <span class="text-primary"> - expenses</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/07.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Bob Frapples</a></h6>
                                                            <p class="mb-0">2 hours, 20 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2">4</td>
                                                <td class="col-lg-2">2</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Bob Frapples</span>20
                                                        minutes ago <span class="text-primary"> - Community
                                                            Hangout</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/08.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Paul Moliver</a></h6>
                                                            <p class="mb-0">2 hours, 18 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2">5</td>
                                                <td class="col-lg-2">3</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Paul Molive</span>18
                                                        minutes ago <span class="text-primary"> - Banking</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/09.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Greta Life</a></h6>
                                                            <p class="mb-0">2 hours, 15 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2">6</td>
                                                <td class="col-lg-2">4</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Greta Life</span>15
                                                        minutes ago <span class="text-primary"> - Comics</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">
                                                    <div class="d-flex align-items-center">
                                                        <img class="img-fluid rounded-circle avatar-40"
                                                            src="{{ asset('/images/user/05.jpg') }}" alt=""
                                                            loading="lazy">
                                                        <div class="media-body ms-3">
                                                            <h6 class=""><a href="#">Bearded Wonder</a></h6>
                                                            <p class="mb-0">3 hours, 22 minutes ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2">3</td>
                                                <td class="col-lg-2">2</td>
                                                <td class="col-lg-4">
                                                    <h6>There are many variations of passages.</h6>
                                                    <p class="mb-0"><span class="text-dark me-2">Pete Sariya</span>22
                                                        minutes ago <span class="text-primary"> - Comics</span></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </diiv>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>