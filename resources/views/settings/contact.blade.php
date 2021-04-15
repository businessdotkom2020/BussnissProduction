@extends('layouts.main')
@php
$menu = false ;
@endphp
@section('content')




<div class="clearfix"></div>
  <!-- Start Page-Content -->
  <section class="page-content contact-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contact-con  row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="contact-info">
                <h3>بيانات التواصل</h3>
                <ul class="list-unstyled">
                  <li>
                    <h4>Work With Us</h4>
                    <span>Send your CV to our email: career@martfury.com</span>
                  </li>
                  <li>
                    <h4>Headquarters</h4>
                    <span>17 Queen St, Southbank, Melbourne 10560, Australia</span>
                  </li>
                  <li>
                    <h4>Contact Directly</h4>
                    <span>contact@info.com</span>
                    <span>(+004) 912-3548-07</span>
                  </li>
                  <li>
                    <h4>Vendor Support</h4>
                    <span>contact@info.com</span>
                    <span>(+004) 912-3548-07</span>
                  </li>
                  <li>
                    <h4>Media Relations</h4>
                    <span>contact@info.com</span>
                    <span>(+004) 912-3548-07</span>
                  </li>
                  <li>
                    <h4>Customer Service</h4>
                    <span>contact@info.com</span>
                    <span>(+004) 912-3548-07</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="contact-form">
                <h3>تواصل معنا الان</h3>
                <form action="#" method="">
                  <div class="form-group">  
                      <input type="text" class="form-control" placeholder="الاسم">
                  </div>
                  <div class="form-group">
                      <input type="email" class="form-control" placeholder="البريد الالكتروني">
                  </div>
                  <div class="form-group">
                      <input type="number" class="form-control" placeholder="رقم الجوال">
                  </div>
                  <div class="form-group">
                      <textarea class="form-control" placeholder="رسالة" rows="5"></textarea>
                  </div>
                  <div class="">
                      <button class="submit" type="submit" class="">ارسل رسالة</button>
                  </div>
                   
                  

              </form>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>


  <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.343671270784!2d49.57659688503414!3d25.393304283805367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e3796f8ba9b6a57%3A0xde25e24a4501ad0f!2z2KjYsdisINin2YTZhdmE2K3ZhQ!5e0!3m2!1sar!2seg!4v1608019760599!5m2!1sar!2seg" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  <!-- End Page-Content -->










@endsection


@push('scripts')



@endpush