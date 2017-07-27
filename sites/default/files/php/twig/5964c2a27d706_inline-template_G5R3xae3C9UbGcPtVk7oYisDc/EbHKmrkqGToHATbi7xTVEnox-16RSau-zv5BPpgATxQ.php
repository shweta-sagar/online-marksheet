<?php

/* {# inline_template_start #}{% set sum =  content.field_subject_2 + content.field_subject_4 %}
{{ sum }} */
class __TwigTemplate_cc27e5acba9ac1984c08f5eb623958ad143eaa43ba11995a0ed715e56c29e426 extends Twig_Template
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
        $tags = array("set" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
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
        $context["sum"] = ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_subject_2", array()) + $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_subject_4", array()));
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sum"]) ? $context["sum"] : null), "html", null, true));
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{% set sum =  content.field_subject_2 + content.field_subject_4 %}
{{ sum }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 2,  44 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}{% set sum =  content.field_subject_2 + content.field_subject_4 %}
{{ sum }}";
    }
}
