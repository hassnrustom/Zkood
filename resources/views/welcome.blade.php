<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        {{-- For Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .nav-tabs li button{
                color: black !important;
            }
            .nav-tabs li button.active {
                color: white !important;
                font-weight: bold !important;
                background-color: rgb(10, 10, 10) !important;
            }
        </style>
    </head>
    <body class="antialiased">

        <div class="header row m-3 align-items-center">
            <h1 class="text-center fw-bold" style="color: #2e77ff !important">Zkood</h1>
            <h3 class="text-center text-muted">Welcom To Laravel Technical Challenge</h3>
        </div>

        <div class="row m-0 justify-content-center align-items-center">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">

                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="all-tab" data-bs-toggle="tab"
                        data-bs-target="#create_unit" type="button" role="tab" aria-controls="create_unit"
                        aria-selected="true">Create Unit
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link " id="all-tab" data-bs-toggle="tab"
                        data-bs-target="#create_product" type="button" role="tab" aria-controls="create_product"
                        aria-selected="true">Create Product
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link " id="all-tab" data-bs-toggle="tab"
                        data-bs-target="#create_inventory" type="button" role="tab" aria-controls="create_inventory"
                        aria-selected="true">Create Inventory
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="like-tab" data-bs-toggle="tab"
                        data-bs-target="#product" type="button" role="tab" aria-controls="product"
                        aria-selected="true">Get Product Detail
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="like-tab" data-bs-toggle="tab"
                        data-bs-target="#user" type="button" role="tab" aria-controls="user"
                        aria-selected="true">Greate User
                    </button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="myTabContent">

            {{-- For Unit --}}
            <div class="tab-pane overflow-auto fade show active" id="create_unit" role="tabpanel" aria-labelledby="create_unit-tab">
                <div class="mt-5 row m-0 align-items-center justify-content-center">
                    @if (\Session::has('success_message_unit'))
                        <div class="alert row alert-success col-lg-6 justify-content-center">
                            <h3 class="text-center">{!! \Session::get('success_message_unit') !!}</h3>
                        </div>
                    @endif
                    @if (\Session::has('success_message'))
                        <div class="alert row alert-success col-lg-6 justify-content-center">
                            <h3 class="text-center">{!! \Session::get('success_message') !!}</h3>
                        </div>
                    @endif
                    @if (\Session::has('success_message_inventory'))
                        <div class="alert row alert-success col-lg-6 justify-content-center">
                            <h3 class="text-center">{!! \Session::get('success_message_inventory') !!}</h3>
                        </div>
                    @endif
                    @if (\Session::has('success_message_user'))
                        <div class="alert row alert-success col-lg-6 justify-content-center">
                            <h3 class="text-center">{!! \Session::get('success_message_user') !!}</h3>
                        </div>
                    @endif
                    <div class="row justify-content-center">
                        <form class="col-lg-5" action=" units" method="POST">
                            @csrf
                            <h2 class="text-center mb-4">Create Unit</h2>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Unit Name</label>
                                <input required type="text" name="name" class="form-control"
                                value="" placeholder="Enter Name of Unit"  placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Unit modifier</label>
                                <input required type="text" name="modifier" class="form-control"
                                value="" placeholder="Enter modifier of Unit"  placeholder="">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success">Add Unit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- for Product --}}
            <div class="tab-pane overflow-auto fade show " id="create_product" role="tabpanel" aria-labelledby="create_product-tab">
                <div class="mt-5 row m-0 align-items-center justify-content-center">

                    <div class="row justify-content-center">
                        <form class="col-lg-5" action=" products" method="POST">
                            @csrf
                            <h2 class="text-center mb-4">Create Product</h2>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                                <input required type="text" name="name" class="form-control"
                                value="" placeholder="Enter Name of product"  placeholder="">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success">Add Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            {{-- for Inventory --}}
            <div class="tab-pane overflow-auto fade show " id="create_inventory" role="tabpanel" aria-labelledby="create_inventory-tab">
                <div class="mt-5 row m-0 align-items-center justify-content-center">
                    <form class="col-lg-5" action="inventories" method="POST">
                        @csrf
                        <h2 class="text-center mb-4">Create Inventory</h2>
                        <select required class="form-select form-select-lg mb-3" name="product_id">
                            <option value="" selected>Please Select a product</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                        <select required class="form-select form-select-lg mb-3" name="unit_id">
                            <option value="" selected>Please Select an Unit</option>
                            @foreach ($units as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                            @endforeach
                        </select>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Amount</label>
                            <input required type="number" name="amount" class="form-control" value="" placeholder="Pass Integer Number" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Create</button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- for get Info --}}
            <div class="tab-pane overflow-auto fade show" id="product" role="tabpanel" aria-labelledby="product-tab">

                <div class="mt-5 row m-0 align-items-center justify-content-center">
                    <form class="col-lg-5" action="products/{product}" method="GET">
                        <h2 class="text-center mb-4">Select Product</h2>
                        <select required class="form-select form-select-lg mb-3" name="product_id">
                            <option value="" selected>Please Select a product</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                        <select class="form-select form-select-lg mb-3" name="unit_id">
                            <option value="" selected>Please Select an Unit</option>
                            @foreach ($units as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                            @endforeach
                        </select>
                        {{-- <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Amount</label>
                            <input required type="number" name="amount" class="form-control" value="" placeholder="Pass Integer Number" id="exampleFormControlInput1" placeholder="">
                        </div> --}}
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Get Details</button>
                        </div>
                    </form>
                </div>

            </div>

            {{-- for create user --}}
            <div class="tab-pane overflow-auto fade show " id="user" role="tabpanel" aria-labelledby="user-tab">
                <div class="mt-5 row m-0 align-items-center justify-content-center">

                    <div class="row justify-content-center">
                        <form class="col-lg-5" action=" users" method="POST">
                            @csrf
                            <h2 class="text-center mb-4">Create User</h2>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">User Name</label>
                                <input required type="text" name="name" class="form-control"
                                value="" placeholder="Enter Name of User"  placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">User Email</label>
                                <input required type="email" name="email" class="form-control"
                                value="" placeholder="Enter Email of User"  placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">User Password</label>
                                <input required type="password" name="password" class="form-control"
                                value="" placeholder="Enter New Password of User">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success">Add User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


         {{-- For Bootstrap --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
