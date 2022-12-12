{{-- Layout For Client --}}
@extends('layouts.client')

@section('content')
<section class="pendonor" id="pendonor">
    <h3 class="text-center">My Personal Data</h3>
    <div class="container">
        <div class="card card__data">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Card Number</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{ $data->card_number ? $data->card_number : 'Data Not Filled yet ...' }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{ $data->name ? $data->name : 'Data Not Filled yet ...' }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Category Pendonor</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{ $data->categories->name ? $data->categories->name : 'Data Not Found!' }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Gender</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{ $data->gender ? $data->gender : 'Data Not Filled yet ...' }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">No KTP/ SIM</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{ $data->no_ktp_sim ? $data->no_ktp_sim : 'Data Not Filled yet ...' }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{ $data->address ? $data->address : 'Data Not Filled yet ...' }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Phone Number</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{ $data->phone_number ? $data->phone_number : 'Data Not Filled yet ...' }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Profession</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{ $data->profession ? $data->profession : 'Data Not Filled yet ...' }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Office Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{ $data->office_address ? $data->office_address : 'Data Not Filled yet ...' }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Office Phone Number</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{ $data->office_phone_number ? $data->office_phone_number : 'Data Not Filled yet ...' }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Place Birth</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{ $data->place_birth ? $data->place_birth : 'Data Not Filled yet ...' }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Date Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{ $data->date_birth ? $data->date_birth : 'Data Not Filled yet ...' }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Number of Donors</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{ $data->number_of_donors ? $data->number_of_donors : 'Data Not Filled yet ...' }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="btn__data">
                  <button type="button" class="btn btn__edit__data mt-2" data-bs-toggle="modal" data-bs-target="#edit__pendonor__data">Edit Data</button>
                  <button type="button" class="btn btn__export__data mt-2">Export Data</button>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Edit Data -->
<div class="modal fade" id="edit__pendonor__data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Pendonor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('client.updateUserData') }}" method="POST">
                    @csrf
                    <label for="name">Category</label>
                    <select class="custom-select custom-select-sm mb-2" name="pendonor_category_id">
                        <option selected>Pilih Category</option>
                        @foreach($categories as $category)
                          @if ($category->id == $data->pendonor_category_id)                              
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                          @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                          @endif
                        @endforeach
                    </select>
                    <div class="form-group">
                        <label for="card_number">Card Number</label>
                        <input name="card_number" type="text" class="form-control" id="name" aria-describedby="name" placeholder="enter card number" value="{{ $data->card_number }}" >
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input name="name" type="text" class="form-control" id="price" placeholder="enter name" value="{{ $data->name }}" >
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <input name="gender" type="text" class="form-control" id="price" placeholder="enter gender" value="{{ $data->gender  }}" >
                    </div>
                    <div class="form-group">
                        <label for="no_ktp">No KTP/SIM</label>
                        <input name="no_ktp" type="text" class="form-control" id="rating" placeholder="enter no KTP/SIM" value="{{ $data->no_ktp_sim }}" >
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input name="address" type="text" class="form-control" id="description" placeholder="enter address" value="{{ $data->address }}" >
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input name="phone_number" type="text" class="form-control" id="description" placeholder="enter phone number" value="{{ $data->phone_number }}" >
                    </div>
                    <div class="form-group">
                        <label for="profession">Profession</label>
                        <input name="profession" type="text" class="form-control" id="description" placeholder="enter profession" value="{{ $data->profession }}" >
                    </div>
                    <div class="form-group">
                        <label for="office_address">Office Addres</label>
                        <input name="office_address" type="text" class="form-control" id="description" placeholder="enter office address" value="{{ $data->office_address }}" >
                    </div>
                    <div class="form-group">
                        <label for="office_phone">Office Phone Number</label>
                        <input name="office_phone" type="text" class="form-control" id="description" placeholder="enter office phone number" value="{{ $data->office_phone_number }}" >
                    </div>
                    <div class="form-group">
                        <label for="place_birth">Place Birth</label>
                        <input name="place_birth" type="text" class="form-control" id="description" placeholder="enter place birth" value="{{ $data->place_birth }}" >
                    </div>
                    <div class="form-group">
                        <label for="date_birth">Date Birth</label>
                        <input name="date_birth" type="date" class="form-control" id="description" placeholder="enter date birth" value="{{ $data->date_birth }}" >
                    </div>
                    <div class="form-group">
                        <label for="number_donors">Number of Donors</label>
                        <input name="number_donors" type="text" class="form-control" id="description" placeholder="enter number of donors" value="{{ $data->number_of_donors }}" >
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- About -->
@include('layouts.client.about')
<!-- End About -->

<!-- Team -->
@include('layouts.client.team')
<!-- End Team -->

<!-- Team -->
@include('layouts.client.contact')
<!-- End Team -->
@endsection