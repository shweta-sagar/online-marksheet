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

    }

    public function getTemplateName()
    {
        return "themes/markscustom/templates/views-view--marksheet_menu--marksheet.html.twig";
    }

    public function getDebugInfo()
    {
        return array ();
    }

    public function getSource()
    {
        return "{# <h5 id=\"user\">Hey {{ view.field.field_user_name.original_value }} check out your score here...</h5> #}
{# <ul id=\"markslist\">
  {% for viewdata in view.field %}
    <li>Your marks : {{ dump(viewdata) }}</li>
  {% endfor %} #}
{# 
<pre>
    {{ dump(view.field.field_user_name) }}
</pre>
 #}
";
    }
}
