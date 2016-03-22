<?php
class Log {
  public $filename;
  public $date;
  public $handle;

  public function __construct($prefix = 'log-')
  {
    $this->date = date('Y-m-d');
    $this->filename = $prefix . "-" . $this->date . ".log";
    $this->handle = fopen($this->filename, 'a');
  }

  public function logMessage($level, $message)
  {
    $this->filename = $prefix . $this->date . ".log";
    fwrite($this->handle, $message);
  }

  public function info($message)
  {
    $this->logMessage('INFO', $message);
  }

  public function error()
  {
    
  }
}
