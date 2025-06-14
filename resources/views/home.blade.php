@extends('homeparent')
@section('title', 'Home')

@section('content1')
<section class="father-banner text-center m-4 p-4">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <img src="https://d1f3aa6ifduais.cloudfront.net/assets/images/top-banners/banner2.jpg" width="2500px" alt="Happy Father's Day Family" class="img-fluid mx-auto d-block" />
      </div>
    </div>
  </div>
  
   <div class="container text-center my-5">
    <h2>Bring A Box Of <span class="highlight" style="color: #5f3dc4;" >Happiness Today</span></h2>
    <div class="row mt-4 g-0">
     <div class="row">
         <div class="col-md-6 ">
        <img src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/Delivery-web-01-2-prb2tuv0b8xzqq9p0zvt9xnwjdfxugrk30a96dd31e.png" width="600px"alt="Order Online" class="img-fluid rounded">
        <button class="btn btn-monginis mt-3" style=" background-color: #5f3dc4;" >Order Online</button>
      </div>
      <div class="col-md-6">
        <img src="https://www.monginis.net/wp-content/uploads/2022/07/Banner-web-1.png" width="600px" alt="Visit Store" class="img-fluid rounded">
        <button class="btn btn-monginis mt-3" style=" background-color: #5f3dc4;" >Visit Our Nearest Store</button>
      </div>
    </div>
     </div>
  </div>

  <!-- Bestseller Categories -->
 <div class="section-purple text-center py-5">
  <h3>Shop By <span class="highlight" style="color:#5f3dc4;">Bestseller Categories</span></h3>
  <div class="container mt-4">
    <div class="row g-4 justify-content-center">

      <!-- Birthday Surprises Card -->
      <div class="col-md-6">
        <div class="d-flex align-items-center bg-white rounded shadow-sm p-3 h-100">
          <img src="https://d1f3aa6ifduais.cloudfront.net/assets/images/products/UpgSwpmUAW25IThPFxmqb5lgYpVDrmvQOycqbVEh.jpg"
            alt="Birthday Surprises"
            class="img-fluid rounded-start category-card-img"
            style="max-width: 200px; object-fit: cover;">
          <div class="ms-4 text-start flex-grow-1">
            <h5 class="fw-bold mb-2">Birthday Surprises</h5>
            <button class="btn btn-monginis" style=" background-color: #5f3dc4;">View all</button>
          </div>
        </div>
      </div>

      <!-- Anniversary Surprises Card -->
      <div class="col-md-6">
        <div class="d-flex align-items-center bg-white rounded shadow-sm p-3 h-100">
          <img src="https://d1f3aa6ifduais.cloudfront.net/assets/images/products/DjWGuuNebRAIMkrlCGel6OB4jbQKd4mBZ28v4y84.jpg"
            alt="Anniversary Surprises"
            class="img-fluid rounded-start category-card-img"
            style="max-width: 200px; object-fit: cover;">
          <div class="ms-4 text-start flex-grow-1">
            <h5 class="fw-bold mb-2">Anniversary Surprises</h5>
            <button class="btn btn-monginis" style=" background-color: #5f3dc4;">View all</button>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

  <!-- Shop By Cake -->
  <div class="section-white text-center">
    <h3>Shop By <span class="highlight" style="color:#5f3dc4;">Cake</span></h3>
    
    <div class="container mt-4">
        
      <div class="row g-4">
        <div class="col-6 col-md-3">
          <div class="circle-img">
            <img src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/Tall-and-Fancy-Cake-9-min-scaled-pr2q5nk8snomjr875pa6dqsqo2am0csfgkpnbldtxs.jpg"  alt="Tall and Fancy">
          </div>
          <h6>TALL AND FANCY</h6>
        </div>
        <div class="col-6 col-md-3">
          <div class="circle-img">
            <img src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/tall-and-fancy-pqouxp5t8lfjjchur84emwklu7ry19ddvnjqowky4w.jpg" alt="Exotic Cakes">
          </div>
          <h6>EXOTIC CAKES</h6>
        </div>
        <div class="col-6 col-md-3">
          <div class="circle-img" style="background-color: #ffe3e9;">
            <img src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/Premium-Cakes-pqov0r4xg7m39q23x1nr8mtjcapw1uhzarvjua1vww.jpg" alt="Premium Cakes">
          </div>
          <h6>PREMIUM CAKES</h6>
        </div>
        <div class="col-6 col-md-3">
          <div class="circle-img">
            <img src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/Designer-Cakes-pqov1whtsx6pgke17jjcacdth921gj264gkwygckb4.jpg" alt="Designer Cakes">
          </div>
          <h6>DESIGNER CAKES</h6>
          
        </div>
      </div>
    </div>
  </div>
