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
    <th>%age rajouté</th>
    <th style='text-align: center;'>%age total</th>
</thead>
<tbody>
  ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeComp"]) ? $context["listeComp"] : $this->getContext($context, "listeComp")));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 10
            echo "    <tr>
        ";
            // line 11
            if (twig_in_filter((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), (isset($context["listeCompMetier"]) ? $context["listeCompMetier"] : $this->getContext($context, "listeCompMetier")))) {
                // line 12
                echo "        <td class=\"col-md-4\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
                echo "</td><td class=\"col-md-2\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getBase"), "html", null, true);
                echo "%</td><td><input type=\"text\" class=\"comp\" name=\"comp[";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getId"), "html", null, true);
                echo "]\" value=\"\"/>%</td><td style='text-align: center;'></td>
        ";
            } else {
                // line 14
                echo "        <td class=\"col-md-4\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
                echo "</td><td class=\"col-md-2\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getBase"), "html", null, true);
                echo "%</td><td></td>
        ";
            }
            // line 16
            echo "    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
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
        return array (  63 => 18,  56 => 16,  48 => 14,  38 => 12,  36 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }
}
