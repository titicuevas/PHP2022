<?php


try {
    strpos();
} catch (ArgumentCountError | TypeError $e) {
    echo $e->getMessage();
} catch(ParseError $e){

}finally{
    echo "Llega al final.\n";
}

?>