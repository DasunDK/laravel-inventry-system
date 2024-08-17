<div>


    <div class="card">


        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display table table-bordered fs-14" style="width:100%">

                    <thead class="table-light">
                        <tr>
                            <th></th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Category</th>
                            <th scope="col">Stock Keeping Unit</th>
                        </tr>
                    </thead>
                    @php
                        // use App\Models\Villager;
                        use App\Models\Product;

                        $products = Product::where('quantity', '<', 15)->get();

                    @endphp
                    <tbody>
                        @foreach ($products as $product)
                            <tr>

                                <td>

                                    <button wire:click="gotoSingleView({{ $product->id }})" type="button"
                                        class="btn btn-sm btn-light">
                                        <i class="mdi mdi-eye"></i>
                                    </button>
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td class="text-center text-danger">{{ $product->quantity }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->sku }}</td>

                            </tr>
                        @endforeach
                    </tbody>

                </table>


                {{-- <div class="mt-1">
                                {{ $rows->links() }}
                            </div> --}}
                {{-- </div> --}}
            </div>

        </div>
    </div>


</div>
