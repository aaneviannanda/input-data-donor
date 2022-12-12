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
                @foreach($data_donor as $pd)
                    @php $no++; @endphp
                    <tr>
                        <td class="text-center">{{ $no }}</td>
                        <td>{{ $pd->categories->name }}</td>
                        <td>{{ $pd->card_number }}</td>
                        <td>{{ $pd->name }}</td>
                        <td>{{ $pd->gender }}</td>
                        <td>{{ $pd->no_ktp_sim }}</td>
                        <td>{{ $pd->address }}</td>
                        <td>{{ $pd->phone_number }}</td>
                        <td>{{ $pd->profession }}</td>
                        <td>{{ $pd->office_address }}</td>
                        <td>{{ $pd->office_phone_number }}</td>
                        <td>{{ $pd->place_birth }}</td>
                        <td>{{ $pd->date_birth }}</td>
                        <td>{{ $pd->number_of_donors }}</td>
                        <td class="text-center">
                            <div class="d-inline-flex add_product_btn">
                                <button data-toggle="modal" data-target="#edit__pendonor_{{ $pd->id }}" class="btn btn-sm btn-warning">Edit</button>
                                <form method="POST" action="{{ route('admin.deletePendonorData', ['id' => $pd->id]) }}" enctype="multipart/form-data">
                                    @csrf
                                    <button type = "submit" class="btn btn-sm btn-danger">{{ __('Hapus') }}</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <!-- Modal Untuk Edit Data Product-->
            @foreach($data_donor as $pd)
            <div class="modal fade" id="edit__pendonor_{{ $pd->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Pendonor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.updatePendonorData', ['id' => $pd->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label for="name">Category</label>
                                <select class="custom-select custom-select-sm mb-2" name="pendonor_category_id">
                                    <option selected>Pilih Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $pd->pendonor_category_id }}" selected>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <div class="form-group">
                                    <label for="card_number">Card Number</label>
                                    <input name="card_number" type="text" class="form-control" id="name" aria-describedby="name" placeholder="enter card number" value="{{ $pd->card_number }}" >
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input name="name" type="text" class="form-control" id="price" placeholder="enter name" value="{{ $pd->name }}" >
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <input name="gender" type="text" class="form-control" id="price" placeholder="enter gender" value="{{ $pd->gender }}" >
                                </div>
                                <div class="form-group">
                                    <label for="no_ktp">No KTP/SIM</label>
                                    <input name="no_ktp" type="text" class="form-control" id="rating" placeholder="enter no KTP/SIM" value="{{ $pd->no_ktp_sim }}" >
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input name="address" type="text" class="form-control" id="description" placeholder="enter address" value="{{ $pd->address }}" >
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input name="phone_number" type="text" class="form-control" id="description" placeholder="enter phone number" value="{{ $pd->phone_number }}" >
                                </div>
                                <div class="form-group">
                                    <label for="profession">Profession</label>
                                    <input name="profession" type="text" class="form-control" id="description" placeholder="enter profession" value="{{ $pd->profession }}" >
                                </div>
                                <div class="form-group">
                                    <label for="office_address">Office Addres</label>
                                    <input name="office_address" type="text" class="form-control" id="description" placeholder="enter office address" value="{{ $pd->office_address }}" >
                                </div>
                                <div class="form-group">
                                    <label for="office_phone">Office Phone Number</label>
                                    <input name="office_phone" type="text" class="form-control" id="description" placeholder="enter office phone number" value="{{ $pd->office_phone_number }}" >
                                </div>
                                <div class="form-group">
                                    <label for="place_birth">Place Birth</label>
                                    <input name="place_birth" type="text" class="form-control" id="description" placeholder="enter place birth" value="{{ $pd->place_birth }}" >
                                </div>
                                <div class="form-group">
                                    <label for="date_birth">Date Birth</label>
                                    <input name="date_birth" type="date" class="form-control" id="description" placeholder="enter date birth" value="{{ $pd->date_birth }}" >
                                </div>
                                <div class="form-group">
                                    <label for="number_donors">Number of Donors</label>
                                    <input name="number_donors" type="text" class="form-control" id="description" placeholder="enter number of donors" value="{{ $pd->number_of_donors }}" >
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection