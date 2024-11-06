<x-app-layout :isSubheader="true">
    <x-slot name="header">
        @include('components.profileheader', ['pageImage' => 'profile-bg5.jpg', 'pagetitle' => 'Your Photos',
        'id'=>"10"])
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="user-images position-relative overflow-hidden mb-3">
                    <a data-fslightbox="gallery" href="{{ asset('/images/page-img/51.jpg') }}">
                        <img src="{{ asset('/images/page-img/51.jpg') }}" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                    </a>
                    <div class="image-hover-data">
                        <div class="product-elements-icon">
                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                            thumb_up
                                        </i> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                            chat_bubble_outline
                                        </span> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                            forward
                                        </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                        drive_file_rename_outline
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="user-images position-relative overflow-hidden mb-3">
                    <a data-fslightbox="gallery" href="{{ asset('/images/page-img/52.jpg') }}">
                        <img src="{{ asset('/images/page-img/52.jpg') }}" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                    </a>
                    <div class="image-hover-data">
                        <div class="product-elements-icon">
                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                            thumb_up
                                        </i> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                            chat_bubble_outline
                                        </span> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                            forward
                                        </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                        drive_file_rename_outline
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="user-images position-relative overflow-hidden mb-3">
                    <a data-fslightbox="gallery" href="{{ asset('/images/page-img/53.jpg') }}">
                        <img src="{{ asset('/images/page-img/53.jpg') }}" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                    </a>
                    <div class="image-hover-data">
                        <div class="product-elements-icon">
                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                            thumb_up
                                        </i> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                            chat_bubble_outline
                                        </span> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                            forward
                                        </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                        drive_file_rename_outline
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="user-images position-relative overflow-hidden mb-3">
                    <a data-fslightbox="gallery" href="{{ asset('/images/page-img/54.jpg') }}">
                        <img src="{{ asset('/images/page-img/54.jpg') }}" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                    </a>
                    <div class="image-hover-data">
                        <div class="product-elements-icon">
                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                            thumb_up
                                        </i> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                            chat_bubble_outline
                                        </span> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                            forward
                                        </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                        drive_file_rename_outline
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="user-images position-relative overflow-hidden mb-3">
                    <a data-fslightbox="gallery" href="{{ asset('/images/page-img/55.jpg') }}">
                        <img src="{{ asset('/images/page-img/55.jpg') }}" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                    </a>
                    <div class="image-hover-data">
                        <div class="product-elements-icon">
                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                            thumb_up
                                        </i> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                            chat_bubble_outline
                                        </span> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                            forward
                                        </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                        drive_file_rename_outline
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="user-images position-relative overflow-hidden mb-3">
                    <a data-fslightbox="gallery" href="{{ asset('/images/page-img/56.jpg') }}">
                        <img src="{{ asset('/images/page-img/56.jpg') }}" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                    </a>
                    <div class="image-hover-data">
                        <div class="product-elements-icon">
                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                            thumb_up
                                        </i> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                            chat_bubble_outline
                                        </span> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                            forward
                                        </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                        drive_file_rename_outline
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="user-images position-relative overflow-hidden mb-3">
                    <a data-fslightbox="gallery" href="{{ asset('/images/page-img/57.jpg') }}">
                        <img src="{{ asset('/images/page-img/57.jpg') }}" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                    </a>
                    <div class="image-hover-data">
                        <div class="product-elements-icon">
                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                            thumb_up
                                        </i> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                            chat_bubble_outline
                                        </span> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                            forward
                                        </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                        drive_file_rename_outline
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="user-images position-relative overflow-hidden mb-3">
                    <a data-fslightbox="gallery" href="{{ asset('/images/page-img/58.jpg') }}">
                        <img src="{{ asset('/images/page-img/58.jpg') }}" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                    </a>
                    <div class="image-hover-data">
                        <div class="product-elements-icon">
                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                            thumb_up
                                        </i> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                            chat_bubble_outline
                                        </span> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                            forward
                                        </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                        drive_file_rename_outline
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="user-images position-relative overflow-hidden mb-3">
                    <a data-fslightbox="gallery" href="{{ asset('/images/page-img/59.jpg') }}">
                        <img src="{{ asset('/images/page-img/59.jpg') }}" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                    </a>
                    <div class="image-hover-data">
                        <div class="product-elements-icon">
                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                            thumb_up
                                        </i> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                            chat_bubble_outline
                                        </span> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                            forward
                                        </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                        drive_file_rename_outline
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="user-images position-relative overflow-hidden mb-3">
                    <a data-fslightbox="gallery" href="{{ asset('/images/page-img/60.jpg') }}">
                        <img src="{{ asset('/images/page-img/60.jpg') }}" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                    </a>
                    <div class="image-hover-data">
                        <div class="product-elements-icon">
                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                            thumb_up
                                        </i> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                            chat_bubble_outline
                                        </span> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                            forward
                                        </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                        drive_file_rename_outline
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="user-images position-relative overflow-hidden mb-3">
                    <a data-fslightbox="gallery" href="{{ asset('/images/page-img/61.jpg') }}">
                        <img src="{{ asset('/images/page-img/61.jpg') }}" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                    </a>
                    <div class="image-hover-data">
                        <div class="product-elements-icon">
                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                            thumb_up
                                        </i> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                            chat_bubble_outline
                                        </span> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                            forward
                                        </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                        drive_file_rename_outline
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="user-images position-relative overflow-hidden mb-3">
                    <a data-fslightbox="gallery" href="{{ asset('/images/page-img/62.jpg') }}">
                        <img src="{{ asset('/images/page-img/62.jpg') }}" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                    </a>
                    <div class="image-hover-data">
                        <div class="product-elements-icon">
                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                            thumb_up
                                        </i> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                            chat_bubble_outline
                                        </span> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                            forward
                                        </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                        drive_file_rename_outline
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="user-images position-relative overflow-hidden mb-3">
                    <a data-fslightbox="gallery" href="{{ asset('/images/page-img/63.jpg') }}">
                        <img src="{{ asset('/images/page-img/63.jpg') }}" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                    </a>
                    <div class="image-hover-data">
                        <div class="product-elements-icon">
                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                            thumb_up
                                        </i> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                            chat_bubble_outline
                                        </span> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                            forward
                                        </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                        drive_file_rename_outline
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="user-images position-relative overflow-hidden mb-3">
                    <a data-fslightbox="gallery" href="{{ asset('/images/page-img/64.jpg') }}">
                        <img src="{{ asset('/images/page-img/64.jpg') }}" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                    </a>
                    <div class="image-hover-data">
                        <div class="product-elements-icon">
                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                            thumb_up
                                        </i> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                            chat_bubble_outline
                                        </span> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                            forward
                                        </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                        drive_file_rename_outline
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="user-images position-relative overflow-hidden mb-3">
                    <a data-fslightbox="gallery" href="{{ asset('/images/page-img/65.jpg') }}">
                        <img src="{{ asset('/images/page-img/65.jpg') }}" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                    </a>
                    <div class="image-hover-data">
                        <div class="product-elements-icon">
                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                            thumb_up
                                        </i> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                            chat_bubble_outline
                                        </span> </a>
                                </li>
                                <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                            forward
                                        </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                        drive_file_rename_outline
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>