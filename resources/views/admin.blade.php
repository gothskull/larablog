@include('admin/partials/head')

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		@include('admin/partials/header-mobile')
		

		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- begin:: Aside -->
				@include('admin/partials/aside')
				

				<!-- end:: Aside -->
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					@include('admin/partials/header')
					

					<!-- end:: Header -->
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
						@include('admin/partials/subheader')
						
						@if(session()->has('flash'))
							<div class="alert alert-success" role="alert">
	                            <div class="alert-icon"><i class="flaticon-exclamation-2"></i></div>
	                            <div class="alert-text">{{session('flash') }} </div>
	                        </div>
						@endif
						<!-- begin:: Content -->
						@yield('contenido')

						<!-- end:: Content -->
					</div>

					<!-- begin:: Footer -->
					@include('admin/partials/footer')
					

					<!-- end:: Footer -->
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Quick Panel -->
		@include('admin/partials/quick-panel')
		

		<!-- end::Quick Panel -->

		<!-- begin::Scrolltop -->
		@include('admin/partials/scrolltop')
		

		<!-- end::Scrolltop -->

		<!-- begin::Sticky Toolbar -->
		@include('admin/partials/sticky-toolbar')
		

		<!-- end::Sticky Toolbar -->

		<!-- begin::Demo Panel -->
		@include('admin/partials/demo-panel')
		

		<!-- end::Demo Panel -->

		<!--Begin:: Chat-->
		@include('admin/partials/chat')
		

		<!--ENd:: Chat-->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		@include('admin/partials/scripts')
