<?php

/* search_body.html */
class __TwigTemplate_7b72ff69615f42e951d9bcfec82f657effc2a02d10d16fd96471a2079475201d extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "search_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"solo\">";
        // line 3
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
        echo "</h2>

";
        // line 5
        // line 6
        echo "<form method=\"get\" action=\"";
        echo ($context["S_SEARCH_ACTION"] ?? null);
        echo "\" data-focus=\"keywords\">

<div class=\"cat-head\">
\t<span>";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_QUERY");
        echo "</span>
</div>
<div class=\"panel\">
\t<div class=\"inner\">

\t";
        // line 14
        // line 15
        echo "\t<fieldset>
\t";
        // line 16
        // line 17
        echo "\t<dl>
\t\t<dt><label for=\"keywords\">";
        // line 18
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_KEYWORDS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_KEYWORDS_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"search\" class=\"inputbox\" name=\"keywords\" id=\"keywords\" size=\"40\" title=\"";
        // line 19
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_KEYWORDS");
        echo "\" /></dd>
\t\t<dd><label for=\"terms1\"><input type=\"radio\" name=\"terms\" id=\"terms1\" value=\"all\" checked=\"checked\" /> ";
        // line 20
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ALL_TERMS");
        echo "</label></dd>
\t\t<dd><label for=\"terms2\"><input type=\"radio\" name=\"terms\" id=\"terms2\" value=\"any\" /> ";
        // line 21
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ANY_TERMS");
        echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"author\">";
        // line 24
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_AUTHOR");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_AUTHOR_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"search\" class=\"inputbox\" name=\"author\" id=\"author\" size=\"40\" title=\"";
        // line 25
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_AUTHOR");
        echo "\" /></dd>
\t</dl>
\t";
        // line 27
        // line 28
        echo "\t</fieldset>
\t";
        // line 29
        // line 30
        echo "
\t</div>
</div>

<div class=\"cat-head\">
\t<span>";
        // line 35
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_OPTIONS");
        echo "</span>
</div>
<div class=\"panel bg2\">
\t<div class=\"inner\">

\t";
        // line 40
        // line 41
        echo "\t<fieldset>
\t";
        // line 42
        // line 43
        echo "\t<dl>
\t\t<dt><label for=\"search_forum\">";
        // line 44
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_FORUMS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_FORUMS_EXPLAIN");
        echo "</span></dt>
\t\t<dd><select name=\"fid[]\" id=\"search_forum\" multiple=\"multiple\" size=\"8\" title=\"";
        // line 45
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_FORUMS");
        echo "\">";
        echo ($context["S_FORUM_OPTIONS"] ?? null);
        echo "</select></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"search_child1\">";
        // line 48
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_SUBFORUMS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"search_child1\"><input type=\"radio\" name=\"sc\" id=\"search_child1\" value=\"1\" checked=\"checked\" /> ";
        // line 50
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t<label for=\"search_child2\"><input type=\"radio\" name=\"sc\" id=\"search_child2\" value=\"0\" /> ";
        // line 51
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"sf1\">";
        // line 55
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_WITHIN");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd><label for=\"sf1\"><input type=\"radio\" name=\"sf\" id=\"sf1\" value=\"all\" checked=\"checked\" /> ";
        // line 56
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_TITLE_MSG");
        echo "</label></dd>
\t\t<dd><label for=\"sf2\"><input type=\"radio\" name=\"sf\" id=\"sf2\" value=\"msgonly\" /> ";
        // line 57
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_MSG_ONLY");
        echo "</label></dd>
\t\t<dd><label for=\"sf3\"><input type=\"radio\" name=\"sf\" id=\"sf3\" value=\"titleonly\" /> ";
        // line 58
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_TITLE_ONLY");
        echo "</label></dd>
\t\t<dd><label for=\"sf4\"><input type=\"radio\" name=\"sf\" id=\"sf4\" value=\"firstpost\" /> ";
        // line 59
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_FIRST_POST");
        echo "</label></dd>
\t</dl>
\t";
        // line 61
        // line 62
        echo "
\t<hr class=\"dashed\" />

\t";
        // line 65
        // line 66
        echo "\t<dl>
\t\t<dt><label for=\"show_results1\">";
        // line 67
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_RESULTS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"show_results1\"><input type=\"radio\" name=\"sr\" id=\"show_results1\" value=\"posts\" checked=\"checked\" /> ";
        // line 69
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
        echo "</label>
