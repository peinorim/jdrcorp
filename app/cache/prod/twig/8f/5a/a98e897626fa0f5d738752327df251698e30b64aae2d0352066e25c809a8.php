<?php

/* JdrCorpElricBundle:Elric:index.html.twig */
class __TwigTemplate_8f5aa98e897626fa0f5d738752327df251698e30b64aae2d0352066e25c809a8 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/JdrCorpElricBundle/css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/JdrCorpElricBundle/css/smart_wizard.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <h1>Bienvenue</h1>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  30 => 7,  25 => 5,  19 => 1,);
    }
}
