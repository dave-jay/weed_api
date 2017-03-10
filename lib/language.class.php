<?php

/**
 *  Class file to provide core
 *  functions for API Calls
 * 
 *  i.e. 
 *  Curl requests
 *  Handling SOAP Calls
 *  Handling XML Responses
 *  Handling JSON Responses
 *  
 * @author hardikpanchal469@gmail.com
 * @since October 28, 2013
 * @version 1.0
 * 
 * 
 */
class language {

    public static function getLanguageText($language = 'en') {
        if ($language == 'fa') {
            $lang_data = q("select `id`,lang_persian as lang_text from language");
        } else {
            $lang_data = q("select `id`,lang_english as lang_text from language");
        }
        $lang_text = self::setLanguageKeyPair($lang_data);
        return $lang_text;
    }

    public static function setLanguageKeyPair($lang_data) {
        foreach ($lang_data as $each_text) {
            $lang_text[$each_text['id']] = $each_text['lang_text'];
        }
        return $lang_text;
    }

}

?>
