@extends('backend.layouts.backend-app')

@section('content')
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Sales <span>| Today</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span
                                                class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Revenue <span>| This Month</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>$3,264</h6>
                                            <span class="text-success small pt-1 fw-bold">8%</span> <span
                                                class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Customers <span>| This Year</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>1244</h6>
                                            <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                                class="text-muted small pt-2 ps-1">decrease</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Reports <span>/Today</span></h5>

                                    <!-- Line Chart -->
                                    <div id="reportsChart" style="min-height: 365px;">
                                        <div id="apexchartsq5dnuo46"
                                            class="apexcharts-canvas apexchartsq5dnuo46 apexcharts-theme-light"
                                            style="width: 565px; height: 350px;"><svg id="SvgjsSvg1174" width="565"
                                                height="350" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)" style="background: transparent;">
                                                <foreignObject x="0" y="0" width="565" height="350">
                                                    <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                                        xmlns="http://www.w3.org/1999/xhtml"
                                                        style="inset: auto 0px 1px; position: absolute; max-height: 175px;">
                                                        <div class="apexcharts-legend-series" style="margin: 2px 5px;"
                                                            rel="1" seriesname="Sales" data:collapsed="false"><span
                                                                class="apexcharts-legend-marker"
                                                                style="background: rgb(65, 84, 241) !important; color: rgb(65, 84, 241); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"
                                                                rel="1" data:collapsed="false"></span><span
                                                                class="apexcharts-legend-text"
                                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"
                                                                rel="1" i="0" data:default-text="Sales"
                                                                data:collapsed="false">Sales</span></div>
                                                        <div class="apexcharts-legend-series" style="margin: 2px 5px;"
                                                            rel="2" seriesname="Revenue" data:collapsed="false"><span
                                                                class="apexcharts-legend-marker"
                                                                style="background: rgb(46, 202, 106) !important; color: rgb(46, 202, 106); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"
                                                                rel="2" data:collapsed="false"></span><span
                                                                class="apexcharts-legend-text"
                                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"
                                                                rel="2" i="1" data:default-text="Revenue"
                                                                data:collapsed="false">Revenue</span></div>
                                                        <div class="apexcharts-legend-series" style="margin: 2px 5px;"
                                                            rel="3" seriesname="Customers" data:collapsed="false"><span
                                                                class="apexcharts-legend-marker"
                                                                style="background: rgb(255, 119, 29) !important; color: rgb(255, 119, 29); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"
                                                                rel="3" data:collapsed="false"></span><span
                                                                class="apexcharts-legend-text"
                                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"
                                                                rel="3" i="2" data:default-text="Customers"
                                                                data:collapsed="false">Customers</span></div>
                                                    </div>
                                                    <style type="text/css">
                                                        .apexcharts-legend {
                                                            display: flex;
                                                            overflow: auto;
                                                            padding: 0 10px;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom,
                                                        .apexcharts-legend.apx-legend-position-top {
                                                            flex-wrap: wrap
                                                        }

                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            flex-direction: column;
                                                            bottom: 0;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            justify-content: flex-start;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                            justify-content: center;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                            justify-content: flex-end;
                                                        }

                                                        .apexcharts-legend-series {
                                                            cursor: pointer;
                                                            line-height: normal;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                                        .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                            display: flex;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend-text {
                                                            position: relative;
                                                            font-size: 14px;
                                                        }

                                                        .apexcharts-legend-text *,
                                                        .apexcharts-legend-marker * {
                                                            pointer-events: none;
                                                        }

                                                        .apexcharts-legend-marker {
                                                            position: relative;
                                                            display: inline-block;
                                                            cursor: pointer;
                                                            margin-right: 3px;
                                                            border-style: solid;
                                                        }

                                                        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                        .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                            display: inline-block;
                                                        }

                                                        .apexcharts-legend-series.apexcharts-no-click {
                                                            cursor: auto;
                                                        }

                                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                                            display: none !important;
                                                        }

                                                        .apexcharts-inactive-legend {
                                                            opacity: 0.45;
                                                        }

                                                    </style>
                                                </foreignObject>
                                                <rect id="SvgjsRect1182" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fefefe"></rect>
                                                <g id="SvgjsG1305" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(10.149993896484375, 0)">
                                                    <g id="SvgjsG1306" class="apexcharts-yaxis-texts-g"><text
                                                            id="SvgjsText1308"
                                                            font-family="Helvetica, Arial, sans-serif" x="20" y="31.9"
                                                            text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1309">90</tspan>
                                                            <title>90</title>
                                                        </text><text id="SvgjsText1311"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="62.011111153496635" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1312">80</tspan>
                                                            <title>80</title>
                                                        </text><text id="SvgjsText1314"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="92.12222230699328" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1315">70</tspan>
                                                            <title>70</title>
                                                        </text><text id="SvgjsText1317"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="122.23333346048992" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1318">60</tspan>
                                                            <title>60</title>
                                                        </text><text id="SvgjsText1320"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="152.34444461398655" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1321">50</tspan>
                                                            <title>50</title>
                                                        </text><text id="SvgjsText1323"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="182.4555557674832" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1324">40</tspan>
                                                            <title>40</title>
                                                        </text><text id="SvgjsText1326"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="212.56666692097983" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1327">30</tspan>
                                                            <title>30</title>
                                                        </text><text id="SvgjsText1329"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="242.67777807447646" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1330">20</tspan>
                                                            <title>20</title>
                                                        </text><text id="SvgjsText1332"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="272.7888892279731" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1333">10</tspan>
                                                            <title>10</title>
                                                        </text><text id="SvgjsText1335"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="302.9000003814697" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1336">0</tspan>
                                                            <title>0</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1176" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(40.149993896484375, 30)">
                                                    <defs id="SvgjsDefs1175">
                                                        <clipPath id="gridRectMaskq5dnuo46">
                                                            <rect id="SvgjsRect1187" width="520.8500061035156"
                                                                height="277.0000003814697" x="-3" y="-3" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskq5dnuo46"></clipPath>
                                                        <clipPath id="nonForecastMaskq5dnuo46"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskq5dnuo46">
                                                            <rect id="SvgjsRect1188" width="562.8500061035156"
                                                                height="319.0000003814697" x="-24" y="-24" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1206" x1="0" y1="0"
                                                            x2="0" y2="1">
                                                            <stop id="SvgjsStop1207" stop-opacity="0.3"
                                                                stop-color="rgba(65,84,241,0.3)" offset="0"></stop>
                                                            <stop id="SvgjsStop1208" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop>
                                                            <stop id="SvgjsStop1209" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="1"></stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient1228" x1="0" y1="0"
                                                            x2="0" y2="1">
                                                            <stop id="SvgjsStop1229" stop-opacity="0.3"
                                                                stop-color="rgba(46,202,106,0.3)" offset="0"></stop>
                                                            <stop id="SvgjsStop1230" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop>
                                                            <stop id="SvgjsStop1231" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="1"></stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient1250" x1="0" y1="0"
                                                            x2="0" y2="1">
                                                            <stop id="SvgjsStop1251" stop-opacity="0.3"
                                                                stop-color="rgba(255,119,29,0.3)" offset="0"></stop>
                                                            <stop id="SvgjsStop1252" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop>
                                                            <stop id="SvgjsStop1253" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <line id="SvgjsLine1183" x1="0" y1="0" x2="0"
                                                        y2="216.15999755859374" stroke="#b6b6b6" stroke-dasharray="3"
                                                        stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                                        width="1" height="216.15999755859374" fill="#b1b9c4"
                                                        filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                    <line id="SvgjsLine1260" x1="0" y1="272.0000003814697" x2="0"
                                                        y2="278.0000003814697" stroke="#e0e0e0" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1261" x1="79.20769324669472"
                                                        y1="272.0000003814697" x2="79.20769324669472"
                                                        y2="278.0000003814697" stroke="#e0e0e0" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1262" x1="158.41538649338943"
                                                        y1="272.0000003814697" x2="158.41538649338943"
                                                        y2="278.0000003814697" stroke="#e0e0e0" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1263" x1="237.62307974008417"
                                                        y1="272.0000003814697" x2="237.62307974008417"
                                                        y2="278.0000003814697" stroke="#e0e0e0" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1264" x1="316.83077298677887"
                                                        y1="272.0000003814697" x2="316.83077298677887"
                                                        y2="278.0000003814697" stroke="#e0e0e0" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1265" x1="396.03846623347357"
                                                        y1="272.0000003814697" x2="396.03846623347357"
                                                        y2="278.0000003814697" stroke="#e0e0e0" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1266" x1="475.2461594801683"
                                                        y1="272.0000003814697" x2="475.2461594801683"
                                                        y2="278.0000003814697" stroke="#e0e0e0" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <g id="SvgjsG1256" class="apexcharts-grid">
                                                        <g id="SvgjsG1257" class="apexcharts-gridlines-horizontal">
                                                            <line id="SvgjsLine1268" x1="0" y1="30.111111153496633"
                                                                x2="514.8500061035156" y2="30.111111153496633"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1269" x1="0" y1="60.22222230699327"
                                                                x2="514.8500061035156" y2="60.22222230699327"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1270" x1="0" y1="90.3333334604899"
                                                                x2="514.8500061035156" y2="90.3333334604899"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1271" x1="0" y1="120.44444461398653"
                                                                x2="514.8500061035156" y2="120.44444461398653"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1272" x1="0" y1="150.55555576748316"
                                                                x2="514.8500061035156" y2="150.55555576748316"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1273" x1="0" y1="180.6666669209798"
                                                                x2="514.8500061035156" y2="180.6666669209798"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1274" x1="0" y1="210.77777807447643"
                                                                x2="514.8500061035156" y2="210.77777807447643"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1275" x1="0" y1="240.88888922797307"
                                                                x2="514.8500061035156" y2="240.88888922797307"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                        </g>
                                                        <g id="SvgjsG1258" class="apexcharts-gridlines-vertical"></g>
                                                        <line id="SvgjsLine1278" x1="0" y1="271.0000003814697"
                                                            x2="514.8500061035156" y2="271.0000003814697"
                                                            stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1277" x1="0" y1="1" x2="0"
                                                            y2="271.0000003814697" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1259" class="apexcharts-grid-borders">
                                                        <line id="SvgjsLine1267" x1="0" y1="0" x2="514.8500061035156"
                                                            y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1276" x1="0" y1="271.0000003814697"
                                                            x2="514.8500061035156" y2="271.0000003814697"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1304" x1="0" y1="272.0000003814697"
                                                            x2="514.8500061035156" y2="272.0000003814697"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1189"
                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG1190" class="apexcharts-series" zIndex="0"
                                                            seriesName="Sales" data:longestSeries="true" rel="1"
                                                            data:realIndex="0">
                                                            <path id="SvgjsPath1210"
                                                                d="M 0 271.0000003814697 L 0 177.65555580563014C 41.584038954514725 177.65555580563014 77.22750091552734 150.55555576748316 118.81153987004207 150.55555576748316C 146.53423250638522 150.55555576748316 170.29654048039365 186.68888915167912 198.01923311673679 186.68888915167912C 225.74192575307995 186.68888915167912 249.50423372708838 117.43333349863687 277.2269263634315 117.43333349863687C 304.94961899977466 117.43333349863687 328.7119269737831 144.53333353678386 356.4346196101262 144.53333353678386C 384.15731224646936 144.53333353678386 407.9196202204778 24.08888892279731 435.6423128568209 24.08888892279731C 463.36500549316406 24.08888892279731 487.1273134671725 102.37777792188857 514.8500061035156 102.37777792188857C 514.8500061035156 102.37777792188857 514.8500061035156 102.37777792188857 514.8500061035156 271.0000003814697M 514.8500061035156 102.37777792188857z"
                                                                fill="url(#SvgjsLinearGradient1206)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMaskq5dnuo46)"
                                                                pathTo="M 0 271.0000003814697 L 0 177.65555580563014C 41.584038954514725 177.65555580563014 77.22750091552734 150.55555576748316 118.81153987004207 150.55555576748316C 146.53423250638522 150.55555576748316 170.29654048039365 186.68888915167912 198.01923311673679 186.68888915167912C 225.74192575307995 186.68888915167912 249.50423372708838 117.43333349863687 277.2269263634315 117.43333349863687C 304.94961899977466 117.43333349863687 328.7119269737831 144.53333353678386 356.4346196101262 144.53333353678386C 384.15731224646936 144.53333353678386 407.9196202204778 24.08888892279731 435.6423128568209 24.08888892279731C 463.36500549316406 24.08888892279731 487.1273134671725 102.37777792188857 514.8500061035156 102.37777792188857C 514.8500061035156 102.37777792188857 514.8500061035156 102.37777792188857 514.8500061035156 271.0000003814697M 514.8500061035156 102.37777792188857z"
                                                                pathFrom="M -1 271.0000003814697 L -1 271.0000003814697 L 118.81153987004207 271.0000003814697 L 198.01923311673679 271.0000003814697 L 277.2269263634315 271.0000003814697 L 356.4346196101262 271.0000003814697 L 435.6423128568209 271.0000003814697 L 514.8500061035156 271.0000003814697">
                                                            </path>
                                                            <path id="SvgjsPath1211"
                                                                d="M 0 177.65555580563014C 41.584038954514725 177.65555580563014 77.22750091552734 150.55555576748316 118.81153987004207 150.55555576748316C 146.53423250638522 150.55555576748316 170.29654048039365 186.68888915167912 198.01923311673679 186.68888915167912C 225.74192575307995 186.68888915167912 249.50423372708838 117.43333349863687 277.2269263634315 117.43333349863687C 304.94961899977466 117.43333349863687 328.7119269737831 144.53333353678386 356.4346196101262 144.53333353678386C 384.15731224646936 144.53333353678386 407.9196202204778 24.08888892279731 435.6423128568209 24.08888892279731C 463.36500549316406 24.08888892279731 487.1273134671725 102.37777792188857 514.8500061035156 102.37777792188857"
                                                                fill="none" fill-opacity="1" stroke="#4154f1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMaskq5dnuo46)"
                                                                pathTo="M 0 177.65555580563014C 41.584038954514725 177.65555580563014 77.22750091552734 150.55555576748316 118.81153987004207 150.55555576748316C 146.53423250638522 150.55555576748316 170.29654048039365 186.68888915167912 198.01923311673679 186.68888915167912C 225.74192575307995 186.68888915167912 249.50423372708838 117.43333349863687 277.2269263634315 117.43333349863687C 304.94961899977466 117.43333349863687 328.7119269737831 144.53333353678386 356.4346196101262 144.53333353678386C 384.15731224646936 144.53333353678386 407.9196202204778 24.08888892279731 435.6423128568209 24.08888892279731C 463.36500549316406 24.08888892279731 487.1273134671725 102.37777792188857 514.8500061035156 102.37777792188857"
                                                                pathFrom="M -1 271.0000003814697 L -1 271.0000003814697 L 118.81153987004207 271.0000003814697 L 198.01923311673679 271.0000003814697 L 277.2269263634315 271.0000003814697 L 356.4346196101262 271.0000003814697 L 435.6423128568209 271.0000003814697 L 514.8500061035156 271.0000003814697"
                                                                fill-rule="evenodd"></path>
                                                            <g id="SvgjsG1191"
                                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                data:realIndex="0">
                                                                <g id="SvgjsG1193" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskq5dnuo46)">
                                                                    <circle id="SvgjsCircle1194" r="4" cx="0"
                                                                        cy="177.65555580563014"
                                                                        class="apexcharts-marker no-pointer-events w5piti4ex"
                                                                        stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="0"
                                                                        j="0" index="0" default-marker-size="4">
                                                                    </circle>
                                                                    <circle id="SvgjsCircle1195" r="4"
                                                                        cx="118.81153987004207" cy="150.55555576748316"
                                                                        class="apexcharts-marker no-pointer-events wvxwlpgev"
                                                                        stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="1"
                                                                        j="1" index="0" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1196" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskq5dnuo46)">
                                                                    <circle id="SvgjsCircle1197" r="4"
                                                                        cx="198.01923311673679" cy="186.68888915167912"
                                                                        class="apexcharts-marker no-pointer-events wimuj2yyq"
                                                                        stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="2"
                                                                        j="2" index="0" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1198" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskq5dnuo46)">
                                                                    <circle id="SvgjsCircle1199" r="4"
                                                                        cx="277.2269263634315" cy="117.43333349863687"
                                                                        class="apexcharts-marker no-pointer-events wl30nat9c"
                                                                        stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="3"
                                                                        j="3" index="0" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1200" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskq5dnuo46)">
                                                                    <circle id="SvgjsCircle1201" r="4"
                                                                        cx="356.4346196101262" cy="144.53333353678386"
                                                                        class="apexcharts-marker no-pointer-events ww4el8gj7"
                                                                        stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="4"
                                                                        j="4" index="0" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1202" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskq5dnuo46)">
                                                                    <circle id="SvgjsCircle1203" r="4"
                                                                        cx="435.6423128568209" cy="24.08888892279731"
                                                                        class="apexcharts-marker no-pointer-events wcqoijjc8"
                                                                        stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="5"
                                                                        j="5" index="0" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1204" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskq5dnuo46)">
                                                                    <circle id="SvgjsCircle1205" r="4"
                                                                        cx="514.8500061035156" cy="102.37777792188857"
                                                                        class="apexcharts-marker no-pointer-events wbj3uqb2k"
                                                                        stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="6"
                                                                        j="6" index="0" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1212" class="apexcharts-series" zIndex="1"
                                                            seriesName="Revenue" data:longestSeries="true" rel="2"
                                                            data:realIndex="1">
                                                            <path id="SvgjsPath1232"
                                                                d="M 0 271.0000003814697 L 0 237.87777811262342C 41.584038954514725 237.87777811262342 77.22750091552734 174.64444469028047 118.81153987004207 174.64444469028047C 146.53423250638522 174.64444469028047 170.29654048039365 135.50000019073485 198.01923311673679 135.50000019073485C 225.74192575307995 135.50000019073485 249.50423372708838 174.64444469028047 277.2269263634315 174.64444469028047C 304.94961899977466 174.64444469028047 328.7119269737831 168.62222245958117 356.4346196101262 168.62222245958117C 384.15731224646936 168.62222245958117 407.9196202204778 114.42222238328722 435.6423128568209 114.42222238328722C 463.36500549316406 114.42222238328722 487.1273134671725 147.5444446521335 514.8500061035156 147.5444446521335C 514.8500061035156 147.5444446521335 514.8500061035156 147.5444446521335 514.8500061035156 271.0000003814697M 514.8500061035156 147.5444446521335z"
                                                                fill="url(#SvgjsLinearGradient1228)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-area" index="1"
                                                                clip-path="url(#gridRectMaskq5dnuo46)"
                                                                pathTo="M 0 271.0000003814697 L 0 237.87777811262342C 41.584038954514725 237.87777811262342 77.22750091552734 174.64444469028047 118.81153987004207 174.64444469028047C 146.53423250638522 174.64444469028047 170.29654048039365 135.50000019073485 198.01923311673679 135.50000019073485C 225.74192575307995 135.50000019073485 249.50423372708838 174.64444469028047 277.2269263634315 174.64444469028047C 304.94961899977466 174.64444469028047 328.7119269737831 168.62222245958117 356.4346196101262 168.62222245958117C 384.15731224646936 168.62222245958117 407.9196202204778 114.42222238328722 435.6423128568209 114.42222238328722C 463.36500549316406 114.42222238328722 487.1273134671725 147.5444446521335 514.8500061035156 147.5444446521335C 514.8500061035156 147.5444446521335 514.8500061035156 147.5444446521335 514.8500061035156 271.0000003814697M 514.8500061035156 147.5444446521335z"
                                                                pathFrom="M -1 271.0000003814697 L -1 271.0000003814697 L 118.81153987004207 271.0000003814697 L 198.01923311673679 271.0000003814697 L 277.2269263634315 271.0000003814697 L 356.4346196101262 271.0000003814697 L 435.6423128568209 271.0000003814697 L 514.8500061035156 271.0000003814697">
                                                            </path>
                                                            <path id="SvgjsPath1233"
                                                                d="M 0 237.87777811262342C 41.584038954514725 237.87777811262342 77.22750091552734 174.64444469028047 118.81153987004207 174.64444469028047C 146.53423250638522 174.64444469028047 170.29654048039365 135.50000019073485 198.01923311673679 135.50000019073485C 225.74192575307995 135.50000019073485 249.50423372708838 174.64444469028047 277.2269263634315 174.64444469028047C 304.94961899977466 174.64444469028047 328.7119269737831 168.62222245958117 356.4346196101262 168.62222245958117C 384.15731224646936 168.62222245958117 407.9196202204778 114.42222238328722 435.6423128568209 114.42222238328722C 463.36500549316406 114.42222238328722 487.1273134671725 147.5444446521335 514.8500061035156 147.5444446521335"
                                                                fill="none" fill-opacity="1" stroke="#2eca6a"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-area" index="1"
                                                                clip-path="url(#gridRectMaskq5dnuo46)"
                                                                pathTo="M 0 237.87777811262342C 41.584038954514725 237.87777811262342 77.22750091552734 174.64444469028047 118.81153987004207 174.64444469028047C 146.53423250638522 174.64444469028047 170.29654048039365 135.50000019073485 198.01923311673679 135.50000019073485C 225.74192575307995 135.50000019073485 249.50423372708838 174.64444469028047 277.2269263634315 174.64444469028047C 304.94961899977466 174.64444469028047 328.7119269737831 168.62222245958117 356.4346196101262 168.62222245958117C 384.15731224646936 168.62222245958117 407.9196202204778 114.42222238328722 435.6423128568209 114.42222238328722C 463.36500549316406 114.42222238328722 487.1273134671725 147.5444446521335 514.8500061035156 147.5444446521335"
                                                                pathFrom="M -1 271.0000003814697 L -1 271.0000003814697 L 118.81153987004207 271.0000003814697 L 198.01923311673679 271.0000003814697 L 277.2269263634315 271.0000003814697 L 356.4346196101262 271.0000003814697 L 435.6423128568209 271.0000003814697 L 514.8500061035156 271.0000003814697"
                                                                fill-rule="evenodd"></path>
                                                            <g id="SvgjsG1213"
                                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                data:realIndex="1">
                                                                <g id="SvgjsG1215" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskq5dnuo46)">
                                                                    <circle id="SvgjsCircle1216" r="4" cx="0"
                                                                        cy="237.87777811262342"
                                                                        class="apexcharts-marker no-pointer-events wnslzilk1"
                                                                        stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="0"
                                                                        j="0" index="1" default-marker-size="4">
                                                                    </circle>
                                                                    <circle id="SvgjsCircle1217" r="4"
                                                                        cx="118.81153987004207" cy="174.64444469028047"
                                                                        class="apexcharts-marker no-pointer-events wkdidu9x1"
                                                                        stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="1"
                                                                        j="1" index="1" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1218" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskq5dnuo46)">
                                                                    <circle id="SvgjsCircle1219" r="4"
                                                                        cx="198.01923311673679" cy="135.50000019073485"
                                                                        class="apexcharts-marker no-pointer-events w6yw7kq2a"
                                                                        stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="2"
                                                                        j="2" index="1" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1220" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskq5dnuo46)">
                                                                    <circle id="SvgjsCircle1221" r="4"
                                                                        cx="277.2269263634315" cy="174.64444469028047"
                                                                        class="apexcharts-marker no-pointer-events wqpf4ef1"
                                                                        stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="3"
                                                                        j="3" index="1" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1222" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskq5dnuo46)">
                                                                    <circle id="SvgjsCircle1223" r="4"
                                                                        cx="356.4346196101262" cy="168.62222245958117"
                                                                        class="apexcharts-marker no-pointer-events wgw2zw5ut"
                                                                        stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="4"
                                                                        j="4" index="1" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1224" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskq5dnuo46)">
                                                                    <circle id="SvgjsCircle1225" r="4"
                                                                        cx="435.6423128568209" cy="114.42222238328722"
                                                                        class="apexcharts-marker no-pointer-events w3by0owpu"
                                                                        stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="5"
                                                                        j="5" index="1" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1226" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskq5dnuo46)">
                                                                    <circle id="SvgjsCircle1227" r="4"
                                                                        cx="514.8500061035156" cy="147.5444446521335"
                                                                        class="apexcharts-marker no-pointer-events wqt8k4ekd"
                                                                        stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="6"
                                                                        j="6" index="1" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1234" class="apexcharts-series" zIndex="2"
                                                            seriesName="Customers" data:longestSeries="true" rel="3"
                                                            data:realIndex="2">
                                                            <path id="SvgjsPath1254"
                                                                d="M 0 271.0000003814697 L 0 225.83333365122476C 41.584038954514725 225.83333365122476 77.22750091552734 237.87777811262342 118.81153987004207 237.87777811262342C 146.53423250638522 237.87777811262342 170.29654048039365 174.64444469028047 198.01923311673679 174.64444469028047C 225.74192575307995 174.64444469028047 249.50423372708838 216.80000030517576 277.2269263634315 216.80000030517576C 304.94961899977466 216.80000030517576 328.7119269737831 243.90000034332274 356.4346196101262 243.90000034332274C 384.15731224646936 243.90000034332274 407.9196202204778 198.73333361307778 435.6423128568209 198.73333361307778C 463.36500549316406 198.73333361307778 487.1273134671725 237.87777811262342 514.8500061035156 237.87777811262342C 514.8500061035156 237.87777811262342 514.8500061035156 237.87777811262342 514.8500061035156 271.0000003814697M 514.8500061035156 237.87777811262342z"
                                                                fill="url(#SvgjsLinearGradient1250)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-area" index="2"
                                                                clip-path="url(#gridRectMaskq5dnuo46)"
                                                                pathTo="M 0 271.0000003814697 L 0 225.83333365122476C 41.584038954514725 225.83333365122476 77.22750091552734 237.87777811262342 118.81153987004207 237.87777811262342C 146.53423250638522 237.87777811262342 170.29654048039365 174.64444469028047 198.01923311673679 174.64444469028047C 225.74192575307995 174.64444469028047 249.50423372708838 216.80000030517576 277.2269263634315 216.80000030517576C 304.94961899977466 216.80000030517576 328.7119269737831 243.90000034332274 356.4346196101262 243.90000034332274C 384.15731224646936 243.90000034332274 407.9196202204778 198.73333361307778 435.6423128568209 198.73333361307778C 463.36500549316406 198.73333361307778 487.1273134671725 237.87777811262342 514.8500061035156 237.87777811262342C 514.8500061035156 237.87777811262342 514.8500061035156 237.87777811262342 514.8500061035156 271.0000003814697M 514.8500061035156 237.87777811262342z"
                                                                pathFrom="M -1 271.0000003814697 L -1 271.0000003814697 L 118.81153987004207 271.0000003814697 L 198.01923311673679 271.0000003814697 L 277.2269263634315 271.0000003814697 L 356.4346196101262 271.0000003814697 L 435.6423128568209 271.0000003814697 L 514.8500061035156 271.0000003814697">
                                                            </path>
                                                            <path id="SvgjsPath1255"
                                                                d="M 0 225.83333365122476C 41.584038954514725 225.83333365122476 77.22750091552734 237.87777811262342 118.81153987004207 237.87777811262342C 146.53423250638522 237.87777811262342 170.29654048039365 174.64444469028047 198.01923311673679 174.64444469028047C 225.74192575307995 174.64444469028047 249.50423372708838 216.80000030517576 277.2269263634315 216.80000030517576C 304.94961899977466 216.80000030517576 328.7119269737831 243.90000034332274 356.4346196101262 243.90000034332274C 384.15731224646936 243.90000034332274 407.9196202204778 198.73333361307778 435.6423128568209 198.73333361307778C 463.36500549316406 198.73333361307778 487.1273134671725 237.87777811262342 514.8500061035156 237.87777811262342"
                                                                fill="none" fill-opacity="1" stroke="#ff771d"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-area" index="2"
                                                                clip-path="url(#gridRectMaskq5dnuo46)"
                                                                pathTo="M 0 225.83333365122476C 41.584038954514725 225.83333365122476 77.22750091552734 237.87777811262342 118.81153987004207 237.87777811262342C 146.53423250638522 237.87777811262342 170.29654048039365 174.64444469028047 198.01923311673679 174.64444469028047C 225.74192575307995 174.64444469028047 249.50423372708838 216.80000030517576 277.2269263634315 216.80000030517576C 304.94961899977466 216.80000030517576 328.7119269737831 243.90000034332274 356.4346196101262 243.90000034332274C 384.15731224646936 243.90000034332274 407.9196202204778 198.73333361307778 435.6423128568209 198.73333361307778C 463.36500549316406 198.73333361307778 487.1273134671725 237.87777811262342 514.8500061035156 237.87777811262342"
                                                                pathFrom="M -1 271.0000003814697 L -1 271.0000003814697 L 118.81153987004207 271.0000003814697 L 198.01923311673679 271.0000003814697 L 277.2269263634315 271.0000003814697 L 356.4346196101262 271.0000003814697 L 435.6423128568209 271.0000003814697 L 514.8500061035156 271.0000003814697"
                                                                fill-rule="evenodd"></path>
                                                            <g id="SvgjsG1235"
                                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                data:realIndex="2">
                                                                <g id="SvgjsG1237" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskq5dnuo46)">
                                                                    <circle id="SvgjsCircle1238" r="4" cx="0"
                                                                        cy="225.83333365122476"
                                                                        class="apexcharts-marker no-pointer-events w1dcixazj"
                                                                        stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="0"
                                                                        j="0" index="2" default-marker-size="4">
                                                                    </circle>
                                                                    <circle id="SvgjsCircle1239" r="4"
                                                                        cx="118.81153987004207" cy="237.87777811262342"
                                                                        class="apexcharts-marker no-pointer-events wr7ebsq5r"
                                                                        stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="1"
                                                                        j="1" index="2" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1240" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskq5dnuo46)">
                                                                    <circle id="SvgjsCircle1241" r="4"
                                                                        cx="198.01923311673679" cy="174.64444469028047"
                                                                        class="apexcharts-marker no-pointer-events ww42skm5g"
                                                                        stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="2"
                                                                        j="2" index="2" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1242" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskq5dnuo46)">
                                                                    <circle id="SvgjsCircle1243" r="4"
                                                                        cx="277.2269263634315" cy="216.80000030517576"
                                                                        class="apexcharts-marker no-pointer-events wzqij7y1i"
                                                                        stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="3"
                                                                        j="3" index="2" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1244" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskq5dnuo46)">
                                                                    <circle id="SvgjsCircle1245" r="4"
                                                                        cx="356.4346196101262" cy="243.90000034332274"
                                                                        class="apexcharts-marker no-pointer-events wqpgvw9sy"
                                                                        stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="4"
                                                                        j="4" index="2" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1246" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskq5dnuo46)">
                                                                    <circle id="SvgjsCircle1247" r="4"
                                                                        cx="435.6423128568209" cy="198.73333361307778"
                                                                        class="apexcharts-marker no-pointer-events wl6sje54j"
                                                                        stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="5"
                                                                        j="5" index="2" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1248" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskq5dnuo46)">
                                                                    <circle id="SvgjsCircle1249" r="4"
                                                                        cx="514.8500061035156" cy="237.87777811262342"
                                                                        class="apexcharts-marker no-pointer-events wtq3rv605"
                                                                        stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="6"
                                                                        j="6" index="2" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1192" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                        <g id="SvgjsG1214" class="apexcharts-datalabels"
                                                            data:realIndex="1"></g>
                                                        <g id="SvgjsG1236" class="apexcharts-datalabels"
                                                            data:realIndex="2"></g>
                                                    </g>
                                                    <line id="SvgjsLine1279" x1="0" y1="0" x2="514.8500061035156" y2="0"
                                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1280" x1="0" y1="0" x2="514.8500061035156" y2="0"
                                                        stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1281" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1282" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"><text id="SvgjsText1284"
                                                                font-family="Helvetica, Arial, sans-serif" x="0"
                                                                y="300.0000003814697" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1285">00:00</tspan>
                                                                <title>00:00</title>
                                                            </text><text id="SvgjsText1287"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="79.20769324669472" y="300.0000003814697"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1288">01:00</tspan>
                                                                <title>01:00</title>
                                                            </text><text id="SvgjsText1290"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="158.41538649338943" y="300.0000003814697"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1291">02:00</tspan>
                                                                <title>02:00</title>
                                                            </text><text id="SvgjsText1293"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="237.62307974008417" y="300.0000003814697"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1294">03:00</tspan>
                                                                <title>03:00</title>
                                                            </text><text id="SvgjsText1296"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="316.83077298677887" y="300.0000003814697"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1297">04:00</tspan>
                                                                <title>04:00</title>
                                                            </text><text id="SvgjsText1299"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="396.03846623347357" y="300.0000003814697"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1300">05:00</tspan>
                                                                <title>05:00</title>
                                                            </text><text id="SvgjsText1302"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="475.2461594801683" y="300.0000003814697"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1303">06:00</tspan>
                                                                <title>06:00</title>
                                                            </text></g>
                                                    </g>
                                                    <g id="SvgjsG1337" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1338" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1339" class="apexcharts-point-annotations"></g>
                                                    <rect id="SvgjsRect1340" width="0" height="0" x="0" y="0" rx="0"
                                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fefefe"
                                                        class="apexcharts-zoom-rect"></rect>
                                                    <rect id="SvgjsRect1341" width="0" height="0" x="0" y="0" rx="0"
                                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fefefe"
                                                        class="apexcharts-selection-rect"></rect>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(65, 84, 241);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(46, 202, 106);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(255, 119, 29);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                                <div class="apexcharts-xaxistooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new ApexCharts(document.querySelector("#reportsChart"), {
                                                series: [{
                                                    name: 'Sales',
                                                    data: [31, 40, 28, 51, 42, 82, 56],
                                                }, {
                                                    name: 'Revenue',
                                                    data: [11, 32, 45, 32, 34, 52, 41]
                                                }, {
                                                    name: 'Customers',
                                                    data: [15, 11, 32, 18, 9, 24, 11]
                                                }],
                                                chart: {
                                                    height: 350,
                                                    type: 'area',
                                                    toolbar: {
                                                        show: false
                                                    },
                                                },
                                                markers: {
                                                    size: 4
                                                },
                                                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                                fill: {
                                                    type: "gradient",
                                                    gradient: {
                                                        shadeIntensity: 1,
                                                        opacityFrom: 0.3,
                                                        opacityTo: 0.4,
                                                        stops: [0, 90, 100]
                                                    }
                                                },
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                stroke: {
                                                    curve: 'smooth',
                                                    width: 2
                                                },
                                                xaxis: {
                                                    type: 'datetime',
                                                    categories: ["2018-09-19T00:00:00.000Z",
                                                        "2018-09-19T01:30:00.000Z",
                                                        "2018-09-19T02:30:00.000Z",
                                                        "2018-09-19T03:30:00.000Z",
                                                        "2018-09-19T04:30:00.000Z",
                                                        "2018-09-19T05:30:00.000Z",
                                                        "2018-09-19T06:30:00.000Z"
                                                    ]
                                                },
                                                tooltip: {
                                                    x: {
                                                        format: 'dd/MM/yy HH:mm'
                                                    },
                                                }
                                            }).render();
                                        });

                                    </script>
                                    <!-- End Line Chart -->

                                </div>

                            </div>
                        </div><!-- End Reports -->

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                                    <div
                                        class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                                        <div class="datatable-top">
                                            <div class="datatable-dropdown">
                                                <label>
                                                    <select class="datatable-selector">
                                                        <option value="5">5</option>
                                                        <option value="10" selected="">10</option>
                                                        <option value="15">15</option>
                                                        <option value="-1">All</option>
                                                    </select> entries per page
                                                </label>
                                            </div>
                                            <div class="datatable-search">
                                                <input class="datatable-input" placeholder="Search..." type="search"
                                                    title="Search within table">
                                            </div>
                                        </div>
                                        <div class="datatable-container">
                                            <table class="table table-borderless datatable datatable-table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" data-sortable="true"
                                                            style="width: 10.777385159010601%;"><button
                                                                class="datatable-sorter">#</button></th>
                                                        <th scope="col" data-sortable="true"
                                                            style="width: 23.674911660777383%;"><button
                                                                class="datatable-sorter">Customer</button></th>
                                                        <th scope="col" data-sortable="true"
                                                            style="width: 39.57597173144876%;"><button
                                                                class="datatable-sorter">Product</button></th>
                                                        <th scope="col" data-sortable="true"
                                                            style="width: 11.130742049469964%;"><button
                                                                class="datatable-sorter">Price</button></th>
                                                        <th scope="col" data-sortable="true" class="red"
                                                            style="width: 14.840989399293287%;"><button
                                                                class="datatable-sorter">Status</button></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-index="0">
                                                        <td scope="row"><a href="#">#2457</a></td>
                                                        <td>Brandon Jacob</td>
                                                        <td><a href="#" class="text-primary">At praesentium minu</a>
                                                        </td>
                                                        <td>$64</td>
                                                        <td class="green"><span class="badge bg-success">Approved</span>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="1">
                                                        <td scope="row"><a href="#">#2147</a></td>
                                                        <td>Bridie Kessler</td>
                                                        <td><a href="#" class="text-primary">Blanditiis dolor omnis
                                                                similique</a></td>
                                                        <td>$47</td>
                                                        <td class="green"><span class="badge bg-warning">Pending</span>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="2">
                                                        <td scope="row"><a href="#">#2049</a></td>
                                                        <td>Ashleigh Langosh</td>
                                                        <td><a href="#" class="text-primary">At recusandae
                                                                consectetur</a></td>
                                                        <td>$147</td>
                                                        <td class="green"><span class="badge bg-success">Approved</span>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="3">
                                                        <td scope="row"><a href="#">#2644</a></td>
                                                        <td>Angus Grady</td>
                                                        <td><a href="#" class="text-primar">Ut voluptatem id earum
                                                                et</a></td>
                                                        <td>$67</td>
                                                        <td class="green"><span class="badge bg-danger">Rejected</span>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="4">
                                                        <td scope="row"><a href="#">#2644</a></td>
                                                        <td>Raheem Lehner</td>
                                                        <td><a href="#" class="text-primary">Sunt similique
                                                                distinctio</a></td>
                                                        <td>$165</td>
                                                        <td class="green"><span class="badge bg-success">Approved</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="datatable-bottom">
                                            <div class="datatable-info">Showing 1 to 5 of 5 entries</div>
                                            <nav class="datatable-pagination">
                                                <ul class="datatable-pagination-list"></ul>
                                            </nav>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                        <!-- Top Selling -->
                        <div class="col-12">
                            <div class="card top-selling overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body pb-0">
                                    <h5 class="card-title">Top Selling <span>| Today</span></h5>

                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Preview</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Sold</th>
                                                <th scope="col">Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-1.jpg"
                                                            alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas
                                                        nulla</a></td>
                                                <td>$64</td>
                                                <td class="fw-bold">124</td>
                                                <td>$5,828</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-2.jpg"
                                                            alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Exercitationem similique
                                                        doloremque</a></td>
                                                <td>$46</td>
                                                <td class="fw-bold">98</td>
                                                <td>$4,508</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-3.jpg"
                                                            alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Doloribus nisi
                                                        exercitationem</a></td>
                                                <td>$59</td>
                                                <td class="fw-bold">74</td>
                                                <td>$4,366</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-4.jpg"
                                                            alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum
                                                        error</a></td>
                                                <td>$32</td>
                                                <td class="fw-bold">63</td>
                                                <td>$2,016</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-5.jpg"
                                                            alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus
                                                        repellendus</a></td>
                                                <td>$79</td>
                                                <td class="fw-bold">41</td>
                                                <td>$3,239</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Top Selling -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- Recent Activity -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                            <div class="activity">

                                <div class="activity-item d-flex">
                                    <div class="activite-label">32 min</div>
                                    <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
                                    <div class="activity-content">
                                        Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a>
                                        beatae
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">56 min</div>
                                    <i class="bi bi-circle-fill activity-badge text-danger align-self-start"></i>
                                    <div class="activity-content">
                                        Voluptatem blanditiis blanditiis eveniet
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">2 hrs</div>
                                    <i class="bi bi-circle-fill activity-badge text-primary align-self-start"></i>
                                    <div class="activity-content">
                                        Voluptates corrupti molestias voluptatem
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">1 day</div>
                                    <i class="bi bi-circle-fill activity-badge text-info align-self-start"></i>
                                    <div class="activity-content">
                                        Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati
                                            voluptatem</a> tempore
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">2 days</div>
                                    <i class="bi bi-circle-fill activity-badge text-warning align-self-start"></i>
                                    <div class="activity-content">
                                        Est sit eum reiciendis exercitationem
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">4 weeks</div>
                                    <i class="bi bi-circle-fill activity-badge text-muted align-self-start"></i>
                                    <div class="activity-content">
                                        Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                    </div>
                                </div><!-- End activity item-->

                            </div>

                        </div>
                    </div><!-- End Recent Activity -->

                    <!-- Budget Report -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Budget Report <span>| This Month</span></h5>

                            <div id="budgetChart" style="min-height: 400px; user-select: none;" class="echart"
                                _echarts_instance_="ec_1713811359941">
                                <div
                                    style="position: relative; width: 251px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;">
                                    <canvas
                                        style="position: absolute; left: 0px; top: 0px; width: 251px; height: 400px; user-select: none; padding: 0px; margin: 0px; border-width: 0px;"
                                        data-zr-dom-id="zr_0" width="376" height="600"></canvas></div>
                            </div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    var budgetChart = echarts.init(document.querySelector("#budgetChart"))
                                        .setOption({
                                            legend: {
                                                data: ['Allocated Budget', 'Actual Spending']
                                            },
                                            radar: {
                                                // shape: 'circle',
                                                indicator: [{
                                                        name: 'Sales',
                                                        max: 6500
                                                    },
                                                    {
                                                        name: 'Administration',
                                                        max: 16000
                                                    },
                                                    {
                                                        name: 'Information Technology',
                                                        max: 30000
                                                    },
                                                    {
                                                        name: 'Customer Support',
                                                        max: 38000
                                                    },
                                                    {
                                                        name: 'Development',
                                                        max: 52000
                                                    },
                                                    {
                                                        name: 'Marketing',
                                                        max: 25000
                                                    }
                                                ]
                                            },
                                            series: [{
                                                name: 'Budget vs spending',
                                                type: 'radar',
                                                data: [{
                                                        value: [4200, 3000, 20000, 35000, 50000,
                                                            18000
                                                        ],
                                                        name: 'Allocated Budget'
                                                    },
                                                    {
                                                        value: [5000, 14000, 28000, 26000,
                                                            42000, 21000
                                                        ],
                                                        name: 'Actual Spending'
                                                    }
                                                ]
                                            }]
                                        });
                                });

                            </script>

                        </div>
                    </div><!-- End Budget Report -->

                    <!-- Website Traffic -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Website Traffic <span>| Today</span></h5>

                            <div id="trafficChart" style="min-height: 400px; user-select: none; position: relative;"
                                class="echart" _echarts_instance_="ec_1713811359942">
                                <div
                                    style="position: relative; width: 251px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;">
                                    <canvas
                                        style="position: absolute; left: 0px; top: 0px; width: 251px; height: 400px; user-select: none; padding: 0px; margin: 0px; border-width: 0px;"
                                        data-zr-dom-id="zr_0" width="376" height="600"></canvas></div>
                                <div class=""></div>
                            </div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    echarts.init(document.querySelector("#trafficChart")).setOption({
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        legend: {
                                            top: '5%',
                                            left: 'center'
                                        },
                                        series: [{
                                            name: 'Access From',
                                            type: 'pie',
                                            radius: ['40%', '70%'],
                                            avoidLabelOverlap: false,
                                            label: {
                                                show: false,
                                                position: 'center'
                                            },
                                            emphasis: {
                                                label: {
                                                    show: true,
                                                    fontSize: '18',
                                                    fontWeight: 'bold'
                                                }
                                            },
                                            labelLine: {
                                                show: false
                                            },
                                            data: [{
                                                    value: 1048,
                                                    name: 'Search Engine'
                                                },
                                                {
                                                    value: 735,
                                                    name: 'Direct'
                                                },
                                                {
                                                    value: 580,
                                                    name: 'Email'
                                                },
                                                {
                                                    value: 484,
                                                    name: 'Union Ads'
                                                },
                                                {
                                                    value: 300,
                                                    name: 'Video Ads'
                                                }
                                            ]
                                        }]
                                    });
                                });

                            </script>

                        </div>
                    </div><!-- End Website Traffic -->

                    <!-- News & Updates Traffic -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

                            <div class="news">
                                <div class="post-item clearfix">
                                    <img src="assets/img/news-1.jpg" alt="">
                                    <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                                    <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/news-2.jpg" alt="">
                                    <h4><a href="#">Quidem autem et impedit</a></h4>
                                    <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...
                                    </p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/news-3.jpg" alt="">
                                    <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                                    <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...
                                    </p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/news-4.jpg" alt="">
                                    <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                                    <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...
                                    </p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/news-5.jpg" alt="">
                                    <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                                    <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos
                                        eius...</p>
                                </div>

                            </div><!-- End sidebar recent posts-->

                        </div>
                    </div><!-- End News & Updates -->

                </div><!-- End Right side columns -->

            </div>
        </section>

@endsection