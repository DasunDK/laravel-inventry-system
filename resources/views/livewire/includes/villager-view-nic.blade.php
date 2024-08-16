<div class="col-xl-5 offset-md-1">
    <div class="card card-height-100">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Nic front</h4>
            <div class="flex-shrink-0">
                <div class="flex-shrink-0">
                    <a href="{{ url('storage/' . $nicFrontImg) }}" download="nic_front" class="btn btn-primary"><i
                            class=" ri-file-download-line align-bottom"></i>
                        Download</a>
                </div>
            </div>
        </div><!-- end card header -->

        <div class="card-body p-0">

            <a href="{{ url('storage/' . $nicFrontImg) }}" data-fancybox>
                <img src="{{ url('storage/' . $nicFrontImg) }}" class="img-thumbnail"
                    style="height: 333px; width: 800px;" alt="Nic Front Image">
            </a>

        </div><!-- end card body -->
    </div><!-- end card -->
</div><!-- end col -->

<div class="col-xl-5">
    <div class="card card-height-100">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Nic back</h4>
            <div class="flex-shrink-0">
                <div class="flex-shrink-0">
                    <a href="{{ url('storage/' . $nicBackImg) }}" download="nic_back" class="btn btn-primary"><i
                            class=" ri-file-download-line align-bottom"></i>
                        Download</a>
                </div>
            </div>
        </div><!-- end card header -->

        <div class="card-body p-0">

            <a href="{{ url('storage/' . $nicBackImg) }}" data-fancybox>
                <img src="{{ url('storage/' . $nicBackImg) }}" style="height: 333px; width: 800px;"
                    class="img-thumbnail" alt="Nic Back Image">
            </a>

        </div><!-- end card body -->
    </div><!-- end card -->
</div><!-- end col -->
