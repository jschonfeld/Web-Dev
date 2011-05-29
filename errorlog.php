<?php

echo testLog();
 
function testLog(){
                $var = 5;
                try{
 
                                if(!is_string($var)){
                                                throw new Exception(.Error message., 101);      //first parameter is error message the second parameter is the error code
                                }
} catch (Exception $e) {
                                print_r($e);                        //this wiil display all exception information on the browser screen in php array form
                }
}
?>
