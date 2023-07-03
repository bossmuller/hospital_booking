@props(['active'])

@php
$classes = ($active ?? false)
            ?'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:text-gray-900 hover: bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline'
            : 'block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark: bg-transparent hover: text-gray-900 focus: text-gray-900 '


 @endphp
php
