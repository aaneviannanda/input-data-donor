@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <h3 class="text-center mb-4">Pendonor Data</h3>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    @if (Session::has('success'))
        <script>swal("Success actions!", "{{ Session::get('success') }}", "success");</script>
    @endif
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Pendonor</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="d-flex justify-content-end mb-3">
                            <a href="#" data-toggle="modal" data-target="#add__pendonor" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Add Pendonor Data</span>
                            </a>
                        </div>
                    </div>
                </div>
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Pendonor Category</th>
                        <th>Card Number</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>No KTP SIM</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Profession</th>
                        <th>Office Address</th>
                        <th>Office Phone Number</th>
                        <th>Place Birth</th>
                        <th>Date Birth</th>
                        <th>Number Of Donors</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                @php $no = 0; @endphp
                {{-- @foreach($pendonor_data as $pd)
                    @php $no++; @endphp
                    <tr>
                        <td class="text-center">{{ $no }}</td>
                        <td>{{ $pd->categories->name }}</td>
                        <td>{{ $pd->name }}</td>
                        <td>{{ $pd->price }}</td>
                        <td>{{ $pd->link_img }}</td>
                        <td>{{ $pd->rating }}</td>
                        <td>{{ $pd->description }}</td>
                        <td class="text-center">
                            <div class="d-inline-flex add_product_btn">
                                <button data-toggle="modal" data-target="#edit__product_{{ $product->id }}" class="btn btn-sm btn-warning">Edit</button>
                                <form method="POST" action="{{ route('delete_product', ['id' => $product->id]) }}" enctype="multipart/form-data">
                                    @csrf
                                    <button type = "submit" class="btn btn-sm btn-danger">{{ __('Hapus') }}</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach --}}
                </tbody>
            </table>

            <!-- Modal Untuk Add Data Product-->
            <div class="modal fade" id="add__pendonor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Pendonor Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label for="name">Category</label>
                                <select class="custom-select custom-select-sm mb-2" name="category_id">
                                    <option selected>Pilih Category</option>
                                    {{-- @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach --}}
                                </select>
                                <div class="form-group">
                                    <label for="name">Card Number</label>
                                    <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="enter card number" >
                                </div>
                                <div class="form-group">
                                    <label for="price">Name</label>
                                    <input name="price" type="text" class="form-control" id="price" placeholder="enter name">
                                </div>
                                <div class="form-group">
                                    <label for="price">Gender</label>
                                    <input name="price" type="text" class="form-control" id="price" placeholder="enter gender">
                                </div>
                                <div class="form-group">
                                    <label for="rating">No KTP/SIM</label>
                                    <input name="rating" type="text" class="form-control" id="rating" placeholder="enter no KTP/SIM">
                                </div>
                                <div class="form-group">
                                    <label for="description">Address</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="enter address">
                                </div>
                                <div class="form-group">
                                    <label for="description">Phone Number</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="enter phone number">
                                </div>
                                <div class="form-group">
                                    <label for="description">Profession</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="enter profession">
                                </div>
                                <div class="form-group">
                                    <label for="description">Office Addres</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="enter office address">
                                </div>
                                <div class="form-group">
                                    <label for="description">Office Phone Number</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="enter office phone number">
                                </div>
                                <div class="form-group">
                                    <label for="description">Place Birth</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="enter place birth">
                                </div>
                                <div class="form-group">
                                    <label for="description">Date Birth</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="enter date birth">
                                </div>
                                <div class="form-group">
                                    <label for="description">Number of Donors</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="enter number of donors">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Untuk Edit Data Product-->
            {{-- @foreach($products as $product)
            <div class="modal fade" id="edit__product_{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('update_product', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label for="name">Category</label>
                                <select class="custom-select custom-select-sm mb-2" name="category_id">
                                    <option selected>Pilih Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $product->category_id }}" selected>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <div class="form-group">
                                    <label for="name">Card Number</label>
                                    <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="enter card number" >
                                </div>
                                <div class="form-group">
                                    <label for="price">Name</label>
                                    <input name="price" type="text" class="form-control" id="price" placeholder="enter name">
                                </div>
                                <div class="form-group">
                                    <label for="price">Gender</label>
                                    <input name="price" type="text" class="form-control" id="price" placeholder="enter gender">
                                </div>
                                <div class="form-group">
                                    <label for="rating">No KTP/SIM</label>
                                    <input name="rating" type="text" class="form-control" id="rating" placeholder="enter no KTP/SIM">
                                </div>
                                <div class="form-group">
                                    <label for="description">Address</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="enter address">
                                </div>
                                <div class="form-group">
                                    <label for="description">Phone Number</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="enter phone number">
                                </div>
                                <div class="form-group">
                                    <label for="description">Profession</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="enter profession">
                                </div>
                                <div class="form-group">
                                    <label for="description">Office Addres</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="enter office address">
                                </div>
                                <div class="form-group">
                                    <label for="description">Office Phone Number</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="enter office phone number">
                                </div>
                                <div class="form-group">
                                    <label for="description">Place Birth</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="enter place birth">
                                </div>
                                <div class="form-group">
                                    <label for="description">Date Birth</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="enter date birth">
                                </div>
                                <div class="form-group">
                                    <label for="description">Number of Donors</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="enter number of donors">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach --}}
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection