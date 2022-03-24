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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/navigation/links--dropbutton.html.twig */
class __TwigTemplate_51899e98e1b0741102455fd17a62c5b3e5c3b76bb47ad5438e706d0ac098c274 extends \Twig\Template
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
        if ((($context["links"] ?? null) || ($context["button"] ?? null))) {
            // line 8
            if (($context["heading"] ?? null)) {
                // line 9
                if (twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 9)) {
                    // line 10
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "attributes", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "text", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 12
                    echo "<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "attributes", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "text", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                    echo "</h2>";
                }
            }
            // line 15
            echo "<ul";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 15, $this->source), "html", null, true);
            echo ">

    ";
            // line 17
            if (($context["split"] ?? null)) {
                // line 18
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["button"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#options"] ?? null) : null), "attributes", [], "any", false, false, true, 18)) {
                    // line 19
                    echo "        ";
                    $context["button_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["button"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#options"] ?? null) : null), "attributes", [], "any", false, false, true, 19), 19, $this->source));
                    // line 20
                    echo "      ";
                } else {
                    // line 21
                    echo "        ";
                    $context["button_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
                    // line 22
                    echo "      ";
                }
                // line 23
                echo "      <li><a";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["button_attributes"] ?? null), "removeClass", [0 => [0 => "btn", 1 => "btn-sm", 2 => "btn-outline-dark"]], "method", false, false, true, 23), 23, $this->source), "html", null, true);
                echo " href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["button"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#url"] ?? null) : null), "toString", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = ($context["button"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#title"] ?? null) : null), 23, $this->source), "html", null, true);
                echo "</a></li>
    ";
            }
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 27
                echo "<li";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 27), "removeClass", [0 => "dropdown-item"], "method", false, false, true, 27), 27, $this->source), "html", null, true);
                echo ">";
                // line 28
                if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 28)) {
                    // line 29
                    if (twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 29)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#options"] ?? null) : null), "attributes", [], "any", false, false, true, 29)) {
                        // line 30
                        echo "            ";
                        $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 30)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#options"] ?? null) : null), "attributes", [], "any", false, false, true, 30), 30, $this->source));
                        // line 31
                        echo "          ";
                    } else {
                        // line 32
                        echo "            ";
                        $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
                        // line 33
                        echo "          ";
                    }
                    // line 34
                    echo "          <a";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["link_attributes"] ?? null), "removeClass", [0 => "dropdown-item"], "method", false, false, true, 34), 34, $this->source), "html", null, true);
                    echo " href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 34)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#url"] ?? null) : null), "toString", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 34)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#title"] ?? null) : null), 34, $this->source), "html", null, true);
                    echo "</a>";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 35
$context["item"], "text_attributes", [], "any", false, false, true, 35)) {
                    // line 36
                    echo "<span";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text_attributes", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                    echo "</span>";
                } else {
                    // line 38
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                }
                // line 40
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "</ul>";
        }
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/navigation/links--dropbutton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 42,  140 => 40,  137 => 38,  130 => 36,  128 => 35,  120 => 34,  117 => 33,  114 => 32,  111 => 31,  108 => 30,  106 => 29,  104 => 28,  100 => 27,  96 => 26,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  69 => 17,  63 => 15,  55 => 12,  45 => 10,  43 => 9,  41 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/navigation/links--dropbutton.html.twig", "/var/www/devportal1/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/navigation/links--dropbutton.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7, "set" => 19, "for" => 26);
        static $filters = array("escape" => 10);
        static $functions = array("create_attribute" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape'],
                ['create_attribute']
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
