<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/mytheme/templates/page.html.twig */
class __TwigTemplate_868a77bcf5e10d060f5e49a70407f80bececcb9eaf300008773532c165b8d524 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
    <meta charset=\"utf-8\">
    <title></title>
</head>

<body>
";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("mytheme/navbar"), "html", null, true);
        echo "

    <header class=\"header\"> 
        ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo " 
        <nav class=\"menu\">
          <button class=\"hamburger\" id=\"hamburger\" onclick=\"myFunction()\">Try it</button>
            ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "  
        </nav> 
        <div class=\"heading\"> 
            <h1>";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 18, $this->source), "html", null, true);
        echo "</h1> 
        </div> 
    </header> 

    <main class=\"main\"> 
        <div class=\"content\">
            ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
        </div> 
        ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 26)) {
            // line 27
            echo "        <div class=\"sidebar\"> 
            ";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "
        </div> 
        ";
        }
        // line 30
        echo " 
    </main>

    <footer aria-label=\"Site footer\" class=\"footer\" id=\"footer\" role=\"contentinfo\">
   <div class=\"footer--top\">
     ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "
     ";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "
     ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "
   </div>
   <div class=\"footer--bottom\">
       ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "
   </div>
</footer>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 40,  107 => 37,  103 => 36,  99 => 35,  92 => 30,  86 => 28,  83 => 27,  81 => 26,  76 => 24,  67 => 18,  61 => 15,  55 => 12,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/mytheme/templates/page.html.twig", "/var/www/html/drupal9/themes/custom/mytheme/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 26);
        static $filters = array("escape" => 9);
        static $functions = array("attach_library" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
