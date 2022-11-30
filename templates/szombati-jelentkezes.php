<!-- topbar end-->
<div class="topbar-area topbar-area-2 application-form-content linear-gradient">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 align-self-center">
                <div class="topbar-left text-md-left text-center">
                    <span>SZOMBATI JELENTKEZÉS</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- topbar end-->

<!-- contact area Start -->
<div class="contact-area pd-top-50 pd-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-inner">
                    <i class="fa fa-home"></i>
                    <ul class="page-list">
                        <li><a href="index.html">Kezdőlap</a></li>
                        <li>Szombati jelentkezés</li>
                    </ul>
                </div>
                <div class="contact-area-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <!-- <h5>...</h5> -->
                                <h3>Jelentkezés elküldése</h3>
                            </div>
                            <form class="contact-form" id="AddSaturdayPeople" method="POST"
                                action="/AddSaturdayPeopleSubmit">
                                <div class="single-input-wrap input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="user_name" name="user_name"
                                        placeholder="Teljes név*">
                                </div>
                                <div class="single-input-wrap input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="user_email" name="user_email"
                                        placeholder="e-mail cím*">
                                </div>
                                <!-- <div class="single-input-wrap with-select">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-cog"></i></div>
                                    </div>
                                    <select>
                                        <option>Select a Service</option>
                                        <option value="1">3 Month</option>
                                        <option value="2">6 Month</option>
                                        <option value="3">9 Month</option>
                                        <option value="4">12 Month</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="single-input-wrap input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-phone"></i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Phone Number*">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="single-input-wrap input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><img src="assets/img/map-marker.png"
                                                        alt="img"></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Website(optional)*">
                                        </div>
                                    </div>
                                </div> -->
                                <div class="alert alert-success inserted-alert-success text-center">
                                    <p id="inserted" class="inserted-alert-success__p">
                                    </p>
                                </div>
                                <div class="application-form-content__btn-box">
                                    <button type="submit"
                                        class="btn application-form-content__btn-box__btn">Küldés</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area End -->

<div class="contact-map">
    <div class="mapouter">
        <div class="gmap_canvas"><iframe id="gmap_canvas"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2695.1993187451635!2d19.0662541!3d47.5055094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741dc6e37bd7c21%3A0x1a7fb4562a7e2202!2sBudapest%2C%20Hunyadi%20t%C3%A9r%203%2C%201067!5e0!3m2!1shu!2shu!4v1665437035374!5m2!1shu!2shu"></iframe>
        </div>
    </div>
</div>