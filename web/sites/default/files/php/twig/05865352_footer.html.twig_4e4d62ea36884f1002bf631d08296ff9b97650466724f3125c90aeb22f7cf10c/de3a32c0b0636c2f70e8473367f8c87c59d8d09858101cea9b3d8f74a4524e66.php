<?php

/* modules/custom/amicolor/layouts/templates/blocks/footer.html.twig */
class __TwigTemplate_0ee6b7d6e43ce18c3b45c89c84e29cc57ee09295708d87314779dafb10ab580c extends Twig_Template
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
        $filters = array("date" => 3);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('date'),
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
        echo "<div class=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_hook_original"]) ? $context["theme_hook_original"] : null), "html", null, true));
        echo "\">
    <div class=\"container\">
        <div class=\"credits\">design by Natacha Herth & code by <a href=\"http://www.kevin-wenger.ch\">Kevin Wenger</a> ©";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo "</div>
    </div>
<div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/amicolor/layouts/templates/blocks/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"{{ theme_hook_original }}\">
    <div class=\"container\">
        <div class=\"credits\">design by Natacha Herth & code by <a href=\"http://www.kevin-wenger.ch\">Kevin Wenger</a> ©{{ \"now\"|date(\"Y\") }}</div>
    </div>
<div>
";
    }
}
