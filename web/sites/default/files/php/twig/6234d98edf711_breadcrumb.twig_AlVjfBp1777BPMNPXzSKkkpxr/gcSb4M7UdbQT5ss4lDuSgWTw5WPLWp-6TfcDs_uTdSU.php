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

/* @apigee-kickstart/breadcrumb/breadcrumb.twig */
class __TwigTemplate_e4ba412182174f9bbe75ba4c264581fd432accd15f34929154528d6f4930a8dd extends \Twig\Template
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
        // line 7
        if (($context["breadcrumb"] ?? null)) {
            // line 8
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                echo "    <li class=\"breadcrumb-item ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((( !twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 9)) ? ("active") : ("")));
                echo "\">
      ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 10)) {
                    // line 11
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                    echo "</a>
      ";
                } else {
                    // line 13
                    echo "        ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                    echo "
      ";
                }
                // line 15
                echo "    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "@apigee-kickstart/breadcrumb/breadcrumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  61 => 13,  53 => 11,  51 => 10,  46 => 9,  41 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@apigee-kickstart/breadcrumb/breadcrumb.twig", "/var/www/devportal1/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/src/components/breadcrumb/breadcrumb.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7, "for" => 8);
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
