@extends('client.layouts.masterProjectDetail')

@section('content')

<section>
	<img src="{{ url('uploads/' . $project->image) }}" style="width:100%;height:100%;object-fit:contain;margin-top:10px">
	
</section>

  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="road-map-main">
                              @foreach(json_decode($project->details) as $key => $detail)

            <div class="road-map-wrapper">
              <div class="road-map-circle">
                <span
                  class="road-map-circle-text d-flex align-items-center justify-content-center"
                  >{{$key + 1}}</span
                >
              </div>
              <div class="road-map-card">
                <h4 class="card-head">{{ $detail->title }}</h4>
                <p class="card-text">
               {!! \Illuminate\Support\Str::limit(strip_tags($detail->description), 250, '...') !!}
                </p>
              </div>
            </div>
            @endforeach
            {{-- <div class="road-map-wrapper">
              <div class="road-map-circle">
                <span
                  class="road-map-circle-text d-flex align-items-center justify-content-center"
                  >text</span
                >
              </div>
              <div class="road-map-card">
                <h4 class="card-head">headding</h4>
                <p class="card-text">
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s
                </p>
              </div>
            </div>
             <div class="road-map-wrapper">
              <div class="road-map-circle">
                <span
                  class="road-map-circle-text d-flex align-items-center justify-content-center"
                  >text</span
                >
              </div>
              <div class="road-map-card">
                <h4 class="card-head">headding</h4>
                <p class="card-text">
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s
                </p>
              </div>
            </div>
            <div class="road-map-wrapper">
              <div class="road-map-circle">
                <span
                  class="road-map-circle-text d-flex align-items-center justify-content-center"
                  >text</span
                >
              </div>
              <div class="road-map-card">
                <h4 class="card-head">headding</h4>
                <p class="card-text">
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s
                </p>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>


<button class="button helpModal" data-bs-toggle="modal" data-bs-target="#helpModal">
   <svg class="svgIcon" viewBox="0 0 512 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm50.7-186.9L162.4 380.6c-19.4 7.5-38.5-11.6-31-31l55.5-144.3c3.3-8.5 9.9-15.1 18.4-18.4l144.3-55.5c19.4-7.5 38.5 11.6 31 31L325.1 306.7c-3.2 8.5-9.9 15.1-18.4 18.4zM288 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"></path></svg>
  Size nasıl yardımcı olabiliriz?
</button>

<!-- Modal -->
<div class="modal fade" id="helpModal" tabindex="-1" aria-labelledby="helpModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
 <div class="row">
                                <div class="col-9">
                                    <h5 class="alt-font text-dark-gray fw-700 ls-minus-2px mb-50px xs-mb-35px">Size nasıl yardımcı olabiliriz?</h5>
                                </div>
                                <div class="col-3 text-end"
                                    data-anime="{ &quot;translateY&quot;: [30, 0], &quot;translateX&quot;: [-30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 300, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                                    <i class="bi bi-send icon-large text-dark-gray animation-zoom ml-3"></i>
                                </div>
                            </div></h3>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('contact.form.show') }}" method="POST" class="row contact-form-style-02">
          @csrf
          <div class="col-md-6 mb-30px">
            <input class="input-name form-control required" type="text" name="name" placeholder="Ad soyad" />
          </div>
          <div class="col-md-6 mb-30px">
            <input class="form-control required" type="email" name="email" placeholder="E-mail adresiniz" />
          </div>
          <div class="col-md-6 mb-30px">
            <input class="form-control" type="tel" name="phone" placeholder="Telefon" />
          </div>
          <div class="col-md-6 mb-30px">
            <input class="form-control" type="text" name="job" placeholder="Mesleğiniz" />
          </div>
          <div class="col-md-12 mb-30px">
            <textarea class="form-control" cols="40" rows="4" name="message" placeholder="Mesajınız"></textarea>
          </div>
          <div class="col-xl-7 col-md-7 last-paragraph-no-margin">
            <p class="text-center text-md-start fs-15 lh-26">24 saat içerisinde dönüş sağlayacağız.</p>
          </div>
          <div class="col-xl-5 col-md-5 text-center text-md-end sm-mt-20px">
            <input type="hidden" name="redirect" value>
            <button class="btn btn-base-color btn-medium btn-rounded btn-box-shadow" style="background: #0f75bc !important" type="submit">Gönder</button>
          </div>
          <div class="col-12">
            <div class="form-results mt-20px d-none"></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



