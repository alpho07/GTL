<style>

    .wrap {
        position: relative;
        margin: 3em 0;
        margin-top: 0px !important;
    }


    /* Frame */

    .frame {
        height: 210px;
        line-height: auto;
        overflow: hidden;
    }

    .frame ul {
        list-style: none;
        margin: 0;
        padding: 0;
        height: 100%;
        font-size: 50px;
    }

    .frame ul li {
        float: left;
        width: 170px;
        height: 100%;
        margin-right:10px;
        padding: 0;
        background: #fff;
        color: #ddd;
        text-align: center;
        cursor: pointer;
    }

    .frame ul li.active {
        color: #fff;
        background: #fff;
    }


    /* Scrollbar */

    .scrollbar {
        margin: 0 0 1em 0;
        height: 2px;
        background: #ccc;
        line-height: 0;
    }

    .scrollbar .handle {
        width: 100px;
        height: 100%;
        background: #292a33;
        cursor: pointer;
    }

    .scrollbar .handle .mousearea {
        position: absolute;
        top: -9px;
        left: 0;
        width: 100%;
        height: 20px;
    }


    /* Pages */

    .pages {
        list-style: none;
        margin: 20px 0;
        padding: 0;
        text-align: center;
    }

    .pages li {
        display: inline-block;
        width: 14px;
        height: 14px;
        margin: 0 4px;
        text-indent: -999px;
        border-radius: 10px;
        cursor: pointer;
        overflow: hidden;
        background: #fff;
        box-shadow: inset 0 0 0 1px rgba(0, 0, 0, .2);
    }

    .pages li:hover {
        background: #aaa;
    }

    .pages li.active {
        background: #666;
    }


    /* Controls */

    .controls {
        margin: 25px 0;
        text-align: center;
    }


    /* One Item Per Frame example*/

    .oneperframe {
        height: 350px;
        line-height: 300px;
    }

    .oneperframe ul li {
        width: 1140px;
    }

    .oneperframe ul li.active {
        background: #333;
    }


    /* Crazy example */

    .crazy ul li:nth-child(2n) {
        width: 100px;
        margin: 0 4px 0 20px;
    }

    .crazy ul li:nth-child(3n) {
        width: 300px;
        margin: 0 10px 0 5px;
    }

    .crazy ul li:nth-child(4n) {
        width: 400px;
        margin: 0 30px 0 2px;
    }
    .card-title{
        color: #000;
        font-weight: normal;
    }

    .item_cost{
        color: #9e1461;
        font-weight: bold;
        text-align: left;
    }

    .corner-ribbon{
        width: 200px;
        background: #e43;
        position: absolute;
        top: 25px;
        left: -50px;
        text-align: center;
        line-height: 50px;
        letter-spacing: 1px;
        color: #f0f0f0;
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
    }

    /* Custom styles */

    .corner-ribbon.sticky{
        position: fixed;
    }

    .corner-ribbon.shadow{
        box-shadow: 0 0 3px rgba(0,0,0,.3);
    }
    .corner-ribbon.top-left{
        top: 25px;
        left: -50px;
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
    }

