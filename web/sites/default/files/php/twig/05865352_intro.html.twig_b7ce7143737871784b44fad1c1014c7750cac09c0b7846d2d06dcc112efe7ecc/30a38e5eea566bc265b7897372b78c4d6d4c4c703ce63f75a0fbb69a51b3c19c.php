<?php

/* modules/custom/amicolor/intro/templates/blocks/intro.html.twig */
class __TwigTemplate_652f65090bce0640c53d51e5b4e9559413884430dc8b2198c943fa25939f3b20 extends Twig_Template
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
        echo "\" id=\"qui-sommes-nous\">
    <div class=\"col-md-6\">
        <h1>Qui sommes-nous ?</h1>
        ";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(nl2br($this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "who_we_are", array(), "array"))));
        echo "
    </div>
    <div class=\"col-md-6\">
        <h1>Nos prestations :</h1>
        ";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(nl2br($this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "bio", array(), "array"))));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/amicolor/intro/templates/blocks/intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  50 => 4,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"row {{ theme_hook_original }}\" id=\"qui-sommes-nous\">
    <div class=\"col-md-6\">
        <h1>Qui sommes-nous ?</h1>
        {{ variables['who_we_are'] | raw | nl2br }}
    </div>
    <div class=\"col-md-6\">
        <h1>Nos prestations :</h1>
        {{ variables['bio'] | raw | nl2br }}
    </div>
</div>
";
    }
}
