    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Blog.com</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
        <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

        <style id="apexcharts-css">
            @keyframes opaque {
                0% {
                    opacity: 0
                }

                to {
                    opacity: 1
                }
            }

            @keyframes resizeanim {

                0%,
                to {
                    opacity: 0
                }
            }

            .apexcharts-canvas {
                position: relative;
                user-select: none
            }

            .apexcharts-canvas ::-webkit-scrollbar {
                -webkit-appearance: none;
                width: 6px
            }

            .apexcharts-canvas ::-webkit-scrollbar-thumb {
                border-radius: 4px;
                background-color: rgba(0, 0, 0, .5);
                box-shadow: 0 0 1px rgba(255, 255, 255, .5);
                -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5)
            }

            .apexcharts-inner {
                position: relative
            }

            .apexcharts-text tspan {
                font-family: inherit
            }

            .legend-mouseover-inactive {
                transition: .15s ease all;
                opacity: .2
            }

            .apexcharts-legend-text {
                padding-left: 15px;
                margin-left: -15px;
            }

            .apexcharts-series-collapsed {
                opacity: 0
            }

            .apexcharts-tooltip {
                border-radius: 5px;
                box-shadow: 2px 2px 6px -4px #999;
                cursor: default;
                font-size: 14px;
                left: 62px;
                opacity: 0;
                pointer-events: none;
                position: absolute;
                top: 20px;
                display: flex;
                flex-direction: column;
                overflow: hidden;
                white-space: nowrap;
                z-index: 12;
                transition: .15s ease all
            }

            .apexcharts-tooltip.apexcharts-active {
                opacity: 1;
                transition: .15s ease all
            }

            .apexcharts-tooltip.apexcharts-theme-light {
                border: 1px solid #e3e3e3;
                background: rgba(255, 255, 255, .96)
            }

            .apexcharts-tooltip.apexcharts-theme-dark {
                color: #fff;
                background: rgba(30, 30, 30, .8)
            }

            .apexcharts-tooltip * {
                font-family: inherit
            }

            .apexcharts-tooltip-title {
                padding: 6px;
                font-size: 15px;
                margin-bottom: 4px
            }

            .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
                background: #eceff1;
                border-bottom: 1px solid #ddd
            }

            .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
                background: rgba(0, 0, 0, .7);
                border-bottom: 1px solid #333
            }

            .apexcharts-tooltip-text-goals-value,
            .apexcharts-tooltip-text-y-value,
            .apexcharts-tooltip-text-z-value {
                display: inline-block;
                margin-left: 5px;
                font-weight: 600
            }

            .apexcharts-tooltip-text-goals-label:empty,
            .apexcharts-tooltip-text-goals-value:empty,
            .apexcharts-tooltip-text-y-label:empty,
            .apexcharts-tooltip-text-y-value:empty,
            .apexcharts-tooltip-text-z-value:empty,
            .apexcharts-tooltip-title:empty {
                display: none
            }

            .apexcharts-tooltip-text-goals-label,
            .apexcharts-tooltip-text-goals-value {
                padding: 6px 0 5px
            }

            .apexcharts-tooltip-goals-group,
            .apexcharts-tooltip-text-goals-label,
            .apexcharts-tooltip-text-goals-value {
                display: flex
            }

            .apexcharts-tooltip-text-goals-label:not(:empty),
            .apexcharts-tooltip-text-goals-value:not(:empty) {
                margin-top: -6px
            }

            .apexcharts-tooltip-marker {
                width: 12px;
                height: 12px;
                position: relative;
                top: 0;
                margin-right: 10px;
                border-radius: 50%
            }

            .apexcharts-tooltip-series-group {
                padding: 0 10px;
                display: none;
                text-align: left;
                justify-content: left;
                align-items: center
            }

            .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
                opacity: 1
            }

            .apexcharts-tooltip-series-group.apexcharts-active,
            .apexcharts-tooltip-series-group:last-child {
                padding-bottom: 4px
            }

            .apexcharts-tooltip-series-group-hidden {
                opacity: 0;
                height: 0;
                line-height: 0;
                padding: 0 !important
            }

            .apexcharts-tooltip-y-group {
                padding: 6px 0 5px
            }

            .apexcharts-custom-tooltip,
            .apexcharts-tooltip-box {
                padding: 4px 8px
            }

            .apexcharts-tooltip-boxPlot {
                display: flex;
                flex-direction: column-reverse
            }

            .apexcharts-tooltip-box>div {
                margin: 4px 0
            }

            .apexcharts-tooltip-box span.value {
                font-weight: 700
            }

            .apexcharts-tooltip-rangebar {
                padding: 5px 8px
            }

            .apexcharts-tooltip-rangebar .category {
                font-weight: 600;
                color: #777
            }

            .apexcharts-tooltip-rangebar .series-name {
                font-weight: 700;
                display: block;
                margin-bottom: 5px
            }

            .apexcharts-xaxistooltip,
            .apexcharts-yaxistooltip {
                opacity: 0;
                pointer-events: none;
                color: #373d3f;
                font-size: 13px;
                text-align: center;
                border-radius: 2px;
                position: absolute;
                z-index: 10;
                background: #eceff1;
                border: 1px solid #90a4ae
            }

            .apexcharts-xaxistooltip {
                padding: 9px 10px;
                transition: .15s ease all
            }

            .apexcharts-xaxistooltip.apexcharts-theme-dark {
                background: rgba(0, 0, 0, .7);
                border: 1px solid rgba(0, 0, 0, .5);
                color: #fff
            }

            .apexcharts-xaxistooltip:after,
            .apexcharts-xaxistooltip:before {
                left: 50%;
                border: solid transparent;
                content: " ";
                height: 0;
                width: 0;
                position: absolute;
                pointer-events: none
            }

            .apexcharts-xaxistooltip:after {
                border-color: transparent;
                border-width: 6px;
                margin-left: -6px
            }

            .apexcharts-xaxistooltip:before {
                border-color: transparent;
                border-width: 7px;
                margin-left: -7px
            }

            .apexcharts-xaxistooltip-bottom:after,
            .apexcharts-xaxistooltip-bottom:before {
                bottom: 100%
            }

            .apexcharts-xaxistooltip-top:after,
            .apexcharts-xaxistooltip-top:before {
                top: 100%
            }

            .apexcharts-xaxistooltip-bottom:after {
                border-bottom-color: #eceff1
            }

            .apexcharts-xaxistooltip-bottom:before {
                border-bottom-color: #90a4ae
            }

            .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after,
            .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
                border-bottom-color: rgba(0, 0, 0, .5)
            }

            .apexcharts-xaxistooltip-top:after {
                border-top-color: #eceff1
            }

            .apexcharts-xaxistooltip-top:before {
                border-top-color: #90a4ae
            }

            .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after,
            .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
                border-top-color: rgba(0, 0, 0, .5)
            }

            .apexcharts-xaxistooltip.apexcharts-active {
                opacity: 1;
                transition: .15s ease all
            }

            .apexcharts-yaxistooltip {
                padding: 4px 10px
            }

            .apexcharts-yaxistooltip.apexcharts-theme-dark {
                background: rgba(0, 0, 0, .7);
                border: 1px solid rgba(0, 0, 0, .5);
                color: #fff
            }

            .apexcharts-yaxistooltip:after,
            .apexcharts-yaxistooltip:before {
                top: 50%;
                border: solid transparent;
                content: " ";
                height: 0;
                width: 0;
                position: absolute;
                pointer-events: none
            }

            .apexcharts-yaxistooltip:after {
                border-color: transparent;
                border-width: 6px;
                margin-top: -6px
            }

            .apexcharts-yaxistooltip:before {
                border-color: transparent;
                border-width: 7px;
                margin-top: -7px
            }

            .apexcharts-yaxistooltip-left:after,
            .apexcharts-yaxistooltip-left:before {
                left: 100%
            }

            .apexcharts-yaxistooltip-right:after,
            .apexcharts-yaxistooltip-right:before {
                right: 100%
            }

            .apexcharts-yaxistooltip-left:after {
                border-left-color: #eceff1
            }

            .apexcharts-yaxistooltip-left:before {
                border-left-color: #90a4ae
            }

            .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after,
            .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
                border-left-color: rgba(0, 0, 0, .5)
            }

            .apexcharts-yaxistooltip-right:after {
                border-right-color: #eceff1
            }

            .apexcharts-yaxistooltip-right:before {
                border-right-color: #90a4ae
            }

            .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after,
            .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
                border-right-color: rgba(0, 0, 0, .5)
            }

            .apexcharts-yaxistooltip.apexcharts-active {
                opacity: 1
            }

            .apexcharts-yaxistooltip-hidden {
                display: none
            }

            .apexcharts-xcrosshairs,
            .apexcharts-ycrosshairs {
                pointer-events: none;
                opacity: 0;
                transition: .15s ease all
            }

            .apexcharts-xcrosshairs.apexcharts-active,
            .apexcharts-ycrosshairs.apexcharts-active {
                opacity: 1;
                transition: .15s ease all
            }

            .apexcharts-ycrosshairs-hidden {
                opacity: 0
            }

            .apexcharts-selection-rect {
                cursor: move
            }

            .svg_select_boundingRect,
            .svg_select_points_rot {
                pointer-events: none;
                opacity: 0;
                visibility: hidden
            }

            .apexcharts-selection-rect+g .svg_select_boundingRect,
            .apexcharts-selection-rect+g .svg_select_points_rot {
                opacity: 0;
                visibility: hidden
            }

            .apexcharts-selection-rect+g .svg_select_points_l,
            .apexcharts-selection-rect+g .svg_select_points_r {
                cursor: ew-resize;
                opacity: 1;
                visibility: visible
            }

            .svg_select_points {
                fill: #efefef;
                stroke: #333;
                rx: 2
            }

            .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
                cursor: crosshair
            }

            .apexcharts-svg.apexcharts-zoomable.hovering-pan {
                cursor: move
            }

            .apexcharts-menu-icon,
            .apexcharts-pan-icon,
            .apexcharts-reset-icon,
            .apexcharts-selection-icon,
            .apexcharts-toolbar-custom-icon,
            .apexcharts-zoom-icon,
            .apexcharts-zoomin-icon,
            .apexcharts-zoomout-icon {
                cursor: pointer;
                width: 20px;
                height: 20px;
                line-height: 24px;
                color: #6e8192;
                text-align: center
            }

            .apexcharts-menu-icon svg,
            .apexcharts-reset-icon svg,
            .apexcharts-zoom-icon svg,
            .apexcharts-zoomin-icon svg,
            .apexcharts-zoomout-icon svg {
                fill: #6e8192
            }

            .apexcharts-selection-icon svg {
                fill: #444;
                transform: scale(.76)
            }

            .apexcharts-theme-dark .apexcharts-menu-icon svg,
            .apexcharts-theme-dark .apexcharts-pan-icon svg,
            .apexcharts-theme-dark .apexcharts-reset-icon svg,
            .apexcharts-theme-dark .apexcharts-selection-icon svg,
            .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg,
            .apexcharts-theme-dark .apexcharts-zoom-icon svg,
            .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
            .apexcharts-theme-dark .apexcharts-zoomout-icon svg {
                fill: #f3f4f5
            }

            .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg,
            .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
            .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg {
                fill: #008ffb
            }

            .apexcharts-theme-light .apexcharts-menu-icon:hover svg,
            .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
            .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
            .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
            .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
            .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg {
                fill: #333
            }

            .apexcharts-menu-icon,
            .apexcharts-selection-icon {
                position: relative
            }

            .apexcharts-reset-icon {
                margin-left: 5px
            }

            .apexcharts-menu-icon,
            .apexcharts-reset-icon,
            .apexcharts-zoom-icon {
                transform: scale(.85)
            }

            .apexcharts-zoomin-icon,
            .apexcharts-zoomout-icon {
                transform: scale(.7)
            }

            .apexcharts-zoomout-icon {
                margin-right: 3px
            }

            .apexcharts-pan-icon {
                transform: scale(.62);
                position: relative;
                left: 1px;
                top: 0
            }

            .apexcharts-pan-icon svg {
                fill: #fff;
                stroke: #6e8192;
                stroke-width: 2
            }

            .apexcharts-pan-icon.apexcharts-selected svg {
                stroke: #008ffb
            }

            .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
                stroke: #333
            }

            .apexcharts-toolbar {
                position: absolute;
                z-index: 11;
                max-width: 176px;
                text-align: right;
                border-radius: 3px;
                padding: 0 6px 2px;
                display: flex;
                justify-content: space-between;
                align-items: center
            }

            .apexcharts-menu {
                background: #fff;
                position: absolute;
                top: 100%;
                border: 1px solid #ddd;
                border-radius: 3px;
                padding: 3px;
                right: 10px;
                opacity: 0;
                min-width: 110px;
                transition: .15s ease all;
                pointer-events: none
            }

            .apexcharts-menu.apexcharts-menu-open {
                opacity: 1;
                pointer-events: all;
                transition: .15s ease all
            }

            .apexcharts-menu-item {
                padding: 6px 7px;
                font-size: 12px;
                cursor: pointer
            }

            .apexcharts-theme-light .apexcharts-menu-item:hover {
                background: #eee
            }

            .apexcharts-theme-dark .apexcharts-menu {
                background: rgba(0, 0, 0, .7);
                color: #fff
            }

            @media screen and (min-width:768px) {
                .apexcharts-canvas:hover .apexcharts-toolbar {
                    opacity: 1
                }
            }

            .apexcharts-canvas .apexcharts-element-hidden,
            .apexcharts-datalabel.apexcharts-element-hidden,
            .apexcharts-hide .apexcharts-series-points {
                opacity: 0
            }

            .apexcharts-hidden-element-shown {
                opacity: 1;
                transition: 0.25s ease all;
            }

            .apexcharts-datalabel,
            .apexcharts-datalabel-label,
            .apexcharts-datalabel-value,
            .apexcharts-datalabels,
            .apexcharts-pie-label {
                cursor: default;
                pointer-events: none
            }

            .apexcharts-pie-label-delay {
                opacity: 0;
                animation-name: opaque;
                animation-duration: .3s;
                animation-fill-mode: forwards;
                animation-timing-function: ease
            }

            .apexcharts-radialbar-label {
                cursor: pointer;
            }

            .apexcharts-annotation-rect,
            .apexcharts-area-series .apexcharts-area,
            .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
            .apexcharts-gridline,
            .apexcharts-line,
            .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
            .apexcharts-point-annotation-label,
            .apexcharts-radar-series path,
            .apexcharts-radar-series polygon,
            .apexcharts-toolbar svg,
            .apexcharts-tooltip .apexcharts-marker,
            .apexcharts-xaxis-annotation-label,
            .apexcharts-yaxis-annotation-label,
            .apexcharts-zoom-rect {
                pointer-events: none
            }

            .apexcharts-marker {
                transition: .15s ease all
            }

            .resize-triggers {
                animation: 1ms resizeanim;
                visibility: hidden;
                opacity: 0;
                height: 100%;
                width: 100%;
                overflow: hidden
            }

            .contract-trigger:before,
            .resize-triggers,
            .resize-triggers>div {
                content: " ";
                display: block;
                position: absolute;
                top: 0;
                left: 0
            }

            .resize-triggers>div {
                height: 100%;
                width: 100%;
                background: #eee;
                overflow: auto
            }

            .contract-trigger:before {
                overflow: hidden;
                width: 200%;
                height: 200%
            }

            .apexcharts-bar-goals-markers {
                pointer-events: none
            }

            .apexcharts-bar-shadows {
                pointer-events: none
            }

            .apexcharts-rangebar-goals-markers {
                pointer-events: none
            }
        </style>
    </head>

    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">

            <div class="d-flex align-items-center justify-content-between">
                <a href="{{ url('admin/dashboard') }}" class="logo d-flex align-items-center">
                    <img src="assets/img/logo.png" alt="">
                    <span class="d-none d-lg-block">Blog</span>
                </a>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- End Logo -->


            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link nav-icon search-bar-toggle " href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li><!-- End Search Icon-->

                    <li class="nav-item dropdown">

                        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                            <i class="bi bi-bell"></i>
                            <span class="badge bg-primary badge-number">4</span>
                        </a><!-- End Notification Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                            <li class="dropdown-header">
                                You have 4 new notifications
                                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View
                                        all</span></a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="notification-item">
                                <i class="bi bi-exclamation-circle text-warning"></i>
                                <div>
                                    <h4>Lorem Ipsum</h4>
                                    <p>Quae dolorem earum veritatis oditseno</p>
                                    <p>30 min. ago</p>
                                </div>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="notification-item">
                                <i class="bi bi-x-circle text-danger"></i>
                                <div>
                                    <h4>Atque rerum nesciunt</h4>
                                    <p>Quae dolorem earum veritatis oditseno</p>
                                    <p>1 hr. ago</p>
                                </div>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="notification-item">
                                <i class="bi bi-check-circle text-success"></i>
                                <div>
                                    <h4>Sit rerum fuga</h4>
                                    <p>Quae dolorem earum veritatis oditseno</p>
                                    <p>2 hrs. ago</p>
                                </div>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="notification-item">
                                <i class="bi bi-info-circle text-primary"></i>
                                <div>
                                    <h4>Dicta reprehenderit</h4>
                                    <p>Quae dolorem earum veritatis oditseno</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="dropdown-footer">
                                <a href="#">Show all notifications</a>
                            </li>

                        </ul><!-- End Notification Dropdown Items -->

                    </li><!-- End Notification Nav -->

                    <li class="nav-item dropdown">

                        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                            <i class="bi bi-chat-left-text"></i>
                            <span class="badge bg-success badge-number">3</span>
                        </a><!-- End Messages Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                            <li class="dropdown-header">
                                You have 3 new messages
                                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View
                                        all</span></a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="message-item">
                                <a href="#">
                                    <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                                    <div>
                                        <h4>Maria Hudson</h4>
                                        <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                        <p>4 hrs. ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="message-item">
                                <a href="#">
                                    <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                                    <div>
                                        <h4>Anna Nelson</h4>
                                        <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                        <p>6 hrs. ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="message-item">
                                <a href="#">
                                    <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                                    <div>
                                        <h4>David Muldon</h4>
                                        <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                        <p>8 hrs. ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="dropdown-footer">
                                <a href="#">Show all messages</a>
                            </li>

                        </ul><!-- End Messages Dropdown Items -->

                    </li><!-- End Messages Nav -->

                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                            data-bs-toggle="dropdown">
                            <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="Profile"
                                class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="">
                                    <i class="bi bi-gear"></i>
                                    <span>Account Settings</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="">
                                    <i class="bi bi-question-circle"></i>
                                    <span>Need Help?</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ url('/logout') }}">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </nav>

        </header>
        <!-- End Header -->

        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">

            <ul class="sidebar-nav" id="sidebar-nav">

                <li class="nav-item">
                    <a class="nav-link " href="index.html">
                        <i class="bi bi-grid"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="">
                        <i class="bi bi-person"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('admin/users/list') }}">
                        <i class="bi bi-person"></i>
                        <span>Users</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('admin/category/list') }}">
                        <i class="bi bi-person"></i>
                        <span>Category</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('admin/blog/list') }}">
                        <i class="bi bi-person"></i>
                        <span>Blog</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('admin/hlep/list') }}">
                        <i class="bi bi-question-circle"></i>
                        <span>Help</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="">
                        <i class="bi bi-envelope"></i>
                        <span>Inbox</span>
                    </a>
                </li>

            </ul>

        </aside>

        <main id="main" class="main">

            @yield('content')


        </main><!-- End #main -->
        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="copyright">
                © {{ date('Y') }} Copyright <strong><span>Nirob</span></strong>. All Rights Reserved
            </div>
        </footer>

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
        <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
        <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('assets/js/main.js') }}"></script>



        <svg id="SvgjsSvg1169" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
            style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
            <defs id="SvgjsDefs1170"></defs>
            <polyline id="SvgjsPolyline1171" points="0,0"></polyline>
            <path id="SvgjsPath1172"
                d="M-1 271.0000003814697L-1 271.0000003814697C-1 271.0000003814697 118.81153987004207 271.0000003814697 118.81153987004207 271.0000003814697C118.81153987004207 271.0000003814697 198.01923311673679 271.0000003814697 198.01923311673679 271.0000003814697C198.01923311673679 271.0000003814697 277.2269263634315 271.0000003814697 277.2269263634315 271.0000003814697C277.2269263634315 271.0000003814697 356.4346196101262 271.0000003814697 356.4346196101262 271.0000003814697C356.4346196101262 271.0000003814697 435.6423128568209 271.0000003814697 435.6423128568209 271.0000003814697C435.6423128568209 271.0000003814697 514.8500061035156 271.0000003814697 514.8500061035156 271.0000003814697C514.8500061035156 271.0000003814697 514.8500061035156 271.0000003814697 514.8500061035156 271.0000003814697 ">
            </path>
        </svg>
    </body>

    </html>
