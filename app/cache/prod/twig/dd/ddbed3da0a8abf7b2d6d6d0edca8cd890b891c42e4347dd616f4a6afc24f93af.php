<?php

/* ZesharCRMCoreBundle:Form:existing_attachments.html.twig */
class __TwigTemplate_d9f9fc707d276b30e3a6f11e04c0fcad1a7552b3d3c88572bfddfd0c98c5652f extends Twig_Template
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
        echo "<div class=\"form-group\">
                                                <label class=\"control-label\">
                                    Comments
                            </label>

        <div class=\"sonata-ba-field sonata-ba-field-standard-natural\">
                
                ";
        // line 8
        if ( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getAttachments", array(), "method"))) {
            // line 9
            echo "                    <ul class=\"sonata-ba-show-one-to-many\">
                        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getAttachments", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 11
                echo "                            <li>
                                ";
                // line 12
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getText", array(), "method"))) {
                    // line 13
                    echo "                                    <p>";
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getText", array(), "method"), "html", null, true));
                    echo "</p>
                                ";
                }
                // line 15
                echo "                                ";
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getFile", array(), "method"))) {
                    // line 16
                    echo "                                    <p>File:&nbsp;&nbsp;";
                    echo $this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getDownloadLink", array(), "method");
                    echo "</p>
                                ";
                }
                // line 18
                echo "                                ";
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getCreator", array(), "method"))) {
                    // line 19
                    echo "                                    <p>Posted by:&nbsp;&nbsp;";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getCreator", array(), "method"), "getUsername", array(), "method"), "html", null, true);
                    echo "</p>
                                ";
                }
                // line 21
                echo "                                <p>Posted at:&nbsp;&nbsp;";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getCreatedAt", array(), "method"), "Y-m-d H:i:s"), "html", null, true);
                echo "</p>
                                <p>Updated at:&nbsp;&nbsp;";
                // line 22
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getUpdatedAt", array(), "method"), "Y-m-d H:i:s"), "html", null, true);
                echo "</p>
                                <br/>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                    </ul>
                ";
        } else {
            // line 28
            echo "                    <br />
                    <div>This item has no attachments yet.</div>
                ";
        }
        // line 31
        echo "                
        </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Form:existing_attachments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 31,  85 => 28,  81 => 26,  71 => 22,  66 => 21,  60 => 19,  57 => 18,  51 => 16,  48 => 15,  42 => 13,  40 => 12,  37 => 11,  33 => 10,  30 => 9,  28 => 8,  19 => 1,);
    }
}
/* <div class="form-group">*/
/*                                                 <label class="control-label">*/
/*                                     Comments*/
/*                             </label>*/
/* */
/*         <div class="sonata-ba-field sonata-ba-field-standard-natural">*/
/*                 */
/*                 {% if object.getAttachments() is not empty %}*/
/*                     <ul class="sonata-ba-show-one-to-many">*/
/*                         {% for element in object.getAttachments() %}*/
/*                             <li>*/
/*                                 {% if element.getAttachment().getText() is not empty %}*/
/*                                     <p>{{ element.getAttachment().getText()|nl2br }}</p>*/
/*                                 {% endif %}*/
/*                                 {% if element.getAttachment().getFile() is not empty %}*/
/*                                     <p>File:&nbsp;&nbsp;{{ element.getAttachment().getDownloadLink() | raw }}</p>*/
/*                                 {% endif %}*/
/*                                 {% if element.getAttachment().getCreator() is not empty %}*/
/*                                     <p>Posted by:&nbsp;&nbsp;{{ element.getAttachment().getCreator().getUsername() }}</p>*/
/*                                 {% endif %}*/
/*                                 <p>Posted at:&nbsp;&nbsp;{{ element.getAttachment().getCreatedAt()|date('Y-m-d H:i:s') }}</p>*/
/*                                 <p>Updated at:&nbsp;&nbsp;{{ element.getAttachment().getUpdatedAt()|date('Y-m-d H:i:s') }}</p>*/
/*                                 <br/>*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 {% else %}*/
/*                     <br />*/
/*                     <div>This item has no attachments yet.</div>*/
/*                 {% endif %}*/
/*                 */
/*         </div>*/
/* */
/* </div>*/
/* */
