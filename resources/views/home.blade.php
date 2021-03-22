@extends("theme")
@section("contents")
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://fastly.syfy.com/sites/syfy/files/2018/03/pacific-rim-1200-1200-675-675-crop-000000.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://thechive.com/wp-content/uploads/2018/03/iron-man-armors-lead.jpg?quality=85&strip=info" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i0.wp.com/splashreport.com/wp-content/uploads/2017/04/mummy-header-1.jpg?fit=851%2C360" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://wab.org/wp-content/uploads/2015/06/gatsbycast.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection