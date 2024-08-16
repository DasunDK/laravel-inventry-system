<div>


    <div class="row">
        <div class="col-xl-10 mx-auto">
            <div class="card">
                <div class="card-header border-0 align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Products Add Form</h4>

                </div><!-- end card header -->


                <div class="card-body p-0 pb-2">
                    <div class="w-100 p-5">

                        <form wire:submit="addProduct" class="row g-3 needs-validation" novalidate>
                            <div class="col-md-6">
                                <label for="productName" class="form-label">Product Name<span
                                        class="text-danger">*</span></label>
                                <input wire:model="productName" type="text" class="form-control" id="productName">
                                @error('productName')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="description" class="form-label">Description</label>
                                <input wire:model="description" type="text" class="form-control" id="description">
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="form-label">Price<span class="text-danger">*</span></label>
                                <input wire:model="price" type="text" class="form-control" id="price">
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="quantity" class="form-label">Quantity<span
                                        class="text-danger">*</span></label>
                                <input wire:model="quantity" type="text" class="form-control" id="quantity">
                                @error('quantity')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="col-md-6">
                                <label for="category" class="form-label">Category<span
                                        class="text-danger">*</span></label>
                                <input wire:model="category" type="text" class="form-control" id="category">
                                @error('category')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="col-md-6">
                                <label for="sku" class="form-label">Stock Keeping Unit (SKU)<span
                                        class="text-danger">*</span></label>
                                <input wire:model="sku" type="text" class="form-control" id="sku">
                                @error('sku')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>

                            <div class="col-12 col-md-6 mb-3">
                                <label for="img">Product Image</label>
                                <input wire:model="img" type="file" accept="image/png, image/jpg, image/jpeg"
                                    class="form-control">
                                @error('img')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="col-12 text-center mt-4">
                                <button class="btn btn-primary w-50" type="submit">Add Product</button>
                            </div>
                        </form>

                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

    </div>

</div>
