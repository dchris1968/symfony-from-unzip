<?php

/* SouthHillsOurFirstBundle:Default:index.html.twig */
class __TwigTemplate_9921adbb6b2305f048150c52ac8e6eed31ef1b99e5f6bc9b59534ec35bf7b025 extends Twig_Template
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
        // line 1
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo " is speaking!
";
    }

    public function getTemplateName()
    {
        return "SouthHillsOurFirstBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
