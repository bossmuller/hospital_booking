<x-admin-layout>
    <div class ="py-12 w-full">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
            <div class="flex p-2">
                <a href="{{route('admin.permissions.index')}}" class="px-4 bg-green-700 hover:bg-green-500 text-slate-100 rounded-md">Permission Index</a>
            </div>
            <div class="flex flex-col">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-18">

                    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                        <form method="POST" action="{{route('admin.permissions.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Post Permission</label>
                                <input type="text" name="name" class="form-control" id="formGroupExampleInput2" placeholder="Create permission">
                            </div>

                            @error('name') <span class="text-red-400 text-sm">{{$message}}</span>@enderror
                            <button type="Submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>


                    </div>
                </div>
            </div>
        </div>



</x-admin-layout>

