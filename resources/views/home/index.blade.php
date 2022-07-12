@extends('layouts.base')

@section('content')

    <!--section page accueil start-->

    <section class="section-accueil container-fluid mx-0 mt-5">

        <!--bloc 1 start-->
        <div class="accueil-child-1 container-fluid">

            <div
                class="row">

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
                    <p class="text-left mx-auto d-flex flex-column justify-content-center align-items-center text-uppercase text-xl">
                        Bienvenue !
                    </p>
                </div>

                <!--bloc gauche-->
                <div class="accueil-child-1-item-left col-12 col-sm-12 col-md-8 col-lg-7 col-xl-5 d-flex flex-column justify-content-center align-items-center mx-auto">

                    <!--script texte défillant-->
                    <p class="text-left mx-auto d-flex flex-column justify-content-center align-items-center mt-1 h4">
                        <span class="text-iam display-5 mt-4" id="app"></span>
                    </p>

                    <script>
                        var app = document.getElementById('app');
                        var typewriter = new Typewriter(app, {loop: true});
                        typewriter.typeString("Je suis").pauseFor(900).deleteAll()
                            .typeString("WEB DÉVELOPPEUR").pauseFor(900).deleteAll()
                            .typeString("PENTESTER AUTODIDACTE").pauseFor(900).deleteAll()
                            .typeString("AMATEUR D\'ADMINSYS").pauseFor(900).deleteAll()
                            .start();
                    </script>
                    <!--script texte défillant/-->

                    <div class="mx-auto justify-content-center align-items-center mt-5">
                        <figure class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-10 mx-auto text-center">
                            <img src="{{ asset('assets/img/avatar.png') }}" alt="avatar Eosia développeur" loading="lazy" class="img-fluid img-avatar rounded-circle">

                            <figcaption class="hidden">
                                avatar Eosia développeur
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <!--bloc droit-->
                <div class="accueil-child-1-item-right col-12 col-sm-12 col-md-8 col-lg-7 col-xl-5 mx-auto d-flex flex-column justify-content-between align-items-center">
                    <div class="accueil-child-2 mt-5 mb-2">
                        <div class="accueil-child-2-item text-l d-flex flex-column">


                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-end align-items-center mb-3">
                                <p class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-justify">
                                    J'ai d'abord commencé à me former aux bases du pentesting via des plateformes d-E-learning comme Udemy ou Alphorm,
                                    ce qui m'a permis d'évoluer en autodidacte pour acquérir de solides bases.
                                </p>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-end align-items-center">
                                <p class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-justify">
                                    Ensuite, j'ai complété cet apprentissage par une année en web designer à l'IEPS de Fléron puis un B.E.S. de web développeur à
                                    l'IPEPS de Seraing ou j'ai validé mon diplôme avec "Distinction".
                                </p>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 my-3 d-flex justify-content-start align-items-center">
                                <p class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-justify">
                                    Lors de mon cursus orienté web, j'ai eu l'occasion de travailler avec des frameworks tel que Angular, Vue JS, Livewire en frontend ainsi que
                                    Symfony et Laravel en backend, ce qui m'a donné une facilité à travailler tant coté frontend que backend.
                                </p>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 my-3 d-flex justify-content-start align-items-center">
                                <p class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-justify">
                                    Mon affinité va cependant vers Laravel avec lequel je travaille principalement pour mes projets personnels.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!--bloc 1 end-->

        <div class="container-btn container-fluid">

            <div class="row">

                <a class="col-12 col-sm-12 col-md-10 col-lg-5 col-xl-4 btn-home mx-auto text-uppercase btn text-l" href="{{ route('skills') }}" rel="noopener noreferrer nofollow" title="voir mes compétences">
                    Voir mes compétences
                </a>

                <a class="col-12 col-sm-12 col-md-10 col-lg-5 col-xl-4 btn-home text-uppercase mx-auto btn btn-portfolio text-l" href="{{ route('portfolio') }}" rel="noopener noreferrer nofollow" title="voir mon portfolio">
                    Voir mon portfolio
                </a>

            </div>

        </div>


    </section>

    <!--section page accueil stop-->

@endsection
