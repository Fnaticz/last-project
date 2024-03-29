@extends('navbar.main')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style type="text/css">
   .hide {
  display:none;
}
</style>


<br>
<br>
<br>
<br>
<br>
<br>
<div class="card">
    <div class="card-header">Form Booking Kamar</div>
    <div class="card-body">
        <form action="{{ route('booking.store') }}" method="post">
        @csrf

        <div>
            @if(session()->has('messagebok',))

            <div class="alert alert-success" id="alert">
              <button type="button" class="close" data-dismiss="alert">x</button>

            {{ session()->get('messagebok') }}
            </div>

            @endif
          </div>
        
        <label for="">Nama </label><br>
        <input type="text" name="namateam" id="namateam" class="form-control"><br>

        <label for="">Nama Penanggung Jawab</label>
        <input type="text" name="namapenanggungjawab" id="namapenanggungjawab" class="form-control"><br>

        <label for="">alamat</label>
        <input type="text" name="alamat" id="alamat" class="form-control"><br>

        <label for="">No. Telepon</label>
        <input type="tel" name="notelepon" id="notelepon" class="form-control" ><br>


        <div class="hide">
            <select class="form-control" name="playtime_id">
            @foreach ($playtimes as $playtime)
               <option value='{{ $playtime->id }}'>{{ $playtime->name }}</option>
            @endforeach
            </select>
        </div>

        <button type="submit" value="Save" class="btn btn-success">Booking</button>
    </form>

    </div>
</div>

      <!-- Booking Form -->
      {{-- <div class="booking-form-w3layouts" style="font-family: Inter;">
         <form action="{{ route('booking.store') }}" method="post">
         @csrf
            <h2 class="sub-heading-agileits">Booking Details</h2>
            <div class="main-flex-w3ls-sectns">
               <div class="field-agileinfo-spc form-w3-agile-text1">
                  <br>
                  <div class="field-agileinfo-spc form-w3-agile-text2">
                     <input type="text" name="namateam" id="namateam" class="timepicker form-control hasWickedpicker" placeholder="Atas Nama" value="" onkeypress="return false;">
                  </div>
               </div>
               <br>
               <div class="field-agileinfo-spc form-w3-agile-text2">
                  <br>
                  <div class="field-agileinfo-spc form-w3-agile-text2">
                     <input type="text" name="namapenanggungjawab" id="namapenanggungjawab" class="timepicker form-control hasWickedpicker" placeholder="Departure Time" value="" onkeypress="return false;">
                  </div>
               </div>
            </div>
            <div class="main-flex-w3ls-sectns">
               <div class="field-agileinfo-spc form-w3-agile-text1">
                  <select class="form-control">
                     <option>Preferred Hotel</option>
                     <option value="American Airline">American Hotel</option>
                     <option value="Delta Airlines">Delta Hotel</option>
                     <option value="Frontier Airline">Frontier Hotel</option>
                     <option value="Jet Blue">Jet Hotel</option>
                     <option value="Southwest Airlines">Southwest Hotel</option>
                  </select>
               </div>
               <div class="field-agileinfo-spc form-w3-agile-text2">
                  <select class="form-control">
                     <option>Preferred Seating</option>
                     <option value="Window">Single</option>
                     <option value="Aisle">Family</option>
                     <option value="Special">Special (Request note below)</option>
                  </select>
               </div>
            </div>
            <div class="main-flex-w3ls-sectns">
               <div class="field-agileinfo-spc form-w3-agile-text1">
                  <input id="datepicker" name="Text" type="text" placeholder="Arrival Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="" class="hasDatepicker">
               </div>
               <div class="field-agileinfo-spc form-w3-agile-text2">
                  <input type="text" id="timepicker" name="Time" class="timepicker form-control hasWickedpicker" placeholder="Departure Time" value="" onkeypress="return false;">
               </div>
            </div>
            <div class="triple-wthree">
               <div class="field-agileinfo-spc form-w3-agile-text11">
                  <select class="form-control">
                     <option value="">Adult(12+ Yrs)</option>
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5+</option>
                  </select>
               </div>
               <div class="field-agileinfo-spc form-w3-agile-text22">
                  <select class="form-control">
                     <option value="">Children(2-11 Yrs)</option>
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5+</option>
                  </select>
               </div>
               <div class="field-agileinfo-spc form-w3-agile-text33">
                  <select class="form-control">
                     <option value="">Infant(under 2Yrs)</option>
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5+</option>
                  </select>
               </div>
            </div>
            <div class="radio-section">
               <h6>Select your Fare</h6>
               <ul class="radio-buttons-w3-agileits">
                  <li>
                     <input type="radio" id="a-option" name="selector1">
                     <label for="a-option">One Way</label>
                     <div class="check"></div>
                  </li>
                  <li>
                     <input type="radio" id="b-option" name="selector1">
                     <label for="b-option">Round-Trip</label>
                     <div class="check">
                        <div class="inside"></div>
                     </div>
                  </li>
               </ul>
               <div class="clear"></div>
            </div>
            <div class="main-flex-w3ls-sectns">
               <div class="field-agileinfo-spc form-w3-agile-text1">
                  <input id="datepicker1" name="Text" type="text" placeholder="Return Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="" class="hasDatepicker">
               </div>
               <div class="field-agileinfo-spc form-w3-agile-text2">
                  <input type="text" id="timepicker1" name="Time" class="timepicker form-control hasWickedpicker" placeholder="Return Time" value="" onkeypress="return false;">
               </div>
            </div>
            <div class="field-agileinfo-spc form-w3-agile-text">
               <textarea name="Message" placeholder="Any Message..."></textarea>
            </div>
            <h3 class="sub-heading-agileits">Personal Details</h3>
            <div class="main-flex-w3ls-sectns">
               <div class="field-agileinfo-spc form-w3-agile-text1">
                  <input type="text" name="Name" placeholder="Full Name" required="">
               </div>
               <div class="field-agileinfo-spc form-w3-agile-text2">
                  <input type="text" name="Phone no" placeholder="Phone Number" required="">
               </div>
            </div>
            <div class="field-agileinfo-spc form-w3-agile-text">
               <input type="email" name="Email" placeholder="Email" required="">
            </div>
            <div class="clear"></div>
            <a href="login.html" class="button button__header focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" style="width: 20%; margin: auto; text-align: center; font-size: 17px; margin-top: 40px;">Submit</a>
            <div class="clear"></div>
         </form>
      </div>

        <label for="">No. Telepon</label>
        <input type="tel" name="notelepon" id="notelepon" class="form-control" ><br>

        <div class="hide"> 
 --}}