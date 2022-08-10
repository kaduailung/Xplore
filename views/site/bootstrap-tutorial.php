<!-- Layout Tutorial -->
<div class="container" style="background-color: salmon;">
    <div class="row">
        <!-- Default -->
        <div class="col-12"></div>

        <!-- Small Device -->
        <div class="col-sm-12"></div>

        <!-- Medium Device -->
        <div class="col-md-12"></div>

        <!-- Large Device -->
        <div class="col-lg-12"></div>

        <div class="col-3">
            col-1
        </div>
        <div class="col-3">
            col-2
        </div>
        <div class="col-3">
            col-3
        </div>
        <div class="col-3">
            col-4
        </div>

        <!-- <div class="col-12 col-md-6 col-lg-4" style="color:white; background-color: blue;">
            test layout
        </div> -->
        <div class="col-4 col-md-6 col-lg-12" style="color:white; background-color: blue;">
            <div class="row">
                <div class="col-6">
                    <h1 class="overflow-hidden">different test layout</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum, temporibus.</p>
                </div>
                <div class="col-6">
                    <h1 class="overflow-hidden">different test layout</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum, temporibus.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background-color: green;">
    aaa
</div>


<!-- Color & Utility -->
<div class="container-fluid bg-white">
    <div class="row">
        <div class="col-12">
            <h1 class="text-primary">Some Dummy Text</h1>
            <h1 class="text-info">Some Dummy Text</h1>
            <h1 class="text-danger">Some Dummy Text</h1>
            <h1 class="text-warning">Some Dummy Text</h1>
            <h1 class="text-secondary">Some Dummy Text</h1>
            <h1 class="text-muted">Some Dummy Text</h1>
            <h1 class="text-dark">Some Dummy Text</h1>
            <h1 class="text-light">Some Dummy Text</h1>
        </div>
        <div class="col-12">
            <h1 class="bg-primary">Some Dummy Text</h1>
            <h1 class="bg-info">Some Dummy Text</h1>
            <h1 class="bg-danger">Some Dummy Text</h1>
            <h1 class="bg-warning">Some Dummy Text</h1>
            <h1 class="bg-secondary">Some Dummy Text</h1>
            <h1 class="bg-dark">Some Dummy Text</h1>
            <h1 class="bg-light">Some Dummy Text</h1>
            <div class="shadow-lg">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, ex provident sapiente unde vitae ea ipsam earum odit ratione quis veniam nesciunt corrupti sint totam labore! Ex sequi quos fuga!</p>
            </div>
            <p class="border">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed cum nemo porro nesciunt corporis repellendus assumenda quod beatae delectus rem?
            </p>
        </div>
    </div>
    <div class="row">
        <button class="btn btn-primary">Click Me</button>
        <button class="btn btn-info">Click Me</button>
        <div class="col-4">
            <button class="btn btn-danger rounded-pill btn-block px-4">Click Me</button>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header ">
                    Lorem ipsum dolor
                </div>
                <div class="card-body">
                    <p class="text-truncate"
                     style="max-width: 2100px;">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, ipsam hic fugit aliquam dicta quisquam alias, corrupti dolores itaque repudiandae possimus officiis excepturi assumenda beatae cumque ratione ipsum placeat maxime!
                    </p>
                </div>
                <div class="card-footer">
                    <small><?= date("d-M-Y") ?></small>
                </div>
            </div>
        </div>
    </div>
</div>