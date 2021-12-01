<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Mentor') }}
      </h2>
  </x-slot>

  <x-slot name="script">
    <script>
      // AJAX Datatable
      var datatable = $('#crudTable').DataTable({
        ajax: {
          url: '{!! url()->current() !!}'
        },
        columns: [
          {data: 'id', name: 'id', width: '5%'},
          {data: 'name', name: 'name'},
          {data: 'email', name: 'email'},
          {data: 'phone', name: 'phone'},
          {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false,
            width: '25%'
          }
        ]
      });
    </script>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mb-10">
          <a href="{{ route('dashboard.mentor.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold px-4 py-2 rounded shadow-lg">
            + Create Mentor
          </a>
        </div>
        <div class="shadow overflow-hidden sm-rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <table id="crudTable">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Telepon</th>
                  <th>Aksi</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
    </div>
</x-app-layout>
