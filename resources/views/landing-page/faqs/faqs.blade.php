@extends('layout.main')

@section('container')
    {{-- Hero --}}
    <div class="d-flex flex-column col-md-12">
        <img src="image/Hero_Banner_2.png" class="img-fluid" alt="">
    </div>

    {{-- Content --}}
    <div class="justify-content-center text-center py-5 width-90">
        <h3 class=" text-primary-color">Pertanyaan yang Sering Muncul</h3>
        <p class="col-0 col-md-9 mx-auto">Lorem ipsum dolor sit amet consectetur. Habitasse quam ultrices porttitor ullamcorper aliquet commodo. Orci aliquet vitae sed amet maecenas enim sed in. Volutpat sagittis nibh tristique neque. </p>
        <div class="container py-4 text-center">
            <div class="row row-cols-1 row-cols-md-2 gx-5">

                {{-- Collaps 1 --}}
                <div class="col-0 col-md-5 mx-auto">
                    
                    {{-- Collaps --}}
                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-light text-primary-color border border-info d-flex align-items-center rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1"
                            aria-expanded="false" aria-controls="collapseExample1" onclick="toggleIcon('toggleIcon1')">
                            <i class="bi bi-plus fs-2 fw-bold" id="toggleIcon1"></i>
                            <p class="my-auto ms-4 text-dark">Bagaimana cara melihat tarif elf?</p>
                        </button>
                    </div>
                    <div class="collapse" id="collapseExample1">
                        <div class="container text-start mt-3">
                            Lorem ipsum dolor sit amet consectetur. Habitasse quam ultrices porttitor ullamcorper aliquet commodo. Orci aliquet vitae sed amet maecenas enim sed in. Volutpat sagittis nibh tristique neque. Ultrices sed urna interdum etiam. Enim est egestas dolor a purus bibendum accumsan.
                        </div>
                    </div>
                    {{-- endCollaps --}}

                    {{-- Collaps --}}
                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-light text-primary-color border border-info d-flex align-items-center rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2"
                            aria-expanded="false" aria-controls="collapseExample2" onclick="toggleIcon('toggleIcon2')">
                            <i class="bi bi-plus fs-2 fw-bold" id="toggleIcon2"></i>
                            <p class="my-auto ms-4 text-dark">Bagaimana cara melihat tarif elf?</p>
                        </button>
                    </div>
                    <div class="collapse" id="collapseExample2">
                        <div class="container text-start mt-3">
                            Lorem ipsum dolor sit amet consectetur. Habitasse quam ultrices porttitor ullamcorper aliquet commodo. Orci aliquet vitae sed amet maecenas enim sed in. Volutpat sagittis nibh tristique neque. Ultrices sed urna interdum etiam. Enim est egestas dolor a purus bibendum accumsan.
                        </div>
                    </div>
                    {{-- endCollaps --}}

                    {{-- Collaps --}}
                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-light text-primary-color border border-info d-flex align-items-center rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3"
                            aria-expanded="false" aria-controls="collapseExample3" onclick="toggleIcon('toggleIcon3')">
                            <i class="bi bi-plus fs-2 fw-bold" id="toggleIcon3"></i>
                            <p class="my-auto ms-4 text-dark">Bagaimana cara melihat tarif elf?</p>
                        </button>
                    </div>
                    <div class="collapse" id="collapseExample3">
                        <div class="container text-start mt-3">
                            Lorem ipsum dolor sit amet consectetur. Habitasse quam ultrices porttitor ullamcorper aliquet commodo. Orci aliquet vitae sed amet maecenas enim sed in. Volutpat sagittis nibh tristique neque. Ultrices sed urna interdum etiam. Enim est egestas dolor a purus bibendum accumsan.
                        </div>
                    </div>
                    {{-- endCollaps --}}

                    {{-- Collaps --}}
                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-light text-primary-color border border-info d-flex align-items-center rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4"
                            aria-expanded="false" aria-controls="collapseExample4" onclick="toggleIcon('toggleIcon4')">
                            <i class="bi bi-plus fs-2 fw-bold" id="toggleIcon4"></i>
                            <p class="my-auto ms-4 text-dark">Bagaimana cara melihat tarif elf?</p>
                        </button>
                    </div>
                    <div class="collapse" id="collapseExample4">
                        <div class="container text-start mt-3">
                            Lorem ipsum dolor sit amet consectetur. Habitasse quam ultrices porttitor ullamcorper aliquet commodo. Orci aliquet vitae sed amet maecenas enim sed in. Volutpat sagittis nibh tristique neque. Ultrices sed urna interdum etiam. Enim est egestas dolor a purus bibendum accumsan.
                        </div>
                    </div>
                    {{-- endCollaps --}}

                    {{-- Collaps --}}
                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-light text-primary-color border border-info d-flex align-items-center rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample5"
                            aria-expanded="false" aria-controls="collapseExample5" onclick="toggleIcon('toggleIcon5')">
                            <i class="bi bi-plus fs-2 fw-bold" id="toggleIcon5"></i>
                            <p class="my-auto ms-4 text-dark">Bagaimana cara melihat tarif elf?</p>
                        </button>
                    </div>
                    <div class="collapse" id="collapseExample5">
                        <div class="container text-start mt-3">
                            Lorem ipsum dolor sit amet consectetur. Habitasse quam ultrices porttitor ullamcorper aliquet commodo. Orci aliquet vitae sed amet maecenas enim sed in. Volutpat sagittis nibh tristique neque. Ultrices sed urna interdum etiam. Enim est egestas dolor a purus bibendum accumsan.
                        </div>
                    </div>
                    {{-- endCollaps --}}

                </div>
                {{-- endCollaps 1 --}}

                {{-- Collaps 2 --}}
                <div class="col-0 col-md-5 mx-auto">
                        {{-- Collaps --}}
                        <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-light text-primary-color border border-info d-flex align-items-center rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample6"
                            aria-expanded="false" aria-controls="collapseExample6" onclick="toggleIcon('toggleIcon6')">
                            <i class="bi bi-plus fs-2 fw-bold" id="toggleIcon6"></i>
                            <p class="my-auto ms-4 text-dark">Bagaimana cara melihat tarif elf?</p>
                        </button>
                        </div>
                        <div class="collapse" id="collapseExample6">
                            <div class="container text-start mt-3">
                                Lorem ipsum dolor sit amet consectetur. Habitasse quam ultrices porttitor ullamcorper aliquet commodo. Orci aliquet vitae sed amet maecenas enim sed in. Volutpat sagittis nibh tristique neque. Ultrices sed urna interdum etiam. Enim est egestas dolor a purus bibendum accumsan.
                            </div>
                        </div>
                        {{-- endCollaps --}}

                        {{-- Collaps --}}
                        <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-light text-primary-color border border-info d-flex align-items-center rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample7"
                            aria-expanded="false" aria-controls="collapseExample7" onclick="toggleIcon('toggleIcon7')">
                            <i class="bi bi-plus fs-2 fw-bold" id="toggleIcon7"></i>
                            <p class="my-auto ms-4 text-dark">Bagaimana cara melihat tarif elf?</p>
                        </button>
                        </div>
                        <div class="collapse" id="collapseExample7">
                            <div class="container text-start mt-3">
                                Lorem ipsum dolor sit amet consectetur. Habitasse quam ultrices porttitor ullamcorper aliquet commodo. Orci aliquet vitae sed amet maecenas enim sed in. Volutpat sagittis nibh tristique neque. Ultrices sed urna interdum etiam. Enim est egestas dolor a purus bibendum accumsan.
                            </div>
                        </div>
                        {{-- endCollaps --}}

                        {{-- Collaps --}}
                        <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-light text-primary-color border border-info d-flex align-items-center rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample8"
                            aria-expanded="false" aria-controls="collapseExample8" onclick="toggleIcon('toggleIcon8')">
                            <i class="bi bi-plus fs-2 fw-bold" id="toggleIcon8"></i>
                            <p class="my-auto ms-4 text-dark">Bagaimana cara melihat tarif elf?</p>
                        </button>
                        </div>
                        <div class="collapse" id="collapseExample8">
                            <div class="container text-start mt-3">
                                Lorem ipsum dolor sit amet consectetur. Habitasse quam ultrices porttitor ullamcorper aliquet commodo. Orci aliquet vitae sed amet maecenas enim sed in. Volutpat sagittis nibh tristique neque. Ultrices sed urna interdum etiam. Enim est egestas dolor a purus bibendum accumsan.
                            </div>
                        </div>
                        {{-- endCollaps --}}

                        {{-- Collaps --}}
                        <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-light text-primary-color border border-info d-flex align-items-center rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample9"
                            aria-expanded="false" aria-controls="collapseExample9" onclick="toggleIcon('toggleIcon9')">
                            <i class="bi bi-plus fs-2 fw-bold" id="toggleIcon9"></i>
                            <p class="my-auto ms-4 text-dark">Bagaimana cara melihat tarif elf?</p>
                        </button>
                        </div>
                        <div class="collapse" id="collapseExample9">
                            <div class="container text-start mt-3">
                                Lorem ipsum dolor sit amet consectetur. Habitasse quam ultrices porttitor ullamcorper aliquet commodo. Orci aliquet vitae sed amet maecenas enim sed in. Volutpat sagittis nibh tristique neque. Ultrices sed urna interdum etiam. Enim est egestas dolor a purus bibendum accumsan.
                            </div>
                        </div>
                        {{-- endCollaps --}}

                        {{-- Collaps --}}
                        <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-light text-primary-color border border-info d-flex align-items-center rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample10"
                            aria-expanded="false" aria-controls="collapseExample10" onclick="toggleIcon('toggleIcon10')">
                            <i class="bi bi-plus fs-2 fw-bold" id="toggleIcon10"></i>
                            <p class="my-auto ms-4 text-dark">Bagaimana cara melihat tarif elf?</p>
                        </button>
                        </div>
                        <div class="collapse" id="collapseExample10">
                            <div class="container text-start mt-3">
                                Lorem ipsum dolor sit amet consectetur. Habitasse quam ultrices porttitor ullamcorper aliquet commodo. Orci aliquet vitae sed amet maecenas enim sed in. Volutpat sagittis nibh tristique neque. Ultrices sed urna interdum etiam. Enim est egestas dolor a purus bibendum accumsan.
                            </div>
                        </div>
                        {{-- endCollaps --}}
                </div>

                {{-- endCollaps 2 --}}
            </div>
        </div>
    </div>
    {{-- endContent --}}

    <!-- script change + t - -->
    <script>
        function toggleIcon(iconId) {
            var toggleIcon = document.getElementById(iconId);
            toggleIcon.classList.toggle('bi-plus');
            toggleIcon.classList.toggle('bi-dash');
        }
    </script>

@endsection
