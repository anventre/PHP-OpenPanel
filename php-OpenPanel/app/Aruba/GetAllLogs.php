<?php

/** 
 * Copyright (c) 2012 <copyright Aruba spa>
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software 
 * and associated documentation files (the "Software"), to deal in the Software without restriction, 
 * including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, 
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, 
 * subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES 
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. 
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, 
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS 
 * IN THE SOFTWARE.
 * 
 */

class GetAllLogs
{

  /**
   * 
   * @var string $jsonp
   * @access public
   */
  public $jsonp;

  /**
   * 
   * @var string $userName
   * @access public
   */
  public $userName;

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var string $dateFrom
   * @access public
   */
  public $dateFrom;

  /**
   * 
   * @var string $dateTo
   * @access public
   */
  public $dateTo;

  /**
   * 
   * @param string $jsonp
   * @param string $userName
   * @param string $token
   * @param string $dateFrom
   * @param string $dateTo
   * @access public
   */
  public function __construct($jsonp, $userName, $token, $dateFrom, $dateTo)
  {
    $this->jsonp = $jsonp;
    $this->userName = $userName;
    $this->token = $token;
    $this->dateFrom = $dateFrom;
    $this->dateTo = $dateTo;
  }

}
