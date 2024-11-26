@extends('layouts.base')
@section('content')

   <div class="max-w-md mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg border border-gray-200">
      <form action="{{ url('products') }}" method="POST">
         @csrf
         <h2 class="text-2xl font-semibold text-center text-lime-600 italic mb-6">Create Product</h2>
         <div>
            <label for="description" class="block text-gray-700 font-medium mb-1">Description</label>
            <input type="text" name="description" placeholder="Description" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-lime-500 focus:ring-1 focus:ring-lime-500" required>
         </div>
         
         <div>
            <label for="preco" class="block text-gray-700 font-medium mb-1">Preco</label>
            <textarea name="preco" placeholder="preco" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-lime-500 focus:ring-1 focus:ring-lime-500" required></textarea>
         </div>

         <div class="mb-5">
            <label for="category_id" class="block text-gray-700 font-medium mb-1">Category</label>
            <select name="category_id" id="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="">Select a category</option>
                @foreach ( $categories as $category)
                    <option value="{{$category->id}}">{{$category->description}}</option>
                @endforeach
            </select>
         </div>

         
         <div class="flex justify-end">
            <button type="submit" class="px-4 py-2 bg-lime-600 text-white font-medium rounded-md shadow hover:bg-lime-700 focus:outline-none focus:ring-2 focus:ring-lime-500" >Create Product</button>
         </div>
      
      </form>
   </div>
   
@endsection