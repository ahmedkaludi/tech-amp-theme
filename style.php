/**** 
* AMP Framework Reset
*****/
    body{ font-family: sans-serif; font-size: 16px; line-height:1.4; }
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
        width: 250px;
    }

    /* AMP Sidebar Toggle button */
    .amp-sidebar-button{
        position:relative;
    }
    .amp-sidebar-toggle  {
    }
    .amp-sidebar-toggle span  {
        display: block;
        height: 2px;
        margin-bottom: 5px;
        width: 22px;
        background: #000;
    }
    .amp-sidebar-toggle span:nth-child(2){
        top: 7px;
    }
    .amp-sidebar-toggle span:nth-child(3){
        top:14px;
    }

    /* AMP Sidebar close button */
    .amp-sidebar-close{
        background: #333;
        display: inline-block;
        padding: 5px 10px;
        font-size: 12px;
        color: #fff;
    }

/****
* AMP Navigation Menu with Dropdown Support
*****/
    .toggle-navigation ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: inline-block;
        width: 100%
    }
    .toggle-navigation ul li{
        font-size: 13px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.11);
        padding: 11px 0px;
        width: 25%;
        float: left;
        text-align: center;
        margin-top: 6px
    }
    .toggle-navigation ul ul{
        display: none
    }
    .toggle-navigation ul li a{
        color: #eee;
        padding: 15px;
    }
    .toggle-navigation{
        display: none;
        background: #444;
    }


/**** 
* Header
*****/

/**** header -logo ****/
.header-part{
    width:100%;
    clear:both;
    display:inline-block;
}
.left-nav{
    float:left;
    width:15%;
    position:relative;
    top:13px;
}
.logo-amp {
    float: left;
    width: 70%;
    text-align: center;
}
.logo-amp h1{
    margin:0;
}
.right-search {
    text-align: right;
    float: right;
    position: relative;
    top: 15px;
}
/* Styles the lightbox, removes it from sight and adds the fade-in transition */

.lightbox-target {
    position: fixed;
    top: -50px;
    width: 100%;
    background: rgba(0,0,0,.7);
    width: 100%;
    opacity: 0;
    -webkit-transition: opacity .5s ease-in-out;
    -moz-transition: opacity .5s ease-in-out;
    -o-transition: opacity .5s ease-in-out;
    transition: opacity .5s ease-in-out;
    overflow: hidden;
    z-index:9;
}

/* Styles the lightbox image, centers it vertically and horizontally, adds the zoom-in transition and makes it responsive using a combination of margin and absolute positioning */

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

/* Styles the close link, adds the slide down transition */

a.lightbox-close {
    display: block;
    width:50px;
    height:50px;
    box-sizing: border-box;
    background: white;
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

/* Provides part of the "X" to eliminate an image from the close link */

a.lightbox-close:before {
    content: "";
    display: block;
    height: 30px;
    width: 1px;
    background: black;
    position: absolute;
    left: 26px;
    top:10px;
    -webkit-transform:rotate(45deg);
    -moz-transform:rotate(45deg);
    -o-transform:rotate(45deg);
    transform:rotate(45deg);
}

/* Provides part of the "X" to eliminate an image from the close link */

a.lightbox-close:after {
    content: "";
    display: block;
    height: 30px;
    width: 1px;
    background: black;
    position: absolute;
    left: 26px;
    top:10px;
    -webkit-transform:rotate(-45deg);
    -moz-transform:rotate(-45deg);
    -o-transform:rotate(-45deg);
    transform:rotate(-45deg);
}

/* Uses the :target pseudo-class to perform the animations upon clicking the .lightbox-target anchor */

.lightbox-target:target {
    opacity: 1;
    top: 0;
    bottom: 0;
    left:0
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
    background:transparent url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ1MSA0NTEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ1MSA0NTE7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8cGF0aCBkPSJNNDQ3LjA1LDQyOGwtMTA5LjYtMTA5LjZjMjkuNC0zMy44LDQ3LjItNzcuOSw0Ny4yLTEyNi4xQzM4NC42NSw4Ni4yLDI5OC4zNSwwLDE5Mi4zNSwwQzg2LjI1LDAsMC4wNSw4Ni4zLDAuMDUsMTkyLjMgICBzODYuMywxOTIuMywxOTIuMywxOTIuM2M0OC4yLDAsOTIuMy0xNy44LDEyNi4xLTQ3LjJMNDI4LjA1LDQ0N2MyLjYsMi42LDYuMSw0LDkuNSw0czYuOS0xLjMsOS41LTQgICBDNDUyLjI1LDQ0MS44LDQ1Mi4yNSw0MzMuMiw0NDcuMDUsNDI4eiBNMjYuOTUsMTkyLjNjMC05MS4yLDc0LjItMTY1LjMsMTY1LjMtMTY1LjNjOTEuMiwwLDE2NS4zLDc0LjIsMTY1LjMsMTY1LjMgICBzLTc0LjEsMTY1LjQtMTY1LjMsMTY1LjRDMTAxLjE1LDM1Ny43LDI2Ljk1LDI4My41LDI2Ljk1LDE5Mi4zeiIgZmlsbD0iIzAwMDAwMCIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=);
    border: none;
    text-indent: -999px;
    background-size: 25px;
    display: inline-block;
    width: 25px;
    height: 30px;
    background-repeat: no-repeat;
    opacity: 0.7;
}
.light-box-button form #s {
    padding: 10px;
    background: rgba(0,0,0,0.7);
    border: none;
    border-bottom: 1px solid #fff;
    color: #fff;
}


/**** 
* Loop
*****/
    .loop-post{
        display: inline-block;
        width: 100%;
        margin: 6px 0px;
    }
    .loop-post .loop-img{
        float: left;
        margin-right: 15px;
    }
    .loop-post h2{
        font-size: 1.2em;
        margin: 0px 0px 8px 0px;
    }
    .loop-post p{
        font-size: 14px;
        color: #333;
        margin-bottom:6px;
    }
    .loop-post ul{
        list-style-type: none;
        display: inline-flex;
        margin: 0px;
        font-size: 14px;
        color: #666;
    }
    .loop-post ul li{
        margin-right:2px;
    }
    .loop-date{
        font-size:12px;
    }

/*** loop - styles ***/
.loop-wrapper .loop-post:nth-child(1) .loop-img{
    width:100%;
    margin-right:0;
}
.loop-wrapper .loop-img amp-img img{
    z-index:-1;
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


/**** 
* Comments
*****/
	.comments_list ul{
	    margin:0;
	    padding:0
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
	.comment-author{ float:left }


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
