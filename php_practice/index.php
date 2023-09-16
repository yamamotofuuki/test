<?php
 
 $food = array(
     "vegetable" =>array("carrot"=>"にんじん",
                        "tomato"=>"トマト",
                        "onion"=>"たまねぎ"
                        ),
     "fruit" => array("apple"=>"りんご",
                     "orange"=>"オレンジ",
                     "grape"=>"ぶどう"
                     )
 );

foreach ( $food as $groupkey => $namekey ){
    echo "■".$groupkey. "<br>";
    foreach ( $namekey as $eigoname => $nihonname ){
        echo $eigoname.":" .$nihonname."<br>";
    }
    echo "<br>";
}
