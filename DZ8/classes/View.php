<?php


class View
{
    protected $data = [];

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
        return $this;//вернет текущий объект. Также появляется возможность использовать текучий интерфейс.
    }

    public function display($template)
    {
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }
        include $template;
    }

    public function render($template)
    {
        ob_start();
        include $template;
        $contents = ob_get_contents();
        ob_end_clean();
        return $contents;
    }
}