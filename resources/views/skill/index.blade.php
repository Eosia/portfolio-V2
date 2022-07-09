@extends('layouts.base')

@section('content')

    <!--section page skills start-->

    <section class="section-skills container-fluid mx-0 mt-3">

        <div class="row mx-auto">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 my-3">
                <h3 class="text-uppercase text-center mx-auto text-xl">
                    Mes compétences
                </h3>
            </div>

        </div>

        <div class="container-fluid mx-auto">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-2">

                @foreach($categories as $category)

                {{-- nom de la categorie start --}}
                <div class="row my-1">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
                        <div class="separation my-2"></div>
                        <h4 class="text-uppercase text-center">
                            {{ $category->name }}
                        </h4>
                        <div class="separation my-2"></div>
                    </div>
                </div>
                {{-- nom de la categorie /--}}
                <div class="row mx-auto">
                    @foreach($category->skills->sortBy("name") as $skill)

                    <div class="mx-auto col-12 col-sm-12 col-md-6 col-lg-5 col-xl-4">
                        <div class="card-skill card mx-auto col-11 col-sm-10 col-md-10 col-lg-11 col-xl-10">

                            <i class="{{ $skill->logo }} fa-5x color1 card-img-top mx-auto text-center"
                               aria-hidden="true">
                            </i>

                            <div class="card-body col-12">

                                <h5 class="card-title text-uppercase mx-auto text-center color1 font1 font-skills">{{ $skill->name }}</h5>

                                <div class="progress card-text mt-3">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                         role="progressbar"
                                         aria-valuenow="{{ $skill->level }}" aria-valuemin="0" aria-valuemax="100"
                                         style="width: {{ $skill->level }}%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
