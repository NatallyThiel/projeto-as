@extends('layouts.base')
@section('content')

@can('create', App\Models\Product::class)
    <div class="flex items-start">
        <div class="py-8 mb-5 p-4">
            <a href="{{url('products/create')}}" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Add Product</a>
        </div>
    </div>
@endcan

    <div class="max-w-4xl mx-auto mt-10 space-y-6">
        @foreach($products as $product)
            <div class="p-6 bg-white shadow-lg rounded-lg border border-gray-200">
                <h3 class="text-2xl font-semibold italic text-gray-800 mb-2">{{ $product->description }}</h3>
                <p class="text-gray-700 font-semibold italic mb-1"><strong class="text-lime-600">Preco:</strong> {{ $product->preco }}</p>
                <p class="text-gray-700 font-semibold italic mb-1"><strong class="text-lime-600">Category:</strong> {{ $product->category->description }}</p>


                <div class="flex justify-between items-center">
                    <a href="{{ url('products/'.$product->id.'/edit') }}" class="inline-block px-4 py-2 bg-lime-600 text-white rounded-md shadow hover:bg-lime-700 focus:outline-none focus:ring-2 focus:ring-lime-500">Edit</a>
                    
                    <form action="{{ url('products/'.$product->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-600 text-white font-semibold italic rounded-md shadow hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">Delete</button>
                    </form>
                </div>
            </div>
                    
        @endforeach
    </div>
@endsection