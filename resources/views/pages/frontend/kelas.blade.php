@extends('layouts.frontend')

@section('content')
        <!-- START: KATALOG KELAS -->
        <section class="bg-gray-100 px-4 py-16">
          <div class="container mx-auto">
            <div class="flex flex-start mb-2 justify-center ">
              <h3 class="text-2xl capitalize font-semibold">
                Katalog Kelas
              </h3>
            </div>
            <div class="flex flex-start mb-8 justify-center ">
              <p class="text-center">
                Belajar pemrogaman bersama<br>
                mentor berpengalaman
              </p>
            </div>
            <div class="flex overflow-x-auto mb-4 -mx-3">
              @foreach ($courses as $course)    
              <div class="px-3 flex-none" style="width: 313px">
                <div class="rounded-xl p-4 pb-8 relative bg-white">
                  <div class="rounded-xl overflow-hidden card-shadow w-full h-36">
                    <img
                      src="{{ $course->img ? Storage::url($course->img) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' }}"
                      alt=""
                      class="w-full h-full object-cover object-center"
                    />
                  </div>
                  <h5 class="text-lg font-semibold mt-4">{{ $course->name }}</h5>
                  <span class="">Rp {{ number_format($course->price) }}</span>
                  <a href="{{ route('details', $course->slug) }}" class="stretched-link">
                    <!-- fake children -->
                  </a>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </section>
        <!-- END: KATALOG KELAS -->   
@endsection