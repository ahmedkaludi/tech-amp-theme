/**** 
* AMP Framework Reset
*****/
body{ font-family: 'OpenSans'; font-size: 16px; line-height:1.4; }
ol, ul{ list-style-position: inside }
p, ol, ul, figure{ margin: 0 0 1em; padding: 0; }
a, a:active, a:visited{ 
<?php if($redux_builder_amp['tech-color-scheme']['rgba']){?>
    color: <?php echo $redux_builder_amp['tech-color-scheme'] ['rgba'] ?>;
    <?php } else { ?> color:#ed1c24; <?php } ?>
    text-decoration: none }
a:hover, a:active, a:focus{}
pre{ white-space: pre-wrap;}
.left{float:left}
.right{float:right}
.hidden{ display:none }
.clearfix{ clear:both }
blockquote{ background: #f1f1f1; margin: 10px 0 20px 0; padding: 15px;}
blockquote p:last-child {margin-bottom: 0;}
.amp-wp-unknown-size img {object-fit: contain;}
.amp-wp-enforced-sizes{ max-width: 100% }


/**** Global Styling ****/

/**** 
* Font Family
*****/
@font-face {
  font-family: 'OpenSans';
  font-style: normal;
  font-weight: 400;
    src:  local('OpenSans'), local('OpenSans-Regular'), url('<?php echo plugin_dir_url(__FILE__) ?>fonts/OpenSans-Regular.ttf');
}
@font-face {
  font-family: 'OpenSans';
  font-style: normal;
  font-weight: 300;
    src:  local('OpenSans Light'), local('OpenSans-Light'), url('<?php echo plugin_dir_url(__FILE__) ?>fonts/OpenSans-Light.ttf');
}
@font-face {
  font-family: 'OpenSans';
  font-style: normal;
  font-weight: 600;
    src:  local('OpenSans Semibold'), local('OpenSans-Semibold'), url('<?php echo plugin_dir_url(__FILE__) ?>fonts/OpenSans-Semibold.ttf');
}
@font-face {
    font-family: 'OpenSans';
     font-style: normal;
    font-weight: 700;
    src:  local('OpenSans Bold'), local('OpenSans-Bold'), url('<?php echo plugin_dir_url(__FILE__) ?>fonts/OpenSans-Bold.ttf');
}

/* Image Alignment */
.alignright {
    float: right;
}
.alignleft {
    float: left;
}
.aligncenter {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
amp-iframe { max-width: 100%; margin-bottom : 20px; }

/* Captions */
.wp-caption {
    padding: 0;
}
.wp-caption-text {
    
    font-size: 12px;
    line-height: 1.5em;
    bottom: 0;
    margin: 0;
    font-weight: 300;
    padding: .66em;
    color: #fff;
    text-align: center;
    background: rgba(0, 0, 0, 0.45);
}

/* AMP Media */
amp-iframe,
amp-youtube,
amp-instagram,
amp-vine {
    margin: 0 -16px 1.5em;
}
amp-carousel > amp-img > img {
    object-fit: contain;
}

/****
* Container
*****/
.cntr {
    max-width: 600px;
    margin: 0 auto;
    padding: 0px 10px;
}

/****
* AMP Navigation Menu with Dropdown Support
*****/
.menu > ul > li > a{
    color:#ffffff;
    font-size:15px;
    font-weight:500;
    letter-spacing:0.5px;
}
.amp-menu li.menu-item-has-children > ul > li{
    font-size:13px;
    font-weight:300;
    letter-spacing:0.5px;
    width:85%;
}
.menu ul li:hover a, .menu ul li:active a, .menu ul li:focus a{
    color:#ffffff;
    background:#000;
}
.menu ul li:hover li:hover > a{
    color:#ffffff;
    background:#000;
}
.menu ul li.menu-item-has-children:after{
    content:"";
    background:transparent url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjkgMTI5IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxMjkgMTI5IiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KICA8Zz4KICAgIDxwYXRoIGQ9Im0xMjEuMywzNC42Yy0xLjYtMS42LTQuMi0xLjYtNS44LDBsLTUxLDUxLjEtNTEuMS01MS4xYy0xLjYtMS42LTQuMi0xLjYtNS44LDAtMS42LDEuNi0xLjYsNC4yIDAsNS44bDUzLjksNTMuOWMwLjgsMC44IDEuOCwxLjIgMi45LDEuMiAxLDAgMi4xLTAuNCAyLjktMS4ybDUzLjktNTMuOWMxLjctMS42IDEuNy00LjIgMC4xLTUuOHoiIGZpbGw9IiNEODAwMjciLz4KICA8L2c+Cjwvc3ZnPgo=);
    background-size: 16px;
    display: inline-block;
    width: 16px;
    height: 16px;
    background-repeat: no-repeat;
    top: 10px;
}
.menu ul li.menu-item-has-children:hover:after{
    -moz-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
    top: -10px;
    right: 20px;
}
.menu{
    margin-top:50px;
}
.amp-sidebar-close {
    float: right;
    position: relative;
    right: 22px;
    cursor: pointer;
}
.amp-sidebar-toggle {
    cursor: pointer;
    display:block;
}

/**** 
* Header -logo
*****/
    
.head{
    width:100%;
    clear:both;
    display:inline;
    
}
.amp-home.home_newpage .head{
    padding:0
}
.nav{
    float:left;
    width:15%;
    position:relative;
    left:18px;
    z-index:1;
    line-height:0;
}
.amp-archive .nav, .without_image .nav, .search_page .nav, .home_newpage .nav{
    left:0
}
.logo {
    float: left;
    width: 70%;
    text-align: center;
    z-index:2;
    position:relative;
}
.amp-logo a{
    line-height: 0;
    font-size: 14px;
    display: block;
    font-weight: 600;
    top: 8px;
    color: #fff;
    position: relative;
    text-transform: uppercase;
}
.logo h1{
    margin:0;
}
.search {
    text-align: right;
    float: right;
    position: relative;
    z-index: 1;
    padding: 0px 17px 0px 10px;
    line-height:0;
    top:2px;
}
    
/*** Light Box ***/

.lb-tg {
    position: fixed;
    width: 100%;
    background: rgba(0,0,0,.9);
    width: 100%;
    opacity: 0;
    -webkit-transition: opacity .5s ease-in-out;
    -moz-transition: opacity .5s ease-in-out;
    -o-transition: opacity .5s ease-in-out;
    transition: opacity .5s ease-in-out;
    overflow: hidden;
    z-index:-9;
    left:0;
}
.nav .lb-tg{
    top:0px;
}
.lb-tg img {
    margin: auto;
    position: absolute;
    top: 0;
    left:0;
    right:0;
    bottom: 0;
    max-height: 0%;
    max-width: 0%;
    border: 3px solid white;
    box-shadow: 0px 0px 8px rgba(0,0,0,.3);
    box-sizing: border-box;
    -webkit-transition: .5s ease-in-out;
    -moz-transition: .5s ease-in-out;
    -o-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
}
a.lb-x {
    display: block;
    width:50px;
    height:50px;
    box-sizing: border-box;
    background: tranparent;
    color: black;
    text-decoration: none;
    position: absolute;
    top: -80px;
    right: 0;
    -webkit-transition: .5s ease-in-out;
    -moz-transition: .5s ease-in-out;
    -o-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
}

a.lb-x:before {
    content: "";
    display: block;
    height: 30px;
    width: 1px;
    background: #ffffff;
    position: absolute;
    left: 26px;
    top:10px;
    -webkit-transform:rotate(45deg);
    -moz-transform:rotate(45deg);
    -o-transform:rotate(45deg);
    transform:rotate(45deg);
}
a.lb-x:after {
    content: "";
    display: block;
    height: 30px;
    width: 1px;
    background: #ffffff;
    position: absolute;
    left: 26px;
    top:10px;
    -webkit-transform:rotate(-45deg);
    -moz-transform:rotate(-45deg);
    -o-transform:rotate(-45deg);
    transform:rotate(-45deg);
}
.lb-tg:target {
    opacity: 1;
    top: 0;
    bottom: 0;
    left:0;
    z-index:1;
}
.lb-tg:target img {
    max-height: 100%;
    max-width: 100%;
}
.lb-tg:target a.lb-x {
    top: 0px;
}
.lb img{
    cursor:pointer;
}
.lb-btn form{
    position: absolute;
    top: 200px;
    left: 0;
    right: 0;
    margin: 0 auto;
    text-align: center;
}
.lb-btn form #s{
    padding:10px;
}
.lb-btn form #amp-search-submit{
    padding:10px;
    cursor:pointer;
}
.lb-btn form #amp-search-submit {
    cursor: pointer;
    background:transparent  url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDU2Ljk2NiA1Ni45NjYiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDU2Ljk2NiA1Ni45NjY7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPHBhdGggZD0iTTU1LjE0Niw1MS44ODdMNDEuNTg4LDM3Ljc4NmMzLjQ4Ni00LjE0NCw1LjM5Ni05LjM1OCw1LjM5Ni0xNC43ODZjMC0xMi42ODItMTAuMzE4LTIzLTIzLTIzcy0yMywxMC4zMTgtMjMsMjMgIHMxMC4zMTgsMjMsMjMsMjNjNC43NjEsMCw5LjI5OC0xLjQzNiwxMy4xNzctNC4xNjJsMTMuNjYxLDE0LjIwOGMwLjU3MSwwLjU5MywxLjMzOSwwLjkyLDIuMTYyLDAuOTIgIGMwLjc3OSwwLDEuNTE4LTAuMjk3LDIuMDc5LTAuODM3QzU2LjI1NSw1NC45ODIsNTYuMjkzLDUzLjA4LDU1LjE0Niw1MS44ODd6IE0yMy45ODQsNmM5LjM3NCwwLDE3LDcuNjI2LDE3LDE3cy03LjYyNiwxNy0xNywxNyAgcy0xNy03LjYyNi0xNy0xN1MxNC42MSw2LDIzLjk4NCw2eiIgZmlsbD0iI0Q4MDAyNyIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K);
    border: none;
    text-indent: -999px;
    background-size: 18px;
    display: inline-block;
    width: 20px;
    height: 20px;
    background-repeat: no-repeat;
    opacity: 0.7;
    position: relative;
    top: 12px;
}
.lb-btn form #s {
    padding: 10px;
    background: transparent;
    border: none;
    border-bottom: 1px solid #504c4c;
    color: #ffffff;
    width:70%;
}
.menu ul{
    margin-left:50px;
    z-index: -9;
}

