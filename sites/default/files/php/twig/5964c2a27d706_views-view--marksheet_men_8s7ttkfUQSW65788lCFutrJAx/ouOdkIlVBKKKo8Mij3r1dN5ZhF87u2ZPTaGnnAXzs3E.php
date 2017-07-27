<?php

/* themes/markscustom/templates/views-view--marksheet_menu--marksheet.html.twig */
class __TwigTemplate_8cbbbc0e1135ecb8c8f331dc7bf3ee0b9681bf9b6160c2d3b6f725bcdeec64ce extends Twig_Template
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
        $tags = array("for" => 3);
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

        // line 2
        echo "<ul id=\"markslist\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["view"]) ? $context["view"] : null), "field", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["viewdata"]) {
            // line 4
            echo "    <li>Your marks : ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["viewdata"], "original_value", array()), "html", null, true));
            echo "</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['viewdata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
<div class=\"image\">
  <img src=\"marksheet_css/css/girl.jpeg\" alt=\"Girls image\"/>
  <h2>A movie in the park:<br/>Kung Fu Panda</h2>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/markscustom/templates/views-view--marksheet_menu--marksheet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 6,  50 => 4,  46 => 3,  43 => 2,);
    }

    public function getSource()
    {
        return "{# <h5 id=\"user\">Hey {{ view.field.field_user_name.original_value }} check out your score here...</h5> #}
<ul id=\"markslist\">
  {% for viewdata in view.field %}
    <li>Your marks : {{ viewdata.original_value }}</li>
  {% endfor %}
</ul>
<div class=\"image\">
  <img src=\"marksheet_css/css/girl.jpeg\" alt=\"Girls image\"/>
  <h2>A movie in the park:<br/>Kung Fu Panda</h2>
</div>
{# 
<pre>
    {{ dump(view.field.field_user_name) }}
</pre>
 #}
";
    }
}
