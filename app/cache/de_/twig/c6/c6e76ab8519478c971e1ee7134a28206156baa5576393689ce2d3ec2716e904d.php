<?php

/* ZesharCRMCoreBundle:Widget:complete.html.twig */
class __TwigTemplate_8207bd696118fca10ce21bc155089bdb40faa7044f8ee7a495693e9377af82b2 extends Twig_Template
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
        $__internal_50f062898aa49e41bbff761494d3f18c39e9629cfe8b1206ab9fa201c50d8e91 = $this->env->getExtension("native_profiler");
        $__internal_50f062898aa49e41bbff761494d3f18c39e9629cfe8b1206ab9fa201c50d8e91->enter($__internal_50f062898aa49e41bbff761494d3f18c39e9629cfe8b1206ab9fa201c50d8e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Widget:complete.html.twig"));

        // line 1
        $this->displayBlock('widget', $context, $blocks);
        
        $__internal_50f062898aa49e41bbff761494d3f18c39e9629cfe8b1206ab9fa201c50d8e91->leave($__internal_50f062898aa49e41bbff761494d3f18c39e9629cfe8b1206ab9fa201c50d8e91_prof);

    }

    public function block_widget($context, array $blocks = array())
    {
        $__internal_98cf9b18461303006210f2b75b1b4fbc385fd5218d156c06a1db824880f72cde = $this->env->getExtension("native_profiler");
        $__internal_98cf9b18461303006210f2b75b1b4fbc385fd5218d156c06a1db824880f72cde->enter($__internal_98cf9b18461303006210f2b75b1b4fbc385fd5218d156c06a1db824880f72cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget"));

        // line 2
        echo "    <div class=\"custom-block table-block\">
        <div class=\"custom-head clear-fix\">
            <div class=\"custom-menu\">
                <button class=\"up-custom\"></button>
                <button class=\"settings-custom\"></button>
                <button class=\"close-custom\"></button>
            </div>
            <div class=\"custom-menu-select\">
                ";
        // line 10
        if ( !twig_test_empty((isset($context["persons"]) ? $context["persons"] : $this->getContext($context, "persons")))) {
            // line 11
            echo "                    <select class=\"user_data\">
                        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["persons"]) ? $context["persons"] : $this->getContext($context, "persons")));
            foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
                // line 13
                echo "                            <option ";
                if (((isset($context["selectedUser"]) ? $context["selectedUser"] : $this->getContext($context, "selectedUser")) == $this->getAttribute($context["person"], "username", array()))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "username", array()), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                    </select>
                ";
        }
        // line 17
        echo "            </div>
            <h3>My Opportunities & Quotes</h3>
        </div>
        <div class=\"custom-content\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 22
            echo "                <div class=\"small-table\">
                    <table>
                        <tr>
                            <th>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["humanTitles"]) ? $context["humanTitles"] : $this->getContext($context, "humanTitles")), $context["key"], array(), "array"), "html", null, true);
            echo "</th>
                            <th>Items</th>
                        </tr>
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                // line 29
                echo "                            <tr >
                                <td>";
                // line 30
                echo twig_escape_filter($this->env, $context["key2"], "html", null, true);
                echo "</td>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                    </table>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>
    </div>
";
        
        $__internal_98cf9b18461303006210f2b75b1b4fbc385fd5218d156c06a1db824880f72cde->leave($__internal_98cf9b18461303006210f2b75b1b4fbc385fd5218d156c06a1db824880f72cde_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Widget:complete.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 37,  112 => 34,  103 => 31,  99 => 30,  96 => 29,  92 => 28,  86 => 25,  81 => 22,  77 => 21,  71 => 17,  67 => 15,  54 => 13,  50 => 12,  47 => 11,  45 => 10,  35 => 2,  23 => 1,);
    }
}
/* {% block widget %}*/
/*     <div class="custom-block table-block">*/
/*         <div class="custom-head clear-fix">*/
/*             <div class="custom-menu">*/
/*                 <button class="up-custom"></button>*/
/*                 <button class="settings-custom"></button>*/
/*                 <button class="close-custom"></button>*/
/*             </div>*/
/*             <div class="custom-menu-select">*/
/*                 {% if persons is not empty %}*/
/*                     <select class="user_data">*/
/*                         {% for person in persons %}*/
/*                             <option {% if selectedUser == person.username %} selected {% endif %}>{{ person.username}}</option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                 {% endif %}*/
/*             </div>*/
/*             <h3>My Opportunities & Quotes</h3>*/
/*         </div>*/
/*         <div class="custom-content">*/
/*             {% for key, value in data %}*/
/*                 <div class="small-table">*/
/*                     <table>*/
/*                         <tr>*/
/*                             <th>{{ humanTitles[key] }}</th>*/
/*                             <th>Items</th>*/
/*                         </tr>*/
/*                         {% for key2, value2 in value %}*/
/*                             <tr >*/
/*                                 <td>{{ key2 }}</td>*/
/*                                 <td>{{ value2 }}</td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </table>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
