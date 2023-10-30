@extends('layouts.admin.app')
@section('header')
@endsection
@section('title')
Dashboard
@endsection
@section('content')
<div class="tabs-animation">
   <div class="mb-3 card">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            <i class="header-icon lnr-charts icon-gradient bg-happy-green"></i>
            Portfolio Performance
         </div>
         <div class="btn-actions-pane-right text-capitalize">
            <button class="btn-wide btn-outline-2x me-md-2 btn btn-outline-focus btn-sm">View All</button>
         </div>
      </div>
      <div class="g-0 row">
         <div class="col-sm-6 col-md-4 col-xl-4">
            <div class="card no-shadow rm-border bg-transparent widget-chart text-start">
               <div class="icon-wrapper rounded-circle">
                  <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                  <i class="lnr-laptop-phone text-dark opacity-8"></i>
               </div>
               <div class="widget-chart-content">
                  <div class="widget-subheading">Cash Deposits</div>
                  <div class="widget-numbers">1,7M</div>
                  <div class="widget-description opacity-8 text-focus">
                     <div class="d-inline text-danger pe-1">
                        <i class="fa fa-angle-down"></i>
                        <span class="ps-1">54.1%</span>
                     </div>
                     less earnings
                  </div>
               </div>
            </div>
            <div class="divider m-0 d-md-none d-sm-block"></div>
         </div>
         <div class="col-sm-6 col-md-4 col-xl-4">
            <div class="card no-shadow rm-border bg-transparent widget-chart text-start">
               <div class="icon-wrapper rounded-circle">
                  <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                  <i class="lnr-graduation-hat text-white"></i>
               </div>
               <div class="widget-chart-content">
                  <div class="widget-subheading">Invested Dividents</div>
                  <div class="widget-numbers">
                     <span>9M</span>
                  </div>
                  <div class="widget-description opacity-8 text-focus">
                     Grow Rate:
                     <span class="text-info ps-1">
                     <i class="fa fa-angle-down"></i>
                     <span class="ps-1">14.1%</span>
                     </span>
                  </div>
               </div>
            </div>
            <div class="divider m-0 d-md-none d-sm-block"></div>
         </div>
         <div class="col-sm-12 col-md-4 col-xl-4">
            <div class="card no-shadow rm-border bg-transparent widget-chart text-start">
               <div class="icon-wrapper rounded-circle">
                  <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                  <i class="lnr-apartment text-white"></i>
               </div>
               <div class="widget-chart-content">
                  <div class="widget-subheading">Capital Gains</div>
                  <div class="widget-numbers text-success">
                     <span>$563</span>
                  </div>
                  <div class="widget-description text-focus">
                     Increased by
                     <span class="text-warning ps-1">
                     <i class="fa fa-angle-up"></i>
                     <span class="ps-1">7.35%</span>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="text-center d-block p-3 card-footer">
         <button class="btn-pill btn-shadow btn-wide fsize-1 btn btn-primary btn-lg">
         <span class="me-2 opacity-7">
         <i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
         </span>
         <span class="me-1">View Complete Report</span>
         </button>
      </div>
   </div>
   <div class="row">
      <div class="col-sm-12 col-lg-6">
         <div class="mb-3 card">
            <div class="card-header-tab card-header">
               <div class="card-header-title font-size-lg text-capitalize fw-normal">
                  <i class="header-icon lnr-cloud-download icon-gradient bg-happy-itmeo"></i>
                  Technical Support
               </div>
               <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                  <div class="btn-group dropdown">
                     <button type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                     <i class="pe-7s-menu btn-icon-wrapper"></i>
                     </button>
                     <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                        <button type="button" tabindex="0" class="dropdown-item">
                        <i class="dropdown-icon lnr-inbox"></i>
                        <span>Menus</span>
                        </button>
                        <button type="button" tabindex="0" class="dropdown-item">
                        <i class="dropdown-icon lnr-file-empty"></i>
                        <span>Settings</span>
                        </button>
                        <button type="button" tabindex="0" class="dropdown-item">
                        <i class="dropdown-icon lnr-book"></i>
                        <span>Actions</span>
                        </button>
                        <div tabindex="-1" class="dropdown-divider"></div>
                        <div class="p-3 text-end">
                           <button class="me-2 btn-shadow btn-sm btn btn-link">View Details</button>
                           <button class="me-2 btn-shadow btn-sm btn btn-primary">Action</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="p-0 card-body">
               <div class="p-1 slick-slider-sm mx-auto">
                  <div class="slick-slider slick-initialized slick-dotted">
                     <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>
                     <div class="slick-list draggable">
                        <div class="slick-track" style="opacity: 1; width: 3430px; transform: translate3d(-490px, 0px, 0px);">
                           <div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 490px;">
                              <div class="widget-chart widget-chart2 text-start p-0">
                                 <div class="widget-chat-wrapper-outer">
                                    <div class="widget-chart-content widget-chart-content-lg pb-0">
                                       <div class="widget-chart-flex">
                                          <div class="widget-title opacity-5 text-muted text-uppercase"> Helpdesk Tickets</div>
                                       </div>
                                       <div class="widget-numbers">
                                          <div class="widget-chart-flex">
                                             <div>
                                                <span class="text-warning">34</span>
                                             </div>
                                             <div class="widget-title ms-2 font-size-lg fw-normal text-dark">
                                                <span class="opacity-5 text-muted ps-2 pe-1">5%</span>
                                                increase
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                       <div id="" style="min-height: 152px;">
                                          <div id="" class="apexcharts-canvas apexcharts0lokfyfpf apexcharts-theme-light" style="width: 767.5px; height: 152px;">
                                             <svg id="" width="767.5" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                <g id="" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                   <defs id="">
                                                      <clipPath id="">
                                                         <rect id="" width="776.5" height="157" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                      </clipPath>
                                                      <clipPath id="">
                                                         <rect id="" width="771.5" height="156" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                      </clipPath>
                                                      <linearGradient id="" x1="0" y1="0" x2="0" y2="1">
                                                         <stop id="" stop-opacity="0.7" stop-color="rgba(247,185,36,0.7)" offset="0"></stop>
                                                         <stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop>
                                                         <stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop>
                                                      </linearGradient>
                                                   </defs>
                                                   <line id="" x1="0" y1="0" x2="0" y2="152" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="152" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                   <g id="" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                      <g id="" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                                   </g>
                                                   <g id="" class="apexcharts-grid">
                                                      <g id="" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                         <line id="" x1="0" y1="0" x2="767.5" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="15.2" x2="767.5" y2="15.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="30.4" x2="767.5" y2="30.4" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="45.599999999999994" x2="767.5" y2="45.599999999999994" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="60.8" x2="767.5" y2="60.8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="76" x2="767.5" y2="76" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="91.2" x2="767.5" y2="91.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="106.4" x2="767.5" y2="106.4" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="121.60000000000001" x2="767.5" y2="121.60000000000001" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="136.8" x2="767.5" y2="136.8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="152" x2="767.5" y2="152" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                      </g>
                                                      <g id="" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                      <line id="" x1="0" y1="152" x2="767.5" y2="152" stroke="transparent" stroke-dasharray="0"></line>
                                                      <line id="" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line>
                                                   </g>
                                                   <g id="" class="apexcharts-area-series apexcharts-plot-series">
                                                      <g id="" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                         <path id="" d="M0 152L0 92.2688728024819C11.679347826086955 92.2688728024819 21.69021739130435 109.55946225439504 33.369565217391305 109.55946225439504C45.04891304347826 109.55946225439504 55.059782608695656 84.40951396070321 66.73913043478261 84.40951396070321C78.41847826086956 84.40951396070321 88.42934782608697 114.27507755946226 100.10869565217392 114.27507755946226C111.78804347826087 114.27507755946226 121.79891304347827 81.26577042399173 133.47826086956522 81.26577042399173C145.1576086956522 81.26577042399173 155.16847826086956 109.55946225439504 166.84782608695653 109.55946225439504C178.5271739130435 109.55946225439504 188.53804347826087 122.13443640124095 200.21739130434784 122.13443640124095C211.8967391304348 122.13443640124095 221.9076086956522 5.815925542916233 233.58695652173915 5.815925542916233C245.2663043478261 5.815925542916233 255.2771739130435 49.82833505687694 266.95652173913044 49.82833505687694C278.6358695652174 49.82833505687694 288.6467391304348 96.98448810754911 300.32608695652175 96.98448810754911C312.0054347826087 96.98448810754911 322.0163043478261 63.97518097207859 333.69565217391306 63.97518097207859C345.375 63.97518097207859 355.38586956521743 67.11892450879007 367.0652173913044 67.11892450879007C378.7445652173913 67.11892450879007 388.75543478260875 78.12202688728024 400.4347826086957 78.12202688728024C412.1141304347826 78.12202688728024 422.12500000000006 96.98448810754911 433.804347826087 96.98448810754911C445.48369565217394 96.98448810754911 455.49456521739137 103.27197518097208 467.1739130434783 103.27197518097208C478.85326086956525 103.27197518097208 488.8641304347826 90.69700103412617 500.54347826086956 90.69700103412617C512.2228260869565 90.69700103412617 522.2336956521739 67.11892450879007 533.9130434782609 67.11892450879007C545.5923913043479 67.11892450879007 555.6032608695652 87.55325749741469 567.2826086956522 87.55325749741469C578.9619565217392 87.55325749741469 588.9728260869565 54.543950361944155 600.6521739130435 54.543950361944155C612.3315217391305 54.543950361944155 622.3423913043478 56.115822130299904 634.0217391304348 56.115822130299904C645.7010869565217 56.115822130299904 655.7119565217391 79.69389865563599 667.3913043478261 79.69389865563599C679.070652173913 79.69389865563599 689.0815217391305 93.84074457083764 700.7608695652174 93.84074457083764C712.4402173913044 93.84074457083764 722.4510869565217 68.69079627714581 734.1304347826087 68.69079627714581C745.8097826086957 68.69079627714581 755.820652173913 71.83453981385729 767.5 71.83453981385729C767.5 71.83453981385729 767.5 71.83453981385729 767.5 152M767.5 71.83453981385729C767.5 71.83453981385729 767.5 71.83453981385729 767.5 71.83453981385729 " fill="url(#SvgjsLinearGradient1087)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0lokfyfpf)" pathTo="M 0 152L 0 92.2688728024819C 11.679347826086955 92.2688728024819 21.69021739130435 109.55946225439504 33.369565217391305 109.55946225439504C 45.04891304347826 109.55946225439504 55.059782608695656 84.40951396070321 66.73913043478261 84.40951396070321C 78.41847826086956 84.40951396070321 88.42934782608697 114.27507755946226 100.10869565217392 114.27507755946226C 111.78804347826087 114.27507755946226 121.79891304347827 81.26577042399173 133.47826086956522 81.26577042399173C 145.1576086956522 81.26577042399173 155.16847826086956 109.55946225439504 166.84782608695653 109.55946225439504C 178.5271739130435 109.55946225439504 188.53804347826087 122.13443640124095 200.21739130434784 122.13443640124095C 211.8967391304348 122.13443640124095 221.9076086956522 5.815925542916233 233.58695652173915 5.815925542916233C 245.2663043478261 5.815925542916233 255.2771739130435 49.82833505687694 266.95652173913044 49.82833505687694C 278.6358695652174 49.82833505687694 288.6467391304348 96.98448810754911 300.32608695652175 96.98448810754911C 312.0054347826087 96.98448810754911 322.0163043478261 63.97518097207859 333.69565217391306 63.97518097207859C 345.375 63.97518097207859 355.38586956521743 67.11892450879007 367.0652173913044 67.11892450879007C 378.7445652173913 67.11892450879007 388.75543478260875 78.12202688728024 400.4347826086957 78.12202688728024C 412.1141304347826 78.12202688728024 422.12500000000006 96.98448810754911 433.804347826087 96.98448810754911C 445.48369565217394 96.98448810754911 455.49456521739137 103.27197518097208 467.1739130434783 103.27197518097208C 478.85326086956525 103.27197518097208 488.8641304347826 90.69700103412617 500.54347826086956 90.69700103412617C 512.2228260869565 90.69700103412617 522.2336956521739 67.11892450879007 533.9130434782609 67.11892450879007C 545.5923913043479 67.11892450879007 555.6032608695652 87.55325749741469 567.2826086956522 87.55325749741469C 578.9619565217392 87.55325749741469 588.9728260869565 54.543950361944155 600.6521739130435 54.543950361944155C 612.3315217391305 54.543950361944155 622.3423913043478 56.115822130299904 634.0217391304348 56.115822130299904C 645.7010869565217 56.115822130299904 655.7119565217391 79.69389865563599 667.3913043478261 79.69389865563599C 679.070652173913 79.69389865563599 689.0815217391305 93.84074457083764 700.7608695652174 93.84074457083764C 712.4402173913044 93.84074457083764 722.4510869565217 68.69079627714581 734.1304347826087 68.69079627714581C 745.8097826086957 68.69079627714581 755.820652173913 71.83453981385729 767.5 71.83453981385729C 767.5 71.83453981385729 767.5 71.83453981385729 767.5 152M 767.5 71.83453981385729z" pathFrom="M -1 152L -1 152L 33.369565217391305 152L 66.73913043478261 152L 100.10869565217392 152L 133.47826086956522 152L 166.84782608695653 152L 200.21739130434784 152L 233.58695652173915 152L 266.95652173913044 152L 300.32608695652175 152L 333.69565217391306 152L 367.0652173913044 152L 400.4347826086957 152L 433.804347826087 152L 467.1739130434783 152L 500.54347826086956 152L 533.9130434782609 152L 567.2826086956522 152L 600.6521739130435 152L 634.0217391304348 152L 667.3913043478261 152L 700.7608695652174 152L 734.1304347826087 152L 767.5 152"></path>
                                                         <path id="" d="M0 92.2688728024819C11.679347826086955 92.2688728024819 21.69021739130435 109.55946225439504 33.369565217391305 109.55946225439504C45.04891304347826 109.55946225439504 55.059782608695656 84.40951396070321 66.73913043478261 84.40951396070321C78.41847826086956 84.40951396070321 88.42934782608697 114.27507755946226 100.10869565217392 114.27507755946226C111.78804347826087 114.27507755946226 121.79891304347827 81.26577042399173 133.47826086956522 81.26577042399173C145.1576086956522 81.26577042399173 155.16847826086956 109.55946225439504 166.84782608695653 109.55946225439504C178.5271739130435 109.55946225439504 188.53804347826087 122.13443640124095 200.21739130434784 122.13443640124095C211.8967391304348 122.13443640124095 221.9076086956522 5.815925542916233 233.58695652173915 5.815925542916233C245.2663043478261 5.815925542916233 255.2771739130435 49.82833505687694 266.95652173913044 49.82833505687694C278.6358695652174 49.82833505687694 288.6467391304348 96.98448810754911 300.32608695652175 96.98448810754911C312.0054347826087 96.98448810754911 322.0163043478261 63.97518097207859 333.69565217391306 63.97518097207859C345.375 63.97518097207859 355.38586956521743 67.11892450879007 367.0652173913044 67.11892450879007C378.7445652173913 67.11892450879007 388.75543478260875 78.12202688728024 400.4347826086957 78.12202688728024C412.1141304347826 78.12202688728024 422.12500000000006 96.98448810754911 433.804347826087 96.98448810754911C445.48369565217394 96.98448810754911 455.49456521739137 103.27197518097208 467.1739130434783 103.27197518097208C478.85326086956525 103.27197518097208 488.8641304347826 90.69700103412617 500.54347826086956 90.69700103412617C512.2228260869565 90.69700103412617 522.2336956521739 67.11892450879007 533.9130434782609 67.11892450879007C545.5923913043479 67.11892450879007 555.6032608695652 87.55325749741469 567.2826086956522 87.55325749741469C578.9619565217392 87.55325749741469 588.9728260869565 54.543950361944155 600.6521739130435 54.543950361944155C612.3315217391305 54.543950361944155 622.3423913043478 56.115822130299904 634.0217391304348 56.115822130299904C645.7010869565217 56.115822130299904 655.7119565217391 79.69389865563599 667.3913043478261 79.69389865563599C679.070652173913 79.69389865563599 689.0815217391305 93.84074457083764 700.7608695652174 93.84074457083764C712.4402173913044 93.84074457083764 722.4510869565217 68.69079627714581 734.1304347826087 68.69079627714581C745.8097826086957 68.69079627714581 755.820652173913 71.83453981385729 767.5 71.83453981385729C767.5 71.83453981385729 767.5 71.83453981385729 767.5 71.83453981385729 " fill="none" fill-opacity="1" stroke="#f7b924" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0lokfyfpf)" pathTo="M 0 92.2688728024819C 11.679347826086955 92.2688728024819 21.69021739130435 109.55946225439504 33.369565217391305 109.55946225439504C 45.04891304347826 109.55946225439504 55.059782608695656 84.40951396070321 66.73913043478261 84.40951396070321C 78.41847826086956 84.40951396070321 88.42934782608697 114.27507755946226 100.10869565217392 114.27507755946226C 111.78804347826087 114.27507755946226 121.79891304347827 81.26577042399173 133.47826086956522 81.26577042399173C 145.1576086956522 81.26577042399173 155.16847826086956 109.55946225439504 166.84782608695653 109.55946225439504C 178.5271739130435 109.55946225439504 188.53804347826087 122.13443640124095 200.21739130434784 122.13443640124095C 211.8967391304348 122.13443640124095 221.9076086956522 5.815925542916233 233.58695652173915 5.815925542916233C 245.2663043478261 5.815925542916233 255.2771739130435 49.82833505687694 266.95652173913044 49.82833505687694C 278.6358695652174 49.82833505687694 288.6467391304348 96.98448810754911 300.32608695652175 96.98448810754911C 312.0054347826087 96.98448810754911 322.0163043478261 63.97518097207859 333.69565217391306 63.97518097207859C 345.375 63.97518097207859 355.38586956521743 67.11892450879007 367.0652173913044 67.11892450879007C 378.7445652173913 67.11892450879007 388.75543478260875 78.12202688728024 400.4347826086957 78.12202688728024C 412.1141304347826 78.12202688728024 422.12500000000006 96.98448810754911 433.804347826087 96.98448810754911C 445.48369565217394 96.98448810754911 455.49456521739137 103.27197518097208 467.1739130434783 103.27197518097208C 478.85326086956525 103.27197518097208 488.8641304347826 90.69700103412617 500.54347826086956 90.69700103412617C 512.2228260869565 90.69700103412617 522.2336956521739 67.11892450879007 533.9130434782609 67.11892450879007C 545.5923913043479 67.11892450879007 555.6032608695652 87.55325749741469 567.2826086956522 87.55325749741469C 578.9619565217392 87.55325749741469 588.9728260869565 54.543950361944155 600.6521739130435 54.543950361944155C 612.3315217391305 54.543950361944155 622.3423913043478 56.115822130299904 634.0217391304348 56.115822130299904C 645.7010869565217 56.115822130299904 655.7119565217391 79.69389865563599 667.3913043478261 79.69389865563599C 679.070652173913 79.69389865563599 689.0815217391305 93.84074457083764 700.7608695652174 93.84074457083764C 712.4402173913044 93.84074457083764 722.4510869565217 68.69079627714581 734.1304347826087 68.69079627714581C 745.8097826086957 68.69079627714581 755.820652173913 71.83453981385729 767.5 71.83453981385729" pathFrom="M -1 152L -1 152L 33.369565217391305 152L 66.73913043478261 152L 100.10869565217392 152L 133.47826086956522 152L 166.84782608695653 152L 200.21739130434784 152L 233.58695652173915 152L 266.95652173913044 152L 300.32608695652175 152L 333.69565217391306 152L 367.0652173913044 152L 400.4347826086957 152L 433.804347826087 152L 467.1739130434783 152L 500.54347826086956 152L 533.9130434782609 152L 567.2826086956522 152L 600.6521739130435 152L 634.0217391304348 152L 667.3913043478261 152L 700.7608695652174 152L 734.1304347826087 152L 767.5 152"></path>
                                                         <g id="" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                               <circle id="" r="0" cx="0" cy="0" class="apexcharts-marker wgkzylffq no-pointer-events" stroke="#ffffff" fill="#f7b924" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                            </g>
                                                         </g>
                                                      </g>
                                                      <g id="" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                   </g>
                                                   <line id="" x1="0" y1="0" x2="767.5" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                   <line id="" x1="0" y1="0" x2="767.5" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                   <g id="" class="apexcharts-yaxis-annotations"></g>
                                                   <g id="" class="apexcharts-xaxis-annotations"></g>
                                                   <g id="" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g id="" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                <g id="" class="apexcharts-annotations"></g>
                                             </svg>
                                             <div class="apexcharts-legend" style="max-height: 76px;"></div>
                                             <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                   <span class="apexcharts-tooltip-marker" style="background-color: rgb(247, 185, 36);"></span>
                                                   <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                      <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                      <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="resize-triggers">
                                          <div class="expand-trigger">
                                             <div style="width: 769px; height: 153px;"></div>
                                          </div>
                                          <div class="contract-trigger"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00" style="width: 490px;">
                              <div class="widget-chart widget-chart2 text-start p-0">
                                 <div class="widget-chat-wrapper-outer">
                                    <div class="widget-chart-content widget-chart-content-lg pb-0">
                                       <div class="widget-chart-flex">
                                          <div class="widget-title opacity-5 text-muted text-uppercase"> New Accounts since 2018</div>
                                       </div>
                                       <div class="widget-numbers">
                                          <div class="widget-chart-flex">
                                             <div>
                                                <span class="opacity-10 text-success pe-2">
                                                <i class="fa fa-angle-up"></i>
                                                </span>
                                                <span>78</span>
                                                <small class="opacity-5 ps-1">%</small>
                                             </div>
                                             <div class="widget-title ms-2 font-size-lg fw-normal text-muted">
                                                <span class="text-success ps-2">+14</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                       <div id="dashboard-sparkline-3" style="min-height: 152px;">
                                          <div id="apexcharts9azq0ymn" class="apexcharts-canvas apexcharts9azq0ymn apexcharts-theme-light" style="width: 490px; height: 152px;">
                                             <svg id="SvgjsSvg2058" width="490" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                <g id="SvgjsG2060" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                   <defs id="SvgjsDefs2059">
                                                      <clipPath id="gridRectMask9azq0ymn">
                                                         <rect id="SvgjsRect2065" width="499" height="157" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                      </clipPath>
                                                      <clipPath id="gridRectMarkerMask9azq0ymn">
                                                         <rect id="SvgjsRect2066" width="494" height="156" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                      </clipPath>
                                                      <linearGradient id="SvgjsLinearGradient2071" x1="0" y1="0" x2="0" y2="1">
                                                         <stop id="SvgjsStop2072" stop-opacity="0.7" stop-color="rgba(58,196,125,0.7)" offset="0"></stop>
                                                         <stop id="SvgjsStop2073" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop>
                                                         <stop id="SvgjsStop2074" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop>
                                                      </linearGradient>
                                                   </defs>
                                                   <line id="SvgjsLine2064" x1="0" y1="0" x2="0" y2="152" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="152" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                   <g id="SvgjsG2077" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                      <g id="SvgjsG2078" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                                   </g>
                                                   <g id="SvgjsG2104" class="apexcharts-grid">
                                                      <g id="SvgjsG2105" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                         <line id="SvgjsLine2107" x1="0" y1="0" x2="490" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2108" x1="0" y1="15.2" x2="490" y2="15.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2109" x1="0" y1="30.4" x2="490" y2="30.4" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2110" x1="0" y1="45.599999999999994" x2="490" y2="45.599999999999994" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2111" x1="0" y1="60.8" x2="490" y2="60.8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2112" x1="0" y1="76" x2="490" y2="76" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2113" x1="0" y1="91.2" x2="490" y2="91.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2114" x1="0" y1="106.4" x2="490" y2="106.4" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2115" x1="0" y1="121.60000000000001" x2="490" y2="121.60000000000001" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2116" x1="0" y1="136.8" x2="490" y2="136.8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2117" x1="0" y1="152" x2="490" y2="152" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                      </g>
                                                      <g id="SvgjsG2106" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                      <line id="SvgjsLine2119" x1="0" y1="152" x2="490" y2="152" stroke="transparent" stroke-dasharray="0"></line>
                                                      <line id="SvgjsLine2118" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line>
                                                   </g>
                                                   <g id="SvgjsG2067" class="apexcharts-area-series apexcharts-plot-series">
                                                      <g id="SvgjsG2068" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                         <path id="SvgjsPath2075" d="M 0 152L 0 96.98448810754911C 7.456521739130435 96.98448810754911 13.847826086956523 90.69700103412617 21.304347826086957 90.69700103412617C 28.76086956521739 90.69700103412617 35.15217391304348 93.84074457083764 42.608695652173914 93.84074457083764C 50.065217391304344 93.84074457083764 56.45652173913044 56.115822130299904 63.91304347826087 56.115822130299904C 71.3695652173913 56.115822130299904 77.76086956521739 67.11892450879007 85.21739130434783 67.11892450879007C 92.67391304347827 67.11892450879007 99.06521739130434 109.55946225439504 106.52173913043478 109.55946225439504C 113.97826086956522 109.55946225439504 120.3695652173913 103.27197518097208 127.82608695652173 103.27197518097208C 135.28260869565216 103.27197518097208 141.67391304347825 84.40951396070321 149.1304347826087 84.40951396070321C 156.58695652173913 84.40951396070321 162.97826086956522 96.98448810754911 170.43478260869566 96.98448810754911C 177.8913043478261 96.98448810754911 184.28260869565216 81.26577042399173 191.7391304347826 81.26577042399173C 199.19565217391303 81.26577042399173 205.58695652173913 79.69389865563599 213.04347826086956 79.69389865563599C 220.5 79.69389865563599 226.8913043478261 49.82833505687694 234.34782608695653 49.82833505687694C 241.80434782608697 49.82833505687694 248.19565217391303 78.12202688728024 255.65217391304347 78.12202688728024C 263.10869565217394 78.12202688728024 269.5 122.13443640124095 276.95652173913044 122.13443640124095C 284.4130434782609 122.13443640124095 290.80434782608694 92.2688728024819 298.2608695652174 92.2688728024819C 305.7173913043478 92.2688728024819 312.1086956521739 63.97518097207859 319.5652173913043 63.97518097207859C 327.02173913043475 63.97518097207859 333.4130434782609 71.83453981385729 340.8695652173913 71.83453981385729C 348.32608695652175 71.83453981385729 354.7173913043478 67.11892450879007 362.17391304347825 67.11892450879007C 369.6304347826087 67.11892450879007 376.02173913043475 114.27507755946226 383.4782608695652 114.27507755946226C 390.9347826086956 114.27507755946226 397.32608695652175 54.543950361944155 404.7826086956522 54.543950361944155C 412.2391304347826 54.543950361944155 418.6304347826087 87.55325749741469 426.0869565217391 87.55325749741469C 433.54347826086956 87.55325749741469 439.9347826086956 68.69079627714581 447.39130434782606 68.69079627714581C 454.8478260869565 68.69079627714581 461.2391304347826 5.815925542916233 468.69565217391306 5.815925542916233C 476.1521739130435 5.815925542916233 482.54347826086956 109.55946225439504 490 109.55946225439504C 490 109.55946225439504 490 109.55946225439504 490 152M 490 109.55946225439504z" fill="url(#SvgjsLinearGradient2071)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask9azq0ymn)" pathTo="M 0 152L 0 96.98448810754911C 7.456521739130435 96.98448810754911 13.847826086956523 90.69700103412617 21.304347826086957 90.69700103412617C 28.76086956521739 90.69700103412617 35.15217391304348 93.84074457083764 42.608695652173914 93.84074457083764C 50.065217391304344 93.84074457083764 56.45652173913044 56.115822130299904 63.91304347826087 56.115822130299904C 71.3695652173913 56.115822130299904 77.76086956521739 67.11892450879007 85.21739130434783 67.11892450879007C 92.67391304347827 67.11892450879007 99.06521739130434 109.55946225439504 106.52173913043478 109.55946225439504C 113.97826086956522 109.55946225439504 120.3695652173913 103.27197518097208 127.82608695652173 103.27197518097208C 135.28260869565216 103.27197518097208 141.67391304347825 84.40951396070321 149.1304347826087 84.40951396070321C 156.58695652173913 84.40951396070321 162.97826086956522 96.98448810754911 170.43478260869566 96.98448810754911C 177.8913043478261 96.98448810754911 184.28260869565216 81.26577042399173 191.7391304347826 81.26577042399173C 199.19565217391303 81.26577042399173 205.58695652173913 79.69389865563599 213.04347826086956 79.69389865563599C 220.5 79.69389865563599 226.8913043478261 49.82833505687694 234.34782608695653 49.82833505687694C 241.80434782608697 49.82833505687694 248.19565217391303 78.12202688728024 255.65217391304347 78.12202688728024C 263.10869565217394 78.12202688728024 269.5 122.13443640124095 276.95652173913044 122.13443640124095C 284.4130434782609 122.13443640124095 290.80434782608694 92.2688728024819 298.2608695652174 92.2688728024819C 305.7173913043478 92.2688728024819 312.1086956521739 63.97518097207859 319.5652173913043 63.97518097207859C 327.02173913043475 63.97518097207859 333.4130434782609 71.83453981385729 340.8695652173913 71.83453981385729C 348.32608695652175 71.83453981385729 354.7173913043478 67.11892450879007 362.17391304347825 67.11892450879007C 369.6304347826087 67.11892450879007 376.02173913043475 114.27507755946226 383.4782608695652 114.27507755946226C 390.9347826086956 114.27507755946226 397.32608695652175 54.543950361944155 404.7826086956522 54.543950361944155C 412.2391304347826 54.543950361944155 418.6304347826087 87.55325749741469 426.0869565217391 87.55325749741469C 433.54347826086956 87.55325749741469 439.9347826086956 68.69079627714581 447.39130434782606 68.69079627714581C 454.8478260869565 68.69079627714581 461.2391304347826 5.815925542916233 468.69565217391306 5.815925542916233C 476.1521739130435 5.815925542916233 482.54347826086956 109.55946225439504 490 109.55946225439504C 490 109.55946225439504 490 109.55946225439504 490 152M 490 109.55946225439504z" pathFrom="M -1 152L -1 152L 21.304347826086957 152L 42.608695652173914 152L 63.91304347826087 152L 85.21739130434783 152L 106.52173913043478 152L 127.82608695652173 152L 149.1304347826087 152L 170.43478260869566 152L 191.7391304347826 152L 213.04347826086956 152L 234.34782608695653 152L 255.65217391304347 152L 276.95652173913044 152L 298.2608695652174 152L 319.5652173913043 152L 340.8695652173913 152L 362.17391304347825 152L 383.4782608695652 152L 404.7826086956522 152L 426.0869565217391 152L 447.39130434782606 152L 468.69565217391306 152L 490 152"></path>
                                                         <path id="SvgjsPath2076" d="M 0 96.98448810754911C 7.456521739130435 96.98448810754911 13.847826086956523 90.69700103412617 21.304347826086957 90.69700103412617C 28.76086956521739 90.69700103412617 35.15217391304348 93.84074457083764 42.608695652173914 93.84074457083764C 50.065217391304344 93.84074457083764 56.45652173913044 56.115822130299904 63.91304347826087 56.115822130299904C 71.3695652173913 56.115822130299904 77.76086956521739 67.11892450879007 85.21739130434783 67.11892450879007C 92.67391304347827 67.11892450879007 99.06521739130434 109.55946225439504 106.52173913043478 109.55946225439504C 113.97826086956522 109.55946225439504 120.3695652173913 103.27197518097208 127.82608695652173 103.27197518097208C 135.28260869565216 103.27197518097208 141.67391304347825 84.40951396070321 149.1304347826087 84.40951396070321C 156.58695652173913 84.40951396070321 162.97826086956522 96.98448810754911 170.43478260869566 96.98448810754911C 177.8913043478261 96.98448810754911 184.28260869565216 81.26577042399173 191.7391304347826 81.26577042399173C 199.19565217391303 81.26577042399173 205.58695652173913 79.69389865563599 213.04347826086956 79.69389865563599C 220.5 79.69389865563599 226.8913043478261 49.82833505687694 234.34782608695653 49.82833505687694C 241.80434782608697 49.82833505687694 248.19565217391303 78.12202688728024 255.65217391304347 78.12202688728024C 263.10869565217394 78.12202688728024 269.5 122.13443640124095 276.95652173913044 122.13443640124095C 284.4130434782609 122.13443640124095 290.80434782608694 92.2688728024819 298.2608695652174 92.2688728024819C 305.7173913043478 92.2688728024819 312.1086956521739 63.97518097207859 319.5652173913043 63.97518097207859C 327.02173913043475 63.97518097207859 333.4130434782609 71.83453981385729 340.8695652173913 71.83453981385729C 348.32608695652175 71.83453981385729 354.7173913043478 67.11892450879007 362.17391304347825 67.11892450879007C 369.6304347826087 67.11892450879007 376.02173913043475 114.27507755946226 383.4782608695652 114.27507755946226C 390.9347826086956 114.27507755946226 397.32608695652175 54.543950361944155 404.7826086956522 54.543950361944155C 412.2391304347826 54.543950361944155 418.6304347826087 87.55325749741469 426.0869565217391 87.55325749741469C 433.54347826086956 87.55325749741469 439.9347826086956 68.69079627714581 447.39130434782606 68.69079627714581C 454.8478260869565 68.69079627714581 461.2391304347826 5.815925542916233 468.69565217391306 5.815925542916233C 476.1521739130435 5.815925542916233 482.54347826086956 109.55946225439504 490 109.55946225439504" fill="none" fill-opacity="1" stroke="#3ac47d" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask9azq0ymn)" pathTo="M 0 96.98448810754911C 7.456521739130435 96.98448810754911 13.847826086956523 90.69700103412617 21.304347826086957 90.69700103412617C 28.76086956521739 90.69700103412617 35.15217391304348 93.84074457083764 42.608695652173914 93.84074457083764C 50.065217391304344 93.84074457083764 56.45652173913044 56.115822130299904 63.91304347826087 56.115822130299904C 71.3695652173913 56.115822130299904 77.76086956521739 67.11892450879007 85.21739130434783 67.11892450879007C 92.67391304347827 67.11892450879007 99.06521739130434 109.55946225439504 106.52173913043478 109.55946225439504C 113.97826086956522 109.55946225439504 120.3695652173913 103.27197518097208 127.82608695652173 103.27197518097208C 135.28260869565216 103.27197518097208 141.67391304347825 84.40951396070321 149.1304347826087 84.40951396070321C 156.58695652173913 84.40951396070321 162.97826086956522 96.98448810754911 170.43478260869566 96.98448810754911C 177.8913043478261 96.98448810754911 184.28260869565216 81.26577042399173 191.7391304347826 81.26577042399173C 199.19565217391303 81.26577042399173 205.58695652173913 79.69389865563599 213.04347826086956 79.69389865563599C 220.5 79.69389865563599 226.8913043478261 49.82833505687694 234.34782608695653 49.82833505687694C 241.80434782608697 49.82833505687694 248.19565217391303 78.12202688728024 255.65217391304347 78.12202688728024C 263.10869565217394 78.12202688728024 269.5 122.13443640124095 276.95652173913044 122.13443640124095C 284.4130434782609 122.13443640124095 290.80434782608694 92.2688728024819 298.2608695652174 92.2688728024819C 305.7173913043478 92.2688728024819 312.1086956521739 63.97518097207859 319.5652173913043 63.97518097207859C 327.02173913043475 63.97518097207859 333.4130434782609 71.83453981385729 340.8695652173913 71.83453981385729C 348.32608695652175 71.83453981385729 354.7173913043478 67.11892450879007 362.17391304347825 67.11892450879007C 369.6304347826087 67.11892450879007 376.02173913043475 114.27507755946226 383.4782608695652 114.27507755946226C 390.9347826086956 114.27507755946226 397.32608695652175 54.543950361944155 404.7826086956522 54.543950361944155C 412.2391304347826 54.543950361944155 418.6304347826087 87.55325749741469 426.0869565217391 87.55325749741469C 433.54347826086956 87.55325749741469 439.9347826086956 68.69079627714581 447.39130434782606 68.69079627714581C 454.8478260869565 68.69079627714581 461.2391304347826 5.815925542916233 468.69565217391306 5.815925542916233C 476.1521739130435 5.815925542916233 482.54347826086956 109.55946225439504 490 109.55946225439504" pathFrom="M -1 152L -1 152L 21.304347826086957 152L 42.608695652173914 152L 63.91304347826087 152L 85.21739130434783 152L 106.52173913043478 152L 127.82608695652173 152L 149.1304347826087 152L 170.43478260869566 152L 191.7391304347826 152L 213.04347826086956 152L 234.34782608695653 152L 255.65217391304347 152L 276.95652173913044 152L 298.2608695652174 152L 319.5652173913043 152L 340.8695652173913 152L 362.17391304347825 152L 383.4782608695652 152L 404.7826086956522 152L 426.0869565217391 152L 447.39130434782606 152L 468.69565217391306 152L 490 152"></path>
                                                         <g id="SvgjsG2069" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                               <circle id="SvgjsCircle2125" r="0" cx="0" cy="0" class="apexcharts-marker wmg74jaqyk no-pointer-events" stroke="#ffffff" fill="#3ac47d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                            </g>
                                                         </g>
                                                      </g>
                                                      <g id="SvgjsG2070" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                   </g>
                                                   <line id="SvgjsLine2120" x1="0" y1="0" x2="490" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                   <line id="SvgjsLine2121" x1="0" y1="0" x2="490" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                   <g id="SvgjsG2122" class="apexcharts-yaxis-annotations"></g>
                                                   <g id="SvgjsG2123" class="apexcharts-xaxis-annotations"></g>
                                                   <g id="SvgjsG2124" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect2063" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g id="SvgjsG2103" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG2061" class="apexcharts-annotations"></g>
                                             </svg>
                                             <div class="apexcharts-legend" style="max-height: 76px;"></div>
                                             <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                   <span class="apexcharts-tooltip-marker" style="background-color: rgb(58, 196, 125);"></span>
                                                   <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                      <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                      <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="resize-triggers">
                                          <div class="expand-trigger">
                                             <div style="width: 491px; height: 153px;"></div>
                                          </div>
                                          <div class="contract-trigger"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01" style="width: 490px;">
                              <div class="widget-chart widget-chart2 text-start p-0">
                                 <div class="widget-chat-wrapper-outer">
                                    <div class="widget-chart-content widget-chart-content-lg pb-0">
                                       <div class="widget-chart-flex">
                                          <div class="widget-title opacity-5 text-muted text-uppercase"> Last Year Total Sales</div>
                                       </div>
                                       <div class="widget-numbers">
                                          <div class="widget-chart-flex">
                                             <div>
                                                <small class="opacity-3 pe-1">$</small>
                                                <span>629</span>
                                                <span class="text-primary ps-3">
                                                <i class="fa fa-angle-down"></i>
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                       <div id="dashboard-sparkline-1" style="min-height: 152px;">
                                          <div id="apexchartsqtp5xs5d" class="apexcharts-canvas apexchartsqtp5xs5d apexcharts-theme-light" style="width: 490px; height: 152px;">
                                             <svg id="SvgjsSvg2127" width="490" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                <g id="SvgjsG2129" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                   <defs id="SvgjsDefs2128">
                                                      <clipPath id="gridRectMaskqtp5xs5d">
                                                         <rect id="SvgjsRect2134" width="499" height="157" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                      </clipPath>
                                                      <clipPath id="gridRectMarkerMaskqtp5xs5d">
                                                         <rect id="SvgjsRect2135" width="494" height="156" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                      </clipPath>
                                                      <linearGradient id="SvgjsLinearGradient2140" x1="0" y1="0" x2="0" y2="1">
                                                         <stop id="SvgjsStop2141" stop-opacity="0.7" stop-color="rgba(63,106,216,0.7)" offset="0"></stop>
                                                         <stop id="SvgjsStop2142" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop>
                                                         <stop id="SvgjsStop2143" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop>
                                                      </linearGradient>
                                                   </defs>
                                                   <line id="SvgjsLine2133" x1="0" y1="0" x2="0" y2="152" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="152" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                   <g id="SvgjsG2146" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                      <g id="SvgjsG2147" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                                   </g>
                                                   <g id="SvgjsG2173" class="apexcharts-grid">
                                                      <g id="SvgjsG2174" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                         <line id="SvgjsLine2176" x1="0" y1="0" x2="490" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2177" x1="0" y1="15.2" x2="490" y2="15.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2178" x1="0" y1="30.4" x2="490" y2="30.4" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2179" x1="0" y1="45.599999999999994" x2="490" y2="45.599999999999994" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2180" x1="0" y1="60.8" x2="490" y2="60.8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2181" x1="0" y1="76" x2="490" y2="76" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2182" x1="0" y1="91.2" x2="490" y2="91.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2183" x1="0" y1="106.4" x2="490" y2="106.4" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2184" x1="0" y1="121.60000000000001" x2="490" y2="121.60000000000001" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2185" x1="0" y1="136.8" x2="490" y2="136.8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2186" x1="0" y1="152" x2="490" y2="152" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                      </g>
                                                      <g id="SvgjsG2175" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                      <line id="SvgjsLine2188" x1="0" y1="152" x2="490" y2="152" stroke="transparent" stroke-dasharray="0"></line>
                                                      <line id="SvgjsLine2187" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line>
                                                   </g>
                                                   <g id="SvgjsG2136" class="apexcharts-area-series apexcharts-plot-series">
                                                      <g id="SvgjsG2137" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                         <path id="SvgjsPath2144" d="M 0 152L 0 109.55946225439504C 7.456521739130435 109.55946225439504 13.847826086956523 78.12202688728024 21.304347826086957 78.12202688728024C 28.76086956521739 78.12202688728024 35.15217391304348 90.69700103412617 42.608695652173914 90.69700103412617C 50.065217391304344 90.69700103412617 56.45652173913044 71.83453981385729 63.91304347826087 71.83453981385729C 71.3695652173913 71.83453981385729 77.76086956521739 81.26577042399173 85.21739130434783 81.26577042399173C 92.67391304347827 81.26577042399173 99.06521739130434 56.115822130299904 106.52173913043478 56.115822130299904C 113.97826086956522 56.115822130299904 120.3695652173913 87.55325749741469 127.82608695652173 87.55325749741469C 135.28260869565216 87.55325749741469 141.67391304347825 96.98448810754911 149.1304347826087 96.98448810754911C 156.58695652173913 96.98448810754911 162.97826086956522 93.84074457083764 170.43478260869566 93.84074457083764C 177.8913043478261 93.84074457083764 184.28260869565216 103.27197518097208 191.7391304347826 103.27197518097208C 199.19565217391303 103.27197518097208 205.58695652173913 5.815925542916233 213.04347826086956 5.815925542916233C 220.5 5.815925542916233 226.8913043478261 63.97518097207859 234.34782608695653 63.97518097207859C 241.80434782608697 63.97518097207859 248.19565217391303 122.13443640124095 255.65217391304347 122.13443640124095C 263.10869565217394 122.13443640124095 269.5 79.69389865563599 276.95652173913044 79.69389865563599C 284.4130434782609 79.69389865563599 290.80434782608694 114.27507755946226 298.2608695652174 114.27507755946226C 305.7173913043478 114.27507755946226 312.1086956521739 68.69079627714581 319.5652173913043 68.69079627714581C 327.02173913043475 68.69079627714581 333.4130434782609 92.2688728024819 340.8695652173913 92.2688728024819C 348.32608695652175 92.2688728024819 354.7173913043478 49.82833505687694 362.17391304347825 49.82833505687694C 369.6304347826087 49.82833505687694 376.02173913043475 84.40951396070321 383.4782608695652 84.40951396070321C 390.9347826086956 84.40951396070321 397.32608695652175 96.98448810754911 404.7826086956522 96.98448810754911C 412.2391304347826 96.98448810754911 418.6304347826087 54.543950361944155 426.0869565217391 54.543950361944155C 433.54347826086956 54.543950361944155 439.9347826086956 67.11892450879007 447.39130434782606 67.11892450879007C 454.8478260869565 67.11892450879007 461.2391304347826 109.55946225439504 468.69565217391306 109.55946225439504C 476.1521739130435 109.55946225439504 482.54347826086956 67.11892450879007 490 67.11892450879007C 490 67.11892450879007 490 67.11892450879007 490 152M 490 67.11892450879007z" fill="url(#SvgjsLinearGradient2140)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskqtp5xs5d)" pathTo="M 0 152L 0 109.55946225439504C 7.456521739130435 109.55946225439504 13.847826086956523 78.12202688728024 21.304347826086957 78.12202688728024C 28.76086956521739 78.12202688728024 35.15217391304348 90.69700103412617 42.608695652173914 90.69700103412617C 50.065217391304344 90.69700103412617 56.45652173913044 71.83453981385729 63.91304347826087 71.83453981385729C 71.3695652173913 71.83453981385729 77.76086956521739 81.26577042399173 85.21739130434783 81.26577042399173C 92.67391304347827 81.26577042399173 99.06521739130434 56.115822130299904 106.52173913043478 56.115822130299904C 113.97826086956522 56.115822130299904 120.3695652173913 87.55325749741469 127.82608695652173 87.55325749741469C 135.28260869565216 87.55325749741469 141.67391304347825 96.98448810754911 149.1304347826087 96.98448810754911C 156.58695652173913 96.98448810754911 162.97826086956522 93.84074457083764 170.43478260869566 93.84074457083764C 177.8913043478261 93.84074457083764 184.28260869565216 103.27197518097208 191.7391304347826 103.27197518097208C 199.19565217391303 103.27197518097208 205.58695652173913 5.815925542916233 213.04347826086956 5.815925542916233C 220.5 5.815925542916233 226.8913043478261 63.97518097207859 234.34782608695653 63.97518097207859C 241.80434782608697 63.97518097207859 248.19565217391303 122.13443640124095 255.65217391304347 122.13443640124095C 263.10869565217394 122.13443640124095 269.5 79.69389865563599 276.95652173913044 79.69389865563599C 284.4130434782609 79.69389865563599 290.80434782608694 114.27507755946226 298.2608695652174 114.27507755946226C 305.7173913043478 114.27507755946226 312.1086956521739 68.69079627714581 319.5652173913043 68.69079627714581C 327.02173913043475 68.69079627714581 333.4130434782609 92.2688728024819 340.8695652173913 92.2688728024819C 348.32608695652175 92.2688728024819 354.7173913043478 49.82833505687694 362.17391304347825 49.82833505687694C 369.6304347826087 49.82833505687694 376.02173913043475 84.40951396070321 383.4782608695652 84.40951396070321C 390.9347826086956 84.40951396070321 397.32608695652175 96.98448810754911 404.7826086956522 96.98448810754911C 412.2391304347826 96.98448810754911 418.6304347826087 54.543950361944155 426.0869565217391 54.543950361944155C 433.54347826086956 54.543950361944155 439.9347826086956 67.11892450879007 447.39130434782606 67.11892450879007C 454.8478260869565 67.11892450879007 461.2391304347826 109.55946225439504 468.69565217391306 109.55946225439504C 476.1521739130435 109.55946225439504 482.54347826086956 67.11892450879007 490 67.11892450879007C 490 67.11892450879007 490 67.11892450879007 490 152M 490 67.11892450879007z" pathFrom="M -1 152L -1 152L 21.304347826086957 152L 42.608695652173914 152L 63.91304347826087 152L 85.21739130434783 152L 106.52173913043478 152L 127.82608695652173 152L 149.1304347826087 152L 170.43478260869566 152L 191.7391304347826 152L 213.04347826086956 152L 234.34782608695653 152L 255.65217391304347 152L 276.95652173913044 152L 298.2608695652174 152L 319.5652173913043 152L 340.8695652173913 152L 362.17391304347825 152L 383.4782608695652 152L 404.7826086956522 152L 426.0869565217391 152L 447.39130434782606 152L 468.69565217391306 152L 490 152"></path>
                                                         <path id="SvgjsPath2145" d="M 0 109.55946225439504C 7.456521739130435 109.55946225439504 13.847826086956523 78.12202688728024 21.304347826086957 78.12202688728024C 28.76086956521739 78.12202688728024 35.15217391304348 90.69700103412617 42.608695652173914 90.69700103412617C 50.065217391304344 90.69700103412617 56.45652173913044 71.83453981385729 63.91304347826087 71.83453981385729C 71.3695652173913 71.83453981385729 77.76086956521739 81.26577042399173 85.21739130434783 81.26577042399173C 92.67391304347827 81.26577042399173 99.06521739130434 56.115822130299904 106.52173913043478 56.115822130299904C 113.97826086956522 56.115822130299904 120.3695652173913 87.55325749741469 127.82608695652173 87.55325749741469C 135.28260869565216 87.55325749741469 141.67391304347825 96.98448810754911 149.1304347826087 96.98448810754911C 156.58695652173913 96.98448810754911 162.97826086956522 93.84074457083764 170.43478260869566 93.84074457083764C 177.8913043478261 93.84074457083764 184.28260869565216 103.27197518097208 191.7391304347826 103.27197518097208C 199.19565217391303 103.27197518097208 205.58695652173913 5.815925542916233 213.04347826086956 5.815925542916233C 220.5 5.815925542916233 226.8913043478261 63.97518097207859 234.34782608695653 63.97518097207859C 241.80434782608697 63.97518097207859 248.19565217391303 122.13443640124095 255.65217391304347 122.13443640124095C 263.10869565217394 122.13443640124095 269.5 79.69389865563599 276.95652173913044 79.69389865563599C 284.4130434782609 79.69389865563599 290.80434782608694 114.27507755946226 298.2608695652174 114.27507755946226C 305.7173913043478 114.27507755946226 312.1086956521739 68.69079627714581 319.5652173913043 68.69079627714581C 327.02173913043475 68.69079627714581 333.4130434782609 92.2688728024819 340.8695652173913 92.2688728024819C 348.32608695652175 92.2688728024819 354.7173913043478 49.82833505687694 362.17391304347825 49.82833505687694C 369.6304347826087 49.82833505687694 376.02173913043475 84.40951396070321 383.4782608695652 84.40951396070321C 390.9347826086956 84.40951396070321 397.32608695652175 96.98448810754911 404.7826086956522 96.98448810754911C 412.2391304347826 96.98448810754911 418.6304347826087 54.543950361944155 426.0869565217391 54.543950361944155C 433.54347826086956 54.543950361944155 439.9347826086956 67.11892450879007 447.39130434782606 67.11892450879007C 454.8478260869565 67.11892450879007 461.2391304347826 109.55946225439504 468.69565217391306 109.55946225439504C 476.1521739130435 109.55946225439504 482.54347826086956 67.11892450879007 490 67.11892450879007" fill="none" fill-opacity="1" stroke="#3f6ad8" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskqtp5xs5d)" pathTo="M 0 109.55946225439504C 7.456521739130435 109.55946225439504 13.847826086956523 78.12202688728024 21.304347826086957 78.12202688728024C 28.76086956521739 78.12202688728024 35.15217391304348 90.69700103412617 42.608695652173914 90.69700103412617C 50.065217391304344 90.69700103412617 56.45652173913044 71.83453981385729 63.91304347826087 71.83453981385729C 71.3695652173913 71.83453981385729 77.76086956521739 81.26577042399173 85.21739130434783 81.26577042399173C 92.67391304347827 81.26577042399173 99.06521739130434 56.115822130299904 106.52173913043478 56.115822130299904C 113.97826086956522 56.115822130299904 120.3695652173913 87.55325749741469 127.82608695652173 87.55325749741469C 135.28260869565216 87.55325749741469 141.67391304347825 96.98448810754911 149.1304347826087 96.98448810754911C 156.58695652173913 96.98448810754911 162.97826086956522 93.84074457083764 170.43478260869566 93.84074457083764C 177.8913043478261 93.84074457083764 184.28260869565216 103.27197518097208 191.7391304347826 103.27197518097208C 199.19565217391303 103.27197518097208 205.58695652173913 5.815925542916233 213.04347826086956 5.815925542916233C 220.5 5.815925542916233 226.8913043478261 63.97518097207859 234.34782608695653 63.97518097207859C 241.80434782608697 63.97518097207859 248.19565217391303 122.13443640124095 255.65217391304347 122.13443640124095C 263.10869565217394 122.13443640124095 269.5 79.69389865563599 276.95652173913044 79.69389865563599C 284.4130434782609 79.69389865563599 290.80434782608694 114.27507755946226 298.2608695652174 114.27507755946226C 305.7173913043478 114.27507755946226 312.1086956521739 68.69079627714581 319.5652173913043 68.69079627714581C 327.02173913043475 68.69079627714581 333.4130434782609 92.2688728024819 340.8695652173913 92.2688728024819C 348.32608695652175 92.2688728024819 354.7173913043478 49.82833505687694 362.17391304347825 49.82833505687694C 369.6304347826087 49.82833505687694 376.02173913043475 84.40951396070321 383.4782608695652 84.40951396070321C 390.9347826086956 84.40951396070321 397.32608695652175 96.98448810754911 404.7826086956522 96.98448810754911C 412.2391304347826 96.98448810754911 418.6304347826087 54.543950361944155 426.0869565217391 54.543950361944155C 433.54347826086956 54.543950361944155 439.9347826086956 67.11892450879007 447.39130434782606 67.11892450879007C 454.8478260869565 67.11892450879007 461.2391304347826 109.55946225439504 468.69565217391306 109.55946225439504C 476.1521739130435 109.55946225439504 482.54347826086956 67.11892450879007 490 67.11892450879007" pathFrom="M -1 152L -1 152L 21.304347826086957 152L 42.608695652173914 152L 63.91304347826087 152L 85.21739130434783 152L 106.52173913043478 152L 127.82608695652173 152L 149.1304347826087 152L 170.43478260869566 152L 191.7391304347826 152L 213.04347826086956 152L 234.34782608695653 152L 255.65217391304347 152L 276.95652173913044 152L 298.2608695652174 152L 319.5652173913043 152L 340.8695652173913 152L 362.17391304347825 152L 383.4782608695652 152L 404.7826086956522 152L 426.0869565217391 152L 447.39130434782606 152L 468.69565217391306 152L 490 152"></path>
                                                         <g id="SvgjsG2138" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                               <circle id="SvgjsCircle2194" r="0" cx="0" cy="0" class="apexcharts-marker wuofou05xi no-pointer-events" stroke="#ffffff" fill="#3f6ad8" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                            </g>
                                                         </g>
                                                      </g>
                                                      <g id="SvgjsG2139" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                   </g>
                                                   <line id="SvgjsLine2189" x1="0" y1="0" x2="490" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                   <line id="SvgjsLine2190" x1="0" y1="0" x2="490" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                   <g id="SvgjsG2191" class="apexcharts-yaxis-annotations"></g>
                                                   <g id="SvgjsG2192" class="apexcharts-xaxis-annotations"></g>
                                                   <g id="SvgjsG2193" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect2132" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g id="SvgjsG2172" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG2130" class="apexcharts-annotations"></g>
                                             </svg>
                                             <div class="apexcharts-legend" style="max-height: 76px;"></div>
                                             <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                   <span class="apexcharts-tooltip-marker" style="background-color: rgb(63, 106, 216);"></span>
                                                   <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                      <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                      <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="resize-triggers">
                                          <div class="expand-trigger">
                                             <div style="width: 491px; height: 153px;"></div>
                                          </div>
                                          <div class="contract-trigger"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02" style="width: 490px;">
                              <div class="widget-chart widget-chart2 text-start p-0">
                                 <div class="widget-chat-wrapper-outer">
                                    <div class="widget-chart-content widget-chart-content-lg pb-0">
                                       <div class="widget-chart-flex">
                                          <div class="widget-title opacity-5 text-muted text-uppercase"> Helpdesk Tickets</div>
                                       </div>
                                       <div class="widget-numbers">
                                          <div class="widget-chart-flex">
                                             <div>
                                                <span class="text-warning">34</span>
                                             </div>
                                             <div class="widget-title ms-2 font-size-lg fw-normal text-dark">
                                                <span class="opacity-5 text-muted ps-2 pe-1">5%</span>
                                                increase
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                       <div id="dashboard-sparkline-2" style="min-height: 152px;">
                                          <div id="apexcharts0lokfyfpf" class="apexcharts-canvas apexcharts0lokfyfpf apexcharts-theme-light" style="width: 490px; height: 152px;">
                                             <svg id="SvgjsSvg2196" width="490" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                <g id="SvgjsG2198" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                   <defs id="SvgjsDefs2197">
                                                      <clipPath id="gridRectMask0lokfyfpf">
                                                         <rect id="SvgjsRect2203" width="499" height="157" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                      </clipPath>
                                                      <clipPath id="gridRectMarkerMask0lokfyfpf">
                                                         <rect id="SvgjsRect2204" width="494" height="156" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                      </clipPath>
                                                      <linearGradient id="SvgjsLinearGradient2209" x1="0" y1="0" x2="0" y2="1">
                                                         <stop id="SvgjsStop2210" stop-opacity="0.7" stop-color="rgba(247,185,36,0.7)" offset="0"></stop>
                                                         <stop id="SvgjsStop2211" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop>
                                                         <stop id="SvgjsStop2212" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop>
                                                      </linearGradient>
                                                   </defs>
                                                   <line id="SvgjsLine2202" x1="0" y1="0" x2="0" y2="152" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="152" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                   <g id="SvgjsG2215" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                      <g id="SvgjsG2216" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                                   </g>
                                                   <g id="SvgjsG2242" class="apexcharts-grid">
                                                      <g id="SvgjsG2243" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                         <line id="SvgjsLine2245" x1="0" y1="0" x2="490" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2246" x1="0" y1="15.2" x2="490" y2="15.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2247" x1="0" y1="30.4" x2="490" y2="30.4" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2248" x1="0" y1="45.599999999999994" x2="490" y2="45.599999999999994" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2249" x1="0" y1="60.8" x2="490" y2="60.8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2250" x1="0" y1="76" x2="490" y2="76" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2251" x1="0" y1="91.2" x2="490" y2="91.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2252" x1="0" y1="106.4" x2="490" y2="106.4" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2253" x1="0" y1="121.60000000000001" x2="490" y2="121.60000000000001" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2254" x1="0" y1="136.8" x2="490" y2="136.8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="SvgjsLine2255" x1="0" y1="152" x2="490" y2="152" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                      </g>
                                                      <g id="SvgjsG2244" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                      <line id="SvgjsLine2257" x1="0" y1="152" x2="490" y2="152" stroke="transparent" stroke-dasharray="0"></line>
                                                      <line id="SvgjsLine2256" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line>
                                                   </g>
                                                   <g id="SvgjsG2205" class="apexcharts-area-series apexcharts-plot-series">
                                                      <g id="SvgjsG2206" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                         <path id="SvgjsPath2213" d="M 0 152L 0 92.2688728024819C 7.456521739130435 92.2688728024819 13.847826086956523 109.55946225439504 21.304347826086957 109.55946225439504C 28.76086956521739 109.55946225439504 35.15217391304348 84.40951396070321 42.608695652173914 84.40951396070321C 50.065217391304344 84.40951396070321 56.45652173913044 114.27507755946226 63.91304347826087 114.27507755946226C 71.3695652173913 114.27507755946226 77.76086956521739 81.26577042399173 85.21739130434783 81.26577042399173C 92.67391304347827 81.26577042399173 99.06521739130434 109.55946225439504 106.52173913043478 109.55946225439504C 113.97826086956522 109.55946225439504 120.3695652173913 122.13443640124095 127.82608695652173 122.13443640124095C 135.28260869565216 122.13443640124095 141.67391304347825 5.815925542916233 149.1304347826087 5.815925542916233C 156.58695652173913 5.815925542916233 162.97826086956522 49.82833505687694 170.43478260869566 49.82833505687694C 177.8913043478261 49.82833505687694 184.28260869565216 96.98448810754911 191.7391304347826 96.98448810754911C 199.19565217391303 96.98448810754911 205.58695652173913 63.97518097207859 213.04347826086956 63.97518097207859C 220.5 63.97518097207859 226.8913043478261 67.11892450879007 234.34782608695653 67.11892450879007C 241.80434782608697 67.11892450879007 248.19565217391303 78.12202688728024 255.65217391304347 78.12202688728024C 263.10869565217394 78.12202688728024 269.5 96.98448810754911 276.95652173913044 96.98448810754911C 284.4130434782609 96.98448810754911 290.80434782608694 103.27197518097208 298.2608695652174 103.27197518097208C 305.7173913043478 103.27197518097208 312.1086956521739 90.69700103412617 319.5652173913043 90.69700103412617C 327.02173913043475 90.69700103412617 333.4130434782609 67.11892450879007 340.8695652173913 67.11892450879007C 348.32608695652175 67.11892450879007 354.7173913043478 87.55325749741469 362.17391304347825 87.55325749741469C 369.6304347826087 87.55325749741469 376.02173913043475 54.543950361944155 383.4782608695652 54.543950361944155C 390.9347826086956 54.543950361944155 397.32608695652175 56.115822130299904 404.7826086956522 56.115822130299904C 412.2391304347826 56.115822130299904 418.6304347826087 79.69389865563599 426.0869565217391 79.69389865563599C 433.54347826086956 79.69389865563599 439.9347826086956 93.84074457083764 447.39130434782606 93.84074457083764C 454.8478260869565 93.84074457083764 461.2391304347826 68.69079627714581 468.69565217391306 68.69079627714581C 476.1521739130435 68.69079627714581 482.54347826086956 71.83453981385729 490 71.83453981385729C 490 71.83453981385729 490 71.83453981385729 490 152M 490 71.83453981385729z" fill="url(#SvgjsLinearGradient2209)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0lokfyfpf)" pathTo="M 0 152L 0 92.2688728024819C 7.456521739130435 92.2688728024819 13.847826086956523 109.55946225439504 21.304347826086957 109.55946225439504C 28.76086956521739 109.55946225439504 35.15217391304348 84.40951396070321 42.608695652173914 84.40951396070321C 50.065217391304344 84.40951396070321 56.45652173913044 114.27507755946226 63.91304347826087 114.27507755946226C 71.3695652173913 114.27507755946226 77.76086956521739 81.26577042399173 85.21739130434783 81.26577042399173C 92.67391304347827 81.26577042399173 99.06521739130434 109.55946225439504 106.52173913043478 109.55946225439504C 113.97826086956522 109.55946225439504 120.3695652173913 122.13443640124095 127.82608695652173 122.13443640124095C 135.28260869565216 122.13443640124095 141.67391304347825 5.815925542916233 149.1304347826087 5.815925542916233C 156.58695652173913 5.815925542916233 162.97826086956522 49.82833505687694 170.43478260869566 49.82833505687694C 177.8913043478261 49.82833505687694 184.28260869565216 96.98448810754911 191.7391304347826 96.98448810754911C 199.19565217391303 96.98448810754911 205.58695652173913 63.97518097207859 213.04347826086956 63.97518097207859C 220.5 63.97518097207859 226.8913043478261 67.11892450879007 234.34782608695653 67.11892450879007C 241.80434782608697 67.11892450879007 248.19565217391303 78.12202688728024 255.65217391304347 78.12202688728024C 263.10869565217394 78.12202688728024 269.5 96.98448810754911 276.95652173913044 96.98448810754911C 284.4130434782609 96.98448810754911 290.80434782608694 103.27197518097208 298.2608695652174 103.27197518097208C 305.7173913043478 103.27197518097208 312.1086956521739 90.69700103412617 319.5652173913043 90.69700103412617C 327.02173913043475 90.69700103412617 333.4130434782609 67.11892450879007 340.8695652173913 67.11892450879007C 348.32608695652175 67.11892450879007 354.7173913043478 87.55325749741469 362.17391304347825 87.55325749741469C 369.6304347826087 87.55325749741469 376.02173913043475 54.543950361944155 383.4782608695652 54.543950361944155C 390.9347826086956 54.543950361944155 397.32608695652175 56.115822130299904 404.7826086956522 56.115822130299904C 412.2391304347826 56.115822130299904 418.6304347826087 79.69389865563599 426.0869565217391 79.69389865563599C 433.54347826086956 79.69389865563599 439.9347826086956 93.84074457083764 447.39130434782606 93.84074457083764C 454.8478260869565 93.84074457083764 461.2391304347826 68.69079627714581 468.69565217391306 68.69079627714581C 476.1521739130435 68.69079627714581 482.54347826086956 71.83453981385729 490 71.83453981385729C 490 71.83453981385729 490 71.83453981385729 490 152M 490 71.83453981385729z" pathFrom="M -1 152L -1 152L 21.304347826086957 152L 42.608695652173914 152L 63.91304347826087 152L 85.21739130434783 152L 106.52173913043478 152L 127.82608695652173 152L 149.1304347826087 152L 170.43478260869566 152L 191.7391304347826 152L 213.04347826086956 152L 234.34782608695653 152L 255.65217391304347 152L 276.95652173913044 152L 298.2608695652174 152L 319.5652173913043 152L 340.8695652173913 152L 362.17391304347825 152L 383.4782608695652 152L 404.7826086956522 152L 426.0869565217391 152L 447.39130434782606 152L 468.69565217391306 152L 490 152"></path>
                                                         <path id="SvgjsPath2214" d="M 0 92.2688728024819C 7.456521739130435 92.2688728024819 13.847826086956523 109.55946225439504 21.304347826086957 109.55946225439504C 28.76086956521739 109.55946225439504 35.15217391304348 84.40951396070321 42.608695652173914 84.40951396070321C 50.065217391304344 84.40951396070321 56.45652173913044 114.27507755946226 63.91304347826087 114.27507755946226C 71.3695652173913 114.27507755946226 77.76086956521739 81.26577042399173 85.21739130434783 81.26577042399173C 92.67391304347827 81.26577042399173 99.06521739130434 109.55946225439504 106.52173913043478 109.55946225439504C 113.97826086956522 109.55946225439504 120.3695652173913 122.13443640124095 127.82608695652173 122.13443640124095C 135.28260869565216 122.13443640124095 141.67391304347825 5.815925542916233 149.1304347826087 5.815925542916233C 156.58695652173913 5.815925542916233 162.97826086956522 49.82833505687694 170.43478260869566 49.82833505687694C 177.8913043478261 49.82833505687694 184.28260869565216 96.98448810754911 191.7391304347826 96.98448810754911C 199.19565217391303 96.98448810754911 205.58695652173913 63.97518097207859 213.04347826086956 63.97518097207859C 220.5 63.97518097207859 226.8913043478261 67.11892450879007 234.34782608695653 67.11892450879007C 241.80434782608697 67.11892450879007 248.19565217391303 78.12202688728024 255.65217391304347 78.12202688728024C 263.10869565217394 78.12202688728024 269.5 96.98448810754911 276.95652173913044 96.98448810754911C 284.4130434782609 96.98448810754911 290.80434782608694 103.27197518097208 298.2608695652174 103.27197518097208C 305.7173913043478 103.27197518097208 312.1086956521739 90.69700103412617 319.5652173913043 90.69700103412617C 327.02173913043475 90.69700103412617 333.4130434782609 67.11892450879007 340.8695652173913 67.11892450879007C 348.32608695652175 67.11892450879007 354.7173913043478 87.55325749741469 362.17391304347825 87.55325749741469C 369.6304347826087 87.55325749741469 376.02173913043475 54.543950361944155 383.4782608695652 54.543950361944155C 390.9347826086956 54.543950361944155 397.32608695652175 56.115822130299904 404.7826086956522 56.115822130299904C 412.2391304347826 56.115822130299904 418.6304347826087 79.69389865563599 426.0869565217391 79.69389865563599C 433.54347826086956 79.69389865563599 439.9347826086956 93.84074457083764 447.39130434782606 93.84074457083764C 454.8478260869565 93.84074457083764 461.2391304347826 68.69079627714581 468.69565217391306 68.69079627714581C 476.1521739130435 68.69079627714581 482.54347826086956 71.83453981385729 490 71.83453981385729" fill="none" fill-opacity="1" stroke="#f7b924" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0lokfyfpf)" pathTo="M 0 92.2688728024819C 7.456521739130435 92.2688728024819 13.847826086956523 109.55946225439504 21.304347826086957 109.55946225439504C 28.76086956521739 109.55946225439504 35.15217391304348 84.40951396070321 42.608695652173914 84.40951396070321C 50.065217391304344 84.40951396070321 56.45652173913044 114.27507755946226 63.91304347826087 114.27507755946226C 71.3695652173913 114.27507755946226 77.76086956521739 81.26577042399173 85.21739130434783 81.26577042399173C 92.67391304347827 81.26577042399173 99.06521739130434 109.55946225439504 106.52173913043478 109.55946225439504C 113.97826086956522 109.55946225439504 120.3695652173913 122.13443640124095 127.82608695652173 122.13443640124095C 135.28260869565216 122.13443640124095 141.67391304347825 5.815925542916233 149.1304347826087 5.815925542916233C 156.58695652173913 5.815925542916233 162.97826086956522 49.82833505687694 170.43478260869566 49.82833505687694C 177.8913043478261 49.82833505687694 184.28260869565216 96.98448810754911 191.7391304347826 96.98448810754911C 199.19565217391303 96.98448810754911 205.58695652173913 63.97518097207859 213.04347826086956 63.97518097207859C 220.5 63.97518097207859 226.8913043478261 67.11892450879007 234.34782608695653 67.11892450879007C 241.80434782608697 67.11892450879007 248.19565217391303 78.12202688728024 255.65217391304347 78.12202688728024C 263.10869565217394 78.12202688728024 269.5 96.98448810754911 276.95652173913044 96.98448810754911C 284.4130434782609 96.98448810754911 290.80434782608694 103.27197518097208 298.2608695652174 103.27197518097208C 305.7173913043478 103.27197518097208 312.1086956521739 90.69700103412617 319.5652173913043 90.69700103412617C 327.02173913043475 90.69700103412617 333.4130434782609 67.11892450879007 340.8695652173913 67.11892450879007C 348.32608695652175 67.11892450879007 354.7173913043478 87.55325749741469 362.17391304347825 87.55325749741469C 369.6304347826087 87.55325749741469 376.02173913043475 54.543950361944155 383.4782608695652 54.543950361944155C 390.9347826086956 54.543950361944155 397.32608695652175 56.115822130299904 404.7826086956522 56.115822130299904C 412.2391304347826 56.115822130299904 418.6304347826087 79.69389865563599 426.0869565217391 79.69389865563599C 433.54347826086956 79.69389865563599 439.9347826086956 93.84074457083764 447.39130434782606 93.84074457083764C 454.8478260869565 93.84074457083764 461.2391304347826 68.69079627714581 468.69565217391306 68.69079627714581C 476.1521739130435 68.69079627714581 482.54347826086956 71.83453981385729 490 71.83453981385729" pathFrom="M -1 152L -1 152L 21.304347826086957 152L 42.608695652173914 152L 63.91304347826087 152L 85.21739130434783 152L 106.52173913043478 152L 127.82608695652173 152L 149.1304347826087 152L 170.43478260869566 152L 191.7391304347826 152L 213.04347826086956 152L 234.34782608695653 152L 255.65217391304347 152L 276.95652173913044 152L 298.2608695652174 152L 319.5652173913043 152L 340.8695652173913 152L 362.17391304347825 152L 383.4782608695652 152L 404.7826086956522 152L 426.0869565217391 152L 447.39130434782606 152L 468.69565217391306 152L 490 152"></path>
                                                         <g id="SvgjsG2207" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                               <circle id="SvgjsCircle2263" r="0" cx="0" cy="0" class="apexcharts-marker w6ixauz1p no-pointer-events" stroke="#ffffff" fill="#f7b924" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                            </g>
                                                         </g>
                                                      </g>
                                                      <g id="SvgjsG2208" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                   </g>
                                                   <line id="SvgjsLine2258" x1="0" y1="0" x2="490" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                   <line id="SvgjsLine2259" x1="0" y1="0" x2="490" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                   <g id="SvgjsG2260" class="apexcharts-yaxis-annotations"></g>
                                                   <g id="SvgjsG2261" class="apexcharts-xaxis-annotations"></g>
                                                   <g id="SvgjsG2262" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect2201" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g id="SvgjsG2241" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG2199" class="apexcharts-annotations"></g>
                                             </svg>
                                             <div class="apexcharts-legend" style="max-height: 76px;"></div>
                                             <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                   <span class="apexcharts-tooltip-marker" style="background-color: rgb(247, 185, 36);"></span>
                                                   <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                      <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                      <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="resize-triggers">
                                          <div class="expand-trigger">
                                             <div style="width: 491px; height: 153px;"></div>
                                          </div>
                                          <div class="contract-trigger"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1" style="width: 490px;">
                              <div class="widget-chart widget-chart2 text-start p-0">
                                 <div class="widget-chat-wrapper-outer">
                                    <div class="widget-chart-content widget-chart-content-lg pb-0">
                                       <div class="widget-chart-flex">
                                          <div class="widget-title opacity-5 text-muted text-uppercase"> New Accounts since 2018</div>
                                       </div>
                                       <div class="widget-numbers">
                                          <div class="widget-chart-flex">
                                             <div>
                                                <span class="opacity-10 text-success pe-2">
                                                <i class="fa fa-angle-up"></i>
                                                </span>
                                                <span>78</span>
                                                <small class="opacity-5 ps-1">%</small>
                                             </div>
                                             <div class="widget-title ms-2 font-size-lg fw-normal text-muted">
                                                <span class="text-success ps-2">+14</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                       <div id="" style="min-height: 152px;">
                                          <div id="" class="apexcharts-canvas apexcharts9azq0ymn apexcharts-theme-light" style="width: 767.5px; height: 152px;">
                                             <svg id="" width="767.5" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                <g id="" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                   <defs id="">
                                                      <clipPath id="">
                                                         <rect id="" width="776.5" height="157" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                      </clipPath>
                                                      <clipPath id="">
                                                         <rect id="" width="771.5" height="156" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                      </clipPath>
                                                      <linearGradient id="" x1="0" y1="0" x2="0" y2="1">
                                                         <stop id="" stop-opacity="0.7" stop-color="rgba(58,196,125,0.7)" offset="0"></stop>
                                                         <stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop>
                                                         <stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop>
                                                      </linearGradient>
                                                   </defs>
                                                   <line id="" x1="0" y1="0" x2="0" y2="152" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="152" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                   <g id="" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                      <g id="" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                                   </g>
                                                   <g id="" class="apexcharts-grid">
                                                      <g id="" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                         <line id="" x1="0" y1="0" x2="767.5" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="15.2" x2="767.5" y2="15.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="30.4" x2="767.5" y2="30.4" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="45.599999999999994" x2="767.5" y2="45.599999999999994" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="60.8" x2="767.5" y2="60.8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="76" x2="767.5" y2="76" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="91.2" x2="767.5" y2="91.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="106.4" x2="767.5" y2="106.4" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="121.60000000000001" x2="767.5" y2="121.60000000000001" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="136.8" x2="767.5" y2="136.8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="152" x2="767.5" y2="152" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                      </g>
                                                      <g id="" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                      <line id="" x1="0" y1="152" x2="767.5" y2="152" stroke="transparent" stroke-dasharray="0"></line>
                                                      <line id="" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line>
                                                   </g>
                                                   <g id="" class="apexcharts-area-series apexcharts-plot-series">
                                                      <g id="" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                         <path id="" d="M0 152L0 96.98448810754911C11.679347826086955 96.98448810754911 21.69021739130435 90.69700103412617 33.369565217391305 90.69700103412617C45.04891304347826 90.69700103412617 55.059782608695656 93.84074457083764 66.73913043478261 93.84074457083764C78.41847826086956 93.84074457083764 88.42934782608697 56.115822130299904 100.10869565217392 56.115822130299904C111.78804347826087 56.115822130299904 121.79891304347827 67.11892450879007 133.47826086956522 67.11892450879007C145.1576086956522 67.11892450879007 155.16847826086956 109.55946225439504 166.84782608695653 109.55946225439504C178.5271739130435 109.55946225439504 188.53804347826087 103.27197518097208 200.21739130434784 103.27197518097208C211.8967391304348 103.27197518097208 221.9076086956522 84.40951396070321 233.58695652173915 84.40951396070321C245.2663043478261 84.40951396070321 255.2771739130435 96.98448810754911 266.95652173913044 96.98448810754911C278.6358695652174 96.98448810754911 288.6467391304348 81.26577042399173 300.32608695652175 81.26577042399173C312.0054347826087 81.26577042399173 322.0163043478261 79.69389865563599 333.69565217391306 79.69389865563599C345.375 79.69389865563599 355.38586956521743 49.82833505687694 367.0652173913044 49.82833505687694C378.7445652173913 49.82833505687694 388.75543478260875 78.12202688728024 400.4347826086957 78.12202688728024C412.1141304347826 78.12202688728024 422.12500000000006 122.13443640124095 433.804347826087 122.13443640124095C445.48369565217394 122.13443640124095 455.49456521739137 92.2688728024819 467.1739130434783 92.2688728024819C478.85326086956525 92.2688728024819 488.8641304347826 63.97518097207859 500.54347826086956 63.97518097207859C512.2228260869565 63.97518097207859 522.2336956521739 71.83453981385729 533.9130434782609 71.83453981385729C545.5923913043479 71.83453981385729 555.6032608695652 67.11892450879007 567.2826086956522 67.11892450879007C578.9619565217392 67.11892450879007 588.9728260869565 114.27507755946226 600.6521739130435 114.27507755946226C612.3315217391305 114.27507755946226 622.3423913043478 54.543950361944155 634.0217391304348 54.543950361944155C645.7010869565217 54.543950361944155 655.7119565217391 87.55325749741469 667.3913043478261 87.55325749741469C679.070652173913 87.55325749741469 689.0815217391305 68.69079627714581 700.7608695652174 68.69079627714581C712.4402173913044 68.69079627714581 722.4510869565217 5.815925542916233 734.1304347826087 5.815925542916233C745.8097826086957 5.815925542916233 755.820652173913 109.55946225439504 767.5 109.55946225439504C767.5 109.55946225439504 767.5 109.55946225439504 767.5 152M767.5 109.55946225439504C767.5 109.55946225439504 767.5 109.55946225439504 767.5 109.55946225439504 " fill="url(#SvgjsLinearGradient1155)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask9azq0ymn)" pathTo="M 0 152L 0 96.98448810754911C 11.679347826086955 96.98448810754911 21.69021739130435 90.69700103412617 33.369565217391305 90.69700103412617C 45.04891304347826 90.69700103412617 55.059782608695656 93.84074457083764 66.73913043478261 93.84074457083764C 78.41847826086956 93.84074457083764 88.42934782608697 56.115822130299904 100.10869565217392 56.115822130299904C 111.78804347826087 56.115822130299904 121.79891304347827 67.11892450879007 133.47826086956522 67.11892450879007C 145.1576086956522 67.11892450879007 155.16847826086956 109.55946225439504 166.84782608695653 109.55946225439504C 178.5271739130435 109.55946225439504 188.53804347826087 103.27197518097208 200.21739130434784 103.27197518097208C 211.8967391304348 103.27197518097208 221.9076086956522 84.40951396070321 233.58695652173915 84.40951396070321C 245.2663043478261 84.40951396070321 255.2771739130435 96.98448810754911 266.95652173913044 96.98448810754911C 278.6358695652174 96.98448810754911 288.6467391304348 81.26577042399173 300.32608695652175 81.26577042399173C 312.0054347826087 81.26577042399173 322.0163043478261 79.69389865563599 333.69565217391306 79.69389865563599C 345.375 79.69389865563599 355.38586956521743 49.82833505687694 367.0652173913044 49.82833505687694C 378.7445652173913 49.82833505687694 388.75543478260875 78.12202688728024 400.4347826086957 78.12202688728024C 412.1141304347826 78.12202688728024 422.12500000000006 122.13443640124095 433.804347826087 122.13443640124095C 445.48369565217394 122.13443640124095 455.49456521739137 92.2688728024819 467.1739130434783 92.2688728024819C 478.85326086956525 92.2688728024819 488.8641304347826 63.97518097207859 500.54347826086956 63.97518097207859C 512.2228260869565 63.97518097207859 522.2336956521739 71.83453981385729 533.9130434782609 71.83453981385729C 545.5923913043479 71.83453981385729 555.6032608695652 67.11892450879007 567.2826086956522 67.11892450879007C 578.9619565217392 67.11892450879007 588.9728260869565 114.27507755946226 600.6521739130435 114.27507755946226C 612.3315217391305 114.27507755946226 622.3423913043478 54.543950361944155 634.0217391304348 54.543950361944155C 645.7010869565217 54.543950361944155 655.7119565217391 87.55325749741469 667.3913043478261 87.55325749741469C 679.070652173913 87.55325749741469 689.0815217391305 68.69079627714581 700.7608695652174 68.69079627714581C 712.4402173913044 68.69079627714581 722.4510869565217 5.815925542916233 734.1304347826087 5.815925542916233C 745.8097826086957 5.815925542916233 755.820652173913 109.55946225439504 767.5 109.55946225439504C 767.5 109.55946225439504 767.5 109.55946225439504 767.5 152M 767.5 109.55946225439504z" pathFrom="M -1 152L -1 152L 33.369565217391305 152L 66.73913043478261 152L 100.10869565217392 152L 133.47826086956522 152L 166.84782608695653 152L 200.21739130434784 152L 233.58695652173915 152L 266.95652173913044 152L 300.32608695652175 152L 333.69565217391306 152L 367.0652173913044 152L 400.4347826086957 152L 433.804347826087 152L 467.1739130434783 152L 500.54347826086956 152L 533.9130434782609 152L 567.2826086956522 152L 600.6521739130435 152L 634.0217391304348 152L 667.3913043478261 152L 700.7608695652174 152L 734.1304347826087 152L 767.5 152"></path>
                                                         <path id="" d="M0 96.98448810754911C11.679347826086955 96.98448810754911 21.69021739130435 90.69700103412617 33.369565217391305 90.69700103412617C45.04891304347826 90.69700103412617 55.059782608695656 93.84074457083764 66.73913043478261 93.84074457083764C78.41847826086956 93.84074457083764 88.42934782608697 56.115822130299904 100.10869565217392 56.115822130299904C111.78804347826087 56.115822130299904 121.79891304347827 67.11892450879007 133.47826086956522 67.11892450879007C145.1576086956522 67.11892450879007 155.16847826086956 109.55946225439504 166.84782608695653 109.55946225439504C178.5271739130435 109.55946225439504 188.53804347826087 103.27197518097208 200.21739130434784 103.27197518097208C211.8967391304348 103.27197518097208 221.9076086956522 84.40951396070321 233.58695652173915 84.40951396070321C245.2663043478261 84.40951396070321 255.2771739130435 96.98448810754911 266.95652173913044 96.98448810754911C278.6358695652174 96.98448810754911 288.6467391304348 81.26577042399173 300.32608695652175 81.26577042399173C312.0054347826087 81.26577042399173 322.0163043478261 79.69389865563599 333.69565217391306 79.69389865563599C345.375 79.69389865563599 355.38586956521743 49.82833505687694 367.0652173913044 49.82833505687694C378.7445652173913 49.82833505687694 388.75543478260875 78.12202688728024 400.4347826086957 78.12202688728024C412.1141304347826 78.12202688728024 422.12500000000006 122.13443640124095 433.804347826087 122.13443640124095C445.48369565217394 122.13443640124095 455.49456521739137 92.2688728024819 467.1739130434783 92.2688728024819C478.85326086956525 92.2688728024819 488.8641304347826 63.97518097207859 500.54347826086956 63.97518097207859C512.2228260869565 63.97518097207859 522.2336956521739 71.83453981385729 533.9130434782609 71.83453981385729C545.5923913043479 71.83453981385729 555.6032608695652 67.11892450879007 567.2826086956522 67.11892450879007C578.9619565217392 67.11892450879007 588.9728260869565 114.27507755946226 600.6521739130435 114.27507755946226C612.3315217391305 114.27507755946226 622.3423913043478 54.543950361944155 634.0217391304348 54.543950361944155C645.7010869565217 54.543950361944155 655.7119565217391 87.55325749741469 667.3913043478261 87.55325749741469C679.070652173913 87.55325749741469 689.0815217391305 68.69079627714581 700.7608695652174 68.69079627714581C712.4402173913044 68.69079627714581 722.4510869565217 5.815925542916233 734.1304347826087 5.815925542916233C745.8097826086957 5.815925542916233 755.820652173913 109.55946225439504 767.5 109.55946225439504C767.5 109.55946225439504 767.5 109.55946225439504 767.5 109.55946225439504 " fill="none" fill-opacity="1" stroke="#3ac47d" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask9azq0ymn)" pathTo="M 0 96.98448810754911C 11.679347826086955 96.98448810754911 21.69021739130435 90.69700103412617 33.369565217391305 90.69700103412617C 45.04891304347826 90.69700103412617 55.059782608695656 93.84074457083764 66.73913043478261 93.84074457083764C 78.41847826086956 93.84074457083764 88.42934782608697 56.115822130299904 100.10869565217392 56.115822130299904C 111.78804347826087 56.115822130299904 121.79891304347827 67.11892450879007 133.47826086956522 67.11892450879007C 145.1576086956522 67.11892450879007 155.16847826086956 109.55946225439504 166.84782608695653 109.55946225439504C 178.5271739130435 109.55946225439504 188.53804347826087 103.27197518097208 200.21739130434784 103.27197518097208C 211.8967391304348 103.27197518097208 221.9076086956522 84.40951396070321 233.58695652173915 84.40951396070321C 245.2663043478261 84.40951396070321 255.2771739130435 96.98448810754911 266.95652173913044 96.98448810754911C 278.6358695652174 96.98448810754911 288.6467391304348 81.26577042399173 300.32608695652175 81.26577042399173C 312.0054347826087 81.26577042399173 322.0163043478261 79.69389865563599 333.69565217391306 79.69389865563599C 345.375 79.69389865563599 355.38586956521743 49.82833505687694 367.0652173913044 49.82833505687694C 378.7445652173913 49.82833505687694 388.75543478260875 78.12202688728024 400.4347826086957 78.12202688728024C 412.1141304347826 78.12202688728024 422.12500000000006 122.13443640124095 433.804347826087 122.13443640124095C 445.48369565217394 122.13443640124095 455.49456521739137 92.2688728024819 467.1739130434783 92.2688728024819C 478.85326086956525 92.2688728024819 488.8641304347826 63.97518097207859 500.54347826086956 63.97518097207859C 512.2228260869565 63.97518097207859 522.2336956521739 71.83453981385729 533.9130434782609 71.83453981385729C 545.5923913043479 71.83453981385729 555.6032608695652 67.11892450879007 567.2826086956522 67.11892450879007C 578.9619565217392 67.11892450879007 588.9728260869565 114.27507755946226 600.6521739130435 114.27507755946226C 612.3315217391305 114.27507755946226 622.3423913043478 54.543950361944155 634.0217391304348 54.543950361944155C 645.7010869565217 54.543950361944155 655.7119565217391 87.55325749741469 667.3913043478261 87.55325749741469C 679.070652173913 87.55325749741469 689.0815217391305 68.69079627714581 700.7608695652174 68.69079627714581C 712.4402173913044 68.69079627714581 722.4510869565217 5.815925542916233 734.1304347826087 5.815925542916233C 745.8097826086957 5.815925542916233 755.820652173913 109.55946225439504 767.5 109.55946225439504" pathFrom="M -1 152L -1 152L 33.369565217391305 152L 66.73913043478261 152L 100.10869565217392 152L 133.47826086956522 152L 166.84782608695653 152L 200.21739130434784 152L 233.58695652173915 152L 266.95652173913044 152L 300.32608695652175 152L 333.69565217391306 152L 367.0652173913044 152L 400.4347826086957 152L 433.804347826087 152L 467.1739130434783 152L 500.54347826086956 152L 533.9130434782609 152L 567.2826086956522 152L 600.6521739130435 152L 634.0217391304348 152L 667.3913043478261 152L 700.7608695652174 152L 734.1304347826087 152L 767.5 152"></path>
                                                         <g id="" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                               <circle id="" r="0" cx="0" cy="0" class="apexcharts-marker wwo0rhnk4 no-pointer-events" stroke="#ffffff" fill="#3ac47d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                            </g>
                                                         </g>
                                                      </g>
                                                      <g id="" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                   </g>
                                                   <line id="" x1="0" y1="0" x2="767.5" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                   <line id="" x1="0" y1="0" x2="767.5" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                   <g id="" class="apexcharts-yaxis-annotations"></g>
                                                   <g id="" class="apexcharts-xaxis-annotations"></g>
                                                   <g id="" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g id="" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                <g id="" class="apexcharts-annotations"></g>
                                             </svg>
                                             <div class="apexcharts-legend" style="max-height: 76px;"></div>
                                             <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                   <span class="apexcharts-tooltip-marker" style="background-color: rgb(58, 196, 125);"></span>
                                                   <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                      <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                      <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="resize-triggers">
                                          <div class="expand-trigger">
                                             <div style="width: 769px; height: 153px;"></div>
                                          </div>
                                          <div class="contract-trigger"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="slick-slide slick-cloned" data-slick-index="4" id="" aria-hidden="true" tabindex="-1" style="width: 490px;">
                              <div class="widget-chart widget-chart2 text-start p-0">
                                 <div class="widget-chat-wrapper-outer">
                                    <div class="widget-chart-content widget-chart-content-lg pb-0">
                                       <div class="widget-chart-flex">
                                          <div class="widget-title opacity-5 text-muted text-uppercase"> Last Year Total Sales</div>
                                       </div>
                                       <div class="widget-numbers">
                                          <div class="widget-chart-flex">
                                             <div>
                                                <small class="opacity-3 pe-1">$</small>
                                                <span>629</span>
                                                <span class="text-primary ps-3">
                                                <i class="fa fa-angle-down"></i>
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                       <div id="" style="min-height: 152px;">
                                          <div id="" class="apexcharts-canvas apexchartsqtp5xs5d apexcharts-theme-light" style="width: 767.5px; height: 152px;">
                                             <svg id="" width="767.5" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                <g id="" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                   <defs id="">
                                                      <clipPath id="">
                                                         <rect id="" width="776.5" height="157" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                      </clipPath>
                                                      <clipPath id="">
                                                         <rect id="" width="771.5" height="156" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                      </clipPath>
                                                      <linearGradient id="" x1="0" y1="0" x2="0" y2="1">
                                                         <stop id="" stop-opacity="0.7" stop-color="rgba(63,106,216,0.7)" offset="0"></stop>
                                                         <stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop>
                                                         <stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop>
                                                      </linearGradient>
                                                   </defs>
                                                   <line id="" x1="0" y1="0" x2="0" y2="152" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="152" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                   <g id="" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                      <g id="" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                                   </g>
                                                   <g id="" class="apexcharts-grid">
                                                      <g id="" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                         <line id="" x1="0" y1="0" x2="767.5" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="15.2" x2="767.5" y2="15.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="30.4" x2="767.5" y2="30.4" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="45.599999999999994" x2="767.5" y2="45.599999999999994" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="60.8" x2="767.5" y2="60.8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="76" x2="767.5" y2="76" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="91.2" x2="767.5" y2="91.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="106.4" x2="767.5" y2="106.4" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="121.60000000000001" x2="767.5" y2="121.60000000000001" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="136.8" x2="767.5" y2="136.8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="152" x2="767.5" y2="152" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                      </g>
                                                      <g id="" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                      <line id="" x1="0" y1="152" x2="767.5" y2="152" stroke="transparent" stroke-dasharray="0"></line>
                                                      <line id="" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line>
                                                   </g>
                                                   <g id="" class="apexcharts-area-series apexcharts-plot-series">
                                                      <g id="" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                         <path id="" d="M0 152L0 109.55946225439504C11.679347826086955 109.55946225439504 21.69021739130435 78.12202688728024 33.369565217391305 78.12202688728024C45.04891304347826 78.12202688728024 55.059782608695656 90.69700103412617 66.73913043478261 90.69700103412617C78.41847826086956 90.69700103412617 88.42934782608697 71.83453981385729 100.10869565217392 71.83453981385729C111.78804347826087 71.83453981385729 121.79891304347827 81.26577042399173 133.47826086956522 81.26577042399173C145.1576086956522 81.26577042399173 155.16847826086956 56.115822130299904 166.84782608695653 56.115822130299904C178.5271739130435 56.115822130299904 188.53804347826087 87.55325749741469 200.21739130434784 87.55325749741469C211.8967391304348 87.55325749741469 221.9076086956522 96.98448810754911 233.58695652173915 96.98448810754911C245.2663043478261 96.98448810754911 255.2771739130435 93.84074457083764 266.95652173913044 93.84074457083764C278.6358695652174 93.84074457083764 288.6467391304348 103.27197518097208 300.32608695652175 103.27197518097208C312.0054347826087 103.27197518097208 322.0163043478261 5.815925542916233 333.69565217391306 5.815925542916233C345.375 5.815925542916233 355.38586956521743 63.97518097207859 367.0652173913044 63.97518097207859C378.7445652173913 63.97518097207859 388.75543478260875 122.13443640124095 400.4347826086957 122.13443640124095C412.1141304347826 122.13443640124095 422.12500000000006 79.69389865563599 433.804347826087 79.69389865563599C445.48369565217394 79.69389865563599 455.49456521739137 114.27507755946226 467.1739130434783 114.27507755946226C478.85326086956525 114.27507755946226 488.8641304347826 68.69079627714581 500.54347826086956 68.69079627714581C512.2228260869565 68.69079627714581 522.2336956521739 92.2688728024819 533.9130434782609 92.2688728024819C545.5923913043479 92.2688728024819 555.6032608695652 49.82833505687694 567.2826086956522 49.82833505687694C578.9619565217392 49.82833505687694 588.9728260869565 84.40951396070321 600.6521739130435 84.40951396070321C612.3315217391305 84.40951396070321 622.3423913043478 96.98448810754911 634.0217391304348 96.98448810754911C645.7010869565217 96.98448810754911 655.7119565217391 54.543950361944155 667.3913043478261 54.543950361944155C679.070652173913 54.543950361944155 689.0815217391305 67.11892450879007 700.7608695652174 67.11892450879007C712.4402173913044 67.11892450879007 722.4510869565217 109.55946225439504 734.1304347826087 109.55946225439504C745.8097826086957 109.55946225439504 755.820652173913 67.11892450879007 767.5 67.11892450879007C767.5 67.11892450879007 767.5 67.11892450879007 767.5 152M767.5 67.11892450879007C767.5 67.11892450879007 767.5 67.11892450879007 767.5 67.11892450879007 " fill="url(#SvgjsLinearGradient1019)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskqtp5xs5d)" pathTo="M 0 152L 0 109.55946225439504C 11.679347826086955 109.55946225439504 21.69021739130435 78.12202688728024 33.369565217391305 78.12202688728024C 45.04891304347826 78.12202688728024 55.059782608695656 90.69700103412617 66.73913043478261 90.69700103412617C 78.41847826086956 90.69700103412617 88.42934782608697 71.83453981385729 100.10869565217392 71.83453981385729C 111.78804347826087 71.83453981385729 121.79891304347827 81.26577042399173 133.47826086956522 81.26577042399173C 145.1576086956522 81.26577042399173 155.16847826086956 56.115822130299904 166.84782608695653 56.115822130299904C 178.5271739130435 56.115822130299904 188.53804347826087 87.55325749741469 200.21739130434784 87.55325749741469C 211.8967391304348 87.55325749741469 221.9076086956522 96.98448810754911 233.58695652173915 96.98448810754911C 245.2663043478261 96.98448810754911 255.2771739130435 93.84074457083764 266.95652173913044 93.84074457083764C 278.6358695652174 93.84074457083764 288.6467391304348 103.27197518097208 300.32608695652175 103.27197518097208C 312.0054347826087 103.27197518097208 322.0163043478261 5.815925542916233 333.69565217391306 5.815925542916233C 345.375 5.815925542916233 355.38586956521743 63.97518097207859 367.0652173913044 63.97518097207859C 378.7445652173913 63.97518097207859 388.75543478260875 122.13443640124095 400.4347826086957 122.13443640124095C 412.1141304347826 122.13443640124095 422.12500000000006 79.69389865563599 433.804347826087 79.69389865563599C 445.48369565217394 79.69389865563599 455.49456521739137 114.27507755946226 467.1739130434783 114.27507755946226C 478.85326086956525 114.27507755946226 488.8641304347826 68.69079627714581 500.54347826086956 68.69079627714581C 512.2228260869565 68.69079627714581 522.2336956521739 92.2688728024819 533.9130434782609 92.2688728024819C 545.5923913043479 92.2688728024819 555.6032608695652 49.82833505687694 567.2826086956522 49.82833505687694C 578.9619565217392 49.82833505687694 588.9728260869565 84.40951396070321 600.6521739130435 84.40951396070321C 612.3315217391305 84.40951396070321 622.3423913043478 96.98448810754911 634.0217391304348 96.98448810754911C 645.7010869565217 96.98448810754911 655.7119565217391 54.543950361944155 667.3913043478261 54.543950361944155C 679.070652173913 54.543950361944155 689.0815217391305 67.11892450879007 700.7608695652174 67.11892450879007C 712.4402173913044 67.11892450879007 722.4510869565217 109.55946225439504 734.1304347826087 109.55946225439504C 745.8097826086957 109.55946225439504 755.820652173913 67.11892450879007 767.5 67.11892450879007C 767.5 67.11892450879007 767.5 67.11892450879007 767.5 152M 767.5 67.11892450879007z" pathFrom="M -1 152L -1 152L 33.369565217391305 152L 66.73913043478261 152L 100.10869565217392 152L 133.47826086956522 152L 166.84782608695653 152L 200.21739130434784 152L 233.58695652173915 152L 266.95652173913044 152L 300.32608695652175 152L 333.69565217391306 152L 367.0652173913044 152L 400.4347826086957 152L 433.804347826087 152L 467.1739130434783 152L 500.54347826086956 152L 533.9130434782609 152L 567.2826086956522 152L 600.6521739130435 152L 634.0217391304348 152L 667.3913043478261 152L 700.7608695652174 152L 734.1304347826087 152L 767.5 152"></path>
                                                         <path id="" d="M0 109.55946225439504C11.679347826086955 109.55946225439504 21.69021739130435 78.12202688728024 33.369565217391305 78.12202688728024C45.04891304347826 78.12202688728024 55.059782608695656 90.69700103412617 66.73913043478261 90.69700103412617C78.41847826086956 90.69700103412617 88.42934782608697 71.83453981385729 100.10869565217392 71.83453981385729C111.78804347826087 71.83453981385729 121.79891304347827 81.26577042399173 133.47826086956522 81.26577042399173C145.1576086956522 81.26577042399173 155.16847826086956 56.115822130299904 166.84782608695653 56.115822130299904C178.5271739130435 56.115822130299904 188.53804347826087 87.55325749741469 200.21739130434784 87.55325749741469C211.8967391304348 87.55325749741469 221.9076086956522 96.98448810754911 233.58695652173915 96.98448810754911C245.2663043478261 96.98448810754911 255.2771739130435 93.84074457083764 266.95652173913044 93.84074457083764C278.6358695652174 93.84074457083764 288.6467391304348 103.27197518097208 300.32608695652175 103.27197518097208C312.0054347826087 103.27197518097208 322.0163043478261 5.815925542916233 333.69565217391306 5.815925542916233C345.375 5.815925542916233 355.38586956521743 63.97518097207859 367.0652173913044 63.97518097207859C378.7445652173913 63.97518097207859 388.75543478260875 122.13443640124095 400.4347826086957 122.13443640124095C412.1141304347826 122.13443640124095 422.12500000000006 79.69389865563599 433.804347826087 79.69389865563599C445.48369565217394 79.69389865563599 455.49456521739137 114.27507755946226 467.1739130434783 114.27507755946226C478.85326086956525 114.27507755946226 488.8641304347826 68.69079627714581 500.54347826086956 68.69079627714581C512.2228260869565 68.69079627714581 522.2336956521739 92.2688728024819 533.9130434782609 92.2688728024819C545.5923913043479 92.2688728024819 555.6032608695652 49.82833505687694 567.2826086956522 49.82833505687694C578.9619565217392 49.82833505687694 588.9728260869565 84.40951396070321 600.6521739130435 84.40951396070321C612.3315217391305 84.40951396070321 622.3423913043478 96.98448810754911 634.0217391304348 96.98448810754911C645.7010869565217 96.98448810754911 655.7119565217391 54.543950361944155 667.3913043478261 54.543950361944155C679.070652173913 54.543950361944155 689.0815217391305 67.11892450879007 700.7608695652174 67.11892450879007C712.4402173913044 67.11892450879007 722.4510869565217 109.55946225439504 734.1304347826087 109.55946225439504C745.8097826086957 109.55946225439504 755.820652173913 67.11892450879007 767.5 67.11892450879007C767.5 67.11892450879007 767.5 67.11892450879007 767.5 67.11892450879007 " fill="none" fill-opacity="1" stroke="#3f6ad8" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskqtp5xs5d)" pathTo="M 0 109.55946225439504C 11.679347826086955 109.55946225439504 21.69021739130435 78.12202688728024 33.369565217391305 78.12202688728024C 45.04891304347826 78.12202688728024 55.059782608695656 90.69700103412617 66.73913043478261 90.69700103412617C 78.41847826086956 90.69700103412617 88.42934782608697 71.83453981385729 100.10869565217392 71.83453981385729C 111.78804347826087 71.83453981385729 121.79891304347827 81.26577042399173 133.47826086956522 81.26577042399173C 145.1576086956522 81.26577042399173 155.16847826086956 56.115822130299904 166.84782608695653 56.115822130299904C 178.5271739130435 56.115822130299904 188.53804347826087 87.55325749741469 200.21739130434784 87.55325749741469C 211.8967391304348 87.55325749741469 221.9076086956522 96.98448810754911 233.58695652173915 96.98448810754911C 245.2663043478261 96.98448810754911 255.2771739130435 93.84074457083764 266.95652173913044 93.84074457083764C 278.6358695652174 93.84074457083764 288.6467391304348 103.27197518097208 300.32608695652175 103.27197518097208C 312.0054347826087 103.27197518097208 322.0163043478261 5.815925542916233 333.69565217391306 5.815925542916233C 345.375 5.815925542916233 355.38586956521743 63.97518097207859 367.0652173913044 63.97518097207859C 378.7445652173913 63.97518097207859 388.75543478260875 122.13443640124095 400.4347826086957 122.13443640124095C 412.1141304347826 122.13443640124095 422.12500000000006 79.69389865563599 433.804347826087 79.69389865563599C 445.48369565217394 79.69389865563599 455.49456521739137 114.27507755946226 467.1739130434783 114.27507755946226C 478.85326086956525 114.27507755946226 488.8641304347826 68.69079627714581 500.54347826086956 68.69079627714581C 512.2228260869565 68.69079627714581 522.2336956521739 92.2688728024819 533.9130434782609 92.2688728024819C 545.5923913043479 92.2688728024819 555.6032608695652 49.82833505687694 567.2826086956522 49.82833505687694C 578.9619565217392 49.82833505687694 588.9728260869565 84.40951396070321 600.6521739130435 84.40951396070321C 612.3315217391305 84.40951396070321 622.3423913043478 96.98448810754911 634.0217391304348 96.98448810754911C 645.7010869565217 96.98448810754911 655.7119565217391 54.543950361944155 667.3913043478261 54.543950361944155C 679.070652173913 54.543950361944155 689.0815217391305 67.11892450879007 700.7608695652174 67.11892450879007C 712.4402173913044 67.11892450879007 722.4510869565217 109.55946225439504 734.1304347826087 109.55946225439504C 745.8097826086957 109.55946225439504 755.820652173913 67.11892450879007 767.5 67.11892450879007" pathFrom="M -1 152L -1 152L 33.369565217391305 152L 66.73913043478261 152L 100.10869565217392 152L 133.47826086956522 152L 166.84782608695653 152L 200.21739130434784 152L 233.58695652173915 152L 266.95652173913044 152L 300.32608695652175 152L 333.69565217391306 152L 367.0652173913044 152L 400.4347826086957 152L 433.804347826087 152L 467.1739130434783 152L 500.54347826086956 152L 533.9130434782609 152L 567.2826086956522 152L 600.6521739130435 152L 634.0217391304348 152L 667.3913043478261 152L 700.7608695652174 152L 734.1304347826087 152L 767.5 152"></path>
                                                         <g id="" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                               <circle id="" r="0" cx="0" cy="0" class="apexcharts-marker wmsc915xg no-pointer-events" stroke="#ffffff" fill="#3f6ad8" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                            </g>
                                                         </g>
                                                      </g>
                                                      <g id="" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                   </g>
                                                   <line id="" x1="0" y1="0" x2="767.5" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                   <line id="" x1="0" y1="0" x2="767.5" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                   <g id="" class="apexcharts-yaxis-annotations"></g>
                                                   <g id="" class="apexcharts-xaxis-annotations"></g>
                                                   <g id="" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g id="" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                <g id="" class="apexcharts-annotations"></g>
                                             </svg>
                                             <div class="apexcharts-legend" style="max-height: 76px;"></div>
                                             <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                   <span class="apexcharts-tooltip-marker" style="background-color: rgb(63, 106, 216);"></span>
                                                   <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                      <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                      <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="resize-triggers">
                                          <div class="expand-trigger">
                                             <div style="width: 769px; height: 153px;"></div>
                                          </div>
                                          <div class="contract-trigger"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" tabindex="-1" style="width: 490px;">
                              <div class="widget-chart widget-chart2 text-start p-0">
                                 <div class="widget-chat-wrapper-outer">
                                    <div class="widget-chart-content widget-chart-content-lg pb-0">
                                       <div class="widget-chart-flex">
                                          <div class="widget-title opacity-5 text-muted text-uppercase"> Helpdesk Tickets</div>
                                       </div>
                                       <div class="widget-numbers">
                                          <div class="widget-chart-flex">
                                             <div>
                                                <span class="text-warning">34</span>
                                             </div>
                                             <div class="widget-title ms-2 font-size-lg fw-normal text-dark">
                                                <span class="opacity-5 text-muted ps-2 pe-1">5%</span>
                                                increase
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                       <div id="" style="min-height: 152px;">
                                          <div id="" class="apexcharts-canvas apexcharts0lokfyfpf apexcharts-theme-light" style="width: 767.5px; height: 152px;">
                                             <svg id="" width="767.5" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                <g id="" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                   <defs id="">
                                                      <clipPath id="">
                                                         <rect id="" width="776.5" height="157" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                      </clipPath>
                                                      <clipPath id="">
                                                         <rect id="" width="771.5" height="156" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                      </clipPath>
                                                      <linearGradient id="" x1="0" y1="0" x2="0" y2="1">
                                                         <stop id="" stop-opacity="0.7" stop-color="rgba(247,185,36,0.7)" offset="0"></stop>
                                                         <stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop>
                                                         <stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop>
                                                      </linearGradient>
                                                   </defs>
                                                   <line id="" x1="0" y1="0" x2="0" y2="152" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="152" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                   <g id="" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                      <g id="" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                                   </g>
                                                   <g id="" class="apexcharts-grid">
                                                      <g id="" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                         <line id="" x1="0" y1="0" x2="767.5" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="15.2" x2="767.5" y2="15.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="30.4" x2="767.5" y2="30.4" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="45.599999999999994" x2="767.5" y2="45.599999999999994" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="60.8" x2="767.5" y2="60.8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="76" x2="767.5" y2="76" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="91.2" x2="767.5" y2="91.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="106.4" x2="767.5" y2="106.4" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="121.60000000000001" x2="767.5" y2="121.60000000000001" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="136.8" x2="767.5" y2="136.8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                         <line id="" x1="0" y1="152" x2="767.5" y2="152" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                      </g>
                                                      <g id="" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                      <line id="" x1="0" y1="152" x2="767.5" y2="152" stroke="transparent" stroke-dasharray="0"></line>
                                                      <line id="" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line>
                                                   </g>
                                                   <g id="" class="apexcharts-area-series apexcharts-plot-series">
                                                      <g id="" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                         <path id="" d="M0 152L0 92.2688728024819C11.679347826086955 92.2688728024819 21.69021739130435 109.55946225439504 33.369565217391305 109.55946225439504C45.04891304347826 109.55946225439504 55.059782608695656 84.40951396070321 66.73913043478261 84.40951396070321C78.41847826086956 84.40951396070321 88.42934782608697 114.27507755946226 100.10869565217392 114.27507755946226C111.78804347826087 114.27507755946226 121.79891304347827 81.26577042399173 133.47826086956522 81.26577042399173C145.1576086956522 81.26577042399173 155.16847826086956 109.55946225439504 166.84782608695653 109.55946225439504C178.5271739130435 109.55946225439504 188.53804347826087 122.13443640124095 200.21739130434784 122.13443640124095C211.8967391304348 122.13443640124095 221.9076086956522 5.815925542916233 233.58695652173915 5.815925542916233C245.2663043478261 5.815925542916233 255.2771739130435 49.82833505687694 266.95652173913044 49.82833505687694C278.6358695652174 49.82833505687694 288.6467391304348 96.98448810754911 300.32608695652175 96.98448810754911C312.0054347826087 96.98448810754911 322.0163043478261 63.97518097207859 333.69565217391306 63.97518097207859C345.375 63.97518097207859 355.38586956521743 67.11892450879007 367.0652173913044 67.11892450879007C378.7445652173913 67.11892450879007 388.75543478260875 78.12202688728024 400.4347826086957 78.12202688728024C412.1141304347826 78.12202688728024 422.12500000000006 96.98448810754911 433.804347826087 96.98448810754911C445.48369565217394 96.98448810754911 455.49456521739137 103.27197518097208 467.1739130434783 103.27197518097208C478.85326086956525 103.27197518097208 488.8641304347826 90.69700103412617 500.54347826086956 90.69700103412617C512.2228260869565 90.69700103412617 522.2336956521739 67.11892450879007 533.9130434782609 67.11892450879007C545.5923913043479 67.11892450879007 555.6032608695652 87.55325749741469 567.2826086956522 87.55325749741469C578.9619565217392 87.55325749741469 588.9728260869565 54.543950361944155 600.6521739130435 54.543950361944155C612.3315217391305 54.543950361944155 622.3423913043478 56.115822130299904 634.0217391304348 56.115822130299904C645.7010869565217 56.115822130299904 655.7119565217391 79.69389865563599 667.3913043478261 79.69389865563599C679.070652173913 79.69389865563599 689.0815217391305 93.84074457083764 700.7608695652174 93.84074457083764C712.4402173913044 93.84074457083764 722.4510869565217 68.69079627714581 734.1304347826087 68.69079627714581C745.8097826086957 68.69079627714581 755.820652173913 71.83453981385729 767.5 71.83453981385729C767.5 71.83453981385729 767.5 71.83453981385729 767.5 152M767.5 71.83453981385729C767.5 71.83453981385729 767.5 71.83453981385729 767.5 71.83453981385729 " fill="url(#SvgjsLinearGradient1087)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0lokfyfpf)" pathTo="M 0 152L 0 92.2688728024819C 11.679347826086955 92.2688728024819 21.69021739130435 109.55946225439504 33.369565217391305 109.55946225439504C 45.04891304347826 109.55946225439504 55.059782608695656 84.40951396070321 66.73913043478261 84.40951396070321C 78.41847826086956 84.40951396070321 88.42934782608697 114.27507755946226 100.10869565217392 114.27507755946226C 111.78804347826087 114.27507755946226 121.79891304347827 81.26577042399173 133.47826086956522 81.26577042399173C 145.1576086956522 81.26577042399173 155.16847826086956 109.55946225439504 166.84782608695653 109.55946225439504C 178.5271739130435 109.55946225439504 188.53804347826087 122.13443640124095 200.21739130434784 122.13443640124095C 211.8967391304348 122.13443640124095 221.9076086956522 5.815925542916233 233.58695652173915 5.815925542916233C 245.2663043478261 5.815925542916233 255.2771739130435 49.82833505687694 266.95652173913044 49.82833505687694C 278.6358695652174 49.82833505687694 288.6467391304348 96.98448810754911 300.32608695652175 96.98448810754911C 312.0054347826087 96.98448810754911 322.0163043478261 63.97518097207859 333.69565217391306 63.97518097207859C 345.375 63.97518097207859 355.38586956521743 67.11892450879007 367.0652173913044 67.11892450879007C 378.7445652173913 67.11892450879007 388.75543478260875 78.12202688728024 400.4347826086957 78.12202688728024C 412.1141304347826 78.12202688728024 422.12500000000006 96.98448810754911 433.804347826087 96.98448810754911C 445.48369565217394 96.98448810754911 455.49456521739137 103.27197518097208 467.1739130434783 103.27197518097208C 478.85326086956525 103.27197518097208 488.8641304347826 90.69700103412617 500.54347826086956 90.69700103412617C 512.2228260869565 90.69700103412617 522.2336956521739 67.11892450879007 533.9130434782609 67.11892450879007C 545.5923913043479 67.11892450879007 555.6032608695652 87.55325749741469 567.2826086956522 87.55325749741469C 578.9619565217392 87.55325749741469 588.9728260869565 54.543950361944155 600.6521739130435 54.543950361944155C 612.3315217391305 54.543950361944155 622.3423913043478 56.115822130299904 634.0217391304348 56.115822130299904C 645.7010869565217 56.115822130299904 655.7119565217391 79.69389865563599 667.3913043478261 79.69389865563599C 679.070652173913 79.69389865563599 689.0815217391305 93.84074457083764 700.7608695652174 93.84074457083764C 712.4402173913044 93.84074457083764 722.4510869565217 68.69079627714581 734.1304347826087 68.69079627714581C 745.8097826086957 68.69079627714581 755.820652173913 71.83453981385729 767.5 71.83453981385729C 767.5 71.83453981385729 767.5 71.83453981385729 767.5 152M 767.5 71.83453981385729z" pathFrom="M -1 152L -1 152L 33.369565217391305 152L 66.73913043478261 152L 100.10869565217392 152L 133.47826086956522 152L 166.84782608695653 152L 200.21739130434784 152L 233.58695652173915 152L 266.95652173913044 152L 300.32608695652175 152L 333.69565217391306 152L 367.0652173913044 152L 400.4347826086957 152L 433.804347826087 152L 467.1739130434783 152L 500.54347826086956 152L 533.9130434782609 152L 567.2826086956522 152L 600.6521739130435 152L 634.0217391304348 152L 667.3913043478261 152L 700.7608695652174 152L 734.1304347826087 152L 767.5 152"></path>
                                                         <path id="" d="M0 92.2688728024819C11.679347826086955 92.2688728024819 21.69021739130435 109.55946225439504 33.369565217391305 109.55946225439504C45.04891304347826 109.55946225439504 55.059782608695656 84.40951396070321 66.73913043478261 84.40951396070321C78.41847826086956 84.40951396070321 88.42934782608697 114.27507755946226 100.10869565217392 114.27507755946226C111.78804347826087 114.27507755946226 121.79891304347827 81.26577042399173 133.47826086956522 81.26577042399173C145.1576086956522 81.26577042399173 155.16847826086956 109.55946225439504 166.84782608695653 109.55946225439504C178.5271739130435 109.55946225439504 188.53804347826087 122.13443640124095 200.21739130434784 122.13443640124095C211.8967391304348 122.13443640124095 221.9076086956522 5.815925542916233 233.58695652173915 5.815925542916233C245.2663043478261 5.815925542916233 255.2771739130435 49.82833505687694 266.95652173913044 49.82833505687694C278.6358695652174 49.82833505687694 288.6467391304348 96.98448810754911 300.32608695652175 96.98448810754911C312.0054347826087 96.98448810754911 322.0163043478261 63.97518097207859 333.69565217391306 63.97518097207859C345.375 63.97518097207859 355.38586956521743 67.11892450879007 367.0652173913044 67.11892450879007C378.7445652173913 67.11892450879007 388.75543478260875 78.12202688728024 400.4347826086957 78.12202688728024C412.1141304347826 78.12202688728024 422.12500000000006 96.98448810754911 433.804347826087 96.98448810754911C445.48369565217394 96.98448810754911 455.49456521739137 103.27197518097208 467.1739130434783 103.27197518097208C478.85326086956525 103.27197518097208 488.8641304347826 90.69700103412617 500.54347826086956 90.69700103412617C512.2228260869565 90.69700103412617 522.2336956521739 67.11892450879007 533.9130434782609 67.11892450879007C545.5923913043479 67.11892450879007 555.6032608695652 87.55325749741469 567.2826086956522 87.55325749741469C578.9619565217392 87.55325749741469 588.9728260869565 54.543950361944155 600.6521739130435 54.543950361944155C612.3315217391305 54.543950361944155 622.3423913043478 56.115822130299904 634.0217391304348 56.115822130299904C645.7010869565217 56.115822130299904 655.7119565217391 79.69389865563599 667.3913043478261 79.69389865563599C679.070652173913 79.69389865563599 689.0815217391305 93.84074457083764 700.7608695652174 93.84074457083764C712.4402173913044 93.84074457083764 722.4510869565217 68.69079627714581 734.1304347826087 68.69079627714581C745.8097826086957 68.69079627714581 755.820652173913 71.83453981385729 767.5 71.83453981385729C767.5 71.83453981385729 767.5 71.83453981385729 767.5 71.83453981385729 " fill="none" fill-opacity="1" stroke="#f7b924" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0lokfyfpf)" pathTo="M 0 92.2688728024819C 11.679347826086955 92.2688728024819 21.69021739130435 109.55946225439504 33.369565217391305 109.55946225439504C 45.04891304347826 109.55946225439504 55.059782608695656 84.40951396070321 66.73913043478261 84.40951396070321C 78.41847826086956 84.40951396070321 88.42934782608697 114.27507755946226 100.10869565217392 114.27507755946226C 111.78804347826087 114.27507755946226 121.79891304347827 81.26577042399173 133.47826086956522 81.26577042399173C 145.1576086956522 81.26577042399173 155.16847826086956 109.55946225439504 166.84782608695653 109.55946225439504C 178.5271739130435 109.55946225439504 188.53804347826087 122.13443640124095 200.21739130434784 122.13443640124095C 211.8967391304348 122.13443640124095 221.9076086956522 5.815925542916233 233.58695652173915 5.815925542916233C 245.2663043478261 5.815925542916233 255.2771739130435 49.82833505687694 266.95652173913044 49.82833505687694C 278.6358695652174 49.82833505687694 288.6467391304348 96.98448810754911 300.32608695652175 96.98448810754911C 312.0054347826087 96.98448810754911 322.0163043478261 63.97518097207859 333.69565217391306 63.97518097207859C 345.375 63.97518097207859 355.38586956521743 67.11892450879007 367.0652173913044 67.11892450879007C 378.7445652173913 67.11892450879007 388.75543478260875 78.12202688728024 400.4347826086957 78.12202688728024C 412.1141304347826 78.12202688728024 422.12500000000006 96.98448810754911 433.804347826087 96.98448810754911C 445.48369565217394 96.98448810754911 455.49456521739137 103.27197518097208 467.1739130434783 103.27197518097208C 478.85326086956525 103.27197518097208 488.8641304347826 90.69700103412617 500.54347826086956 90.69700103412617C 512.2228260869565 90.69700103412617 522.2336956521739 67.11892450879007 533.9130434782609 67.11892450879007C 545.5923913043479 67.11892450879007 555.6032608695652 87.55325749741469 567.2826086956522 87.55325749741469C 578.9619565217392 87.55325749741469 588.9728260869565 54.543950361944155 600.6521739130435 54.543950361944155C 612.3315217391305 54.543950361944155 622.3423913043478 56.115822130299904 634.0217391304348 56.115822130299904C 645.7010869565217 56.115822130299904 655.7119565217391 79.69389865563599 667.3913043478261 79.69389865563599C 679.070652173913 79.69389865563599 689.0815217391305 93.84074457083764 700.7608695652174 93.84074457083764C 712.4402173913044 93.84074457083764 722.4510869565217 68.69079627714581 734.1304347826087 68.69079627714581C 745.8097826086957 68.69079627714581 755.820652173913 71.83453981385729 767.5 71.83453981385729" pathFrom="M -1 152L -1 152L 33.369565217391305 152L 66.73913043478261 152L 100.10869565217392 152L 133.47826086956522 152L 166.84782608695653 152L 200.21739130434784 152L 233.58695652173915 152L 266.95652173913044 152L 300.32608695652175 152L 333.69565217391306 152L 367.0652173913044 152L 400.4347826086957 152L 433.804347826087 152L 467.1739130434783 152L 500.54347826086956 152L 533.9130434782609 152L 567.2826086956522 152L 600.6521739130435 152L 634.0217391304348 152L 667.3913043478261 152L 700.7608695652174 152L 734.1304347826087 152L 767.5 152"></path>
                                                         <g id="" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                               <circle id="" r="0" cx="0" cy="0" class="apexcharts-marker wgkzylffq no-pointer-events" stroke="#ffffff" fill="#f7b924" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                            </g>
                                                         </g>
                                                      </g>
                                                      <g id="" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                   </g>
                                                   <line id="" x1="0" y1="0" x2="767.5" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                   <line id="" x1="0" y1="0" x2="767.5" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                   <g id="" class="apexcharts-yaxis-annotations"></g>
                                                   <g id="" class="apexcharts-xaxis-annotations"></g>
                                                   <g id="" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g id="" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                <g id="" class="apexcharts-annotations"></g>
                                             </svg>
                                             <div class="apexcharts-legend" style="max-height: 76px;"></div>
                                             <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                   <span class="apexcharts-tooltip-marker" style="background-color: rgb(247, 185, 36);"></span>
                                                   <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                      <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                      <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="resize-triggers">
                                          <div class="expand-trigger">
                                             <div style="width: 769px; height: 153px;"></div>
                                          </div>
                                          <div class="contract-trigger"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
                     <ul class="slick-dots" style="" role="tablist">
                        <li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 3" tabindex="0" aria-selected="true">1</button></li>
                        <li role="presentation"><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 3" tabindex="-1">2</button></li>
                        <li role="presentation"><button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 3" tabindex="-1">3</button></li>
                     </ul>
                  </div>
               </div>
               <h6 class="text-muted text-uppercase font-size-md opacity-5 ps-3 pe-3 pb-1 fw-normal">
                  Sales Progress
               </h6>
               <ul class="list-group list-group-flush">
                  <li class="p-3 bg-transparent list-group-item">
                     <div class="widget-content p-0">
                        <div class="widget-content-outer">
                           <div class="widget-content-wrapper">
                              <div class="widget-content-left">
                                 <div class="widget-heading">Total Orders</div>
                                 <div class="widget-subheading">Last year expenses</div>
                              </div>
                              <div class="widget-content-right">
                                 <div class="widget-numbers text-success">
                                    <small>$</small>
                                    1896
                                 </div>
                              </div>
                           </div>
                           <div class="widget-progress-wrapper">
                              <div class="progress-bar-sm progress-bar-animated-alt progress">
                                 <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%;">
                                 </div>
                              </div>
                              <div class="progress-sub-label">
                                 <div class="sub-label-left">YoY Growth</div>
                                 <div class="sub-label-right">100%</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="col-sm-12 col-lg-6">
         <div class="card-hover-shadow-2x mb-3 card">
            <div class="card-header-tab card-header">
               <div class="card-header-title font-size-lg text-capitalize fw-normal">
                  <i class="header-icon lnr-lighter icon-gradient bg-amy-crisp"></i>
                  Timeline Example
               </div>
               <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                  <div class="btn-group dropdown">
                     <button type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                     <i class="pe-7s-menu btn-icon-wrapper"></i>
                     </button>
                     <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                        <button type="button" tabindex="0" class="dropdown-item">
                        <i class="dropdown-icon lnr-inbox"></i>
                        <span>Menus</span>
                        </button>
                        <button type="button" tabindex="0" class="dropdown-item">
                        <i class="dropdown-icon lnr-file-empty"></i>
                        <span>Settings</span>
                        </button>
                        <button type="button" tabindex="0" class="dropdown-item">
                        <i class="dropdown-icon lnr-book"></i>
                        <span>Actions</span>
                        </button>
                        <div tabindex="-1" class="dropdown-divider"></div>
                        <div class="p-3 text-end">
                           <button class="me-2 btn-shadow btn-sm btn btn-link">View Details</button>
                           <button class="me-2 btn-shadow btn-sm btn btn-primary">Action</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="scroll-area-lg">
               <div class="scrollbar-container ps ps--active-y">
                  <div class="p-4">
                     <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                           <div>
                              <span class="vertical-timeline-element-icon bounce-in"></span>
                              <div class="vertical-timeline-element-content bounce-in">
                                 <h4 class="timeline-title">All Hands Meeting</h4>
                              </div>
                           </div>
                        </div>
                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                           <div>
                              <span class="vertical-timeline-element-icon bounce-in"></span>
                              <div class="vertical-timeline-element-content bounce-in">
                                 <p>Yet another one, at
                                    <span class="text-success">15:00 PM</span>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                           <div>
                              <span class="vertical-timeline-element-icon bounce-in"></span>
                              <div class="vertical-timeline-element-content bounce-in">
                                 <h4 class="timeline-title">
                                    Build the production release
                                    <div class="badge bg-danger ms-2">NEW</div>
                                 </h4>
                              </div>
                           </div>
                        </div>
                        <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                           <div>
                              <span class="vertical-timeline-element-icon bounce-in"></span>
                              <div class="vertical-timeline-element-content bounce-in">
                                 <h4 class="timeline-title">
                                    Something not important
                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0RjBENjMzNUYyM0RFMUYwNjM4MTY4RTUyODFERkI3QSIgc3RSZWY6ZG9jdW1lbnRJRD0iNEYwRDYzMzVGMjNERTFGMDYzODE2OEU1MjgxREZCN0EiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE1RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJENDFFMzk5RUI1NDJFOUFCNzIzNzUzMDQ3QkJEMkQ3OSIgc3RSZWY6ZG9jdW1lbnRJRD0iRDQxRTM5OUVCNTQyRTlBQjcyMzc1MzA0N0JCRDJENzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMxaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTExRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDgzQTU0RjlFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDgzQTU0RkFFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYF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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODFCRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSIxQUMwRDYxNUU3RTUxRTAwNThENTY1NENGQTYxNTZCQyIgc3RSZWY6ZG9jdW1lbnRJRD0iMUFDMEQ2MTVFN0U1MUUwMDU4RDU2NTRDRkE2MTU2QkMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODE3RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI1NDBBNzQ1MzA5RTU2OURFMUM5Qjk3QUIwRTVDNzYyRCIgc3RSZWY6ZG9jdW1lbnRJRD0iNTQwQTc0NTMwOUU1NjlERTFDOUI5N0FCMEU1Qzc2MkQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODEzRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI5QTgyNDYyOTc1Rjk5RThBQTc3MDRCNDVGMkI4NDgwNyIgc3RSZWY6ZG9jdW1lbnRJRD0iOUE4MjQ2Mjk3NUY5OUU4QUE3NzA0QjQ1RjJCODQ4MDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVFRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTVERUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJGQTNDMzBENTkxNUNENDY3Qjg0REZERUVBM0VDRkYwMyIgc3RSZWY6ZG9jdW1lbnRJRD0iRkEzQzMwRDU5MTVDRDQ2N0I4NERGREVFQTNFQ0ZGMDMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTU5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0OEUzM0U0MzQ4NzdGOTU0QzlCM0Y3Q0VBNTBGRDM1NiIgc3RSZWY6ZG9jdW1lbnRJRD0iNDhFMzNFNDM0ODc3Rjk1NEM5QjNGN0NFQTUwRkQzNTYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                          <div class="avatar-icon">
                                             <i>+</i>
                                          </div>
                                       </div>
                                    </div>
                                 </h4>
                              </div>
                           </div>
                        </div>
                        <div class="vertical-timeline-item dot-info vertical-timeline-element">
                           <div>
                              <span class="vertical-timeline-element-icon bounce-in"></span>
                              <div class="vertical-timeline-element-content bounce-in">
                                 <h4 class="timeline-title">This dot has an info state</h4>
                              </div>
                           </div>
                        </div>
                        <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                           <div>
                              <span class="vertical-timeline-element-icon bounce-in"></span>
                              <div class="vertical-timeline-element-content bounce-in">
                                 <h4 class="timeline-title">This dot has a dark state</h4>
                              </div>
                           </div>
                        </div>
                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                           <div>
                              <span class="vertical-timeline-element-icon bounce-in"></span>
                              <div class="vertical-timeline-element-content bounce-in">
                                 <h4 class="timeline-title">All Hands Meeting</h4>
                              </div>
                           </div>
                        </div>
                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                           <div>
                              <span class="vertical-timeline-element-icon bounce-in"></span>
                              <div class="vertical-timeline-element-content bounce-in">
                                 <p>Yet another one, at
                                    <span class="text-success">15:00 PM</span>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                           <div>
                              <span class="vertical-timeline-element-icon bounce-in"></span>
                              <div class="vertical-timeline-element-content bounce-in">
                                 <h4 class="timeline-title">
                                    Build the production release
                                    <div class="badge bg-danger ms-2">NEW</div>
                                 </h4>
                              </div>
                           </div>
                        </div>
                        <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                           <div>
                              <span class="vertical-timeline-element-icon bounce-in"></span>
                              <div class="vertical-timeline-element-content bounce-in">
                                 <h4 class="timeline-title">
                                    Something not important
                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0RjBENjMzNUYyM0RFMUYwNjM4MTY4RTUyODFERkI3QSIgc3RSZWY6ZG9jdW1lbnRJRD0iNEYwRDYzMzVGMjNERTFGMDYzODE2OEU1MjgxREZCN0EiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE1RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJENDFFMzk5RUI1NDJFOUFCNzIzNzUzMDQ3QkJEMkQ3OSIgc3RSZWY6ZG9jdW1lbnRJRD0iRDQxRTM5OUVCNTQyRTlBQjcyMzc1MzA0N0JCRDJENzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMxaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTExRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDgzQTU0RjlFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDgzQTU0RkFFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYF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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODFCRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSIxQUMwRDYxNUU3RTUxRTAwNThENTY1NENGQTYxNTZCQyIgc3RSZWY6ZG9jdW1lbnRJRD0iMUFDMEQ2MTVFN0U1MUUwMDU4RDU2NTRDRkE2MTU2QkMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODE3RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI1NDBBNzQ1MzA5RTU2OURFMUM5Qjk3QUIwRTVDNzYyRCIgc3RSZWY6ZG9jdW1lbnRJRD0iNTQwQTc0NTMwOUU1NjlERTFDOUI5N0FCMEU1Qzc2MkQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODEzRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI5QTgyNDYyOTc1Rjk5RThBQTc3MDRCNDVGMkI4NDgwNyIgc3RSZWY6ZG9jdW1lbnRJRD0iOUE4MjQ2Mjk3NUY5OUU4QUE3NzA0QjQ1RjJCODQ4MDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVFRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTVERUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJGQTNDMzBENTkxNUNENDY3Qjg0REZERUVBM0VDRkYwMyIgc3RSZWY6ZG9jdW1lbnRJRD0iRkEzQzMwRDU5MTVDRDQ2N0I4NERGREVFQTNFQ0ZGMDMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTU5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0OEUzM0U0MzQ4NzdGOTU0QzlCM0Y3Q0VBNTBGRDM1NiIgc3RSZWY6ZG9jdW1lbnRJRD0iNDhFMzNFNDM0ODc3Rjk1NEM5QjNGN0NFQTUwRkQzNTYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                          <div class="avatar-icon">
                                             <i>+</i>
                                          </div>
                                       </div>
                                    </div>
                                 </h4>
                              </div>
                           </div>
                        </div>
                        <div class="vertical-timeline-item dot-info vertical-timeline-element">
                           <div>
                              <span class="vertical-timeline-element-icon bounce-in"></span>
                              <div class="vertical-timeline-element-content bounce-in">
                                 <h4 class="timeline-title">This dot has an info state</h4>
                              </div>
                           </div>
                        </div>
                        <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                           <div>
                              <span class="vertical-timeline-element-icon bounce-in"></span>
                              <div class="vertical-timeline-element-content bounce-in">
                                 <h4 class="timeline-title">This dot has a dark state</h4>
                              </div>
                           </div>
                        </div>
                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                           <div>
                              <span class="vertical-timeline-element-icon bounce-in"></span>
                              <div class="vertical-timeline-element-content bounce-in">
                                 <h4 class="timeline-title">All Hands Meeting</h4>
                              </div>
                           </div>
                        </div>
                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                           <div>
                              <span class="vertical-timeline-element-icon bounce-in"></span>
                              <div class="vertical-timeline-element-content bounce-in">
                                 <p>Yet another one, at
                                    <span class="text-success">15:00 PM</span>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                           <div>
                              <span class="vertical-timeline-element-icon bounce-in"></span>
                              <div class="vertical-timeline-element-content bounce-in">
                                 <h4 class="timeline-title">
                                    Build the production release
                                    <div class="badge bg-danger ms-2">NEW</div>
                                 </h4>
                              </div>
                           </div>
                        </div>
                        <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                           <div>
                              <span class="vertical-timeline-element-icon bounce-in"></span>
                              <div class="vertical-timeline-element-content bounce-in">
                                 <h4 class="timeline-title">
                                    Something not important
                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0RjBENjMzNUYyM0RFMUYwNjM4MTY4RTUyODFERkI3QSIgc3RSZWY6ZG9jdW1lbnRJRD0iNEYwRDYzMzVGMjNERTFGMDYzODE2OEU1MjgxREZCN0EiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE1RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJENDFFMzk5RUI1NDJFOUFCNzIzNzUzMDQ3QkJEMkQ3OSIgc3RSZWY6ZG9jdW1lbnRJRD0iRDQxRTM5OUVCNTQyRTlBQjcyMzc1MzA0N0JCRDJENzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMxaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTExRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDgzQTU0RjlFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDgzQTU0RkFFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYF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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODFCRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSIxQUMwRDYxNUU3RTUxRTAwNThENTY1NENGQTYxNTZCQyIgc3RSZWY6ZG9jdW1lbnRJRD0iMUFDMEQ2MTVFN0U1MUUwMDU4RDU2NTRDRkE2MTU2QkMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODE3RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI1NDBBNzQ1MzA5RTU2OURFMUM5Qjk3QUIwRTVDNzYyRCIgc3RSZWY6ZG9jdW1lbnRJRD0iNTQwQTc0NTMwOUU1NjlERTFDOUI5N0FCMEU1Qzc2MkQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCABAAEADAREAAhEBAxEB/8QAiwABAAIDAQEAAAAAAAAAAAAABwMGBAUIAgEBAAIDAQEAAAAAAAAAAAAAAAIDAAQFAQYQAAIBAwMCBQIEAgsAAAAAAAECAxEEBQAhEhMGMUFRFAciMmFCIxVSM3GBkaHhYnKCQyQWEQACAgICAgEEAwEAAAAAAAAAARECIQMSBDEiE0FRMkJhYtIF/9oADAMBAAIRAxEAPwDp7RgnxiQNQh5klRELuwRFBZ3YgBQNySTsBqEKTN8x9gxZuTDTZWKCVeIjvGZWtpSxoVSRC1GB/ipqA5gxj85fHUeTisP3FWWRihuyyiMEGhqKk0/HQfIm4GvU1WT1f/J+MyceRssJyn6EYT9woej1JKghP4uK7/2a78tUxb12ayDjdl41r2VmjN7Ox5S397IWkr50FfDS3s5MOlK1RYYfZWlskVvGi8aKekvHw89RNBRJtO3PkrumKy4XuTt7iVW/TeXizOh3HIjjvqc7DL6az68iwxfKV+yAtFbSerRv5f0b649zX0FvVjyCPyv875/Ny3FjjrhrDEDnbyY5UV1uEB4l5pj48z4IuwXzrplLOxz44yDfubiWRpAhKg1bitFHoFHhTRkPLNLGzzSxsGfYhaEAetPHQ/Qn1NhD3pd20ga0nuYYkURxhJStdqBnXw0r458jvlU4Fz40y375FPDe3hub+NFkjlUUqh2YSU2qp8PUaXwyL2JJyi+QWD2tt0pZ2uCTVXYAcfwFNNSJa8hVaZC1kSSV45F6KryCspUilKgmm+3hpNIZoPmnBl2VxbXMwkluDGaHphUJrtUjY+Jpt+OosuJJdNKYC1rCfK9xrj6CFA31py5lN9lkYVBfehp56fKqpKUO1oOiez/jWztrOJjaJJIVp0mUGgKjY1GqN9ln4NTXopVSyHuvsTFdd3uLCJeYHUCrx2p+GgpsvW0NjL6aWrKQB93YCLCZL3NqvK3ikB6bbgiu4qfEa0k+SMfZThYzPiibFv3pbe8eS3NwzC0uIp/bGNt3UMx+llYCnDz0SFP7nRs05ZCsmwG9BtTRQL5BTaW2ZjleI2iHHczJJEyoyV402YUNdVFPg1G6+Z9iHIR1hV0hGPdWPTKBvqNK6F4+g3DxJP8AF/bnusld5W1i9xc06Ytn3PVROb708/Kml9i7aSR3r60nyFbB/KFq19bQwWaSFlUyI/UtbmJX+12hlDK6tTYo9fw0u861ygKjW1ukmN393DBPkJomE7XCgFra2iM0gWleTAU4r/mOq022XwXFw1UhsDfkO8gupLaztUcySL9kigSFpTxWgVmG5PrrS68ryZPah+Cw/DHaFnFjb+5yuJnXKW8gSZL+IiBYxuskayClQ3ifI6tYKGfCEtpBOyxqwkZvp4oag/16JNW8AXpajhoIvewyYx4kkdZmkVv1FIj4jx3B1TxBrOZTgmg9+FjRp4umdpDyJAB9NLS/ka/tBdfivIQ2OTe2ujEttI7SJMjtUMyhGHHwFeIPLx0rbhSx2hS2hGi/8quanSySOWQMvusk6ngkku4j8CORG7HbbSHsTwvxGV1Rlr2KQ2Gx/dOW7wtlvYpZHeOR2jfqB4Ubg1KHienItKf46KlrVzUG9K3fFlQxPY2Bm74xmHsoetb45myOZuD/AMhi/lK4Gw5SeQ1f6zd8sze7Ra1xQg9xe0v7uCCW8MCW/LnxrRwRTgT+HjqxdTgpatjplGyGJx/b2PgythG11bsrCYPVpBIB9LgeAB1xLgsDL7Htc2/ID4pIxbvcSWKtIZCsaJzEfAipqPWuq+PJd9piSW0uYpF9r+2tFGazO4LinFSa1I8NREbazJau3MHCvbz588UAUFbfkSWUuB9p/uOubdE62zmvttbVUQcJxx2Kilsnnjxs8bNIYYzOgkY1Z2FDSv5qnVHTD8mwuLX9g8v+5YrGTN3cEjWuMiUi3/662xnmb7qKD4V8x465bUm1Au+3hLNV8Sd6ds4w3lzm80LPIZl3NxVGISJDxiRpAGCV3ah1t6dfGp5vsbXe0suvdPePZWPW2kiyNvdxspdVtmE7t6Gibj/dTROn2F0ub3t/PZLufsq0mx2Mmmhv53jj6fFpCsbFWYoPtCkb11L19cHddlz9g5kynbhwwk95CJIECXdzyJ/VK1UKB9xOlqGsDYatLKDf975BUktLSSR+R/nyfmVRTiE8qn11K6ozYPZ2E8UQr2vanssTYVn6lxGsbzoTVnkdQWJ/0k0A8tZtuy7Nr9TVr1FVJ/sbJsT3faog7dyLWok+o2coJhr57jcDQLXVhWtevgPsp2L373TlbmS4mbKC1U9b2lRGCPymRwqRj1b7vQat6taWKoodjbK5XZFc/Anc9rY3M/Ey+yp7sW6coQDQ/oENzlp4Gi+O2r8Rj9jM5yVpcHDjpjbTKDMwEkRZeAZXBoSD4ny1zZSyHanVnQ3wd3NiYvje7t5n9uuKkupr+Zf0h0WdWiDyj7Vbka08hTXaanZIDZdKwXdn/GF/3TnZWkkWHBWxpE0gAa5ukgEsscca1q0aSL9R2WvmdtL0a0lIzt7m3CETuP457Nv45MZaxLFd9v4yGUR26dW9E33sYI497hwycG5VWpHoa3XetlFkZ6ratpqw+y/ynmcbLb2i4+SW/dHN1Hk4oVljlZ6QIotePJiu7Ky1rrMv0tbco2df/R2pZ42FrtD4+7myUVled7uRBNELtsWZzAxU06du9rF0wnGo6nJ23+nTKaqVWF7FfZ2dl3l+ptsXhv23uH9vx8clrjbC4abK8XZLKBpFE0TxBwvP6NvpHFK+b6tKztX2KLxbBAl3fXV5ce4vZcXeS3DTWTui9KPH8mMht4lWqFlXj1XJZq/TStdNrqommly/0A72zPqGXyv2nBme4Pd4ZvcZG6mihltrZqr1GqOIVqLEo41JLUrt56ZwmufyCV8/1I/hDKxY/vHIdpMEk9/eWjDrLzW4tbdZY54mUDj+YPvtsdVa1bmB+xrDZ//Z" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODEzRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI5QTgyNDYyOTc1Rjk5RThBQTc3MDRCNDVGMkI4NDgwNyIgc3RSZWY6ZG9jdW1lbnRJRD0iOUE4MjQ2Mjk3NUY5OUU4QUE3NzA0QjQ1RjJCODQ4MDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVFRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTVERUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJGQTNDMzBENTkxNUNENDY3Qjg0REZERUVBM0VDRkYwMyIgc3RSZWY6ZG9jdW1lbnRJRD0iRkEzQzMwRDU5MTVDRDQ2N0I4NERGREVFQTNFQ0ZGMDMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm">
                                          <div class="avatar-icon">
                                             <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTU5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0OEUzM0U0MzQ4NzdGOTU0QzlCM0Y3Q0VBNTBGRDM1NiIgc3RSZWY6ZG9jdW1lbnRJRD0iNDhFMzNFNDM0ODc3Rjk1NEM5QjNGN0NFQTUwRkQzNTYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCABAAEADAREAAhEBAxEB/8QAggAAAgIDAQEAAAAAAAAAAAAABQYEBwACAwEIAQEBAAMBAAAAAAAAAAAAAAADAgABBAUQAAIBAgQEBQMDAgcAAAAAAAECAxEEACESBTEiEwZBUWEyB3FCI4FSFPCRobHBYoIVFhEAAgIDAQADAQAAAAAAAAAAAAERAiFBAzFRYRJx/9oADAMBAAIRAxEAPwBg2uaIXFNPO2WpsqV8TWuLAklvfyzvJDayyNq5EiFSNQPjqAyrjDAT3B3pt22MpOiTdIEZZLeBAXYnI65CQhP0FMS2NTm3kW3+Ut8vZ4ZILNrW2RVHQjYqDoyqAMuPhg22MuaC43lruIGaVluJwS2rUpGrjqNfHFUvoO/JrJxQ2nVKrOkhiJ1FpC3DMVK1/wAMIGS/5gEao8Md3GaqzAuEA9wVdRyrwJpjDDWHe90rG6iBTCaosTZDKhID1xhORk3GDbNmiW4YlpwCqAas5M6qC1eUeLYmTapIqbt8i3djZG2tYYYJplZRLHqyQDn4+76nEu4tOSkqu/3+Rrp9EdZ9YdHkzViPpiTpGrYOyO8N50XRQWlu3MkjNWinyA44K9zopwbGvuL423az7blu9quWub+2VpTBIeaUKKsuX+WDV85N9OSSwK3YXdM+/WU6yxKLi1VD1hGdTJJUDVSo1gimOyl9M83pTaGl2cDSqdQilVrmfPLCSFDOyHaUt2kuLNgVAA5uBr5jjXGjZm+X9zI0hno2kMzSFxU6c2oDX+2BG8Kj7v3G4e4hu3aqewqKBlY+FBjT9Fp4GuwBsdzdI91S4njAZ1I4N5EfXA9HB1cEmXdte4o6CONdAAoPBaelMDJ2/k77t3RY7LYSXly4ZI6ZDhUmgB9PPG0pZF4SllL9xJd9pTjdtmSWz2HfpXMcjxaehcglmgdQTSN6l4mr5g8MdNHpnndee0aRd/b6DScQXKoKsHUqCPOoOLg5v0T7X5DlVB/J26J4QSKRyipoc9OoGn64qDMEXetzuCouJW1TLIhiXKq0FRSvj+7+3HGGCPv4twCAQ8TczsOBlVqt+lGODv6Nz8Ivad09l3GkqhujKhiMg4aq1GseBxF8obhixbr9wbm1tDt9rbz/AJaCW4hOhI1rmzy0Ys3ki4JJbO1t6GXYrDph9v3pWmgvNL28k3vRl9uR/wBc8RvAkSjr8g3Fn/53ce3ZNtk6QtnmtpF0sjPCvVV1bMqy0+7FLDD6JflyUDFfRiKDRL+IiqK5IYA/bQ15V9MdNDyugNvLqzYu05YMoJaSGoJ8v20H6YUE+jU7d2u1iMqWSKiU/LIA1KerV4YOWWV18tQWN1Z2U1m6arQyF4oVAQq9KtygCtcsSxeZV+3W/wDG3WDXIejcBmRq0HAmjYx5RdMWLR7F74eCNR1XqgU9MZ0DDI0GOd0g9Hh1q1DGLcdx3DeN76b9eydogiTyyLbQKpOolpGDZn/aK43RYE9cVCu+JEnZu8NY3X/YbhZ7Vcq92utowSNXTRn5myBJY4qFKI7p1o5KgsrG1ntInEKsDmVYA0AAH9UwtTyugN3jYYmmasYVAKscwOXMDI4aoDLTurneri5Ec9QkpAULL1GBr9sXtLeIwf8ACiLcbbaSo1lCA9xKzQJM9WKRMOd2P7tXDGQbThlUdy7LNs+5PBcsXtoGpFLH7QHNQwr4HB/Q2PSLatfWNxbzW87W1yMop8miKsfa3ocZjZalPA3bf8ib4Z1sd5sYZ44SAWJNQPNTny/XEOi0NTu9hzuP5Q3QbLPs+yWkccF3EI5r0EELE451UedMs8aS+S79ZUJAbtySA7TCcxGoVZFIzVzVSCP+OEozjsjXdwonCSvzyNVaHIjj44fQD9G9r65tt11xSDQSESQCoGpSrDxNRxriNwb+z3Z7+CI3MsnKkcXKzEZEPpAz/djb+CV8iv8AJYjXbNqZaLdPbme+YUKlJZD0lp6AV+mNXSwNzcJsR7O7tZIZIDpZacqPUkU4r9MG00XS6YUtZ7BVaKF3d+EkZUN+Pyp91PLEiKDaOwuZC3SOuFjph0LnqbgAB4edcTKNwwztrIuiOgMMx/NH96Nw1EHiurG08mmpM3K0WWeNFTVKtAoAJr50w9QOiUSH0l0u0zsHiRG6TjIMxNXGfrQYxLYf0RrKeOeeWJ10xzurqyhSXCijceX35jE0KaFjf7hLue624gopcBZpXBCqv2ljQc1KYpeyU/IE+E23UXqxlgCCXB0gN4g0rhLr4Co1sk28RN1rjn1Imciu4JVRxcNTgMHEoVPPoct7uwKytAzTSygr+IsBQihchh7l9MC00MnJLs7421+qT3HU1LqUOPyMSDR2bPTSlDiI2X9BZr5gElKFdDDUSKkAZ09cdHOWgrrR/9k=" alt="">
                                          </div>
                                       </div>
                                       <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                          <div class="avatar-icon">
                                             <i>+</i>
                                          </div>
                                       </div>
                                    </div>
                                 </h4>
                              </div>
                           </div>
                        </div>
                        <div class="vertical-timeline-item dot-info vertical-timeline-element">
                           <div>
                              <span class="vertical-timeline-element-icon bounce-in"></span>
                              <div class="vertical-timeline-element-content bounce-in">
                                 <h4 class="timeline-title">This dot has an info state</h4>
                              </div>
                           </div>
                        </div>
                        <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                           <div>
                              <span class="vertical-timeline-element-icon bounce-in"></span>
                              <div class="vertical-timeline-element-content bounce-in">
                                 <h4 class="timeline-title">This dot has a dark state</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                     <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                  </div>
                  <div class="ps__rail-y" style="top: 0px; height: 400px; right: 0px;">
                     <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 195px;"></div>
                  </div>
               </div>
            </div>
            <div class="d-block text-center card-footer">
               <button class="btn-shadow btn-wide btn-pill btn btn-focus">
               <span class="badge badge-dot badge-dot-lg bg-warning badge-pulse">Badge</span>
               View All Messages
               </button>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 col-xl-3">
         <div class="card mb-3 widget-chart widget-chart2 text-start card-btm-border card-shadow-success border-success">
            <div class="widget-chat-wrapper-outer">
               <div class="widget-chart-content pt-3 ps-3 pb-1">
                  <div class="widget-chart-flex">
                     <div class="widget-numbers">
                        <div class="widget-chart-flex">
                           <div class="fsize-4">
                              <small class="opacity-5">$</small>
                              <span>874</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <h6 class="widget-subheading mb-0 opacity-5">sales last month</h6>
               </div>
               <div class="g-0 widget-chart-wrapper mt-3 mb-3 ps-2 he-auto row">
                  <div class="col-md-9" style="position: relative;">
                     <div id="dashboard-sparklines-1" style="min-height: 100px;">
                        <div id="apexchartsqjpea2dn" class="apexcharts-canvas apexchartsqjpea2dn apexcharts-theme-light" style="width: 147.75px; height: 100px;">
                           <svg id="SvgjsSvg1798" width="147.75" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                              <g id="SvgjsG1800" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                 <defs id="SvgjsDefs1799">
                                    <clipPath id="gridRectMaskqjpea2dn">
                                       <rect id="SvgjsRect1806" width="154.75" height="103" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="gridRectMarkerMaskqjpea2dn">
                                       <rect id="SvgjsRect1807" width="151.75" height="104" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                 </defs>
                                 <line id="SvgjsLine1805" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                 <g id="SvgjsG1813" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1814" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g>
                                 </g>
                                 <g id="SvgjsG1840" class="apexcharts-grid">
                                    <g id="SvgjsG1841" class="apexcharts-gridlines-horizontal" style="display: none;">
                                       <line id="SvgjsLine1843" x1="0" y1="0" x2="147.75" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1844" x1="0" y1="10" x2="147.75" y2="10" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1845" x1="0" y1="20" x2="147.75" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1846" x1="0" y1="30" x2="147.75" y2="30" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1847" x1="0" y1="40" x2="147.75" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1848" x1="0" y1="50" x2="147.75" y2="50" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1849" x1="0" y1="60" x2="147.75" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1850" x1="0" y1="70" x2="147.75" y2="70" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1851" x1="0" y1="80" x2="147.75" y2="80" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1852" x1="0" y1="90" x2="147.75" y2="90" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1853" x1="0" y1="100" x2="147.75" y2="100" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG1842" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                    <line id="SvgjsLine1855" x1="0" y1="100" x2="147.75" y2="100" stroke="transparent" stroke-dasharray="0"></line>
                                    <line id="SvgjsLine1854" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line>
                                 </g>
                                 <g id="SvgjsG1808" class="apexcharts-line-series apexcharts-plot-series">
                                    <g id="SvgjsG1809" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                       <path id="SvgjsPath1812" d="M 0 44.15718717683558C 2.248369565217391 44.15718717683558 4.17554347826087 63.80558428128232 6.423913043478261 63.80558428128232C 8.672282608695651 63.80558428128232 10.59945652173913 52.430196483971045 12.847826086956522 52.430196483971045C 15.096195652173913 52.430196483971045 17.02336956521739 32.7817993795243 19.27173913043478 32.7817993795243C 21.520108695652173 32.7817993795243 23.44728260869565 80.35160289555326 25.695652173913043 80.35160289555326C 27.944021739130434 80.35160289555326 29.871195652173913 60.70320579110652 32.119565217391305 60.70320579110652C 34.36793478260869 60.70320579110652 36.295108695652175 63.80558428128232 38.54347826086956 63.80558428128232C 40.79184782608696 63.80558428128232 42.71902173913043 44.15718717683558 44.96739130434783 44.15718717683558C 47.215760869565216 44.15718717683558 49.1429347826087 59.66907962771459 51.391304347826086 59.66907962771459C 53.639673913043474 59.66907962771459 55.566847826086956 45.19131334022751 57.815217391304344 45.19131334022751C 60.06358695652174 45.19131334022751 61.990760869565214 3.8262668045501584 64.23913043478261 3.8262668045501584C 66.4875 3.8262668045501584 68.41467391304349 51.39607032057911 70.66304347826087 51.39607032057911C 72.91141304347826 51.39607032057911 74.83858695652174 53.464322647362984 77.08695652173913 53.464322647362984C 79.33532608695651 53.464322647362984 81.2625 72.07859358841779 83.51086956521739 72.07859358841779C 85.75923913043478 72.07859358841779 87.68641304347827 67.94208893485006 89.93478260869566 67.94208893485006C 92.18315217391304 67.94208893485006 94.11032608695652 35.88417786970011 96.3586956521739 35.88417786970011C 98.6070652173913 35.88417786970011 100.53423913043478 57.60082730093072 102.78260869565217 57.60082730093072C 105.03097826086956 57.60082730093072 106.95815217391305 47.25956566701138 109.20652173913044 47.25956566701138C 111.45489130434783 47.25956566701138 113.3820652173913 75.18097207859358 115.63043478260869 75.18097207859358C 117.87880434782608 75.18097207859358 119.80597826086957 42.088934850051714 122.05434782608695 42.088934850051714C 124.30271739130434 42.088934850051714 126.22989130434783 72.07859358841779 128.47826086956522 72.07859358841779C 130.7266304347826 72.07859358841779 132.65380434782608 55.53257497414685 134.90217391304347 55.53257497414685C 137.15054347826086 55.53257497414685 139.07771739130436 36.91830403309204 141.32608695652175 36.91830403309204C 143.57445652173914 36.91830403309204 145.5016304347826 61.73733195449845 147.75 61.73733195449845" fill="none" fill-opacity="1" stroke="rgba(58,196,125,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskqjpea2dn)" pathTo="M 0 44.15718717683558C 2.248369565217391 44.15718717683558 4.17554347826087 63.80558428128232 6.423913043478261 63.80558428128232C 8.672282608695651 63.80558428128232 10.59945652173913 52.430196483971045 12.847826086956522 52.430196483971045C 15.096195652173913 52.430196483971045 17.02336956521739 32.7817993795243 19.27173913043478 32.7817993795243C 21.520108695652173 32.7817993795243 23.44728260869565 80.35160289555326 25.695652173913043 80.35160289555326C 27.944021739130434 80.35160289555326 29.871195652173913 60.70320579110652 32.119565217391305 60.70320579110652C 34.36793478260869 60.70320579110652 36.295108695652175 63.80558428128232 38.54347826086956 63.80558428128232C 40.79184782608696 63.80558428128232 42.71902173913043 44.15718717683558 44.96739130434783 44.15718717683558C 47.215760869565216 44.15718717683558 49.1429347826087 59.66907962771459 51.391304347826086 59.66907962771459C 53.639673913043474 59.66907962771459 55.566847826086956 45.19131334022751 57.815217391304344 45.19131334022751C 60.06358695652174 45.19131334022751 61.990760869565214 3.8262668045501584 64.23913043478261 3.8262668045501584C 66.4875 3.8262668045501584 68.41467391304349 51.39607032057911 70.66304347826087 51.39607032057911C 72.91141304347826 51.39607032057911 74.83858695652174 53.464322647362984 77.08695652173913 53.464322647362984C 79.33532608695651 53.464322647362984 81.2625 72.07859358841779 83.51086956521739 72.07859358841779C 85.75923913043478 72.07859358841779 87.68641304347827 67.94208893485006 89.93478260869566 67.94208893485006C 92.18315217391304 67.94208893485006 94.11032608695652 35.88417786970011 96.3586956521739 35.88417786970011C 98.6070652173913 35.88417786970011 100.53423913043478 57.60082730093072 102.78260869565217 57.60082730093072C 105.03097826086956 57.60082730093072 106.95815217391305 47.25956566701138 109.20652173913044 47.25956566701138C 111.45489130434783 47.25956566701138 113.3820652173913 75.18097207859358 115.63043478260869 75.18097207859358C 117.87880434782608 75.18097207859358 119.80597826086957 42.088934850051714 122.05434782608695 42.088934850051714C 124.30271739130434 42.088934850051714 126.22989130434783 72.07859358841779 128.47826086956522 72.07859358841779C 130.7266304347826 72.07859358841779 132.65380434782608 55.53257497414685 134.90217391304347 55.53257497414685C 137.15054347826086 55.53257497414685 139.07771739130436 36.91830403309204 141.32608695652175 36.91830403309204C 143.57445652173914 36.91830403309204 145.5016304347826 61.73733195449845 147.75 61.73733195449845" pathFrom="M -1 100L -1 100L 6.423913043478261 100L 12.847826086956522 100L 19.27173913043478 100L 25.695652173913043 100L 32.119565217391305 100L 38.54347826086956 100L 44.96739130434783 100L 51.391304347826086 100L 57.815217391304344 100L 64.23913043478261 100L 70.66304347826087 100L 77.08695652173913 100L 83.51086956521739 100L 89.93478260869566 100L 96.3586956521739 100L 102.78260869565217 100L 109.20652173913044 100L 115.63043478260869 100L 122.05434782608695 100L 128.47826086956522 100L 134.90217391304347 100L 141.32608695652175 100L 147.75 100"></path>
                                       <g id="SvgjsG1810" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                          <g class="apexcharts-series-markers">
                                             <circle id="SvgjsCircle1861" r="0" cx="0" cy="0" class="apexcharts-marker wtms6ivd8h no-pointer-events" stroke="#ffffff" fill="#3ac47d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                          </g>
                                       </g>
                                    </g>
                                    <g id="SvgjsG1811" class="apexcharts-datalabels" data:realIndex="0"></g>
                                 </g>
                                 <line id="SvgjsLine1856" x1="0" y1="0" x2="147.75" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                 <line id="SvgjsLine1857" x1="0" y1="0" x2="147.75" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                 <g id="SvgjsG1858" class="apexcharts-yaxis-annotations"></g>
                                 <g id="SvgjsG1859" class="apexcharts-xaxis-annotations"></g>
                                 <g id="SvgjsG1860" class="apexcharts-point-annotations"></g>
                              </g>
                              <rect id="SvgjsRect1804" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                              <g id="SvgjsG1839" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                              <g id="SvgjsG1801" class="apexcharts-annotations"></g>
                           </svg>
                           <div class="apexcharts-legend" style="max-height: 50px;"></div>
                           <div class="apexcharts-tooltip apexcharts-theme-light">
                              <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(58, 196, 125);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                              <div class="apexcharts-yaxistooltip-text"></div>
                           </div>
                        </div>
                     </div>
                     <div class="resize-triggers">
                        <div class="expand-trigger">
                           <div style="width: 149px; height: 101px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-6 col-xl-3">
         <div class="card mb-3 widget-chart widget-chart2 text-start card-btm-border card-shadow-primary border-primary">
            <div class="widget-chat-wrapper-outer">
               <div class="widget-chart-content pt-3 ps-3 pb-1">
                  <div class="widget-chart-flex">
                     <div class="widget-numbers">
                        <div class="widget-chart-flex">
                           <div class="fsize-4">
                              <small class="opacity-5">$</small>
                              <span>1283</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <h6 class="widget-subheading mb-0 opacity-5">sales Income</h6>
               </div>
               <div class="g-0 widget-chart-wrapper mt-3 mb-3 ps-2 he-auto row">
                  <div class="col-md-9" style="position: relative;">
                     <div id="dashboard-sparklines-2" style="min-height: 100px;">
                        <div id="apexchartsw735e04t" class="apexcharts-canvas apexchartsw735e04t apexcharts-theme-light" style="width: 147.75px; height: 100px;">
                           <svg id="SvgjsSvg1863" width="147.75" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                              <g id="SvgjsG1865" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                 <defs id="SvgjsDefs1864">
                                    <clipPath id="gridRectMaskw735e04t">
                                       <rect id="SvgjsRect1871" width="154.75" height="103" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="gridRectMarkerMaskw735e04t">
                                       <rect id="SvgjsRect1872" width="151.75" height="104" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                 </defs>
                                 <line id="SvgjsLine1870" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                 <g id="SvgjsG1878" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1879" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g>
                                 </g>
                                 <g id="SvgjsG1905" class="apexcharts-grid">
                                    <g id="SvgjsG1906" class="apexcharts-gridlines-horizontal" style="display: none;">
                                       <line id="SvgjsLine1908" x1="0" y1="0" x2="147.75" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1909" x1="0" y1="10" x2="147.75" y2="10" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1910" x1="0" y1="20" x2="147.75" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1911" x1="0" y1="30" x2="147.75" y2="30" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1912" x1="0" y1="40" x2="147.75" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1913" x1="0" y1="50" x2="147.75" y2="50" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1914" x1="0" y1="60" x2="147.75" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1915" x1="0" y1="70" x2="147.75" y2="70" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1916" x1="0" y1="80" x2="147.75" y2="80" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1917" x1="0" y1="90" x2="147.75" y2="90" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1918" x1="0" y1="100" x2="147.75" y2="100" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG1907" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                    <line id="SvgjsLine1920" x1="0" y1="100" x2="147.75" y2="100" stroke="transparent" stroke-dasharray="0"></line>
                                    <line id="SvgjsLine1919" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line>
                                 </g>
                                 <g id="SvgjsG1873" class="apexcharts-line-series apexcharts-plot-series">
                                    <g id="SvgjsG1874" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                       <path id="SvgjsPath1877" d="M 0 47.25956566701138C 2.248369565217391 47.25956566701138 4.17554347826087 55.53257497414685 6.423913043478261 55.53257497414685C 8.672282608695651 55.53257497414685 10.59945652173913 75.18097207859358 12.847826086956522 75.18097207859358C 15.096195652173913 75.18097207859358 17.02336956521739 44.15718717683558 19.27173913043478 44.15718717683558C 21.520108695652173 44.15718717683558 23.44728260869565 45.19131334022751 25.695652173913043 45.19131334022751C 27.944021739130434 45.19131334022751 29.871195652173913 36.91830403309204 32.119565217391305 36.91830403309204C 34.36793478260869 36.91830403309204 36.295108695652175 44.15718717683558 38.54347826086956 44.15718717683558C 40.79184782608696 44.15718717683558 42.71902173913043 57.60082730093072 44.96739130434783 57.60082730093072C 47.215760869565216 57.60082730093072 49.1429347826087 51.39607032057911 51.391304347826086 51.39607032057911C 53.639673913043474 51.39607032057911 55.566847826086956 80.35160289555326 57.815217391304344 80.35160289555326C 60.06358695652174 80.35160289555326 61.990760869565214 60.70320579110652 64.23913043478261 60.70320579110652C 66.4875 60.70320579110652 68.41467391304349 72.07859358841779 70.66304347826087 72.07859358841779C 72.91141304347826 72.07859358841779 74.83858695652174 59.66907962771459 77.08695652173913 59.66907962771459C 79.33532608695651 59.66907962771459 81.2625 42.088934850051714 83.51086956521739 42.088934850051714C 85.75923913043478 42.088934850051714 87.68641304347827 61.73733195449845 89.93478260869566 61.73733195449845C 92.18315217391304 61.73733195449845 94.11032608695652 63.80558428128232 96.3586956521739 63.80558428128232C 98.6070652173913 63.80558428128232 100.53423913043478 63.80558428128232 102.78260869565217 63.80558428128232C 105.03097826086956 63.80558428128232 106.95815217391305 3.8262668045501584 109.20652173913044 3.8262668045501584C 111.45489130434783 3.8262668045501584 113.3820652173913 35.88417786970011 115.63043478260869 35.88417786970011C 117.87880434782608 35.88417786970011 119.80597826086957 72.07859358841779 122.05434782608695 72.07859358841779C 124.30271739130434 72.07859358841779 126.22989130434783 32.7817993795243 128.47826086956522 32.7817993795243C 130.7266304347826 32.7817993795243 132.65380434782608 52.430196483971045 134.90217391304347 52.430196483971045C 137.15054347826086 52.430196483971045 139.07771739130436 53.464322647362984 141.32608695652175 53.464322647362984C 143.57445652173914 53.464322647362984 145.5016304347826 67.94208893485006 147.75 67.94208893485006" fill="none" fill-opacity="1" stroke="rgba(0,123,255,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskw735e04t)" pathTo="M 0 47.25956566701138C 2.248369565217391 47.25956566701138 4.17554347826087 55.53257497414685 6.423913043478261 55.53257497414685C 8.672282608695651 55.53257497414685 10.59945652173913 75.18097207859358 12.847826086956522 75.18097207859358C 15.096195652173913 75.18097207859358 17.02336956521739 44.15718717683558 19.27173913043478 44.15718717683558C 21.520108695652173 44.15718717683558 23.44728260869565 45.19131334022751 25.695652173913043 45.19131334022751C 27.944021739130434 45.19131334022751 29.871195652173913 36.91830403309204 32.119565217391305 36.91830403309204C 34.36793478260869 36.91830403309204 36.295108695652175 44.15718717683558 38.54347826086956 44.15718717683558C 40.79184782608696 44.15718717683558 42.71902173913043 57.60082730093072 44.96739130434783 57.60082730093072C 47.215760869565216 57.60082730093072 49.1429347826087 51.39607032057911 51.391304347826086 51.39607032057911C 53.639673913043474 51.39607032057911 55.566847826086956 80.35160289555326 57.815217391304344 80.35160289555326C 60.06358695652174 80.35160289555326 61.990760869565214 60.70320579110652 64.23913043478261 60.70320579110652C 66.4875 60.70320579110652 68.41467391304349 72.07859358841779 70.66304347826087 72.07859358841779C 72.91141304347826 72.07859358841779 74.83858695652174 59.66907962771459 77.08695652173913 59.66907962771459C 79.33532608695651 59.66907962771459 81.2625 42.088934850051714 83.51086956521739 42.088934850051714C 85.75923913043478 42.088934850051714 87.68641304347827 61.73733195449845 89.93478260869566 61.73733195449845C 92.18315217391304 61.73733195449845 94.11032608695652 63.80558428128232 96.3586956521739 63.80558428128232C 98.6070652173913 63.80558428128232 100.53423913043478 63.80558428128232 102.78260869565217 63.80558428128232C 105.03097826086956 63.80558428128232 106.95815217391305 3.8262668045501584 109.20652173913044 3.8262668045501584C 111.45489130434783 3.8262668045501584 113.3820652173913 35.88417786970011 115.63043478260869 35.88417786970011C 117.87880434782608 35.88417786970011 119.80597826086957 72.07859358841779 122.05434782608695 72.07859358841779C 124.30271739130434 72.07859358841779 126.22989130434783 32.7817993795243 128.47826086956522 32.7817993795243C 130.7266304347826 32.7817993795243 132.65380434782608 52.430196483971045 134.90217391304347 52.430196483971045C 137.15054347826086 52.430196483971045 139.07771739130436 53.464322647362984 141.32608695652175 53.464322647362984C 143.57445652173914 53.464322647362984 145.5016304347826 67.94208893485006 147.75 67.94208893485006" pathFrom="M -1 100L -1 100L 6.423913043478261 100L 12.847826086956522 100L 19.27173913043478 100L 25.695652173913043 100L 32.119565217391305 100L 38.54347826086956 100L 44.96739130434783 100L 51.391304347826086 100L 57.815217391304344 100L 64.23913043478261 100L 70.66304347826087 100L 77.08695652173913 100L 83.51086956521739 100L 89.93478260869566 100L 96.3586956521739 100L 102.78260869565217 100L 109.20652173913044 100L 115.63043478260869 100L 122.05434782608695 100L 128.47826086956522 100L 134.90217391304347 100L 141.32608695652175 100L 147.75 100"></path>
                                       <g id="SvgjsG1875" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                          <g class="apexcharts-series-markers">
                                             <circle id="SvgjsCircle1926" r="0" cx="0" cy="0" class="apexcharts-marker wv6w5xdvl no-pointer-events" stroke="#ffffff" fill="#007bff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                          </g>
                                       </g>
                                    </g>
                                    <g id="SvgjsG1876" class="apexcharts-datalabels" data:realIndex="0"></g>
                                 </g>
                                 <line id="SvgjsLine1921" x1="0" y1="0" x2="147.75" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                 <line id="SvgjsLine1922" x1="0" y1="0" x2="147.75" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                 <g id="SvgjsG1923" class="apexcharts-yaxis-annotations"></g>
                                 <g id="SvgjsG1924" class="apexcharts-xaxis-annotations"></g>
                                 <g id="SvgjsG1925" class="apexcharts-point-annotations"></g>
                              </g>
                              <rect id="SvgjsRect1869" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                              <g id="SvgjsG1904" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                              <g id="SvgjsG1866" class="apexcharts-annotations"></g>
                           </svg>
                           <div class="apexcharts-legend" style="max-height: 50px;"></div>
                           <div class="apexcharts-tooltip apexcharts-theme-light">
                              <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 123, 255);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                              <div class="apexcharts-yaxistooltip-text"></div>
                           </div>
                        </div>
                     </div>
                     <div class="resize-triggers">
                        <div class="expand-trigger">
                           <div style="width: 149px; height: 101px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-6 col-xl-3">
         <div class="card mb-3 widget-chart widget-chart2 text-start card-btm-border card-shadow-warning border-warning">
            <div class="widget-chat-wrapper-outer">
               <div class="widget-chart-content pt-3 ps-3 pb-1">
                  <div class="widget-chart-flex">
                     <div class="widget-numbers">
                        <div class="widget-chart-flex">
                           <div class="fsize-4">
                              <small class="opacity-5">$</small>
                              <span>1286</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <h6 class="widget-subheading mb-0 opacity-5">last month sales</h6>
               </div>
               <div class="g-0 widget-chart-wrapper mt-3 mb-3 ps-2 he-auto row">
                  <div class="col-md-9" style="position: relative;">
                     <div id="dashboard-sparklines-3" style="min-height: 100px;">
                        <div id="apexchartsa2t8fzu8" class="apexcharts-canvas apexchartsa2t8fzu8 apexcharts-theme-light" style="width: 147.75px; height: 100px;">
                           <svg id="SvgjsSvg1928" width="147.75" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                              <g id="SvgjsG1930" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                 <defs id="SvgjsDefs1929">
                                    <clipPath id="gridRectMaska2t8fzu8">
                                       <rect id="SvgjsRect1936" width="154.75" height="103" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="gridRectMarkerMaska2t8fzu8">
                                       <rect id="SvgjsRect1937" width="151.75" height="104" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                 </defs>
                                 <line id="SvgjsLine1935" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                 <g id="SvgjsG1943" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1944" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g>
                                 </g>
                                 <g id="SvgjsG1970" class="apexcharts-grid">
                                    <g id="SvgjsG1971" class="apexcharts-gridlines-horizontal" style="display: none;">
                                       <line id="SvgjsLine1973" x1="0" y1="0" x2="147.75" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1974" x1="0" y1="10" x2="147.75" y2="10" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1975" x1="0" y1="20" x2="147.75" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1976" x1="0" y1="30" x2="147.75" y2="30" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1977" x1="0" y1="40" x2="147.75" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1978" x1="0" y1="50" x2="147.75" y2="50" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1979" x1="0" y1="60" x2="147.75" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1980" x1="0" y1="70" x2="147.75" y2="70" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1981" x1="0" y1="80" x2="147.75" y2="80" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1982" x1="0" y1="90" x2="147.75" y2="90" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1983" x1="0" y1="100" x2="147.75" y2="100" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG1972" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                    <line id="SvgjsLine1985" x1="0" y1="100" x2="147.75" y2="100" stroke="transparent" stroke-dasharray="0"></line>
                                    <line id="SvgjsLine1984" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line>
                                 </g>
                                 <g id="SvgjsG1938" class="apexcharts-line-series apexcharts-plot-series">
                                    <g id="SvgjsG1939" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                       <path id="SvgjsPath1942" d="M 0 53.464322647362984C 2.248369565217391 53.464322647362984 4.17554347826087 44.15718717683558 6.423913043478261 44.15718717683558C 8.672282608695651 44.15718717683558 10.59945652173913 61.73733195449845 12.847826086956522 61.73733195449845C 15.096195652173913 61.73733195449845 17.02336956521739 3.8262668045501584 19.27173913043478 3.8262668045501584C 21.520108695652173 3.8262668045501584 23.44728260869565 44.15718717683558 25.695652173913043 44.15718717683558C 27.944021739130434 44.15718717683558 29.871195652173913 45.19131334022751 32.119565217391305 45.19131334022751C 34.36793478260869 45.19131334022751 36.295108695652175 52.430196483971045 38.54347826086956 52.430196483971045C 40.79184782608696 52.430196483971045 42.71902173913043 75.18097207859358 44.96739130434783 75.18097207859358C 47.215760869565216 75.18097207859358 49.1429347826087 72.07859358841779 51.391304347826086 72.07859358841779C 53.639673913043474 72.07859358841779 55.566847826086956 60.70320579110652 57.815217391304344 60.70320579110652C 60.06358695652174 60.70320579110652 61.990760869565214 36.91830403309204 64.23913043478261 36.91830403309204C 66.4875 36.91830403309204 68.41467391304349 51.39607032057911 70.66304347826087 51.39607032057911C 72.91141304347826 51.39607032057911 74.83858695652174 80.35160289555326 77.08695652173913 80.35160289555326C 79.33532608695651 80.35160289555326 81.2625 63.80558428128232 83.51086956521739 63.80558428128232C 85.75923913043478 63.80558428128232 87.68641304347827 57.60082730093072 89.93478260869566 57.60082730093072C 92.18315217391304 57.60082730093072 94.11032608695652 55.53257497414685 96.3586956521739 55.53257497414685C 98.6070652173913 55.53257497414685 100.53423913043478 72.07859358841779 102.78260869565217 72.07859358841779C 105.03097826086956 72.07859358841779 106.95815217391305 42.088934850051714 109.20652173913044 42.088934850051714C 111.45489130434783 42.088934850051714 113.3820652173913 35.88417786970011 115.63043478260869 35.88417786970011C 117.87880434782608 35.88417786970011 119.80597826086957 63.80558428128232 122.05434782608695 63.80558428128232C 124.30271739130434 63.80558428128232 126.22989130434783 59.66907962771459 128.47826086956522 59.66907962771459C 130.7266304347826 59.66907962771459 132.65380434782608 32.7817993795243 134.90217391304347 32.7817993795243C 137.15054347826086 32.7817993795243 139.07771739130436 67.94208893485006 141.32608695652175 67.94208893485006C 143.57445652173914 67.94208893485006 145.5016304347826 47.25956566701138 147.75 47.25956566701138" fill="none" fill-opacity="1" stroke="rgba(247,185,36,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaska2t8fzu8)" pathTo="M 0 53.464322647362984C 2.248369565217391 53.464322647362984 4.17554347826087 44.15718717683558 6.423913043478261 44.15718717683558C 8.672282608695651 44.15718717683558 10.59945652173913 61.73733195449845 12.847826086956522 61.73733195449845C 15.096195652173913 61.73733195449845 17.02336956521739 3.8262668045501584 19.27173913043478 3.8262668045501584C 21.520108695652173 3.8262668045501584 23.44728260869565 44.15718717683558 25.695652173913043 44.15718717683558C 27.944021739130434 44.15718717683558 29.871195652173913 45.19131334022751 32.119565217391305 45.19131334022751C 34.36793478260869 45.19131334022751 36.295108695652175 52.430196483971045 38.54347826086956 52.430196483971045C 40.79184782608696 52.430196483971045 42.71902173913043 75.18097207859358 44.96739130434783 75.18097207859358C 47.215760869565216 75.18097207859358 49.1429347826087 72.07859358841779 51.391304347826086 72.07859358841779C 53.639673913043474 72.07859358841779 55.566847826086956 60.70320579110652 57.815217391304344 60.70320579110652C 60.06358695652174 60.70320579110652 61.990760869565214 36.91830403309204 64.23913043478261 36.91830403309204C 66.4875 36.91830403309204 68.41467391304349 51.39607032057911 70.66304347826087 51.39607032057911C 72.91141304347826 51.39607032057911 74.83858695652174 80.35160289555326 77.08695652173913 80.35160289555326C 79.33532608695651 80.35160289555326 81.2625 63.80558428128232 83.51086956521739 63.80558428128232C 85.75923913043478 63.80558428128232 87.68641304347827 57.60082730093072 89.93478260869566 57.60082730093072C 92.18315217391304 57.60082730093072 94.11032608695652 55.53257497414685 96.3586956521739 55.53257497414685C 98.6070652173913 55.53257497414685 100.53423913043478 72.07859358841779 102.78260869565217 72.07859358841779C 105.03097826086956 72.07859358841779 106.95815217391305 42.088934850051714 109.20652173913044 42.088934850051714C 111.45489130434783 42.088934850051714 113.3820652173913 35.88417786970011 115.63043478260869 35.88417786970011C 117.87880434782608 35.88417786970011 119.80597826086957 63.80558428128232 122.05434782608695 63.80558428128232C 124.30271739130434 63.80558428128232 126.22989130434783 59.66907962771459 128.47826086956522 59.66907962771459C 130.7266304347826 59.66907962771459 132.65380434782608 32.7817993795243 134.90217391304347 32.7817993795243C 137.15054347826086 32.7817993795243 139.07771739130436 67.94208893485006 141.32608695652175 67.94208893485006C 143.57445652173914 67.94208893485006 145.5016304347826 47.25956566701138 147.75 47.25956566701138" pathFrom="M -1 100L -1 100L 6.423913043478261 100L 12.847826086956522 100L 19.27173913043478 100L 25.695652173913043 100L 32.119565217391305 100L 38.54347826086956 100L 44.96739130434783 100L 51.391304347826086 100L 57.815217391304344 100L 64.23913043478261 100L 70.66304347826087 100L 77.08695652173913 100L 83.51086956521739 100L 89.93478260869566 100L 96.3586956521739 100L 102.78260869565217 100L 109.20652173913044 100L 115.63043478260869 100L 122.05434782608695 100L 128.47826086956522 100L 134.90217391304347 100L 141.32608695652175 100L 147.75 100"></path>
                                       <g id="SvgjsG1940" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                          <g class="apexcharts-series-markers">
                                             <circle id="SvgjsCircle1991" r="0" cx="0" cy="0" class="apexcharts-marker wgbuqqazxg no-pointer-events" stroke="#ffffff" fill="#f7b924" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                          </g>
                                       </g>
                                    </g>
                                    <g id="SvgjsG1941" class="apexcharts-datalabels" data:realIndex="0"></g>
                                 </g>
                                 <line id="SvgjsLine1986" x1="0" y1="0" x2="147.75" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                 <line id="SvgjsLine1987" x1="0" y1="0" x2="147.75" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                 <g id="SvgjsG1988" class="apexcharts-yaxis-annotations"></g>
                                 <g id="SvgjsG1989" class="apexcharts-xaxis-annotations"></g>
                                 <g id="SvgjsG1990" class="apexcharts-point-annotations"></g>
                              </g>
                              <rect id="SvgjsRect1934" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                              <g id="SvgjsG1969" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                              <g id="SvgjsG1931" class="apexcharts-annotations"></g>
                           </svg>
                           <div class="apexcharts-legend" style="max-height: 50px;"></div>
                           <div class="apexcharts-tooltip apexcharts-theme-light">
                              <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(247, 185, 36);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                              <div class="apexcharts-yaxistooltip-text"></div>
                           </div>
                        </div>
                     </div>
                     <div class="resize-triggers">
                        <div class="expand-trigger">
                           <div style="width: 149px; height: 101px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-6 col-xl-3">
         <div class="card mb-3 widget-chart widget-chart2 text-start card-btm-border card-shadow-danger border-danger">
            <div class="widget-chat-wrapper-outer">
               <div class="widget-chart-content pt-3 ps-3 pb-1">
                  <div class="widget-chart-flex">
                     <div class="widget-numbers">
                        <div class="widget-chart-flex">
                           <div class="fsize-4">
                              <small class="opacity-5">$</small>
                              <span>564</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <h6 class="widget-subheading mb-0 opacity-5">total revenue</h6>
               </div>
               <div class="g-0 widget-chart-wrapper mt-3 mb-3 ps-2 he-auto row">
                  <div class="col-md-9" style="position: relative;">
                     <div id="dashboard-sparklines-4" style="min-height: 100px;">
                        <div id="apexchartskeiu0pvak" class="apexcharts-canvas apexchartskeiu0pvak apexcharts-theme-light" style="width: 147.75px; height: 100px;">
                           <svg id="SvgjsSvg1993" width="147.75" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                              <g id="SvgjsG1995" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                 <defs id="SvgjsDefs1994">
                                    <clipPath id="gridRectMaskkeiu0pvak">
                                       <rect id="SvgjsRect2001" width="154.75" height="103" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="gridRectMarkerMaskkeiu0pvak">
                                       <rect id="SvgjsRect2002" width="151.75" height="104" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                 </defs>
                                 <line id="SvgjsLine2000" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                 <g id="SvgjsG2008" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG2009" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g>
                                 </g>
                                 <g id="SvgjsG2035" class="apexcharts-grid">
                                    <g id="SvgjsG2036" class="apexcharts-gridlines-horizontal" style="display: none;">
                                       <line id="SvgjsLine2038" x1="0" y1="0" x2="147.75" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2039" x1="0" y1="10" x2="147.75" y2="10" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2040" x1="0" y1="20" x2="147.75" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2041" x1="0" y1="30" x2="147.75" y2="30" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2042" x1="0" y1="40" x2="147.75" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2043" x1="0" y1="50" x2="147.75" y2="50" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2044" x1="0" y1="60" x2="147.75" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2045" x1="0" y1="70" x2="147.75" y2="70" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2046" x1="0" y1="80" x2="147.75" y2="80" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2047" x1="0" y1="90" x2="147.75" y2="90" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2048" x1="0" y1="100" x2="147.75" y2="100" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG2037" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                    <line id="SvgjsLine2050" x1="0" y1="100" x2="147.75" y2="100" stroke="transparent" stroke-dasharray="0"></line>
                                    <line id="SvgjsLine2049" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line>
                                 </g>
                                 <g id="SvgjsG2003" class="apexcharts-line-series apexcharts-plot-series">
                                    <g id="SvgjsG2004" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                       <path id="SvgjsPath2007" d="M 0 60.70320579110652C 2.248369565217391 60.70320579110652 4.17554347826087 63.80558428128232 6.423913043478261 63.80558428128232C 8.672282608695651 63.80558428128232 10.59945652173913 3.8262668045501584 12.847826086956522 3.8262668045501584C 15.096195652173913 3.8262668045501584 17.02336956521739 45.19131334022751 19.27173913043478 45.19131334022751C 21.520108695652173 45.19131334022751 23.44728260869565 59.66907962771459 25.695652173913043 59.66907962771459C 27.944021739130434 59.66907962771459 29.871195652173913 44.15718717683558 32.119565217391305 44.15718717683558C 34.36793478260869 44.15718717683558 36.295108695652175 53.464322647362984 38.54347826086956 53.464322647362984C 40.79184782608696 53.464322647362984 42.71902173913043 72.07859358841779 44.96739130434783 72.07859358841779C 47.215760869565216 72.07859358841779 49.1429347826087 75.18097207859358 51.391304347826086 75.18097207859358C 53.639673913043474 75.18097207859358 55.566847826086956 67.94208893485006 57.815217391304344 67.94208893485006C 60.06358695652174 67.94208893485006 61.990760869565214 35.88417786970011 64.23913043478261 35.88417786970011C 66.4875 35.88417786970011 68.41467391304349 55.53257497414685 70.66304347826087 55.53257497414685C 72.91141304347826 55.53257497414685 74.83858695652174 44.15718717683558 77.08695652173913 44.15718717683558C 79.33532608695651 44.15718717683558 81.2625 36.91830403309204 83.51086956521739 36.91830403309204C 85.75923913043478 36.91830403309204 87.68641304347827 47.25956566701138 89.93478260869566 47.25956566701138C 92.18315217391304 47.25956566701138 94.11032608695652 32.7817993795243 96.3586956521739 32.7817993795243C 98.6070652173913 32.7817993795243 100.53423913043478 80.35160289555326 102.78260869565217 80.35160289555326C 105.03097826086956 80.35160289555326 106.95815217391305 52.430196483971045 109.20652173913044 52.430196483971045C 111.45489130434783 52.430196483971045 113.3820652173913 42.088934850051714 115.63043478260869 42.088934850051714C 117.87880434782608 42.088934850051714 119.80597826086957 72.07859358841779 122.05434782608695 72.07859358841779C 124.30271739130434 72.07859358841779 126.22989130434783 61.73733195449845 128.47826086956522 61.73733195449845C 130.7266304347826 61.73733195449845 132.65380434782608 63.80558428128232 134.90217391304347 63.80558428128232C 137.15054347826086 63.80558428128232 139.07771739130436 57.60082730093072 141.32608695652175 57.60082730093072C 143.57445652173914 57.60082730093072 145.5016304347826 51.39607032057911 147.75 51.39607032057911" fill="none" fill-opacity="1" stroke="rgba(217,37,80,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskkeiu0pvak)" pathTo="M 0 60.70320579110652C 2.248369565217391 60.70320579110652 4.17554347826087 63.80558428128232 6.423913043478261 63.80558428128232C 8.672282608695651 63.80558428128232 10.59945652173913 3.8262668045501584 12.847826086956522 3.8262668045501584C 15.096195652173913 3.8262668045501584 17.02336956521739 45.19131334022751 19.27173913043478 45.19131334022751C 21.520108695652173 45.19131334022751 23.44728260869565 59.66907962771459 25.695652173913043 59.66907962771459C 27.944021739130434 59.66907962771459 29.871195652173913 44.15718717683558 32.119565217391305 44.15718717683558C 34.36793478260869 44.15718717683558 36.295108695652175 53.464322647362984 38.54347826086956 53.464322647362984C 40.79184782608696 53.464322647362984 42.71902173913043 72.07859358841779 44.96739130434783 72.07859358841779C 47.215760869565216 72.07859358841779 49.1429347826087 75.18097207859358 51.391304347826086 75.18097207859358C 53.639673913043474 75.18097207859358 55.566847826086956 67.94208893485006 57.815217391304344 67.94208893485006C 60.06358695652174 67.94208893485006 61.990760869565214 35.88417786970011 64.23913043478261 35.88417786970011C 66.4875 35.88417786970011 68.41467391304349 55.53257497414685 70.66304347826087 55.53257497414685C 72.91141304347826 55.53257497414685 74.83858695652174 44.15718717683558 77.08695652173913 44.15718717683558C 79.33532608695651 44.15718717683558 81.2625 36.91830403309204 83.51086956521739 36.91830403309204C 85.75923913043478 36.91830403309204 87.68641304347827 47.25956566701138 89.93478260869566 47.25956566701138C 92.18315217391304 47.25956566701138 94.11032608695652 32.7817993795243 96.3586956521739 32.7817993795243C 98.6070652173913 32.7817993795243 100.53423913043478 80.35160289555326 102.78260869565217 80.35160289555326C 105.03097826086956 80.35160289555326 106.95815217391305 52.430196483971045 109.20652173913044 52.430196483971045C 111.45489130434783 52.430196483971045 113.3820652173913 42.088934850051714 115.63043478260869 42.088934850051714C 117.87880434782608 42.088934850051714 119.80597826086957 72.07859358841779 122.05434782608695 72.07859358841779C 124.30271739130434 72.07859358841779 126.22989130434783 61.73733195449845 128.47826086956522 61.73733195449845C 130.7266304347826 61.73733195449845 132.65380434782608 63.80558428128232 134.90217391304347 63.80558428128232C 137.15054347826086 63.80558428128232 139.07771739130436 57.60082730093072 141.32608695652175 57.60082730093072C 143.57445652173914 57.60082730093072 145.5016304347826 51.39607032057911 147.75 51.39607032057911" pathFrom="M -1 100L -1 100L 6.423913043478261 100L 12.847826086956522 100L 19.27173913043478 100L 25.695652173913043 100L 32.119565217391305 100L 38.54347826086956 100L 44.96739130434783 100L 51.391304347826086 100L 57.815217391304344 100L 64.23913043478261 100L 70.66304347826087 100L 77.08695652173913 100L 83.51086956521739 100L 89.93478260869566 100L 96.3586956521739 100L 102.78260869565217 100L 109.20652173913044 100L 115.63043478260869 100L 122.05434782608695 100L 128.47826086956522 100L 134.90217391304347 100L 141.32608695652175 100L 147.75 100"></path>
                                       <g id="SvgjsG2005" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                          <g class="apexcharts-series-markers">
                                             <circle id="SvgjsCircle2056" r="0" cx="0" cy="0" class="apexcharts-marker w8lhqbcep no-pointer-events" stroke="#ffffff" fill="#d92550" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                          </g>
                                       </g>
                                    </g>
                                    <g id="SvgjsG2006" class="apexcharts-datalabels" data:realIndex="0"></g>
                                 </g>
                                 <line id="SvgjsLine2051" x1="0" y1="0" x2="147.75" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                 <line id="SvgjsLine2052" x1="0" y1="0" x2="147.75" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                 <g id="SvgjsG2053" class="apexcharts-yaxis-annotations"></g>
                                 <g id="SvgjsG2054" class="apexcharts-xaxis-annotations"></g>
                                 <g id="SvgjsG2055" class="apexcharts-point-annotations"></g>
                              </g>
                              <rect id="SvgjsRect1999" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                              <g id="SvgjsG2034" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                              <g id="SvgjsG1996" class="apexcharts-annotations"></g>
                           </svg>
                           <div class="apexcharts-legend" style="max-height: 50px;"></div>
                           <div class="apexcharts-tooltip apexcharts-theme-light">
                              <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(217, 37, 80);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                              <div class="apexcharts-yaxistooltip-text"></div>
                           </div>
                        </div>
                     </div>
                     <div class="resize-triggers">
                        <div class="expand-trigger">
                           <div style="width: 149px; height: 101px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            <i class="header-icon lnr-laptop-phone me-3 text-muted opacity-6"></i>
            Easy Dynamic Tables
         </div>
         <div class="btn-actions-pane-right actions-icon-btn">
            <div class="btn-group dropdown">
               <button type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
               <i class="pe-7s-menu btn-icon-wrapper"></i>
               </button>
               <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                  <h6 tabindex="-1" class="dropdown-header">Header</h6>
                  <button type="button" tabindex="0" class="dropdown-item">
                  <i class="dropdown-icon lnr-inbox"></i>
                  <span>Menus</span>
                  </button>
                  <button type="button" tabindex="0" class="dropdown-item">
                  <i class="dropdown-icon lnr-file-empty"></i>
                  <span>Settings</span>
                  </button>
                  <button type="button" tabindex="0" class="dropdown-item">
                  <i class="dropdown-icon lnr-book"></i>
                  <span>Actions</span>
                  </button>
                  <div tabindex="-1" class="dropdown-divider"></div>
                  <div class="p-3 text-end">
                     <button class="me-2 btn-shadow btn-sm btn btn-link">View Details</button>
                     <button class="me-2 btn-shadow btn-sm btn btn-primary">Action</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="card-body">
         <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
               <div class="col-sm-12 col-md-6">
                  <div class="dataTables_length" id="example_length">
                     <label>
                        Show 
                        <select name="example_length" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm">
                           <option value="10">10</option>
                           <option value="25">25</option>
                           <option value="50">50</option>
                           <option value="100">100</option>
                        </select>
                        entries
                     </label>
                  </div>
               </div>
               <div class="col-sm-12 col-md-6">
                  <div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example_info">
                     <thead>
                        <tr role="row">
                           <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 153px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                           <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 240px;" aria-label="Position: activate to sort column ascending">Position</th>
                           <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 109px;" aria-label="Office: activate to sort column ascending">Office</th>
                           <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 57px;" aria-label="Age: activate to sort column ascending">Age</th>
                           <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 114px;" aria-label="Start date: activate to sort column ascending">Start date</th>
                           <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 84px;" aria-label="Salary: activate to sort column ascending">Salary</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr class="odd">
                           <td class="dtr-control sorting_1" tabindex="0">Airi Satou</td>
                           <td>Accountant</td>
                           <td>Tokyo</td>
                           <td>33</td>
                           <td>2008/11/28</td>
                           <td>$162,700</td>
                        </tr>
                        <tr class="even">
                           <td class="sorting_1 dtr-control">Angelica Ramos</td>
                           <td>Chief Executive Officer (CEO)</td>
                           <td>London</td>
                           <td>47</td>
                           <td>2009/10/09</td>
                           <td>$1,200,000</td>
                        </tr>
                        <tr class="odd">
                           <td class="dtr-control sorting_1" tabindex="0">Ashton Cox</td>
                           <td>Junior Technical Author</td>
                           <td>San Francisco</td>
                           <td>66</td>
                           <td>2009/01/12</td>
                           <td>$86,000</td>
                        </tr>
                        <tr class="even">
                           <td class="sorting_1 dtr-control">Bradley Greer</td>
                           <td>Software Engineer</td>
                           <td>London</td>
                           <td>41</td>
                           <td>2012/10/13</td>
                           <td>$132,000</td>
                        </tr>
                        <tr class="odd">
                           <td class="sorting_1 dtr-control">Brenden Wagner</td>
                           <td>Software Engineer</td>
                           <td>San Francisco</td>
                           <td>28</td>
                           <td>2011/06/07</td>
                           <td>$206,850</td>
                        </tr>
                        <tr class="even">
                           <td class="dtr-control sorting_1" tabindex="0">Brielle Williamson</td>
                           <td>Integration Specialist</td>
                           <td>New York</td>
                           <td>61</td>
                           <td>2012/12/02</td>
                           <td>$372,000</td>
                        </tr>
                        <tr class="odd">
                           <td class="sorting_1 dtr-control">Bruno Nash</td>
                           <td>Software Engineer</td>
                           <td>London</td>
                           <td>38</td>
                           <td>2011/05/03</td>
                           <td>$163,500</td>
                        </tr>
                        <tr class="even">
                           <td class="sorting_1 dtr-control">Caesar Vance</td>
                           <td>Pre-Sales Support</td>
                           <td>New York</td>
                           <td>21</td>
                           <td>2011/12/12</td>
                           <td>$106,450</td>
                        </tr>
                        <tr class="odd">
                           <td class="sorting_1 dtr-control">Cara Stevens</td>
                           <td>Sales Assistant</td>
                           <td>New York</td>
                           <td>46</td>
                           <td>2011/12/06</td>
                           <td>$145,600</td>
                        </tr>
                        <tr class="even">
                           <td class="dtr-control sorting_1" tabindex="0">Cedric Kelly</td>
                           <td>Senior Javascript Developer</td>
                           <td>Edinburgh</td>
                           <td>22</td>
                           <td>2012/03/29</td>
                           <td>$433,060</td>
                        </tr>
                     </tbody>
                     <tfoot>
                        <tr>
                           <th rowspan="1" colspan="1">Name</th>
                           <th rowspan="1" colspan="1">Position</th>
                           <th rowspan="1" colspan="1">Office</th>
                           <th rowspan="1" colspan="1">Age</th>
                           <th rowspan="1" colspan="1">Start date</th>
                           <th rowspan="1" colspan="1">Salary</th>
                        </tr>
                     </tfoot>
                  </table>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12 col-md-5">
                  <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
               </div>
               <div class="col-sm-12 col-md-7">
                  <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                     <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                        <li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-sm-12 col-lg-6">
         <div class="card-hover-shadow-2x mb-3 card">
            <div class="card-header-tab card-header">
               <div class="card-header-title font-size-lg text-capitalize fw-normal">
                  <i class="header-icon lnr-database icon-gradient bg-malibu-beach"></i>
                  Tasks List
               </div>
               <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                  <div class="btn-group dropdown">
                     <button type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                     <i class="pe-7s-menu btn-icon-wrapper"></i>
                     </button>
                     <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                        <button type="button" tabindex="0" class="dropdown-item">
                        <i class="dropdown-icon lnr-inbox"></i>
                        <span>Menus</span>
                        </button>
                        <button type="button" tabindex="0" class="dropdown-item">
                        <i class="dropdown-icon lnr-file-empty"></i>
                        <span>Settings</span>
                        </button>
                        <button type="button" tabindex="0" class="dropdown-item">
                        <i class="dropdown-icon lnr-book"></i>
                        <span>Actions</span>
                        </button>
                        <div tabindex="-1" class="dropdown-divider"></div>
                        <div class="p-3 text-end">
                           <button class="me-2 btn-shadow btn-sm btn btn-link">View Details</button>
                           <button class="me-2 btn-shadow btn-sm btn btn-primary">Action</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="scroll-area-lg">
               <div class="scrollbar-container ps ps--active-y">
                  <div class="p-2">
                     <ul class="todo-list-wrapper list-group list-group-flush">
                        <li class="list-group-item">
                           <div class="todo-indicator bg-warning"></div>
                           <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                 <div class="widget-content-left me-2">
                                    <div class="custom-checkbox custom-control form-check">
                                       <input type="checkbox" id="exampleCustomCheckbox12" class="form-check-input">
                                       <label class="form-label form-check-label" for="exampleCustomCheckbox12">&nbsp;</label>
                                    </div>
                                 </div>
                                 <div class="widget-content-left">
                                    <div class="widget-heading">
                                       Wash the car
                                       <div class="badge bg-danger ms-2">Rejected</div>
                                    </div>
                                    <div class="widget-subheading">
                                       <i>Written by Bob</i>
                                    </div>
                                 </div>
                                 <div class="widget-content-right widget-content-actions">
                                    <button class="border-0 btn-transition btn btn-outline-success">
                                    <i class="fa fa-check"></i>
                                    </button>
                                    <button class="border-0 btn-transition btn btn-outline-danger">
                                    <i class="fa fa-trash-alt"></i>
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="list-group-item">
                           <div class="todo-indicator bg-focus"></div>
                           <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                 <div class="widget-content-left me-2">
                                    <div class="custom-checkbox custom-control form-check">
                                       <input type="checkbox" id="exampleCustomCheckbox1" class="form-check-input">
                                       <label class="form-label form-check-label" for="exampleCustomCheckbox1">&nbsp;</label>
                                    </div>
                                 </div>
                                 <div class="widget-content-left">
                                    <div class="widget-heading">Task with dropdown menu</div>
                                    <div class="widget-subheading">
                                       <div>
                                          By Johnny
                                          <div class="badge rounded-pill bg-info ms-2">NEW</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="widget-content-right widget-content-actions">
                                    <div class="d-inline-block dropdown">
                                       <button type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="border-0 btn-transition btn btn-link">
                                       <i class="fa fa-ellipsis-h"></i>
                                       </button>
                                       <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                          <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                          <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">
                                          Action
                                          </button>
                                          <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                          <div tabindex="-1" class="dropdown-divider"></div>
                                          <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="list-group-item">
                           <div class="todo-indicator bg-primary"></div>
                           <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                 <div class="widget-content-left me-2">
                                    <div class="custom-checkbox custom-control form-check">
                                       <input type="checkbox" id="exampleCustomCheckbox4" class="form-check-input">
                                       <label class="form-label form-check-label" for="exampleCustomCheckbox4">&nbsp;</label>
                                    </div>
                                 </div>
                                 <div class="widget-content-left flex2">
                                    <div class="widget-heading">Badge on the right task</div>
                                    <div class="widget-subheading">This task has show on hover actions!</div>
                                 </div>
                                 <div class="widget-content-right widget-content-actions">
                                    <button class="border-0 btn-transition btn btn-outline-success">
                                    <i class="fa fa-check"></i>
                                    </button>
                                 </div>
                                 <div class="widget-content-right ms-3">
                                    <div class="badge rounded-pill bg-success">Latest Task</div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="list-group-item">
                           <div class="todo-indicator bg-info"></div>
                           <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                 <div class="widget-content-left me-2">
                                    <div class="custom-checkbox custom-control form-check">
                                       <input type="checkbox" id="exampleCustomCheckbox2" class="form-check-input">
                                       <label class="form-label form-check-label" for="exampleCustomCheckbox2">&nbsp;</label>
                                    </div>
                                 </div>
                                 <div class="widget-content-left me-3">
                                    <div class="widget-content-left">
                                       <img width="42" class="rounded" src="images/avatars/1.jpg" alt="">
                                    </div>
                                 </div>
                                 <div class="widget-content-left">
                                    <div class="widget-heading">Go grocery shopping</div>
                                    <div class="widget-subheading">A short description for this todo item</div>
                                 </div>
                                 <div class="widget-content-right widget-content-actions">
                                    <button class="border-0 btn-transition btn btn-outline-success">
                                    <i class="fa fa-check"></i>
                                    </button>
                                    <button class="border-0 btn-transition btn btn-outline-danger">
                                    <i class="fa fa-trash-alt"></i>
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="list-group-item">
                           <div class="todo-indicator bg-success"></div>
                           <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                 <div class="widget-content-left me-2">
                                    <div class="custom-checkbox custom-control form-check">
                                       <input type="checkbox" id="exampleCustomCheckbox3" class="form-check-input">
                                       <label class="form-label form-check-label" for="exampleCustomCheckbox3">&nbsp;</label>
                                    </div>
                                 </div>
                                 <div class="widget-content-left flex2">
                                    <div class="widget-heading">Development Task</div>
                                    <div class="widget-subheading">Finish React ToDo List App</div>
                                 </div>
                                 <div class="widget-content-right">
                                    <div class="badge bg-warning me-2">69</div>
                                 </div>
                                 <div class="widget-content-right">
                                    <button class="border-0 btn-transition btn btn-outline-success">
                                    <i class="fa fa-check"></i>
                                    </button>
                                    <button class="border-0 btn-transition btn btn-outline-danger">
                                    <i class="fa fa-trash-alt"></i>
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="list-group-item">
                           <div class="todo-indicator bg-warning"></div>
                           <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                 <div class="widget-content-left me-2">
                                    <div class="custom-checkbox custom-control form-check">
                                       <input type="checkbox" id="exampleCustomCheckbox12" class="form-check-input">
                                       <label class="form-label form-check-label" for="exampleCustomCheckbox12">&nbsp;</label>
                                    </div>
                                 </div>
                                 <div class="widget-content-left">
                                    <div class="widget-heading">
                                       Wash the car
                                       <div class="badge bg-danger ms-2">Rejected</div>
                                    </div>
                                    <div class="widget-subheading">
                                       <i>Written by Bob</i>
                                    </div>
                                 </div>
                                 <div class="widget-content-right widget-content-actions">
                                    <button class="border-0 btn-transition btn btn-outline-success">
                                    <i class="fa fa-check"></i>
                                    </button>
                                    <button class="border-0 btn-transition btn btn-outline-danger">
                                    <i class="fa fa-trash-alt"></i>
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="list-group-item">
                           <div class="todo-indicator bg-focus"></div>
                           <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                 <div class="widget-content-left me-2">
                                    <div class="custom-checkbox custom-control form-check">
                                       <input type="checkbox" id="exampleCustomCheckbox1" class="form-check-input">
                                       <label class="form-label form-check-label" for="exampleCustomCheckbox1">&nbsp;</label>
                                    </div>
                                 </div>
                                 <div class="widget-content-left">
                                    <div class="widget-heading">Task with dropdown menu</div>
                                    <div class="widget-subheading">
                                       <div>
                                          By Johnny
                                          <div class="badge rounded-pill bg-info ms-2">NEW</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="widget-content-right widget-content-actions">
                                    <div class="d-inline-block dropdown">
                                       <button type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="border-0 btn-transition btn btn-link">
                                       <i class="fa fa-ellipsis-h"></i>
                                       </button>
                                       <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                          <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                          <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">
                                          Action
                                          </button>
                                          <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                          <div tabindex="-1" class="dropdown-divider"></div>
                                          <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="list-group-item">
                           <div class="todo-indicator bg-primary"></div>
                           <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                 <div class="widget-content-left me-2">
                                    <div class="custom-checkbox custom-control form-check">
                                       <input type="checkbox" id="exampleCustomCheckbox4" class="form-check-input">
                                       <label class="form-label form-check-label" for="exampleCustomCheckbox4">&nbsp;</label>
                                    </div>
                                 </div>
                                 <div class="widget-content-left flex2">
                                    <div class="widget-heading">Badge on the right task</div>
                                    <div class="widget-subheading">This task has show on hover actions!</div>
                                 </div>
                                 <div class="widget-content-right widget-content-actions">
                                    <button class="border-0 btn-transition btn btn-outline-success">
                                    <i class="fa fa-check"></i>
                                    </button>
                                 </div>
                                 <div class="widget-content-right ms-3">
                                    <div class="badge rounded-pill bg-success">Latest Task</div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="list-group-item">
                           <div class="todo-indicator bg-info"></div>
                           <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                 <div class="widget-content-left me-2">
                                    <div class="custom-checkbox custom-control form-check">
                                       <input type="checkbox" id="exampleCustomCheckbox2" class="form-check-input">
                                       <label class="form-label form-check-label" for="exampleCustomCheckbox2">&nbsp;</label>
                                    </div>
                                 </div>
                                 <div class="widget-content-left me-3">
                                    <div class="widget-content-left">
                                       <img width="42" class="rounded" src="images/avatars/1.jpg" alt="">
                                    </div>
                                 </div>
                                 <div class="widget-content-left">
                                    <div class="widget-heading">Go grocery shopping</div>
                                    <div class="widget-subheading">A short description for this todo item</div>
                                 </div>
                                 <div class="widget-content-right widget-content-actions">
                                    <button class="border-0 btn-transition btn btn-outline-success">
                                    <i class="fa fa-check"></i>
                                    </button>
                                    <button class="border-0 btn-transition btn btn-outline-danger">
                                    <i class="fa fa-trash-alt"></i>
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="list-group-item">
                           <div class="todo-indicator bg-success"></div>
                           <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                 <div class="widget-content-left me-2">
                                    <div class="custom-checkbox custom-control form-check">
                                       <input type="checkbox" id="exampleCustomCheckbox3" class="form-check-input">
                                       <label class="form-label form-check-label" for="exampleCustomCheckbox3">&nbsp;</label>
                                    </div>
                                 </div>
                                 <div class="widget-content-left flex2">
                                    <div class="widget-heading">Development Task</div>
                                    <div class="widget-subheading">Finish React ToDo List App</div>
                                 </div>
                                 <div class="widget-content-right">
                                    <div class="badge bg-warning me-2">69</div>
                                 </div>
                                 <div class="widget-content-right">
                                    <button class="border-0 btn-transition btn btn-outline-success">
                                    <i class="fa fa-check"></i>
                                    </button>
                                    <button class="border-0 btn-transition btn btn-outline-danger">
                                    <i class="fa fa-trash-alt"></i>
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                     <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                  </div>
                  <div class="ps__rail-y" style="top: 0px; height: 400px; right: 0px;">
                     <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 261px;"></div>
                  </div>
               </div>
            </div>
            <div class="d-block text-end card-footer">
               <button class="me-2 btn btn-link btn-sm">Cancel</button>
               <button class="btn btn-primary">Add Task</button>
            </div>
         </div>
      </div>
      <div class="col-sm-12 col-lg-6">
         <div class="card-hover-shadow-2x mb-3 card">
            <div class="card-header-tab card-header">
               <div class="card-header-title font-size-lg text-capitalize fw-normal">
                  <i class="header-icon lnr-printer icon-gradient bg-ripe-malin"></i>
                  Chat Box
               </div>
               <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                  <div class="btn-group dropdown">
                     <button type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                     <i class="pe-7s-menu btn-icon-wrapper"></i>
                     </button>
                     <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                        <button type="button" tabindex="0" class="dropdown-item">
                        <i class="dropdown-icon lnr-inbox"></i>
                        <span>Menus</span>
                        </button>
                        <button type="button" tabindex="0" class="dropdown-item">
                        <i class="dropdown-icon lnr-file-empty"></i>
                        <span>Settings</span>
                        </button>
                        <button type="button" tabindex="0" class="dropdown-item">
                        <i class="dropdown-icon lnr-book"></i>
                        <span>Actions</span>
                        </button>
                        <div tabindex="-1" class="dropdown-divider"></div>
                        <div class="p-3 text-end">
                           <button class="me-2 btn-shadow btn-sm btn btn-link">View Details</button>
                           <button class="me-2 btn-shadow btn-sm btn btn-primary">Action</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="scroll-area-lg">
               <div class="scrollbar-container ps ps--active-y">
                  <div class="p-2">
                     <div class="chat-wrapper p-1">
                        <div class="chat-box-wrapper">
                           <div>
                              <div class="avatar-icon-wrapper me-1">
                                 <div class="badge badge-bottom btn-shine bg-success badge-dot badge-dot-lg"></div>
                                 <div class="avatar-icon avatar-icon-lg rounded">
                                    <img src="images/avatars/2.jpg" alt="">
                                 </div>
                              </div>
                           </div>
                           <div>
                              <div class="chat-box">
                                 But I must explain to you how all this mistaken
                                 idea of denouncing pleasure and praising pain was born and I will
                                 give you a complete account of the system.
                              </div>
                              <small class="opacity-6">
                              <i class="fa fa-calendar-alt me-1"></i>
                              11:01 AM | Yesterday
                              </small>
                           </div>
                        </div>
                        <div class="float-end">
                           <div class="chat-box-wrapper chat-box-wrapper-right">
                              <div>
                                 <div class="chat-box">
                                    Expound the actual teachings of the great
                                    explorer of the truth, the master-builder of human happiness.
                                 </div>
                                 <small class="opacity-6">
                                 <i class="fa fa-calendar-alt me-1"></i>
                                 11:01 AM | Yesterday
                                 </small>
                              </div>
                              <div>
                                 <div class="avatar-icon-wrapper ms-1">
                                    <div class="badge badge-bottom btn-shine bg-success badge-dot badge-dot-lg"></div>
                                    <div class="avatar-icon avatar-icon-lg rounded">
                                       <img src="images/avatars/3.jpg" alt="">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="chat-box-wrapper">
                           <div>
                              <div class="avatar-icon-wrapper me-1">
                                 <div class="badge badge-bottom btn-shine bg-success badge-dot badge-dot-lg"></div>
                                 <div class="avatar-icon avatar-icon-lg rounded">
                                    <img src="images/avatars/2.jpg" alt="">
                                 </div>
                              </div>
                           </div>
                           <div>
                              <div class="chat-box">
                                 But I must explain to you how all this mistaken
                                 idea of denouncing pleasure and praising pain was born and I will
                                 give you a complete account of the system.
                              </div>
                              <small class="opacity-6">
                              <i class="fa fa-calendar-alt me-1"></i>
                              11:01 AM | Yesterday
                              </small>
                           </div>
                        </div>
                        <div class="float-end">
                           <div class="chat-box-wrapper chat-box-wrapper-right">
                              <div>
                                 <div class="chat-box">
                                    Denouncing pleasure and praising pain was born
                                    and I will give you a complete account.
                                 </div>
                                 <small class="opacity-6">
                                 <i class="fa fa-calendar-alt me-1"></i>
                                 11:01 AM | Yesterday
                                 </small>
                              </div>
                              <div>
                                 <div class="avatar-icon-wrapper ms-1">
                                    <div class="badge badge-bottom btn-shine bg-success badge-dot badge-dot-lg"></div>
                                    <div class="avatar-icon avatar-icon-lg rounded">
                                       <img src="images/avatars/2.jpg" alt="">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="float-end">
                           <div class="chat-box-wrapper chat-box-wrapper-right">
                              <div>
                                 <div class="chat-box">The master-builder of human happiness.</div>
                                 <small class="opacity-6">
                                 <i class="fa fa-calendar-alt me-1"></i>
                                 11:01 AM | Yesterday
                                 </small>
                              </div>
                              <div>
                                 <div class="avatar-icon-wrapper ms-1">
                                    <div class="badge badge-bottom btn-shine bg-success badge-dot badge-dot-lg"></div>
                                    <div class="avatar-icon avatar-icon-lg rounded">
                                       <img src="images/avatars/2.jpg" alt="">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                     <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                  </div>
                  <div class="ps__rail-y" style="top: 0px; height: 400px; right: 0px;">
                     <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 289px;"></div>
                  </div>
               </div>
            </div>
            <div class="card-footer">
               <input placeholder="Write here and hit enter to send..." type="text" class="form-control-sm form-control">
            </div>
         </div>
      </div>
   </div>
   <div class="card no-shadow bg-transparent no-border rm-borders mb-3">
      <div class="card">
         <div class="g-0 row">
            <div class="col-md-12 col-lg-4">
               <ul class="list-group list-group-flush">
                  <li class="bg-transparent list-group-item">
                     <div class="widget-content p-0">
                        <div class="widget-content-outer">
                           <div class="widget-content-wrapper">
                              <div class="widget-content-left">
                                 <div class="widget-heading">Total Orders</div>
                                 <div class="widget-subheading">Last year expenses</div>
                              </div>
                              <div class="widget-content-right">
                                 <div class="widget-numbers text-success">1896</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="bg-transparent list-group-item">
                     <div class="widget-content p-0">
                        <div class="widget-content-outer">
                           <div class="widget-content-wrapper">
                              <div class="widget-content-left">
                                 <div class="widget-heading">Clients</div>
                                 <div class="widget-subheading">Total Clients Profit</div>
                              </div>
                              <div class="widget-content-right">
                                 <div class="widget-numbers text-primary">$12.6k</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="col-md-12 col-lg-4">
               <ul class="list-group list-group-flush">
                  <li class="bg-transparent list-group-item">
                     <div class="widget-content p-0">
                        <div class="widget-content-outer">
                           <div class="widget-content-wrapper">
                              <div class="widget-content-left">
                                 <div class="widget-heading">Followers</div>
                                 <div class="widget-subheading">People Interested</div>
                              </div>
                              <div class="widget-content-right">
                                 <div class="widget-numbers text-danger">45,9%</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="bg-transparent list-group-item">
                     <div class="widget-content p-0">
                        <div class="widget-content-outer">
                           <div class="widget-content-wrapper">
                              <div class="widget-content-left">
                                 <div class="widget-heading">Products Sold</div>
                                 <div class="widget-subheading">Total revenue streams</div>
                              </div>
                              <div class="widget-content-right">
                                 <div class="widget-numbers text-warning">$3M</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="col-md-12 col-lg-4">
               <ul class="list-group list-group-flush">
                  <li class="bg-transparent list-group-item">
                     <div class="widget-content p-0">
                        <div class="widget-content-outer">
                           <div class="widget-content-wrapper">
                              <div class="widget-content-left">
                                 <div class="widget-heading">Total Orders</div>
                                 <div class="widget-subheading">Last year expenses</div>
                              </div>
                              <div class="widget-content-right">
                                 <div class="widget-numbers text-success">1896</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="bg-transparent list-group-item">
                     <div class="widget-content p-0">
                        <div class="widget-content-outer">
                           <div class="widget-content-wrapper">
                              <div class="widget-content-left">
                                 <div class="widget-heading">Clients</div>
                                 <div class="widget-subheading">Total Clients Profit</div>
                              </div>
                              <div class="widget-content-right">
                                 <div class="widget-numbers text-primary">$12.6k</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('footer')
