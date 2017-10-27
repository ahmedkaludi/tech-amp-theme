/**** 
* AMP Framework Reset
*****/
    body{ font-family: 'Open Sans', sans-serif; font-size: 16px; line-height:1.4; }
    ol, ul{ list-style-position: inside }
    p, ol, ul, figure{ margin: 0 0 1em; padding: 0; }
    a, a:active, a:visited{ color:#ed1c24; text-decoration: none }
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
        margin: 0;
        padding: .66em 10px .75em;
        text-align: center;
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
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 0px 10px;
}

/****
* AMP Sidebar
*****/
    amp-sidebar {
        width: 100%;
        padding-left:20px;
    }

    /* AMP Sidebar Toggle button */
    .amp-sidebar-button{
        position:relative;
        z-index:1;
    }
    .amp-sidebar-toggle  {
    }
    .amp-sidebar-toggle span  {
        display: block;
        height: 2px;
        margin-bottom: 5px;
        width: 22px;
        background: #fff;
    }
    .amp-sidebar-toggle span:nth-child(2){
        top: 7px;
    }
    .amp-sidebar-toggle span:nth-child(3){
        top:14px;
    }

    /* AMP Sidebar close button */
    
    .amp-sidebar-close:after{
        content:"";
        background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMxLjExMiAzMS4xMTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDMxLjExMiAzMS4xMTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPHBvbHlnb24gcG9pbnRzPSIzMS4xMTIsMS40MTQgMjkuNjk4LDAgMTUuNTU2LDE0LjE0MiAxLjQxNCwwIDAsMS40MTQgMTQuMTQyLDE1LjU1NiAwLDI5LjY5OCAxLjQxNCwzMS4xMTIgMTUuNTU2LDE2Ljk3ICAgMjkuNjk4LDMxLjExMiAzMS4xMTIsMjkuNjk4IDE2Ljk3LDE1LjU1NiAiIGZpbGw9IiNGRkZGRkYiLz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==);
        background-size: 18px;
        display: inline-block;
        width: 18px;
        height: 18px;
        background-repeat: no-repeat;
        position: relative;
        top: 10px;
    }

     .amp-sidebar-close:hover:after{
        transform: rotate(180deg);
    }
    .amp-sidebar-close{
        display:inline-block;
    }
