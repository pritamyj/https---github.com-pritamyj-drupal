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
class __TwigTemplate_29c8eac0e127b6cda0002b8312626eaa54049732d54e851c24db83e2be55e294 extends \Twig\Template
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
    <button class=\"hamburger\" id=\"hamburger\" onclick=\"myFunction()\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span></button>
        ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo " 
        <nav class=\"menu\">
          
            ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "  
        </nav> 

        ";
        // line 22
        if (($context["logged_in"] ?? null)) {
            // line 23
            echo "        ";
            if (($context["is_front"] ?? null)) {
                // line 24
                echo "        
        <div class=\"heading\"> 
            <h1>Welcome ";
                // line 26
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_logged_in_name"] ?? null), 26, $this->source), "html", null, true);
                echo "</h1> 
        </div> 

        
        ";
            }
            // line 30
            echo " 
        ";
        } else {
            // line 31
            echo " 

        <div class=\"heading\"> 
            <h1>";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 34, $this->source), "html", null, true);
            echo "</h1> 
        </div> 

        ";
        }
        // line 37
        echo " 
    </header> 

    <main class=\"main\"> 

        ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 42)) {
            // line 43
            echo "        <div class=\"sidebar_left\"> 
            ";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "
        </div> 
        ";
        }
        // line 46
        echo " 

        <div class=\"content\">
  
            ";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "
 
        </div> 

        ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 54)) {
            // line 55
            echo "        <div class=\"sidebar_right\"> 
            ";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "
        </div> 
        ";
        }
        // line 58
        echo " 
        
    </main>

    <footer aria-label=\"Site footer\" class=\"footer\" id=\"footer\" role=\"contentinfo\">
   <div class=\"footer--top\">
     ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "
     ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "
     ";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "
   </div>
   <div class=\"footer--bottom\">
       ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
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
        return array (  168 => 69,  162 => 66,  158 => 65,  154 => 64,  146 => 58,  140 => 56,  137 => 55,  135 => 54,  128 => 50,  122 => 46,  116 => 44,  113 => 43,  111 => 42,  104 => 37,  97 => 34,  92 => 31,  88 => 30,  80 => 26,  76 => 24,  73 => 23,  71 => 22,  65 => 19,  59 => 16,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/mytheme/templates/page.html.twig", "/var/www/html/drupal9/themes/custom/mytheme/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22);
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
