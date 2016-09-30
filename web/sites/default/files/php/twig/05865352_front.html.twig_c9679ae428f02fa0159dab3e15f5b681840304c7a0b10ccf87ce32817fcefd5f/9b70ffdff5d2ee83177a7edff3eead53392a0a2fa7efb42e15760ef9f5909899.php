<?php

/* modules/custom/amicolor/homepage/templates/pages/front.html.twig */
class __TwigTemplate_2e7231a47a56382b823c8dcfed6a35d57926712686f25071823c5669023c10a7 extends Twig_Template
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
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
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
        echo "<div class=\"container\">
    ";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "intro_block", array(), "array"), "html", null, true));
        echo "
</div>

";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "works_block", array(), "array"), "html", null, true));
        echo "

";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "partners_block", array(), "array"), "html", null, true));
        echo "

<div class=\"container\">
    ";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "contact_block", array(), "array"), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/amicolor/homepage/templates/pages/front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  57 => 7,  52 => 5,  46 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"container\">
    {{ variables['intro_block'] }}
</div>

{{ variables['works_block'] }}

{{ variables['partners_block'] }}

<div class=\"container\">
    {{ variables['contact_block'] }}
</div>
";
    }
}