<script type="text/javascript" src="{{url('public/admin/js/count-up.js')}}" ></script>
<script type="text/javascript" src="{{url('public/admin/js/form-components/input-mask.js')}}"></script>
<script type="text/javascript" src="{{url('public/admin/vendors/inputmask/dist/jquery.inputmask.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/admin/js/form-components/input-select.js')}}"></script>
<script type="text/javascript" src="{{url('public/admin/vendors/select2/dist/js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/admin/vendors/sweetalert2/dist/sweetalert2.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/admin/js/sweet-alerts.js')}}"></script>
<script>
   $(document).ready(function(){
      
   
        $("#create").click(function(){
            var id=$("#id").val();
            var org_name=$("#orgnization_name").val();
            var sector=$("#sector").val();
            var org_head=$("#orgnization_head").val();
            var ofc_adrs=$("#office_address").val();
            var ofc_con=$("#office_contact").val();
            var desig=$("#designation").val();
            var per_con=$("#personal_contact").val();
            
          /*  Swal.fire({ 
                    text: ""+id+"-"+org_name+"-"+sector+"-"+org_head+"-"+ofc_adrs+"-"+ofc_con+"-"+desig+"-"+per_con,
                    title:"Status",
                    type: "question",
                        });
            
                        */
                        
            $.ajax({
                type: "post",
                url: "{{route('updateaccount')}}",
                data:{
                        '_token': "<?php echo csrf_token() ?>",
                        id:id,
                        orgnization:org_name,
                        sector:sector,
                        officer_name:org_head,
                        address:ofc_adrs,
                        office_contact:ofc_con,
                        designation:desig,
                        personal_contact:per_con,           
                    },
                dataType: "json",
                beforeSend:function()
                {
                    
                },
                success: function (res) {
   
                    Swal.fire({ 
                    text: res.message,
                    title:res.status,
                    type: "question",
                        }).then(okay => {
                        if (okay) {
                            if($.isEmptyObject(res.error))
                            {
                                $(".print-error-msg").css('display','none');
                                location.reload(true);
                            }
                            else{
                                $(".print-error-msg").find("ul").html('');
                                $(".print-error-msg").css('display','block');
                                $.each( res.error, function( key, value ) {
                                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                                });
                            }
                        }
                    });
   
                   
                   
                }
            });
            
   
        });
   
        $("#create_ind").click(function(){
            var id=$("#uid").val();
            var org_name="NA";
            var sector="NA";
            var org_head=$("#name").val();
            var ofc_adrs=$("#address").val();
            var ofc_con="NA";
            var desig="NA";
            var per_con=$("#mobile").val();
            
          
                        
            $.ajax({
                type: "post", 
                url: "{{route('updateaccountind')}}",
                data:{
                        '_token': "<?php echo csrf_token() ?>",
                        id:id,
                        orgnization:org_name,
                        sector:sector,
                        name:org_head,
                        address:ofc_adrs,
                        office_contact:ofc_con,
                        designation:desig,
                        mobile:per_con,           
                    },
                dataType: "json",
                beforeSend:function()
                {
                    
                },
                success: function (res) {
   
                    Swal.fire({ 
                    text: res.message,
                    title:res.status,
                    type: "question",
                        }).then(okay => {
                        if (okay) {
                            if($.isEmptyObject(res.error))
                            {
                                $(".print-error-msg").css('display','none');
                                location.reload(true);
                            }
                            else{
                                $(".print-error-msg").find("ul").html('');
                                $(".print-error-msg").css('display','block');
                                $.each( res.error, function( key, value ) {
                                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                                });
                            }
                        }
                    });
   
                   
                   
                }
            });
            
   
        });
   
    });
</script>
@endsection