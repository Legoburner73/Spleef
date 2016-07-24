<?php
namespace legoburner73\Spleef;

abstract class MiniGameBase {		
	protected $plugin;
	public function __construct(SpleefPlugin $plugin) {
		if($plugin === null){
			throw new \InvalidStateException("plugin may not be null");
		}
		$this->plugin = $plugin;
	}
	
	protected function getController() {
		return $this->getPlugin ()->controller;
	}
	protected function getPlugin() {
		return $this->plugin;
	}
	protected function getMsg($key) {
		return $this->plugin->messages->getMessageByKey ( $key );
	}
	protected function getSetup() {
		return $this->plugin->setup;
	}
	protected function getBuilder() {
		return $this->plugin->builder;
	}
	
	protected function getGameKit() {
		return $this->getPlugin()->gamekit;
	}
	
	protected function getLog() {
		return $this->plugin->getLogger();
	}
	
	protected function log($msg) {
		$this->plugin->getLogger()->info($msg);
	}
}
