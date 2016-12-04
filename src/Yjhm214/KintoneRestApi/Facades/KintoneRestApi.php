<?php namespace Yjhm214\KintoneRestApi\Facades;

use Illuminate\Support\Facades\Facade;

class KintoneRestApi extends Facade {

  /**
   * コンポーネントの登録名を取得
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'KintoneRestApi';}

}