<?php

/* modules/custom/amicolor/layouts/templates/blocks/header.html.twig */
class __TwigTemplate_254bae93b9afd29330e805add7ada5591b73436bea7c2c480d4c82975e35eab8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("for" => 9);
        $filters = array();
        $functions = array("url" => 5);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
                array(),
                array('url')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_hook_original"]) ? $context["theme_hook_original"] : null), "html", null, true));
        echo "\">

    <div class=\"container\">
        <div class=\"col-xs-12 col-sm-3 logo\">
            <a href=\"";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getUrl("<front>")));
        echo "\"><img src=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "logo", array(), "array"), "html", null, true));
        echo "\" alt=\"Logo Amicolor\" /></a>
        </div>
        <div class=\"hidden-xs col-sm-9 main-menu\">
            <ul class=\"menu\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "menu", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 10
            echo "                <li class=\"link\">
                    <a class=\"roboto-bold\" href=\"";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["link"], "url", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["link"], "title", array()), "html", null, true));
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </ul>
        </div>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/amicolor/layouts/templates/blocks/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  67 => 11,  64 => 10,  60 => 9,  51 => 5,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"{{ theme_hook_original }}\">

    <div class=\"container\">
        <div class=\"col-xs-12 col-sm-3 logo\">
            <a href=\"{{ url('<front>') }}\"><img src=\"{{ variables['logo'] }}\" alt=\"Logo Amicolor\" /></a>
        </div>
        <div class=\"hidden-xs col-sm-9 main-menu\">
            <ul class=\"menu\">
                {% for link in variables['menu'] %}
                <li class=\"link\">
                    <a class=\"roboto-bold\" href=\"{{ link.url }}\">{{ link.title }}</a>
                </li>
                {% endfor %}
            </ul>
        </div>
    </div>

</div>
";
    }
}
