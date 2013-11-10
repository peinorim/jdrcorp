<?php

/* JdrCorpElricBundle:Elric:tableComp.html.twig */
class __TwigTemplate_f1f0affbd2799f5bbd8cc638bbb4ef4de6ae8827e1dc5dc6f2efb0f1cfafeaaa extends Twig_Template
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
        echo "<table class=\"table table-hover\">
    <thead>
    <th>Compétences</th>
    <th>%age de base</th>
</thead>
<tbody>
  ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeComp"]) ? $context["listeComp"] : $this->getContext($context, "listeComp")));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 8
            echo "    <tr>
        <td class=\"col-md-4\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
            echo "</td><td class=\"col-md-2\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getBase"), "html", null, true);
            echo "%</td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:tableComp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  31 => 8,  27 => 7,  45 => 12,  40 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}
