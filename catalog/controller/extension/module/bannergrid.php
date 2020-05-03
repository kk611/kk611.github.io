<?php
class ControllerExtensionModuleBannergrid extends Controller {
	public function index($setting) {
		static $module = 0;

		$this->load->model('design/banner');
		$this->load->model('tool/image');
		
		
		$data['banners'] = array();
		
		$data['grid'] = (int)$setting['grid'];

		$results = $this->model_design_banner->getBanner($setting['banner_id']);
		
		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['entry_name']=$result['name'];
				$data['banners'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height'])
				);
			}
		}

		$data['module'] = $module++;

		return $this->load->view('extension/module/bannergrid', $data);
	}
}