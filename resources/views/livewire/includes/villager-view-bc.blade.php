<div class="col-xl-5 offset-md-1">
    <div class="card card-height-100">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Birth certificate front</h4>
            <div class="flex-shrink-0">
                <div class="flex-shrink-0">
                    <a href="{{ url('storage/' . $bcFrontImg) }}" download="bc_front" class="btn btn-primary"><i
                            class=" ri-file-download-line align-bottom"></i>
                        Download</a>
                </div>
            </div>
        </div><!-- end card header -->

        <div class="card-body p-0">

            <a href="{{ url('storage/' . $bcFrontImg) }}" data-fancybox>
                <img src="{{ url('storage/' . $bcFrontImg) }}" style="height: 333px; width: 800px;"
                    class="img-thumbnail" alt="Birth Cetificte Front">
            </a>

        </div><!-- end card body -->
    </div><!-- end card -->
</div><!-- end col -->

<div class="col-xl-5">
    <div class="card card-height-100">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Birth certificate back</h4>
            <div class="flex-shrink-0">
                <div class="flex-shrink-0">
                    <a href="{{ url('storage/' . $bcBackImg) }}" download="bc_back" class="btn btn-primary"><i
                            class=" ri-file-download-line align-bottom"></i>
                        Download</a>
                </div>
            </div>
        </div><!-- end card header -->

        <div class="card-body p-0">

            <a href="{{ url('storage/' . $bcBackImg) }}" data-fancybox>
                <img src="{{ url('storage/' . $bcBackImg) }}" style="height: 333px; width: 800px;" class="img-thumbnail"
                    alt="Birth Certificate Back">
            </a>


        </div><!-- end card body -->
    </div><!-- end card -->
</div><!-- end col -->
