<?php

/* JdrCorpElricBundle:Elric:metier.html.twig */
class __TwigTemplate_b9d2d03b6a4ff8f69d57456f7b76c238bc5bab358703b3a4943de29c0dee8338 extends Twig_Template
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
        echo "<h2 class=\"StepTitle\">Métiers & Compétences</h2>
<div class=\"col-md-6\" style=\"height:500px;overflow:auto;\">
    <table class=\"table table-hover\">
  ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeComp"]) ? $context["listeComp"] : $this->getContext($context, "listeComp")));
        foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
            // line 5
            echo "        <tr>
            <td class=\"col-md-4\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["metier"]) ? $context["metier"] : $this->getContext($context, "metier")), "getNom"), "html", null, true);
            echo "</td><td class=\"col-md-2\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["metier"]) ? $context["metier"] : $this->getContext($context, "metier")), "getBase"), "html", null, true);
            echo "%</td>
        </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </table>
</div>";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:metier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