/****
* AMP Navigation Menu with Dropdown Support
*****/
    #sidebar{
        background-color:rgba(0,0,0,.9);
        
    }
    .amp-main-menu > ul > li > a{
        color:#ffffff;
        font-size:15px;
        font-family: 'Open Sans', sans-serif;
        font-weight:500;
        letter-spacing:0.5px;
    }
    .amp-menu li.menu-item-has-children > ul > li{
        font-size:13px;
        font-family: 'Open Sans', sans-serif;
        font-weight:300;
        letter-spacing:0.5px;
        width:85%;
    }
    .amp-main-menu ul li:hover a, .amp-main-menu ul li:active a, .amp-main-menu ul li:focus a{
        color:#ffffff;
        background:#000;
    }
    .amp-main-menu ul li:hover li:hover > a{
        color:#ffffff;
        background:#000;
    }

    .amp-main-menu ul li.menu-item-has-children:after{
        content:"";
        background:transparent url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjkgMTI5IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxMjkgMTI5IiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KICA8Zz4KICAgIDxwYXRoIGQ9Im0xMjEuMywzNC42Yy0xLjYtMS42LTQuMi0xLjYtNS44LDBsLTUxLDUxLjEtNTEuMS01MS4xYy0xLjYtMS42LTQuMi0xLjYtNS44LDAtMS42LDEuNi0xLjYsNC4yIDAsNS44bDUzLjksNTMuOWMwLjgsMC44IDEuOCwxLjIgMi45LDEuMiAxLDAgMi4xLTAuNCAyLjktMS4ybDUzLjktNTMuOWMxLjctMS42IDEuNy00LjIgMC4xLTUuOHoiIGZpbGw9IiNEODAwMjciLz4KICA8L2c+Cjwvc3ZnPgo=);
        background-size: 16px;
        display: inline-block;
        width: 16px;
        height: 16px;
        background-repeat: no-repeat;
        top: 10px;
    }
    .amp-main-menu ul li.menu-item-has-children:hover:after{
        -moz-transform: rotate(180deg);
        -o-transform: rotate(180deg);
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
        top: -10px;
        right: 20px;
    }
    .amp-main-menu{
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
    
    .header-part{
        width:100%;
        clear:both;
        display:inline;
        
    }
    .amp-home.home_newpage .header-part{
        padding:0
    }
    .left-nav{
        float:left;
        width:15%;
        position:relative;
        left:18px;
    }
    .amp-archive .left-nav, .without_image .left-nav{
        left:0
    }
    .logo-amp {
        float: left;
        width: 70%;
        text-align: center;
        z-index:2;
        position:relative;
    }
    .logo-amp h1{
        margin:0;
    }
    .right-search {
        text-align: right;
        float: right;
        position: relative;
        z-index: 1;
        padding: 0px 10px 0px 10px;
        line-height:0;

    }

/*** Light Box ***/

    .lightbox-target {
        position: fixed;
        top: -50px;
        width: 100%;
        background: rgba(0,0,0,.9);
        width: 100%;
        opacity: 0;
        -webkit-transition: opacity .5s ease-in-out;
        -moz-transition: opacity .5s ease-in-out;
        -o-transition: opacity .5s ease-in-out;
        transition: opacity .5s ease-in-out;
        overflow: hidden;
        z-index:9;
    }
    .lightbox-target img {
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
    a.lightbox-close {
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
    a.lightbox-close:before {
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
    a.lightbox-close:after {
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
    .lightbox-target:target {
        opacity: 1;
        top: 0;
        bottom: 0;
        left:0;
        z-index:1;
    }
    .lightbox-target:target img {
        max-height: 100%;
        max-width: 100%;
    }
    .lightbox-target:target a.lightbox-close {
        top: 0px;
    }
    .lightbox img{
        cursor:pointer;
    }
    .light-box-button form{
        position: absolute;
        top: 200px;
        left: 0;
        right: 0;
        margin: 0 auto;
        text-align: center;
    }
    .light-box-button form #s{
        padding:10px;
    }
    .light-box-button form #amp-search-submit{
        padding:10px;
        cursor:pointer;
    }
    .light-box-button form #amp-search-submit {
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
    .light-box-button form #s {
        padding: 10px;
        background: transparent;
        border: none;
        border-bottom: 1px solid #504c4c;
        color: #ffffff;
        width:70%;
    }


/**** 
* Loop
*****/
    .loop-post{
        display: inline-block;
        width: 100%;
        position:relative;
    }
    .amp-home .header, .single-postamp-single .header{
        padding:10px 0px;
    }
    .home_newpage .header, .search_page .header, .amp-archive .header, .without_image .header {
        background:#222;
        padding:10px;
    }
    .home_newpage .featured-image-wrapper, .search_page .featured-image-wrapper, .amp-archive .featured-image-wrapper{
        background:#222;
        display: block;
    }
    .without_image .home-background{
         background: transparent;
    }    
    .home-background{
        position: relative;
        top: -50px;
        background: #222;
    }
    .without_image .header{
        margin-bottom:20px;
    }
    .without_image .amp-single-page{
        position:relative;
        top:0px;
    }
    .without_image .without-image-bg{
        background:#222;
    }
    .featured-image-post-content h2{
        font-size: 25px;
        margin: 0px;
        line-height: 30px;
        font-family: 'Open Sans', sans-serif;
        font-weight: 400;
    }
    .featured-image-post-content h2 a{
        color:#ffffff;
    }
    .loop-post ul{
        list-style-type: none;
        display: inline-flex;
        margin: 0px;
        margin-bottom:5px;
    }
    .amp-logo a{
        line-height:0;
        display:block;
    }

/*** loop - styles ***/
.loop-wrapper .loop-img amp-img img{
    z-index:-1;
}
.loop-wrapper .loop-post .featured-image .loop-img{
    width: 100%;
}
.loop-img a{
    display:block;
    line-height:0;
}
.featured-image-wrapper{
    margin-bottom:-50px;
}
.featured-image-big-post{
    max-width: 600px;
    margin: 0 auto;
}
.without_image .featured-image-big-post{
    padding:0px 10px;
}
.featured-image-big-post .header-part{
    position: absolute;
    top: 0;
    bottom: auto;
}
.featured-image-big-post .right-search {
    right: 20px;
}
.featured-image-post-content{
    position: absolute;
    top: auto;
    bottom: 15px;
    left: 15px;
    right: 15px;
}
.featured-without-image-post-content{
    width:100%;
    margin-top:50px;
}
.loop-wrapper .loop-post .featured-image{
    position:relative;
    width:100%;
    display:inline-block;
    z-index:0;
}
.loop-wrapper .loop-post .featured-image .loop-img{
    background: rgba(0, 0, 0, 0) linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.2) 30%, rgba(0, 0, 0, .7) 100%) repeat scroll 0 0;
}
.featured-image-post-content .amp-author{
    font-size:13px;
    font-weight:400;
    margin-top:2px;
    color:#ffffff;
    padding-top:5px;
}
.featured-image-post-content .amp-author .author-name a {
    color: #fff;
    font-size: 12px;
    font-weight: 500;
}
.featured-image-small-post-content .amp-author{
    margin-top: 2px;
}
.featured-image-small-posts .loop-img{
    width:90px;
    margin-right:10px;
}
.featured-image-small-posts{
    float:left;
}
.featured-image-small-post-content .loop-title, .featured-without-image-post-content .loop-title{
    font-size: 17px;
    line-height: 22px;
    margin: 0;
    font-family: 'Open Sans',sans-serif;
    font-weight: 400;
}
.featured-image-small-post-content .loop-title a, .featured-without-image-post-content .loop-title a{
    color:#000;
}
.featured-image-small-post-content .loop-category {
    margin-bottom: 3px;
}
.featured-image-small-post-content{
    width:66%;
    float:left;
}
.small-post-list{
    margin-bottom:12px;
    border-top:1px solid #eee;
    padding-top:17px;
}
.small-post-list:first-child{
    border-top:none;
    padding-top:0;
}
.featured-image-small-post-content ul li, .featured-without-image-post-content ul li, .featured-image-post-content ul li{
    margin-right: 5px;
    background: #90A4AE;
    border-radius: 3px;
    font-size: 10px;
    font-family: 'Open Sans',sans-serif;
    font-weight: 400;
    text-transform: uppercase;
}
.featured-image-small-post-content ul li a, .featured-without-image-post-content ul li a, .featured-image-post-content ul li a{
    color: #ffffff;
    padding: 1px 5px 2px 5px;
    display:inline-block;
}
.amp-home .posted-author-details .posted-time{
    display:none;
}
/****
* Pagination
*****/
.loop-pagination .right, .loop-pagination .left{
    background-color: #B80000;
    font-size: 13px;
    font-family: 'Open Sans', sans-serif;
    float: none;
    width: 100%;
    margin: 0 auto;
    text-align: center;
    border-radius: 3px;
    font-weight: 600;
}
.loop-pagination .left {
    margin-top:6px;
}
.loop-pagination .right a, .loop-pagination .left a{
    color:#ffffff;
    display: block;
    padding: 7px 0px 8px 0px;
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
    background-size: 15px;
    display: inline-block;
    width: 15px;
    height: 16px;
    background-repeat: no-repeat;
    margin-left: 8px;
    position: relative;
    top: 5px;
}
.loop-pagination .left a:before{
    content:"";
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjkgMTI5IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxMjkgMTI5IiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KICA8Zz4KICAgIDxwYXRoIGQ9Im04OC42LDEyMS4zYzAuOCwwLjggMS44LDEuMiAyLjksMS4yczIuMS0wLjQgMi45LTEuMmMxLjYtMS42IDEuNi00LjIgMC01LjhsLTUxLTUxIDUxLTUxYzEuNi0xLjYgMS42LTQuMiAwLTUuOHMtNC4yLTEuNi01LjgsMGwtNTQsNTMuOWMtMS42LDEuNi0xLjYsNC4yIDAsNS44bDU0LDUzLjl6IiBmaWxsPSIjRkZGRkZGIi8+CiAgPC9nPgo8L3N2Zz4K);
    background-size: 15px;
    display: inline-block;
    width: 15px;
    height: 16px;
    background-repeat: no-repeat;
    margin-right: 8px;
    position: relative;
    top: 5px;
}

