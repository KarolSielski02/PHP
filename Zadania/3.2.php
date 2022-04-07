<?php
function main($nation){

    $array = [
        "Germany" => "German",
        "Poland" => "Polish",
        "France" => "French",
        "Spain" => "Spanish",
        "Sweden" => "Swedish",
        "Russia" => "Russian",
        "Lithuania" => "Lithuanian",
        "Canada" => "Canadian",
        "Ethiopia" => "Ethiopian",
        "China" => "Chinese"
    ];

    echo "If you are from $nation, you are $array[$nation].";
}
echo main(France);