{{-- <section id="form" class="about-area about-area-mid pt-120 pb-90" style="padding-top: 40px; padding-bottom: 40px;">
    <div class="container">
        <div class="row">
            <div class="container col-xl-12 col-lg-12 col-md-12 mb-4">
                <div class="row card-container">
                    @foreach(json_decode($project->details) as $detail)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                            <div class="feature-box">
                                <div class="feature-small-icon">
                                    <i class="fas fa-star"></i> <!-- İkonu buraya yerleştirebilirsiniz -->
                                </div> 

                            
                                <div class="feature-small-content">
                                    <h3>{{ $detail->title }}</h3>
                                    <h5>{{ $detail->sub_title ?? '' }}</h5>
                                    <p class="card-text">{!! \Illuminate\Support\Str::limit(strip_tags($detail->description), 250, '...') !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            
            <div class="col-xl-12 col-lg-12 col-md-11">
                <div class="row row-cols-md-1 justify-content-center">
                    <div class="col-xl-10">
                        <div class="bg-white p-8 border-radius-6px box-shadow-double-large">
                            <div class="row">
                                <div class="col-9">
                                    <h3 class="alt-font text-dark-gray fw-700 ls-minus-2px mb-50px xs-mb-35px">Size nasıl yardımcı olabiliriz?</h3>
                                </div>
                                <div class="col-3 text-end"
                                    data-anime="{ &quot;translateY&quot;: [30, 0], &quot;translateX&quot;: [-30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 300, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                                    <i class="bi bi-send icon-large text-dark-gray animation-zoom"></i>
                                </div>
                            </div>

                            <form action="{{ route('contact.form.show') }}" method="POST"
                            class="row contact-form-style-02">
                            @csrf
                            <div class="col-md-6 mb-30px">
                                <input class="input-name form-control required" type="text" name="name"
                                    placeholder="Ad soyad" />
                            </div>
                            <div class="col-md-6 mb-30px">
                                <input class="form-control required" type="email" name="email"
                                    placeholder="E-mail adresiniz" />
                            </div>
                            <div class="col-md-6 mb-30px">
                                <input class="form-control" type="tel" name="phone" placeholder="Telefon" />
                            </div>
                            <div class="col-md-6 mb-30px">
                                <input class="form-control" type="text" name="job" placeholder="Mesleğiniz" />
                            </div>
                            <div class="col-md-12 mb-30px">
                                <textarea class="form-control" cols="40" rows="4" name="message"
                                    placeholder="Mesajınız"></textarea>
                            </div>
                            <div class="col-xl-7 col-md-7 last-paragraph-no-margin">
                                <p class="text-center text-md-start fs-15 lh-26">24 saat içerisinde dönüş sağlayacağız.
                                </p>
                            </div>
                            <div class="col-xl-5 col-md-5 text-center text-md-end sm-mt-20px">
                                <input type="hidden" name="redirect" value>
                                <button class="btn btn-base-color btn-medium btn-rounded btn-box-shadow"style="background: #0f75bc !important"
                                    type="submit">Gönder</button>
                            </div>
                            <div class="col-12">
                                <div class="form-results mt-20px d-none"></div>
                            </div>
                        </form>

                        </div>
                    </div>
                    <div class="row align-items-center justify-content-center mt-8">
                        <div class="col-md-auto text-center text-md-end sm-mb-20px">
                            <h6 class="text-dark-gray fw-600 mb-0 ls-minus-1px">Sosyal medya hesaplarımız </h6>
                        </div>
                        <div class="col-2 d-none d-lg-inline-block">
                            <span class="w-100 h-1px bg-dark-gray opacity-2 d-flex mx-auto"></span>
                        </div>

                        <div class="col-md-auto elements-social social-icon-style-04 text-center text-md-start ps-lg-0">
                            <ul class="large-icon dark">
                                @foreach ($socialMediaIcons as $socialMediaIcon)
                                
                               
                                <li class="m-0"><a class="facebook" href="{{$socialMediaIcon->url}}" target="_blank"><i
                                            class="fa-brands {{$socialMediaIcon->icon_class}}"></i><span></span></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div> 
                </div>
            </div>
        </div>
    </div>

</section> --}}

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="baslikh4">Maliyetine Ev sahibi olma sistemi</h4>
                    <h5 class="baslikh5">Bu gün projeden tapunuzu alın yarın maliyetine eviniz olsun</h5>
                    <p class="ptag">Maliyetine Ev,Türkiye’de ilk hemen tapu teslim %100 güvenli ve garantili maliyetine ev sahibi olmanızı sağlayan tek şirkettir.</p>
                </div>
            </div>   
        </div>
    
            @if(count($project->galleries) > 0)
                <div class="section mt-5">
                    <div class="container" >
                        {{-- <h3 style="text-align: center; font-weight: 700; color: #333; margin-top: 100px; ">Proje Görselleri</h3> --}}
                        <swiper-container class="mySwiper" navigation="true">
                            @foreach ($project->galleries as $galery)   
                                <swiper-slide> <img src="{{ url('uploads/' . $galery->image) }}" alt="" style="width: 100%; height: auto;"></swiper-slide>
                            @endforeach
                        </swiper-container>
                    </div>
                </div>
                @endif

                @if (!empty($floorPlans) && count($floorPlans) > 0)
                    <div class="section mt-5">
                        <div class="container ">
                            <h3 style="    text-align: center;
    font-weight: 700;
    color: #0f75bc;
    font-size: 29px;text-transform: uppercase">{{ $project->project_title }} Kat Planları</h3>
                            <div class="tab">
                                @foreach ($floorPlans as $index => $floorPlan)
                                    <button class="tablinks" data-tab="tab{{ $index }}">{{ $floorPlan->floor_plan }}</button>
                                @endforeach
                            </div>
                    
                            @foreach ($floorPlans as $index => $floorPlan)
                                <div id="tab{{ $index }}" class="tabcontent">
                                    <img src="{{ asset('kat_plani/' . $floorPlan->image_path) }}" alt="{{ $floorPlan->floor_plan }}" style="width: 100%; height: auto;">
                                </div>
                            @endforeach
                        </div>
                    </div>
            @endif

            {{-- <div class="container mt-4">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="baslikh4">Sizi Maliyetine Ev Sahibi Yapan Projeler <br> Maliyetine Ev’de </h4>
                    </div>
                </div>   
            </div> --}}

<section>
      <!-- Konum -->
      <div class="container">
        <h3 style="    text-align: center;
    font-weight: 700;
    color: #0f75bc;
    font-size: 29px;text-transform: uppercase">Konum</h3>
        <iframe src="{{$project->konum}}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="baslikh4">Sıkça Sorulan Sorular</h4>
        </div>  
    </div>
    <div clas="row">
    <div class="col-md-12">
    <div class="sorularDiv">
    <div>
        <i class="fa-solid fa-chevron-right icon"></i>
        <span class="questionHeader">MALİYETİNE EV İLE NASIL MALİYETİNE EV SAHİBİ OLURUM ? </span>
        <p class="answerP">Maliyetine Ev Tarafından imarlı arsa üzerine projesi belirlenmiş mülklerimizden peşinatınızı ödeyerek arsa tapunuzu alırsınız. İnşaat başlangıcında taksitlerinizi ödemeye başlarsınız.
        </p>
    </div>
</div>

<div class="sorularDiv">
    <div>
        <i class="fa-solid fa-chevron-right icon"></i>
        <span class="questionHeader">PEŞİNATIMI ÖDEDİKTEN SONRA SÜREÇ NASIL İŞLİYOR ?</span>
        <p class="answerP">Arsa tapunuzu alır peşinatınızı ödersiniz. Noter onaylı sözleşme imzalarsınız. Sözleşme içerisinde yer alan ödeme planına göre ödemelerinizi yaparsınız. İnşaatınız teslim edildikten sonra da ödemeleriniz devam eder.
        </p>
    </div>
</div>


<div class="sorularDiv">
    <div>
        <i class="fa-solid fa-chevron-right icon"></i>
        <span class="questionHeader">İNŞAAT BAŞLANGICI NE ZAMAN ? </span>
        <p class="answerP">Projelerimizin her birinde inşaat başlangıç ve bitiş tarihleri bellidir. Noter onaylı sözleşme içerisinde belirlenen tarihler arasında yapılmaktadır. </p>
    </div>
</div>

<div class="sorularDiv">
    <div>
        <i class="fa-solid fa-chevron-right icon"></i>
        <span class="questionHeader">ÖDEME PLANIMDA BELİRTİLEN TAKSİTLERİMİ NE ZAMAN ÖDEMEYE BAŞLAYACAĞIM ? </span>
        <p class="answerP">İnşaat başlangıcıyla birlikte taksit ödemeleriniz başlayacaktır.</p>
    </div>
</div>

<div class="sorularDiv">
    <div>
        <i class="fa-solid fa-chevron-right icon"></i>
        <span class="questionHeader">TOPLAM EV MALİYETİ NASIL HESAPLANIR ?</span>
        <p class="answerP">Evinizin maliyeti m2 birim fiyatına göre hesaplanır ve maksimum maliyet noter sözleşmenizde yazılmaktadır. </p>
    </div>
</div>

<div class="sorularDiv">
    <div>
        <i class="fa-solid fa-chevron-right icon"></i>
        <span class="questionHeader">MALİYETİNE EV İLE ALDIĞIM MÜLKÜMDEN NE ZAMAN KAR ETMEYE BAŞLAYACAĞIM ? </span>
        <p class="answerP">Maliyetine Ev ile ilk müşterilerimiz hemen kazanır. Maliyetine Ev ile alırken kazanırsınız. Her projemiz aynı zamanda yatırım projesidir. Maliyetine satışlarımızda maliyetine mülk sahibi olursunuz. 
        </p>
    </div>
</div>

<div class="sorularDiv">
    <div>
        <i class="fa-solid fa-chevron-right icon"></i>
        <span class="questionHeader">ENFLASYONDAN ETKİLENİR MİYİM? BAŞTA BELİRLENEN FİYAT DEĞİŞİKLİK GÖSTERİR Mİ ? </span>
        <p class="answerP">Noter onaylı sözleşmenizde ödemeniz belirtilir. Belirtilen ödeme haricinde bir ödeme yapmazsınız.</p>
    </div>
</div>

<div class="sorularDiv" style="margin-bottom: 30px;">
    <div>
        <i class="fa-solid fa-chevron-right icon"></i>
        <span class="questionHeader">TAPUMU DEVİR ETME HAKKINA SAHİP MİYİM ?</span>
        <p class="answerP">Tapunuzu istediğiniz zaman sözleşme ile birlikte başkasına devredebilirsiniz / satabilirsiniz.</p>
    </div>
</div>
    </div>
    </div>
</div>



{{-- <section style="padding: 0 !important; position: sticky; bottom: 0; z-index: 999;">
    <div style="background-color: #0f75bc; position: sticky; bottom: 0; padding: 20px 0px;">
        <div class="container">
            <a href="#form"
                style="color: white; font-weight: 900; font-size: 30px; align-items: center; margin: 0; justify-content: center; display: flex; padding: 0;">
                DETAYLI BİLGİ İÇİN TIKLAYINIZ
            </a>


        </div>
    </div>
</section> --}}

@endsection


@section("css")

<style>
    .answerP{
        color: #333;
        font-size: 18px;
        font-weight: bold;
        font-family: cerebri-sans-semibold;
        line-height: 1.5;
        margin: 5px 34px;
    }
    .questionHeader{
        color: #043a74;
        font-family: 'Roboto', sans-serif;
        font-weight: bold;
        font-size: 24px;
    }

    .icon{
        font-size: 24px;
        margin-right: 15px;
    }

    .sorularDiv{
        marign-bottom:20px;
    }
.road-map-main {
  margin: 50px 0 51px;
}
.road-map-main .road-map-wrapper {
  position: relative;
  display: flex;
  flex-direction: column;
  height: 175px;
}
@media (max-width: 991px) {
  .road-map-main .road-map-wrapper {
    margin-bottom: 25px;
    height: auto;
    display: block;
  }
}

.helpModal {
width: 250px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 10px;
    background-color: #eb0d0de0;
    border-radius: 30px;
    color: white;
    font-weight: 600;
    border: none;
    position: fixed;
    cursor: pointer;
    z-index: 99999;
    transition-duration: .2s;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.116);
    padding-left: 8px;
    transition-duration: .5s;
        bottom: 25px;
    left: 25px;
}

