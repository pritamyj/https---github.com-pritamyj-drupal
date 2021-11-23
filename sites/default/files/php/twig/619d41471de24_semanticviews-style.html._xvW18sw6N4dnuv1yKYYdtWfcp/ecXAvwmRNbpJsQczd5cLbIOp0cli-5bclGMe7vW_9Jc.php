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

/* modules/contrib/semanticviews/templates/semanticviews-style.html.twig */
class __TwigTemplate_b2aa30742881865ea976f66a0fb1fd9a66ce13bb8fdf025d2f8df10164d97f3a extends \Twig\Template
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
        // line 9
        echo "
";
        // line 10
        if (($context["title"] ?? null)) {
            // line 11
            echo "  <";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "element", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "attributes", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo ">
    ";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 12, $this->source), "html", null, true);
            echo "
  </";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "element", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo ">
";
        }
        // line 15
        echo "
";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "element", [], "any", false, false, true, 16)) {
            // line 17
            echo "  <";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "element", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "attributes", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo ">
";
        }
        // line 19
        echo "
";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["row"]) {
            // line 21
            echo "
  ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["row"], "element", [], "any", false, false, true, 22)) {
                // line 23
                echo "  <";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "element", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo ">
  ";
            }
            // line 25
            echo "
    ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "

  ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, $context["row"], "element", [], "any", false, false, true, 28)) {
                // line 29
                echo "  </";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "element", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo ">
  ";
            }
            // line 31
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "element", [], "any", false, false, true, 34)) {
            // line 35
            echo "  </";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "element", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo ">
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/semanticviews/templates/semanticviews-style.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  117 => 34,  114 => 33,  107 => 31,  101 => 29,  99 => 28,  94 => 26,  91 => 25,  83 => 23,  81 => 22,  78 => 21,  74 => 20,  71 => 19,  64 => 17,  62 => 16,  59 => 15,  54 => 13,  50 => 12,  44 => 11,  42 => 10,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/semanticviews/templates/semanticviews-style.html.twig", "/var/www/html/drupal9/modules/contrib/semanticviews/templates/semanticviews-style.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "for" => 20);
        static $filters = array("escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
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
