<?= $this->extend('template/front') ?>

<?= $this->section('content') ?>

<div id="slider">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <div class="slider-caption">
                    <h1>Delicious Meals</h1>
                    <p>Donec justo dui, semper vitae aliquam euzali, ornare pretium enim. Maecenas molestie diam
                        <br><br>eget tellus luctus fermentum.</p>
                    <a href="<?= base_url('menu') ?>">Shop Now</a>
                </div>
                <img src="asset/images/slide1.jpg" alt="" />
            </li>
            <li>
                <div class="slider-caption">
                    <h1>Ice-cream Menus</h1>
                    <p>Nulla id iaculis ligula. Vivamus mattis quam eget urna tincidunt consequat. Nullam
                        <br><br>consectetur tempor neque vitae iaculis. Aliquam erat volutpat.</p>
                    <a href="<?= base_url('menu') ?>">Shop Now</a>
                </div>
                <img src="asset/images/slide2.jpg" alt="" />
            </li>
            <li>
                <div class="slider-caption">
                    <h1>Healthy Drinks</h1>
                    <p>Maecenas fermentum est ut elementum vulputate. Ut vel consequat urna. Ut aliquet
                        <br><br>ornare massa, quis dapibus quam condimentum id.</p>
                    <a href="<?= base_url('menu') ?>">Shop Now</a>
                </div>
                <img src="asset/images/slide3.jpg" alt="" />
            </li>
        </ul>
    </div>
</div>


<div id="timeline-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section">
                    <h2>Who We Are</h2>
                    <img src="asset/images/under-heading.png" alt="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h3>Our Company</h3>
                <p>Nulla sodales ut tellus blandit accumsan. Aliquam erat volutpat. Morbi quis vestibulum erat. Nam malesuada lobortis tempus. Fusce fermentum libero fringilla odio pharetra malesuada. </p>
            </div>
            <div class="col-md-6">
                <h3>Team Management</h3>
                <p>Suspendisse quis consectetur nisi, vitae consequat sem. In et quam id libero venenatis venenatis. Morbi vitae justo vulputate, auctor augue eu, pulvinar augue. Vestibulum placerat sem eu posuere laoreet. Ut ac ex nec urna maximus tristique interdum eget ipsum.</p>
            </div>
        </div>

        <div class="space50"></div>

        <div class="row">
            <div class="col-md-2 col-sm-4">
                <div class="timeline-thumb">
                    <div class="thumb">
                        <img src="asset/images/timeline1.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="timeline-caption">
                            <a href="">
                                <h4>Breakfast</h4>
                            </a>
                            <p>7:30 AM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="timeline-thumb">
                    <div class="thumb">
                        <img src="asset/images/timeline2.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="timeline-caption">
                            <a href="">
                                <h4>Lunch</h4>
                            </a>
                            <p>11:20 AM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="timeline-thumb">
                    <div class="thumb">
                        <img src="asset/images/timeline3.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="timeline-caption">
                            <a href="">
                                <h4>Lunch</h4>
                            </a>
                            <p>1:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="timeline-thumb">
                    <div class="thumb">
                        <img src="asset/images/timeline4.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="timeline-caption">
                            <a href="">
                                <h4>Dinner</h4>
                            </a>
                            <p>6:30 PM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="timeline-thumb">
                    <div class="thumb">
                        <img src="asset/images/timeline5.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="timeline-caption">
                            <a href="">
                                <h4>Dinner</h4>
                            </a>
                            <p>8:20 PM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="timeline-thumb">
                    <div class="thumb">
                        <img src="asset/images/timeline6.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="timeline-caption">
                            <a href="#">
                                <h4>Dinner</h4>
                            </a>
                            <p>9:10 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="testimonails">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section">
                    <h2>What They Say About Us</h2>
                    <img src="asset/images/under-heading.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="testimonails-slider">
                    <ul class="slides">
                        <li>
                            <div class="testimonails-content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati nemo sint doloremque autem, ab dicta mollitia veniam id cumque quod reprehenderit at corrupti possimus. Vitae, temporibus. Dolores, tempore. Eveniet, ipsa.</p>
                                <h6>Joseph - Head Chef</h6>
                            </div>
                        </li>
                        <li>
                            <div class="testimonails-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi neque qui et voluptas reiciendis repellat, provident repudiandae temporibus dignissimos rerum ducimus recusandae magnam delectus tempore dolores sunt reprehenderit a. Repudiandae?</p>
                                <h6>Joel - Head Marketing Staff</h6>
                            </div>
                        </li>
                        <li>
                            <div class="testimonails-content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate facere sequi at autem quam saepe exercitationem! Veritatis quod at dicta! Fuga quasi dolorum voluptatem quibusdam? Minima veritatis dolorum illum atque?</p>
                                <h6>Daniel - Grill's Co-founder</h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>