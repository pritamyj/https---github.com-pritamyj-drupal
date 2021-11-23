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

/* modules/contrib/semanticviews/templates/semanticviews-row.html.twig */
class __TwigTemplate_cea76ce20c803059c776d3f874340129c1f107ef44d65a9901eed774d37ab297 extends \Twig\Template
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
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 28
            echo "
  ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, $context["field"], "element_type", [], "any", false, false, true, 29)) {
                // line 30
                echo "    <";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "element_type", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "attributes", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo ">
  ";
            }
            // line 32
            echo "
    ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, true, 33)) {
                // line 34
                echo "
      ";
                // line 35
                if (twig_get_attribute($this->env, $this->source, $context["field"], "label_element_type", [], "any", false, false, true, 35)) {
                    // line 36
                    echo "        <";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label_element_type", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label_attributes", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                    echo ">
      ";
                }
                // line 38
                echo "
          ";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label_colon", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "

      ";
                // line 41
                if (twig_get_attribute($this->env, $this->source, $context["field"], "label_element_type", [], "any", false, false, true, 41)) {
                    // line 42
                    echo "        </";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label_element_type", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                    echo ">
      ";
                }
                // line 44
                echo "
    ";
            }
            // line 46
            echo "
      ";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "

  ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, $context["field"], "element_type", [], "any", false, false, true, 49)) {
                // line 50
                echo "    </";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "element_type", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                echo ">
  ";
            }
            // line 52
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modules/contrib/semanticviews/templates/semanticviews-row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 52,  105 => 50,  103 => 49,  98 => 47,  95 => 46,  91 => 44,  85 => 42,  83 => 41,  77 => 39,  74 => 38,  66 => 36,  64 => 35,  61 => 34,  59 => 33,  56 => 32,  48 => 30,  46 => 29,  43 => 28,  39 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/semanticviews/templates/semanticviews-row.html.twig", "/var/www/html/drupal9/modules/contrib/semanticviews/templates/semanticviews-row.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 27, "if" => 29);
        static $filters = array("escape" => 30);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
