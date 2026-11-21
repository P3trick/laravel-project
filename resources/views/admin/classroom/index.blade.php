<x-admin.layout>
    <h1 style="color: white; font-size:40px">{{ $title }}</h1>
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="overflow-x-auto">

                    <a href="{{ route('admin.classroom.create') }}"
                        class="text-white font-medium rounded-lg text-sm px-4 py-2">
                        + Tambah Classroom
                    </a>

                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">ID</th>
                                <th scope="col" class="px-4 py-3">NAME</th>
                                <th scope="col" class="px-4 py-3">MAJOR</th>
                                <th scope="col" class="px-4 py-3">STUDENT</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($classrooms as $classroom)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3">{{ $classroom->id }}</td>
                                    <td class="px-4 py-3 font-medium text-gray-900 dark:text-white">
                                        {{ $classroom->name }}</td>
                                    <td class="px-4 py-3">{{ $classroom->major }}</td>
                                    <td class="px-4 py-3">
                                        @forelse ($classroom->students as $student)
                                            <div>{{ $student->name }}</div>
                                        @empty
                                            <span class="text-gray-400">-</span>
                                        @endforelse
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-admin.layout>
