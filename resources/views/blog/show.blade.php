@extends('layouts.app')

@section('content')

@if (session()->has('message'))
<div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
    <div class="flex">
      <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
      <div>
        <p class="font-bold"></p>
        <p class="text-sm "><h2>{{ session()->get('message') }}</h2></p>
      </div>
    </div>
</div>
@endif
    

<div class="container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-bold">{{ $post->title }}</h1>
</div>


<div class="container m-auto px-10 mt-5 md-5 pt-15 pb-5">

    <div class="flex h-96">
        <img class="object-cover w-full" src="/images/{{ $post -> image_path }}" alt="">
    </div>

    <p class="text-l text-gray-700 py-8 leading-6">
        {{ $post -> description }}
    </p>
    
    <div class="mt-2">
        By: <span class="text-gray-500 italic">{{ $post->user->name }}</span><br> 
        on <span class="text-gray-500 italic">{{ date('d-m-y', strtotime($post->updated_at)) }}</span> 
    </div>


    @if (Auth::user()->id == $post->user_id )
    <a href="/blog/{{ $post -> slug }}/edit" 
        class="bg-green-700 mt-8 text-gray-100 py-4 px-5 inline-block
                rounded-lg font-bold uppercase text-l place-self-start"
                >Edit Post    
    </a>


    <form action="/blog/{{ $post->slug }}" method="post" class=" inline-block">
        @method('delete')
        @csrf
        

        <button type="submit" 
            class="bg-red-700 mt-8 text-gray-100 py-4 px-5 inline-block
                    rounded-lg font-bold uppercase text-l place-self-start"
                    >Delete Post    
        </button>
    </form>


    @endif


</div>

@endsection