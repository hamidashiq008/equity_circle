<x-app-layout :isSubheader="true">
    <x-slot name="header">
        @include('components.profileheader', ['pageImage' => 'profile-bg6.jpg', 'pagetitle' => 'Your Events',
        'id'=>"10"])
    </x-slot>

    <div class="container">
        <div class="d-grid gap-3 d-grid-template-1fr-19">
            <div class="">
                <div class="card rounded  mb-0">
                    <div class="event-images">
                        <a href="#">
                            <img src="{{ asset('/images/page-img/51.jpg') }}" class="img-fluid" alt="Responsive image" loading="lazy">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="date-of-event">
                                <span>Jan</span>
                                <h5>01</h5>
                            </div>
                            <div class="events-detail ms-3">
                                <h5><a href="eventdetail">New Year celebration</a></h5>
                                <p>Lorem Ipsum is simply dummy text</p>
                                <div class="event-member">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/05.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/06.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/07.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/08.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/09.jpg') }}" alt="" loading="lazy">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card rounded  mb-0">
                    <div class="event-images">
                        <a href="#">
                            <img src="{{ asset('/images/page-img/52.jpg') }}" class="img-fluid" alt="Responsive image" loading="lazy">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="date-of-event">
                                <span>Jan</span>
                                <h5>24</h5>
                            </div>
                            <div class="events-detail ms-3">
                                <h5><a href="eventdetail">Birthday celebration</a></h5>
                                <p>Lorem Ipsum is simply dummy text</p>
                                <div class="event-member">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/05.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/06.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/07.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/08.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/09.jpg') }}" alt="" loading="lazy">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card mb-0 rounded ">
                    <div class="event-images">
                        <a href="#">
                            <img src="{{ asset('/images/page-img/53.jpg') }}" class="img-fluid" alt="Responsive image" loading="lazy">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="date-of-event">
                                <span>Jan</span>
                                <h5>26</h5>
                            </div>
                            <div class="events-detail ms-3">
                                <h5><a href="eventdetail">Republic Day</a></h5>
                                <p>Lorem Ipsum is simply dummy text</p>
                                <div class="event-member">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/05.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/06.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/07.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/08.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/09.jpg') }}" alt="" loading="lazy">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card mb-0 rounded ">
                    <div class="event-images">
                        <a href="#">
                            <img src="{{ asset('/images/page-img/54.jpg') }}" class="img-fluid" alt="Responsive image" loading="lazy">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="date-of-event">
                                <span>Feb</span>
                                <h5>04</h5>
                            </div>
                            <div class="events-detail ms-3">
                                <h5><a href="eventdetail">Meetings & Conventions</a></h5>
                                <p>Lorem Ipsum is simply dummy text</p>
                                <div class="event-member">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/05.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/06.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/07.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/08.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/09.jpg') }}" alt="" loading="lazy">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card mb-0 rounded ">
                    <div class="event-images">
                        <a href="#">
                            <img src="{{ asset('/images/page-img/55.jpg') }}" class="img-fluid" alt="Responsive image" loading="lazy">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="date-of-event">
                                <span>Mar</span>
                                <h5>01</h5>
                            </div>
                            <div class="events-detail ms-3">
                                <h5><a href="eventdetail">Fun Events and Festivals </a></h5>
                                <p>Lorem Ipsum is simply dummy text</p>
                                <div class="event-member">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/05.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/06.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/07.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/08.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/09.jpg') }}" alt="" loading="lazy">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card mb-0 rounded ">
                    <div class="event-images">
                        <a href="#">
                            <img src="{{ asset('/images/page-img/56.jpg') }}" class="img-fluid" alt="Responsive image" loading="lazy">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="date-of-event">
                                <span>Mar</span>
                                <h5>10</h5>
                            </div>
                            <div class="events-detail ms-3">
                                <h5><a href="eventdetail">Atlanta Retail Show</a></h5>
                                <p>Lorem Ipsum is simply dummy text</p>
                                <div class="event-member">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/05.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/06.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/07.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/08.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/09.jpg') }}" alt="" loading="lazy">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card rounded ">
                    <div class="event-images">
                        <a href="#">
                            <img src="{{ asset('/images/page-img/57.jpg') }}" class="img-fluid" alt="Responsive image" loading="lazy">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="date-of-event">
                                <span>Mar</span>
                                <h5>14</h5>
                            </div>
                            <div class="events-detail ms-3">
                                <h5><a href="eventdetail">Holi in the City</a></h5>
                                <p>Lorem Ipsum is simply dummy text</p>
                                <div class="event-member">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/05.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/06.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/07.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/08.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/09.jpg') }}" alt="" loading="lazy">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card rounded ">
                    <div class="event-images">
                        <a href="#">
                            <img src="{{ asset('/images/page-img/58.jpg') }}" class="img-fluid" alt="Responsive image" loading="lazy">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="date-of-event">
                                <span>Mar</span>
                                <h5>16</h5>
                            </div>
                            <div class="events-detail ms-3">
                                <h5><a href="eventdetail">Insurance Innovators</a></h5>
                                <p>Lorem Ipsum is simply dummy text</p>
                                <div class="event-member">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/05.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/06.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/07.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/08.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/09.jpg') }}" alt="" loading="lazy">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card rounded ">
                    <div class="event-images">
                        <a href="#">
                            <img src="{{ asset('/images/page-img/59.jpg') }}" class="img-fluid" alt="Responsive image" loading="lazy">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="date-of-event">
                                <span>Apr</span>
                                <h5>12</h5>
                            </div>
                            <div class="events-detail ms-3">
                                <h5><a href="eventdetail">BIG 5G Event</a></h5>
                                <p>Lorem Ipsum is simply dummy text</p>
                                <div class="event-member">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/05.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/06.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/07.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/08.jpg') }}" alt="" loading="lazy">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/images/user/09.jpg') }}" alt="" loading="lazy">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
