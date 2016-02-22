<?php
/**
 * MiniLibLBC BadPinkChicken
 */

class LBCRequest
{
  public  $url;
  public  $options;
  private $page_content;
  private $content_tab;
  private $parsed_content;

  function __construct($url, $options)  {  // Options -> Array -> "date", "title", "price", "place" ,"image"
    $this->url = $url;
    $this->options = $options;
  }

  function parseRequest()  {

    $this->page_content = file_get_contents($this->url);
    $this->content_tab = explode(PHP_EOL, $this->page_content);

    $i=0;
    if (isset($this->parsed_content))
      unset($this->parsed_content);
    while (!strstr($this->content_tab[$i], '<div class="list-lbc">'))
    	$i++;
      while(!strstr($this->content_tab[$i], '<div class="list-gallery">'))
      	 {
          if (strstr($this->content_tab[$i], "date") && !in_array("date", $this->options))
            $i = $i + 4;
          else if (strstr($this->content_tab[$i], "image") && !in_array("image", $this->options))
            $i = $i + 16;
          else if (strstr($this->content_tab[$i], "title") &&!in_array("title", $this->options))
            $i++;
          else if (strstr($this->content_tab[$i], "category") && !in_array("category", $this->options))
            $i++;
          else if (strstr($this->content_tab[$i], "placement") && !in_array("place", $this->options))
              $i++;
          else if (strstr($this->content_tab[$i], "price") && !in_array("price", $this->options))
              $i++;
          else {
            $this->parsed_content .= $this->content_tab[$i];
            $i++;
            }
        }
            return $this->parsed_content;
    }
}



 ?>
