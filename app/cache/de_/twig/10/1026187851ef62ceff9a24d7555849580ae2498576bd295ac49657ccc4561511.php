<?php

/* ZesharCRMCoreBundle:Widget:oneMoreActivity.html.twig */
class __TwigTemplate_78f9370b42cd189359238fc4e944721b8018995b797ad1220ed069eded4df941 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'widget' => array($this, 'block_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1fdb4c3ffadb2cc6b9b449dec463cbb3511db9426ec12c4d62acedc5819dba4 = $this->env->getExtension("native_profiler");
        $__internal_d1fdb4c3ffadb2cc6b9b449dec463cbb3511db9426ec12c4d62acedc5819dba4->enter($__internal_d1fdb4c3ffadb2cc6b9b449dec463cbb3511db9426ec12c4d62acedc5819dba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Widget:oneMoreActivity.html.twig"));

        // line 1
        $this->displayBlock('widget', $context, $blocks);
        
        $__internal_d1fdb4c3ffadb2cc6b9b449dec463cbb3511db9426ec12c4d62acedc5819dba4->leave($__internal_d1fdb4c3ffadb2cc6b9b449dec463cbb3511db9426ec12c4d62acedc5819dba4_prof);

    }

    public function block_widget($context, array $blocks = array())
    {
        $__internal_8c5387a42ee81274ad1e9bbda20ce794397dbca2683631db855eb51e52c6b421 = $this->env->getExtension("native_profiler");
        $__internal_8c5387a42ee81274ad1e9bbda20ce794397dbca2683631db855eb51e52c6b421->enter($__internal_8c5387a42ee81274ad1e9bbda20ce794397dbca2683631db855eb51e52c6b421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget"));

        // line 2
        echo "    <div class=\"custom-block\">
        <div class=\"custom-head clear-fix\">
            <div class=\"custom-menu\">
                <button class=\"up-custom\"></button>
                <button class=\"settings-custom\"></button>
            </div>
            <h3>My Activities</h3>
        </div>
        <div class=\"custom-content\">
            <table class=\"table-widget\">
                <tr>
                    <th></th>
                    <th></th>
                    <th>Contacted</th>
                    <th>Quoted</th>
                    <th>Sold</th>
                </tr>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) ? $context["activities"] : $this->getContext($context, "activities")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "                    <tr>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</td>
                        ";
            // line 22
            if (($this->getAttribute($context["item"], "allContactedCount", array()) != 0)) {
                // line 23
                echo "                            ";
                $context["percentage"] = sprintf("%.2f", (($this->getAttribute($context["item"], "yesContactedCount", array()) * 100) / $this->getAttribute($context["item"], "allContactedCount", array())));
                // line 24
                echo "                        ";
            } else {
                // line 25
                echo "                            ";
                $context["percentage"] = "0.00";
                // line 26
                echo "                        ";
            }
            // line 27
            echo "                        <td>
                            <div class=\"column-line\">
                                <i data-percent-width=\"";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["percentage"]) ? $context["percentage"] : $this->getContext($context, "percentage")), "html", null, true);
            echo "%\" class=\"icon-line icon-widget\"></i>
                            </div>
                        </td>
                        <td>
                            ";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["percentage"]) ? $context["percentage"] : $this->getContext($context, "percentage")), "html", null, true);
            echo " %
                        </td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quoteCount", array()), "html", null, true);
            echo "</td>
                        <td style=\"color: #00a65a\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "soldCount", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </table>
        </div>
    </div>
";
        
        $__internal_8c5387a42ee81274ad1e9bbda20ce794397dbca2683631db855eb51e52c6b421->leave($__internal_8c5387a42ee81274ad1e9bbda20ce794397dbca2683631db855eb51e52c6b421_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Widget:oneMoreActivity.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 39,  99 => 36,  95 => 35,  90 => 33,  83 => 29,  79 => 27,  76 => 26,  73 => 25,  70 => 24,  67 => 23,  65 => 22,  61 => 21,  58 => 20,  54 => 19,  35 => 2,  23 => 1,);
    }
}
/* {% block widget %}*/
/*     <div class="custom-block">*/
/*         <div class="custom-head clear-fix">*/
/*             <div class="custom-menu">*/
/*                 <button class="up-custom"></button>*/
/*                 <button class="settings-custom"></button>*/
/*             </div>*/
/*             <h3>My Activities</h3>*/
/*         </div>*/
/*         <div class="custom-content">*/
/*             <table class="table-widget">*/
/*                 <tr>*/
/*                     <th></th>*/
/*                     <th></th>*/
/*                     <th>Contacted</th>*/
/*                     <th>Quoted</th>*/
/*                     <th>Sold</th>*/
/*                 </tr>*/
/*                 {% for item in activities %}*/
/*                     <tr>*/
/*                         <td>{{ item.title }}</td>*/
/*                         {% if item.allContactedCount != 0 %}*/
/*                             {% set percentage = '%.2f'|format(item.yesContactedCount*100/item.allContactedCount) %}*/
/*                         {% else %}*/
/*                             {% set percentage = '0.00' %}*/
/*                         {% endif %}*/
/*                         <td>*/
/*                             <div class="column-line">*/
/*                                 <i data-percent-width="{{ percentage  }}%" class="icon-line icon-widget"></i>*/
/*                             </div>*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ percentage }} %*/
/*                         </td>*/
/*                         <td>{{ item.quoteCount }}</td>*/
/*                         <td style="color: #00a65a">{{ item.soldCount }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
