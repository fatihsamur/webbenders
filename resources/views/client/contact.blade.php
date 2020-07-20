@extends('client.layout')

@section('page-title','Contact')

@section('content')
<!-- ================ contact section start ================= -->
<section class="contact-section section_padding">
  <div class="container">
    <div class="row">
      {{-- <div class="col-12">
        <h2 class="contact-title">Get in Touch</h2>
      </div>
      <div class="col-lg-8">
        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
          novalidate="novalidate">
          <div class="row">
            <div class="col-12">
              <div class="form-group">

                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                  placeholder='Enter Message'></textarea>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject'>
              </div>
            </div>
          </div>
          <div class="form-group mt-3">
            <button type="submit" class="button button-contactForm btn_4 boxed-btn">Send Message</button>
          </div>
        </form>
      </div> --}}

      <div class="col-lg-4">
        <div class="media contact-info">
          <div class="media-body">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <h3>info@webbenders.com</h3>
            <br><br>
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <h3>webbenders.tech@gmail.com</h3>
            <br><br>
            <p>Send us your query anytime!</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ================ contact section end ================= -->



@endsection