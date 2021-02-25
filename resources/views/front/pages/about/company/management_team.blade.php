@extends('front.layout')

@section('css')
<link rel="stylesheet" href="https://fonts.google.com/specimen/Oswald?preview.text_type=custom&selection.family=Oswald:wght@500">
@endsection

@section('main')
    <!--Komil Sobitov/ Team Management -->
    <div class="my-10">
        <h1 class="text-blue-700 text-2xl md:text-4xl  font-extrabold">{{ _trans('Management Team') }}</h1>
        <div class="flex flex-wrap mx-1 overflow-hidden justify-center items-start xl:-mx-2">
            {{-- @foreach ($teams as $team)
                  <div class="my-1 px-1 w-full overflow-hidden sm:w-1/2 md:w-1/2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/3">
                    <img src="/uploads/teams/{{ $team->image ?? asset('images/default-image.png') }}"
                        class="w-36 mb-3 mx-auto" />
                    <p class="text-gray-900 font-bold text-base tracking-wide text-xl mb-3 text-center">
                        {{ $team->name }}
                    </p>
                    <p class="text-gray-400 text-lg text-center">
                        {{ $team->job }}
                    </p>
                    <p class="font-normal text-lg text-gray-700 tracking-wide mt-3">
                        {{ $team->description }}
                    </p>
                </div>  
            @endforeach --}}
            <label class="font-bold text-xl pr-2" for="technology">Industries:</label>
            {{-- <div class="grid grid-cols-1 items-center">
                <div x-data="{open:false}"
                    class="p-2 border-none relative outline-none bg-transparent text-blue-500 text-xl font-bold" name="industry" id="industry">
                    <div class="text-blue-400 w-60 cursor-pointer flex justify-between items-center">All <i class="fas fa-chevron-down"></i></div>
                    <ul x-show="open" class="absolute border border-gray-200 bg-white z-30">
                        <a href="">
                            <li class="text-black hover:bg-blue-400 hover:text-white duration-100 px-5 py-1">
                            </li>
                        </a>
                    </ul>
                </div>
            </div> --}}
            <div class="grid grid-cols-4 gap-5">
                <div>
                    <a href="linkedin">
                        <img src="" alt="">
                        <div class="hover:text-red-700 uppercase">
                            <h1 class="text-xl font-normal">Mike santoro</h1>
                            <h1 class="text-xl font-normal">CEO</h1>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="linkedin">
                        <img src="" alt="">
                            <div class="hover:text-red-700 uppercase">
                            <h1 class="text-xl font-normal">Mike santoro</h1>
                            <h1 class="text-xl font-normal">CEO</h1>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="linkedin">
                        <img src="" alt="">
                        <div class="hover:text-red-700 uppercase">
                            <h1 class="text-xl font-normal">Mike santoro</h1>
                            <h1 class="text-xl font-normal">CEO</h1>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="linkedin">
                        <img src="data:image/jpeg;base64,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" alt="">
                        <div class="hover:text-red-700 uppercase">
                            <h1 class="text-xl font-normal">Mike santoro</h1>
                            <h1 class="text-xl font-normal">CEO</h1>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
 <script>
window.replainSettings = { id: '4bd73f5f-79dd-4aee-b496-a833dfe09fea' };
(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>
@endsection
