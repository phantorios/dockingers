<!DOCTYPE html>
<html lang="en">
<head>
		<!-- Google Tag Manager -->
		{{-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src= '../../../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5FS8GGP');</script> --}}
		<!-- End Google Tag Manager -->
		<meta charset="utf-8" />
		<title>Sign In</title>
		<meta name="description" content="Singin page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
        <link href="{{ asset('assets/css/pages/login/login-31894.css?v=7.1.9') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle1894.css?v=7.1.9') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle1894.css?v=7.1.9') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle1894.css?v=7.1.9') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="{{ asset('assets/css/themes/layout/header/base/light1894.css?v=7.1.9') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/themes/layout/header/menu/light1894.css?v=7.1.9') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/themes/layout/brand/dark1894.css?v=7.1.9') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/themes/layout/aside/dark1894.css?v=7.1.9') }}" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/logos/favicon.ico" />
		<!-- Hotjar Tracking Code for keenthemes.com -->
		<script>(function(h,o,t,j,a,r){ h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)}; h._hjSettings={hjid:1070954,hjsv:6}; a=o.getElementsByTagName('head')[0]; r=o.createElement('script');r.async=1; r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv; a.appendChild(r); })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!-- Google Tag Manager (noscript) -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<!-- End Google Tag Manager (noscript) -->
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Aside-->
				<div class="login-aside d-flex flex-column flex-row-auto">
					<!--begin::Aside Top-->
					<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
						<!--begin::Aside header-->
						<a href="#" class="login-logo text-center pt-lg-25 pb-10">
							{{-- <img src="{{ asset('assets/media/logos/logo-1.png') }}" class="max-h-70px" alt="" /> --}}
                            <h3>Pengajuan Hibah</h3>
						</a>
						<!--end::Aside header-->
					</div>
					<!--end::Aside Top-->
					<!--begin::Aside Bottom-->
					<div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-x-center" style="background-position-y: calc(100% + 5rem); background-image: url(https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/illustrations/login-visual-5.svg)"></div>
					<!--end::Aside Bottom-->
				</div>
				<!--begin::Aside-->
				<!--begin::Content-->
				<div class="login-content flex-row-fluid d-flex flex-column p-10">
					<!--begin::Top-->
					{{-- <div class="text-right d-flex justify-content-center">
						<div class="top-signin text-right d-flex justify-content-end pt-5 pb-lg-0 pb-10">
							<span class="font-weight-bold text-muted font-size-h4">Having issues?</span>
							<a href="javascript:;" class="font-weight-bold text-primary font-size-h4 ml-2" id="kt_login_signup">Get Help</a>
						</div>
					</div> --}}
					<!--end::Top-->
					<!--begin::Wrapper-->
					<div class="d-flex flex-row-fluid flex-center">
						<!--begin::Signin-->
						<div class="login-form">
                            {{-- @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <h4 class="alert-heading">Gagal Login!</h4>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    <hr>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif --}}
							<!--begin::Form-->
							<form class="form" id="kt_login_singin_form" action="{{ url('login/submit') }}" method="POST">
                                @csrf
								<!--begin::Title-->
								<div class="pb-5 pb-lg-15">
									<h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Login</h3>
									<div class="text-muted font-weight-bold font-size-h4">Buat Akun? 
									<a href="{{ url('register') }}" class="text-primary font-weight-bolder"><u>Klik</u></a></div>
								</div>
								<!--begin::Title-->
								<!--begin::Form group-->
								<div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Email</label>
									<input class="form-control h-auto py-7 px-6 rounded-lg border-0" type="email" name="email" autocomplete="off" value="{{ old('email') }}"/>
								</div>
								<!--end::Form group-->
								<!--begin::Form group-->
								<div class="form-group">
									<div class="d-flex justify-content-between mt-n5">
										<label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
										{{-- <a href="forgot.html" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">Forgot Password ?</a> --}}
									</div>
									<input class="form-control h-auto py-7 px-6 rounded-lg border-0" type="password" name="password" autocomplete="off" />
								</div>
								<!--end::Form group-->
								<!--begin::Action-->
								<div class="pb-lg-0 pb-5">
									<button type="submit" id="kt_login_singin_form_submit_button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>
								</div>
								<!--end::Action-->
							</form>
                            
							<!--end::Form-->
						</div>
						<!--end::Signin-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle1894.js?v=7.1.9') }}"></script>
		<script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle1894.js?v=7.1.9') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle1894.js?v=7.1.9') }}"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		{{-- <script src="{{ asset('assets/js/pages/custom/login/login-41894.js?v=7.1.9') }}"></script> --}}
		<!--end::Page Scripts-->

        <script>
            @if (session()->has('success'))
                alert_type("<i class='fas fa-cloud-upload-alt text-light mr-2'></i>Sukses",'success',"{{ session()->get('success') }}");
            @endif
            @if (session()->has('warning'))
                alert_type("<i class='far fa-edit mr-3 text-light'></i>Pemberitahuan",'warning',"{{ session()->get('warning') }}");
            @endif
            @if (session()->has('danger'))
                alert_type("<i class='fas fa-exclamation-triangle text-light mr-3'></i>Gagal",'danger',"{{ session()->get('danger') }}");
            @endif
            function alert_type(title,type,message) {
                var KTBootstrapNotifyDemo={
                init:function(){
                var t={
                    message: message
                };
                t.title=title
                var e=$.notify(t,
                    {
                        type:type,
                        timer:1000,
                        placement:
                        {
                            from:"bottom",
                            align:"right"
                        },
                        z_index:"1000",
                        animate:
                        {
                            enter:"animate__animated animate__bounce",
                            exit:"animate__animated animate__bounce"
                        }
                    });
                }
                };
                jQuery(document).ready((function(){KTBootstrapNotifyDemo.init()}));
            }
            
            </script>
	</body>
	<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic/demo1/custom/pages/login/login-4/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jan 2021 06:43:12 GMT -->
</html>