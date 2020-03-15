<?php

namespace Nplasencia;


class HtmlNode
{
    protected $tag;
    protected $content;
    protected $attributes = [];

    public function __construct($tag, $content = null, array $attributes = [])
    {
        $this->tag = $tag;
        $this->content = $content;
        $this->attributes = $attributes;
    }

    public function __call($method, array $arguments = [])
    {
        if (! isset($arguments[0])) {
            throw new \Exception("You have forgotten to pass the value to the attribute $method");
        }

        $this->attributes[$method] = $arguments[0];

        return $this;
    }

    public static function __callStatic($method, array $arguments = [])
    {
        $content = isset($arguments[0]) ? $arguments[0] : null;
        $attributes = isset($arguments[1]) ? $arguments[1] : [];

        return new HtmlNode($method, $content, $attributes);
    }

    public function render()
    {
        $result = "<{$this->tag} {$this->renderAttributes()}>";

        if ($this->content != null) {
            $result .= $this->content."</{$this->tag}>";
        }

        return $result;
    }

    protected function renderAttributes()
    {
        $result = '';

        foreach ($this->attributes as $name => $value) {
            $result .= sprintf(' %s="%s"', $name, $value);
        }

        return $result;
    }
}
