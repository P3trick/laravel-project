<x-admin.layout>
    <h1 style="color: white; font-size:40px">{{ $title }}</h1>
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">

                <a href="{{ route('admin.teacher.create') }}"
                    class="text-white font-medium rounded-lg text-sm px-4 py-2">
                    + Tambah Teacher
                </a>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">ID</th>
                                <th scope="col" class="px-4 py-3">Name</th>
                                <th scope="col" class="px-4 py-3">NIY</th>
                                <th scope="col" class="px-4 py-3">Subject_id</th>
                                <th scope="col" class="px-4 py-3">Start_date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $index => $teacher)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3">{{ $teacher->id }}</td>
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $teacher->name }}
                                    </th>
                                    <td class="px-4 py-3">{{ $teacher->niy }}</td>
                                    <td class="px-4 py-3">{{ $teacher->subject->name }}</td>
                                    <td class="px-4 py-3">{{ $teacher->start_date }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-admin.layout>
