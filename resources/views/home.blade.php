@extends('layouts.app')

@section('content')
  <div class="home-hero-section">
    <div class="background-overlay">
      <div class="home-hero-inner">
        <div class="hero-text">
          <h1>All I know is What is Read in the Papers,</h1>
          <h1 class="yellow-text">Let's help each other become better Developers</h1>
          <p class="gray-text">
              Lorem ipsum dolor sit amet consectetur 
              adipisicing elit. Odit similique, nesciunt et eveniet 
              nobis cum velit quidem? Explicabo ratione dolores natus
             error veritatis! Inventore deleniti tempora 
             sapiente beatae quis provident sequi sunt illo dolorem.
              Suscipit dicta culpa amet at illo.
          </p>

          <div class="hero-subscribe">
            <input type="email" name="email" id="" placeholder="Enter your email">
            <button class="yellow-button button">Subscribe</button>
          </div>
        </div>

          <button class="button scroll-down-button"><ion-icon name="arrow-down" size="large"></ion-icon></button>
        
      </div>
    </div>
  </div>

  <section class="categories-section">
    <div class="categories-section-header">
      <div>
        <h3 class="yellow-text">Categories</h3>
        <h1>Explore By Categories</h1>
      </div>
      {{-- <div class="carousel-btns-container">
        <button class="button prev carousel-btn"><ion-icon name="arrow-dropleft"></ion-icon></button>
        <button class="button next carousel-btn ml-2"><ion-icon name="arrow-dropright"></ion-icon></button>
      </div> --}}
    </div>
    
    <div class="categories-carousel-container">
      <div class="container">
        <div class="row">
                <div class="category-card">
                  <div class="background-overlay">
                    <p>Backend Development</p>
                  </div>
                  </div>
                  <div class="category-card">
                    <div class="background-overlay">
                      <p>Backend Development</p>
                    </div>
                  </div>
                  <div class="category-card">
                    <div class="background-overlay">
                      <p>Backend Development</p>
                    </div>
                  </div>
                  <div class="category-card">
                    <div class="background-overlay">
                      <p>Backend Development</p>
                    </div>
                  </div>
                  <div class="category-card">
                    <div class="background-overlay">
                      <p>Backend Development</p>
                    </div>
                  </div>
                  <div class="category-card">
                    <div class="background-overlay">
                      <p>Backend Development</p>
                    </div>
                  </div>
        </div>
      </div>
    </div>
  </section>
@endsection
