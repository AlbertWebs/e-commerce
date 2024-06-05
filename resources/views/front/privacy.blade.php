@extends('front.master')
@section('content')
<style type="text/css">
 a{
   color:#0090f0;
 }
 h2{
   color:#0090f0;
   font-size:24px;
 }
</style>
<div id="blog-page-contain">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-8">
        @if($Privacy->isEmpty())
        <center>

        </center>
        @else
          <!-- left block Start  -->
          <div id="left" style="font-size:20px; color:#000; padding-top:80px; padding-bottom:80px">
            Rick Electronics values the privacy of any person or organization, business in nature or otherwise. We are therefore committed to protecting any personal information collected through the www.rickelectronics.co.ke website. Rick Electronics may from time to time change this information and will inform all interested parties of the changes.<br><br>

            <h2>Personal Information Collected</h2><br>
            rickelectronics.co.ke will gather information in the background when any person or legal entity visits the rickelectronics.co.ke website using cookies. This may include IP address, device type, Internet browser type, operating system, location, and other device-specific information. Data collected is for business intelligence meant for enhancing user experience any time a user visits the rickelectronics.co.ke.<br><br>

            <h2>Management of Personal Database</h2><br>
            You can choose whether you wish to receive promotional communications from our website by email using the subscribe form in the footer section of this page. If you receive promotional email or SMS messages from us and would like to opt-out, you can request the deletion of your email through info@rickelectronics.co.ke.<br><br>

            <h2>Contact</h2><br>
            You have the right to review the personal data we keep about you. You can request an overview of your personal data by emailing info@rickelectronics.co.ke with the subject line "Request for personal information." To help us prevent the fraudulent collection of personal information, please include a scan of your passport or identity card. If you would like us to remove your personal information from our database, please email info@rickelectronics.co.ke with the subject line "Request for the removal of personal information." Please bear in mind that we may need to retain certain information for legal and/or administrative purposes such as record keeping or to detect fraudulent or criminal activities.



          </div>
          <!-- left block end  -->
        @endif
        </div>

      </div>
    </div>
  </div>
@endsection
