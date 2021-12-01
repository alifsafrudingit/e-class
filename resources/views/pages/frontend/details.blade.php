@extends('layouts.frontend')

@section('content')
<section class="h-full w-full border-box transition-all duration-500 linear relative background">
  <div>
    <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
      <div class="flex-1">
            <div class="item rounded-lg h-full overflow-hidden">
              <img
                src="{{ $course->img ? Storage::url($course->img) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' }}"
                alt="front"
                class="object-cover w-full h-full rounded-lg"
              />
            </div>
      </div>
      <div class="flex-1 px-4 md:p-6">
        <h2 class="text-5xl font-semibold mb-3">{{ $course->name }}</h2>
        <p class="text-xl mb-4">IDR {{ number_format($course->price) }}</p>
  
        <form action="{{ route('cart-add', $course->id) }}" method="POST">
          @csrf
          <button
          type="submit"
          class="btn-fill inline-flex font-semibold text-white text-base py-4 px-8 rounded-full mb-4 lg:mb-0 md:mb-0 focus:outline-none">
            Beli Kelas
          </button>
        </form>
        <hr class="my-8" />
  
        <h6 class="text-xl font-semibold mb-4">Deskripsi kelas</h6>
        <p class="text-xl leading-7 mb-6">
          {!! $course->description !!}
      </div>
    </div>
  </div>
</section>
@endsection