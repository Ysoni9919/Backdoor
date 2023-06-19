<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        $this->load->model('Admin_model');
		$logged_in = $this->session->userdata('logged_in_admin');
        if($logged_in == false)
        {
            redirect(base_url().'login');
        }
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{



		$this->load->view('dashboard');
	}
	public function apps_calendar()
	{
		$this->load->view('pages/apps-calendar');
	}
	public function apps_chat()
	{
		$this->load->view('pages/apps-chat');
	}
	public function apps_contacts_grid()
	{
		$this->load->view('pages/apps-contacts-grid');
	}
	public function apps_contacts_list()
	{
		$this->load->view('pages/apps-contacts-list');
	}
	public function apps_contacts_profile()
	{
		$this->load->view('pages/apps-contacts-profile');
	}
	public function apps_email_inbox()
	{
		$this->load->view('pages/apps-email-inbox');
	}
	public function apps_email_read()
	{
		$this->load->view('pages/apps-email-read');
	}
	public function apps_invoices_detail()
	{
		$this->load->view('pages/apps-invoices-detail');
	}
	public function apps_invoices_list()
	{
		$this->load->view('pages/apps-invoices-list');
	}
	public function auth_confirm_mail()
	{
		$this->load->view('pages/auth-confirm-mail');
	}
	public function auth_email_verification()
	{
		$this->load->view('pages/auth-email-verification');
	}
	public function auth_lock_screen()
	{
		$this->load->view('pages/auth-lock-screen');
	}
	public function auth_login()
	{
		$this->load->view('pages/auth-login');
	}
	public function auth_recoverpw()
	{
		$this->load->view('pages/auth-recoverpw');
	}
	public function auth_register()
	{
		$this->load->view('pages/auth-register');
	}
	public function auth_two_step_verification()
	{
		$this->load->view('pages/auth-two-step-verification');
	}
	public function charts_apex()
	{
		$this->load->view('pages/charts-apex');
	}
	public function charts_chartjs()
	{
		$this->load->view('pages/charts-chartjs');
	}
	public function charts_echart()
	{
		$this->load->view('pages/charts-echart');
	}
	public function charts_knob()
	{
		$this->load->view('pages/charts-knob');
	}
	public function charts_sparkline()
	{
		$this->load->view('pages/charts-sparkline');
	}
	public function extended_lightbox()
	{
		$this->load->view('pages/extended-lightbox');
	}
	public function extended_notifications()
	{
		$this->load->view('pages/extended-notifications');
	}
	public function extended_rangeslider()
	{
		$this->load->view('pages/extended-rangeslider');
	}
	public function extended_rating()
	{
		$this->load->view('pages/extended-rating');
	}
	public function extended_session_timeout()
	{
		$this->load->view('pages/extended-session-timeout');
	}
	public function extended_sweet_alert()
	{
		$this->load->view('pages/extended-sweet-alert');
	}
	
	public function form_advanced()
	{
		$this->load->view('pages/form-advanced');
	}
	
	public function form_editors()
	{
		$this->load->view('pages/form-editors');
	}
	public function form_elements()
	{
		$this->load->view('pages/form-elements');
	}
	public function form_form_mask()
	{
		$this->load->view('pages/form-mask');
	}
	public function form_uploads()
	{
		$this->load->view('pages/form-uploads');
	}
	public function form_validation()
	{
		$this->load->view('pages/form-validation');
	}
	public function form_wizard()
	{
		$this->load->view('pages/form-wizard');
	}
	public function icons_boxicons()
	{
		$this->load->view('pages/icons-boxicons');
	}
	public function icons_dripicons()
	{
		$this->load->view('pages/icons-dripicons');
	}
	public function icons_fontawesome()
	{
		$this->load->view('pages/icons-fontawesome');
	}
	public function icons_materialdesign()
	{
		$this->load->view('pages/icons-materialdesign');
	}
	public function icons_index_dark()
	{
		$this->load->view('pages/icons-index-dark');
	}
	public function index_rtl()
	{
		$this->load->view('pages/index-rtl');
	}
	public function layouts_boxed()
	{
		$this->load->view('pages/layouts-boxed');
	}
	public function layouts_colored_sidebar()
	{
		$this->load->view('pages/layouts-colored-sidebar');
	}
	public function layouts_compact_sidebar()
	{
		$this->load->view('pages/layouts-compact-sidebar');
	}
	public function layouts_dark_sidebar()
	{
		$this->load->view('pages/layouts-dark-sidebar');
	}
	public function layouts_horizontal_boxed()
	{
		$this->load->view('pages/layouts-horizontal-boxed');
	}
	public function layouts_horizontal_dark_topbar()
	{
		$this->load->view('pages/layouts-horizontal-dark-topbar');
	}
	public function layouts_horizontal_dark()
	{
		$this->load->view('pages/layouts-horizontal-dark');
	}
	public function layouts_horizontal_rtl()
	{
		$this->load->view('pages/layouts-horizontal-rtl');
	}
	public function layouts_horizontal_scrollable()
	{
		$this->load->view('pages/layouts-horizontal-scrollable');
	}
	public function layouts_horizontal()
	{
		$this->load->view('pages/layouts-horizontal');
	}
	public function layouts_icon_sidebar()
	{
		$this->load->view('pages/layouts-icon-sidebar');
	}
	public function layouts_scrollable()
	{
		$this->load->view('pages/layouts-scrollable');
	}
	public function logout()
	{
		$this->load->view('pages/logout');
	}
	public function maps_google()
	{
		$this->load->view('pages/maps-google');
	}
	public function maps_leaflet()
	{
		$this->load->view('pages/maps-leaflet');
	}
	public function maps_vector()
	{
		$this->load->view('pages/maps-vector');
	}
	public function pages_404()
	{
		$this->load->view('pages/pages-404');
	}
	public function pages_500()
	{
		$this->load->view('pages/pages-500');
	}
	public function pages_comingsoon()
	{
		$this->load->view('pages/pages-comingsoon');
	}
	public function pages_faqs()
	{
		$this->load->view('pages/pages-faqs');
	}
	public function pages_login()
	{
		$this->load->view('pages/pages-login');
	}
	public function pages_maintenance()
	{
		$this->load->view('pages/pages-maintenance');
	}
	public function pages_pricing()
	{
		$this->load->view('pages/pages-pricing');
	}
	public function pages_recoverypw()
	{
		$this->load->view('pages/pages-recoverypw');
	}
	public function pages_register()
	{
		$this->load->view('pages/pages-register');
	}
	public function pages_starter()
	{
		$this->load->view('pages/pages-starter');
	}
	public function pages_timeline()
	{
		$this->load->view('pages/pages-timeline');
	}
	public function tables_basic()
	{
		$this->load->view('pages/tables-basic');
	}
	public function tables_datatable()
	{
		$this->load->view('pages/tables-datatable');
	}
	public function tables_editable()
	{
		$this->load->view('pages/tables-editable');
	}
	public function tables_responsive()
	{
		$this->load->view('pages/tables-responsive');
	}
	public function ui_alerts()
	{
		$this->load->view('pages/ui-alerts');
	}
	public function ui_buttons()
	{
		$this->load->view('pages/ui-buttons');
	}
	public function ui_cards()
	{
		$this->load->view('pages/ui-cards');
	}
	public function ui_carousel()
	{
		$this->load->view('pages/ui-carousel');
	}
	public function ui_colors()
	{
		$this->load->view('pages/ui-colors');
	}
	public function ui_dropdowns()
	{
		$this->load->view('pages/ui-dropdowns');
	}
	public function ui_general()
	{
		$this->load->view('pages/ui-general');
	}
	public function ui_grid()
	{
		$this->load->view('pages/ui-grid');
	}
	public function ui_images()
	{
		$this->load->view('pages/ui-images');
	}
	public function ui_modals()
	{
		$this->load->view('pages/ui-modals');
	}
	public function ui_offcanvas()
	{
		$this->load->view('pages/ui-offcanvas');
	}
	public function ui_progressbars()
	{
		$this->load->view('pages/ui-progressbars');
	}
	public function ui_tabs_accordions()
	{
		$this->load->view('pages/ui-tabs-accordions');
	}
	public function ui_typography()
	{
		$this->load->view('pages/ui-typography');
	}
	public function ui_video()
	{
		$this->load->view('pages/ui-video');
	}
	


	
	
}
