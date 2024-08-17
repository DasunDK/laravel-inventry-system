<div>


    <div class="row">
        <div class="col-xl-10 mx-auto">
            <div class="card">
                <div class="card-header border-0 align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Product Update Form</h4>

                </div><!-- end card header -->


                <div class="card card-height-100">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Product Image</h4>
                        <div class="flex-shrink-0">
                            <div class="flex-shrink-0">
                                <a href="<?php echo e(url('storage/' . $currentImg)); ?>" download="Product Image"
                                    class="btn btn-primary"><i class=" ri-file-download-line align-bottom"></i>
                                    Download</a>
                            </div>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body mx-auto">

                        <a href="<?php echo e(url('storage/' . $currentImg)); ?>" data-fancybox>
                            <img src="<?php echo e(url('storage/' . $currentImg)); ?>" class="img-thumbnail"
                                style="height: 333px; width: 800px;" alt="Nic Front Image">
                        </a>

                    </div><!-- end card body -->
                </div><!-- end card -->

                <div class="card-body p-0 pb-2">
                    <div class="w-100 p-5">

                        <form wire:submit="updateProduct" class="row g-3 needs-validation" novalidate>
                            <div class="col-md-6">
                                <label for="productName" class="form-label">Product Name<span
                                        class="text-danger">*</span></label>
                                <input wire:model="productName" type="text" class="form-control" id="productName">
                                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['productName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                            </div>
                            <div class="col-md-6">
                                <label for="description" class="form-label">Description</label>
                                <input wire:model="description" type="text" class="form-control" id="description">
                                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="form-label">Price<span class="text-danger">*</span></label>
                                <input wire:model="price" type="text" class="form-control" id="price">
                                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                            </div>
                            <div class="col-md-6">
                                <label for="quantity" class="form-label">Quantity<span
                                        class="text-danger">*</span></label>
                                <input wire:model="quantity" type="text" class="form-control" id="quantity">
                                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->

                            </div>
                            <div class="col-md-6">
                                <label for="category" class="form-label">Category<span
                                        class="text-danger">*</span></label>
                                <input wire:model="category" type="text" class="form-control" id="category">
                                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->

                            </div>
                            <div class="col-md-6">
                                <label for="sku" class="form-label">Stock Keeping Unit (SKU)<span
                                        class="text-danger">*</span></label>
                                <input wire:model="sku" type="text" class="form-control" id="sku">
                                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['sku'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->

                            </div>

                            <div class="col-12 col-md-6 mb-3">
                                <label for="img">Product Image</label>
                                <input wire:model="img" type="file" accept="image/png, image/jpg, image/jpeg"
                                    class="form-control">
                                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                            </div>

                            <!--[if BLOCK]><![endif]--><?php if(session('success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(session('success')); ?>

                                </div>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                            <div class="col-12 text-center mt-4">
                                <button class="btn btn-primary w-50" type="submit">Update Product</button>
                            </div>
                        </form>

                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

    </div>

</div>
<?php /**PATH D:\MY Projects\WEB\laravel\Inventry_system\Inventry_system\resources\views/livewire/product-edit.blade.php ENDPATH**/ ?>