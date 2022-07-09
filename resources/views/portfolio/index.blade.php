@extends('layouts.base')

@section('content')

     <section class="section-portfolio container-fluid mx-0 mt-3">

         <div class="row mx-auto">

             <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 my-3">
                 <h3 class="text-uppercase text-center mx-auto text-xl">
                     Mon portfolio
                 </h3>
             </div>

         </div>


         <div class="row mx-auto">
             @foreach($sites as $site)

             <div class="mx-auto col-11 col-sm-10 col-md-6 col-lg-6 col-xl-4">
                 <div class="card-skill card mx-auto col-11 col-sm-10 col-md-12 col-lg-12 col-xl-12">
                     <div class="col-12 my-2">
                         <h5 class="card-portfolio card-title text-uppercase mx-auto text-center color1 font3">
                             {{ $site->name }}
                         </h5>
                     </div>
                     <img src="{{ asset('storage/'.$site->image) }}" loading="lazy" class="card-img-top"
                          alt="{{ $site->name }}">

                     <div class="card-body col-12">


                         <div class="mt-3 row">

                             <a class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 btn-site text-uppercase mx-auto btn"
                                href="{{ $site->url }}" target="_blank" rel="noopener noreferrer nofollow" title="voir le site en ligne">
                                 Voir
                             </a>

                             <a class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 btn-site mt-3 text-uppercase mx-auto btn"
                                href="{{ $site->code }}" target="_blank" rel="noopener noreferrer nofollow" title="voir le code du projet">
                                 Code
                             </a>

                         </div>


                     </div>
                 </div>
             </div>
             @endforeach
         </div>

     </section>




@endsection
