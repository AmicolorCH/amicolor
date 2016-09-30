<?php

/* modules/custom/amicolor/sliders/templates/blocks/sliders.html.twig */
class __TwigTemplate_3e1fae2b9d2564e0293020c56e361a1ef81263a5829395e0d5d7ac240d3a7c76 extends Twig_Template
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
        $tags = array("for" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
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
    <div class=\"flexslider\">
        <ul class=\"slides\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "sliders", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 5
            echo "            <li class=\"slide\">
                <div class=\"hangs roboto-light\">
                    <div class=\"inner\">
                        ";
            // line 8
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slider"], "hangs", array()), "html", null, true));
            echo "
                    </div>
                </div>
                <div class=\"image\" style=\"background-image: url('";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slider"], "image", array()), "html", null, true));
            echo "');\"></div>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/amicolor/sliders/templates/blocks/sliders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 14,  65 => 11,  59 => 8,  54 => 5,  50 => 4,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"{{ theme_hook_original }}\">
    <div class=\"flexslider\">
        <ul class=\"slides\">
            {% for slider in variables['sliders'] %}
            <li class=\"slide\">
                <div class=\"hangs roboto-light\">
                    <div class=\"inner\">
                        {{ slider.hangs }}
                    </div>
                </div>
                <div class=\"image\" style=\"background-image: url('{{ slider.image }}');\"></div>
            </li>
            {% endfor %}
        </ul>
    </div>
</div>
";
    }
}
