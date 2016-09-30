<?php

/* themes/amicolor/templates/page.html.twig */
class __TwigTemplate_3e74d47724f425bc2db18bbca4971b1c644539361707e2dc0633dd9213c3a66d extends Twig_Template
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
        $tags = array("if" => 17);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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
        echo "
<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
  </header>

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 10
        echo "
    <div class=\"layout-content\">
        ";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
    </div>";
        // line 14
        echo "
  </main>

  ";
        // line 17
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 18
            echo "    <footer role=\"contentinfo\">
      ";
            // line 19
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 22
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/amicolor/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  74 => 19,  71 => 18,  69 => 17,  64 => 14,  60 => 12,  56 => 10,  49 => 5,  43 => 1,);
    }

    public function getSource()
    {
        return "
<div class=\"layout-container\">

  <header role=\"banner\">
    {{ page.header }}
  </header>

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

    <div class=\"layout-content\">
        {{ page.content }}
    </div>{# /.layout-content #}

  </main>

  {% if page.footer %}
    <footer role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endif %}

</div>{# /.layout-container #}
";
    }
}
