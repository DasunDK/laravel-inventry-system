<div>


    <div class="row">
        <div class="col-xl-10 mx-auto">
            <div class="card">
                <div class="card-header border-0 align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Single Product View</h4>

                </div><!-- end card header -->


                <div class="card card-height-100">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Product Image</h4>
                        <div class="flex-shrink-0">
                            <div class="flex-shrink-0">
                                <a href="<?php echo e(url('storage/' . $img)); ?>" download="Product Image"
                                    class="btn btn-primary"><i class=" ri-file-download-line align-bottom"></i>
                                    Download</a>
                            </div>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body mx-auto">

                        <a href="<?php echo e(url('storage/' . $img)); ?>" data-fancybox>
                            <img src="<?php echo e(url('storage/' . $img)); ?>" class="img-thumbnail"
                                style="height: 333px; width: 800px;" alt="Product Image">
                        </a>

                    </div><!-- end card body -->
                </div><!-- end card -->

                <div class="card-body p-0 pb-2">
                    <div class="w-100 p-5">

                        <form class="row g-3 needs-validation" novalidate>

                            <div class="col-md-6">
                                <label for="productName" class="form-label">Product Name</label>
                                <input wire:model="productName" type="text" class="form-control" id="productName"
                                    disabled>
                            </div>

                            <div class="col-md-6">
                                <label for="description" class="form-label">Description</label>
                                <input wire:model="description" type="text" class="form-control" id="description"
                                    disabled>
                            </div>

                            <div class="col-md-6">
                                <label for="price" class="form-label">Price</label>
                                <input wire:model="price" type="text" class="form-control" id="price" disabled>
                            </div>

                            <div class="col-md-6">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input wire:model="quantity" type="text" class="form-control" id="quantity"
                                    disabled>

                            </div>
                            <div class="col-md-6">
                                <label for="category" class="form-label">Category</label>
                                <input wire:model="category" type="text" class="form-control" id="category"
                                    disabled>
                            </div>

                            <div class="col-md-6">
                                <label for="sku" class="form-label">Stock Keeping Unit (SKU)</label>
                                <input wire:model="sku" type="text" class="form-control" id="sku" disabled>
                            </div>


                        </form>

                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

    </div>

</div>
<?php /**PATH D:\MY Projects\WEB\laravel\Inventry_system\Inventry_system\resources\views/livewire/product-view.blade.php ENDPATH**/ ?>