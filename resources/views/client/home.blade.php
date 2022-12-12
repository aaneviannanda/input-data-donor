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
                  xxxxxxx
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  John Doe
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Category Pendonor</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  baru/lama
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Gender</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  Male
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">No KTP/ SIM</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  08xxxxxxxxxxx
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  Bay Area, San Francisco, CA
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Phone Number</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    085xxx
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Profession</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  programmer
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Office Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  Jl.zzzzz
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Place Birth</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  Jl.zzzzz
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Date Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  31 Desember 2000
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Number of Donors</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  3
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="btn__data">
                  <a class="btn btn__add__new mt-2 me-5" href="{{ route('client.pendonorData'); }}">Add New</a>
                  <button type="button" class="btn btn__edit__data mt-2 me-5" data-bs-toggle="modal" data-bs-target="#edit__pendonor__data">Edit Data</button>
                  <button type="submit" class="btn btn__delete__data mt-2" href="">Delete Data</button>
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
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="name">Category</label>
                    <select class="custom-select custom-select-sm mb-2" name="pendonor_category_id">
                        <option selected>Pilih Category</option>
                        {{-- @foreach($categories as $category)
                        <option value="{{ $pd->pendonor_category_id }}" selected>{{ $category->name }}</option>
                        @endforeach --}}
                    </select>
                    <div class="form-group">
                        <label for="card_number">Card Number</label>
                        <input name="card_number" type="text" class="form-control" id="name" aria-describedby="name" placeholder="enter card number" value="" >
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input name="name" type="text" class="form-control" id="price" placeholder="enter name" value="" >
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <input name="gender" type="text" class="form-control" id="price" placeholder="enter gender" value="" >
                    </div>
                    <div class="form-group">
                        <label for="no_ktp">No KTP/SIM</label>
                        <input name="no_ktp" type="text" class="form-control" id="rating" placeholder="enter no KTP/SIM" value="" >
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input name="address" type="text" class="form-control" id="description" placeholder="enter address" value="" >
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input name="phone_number" type="text" class="form-control" id="description" placeholder="enter phone number" value="" >
                    </div>
                    <div class="form-group">
                        <label for="profession">Profession</label>
                        <input name="profession" type="text" class="form-control" id="description" placeholder="enter profession" value="" >
                    </div>
                    <div class="form-group">
                        <label for="office_address">Office Addres</label>
                        <input name="office_address" type="text" class="form-control" id="description" placeholder="enter office address" value="" >
                    </div>
                    <div class="form-group">
                        <label for="office_phone">Office Phone Number</label>
                        <input name="office_phone" type="text" class="form-control" id="description" placeholder="enter office phone number" value="" >
                    </div>
                    <div class="form-group">
                        <label for="place_birth">Place Birth</label>
                        <input name="place_birth" type="text" class="form-control" id="description" placeholder="enter place birth" value="" >
                    </div>
                    <div class="form-group">
                        <label for="date_birth">Date Birth</label>
                        <input name="date_birth" type="date" class="form-control" id="description" placeholder="enter date birth" value="" >
                    </div>
                    <div class="form-group">
                        <label for="number_donors">Number of Donors</label>
                        <input name="number_donors" type="text" class="form-control" id="description" placeholder="enter number of donors" value="" >
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