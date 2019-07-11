<!DOCTYPE html>
<html lang="en">
<head>
	<title>Unica - University Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Unica University Template">
	<meta name="keywords" content="event, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
html,
body {
	height: 100%;
	font-family: 'Rubik', sans-serif;
}

h1,
h2,
h3,
h4,
h5,
h6 {
	color: #111111;
	margin: 0;
	font-weight: 500;
	font-family: 'Rubik', sans-serif;
}

h1 {
	font-size: 60px;
}

h2 {
	font-size: 36px;
	line-height: 1.2;
}

h3 {
	font-size: 30px;
}

h4 {
	font-size: 24px;
}

h5 {
	font-size: 20px;
}

h6 {
	font-size: 14px;
}

p {
	font-size: 14px;
	color: #636363;
	line-height: 1.6;
}

img {
	max-width: 100%;
}

input:focus,
select:focus,
button:focus,
textarea:focus {
	outline: none;
}

a:hover,
a:focus {
	text-decoration: none;
	outline: none;
}

ul,
ol {
	padding: 0 !important;
	margin: 0;
}

/*---------------------
	Helper CSS
-----------------------*/

.spad {
	padding-top: 90px;
	padding-bottom: 90px;
}

.section-title {
	margin-bottom: 70px;
}

.section-title h3 {
	text-transform: uppercase;
	margin-bottom: 20px;
}

.section-title p {
	margin-bottom: 0;
}

.set-bg {
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center 0;
}

.text-white h1,
.text-white h2,
.text-white h3,
.text-white h4,
.text-white h5,
.text-white p,
.text-white span,
.text-white li,
.text-white a {
	color: #fff;
}

/*---------------------
	Commom elements
-----------------------*/

/* Buttons */

.site-btn {
	position: relative;
	display: inline-block;
	text-transform: uppercase;
	background: #f6783a;
	color: #fff;
	padding: 18px 30px;
	font-size: 14px;
	font-weight: 500;
	line-height: 14px;
	border-radius: 50px;
	min-width: 170px;
	text-align: center;
	border: none;
	cursor: pointer;
}

/* Image Popup */

.img-popup-warp .mfp-content,
.img-popup-warp.mfp-ready.mfp-removing .mfp-content {
	opacity: 0;
	-webkit-transform: scale(0.8);
	-ms-transform: scale(0.8);
	transform: scale(0.8);
	-webkit-transition: all 0.4s;
	-o-transition: all 0.4s;
	transition: all 0.4s;
}

.img-popup-warp.mfp-ready .mfp-content {
	opacity: 1;
	-webkit-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
}

/* Preloder */

#preloder {
	position: fixed;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	z-index: 999999;
	background: #fff;
}

.loader {
	width: 40px;
	height: 40px;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-top: -13px;
	margin-left: -13px;
	border-radius: 60px;
	animation: loader 0.8s linear infinite;
	-webkit-animation: loader 0.8s linear infinite;
}