</section>
<div class="section-purple">
  <div class="container">
    <div class="category-heading">
      <h4>Shop By <span class="highlight" style=" color: #5f3dc4;" >3D Cakes</span></h4>
      <button class="btn btn-monginis btn-sm" style="background-color:#5f3dc4;" >View all</button>
    </div>
    <div class="row text-center">
      <div class="col-3 category-box-round">
        <img src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/3D-Special-Occasions-Cakes15-pqovduzwr1k15z0pdpmh0bqxjq45dwj8fndar6m95c.jpg" alt="Wedding Cakes">
        <div class="category-title">WEDDING CAKES</div>
      </div>
      <div class="col-3 category-box-round">
        <img src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/3D-Special-Occasions-Cakes113-pqovf9r703hikwyz5bkbqyxtmj5yxk4qmmlio4iztc.jpg" alt="Photo Cakes">
        <div class="category-title">PHOTO CAKES</div>
      </div>
      <div class="col-3 category-box-round">
        <img src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/3D-Special-Occasions-Cakes112-pqovgmmsvhcfcmzz7woxcmlsikh21tis5cirmiiits.jpg" alt="E-motion Cakes">
        <div class="category-title">E-MOTION CAKES</div>
      </div>
      <div class="col-3 category-box-round">
        <img src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/3D-Special-Occasions-Cakes110-pqovj7oto2vta18t4iwzph4fbpqe7us7i53u4wojps.jpg" alt="3D Cakes">
        <div class="category-title">3D CAKES</div>
      </div>
    </div>
  </div>
</div>

<div class="section-white">
  <div class="container">
    <div class="category-heading">
      <h4>Shop By <span class="highlight" style="color:#5f3dc4;">Pastry</span></h4>
      <button class="btn btn-monginis btn-sm" style="background-color: #5f3dc4;">View all</button>
    </div>
    <div class="row text-center">
      <div class="col-3 category-box-round">
        <img src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/2021-12-04_16_04_50_black-forest-pastry-pr0nigmilh4bbuiwh5cf4uj5mb4in6tk07fi3xpm8g.jpg" alt="Fresh Cream">
        <div class="category-title">FRESH CREAM PASTRIES</div>
      </div>
      <div class="col-3 category-box-round">
        <img src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/2021-12-04_16_06_16_devils-delight-pastry-pr0niuq3fznm5zyf6tfto8z2j370undj257sb34pn4.jpg" alt="Chocolate">
        <div class="category-title">CHOCOLATE PASTRIES</div>
      </div>
      <div class="col-3 category-box-round">
        <img src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/2021-05-27_16_14_08_Cherry-chocolate-mousse-cup-pr0nj52bj61rppjeifwpxod52bs27bikrke4l4pdqo.jpg" alt="Cup Pastries">
        <div class="category-title">CUP PASTRIES</div>
      </div>
      <div class="col-3 category-box-round">
        <img src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/1622273916612_41-scaled-pr0s5rwb3u5px3hrhgxqymkw7egkrn1j0buxd1muog.jpg" alt="Swiss Miss">
        <div class="category-title">SWISS MISS PASTRY</div>
      </div>
    </div>
  </div>
</div>

<div class="section-purple">
  <div class="container">
    <div class="category-heading">
      <h4>Shop By <span class="highlight" style="color: #5f3dc4;" >Savories</span></h4>
      <button class="btn btn-monginis btn-sm" style="background-color: #5f3dc4;" >View all</button>
    </div>
    <div class="row text-center">
      <div class="col-3 category-box-round">
        <img src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/1621336263762_50-pr2qhm2bqs1y95uvbvdb3q5uqjcpxq9hrri14bnis0.jpg" alt="Burgers">
        <div class="category-title">BURGERS</div>
      </div>
      <div class="col-3 category-box-round">
        <img src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/1621336385045_97-pr2qhvgpn4eth9h7szfksnsgoe2e2pat520vx39l1s.jpg" alt="Pizza">
        <div class="category-title">PIZZA</div>
      </div>
      <div class="col-3 category-box-round">
        <img src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/1622187517738_26-pr0rvqya7gfm2u2214x0d5nw3fvmnv8lmpch2si11s.jpg" alt="Rolls">
        <div class="category-title">ROLLS</div>
      </div>
      <div class="col-3 category-box-round">
        <img src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/2021-05-26_17_30_11_Classic-Veg-Pattice-pr0nglvz48kyfj7uauhwptdffy9ggogm31411agki8.jpg" alt="Patties">
        <div class="category-title">PATTIES & PUFFS</div>
      </div>
    </div>
  </div>
