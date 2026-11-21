<x-admin.layout>
    <h1 style="color: white; font-size:40px">{{ $title }}</h1>

    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-md px-4 lg:px-12">
            <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg p-6">

                <form action="{{ route('admin.teacher.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                            placeholder="Masukkan nama guru" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        @error('name')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="niy"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIY</label>
                        <input type="number" name="niy" id="niy" value="{{ old('niy') }}"
                            placeholder="Masukkan NIY" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        @error('niy')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                        <p id="niy-warning" class="mt-1 text-xs text-yellow-500 hidden">Warning: NIY ini sudah
                            digunakan.</p>
                    </div>

                    <div>
                        <label for="subject_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
                        <select name="subject_id" id="subject_id" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <option value="">Pilih Subject</option>
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->id }}" @selected(old('subject_id') == $subject->id)>
                                    {{ $subject->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('subject_id')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                        <p id="subject-warning" class="mt-1 text-xs text-yellow-500 hidden">Warning: Subject ini sudah
                            memiliki guru.</p>
                    </div>
                    <div>
                        <label for="start_date"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Date</label>
                        <input type="date" name="start_date" id="start_date" value="{{ old('start_date') }}" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        @error('start_date')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end space-x-3 pt-2">
                        <a href="{{ route('admin.teacher.index') }}"
                            class="text-gray-300 bg-gray-700 hover:bg-gray-600 font-medium rounded-lg text-sm px-4 py-2">
                            Batal
                        </a>
                        <button type="submit"
                            class="text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-admin.layout>
