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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig */
class __TwigTemplate_f00233fe258dab0ba0377a795d4c0d89793c10a0e9ea03032ae48a28ddd1c1b2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 14
        return "apigee-entity--app.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("apigee-entity--app.html.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig", 14);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        $context["tab_suffix"] = \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, true, 16), 16, $this->source));
        // line 17
        echo "
    ";
        // line 18
        $this->loadTemplate("profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig", 18, "1047663712")->display(twig_array_merge($context, ["utility_classes" =>         // line 19
($context["classes"] ?? null), "title" => twig_get_attribute($this->env, $this->source,         // line 20
($context["entity"] ?? null), "label", [], "any", false, false, true, 20)]));
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 20,  59 => 19,  58 => 18,  55 => 17,  52 => 16,  48 => 15,  37 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig", "/var/www/devportal1/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "embed" => 18);
        static $filters = array("clean_class" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'embed'],
                ['clean_class'],
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


/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig */
class __TwigTemplate_f00233fe258dab0ba0377a795d4c0d89793c10a0e9ea03032ae48a28ddd1c1b2___1047663712 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 18
        return "@apigee-kickstart/card/collapsible-card.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@apigee-kickstart/card/collapsible-card.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig", 18);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "          <div class=\"d-flex items-center\">
            ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "warnings", [], "any", false, false, true, 25)) {
            // line 26
            echo "              <span class=\"badge badge-warning d-inline-flex align-items-center mr-2\">
                <i class=\"fa fa-exclamation-circle d-inline-block mr-1\"></i> ";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Warnings"));
            echo "
              </span>
            ";
        }
        // line 30
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "status", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "
          <ul class=\"nav nav-tabs--secondary mt-2 mb-4\">
            ";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "callbackUrl", [], "any", false, false, true, 37) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "credentials", [], "any", false, false, true, 37), "primary_wrapper", [], "any", false, false, true, 37))) {
            // line 38
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link active\" id=\"keys-tab-";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null), 39, $this->source), "html", null, true);
            echo "\" data-toggle=\"tab\" href=\"#keys-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null), 39, $this->source), "html", null, true);
            echo "\">
                  ";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Credentials"));
            echo "
                </a>
              </li>
            ";
        }
        // line 44
        echo "
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["additional_tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 46
            echo "              <li class=\"nav-item\">
                <a href=\"";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tab"], "url", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "\" class=\"nav-link\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "          </ul>

          ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "warnings", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "

          ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "credentials", [], "any", false, false, true, 54)) {
            // line 55
            echo "            <div class=\"tab-content\">
              <div class=\"tab-pane show active\" id=\"credentials-";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null), 56, $this->source), "html", null, true);
            echo "\">
                <div class=\"card apigee-entity--app__details\">
                  <h4 class=\"card-header bg-white\">
                    ";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar("Details");
            echo "
                  </h4>
                  <div class=\"card-body\">
                    ";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 62, $this->source), "status", "credentials", "warnings", "add_keys"), "html", null, true);
            echo "
                  </div>
                </div>

                <div class=\"card apigee-entity--app__credentials\">
                  <h4 class=\"card-header bg-white\">
                    ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Credentials"));
            echo "
                    ";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "add_keys", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            echo "
                  </h4>
                  <div class=\"card-body pb-0\">
                    ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "credentials", [], "any", false, false, true, 72), "approved", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
                  </div>
                </div>

                ";
            // line 76
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "credentials", [], "any", false, false, true, 76), "revoked", [], "any", false, false, true, 76)) {
                // line 77
                echo "                  <div class=\"apigee-entity--app__credentials\">
                    ";
                // line 78
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "credentials", [], "any", false, false, true, 78), "revoked", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                echo "
                  </div>
                ";
            }
            // line 81
            echo "              </div>
            </div>
          ";
        }
        // line 84
        echo "        ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 84,  283 => 81,  277 => 78,  274 => 77,  272 => 76,  265 => 72,  259 => 69,  255 => 68,  246 => 62,  240 => 59,  234 => 56,  231 => 55,  229 => 54,  224 => 52,  220 => 50,  209 => 47,  206 => 46,  202 => 45,  199 => 44,  192 => 40,  186 => 39,  183 => 38,  181 => 37,  177 => 35,  173 => 34,  165 => 30,  159 => 27,  156 => 26,  154 => 25,  151 => 24,  147 => 23,  136 => 18,  60 => 20,  59 => 19,  58 => 18,  55 => 17,  52 => 16,  48 => 15,  37 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig", "/var/www/devportal1/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app--collapsible-card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 25, "for" => 45);
        static $filters = array("t" => 27, "escape" => 30, "without" => 62);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['t', 'escape', 'without'],
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