@keyframes loader {
	0% {
		-webkit-transform: rotate(0deg);
		        transform: rotate(0deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
	50% {
		-webkit-transform: rotate(180deg);
		        transform: rotate(180deg);
		border: 4px solid #673ab7;
		border-left-color: transparent;
	}
	100% {
		-webkit-transform: rotate(360deg);
		        transform: rotate(360deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
}

@-webkit-keyframes loader {
	0% {
		-webkit-transform: rotate(0deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
	50% {
		-webkit-transform: rotate(180deg);
		border: 4px solid #673ab7;
		border-left-color: transparent;
	}
	100% {
		-webkit-transform: rotate(360deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
}

/*---------------------
	Header section
-----------------------*/

.header-section {
	padding: 20px 0;
	overflow: hidden;
}

.site-logo {
	display: inline-block;
	margin-right: 50px;
	padding-top: 20px;
}

.header-info {
	display: inline-block;
	float: right;
}

.header-info .hf-item {
	display: inline-block;
	margin-left: 35px;
}

.header-info .hf-item i {
	width: 45px;
	height: 45px;
	display: inline-block;
	position: relative;
	text-align: center;
	color: #f6783a;
	font-size: 17px;
	padding-top: 13px;
	margin-right: 20px;
	margin-top: 10px;
	margin-bottom: 10px;
}

.header-info .hf-item i:after {
	position: absolute;
	content: '';
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	border: 1px solid #d2d2db;
	-webkit-transform: rotate(45deg);
	    -ms-transform: rotate(45deg);
	        transform: rotate(45deg);
	border-radius: 2px;
}

.header-info .hf-item p {
	display: inline-block;
	position: relative;
	top: 10px;
	margin-bottom: 0;
}

.header-info .hf-item p span {
	display: block;
	font-size: 12px;
	text-transform: uppercase;
	color: #020031;
	font-weight: 500;
}

.nav-switch {
	display: none;
}

.nav-section {
	background: #020031;
}

.nav-section .nav-right {
	float: right;
	padding-top: 23px;
}

.nav-section .nav-right a {
	color: #fff;
	margin-left: 30px;
	font-size: 16px;
}

.main-menu {
	list-style: none;
}

.main-menu li {
	display: inline;
}

.main-menu li a {
	display: inline-block;
	color: #fff;
	font-size: 13px;
	text-transform: uppercase;
	font-weight: 500;
	padding: 25px 20px;
	margin-right: -5px;
	-webkit-transition: all 0.4s ease 0s;
	-o-transition: all 0.4s ease 0s;
	transition: all 0.4s ease 0s;
}

.main-menu li a:hover {
	background: #f6783a;
}

.main-menu li.active a {
	background: #f6783a;
}

/*---------------------
	Hero Section
-----------------------*/

.hs-item {
	min-height: 760px;
	position: relative;
	display: table;
	width: 100%;
}

.hs-item .hs-text {
	position: relative;
	display: table-cell;
	vertical-align: middle;
	z-index: 2;
}

.hs-item .hs-subtitle {
	font-size: 16px;
	text-transform: uppercase;
	color: #f6783a;
	font-weight: 500;
	letter-spacing: 2px;
	margin-bottom: 30px;
	position: relative;
	opacity: 0;
	top: 50px;
}

.hs-item .hs-title {
	color: #fff;
	font-size: 48px;
	margin-bottom: 25px;
	position: relative;
	left: 150px;
	opacity: 0;
	text-transform: uppercase;
}

.hs-item .hs-des {
	color: #fff;
	font-size: 16px;
	line-height: 2;
	position: relative;
	left: 150px;
	opacity: 0;
}

.hs-item .site-btn {
	margin-top: 30px;
	opacity: 0;
	top: 50px;
}

.owl-item.active .hs-item .hs-title,
.owl-item.active .hs-item .hs-des,
.owl-item.active .hs-item .hs-subtitle,
.owl-item.active .hs-item .site-btn {
	left: 0;
	top: 0;
	opacity: 1;
}

.owl-item.active .hs-item .hs-subtitle {
	-webkit-transition: all 0.5s ease 0.4s;
	-o-transition: all 0.5s ease 0.4s;
	transition: all 0.5s ease 0.4s;
}

.owl-item.active .hs-item .hs-title {
	-webkit-transition: all 0.5s ease 0.6s;
	-o-transition: all 0.5s ease 0.6s;
	transition: all 0.5s ease 0.6s;
}

.owl-item.active .hs-item .hs-des {
	-webkit-transition: all 0.5s ease 0.8s;
	-o-transition: all 0.5s ease 0.8s;
	transition: all 0.5s ease 0.8s;
}

.owl-item.active .hs-item .site-btn {
	-webkit-transition: all 0.5s ease 1s;
	-o-transition: all 0.5s ease 1s;
	transition: all 0.5s ease 1s;
}

.hero-slider .owl-dots {
	position: absolute;
	width: 100%;
	bottom: 30px;
	left: 0;
	z-index: 1;
	text-align: center;
}

.hero-slider .owl-dots .owl-dot {
	display: inline-block;
	width: 10px;
	height: 10px;
	border-radius: 10px;
	background: #fff;
	margin: 0 5px;
}

.hero-slider .owl-dots .owl-dot.active {
	background: #f6783a;
}

/*---------------------
	Counter Section
-----------------------*/

.counter-section {
	background: #020031;
	padding: 40px 0;
}

.counter-section .big-icon {
	display: block;
	float: left;
	width: 71px;
	height: 71px;
	border-radius: 70px;
	background: #fff;
	text-align: center;
	padding-top: 20px;
	margin-right: 15px;
}

.counter-section .big-icon i {
	font-size: 30px;
	color: #f6783a;
}

.counter-section .counter {
	padding-left: 40px;
}

.counter-section .counter .counter-item {
	min-width: 100px;
	font-size: 16px;
	text-transform: uppercase;
	color: #fff;
	border-right: 1px solid #35335a;
	text-align: center;
	display: inline-block;
}

.counter-section .counter .counter-item:last-child {
	border-right: none;
}

.counter-section .counter .counter-item h4 {
	font-size: 36px;
	color: #fff;
	margin-bottom: 4px;
}

.counter-content {
	padding-left: 90px;
}

.counter-content h2 {
	font-size: 20px;
	color: #fff;
	text-transform: uppercase;
	margin-bottom: 10px;
	padding-top: 10px;
}

.counter-content p {
	text-transform: uppercase;
	color: #fff;
}

.counter-content p i {
	color: #f6783a;
	margin-right: 10px;
}

/*---------------------
	Service Section
-----------------------*/

.services {
	margin-bottom: -50px;
}

.service-item {
	margin-bottom: 50px;
}

.service-item .service-icon {
	width: 45px;
	float: left;
}

.service-item .service-icon img {
	max-width: 100%;
}

.service-item .service-content {
	padding-left: 75px;
}

.service-item .service-content h4 {
	margin-bottom: 15px;
	font-weight: 400;
}

/*---------------------
	Enroll Section
-----------------------*/

.enroll-section {
	position: relative;
}

.enroll-section:after {
	position: absolute;
	content: '';
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: #000;
	opacity: 0.8;
}

.enroll-section .container {
	position: relative;
	z-index: 1;
}

.enroll-section .section-title {
	margin-bottom: 40px;
}

.enroll-list-item {
	padding-left: 70px;
	position: relative;
	padding-bottom: 15px;
	margin-bottom: 10px;
}

.enroll-list-item span {
	position: absolute;
	width: 40px;
	height: 40px;
	left: 0;
	top: 0;
	text-align: center;
	border-radius: 50px;
	background: #f6783a;
	font-size: 16px;
	font-weight: 500;
	padding-top: 10px;
}

.enroll-list-item h5 {
	font-weight: 400;
	margin-bottom: 10px;
}

.enroll-list-item:after {
	position: absolute;
	content: '';
	height: calc(100% - 45px);
	left: 20px;
	top: 48px;
	border-left: 1px dashed #6c6e70;
}

.enroll-list-item:last-child {
	margin-bottom: 0;
	padding-bottom: 0;
}

.enroll-list-item:last-child:after {
	display: none;
}

/*---------------------
	Courses Section
-----------------------*/

.courses-section .container {
	margin-bottom: -50px;
}

.course-item {
	margin-bottom: 50px;
}

.course-item .course-thumb {
	margin-bottom: 45px;
	position: relative;
}

.course-item .course-thumb img {
	min-width: 100%;
}

.course-item .course-thumb .course-cat {
	position: absolute;
	text-align: center;
	width: 100%;
	left: 0;
	bottom: -19px;
}

.course-item .course-thumb .course-cat span {
	min-width: 150px;
	bottom: 0;
	background: #f6783a;
	padding: 10px 15px;
	text-align: center;
	font-size: 13px;
	text-transform: uppercase;
	font-weight: bold;
	color: #fff;
	display: inline-block;
	border-radius: 50px;
	letter-spacing: 2px;
}

.course-item .course-info {
	text-align: center;
	margin: 0 -15px;
}

.course-item .course-info .date {
	color: #f6783a;
	font-size: 14px;
	margin-bottom: 10px;
}

.course-item .course-info h4 {
	font-weight: 400;
	line-height: 1.3;
}

.course-item .course-info .cource-price {
	padding-top: 15px;
	color: #f6783a;
}

.course-item .course-info .cource-price span {
	font-size: 14px;
	font-weight: 500;
	color: #b7b7b7;
}

/*---------------------
	Fact Section
-----------------------*/

.fact-section {
	background-position: center center;
	position: relative;
}

.fact-section:after {
	position: absolute;
	content: '';
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: #000;
	opacity: 0.8;
}

.fact-section .container {
	position: relative;
	z-index: 1;
}

.fact {
	text-align: center;
}

.fact-icon {
	font-size: 48px;
	color: #fff;
	width: 50px;
	display: inline-block;
}

.fact-text {
	padding-left: 20px;
	display: inline-block;
	text-align: left;
}

.fact-text h2 {
	color: #f6783a;
	font-weight: 400;
}

.fact-text p {
	margin-bottom: 0;
	text-transform: uppercase;
	color: #fff;
}

/*---------------------
	Event Section
-----------------------*/

.event-item {
	margin-bottom: 50px;
}

.event-item .event-thumb {
	margin-bottom: 45px;
	position: relative;
}

.event-item .event-thumb img {
	min-width: 100%;
}

.event-item .event-thumb .event-date {
	position: absolute;
	text-align: center;
	width: 100%;
	left: 0;
	bottom: -19px;
}

.event-item .event-thumb .event-date span {
	min-width: 170px;
	bottom: 0;
	background: #f6783a;
	padding: 10px 15px;
	text-align: center;
	font-size: 16px;
	font-weight: bold;
	color: #fff;
	display: inline-block;
	border-radius: 50px;
	letter-spacing: 2px;
}

.event-item .event-info {
	text-align: center;
}

.event-item .event-info h4 {
	margin-bottom: 20px;
	font-weight: 400;
}

.event-item .event-info p {
	margin-bottom: 30px;
}

.event-item .event-info p i {
	color: #f6783a;
	padding-left: 13px;
	padding-right: 4px;
}

.event-item .event-info .event-readmore {
	font-size: 13px;
	text-transform: uppercase;
	color: #b7b7b7;
	letter-spacing: 2px;
	font-weight: 500;
}

.event-item .event-info .event-readmore i {
	color: #f6783a;
}

/*---------------------
	Gallery Section
-----------------------*/

.gallery .gallery-item {
	width: 12.5%;
	position: relative;
}

.gallery .gallery-item:after {
	content: '';
	display: block;
	clear: both;
}

.gallery .gallery-item:before {
	position: absolute;
	content: '';
	height: 100%;
	width: 100%;
	left: 0;
	top: 0;
	background: #000;
	opacity: 0;
	-webkit-transition: all 0.4s;
	-o-transition: all 0.4s;
	transition: all 0.4s;
}

.gallery .gallery-item:hover:before {
	opacity: 0.3;
}

.gallery .gallery-item.gi-big,
.gallery .gallery-item.gi-long {
	width: 25%;
}

.gallery .gallery-item a {
	position: absolute;
	width: 50px;
	height: 50px;
	background: rgba(246, 120, 58, 0.9);
	color: #fff;
	left: 50%;
	top: 60%;
	margin-left: -25px;
	margin-top: -25px;
	border-radius: 50%;
	padding-top: 13px;
	text-align: center;
	opacity: 0;
	z-index: 1;
	-webkit-transition: all 0.4s;
	-o-transition: all 0.4s;
	transition: all 0.4s;
}

.gallery .gallery-item a i {
	font-size: 24px;
}

.gallery .gallery-item:hover a {
	opacity: 1;
	top: 50%;
	-webkit-transition: all 0.4s cubic-bezier(0.55, 0.09, 0.68, 0.53) 0s;
	-o-transition: all 0.4s cubic-bezier(0.55, 0.09, 0.68, 0.53) 0s;
	transition: all 0.4s cubic-bezier(0.55, 0.09, 0.68, 0.53) 0s;
}

.gallery .grid-sizer {
	width: 12.5%;
}

/*---------------------
	Blog Section
-----------------------*/

.blog-item {
	margin-bottom: 60px;
	overflow: hidden;
}

.blog-item .blog-thumb {
	width: 230px;
	height: 170px;
	float: left;
}

.blog-item .blog-content {
	padding-left: 258px;
}

.blog-item .blog-content h4 {
	font-size: 22px;
	font-weight: 400;
	margin-bottom: 8px;
	line-height: 1.4;
}

.blog-item .blog-meta {
	margin-bottom: 15px;
}

.blog-item .blog-meta span {
	margin-right: 10px;
	font-size: 12px;
	color: #b7b7b7;
}

.blog-item .blog-meta span i {
	color: #f6783a;
	margin-right: 3px;
}

/*---------------------
	Newsletter Section
-----------------------*/

.newsletter-section {
	background: #f7f7f7;
	padding: 50px 0;
}

.newsletter-section .newsletter {
	position: relative;
	margin-top: 12px;
}

.newsletter-section .newsletter input {
	width: 100%;
	font-size: 14px;
	padding: 18px 30px;
	border: none;
	border-radius: 50px;
	padding-right: 170px;
}

.newsletter-section .newsletter .site-btn {
	position: absolute;
	right: 0;
	top: 0;
	height: 100%;
	border-radius: 0px 50px 50px 0px;
	min-width: 150px;
}

/*---------------------
	Footer Section
-----------------------*/

.footer-section {
	background-color: #020031;
	background-image: url("../apps/public/img/footer-bg.png");
	background-repeat: no-repeat;
	background-position: center 75px;
}

.footer-section .footer-top {
	padding: 65px 15px;
}

.footer-section .copyright {
	border-top: 1px solid #312f56;
	padding: 27px 0;
	text-align: center;
}

.footer-section .copyright p {
	color: #b7b7b7;
	margin-bottom: 0;
}

.footer-section .copyright p a {
	color: #fff;
	font-weight: 500;
}

.footer-section .copyright p a:hover {
	color: #f6783a;
}

.footer-widget .fw-title {
	text-transform: uppercase;
	color: #fff;
	margin-bottom: 25px;
	padding-top: 10px;
}

.footer-widget p,
.footer-widget span {
	color: #b7b7b7;
}

.footer-widget ul {
	list-style: none;
}

.footer-widget .about-widget img {
	margin-bottom: 30px;
}

.footer-widget .about-widget p {
	margin-bottom: 35px;
}

.footer-widget .social a {
	color: #b7b7b7;
	margin-right: 15px;
}

.footer-widget .dobule-link ul {
	display: inline-block;
}

.footer-widget .dobule-link ul a {
	display: block;
	font-size: 14px;
	color: #b7b7b7;
	margin-bottom: 15px;
}

.footer-widget .dobule-link ul a:hover {
	color: #f6783a;
}

.footer-widget .dobule-link ul li:last-child a {
	margin-bottom: 0;
}

.footer-widget .dobule-link ul:last-child {
	margin-left: 50px;
}

.footer-widget .recent-post li {
	margin-bottom: 25px;
}

.footer-widget .recent-post p {
	margin-bottom: 5px;
}

.footer-widget .recent-post span {
	font-size: 12px;
}

.footer-widget .recent-post span i {
	color: #f6783a;
	margin-right: 5px;
}

.footer-widget .contact li {
	margin-bottom: 15px;
	display: block;
}

.footer-widget .contact li p {
	margin-bottom: 0;
}

.footer-widget .contact i {
	font-size: 12px;
}

/*---------------------
	Other Pages
----------------------
======================*/

.site-breadcrumb {
	padding: 60px 0;
	color: #b7b7b7;
	font-size: 18px;
}

.site-breadcrumb a {
	color: #111111;
}

.site-breadcrumb a i {
	margin: 0;
}

.site-breadcrumb i {
	margin: 0 10px;
}

.site-pageination {
	list-style: none;
}

.site-pageination li {
	display: inline;
	text-align: center;
}

.site-pageination li a {
	display: inline-block;
	min-width: 40px;
	height: 40px;
	border: 1px solid #e1e1e1;
	color: #636363;
	padding-top: 9px;
	font-size: 14px;
	margin-right: 14px;
	border-radius: 2px;
}

.site-pageination li a:hover,
.site-pageination li a.active {
	background: #f6783a;
	border-color: #f6783a;
	color: #fff;
}

/*---------------------
	About page
-----------------------*/

.about-text h5 {
	font-weight: 400;
	margin-bottom: 12px;
}

.about-text .about-list {
	list-style: none;
	padding-top: 10px;
}

.about-text .about-list li {
	font-size: 14px;
	color: #636363;
	margin-bottom: 10px;
}

.about-text .about-list li i {
	color: #f6783a;
}

.testimonial-section {
	background: #f7f7f7;
}

.testimonial-slider .ts-author-pic {
	width: 110px;
	height: 110px;
	border-radius: 50%;
	margin: 5px auto 0;
}

.testimonial-slider .ts-text p {
	font-size: 18px;
	margin-bottom: 20px;
}

.testimonial-slider .ts-text h5 {
	font-size: 18px;
	font-weight: 400;
	text-transform: uppercase;
	margin-bottom: 10px;
}

.testimonial-slider .ts-text span {
	color: #f6783a;
	font-size: 14px;
}

.testimonial-slider .owl-nav {
	position: absolute;
	top: 35px;
	width: 180px;
	left: 40px;
}

.testimonial-slider .owl-prev {
	float: left;
}

.testimonial-slider .owl-next {
	float: right;
}

.testimonial-slider .owl-prev,
.testimonial-slider .owl-next {
	font-size: 36px;
	color: #b7b7b7;
}

.testimonial-slider .owl-dots {
	position: absolute;
	left: -15px;
	bottom: -5px;
	width: 25%;
	padding: 0 15px;
	text-align: center;
}

.testimonial-slider .owl-dots .owl-dot {
	width: 10px;
	height: 10px;
	border-radius: 20px;
	background: #b7b7b7;
	display: inline-block;
	margin: auto 5px;
}

.testimonial-slider .owl-dots .owl-dot.active {
	background: #f6783a;
}

.member {
	text-align: center;
}

.member h5 {
	font-size: 22px;
	font-weight: 400;
	margin-bottom: 5px;
}

.member p {
	color: #f6783a;
	margin-bottom: 0;
	font-weight: 14;
}

.member:hover .member-pic:after {
	opacity: 0.4;
}

.member:hover .member-social {
	opacity: 1;
}

.member:hover .member-social a {
	top: 0;
}

.member:hover .member-social a:nth-child(1) {
	-webkit-transition: all 0.2s;
	-o-transition: all 0.2s;
	transition: all 0.2s;
}

.member:hover .member-social a:nth-child(2) {
	-webkit-transition: all 0.4s;
	-o-transition: all 0.4s;
	transition: all 0.4s;
}

.member:hover .member-social a:nth-child(3) {
	-webkit-transition: all 0.6s;
	-o-transition: all 0.6s;
	transition: all 0.6s;
}

.member .member-pic {
	width: 200px;
	height: 200px;
	border-radius: 50%;
	overflow: hidden;
	position: relative;
	display: inline-block;
	margin-bottom: 40px;
}

.member .member-pic:after {
	position: absolute;
	content: '';
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: #000;
	opacity: 0;
	-webkit-transition: all 0.4s;
	-o-transition: all 0.4s;
	transition: all 0.4s;
}

.member .member-social {
	position: absolute;
	width: 100%;
	left: 0;
	top: 50%;
	margin-top: -6px;
	z-index: 2;
	opacity: 0;
	-webkit-transition: all 0.4s;
	-o-transition: all 0.4s;
	transition: all 0.4s;
}

.member .member-social a {
	padding: 0 5px;
	margin: auto 5px;
	color: #fff;
	position: relative;
	top: -20px;
	-webkit-transition: all 0.4s;
	-o-transition: all 0.4s;
	transition: all 0.4s;
}

.member .member-social a:hover {
	color: #f6783a;
}

/*---------------------
	Blog Page
-----------------------*/

.post-item {
	margin-bottom: 60px;
}

.post-item .post-thumb {
	height: 320px;
	margin-bottom: 40px;
}

.post-item .post-thumb-full {
	margin-bottom: 40px;
}

.post-item .post-content h3 {
	font-size: 29px;
	font-weight: 400;
	margin-bottom: 10px;
}

.post-item .post-content h3 a {
	color: #111111;
}

.post-item .post-content p {
	margin-bottom: 0;
}

.post-item .post-meta {
	margin-bottom: 10px;
}

.post-item .post-meta span {
	margin-right: 10px;
	font-size: 14px;
	color: #b7b7b7;
}

.post-item .post-meta span i {
	color: #f6783a;
}

.post-item .tag {
	padding-top: 15px;
	padding-bottom: 40px;
	font-size: 12px;
	text-transform: uppercase;
	color: #b7b7b7;
}

.post-item .tag i {
	color: #f6783a;
	margin-right: 5px;
}

.post-item .post-author {
	padding: 40px 0;
	border-top: 1px solid #f5f5f5;
}

.post-item .post-author .pa-thumb {
	float: left;
	width: 100px;
	height: 100px;
	border-radius: 50%;
}

.post-item .post-author .pa-content {
	padding-left: 130px;
	padding-top: 5px;
}

.post-item .post-author .pa-content h4 {
	font-size: 18px;
	margin-bottom: 10px;
}

.comment-warp {
	padding-top: 40px;
	border-top: 1px solid #f5f5f5;
}

.comment-warp .comment-title {
	font-weight: 400;
	margin-bottom: 35px;
}

.comment-warp .comment-list {
	list-style: none;
}

.comment-warp .comment-list .replay-comment-list {
	list-style: none;
	margin-left: 14%;
}

.comment-warp .comment {
	margin-bottom: 40px;
}

.comment-warp .comment .comment-avator {
	float: left;
	width: 70px;
	height: 70px;
	border-radius: 50%;
}

.comment-warp .comment .comment-content {
	padding-left: 100px;
}

.comment-warp .comment .comment-content .c-date {
	font-size: 12px;
	text-transform: uppercase;
	color: #b7b7b7;
	margin-bottom: 5px;
	display: block;
}

.comment-warp .comment .comment-content h5 {
	font-size: 18px;
	margin-bottom: 5px;
	font-weight: 400;
}

.comment-warp .comment .comment-content p {
	margin-bottom: 0;
}

.comment-warp .comment .comment-content .c-btn {
	display: inline-block;
	font-size: 12px;
	text-transform: uppercase;
	border: 1px solid #e1e1e1;
	color: #111111;
	padding: 5px 25px;
	border-radius: 2px;
	margin-right: 5px;
	margin-top: 15px;
}

.comment-warp .comment .comment-content .c-btn:hover {
	border-color: #f6783a;
	background: #f6783a;
	color: #fff;
}

.comment-form-warp {
	padding: 40px 0;
	border-top: 1px solid #f5f5f5;
}

.comment-form input[type='text'],
.comment-form input[type='email'],
.comment-form textarea {
	width: 100%;
	border: 1px solid #cccccc;
	font-size: 14px;
	padding: 18px 20px;
	margin-bottom: 30px;
	border-radius: 2px;
}

.comment-form textarea {
	height: 150px;
}

.comment-form.--contact input[type='text'],
.comment-form.--contact input[type='email'],
.comment-form.--contact textarea {
	border: 1px solid #e1e1e1;
}

.comment-form.--contact textarea {
	margin-bottom: 50px;
}

.widget {
	margin-bottom: 55px;
	margin-left: -19px;
}

.widget .widget-title {
	font-weight: 400;
	font-size: 24px;
	margin-bottom: 30px;
}

.widget ul {
	list-style: none;
}

.widget ul a {
	font-size: 14px;
	color: #636363;
	margin-bottom: 10px;
	padding: 5px 0;
	display: inline-block;
}

.widget ul a:hover {
	color: #f6783a;
}

.widget .search-widget {
	position: relative;
}

.widget .search-widget input {
	width: 100%;
	border: 1px solid #9d9d9d;
	padding: 10px 15px;
	padding-right: 55px;
	font-size: 14px;
}

.widget .search-widget button {
	position: absolute;
	height: 100%;
	right: 0;
	top: 0;
	border: none;
	width: 50px;
	padding-top: 5px;
	color: #b7b7b7;
	background-color: transparent;
	-webkit-transform: rotateY(180deg);
	        transform: rotateY(180deg);
}

.widget .recent-post-widget .rp-item {
	margin-bottom: 25px;
	display: block;
	overflow: hidden;
}

.widget .recent-post-widget .rp-thumb {
	width: 70px;
	height: 70px;
	float: left;
	margin-right: 30px;
}

.widget .recent-post-widget .rp-content {
	padding-left: 100px;
}

.widget .recent-post-widget .rp-content p {
	font-size: 12px;
	color: #b7b7b7;
	margin-bottom: 0;
}

.widget .recent-post-widget .rp-content p i {
	color: #f6783a;
}

.widget .recent-post-widget .rp-content h6 {
	font-size: 14px;
	font-weight: 400;
	line-height: 1.5;
	margin-bottom: 10px;
}

.widget .tags a {
	min-width: 80px;
	text-transform: uppercase;
	display: inline-block;
	font-size: 10px;
	line-height: 10px;
	color: #636363;
	padding: 12px 15px;
	border: 1px solid #f6783a;
	margin-right: 5px;
	margin-bottom: 8px;
	text-align: center;
	border-radius: 2px;
}

.post-item.post-details {
	margin-bottom: 0;
}

.post-item.post-details p {
	margin-bottom: 15px;
}

.post-item.post-details blockquote {
	padding: 25px 30px;
	font-size: 16px;
	color: #111111;
	border-left: 3px solid #f6783a;
	-webkit-box-shadow: 0 0 40px #f2f2f2;
	        box-shadow: 0 0 40px #f2f2f2;
	margin: 40px 0 35px;
}

/*---------------------
	Contact page
-----------------------*/

.map-section {
	height: 500px;
	position: relative;
}

.map-section .map {
	height: 100%;
}

.contact-info-warp {
	position: absolute;
	width: 400px;
	height: 100%;
	background: rgba(2, 0, 49, 0.8);
	text-align: center;
	z-index: 1;
	padding-top: 70px;
}

.contact-info-warp .contact-info {
	margin-bottom: 40px;
}

.contact-info-warp .contact-info h4 {
	color: #fff;
	font-weight: 400;
	margin-bottom: 8px;
}

.contact-info-warp .contact-info p {
	color: #fff;
	margin-bottom: 0;
}

/*------------------
	Responsive
---------------------*/

@media (min-width: 1200px) {
	.container {
		max-width: 1170px;
	}
}

/* Medium screen : 992px. */

@media only screen and (min-width: 992px) and (max-width: 1199px) {
	.counter-section .counter {
		padding-left: 20px;
	}
	.counter-section .counter .counter-item {
		min-width: 80px;
	}
	.counter-section .counter .counter-item h4 {
		font-size: 35px;
	}
	.widget {
		margin-left: 0;
	}
}

/* Tablet :768px. */

@media only screen and (min-width: 768px) and (max-width: 991px) {
	.header-info .hf-item i {
		float: left;
	}
	.header-info .hf-item p {
		display: block;
	}
	.hs-item {
		height: auto;
		min-height: auto;
		padding: 140px 0;
	}
	.counter-section .counter {
		padding-top: 15px;
		padding-left: 0;
	}
	.counter-section .counter .counter-item {
		min-width: 70px;
	}
	.counter-section .counter .counter-item h4 {
		font-size: 27px;
	}
	.gallery .gallery-item,
	.gallery .gallery-item.gi-big,
	.gallery .gallery-item.gi-long {
		width: 25%;
	}
	.footer-widget {
		margin-bottom: 40px;
	}
	.testimonial-slider .owl-nav {
		left: -16px;
	}
	.member {
		margin-bottom: 40px;
	}
	.sidebar {
		padding-top: 80px;
	}
	.widget {
		margin-left: 0;
	}
}

/* Large Mobile :480px. */

@media only screen and (max-width: 767px) {
	.header-info {
		display: none;
	}
	.site-logo {
		padding: 15px 0;
	}
	.nav-switch {
		position: absolute;
		right: 30px;
		font-size: 30px;
		color: #111;
		top: 25px;
		display: block;
	}
	.nav-section .nav-right {
		display: block;
		float: none;
		text-align: right;
		padding-bottom: 20px;
	}
	.main-menu {
		display: none;
	}
	.main-menu li {
		display: block;
	}
	.main-menu li a {
		padding: 15px;
		display: block;
		border-top: 1px solid #212031;
	}
	.main-menu li a:hover {
		background-color: transparent;
		color: #f6783a;
	}
	.main-menu li.active a {
		background-color: transparent;
	}
	.hs-item {
		min-height: auto;
		padding: 100px 0;
	}
	.hs-item .hs-title {
		font-size: 40px;
	}
	.counter-section .counter {
		float: none;
		padding-top: 30px;
		padding-left: 0;
		text-align: center;
	}
	.gallery .gallery-item,
	.gallery .gallery-item.gi-big,
	.gallery .gallery-item.gi-long {
		width: 50%;
	}
	.fact {
		text-align: left;
		margin-bottom: 15px;
	}
	.footer-widget {
		margin-bottom: 40px;
	}
	.testimonial-slider .owl-nav {
		left: 50%;
		margin-left: -90px;
	}
	.testimonial-slider .owl-dots {
		text-align: center;
		width: 100%;
		left: 0;
		bottom: 0;
	}
	.testimonial-slider .ts-author-pic {
		margin: 5px auto 30px;
	}
	.testimonial-slider .ts-item {
		text-align: center;
		padding-bottom: 50px;
	}
	.member {
		margin-bottom: 40px;
	}
	.sidebar {
		padding-top: 80px;
	}
	.widget {
		margin-left: 0;
	}
	.map-section {
		height: auto;
	}
	.contact-info-warp {
		position: relative;
		height: auto;
		display: block;
		width: 100%;
		padding-bottom: 70px;
	}
	.map-section .map {
		height: 300px;
	}
}

/* small Mobile :320px. */

@media only screen and (max-width: 479px) {
	.hs-item .hs-title {
		font-size: 27px;
	}
	.counter-section .counter .counter-item {
		min-width: 65px;
	}
	.counter-section .counter .counter-item h4 {
		font-size: 25px;
	}
	.course-item .course-info {
		margin: 0;
	}
	.blog-item .blog-thumb {
		height: 230px;
		width: 100%;
		margin-bottom: 20px;
	}
	.blog-item .blog-content {
		padding-left: 0;
	}
	.gallery .gallery-item,
	.gallery .gallery-item.gi-big,
	.gallery .gallery-item.gi-long {
		width: 100%;
	}
	.newsletter-section .newsletter {
		text-align: center;
	}
	.newsletter-section .newsletter input {
		padding-right: 30px;
		margin-bottom: 20px;
		text-align-last: auto;
	}
	.newsletter-section .newsletter .site-btn {
		position: relative;
		border-radius: 50px;
	}
	.post-item .post-author .pa-thumb,
	.comment-warp .comment .comment-avator {
		float: none;
		margin-bottom: 15px;
	}
	.post-item .post-author .pa-content,
	.comment-warp .comment .comment-content {
		padding-left: 0;
	}
}


</style>

	<link rel="stylesheet" href="apps/includes/frontEnd/css/style.css"/>
	<link rel="stylesheet" href="apps/includes/frontEnd/css/bootstrap.min.css"/>


	<!-- Favicon -->   
	<link href="apps/includes//img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="apps/includes/frontEnd/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="apps/includes/frontEnd/css/themify-icons.css"/>
	<link rel="stylesheet" href="apps/includes/frontEnd/css/owl.carousel.css"/>

	<script src="apps/includes/frontEnd/js/jquery/jquery.js"></script>
	<script src="apps/includes/frontEnd/myjs/comment.js"></script>

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	
	<!-- header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a href="index.html" class="site-logo"><img src="apps/public/apps/public/img/logo.png" alt=""></a>
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-info">
				<div class="hf-item">
					<i class="fa fa-clock-o"></i>
					<p><span>Working time:</span>Monday - Friday: 08 AM - 06 PM</p>
				</div>
				<div class="hf-item">
					<i class="fa fa-map-marker"></i>
					<p><span>Find us:</span>40 Baria Street 133/2, New York City, US</p>
				</div>
			</div>
		</div>
	</header>
	<!-- header section end-->


	<!-- Header section  -->
	<nav class="nav-section">
		<div class="container">
			<div class="nav-right">
				<a href=""><i class="fa fa-search"></i></a>
				<a href=""><i class="fa fa-shopping-cart"></i></a>
			</div>
			<ul class="main-menu">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="#">Event</a></li>
				<li><a href="course.html">COURSES</a></li>
				<li class="active"><a href="blog.html">blog</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</nav>
	<!-- Header section end -->
