<?php

/* C:\xampp\htdocs\acme/themes/sephel/pages/about.htm */
class __TwigTemplate_7fe0292ca90fa484289b5a09aa8bc358685dd765bbf1b7aa0604f978bac21e6e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>About Us</h1>
<p>This is the about page</p>
<hr>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/sephel/pages/about.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>About Us</h1>
<p>This is the about page</p>
<hr>", "C:\\xampp\\htdocs\\acme/themes/sephel/pages/about.htm", "");
    }
}
