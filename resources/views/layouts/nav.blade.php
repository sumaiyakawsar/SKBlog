 <nav class=" flex items-center justify-between px-4 py-4 mx-auto w-11/12 ">

     <div class="flex flex-1 items-center space-x-8  ">
         <a class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-400 no-underline " href="/">Home</a>
         <a class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-400 no-underline " href="/blog">Blog</a>
     </div>

     <a href="{{ url('/') }}" class="text-lg flex-1 font-semibold text-gray-100 no-underline mx-auto tracking-wide uppercase text-center">
         {{ config('app.name', 'SBlog') }}
     </a>



     <div class="flex mr-0 items-center justify-end flex-1 space-x-8">
         @guest
         <a class="
         inline-flex items-center justify-center h-10 px-3 font-medium text-white transition duration-200 rounded shadow-md bg-green-400 hover:bg-green-900
         
             " href="{{ route('login') }}">
             <!--            {{ __('Login') }} -->
             <span class="material-icons">
                 login
             </span>
         </a>

         @if (Route::has('register'))
         <a class="inline-flex items-center justify-center h-10 px-4 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-green-400 hover:bg-green-900 " href="{{ route('register') }}">
            {{ __('Register') }}
        </a>
         @endif
         @else
         <a href="/profile" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-400 no-underline ">{{ Auth::user()->name }}</a>

         <a href="{{ route('logout') }}" class="inline-flex items-center justify-center h-10 px-6 font-medium text-white transition duration-200 rounded shadow-md bg-green-400 hover:bg-green-900 " onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
             <!--  {{ __('Logout') }} -->
             <span class="material-icons">
                 logout
             </span>
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
             {{ csrf_field() }}
         </form>
         @endguest

     </div>

 </nav>