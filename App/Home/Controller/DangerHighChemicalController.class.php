<?php
namespace Home \ Controller;
use Think \ Controller;
class DangerHighChemicalController extends Controller {
	function __construct() {
		parent :: __construct();
	}
	public function index() {
		$this->display("Admin:adminChemical");
	}
}
?>