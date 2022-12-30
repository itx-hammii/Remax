@extends('layouts.master')
@section('title', 'One Last Step')
@section('style')
    <style>
        .error {
            color: red;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="my-5">
            <h1>One Last Step</h1>
            <form class="card shadow p-5" id="fourth_step" method="POST" action="{{ route('fourth.step.post') }}"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="thirdStep" value="{{ request()->data }}">
                <div class="form-group">
                    <label for="present_in_uae">Are you present in UAE ?</label>
                    <select name="present_in_uae" id="present_in_uae" class="form-control">
                        <option value="">Please select</option>
                        <option value="yes" @if (old('present_in_uae') == 'yes') selected @endif>Yes</option>
                        <option value="no" @if (old('present_in_uae') == 'no') selected @endif>No</option>
                    </select>
                </div>
                <div class="form-group" id="country_div" style="display: none;">
                    <label for="country">Which country are you in?</label>
                    <select name="country" id="country" class="form-control">
                        <option value="">Please select</option>
                        @foreach ($nationality as $data)
                            <option value="{{ $data->nationality }}" @if (old('country') == $data->nationality) selected @endif>
                                {{ $data->nationality }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="visa_status">Visa Status in UAE</label>
                    <select name="visa_status" id="visa_status" class="form-control">
                        <option value="">Select your visa status</option>
                        <option value="visit" @if (old('visa_status') == 'visit') selected @endif>Visit</option>
                        <option value="resident" @if (old('visa_status') == 'resident') selected @endif>Resident</option>
                    </select>
                </div>
                <div class="form-group" id="visa_expiry_date_div"
                    style="@if (old('visa_status') != 'visit') display: none; @endif">
                    <label for="expiry_date">Expiry Date</label>
                    <input type="date" class="form-control" id="expiry_date" name="expiry_date"
                        placeholder="Expiry Date">
                    @error('expiry_date')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group" id="visa_anticipated_date" style="display: none;">
                    <label for="anticipated_date">Anticipated Date</label>
                    <input type="date" class="form-control" id="anticipated_date" name="anticipated_date"
                        placeholder="Anticipated Date">
                </div>
                <div class="form-group">
                    <label for="driving_license">Driving License of UAE</label>
                    <select name="driving_license" id="driving_license" class="form-control">
                        <option value="">Select your option</option>
                        <option value="yes" @if (old('driving_license') == 'yes') selected @endif>Yes</option>
                        <option value="no" @if (old('driving_license') == 'no') selected @endif>No</option>
                    </select>
                </div>
                <div class="form-group" id="own_car_div" style="@if (old('driving_license') != 'yes') display: none; @endif">
                    <label for="own_car">Own a Car in UAE</label>
                    <select name="own_car" id="own_car" class="form-control">
                        <option value="">Select your option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="work_experience">Total years of work Experience</label>
                    <select name="work_experience" id="work_experience" class="form-control">
                        <option value="">Select your option</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="real_estate_experience">Total years of Real Estate Experience</label>
                    <select name="real_estate_experience" id="real_estate_experience" class="form-control">
                        <option value="">Select your option</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dubai_real_estate_experience">Total years of Dubai Real Estate Experience</label>
                    <select name="dubai_real_estate_experience" id="dubai_real_estate_experience" class="form-control">
                        <option value="">Select your option</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="form-group" id="rera_card_div" style="display: none;">
                    <label for="rera_card">Do you have RERA Card</label>
                    <select name="rera_card" id="rera_card" class="form-control">
                        <option value="">Select your option</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="form-group" id="rera_card_no_div" style="display: none">
                    <label for="rera_card_no">RERA Card No</label>
                    <input type="tel" class="form-control" id="rera_card_no" name="rera_card_no"
                        placeholder="Enter RERA Card Number">
                </div>
                <button type="submit" class="btn btn-primary">Next</button>
            </form>
        </div>

    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            // jquery validation plugIN
            $("#fourth_step").validate({
                ignore: [],
                focusInvalid: false,
                rules: {
                    present_in_uae: {
                        required: true,
                    },
                    visa_status: {
                        required: true,
                    },
                    driving_license: {
                        required: true,
                    },
                    work_experience: {
                        required: true,
                    },
                    real_estate_experience: {
                        required: true,
                    },
                    dubai_real_estate_experience: {
                        required: true,
                    }
                }
            });

            // show country dropdown on selecting NO on UAE Visa
            $(document).on('change', '#present_in_uae', function() {
                let present_in_uae = $('#present_in_uae').val();
                if (present_in_uae == 'no') {
                    $('#country_div').css('display', 'block');
                } else {
                    $('#country_div').css('display', 'none');
                    $('#country').val('');
                }
            });

            // own a car div show on driving license
            $(document).on('change', '#driving_license', function() {
                let driving_license = $('#driving_license').val();
                if (driving_license == 'yes') {
                    $('#own_car_div').css('display', 'block');
                } else {
                    $('#own_car_div').css('display', 'none').val('');
                }
            });

            $(document).on('change', '#dubai_real_estate_experience', function() {
                let dubai_real_estate_experience = $('#dubai_real_estate_experience').val();
                if (dubai_real_estate_experience > 0) {
                    $('#rera_card_div').css('display', 'block');
                } else {
                    $('#rera_card_div').css('display', 'none').val('');
                    $('#rera_card_no_div').css('display', 'none').val('');
                }
            });

            // show the expiry date if visa status is visit
            $(document).on('change', '#visa_status', function() {
                let visa_status = $('#visa_status').val();
                if (visa_status == 'visit') {
                    $('#visa_expiry_date_div').css('display', 'block');
                    $('#visa_anticipated_date').css('display', 'none');
                    $('#anticipated_date').val('');
                } else if (visa_status == 'resident') {
                    $('#visa_anticipated_date').css('display', 'block');
                    $('#visa_expiry_date_div').css('display', 'none');
                    $('#expiry_date').val('');
                }
            });

            // rera card no field show on yes and hide on no
            $(document).on('change', '#rera_card', function() {
                let rera_card = $('#rera_card').val();
                if (rera_card == 'yes') {
                    $('#rera_card_no_div').css('display', 'block');
                } else {
                    $('#rera_card_no_div').css('display', 'none');
                    $('#rera_card_no').val('');
                }
            });

        });
    </script>
@endsection
