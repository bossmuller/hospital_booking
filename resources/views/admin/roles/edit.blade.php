<x-admin-layout>
    <div class ="py-12 w-full">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
            <div class="flex p-2">
                <a href="{{route('admin.roles.index')}}" class="px-4 bg-green-700 hover:bg-green-500 text-slate-100 rounded-md">Role Index</a>
            </div>
            <div class="flex flex-col">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-18">

                    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                        <form method="POST" action="{{route('admin.roles.update', $role)}}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 form-group">
                                <label for="name">Post Role</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Edit Role" value="{{$role->name}}">
                            </div>

                            @error('name') <span class="text-red-400 text-sm">{{$message}}</span>@enderror
                            <button type="Submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
            <div>
               <h2>Roles Permissions</h2>
                <div class="mt-1 p-2">
                   @if(@$role->permissions)
                       @foreach($role->permissions as $role_permission)
                           <span>{{$role_permission}}</span>
                       @endforeach
                   @endif
                </div>
                <div>
                    <form method="POST" action="{{route('admin.roles.permissions', $role)}}">
                        @csrf
                        <div class="mb-3 form-group">
                            <label class="" for="Permission">Permission</label>
                            <select id="permission" autocomplete="permission-name" class="form-select" aria-label=".form-select-sm example">
                                @foreach($permissions as $permission)
                                    <option value="{{$permission->name}}">{{$permission->name}}</option>
                                @endforeach
                            </select>

                        </div>

                        @error('name') <span class="text-red-400 text-sm">{{$message}}</span>@enderror
                        <button type="Submit" class="btn btn-primary">Assign</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-admin-layout>

