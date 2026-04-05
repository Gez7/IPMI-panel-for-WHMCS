<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* server/privileges/privileges_summary.twig */
class __TwigTemplate_361085972c4e09f81fd2c94612ea8033 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<form class=\"submenu-item\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges");
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["form_id"]) || array_key_exists("form_id", $context) ? $context["form_id"] : (function () { throw new RuntimeError('Variable "form_id" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\" method=\"post\">
    ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "
    <input type=\"hidden\" name=\"username\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"hostname\" value=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "\">

    <div class=\"card mb-3\">
        <div class=\"card-header js-submenu-label\" data-submenu-label=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sub_menu_label"]) || array_key_exists("sub_menu_label", $context) ? $context["sub_menu_label"] : (function () { throw new RuntimeError('Variable "sub_menu_label" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "\">
            ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["legend"]) || array_key_exists("legend", $context) ? $context["legend"] : (function () { throw new RuntimeError('Variable "legend" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "
        </div>

        <div class=\"card-body\">
        <table class=\"table table-striped table-hover w-auto\">
            <thead>
                <tr>
                    <th scope=\"col\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type_label"]) || array_key_exists("type_label", $context) ? $context["type_label"] : (function () { throw new RuntimeError('Variable "type_label" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "</th>
                    <th scope=\"col\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Privileges"), "html", null, true);
        yield "</th>
                    <th scope=\"col\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Grant"), "html", null, true);
        yield "</th>
                    ";
        // line 18
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 18, $this->source); })()) == "database")) {
            // line 19
            yield "                        <th scope=\"col\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table-specific privileges"), "html", null, true);
            yield "</th>
                    ";
        } elseif ((        // line 20
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 20, $this->source); })()) == "table")) {
            // line 21
            yield "                        <th scope=\"col\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Column-specific privileges"), "html", null, true);
            yield "</th>
                    ";
        }
        // line 23
        yield "                    <th scope=\"col\" colspan=\"2\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Action"), "html", null, true);
        yield "</th>
                </tr>
            </thead>

            <tbody>
                ";
        // line 28
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["privileges"]) || array_key_exists("privileges", $context) ? $context["privileges"] : (function () { throw new RuntimeError('Variable "privileges" does not exist.', 28, $this->source); })())) == 0)) {
            // line 29
            yield "                    ";
            $context["colspan"] = ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 29, $this->source); })()) == "database")) ? (7) : (((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 29, $this->source); })()) == "table")) ? (6) : (5))));
            // line 30
            yield "                    <tr>
                        <td class=\"text-center\" colspan=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["colspan"]) || array_key_exists("colspan", $context) ? $context["colspan"] : (function () { throw new RuntimeError('Variable "colspan" does not exist.', 31, $this->source); })()), "html", null, true);
            yield "\"><em>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("None"), "html", null, true);
            yield "</em></td>
                    </tr>
                ";
        } else {
            // line 34
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["privileges"]) || array_key_exists("privileges", $context) ? $context["privileges"] : (function () { throw new RuntimeError('Variable "privileges" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["privilege"]) {
                // line 35
                yield "                        <tr>
                            <td>";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "name", [], "array", false, false, false, 36), "html", null, true);
                yield "</td>
                            <td><code>";
                // line 37
                yield CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "privileges", [], "array", false, false, false, 37);
                yield "</code></td>
                            <td>";
                // line 38
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "grant", [], "array", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true)));
                yield "</td>

                            ";
                // line 40
                if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 40, $this->source); })()) == "database")) {
                    // line 41
                    yield "                                <td>";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "table_privs", [], "array", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true)));
                    yield "</td>
                            ";
                } elseif ((                // line 42
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 42, $this->source); })()) == "table")) {
                    // line 43
                    yield "                                <td>";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "column_privs", [], "array", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true)));
                    yield "</td>
                            ";
                }
                // line 45
                yield "
                            <td>";
                // line 46
                yield CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "edit_link", [], "array", false, false, false, 46);
                yield "</td>
                            <td>";
                // line 47
                yield CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "revoke_link", [], "array", false, false, false, 47);
                yield "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['privilege'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "                ";
        }
        // line 51
        yield "            </tbody>
        </table>

        ";
        // line 54
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 54, $this->source); })()) == "database")) {
            // line 55
            yield "            <label for=\"text_dbname\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add privileges on the following database(s):"), "html", null, true);
            yield "</label>";
            // line 57
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["databases"]) || array_key_exists("databases", $context) ? $context["databases"] : (function () { throw new RuntimeError('Variable "databases" does not exist.', 57, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 58
                yield "                <select class=\"resize-vertical\" name=\"pred_dbname[]\" multiple=\"multiple\">
                    ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["databases"]) || array_key_exists("databases", $context) ? $context["databases"] : (function () { throw new RuntimeError('Variable "databases" does not exist.', 59, $this->source); })()));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["database"]) {
                    // line 60
                    yield "                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["escaped_databases"]) || array_key_exists("escaped_databases", $context) ? $context["escaped_databases"] : (function () { throw new RuntimeError('Variable "escaped_databases" does not exist.', 60, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 60), [], "array", false, false, false, 60), "html", null, true);
                    yield "\">
                            ";
                    // line 61
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["database"], "html", null, true);
                    yield "
                        </option>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['database'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                yield "                </select>
            ";
            }
            // line 67
            yield "<input type=\"text\" id=\"text_dbname\" name=\"dbname\">
            ";
            // line 68
            yield PhpMyAdmin\Html\Generator::showHint(\_gettext("Wildcards % and _ should be escaped with a \\ to use them literally."));
            yield "
        ";
        } elseif ((        // line 69
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 69, $this->source); })()) == "table")) {
            // line 70
            yield "            <input type=\"hidden\" name=\"dbname\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["escaped_database"]) || array_key_exists("escaped_database", $context) ? $context["escaped_database"] : (function () { throw new RuntimeError('Variable "escaped_database" does not exist.', 70, $this->source); })()), "html", null, true);
            yield "\">

            <label for=\"text_tablename\">";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add privileges on the following table:"), "html", null, true);
            yield "</label>";
            // line 74
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["tables"]) || array_key_exists("tables", $context) ? $context["tables"] : (function () { throw new RuntimeError('Variable "tables" does not exist.', 74, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 75
                yield "                <select name=\"pred_tablename\" class=\"autosubmit\">
                    <option value=\"\" selected>";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use text field"), "html", null, true);
                yield ":</option>
                    ";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tables"]) || array_key_exists("tables", $context) ? $context["tables"] : (function () { throw new RuntimeError('Variable "tables" does not exist.', 77, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
                    // line 78
                    yield "                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table"], "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table"], "html", null, true);
                    yield "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['table'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                yield "                </select>
            ";
            }
            // line 83
            yield "<input type=\"text\" id=\"text_tablename\" name=\"tablename\">
        ";
        } else {
            // line 85
            yield "            <input type=\"hidden\" name=\"dbname\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["escaped_database"]) || array_key_exists("escaped_database", $context) ? $context["escaped_database"] : (function () { throw new RuntimeError('Variable "escaped_database" does not exist.', 85, $this->source); })()), "html", null, true);
            yield "\">

            <label for=\"text_routinename\">";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add privileges on the following routine:"), "html", null, true);
            yield "</label>";
            // line 89
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["routines"]) || array_key_exists("routines", $context) ? $context["routines"] : (function () { throw new RuntimeError('Variable "routines" does not exist.', 89, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 90
                yield "                <select name=\"pred_routinename\" class=\"autosubmit\">
                    <option value=\"\" selected>";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use text field"), "html", null, true);
                yield ":</option>
                    ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["routines"]) || array_key_exists("routines", $context) ? $context["routines"] : (function () { throw new RuntimeError('Variable "routines" does not exist.', 92, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["routine"]) {
                    // line 93
                    yield "                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["routine"], "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["routine"], "html", null, true);
                    yield "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['routine'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                yield "                </select>
            ";
            }
            // line 98
            yield "<input type=\"text\" id=\"text_routinename\" name=\"routinename\">
        ";
        }
        // line 100
        yield "        </div>
    </div>

    <div>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
    </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/privileges/privileges_summary.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  340 => 104,  334 => 100,  330 => 98,  326 => 95,  315 => 93,  311 => 92,  307 => 91,  304 => 90,  302 => 89,  299 => 87,  293 => 85,  289 => 83,  285 => 80,  274 => 78,  270 => 77,  266 => 76,  263 => 75,  261 => 74,  258 => 72,  252 => 70,  250 => 69,  246 => 68,  243 => 67,  239 => 64,  222 => 61,  217 => 60,  200 => 59,  197 => 58,  195 => 57,  191 => 55,  189 => 54,  184 => 51,  181 => 50,  172 => 47,  168 => 46,  165 => 45,  159 => 43,  157 => 42,  152 => 41,  150 => 40,  145 => 38,  141 => 37,  137 => 36,  134 => 35,  129 => 34,  121 => 31,  118 => 30,  115 => 29,  113 => 28,  104 => 23,  98 => 21,  96 => 20,  91 => 19,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  67 => 8,  63 => 7,  57 => 4,  53 => 3,  49 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form class=\"submenu-item\" action=\"{{ url('/server/privileges') }}\" id=\"{{ form_id }}\" method=\"post\">
    {{ get_hidden_inputs() }}
    <input type=\"hidden\" name=\"username\" value=\"{{ username }}\">
    <input type=\"hidden\" name=\"hostname\" value=\"{{ hostname }}\">

    <div class=\"card mb-3\">
        <div class=\"card-header js-submenu-label\" data-submenu-label=\"{{ sub_menu_label }}\">
            {{ legend }}
        </div>

        <div class=\"card-body\">
        <table class=\"table table-striped table-hover w-auto\">
            <thead>
                <tr>
                    <th scope=\"col\">{{ type_label }}</th>
                    <th scope=\"col\">{{ t('Privileges') }}</th>
                    <th scope=\"col\">{{ t('Grant') }}</th>
                    {% if type == 'database' %}
                        <th scope=\"col\">{{ t('Table-specific privileges') }}</th>
                    {% elseif type == 'table' %}
                        <th scope=\"col\">{{ t('Column-specific privileges') }}</th>
                    {% endif %}
                    <th scope=\"col\" colspan=\"2\">{{ t('Action') }}</th>
                </tr>
            </thead>

            <tbody>
                {% if privileges|length == 0 %}
                    {% set colspan = type == 'database' ? 7 : (type == 'table' ? 6 : 5) %}
                    <tr>
                        <td class=\"text-center\" colspan=\"{{ colspan }}\"><em>{{ t('None') }}</em></td>
                    </tr>
                {% else %}
                    {% for privilege in privileges %}
                        <tr>
                            <td>{{ privilege['name'] }}</td>
                            <td><code>{{ privilege['privileges']|raw }}</code></td>
                            <td>{{ privilege['grant'] ? t('Yes') : t('No') }}</td>

                            {% if type == 'database' %}
                                <td>{{ privilege['table_privs'] ? t('Yes') : t('No') }}</td>
                            {% elseif type == 'table' %}
                                <td>{{ privilege['column_privs'] ? t('Yes') : t('No') }}</td>
                            {% endif %}

                            <td>{{ privilege['edit_link']|raw }}</td>
                            <td>{{ privilege['revoke_link']|raw }}</td>
                        </tr>
                    {% endfor %}
                {% endif %}
            </tbody>
        </table>

        {% if type == 'database' %}
            <label for=\"text_dbname\">{{ t('Add privileges on the following database(s):') }}</label>

            {%- if databases is not empty %}
                <select class=\"resize-vertical\" name=\"pred_dbname[]\" multiple=\"multiple\">
                    {% for database in databases %}
                        <option value=\"{{ escaped_databases[loop.index0] }}\">
                            {{ database }}
                        </option>
                    {% endfor %}
                </select>
            {% endif -%}

            <input type=\"text\" id=\"text_dbname\" name=\"dbname\">
            {{ show_hint(t(\"Wildcards % and _ should be escaped with a \\\\ to use them literally.\")) }}
        {% elseif type == 'table' %}
            <input type=\"hidden\" name=\"dbname\" value=\"{{ escaped_database }}\">

            <label for=\"text_tablename\">{{ t('Add privileges on the following table:') }}</label>

            {%- if tables is not empty %}
                <select name=\"pred_tablename\" class=\"autosubmit\">
                    <option value=\"\" selected>{{ t('Use text field') }}:</option>
                    {% for table in tables %}
                        <option value=\"{{ table }}\">{{ table }}</option>
                    {% endfor %}
                </select>
            {% endif -%}

            <input type=\"text\" id=\"text_tablename\" name=\"tablename\">
        {% else %}
            <input type=\"hidden\" name=\"dbname\" value=\"{{ escaped_database }}\">

            <label for=\"text_routinename\">{{ t('Add privileges on the following routine:') }}</label>

            {%- if routines is not empty %}
                <select name=\"pred_routinename\" class=\"autosubmit\">
                    <option value=\"\" selected>{{ t('Use text field') }}:</option>
                    {% for routine in routines %}
                        <option value=\"{{ routine }}\">{{ routine }}</option>
                    {% endfor %}
                </select>
            {% endif -%}

            <input type=\"text\" id=\"text_routinename\" name=\"routinename\">
        {% endif %}
        </div>
    </div>

    <div>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ t('Go') }}\">
    </div>
</form>
", "server/privileges/privileges_summary.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/privileges_summary.twig");
    }
}