</style>
<script>
    jQuery(function ($) {
        'use strict';
        base_url = "<?php echo base_url(); ?>";
        // -------------------------------------------------------------
        //   Basic Navigation
        // -------------------------------------------------------------
        (function () {
            var $frame = $('#frame');
            var $slidee = $frame.children('ul').eq(0);
            var $wrap = $frame.parent();

            // Call Sly on frame
            $frame.sly({
                horizontal: 1,
                itemNav: 'basic',
                smart: 1,
                activateOn: 'click',
                mouseDragging: 1,
                touchDragging: 1,
                releaseSwing: 1,
                startAt: 3,
                scrollBar: $wrap.find('.scrollbar'),
                scrollBy: 1,
                pagesBar: $wrap.find('.pages'),
                activatePageOn: 'click',
                speed: 300,
                elasticBounds: 1,
                easing: 'easeOutExpo',
                dragHandle: 1,
                dynamicHandle: 1,
                clickBar: 1,

                // Buttons
                forward: $wrap.find('.forward'),
                backward: $wrap.find('.backward'),
                prev: $wrap.find('.prev'),
                next: $wrap.find('.next'),
                prevPage: $wrap.find('.prevPage'),
                nextPage: $wrap.find('.nextPage')
            });

            // To Start button
            $wrap.find('.toStart').on('click', function () {
                var item = $(this).data('item');
                // Animate a particular item to the start of the frame.
                // If no item is provided, the whole content will be animated.
                $frame.sly('toStart', item);
            });

            // To Center button
            $wrap.find('.toCenter').on('click', function () {
                var item = $(this).data('item');
                // Animate a particular item to the center of the frame.
                // If no item is provided, the whole content will be animated.
                $frame.sly('toCenter', item);
            });

            // To End button
            $wrap.find('.toEnd').on('click', function () {
                var item = $(this).data('item');
                // Animate a particular item to the end of the frame.
                // If no item is provided, the whole content will be animated.
                $frame.sly('toEnd', item);
            });

            // Add item
            $wrap.find('.add').on('click', function () {
                $frame.sly('add', '<li>' + $slidee.children().length + '</li>');
            });

            // Remove item
            $wrap.find('.remove').on('click', function () {
                $frame.sly('remove', -1);
            });
        }());

        // -------------------------------------------------------------
        //   Centered Navigation
        // -------------------------------------------------------------
        (function () {
            var $frame = $('#centered');
            var $wrap = $frame.parent();

            // Call Sly on frame
            $frame.sly({
                horizontal: 1,
                itemNav: 'centered',
                smart: 1,
                activateOn: 'click',
                mouseDragging: 1,
                touchDragging: 1,
                releaseSwing: 1,
                startAt: 4,
                scrollBar: $wrap.find('.scrollbar'),
                scrollBy: 1,
                speed: 300,
                elasticBounds: 1,
                easing: 'easeOutExpo',
                dragHandle: 1,
                dynamicHandle: 1,
                clickBar: 1,

                // Buttons
                prev: $wrap.find('.prev'),
                next: $wrap.find('.next')
            });
        }());

        // -------------------------------------------------------------
        //   Force Centered Navigation
        // -------------------------------------------------------------
        (function () {
            var $frame = $('#forcecentered');
            var $wrap = $frame.parent();

            // Call Sly on frame
            $frame.sly({
                horizontal: 1,
                itemNav: 'forceCentered',
                smart: 1,
                activateMiddle: 1,
                activateOn: 'click',
                mouseDragging: 1,
                touchDragging: 1,
                releaseSwing: 1,
                startAt: 0,
                scrollBar: $wrap.find('.scrollbar'),
                scrollBy: 1,
                speed: 300,
                elasticBounds: 1,
                easing: 'easeOutExpo',
                dragHandle: 1,
                dynamicHandle: 1,
                clickBar: 1,

                // Buttons
                prev: $wrap.find('.prev'),
                next: $wrap.find('.next')
            });
        }());

        // -------------------------------------------------------------
        //   Cycle By Items
        // -------------------------------------------------------------
        (function () {
            var $frame = $('#cycleitems');
            var $wrap = $frame.parent();

            // Call Sly on frame
            $frame.sly({
                horizontal: 1,
                itemNav: 'basic',
                smart: 2,
                activateOn: 'click',
                mouseDragging: 1,
                touchDragging: 1,
                releaseSwing: 1,
                startAt: 0,
                scrollBar: $wrap.find('.scrollbar'),
                scrollBy: 1,
                speed: 1000,
                elasticBounds: 1,
                easing: 'easeOutExpo',
                dragHandle: 1,
                dynamicHandle: 1,
                clickBar: 1,

                // Cycling
                cycleBy: 'items',
                cycleInterval: 2500,
                pauseOnHover: 1,

                // Buttons
                prev: $wrap.find('.prev'),
                next: $wrap.find('.next')
            });

            // Pause button
            $wrap.find('.pause').on('click', function () {
                $frame.sly('pause');
            });

            // Resume button
            $wrap.find('.resume').on('click', function () {
                $frame.sly('resume');
            });

            // Toggle button
            $wrap.find('.toggle').on('click', function () {
                $frame.sly('toggle');
            });
        }());

        // -------------------------------------------------------------
        //   Cycle By Pages
        // -------------------------------------------------------------
        (function () {
            var $frame = $('#cyclepages');
            var $wrap = $frame.parent();

            // Call Sly on frame
            $frame.sly({
                horizontal: 1,
                itemNav: 'basic',
                smart: 1,
                activateOn: 'click',
                mouseDragging: 1,
                touchDragging: 1,
                releaseSwing: 1,
                startAt: 0,
                scrollBar: $wrap.find('.scrollbar'),
                scrollBy: 1,
                pagesBar: $wrap.find('.pages'),
                activatePageOn: 'click',
                speed: 300,
                elasticBounds: 1,
                easing: 'easeOutExpo',
                dragHandle: 1,
                dynamicHandle: 1,
                clickBar: 1,

                // Cycling
                cycleBy: 'pages',
                cycleInterval: 1000,
                pauseOnHover: 1,
                startPaused: 1,

                // Buttons
                prevPage: $wrap.find('.prevPage'),
                nextPage: $wrap.find('.nextPage')
            });

            // Pause button
            $wrap.find('.pause').on('click', function () {
                $frame.sly('pause');
            });

            // Resume button
            $wrap.find('.resume').on('click', function () {
                $frame.sly('resume');
            });

            // Toggle button
            $wrap.find('.toggle').on('click', function () {
                $frame.sly('toggle');
            });
        }());

        // -------------------------------------------------------------
        //   One Item Per Frame
        // -------------------------------------------------------------
        (function () {
            var $frame = $('#oneperframe');
            var $wrap = $frame.parent();

            // Call Sly on frame
            $frame.sly({
                horizontal: 1,
                itemNav: 'forceCentered',
                smart: 1,
                activateMiddle: 1,
                mouseDragging: 1,
                touchDragging: 1,
                releaseSwing: 1,
                startAt: 0,
                scrollBar: $wrap.find('.scrollbar'),
                scrollBy: 1,
                speed: 300,
                elasticBounds: 1,
                easing: 'easeOutExpo',
                dragHandle: 1,
                dynamicHandle: 1,
                clickBar: 1,

                // Buttons
                prev: $wrap.find('.prev'),
                next: $wrap.find('.next')
            });
        }());

        // -------------------------------------------------------------
        //   Crazy
        // -------------------------------------------------------------
        (function () {
            var $frame = $('#crazy');
            var $slidee = $frame.children('ul').eq(0);
            var $wrap = $frame.parent();

            // Call Sly on frame
            $frame.sly({
                horizontal: 1,
                itemNav: 'basic',
                smart: 1,
                activateOn: 'click',
                mouseDragging: 1,
                touchDragging: 1,
                releaseSwing: 1,
                startAt: 3,
                scrollBar: $wrap.find('.scrollbar'),
                scrollBy: 1,
                pagesBar: $wrap.find('.pages'),
                activatePageOn: 'click',
                speed: 300,
                elasticBounds: 1,
                easing: 'easeOutExpo',
                dragHandle: 1,
                dynamicHandle: 1,
                clickBar: 1,

                // Buttons
                forward: $wrap.find('.forward'),
                backward: $wrap.find('.backward'),
                prev: $wrap.find('.prev'),
                next: $wrap.find('.next'),
                prevPage: $wrap.find('.prevPage'),
                nextPage: $wrap.find('.nextPage')
            });

            // To Start button
            $wrap.find('.toStart').on('click', function () {
                var item = $(this).data('item');
                // Animate a particular item to the start of the frame.
                // If no item is provided, the whole content will be animated.
                $frame.sly('toStart', item);
            });

            // To Center button
            $wrap.find('.toCenter').on('click', function () {
                var item = $(this).data('item');
                // Animate a particular item to the center of the frame.
                // If no item is provided, the whole content will be animated.
                $frame.sly('toCenter', item);
            });

            // To End button
            $wrap.find('.toEnd').on('click', function () {
                var item = $(this).data('item');
                // Animate a particular item to the end of the frame.
                // If no item is provided, the whole content will be animated.
                $frame.sly('toEnd', item);
            });

            // Add item
            $wrap.find('.add').on('click', function () {
                $frame.sly('add', '<li>' + $slidee.children().length + '</li>');
            });

            // Remove item
            $wrap.find('.remove').on('click', function () {
                $frame.sly('remove', -1);
            });
        }());
    var formatter = new Intl.NumberFormat('en-US', {
     
        minimumFractionDigits: 2,
    });

        $.getJSON(base_url + 'home/getPremiumAds/', function (data) {
            var PREMIUM_CONTAINER = $('#PREMIUM_CONTAINER');
            PREMIUM_CONTAINER.empty( );
            var contents;
            $.each(data, function (index, ad) {
                contents = '<li class=""><div class="card  animated fadeInLeft" style="padding:5px;"><a href="' + base_url + 'home/loadSingle/' + ad.id + '/' + ad.title.replace(/\s+/g, '-') + '"><img class="card-img-top " src="' + base_url + ad.image_path + '" height="110px" alt="' + obtr(ad.title, 17, '...') + '" /></a><div class="card-block"><h4 class="card-title " style="text-align: left; font-weight: bold; font-size:14px;"><a href="' + base_url + 'home/loadSingle/' + ad.id + '/' + ad.title.replace(/\s+/g, '-') + '">' + obtr(ad.title, 17, '...') + '</a></h4><p class="card-text"  style="color:black; font-weight: normal; font-size:11px; text-align: left;">' + obtr(ad.description, 28, '...') + '</p><p class="item_cost">KES. ' + formatter.format(ad.price) + '</p></div></div></li>';
                PREMIUM_CONTAINER.append(contents);
            });

        });


    });


    obtr = function (str, length, ending) {
        if (length == null) {
            length = 100;
        }
        if (ending == null) {
            ending = '...';
        }
        if (str.length > length) {
            return str.substring(0, length - ending.length) + ending;
        } else {
            return str;
        }
    };


