<?php

/*
 * Class file for asana api integration
 * http://developers.asana.com — here is all the info you need to review.
 *
 * api key: lbToJaK.0h1vux8YRG3p9DaKZcsmqLHB : Brilliant
 * 
 * Keys for Raj: ( Test Account )
 * public $key = "2Ba7cu7K.GHUSdSlRGgZFjOtAsXIS76a";
 * public $workspace = "9170437901315";
 * 
 */

class apiSlack {

    public function __construct() {
        
    }

    public static function doCurl($slack_channel_url, $data) {
        $ch = curl_init($slack_channel_url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $result = curl_exec($ch);
        $errors = curl_error($ch);
        curl_close($ch);
    }

    public static function pingSlackCS($message) {
        if (_isLocalMachine()) {
            # Local Link
            $slack_channel_url = "https://hooks.slack.com/services/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";
        } else {
            # Live Link
            $slack_channel_url = "https://hooks.slack.com/services/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";
        }

        $data = "payload=" . json_encode(array(
                    "text" => $message
        ));
        apiSlack::doCurl($slack_channel_url, $data);
    }
    public static function pingSlack($message) {
        if (_isLocalMachine()) {
            # Local Link
            $slack_channel_url = "https://hooks.slack.com/services/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";
        } else {
            # Live Link
            $slack_channel_url = "https://hooks.slack.com/services/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";
        }

        $data = "payload=" . json_encode(array(
                    "text" => $message
        ));
        apiSlack::doCurl($slack_channel_url, $data);
    }
    public static function pingStationSlack($message) {
        if (_isLocalMachine()) {
            # Local Link
            $slack_channel_url = "https://hooks.slack.com/services/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";
        } else {
            # Live Link
            $slack_channel_url = "https://hooks.slack.com/services/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";
        }

        $data = "payload=" . json_encode(array(
                    "text" => $message
        ));
        apiSlack::doCurl($slack_channel_url, $data);
    }

}

?>
