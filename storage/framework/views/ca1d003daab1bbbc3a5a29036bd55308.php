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
                    <?php
                        // use App\Models\Villager;
                        use App\Models\Product;

                        $products = Product::where('quantity', '<', 15)->get();

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
                                <td class="text-center text-danger"><?php echo e($product->quantity); ?></td>
                                <td><?php echo e($product->category->name); ?></td>
                                <td><?php echo e($product->sku); ?></td>
                                



                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </tbody>

                </table>


                
                
            </div>
            
            
        </div><!-- end col -->

    </div>


</div>
<?php /**PATH D:\MY Projects\WEB\laravel\Inventry_system\Inventry_system\resources\views/livewire/dashboard-table.blade.php ENDPATH**/ ?>