.svgIcon {
  height: 25px;
      transition-duration: 1.5s;
    fill: white;
}

.bell path {
  fill: rgb(19, 19, 19);
}

.helpModal:hover {
  background-color: #eb0d0de0;
  transition-duration: .5s;
}

.helpModal:active {
  transform: scale(0.97);
  transition-duration: .2s;
}

.helpModal:hover .svgIcon {
  transform: rotate(250deg);
  transition-duration: 1.5s;
}


.road-map-main .road-map-wrapper::before {
  content: "";
  width: 100%;
  clear: both;
  display: block;
}
.road-map-main .road-map-wrapper::after {
  content: "";
  width: 100%;
  clear: both;
  display: block;
}
.road-map-main .road-map-wrapper .road-map-circle {
  width: 200px;
  height: 200px;
  border-radius: 50%;
  border: 25px solid transparent;
  border-top-color: #0f75bc;
  border-right-color: #0f75bc;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  transform: rotate(45deg);
}
@media (max-width: 992px) {
  .road-map-main .road-map-wrapper .road-map-circle {
    position: unset;
    border: 25px solid #0f75bc;
  }
}
.road-map-main .road-map-wrapper .road-map-circle .road-map-circle-text {
  width: 110px;
  height: 110px;
  border-radius: 50%;
  background-color: #eb0d0de0;
  font-size: 20px;
  font-weight: 600;
  line-height: 26px;
  text-transform: capitalize;
  color: #fff;
  box-shadow: 0px 0px 10px 5px #00000021;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  transform: rotate(-45deg);
}
.road-map-main .road-map-wrapper .road-map-card {
  width: 35%;
  background: #0f75bc;
  padding: 20px 20px;
  z-index: 1;
  position: absolute;
  right: 0;
  border-radius: 5px;
}
.road-map-main .road-map-wrapper .road-map-card::before {
  content: "";
  width: 25%;
  height: 20px;
  background: #0f75bc;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: -23%;
  z-index: -1;
}
@media (max-width: 991px) {
  .road-map-main .road-map-wrapper .road-map-card {
    width: 100%;
    margin-top: 30px;
    position: unset;
  }
  .road-map-main .road-map-wrapper .road-map-card::before {
    content: "";
    width: 20px;
    height: 30%;
    top: 50%;
    transform: translateX(-50%);
    left: 50%;
  }
}
@media (max-width: 425px) {
  .road-map-main .road-map-wrapper .road-map-card {
    top: 45%;
  }
}
.road-map-main .road-map-wrapper .road-map-card .card-head {
  font-size: 20px;
  font-weight: 600;
  text-transform: capitalize;
  margin: 0 0 15px;
  color: #fff;
}
.road-map-main .road-map-wrapper .road-map-card .card-text {
  color: #fff;
  margin: 0;
  display: -webkit-box;
  -webkit-line-clamp: 5;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
@media (max-width: 1199px) {
  .road-map-main .road-map-wrapper .road-map-card .card-text {
    -webkit-line-clamp: 4;
  }
}
.road-map-main .road-map-wrapper:nth-of-type(even) .road-map-circle {
  border-bottom-color: #0f75bc;
  border-left-color: #0f75bc;
  border-top-color: transparent;
  border-right-color: transparent;
}
@media (max-width: 991px) {
  .road-map-main .road-map-wrapper:nth-of-type(even) .road-map-circle {
    border-color: #0f75bc;
  }
}
.road-map-main .road-map-wrapper:nth-of-type(even) .road-map-card {
  left: 0;
}
.road-map-main .road-map-wrapper:nth-of-type(even) .road-map-card::before {
  right: -23%;
  left: unset;
}
@media (max-width: 991px) {
  .road-map-main .road-map-wrapper:nth-of-type(even) .road-map-card::before {
    content: "";
    width: 20px;
    height: 30%;
    top: 50%;
    transform: translateX(-50%);
    left: 50%;
  }
}
@media (max-width: 425px) {
  .road-map-main .road-map-wrapper:nth-of-type(even) .road-map-card::before {
    top: 45%;
  }
}
    .baslikh4{
          color: #eb0d0de0;
    text-align: center;
        font-size: 37px;
    font-family: 'Roboto', sans-serif;
    font-weight: 700;
    text-transform: uppercase;
    }
    .baslikh6{
        color: #0f75bc;
        text-align: center;
        font-size: 50px;
        font-family: 'Roboto', sans-serif;
        font-weight: bold;
    }

    .baslikh5{
         color:#0f75bc;
    text-align: center;
    font-size: 35px;
    font-family: 'Roboto', sans-serif;
    /* letter-spacing: 1px; */
    font-weight: bold;
    }
    .ptag{
        text-align: center;
        color: #333;
        font-size: 18px;
        font-weight: bold;
        font-family: 'Roboto', sans-serif;
        max-width: 700px;
        line-height: 1.5;
        margin: 0 auto;
    
    }
    @media (max-width: 768px) {
        .sorularDiv{
            margin: 22px;
            padding: 30px;
        }
        .sorularDiv div {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .answerP {
            padding: 10px 0 0 0;
        }
        .baslikh4{
            line-height: 5rem;
        }
        .baslikh5{
            line-height: 5.5rem;
        }
    }
</style>

<style>
    .card-container {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px;
    }
    .feature-box {
              background: #fff;
    border-radius: 25px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    transition: transform 0.3s, box-shadow 0.3s;
    text-align: center;
    /* padding: 38px; */
    /* margin-right: 50px; */
    height: 250px;
    width: 100%;
    display: flex;
    flex-direction: column;
    overflow: hidden;
        }
    .feature-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
    }
    .feature-small-icon {
        font-size: 40px;
        color: #007bff;
    }
    .feature-small-content h3 {
        font-size: 24px;
        font-weight: 700;
        color: #0f75bc !important;
        /* margin-bottom: 10px; */
    }
    .feature-small-content h5 {
        font-size: 20px;
        font-weight: 600;
        color: #333;
        /* letter-spacing: 1px; */
        /* margin-bottom: 10px; */
    }
    .feature-small-content p {
      font-size: 14px;
    color: #666;
    line-height: 22px;
    }
</style>    

<style>
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f7f7f7;
        }

        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        .tab button:hover {
            background-color: red;
            color: white;
        }

        .tab button.active {
            background-color: red;
            color: white;
        }

        .tabcontent {
            display: none;
            /* padding: 6px 12px; */
            border: 1px solid #ccc;
            border-top: none;
        }

        .swiper-container {
            width: 100%;
            height: 100%;
        }

        swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

@endsection
