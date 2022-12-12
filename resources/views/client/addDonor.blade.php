{{-- Layout For Add Data Donor --}}
@extends('layouts.client')

@section('content')
<section class="add-donor" id="add-donor">
    <h3 class="text-center">Add Pendonor Data</h3>
    <div class="container">
        <!-- Form Untuk Add Data Product-->
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Category</label>
            <select class="custom-select custom-select-sm mb-2" name="pendonor_category_id">
                <option selected>Pilih Category</option>
                {{-- @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach --}}
            </select>
            <div class="form-group">
                <label for="card_number">Card Number</label>
                <input name="card_number" type="text" class="form-control" id="name" aria-describedby="name" placeholder="enter card number" >
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control" id="price" placeholder="enter name">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <input name="gender" type="text" class="form-control" id="price" placeholder="enter gender">
            </div>
            <div class="form-group">
                <label for="no_ktp">No KTP/SIM</label>
                <input name="no_ktp" type="text" class="form-control" id="rating" placeholder="enter no KTP/SIM">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input name="address" type="text" class="form-control" id="description" placeholder="enter address">
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input name="phone_number" type="text" class="form-control" id="description" placeholder="enter phone number">
            </div>
            <div class="form-group">
                <label for="profession">Profession</label>
                <input name="profession" type="text" class="form-control" id="description" placeholder="enter profession">
            </div>
            <div class="form-group">
                <label for="office_address">Office Addres</label>
                <input name="office_address" type="text" class="form-control" id="description" placeholder="enter office address">
            </div>
            <div class="form-group">
                <label for="office_phone">Office Phone Number</label>
                <input name="office_phone" type="text" class="form-control" id="description" placeholder="enter office phone number">
            </div>
            <div class="form-group">
                <label for="place_birth">Place Birth</label>
                <input name="place_birth" type="text" class="form-control" id="description" placeholder="enter place birth">
            </div>
            <div class="form-group">
                <label for="date_birth">Date Birth</label>
                <input name="date_birth" type="date" class="form-control" id="description" placeholder="enter date birth">
            </div>
            <div class="form-group">
                <label for="number_donors">Number of Donors</label>
                <input name="number_donors" type="text" class="form-control" id="description" placeholder="enter number of donors">
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn_submit">Submit</button>
            </div>
        </form>
    </div>
</section>
@endsection