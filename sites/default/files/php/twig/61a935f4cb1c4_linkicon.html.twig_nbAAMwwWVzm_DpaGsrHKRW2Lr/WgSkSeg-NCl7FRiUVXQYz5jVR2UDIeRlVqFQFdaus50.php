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

/* modules/contrib/linkicon/templates/linkicon.html.twig */
class __TwigTemplate_4e8b6dc0ebe50f696f6110d4a6bdd98788cf253ce5dbe0c49f014edbc1d7f508 extends \Twig\Template
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
        // line 18
        $context["wrapper_classes"] = [0 => "item-list", 1 => "item-list--linkicon", 2 => ((twig_get_attribute($this->env, $this->source,         // line 21
($context["settings"] ?? null), "wrapper_class", [], "any", false, false, true, 21)) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "wrapper_class", [], "any", false, false, true, 21), 21, $this->source))) : (""))];
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "load", [], "any", false, false, true, 24)) {
            // line 25
            echo "  ";
            // line 26
            $context["classes"] = [0 => (( !twig_get_attribute($this->env, $this->source,             // line 27
($context["settings"] ?? null), "vertical", [], "any", false, false, true, 27)) ? ("linkicon--inline") : ("")), 1 => ((twig_get_attribute($this->env, $this->source,             // line 28
($context["settings"] ?? null), "color", [], "any", false, false, true, 28)) ? ("linkicon--color") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,             // line 29
($context["settings"] ?? null), "no_text", [], "any", false, false, true, 29)) ? ("linkicon--no-text") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,             // line 30
($context["settings"] ?? null), "color", [], "any", false, false, true, 30)) ? (("linkicon--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "color", [], "any", false, false, true, 30), 30, $this->source)))) : ("")), 4 => ((twig_get_attribute($this->env, $this->source,             // line 31
($context["settings"] ?? null), "style", [], "any", false, false, true, 31)) ? (("linkicon--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "style", [], "any", false, false, true, 31), 31, $this->source)))) : ("")), 5 => (((twig_get_attribute($this->env, $this->source,             // line 32
($context["settings"] ?? null), "size", [], "any", false, false, true, 32) &&  !twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "_preview", [], "any", false, false, true, 32))) ? (("linkicon--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "size", [], "any", false, false, true, 32), 32, $this->source)))) : ("")), 6 => ((twig_get_attribute($this->env, $this->source,             // line 33
($context["settings"] ?? null), "tooltip", [], "any", false, false, true, 33)) ? ("linkicon--tooltip") : ("")), 7 => ((twig_get_attribute($this->env, $this->source,             // line 34
($context["settings"] ?? null), "position", [], "any", false, false, true, 34)) ? (("linkicon--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "position", [], "any", false, false, true, 34), 34, $this->source)))) : (""))];
        }
        // line 38
        echo "
";
        // line 39
        ob_start(function () { return ''; });
        // line 40
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["wrapper_attributes"] ?? null), "addClass", [0 => ($context["wrapper_classes"] ?? null)], "method", false, false, true, 40), 40, $this->source), "html", null, true);
        echo ">
  <ul";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "linkicon", 1 => ($context["classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
        echo ">";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "<li>
        ";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 44, $this->source), "html", null, true);
            echo "
      </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</ul>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/contrib/linkicon/templates/linkicon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 47,  77 => 44,  74 => 43,  70 => 42,  67 => 41,  62 => 40,  60 => 39,  57 => 38,  54 => 34,  53 => 33,  52 => 32,  51 => 31,  50 => 30,  49 => 29,  48 => 28,  47 => 27,  46 => 26,  44 => 25,  42 => 24,  40 => 21,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/linkicon/templates/linkicon.html.twig", "/var/www/html/drupal9/modules/contrib/linkicon/templates/linkicon.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 18, "if" => 24, "spaceless" => 39, "for" => 42);
        static $filters = array("clean_class" => 21, "escape" => 40);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'spaceless', 'for'],
                ['clean_class', 'escape'],
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
