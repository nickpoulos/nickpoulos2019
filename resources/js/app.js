
require('./bootstrap');
const ucwords = require('locutus/php/strings/ucwords');

window.Vue = require('vue');
window.VueScrollTo = require('vue-scrollto');


import 'waypoints/lib/noframework.waypoints.min.js';
import VueObserveVisibility from 'vue-observe-visibility';
import {VueMasonryPlugin} from 'vue-masonry';
import imagesLoaded from 'vue-images-loaded'
import VueTypedJs from 'vue-typed-js';
import moment from 'moment';


Vue.prototype.ucwords = ucwords;
Vue.prototype.moment = moment;

Vue.use(VueMasonryPlugin);
Vue.use(VueObserveVisibility);
Vue.use(VueTypedJs);
Vue.use(VueScrollTo, {
    container: "body",
    duration: 500,
    easing: "ease",
    offset: 0,
    force: true,
    cancelable: true,
    onStart: false,
    onDone: false,
    onCancel: false,
    x: false,
    y: true
});


const app = new Vue({
    el: '#app',
    directives: {
        imagesLoaded
    },
    mixins: [window.mix],
    components: {
    },
    data: {
        mobile: false,
        currentProject: null,
        modalOpen: false,
        contactOpen: false,
        loadingLatestPosts: false,
        latestPosts: null,
        sendingEmail: false,
        pageLoading: true,
        references: [
            {
                name: 'Matt Messinger',
                title: 'Engineering Director WildSky Media',
                body: 'Sed lacinia, nibh sit amet auctor vestibulum, enim risus condimentum erat, quis vestibulum mi ligula a nulla. Nulla vitae pharetra tellus.Aenean ac tincidunt augue, volutpat ullamcorper elit.',
                image: 'matt.jpg'
            },
            {
                name: 'Maysam Saghedi',
                title: 'Engineering Director WildSky Media',
                body: 'Sed lacinia, nibh sit amet auctor vestibulum, enim risus condimentum erat, quis vestibulum mi ligula a nulla. Nulla vitae pharetra tellus.Aenean ac tincidunt augue, volutpat ullamcorper elit.',
                image: 'matt.jpg'
            },
            {
                name: 'Matt Messinger',
                title: 'Engineering Director WildSky Media',
                body: 'Sed lacinia, nibh sit amet auctor vestibulum, enim risus condimentum erat, quis vestibulum mi ligula a nulla. Nulla vitae pharetra tellus.Aenean ac tincidunt augue, volutpat ullamcorper elit.',
                image: 'matt.jpg'
            },
        ]
    },
    methods: {
        year: function (date) {
            return moment(date).format('YYYY');
        },
        monthYear: function (date) {
            return moment(date).format('MMM YYYY');
        },
        fullDate: function (date) {
            return moment(date).format('MMM DD YYYY');
        },
        mobileDetector: function () {

            let isMobile = {
                Android: function() {
                    return navigator.userAgent.match(/Android/i);
                },
                BlackBerry: function() {
                    return navigator.userAgent.match(/BlackBerry/i);
                },
                iOS: function() {
                    return navigator.userAgent.match(/iPhone|iPad|iPod/i);
                },
                Opera: function() {
                    return navigator.userAgent.match(/Opera Mini/i);
                },
                Windows: function() {
                    return navigator.userAgent.match(/IEMobile/i);
                },
                any: function                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               qq() {
                    return isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows();
                }
            };

            this.mobile = isMobile.any();
        },
        fetchLatestPosts: function() {
            let instance = this;
            instance.blogLoading = true;

            axios.get('/fetch-posts/')
                .then(function (response) {
                    instance.loadingLatestPosts = true;
                    if (response.data) {
                        instance.latestPosts = response.data;
                    }
                    instance.loadingLatestPosts = false;
                })
                .catch(function (error) {
                   console.log(error);
                });
        },
        sendEmail: function() {
            let instance = this;
            let name = document.getElementById('name');
            let email = document.getElementById('email');
            let msg = document.getElementById('message');

            instance.sendingEmail = true;

            axios.post('/send-email/', {
                    'name': name,
                    'email': email,
                    'message': message
            })
                .then(function (response) {
                    instance.sendingEmail = true;
                    if (response.data) {
                        instance.latestPosts = response.data;
                    }
                    instance.sendingEmail = false;
                })
                .catch(function (error) {
                   console.log(error);
                });
        },
        map: function() {

            let $googleMap = document.getElementById('google-map');

            let yourLatitude = $googleMap.getAttribute('data-latitude');
            let yourLongitude = $googleMap.getAttribute('data-longitude');
            let pickedStyle = $googleMap.getAttribute('data-style');

            let dark = [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}];
            let light = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];
            let dream = [{"featureType":"landscape","stylers":[{"hue":"#FFBB00"},{"saturation":43.400000000000006},{"lightness":37.599999999999994},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#FFC200"},{"saturation":-61.8},{"lightness":45.599999999999994},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":51.19999999999999},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":52},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#0078FF"},{"saturation":-13.200000000000003},{"lightness":2.4000000000000057},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#00FF6A"},{"saturation":-1.0989010989011234},{"lightness":11.200000000000017},{"gamma":1}]}];
            let paper = [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"simplified"},{"hue":"#0066ff"},{"saturation":74},{"lightness":100}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"off"},{"weight":0.6},{"saturation":-85},{"lightness":61}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"simplified"},{"color":"#5f94ff"},{"lightness":26},{"gamma":5.86}]}];

            let myOptions = {
                zoom: 14,
                center: new google.maps.LatLng(yourLatitude,yourLongitude),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                mapTypeControl: false,
                panControl: false,
                zoomControl: true,
                scaleControl: false,
                streetViewControl: false,
                scrollwheel: false,
                styles: eval(pickedStyle)
            };

            let map = new google.maps.Map(document.getElementById('google-map'), myOptions);
            let image = pickedStyle === 'dark' ? '/img/location-pin-light.png' : '/img/location-pin.png';
            let myLatLng = new google.maps.LatLng(yourLatitude,yourLongitude);
            let myLocation = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: image
            });
        },
        offset: function(el) {
            let rect = el.getBoundingClientRect();

            return {
                top: rect.top + document.body.scrollTop,
                left: rect.left + document.body.scrollLeft
            };
        },
        sleep: function(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        },
        navToggle: function() {
            let navToggle = document.getElementById('vertical-nav-toggle');
            navToggle.classList.toggle('active');
            document.body.classList.toggle('mobile-nav-open');
            return false;
        },
        trimWord: function (str, maxLen, separator = ' ') {
            if (str.length <= maxLen) return str;
            return str.substr(0, str.lastIndexOf(separator, maxLen));
        },
        navSetActive: function(event) {
            let listItem = null;

            if (typeof event === 'object') {
                // if this came from a button click, use target
                event.preventDefault();
                listItem = event.target.closest('li');
                //window.history.pushState({}, '', event.target.closest('a').href)
            } else {
                // if we explicity tell it which item
                listItem = document.getElementById('nav-' + event.replace('#', ''));
                window.history.pushState({}, '', '#' + event);
            }

            let allItems = document.querySelectorAll("#main-menu li");

            allItems.forEach((el, i) => {
                el.classList.remove('active');
            });

            listItem.classList.add('active');
            this.navSetSelector(listItem);

        },
        visibilityChanged: function(visible, entry, elementId) {
            let element = document.getElementById(elementId);
            let animation = element.getAttribute('data-animation');
            let delay = element.getAttribute('data-animation-delay') || 0;

            if (visible) {
                setTimeout(function() {
                    element.classList.add(animation);
                    element.classList.add('visible');
                }, delay);
            } else {
                setTimeout(function() {
                    element.classList.remove(animation);
                    element.classList.remove('visible');
                }, 0);
            }
        },
        animateProgress: function(visible, entry, elementId) {
            let element = document.getElementById(elementId);
            let percent = element.getAttribute('aria-valuenow');
            let delay = element.getAttribute('data-animation-delay') || 0;

            if (visible) {
                setTimeout(function() {
                    element.style.width = percent + '%';
                }, delay);
            } else {
                setTimeout(function() {
                    element.style.width = '0%';
                }, 0);
            }
        },
        navSetSelector: function(element) {
            let $activeItem = element,
                $mainMenu = document.getElementById('main-menu'),
                $menuItems = document.querySelectorAll('#main-menu li > a'),
                $selector = $mainMenu.querySelector('.selector'),
                mainMenuOffset = this.offset($mainMenu).top;

            $selector.style.height = $activeItem.offsetHeight + 'px';
            $selector.style.top = this.offset($activeItem).top - mainMenuOffset + 'px';
        },
        navHideMobile: function(event) {
            document.getElementById('vertical-nav-toggle').classList.remove('active');
            return false;
        },
        setHeaderClass: function() {
            let header = document.getElementById('header'),
                scrolled = document.documentElement.scrollTop,
                windowHeight = this.windowHeight(),
                scrolledBarrier = windowHeight / 2;

            if (scrolled >= scrolledBarrier) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        },
        addWindowEventListeners: function() {
            let instance = this;

            window.addEventListener('scroll', function() {
                instance.setHeaderClass();
            });

            window.addEventListener('load', function() {
                document.body.classList.add('loaded');
            });

            window.addEventListener('resize', function(){
                setTimeout(function(){
                    Waypoint.refreshAll()
                },600);
            });
        },
        windowHeight: function() {
            let w = window,
                d = document,
                e = d.documentElement,
                g = d.getElementsByTagName('body')[0],
                x = w.innerWidth || e.clientWidth || g.clientWidth,
                y = w.innerHeight || e.clientHeight || g.clientHeight;

            return y;
        },
        imageProgress: function() {
            this.$redrawVueMasonry();
        },
        setWayPoints: function() {
            let instance = this;
            let navLinks = document.querySelectorAll('#main-menu li a');
            navLinks.forEach(link => {
                let id = link.href.split('#')[1];
                let element = document.getElementById(id);

                let waypointA = new Waypoint({
                    element: element,
                    handler: function(direction) {
                        if (direction === 'up') {
                            instance.navSetActive(id);
                        }
                    },
                    offset: function() {
                        return -element.clientHeight + 2;
                    }
                });

                let waypointB = new Waypoint({
                    element: element,
                    handler: function(direction) {
                        if (direction === 'down') {
                            instance.navSetActive(id);
                        }
                    },
                    offset: function() {
                        return 1;
                    }
                })
            });
        },
        openContactForm: function(e) {
            e.preventDefault();
            this.contactOpen = true;
            this.sleep(500).then(function() {
                document.body.classList.add('contact-popup-open');
            });

        },
        closeContactForm: function(e) {
            e.preventDefault();
            document.body.classList.remove('contact-popup-open');
            this.contactOpen = false;
        },
        closeProjectDetails: function(e) {
            e.preventDefault();
            let instance = this;
            let modal = document.getElementById('ajax-modal');
            let content = document.getElementById('modal-content');

            document.body.classList.remove('ajax-modal-loaded');

            instance.sleep(100).then(function() {
                content.classList.add('fadeout');
                content.classList.remove('fadein');
                instance.sleep(500).then(function() {
                    instance.modalOpen = false;
                    instance.currentProject = null;
                    modal.classList.remove('loading-started');
                    modal.classList.remove('loading-finished');
                    Waypoint.enableAll();
                });
            });
        },
        openProjectDetails: function(id) {
            let instance = this;
            let modal = document.getElementById('ajax-modal');

            Waypoint.disableAll()

            instance.modalOpen = true;

            instance.sleep(100).then(function() {
                modal.classList.add('loading-started');
                instance.sleep(750).then(function() {
                    document.body.classList.add('ajax-modal-loaded');
                    document.body.classList.toggle('mobile-nav-open');
                    instance.loadProject(id);
                });
            });
        },
        loadProject: function(id) {
            let modal = document.getElementById('ajax-modal');
            let content = document.getElementById('modal-content');

            this.currentProject = this.projects[id];

            content.classList.add('fadein');
            content.classList.remove('fadeout');

            this.sleep(250).then(function() {
                modal.classList.add('loading-finished');
            });
        }
    },
    computed: {

    },
    mounted: function() {
        this.addWindowEventListeners();
        this.mobileDetector();
        this.map();
        this.setWayPoints();
        this.fetchLatestPosts();
        this.pageLoading = false;
    }
});
