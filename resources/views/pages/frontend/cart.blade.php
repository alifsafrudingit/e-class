@extends('layouts.frontend')

@section('content')
  <section class="h-full w-full border-box transition-all duration-500 linear relative background">
    <div>
      <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
      <div class="w-full px-4 mb-4 md:w-8/12 md:mb-0" id="shopping-cart">
        <div
          class="flex flex-start mb-4 mt-8 pb-3 border-b border-gray-200 md:border-b-0"
        >
          <h3 class="text-2xl">Pembelian Kelas</h3>
        </div>

        <div class="border-b border-gray-200 mb-4 hidden md:block">
          <div class="flex flex-start items-center pb-2 -mx-4">
            <div class="px-4 flex-none">
              <div class="" style="width: 90px">
                <h6>Image</h6>
              </div>
            </div>
            <div class="px-4 w-5/12">
              <div class="">
                <h6>Kelas</h6>
              </div>
            </div>
            <div class="px-4 w-5/12">
              <div class="">
                <h6>Harga</h6>
              </div>
            </div>
            <div class="px-4 w-2/12">
              <div class="text-center">
                <h6>Action</h6>
              </div>
            </div>
          </div>
        </div>

        @forelse ($carts as $item)
        <div
          class="flex flex-start flex-wrap items-center mb-4 -mx-4"
          data-row="1"
        >
          <div class="px-4 flex-none">
            <div class="" style="width: 90px; height: 90px">
              <img
                src="{{ $item->course->img ? Storage::url($item->course->img) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' }}"
                alt="chair-1"
                class="object-cover rounded-xl w-full h-full"
              />
            </div>
          </div>
          <div class="px-4 w-auto flex-1 md:w-5/12">
            <div class="">
              <h6 class="font-semibold text-lg md:text-xl leading-8">
                {{ $item->course->name }}
              </h6>
              <h6
                class="font-semibold text-base md:text-lg block md:hidden"
              >
                Rp {{ number_format($item->course->price) }}
              </h6>
            </div>
          </div>
          <div
            class="px-4 w-auto flex-none md:flex-1 md:w-5/12 hidden md:block"
          >
            <div class="">
              <h6 class="font-semibold text-lg">Rp {{ number_format($item->course->price) }}</h6>
            </div>
          </div>
          <div class="px-4 w-2/12">
            <div class="text-center">
              <form action="{{ route('cart-delete', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button
                  class="text-red-600 border-none focus:outline-none px-3 py-1"
                >
                  X
                </button>
              </form>
            </div>
          </div>
        </div>
        @empty
        <p id="cart-empty" class="text-center py-8">
          Ooops... Cart is empty
          <a href="{{ route('kelas') }}" class="underline">Shop Now</a>
        </p>
        @endforelse
      </div>

      <div class="w-full md:px-4 md:w-4/12" id="shipping-detail">
        <div class="bg-gray-100 px-4 py-6 md:p-8 md:rounded-3xl">
          <form action="{{ route('checkout') }}" method="POST">
            @csrf
            <div class="flex flex-start mb-6">
              <h3 class="text-2xl">Data Pembeli</h3>
            </div>

            <div class="flex flex-col mb-4">
              <label for="complete-name" class="text-sm mb-2"
                >Nama Lengkap</label
              >
              <input
                data-input
                name="name"
                type="text"
                id="complete-name"
                class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none"
                placeholder="Input your name"
              />
            </div>

            <div class="flex flex-col mb-4">
              <label for="email" class="text-sm mb-2">Email</label>
              <input
                data-input
                name="email"
                type="email"
                id="email"
                class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none"
                placeholder="Input your email address"
              />
            </div>

            <div class="flex flex-col mb-4">
              <label for="phone-number" class="text-sm mb-2"
                >Nomor Handphone</label
              >
              <input
                data-input
                name="phone"
                type="tel"
                id="phone-number"
                class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none"
                placeholder="Input your phone number"
              />
            </div>

            <div class="flex flex-col mb-4">
              <label for="complete-name" class="text-sm mb-2"
                >Metode Pembayaran</label
              >
              <div class="flex -mx-2 flex-wrap">
                <div class="px-2 w-6/12 h-24 mb-4">
                  <button
                    type="button"
                    data-value="midtrans"
                    data-name="payment"
                    class="border border-gray-200 focus:border-red-200 flex items-center justify-center rounded-xl bg-white w-full h-full focus:outline-none"
                  >
                    <img
                      src="{{ url('frontend/images/logo-midtrans.png') }}"
                      alt="Logo midtrans"
                      class="object-contain max-h-full"
                    />
                  </button>
                </div>
                <div class="px-2 w-6/12 h-24 mb-4">
                  <button
                    type="button"
                    data-value="mastercard"
                    data-name="payment"
                    class="border border-gray-200 focus:border-red-200 flex items-center justify-center rounded-xl bg-white w-full h-full focus:outline-none"
                  >
                    <img
                      src="{{ url('frontend/images/logo-mastercard.svg') }}"
                      alt="Logo mastercard"
                    />
                  </button>
                </div>
              </div>
            </div>
            <div class="text-center">
              <button
                type="submit"
                class="btn-fill focus:outline-none w-full py-3 rounded-full text-lg text-white transition-all duration-200 px-6"
              >
                Bayar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>
@endsection