<?php

/* JdrCorpElricBundle:Elric:createPerso.html.twig */
class __TwigTemplate_150d03a93e9af560e51e5d2c7bf4b4acd8741658b5be1bf7cb5c51b15e326e84 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "nom"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:createPerso.html.twig";
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
