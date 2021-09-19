<?php

namespace TechStore\Classes\Validation;

class Validator
{
    private $errors =[];
public function validate(string $name, $value, array $rules)
{
    // l2n esm el object hoa nafs esm rule ely 3andy yb2a atb2 tany 4art mn 4rot el solid princple
    // open closed orinciple -> ya2ne el code ysma7 eny 2zod feh w el zyada dy mat5ale4 el code 
    // yt2aser aw a7tag a3del feh aw a7zef mno
    foreach($rules as $rule)
    {
        $className ="TechStore\\Classes\\Validation\\" . $rule;
        $obj = new $className;
        // if($rule == 'required')
        // {
        //     $obj = new Required;
        // } elseif($rule == 'numeric')
        // {
        //     $obj = new Numeric;
        // } elseif($rule == 'max')
        // {
        //     $obj = new Max;
        // } elseif($rule == 'email')
        // {
        //     $obj = new Email;
        // }

        $error =$obj->check($name,$value);
        if($error !== false)
        {
            $this->errors[]=$error;
            break;
        }
    }
}
    public function getErrors() : array
    {
        return $this->errors;
    }
    public function hasErrors() : bool
    {
// ya3ny trag3 3aks el btrag3o empty law feh error btrag3 true w law mafe4 error btrag3 false
        return ! empty($this->errors);
    }
}
?>