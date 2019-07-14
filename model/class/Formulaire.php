<?php
/**
 * Created by PhpStorm.
 * User: x_sal
 * Date: 06/06/2019
 * Time: 13:41
 */

class Formulaire
{
    private $html ="";

    public function __construct($action, $method){

        $this->html.="<form action='$action' method='$method'>";
    }

    public function input($type,$nom,$placeholder=null,$value=null,$active=''){
        $typeAutorise=['text','email'];
        if (in_array($type, $typeAutorise)){
            $this->html.="<input type='$type' name='$nom' placeholder='$placeholder' value='$value' $active><br/>";
        }
        else{
            echo "le type $type n'est pas autorisé<br/>";
        }
    }

    public function label($for=null,$value){
        $this->html.="<label for='$for'>$value</label><br/>";
    }

    public function select($nom,$tbl,$selected = null){
        $this->html.="<select name='$nom'>";
        foreach ($tbl as $index => $element){
            if ($index == $selected){
                $this->html.="<option value='$index' selected>$element</option><br/>";
            }
            else{
                $this->html.="<option value='$index'>$element</option><br/>";
            }
        }
        $this->html.='</select><br/>';
    }

    public function radio($nom,$tbl,$selected=null){
        foreach ($tbl as $index => $element){
            if ($index == $selected){
                $this->html.="<label><input type='radio' name='$nom' checked>$element</label><br/>";
            }
            else{
                $this->html.="<label><input type='radio' name='$nom'>$element</label><br/>";
            }
        }
    }

    public function checkbox($nom,$value,$label,$coche=false){
        if ($coche){
            $this->html.="<label><input type='checkbox' name='$nom' value='$value' checked>$label</label><br/>";
        }
        else{
            $this->html.="<label><input type='checkbox' name='$nom' value='$value'>$label</label><br/>";
        }

    }

    public function submit($nom, $value){
        $this->html.="<input type='submit' value='$value' name='$nom'>";
    }

    public function render(){
        return $this->html."</form>";
    }
}