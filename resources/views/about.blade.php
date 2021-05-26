@extends('layouts.master')

@section('bodySection')
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h6>Welcome to Space Dynamic</h6>
                <h2>We Make <em>Digital Ideas</em> &amp; <span>SEO</span> Marketing</h2>
                <p>Space Dynamic is a professional looking HTML template using a Bootstrap 5 (beta 2). This CSS template is free for you provided by <a rel="nofollow" href="https://templatemo.com/page/1" target="_parent">TemplateMo</a>.</p>
                <form id="search" action="#" method="GET">
                  <fieldset>
                    <input type="address" name="address" class="email" placeholder="Your website URL..." autocomplete="on" required>
                  </fieldset>
                  <fieldset>
                    <button type="submit" class="main-button">Analyze Site</button>
                  </fieldset>
                </form>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{ asset('assets/images/banner-right-image.png') }}" alt="team meeting">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="{{ asset('assets/images/about-left-image.png') }}" alt="person graphic">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="{{ asset('assets/images/service-icon-01.png') }}" alt="reporting">
                  </div>
                  <div class="right-text">
                    <h4>Data Analysis</h4>
                    <p>Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                  <div class="icon">
                    <img src="{{ asset('assets/images/service-icon-02.png') }}" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Data Reporting</h4>
                    <p>Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                  <div class="icon">
                    <img src="{{ asset('assets/images/service-icon-03.png') }}" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Web Analytics</h4>
                    <p>Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                  <div class="icon">
                    <img src="{{ asset('assets/images/service-icon-04.png') }}" alt="">
                  </div>
                  <div class="right-text">
                    <h4>SEO Suggestions</h4>
                    <p>Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection