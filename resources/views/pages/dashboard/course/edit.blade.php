<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Kelas &raquo; {{ $course->name }} &raquo; Edit
      </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div>
          @if ($errors->any())
            <div class="mb-5" role="alert">
              <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                There's something wrong!
              </div>
              <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                <p>
                  <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </p>
              </div>
            </div>
          @endif
          <form action="{{ route('dashboard.course.update', $course->id) }}" class="w-full" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Image</label>
                <input type="hidden" name="oldImage" value="{{ $course->img }}">
                @if ($course->img)
                <img src="{{ asset('storage/images/' . $course->img) }}" class="img-preview mb-3">
                @else
                <img class="img-preview mb-3">
                @endif
                <input type="file" value="{{ old('img') ?? $course->img }}" name="file" accept="image/*" id="image" placeholder="Nama Kelas" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" onchange="previewImage()">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nama Kelas</label>
                <input type="text" value="{{ old('name') ?? $course->name }}" name="name" placeholder="Nama Kelas" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Mentor</label>
                <select type="text" value="{{ old('mentors_id') ?? $course->mentor }}" name="mentors_id" placeholder="Nama Kelas" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                  <option>-- Pilih Mentor --</option>
                  @foreach ($mentors as $mentor)
                    <option value="{{ $mentor->id ?? $course->mentors_id }}">{{ $mentor->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Harga</label>
                <input type="number" value="{{ old('price') ?? $course->price }}" name="price" placeholder="Harga" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Deskripsi</label>
                <textarea name="description" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">{!! old('description') ?? $course->description !!}</textarea>
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold px-4 py-2 rounded shadow-lg">
                  Update Kelas
                </button>
              </div>
            </div>
          </form>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace('description');
    </script>
    <script>
      function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }
    </script>
</x-app-layout>
