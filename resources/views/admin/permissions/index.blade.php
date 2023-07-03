<x-admin-layout>

        <div class="py-12 w-full">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                    <div class="flex justify-end p-2">
                        <a href="{{route('admin.permissions.create')}}" class="px-4 bg-green-700 hover:bg-green-500 rounded-md">Create Permission</a>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                            <tr class="text-nowrap">
                                <th>Name</th>
                                <th class="d-flex justify-content-end">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($permissions as $permission)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            {{ $permission->name}}
                                        </div>
                                    </td>
                                    <td class="mx-auto ">
                                        <div class="d-flex justify-content-end">
                                            <a class="btn btn-primary m-1" href="{{route('admin.permissions.edit', $permission->id)}}">Edit</a>
                                            <form  method="POST" action="{{ route('admin.permissions.destroy', $permission->id) }}" onsubmit="return confirm('Are you sure want to Delete');">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger m-1 flex-d" type="submit">Delete</button>
                                            </form>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-admin-layout>

