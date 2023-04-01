<div class="max-w-7xl mx-auto lg:px-8 sm:px-6 px-4">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-gray-700 text-2xl font-semibold">All of your products</h1>
            <p class="text-sm text-gray-600">This is the list of all of the products from your application</p>
        </div>
        <a class="bg-indigo-600 hover:bg-indigo-500 text-white px-3 py-2 rounded-md focus:outline-2 focus:outline-offset-2" href="{{ route('products.create') }}">Add a new product</a>
    </div>

    <div class="relative rounded-xl overflow-auto">
    <div class="shadow-sm overflow-hidden my-8">
        <table class="border-collapse table-auto w-full text-sm">
        <thead>
            <tr>
            <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-700 text-left">Label of the product</th>
            <th class="border-b font-medium p-4 pt-0 pb-3 text-slate-700 text-left">Price</th>
            <th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-700 text-left">Quantity</th>
            <th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-700 text-left">
                <span class="sr-only">Actions</span>
            </th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach ($products as $product)
            <tr>
                <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ $product->label }}</td>
                <td class="border-b border-slate-100 p-4 text-slate-500 ">{{ $product->price }} FCFA</td>
                <td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">{{ $product->quantity }}</td>
                <td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">
                    <ul class="flex items-center space-x-4">
                        <li>
                            <svg class="w-6 h-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </li>
                        <li>
                            <a href="{{ route('products.edit', $product->id)}}">
                                <svg class="w-6 h-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <button wire:click="delete({{ $product->id }})" class="flex items-center justify-center">
                                <svg class="w-6 h-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </button>
                        </li>
                    </ul>
                </td>
            </tr>
            @endforeach

        </tbody>
        </table>
    </div>
    </div>
</div>
