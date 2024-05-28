@extends('layouts.app')

@section('content')
<!-- Page header section start -->
<section class="Page-header">
    <div class="hero-image">
        <img src="{{ asset('assets/img/home/domain-name-header.png') }}" alt="{{ config('app.name') }}" />
    </div>
    <div class="ps-breadcrumb">
        <h2>Premium Domains Names</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Premium Domains Names</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page header section end -->

<!-- Premium Domain section start -->
<section class="Premium-domain pt-120 pb-120">
    <div class="container">
         <div class="section-header">
              <h2>Premium Domains</h2>
         </div>
        <form class="Domains-search" id="" action="">
          <div class="row">
              <div class="col-lg-6">
                <div class="form-group search position-relative mb-4">
                  <input type="text" placeholder="Advance Search" class="form-control" />
                  <button type="button" value="" class="btn btn-search">Search</button>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group price mb-4">
                     <label class="form-label">Price</label>
                     <div class="price-input">
                      <div class="field">
                        <!-- <span>Min</span> -->
                        <input type="number" class="input-min" value="2500">
                      </div>
                      <!-- <div class="separator">-</div> -->
                      <div class="field">
                        <input type="number" class="input-max" value="7500">
                      </div>
                    </div>
                    <div class="slider">
                      <div class="progress"></div>
                    </div>
                    <div class="range-input">
                      <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                      <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                    </div>
                  </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group price mb-4">
                      <p class="form-label">Extension</p>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">.com</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">.ca</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                        <label class="form-check-label" for="inlineCheckbox3">.org</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                        <label class="form-check-label" for="inlineCheckbox4">.net</label>
                      </div>
                  </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group price mb-4">
                      <p class="form-label">Letter</p>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="option1">
                        <label class="form-check-label" for="inlineCheckbox11">4 Letters</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="option2">
                        <label class="form-check-label" for="inlineCheckbox12">5 Letters</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox13" value="option3">
                        <label class="form-check-label" for="inlineCheckbox13">5 Letters</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox14" value="option4">
                        <label class="form-check-label" for="inlineCheckbox14">8 Letters</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox15" value="option5">
                        <label class="form-check-label" for="inlineCheckbox15">10 Letters</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox16" value="option6">
                        <label class="form-check-label" for="inlineCheckbox16">11 Letters</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox17" value="option7">
                        <label class="form-check-label" for="inlineCheckbox17">12 Letters</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox18" value="option7">
                        <label class="form-check-label" for="inlineCheckbox18">13 Letters</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox19" value="option7">
                        <label class="form-check-label" for="inlineCheckbox19">17 Letters</label>
                      </div>
                  </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <button type="button" class="btn btn-apply" value="">Apply <svg class="ms-2" width="27" height="18" viewBox="0 0 27 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle opacity="0.5" cx="7" cy="9" r="7" fill="white"></circle>
                    <path d="M23 9L7 9" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M19.0097 1C18.8433 3.66667 20.8072 9 26 9C20.8072 9 18.8433 14.3333 19.0097 17" stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                    </svg></button>
                    <button type="button" class="btn btn-rsearch" value="">Search Result <svg class="ms-2" width="27" height="18" viewBox="0 0 27 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle opacity="0.5" cx="7" cy="9" r="7" fill="white"></circle>
                      <path d="M23 9L7 9" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M19.0097 1C18.8433 3.66667 20.8072 9 26 9C20.8072 9 18.8433 14.3333 19.0097 17" stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                      </svg></button>
                  </div>
              </div>
          </div>
        </form>
    </div>
</section>
<!-- Premium Domain section end -->
@endsection


 <script>
  const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  range = document.querySelector(".slider .progress");
let priceGap = 1000;

priceInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minPrice = parseInt(priceInput[0].value),
      maxPrice = parseInt(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
      if (e.target.className === "input-min") {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
      }
    }
  });
});

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minVal = parseInt(rangeInput[0].value),
      maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === "range-min") {
        rangeInput[0].value = maxVal - priceGap;
      } else {
        rangeInput[1].value = minVal + priceGap;
      }
    } else {
      priceInput[0].value = minVal;
      priceInput[1].value = maxVal;
      range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
  });
});

 </script>

</body>
</html>
