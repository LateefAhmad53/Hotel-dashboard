@extends('layout.master')
@section('title')
Contact - Lincoln Height Hotel
@endsection
@section('content')

<main>
    <!-- Breadcrumbs & Page title-->
    <section class="section-md text-center bg-image breadcrumbs-01">
        <div class="shell shell-fluid">
            <div class="range range-xs-center">
                <div class="cell-xs-12 cell-xl-11">
                    <h2 class="text-white">Contacts</h2>
                    <ul class="breadcrumbs-custom">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Contacts</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-md bg-white text-center">
        <div class="shell">
            <div class="range range-50 range-md-center">
                <div class="cell-sm-8">
                    <div class="contact-box">
                        <h3>Get in Touch</h3>
                        <p>Our support team is at your service round-the-clock via fax, email, or phone. Alternatively, you can utilize our convenient contact form for any inquiries about our services. We're here to address your questions promptly and with pleasure.</p>
                        <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                            <div class="range range-sm-bottom spacing-20">
                                <div class="cell-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-first-name" type="text" name="name" required>
                                        <label class="form-label" for="contact-first-name">Your name</label>
                                    </div>
                                </div>
                                <div class="cell-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-last-name" type="text" name="phone" required>
                                        <label class="form-label" for="contact-last-name">Phone</label>
                                    </div>
                                </div>
                                <div class="cell-xs-12">
                                    <div class="form-wrap">
                                        <textarea class="form-input" id="contact-message" name="message" required></textarea>
                                        <label class="form-label" for="contact-message">Your Message</label>
                                    </div>
                                </div>
                                <div class="cell-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-email" type="email" name="email" required>
                                        <label class="form-label" for="contact-email">E-mail</label>
                                    </div>
                                </div>
                                <div class="cell-sm-6">
                                    <button class="button button-primary button-square button-block button-effect-ujarak" type="submit"><span>send message</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="cell-sm-4">
                    <aside class="contact-box-aside text-left">
                        <div class="range range-50">
                            <div class="cell-xs-6 cell-sm-12">
                                <p class="aside-title"> get Social</p>
                                <hr class="divider divider-left divider-custom">
                                <ul class="list-inline">
                                    <li><a class="icon icon-sm icon-gray-3 fa fa-instagram" href="#"></a></li>
                                    <li><a class="icon icon-sm icon-gray-3 fa fa-facebook" href="#"></a></li>
                                    <li><a class="icon icon-sm icon-gray-3 fa fa-twitter" href="#"></a></li>
                                    <li><a class="icon icon-sm icon-gray-3 fa fa-youtube" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="cell-xs-6 cell-sm-12">
                                <p class="aside-title"> Phone</p>
                                <hr class="divider divider-left divider-custom">
                                <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                                    <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-phone icon-primary"></span></div>
                                    <div class="unit__body"><a class="text-middle link link-gray-dark" href="tel:#">+2349060150720</a></div>
                                </div>
                            </div>
                            <div class="cell-xs-6 cell-sm-12">
                                <p class="aside-title"> Address</p>
                                <hr class="divider divider-left divider-custom">
                                <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                                    <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-map-marker icon-primary"></span></div>
                                    <div class="unit__body"><a class="text-middle link link-gray-dark" href="contacts.html">No. 1 Olorunsogo street, old kara, sango, Ilorin.</a></div>
                                </div>
                            </div>
                            <div class="cell-xs-6 cell-sm-12">
                                <p class="aside-title"> opening hours</p>
                                <hr class="divider divider-left divider-custom">
                                <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                                    <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-clock icon-primary"></span></div>
                                    <div class="unit__body text-gray-darker">
                                        <p>Weekdays: 8:00–20:00 | Weekends: 9:00–18:00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    @endsection