/**** 
* Footer
*****/
.footer{
    padding: 40px 0px 30px 0px;
    font-size: 12px;
    text-align: center;
    background-color:#222;
    margin-top:30px;
}
.footer .amp-menu{
    margin-top:20px;
}
.footer .amp-menu li{
    display: inline-block;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
}
.footer .amp-menu li a{
    color:rgba(255, 255, 255, 0.9);
    padding: 5px 8px;
}
.footer .amp-menu li:hover a {
    background: transparent;
}
.footer .amp-social{
    margin-top:20px;
}
.footer .amp-social ul a{
    background-color: #333;
    color: #fff;
    margin-right: 5px;
    padding: 5px 3px;
    border-radius: 2px;
    margin-top: 10px;
    display: inline-block;
}
.icon-twitter:before, .icon-facebook:before, .icon-pinterest:before, .icon-google-plus:before, .icon-linkedin:before,
.icon-youtube-play:before, .icon-instagram:before, .icon-reddit-alien:before, .icon-vk:before, .icon-snapchat-ghost:before,
.icon-tumblr:before {
    background:#333;
}
.footer .amp-social li:before {
    border-radius: inherit;
}
.rights-reserved, .rights-reserved a{
   width: 100%;
    background-color: #2B2D2F;
    padding: 18px 0px;
    text-align: center;
    color: #ccc;
    font-size: 11px;
    font-weight: 400;
}
.rights-reserved a{
    padding-left:3px;
}
.home_newpage .no-img-bg{
    margin-bottom:0;
}
.home_newpage .home-bg{
    margin-top:0
}
<?php if(ampforwp_is_home() || is_front_page() ) { ?>
.no-img-bg{
    margin-bottom: -26px;
    display: inline-block;
    width: 100%;
}
<?php } ?>
<?php if(ampforwp_is_home() || is_archive() || is_search()){ ?>
/**** 
* Loop
*****/
.loop-post{
    display: inline-block;
    width: 100%;
    position:relative;
}
.amp-home .header{
    padding:10px 0px;
}
.home_newpage .header, .search_page .header, .amp-archive .header, .without_image .header {
    background:#222;
    padding: 10px;
}
.home_newpage .featured-img-w, .search_page .featured-img-w, .amp-archive .featured-img-w{
    background:#222;
    display: inline;
}
.without_image .home-bg{
     background: transparent;
}    
.home-bg{
    position: relative;
    top: 0px;
    background: #222;
    <?php if(isset($redux_builder_amp['header-type']) && $redux_builder_amp['header-type']=='2'){?>
            display:none;
    <?php } ?>
    margin-top:-26px;
    z-index:0;
}

.without_image .header{
    margin-bottom:20px;
}
.without_image .amp-single{
    position:relative;
    top:0px;
}
.without_image .no-img-bg, .home_newpage .no-img-bg, .amp-archive .no-img-bg, .search_page .no-img-bg{
    background:#222;
}
.featured-img-cnt h2{
    font-size: 27px;
    margin: 0;
    line-height: 1.27;
    font-weight: 500;
}
.featured-img-cnt h2 a{
    color:#ffffff;
}
.loop-post ul{
    list-style-type: none;
    display: inline-flex;
    margin: 0px;
}
.home_newpage .amp-logo a, .amp-archive .amp-logo a, .search_page .amp-logo a{
    top:10px;
}

/*** loop - styles ***/
.loop-wrapper .loop-img amp-img img{
    z-index:-1;
}
.loop-img a{
    display:block;
    line-height:0;
}
.featured-img-w{
    margin-bottom:0px;
    display: inline-block;
    width: 100%;
}
.featured-img-bp{
    max-width: 600px;
    margin: 0 auto;
}
.without_image .featured-img-bp{
    padding:0px 10px;
}
.featured-img-cnt{
    position: absolute;
    top: auto;
    bottom: 14px;
    left: 12px;
    right: 10px;
}
.featured-no-img-cnt{
    width:100%;
    margin-top:50px;
}
.loop-wrapper .loop-post .featured-img{
    position:relative;
    width:100%;
    display:inline-block;
    z-index:0;
    bottom:-4px;
}
.loop-wrapper .loop-post .featured-img .loop-img{
    width: 100%;
    background: rgba(0, 0, 0, 0) linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0% , rgba(0, 0, 0, 0) 30%, rgba(0, 0, 0, 0.9) 65%) repeat scroll 0 0;
}
.featured-img-cnt .amp-author{
    font-size:13px;
    font-weight:400;
    margin-top:2px;
    color:#ffffff;
    padding-top:5px;
}
.featured-img-cnt .amp-author .author-name a {
    color: #fff;
    font-size: 12px;
    font-weight: 500;
}
.featured-img-sp-cnt .amp-author{
    margin-top: 4px;
}
.featured-img-sp .loop-img{
    width:90px;
    margin-right:10px;
}
.featured-img-sp{
    width:100px;
}
.featured-img-sp-cnt .loop-title, .featured-no-img-cnt .loop-title{
    font-size: 18px;
    line-height: 23px;
    margin: 0;
    font-weight: 400;
}
.featured-img-sp-cnt .loop-title a, .featured-no-img-cnt .loop-title a{
   color:#000;
}
.featured-img-sp-cnt .loop-category {
    margin-bottom: 4px;
}
.featured-img-sp-cnt ul li:last-child{
    margin-right:0;
}
.sp-list{
    display:flex;
    margin-bottom: 12px;
    border-top: 1px solid #eee;
    padding-top: 17px;
}
.sp-list:first-child{
    border-top:none;
    padding-top:0;
}
.featured-img-sp-cnt ul li, .featured-no-img-cnt ul li, .featured-img-cnt ul li{
    margin-right: 5px;
    border-radius: 3px;
    font-size: 10px;
    font-weight: 400;
    text-transform: uppercase;
}
.featured-img-sp-cnt ul li a, .featured-no-img-cnt ul li a, .featured-img-cnt ul li a{
    color: #ffffff;
    padding: 1px 7px 2px 7px;
    text-shadow: 1px 1px 1px #0000002e;
    display:inline-block;
    <?php if($redux_builder_amp['tech-taxonomy-color-scheme']['rgba']){?>
   background:<?php echo $redux_builder_amp['tech-taxonomy-color-scheme'] ['rgba'] ?>;
    <?php } ?>
    border-radius:60px;
}
.amp-home .posted-author-details .posted-time{
    display:none;
}
.featured-sp{
    width:100%;
    display:inline-block;
    margin-top:20px;
}
.loop-wrapper .amp-author span a{
    font-size: 10px;
    color: #333;
    font-weight: 500;
    text-transform:uppercase;
}
/**** 
* Archive
*****/
.amp-archive .posted-author-details .author-name{
    margin-right:5px;
}
.amp-archive .posted-author-details span{
    display:inline-block;
}
.amp-archive{
    margin-top:20px;
}
.amp-archive-title, .amp-archive .amp-loop-label{
    margin: 0;
    padding-bottom: 10px;
    text-align: center;
    font-size: 16px;
    border-bottom: 1px solid #eee;
    margin-bottom: 25px;
    display: block;
    font-weight: 600;
    color: #222;
}
.amp-archive-desc{
    padding-bottom: 15px;
    margin-top: -10px;
}
.amp-archive .featured-sp{
    margin-top:0px;
    display:inline-block;
}
.amp-related-posts ul {
    margin:0;
}

