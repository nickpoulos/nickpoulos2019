<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Nick Poulos - NY Software Industry Vet</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="/img/favicon.png">
    <link rel="apple-touch-icon" href="/img/favicon_60x60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon_76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon_120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon_152x152.png">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i%7CPoppins:300,400,500,600" rel="stylesheet">

    <!-- CSS Styles -->
    <link rel="stylesheet" href="/css/styles.css" />

    <!-- CSS Theme -->
    <link id="theme" rel="stylesheet" href="/css/themes/theme-sans_serif-blue.css" />
    <style type="text/css">

        a.full {display:block; height: 100%; width: 100%; position: relative;}
        .accordion-list { padding-left: 0; text-align: left; }
        .accordion-list li { margin-bottom: 15px; }

    </style>
</head>
<body>
<!-- Loader -->
<div id="page-loader" style="display: none;">
    <svg class="loader" width="32px" height="32px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="circle" fill="none" stroke-width="5" stroke-linecap="round" cx="32" cy="32" r="32"></circle></svg>
</div>
<!-- Loader / End -->

<!-- Content -->
    <!-- Section -->
    <section>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <img src="/img/work/lt.jpg" alt="" class="img-circle mb-40">
                    <h3>ReportingThings</h3>
                    <p class="lead text-muted">A multi-feature analytics and revenue reporting tool that powered LittleThings influencer business. Over 1000+ external partners accessed this tool to check their shared revenue, pageviews, and many other metrics.  Internally our employees used it to track shared content, invoices, and many other aspects of LittleThings business.  Integrated into many other internal and external tools via several APIs. </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section -->
    <section class="section-xs bg-light">
        <div class="container text-center">
            <div class="row">
                <div class="image col-md-6">
                    <img src="/img/projects/renders/rt-browser.png" style="top: 60px; left: -140px; position: relative;" alt="" class="zooming mb-40">
                </div>
                <div class="col-md-6">
                    <h1 class="text-lg">My Role</h1>
                    <p class="lead text-muted">I was served as Senior Engineer and Project Leader for ReportingThings, and oversaw a major rewrite of the entire project, including a full redesign of the front end.  Under my leadership we also modernized the build and deploy processes to a more continuous-integration style, with automated unit tests and enforced coding standards.  This project was a one of 4 major tools built by our team, and is still powering LittleThings business to this day.</p>
                    <div class="row mt-40">
                        <div class="col-sm-6">
                            <dl class="description-2">
                                <dt>Client</dt>
                                <dd>LittleThings Inc</dd>
                                <dt>My Role</dt>
                                <dd>Lead Engineer</dd>
                            </dl>
                        </div>
                        <div class="col-sm-6">
                            <dl class="description-2">
                                <dt>Tech Used</dt>
                                <dd><span class="label label-primary">Laravel</span> <span class="label label-primary">Vue</span></dd>
                                <dt>Date</dt>
                                <dd>2017</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section -->
    <section class="section-xs">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-6">
                    <h1>More Info</h1>
                    <div class="row mt-40">
                        <!-- Accordion -->
                        <div class="panel-group" id="more-info" role="tablist" aria-multiselectable="false">
                            <!-- Panel -->
                            <div class="panel panel-2">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#more-info" href="#features" aria-expanded="false">Partial Feature List</a>
                                    </h4>
                                </div>
                                <div id="features" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <ul class="accordion-list">
                                            <li>Imported and organized all revenue, traffic and video play data from Google Ads, Google Analytics, Facebook, JW Player into granular, actionable data for both
                                            our employees and our external partners.  A series of reports with a custom built data-tables that included advanced filtering, multi-series graphs/metrics, and CSV imports/exports</li>
                                            <li>Invoicing systems that integrated with QuickBooks and SalesForce CRM for our accounting and sales teams</li>
                                            <li>Social media post and email design tools for our partners to share our content with proper UTM attribution</li>
                                            <li>Sales & shares forecasting tools</li>
                                            <li>Several REST APIs to share data with our other tools and systems</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Panel -->
                            <div class="panel panel-2">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#more-info" href="#tech-specs" aria-expanded="false">Tech Specs</a>
                                    </h4>
                                </div>
                                <div id="tech-specs" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <ul class="accordion-list">
                                            <li>Laravel 5.7 / Vue 2 / SemanticUI</li>
                                            <li>Postgres DB with Redis Cache Layer</li>
                                            <li>AWS Hosting using EC2 / RDS / Elasticache / S3</li>
                                            <li>Continuously Integrated Deploys using Laravel Forge/Envoyer & TravisCI </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Panel -->
                            <div class="panel panel-2">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#more-info" href="#by-the-numbers" aria-expanded="false">By The Numbers</a>
                                    </h4>
                                </div>
                                <div id="by-the-numbers" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <ul class="accordion-list">
                                            <li>Managed over <strong>1,500</strong> users</li>
                                            <li>Processed <strong>54,000,000+</strong> pageview records</li>
                                            <li>Tracked <strong>750,000+</strong> pieces of content</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image col-sm-6 text-right">
                    <img src="/img/projects/renders/rt-laptop.png" style="position: relative; top: 30px; left: 25px;"  alt="" class="zooming mb-40">
                </div>
            </div>
        </div>
    </section>
    <!-- Section -->
    <section class="bg-light pt-45 pb-45">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-push-2">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="https://www.reportingthings.com" target="_blank" class="btn btn-primary btn-block">Visit Live Site</a>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-default btn-block">Close</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- JS Libraries -->
<script src="/js/jquery-1.12.4.min.js"></script>

<!-- JS Plugins -->
<script src="/js/plugins.js"></script>

<!-- JS Core -->
<script src="/js/core.js"></script>

<!-- JS Google Map -->
<script src="https://maps.google.com/maps/api/js?key={{ config("services.google-maps.apikey") }}"></script>

</body>

</html>