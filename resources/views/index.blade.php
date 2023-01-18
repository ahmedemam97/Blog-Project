@extends('layouts.app')

@section('content')


        <!--Hero-->
    <div class="hero-bg-image flex flex-col items-center justify-center">
        <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10 text-center">Welcome To My Blog</h1>
        <a href="/" class="bg-gray-100 text-gray-700 py-4 px-5 rounded-lg font-bold uppercase text-xl">Start Reading</a>
    </div>

        <!--How to be an expert-->
    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15">
        <div class="mx-2 md:mx-0 px-10 py-10">
                <img class="sm:rounded-lg" src="https://picsum.photos/id/239/960/620" alt="">
        </div>
        <div class="flex flex-col items-left justify-center m-10 sm:m-0 px-10 py-10">
            <h2 class="font-bold text-gray-700 text-4xl uppercase">
                How to be an expert in 2023
            </h2>

            <p class="font-bold text-gray-600 text-xl pt-2">
                You can find a list of all programming language here.
            </p>

            <p class="py-4 text-gray-700 text-sm leading-5">
                An expert is a professional found in any industry who is highly skilled either due to many years of proper experience, high levels of education, or, generally, both. Their duties can be many but as they are experts in their field they are generally responsible for leading major operations, projects, or teams, overseeing important activities, assisting in the creation and implementation of strategies, and even advising directors and shareholders on company-wide decisions, such as corporate policies, investments, and, generally, what the next move ought to be. As a person with much knowledge on their subject, they are top-notch in their field.
                
                How To Become An Expert In 6 Steps:
                   Step 1: Explore expert education 
                   Step 2: Develop expert skills
                   Step 3: Complete relevent training/internship 
                   Step 4: Research expert duties   
                   Step 5: Prepare your resume
                   Step 6: Apply for an expert job 
            </p>

            <a href="/" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Read more</a>
        </div>
    </div>

        <!--Blog Categories-->
    <div class="text-center p-15 bg-gray-700 text-gray-100">
        <h2 class="text-2xl px-5 py-5">Blog Categories</h2>
        <div class="container mx-auto pt-10 sm:grid grid-cols-4 px-5 py-5">
            <div class="font-bold text-2xl py-2">UX Design Thinking</div>
            <div class="font-bold text-2xl py-2">Programming Languages</div>
            <div class="font-bold text-2xl py-2">Graphic Design</div>
            <div class="font-bold text-2xl py-2">Front-End Developement</div>
        </div>
    </div>

        <!--Recent Posts-->
    <div class="container mx-auto text-center py-15">
        <h2 class="font-bold text-5xl py-10">Recent Posts</h2>
        <p class="text-gray-700 leading-6 px-10">To convert long-form blog posts into social media posts that engage your followers, start by making a list of your best blog posts. Your website's Google Analytics can tell you which articles have the most visits.</p>
    </div>
    <br>    
    <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="block m-auto pt-4 pb-5 w-4/5">

                <ul class="md:flex text-xs gap-2">
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">PHP</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Programming</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Languages</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Back-End</a></li>
                </ul>

                <h3 class="text-l py-5 leading-6">
                    PHP is an open-source server-side scripting language that many devs use for web development. 
                    It is also a general-purpose language that you can use to make lots of projects, including Graphical User Interfaces (GUIs).
                    In this article, I will help you explore the world of PHP so you can learn how it works and its basic features. By the end, 
                    you will be able to write your first Hello World program in PHP.
                </h3>
                <a href="/" class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block">Read More</a>
            </div>
        </div>
        <div class="flex">
            <img class="object-cover" src="https://picsum.photos/id/242/960/620" alt="">
        </div>
    </div>
@endsection