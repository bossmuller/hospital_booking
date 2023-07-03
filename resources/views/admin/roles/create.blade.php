<x-admin-layout>
    <div class ="py-12 w-full">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
        <div class="flex p-2">
            <a href="{{route('admin.roles.index')}}" class="px-4 bg-green-700 hover:bg-green-500 text-slate-100 rounded-md">Role Index</a>
        </div>
    <div class="flex flex-col">
        <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-18">

    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
        <form method="POST" action="{{route('admin.roles.store')}}">
            @csrf
            <div class="sm:col-span-6">
                <label for="name" class="block text-sm font-medium text-gray-700"> Post name </label>
                <div class=" w-full">
                    <input type="text" id="name" name="name" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5" />
                </div>
                @error('name') <span class="text-red-400 text-sm">{{$message}}</span>@enderror
            </div>
            <div class="sm:col-span-6">
                <div>
                    <button type="Submit" class="px-4 bg-green-500 hover:bg-green-700-50 rounded-md">Create</button>
                </div>
            </div>
        </form>
    </div>
        </div>
    </div>
        </div>
    </div>


</x-admin-layout>