/****
* Pagination
*****/

.loop-pagination .right, .loop-pagination .left{
    font-size: 13px;
    margin: 0 auto;
    text-align: center;
    border-radius: 3px;
    font-weight: 600;
}
.loop-pagination .right{
    float:right;
     <?php if($redux_builder_amp['tech-color-scheme']['rgba']){?>
    background-color:<?php echo $redux_builder_amp['tech-color-scheme'] ['rgba'] ?>;
        <?php }?>
}
.loop-pagination .left{
    float:left;
    background-color: #B80000;
}
.loop-pagination .right a, .loop-pagination .left a{
    color:#ffffff;
    display: block;
    padding: 7px 10px 8px 13px;
}
#pagination{
    display:inline-block;
    width:100%;
}
#pagination .next, #pagination .prev{
    margin-top:10px;
}
#pagination .next a, #pagination .prev a{
    color:#000;
    font-size:16px;
    font-weight:600;
}
.loop-pagination .right a:after{
    content:"";
    background: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjkgMTI5IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxMjkgMTI5IiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KICA8Zz4KICAgIDxwYXRoIGQ9Im00MC40LDEyMS4zYy0wLjgsMC44LTEuOCwxLjItMi45LDEuMnMtMi4xLTAuNC0yLjktMS4yYy0xLjYtMS42LTEuNi00LjIgMC01LjhsNTEtNTEtNTEtNTFjLTEuNi0xLjYtMS42LTQuMiAwLTUuOCAxLjYtMS42IDQuMi0xLjYgNS44LDBsNTMuOSw1My45YzEuNiwxLjYgMS42LDQuMiAwLDUuOGwtNTMuOSw1My45eiIgZmlsbD0iI0ZGRkZGRiIvPgogIDwvZz4KPC9zdmc+Cg==);
    background-size: 12px;
    display: inline-block;
    width: 12px;
    height: 12px;
    background-repeat: no-repeat;
    margin-left: 8px;
    position: relative;
    top: 2px;
}
.loop-pagination .left a:before{
    content:"";
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjkgMTI5IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxMjkgMTI5IiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KICA8Zz4KICAgIDxwYXRoIGQ9Im04OC42LDEyMS4zYzAuOCwwLjggMS44LDEuMiAyLjksMS4yczIuMS0wLjQgMi45LTEuMmMxLjYtMS42IDEuNi00LjIgMC01LjhsLTUxLTUxIDUxLTUxYzEuNi0xLjYgMS42LTQuMiAwLTUuOHMtNC4yLTEuNi01LjgsMGwtNTQsNTMuOWMtMS42LDEuNi0xLjYsNC4yIDAsNS44bDU0LDUzLjl6IiBmaWxsPSIjRkZGRkZGIi8+CiAgPC9nPgo8L3N2Zz4K);
    background-size: 12px;
    display: inline-block;
    width: 12px;
    height: 12px;
    background-repeat: no-repeat;
    margin-right: 8px;
    position: relative;
    top: 2px;
}
<?php } 
if(is_single() || ampforwp_is_front_page() ){ ?>
/****
* Single
*****/
.single-postamp-single .header{
    padding:10px 0px;
}
.amp-related-posts ul{
    list-style-type:none;
}
.amp-related-posts ul li{
    display: inline-block;
    line-height: 1.3;
    margin-bottom: 5px;
}
.amp-related-posts amp-img{
    float: left;
    width: 100px;
    margin: 0px 10px 0px 0px;
}
.amp-single{
    position: relative;
    top: -45px;
    margin: 0 auto;
}
.single-bg{
    background: #222;
    line-height:0;
}
.single-featured-img{
    width:100%;
    max-width: 600px;
    margin: 0 auto;
    text-align:center;
}
.single-featured-img figure{
    position:relative;
    margin:0 auto;
}
.amp-single-featured-img .single-featured-img:after{
    content:"";
    width:100%;
    position:absolute;
    left:0;
    right:0;
    top:0;
    bottom:0;
    background: rgba(0, 0, 0, 0) linear-gradient(to bottom, rgba(0, 0, 0, 0.90) 0% , rgba(0, 0, 0, 0) 35%, rgba(0, 0, 0, 1) 200%) repeat scroll 0 0
}
.amp-single-featured-img{
    width:100%;
    position:relative;
    margin:0 auto;
}
.single-featured-img amp-img{
    margin:0;
    width:100%;
}
.single-postamp-single .featured-img-w{
    margin-bottom:0px;
}
<?php if(is_singular() || $redux_builder_amp['enable-amp-ads-1'] == false){ ?>
.single-postamp-single .featured-img-w{
    background:#000;
}
<?php } ?>
.featured-sp{
    width:100%;
    display:inline-block;
    margin-top:20px;
}
.amp-featured-image amp-img img{
    margin:0 auto;
    text-align:center;
}
.single-title h1{
    margin: 0;
    font-size: 40px;
    line-height: 45px;
    color: #000000;
    font-weight: 300;
}
.single-title{
    margin-top:15px;
}
.single-content{
    display: inline-block;
    width: 100%;
    margin-top: 20px;
    font-size: 16px;
    line-height: 1.6;
    color: #000;
}
.single-content amp-img{
    margin-bottom:20px;
}
.posted-time{
    display: block;
    font-size: 11px;
    color: #555;
    margin-top: 3px;
}
.post-author .amp-author amp-img{
    float:left;
    border-radius: 50%;
    margin-right: 15px;
}
.amp-single .author-name {
    font-size: 13px;
    display: block;
    font-weight: 600;
    text-transform: uppercase;
    color: #444;
    position: relative;
}
.amp-single .author-name a{
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    color: #444;
}
.posted-author-image .amp-author{
    width:100%;
}
.single-title p{
    font-size: 16px;
    color: #333;
    margin: 15px 0px 0px;
    font-style: italic;
    line-height: 1.5;
}
.post-author-info{
    margin-top:15px;
}
.amp-author amp-img{
    float:left;
    margin-right:10px;
    border-radius:50%;
}
.loop-wrapper .amp-author span a{
    font-size: 10px;
    color: #333;
    font-weight: 500;
    text-transform:uppercase;
}
.amp-category, .amp-tags{
    width: 100%;
    display: inline-block;
    margin-top: 25px;
    border-top: 1px solid #eee;
    padding-top: 17px;;
}
.amp-category > span, .amp-tags > span{
    display: block;
    text-transform: uppercase;
    font-size: 15px;
    margin-bottom: 4px;
    color: #666;
}
.amp-category span a, .amp-tags span a{
    float: left;
    font-size: 12px;
    padding: 6px 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin: 5px 5px 0px 0px;
    text-transform: none;
    color: #333;
    font-weight: 400;
}
.comment-meta amp-img{
    border-radius:50%;
    margin-right:10px;
    float:left;
}
.single-rlp {
    margin-top: 25px;
}
 .single-rlp h3{
    margin: 0;
    border-bottom: 2px solid #eee;
    font-weight: 500;
    text-transform: uppercase;
    font-size: 15px;
    color: #444;
    margin-bottom: 18px;
}
.single-rlp h3:after{
    content: "";
    display: block;
    width: 105px;
    border-bottom: 2px solid rgba(255,189,0,1);
    position: relative;
    top: 2px;
    border-bottom: 2px solid 
    <?php if($redux_builder_amp['tech-color-scheme']['rgba']){ echo $redux_builder_amp['tech-color-scheme'] ['rgba'] ?>;
        <?php } else { ?> #da0000; <?php } ?>
}
.single-rlp .amp-related-posts li{
    margin-bottom:20px;
    width:100%;
    font-size: 18px;
    line-height: 23px;
    font-weight: 400;
}
.single-rlp .amp-related-posts li .related_link a{
    color:#000;
}
.single-rlp .amp-related-posts li .amp-author span a {
    font-size: 10px;
    color: #333;
    font-weight: 500;
    text-transform: uppercase;
}
.single-rlp .posted-author-details{
    margin-top:5px;
}
.single-rlp .posted-author-details span{
    display:inline-block;
}
.single-rlp .posted-author-details .author-name{
    margin-right:5px;
}

/**** 
* Comments
*****/
.comments_list ul{
    margin:20px 0px 0px 0px
    padding:0;
}
.comments_list ul.children{
    padding-bottom:10px;
	margin-left: 4%;
	width: 96%;
}
.comments_list ul li p{
    margin: 0;
    font-size: 14px;
    clear: both;
    padding-top: 5px;
}
.comments_list ul li .says{
    margin-right: 4px;
}
.comments_list ul li .comment-body{
    padding: 10px 0px 15px 0px;
}
.comments_list li li{
    margin: 20px 20px 10px 20px;
    background: #f7f7f7;
    box-shadow: none;
    border: 1px solid #eee;
}
.comments_list li li li{
    margin:20px 20px 10px 20px
}
.amp-comment-button{
 <?php if($redux_builder_amp['tech-color-scheme']['rgba']){?>
background-color:<?php echo $redux_builder_amp['tech-color-scheme'] ['rgba'] ?>;
        <?php }?>
    font-size: 13px;
    float: none;
    width: 100%;
    margin: 0 auto;
    text-align: center;
    border-radius: 3px;
    font-weight: 600;
    width: 100%;
}
.amp-comment-button a{
    color: #ffffff;
    display: block;
    font-weight: 500;
    font-size: 17px;
    padding: 9px 0px 10px 0px;
}
.cmts{
    width:100%;
    display:inline-block;
    clear:both;
    margin-top:10px;
}
.cmts h3{
    margin: 0;
    font-size: 15px;
    padding-bottom: 10px;
    border-bottom: 2px solid #eee;
    font-weight: bold;
}
.cmts h3:after{
    content: "";
    display: block;
    width: 125px;
    border-bottom: 2px solid #da0000;
    position: relative;
    top: 12px;
}
.cmts ul{
    margin-top:16px;
}
.cmts ul li{
    list-style:none;
    margin-bottom:25px;
}
.cmts .comment-author.vcard .says{
    display:none;
}
.cmts .comment-author.vcard .fn{
    font-size: 14px;
    font-weight: 600;
    color: #111;
}
.cmts .comment-metadata{
    font-size: 11px;
    font-weight: normal;
}
.cmts .comment-metadata a{
    color: #333;
}
.comment-content{
    margin-top:5px;
}
.comment-content p{
    font-size: 14px;
    color: #000;
    line-height: 21px;
}

/** Front Pages **/
.blog_frontpage .featured-img-w{
    background:#000;
}
.blog_frontpage .header{
    padding:10px 0px;
}
.blog_frontpage .amp-single {
    top: 0;
}
.blog_frontpage .header .nav{
    left:0;
}
<?php } ?>

/** Single Pages **/
.amp-single-page .featured-img-w{
    background:#000;
}
.amp-single-page .header{
    padding:10px 0px;
}
.amp-single-page .header .nav{
    left:0;
}
.single-featured-img {
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
    text-align: center;
}
.single-bg {
    background: #222;
    line-height: 0;
}
.amp-single-page .single-title h1 {
    margin: 0;
    font-size: 40px;
    line-height: 45px;
    color: #000000;
    font-weight: 300;
    padding-top:10px;
}
.amp-single-page .single-content{
    display: inline-block;
    width: 100%;
    margin-top: 20px;
    font-size: 16px;
    line-height: 1.6;
    color: #000;
}
.amp-single-page .amp-comment-button {
    background-color: #B80000;
    font-size: 13px;
    float: none;
    margin-top:20px;
    text-align: center;
    border-radius: 3px;
    font-weight: 600;
    width: 100%;
}
.amp-single-page .amp-comment-button a {
    color: #ffffff;
    display: block;
    font-weight: 500;
    font-size: 17px;
    padding: 9px 0px 10px 0px;
}
.amp-single-page .single-content .footer{
    display:none;
}

@media(max-width:320px){
.featured-img-cnt h2 {
    font-size: 24px;
    line-height: 1.15;
}

}

/*** ADS Code ***/
.amp-ad-wrapper{
    margin:0 auto;
    text-align:center;
}
.amp-home .amp_ad_1{
    margin: 15px 0px -5px 0px;
    background:red;
}
.amp-single-page .amp_ad_1, .amp-single-page .amp-ad-2{
    margin-top:15px;
}
.amp-single-page .amp_ad_3, .amp-single-page .amp-ad-4{
    margin:10px 0px;
}
.single-postamp-single .amp_ad_1{
    margin: 15px 0px 60px 0px;
    background:red;
}
.amp-home .amp-ad-wrapper .amp-ad-2{
    margin:15px 0px -15px 0px;
    background:red;
}
.single-postamp-single .amp-ad-wrapper .amp-ad-2 {
    margin: -25px 0px -15px 0px;
    background: red;
}
.amp-ad-wrapper .amp-ad-3, .amp-ad-wrapper .amp-ad-4{
    background:red;
}
.amp-ad-wrapper .amp-ad-5{
    margin:15px 0px -10px 0px;
    background:red;
}
.amp-ad-wrapper .amp-ad-6{
    margin-bottom:20px;
    background:red;
}


/****
* RTL Styles
*****/
    <?php  if( is_rtl() ) {?> <?php } ?>
