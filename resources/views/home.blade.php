@extends('base.base')
@section('body') 
<div class="brandName" data-aos="fade-right" data-aos-duration="1500">
    <h1>Talk.</h1>
</div>

<div class="BRANDsplitline" data-aos="fade-right" data-aos-duration="1500"></div>

<div class="brandSlogan" data-aos="fade-right" data-aos-delay="400" data-aos-duration="3000">
    <h3>let's Talk.</h3>
</div>

<div class="TolkVertaal-Container">
    <div class="TolkenText">
        <div data-aos="fade-left" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">
            <h1>Tolk</h1>
        </div>
        <div class="TOLKsplitline"></div>
        <div data-aos="fade-right" data-aos-duration="2000">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam officia eveniet dolor commodi ex eum? Suscipit sit illum dolorem? Magnam distinctio deserunt ea. Reiciendis fuga ex est officia, odit ea.</p>
        </div>
    </div>

    <div class="VertalenText">
        <div data-aos="fade-left" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">
            <h1>Vertalen</h1>
        </div>
        <div class="VERTAALsplitline"></div>
        <div data-aos="fade-right" data-aos-duration="2000">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt veritatis ea reprehenderit veniam, minima aut porro id modi nam! Enim dicta veritatis odio assumenda illo recusandae expedita tenetur quisquam architecto.</p>
        </div>
    </div>
    <div class="VertaalTalenText">
        <div data-aos="fade-down" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">
            <h1>Vertaal Richtingen</h1>
        </div>
        <div class="TALENsplitline"></div>
        <div data-aos="fade-up" data-aos-duration="2000">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, sequi! Eveniet, cupiditate. Doloremque neque quod id suscipit autem numquam maxime et, praesentium voluptate hic minus sequi, quo nobis velit animi aperiam necessitatibus.</p>
        </div>
    </div> 
    <div class="VertaalRichtingen"> 
        <div class="Arabisch-NederlandsRichting" data-aos="zoom-in" data-aos-duration="2000">
            <p>Arabisch <i class="RightArrow fas fa-long-arrow-alt-right"></i> Nederlands <i class="Richting-Check fas fa-check"></i></p>
            <p>Arabisch <i class="LeftArrow fas fa-long-arrow-alt-left"></i> Nederlands <i class="Richting-Check fas fa-check"></i><br><br></p>
        </div>
        <div class="Engels-ArabischRichting" data-aos="zoom-in" data-aos-duration="2000">
            <p>Engels <i class="RightArrow fas fa-long-arrow-alt-right"></i> Arabisch <i class="Richting-Check fas fa-check"></i></p>
            <p>Engels <i class="LeftArrow fas fa-long-arrow-alt-left"></i> Arabisch <i class="Richting-Check fas fa-check"></i><br><br></p>
        </div>
    </div>
</div>

@endsection