</script>

<div class="wrap card" style="padding:5px;">
    <h4>Premium Listings</h4>
    <div class="scrollbar">
        <div class="handle" style="transform: translateZ(0px) translateX(950px); width: 190px;">
            <div class="mousearea"></div>
        </div>
    </div>

    <div id="cycleitems" class="frame" style="overflow: hidden;">
        <ul class="clearfix " id="PREMIUM_CONTAINER" style="transform: translateZ(0px) translateX(-5699px); width: 6840px;">

            <li class=""></li>

            <li class=""> </li>
            <li class=""> </li>
            <li class="">                <div class="row col-md-12"><center><img style="margin:10px; display:none;" class="LOADERONE" src="<?php echo base_url(); ?>img/buriani-loader.gif" alt="Loading Search Data...." width="300px;"/></center></div>
            </li>
            <li class=""></li>
            <li class=""></li>
            <li class=""> </li>

        </ul>
    </div>
    <div class="row pull-right">
        <div class="controls center">
            <button class="btn prev"><i class="icon-chevron-left"></i> prev</button>
            <button class="btn next disabled" disabled="">next <i class="icon-chevron-right"></i></button>
        </div>
    </div>
    <div class="scrollbar">
        <div class="handle" style="transform: translateZ(0px) translateX(950px); width: 190px;">
            <div class="mousearea"></div>
        </div>
    </div>
</div>