/****
* Single
*****/
    /** Related Posts **/
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
/*** --- single - post ***/

.amp-single-page{
    position: relative;
    top: -45px;
    margin: 0 auto;
}
.single-background{
    background: #222;
    line-height:0;
}
.single-featured-image{
    width:100%;
    max-width: 600px;
    margin: 0 auto;
    text-align:center;
}
.single-featured-image figure{
    margin:0 auto;
}
.single-featured-image amp-img{
    margin:0;
    width:100%;
}
.single-postamp-single .featured-image-wrapper{
    margin-bottom:0px;
}
.featured-small-posts{
    width:100%;
    display:inline-block;
    margin-top:20px;
}
.amp-featured-image amp-img img{
    margin:0 auto;
    text-align:center;
}
.single-featured-image-post{
    width:100%;
}
.single-post-title h1{
    margin: 0;
    font-size: 40px;
    line-height: 45px;
    color: #000000;
    font-weight: 300;
}
.single-post-title{
    margin-top:15px;
}
.single-post-content p{
    font-size: 15px;
    line-height: 23px;
    color: #000;
}
.amp-author amp-img{
    border-radius:50%;
}
.posted-time{
    display:block;
    font-size:14px;
}
.amp-single-page .post-author-info .amp-author{
    border-bottom: 1px solid #ccc;
    padding-bottom: 12px;
} 
.post-author .amp-author amp-img{
    float:left;
    border-radius: 50%;
    margin-right: 15px;
}
.amp-single-page .author-name {
    font-size: 14px;
    display: block;
}
.amp-single-page .author-name a{
    font-size:14px;
    font-weight:600;
}
.posted-author-image .amp-author{
    width:100%;
}
.single-post-title p{
    font-size: 20px;
    font-family: 'Open Sans',sans-serif;
    color: #000;
    margin-top: 6px;
    font-weight: 400;
    line-height: 1.5;
}
.amp-author amp-img{
    float:left;
    margin-right:10px;
}
.amp-author span a{
    font-size: 10px;
    color: #333;
    font-weight: 500;
}
.single-post-content{
    display:inline-block;
    width:100%;
    margin-top:15px;
}
.single-post-category-list .amp-category, .single-post-tags-list .amp-tags{
    width: 100%;
    display: inline-block;
    margin-top: 25px;
    border-top: 1px solid #eee;
    padding-top: 17px;;
}
.single-post-category-list .amp-category > span, .single-post-tags-list .amp-tags > span{
    display: block;
    text-transform: uppercase;
    font-size: 15px;
    margin-bottom: 8px;
}
.single-post-category-list .amp-category span a, .single-post-tags-list .amp-tags span a{
    float: left;
    font-size: 12px;
    padding: 6px 10px;
    border: 1px solid #BDBDBD;
    border-radius: 3px;
    margin: 5px 5px 0px 0px;
    text-transform: none;
    color: #777;
    font-weight: 400;
}
.single-related-posts {
    margin-top: 25px;
}
 .single-related-posts h3{
    margin: 0;
    font-size: 15px;
    padding-bottom: 10px;
    border-bottom: 2px solid #eee;
    font-weight: bold;
    margin-bottom:20px;
}
.single-related-posts h3:after{
    content: "";
    display: block;
    width: 92px;
    border-bottom: 2px solid #da0000;
    position: relative;
    top: 12px;
}
.single-related-posts .amp-related-posts li{
    margin-bottom:20px;
    width:100%;
}
.single-related-posts .amp-related-posts li .related_link{
    font-size: 16px;
    line-height: 22px;
    font-weight: 400;
}
.single-related-posts .amp-related-posts li .related_link a{
    color:#000;
}
.single-related-posts .posted-author-details{
    margin-top:5px;
}
.single-related-posts .posted-author-details span, .amp-archive .posted-author-details span{
    display:inline-block;
}
.single-related-posts .posted-author-details .author-name, .amp-archive .posted-author-details .author-name{
    margin-right:5px;
}
.comment-meta amp-img{
    border-radius:50%;
    margin-right:10px;
    float:left;
}
/**** 
* Archive
*****/
.amp-archive{
    margin-top:50px;
}
.amp-archive-title, .amp-archive .amp-loop-label{
    margin:0;
    padding-bottom:15px;
}
.amp-archive-desc{
    padding-bottom: 15px;
    margin-top: -10px;
}
.amp-archive .featured-small-posts{
    margin-top:15px;
    display:inline-block;
}
.amp-related-posts ul {
    margin:0;
}
.amp-related-posts
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
	

