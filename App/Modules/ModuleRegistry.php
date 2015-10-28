<?php

namespace App\Modules;

class ModuleRegistry {
  /**
   * @var Singleton The reference to *Singleton* instance of this class
   */
  private static $instance;

  private $modules = array();
  private $renderables = array();
  
  /**
   * Returns the *Singleton* instance of this class.
   *
   * @return Singleton The *Singleton* instance.
   */
  public static function getInstance()
  {
      if (null === static::$instance) {
          static::$instance = new static();
      }
      
      return static::$instance;
  }

  public static function getModules() {
    return self::$instance->modules;
  }
  public function getRenderables() {
    return self::$instance->renderables;
  }
  public function setRenderables($renderables) {
    self::$instance->renderables = $renderables;
  }

  public static function registerModules($module_config) {
    foreach ($module_config as $module_maintainer => $module_name) {
      self::$instance->register($module_maintainer . '\\' . $module_name);
    }

    self::$instance->collectRenderableObjects();
  }

  private static function collectRenderableObjects() {
    $modules = self::$instance->getModules();

    foreach ($modules as $module) {
      $module_class_path = '\App\Modules\\'.$module;
      $m = new $module_class_path();

      foreach ($m->renderableViewTemplates() as $vtn => $vtv) {
        $renderables = self::$instance->getRenderables();
        $renderables[explode('\\', $module, 2)[1]][$vtn] = $vtv;

        self::$instance->setRenderables($renderables);
      }
    }  
  }

  private function register($module) {
    self::$instance->modules[] = $module;
  }

  /**
   * Protected constructor to prevent creating a new instance of the
   * *Singleton* via the `new` operator from outside of this class.
   */
  protected function __construct()
  {
  }

  /**
   * Private clone method to prevent cloning of the instance of the
   * *Singleton* instance.
   *
   * @return void
   */
  private function __clone()
  {
  }

  /**
   * Private unserialize method to prevent unserializing of the *Singleton*
   * instance.
   *
   * @return void
   */
  private function __wakeup()
  {
  }
}