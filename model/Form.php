<?php
/**
 * Created by PhpStorm.
 * User: Zede
 * Date: 22/07/2019
 * Time: 10:53
 */

class Form
{
    private $html ="";

    public function __construct($action, $method){

        $this->html.="<form action='$action' method='$method'>";
    }

    public function input($type,$name,$placeholder=null,$value=null,$active=''){
        $allowedTypes=['text','email','password'];
        if (in_array($type, $allowedTypes)){
            $this->html.="<input type='$type' name='$name' placeholder='$placeholder' value='$value' $active><br/>";
        }
        else{
            echo "Le type $type n'est pas autorisé<br/>";
        }
    }

    public function label($for=null,$value){
        $this->html.="<label for='$for'>$value</label><br/>";
    }

    public function select($name,$table,$selected = null){
        $this->html.="<select name='$name'>";
        foreach ($table as $element){
            if ($element == $selected){
                $this->html.="<option value='$element' selected>$element</option><br/>";
            }
            else{
                $this->html.="<option value='$element'>$element</option><br/>";
            }
        }
        $this->html.='</select><br/>';
    }

    public function radio($name,$table,$selected=null){
        foreach ($table as $index => $element){
            if ($index == $selected){
                $this->html.="<label><input type='radio' name='$name' checked>$element</label><br/>";
            }
            else{
                $this->html.="<label><input type='radio' name='$name'>$element</label><br/>";
            }
        }
    }

    public function checkbox($name,$value,$label,$checked=false){
        if ($checked){
            $this->html.="<label><input type='checkbox' name='$name' value='$value' checked>$label</label><br/>";
        }
        else{
            $this->html.="<label><input type='checkbox' name='$name' value='$value'>$label</label><br/>";
        }

    }

    public function submit($name, $value){
        $this->html.="<input type='submit' value='$value' name='$name'>";
    }

    public function button($action, $value){
        $this->html.="<button onclick='$action'>$value</button>";
    }

    public function render(){
        return $this->html."</form>";
    }
}