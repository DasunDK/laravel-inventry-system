<div>


    <div class="card">


        <div class="card-body">
            <div class="col-auto text-end mb-2">
                <a href="product-add">
                    {{-- btn-soft-success --}}
                    <button type="button" class="btn btn-success shadow-none"><i
                            class="ri-add-circle-line align-middle me-1" style="font-size: 20px"></i>
                        Add Product</button>
                </a>
            </div>
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
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    @php
                        // use App\Models\Villager;
                        use App\Models\Product;

                        $products = Product::all();
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
                                @php
                                    if ($product->quantity < 15) {
                                        echo '<td class="bg-danger">' . $product->quantity . '</td>';
                                    } else {
                                        echo '<td>' . $product->quantity . '</td>';
                                    }
                                @endphp
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->sku }}</td>

                                <td>
                                    <div class="hstack gap-3 d-flex justify-content-center">
                                        <a href="javascript:void(0);" wire:click="gotoEditFrom({{ $product->id }})"
                                            class="link-success fs-15">
                                            <i class="ri-edit-2-line"></i>
                                        </a>
                                        <a href="javascript:void(0);" onclick="confirmDelete({{ $product->id }})"
                                            class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
                                    </div>
                                </td>


                            </tr>
                        @endforeach
                    </tbody>

                </table>

                <!-- Display success or error messages -->
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                {{-- java script for delete alert --}}
                <script>
                    function confirmDelete(id) {
                        Swal.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                @this.call('deleteProduct', id);
                            }
                        });
                    }
                </script>
                {{-- <div class="mt-1">
                                {{ $rows->links() }}
                            </div> --}}
                {{-- </div> --}}
            </div>

        </div><!-- end col -->

    </div>


</div>
