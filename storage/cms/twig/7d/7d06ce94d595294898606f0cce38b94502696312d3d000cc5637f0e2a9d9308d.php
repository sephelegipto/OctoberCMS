<?php

/* C:\xampp\htdocs\acme/themes/sephel/layouts/default.htm */
class __TwigTemplate_197df1a182148edb2268e3172a9e6093071aca9a43f89b69b535702a25d5bb8c extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>

<head>
  <title>Acme - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
  <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"https://bootswatch.com/3/sandstone/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\">
  ";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 10
        echo "</head>

<body>
  <header>
    ";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "  </header>

  <div class=\"container\">
    ";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 19
        echo "  </div>

  <footer>
    ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "  </footer>

  <script src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
  <script src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
  <script src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
  </script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/sephel/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  79 => 26,  75 => 25,  71 => 23,  67 => 22,  62 => 19,  60 => 18,  55 => 15,  51 => 14,  45 => 10,  42 => 9,  38 => 8,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
  <title>Acme - {{this.page.title}}</title>
  <meta name=\"description\" content=\"{{this.page.meta_description}}\">
  <link rel=\"stylesheet\" href=\"https://bootswatch.com/3/sandstone/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/theme.css'|theme }}\">
  {% styles %}
</head>

<body>
  <header>
    {% partial 'site/header' %}
  </header>

  <div class=\"container\">
    {% page %}
  </div>

  <footer>
    {% partial 'site/footer' %}
  </footer>

  <script src=\"{{'assets/vendor/jquery.js'|theme}}\"></script>
  <script src=\"{{'assets/vendor/bootstrap.js'|theme}}\"></script>
  <script src=\"{{'assets/javascript/app.js'|theme}}\"></script>
  </script>
</body>

</html>", "C:\\xampp\\htdocs\\acme/themes/sephel/layouts/default.htm", "");
    }
}
