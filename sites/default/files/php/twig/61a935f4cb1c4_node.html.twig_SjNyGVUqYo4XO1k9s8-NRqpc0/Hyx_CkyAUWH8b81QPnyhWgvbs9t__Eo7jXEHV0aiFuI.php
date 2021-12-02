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

/* themes/custom/mytheme/templates/node.html.twig */
class __TwigTemplate_4442791fb812ed027bec5db9caf47dc526bd711ebb3f53bc5751b6cc5741728d extends \Twig\Template
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
        // line 73
        echo "

<article class=\"article\">

  <div> 

  ";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        echo "  
  <div class=\"article_title\">
    ";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 81), "value", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
        echo "
    </div>  
  ";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 83), 0, [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
        echo "  

  ";
        // line 85
        echo t("<div class=\"node_author_published\">
      <div class=\"author\">Author: @author_name</div>
      <div class=\"published_on\">Published on: @date</div>
    </div>", array("@author_name" =>         // line 87
($context["author_name"] ?? null), "@date" =>         // line 88
($context["date"] ?? null), ));
        // line 91
        echo "       
  ";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 92, $this->source), "field_image", "body"), "html", null, true);
        echo "
  
  </div>

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 92,  69 => 91,  67 => 88,  66 => 87,  62 => 85,  57 => 83,  52 => 81,  47 => 79,  39 => 73,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/mytheme/templates/node.html.twig", "/var/www/html/drupal9/themes/custom/mytheme/templates/node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 85);
        static $filters = array("escape" => 79, "without" => 92);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                ['escape', 'without'],
                []
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
