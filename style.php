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
    .amp-menu-sidebar amp-sidebar {
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
        margin-bottom:20px;
    }
    .left-nav{
        float:left;
        width:15%;
        position:relative;
        top:13px;
        left:18px;
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
        padding: 12px 15px 0px 10px;

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
    .home_newpage .header{
        background:#000;
    }
    .loop-post .featured-image-post-content h2{
        font-size: 26px;
        margin: 0px;
        line-height: 30px;
        font-family: 'Open Sans', sans-serif;
        font-weight: 400;
    }
    .loop-post .featured-image-post-content h2 a{
        color:#ffffff;
    }
    .loop-post ul{
        list-style-type: none;
        display: inline-flex;
        margin: 0px;
        margin-bottom:10px;
    }
    .loop-post .featured-image-post-content ul li{
        margin-right: 8px;
        background: #B80000;
        color: #ffffff;
        padding: 5px 10px;
        font-size: 10px;
        font-family: 'Open Sans', sans-serif;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
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
    position:relative;
    top:-50px;
    max-width: 600px;
    margin: 0 auto;
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
    bottom: 30px;
    left: 20px;
    right: 20px;
}
.loop-wrapper .loop-post .featured-image{
    position:relative;
    width:100%;
    display:inline-block;
}
.loop-wrapper .loop-post .featured-image .loop-img{
    background: rgba(0, 0, 0, 0) linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.2) 30%, rgba(0, 0, 0, .7) 100%) repeat scroll 0 0;
}
.featured-image-post-content .amp-author-info{
    font-size:13px;
    font-weight:400;
    margin-top:2px;
    color:#ffffff;
    padding-top:10px;
}
.featured-image-post-content .amp-author-info a{
    color:#fff;
}
.featured-image-small-post-content .amp-author-info a{
    font-weight:bold;
}
.featured-image-small-post-content .amp-author-info{
    font-size: 11px;
    font-weight: 300;
    margin-top: 3px;
}
.featured-image-small-posts .loop-img{
    width:90px;
    margin-right:10px;
}
.featured-image-small-posts{
    float:left;
}
.featured-image-small-post-content .loop-title {
    font-size: 15px;
    line-height: 20px;
    margin: 0;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
}
.featured-image-small-post-content .loop-title a{
    color:#000;
}
.featured-image-small-post-content .loop-category {
    position: relative;
    top: -4px;
    margin-bottom: 2px;
}
.featured-image-small-post-content{
    width:66%;
    float:left;
}
.small-post-list{
    margin-bottom:15px;
    border-top:1px solid #eee;
}
.loop-post .featured-image-small-post-content ul li {
    margin-right: 5px;
    background: #B80000;
    color: #ffffff;
    padding: 1px 5px 2px 5px;
    border-radius: 3px;
    font-size: 10px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 600;
    text-transform: uppercase;
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
#pagination .next a:after{
    content:"";
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjkgMTI5IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxMjkgMTI5IiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KICA8Zz4KICAgIDxwYXRoIGQ9Im0xMjEuMywzNC42Yy0xLjYtMS42LTQuMi0xLjYtNS44LDBsLTUxLDUxLjEtNTEuMS01MS4xYy0xLjYtMS42LTQuMi0xLjYtNS44LDAtMS42LDEuNi0xLjYsNC4yIDAsNS44bDUzLjksNTMuOWMwLjgsMC44IDEuOCwxLjIgMi45LDEuMiAxLDAgMi4xLTAuNCAyLjktMS4ybDUzLjktNTMuOWMxLjctMS42IDEuNy00LjIgMC4xLTUuOHoiIGZpbGw9IiMwMDAwMDAiLz4KICA8L2c+Cjwvc3ZnPgo=);
    background-size: 16px;
    display: inline-block;
    width: 16px;
    height: 12px;
    background-repeat: no-repeat;
    margin-left: 10px;
}
#pagination .prev a:before{
    content:"";
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjkgMTI5IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxMjkgMTI5IiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KICA8Zz4KICAgIDxwYXRoIGQ9Im0xMjEuMywzNC42Yy0xLjYtMS42LTQuMi0xLjYtNS44LDBsLTUxLDUxLjEtNTEuMS01MS4xYy0xLjYtMS42LTQuMi0xLjYtNS44LDAtMS42LDEuNi0xLjYsNC4yIDAsNS44bDUzLjksNTMuOWMwLjgsMC44IDEuOCwxLjIgMi45LDEuMiAxLDAgMi4xLTAuNCAyLjktMS4ybDUzLjktNTMuOWMxLjctMS42IDEuNy00LjIgMC4xLTUuOHoiIGZpbGw9IiMwMDAwMDAiLz4KICA8L2c+Cjwvc3ZnPgo=);
    background-size: 16px;
    display: inline-block;
    width: 16px;
    height: 12px;
    background-repeat: no-repeat;
    margin-right:10px;
}
#pagination .next a, #pagination .prev a{
    color:#000;
    font-size:16px;
    font-weight:600;
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
.single-postamp-single .featured-image-big-post{
    display:none;
}
.amp-single-page{
    position: relative;
    top: -42px;
    max-width: 600px;
    margin: 0 auto;
   
}
.single-featured-image{
    display:inline-block;
    width:100%;
}
.featured-small-posts{
    width:100%;
    display:inline-block;
    margin-top:20px;
}
.single-featured-image-post{
    width:100%;
}
.single-post-title h1{
    margin: 0;
    font-size: 26px;
    line-height: 34px;
    color: #000000;
    font-weight: 300;
}
.single-post-content p{
    font-size: 15px;
    line-height: 23px;
    color: #000;
}
.amp-author amp-img{
    border-radius:50%;
}
.post-author {
    font-size:14px;
}
.post-author .amp-author amp-img{
    float:left;
    border-radius: 50%;
    margin-right: 15px;
}
.post-author .amp-author strong {
    font-size: 16px;
    display: block;
    font-weight:600;
}
.single-post-title p{
    font-size: 16px;
    font-family: 'Open Sans', sans-serif;
    color: #000;
    margin-top: 6px;
    line-height:1.5;
}
.posted-author{
    width:100%;
    clear:both;
    display:inline-block;
    margin-bottom:20px;
}
.posted-author-image{
    float: left;
    margin-right: 10px;
}
.posted-author-details span{
    display:block;
    font-size:12px;
    color:#333;
}
.posted-author-details .author-name{
    margin-bottom:2px;
}
.posted-author-details .author-name a{
    font-size:14px;
    color:#000;
    font-weight:600;
    padding-left:5px;
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
}
.single-related-posts .amp-related-posts li .related_link{
    font-size: 16px;
    line-height: 22px;
    font-weight: 400;
}
.single-related-posts .amp-related-posts li .related_link a{
    color:#000;
}
.single-related-posts .amp-related-posts li .related_link p{
    display:none;
}

/**** 
* Archive
*****/
.amp-archive .featured-image-big-post{
    display:none;
}
.amp-archive .header{
    background:#000;
}
.amp-archive-title{
    margin:0;
    padding-bottom:15px;
}
.amp-archive .featured-small-posts{
    margin-top:10px;
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
	

/*** Commnets -part ***/
.comments-part{
    width:100%;
    display:inline-block;
    clear:both;
    margin-top:30px;
}
.comments-part  .amp-comment-button{
    display: block;
    width: 60%;
    margin: 0 auto;
    background-color:#da0000;
    font-size: 16px;
    font-weight: 600;
}
.comments-part .amp-comment-button a{
    color: #fff;
    padding: 10px;
    display: block;
    text-align: center;
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
        padding: 30px 0px 20px 0px;
        font-size: 12px;
        text-align: center;
    }


/****
* RTL Styles
*****/
    <?php  if( is_rtl() ) {?> <?php } ?>
