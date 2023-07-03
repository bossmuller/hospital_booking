<x-admin-layout>

    <!-- Responsive Table -->
    <div class="flex justify-end p-2">
        <a href="{{route('admin.roles.create')}}" class="px-4 bg-green-700 hover:bg-green-500 rounded-md">Create Role</a>
    </div>
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr class="text-nowrap">
                    <th>#</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                <tr>
                    <th scope="row">{{ $role->id }}</th>
                    <td> {{$role->name}}</td>
                    <td class="flex-d">
                        <a class="btn btn-primary m-1 flex-d" href="{{route('admin.roles.edit', $role->id)}}">Edit</a>
                            <form  method="POST" action="{{ route('admin.roles.destroy', $role->id) }}" onsubmit="return confirm('Are you sure want to Delete');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-1 flex-d" type="submit">Delete</button>
                            </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Responsive Table -->

</x-admin-layout>
