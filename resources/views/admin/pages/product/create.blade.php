@extends('admin.layouts.master')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">

            {{--content--}}

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create new product</h4>

                    @include('admin.partials.messages')

                    <form class="forms-sample" action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group">
                            <label for="exampleInputName1">Title</label>
                            <input name="title" type="text" class="form-control" id="exampleInputName1" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Description</label>
                            <textarea name="description" class="form-control" id="exampleTextarea1" rows="4" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Category</label>
                            <select name="category_id" type="text" class="form-control" id="exampleInputName1" >
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Brand</label>
                            <select name="brand_id" type="text" class="form-control" id="exampleInputName1" >
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Price</label>
                            <input step="any" name="price" type="number" class="form-control" id="exampleInputName1" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Offer price</label>
                            <input step="any" name="offer_price" type="number" class="form-control" id="exampleInputName1" placeholder="Offer price">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Quantity</label>
                            <input name="quantity" type="number" class="form-control" id="exampleInputName1" placeholder="Quantity">
                        </div>

                        <div class="form-group">
                            <label for="image">Product images</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <input name="image[]" type="file" class="form-control" id="image">
                                </div>
                                <div class="col-md-4">
                                    <input name="image[]" type="file" class="form-control" id="image">
                                </div>
                                <div class="col-md-4">
                                    <input name="image[]" type="file" class="form-control" id="image">
                                </div>
                                <div class="col-md-4">
                                    <input name="image[]" type="file" class="form-control" id="image">
                                </div>
                                <div class="col-md-4">
                                    <input name="image[]" type="file" class="form-control" id="image">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputCity1">City</label>
                            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                        </div>

                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>


            {{--content end--}}

        </div>

        </div>
    </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- partial -->
    </div>
    <!-- main-panel ends -->

@endsection
