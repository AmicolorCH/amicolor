<?php

/* modules/custom/amicolor/contact/templates/blocks/contact.html.twig */
class __TwigTemplate_ca4f6ce7b423d666d4957dbc80f79ba8cf026c337c6bac104fb80047ee4bfb7f extends Twig_Template
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
        $tags = array();
        $filters = array("nl2br" => 4, "raw" => 4);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('nl2br', 'raw'),
                array()
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
        echo "<div class=\"row ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_hook_original"]) ? $context["theme_hook_original"] : null), "html", null, true));
        echo "\" id=\"contact\">
    <div class=\"col-md-4\">
        <h1>Nous contacter</h1>
        ";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(nl2br($this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "address", array(), "array"))));
        echo "

        <div class=\"buttons\">
            <div class=\"googlemap\">
                <a href=\"";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "googlemap", array(), "array"), "html", null, true));
        echo "\" class=\"button\" target=\"_blank\"><i class=\"fa fa-map-marker\"></i> Voir la carte</a>
            </div>
            <div class=\"facebook\">
                <a href=\"";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "facebook", array(), "array"), "html", null, true));
        echo "\" class=\"button\" target=\"_blank\"><i class=\"fa fa-facebook-square\"></i> Facebook</a>
            </div>
        </div>
    </div>
    <div class=\"col-md-8\">
        ";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "form", array(), "array"), "html", null, true));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/amicolor/contact/templates/blocks/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  63 => 11,  57 => 8,  50 => 4,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"row {{ theme_hook_original }}\" id=\"contact\">
    <div class=\"col-md-4\">
        <h1>Nous contacter</h1>
        {{ variables['address'] | raw | nl2br }}

        <div class=\"buttons\">
            <div class=\"googlemap\">
                <a href=\"{{ variables['googlemap'] }}\" class=\"button\" target=\"_blank\"><i class=\"fa fa-map-marker\"></i> Voir la carte</a>
            </div>
            <div class=\"facebook\">
                <a href=\"{{ variables['facebook'] }}\" class=\"button\" target=\"_blank\"><i class=\"fa fa-facebook-square\"></i> Facebook</a>
            </div>
        </div>
    </div>
    <div class=\"col-md-8\">
        {{ variables['form'] }}
    </div>
</div>
";
    }
}
