<div>

    <?php

        use App\Models\Product;

        $productCount = product::count();
        $stockValue = product::sum('price');
        $outOfCount = Product::where('quantity', '<', 15)->count();

    ?>

    <div class="row">
        <div class="col-xl-4 col-md-6 location-one d-md-block">
            <!-- card -->
            <div class="card card-animate" style="height: 100px;">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                All Product Count</p>
                        </div>

                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><?php echo e($productCount); ?>

                            </h4>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-4 col-md-6 location-two d-md-block">
            <!-- card -->
            <div class="card card-animate" style="height: 100px;">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                Total Stock Value</p>
                        </div>

                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><?php echo e($stockValue); ?>

                            </h4>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-4 col-md-6 location-three d-md-block">
            <!-- card -->
            <div class="card card-animate" style="height: 100px;">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                Total Out Of Stock</p>
                        </div>

                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><?php echo e($outOfCount); ?>

                            </h4>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->


    </div> <!-- end row-->

</div>
<?php /**PATH D:\MY Projects\WEB\laravel\Inventry_system\Inventry_system\resources\views/livewire/dashboard-data.blade.php ENDPATH**/ ?>