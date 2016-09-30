<?php

/* modules/custom/amicolor/partners/templates/blocks/partners.html.twig */
class __TwigTemplate_627cd0f794c4126ab3865fd777472839ae9b50fbb4c9102f4cb029e8b1dd325e extends Twig_Template
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
        echo "\" id=\"nos-partenaires\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Nos Partenaires</h1>
            </div>
        </div>
        <div class=\"partners_list row\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "partners", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
            // line 10
            echo "            <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["partner"], "url", array()), "html", null, true));
            echo "\" target=\"_blank\" class=\"col-xs-6 col-sm-3 partner\">
                <div class=\"inner\">
                    <div class=\"partner-logo\" style=\"background-image: url('";
            // line 12
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["partner"], "image", array()), "html", null, true));
            echo "');\"></div>
                </div>
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/amicolor/partners/templates/blocks/partners.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  65 => 12,  59 => 10,  55 => 9,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"{{ theme_hook_original }}\" id=\"nos-partenaires\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Nos Partenaires</h1>
            </div>
        </div>
        <div class=\"partners_list row\">
            {% for partner in variables['partners'] %}
            <a href=\"{{ partner.url }}\" target=\"_blank\" class=\"col-xs-6 col-sm-3 partner\">
                <div class=\"inner\">
                    <div class=\"partner-logo\" style=\"background-image: url('{{ partner.image }}');\"></div>
                </div>
            </a>
            {% endfor %}
        </div>
    </div>
</div>
";
    }
}
