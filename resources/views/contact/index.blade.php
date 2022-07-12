@extends('layouts.base')

@section('content')
    <div class="container-fluid my-3">
        <div class="row">
            @if(session('success'))
                <div class="alert alert-success">
                    <p class="text-center mx-auto">{{ session('success') }}</p>
                </div>
            @endif
            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
        </div>
    </div>


    <!-- formulaire de contact -->
    <div class="w-full">
        <div class="bg-gradient-to-b from-indigo-200 to-indogo-600 h-96"></div>
        <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">
            <div class="bg-white w-full shadow rounded p-8 sm:p-12 -mt-72">
                <p class="text-3xl font-bold leading-7 text-center">NOUS CONTACTER</p>
                <form  method="post"  action="{{ route('contact.send') }}" enctype="multipart/form-data" >
                    @csrf
                    <x-honeypot />

                    <!--nom-->
                    <div class="md:flex items-center mt-8">
                        <div class="w-full flex flex-col">
                            <label class="font-semibold leading-none">Votre nom</label>
                            <input type="text" name="name" id="name" placeholder="John Doe"
                                   value="{!! old('name' ?? '') !!}" min="2" required
                                   class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200"/>
                        </div>
                    </div>
                    @error('name')
                    <div class="error text-danger mt-2">{{ $error='Vous devez entrer votre nom' }}</div>
                    @enderror
                    <!--email-->
                    <div class="md:flex items-center mt-8">
                        <div class="w-full flex flex-col">
                            <label class="font-semibold leading-none">Email</label>
                            <input type="email" name="email" id="email" placeholder="supermail@localhost.com" value="{!! old('email' ?? '') !!}" min="2" required
                                   class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200"/>
                        </div>
                        <br>
                    </div>
                    @error('email')
                    <div class="error text-danger mt-2">{{ $error='Vous devez entrer votre adresse email' }}</div>
                    @enderror
                    <!--sujet-->
                    <div class="md:flex items-center mt-8">
                        <div class="w-full flex flex-col">
                            <label class="font-semibold leading-none">Sujet du message</label>
                            <input type="text"  name="subject"  placeholder="Sujet de votre message ?" value="{!! old('subject' ?? '') !!}" id="subject" min="4" required
                                   class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200"/>
                        </div>
                    </div>
                    @error('subject')
                    <div class="error text-danger mt-2">{{ $error='Vous devez entrer un sujet de message' }}</div>
                    @enderror
                    <!--message-->
                    <div>
                        <div class="w-full flex flex-col mt-8">
                            <label class="font-semibold leading-none">Votre message</label>
                            <textarea type="text" name="message" id="message" rows="4" min="10" placeholder="Votre super message" required class="h-40 text-base leading-none text-gray-900 p-3
                                focus:oultine-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200">
                                    {!! old('message' ?? '') !!}
                            </textarea>
                        </div>
                    </div>
                    @error('message')
                    <div class="error text-danger mt-2">{{ $error='Vous devez entrer un message' }}</div>
                    @enderror


                    <div>
                        <div class="w-full flex flex-col mt-8">
                            <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
                                <label for="captcha" class="col-12 control-label">Veuillez remplir le captcha pour envoyer le message</label>
                                <div class="col-md-12">
                                    <div class="captcha my-3">
                                        <span>{!! captcha_img() !!}</span>
                                        <button type="button"class="btn hover:bg-indigo-400 btn-lg text-white bg-indigo-600 btn-refresh mt-3">
                                            <i class="fa fa-refresh"></i>
                                        </button>
                                    </div>
                                    <input id="captcha" type="text" class="form-control" placeholder="Entrer le captcha" name="captcha" required>
                                    <div class="mt-3">
                                        @if ($errors->has('captcha'))
                                            <span class="help-block mt-5 text-danger">
                                                   <strong>{{ $errors->first('captcha') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="flex items-center justify-center w-full">
                        <button type="submit" name="send"
                            class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-indigo-600 rounded hover:bg-indigo-400
                                focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none">
                            ENVOYER <i class="pl-2 fa-solid fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script type="text/javascript">


        $(".btn-refresh").click(function(){
            $.ajax({
                type:'GET',
                url:'/refresh_captcha',
                success:function(data){
                    $(".captcha span").html(data.captcha);
                }
            });
        });


    </script>


@endsection
