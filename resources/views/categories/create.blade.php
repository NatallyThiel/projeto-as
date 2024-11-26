@extends('layouts.base')
@section('content')
   <div class="max-w-md mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg border border-gray-200">
      <form action="{{ url('categories') }}" method="POST">
         @csrf
         <h2 class="text-2xl font-semibold text-center text-lime-600 italic mb-6">Create Category</h2>
         <div>
            <label for="description" class="block text-gray-700 font-medium mb-1">Description</label>
            <input type="text" name="description" placeholder="Description" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-lime-500 focus:ring-1 focus:ring-lime-500" required>
         </div>
         
         <div class="flex justify-end">
            <button type="submit" class="px-4 py-2 bg-lime-600 text-white font-medium rounded-md shadow hover:bg-lime-700 focus:outline-none focus:ring-2 focus:ring-lime-500" >Create Category</button>
         </div>
      
      </form>
   </div>
   
@endsection