
@extends('layouts.main1')

@section('container')


<section id="contact" class="section pb-0">
        <div class="container">
            <h6 class="xs-font mb-0"></h6>
            <h3 class="section-title mb-5">Contact Us</h3>
            <div class="row align-items-center justify-content-between">
                <div class="col-md-8 col-lg-7">
                    <form class="contact-form">
                        <div class="form-row">
                            <div class="col form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Your Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" value="Send Message">
                        </div>
                    </form>
                </div>
                <div class="col-md-4 d-none d-md-block order-1">
                    <ul class="list">
                        <li class="list-head">
                            <h6>CONTACT INFO</h6>
                        </li>
                        <li class="list-body">
                            <p class="py-2">Contact us and we'll get back to you within 24 hours.</p>
                            <p class="py-2"><i class="ti-location-pin"></i> Jl. Raya Ponorogo Solo Km.13,5 Ds Kapuran Kec. Badegan Ponorogo Jawa Timur</p>
                            <p class="py-2"><i class="ti-email"></i>  nanangriyadi57@admin.slb.belajar.id</p>
                            <p class="py-2"><i class="ti-microphone"></i> (62) 352-752434</p>
                        </li>
                    </ul> 
                </div>
            </div>
        </div>
    </section>

@endsection