/*** Commnets -part ***/
.comments-part{
    width:100%;
    display:inline-block;
    clear:both;
    margin-top:10px;
}
.comments-part  .amp-comment-button{
    background-color: #B80000;
    font-size: 13px;
    font-family: 'Open Sans',sans-serif;
    float: none;
    width: 100%;
    margin: 0 auto;
    text-align: center;
    border-radius: 3px;
    font-weight: 600;
    width:250px;
}
.comments-part .amp-comment-button a{
    color: #ffffff;
    display: block;
    padding: 7px 0px 8px 0px;
}
.comments-part h3{
    margin: 0;
    font-size: 15px;
    padding-bottom: 10px;
    border-bottom: 2px solid #eee;
    font-weight: bold;
}
.comments-part h3:after{
    content: "";
    display: block;
    width: 125px;
    border-bottom: 2px solid #da0000;
    position: relative;
    top: 12px;
}
.comments-part ul{
    margin-top:16px;
}
.comments-part ul li{
    list-style:none;
    margin-bottom:25px;
}
.comments-part .comment-author.vcard .says{
    display:none;
}
.comments-part  .comment-author.vcard .fn{
    font-size: 14px;
    font-weight: 600;
    color: #111;
}
.comments-part .comment-metadata{
    font-size: 11px;
    font-weight: normal;
}
.comments-part .comment-metadata a{
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



/**** 
* Footer
*****/
    .footer{
        padding: 40px 0px;
        font-size: 12px;
        text-align: center;
        background-color:#222;
        margin-top:30px;
    }
.footer .amp-menu{
    margin-top:15px;
}
.footer .amp-menu li{
    display: inline-block;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
}
.footer .amp-menu li a{
    color:#fff;
}
.footer .amp-menu li:hover a {
    background: transparent;
}
.footer .amp-social{
    margin-top:15px;
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
    color: #fff;
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 700;
}
.rights-reserved a{
    padding-left:3px;
}
/****
* RTL Styles
*****/
    <?php  if( is_rtl() ) {?> <?php } ?>
