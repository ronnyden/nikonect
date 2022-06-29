<x-app-layout>
     <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('File upload') }}
            </h2>
     </x-slot>
     <div class=" container p-3">
         <form action="{{route('files.store')}}" method="POST">
             <div class="mt-4 p-3"/>
            <input type="file" name="file" id="file"
            class="focus:ring-indigo-500 focus:border-indigo-500 flex-2  w-full rounded-md sm:text-sm border-gray-300">
            <button type="submit" class="bg-green-200 rounded-full border border-gray-800 mt-4 p-3 w-full">Upload</button>
         </form>
     </div>
</x-app-layout>