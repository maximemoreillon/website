<?php


function tag($tag_content){
    
    // Echo open bracket
    echo "&lt;";
    
    if($tag_content[0] === "/"){
        echo $tag_content[0];
        $tag_content = ltrim($tag_content, '/'); 
    }
    
    $pieces = explode(" ", $tag_content);
    
    // Echo tag type
    echo "<span class='tag_type'>".$pieces[0]."</span>";
    array_shift($pieces);
    
    
    foreach ($pieces as &$piece) {
        if(strpos( $piece, "=" ) !== false){
            $subpiece = explode("=",$piece);
            echo " ";
            echo "<span class='tag_property'>";
            echo $subpiece[0];
            echo "</span>";
            echo "=";
            echo "<span class='tag_property_value'>";
            echo $subpiece[1];
            echo "</span>";
        }
        else {
            echo " ";
            echo "<span class='tag_property'>";
            echo $piece;
            echo "</span>";
        }
        
        
    }
    
    
    echo "&gt;";
}


function open_tag($tag_content){
    
    $pieces = explode(" ", $tag_content);
    
    // Echo open bracket
    echo "&lt;";
    
    // Echo tag type
    echo "<span class='tag_type'>".$pieces[0]."</span>";
    echo " ";
    array_shift($pieces);
    
    
    foreach ($pieces as &$piece) {
        
        
        if(strpos( $piece, "=" ) !== false){
            $subpiece = explode("=",$piece);
        
            echo "<span class='tag_property'>";
            echo $subpiece[0];
            echo "</span>";
            echo "=";
            echo "<span class='tag_property_value'>";
            echo $subpiece[1];
            echo "</span>";
        }
        else {
            echo "<span class='tag_property'>";
            echo $piece;
            echo "</span>";
        }
        
        
    }
    
    
    echo "&gt;";
}

function close_tag($tag_type){
  echo "&lt;/<span class='tag_type'>".$tag_type."</span>&gt;";
}

?>