<x-admin.layout>
    <h1 style="color: white; font-size:40px">{{ $title }}</h1>

    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-md px-4 lg:px-12">
            <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg p-6">

                <form action="{{ route('admin.subject.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Contoh: Matematika / Produktif" required
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        @error('name')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end space-x-3 pt-2">
                        <a href="{{ route('admin.subject.index') }}"
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
