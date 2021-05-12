@extends('layouts.main')
@php
$menu = false ;
@endphp
@section('title', trans('general.supplier_new_account'))


@push('styles')
<!-- <link rel="stylesheet" href="{{ asset('/web/css/custom.css')}}">
<link rel="stylesheet" href="{{ asset('/web/css/custom-register.css')}}"> -->
<link rel="stylesheet" href="{{ asset('/web/css/custom-register-supplier.css')}}">
<!-- <link rel="stylesheet" href="{{ asset('/web/css/custom-register.css')}}">   -->

@endpush



@section('content')

<div class="overlay-s"></div>
<div class="jumpo col-xs-12" style="background-image: url({{ asset('/web/images/cover.jpg')}})">
    <div class="container">
        <h3>@lang('general.supplier_new_account')</h3>
        </h3>
        <ul>
            <li>
                <a href="{{url('/')}}">@lang('general.home')</a>
            </li>
            <li>@lang('general.supplier_new_account')</li>
        </ul>
    </div>
</div>
<main class="main-content col-xs-12">
    <div class="sign-wrap sup-wrap suppliers-register-f col-xs-12">
        <div class="container">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Multi step form -->
            <section class="multi_step_form">
                <form id="msform" action="{{url('register/supplier')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Tittle -->
                    <div class="tittle">
                        <h2>@lang('general.supplier_new_account')</h2>
                        <p>@lang('general.register_text')</p>
                    </div>
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">@lang('general.register_procces_2')</li>
                        <li>@lang('general.register_procces_3')</li>
                        <li>@lang('general.register_procces_1')</li>
                    </ul>
                    <!-- fieldsets -->


                    @include('auth.supplier_steps.information')

                    @include('auth.supplier_steps.location')

                    @include('auth.supplier_steps.images')




                </form>
            </section>
            <!-- End Multi step form -->










        </div>
    </div>
</main>



@endsection


@push('scripts')
<script>
    var current_location = @json( __('general.current_location') );
</script>

<script src="{{ asset('/web/js/select2.full.min.js')}}"></script>
<script src="{{ asset('/web/js/mapInput.js')}}"></script>



<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcP3JChqWSCHtsjW4e_Ug8h0htjiIhcHw&libraries=places&callback=initMap"
    async defer></script>

<!-- mayada -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<script>
    $('#country').change(function() {
    var cid = $(this).val();
    if (cid) {
        $.ajax({
            type: "get",
            url: " /getStates/" + cid,
            success: function(res) {
                if (res) {
                    $("#state").empty();
                    $("#city").empty();
                    $("#state").append('<option>Select State</option>');
                    $.each(res, function(key, value) {
                        $("#state").append('<option value="' + key + '">' + value +
                            '</option>');
                    });
                    $('#state').niceSelect('update');

                }
            }

        });
    }
});
$('#state').change(function() {
    var sid = $(this).val();
    if (sid) {
        $.ajax({
            type: "get",
            url: "/getCities/" + sid,
            success: function(res) {
                if (res) {
                    $("#city").empty();
                    $("#city").append('<option>Select City</option>');
                    $.each(res, function(key, value) {
                        $("#city").append('<option value="' + key + '">' + value +
                            '</option>');
                    });
                    $('#city').niceSelect('update');

                }
            }

        });
    }
});


$(".select-nosearch").select2({
    placeholder: "  {{ __('general.categories') }}  ",
    allowClear: true
});


        
 
 
		$('.next').live('click', function () {					
            console.log('as');

			var link = $(this);
			if(validateName() & validateEmail())
			{
				var link = $(this);
			
				$.ajax({
					url : 'load.php',
					data: '',
					type: 'GET',
					cache: 'false',
					beforeSend: function () {
						link.addClass('loading');					
					},
					
					success: function(data) {
						link.removeClass('loading');
						$('#button').css('display','none');		
						$('#success').css('display','block');
							  
					},
					error:function(x,e){
						if(x.status==0)
						{
							alert('You are offline!!\n Please Check Your Network.');
						}
						else if(x.status==404)
						{
							alert('Requested URL not found.');
						}
						else if(x.status==500)
						{
							alert('Internel Server Error.');
						}
						else if(e=='parsererror')
						{
							alert('Error.\nParsing JSON Request failed.');
						}
						else if(e=='timeout')
						{
							alert('Request Time out.');
						}
						else 
						{
							alert('Unknow Error.\n'+x.responseText);
						}
					}		
				});
				
				return true
			}
			else
			{
				return false;
			}
		});

	

</script>
@endpush