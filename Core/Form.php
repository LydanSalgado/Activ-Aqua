<?php

namespace Site_Activ_Aqua\Core;

class Form
{

    private $formElements;

    public function getFormElements()
    {
        return $this->formElements;
    }

    private function addAttributes(array $attributes): string
    {

        $att = "";

        foreach ($attributes as $attribute => $value) {

            $att .= " $attribute=\"$value\"";
        }
        return $att;
    }

    public function startForm(string $action = '#', string $method = "POST", array $attributes = []): self
    {
        $this->formElements = "<form action='$action' method='$method'";
        $this->formElements .= isset($attributes) ? $this->addAttributes($attributes) . ">" : ">";
        return $this;
    }

    
    public function addLabel(string $for, string $text, array $attributes = []): self
    {
        $this->formElements .= "<label for='$for'";
        $this->formElements .= isset($attributes) ? $this->addAttributes($attributes) . ">" : ">";
        $this->formElements .= "$text</label>";
        return $this;
    }

    public function addLink(string $link, string $text, array $attributes = []): self
    {
        $this->formElements .= "<a href='$link'";
        $this->formElements .= isset($attributes) ? $this->addAttributes($attributes) . ">" : ">";
        $this->formElements .= "$text</a>";
        return $this;
    }

    public function addInput(string $type, string $name, array $attributes = []): self
    {
        $this->formElements .= "<input type='$type' name='$name'";
        $this->formElements .= isset($attributes) ? $this->addAttributes($attributes) . ">" : ">";
        return $this;
    }

  
    public function addTextarea(string $name, string $text = '', array $attributes = []): self
    {
        $this->formElements .= "<textarea name='$name'";
        $this->formElements .= isset($attributes) ? $this->addAttributes($attributes) . ">" : ">";
        $this->formElements .= "$text</textarea>";
        return $this;
    }

    public function startDiv(array $attributes = []): self
    {
        $this->formElements .= "<div";
        $this->formElements .= isset($attributes) ? $this->addAttributes($attributes) . ">" : ">";
        
        return $this;
    }

    public function endDiv(): self
    {
        $this->formElements .= "</div>";
        return $this;
    }

    public function addSelect(string $name, array $options, array $attributes = []) : self
    {
        $this->formElements .= "<select name='$name'";
        $this->formElements .= isset($attributes) ? $this->addAttributes($attributes) . ">" : ">";

        foreach ($options as $key => $value) {
            $this->formElements .= "<option value='$key'>$value</option>";
        }
        $this->formElements .= "</select>";
        return $this;
    }


    public function endForm(): self
    {
        $this->formElements .= "</form>";
        return $this;
    }

    public static function validatePost(array $post, array $fields): bool
    {
        foreach ($fields as $field) {
            if (empty($post[$field]) || !isset($post[$field])) {
                return false;
            }
        }
        return true;

        
    }

    
}
