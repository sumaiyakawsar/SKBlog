 @extends('layouts.app')

@section('content')

<div class="background-image bg-center bg-fixed bg-no-repeat bg-cover h-screen grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14  ">
                Do you want to become a developer?
            </h1>
            <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                Read More
            </a>
        </div>
    </div>
</div>

<div class="text-center py-16">
    <span class="uppercase text-s text-gray-400">
        Blog
    </span>
    <h2 class="text-4xl font-bold py-10 text-white">
        Recent Posts
    </h2>

    <p class="m-auto w-4/5 text-gray-500">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, qui, animi reprehenderit architecto pariatur laborum quis omnis asperiores ad minima similique quo nemo voluptate nesciunt cumque ratione expedita. Quae, qui.
    </p>
</div>

<div class="background-image bg-center bg-fixed bg-cover bg-no-repeat  px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-10  ">
    <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full ">
        @foreach ($posts as $post)
        <div class="overflow-hidden transition-shadow duration-300 bg-white bg-opacity-75 bg-clip-padding backdrop-blur-xl shadow-sm rounded-xl">

            <img src="{{ asset('images/' . $post->image_path) }}" class="object-cover w-full h-64" alt="" />

            <div class="p-5 border border-t-0 ">
                <p class="mb-3 text-xs font-semibold tracking-wide uppercase">By
                    <a href="/" class="transition-colors duration-200 hover:text-purple-700 font-bold italic text-gray-800" aria-label="Category" >
                          
                            {{ $post->user->name }}
                         
                    </a>
                    <span class="text-gray-600">— {{ date('jS M Y', strtotime($post->updated_at)) }}</span>
                </p>

                <a href="/blog/{{ $post->slug }}" aria-label="Category" class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-purple-700 text-gray-700 "> {{ $post->title }}
                </a>

                <p class="mb-2 truncate text-gray-700 text-xl py-5 leading-8 font-light">
                    {{ $post->description }}
                </p>

                <a href="/blog/{{ $post->slug }}" class="inline-flex items-center uppercase bg-green-500 text-base   font-extrabold py-4 px-8 rounded-3xl transition-colors duration-200 text-white hover:bg-green-700">
                    Keep Reading
                </a>
            </div>
        </div>
        @endforeach



    </div>
</div>
 

 
 
@endsection
