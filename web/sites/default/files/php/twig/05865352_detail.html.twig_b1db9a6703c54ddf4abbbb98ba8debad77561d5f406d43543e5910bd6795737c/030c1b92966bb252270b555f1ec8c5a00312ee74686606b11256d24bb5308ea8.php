<?php

/* modules/custom/amicolor/works/templates/pages/detail.html.twig */
class __TwigTemplate_d351c8d44c7d1beb910ac050c5440def8808736c74ae4582697ecc3d33be4515 extends Twig_Template
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
        echo "<div class=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_hook_original"]) ? $context["theme_hook_original"] : null), "html", null, true));
        echo "\">

    <i class=\"close fa fa-times\"></i>

    <a class=\"works_detail-prev ";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((($this->getAttribute($this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "work", array(), "array"), "prev", array(), "array")) ? ("enabled") : ("disabled"))));
        echo "\" href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "work", array(), "array"), "prev", array(), "array"), "html", null, true));
        echo "\">
        <i class=\"fa fa-angle-left\"></i>
    </a>
    <a class=\"works_detail-next ";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((($this->getAttribute($this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "work", array(), "array"), "next", array(), "array")) ? ("enabled") : ("disabled"))));
        echo "\" href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "work", array(), "array"), "next", array(), "array"), "html", null, true));
        echo "\">
        <i class=\"fa fa-angle-right\"></i>
    </a>

    <div class=\"detail\">
        <img src=\"";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "work", array()), "image", array()), "auto_orientation", array()), "html", null, true));
        echo "\" />
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/amicolor/works/templates/pages/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  59 => 8,  51 => 5,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"{{ theme_hook_original }}\">

    <i class=\"close fa fa-times\"></i>

    <a class=\"works_detail-prev {{ variables['work']['prev'] ? 'enabled' : 'disabled' }}\" href=\"{{ variables['work']['prev'] }}\">
        <i class=\"fa fa-angle-left\"></i>
    </a>
    <a class=\"works_detail-next {{ variables['work']['next'] ? 'enabled' : 'disabled' }}\" href=\"{{ variables['work']['next'] }}\">
        <i class=\"fa fa-angle-right\"></i>
    </a>

    <div class=\"detail\">
        <img src=\"{{ variables.work.image.auto_orientation }}\" />
    </div>

</div>
";
    }
}
