@extends('layouts.app')

@section('content')
    {{-- Project Show Start --}}
    <div class="container mx-auto pt-16 lg:pt-20">
        <div class="border-b pb-8 sm:pb-12">
            <span class="bg-green-100 text-primary font-light dark:text-white inline-block rounded-full px-3 py-1 text-sm mb-5 sm:mb-8">
                Category
            </span>
            <h2 class="font-body text-primary dark:text-white text-3xl sm:text-4xl md:text-5xl font-semibold leading-tight">
                {{ $project['title'] }}
            </h2>
            <div class="flex items-center pt-5 sm:pt-8 font-body text-primary font-light dark:text-white">
                <p class="mr-2">{{ $project['start_date'] }} - {{ $project['end_date'] }}</p>
                <span class="mr-2 mx-2">||</span>
                <p>{{ $project['duration'] }}</p>
            </div>
        </div>
        <div class="prose dark:prose-dark max-w-none border-b py-8 sm:py-12">
            <p>{{ $project['description'] }}</p>

            <h3>Technologies Used</h3>
            <ul>
                @foreach($project['technologies'] as $tech)
                    <li>{{ $tech }}</li>
                @endforeach
            </ul>

            <blockquote class="mt-6 border-l-4 border-primary pl-4">
                <p>Note: Some earlier projects may reflect a different approach compared to my current work.</p>
            </blockquote>

            <h3>Project Details</h3>
            <p>More in-depth details about the project can be discussed here...</p>
        </div>

        <div class="flex items-center py-10">
            <span class="font-body text-primary pr-5 font-medium dark:text-white">Share</span>
            <a href="#" class="text-primary hover:text-secondary dark:hover:text-secondary text-2xl transition-colors dark:text-white"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="text-primary hover:text-secondary dark:hover:text-secondary pl-2 text-2xl transition-colors dark:text-white"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="text-primary hover:text-secondary dark:hover:text-secondary pl-2 text-2xl transition-colors dark:text-white"><i class="bx bxl-linkedin"></i></a>
            <a href="#" class="text-primary hover:text-secondary dark:hover:text-secondary pl-2 text-2xl transition-colors dark:text-white"><i class="bx bxl-reddit"></i></a>
        </div>
    </div>
    {{-- Project Show End --}}
@endsection
