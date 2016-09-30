<?php

/* modules/custom/amicolor/works/templates/blocks/works.html.twig */
class __TwigTemplate_c2f12542c563ece5455655303839e8625c21627656358653ad1b146b6db4bd31 extends Twig_Template
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
        echo "\" id=\"nos-travaux\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Nos Travaux</h1>
            </div>
        </div>
        <div class=\"works_list row\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "works", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 10
            echo "            <div class=\"col-xs-6 col-sm-3 work\">
                <div class=\"inner-work\">
                    <div class=\"work-cover\" style=\"background-image: url('";
            // line 12
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["work"], "cover", array()), "html", null, true));
            echo "');\"></div>
                    <div class=\"work-hover\">
                        <div class=\"overlay\"></div>
                        <div class=\"inner-work-hover\">
                            <div class=\"title roboto-light\">";
            // line 16
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["work"], "title", array()), "html", null, true));
            echo "</div>
                            <a href=\"";
            // line 17
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["work"], "url", array()), "html", null, true));
            echo "\" class=\"call-to-action\">Voir les photos</a>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/amicolor/works/templates/blocks/works.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  74 => 17,  70 => 16,  63 => 12,  59 => 10,  55 => 9,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"{{ theme_hook_original }}\" id=\"nos-travaux\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Nos Travaux</h1>
            </div>
        </div>
        <div class=\"works_list row\">
            {% for work in variables['works'] %}
            <div class=\"col-xs-6 col-sm-3 work\">
                <div class=\"inner-work\">
                    <div class=\"work-cover\" style=\"background-image: url('{{ work.cover }}');\"></div>
                    <div class=\"work-hover\">
                        <div class=\"overlay\"></div>
                        <div class=\"inner-work-hover\">
                            <div class=\"title roboto-light\">{{ work.title }}</div>
                            <a href=\"{{ work.url }}\" class=\"call-to-action\">Voir les photos</a>
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
</div>
";
    }
}
