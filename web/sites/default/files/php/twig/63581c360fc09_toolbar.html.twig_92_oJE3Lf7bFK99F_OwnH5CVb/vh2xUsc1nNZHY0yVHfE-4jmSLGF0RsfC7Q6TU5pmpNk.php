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

/* core/modules/toolbar/templates/toolbar.html.twig */
class __TwigTemplate_d81829ec0991de70f42930e708a6b7c8 extends \Twig\Template
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
        // line 25
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "toolbar"], "method", false, false, true, 25), 25, $this->source), "html", null, true);
        echo ">
  <nav";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["toolbar_attributes"] ?? null), "addClass", [0 => "toolbar-bar", 1 => "clearfix"], "method", false, false, true, 26), 26, $this->source), "html", null, true);
        echo ">
    <h2 class=\"visually-hidden\">";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["toolbar_heading"] ?? null), 27, $this->source), "html", null, true);
        echo "</h2>
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 29
            echo "      ";
            $context["tray"] = (($__internal_compile_0 = ($context["trays"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null);
            // line 30
            echo "      <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, true, 30), "addClass", [0 => "toolbar-tab"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
            echo ">
        ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "
        ";
            // line 32
            ob_start();
            // line 33
            echo "          <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "attributes", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo ">
            ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 34)) {
                // line 35
                echo "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "\">
                <h3 class=\"toolbar-tray-name visually-hidden\">";
                // line 36
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "</h3>
            ";
            } else {
                // line 38
                echo "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
            ";
            }
            // line 40
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "links", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "
            </nav>
          </div>
        ";
            $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_2_));
            // line 44
            echo "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "  </nav>
  ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["remainder"] ?? null), 47, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/toolbar/templates/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 47,  108 => 46,  101 => 44,  99 => 32,  91 => 40,  87 => 38,  82 => 36,  77 => 35,  75 => 34,  70 => 33,  68 => 32,  64 => 31,  59 => 30,  56 => 29,  52 => 28,  48 => 27,  44 => 26,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for the administrative toolbar.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper.
 * - toolbar_attributes: HTML attributes to apply to the toolbar.
 * - toolbar_heading: The heading or label for the toolbar.
 * - tabs: List of tabs for the toolbar.
 *   - attributes: HTML attributes for the tab container.
 *   - link: Link or button for the menu tab.
 * - trays: Toolbar tray list, each associated with a tab. Each tray in trays
 *   contains:
 *   - attributes: HTML attributes to apply to the tray.
 *   - label: The tray's label.
 *   - links: The tray menu links.
 * - remainder: Any non-tray, non-tab elements left to be rendered.
 *
 * @see template_preprocess_toolbar()
 *
 * @ingroup themeable
 */
#}
<div{{ attributes.addClass('toolbar') }}>
  <nav{{ toolbar_attributes.addClass('toolbar-bar', 'clearfix') }}>
    <h2 class=\"visually-hidden\">{{ toolbar_heading }}</h2>
    {% for key, tab in tabs %}
      {% set tray = trays[key] %}
      <div{{ tab.attributes.addClass('toolbar-tab') }}>
        {{ tab.link }}
        {% apply spaceless %}
          <div{{ tray.attributes }}>
            {% if tray.label %}
              <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"{{ tray.label }}\">
                <h3 class=\"toolbar-tray-name visually-hidden\">{{ tray.label }}</h3>
            {% else %}
              <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
            {% endif %}
            {{ tray.links }}
            </nav>
          </div>
        {% endapply %}
      </div>
    {% endfor %}
  </nav>
  {{ remainder }}
</div>
", "core/modules/toolbar/templates/toolbar.html.twig", "C:\\xampp\\htdocs\\site_de_teste\\web\\core\\modules\\toolbar\\templates\\toolbar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 28, "set" => 29, "apply" => 32, "if" => 34);
        static $filters = array("escape" => 25, "spaceless" => 32);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'apply', 'if'],
                ['escape', 'spaceless'],
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
