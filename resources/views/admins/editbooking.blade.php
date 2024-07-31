@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-5 d-inline">Edit Booking</h5>
          <p>Current Status is <b>{{ $booking->status }}<b></p>
      <form method="POST" action="{{ route('update.booking', $booking->id) }}" enctype="multipart/form-data">
        @csrf

            <div class="form-outline mb-4 mt-4">

              <select name="status" class="form-select  form-control" aria-label="Default select example">
                <option selected>Choose Status</option>
                <option value="Proccessing">Proccessing</option>
                <option value="Booked">Booked</option>
              </select>
            </div>

            <br>

            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">update</button>


          </form>

        </div>
      </div>
    </div>
  </div>

@endsection
