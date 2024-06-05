@extends('front.master')
@section('content')
<style type="text/css">
 a{
   color:#66139B;
 }
</style>
<div id="blog-page-contain">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-8">
        @if($Term->isEmpty())
        <center>

        </center>
        @else
          <!-- left block Start  -->
          <div id="left" style="font-size:20px; color:#000; padding-top:80px; padding-bottom:80px">


                <div class="description">
                    It is highly recommended that you read these Terms and Conditions carefully before using the www.rickelectronics.co.ke website operated by Rick Electronics. Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users, and others who access or use the Service. By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service. The Terms and Conditions agreement for Rick Electronics has been created by www.rickelectronics.co.ke.<br><br>

                    Our Service may contain links to third-party web sites or services that are not owned or controlled by www.rickelectronics.co.ke. www.rickelectronics.co.ke has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third-party web sites or services. You further acknowledge and agree that Rick Electronics shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods, or services available on or through any such web sites or services. We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.<br><br>

                    We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion. By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.<br><br>

                    If you have any questions about these Terms, please contact us through info@rickelectronics.co.ke.

                </div>



          </div>
          <!-- left block end  -->
        @endif
        </div>

      </div>
    </div>
  </div>
@endsection
