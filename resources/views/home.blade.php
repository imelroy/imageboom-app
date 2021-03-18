@extends("theme")
@section("container")
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.pexels.com/photos/60597/dahlia-red-blossom-bloom-60597.jpeg?fit=crop&h=1000&mark=https%3A%2F%2Fassets.imgix.net%2F~text%3Fbg%3D80000000%26txt%3DFree%2BStock%2BPhotos%26txtalign%3Dcenter%26txtclr%3Dfff%26txtfont%3DAvenir-Heavy%26txtpad%3D20%26txtsize%3D120%26w%3D1300&markalign=center%2Cmiddle&txt=pexels.com&txtalign=center&txtclr=eeffffff&txtfont=Avenir-Heavy&txtshad=10&txtsize=60&w=1500" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://mediacloud.kiplinger.com/image/private/s--78W5itpk--/v1582660079/slideshow/saving/T063-S001-70-valuable-things-you-can-get-for-free/images/intro.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.squarespace-cdn.com/content/v1/5aa996f925bf022c99d1161b/1533655863209-UUHPBZ3LITEYN6B210TE/ke17ZwdGBToddI8pDm48kN5f_nEu67lZGch104k-yUAUqsxRUqqbr1mOJYKfIPR7LoDQ9mXPOjoJoqy81S2I8N_N4V1vUb5AoIIIbLZhVYxCRW4BPu10St3TBAUQYVKc1XJXN_iXyA4tMy4Y11SC6ZswelwxCVdY4aHpY7WpI-fnaSyMj_mDhUrTKhE0EPgs/iStock-1004117342.jpg" class="d-block w-100" alt="...">
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