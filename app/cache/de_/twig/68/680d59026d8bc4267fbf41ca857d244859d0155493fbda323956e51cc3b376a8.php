<?php

/* ZesharCRMCoreBundle:FormItems:leadScoringBlock.html.twig */
class __TwigTemplate_d87da92d01d341cde17b9fcd3a8996b85c2ae4018ede3349fb5c73c3c0086e73 extends Twig_Template
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
        $__internal_dfa8e631dffe2b7cff92b18865c1dd28db535ad401274ec513c9812d1173826b = $this->env->getExtension("native_profiler");
        $__internal_dfa8e631dffe2b7cff92b18865c1dd28db535ad401274ec513c9812d1173826b->enter($__internal_dfa8e631dffe2b7cff92b18865c1dd28db535ad401274ec513c9812d1173826b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:FormItems:leadScoringBlock.html.twig"));

        // line 1
        echo "<ul class=\"criteria-list\">
    <li>
        <b>Criteria *</b>
        <ul>

            ";
        // line 23
        echo "
            ";
        // line 24
        if ((isset($context["rootCriteria"]) ? $context["rootCriteria"] : $this->getContext($context, "rootCriteria"))) {
            // line 25
            echo "                <ul style=\"margin-left:20px\">
                    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rootCriteria"]) ? $context["rootCriteria"] : $this->getContext($context, "rootCriteria")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 27
                echo "                        ";
                echo $this->getAttribute($this, "recursiveCriteria", array(0 => $context["item"], 1 => (isset($context["chosen"]) ? $context["chosen"] : $this->getContext($context, "chosen"))), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                </ul>
            ";
        }
        // line 31
        echo "
        </ul>
    </li>
    <li>
        <b>Total *</b><br/>
        <input readonly name=\"scoring-total\" class=\"criteria-score\" type=\"text\" value=\"\"/>
    </li>
</ul>";
        
        $__internal_dfa8e631dffe2b7cff92b18865c1dd28db535ad401274ec513c9812d1173826b->leave($__internal_dfa8e631dffe2b7cff92b18865c1dd28db535ad401274ec513c9812d1173826b_prof);

    }

    // line 6
    public function getrecursiveCriteria($__criteria__ = null, $__chosen__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "criteria" => $__criteria__,
            "chosen" => $__chosen__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_28bc2c288c2e82a75a0e4b53d72220bfd81518a815f16f794db3640606d586cd = $this->env->getExtension("native_profiler");
            $__internal_28bc2c288c2e82a75a0e4b53d72220bfd81518a815f16f794db3640606d586cd->enter($__internal_28bc2c288c2e82a75a0e4b53d72220bfd81518a815f16f794db3640606d586cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "recursiveCriteria"));

            // line 7
            echo "                <li>
                    ";
            // line 8
            if ( !twig_length_filter($this->env, $this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : $this->getContext($context, "criteria")), "children", array()))) {
                // line 9
                echo "                        <label>
                            <input class=\"criteria-input\" data-criteria-value=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : $this->getContext($context, "criteria")), "portionScore", array()), "html", null, true);
                echo "\" name=\"criteria[]\" ";
                if (twig_in_filter($this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : $this->getContext($context, "criteria")), "id", array()), (isset($context["chosen"]) ? $context["chosen"] : $this->getContext($context, "chosen")))) {
                    echo " checked=\"checked\" ";
                }
                echo "value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : $this->getContext($context, "criteria")), "id", array()), "html", null, true);
                echo "\" type=\"checkbox\"/>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : $this->getContext($context, "criteria")), "name", array()), "html", null, true);
                echo "
                        </label>

                    ";
            } else {
                // line 14
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : $this->getContext($context, "criteria")), "name", array()), "html", null, true);
                echo "
                        <ul style=\"margin-left:20px\">
                            ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : $this->getContext($context, "criteria")), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 17
                    echo "                                ";
                    echo $this->getAttribute($this, "recursiveCriteria", array(0 => $context["child"], 1 => (isset($context["chosen"]) ? $context["chosen"] : $this->getContext($context, "chosen"))), "method");
                    echo "
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "                        </ul>
                    ";
            }
            // line 21
            echo "                </li>
            ";
            
            $__internal_28bc2c288c2e82a75a0e4b53d72220bfd81518a815f16f794db3640606d586cd->leave($__internal_28bc2c288c2e82a75a0e4b53d72220bfd81518a815f16f794db3640606d586cd_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:FormItems:leadScoringBlock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 21,  126 => 19,  117 => 17,  113 => 16,  107 => 14,  92 => 10,  89 => 9,  87 => 8,  84 => 7,  68 => 6,  54 => 31,  50 => 29,  41 => 27,  37 => 26,  34 => 25,  32 => 24,  29 => 23,  22 => 1,);
    }
}
/* <ul class="criteria-list">*/
/*     <li>*/
/*         <b>Criteria *</b>*/
/*         <ul>*/
/* */
/*             {% macro recursiveCriteria(criteria, chosen) %}*/
/*                 <li>*/
/*                     {% if not criteria.children|length %}*/
/*                         <label>*/
/*                             <input class="criteria-input" data-criteria-value="{{ criteria.portionScore }}" name="criteria[]" {% if(criteria.id in chosen) %} checked="checked" {% endif %}value="{{ criteria.id }}" type="checkbox"/>{{ criteria.name }}*/
/*                         </label>*/
/* */
/*                     {% else %}*/
/*                         {{ criteria.name }}*/
/*                         <ul style="margin-left:20px">*/
/*                             {% for child in criteria.children %}*/
/*                                 {{ _self.recursiveCriteria(child, chosen) }}*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     {% endif %}*/
/*                 </li>*/
/*             {% endmacro %}*/
/* */
/*             {% if rootCriteria %}*/
/*                 <ul style="margin-left:20px">*/
/*                     {% for item in rootCriteria %}*/
/*                         {{ _self.recursiveCriteria(item, chosen) }}*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/* */
/*         </ul>*/
/*     </li>*/
/*     <li>*/
/*         <b>Total *</b><br/>*/
/*         <input readonly name="scoring-total" class="criteria-score" type="text" value=""/>*/
/*     </li>*/
/* </ul>*/