</div>

<div class="section-white">
  <div class="container">
    <div class="category-heading">
      <h4>Shop By <span class="highlight" style="color: #5f3dc4;" >Chocolates</span></h4>
      <button class="btn btn-monginis btn-sm" style=" background-color: #5f3dc4;" >View all</button>
    </div>
    <div class="row text-center">
      <div class="col-3 category-box-round">
        <img src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/MC-pr0o4u67ahr1po0stbjozp96piu2vsniqyime2j840.jpg" alt="Bars">
        <div class="category-title">CHOCOLATE BARS</div>
      </div>
      <div class="col-3 category-box-round">
        <img src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/MB-pr0o53kl6u3wxrn5aflyomvsndjr0rou491h6u5ads.jpg" alt="Bouquets">
        <div class="category-title">CHOCOLATE BOUQUETS</div>
      </div>
      <div class="col-3 category-box-round">
        <img src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/1632226044485_4-pr0s1tyofurf7z7xi9l304eai7w5hce24tclw9has0.jpg" alt="Rose">
        <div class="category-title">ROSE SENSATION BOUQUET</div>
      </div>
      <div class="col-3 category-box-round">
        <img src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/1643866120701_79-pr0nb5fpfv4111575zkvqoy3af5qrxspo0rjqgjumo.jpg" alt="Valentine">
        <div class="category-title">VALENTINE CHOCOLATE BAR</div>
      </div>
    </div>
  </div>
</div>
<div style="background-color: #5f3dc4; color:white; text-align:center; padding:15px 10px;">
  <strong>Placing your first order ? Get Upto 10% Off</strong><br>
  Use Code : <strong>monginis</strong>
</div>

<!-- Testimonial Section -->
<div class="container my-5 text-center">
  <h3>What our clients say <span class="highlight" style="color: #5f3dc4;" >about us</span></h3>
  <div class="mt-3">
    [sp_testimonial id="947"]
  </div>
</div>

<!-- Newsletter Signup -->
<div class="section-purple py-5 text-center">
  <h4><strong>Know The Sweet <span class="highlight" style="color: #5f3dc4;" >Deal First</span> !</strong></h4>
  <p>Sign Up to our newsletter and get to know the sweets first !</p>
  <form class="d-flex justify-content-center mt-3">
    <input type="email" class="form-control w-25 me-2" placeholder="Enter your email address">
    <button class="btn btn-dark">Subscribe</button>
  </form>
</div>

<!-- Specialty Section -->
<div class="container text-center my-5">
  <h4>Our <span class="highlight" style="color: #5f3dc4;">Speciality</span></h4>
  <div class="row mt-4">
    <div class="col-md-3 col-6 mb-4">
      <img src="https://www.monginis.net/wp-content/uploads/2022/06/1.png" alt="Safe Bakery" width="50"><br>
      <small>Safe & Hygienic Bakery</small>
    </div>
    <div class="col-md-3 col-6 mb-4">
      <img src="https://www.monginis.net/wp-content/uploads/2022/06/2-1.png" alt="Delivery" width="50"><br>
      <small>Delivery in 700+ Cities</small>
    </div>
    <div class="col-md-3 col-6 mb-4">
      <img src="https://www.monginis.net/wp-content/uploads/2022/06/3-1.png" alt="Trusted" width="50"><br>
      <small>Trusted by 20 Million</small>
    </div>
    <div class="col-md-3 col-6 mb-4">
      <img src="https://www.monginis.net/wp-content/uploads/2022/06/4-1.png" alt="Pin" width="50"><br>
      <small>Services in 18000+ pincodes</small>
    </div>
  </div>
</div>

<!-- Footer Tags Section -->
<div class="bg-light text-center py-4">
  <strong>MOST SEARCHED FOR ON MONGINIS :</strong>
  <br>
  <small style="font-size:13px;">
    Cakes | 3D & 5D Cakes | Pastries | Savories | Baker Wears | Cakes | Chocolates | Cake Deals <br>
    CAKES: Packaged cakes | Chocolate Cake | Pineapple Cake | Truffle Cake | Walnut Truffle Cake | Chocolate Cake <br>
    SAVORIES: Namkeen | Rusk | Pizza Slices | Veg Rolls | Veg Paneer Patty | Breads | Tea Time Snacks
  </small>
</div>

@endsection