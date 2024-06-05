@extends('front.master')
@section('content')
@foreach($SiteSettings as $Settings)
<!-- map section satrt -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.262637999425!2d36.8267049!3d-1.2845387!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11ccf46b6d83%3A0x3fa4fb553b2b1dfb!2sRick%20Electronics!5e0!3m2!1sen!2ske!4v1717063475866!5m2!1sen!2ske"></iframe>
</div>
<!-- map section end -->
<center>
   @if(Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
   @endif
</center>
<!-- contact-section start -->
<section class="contact-section pt-6rem pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 mb-5">
                <!--  contact page side content  -->
                <div class="contact-page-side-content">
                    <h3 class="contact-page-title">Contact Us</h3>
                    <p class="contact-page-message mb-30">Rick Electronics <br> Computer Accessories<br> Photocopy Machines <br> Phone Accessories <br> Headphones and Earphones</p>
                    <!--  single contact block  -->

                    <div class="single-contact-block">
                        <h4><i class="fa fa-fax"></i> Address</h4>
                        <p>{{$Settings->address}}</p>
                        <p>{{$Settings->location}}</p>
                    </div>

                    <!--  End of single contact block -->

                    <!--  single contact block -->

                    <div class="single-contact-block">
                        <h4><i class="fa fa-phone"></i> Phone</h4>
                        <p>
                            <a href="tel:{{$Settings->mobile}}">Mobile: {{$Settings->mobile}}</a>
                        </p>
                        <p><a href="tel:{{$Settings->mobile_one}}">Mobile: {{$Settings->mobile_one}}</a></p>
                    </div>

                    <!-- End of single contact block -->

                    <!--  single contact block -->

                    <div class="single-contact-block">
                        <h4><i class="fas fa-envelope"></i> Email</h4>
                        <p>
                            <a href="mailto:{{$Settings->email}}">{{$Settings->email}}</a>
                        </p>
                        <p> <a href="mailto:{{$Settings->email_one}}">{{$Settings->email_one}}</a></p>
                    </div>

                    <!--=======  End of single contact block  =======-->
                </div>

                <!--=======  End of contact page side content  =======-->

            </div>
            <div class="col-lg-6 col-12 mb-5">
                <!--  contact form content -->
                <div class="contact-form-content">
                    <h3 class="contact-page-title">Tell Us Your Message</h3>
                    <div class="contact-form">
                        <form id="contact-form" action="{{url('/submitMessage')}}" method="post">
                                {{ csrf_field() }}
                            <div class="form-group">
                                <label>Your Name <span class="required">*</span></label>
                                <input type="text" name="name" id="customername" required="">
                            </div>
                            <div class="form-group">
                                <label>Your Email <span class="required">*</span></label>
                                <input type="email" name="email" id="customerEmail" required="">
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name="subject" id="contactSubject" required="">
                            </div>
                            <div class="form-group">
                                <label>Your Message</label>
                                <textarea name="message" id="contactMessage" required=""></textarea>
                            </div>
                            {{-- {!! app('captcha')->render(); !!}
                            <div class="form-group" style="display: none;">
                                <label for="faxonly">Fax Only
                                   <input type="checkbox" name="faxonly" id="faxonly" />
                                </label>
                            </div> --}}
                            <div class="clearfix"></div>
                            <div class="form-group mb-0">
                                <button type="submit" value="submit" id="submits" class="btn btn-dark3" name="submit">submit</button>
                            </div>
                        </form>
                    </div>
                    <p class="form-messege pt-10 pb-10 mt-10 mb-10"></p>
                </div>
                <!-- End of contact -->
            </div>
        </div>
    </div>
</section>
<!-- contact-section end -->
@endforeach
@endsection
