<?php  

defined('C5_EXECUTE') or die(_("Access Denied."));

class StackModalPackage extends Package {

	protected $pkgHandle = 'stack_modal';
	protected $appVersionRequired = '5.5';
	protected $pkgVersion = '1.12';
	
	public function getPackageDescription() {
		return t("Easily load a stack into a modal window.");
	}
	
	public function getPackageName() {
		return t("Stack Modal");
	}
	
	public function install() {
		$pkg = parent::install();
		
		// install block		
		BlockType::installBlockTypeFromPackage('stack_modal', $pkg);
		
	}
}