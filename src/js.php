<?php

namespace dgtyPedro\jsInPHP;

class js{

    /**
     * Method that creates an alert box
     * @param string $text
     */
    public function alert($text){
        echo "<script>alert('".$text."')</script>";
    }

    /**
     * Method that creates a confirmation box and stores result
     * @param string $question
     * @return bool
     */
    public function confirm($question){
        echo "<script>var answer =  window.confirm('".$question."')</script>";
        return "<script>document.write(answer)</script>";
    }

    /** 
     * Method that creates a prompt box and stores response
     * @param string $question
     * @return string
     */
    public function prompt($question){
        echo "<script>var answer =  window.prompt('".$question."')</script>";
        return "<script>document.write(answer)</script>";
    }

    /** 
     * Method that opens a Print Window of the current page
     */
    public function print(){
        echo "<script> window.print()</script>";
    }

    /** 
     * Method that opens new page on current tab, works similarly header("Location:")
     * @param string $url
     */
    public function openUrl($url){
        echo "<script>window.open('".$url."','_self');</script>";
    }

    /** 
     * Method that opens new page on new tab
     * @param string $url
     */
    public function openNewTab($url){
        echo "<script>window.open(".$url.", '_blank').focus();</script>";
    }

    /** 
     * Method that calls Jquery's Source
     */
    public function callJquery(){
        echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>";
    }

    /** 
     * Method that makes an ajaxHTTP request
     * @param string $type
     * @param string $url
     * @param string $data
     * @param mixed $done
     * @param mixed $fail
     * @return mixed
     */
    public function ajaxHTTP($type, $url, $data, $done = null, $fail = null){
        echo "<script>
        $.ajax({
          type: '".$type."',
          url: '".$url."',
          data: ".$data."         
        })
        .done(function(response){
            ".$done."
       })
       .fail(function(jqXHR, textStatus, response){
            ".$fail."
       });
        </script>";
    }
}


















    



