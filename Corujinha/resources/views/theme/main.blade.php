<!DOCTYPE html>
<html lang="pt-BR">
	<!--begin::Head-->
	<head>
		<title>Coruja Veia</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="/metronic8/demo16/assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="{{ URL::asset('custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ URL::asset('custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		@if (auth()->user()->theme === 'dark')
            <link href="{{ URL::asset('plugins/global/plugins.dark.bundle.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ URL::asset('css/style.dark.bundle.css') }}" rel="stylesheet" type="text/css" />
        @else
            <link href="{{ URL::asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ URL::asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        @endif
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header" style="height: 80px !important;">
						<!--begin::Container-->
						<div class="container-xxl d-flex flex-grow-1 flex-stack">
							<!--begin::Header Logo-->
							<div class="d-flex align-items-center me-5">
								<!--begin::Heaeder menu toggle-->
								<div class="d-lg-none btn btn-icon btn-active-color-primary w-30px h-30px ms-n2 me-3" id="kt_header_menu_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--end::Heaeder menu toggle-->
								<!--begin::Logo-->
								<a href="{{ route('event.index') }}">
									<img alt="Logo" src="{{ URL::asset('media/logos/logo.png') }}" class="h-25px h-lg-30px" />
								</a>
								<!--end::Logo-->
								<!--begin::Nav-->
								<div class="ms-5 ms-md-10 me-3">
									<!--begin::Toggle-->
									<button type="button" class="btn btn-nav btn-outline btn-flex btn-active-color-white align-items-center justify-content-center justify-content-md-between align-items-lg-cenrer flex-md-content-between btn-color-gray-500 px-0 ps-md-5 pe-md-4 h-30px w-30px h-md-35px w-md-175px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
										<span class="fs-7 d-none d-md-inline">Eventos</span>
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon svg-icon-4 ms-md-4 me-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Toggle-->
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg fw-bold w-200px pb-3" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content fs-7 text-dark fw-bolder px-3 py-4">Selecione um evento:</div>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator mb-3 opacity-75"></div>
										<!--end::Menu separator-->
										@foreach (App\Models\Event::all() as $ev)
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('event.show', $ev->slug) }}" class="menu-link px-3">{{ $ev->name }}</a>
                                            </div>
                                            <!--end::Menu item-->
                                        @endforeach
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Nav-->
								<!--begin::Button-->
								<a href="#" class="btn btn-create btn-active-primary btn-icon w-30px h-30px w-md-35px h-md-35px" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="black"></rect>
											<rect x="6" y="11" width="12" height="2" rx="1" fill="black"></rect>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</a>
								<!--end::Button-->
							</div>
							<!--end::Header Logo-->
							<!--begin::Toolbar wrapper-->
							<div class="topbar d-flex align-items-stretch flex-shrink-0" id="kt_topbar">
								<!--begin::Theme mode-->
								<div class="d-flex align-items-center ms-2 ms-lg-3">
									<!--begin::Menu toggle-->
									<a href="#" class="btn btn-icon btn-custom w-30px h-30px w-md-40px h-md-40px btn-color-warning" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
										<i class="fas fa-sun fs-2 @if(auth()->user()->theme === 'dark') d-none @endif"></i>
										<i class="fas fa-moon fs-2 @if(auth()->user()->theme === 'light') d-none @endif"></i>
									</a>
									<!--begin::Menu toggle-->
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted menu-active-bg menu-state-primary fw-bold py-4 fs-6 w-200px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-1">
											<a onclick="document.getElementById('theme-light').submit()" class="menu-link px-3 @if(auth()->user()->theme === 'light') active @endif">
												<span class="menu-icon">
													<i class="fas fa-sun fs-2"></i>
												</span>
												<span class="menu-title">Light</span>
											</a>
                                            <form id="theme-light" action="{{ route('theme.light') }}" method="post">@csrf</form>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-1">
											<a onclick="document.getElementById('theme-dark').submit()" class="menu-link px-3 @if(auth()->user()->theme === 'dark') active @endif">
												<span class="menu-icon">
													<i class="fas fa-moon fs-2"></i>
												</span>
												<span class="menu-title">Dark</span>
											</a>
                                            <form id="theme-dark" action="{{ route('theme.dark') }}" method="post">@csrf</form>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Theme mode-->
								<!--begin::User-->
								<div class="d-flex align-items-center ms-2 ms-lg-3" id="kt_header_user_menu_toggle">
									<!--begin::Menu wrapper-->
									<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<img src="/storage/{{ auth()->user()->profile_photo_path }}" alt="user" />
									</div>
									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="/storage/{{ auth()->user()->profile_photo_path }}" />
												</div>
												<!--end::Avatar-->
												<!--begin::Username-->
												<div class="d-flex flex-column">
													<div class="fw-bolder d-flex align-items-center fs-5">{{ auth()->user()->name }}
													@if(auth()->user()->role('super admin'))
                                                        <span class="badge badge-dark fw-bolder fs-8 px-2 py-1 ms-2">Admin</span>
                                                    @endif
                                                </div>
													<a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{ auth()->user()->email }}</a>
												</div>
												<!--end::Username-->
											</div>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-5 my-1">
											<a href="#" class="menu-link px-5">Minha conta</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a onclick="document.getElementById('logout').submit()" class="menu-link px-5">Sair</a>
										</div>
                                        <form id="logout" action="{{ route('logout') }}" method="post">@csrf</form>
										<!--end::Menu item-->
									</div>
									<!--end::User account menu-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::User -->
							</div>
							<!--end::Toolbar wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Container-->
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content">
                            @yield('content')
						</div>
						<!--end::Post-->
					</div>
					<!--end::Container-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-bold me-1">2022©</span>
								<a class="text-gray-800 text-hover-primary">Coruja Véia</a>
							</div>
							<!--end::Copyright-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Drawers-->

		<!--end::Drawers-->
		<!--end::Main-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--begin::Modals-->
        <div class="modal fade" id="kt_modal_create_project" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-fullscreen p-9">
				<!--begin::Modal content-->
				<div class="modal-content modal-rounded">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>Cadastrar Evento</h2>
						<!--end::Modal title-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y m-5">
						<!--begin::Stepper-->
						<div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_project_stepper">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Form-->
								<form action="{{ route('event.store') }}" class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_create_project_form" method="post" enctype="multipart/form-data">
									@csrf
                                    <!--begin::Settings-->
									<div class="current" data-kt-stepper-element="content">
										<!--begin::Wrapper-->
										<div class="w-100">
											<!--begin::Heading-->
											<div class="pb-12">
												<!--begin::Title-->
												<h1 class="fw-bolder text-dark">Configurações do Evento</h1>
												<!--end::Title-->
											</div>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<!--begin::Dropzone-->
												<div class="fv-row mb-8" onclick="document.getElementById('imageFile').click()">
                                                    <!--begin::Dropzone-->
                                                    <div class="dropzone" id="kt_dropzonejs_example_1">
                                                        <!--begin::Message-->
                                                        <div class="dz-message needsclick">
                                                            <!--begin::Icon-->
                                                            <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                            <!--end::Icon-->
                                            
                                                            <!--begin::Info-->
                                                            <div class="ms-4">
                                                                <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Arraste a imagem ou clique para fazer upload.</h3>
                                                                <input id="imageFile" type="file" class="d-none" name="imageFile">
                                                                <span class="fs-7 fw-bold text-gray-400">Imagem do evento</span>
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                    </div>
                                                    <!--end::Dropzone-->
                                                </div>
												<!--end::Dropzone-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
													<span class="required">Nome do evento</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify project name"></i>
												</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" name="name" class="form-control form-control-solid" placeholder="Insira o nome do evento" value="{{ old('name') }}" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<!--begin::Label-->
												<label class="fs-6 fw-bold mb-2">Descrição do evento</label>
												<!--end::Label-->
												<!--begin::Input-->
												<textarea name="description" class="form-control form-control-solid" rows="1" placeholder="Insira a descrição do evento">{{ old('description') }}</textarea>
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex flex-stack">
												<button type="submit" class="btn btn-lg btn-light col-12">Cadastrar</button>
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Settings-->
								</form>
								<!--end::Form-->
							</div>
							<!--begin::Container-->
						</div>
						<!--end::Stepper-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Create Project-->
		<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ URL::asset('plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ URL::asset('js/scripts.bundle.js') }}"></script>
		<script src="{{ URL::asset('js/custom/utilities/modals/create-project/main.js') }}"></script>
        <script src="{{ URL::asset('js/custom/utilities/modals/create-project/settings.js') }}"></script>
        <script src="{{ URL::asset('js/custom/utilities/modals/create-project/files.js') }}"></script>
		<!--end::Global Javascript Bundle-->
        @yield('js')
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>