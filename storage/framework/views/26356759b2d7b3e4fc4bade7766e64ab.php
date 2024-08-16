<div>


    <div class="card">


        <div class="card-body">
            <div class="col-auto text-end mb-2">
                <a href="product-add">
                    
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
                    <?php
                        // use App\Models\Villager;
                        use App\Models\Product;

                        $products = Product::all();
                        // dd($allProduct);
                        // $Villagers = Villager::where('user_id', auth()->user()->id)->get();
                    ?>
                    <tbody>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                
                                
                                <td></td>
                                <td><?php echo e($product->name); ?></td>
                                <td><?php echo e($product->description); ?></td>
                                <td><?php echo e($product->price); ?></td>
                                <?php
                                    if ($product->quantity < 15) {
                                        echo '<td class="bg-danger">' . $product->quantity . '</td>';
                                    } else {
                                        echo '<td>' . $product->quantity . '</td>';
                                    }
                                ?>
                                <td><?php echo e($product->category->name); ?></td>
                                <td><?php echo e($product->sku); ?></td>
                                
                                <td>
                                    <div class="hstack gap-3 d-flex justify-content-center">
                                        <a href="javascript:void(0);" wire:click="gotoEditFrom(<?php echo e($product->id); ?>)"
                                            class="link-success fs-15">
                                            <i class="ri-edit-2-line"></i>
                                        </a>
                                        <a href="javascript:void(0);" onclick="confirmDelete(<?php echo e($product->id); ?>)"
                                            class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
                                    </div>
                                </td>


                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </tbody>

                </table>

                <!-- Display success or error messages -->
                <!--[if BLOCK]><![endif]--><?php if(session()->has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                <?php if(session()->has('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                
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
                                window.Livewire.find('<?php echo e($_instance->getId()); ?>').call('deleteProduct', id);
                            }
                        });
                    }
                </script>
                
                
            </div>
            
            
        </div><!-- end col -->

    </div>


</div>
<?php /**PATH D:\MY Projects\WEB\laravel\Inventry_system\grama_sewaka_03\resources\views/livewire/home-page-table.blade.php ENDPATH**/ ?>