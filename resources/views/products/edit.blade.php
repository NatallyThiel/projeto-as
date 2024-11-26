@extends('layouts.base')
@section('content')
    <div class="max-w-md mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg border border-gray-200">
        <form action="{{ url('products/'.$product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium mb-1">Description</label>
                <input type="text" name="description" placeholder="Description" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-lime-500 focus:ring-1 focus:ring-lime-500" value="{{$product->description}}" required>
            </div>
            <div class="mb-4">
                <label for="preco" class="block text-gray-700 font-medium mb-1">Preco</label>
                <input type="text" name="preco" placeholder="Preco" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-lime-500 focus:ring-1 focus:ring-lime-500" value="{{$product->preco}}" required>
            </div>
            
            <button type="submit" class="w-full px-4 py-2 bg-lime-600 text-white font-semibold italic rounded-md shadow hover:bg-lime-700 focus:outline-none focus:ring-2 focus:ring-lime-500" >Update Product</button>
        </form>
    </div>
    
@endsection