\t\t\t<label for=\"show_results2\"><input type=\"radio\" name=\"sr\" id=\"show_results2\" value=\"topics\" /> ";
        // line 70
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"sd\">";
        // line 74
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESULT_SORT");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd>";
        // line 75
        echo ($context["S_SELECT_SORT_KEY"] ?? null);
        echo "&nbsp;
\t\t\t<label for=\"sa\"><input type=\"radio\" name=\"sd\" id=\"sa\" value=\"a\" /> ";
        // line 76
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_ASCENDING");
        echo "</label>
\t\t\t<label for=\"sd\"><input type=\"radio\" name=\"sd\" id=\"sd\" value=\"d\" checked=\"checked\" /> ";
        // line 77
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_DESCENDING");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
        // line 81
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESULT_DAYS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd>";
        // line 82
        echo ($context["S_SELECT_SORT_DAYS"] ?? null);
        echo "</dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
        // line 85
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_FIRST");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"ch\" title=\"";
        // line 86
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_FIRST");
        echo "\">";
        echo ($context["S_CHARACTER_OPTIONS"] ?? null);
        echo "</select> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_CHARACTERS");
        echo "</dd>
\t</dl>
\t";
        // line 88
        // line 89
        echo "\t</fieldset>
\t";
        // line 90
        // line 91
        echo "
\t</div>
</div>

<div class=\"panel bg3\">
\t<div class=\"inner\">

\t<fieldset class=\"submit-buttons\">
\t\t";
        // line 99
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 100
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
        echo "\" class=\"button1\" />
\t</fieldset>

\t</div>
</div>

</form>
";
        // line 107
        // line 108
        echo "
";
        // line 109
        // line 110
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "recentsearch", array()))) {
            // line 111
            echo "<div class=\"forumbg forumbg-table\">
\t<div class=\"inner\">

\t<table class=\"table1\">
\t<thead>
\t<tr>
\t\t<th colspan=\"2\" class=\"name\">";
            // line 117
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RECENT_SEARCHES");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "recentsearch", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["recentsearch"]) {
                // line 122
                echo "\t\t<tr class=\"";
                if (($this->getAttribute($context["recentsearch"], "S_ROW_COUNT", array()) % 2 == 0)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                echo "\">
\t\t\t<td><a href=\"";
                // line 123
                echo $this->getAttribute($context["recentsearch"], "U_KEYWORDS", array());
                echo "\">";
                echo $this->getAttribute($context["recentsearch"], "KEYWORDS", array());
                echo "</a></td>
\t\t\t<td class=\"active\">";
                // line 124
                echo $this->getAttribute($context["recentsearch"], "TIME", array());
                echo "</td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 127
                echo "\t\t<tr class=\"bg1\">
\t\t\t<td colspan=\"2\">";
                // line 128
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_RECENT_SEARCHES");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recentsearch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "\t</tbody>
\t</table>

\t</div>
</div>
";
        }
        // line 137
        // line 138
        echo "
";
        // line 139
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_body.html", 139)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 139,  352 => 138,  351 => 137,  343 => 131,  334 => 128,  331 => 127,  323 => 124,  317 => 123,  308 => 122,  303 => 121,  296 => 117,  288 => 111,  286 => 110,  285 => 109,  282 => 108,  281 => 107,  271 => 100,  265 => 99,  255 => 91,  254 => 90,  251 => 89,  250 => 88,  241 => 86,  236 => 85,  230 => 82,  225 => 81,  218 => 77,  214 => 76,  210 => 75,  205 => 74,  198 => 70,  194 => 69,  188 => 67,  185 => 66,  184 => 65,  179 => 62,  178 => 61,  173 => 59,  169 => 58,  165 => 57,  161 => 56,  156 => 55,  149 => 51,  145 => 50,  139 => 48,  131 => 45,  124 => 44,  121 => 43,  120 => 42,  117 => 41,  116 => 40,  108 => 35,  101 => 30,  100 => 29,  97 => 28,  96 => 27,  91 => 25,  84 => 24,  78 => 21,  74 => 20,  70 => 19,  63 => 18,  60 => 17,  59 => 16,  56 => 15,  55 => 14,  47 => 9,  40 => 6,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "search_body.html", "");
    }
}
